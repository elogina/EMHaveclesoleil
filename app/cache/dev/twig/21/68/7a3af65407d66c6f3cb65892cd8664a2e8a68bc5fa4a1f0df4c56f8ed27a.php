<?php

/* SonataAdminBundle:Block:block_search_result.html.twig */
class __TwigTemplate_21687a3af65407d66c6f3cb65892cd8664a2e8a68bc5fa4a1f0df4c56f8ed27a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates"), "block_base"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"span3\">
        <div>
            <h4>
                ";
        // line 18
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "list"), "method")) {
            // line 19
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "label"), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain")), "html", null, true);
            echo "</a>
                ";
        } else {
            // line 21
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "label"), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain")), "html", null, true);
            echo "
                ";
        }
        // line 23
        echo "
                ";
        // line 24
        if (((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")) && ($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "getNbResults", array(), "method") > 0))) {
            // line 25
            echo "                    <span class=\"label label-info\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "getNbResults", array(), "method"), "html", null, true);
            echo "</span>
                ";
        }
        // line 27
        echo "            </h4>
        </div>

        <ul>
            ";
        // line 31
        if ((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager"))) {
            // line 32
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "getResults", array(), "method"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 33
                echo "                    <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "edit", 1 => (isset($context["result"]) ? $context["result"] : $this->getContext($context, "result"))), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => (isset($context["result"]) ? $context["result"] : $this->getContext($context, "result"))), "method"), "html", null, true);
                echo "</a></li>
                ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 35
                echo "                    ";
                if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "create"), "method")) {
                    // line 36
                    echo "                        <li><i>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_results_found", array(), "SonataAdminBundle"), "html", null, true);
                    echo " ~ <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("add_new_entry", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a></i></li>
                    ";
                } else {
                    // line 38
                    echo "                        <li><i>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_results_found", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</i></li>
                    ";
                }
                // line 40
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "            ";
        } else {
            // line 42
            echo "                ";
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "create"), "method")) {
                // line 43
                echo "                    <li><i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_results_found", array(), "SonataAdminBundle"), "html", null, true);
                echo " ~ <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("add_new_entry", array(), "SonataAdminBundle"), "html", null, true);
                echo "</a></i></li>
                ";
            } else {
                // line 45
                echo "                    <li><i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_results_found", array(), "SonataAdminBundle"), "html", null, true);
                echo "</i></li>
                ";
            }
            // line 47
            echo "            ";
        }
        // line 48
        echo "        </ul>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Block:block_search_result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  351 => 135,  343 => 132,  327 => 126,  323 => 125,  271 => 108,  262 => 105,  251 => 101,  211 => 81,  270 => 4,  212 => 74,  206 => 71,  202 => 77,  172 => 51,  167 => 48,  713 => 214,  707 => 211,  704 => 210,  702 => 209,  696 => 206,  686 => 205,  681 => 203,  669 => 201,  666 => 200,  655 => 194,  652 => 193,  635 => 191,  618 => 190,  613 => 188,  608 => 187,  605 => 186,  602 => 185,  596 => 181,  590 => 178,  568 => 175,  551 => 174,  547 => 173,  539 => 171,  536 => 170,  533 => 169,  530 => 168,  528 => 167,  525 => 166,  516 => 161,  512 => 159,  510 => 158,  507 => 157,  505 => 156,  502 => 155,  498 => 134,  483 => 129,  473 => 150,  467 => 148,  465 => 147,  462 => 146,  451 => 141,  446 => 139,  428 => 136,  425 => 135,  414 => 127,  400 => 120,  388 => 117,  377 => 115,  371 => 113,  358 => 139,  347 => 134,  339 => 100,  329 => 95,  324 => 92,  319 => 124,  311 => 89,  307 => 87,  297 => 84,  289 => 112,  233 => 81,  223 => 58,  90 => 20,  306 => 141,  303 => 140,  300 => 139,  286 => 80,  263 => 71,  248 => 100,  236 => 63,  216 => 100,  70 => 33,  344 => 97,  340 => 95,  338 => 130,  295 => 88,  292 => 135,  282 => 79,  259 => 70,  249 => 67,  190 => 50,  178 => 45,  118 => 28,  170 => 79,  129 => 59,  406 => 158,  403 => 121,  401 => 156,  394 => 118,  390 => 150,  378 => 144,  373 => 142,  369 => 141,  364 => 139,  359 => 138,  352 => 135,  349 => 103,  342 => 101,  336 => 99,  332 => 97,  328 => 124,  315 => 123,  301 => 117,  296 => 109,  290 => 106,  280 => 131,  277 => 109,  274 => 77,  261 => 91,  244 => 85,  239 => 97,  234 => 80,  225 => 87,  200 => 55,  198 => 66,  195 => 68,  192 => 64,  184 => 47,  180 => 56,  155 => 53,  146 => 34,  134 => 56,  126 => 45,  124 => 52,  76 => 32,  194 => 87,  181 => 47,  175 => 53,  161 => 38,  148 => 60,  137 => 37,  84 => 16,  65 => 26,  318 => 145,  316 => 121,  299 => 116,  293 => 113,  288 => 85,  284 => 106,  281 => 110,  279 => 104,  275 => 103,  265 => 106,  260 => 104,  256 => 121,  250 => 67,  237 => 86,  228 => 88,  222 => 81,  215 => 54,  210 => 73,  191 => 50,  185 => 59,  174 => 67,  165 => 64,  160 => 44,  153 => 62,  150 => 65,  113 => 42,  110 => 41,  694 => 412,  685 => 406,  680 => 403,  678 => 398,  668 => 395,  663 => 199,  658 => 391,  654 => 389,  647 => 382,  643 => 381,  637 => 378,  633 => 377,  627 => 374,  617 => 367,  609 => 362,  599 => 355,  592 => 179,  585 => 177,  581 => 345,  579 => 342,  577 => 341,  571 => 338,  567 => 337,  557 => 330,  550 => 326,  542 => 172,  538 => 319,  531 => 312,  526 => 310,  518 => 307,  514 => 306,  509 => 304,  504 => 302,  492 => 132,  486 => 130,  481 => 290,  466 => 280,  456 => 143,  452 => 272,  445 => 267,  443 => 261,  439 => 260,  429 => 255,  424 => 254,  422 => 250,  420 => 249,  415 => 247,  396 => 234,  383 => 224,  366 => 140,  361 => 107,  346 => 196,  335 => 93,  331 => 187,  326 => 93,  321 => 91,  304 => 174,  291 => 82,  272 => 76,  267 => 94,  257 => 103,  253 => 1,  242 => 113,  232 => 84,  213 => 82,  197 => 74,  186 => 82,  152 => 38,  127 => 54,  114 => 71,  104 => 40,  97 => 47,  77 => 36,  53 => 24,  34 => 18,  23 => 18,  100 => 41,  81 => 16,  58 => 22,  20 => 11,  480 => 128,  474 => 285,  469 => 158,  461 => 155,  457 => 153,  453 => 142,  444 => 149,  440 => 148,  437 => 147,  435 => 258,  430 => 137,  427 => 143,  423 => 128,  413 => 134,  409 => 124,  407 => 242,  402 => 130,  398 => 119,  393 => 126,  387 => 122,  384 => 116,  381 => 120,  379 => 119,  374 => 114,  368 => 112,  365 => 141,  362 => 110,  360 => 109,  355 => 105,  341 => 131,  337 => 103,  322 => 101,  314 => 99,  312 => 143,  309 => 120,  305 => 119,  298 => 173,  294 => 90,  285 => 111,  283 => 102,  278 => 86,  268 => 107,  264 => 2,  258 => 81,  252 => 68,  247 => 66,  241 => 84,  229 => 73,  220 => 56,  214 => 99,  177 => 54,  169 => 69,  140 => 28,  132 => 47,  128 => 58,  107 => 52,  61 => 27,  273 => 96,  269 => 75,  254 => 102,  243 => 98,  240 => 86,  238 => 64,  235 => 74,  230 => 106,  227 => 60,  224 => 103,  221 => 79,  219 => 84,  217 => 79,  208 => 72,  204 => 78,  179 => 72,  159 => 70,  143 => 59,  135 => 48,  119 => 28,  102 => 42,  71 => 29,  67 => 31,  63 => 4,  59 => 165,  38 => 19,  94 => 39,  89 => 37,  85 => 35,  75 => 33,  68 => 6,  56 => 21,  87 => 17,  21 => 11,  26 => 14,  93 => 21,  88 => 36,  78 => 31,  46 => 21,  27 => 12,  44 => 21,  31 => 3,  28 => 14,  201 => 72,  196 => 65,  183 => 82,  171 => 63,  166 => 100,  163 => 68,  158 => 62,  156 => 41,  151 => 61,  142 => 58,  138 => 57,  136 => 60,  121 => 51,  117 => 50,  105 => 39,  91 => 38,  62 => 25,  49 => 9,  24 => 11,  25 => 12,  19 => 11,  79 => 37,  72 => 10,  69 => 32,  47 => 21,  40 => 20,  37 => 19,  22 => 12,  246 => 99,  157 => 64,  145 => 59,  139 => 57,  131 => 55,  123 => 30,  120 => 36,  115 => 33,  111 => 30,  108 => 28,  101 => 49,  98 => 38,  96 => 19,  83 => 25,  74 => 23,  66 => 29,  55 => 25,  52 => 78,  50 => 23,  43 => 20,  41 => 20,  35 => 15,  32 => 14,  29 => 15,  209 => 96,  203 => 56,  199 => 53,  193 => 51,  189 => 71,  187 => 60,  182 => 69,  176 => 82,  173 => 71,  168 => 60,  164 => 72,  162 => 71,  154 => 40,  149 => 36,  147 => 69,  144 => 33,  141 => 67,  133 => 55,  130 => 57,  125 => 45,  122 => 44,  116 => 43,  112 => 47,  109 => 53,  106 => 44,  103 => 50,  99 => 26,  95 => 22,  92 => 19,  86 => 17,  82 => 33,  80 => 41,  73 => 7,  64 => 28,  60 => 24,  57 => 23,  54 => 154,  51 => 22,  48 => 21,  45 => 8,  42 => 16,  39 => 15,  36 => 19,  33 => 13,  30 => 9,);
    }
}