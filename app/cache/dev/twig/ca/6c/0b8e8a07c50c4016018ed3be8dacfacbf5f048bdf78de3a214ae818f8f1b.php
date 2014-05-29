<?php

/* emhAgendaBundle:Agendas:liste.html.twig */
class __TwigTemplate_ca6c0b8e8a07c50c4016018ed3be8dacfacbf5f048bdf78de3a214ae818f8f1b extends Twig_Template
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
        // line 13
        echo "
 <ul>
    ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["agendas"]) ? $context["agendas"] : $this->getContext($context, "agendas")));
        foreach ($context['_seq'] as $context["_key"] => $context["agenda"]) {
            // line 16
            echo "            
            <li>
                
                           
              ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), "texteFr"), "html", null, true);
            echo "
            </li>

       
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agenda'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "emhAgendaBundle:Agendas:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 25,  33 => 20,  27 => 16,  23 => 15,  19 => 13,);
    }
}
