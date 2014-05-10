<?php

/* emhInscriptionBundle:Formations:detail.html.twig */
class __TwigTemplate_e3c79ba49c1b817af1763aac708dfd1e927b9de955f09668d556a0c5a0953302 extends Twig_Template
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
        echo "<h1>detail de la formation</h1>

<p> ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formations"]) ? $context["formations"] : $this->getContext($context, "formations")), "nomFr"), "html", null, true);
        echo " <br>
    ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formations"]) ? $context["formations"] : $this->getContext($context, "formations")), "descriptionFr"), "html", null, true);
        echo "
</p>


<a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("emh_membres_inscription", array("id" => $this->getAttribute((isset($context["formations"]) ? $context["formations"] : $this->getContext($context, "formations")), "id"))), "html", null, true);
        echo "\">inscription</a> <br>

<a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("emh_membres_profil");
        echo "\">profil</a>";
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
        return array (  39 => 10,  34 => 8,  27 => 4,  23 => 3,  19 => 1,);
    }
}
