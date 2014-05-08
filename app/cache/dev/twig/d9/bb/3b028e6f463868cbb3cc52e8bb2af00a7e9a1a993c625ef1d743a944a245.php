<?php

/* emhEcommerceBundle:Produits:add.html.twig */
class __TwigTemplate_d9bb3b028e6f463868cbb3cc52e8bb2af00a7e9a1a993c625ef1d743a944a245 extends Twig_Template
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
        // line 3
        echo $this->env->getExtension('routing')->getPath("emh_ecommerce_add_formation");
        echo "\" method=\"post\">
               ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo " 
                <p><input type=\"submit\"/></p>
            </form>
           
  



 
";
    }

    public function getTemplateName()
    {
        return "emhEcommerceBundle:Produits:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  23 => 3,  19 => 1,);
    }
}
