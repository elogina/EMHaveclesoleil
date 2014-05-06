<?php

/* emhcmsPrincipalBundle:Rubriques:add.html.twig */
class __TwigTemplate_edfd306292ed88dd34dfc0523565b100e479fd23bcb99b1843baa2ee42881d2f extends Twig_Template
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
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("cms_principal_rubrique_add");
        echo "\" method=\"post\">
               ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo " 
    <p><input type=\"submit\"/></p>
</form>






 Connecté en tant que ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "emhcmsPrincipalBundle:Rubriques:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 11,  24 => 2,  19 => 1,);
    }
}
