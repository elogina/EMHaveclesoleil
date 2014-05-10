<?php

/* emhInscriptionBundle:Formations:liste.html.twig */
class __TwigTemplate_f2acb611fac3a4466556384ef24b013a60b086d4bf276408b2e1c73500ab06db extends Twig_Template
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
        echo "<h1>liste des formations</h1> <br>

";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formations"]) ? $context["formations"] : $this->getContext($context, "formations")));
        foreach ($context['_seq'] as $context["_key"] => $context["formations"]) {
            // line 4
            echo "

<ul>
    <li>
            <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("emh_formation_detail", array("id" => $this->getAttribute((isset($context["formations"]) ? $context["formations"] : $this->getContext($context, "formations")), "id"))), "html", null, true);
            echo "\">
                    ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formations"]) ? $context["formations"] : $this->getContext($context, "formations")), "nomFr"), "html", null, true);
            echo "
                </a>
    </li>
</ul>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formations'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "emhInscriptionBundle:Formations:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 9,  33 => 8,  27 => 4,  23 => 3,  19 => 1,);
    }
}
