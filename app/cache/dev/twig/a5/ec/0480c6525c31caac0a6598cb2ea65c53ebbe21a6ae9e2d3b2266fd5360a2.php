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
        // line 1
        echo "
";
        // line 14
        echo "
    <ul>
    ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rubriques"]) ? $context["rubriques"] : $this->getContext($context, "rubriques")));
        foreach ($context['_seq'] as $context["_key"] => $context["rubrique"]) {
            // line 17
            echo "            ";
            if (($this->getAttribute((isset($context["sites"]) ? $context["sites"] : $this->getContext($context, "sites")), "id") == $this->getAttribute($this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "sites"), "id"))) {
                // line 18
                echo "            <li>
                <a href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cms_principal_page", array("slug" => $this->getAttribute((isset($context["sites"]) ? $context["sites"] : $this->getContext($context, "sites")), "slug"), "slugFr" => $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "slugFr"))), "html", null, true);
                echo "\">
                            ";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "nomFr"), "html", null, true);
                echo "
                </a>
            </li>

        ";
            }
            // line 25
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rubrique'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
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
        return array (  33 => 18,  30 => 17,  22 => 14,  19 => 1,  191 => 47,  188 => 45,  185 => 44,  180 => 41,  175 => 40,  170 => 37,  168 => 36,  161 => 33,  157 => 31,  151 => 30,  142 => 27,  137 => 26,  132 => 25,  128 => 24,  124 => 22,  107 => 17,  102 => 15,  98 => 14,  93 => 13,  74 => 5,  68 => 55,  66 => 44,  62 => 42,  57 => 40,  54 => 26,  52 => 33,  47 => 32,  45 => 10,  38 => 7,  32 => 5,  26 => 16,  119 => 20,  112 => 19,  106 => 37,  99 => 33,  96 => 32,  91 => 12,  88 => 11,  85 => 10,  80 => 6,  77 => 23,  71 => 22,  63 => 18,  59 => 41,  56 => 15,  53 => 14,  48 => 25,  43 => 9,  40 => 20,  36 => 19,  31 => 4,  28 => 3,);
    }
}
