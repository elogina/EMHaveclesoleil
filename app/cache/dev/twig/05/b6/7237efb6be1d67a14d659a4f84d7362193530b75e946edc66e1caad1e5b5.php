<?php

/* emhMembresBundle:Membres:index.html.twig */
class __TwigTemplate_05b67237efb6be1d67a14d659a4f84d7362193530b75e946edc66e1caad1e5b5 extends Twig_Template
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
        echo "<h1>User list</h1>

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

            ";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "formationsAteliers"));
            foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
                // line 12
                echo "    <li>
                ";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "nomFr"), "html", null, true);
                echo "
        <a href=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("emh_membres_desinscription", array("id" => $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "id"))), "html", null, true);
                echo "\">désinscription</a>
    </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
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
        return array (  75 => 19,  68 => 17,  59 => 14,  55 => 13,  52 => 12,  48 => 11,  43 => 9,  40 => 8,  36 => 7,  31 => 4,  28 => 3,);
    }
}
