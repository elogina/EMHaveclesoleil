<?php

/* SonataAdminBundle:Button:history_button.html.twig */
class __TwigTemplate_d8d06259e56db9f2cc7a5d35b2734c5851b1ca2f844547b463aff2b5d55e5947 extends Twig_Template
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
        // line 11
        echo "
";
        // line 12
        if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "history"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
            // line 13
            echo "    <a class=\"btn sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "history", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
        <i class=\"icon-book\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_history", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:history_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 15,  24 => 13,  22 => 12,  19 => 11,  713 => 214,  707 => 211,  704 => 210,  702 => 209,  696 => 206,  686 => 205,  681 => 203,  669 => 201,  666 => 200,  663 => 199,  655 => 194,  652 => 193,  635 => 191,  618 => 190,  613 => 188,  608 => 187,  605 => 186,  602 => 185,  596 => 181,  592 => 179,  590 => 178,  585 => 177,  568 => 175,  551 => 174,  547 => 173,  542 => 172,  539 => 171,  536 => 170,  533 => 169,  530 => 168,  528 => 167,  525 => 166,  516 => 161,  512 => 159,  510 => 158,  507 => 157,  505 => 156,  502 => 155,  498 => 134,  492 => 132,  486 => 130,  483 => 129,  480 => 128,  473 => 150,  467 => 148,  465 => 147,  462 => 146,  456 => 143,  453 => 142,  451 => 141,  446 => 139,  430 => 137,  428 => 136,  425 => 135,  423 => 128,  414 => 127,  409 => 124,  403 => 121,  400 => 120,  398 => 119,  394 => 118,  388 => 117,  384 => 116,  377 => 115,  374 => 114,  371 => 113,  358 => 106,  349 => 103,  347 => 102,  342 => 101,  339 => 100,  336 => 99,  329 => 95,  326 => 93,  324 => 92,  321 => 91,  319 => 90,  311 => 89,  307 => 87,  297 => 84,  291 => 82,  289 => 81,  282 => 79,  272 => 76,  269 => 75,  250 => 67,  247 => 66,  243 => 65,  238 => 64,  233 => 62,  228 => 59,  208 => 57,  200 => 55,  191 => 50,  184 => 47,  178 => 45,  175 => 43,  173 => 42,  157 => 41,  152 => 38,  149 => 36,  146 => 34,  139 => 31,  118 => 28,  107 => 24,  95 => 20,  90 => 18,  76 => 13,  69 => 198,  64 => 184,  57 => 155,  52 => 113,  44 => 74,  42 => 62,  39 => 61,  34 => 53,  318 => 145,  312 => 143,  306 => 141,  303 => 140,  300 => 139,  292 => 135,  286 => 80,  274 => 77,  268 => 127,  263 => 71,  256 => 121,  248 => 116,  242 => 113,  236 => 63,  230 => 106,  224 => 103,  219 => 101,  214 => 99,  203 => 56,  197 => 54,  187 => 87,  182 => 85,  170 => 79,  165 => 77,  158 => 75,  153 => 72,  147 => 69,  144 => 33,  141 => 67,  138 => 61,  136 => 60,  132 => 59,  123 => 30,  120 => 56,  112 => 26,  110 => 25,  104 => 23,  86 => 43,  80 => 41,  72 => 199,  62 => 166,  54 => 154,  51 => 24,  43 => 20,  38 => 17,  370 => 100,  367 => 99,  361 => 107,  355 => 105,  352 => 94,  346 => 92,  343 => 91,  340 => 90,  332 => 97,  330 => 87,  327 => 86,  320 => 84,  315 => 83,  313 => 82,  310 => 81,  304 => 79,  302 => 78,  296 => 76,  293 => 75,  287 => 72,  283 => 70,  280 => 131,  277 => 78,  271 => 66,  265 => 126,  262 => 63,  260 => 124,  257 => 61,  254 => 68,  249 => 55,  246 => 54,  241 => 31,  223 => 58,  216 => 100,  209 => 96,  192 => 88,  188 => 21,  185 => 86,  180 => 104,  176 => 82,  174 => 60,  169 => 58,  166 => 57,  164 => 54,  160 => 76,  143 => 48,  137 => 47,  131 => 45,  128 => 58,  124 => 43,  121 => 29,  115 => 27,  113 => 39,  100 => 36,  83 => 35,  79 => 14,  77 => 20,  74 => 19,  68 => 16,  65 => 15,  63 => 14,  60 => 13,  56 => 12,  49 => 112,  46 => 21,  40 => 6,  37 => 54,  35 => 16,  32 => 13,  29 => 11,  23 => 1,  101 => 22,  98 => 21,  92 => 19,  87 => 17,  84 => 16,  81 => 15,  78 => 40,  75 => 39,  73 => 24,  70 => 33,  67 => 185,  59 => 165,  53 => 16,  50 => 15,  47 => 75,  12 => 34,);
    }
}
