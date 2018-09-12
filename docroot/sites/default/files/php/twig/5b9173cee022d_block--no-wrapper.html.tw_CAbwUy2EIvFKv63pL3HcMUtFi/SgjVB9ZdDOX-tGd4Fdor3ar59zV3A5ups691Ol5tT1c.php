<?php

/* block--no-wrapper.html.twig */
class __TwigTemplate_e82a4bf043653a219d7ad45457698de2ef69d8f3c98323d1c0eb32117a92f27c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@tym/containers/no-wrapper/no-wrapper.twig", "block--no-wrapper.html.twig", 1);
        $this->blocks = array(
            'heading' => array($this, 'block_heading'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@tym/containers/no-wrapper/no-wrapper.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 31, "set" => 32);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'set'),
                array(),
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 29
    public function block_heading($context, array $blocks = array())
    {
        // line 30
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "
  ";
        // line 31
        if (($context["label"] ?? null)) {
            // line 32
            echo "    ";
            $context["heading"] = ($context["label"] ?? null);
            // line 33
            echo "    ";
            $context["headingAttributes"] = ($context["title_attributes"] ?? null);
            // line 34
            echo "    ";
            $this->displayParentBlock("heading", $context, $blocks);
            echo "
  ";
        }
        // line 36
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "
";
    }

    public function getTemplateName()
    {
        return "block--no-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 36,  68 => 34,  65 => 33,  62 => 32,  60 => 31,  55 => 30,  52 => 29,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "block--no-wrapper.html.twig", "themes/custom/tym/templates/block/block--no-wrapper.html.twig");
    }
}
