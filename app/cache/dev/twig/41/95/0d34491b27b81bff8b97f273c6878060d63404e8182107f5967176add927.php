<?php

/* emhcmsPrincipalBundle:Rubriques:edit.html.twig */
class __TwigTemplate_41950d34491b27b81bff8b97f273c6878060d63404e8182107f5967176add927 extends Twig_Template
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
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cms_principal_rubrique_edit", array("id" => $this->getAttribute($this->getContext($context, "rubrique"), "id"))), "html", null, true);
        echo "\" method=\"post\">
               ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo " 
                <p><input type=\"submit\"/></p>
            </form>
   

 
";
    }

    public function getTemplateName()
    {
        return "emhcmsPrincipalBundle:Rubriques:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 5,  24 => 4,  19 => 1,);
    }
}
