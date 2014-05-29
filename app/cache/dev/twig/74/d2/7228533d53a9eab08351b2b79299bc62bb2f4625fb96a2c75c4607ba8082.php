<?php

/* emhcmsPrincipalBundle:Pages:index.html.twig */
class __TwigTemplate_74d27228533d53a9eab08351b2b79299bc62bb2f4625fb96a2c75c4607ba8082 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "

";
        // line 3
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>ASBL soleil site chapeau</h1>

              ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sites"]) ? $context["sites"] : $this->getContext($context, "sites")));
        foreach ($context['_seq'] as $context["_key"] => $context["site"]) {
            // line 7
            echo "                
                ";
            // line 8
            $context["found"] = false;
            // line 9
            echo "                
                    ";
            // line 10
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["rubriques"]) ? $context["rubriques"] : $this->getContext($context, "rubriques")));
            foreach ($context['_seq'] as $context["_key"] => $context["rubrique"]) {
                if (((isset($context["found"]) ? $context["found"] : $this->getContext($context, "found")) == false)) {
                    // line 11
                    echo "
                        ";
                    // line 12
                    if (($this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "id") == $this->getAttribute($this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "sites"), "id"))) {
                        // line 13
                        echo "
                             <p><a href='";
                        // line 14
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cms_principal_page", array("slug" => $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "slug"), "slugFr" => $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "slugFr"))), "html", null, true);
                        echo "'> ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nomFr"), "html", null, true);
                        echo "</a></p>
                             ";
                        // line 15
                        $context["found"] = true;
                        // line 16
                        echo "                        ";
                    }
                    // line 17
                    echo "                 ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rubrique'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['site'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "

";
    }

    public function getTemplateName()
    {
        return "emhcmsPrincipalBundle:Pages:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  83 => 19,  77 => 18,  70 => 17,  67 => 16,  65 => 15,  59 => 14,  56 => 13,  54 => 12,  51 => 11,  46 => 10,  43 => 9,  41 => 8,  38 => 7,  34 => 6,  30 => 4,  24 => 3,  20 => 1,);
    }
}
