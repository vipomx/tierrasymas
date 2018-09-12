<?php

/* themes/custom/tym/templates/content/node.html.twig */
class __TwigTemplate_7cfd5035b39af9d5e0510d8d3d129d89764a3189a08c676a48dee892946189de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@tym/containers/article/article.twig", "themes/custom/tym/templates/content/node.html.twig", 1);
        $this->blocks = array(
            'heading' => array($this, 'block_heading'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@tym/containers/article/article.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 61, "if" => 66, "trans" => 78, "include" => 83);
        $filters = array("t" => 84);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'trans', 'include'),
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

        // line 61
        $context["modifier_class"] = $this->getAttribute(($context["attributes"] ?? null), "class", array());
        // line 62
        $context["attributes"] = $this->getAttribute(($context["attributes"] ?? null), "removeAttribute", array(0 => "class"), "method");
        // line 74
        $context["footer"] = ((($context["display_submitted"] ?? null) || $this->getAttribute(($context["node"] ?? null), "in_preview", array())) ||  !$this->getAttribute(($context["node"] ?? null), "isPublished", array(), "method"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 64
    public function block_heading($context, array $blocks = array())
    {
        // line 65
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "
  ";
        // line 66
        if ( !($context["page"] ?? null)) {
            // line 67
            echo "    ";
            $context["heading"] = ($context["label"] ?? null);
            // line 68
            echo "    ";
            $context["headingAttributes"] = ($context["title_attributes"] ?? null);
            // line 69
            echo "    ";
            $this->displayParentBlock("heading", $context, $blocks);
            echo "
  ";
        }
        // line 71
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "
";
    }

    // line 75
    public function block_footer($context, array $blocks = array())
    {
        // line 76
        echo "  ";
        if (($context["display_submitted"] ?? null)) {
            // line 77
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["author_picture"] ?? null), "html", null, true));
            echo "
    ";
            // line 78
            echo t("Submitted by @author_name on @date", array("@author_name" => ($context["author_name"] ?? null), "@date" => ($context["date"] ?? null), ));
            // line 79
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["metadata"] ?? null), "html", null, true));
            echo "
  ";
        }
        // line 81
        echo "  ";
        if (($this->getAttribute(($context["node"] ?? null), "in_preview", array()) ||  !$this->getAttribute(($context["node"] ?? null), "isPublished", array(), "method"))) {
            // line 82
            echo "    ";
            // line 83
            $this->loadTemplate("@tym/components/watermark/watermark.twig", "themes/custom/tym/templates/content/node.html.twig", 83)->display(array("content" => (($this->getAttribute(            // line 84
($context["node"] ?? null), "in_preview", array())) ? (t("Preview")) : (t("Unpublished")))));
            // line 87
            echo "  ";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/tym/templates/content/node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 87,  114 => 84,  113 => 83,  111 => 82,  108 => 81,  102 => 79,  100 => 78,  95 => 77,  92 => 76,  89 => 75,  82 => 71,  76 => 69,  73 => 68,  70 => 67,  68 => 66,  63 => 65,  60 => 64,  56 => 1,  54 => 74,  52 => 62,  50 => 61,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/tym/templates/content/node.html.twig", "/Users/vipomx/Sites/chinolab/terrenos/site/docroot/themes/custom/tym/templates/content/node.html.twig");
    }
}
