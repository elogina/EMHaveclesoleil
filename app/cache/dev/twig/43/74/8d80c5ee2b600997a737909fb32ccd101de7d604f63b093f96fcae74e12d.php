<?php

/* AcmeDemoBundle:Welcome:index.html.twig */
class __TwigTemplate_43748d80c5ee2b600997a737909fb32ccd101de7d604f63b093f96fcae74e12d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Welcome";
    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        echo "";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $context["version"] = ((twig_constant("Symfony\\Component\\HttpKernel\\Kernel::MAJOR_VERSION") . ".") . twig_constant("Symfony\\Component\\HttpKernel\\Kernel::MINOR_VERSION"));
        // line 9
        echo "
    <h1 class=\"title\">Welcome!</h1>

    <p>Congratulations! You have successfully installed a new Symfony application.</p>

    <div class=\"symfony-blocks-welcome\">
        <div class=\"block-quick-tour\">
            <div class=\"illustration\">
                <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/welcome-quick-tour.gif"), "html", null, true);
        echo "\" alt=\"Quick tour\" />
            </div>
            <a href=\"http://symfony.com/doc/";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "/quick_tour/index.html\" class=\"sf-button sf-button-selected\">
                <span class=\"border-l\">
                    <span class=\"border-r\">
                        <span class=\"btn-bg\">Read the Quick Tour</span>
                    </span>
                </span>
            </a>
        </div>
        ";
        // line 27
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment") == "dev")) {
            // line 28
            echo "            <div class=\"block-configure\">
                <div class=\"illustration\">
                    <img src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/welcome-configure.gif"), "html", null, true);
            echo "\" alt=\"Configure your application\" />
                </div>
                <a href=\"";
            // line 32
            echo $this->env->getExtension('routing')->getPath("_configurator_home");
            echo "\" class=\"sf-button sf-button-selected\">
                    <span class=\"border-l\">
                        <span class=\"border-r\">
                            <span class=\"btn-bg\">Configure</span>
                        </span>
                    </span>
                </a>
            </div>
        ";
        }
        // line 41
        echo "        <div class=\"block-demo\">
            <div class=\"illustration\">
                <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/welcome-demo.gif"), "html", null, true);
        echo "\" alt=\"Demo\" />
            </div>
            <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("_demo");
        echo "\" class=\"sf-button sf-button-selected\">
                <span class=\"border-l\">
                    <span class=\"border-r\">
                        <span class=\"btn-bg\">Run The Demo</span>
                    </span>
                </span>
            </a>
        </div>
    </div>

    <div class=\"symfony-blocks-help\">
        <div class=\"block-documentation\">
            <ul>
                <li><strong>Documentation</strong></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "/book/index.html\">The Book</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "/cookbook/index.html\">The Cookbook</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "/components/index.html\">The Components</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "/reference/index.html\">Reference</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "/glossary.html\">Glossary</a></li>
            </ul>
        </div>
        <div class=\"block-documentation-more\">
            <ul>
                <li><strong>Sensio</strong></li>
                <li><a href=\"http://trainings.sensiolabs.com\">Trainings</a></li>
                <li><a href=\"http://books.sensiolabs.com\">Books</a></li>
            </ul>
        </div>
        <div class=\"block-community\">
            <ul>
                <li><strong>Community</strong></li>
                <li><a href=\"http://symfony.com/irc\">IRC channel</a></li>
                <li><a href=\"http://symfony.com/mailing-lists\">Mailing lists</a></li>
                <li><a href=\"http://forum.symfony-project.org\">Forum</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "/contributing/index.html\">Contributing</a></li>
            </ul>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Welcome:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  836 => 271,  833 => 270,  828 => 265,  821 => 261,  815 => 258,  811 => 256,  809 => 255,  806 => 254,  800 => 252,  798 => 251,  795 => 250,  789 => 248,  787 => 247,  784 => 246,  778 => 244,  776 => 243,  773 => 242,  767 => 240,  765 => 239,  762 => 238,  759 => 237,  755 => 192,  749 => 191,  740 => 188,  735 => 187,  730 => 186,  727 => 185,  722 => 184,  719 => 183,  715 => 277,  708 => 267,  706 => 237,  699 => 235,  693 => 232,  690 => 231,  688 => 230,  683 => 227,  677 => 224,  674 => 223,  672 => 222,  664 => 218,  638 => 213,  632 => 211,  621 => 206,  611 => 203,  587 => 200,  584 => 199,  582 => 198,  578 => 196,  576 => 195,  569 => 183,  566 => 182,  548 => 165,  523 => 156,  506 => 151,  495 => 148,  491 => 147,  478 => 142,  475 => 141,  468 => 140,  459 => 137,  450 => 135,  447 => 134,  434 => 130,  417 => 126,  408 => 124,  376 => 119,  363 => 114,  345 => 97,  325 => 73,  317 => 70,  231 => 33,  572 => 193,  561 => 174,  549 => 174,  544 => 172,  521 => 162,  517 => 155,  511 => 160,  508 => 159,  499 => 156,  487 => 152,  477 => 150,  470 => 135,  463 => 133,  460 => 132,  449 => 123,  441 => 105,  426 => 102,  419 => 98,  410 => 96,  395 => 84,  392 => 83,  386 => 95,  382 => 93,  380 => 83,  357 => 125,  333 => 117,  226 => 67,  205 => 59,  370 => 100,  367 => 131,  330 => 87,  320 => 84,  313 => 82,  310 => 81,  302 => 114,  287 => 72,  188 => 174,  12 => 34,  351 => 135,  343 => 91,  327 => 86,  323 => 125,  271 => 55,  262 => 63,  251 => 101,  211 => 81,  270 => 4,  212 => 74,  206 => 71,  202 => 77,  172 => 52,  167 => 48,  713 => 270,  707 => 211,  704 => 210,  702 => 236,  696 => 206,  686 => 205,  681 => 203,  669 => 221,  666 => 200,  655 => 215,  652 => 214,  635 => 191,  618 => 190,  613 => 204,  608 => 202,  605 => 201,  602 => 185,  596 => 181,  590 => 178,  568 => 175,  551 => 174,  547 => 173,  539 => 162,  536 => 161,  533 => 169,  530 => 158,  528 => 167,  525 => 166,  516 => 161,  512 => 152,  510 => 158,  507 => 157,  505 => 156,  502 => 155,  498 => 149,  483 => 144,  473 => 150,  467 => 134,  465 => 139,  462 => 138,  451 => 141,  446 => 122,  428 => 129,  425 => 128,  414 => 125,  400 => 161,  388 => 124,  377 => 82,  371 => 113,  358 => 113,  347 => 118,  339 => 100,  329 => 95,  324 => 116,  319 => 71,  311 => 89,  307 => 66,  297 => 84,  289 => 59,  233 => 81,  223 => 66,  90 => 32,  306 => 141,  303 => 65,  300 => 113,  286 => 80,  263 => 71,  248 => 100,  236 => 35,  216 => 28,  70 => 23,  344 => 97,  340 => 90,  338 => 76,  295 => 88,  292 => 135,  282 => 80,  259 => 70,  249 => 70,  190 => 175,  178 => 119,  118 => 49,  170 => 79,  129 => 56,  406 => 158,  403 => 121,  401 => 156,  394 => 118,  390 => 125,  378 => 144,  373 => 142,  369 => 115,  364 => 139,  359 => 138,  352 => 121,  349 => 103,  342 => 101,  336 => 99,  332 => 75,  328 => 74,  315 => 83,  301 => 117,  296 => 111,  290 => 106,  280 => 79,  277 => 68,  274 => 77,  261 => 50,  244 => 85,  239 => 97,  234 => 80,  225 => 87,  200 => 55,  198 => 66,  195 => 68,  192 => 55,  184 => 47,  180 => 120,  155 => 53,  146 => 34,  134 => 56,  126 => 55,  124 => 43,  76 => 28,  194 => 177,  181 => 47,  175 => 118,  161 => 38,  148 => 97,  137 => 47,  84 => 29,  65 => 29,  318 => 145,  316 => 121,  299 => 64,  293 => 61,  288 => 108,  284 => 106,  281 => 110,  279 => 104,  275 => 57,  265 => 64,  260 => 62,  256 => 121,  250 => 67,  237 => 86,  228 => 88,  222 => 30,  215 => 54,  210 => 22,  191 => 50,  185 => 173,  174 => 53,  165 => 64,  160 => 48,  153 => 48,  150 => 58,  113 => 46,  110 => 22,  694 => 412,  685 => 406,  680 => 403,  678 => 398,  668 => 395,  663 => 199,  658 => 216,  654 => 389,  647 => 382,  643 => 381,  637 => 378,  633 => 377,  627 => 208,  617 => 367,  609 => 362,  599 => 355,  592 => 179,  585 => 177,  581 => 345,  579 => 342,  577 => 341,  571 => 338,  567 => 337,  557 => 169,  550 => 326,  542 => 163,  538 => 170,  531 => 312,  526 => 157,  518 => 307,  514 => 306,  509 => 304,  504 => 158,  492 => 154,  486 => 145,  481 => 143,  466 => 280,  456 => 143,  452 => 272,  445 => 267,  443 => 261,  439 => 260,  429 => 255,  424 => 254,  422 => 250,  420 => 127,  415 => 97,  396 => 159,  383 => 224,  366 => 140,  361 => 127,  346 => 92,  335 => 93,  331 => 187,  326 => 93,  321 => 91,  304 => 79,  291 => 109,  272 => 76,  267 => 94,  257 => 49,  253 => 47,  242 => 113,  232 => 84,  213 => 82,  197 => 56,  186 => 54,  152 => 99,  127 => 60,  114 => 88,  104 => 43,  97 => 41,  77 => 25,  53 => 11,  34 => 15,  23 => 12,  100 => 43,  81 => 26,  58 => 17,  20 => 11,  480 => 151,  474 => 149,  469 => 158,  461 => 155,  457 => 131,  453 => 136,  444 => 132,  440 => 148,  437 => 131,  435 => 258,  430 => 103,  427 => 143,  423 => 128,  413 => 134,  409 => 124,  407 => 95,  402 => 170,  398 => 119,  393 => 158,  387 => 122,  384 => 122,  381 => 121,  379 => 119,  374 => 81,  368 => 112,  365 => 141,  362 => 110,  360 => 109,  355 => 112,  341 => 131,  337 => 103,  322 => 101,  314 => 99,  312 => 68,  309 => 120,  305 => 119,  298 => 173,  294 => 90,  285 => 81,  283 => 58,  278 => 86,  268 => 54,  264 => 72,  258 => 81,  252 => 68,  247 => 66,  241 => 31,  229 => 73,  220 => 65,  214 => 61,  177 => 54,  169 => 51,  140 => 41,  132 => 57,  128 => 47,  107 => 44,  61 => 12,  273 => 96,  269 => 75,  254 => 60,  243 => 68,  240 => 86,  238 => 36,  235 => 74,  230 => 106,  227 => 32,  224 => 103,  221 => 79,  219 => 29,  217 => 79,  208 => 60,  204 => 78,  179 => 72,  159 => 49,  143 => 48,  135 => 62,  119 => 44,  102 => 17,  71 => 29,  67 => 28,  63 => 19,  59 => 13,  38 => 6,  94 => 34,  89 => 34,  85 => 32,  75 => 31,  68 => 30,  56 => 11,  87 => 35,  21 => 11,  26 => 9,  93 => 39,  88 => 31,  78 => 26,  46 => 8,  27 => 16,  44 => 21,  31 => 3,  28 => 3,  201 => 182,  196 => 65,  183 => 121,  171 => 63,  166 => 110,  163 => 49,  158 => 79,  156 => 41,  151 => 45,  142 => 42,  138 => 93,  136 => 39,  121 => 91,  117 => 19,  105 => 18,  91 => 85,  62 => 28,  49 => 13,  24 => 3,  25 => 35,  19 => 11,  79 => 31,  72 => 54,  69 => 53,  47 => 8,  40 => 6,  37 => 5,  22 => 11,  246 => 69,  157 => 47,  145 => 53,  139 => 63,  131 => 61,  123 => 59,  120 => 20,  115 => 47,  111 => 40,  108 => 19,  101 => 43,  98 => 36,  96 => 40,  83 => 82,  74 => 27,  66 => 23,  55 => 21,  52 => 14,  50 => 21,  43 => 11,  41 => 10,  35 => 5,  32 => 21,  29 => 3,  209 => 24,  203 => 278,  199 => 53,  193 => 51,  189 => 71,  187 => 60,  182 => 69,  176 => 102,  173 => 112,  168 => 60,  164 => 109,  162 => 71,  154 => 46,  149 => 62,  147 => 46,  144 => 95,  141 => 94,  133 => 49,  130 => 35,  125 => 46,  122 => 45,  116 => 43,  112 => 47,  109 => 45,  106 => 45,  103 => 38,  99 => 30,  95 => 19,  92 => 35,  86 => 33,  82 => 28,  80 => 30,  73 => 16,  64 => 13,  60 => 26,  57 => 12,  54 => 22,  51 => 19,  48 => 9,  45 => 8,  42 => 7,  39 => 13,  36 => 5,  33 => 4,  30 => 3,);
    }
}
