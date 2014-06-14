<?php

/* emhEcommerceBundle:Produits:detail.html.twig */
class __TwigTemplate_fa193347810e04568dd4578d85535107df9bfa6416e3bf1c8f52447aac2b01b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "
<h1>detail du produit</h1>

<p> nom du produit: ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")), "nomFr"), "html", null, true);
        echo " <br>
    description:    ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")), "descriptionFr"), "html", null, true);
        echo " <br>  
     prix:          ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")), "prix"), "html", null, true);
        echo " <br>
    <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/" . $this->getAttribute((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")), "image"))), "html", null, true);
        echo "\"<br>
</p>


<a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("emh_membres_achat", array("id" => $this->getAttribute((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")), "id"), "slug" => $this->getAttribute((isset($context["sites"]) ? $context["sites"] : $this->getContext($context, "sites")), "slug"))), "html", null, true);
        echo "\">Ajout au panier </a> <br>



";
    }

    public function getTemplateName()
    {
        return "emhEcommerceBundle:Produits:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 26,  48 => 22,  44 => 21,  40 => 20,  36 => 19,  31 => 16,  28 => 15,);
    }
}
