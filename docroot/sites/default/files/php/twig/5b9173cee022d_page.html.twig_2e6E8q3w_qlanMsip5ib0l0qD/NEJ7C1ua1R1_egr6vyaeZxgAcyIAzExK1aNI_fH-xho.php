<?php

/* themes/custom/tym/templates/layout/page.html.twig */
class __TwigTemplate_cffaf2e2ece9cae1d37a5c54415fe3f1d07efebce839ee3fda1e54b1701d69af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 59, "set" => 60);
        $filters = array();
        $functions = array("attach_library" => 48);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'set'),
                array(),
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

        // line 47
        echo "
";
        // line 48
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("tym/layouts"), "html", null, true));
        echo "
<div class=\"layout-center\">

  <header class=\"header\" role=\"banner\">
    ";
        // line 52
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
        echo "
    ";
        // line 53
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "secondary_menu", array()), "html", null, true));
        echo "
  </header>

  <div class=\"layout-3col\">

    ";
        // line 59
        echo "    ";
        if (($this->getAttribute(($context["page"] ?? null), "sidebar_first", array()) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()))) {
            // line 60
            echo "      ";
            $context["content_class"] = "layout-3col__right-content";
            // line 61
            echo "      ";
            $context["sidebar_first_class"] = "layout-3col__first-left-sidebar";
            // line 62
            echo "      ";
            $context["sidebar_second_class"] = "layout-3col__second-left-sidebar";
            // line 63
            echo "    ";
        } elseif ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 64
            echo "      ";
            $context["content_class"] = "layout-3col__left-content";
            // line 65
            echo "      ";
            $context["sidebar_first_class"] = "";
            // line 66
            echo "      ";
            $context["sidebar_second_class"] = "layout-3col__right-sidebar";
            // line 67
            echo "    ";
        } elseif ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 68
            echo "      ";
            $context["content_class"] = "layout-3col__right-content";
            // line 69
            echo "      ";
            $context["sidebar_first_class"] = "layout-3col__left-sidebar";
            // line 70
            echo "      ";
            $context["sidebar_second_class"] = "";
            // line 71
            echo "    ";
        } else {
            // line 72
            echo "      ";
            $context["content_class"] = "layout-3col__full";
            // line 73
            echo "      ";
            $context["sidebar_first_class"] = "";
            // line 74
            echo "      ";
            $context["sidebar_second_class"] = "";
            // line 75
            echo "    ";
        }
        // line 76
        echo "
    <div class=\"layout-3col__full\">
      ";
        // line 78
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "primary_menu", array()), "html", null, true));
        echo "
    </div>

    <main class=\"";
        // line 81
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_class"] ?? null), "html", null, true));
        echo "\" role=\"main\">

      ";
        // line 83
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
        echo "
      ";
        // line 84
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumb", array()), "html", null, true));
        echo "
      <a href=\"#skip-link\" class=\"visually-hidden visually-hidden--focusable\" id=\"main-content\">Back to top</a>";
        // line 86
        echo "      ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "title", array()), "html", null, true));
        echo "
      ";
        // line 87
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", array()), "html", null, true));
        echo "
      ";
        // line 88
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "

    </main>

    ";
        // line 92
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 93
            echo "      <aside class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebar_first_class"] ?? null), "html", null, true));
            echo "\" role=\"complementary\">
        ";
            // line 94
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
            echo "
      </aside>
    ";
        }
        // line 97
        echo "
    ";
        // line 98
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 99
            echo "      <aside class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebar_second_class"] ?? null), "html", null, true));
            echo "\" role=\"complementary\">
        ";
            // line 100
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
            echo "
      </aside>
    ";
        }
        // line 103
        echo "
  </div>

  ";
        // line 106
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
        echo "

</div>";
        // line 109
        echo "
";
        // line 110
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "bottom", array()), "html", null, true));
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/custom/tym/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 110,  194 => 109,  189 => 106,  184 => 103,  178 => 100,  173 => 99,  171 => 98,  168 => 97,  162 => 94,  157 => 93,  155 => 92,  148 => 88,  144 => 87,  139 => 86,  135 => 84,  131 => 83,  126 => 81,  120 => 78,  116 => 76,  113 => 75,  110 => 74,  107 => 73,  104 => 72,  101 => 71,  98 => 70,  95 => 69,  92 => 68,  89 => 67,  86 => 66,  83 => 65,  80 => 64,  77 => 63,  74 => 62,  71 => 61,  68 => 60,  65 => 59,  57 => 53,  53 => 52,  46 => 48,  43 => 47,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/tym/templates/layout/page.html.twig", "/Users/vipomx/Sites/chinolab/terrenos/site/docroot/themes/custom/tym/templates/layout/page.html.twig");
    }
}
