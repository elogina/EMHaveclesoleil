<?php

/* emhcmsPrincipalBundle:Articles:liste.html.twig */
class __TwigTemplate_d7fc61be84e0dad3708f0f3eeb7b8ce7bdce2aa1d3b9010d36d7f96959b9332d extends Twig_Template
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
        // line 1
        echo "

";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["article"]) ? $context["article"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 4
            echo "
        <h2><a href=\"#\">";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "nomFr"), "html", null, true);
            echo "</a></h2>
        <p>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "texteFr"), "html", null, true);
            echo "</p>
        <img src=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/" . $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "image"))), "html", null, true);
            echo "\"
      
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "emhcmsPrincipalBundle:Articles:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 6,  27 => 4,  23 => 3,  48 => 25,  40 => 20,  33 => 18,  30 => 5,  22 => 14,  19 => 1,  191 => 47,  188 => 45,  185 => 44,  180 => 41,  175 => 40,  170 => 37,  168 => 36,  161 => 33,  157 => 31,  151 => 30,  142 => 27,  137 => 26,  132 => 25,  128 => 24,  124 => 22,  119 => 20,  112 => 19,  107 => 17,  102 => 15,  98 => 14,  93 => 13,  91 => 12,  88 => 11,  85 => 10,  80 => 6,  74 => 5,  66 => 44,  57 => 40,  54 => 26,  52 => 33,  45 => 10,  36 => 19,  32 => 5,  26 => 16,  84 => 41,  79 => 39,  76 => 38,  73 => 37,  68 => 55,  62 => 42,  59 => 41,  56 => 28,  50 => 26,  47 => 32,  44 => 23,  38 => 7,  35 => 20,  28 => 16,);
    }
}
