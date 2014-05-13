<?php

/* emhcmsPrincipalBundle:Articles:edit.html.twig */
class __TwigTemplate_4ea545a4c2f88efb82303e34f8e43b8b1f524587a79b26231466ef3f294883e2 extends Twig_Template
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "            <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cms_principal_article_edit", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
        echo "\" method=\"post\">
               ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo " 
                <p><input type=\"submit\"/></p>
            </form>
   

 ";
    }

    public function getTemplateName()
    {
        return "emhcmsPrincipalBundle:Articles:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 5,  31 => 4,  28 => 3,);
    }
}
