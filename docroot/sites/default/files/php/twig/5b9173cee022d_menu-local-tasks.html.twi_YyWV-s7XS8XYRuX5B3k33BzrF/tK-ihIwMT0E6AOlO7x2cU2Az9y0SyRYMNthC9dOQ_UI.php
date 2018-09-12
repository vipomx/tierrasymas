<?php

/* themes/custom/tym/templates/navigation/menu-local-tasks.html.twig */
class __TwigTemplate_4f332a5664f53774f8464d587e6d5dafc67be1ee3ad8ff92fcf0838131a6b5f6 extends Twig_Template
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
        $tags = array("if" => 14, "include" => 16);
        $filters = array("t" => 17);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'include'),
                array('t'),
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

        // line 14
        if (($context["primary"] ?? null)) {
            // line 15
            echo "  ";
            // line 16
            $this->loadTemplate("@tym/navigation/tabs/tabs.twig", "themes/custom/tym/templates/navigation/menu-local-tasks.html.twig", 16)->display(array("heading" => t("Primary tabs"), "modifier_class" => "tabs--primary", "tabs" =>             // line 19
($context["primary"] ?? null)));
        }
        // line 23
        if (($context["secondary"] ?? null)) {
            // line 24
            echo "  ";
            // line 25
            $this->loadTemplate("@tym/navigation/tabs/tabs.twig", "themes/custom/tym/templates/navigation/menu-local-tasks.html.twig", 25)->display(array("heading" => t("Secondary tabs"), "modifier_class" => "tabs--secondary", "tabs" =>             // line 28
($context["secondary"] ?? null)));
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/tym/templates/navigation/menu-local-tasks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 28,  55 => 25,  53 => 24,  51 => 23,  48 => 19,  47 => 16,  45 => 15,  43 => 14,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/tym/templates/navigation/menu-local-tasks.html.twig", "/Users/vipomx/Sites/chinolab/terrenos/site/docroot/themes/custom/tym/templates/navigation/menu-local-tasks.html.twig");
    }
}
