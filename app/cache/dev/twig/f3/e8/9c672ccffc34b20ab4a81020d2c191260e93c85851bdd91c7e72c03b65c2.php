<?php

/* emhEcommerceBundle:Produits:edit.html.twig */
class __TwigTemplate_f3e89c672ccffc34b20ab4a81020d2c191260e93c85851bdd91c7e72c03b65c2 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("emh_ecommerce_edit_formation", array("id" => $this->getAttribute($this->getContext($context, "produit"), "id"))), "html", null, true);
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
        return "emhEcommerceBundle:Produits:edit.html.twig";
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
