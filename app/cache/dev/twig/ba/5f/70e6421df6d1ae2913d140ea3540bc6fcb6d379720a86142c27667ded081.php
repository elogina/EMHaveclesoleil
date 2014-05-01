<?php

/* @WebProfiler/Profiler/toolbar_item.html.twig */
class __TwigTemplate_ba5f70e6421df6d1ae2913d140ea3540bc6fcb6d379720a86142c27667ded081 extends Twig_Template
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
        if ($this->getContext($context, "link")) {
            // line 2
            echo "    ";
            ob_start();
            // line 3
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getContext($context, "token"), "panel" => $this->getContext($context, "name"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getContext($context, "icon"), "html", null, true);
            echo "</a>
    ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        }
        // line 6
        echo "<div class=\"sf-toolbar-block\">
     <div class=\"sf-toolbar-icon\">";
        // line 7
        echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter($this->getContext($context, "icon"), "")) : ("")), "html", null, true);
        echo "</div>
     <div class=\"sf-toolbar-info\">";
        // line 8
        echo twig_escape_filter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter($this->getContext($context, "text"), "")) : ("")), "html", null, true);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  21 => 2,  19 => 1,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 83,  230 => 82,  227 => 81,  224 => 79,  221 => 77,  219 => 76,  217 => 75,  208 => 73,  204 => 72,  171 => 64,  163 => 62,  143 => 55,  138 => 54,  135 => 53,  119 => 42,  102 => 32,  94 => 28,  87 => 25,  78 => 22,  71 => 18,  209 => 82,  203 => 78,  199 => 71,  193 => 73,  189 => 71,  187 => 70,  182 => 70,  176 => 64,  173 => 65,  168 => 62,  154 => 58,  149 => 51,  147 => 50,  144 => 49,  141 => 48,  133 => 42,  130 => 41,  125 => 38,  122 => 37,  116 => 41,  112 => 35,  109 => 34,  103 => 32,  99 => 31,  95 => 28,  86 => 24,  57 => 12,  48 => 9,  672 => 345,  668 => 344,  664 => 342,  660 => 340,  651 => 337,  647 => 336,  644 => 335,  640 => 334,  631 => 327,  629 => 326,  626 => 325,  622 => 323,  613 => 320,  609 => 319,  606 => 318,  602 => 317,  593 => 310,  591 => 309,  588 => 308,  585 => 307,  581 => 305,  577 => 303,  569 => 300,  563 => 298,  559 => 296,  557 => 295,  552 => 293,  548 => 292,  545 => 291,  541 => 290,  533 => 284,  531 => 283,  527 => 281,  525 => 280,  522 => 279,  519 => 278,  515 => 276,  509 => 272,  505 => 270,  499 => 268,  497 => 267,  489 => 262,  483 => 258,  479 => 256,  473 => 254,  471 => 253,  465 => 249,  463 => 248,  459 => 246,  457 => 245,  454 => 244,  448 => 240,  444 => 238,  438 => 236,  436 => 235,  428 => 230,  422 => 226,  418 => 224,  412 => 222,  410 => 221,  402 => 215,  400 => 214,  397 => 213,  393 => 211,  383 => 207,  380 => 206,  376 => 205,  367 => 198,  365 => 197,  361 => 195,  353 => 193,  351 => 192,  347 => 191,  341 => 189,  329 => 188,  317 => 185,  313 => 183,  304 => 181,  300 => 180,  297 => 179,  295 => 178,  288 => 176,  285 => 175,  273 => 96,  205 => 108,  201 => 106,  197 => 104,  188 => 102,  184 => 101,  179 => 69,  170 => 96,  166 => 95,  159 => 61,  93 => 27,  90 => 26,  85 => 23,  77 => 20,  62 => 12,  27 => 3,  59 => 14,  51 => 10,  44 => 9,  38 => 7,  34 => 5,  31 => 4,  28 => 3,  91 => 27,  88 => 32,  82 => 22,  76 => 25,  73 => 19,  67 => 17,  63 => 15,  61 => 17,  39 => 6,  36 => 7,  33 => 6,  30 => 3,  79 => 21,  72 => 17,  69 => 16,  54 => 12,  47 => 9,  45 => 8,  42 => 7,  40 => 8,  37 => 10,  22 => 1,  246 => 90,  164 => 60,  162 => 59,  157 => 89,  145 => 46,  139 => 45,  131 => 52,  123 => 41,  120 => 40,  115 => 39,  111 => 38,  108 => 36,  106 => 33,  101 => 33,  98 => 32,  96 => 31,  92 => 27,  83 => 25,  80 => 21,  74 => 14,  66 => 11,  64 => 15,  60 => 13,  55 => 13,  52 => 12,  50 => 10,  43 => 9,  41 => 8,  35 => 6,  32 => 5,  29 => 6,);
    }
}
