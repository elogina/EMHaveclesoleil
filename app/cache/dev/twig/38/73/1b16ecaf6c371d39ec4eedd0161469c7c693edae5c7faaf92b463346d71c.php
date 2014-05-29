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
        echo "<h1>liste des Produits</h1> <br>

";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 19
            echo "

<ul>
   
    <li>
            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("emh_ecommerce_detail_produit", array("id" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id"), "slug" => $this->getAttribute((isset($context["sites"]) ? $context["sites"] : $this->getContext($context, "sites")), "slug"))), "html", null, true);
            echo "\">
                    ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "nomFr"), "html", null, true);
            echo "
                </a>
    </li>
   
</ul>

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
        return array (  49 => 25,  45 => 24,  38 => 19,  34 => 18,  30 => 16,  24 => 15,  20 => 13,);
    }
}
