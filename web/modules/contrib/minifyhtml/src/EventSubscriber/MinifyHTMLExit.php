<?php

namespace Drupal\minifyhtml\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;

/**
 * Minifies the HTML of the response.
 *
 * @see \Symfony\Component\EventDispatcher\EventSubscriberInterface
 */
class MinifyHTMLExit implements EventSubscriberInterface {

  /**
   * The content that this class minifies.
   *
   * @var string
   */
  private $content;

  /**
   * A list of placeholders for HTML elements that won't be minified.
   *
   * @var array
   */
  private $placeholders = [];

  /**
   * The placeholder token.
   *
   * @var string
   */
  private $token;

  /**
   * Config Factory object.
   *
   * @var \Drupal\Core\Config\ConfigFactoryInterface
   */
  private $config;

  /**
   * Time object.
   *
   * @var \Drupal\Component\Datetime\TimeInterface
   */
  private $time;

  /**
   * Logger Factory object.
   *
   * @var \Drupal\Core\Logger\LoggerChannelFactory
   */
  private $logger;

  /**
   * Abort flag, when dependencies have not been injected.
   *
   * @var bool
   */
  private $abort = FALSE;

  /**
   * Constructs a MinifyHTMLExit object.
   */
  public function __construct() {

    // To prevent warnings thrown by func_get_arg(), only attempt to get the
    // args if there are exactly 3.
    $arg_error = TRUE;
    if (func_num_args() == 3) {

      // Assigning the arguments this way prevents a signature mismatch exception
      // that will occur until the cache is cleared to update the service
      // definition. However, the cache cannot be cleared due to the exception.
      $this->config = func_get_arg(0);
      $this->time = func_get_arg(1);
      $this->logger = func_get_arg(2);

      if ($this->config) {
        $this->token = 'MINIFYHTML_' . md5($this->time->getRequestTime());
        $arg_error = FALSE;
      }
    }

    // Abort minification until cache is cleared.
    if ($arg_error) {
      drupal_set_message(t('Minify HTML has been disabled until the cache has been cleared.'), 'warning');
      $this->abort = TRUE;
    }
  }

  /**
   * Minifies the HTML.
   *
   * @param \Symfony\Component\HttpKernel\Event\FilterResponseEvent $event
   *   Response event object.
   */
  public function response(FilterResponseEvent $event) {
    if (!$this->abort && $this->config->get('system.performance')->get('minifyhtml.minify_html')) {
      $response = $event->getResponse();

      // Make sure that the following render classes are the only ones that
      // are minified.
      $allowed_response_classes = [
        'Drupal\big_pipe\Render\BigPipeResponse',
        'Drupal\Core\Render\HtmlResponse',
      ];
      if (in_array(get_class($response), $allowed_response_classes)) {
        $this->content = $response->getContent();
        $this->minify();
        $response->setContent($this->content);
      }
    }
  }

  /**
   * {@inheritdoc}
   */
  public static function getSubscribedEvents() {
    $events = [];

    $events[KernelEvents::RESPONSE][] = ['response', -10000];

    return $events;
  }

  /**
   * Helper function to minify HTML.
   */
  private function minify() {
    $callbacks = [
      'minifyhtmlPlaceholderCallbackTextarea' => '/\\s*<textarea(\\b[^>]*?>[\\s\\S]*?<\\/textarea>)\\s*/i',
      'minifyhtmlPlaceholderCallbackPre' => '/\\s*<pre(\\b[^>]*?>[\\s\\S]*?<\\/pre>)\\s*/i',
      'minifyhtmlPlaceholderCallbackIframe' => '/\\s*<iframe(\\b[^>]*?>[\\s\\S]*?<\\/iframe>)\\s*/i',
      'minifyhtmlPlaceholderCallbackScript' => '/\\s*<script(\\b[^>]*?>[\\s\\S]*?<\\/script>)\\s*/i',
      'minifyhtmlPlaceholderCallbackStyle' => '/\\s*<script(\\b[^>]*?>[\\s\\S]*?<\\/script>)\\s*/i',
    ];

    // Only strip HTML comments if required.
    if ($this->config->get('minifyhtml.config')->get('strip_comments')) {
      $callbacks['minifyhtmlRemoveHtmlComment'] = '/<!--([\\s\\S]*?)-->/';
    }

    foreach ($callbacks as $callback => $pattern) {
      $content = $this->minifyhtmlCallback($pattern, $callback);
      if (!is_null($content)) {
        $this->content = $content;
      }
    }

    // Minify the page.
    $this->minifyHtml();

    // Restore all values that are currently represented by a placeholder.
    if (!empty($this->placeholders)) {
      $this->content = str_replace(array_keys($this->placeholders), array_values($this->placeholders), $this->content);
    }
  }

  /**
   * Helper function to individually call our <tag> processors.
   *
   * @param string $pattern
   *   The pattern for the search.
   * @param string $callback
   *   The callback function to use.
   *
   * @return string
   *   The content with placeholders.
   */
  private function minifyhtmlCallback($pattern, $callback) {
    $content = preg_replace_callback($pattern, [$this, $callback], $this->content);

    if ($error = preg_last_error()) {
      $this->logger->get('minifyhtml')->error('Preg error. The error code is @error. You can view what this error code is by viewing http://php.net/manual/en/function.preg-last-error.php', ['@error' => $error]);
    }

    return $content;
  }

  /**
   * Helper function to add place holder for <textarea> tag.
   *
   * @param array $matches
   *   Matches from initial preg_replace().
   *
   * @return string
   *   The placeholder string.
   */
  private function minifyhtmlPlaceholderCallbackTextarea(array $matches) {
    return $this->minifyPlaceholderReplace(trim($matches[0]));
  }

  /**
   * Helper function to add place holder for <pre> tag.
   *
   * @param array $matches
   *   Matches from initial preg_replace().
   *
   * @return string
   *   The placeholder string.
   */
  private function minifyhtmlPlaceholderCallbackPre(array $matches) {
    return $this->minifyPlaceholderReplace(trim($matches[0]));
  }

  /**
   * Helper function to add place holder for <iframe> tag.
   *
   * @param array $matches
   *   Matches from initial preg_replace().
   *
   * @return string
   *   The placeholder string.
   */
  private function minifyhtmlPlaceholderCallbackIframe(array $matches) {
    $iframe = preg_replace('/^\\s+|\\s+$/m', '', $matches[0]);

    return $this->minifyPlaceholderReplace(trim($iframe));
  }

  /**
   * Helper function to add place holder for <script> tag.
   *
   * @param array $matches
   *   Matches from initial preg_replace().
   *
   * @return string
   *   The placeholder string.
   */
  private function minifyhtmlPlaceholderCallbackScript(array $matches) {
    $search = [];
    $replace = [];

    // Only strip multi-line comments in <script> if required.
    if ($this->config->get('minifyhtml.config')->get('strip_comments')) {
      $search[] = '!/\*.*?\*/!s';
      $replace[] = '';
    }

    // Trim each line.
    $search[] = '/^\\s+|\\s+$/m';
    $replace[] = "\n";

    // Remove multiple empty line.
    $search[] = '/\n(\s*\n)+/';
    $replace[] = "\n";

    $script = preg_replace($search, $replace, $matches[0]);

    return $this->minifyPlaceholderReplace(trim($script));
  }

  /**
   * Helper function to add place holder for <style> tag.
   *
   * @param array $matches
   *   Matches from initial preg_replace().
   *
   * @return string
   *   The placeholder string.
   */
  private function minifyhtmlPlaceholderCallbackStyle(array $matches) {
    $search = [];
    $replace = [];

    // Only strip multi-line comments in <style> if required.
    if ($this->config->get('minifyhtml.config')->get('strip_comments')) {
      $search[] = '!/\*.*?\*/!s';
      $replace[] = '';
    }

    // Trim each line.
    $search[] = '/^\\s+|\\s+$/m';
    $replace[] = '';

    $style = preg_replace($search, $replace, $matches[0]);

    return $this->minifyPlaceholderReplace(trim($style));
  }

  /**
   * Helper function to add tag key and value for further replacement.
   *
   * @param string $content
   *   String before the placeholder replacement.
   *
   * @return string
   *   The placeholder string.
   */
  private function minifyPlaceholderReplace($content) {
    $placeholder = '%' . $this->token . count($this->placeholders) . '%';
    $this->placeholders[$placeholder] = $content;

    return $placeholder;
  }

  /**
   * Helper function to remove HTML comments.
   *
   * Comments containing IE conditionals will be ignored.
   *
   * @param array $matches
   *   Matches from initial preg_replace().
   *
   * @return string
   *   String with removed HTML comments.
   */
  private function minifyhtmlRemoveHtmlComment(array $matches) {
    return (0 === strpos($matches[1], '[') || FALSE !== strpos($matches[1], '<![')) ? $matches[0] : '';
  }

  /**
   * Helper function to minify the HTML.
   */
  private function minifyHtml() {
    $search = [];
    $replace = [];

    // Remove whitespaces after tags, except space.
    $search[] = '/\>[^\S ]+/s';
    $replace[] = '>';

    // Remove whitespaces before tags, except space.
    $search[] = '/[^\S ]+\</s';
    $replace[] = '<';

    // Shorten multiple whitespace sequences.
    $search[] = '/(\s)+/s';
    $replace[] = '\\1';

    // Remove whitespaces around block/undisplayed elements.
    $search[] = '/\\s+(<\\/?(?:area|base(?:font)?|blockquote|body'
      . '|caption|center|col(?:group)?|dd|dir|div|dl|dt|fieldset|form'
      . '|frame(?:set)?|h[1-6]|head|hr|html|legend|li|link|map|menu|meta'
      . '|ol|opt(?:group|ion)|p|param|t(?:able|body|head|d|h||r|foot|itle)'
      . '|ul)\\b[^>]*>)/i';
    $replace[] = '$1';

    // Trim each line.
    $search[] = '/^\\s+|\\s+$/m';
    $replace[] = '';

    $minified = preg_replace($search, $replace, $this->content);

    // Only use minified content if there was not an error during minification.
    if (PREG_NO_ERROR === preg_last_error()) {
      $this->content = $minified;
    }
  }

}
