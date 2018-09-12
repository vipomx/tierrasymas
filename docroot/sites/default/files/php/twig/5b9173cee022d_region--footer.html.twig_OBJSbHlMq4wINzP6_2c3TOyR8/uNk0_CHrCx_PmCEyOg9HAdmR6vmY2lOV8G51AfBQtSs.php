<?php

/* themes/custom/tym/templates/layout/region--footer.html.twig */
class __TwigTemplate_366945a7440041347ec117feb8bf7b6ba6eadfee761e84aae4a44334707036d6 extends Twig_Template
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
        $tags = array("if" => 15, "include" => 17);
        $filters = array("safe_join" => 18);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'include'),
                array('safe_join'),
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

        // line 15
        if (($context["content"] ?? null)) {
            // line 16
            echo "  ";
            // line 17
            $this->loadTemplate("@tym/components/footer/footer.twig", "themes/custom/tym/templates/layout/region--footer.html.twig", 17)->display(array("modifier_class" => $this->env->getExtension('Drupal\Core\Template\TwigExtension')->safeJoin($this->env, $this->getAttribute(            // line 18
($context["attributes"] ?? null), "class", array()), " "), "attributes" => $this->getAttribute(            // line 19
($context["attributes"] ?? null), "removeAttribute", array(0 => "class"), "method"), "content" =>             // line 20
($context["content"] ?? null)));
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/tym/templates/layout/region--footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 20,  49 => 19,  48 => 18,  47 => 17,  45 => 16,  43 => 15,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/tym/templates/layout/region--footer.html.twig", "/Users/vipomx/Sites/chinolab/terrenos/site/docroot/themes/custom/tym/templates/layout/region--footer.html.twig");
    }
}
