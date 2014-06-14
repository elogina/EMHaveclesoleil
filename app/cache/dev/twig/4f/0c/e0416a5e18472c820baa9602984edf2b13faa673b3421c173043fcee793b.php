<?php

/* emhcmsPrincipalBundle:Rubriques:detail.html.twig */
class __TwigTemplate_4f0ce0416a5e18472c820baa9602984edf2b13faa673b3421c173043fcee793b extends Twig_Template
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

    // line 16
    public function block_body($context, array $blocks = array())
    {
        echo " 
articles liés à la rubrique

";
        // line 20
        echo " ";
        if (($this->getAttribute((isset($context["sites"]) ? $context["sites"] : $this->getContext($context, "sites")), "id") == $this->getAttribute($this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "sites"), "id"))) {
            // line 21
            echo "        ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("emhcmsPrincipalBundle:Article:listeParRubrique", array("slug" => $this->getAttribute((isset($context["sites"]) ? $context["sites"] : $this->getContext($context, "sites")), "slug"), "rubID" => $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "id"))));
            echo "
  ";
        }
        // line 23
        echo "  
        ";
        // line 25
        echo "        ";
        if (($this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "choixFormation") == 1)) {
            // line 26
            echo "            ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("emhInscriptionBundle:Formation:liste", array("slug" => $this->getAttribute((isset($context["sites"]) ? $context["sites"] : $this->getContext($context, "sites")), "slug"))));
            echo "
        ";
        }
        // line 28
        echo "
        ";
        // line 30
        echo "        ";
        if (($this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "choixProduit") == 1)) {
            // line 31
            echo "           ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("emhEcommerceBundle:Produit:liste", array("slug" => $this->getAttribute((isset($context["sites"]) ? $context["sites"] : $this->getContext($context, "sites")), "slug"))));
            echo "
        ";
        }
        // line 33
        echo "


    ";
        // line 37
        echo "   ";
        if ((($this->getAttribute((isset($context["sites"]) ? $context["sites"] : $this->getContext($context, "sites")), "id") == 1) || ($this->getAttribute((isset($context["sites"]) ? $context["sites"] : $this->getContext($context, "sites")), "id") == 3))) {
            // line 38
            echo "   agenda
        ";
            // line 39
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("emhAgendaBundle:Agenda:liste"));
            echo "
    ";
        }
        // line 41
        echo "
";
    }

    public function getTemplateName()
    {
        return "emhcmsPrincipalBundle:Rubriques:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 41,  79 => 39,  76 => 38,  73 => 37,  68 => 33,  62 => 31,  59 => 30,  56 => 28,  50 => 26,  47 => 25,  44 => 23,  38 => 21,  35 => 20,  28 => 16,);
    }
}
