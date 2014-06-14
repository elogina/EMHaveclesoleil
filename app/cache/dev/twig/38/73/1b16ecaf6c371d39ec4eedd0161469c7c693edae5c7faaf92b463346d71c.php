<?php

/* emhEcommerceBundle:Produits:liste.html.twig */
class __TwigTemplate_38731b16ecaf6c371d39ec4eedd0161469c7c693edae5c7faaf92b463346d71c extends Twig_Template
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
        // line 13
        echo "

";
        // line 15
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "<h1>liste des Produits en vente</h1> <br>

        ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 19
            echo "

        <ul>

          ";
            // line 24
            echo "                ";
            if (($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "onOff") == 1)) {
                // line 25
                echo "              <li>
                    <a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("emh_ecommerce_detail_produit", array("id" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id"), "slug" => $this->getAttribute((isset($context["sites"]) ? $context["sites"] : $this->getContext($context, "sites")), "slug"))), "html", null, true);
                echo "\">
                            ";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "nomFr"), "html", null, true);
                echo "
                        </a>
                   </li>
                ";
            }
            // line 31
            echo "         

        </ul>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
        <h1>Galerie photos</h1> <br>
        ";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 39
            echo "            <li>
                    <img src=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/" . $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "image"))), "html", null, true);
            echo "\"
            </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "emhEcommerceBundle:Produits:liste.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  82 => 40,  75 => 38,  71 => 36,  61 => 31,  24 => 15,  20 => 13,  34 => 18,  30 => 16,  27 => 4,  23 => 3,  19 => 1,  191 => 47,  188 => 45,  185 => 44,  180 => 41,  175 => 40,  170 => 37,  168 => 36,  161 => 33,  157 => 31,  151 => 30,  142 => 27,  137 => 26,  132 => 25,  128 => 24,  124 => 22,  119 => 20,  112 => 19,  107 => 17,  102 => 15,  98 => 14,  93 => 13,  91 => 12,  88 => 11,  85 => 10,  80 => 6,  74 => 5,  66 => 44,  57 => 40,  54 => 27,  52 => 33,  45 => 10,  36 => 6,  32 => 5,  26 => 1,  84 => 41,  79 => 39,  76 => 38,  73 => 37,  68 => 55,  62 => 42,  59 => 41,  56 => 28,  50 => 26,  47 => 25,  44 => 24,  38 => 19,  35 => 20,  28 => 16,);
    }
}
