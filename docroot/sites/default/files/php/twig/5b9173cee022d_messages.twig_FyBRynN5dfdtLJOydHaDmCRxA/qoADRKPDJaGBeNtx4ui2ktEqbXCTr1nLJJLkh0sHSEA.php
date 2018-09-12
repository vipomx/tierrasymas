<?php

/* @tym/components/messages/messages.twig */
class __TwigTemplate_ef1805881f56e9eabb632f5196d6ed57f37dd498e8bb040ce03529651f9b7ffa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'heading' => array($this, 'block_heading'),
            'icon' => array($this, 'block_icon'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 15, "block" => 20, "include" => 29, "for" => 41);
        $filters = array("length" => 39, "first" => 46);
        $functions = array("attach_library" => 14);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'block', 'include', 'for'),
                array('length', 'first'),
                array('attach_library')
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

        // line 14
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("tym/messages"), "html", null, true));
        echo "
<div class=\"messages ";
        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["modifier_class"] ?? null), "html", null, true));
        echo "\" role=\"contentinfo\" ";
        if (($context["heading"] ?? null)) {
            echo "aria-label=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["heading"] ?? null), "html", null, true));
            echo "\"";
        }
        echo " ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
        echo ">
  ";
        // line 16
        if ((($context["type"] ?? null) == "error")) {
            // line 17
            echo "    <div role=\"alert\">
  ";
        }
        // line 19
        echo "
  ";
        // line 20
        $this->displayBlock('heading', $context, $blocks);
        // line 25
        echo "
  ";
        // line 26
        $this->displayBlock('icon', $context, $blocks);
        // line 37
        echo "
  ";
        // line 38
        $this->displayBlock('content', $context, $blocks);
        // line 49
        echo "
  ";
        // line 50
        if ((($context["type"] ?? null) == "error")) {
            // line 51
            echo "    </div>
  ";
        }
        // line 53
        echo "</div>
";
    }

    // line 20
    public function block_heading($context, array $blocks = array())
    {
        // line 21
        echo "    ";
        if (($context["heading"] ?? null)) {
            // line 22
            echo "      <h2 class=\"visually-hidden\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["heading"] ?? null), "html", null, true));
            echo "</h2>
    ";
        }
        // line 24
        echo "  ";
    }

    // line 26
    public function block_icon($context, array $blocks = array())
    {
        // line 27
        echo "    <div class=\"messages__icon\">
      ";
        // line 28
        if ((($context["type"] ?? null) == "error")) {
            // line 29
            echo "        ";
            $this->loadTemplate("@tym/components/messages/messages-icon-error.svg", "@tym/components/messages/messages.twig", 29)->display($context);
            // line 30
            echo "      ";
        } elseif ((($context["type"] ?? null) == "warning")) {
            // line 31
            echo "        ";
            $this->loadTemplate("@tym/components/messages/messages-icon-warning.svg", "@tym/components/messages/messages.twig", 31)->display($context);
            // line 32
            echo "      ";
        } else {
            // line 33
            echo "        ";
            $this->loadTemplate("@tym/components/messages/messages-icon-status.svg", "@tym/components/messages/messages.twig", 33)->display($context);
            // line 34
            echo "      ";
        }
        // line 35
        echo "    </div>
  ";
    }

    // line 38
    public function block_content($context, array $blocks = array())
    {
        // line 39
        echo "    ";
        if ((twig_length_filter($this->env, ($context["messages"] ?? null)) > 1)) {
            // line 40
            echo "      <ul class=\"messages__list\">
        ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["messages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 42
                echo "          <li class=\"messages__item\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["message"], "html", null, true));
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "      </ul>
    ";
        } else {
            // line 46
            echo "      ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_first($this->env, ($context["messages"] ?? null)), "html", null, true));
            echo "
    ";
        }
        // line 48
        echo "  ";
    }

    public function getTemplateName()
    {
        return "@tym/components/messages/messages.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 48,  170 => 46,  166 => 44,  157 => 42,  153 => 41,  150 => 40,  147 => 39,  144 => 38,  139 => 35,  136 => 34,  133 => 33,  130 => 32,  127 => 31,  124 => 30,  121 => 29,  119 => 28,  116 => 27,  113 => 26,  109 => 24,  103 => 22,  100 => 21,  97 => 20,  92 => 53,  88 => 51,  86 => 50,  83 => 49,  81 => 38,  78 => 37,  76 => 26,  73 => 25,  71 => 20,  68 => 19,  64 => 17,  62 => 16,  50 => 15,  46 => 14,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@tym/components/messages/messages.twig", "/Users/vipomx/Sites/chinolab/terrenos/site/docroot/themes/custom/tym/components/components/messages/messages.twig");
    }
}
