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
        $context['_seq'] = twig_ensure_traversable((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 4
            echo "
        <h2><a href=\"#\">";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "nomFr"), "html", null, true);
            echo "</a></h2>
        <p>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "texteFr"), "html", null, true);
            echo "</p>
      
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
        return array (  34 => 6,  30 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
