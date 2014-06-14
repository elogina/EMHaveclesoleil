<?php

/* TwigBundle:Exception:logs.html.twig */
class __TwigTemplate_3b2c996444de696ba79af12ee2107a0ae8136850f7ff744f3267a4f14bde2589 extends Twig_Template
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
        echo "<ol class=\"traces logs\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["logs"]) ? $context["logs"] : $this->getContext($context, "logs")));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if (($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priority") >= 400)) {
                echo " class=\"error\"";
            } elseif (($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priority") >= 300)) {
                echo " class=\"warning\"";
            }
            echo ">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priorityName"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "message"), "html", null, true);
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ol>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  87 => 20,  55 => 13,  25 => 4,  21 => 2,  94 => 22,  92 => 21,  89 => 20,  79 => 18,  75 => 17,  72 => 16,  64 => 12,  50 => 8,  41 => 9,  24 => 3,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  183 => 82,  173 => 74,  171 => 73,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  138 => 57,  136 => 56,  133 => 55,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  105 => 40,  101 => 24,  86 => 28,  69 => 25,  51 => 12,  49 => 19,  39 => 6,  78 => 40,  46 => 7,  44 => 10,  27 => 4,  33 => 5,  30 => 3,  22 => 2,  19 => 1,  191 => 47,  188 => 45,  185 => 44,  180 => 41,  175 => 40,  170 => 37,  168 => 72,  161 => 33,  157 => 31,  151 => 63,  142 => 59,  137 => 26,  132 => 25,  128 => 24,  124 => 22,  107 => 17,  102 => 15,  98 => 40,  93 => 9,  74 => 5,  68 => 14,  66 => 15,  62 => 23,  57 => 14,  54 => 21,  52 => 33,  47 => 32,  45 => 10,  38 => 7,  32 => 12,  26 => 3,  119 => 20,  112 => 42,  106 => 37,  99 => 33,  96 => 32,  91 => 31,  88 => 6,  85 => 19,  80 => 19,  77 => 23,  71 => 22,  63 => 18,  59 => 41,  56 => 9,  53 => 14,  48 => 25,  43 => 8,  40 => 8,  36 => 7,  31 => 5,  28 => 3,);
    }
}
