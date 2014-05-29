<?php

/* emhInscriptionBundle:Formations:liste.html.twig */
class __TwigTemplate_f2acb611fac3a4466556384ef24b013a60b086d4bf276408b2e1c73500ab06db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "

";
        // line 3
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>liste des formations</h1> <br>

";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formations"]) ? $context["formations"] : $this->getContext($context, "formations")));
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 7
            echo "

<ul>
    ";
            // line 10
            if (($this->getAttribute((isset($context["sites"]) ? $context["sites"] : $this->getContext($context, "sites")), "id") == $this->getAttribute($this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "sites"), "id"))) {
                // line 11
                echo "    <li>
            <a href=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("emh_formation_detail", array("id" => $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "id"), "slug" => $this->getAttribute((isset($context["sites"]) ? $context["sites"] : $this->getContext($context, "sites")), "slug"))), "html", null, true);
                echo "\">
                    ";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "nomFr"), "html", null, true);
                echo "
                </a>
    </li>
    ";
            }
            // line 17
            echo "</ul>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "emhInscriptionBundle:Formations:liste.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  59 => 17,  52 => 13,  48 => 12,  45 => 11,  43 => 10,  38 => 7,  34 => 6,  30 => 4,  24 => 3,  20 => 1,);
    }
}
