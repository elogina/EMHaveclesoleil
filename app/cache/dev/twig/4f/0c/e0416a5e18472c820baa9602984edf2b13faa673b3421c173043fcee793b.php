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
            echo "
        ";
            // line 22
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("emhcmsPrincipalBundle:Article:listeParRubrique", array("slug" => $this->getAttribute((isset($context["sites"]) ? $context["sites"] : $this->getContext($context, "sites")), "slug"), "rubID" => $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "id"))));
            echo "

    ";
            // line 25
            echo "        ";
            if (($this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "choixFormation") == 1)) {
                // line 26
                echo "    
            ";
                // line 27
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("emhInscriptionBundle:Formation:liste", array("slug" => $this->getAttribute((isset($context["sites"]) ? $context["sites"] : $this->getContext($context, "sites")), "slug"))));
                echo "
        ";
            }
            // line 29
            echo "
";
            // line 31
            echo "             ";
            if (($this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "choixProduit") == 1)) {
                // line 32
                echo "    
            ";
                // line 33
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("emhEcommerceBundle:Produit:liste", array("slug" => $this->getAttribute((isset($context["sites"]) ? $context["sites"] : $this->getContext($context, "sites")), "slug"))));
                echo "
        ";
            }
        }
        // line 36
        echo "

    ";
        // line 39
        echo "   ";
        if ((($this->getAttribute((isset($context["sites"]) ? $context["sites"] : $this->getContext($context, "sites")), "id") == 1) || ($this->getAttribute((isset($context["sites"]) ? $context["sites"] : $this->getContext($context, "sites")), "id") == 3))) {
            // line 40
            echo "   agenda
        ";
            // line 41
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("emhAgendaBundle:Agenda:liste"));
            echo "
    ";
        }
        // line 43
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
        return array (  87 => 43,  82 => 41,  79 => 40,  76 => 39,  72 => 36,  66 => 33,  63 => 32,  60 => 31,  57 => 29,  52 => 27,  49 => 26,  46 => 25,  41 => 22,  38 => 21,  35 => 20,  28 => 16,);
    }
}
