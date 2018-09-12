<?php

/* themes/custom/tym/templates/layout/html.html.twig */
class __TwigTemplate_f9df8712543cd4dc6b32facaa912e74abe8ce79fec4785d547f90489fdfdca2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@tym/base/root/base-root.twig", "themes/custom/tym/templates/layout/html.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@tym/base/root/base-root.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 28, "include" => 46);
        $filters = array("clean_class" => 30, "safe_join" => 35, "raw" => 38, "t" => 49);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'include'),
                array('clean_class', 'safe_join', 'raw', 't'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 28
        $context["attributes"] = $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => array(0 => ((        // line 29
($context["logged_in"] ?? null)) ? ("is-logged-in-user") : ("")), 1 => (( !        // line 30
($context["root_path"] ?? null)) ? ("is-path-frontpage") : (("is-path-" . \Drupal\Component\Utility\Html::getClass(($context["root_path"] ?? null))))), 2 => ((        // line 31
($context["node_type"] ?? null)) ? (("is-page-node-type-" . \Drupal\Component\Utility\Html::getClass(($context["node_type"] ?? null)))) : ("")), 3 => ((        // line 32
($context["db_offline"] ?? null)) ? ("is-db-offline") : ("")))), "method");
        // line 35
        $context["title"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->safeJoin($this->env, ($context["head_title"] ?? null), " | ");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 37
    public function block_head($context, array $blocks = array())
    {
        // line 38
        echo "  <head-placeholder token=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["placeholder_token"] ?? null)));
        echo "\">
  ";
        // line 39
        $this->displayParentBlock("head", $context, $blocks);
        echo "
  <css-placeholder token=\"";
        // line 40
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["placeholder_token"] ?? null)));
        echo "\">
  <js-placeholder token=\"";
        // line 41
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["placeholder_token"] ?? null)));
        echo "\">
";
    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
        // line 45
        echo "  ";
        // line 46
        $this->loadTemplate("@tym/navigation/skip-link/skip-link.twig", "themes/custom/tym/templates/layout/html.html.twig", 46)->display(array("modifier_class" => "visually-hidden visually-hidden--focusable", "url" => "#main-content", "text" => t("Skip to main content")));
        // line 52
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["page_top"] ?? null), "html", null, true));
        echo "
  ";
        // line 53
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["page"] ?? null), "html", null, true));
        echo "
  ";
        // line 54
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["page_bottom"] ?? null), "html", null, true));
        echo "
  <js-bottom-placeholder token=\"";
        // line 55
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["placeholder_token"] ?? null)));
        echo "\">
";
    }

    public function getTemplateName()
    {
        return "themes/custom/tym/templates/layout/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 55,  100 => 54,  96 => 53,  91 => 52,  89 => 46,  87 => 45,  84 => 44,  78 => 41,  74 => 40,  70 => 39,  65 => 38,  62 => 37,  58 => 1,  56 => 35,  54 => 32,  53 => 31,  52 => 30,  51 => 29,  50 => 28,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/tym/templates/layout/html.html.twig", "/Users/vipomx/Sites/chinolab/terrenos/site/docroot/themes/custom/tym/templates/layout/html.html.twig");
    }
}
