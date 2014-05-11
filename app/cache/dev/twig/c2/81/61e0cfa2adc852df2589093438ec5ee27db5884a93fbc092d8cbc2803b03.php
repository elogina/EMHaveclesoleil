<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_c28161e0cfa2adc852df2589093438ec5ee27db5884a93fbc092d8cbc2803b03 extends Twig_Template
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
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                options.maxTries = options.maxTries || 0;
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 !== xhr.readyState) {
                        return null;
                    }

                    if (xhr.status == 404 && options.maxTries > 1) {
                        setTimeout(function(){
                            options.maxTries--;
                            request(url, onSuccess, onError, payload, options);
                        }, 500);

                        return null;
                    }

                    if (200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        '',
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  79 => 29,  66 => 25,  46 => 14,  30 => 5,  24 => 2,  19 => 1,  32 => 6,  27 => 13,  25 => 12,  20 => 1,  179 => 72,  169 => 69,  163 => 68,  157 => 64,  151 => 61,  145 => 59,  142 => 58,  139 => 57,  135 => 55,  124 => 52,  112 => 47,  102 => 42,  100 => 41,  89 => 37,  75 => 28,  71 => 29,  65 => 26,  62 => 24,  60 => 24,  57 => 23,  50 => 15,  38 => 19,  29 => 15,  26 => 3,  836 => 271,  833 => 270,  828 => 265,  821 => 261,  815 => 258,  811 => 256,  809 => 255,  806 => 254,  800 => 252,  798 => 251,  795 => 250,  789 => 248,  787 => 247,  784 => 246,  778 => 244,  776 => 243,  773 => 242,  767 => 240,  765 => 239,  762 => 238,  759 => 237,  755 => 192,  749 => 191,  740 => 188,  735 => 187,  730 => 186,  727 => 185,  722 => 184,  719 => 183,  715 => 277,  713 => 270,  708 => 267,  706 => 237,  702 => 236,  699 => 235,  693 => 232,  690 => 231,  688 => 230,  683 => 227,  677 => 224,  674 => 223,  672 => 222,  669 => 221,  664 => 218,  658 => 216,  655 => 215,  652 => 214,  638 => 213,  632 => 211,  627 => 208,  621 => 206,  613 => 204,  611 => 203,  608 => 202,  605 => 201,  587 => 200,  584 => 199,  582 => 198,  578 => 196,  576 => 195,  572 => 193,  569 => 183,  566 => 182,  561 => 174,  557 => 169,  548 => 165,  542 => 163,  539 => 162,  536 => 161,  530 => 158,  526 => 157,  523 => 156,  517 => 155,  512 => 152,  506 => 151,  498 => 149,  495 => 148,  491 => 147,  486 => 145,  483 => 144,  481 => 143,  478 => 142,  475 => 141,  468 => 140,  465 => 139,  462 => 138,  459 => 137,  453 => 136,  450 => 135,  447 => 134,  444 => 132,  437 => 131,  434 => 130,  428 => 129,  425 => 128,  420 => 127,  417 => 126,  414 => 125,  408 => 124,  402 => 170,  400 => 161,  396 => 159,  393 => 158,  390 => 125,  388 => 124,  384 => 122,  381 => 121,  376 => 119,  369 => 115,  363 => 114,  358 => 113,  355 => 112,  345 => 97,  338 => 76,  332 => 75,  328 => 74,  325 => 73,  319 => 71,  317 => 70,  312 => 68,  307 => 66,  303 => 65,  299 => 64,  293 => 61,  289 => 59,  283 => 58,  275 => 57,  271 => 55,  268 => 54,  261 => 50,  257 => 49,  253 => 47,  238 => 36,  236 => 35,  231 => 33,  227 => 32,  222 => 30,  219 => 29,  216 => 28,  210 => 22,  203 => 278,  201 => 182,  194 => 177,  190 => 175,  188 => 174,  185 => 173,  183 => 121,  180 => 120,  178 => 119,  175 => 118,  173 => 71,  166 => 110,  164 => 109,  152 => 99,  148 => 97,  141 => 94,  138 => 93,  121 => 51,  117 => 50,  114 => 88,  94 => 39,  83 => 30,  74 => 78,  72 => 54,  69 => 53,  53 => 20,  51 => 19,  49 => 18,  43 => 15,  41 => 20,  37 => 12,  35 => 11,  159 => 49,  153 => 62,  147 => 46,  144 => 95,  140 => 44,  132 => 43,  129 => 42,  125 => 40,  119 => 39,  113 => 37,  110 => 46,  106 => 44,  103 => 34,  101 => 33,  97 => 87,  91 => 35,  85 => 83,  82 => 33,  78 => 31,  70 => 26,  67 => 28,  61 => 23,  58 => 22,  55 => 21,  52 => 20,  47 => 21,  45 => 16,  42 => 12,  39 => 13,  34 => 18,  28 => 14,);
    }
}
