<?php

/* ::base.html.twig */
class __TwigTemplate_f9e4293e2e6e7a2e5d54f3c49f1874a92ff0b88239bedd1345bfc813b32d00ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'pied' => array($this, 'block_pied'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('menu', $context, $blocks);
        // line 16
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 18
        echo "        
    </body>
    ";
        // line 20
        $this->displayBlock('pied', $context, $blocks);
        // line 24
        echo "</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 10
    public function block_menu($context, array $blocks = array())
    {
        echo " 
       
        <div class=\"menu\">
              ";
        // line 13
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("emhcmsPrincipalBundle:Rubrique:menu", array("slug" => $this->getAttribute((isset($context["sites"]) ? $context["sites"] : $this->getContext($context, "sites")), "slug"))), array());
        // line 14
        echo "\t</div>
        ";
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        echo " ";
    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 20
    public function block_pied($context, array $blocks = array())
    {
        // line 21
        echo "    Pied de page
    <p><a href=''>faire un don</a><p>
    ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 21,  99 => 20,  94 => 17,  88 => 16,  83 => 14,  81 => 13,  74 => 10,  69 => 6,  63 => 5,  58 => 24,  56 => 20,  52 => 18,  49 => 17,  46 => 16,  44 => 10,  37 => 7,  35 => 6,  31 => 5,  25 => 1,);
    }
}
