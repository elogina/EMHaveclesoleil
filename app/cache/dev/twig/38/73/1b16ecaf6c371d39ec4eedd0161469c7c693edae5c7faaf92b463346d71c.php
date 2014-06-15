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
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["achats"]) ? $context["achats"] : $this->getContext($context, "achats")));
            foreach ($context['_seq'] as $context["_key"] => $context["achat"]) {
                // line 20
                echo "                ";
                if (($this->getAttribute($this->getAttribute((isset($context["achat"]) ? $context["achat"] : $this->getContext($context, "achat")), "produits"), "id") == $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id"))) {
                    // line 21
                    echo "        <ul>

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
                // line 35
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['achat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
        <h1>Galerie photos</h1> <br>
        ";
        // line 39
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 40
            echo "            <li>
                    <img src=\"";
            // line 41
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
        return array (  96 => 41,  93 => 40,  89 => 39,  85 => 37,  79 => 36,  73 => 35,  67 => 31,  60 => 27,  56 => 26,  53 => 25,  50 => 24,  46 => 21,  43 => 20,  38 => 19,  34 => 18,  30 => 16,  24 => 15,  20 => 13,);
    }
}
