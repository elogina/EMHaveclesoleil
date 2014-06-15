<?php

/* emhInscriptionBundle:Formations:confirmation.html.twig */
class __TwigTemplate_7371937f99e4c264fb304ca5bbe4a658d00814c7ca15ac4b5301a67f4faffde5 extends Twig_Template
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
<p>voulez vous confirmer votre achat?</p>

<a href='";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["paypal"]) ? $context["paypal"] : $this->getContext($context, "paypal")), "html", null, true);
        echo "'> achat sur paypal</a>

";
    }

    public function getTemplateName()
    {
        return "emhInscriptionBundle:Formations:confirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }
}
