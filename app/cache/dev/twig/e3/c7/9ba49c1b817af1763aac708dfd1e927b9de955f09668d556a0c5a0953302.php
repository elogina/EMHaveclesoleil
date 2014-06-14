<?php

/* emhInscriptionBundle:Formations:detail.html.twig */
class __TwigTemplate_e3c79ba49c1b817af1763aac708dfd1e927b9de955f09668d556a0c5a0953302 extends Twig_Template
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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<h1>detail de la formation</h1>

<p> ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formations"]) ? $context["formations"] : $this->getContext($context, "formations")), "nomFr"), "html", null, true);
        echo " <br>
    ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formations"]) ? $context["formations"] : $this->getContext($context, "formations")), "descriptionFr"), "html", null, true);
        echo "
</p>


<a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("emh_membres_inscription", array("id" => $this->getAttribute((isset($context["formations"]) ? $context["formations"] : $this->getContext($context, "formations")), "id"), "slug" => $this->getAttribute((isset($context["sites"]) ? $context["sites"] : $this->getContext($context, "sites")), "slug"))), "html", null, true);
        echo "\">inscription</a> <br>



";
    }

    public function getTemplateName()
    {
        return "emhInscriptionBundle:Formations:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 10,  39 => 6,  35 => 5,  31 => 3,  28 => 2,);
    }
}
