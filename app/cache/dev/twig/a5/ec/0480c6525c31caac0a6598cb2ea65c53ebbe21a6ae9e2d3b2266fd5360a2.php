<?php

/* emhcmsPrincipalBundle:Rubriques:menu.html.twig */
class __TwigTemplate_a5ec0480c6525c31caac0a6598cb2ea65c53ebbe21a6ae9e2d3b2266fd5360a2 extends Twig_Template
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
        // line 34
        echo "
    <ul>
    ";
        // line 36
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rubriques"]) ? $context["rubriques"] : $this->getContext($context, "rubriques")));
        foreach ($context['_seq'] as $context["_key"] => $context["rubrique"]) {
            // line 37
            echo "            ";
            if (($this->getAttribute((isset($context["sites"]) ? $context["sites"] : $this->getContext($context, "sites")), "id") == $this->getAttribute($this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "sites"), "id"))) {
                // line 38
                echo "            <li>
                <a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cms_principal_page", array("slug" => $this->getAttribute((isset($context["sites"]) ? $context["sites"] : $this->getContext($context, "sites")), "slug"), "slugFr" => $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "slugFr"))), "html", null, true);
                echo "\">
                            ";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "nomFr"), "html", null, true);
                echo "
                </a>
            </li>

        ";
            }
            // line 45
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rubrique'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "</ul>



";
    }

    public function getTemplateName()
    {
        return "emhcmsPrincipalBundle:Rubriques:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 40,  33 => 39,  27 => 37,  23 => 36,  19 => 34,  89 => 17,  83 => 16,  78 => 14,  76 => 13,  69 => 10,  64 => 6,  58 => 5,  51 => 46,  48 => 17,  45 => 45,  43 => 10,  36 => 7,  34 => 6,  30 => 38,  24 => 1,  72 => 36,  66 => 33,  63 => 32,  60 => 31,  57 => 29,  52 => 27,  49 => 26,  46 => 25,  41 => 22,  38 => 21,  35 => 20,  28 => 16,);
    }
}
