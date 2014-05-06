<?php

/* emhcmsPrincipalBundle:Articles:add.html.twig */
class __TwigTemplate_6dcb167cd0106f537256ae4b01e91db8df7b634a6a863d8c5c1ea704e17be929 extends Twig_Template
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
            <form action=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("cms_principal_article_add");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
               ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo " 
                <p><input type=\"submit\"/></p>
            </form>
           
  



 
";
    }

    public function getTemplateName()
    {
        return "emhcmsPrincipalBundle:Articles:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 2,  19 => 1,);
    }
}
