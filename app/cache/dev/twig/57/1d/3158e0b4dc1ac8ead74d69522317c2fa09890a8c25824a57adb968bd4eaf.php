<?php

/* @WebProfiler/Profiler/toolbar_js.html.twig */
class __TwigTemplate_571d3158e0b4dc1ac8ead74d69522317c2fa09890a8c25824a57adb968bd4eaf extends Twig_Template
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
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\" class=\"sf-toolbar\" style=\"display: none\"></div>
";
        // line 2
        $this->env->loadTemplate("@WebProfiler/Profiler/base_js.html.twig")->display($context);
        // line 3
        echo "<script>/*<![CDATA[*/
    (function () {
        ";
        // line 5
        if (("top" == (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")))) {
            // line 6
            echo "            var sfwdt = document.getElementById('sfwdt";
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "');
            document.body.insertBefore(
                document.body.removeChild(sfwdt),
                document.body.firstChild
            );
        ";
        }
        // line 12
        echo "
        Sfjs.load(
            'sfwdt";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "',
            '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "',
            function(xhr, el) {
                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';

                if (el.style.display == 'none') {
                    return;
                }

                if (Sfjs.getPreference('toolbar/displayState') == 'none') {
                    document.getElementById('sfToolbarMainContent-";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfToolbarClearer-";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfMiniToolbar-";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                } else {
                    document.getElementById('sfToolbarMainContent-";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfToolbarClearer-";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfMiniToolbar-";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                }
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "');
                }
            },
            {'maxTries': 5}
        );
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 29,  66 => 25,  46 => 14,  30 => 5,  24 => 2,  19 => 1,  32 => 6,  27 => 13,  25 => 12,  20 => 1,  179 => 72,  169 => 69,  163 => 68,  157 => 64,  151 => 61,  145 => 59,  142 => 58,  139 => 57,  135 => 55,  124 => 52,  112 => 47,  102 => 42,  100 => 41,  89 => 37,  75 => 28,  71 => 29,  65 => 26,  62 => 24,  60 => 24,  57 => 23,  50 => 15,  38 => 19,  29 => 15,  26 => 3,  836 => 271,  833 => 270,  828 => 265,  821 => 261,  815 => 258,  811 => 256,  809 => 255,  806 => 254,  800 => 252,  798 => 251,  795 => 250,  789 => 248,  787 => 247,  784 => 246,  778 => 244,  776 => 243,  773 => 242,  767 => 240,  765 => 239,  762 => 238,  759 => 237,  755 => 192,  749 => 191,  740 => 188,  735 => 187,  730 => 186,  727 => 185,  722 => 184,  719 => 183,  715 => 277,  713 => 270,  708 => 267,  706 => 237,  702 => 236,  699 => 235,  693 => 232,  690 => 231,  688 => 230,  683 => 227,  677 => 224,  674 => 223,  672 => 222,  669 => 221,  664 => 218,  658 => 216,  655 => 215,  652 => 214,  638 => 213,  632 => 211,  627 => 208,  621 => 206,  613 => 204,  611 => 203,  608 => 202,  605 => 201,  587 => 200,  584 => 199,  582 => 198,  578 => 196,  576 => 195,  572 => 193,  569 => 183,  566 => 182,  561 => 174,  557 => 169,  548 => 165,  542 => 163,  539 => 162,  536 => 161,  530 => 158,  526 => 157,  523 => 156,  517 => 155,  512 => 152,  506 => 151,  498 => 149,  495 => 148,  491 => 147,  486 => 145,  483 => 144,  481 => 143,  478 => 142,  475 => 141,  468 => 140,  465 => 139,  462 => 138,  459 => 137,  453 => 136,  450 => 135,  447 => 134,  444 => 132,  437 => 131,  434 => 130,  428 => 129,  425 => 128,  420 => 127,  417 => 126,  414 => 125,  408 => 124,  402 => 170,  400 => 161,  396 => 159,  393 => 158,  390 => 125,  388 => 124,  384 => 122,  381 => 121,  376 => 119,  369 => 115,  363 => 114,  358 => 113,  355 => 112,  345 => 97,  338 => 76,  332 => 75,  328 => 74,  325 => 73,  319 => 71,  317 => 70,  312 => 68,  307 => 66,  303 => 65,  299 => 64,  293 => 61,  289 => 59,  283 => 58,  275 => 57,  271 => 55,  268 => 54,  261 => 50,  257 => 49,  253 => 47,  238 => 36,  236 => 35,  231 => 33,  227 => 32,  222 => 30,  219 => 29,  216 => 28,  210 => 22,  203 => 278,  201 => 182,  194 => 177,  190 => 175,  188 => 174,  185 => 173,  183 => 121,  180 => 120,  178 => 119,  175 => 118,  173 => 71,  166 => 110,  164 => 109,  152 => 99,  148 => 97,  141 => 94,  138 => 93,  121 => 51,  117 => 50,  114 => 88,  94 => 39,  83 => 30,  74 => 78,  72 => 54,  69 => 53,  53 => 20,  51 => 19,  49 => 18,  43 => 15,  41 => 20,  37 => 12,  35 => 11,  159 => 49,  153 => 62,  147 => 46,  144 => 95,  140 => 44,  132 => 43,  129 => 42,  125 => 40,  119 => 39,  113 => 37,  110 => 46,  106 => 44,  103 => 34,  101 => 33,  97 => 87,  91 => 35,  85 => 83,  82 => 33,  78 => 31,  70 => 26,  67 => 28,  61 => 23,  58 => 22,  55 => 21,  52 => 20,  47 => 21,  45 => 16,  42 => 12,  39 => 13,  34 => 18,  28 => 14,);
    }
}
