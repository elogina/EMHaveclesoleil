<?php

/* SonataAdminBundle:Core:search.html.twig */
class __TwigTemplate_b793f5c563f617c46c7d5cdc4905ee74d70d6ca684cd2883499a7975a3747d31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_search_results", array("%query%" => (isset($context["query"]) ? $context["query"] : $this->getContext($context, "query"))), "SonataAdminBundle"), "html", null, true);
    }

    // line 15
    public function block_breadcrumb($context, array $blocks = array())
    {
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "    <!--
    <div class=\"row-fluid\">
        <form action=\"";
        // line 19
        echo $this->env->getExtension('routing')->getUrl("sonata_admin_search");
        echo "\" method=\"GET\"  class=\"form-search\">
            <div class=\"input-append\">
                <input type=\"text\" name=\"q\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), "html", null, true);
        echo "\" class=\"input-large search-query\"/>
                <button type=\"submit\" class=\"btn\">Search</button>
            </div>
        </form>
    </div>
    -->

    <h1>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_search_results", array("%query%" => (isset($context["query"]) ? $context["query"] : $this->getContext($context, "query"))), "SonataAdminBundle"), "html", null, true);
        echo "</h1>

    ";
        // line 30
        if ((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query"))) {
            // line 31
            echo "        ";
            $context["count"] = 0;
            // line 32
            echo "        <div class=\"row-fluid\">

            ";
            // line 34
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 35
                echo "                ";
                $context["display"] = (twig_test_empty($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "roles")) || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"));
                // line 36
                echo "                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "roles"));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    if ((!(isset($context["display"]) ? $context["display"] : $this->getContext($context, "display")))) {
                        // line 37
                        echo "                    ";
                        $context["display"] = $this->env->getExtension('security')->isGranted((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")));
                        // line 38
                        echo "                ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "
                ";
                // line 40
                if ((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display"))) {
                    // line 41
                    echo "                    ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "items"));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 42
                        echo "                        ";
                        if ((((isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")) % 3) == 0)) {
                            // line 43
                            echo "                            </div><div class=\"row-fluid\">
                        ";
                        }
                        // line 45
                        echo "
                        ";
                        // line 46
                        $context["count"] = ((isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")) + 1);
                        // line 47
                        echo "                        ";
                        if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "create"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "CREATE"), "method")) || ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method")))) {
                            // line 48
                            echo "                            ";
                            echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => "sonata.admin.block.search_result"), array("query" => (isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), "admin_code" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "code"), "page" => 0, "per_page" => 10)));
                            // line 55
                            echo "
                        ";
                        }
                        // line 57
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 58
                    echo "                ";
                }
                // line 59
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "        </div>
    ";
        }
        // line 62
        echo "
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  351 => 135,  343 => 132,  327 => 126,  323 => 125,  271 => 108,  262 => 105,  251 => 101,  211 => 81,  270 => 4,  212 => 74,  206 => 71,  202 => 77,  172 => 51,  167 => 48,  713 => 214,  707 => 211,  704 => 210,  702 => 209,  696 => 206,  686 => 205,  681 => 203,  669 => 201,  666 => 200,  655 => 194,  652 => 193,  635 => 191,  618 => 190,  613 => 188,  608 => 187,  605 => 186,  602 => 185,  596 => 181,  590 => 178,  568 => 175,  551 => 174,  547 => 173,  539 => 171,  536 => 170,  533 => 169,  530 => 168,  528 => 167,  525 => 166,  516 => 161,  512 => 159,  510 => 158,  507 => 157,  505 => 156,  502 => 155,  498 => 134,  483 => 129,  473 => 150,  467 => 148,  465 => 147,  462 => 146,  451 => 141,  446 => 139,  428 => 136,  425 => 135,  414 => 127,  400 => 120,  388 => 117,  377 => 115,  371 => 113,  358 => 139,  347 => 134,  339 => 100,  329 => 95,  324 => 92,  319 => 124,  311 => 89,  307 => 87,  297 => 84,  289 => 112,  233 => 81,  223 => 58,  90 => 20,  306 => 141,  303 => 140,  300 => 139,  286 => 80,  263 => 71,  248 => 100,  236 => 63,  216 => 100,  70 => 25,  344 => 97,  340 => 95,  338 => 130,  295 => 88,  292 => 135,  282 => 79,  259 => 70,  249 => 67,  190 => 50,  178 => 45,  118 => 46,  170 => 79,  129 => 42,  406 => 158,  403 => 121,  401 => 156,  394 => 118,  390 => 150,  378 => 144,  373 => 142,  369 => 141,  364 => 139,  359 => 138,  352 => 135,  349 => 103,  342 => 101,  336 => 99,  332 => 97,  328 => 124,  315 => 123,  301 => 117,  296 => 109,  290 => 106,  280 => 131,  277 => 109,  274 => 77,  261 => 91,  244 => 85,  239 => 97,  234 => 80,  225 => 87,  200 => 55,  198 => 66,  195 => 68,  192 => 64,  184 => 47,  180 => 56,  155 => 53,  146 => 34,  134 => 56,  126 => 55,  124 => 52,  76 => 32,  194 => 87,  181 => 47,  175 => 53,  161 => 38,  148 => 60,  137 => 37,  84 => 16,  65 => 26,  318 => 145,  316 => 121,  299 => 116,  293 => 113,  288 => 85,  284 => 106,  281 => 110,  279 => 104,  275 => 103,  265 => 106,  260 => 104,  256 => 121,  250 => 67,  237 => 86,  228 => 88,  222 => 81,  215 => 54,  210 => 73,  191 => 50,  185 => 59,  174 => 67,  165 => 64,  160 => 44,  153 => 48,  150 => 65,  113 => 37,  110 => 36,  694 => 412,  685 => 406,  680 => 403,  678 => 398,  668 => 395,  663 => 199,  658 => 391,  654 => 389,  647 => 382,  643 => 381,  637 => 378,  633 => 377,  627 => 374,  617 => 367,  609 => 362,  599 => 355,  592 => 179,  585 => 177,  581 => 345,  579 => 342,  577 => 341,  571 => 338,  567 => 337,  557 => 330,  550 => 326,  542 => 172,  538 => 319,  531 => 312,  526 => 310,  518 => 307,  514 => 306,  509 => 304,  504 => 302,  492 => 132,  486 => 130,  481 => 290,  466 => 280,  456 => 143,  452 => 272,  445 => 267,  443 => 261,  439 => 260,  429 => 255,  424 => 254,  422 => 250,  420 => 249,  415 => 247,  396 => 234,  383 => 224,  366 => 140,  361 => 107,  346 => 196,  335 => 93,  331 => 187,  326 => 93,  321 => 91,  304 => 174,  291 => 82,  272 => 76,  267 => 94,  257 => 103,  253 => 1,  242 => 113,  232 => 84,  213 => 82,  197 => 74,  186 => 82,  152 => 38,  127 => 54,  114 => 71,  104 => 40,  97 => 31,  77 => 36,  53 => 24,  34 => 15,  23 => 18,  100 => 41,  81 => 16,  58 => 22,  20 => 11,  480 => 128,  474 => 285,  469 => 158,  461 => 155,  457 => 153,  453 => 142,  444 => 149,  440 => 148,  437 => 147,  435 => 258,  430 => 137,  427 => 143,  423 => 128,  413 => 134,  409 => 124,  407 => 242,  402 => 130,  398 => 119,  393 => 126,  387 => 122,  384 => 116,  381 => 120,  379 => 119,  374 => 114,  368 => 112,  365 => 141,  362 => 110,  360 => 109,  355 => 105,  341 => 131,  337 => 103,  322 => 101,  314 => 99,  312 => 143,  309 => 120,  305 => 119,  298 => 173,  294 => 90,  285 => 111,  283 => 102,  278 => 86,  268 => 107,  264 => 2,  258 => 81,  252 => 68,  247 => 66,  241 => 84,  229 => 73,  220 => 56,  214 => 99,  177 => 54,  169 => 69,  140 => 44,  132 => 43,  128 => 58,  107 => 52,  61 => 28,  273 => 96,  269 => 75,  254 => 102,  243 => 98,  240 => 86,  238 => 64,  235 => 74,  230 => 106,  227 => 60,  224 => 103,  221 => 79,  219 => 84,  217 => 79,  208 => 72,  204 => 78,  179 => 72,  159 => 49,  143 => 59,  135 => 48,  119 => 39,  102 => 42,  71 => 32,  67 => 24,  63 => 4,  59 => 165,  38 => 18,  94 => 39,  89 => 37,  85 => 28,  75 => 34,  68 => 31,  56 => 21,  87 => 17,  21 => 11,  26 => 14,  93 => 21,  88 => 37,  78 => 26,  46 => 19,  27 => 14,  44 => 21,  31 => 3,  28 => 14,  201 => 72,  196 => 65,  183 => 82,  171 => 63,  166 => 100,  163 => 68,  158 => 62,  156 => 41,  151 => 61,  142 => 58,  138 => 57,  136 => 58,  121 => 51,  117 => 50,  105 => 39,  91 => 38,  62 => 25,  49 => 9,  24 => 13,  25 => 12,  19 => 11,  79 => 35,  72 => 10,  69 => 32,  47 => 19,  40 => 20,  37 => 19,  22 => 12,  246 => 99,  157 => 64,  145 => 60,  139 => 59,  131 => 55,  123 => 48,  120 => 47,  115 => 45,  111 => 43,  108 => 42,  101 => 40,  98 => 39,  96 => 19,  83 => 25,  74 => 23,  66 => 30,  55 => 21,  52 => 20,  50 => 25,  43 => 21,  41 => 20,  35 => 15,  32 => 14,  29 => 15,  209 => 96,  203 => 56,  199 => 53,  193 => 51,  189 => 71,  187 => 60,  182 => 69,  176 => 82,  173 => 71,  168 => 60,  164 => 72,  162 => 71,  154 => 40,  149 => 62,  147 => 46,  144 => 45,  141 => 67,  133 => 55,  130 => 57,  125 => 40,  122 => 44,  116 => 43,  112 => 47,  109 => 53,  106 => 35,  103 => 41,  99 => 26,  95 => 22,  92 => 19,  86 => 17,  82 => 36,  80 => 41,  73 => 7,  64 => 28,  60 => 24,  57 => 27,  54 => 26,  51 => 21,  48 => 21,  45 => 18,  42 => 17,  39 => 16,  36 => 19,  33 => 16,  30 => 15,);
    }
}
