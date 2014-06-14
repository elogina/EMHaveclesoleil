<?php

/* emhMembresBundle:Membres:index.html.twig */
class __TwigTemplate_05b67237efb6be1d67a14d659a4f84d7362193530b75e946edc66e1caad1e5b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Panier de l'utilisateur</h1>

<ul>
        ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["membres"]) ? $context["membres"] : $this->getContext($context, "membres")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 8
            echo "
            ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "html", null, true);
            echo "
                   Mes inscriptions
                  ";
            // line 13
            echo "                 ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["inscriptions"]) ? $context["inscriptions"] : $this->getContext($context, "inscriptions")));
            foreach ($context['_seq'] as $context["_key"] => $context["inscription"]) {
                // line 14
                echo "                    ";
                if (($this->getAttribute((isset($context["inscription"]) ? $context["inscription"] : $this->getContext($context, "inscription")), "paye") == 0)) {
                    // line 15
                    echo "                        <li>
                             ";
                    // line 16
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["inscription"]) ? $context["inscription"] : $this->getContext($context, "inscription")), "formationsAteliers"), "nomFr"), "html", null, true);
                    echo "
                            ";
                    // line 18
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("emh_membres_formation_paypal", array("id" => $this->getAttribute($this->getAttribute((isset($context["inscription"]) ? $context["inscription"] : $this->getContext($context, "inscription")), "formationsAteliers"), "id"), "slug" => (isset($context["sites"]) ? $context["sites"] : $this->getContext($context, "sites")))), "html", null, true);
                    echo " \">confirmation de votre inscription</a>
                        </li>
                    
                    ";
                }
                // line 22
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inscription'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "                  Mes achats
                 ";
            // line 26
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["achats"]) ? $context["achats"] : $this->getContext($context, "achats")));
            foreach ($context['_seq'] as $context["_key"] => $context["achat"]) {
                // line 27
                echo "                    ";
                if (($this->getAttribute((isset($context["achat"]) ? $context["achat"] : $this->getContext($context, "achat")), "paye") == 0)) {
                    // line 28
                    echo "                            <li>
                               ";
                    // line 29
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["achat"]) ? $context["achat"] : $this->getContext($context, "achat")), "produits"), "nomFr"), "html", null, true);
                    echo "

                                ";
                    // line 32
                    echo "
                                 <a href=\" ";
                    // line 33
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("emh_membres_produit_paypal", array("id" => $this->getAttribute($this->getAttribute((isset($context["achat"]) ? $context["achat"] : $this->getContext($context, "achat")), "produits"), "id"), "slug" => (isset($context["sites"]) ? $context["sites"] : $this->getContext($context, "sites")))), "html", null, true);
                    echo "\">confirmation de votre achat</a>   
                            </li>
                     
                    ";
                }
                // line 37
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['achat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "


</ul>
  

";
    }

    public function getTemplateName()
    {
        return "emhMembresBundle:Membres:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 40,  112 => 38,  106 => 37,  99 => 33,  96 => 32,  91 => 29,  88 => 28,  85 => 27,  80 => 26,  77 => 23,  71 => 22,  63 => 18,  59 => 16,  56 => 15,  53 => 14,  48 => 13,  43 => 9,  40 => 8,  36 => 7,  31 => 4,  28 => 3,);
    }
}
