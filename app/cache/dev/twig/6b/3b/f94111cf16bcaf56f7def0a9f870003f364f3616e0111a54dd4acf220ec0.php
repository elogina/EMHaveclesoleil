<?php

/* SonataAdminBundle:CRUD:base_history.html.twig */
class __TwigTemplate_6b3bf94111cf16bcaf56f7def0a9f870003f364f3616e0111a54dd4acf220ec0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
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
    public function block_actions($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"sonata-actions btn-group\">
        ";
        // line 16
        $this->env->loadTemplate("SonataAdminBundle:Button:edit_button.html.twig")->display($context);
        // line 17
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:acl_button.html.twig")->display($context);
        // line 18
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:show_button.html.twig")->display($context);
        // line 19
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:list_button.html.twig")->display($context);
        // line 20
        echo "    </div>
";
    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        // line 24
        echo "
    <div class=\"span5\">
        <table class=\"table\" id=\"revisions\">
            <thead>
                <tr>
                    <th>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_revision", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                    <th>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_timestamp", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                    <th>";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_username", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                    <th>";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_action", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 36
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["revisions"]) ? $context["revisions"] : $this->getContext($context, "revisions")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["revision"]) {
            // line 37
            echo "                    <tr>
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "rev"), "html", null, true);
            echo "</td>
                        <td>";
            // line 39
            $template = $this->env->resolveTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "history_revision_timestamp"), "method"));
            $template->display($context);
            echo "</td>
                        <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "username"), "html", null, true);
            echo "</td>
                        <td><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "history_view_revision", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), 2 => array("revision" => $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "rev"))), "method"), "html", null, true);
            echo "\" class=\"revision-link\" rel=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "rev"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_view_revision", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a></td>
                    </tr>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['revision'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "            </tbody>
        </table>
    </div>
    <div id=\"revision-detail\" class=\"span7 revision-detail\">

    </div>

    <script type=\"text/javascript\">
        jQuery(document).ready(function() {

            jQuery('a.revision-link').bind('click', function(event) {
                event.stopPropagation();
                event.preventDefault();

                jQuery('#revision-detail').html('');
                jQuery('table#revisions tbody tr').removeClass('current');
                jQuery(this).parent('').removeClass('current');

                jQuery.ajax({
                    url: jQuery(this).attr('href'),
                    dataType: 'html',
                    success: function(data) {
                        jQuery('#revision-detail').html(data);
                    }
                });

                return false;
            })
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  370 => 100,  367 => 99,  330 => 87,  320 => 84,  313 => 82,  310 => 81,  302 => 78,  287 => 72,  188 => 21,  12 => 34,  351 => 135,  343 => 91,  327 => 86,  323 => 125,  271 => 66,  262 => 63,  251 => 101,  211 => 81,  270 => 4,  212 => 74,  206 => 71,  202 => 77,  172 => 51,  167 => 48,  713 => 214,  707 => 211,  704 => 210,  702 => 209,  696 => 206,  686 => 205,  681 => 203,  669 => 201,  666 => 200,  655 => 194,  652 => 193,  635 => 191,  618 => 190,  613 => 188,  608 => 187,  605 => 186,  602 => 185,  596 => 181,  590 => 178,  568 => 175,  551 => 174,  547 => 173,  539 => 171,  536 => 170,  533 => 169,  530 => 168,  528 => 167,  525 => 166,  516 => 161,  512 => 159,  510 => 158,  507 => 157,  505 => 156,  502 => 155,  498 => 134,  483 => 129,  473 => 150,  467 => 148,  465 => 147,  462 => 146,  451 => 141,  446 => 139,  428 => 136,  425 => 135,  414 => 127,  400 => 120,  388 => 117,  377 => 115,  371 => 113,  358 => 139,  347 => 134,  339 => 100,  329 => 95,  324 => 92,  319 => 124,  311 => 89,  307 => 87,  297 => 84,  289 => 112,  233 => 81,  223 => 27,  90 => 20,  306 => 141,  303 => 140,  300 => 139,  286 => 80,  263 => 71,  248 => 100,  236 => 63,  216 => 25,  70 => 23,  344 => 97,  340 => 90,  338 => 130,  295 => 88,  292 => 135,  282 => 79,  259 => 70,  249 => 55,  190 => 50,  178 => 45,  118 => 46,  170 => 79,  129 => 42,  406 => 158,  403 => 121,  401 => 156,  394 => 118,  390 => 150,  378 => 144,  373 => 142,  369 => 141,  364 => 139,  359 => 138,  352 => 94,  349 => 103,  342 => 101,  336 => 99,  332 => 88,  328 => 124,  315 => 83,  301 => 117,  296 => 76,  290 => 106,  280 => 69,  277 => 68,  274 => 77,  261 => 91,  244 => 85,  239 => 97,  234 => 80,  225 => 87,  200 => 55,  198 => 66,  195 => 68,  192 => 23,  184 => 47,  180 => 104,  155 => 53,  146 => 34,  134 => 56,  126 => 55,  124 => 43,  76 => 32,  194 => 87,  181 => 47,  175 => 53,  161 => 38,  148 => 60,  137 => 47,  84 => 28,  65 => 15,  318 => 145,  316 => 121,  299 => 116,  293 => 75,  288 => 85,  284 => 106,  281 => 110,  279 => 104,  275 => 103,  265 => 64,  260 => 62,  256 => 121,  250 => 67,  237 => 86,  228 => 88,  222 => 81,  215 => 54,  210 => 73,  191 => 50,  185 => 20,  174 => 60,  165 => 64,  160 => 52,  153 => 48,  150 => 58,  113 => 39,  110 => 36,  694 => 412,  685 => 406,  680 => 403,  678 => 398,  668 => 395,  663 => 199,  658 => 391,  654 => 389,  647 => 382,  643 => 381,  637 => 378,  633 => 377,  627 => 374,  617 => 367,  609 => 362,  599 => 355,  592 => 179,  585 => 177,  581 => 345,  579 => 342,  577 => 341,  571 => 338,  567 => 337,  557 => 330,  550 => 326,  542 => 172,  538 => 319,  531 => 312,  526 => 310,  518 => 307,  514 => 306,  509 => 304,  504 => 302,  492 => 132,  486 => 130,  481 => 290,  466 => 280,  456 => 143,  452 => 272,  445 => 267,  443 => 261,  439 => 260,  429 => 255,  424 => 254,  422 => 250,  420 => 249,  415 => 247,  396 => 234,  383 => 224,  366 => 140,  361 => 97,  346 => 92,  335 => 93,  331 => 187,  326 => 93,  321 => 91,  304 => 79,  291 => 82,  272 => 76,  267 => 94,  257 => 61,  253 => 1,  242 => 113,  232 => 84,  213 => 82,  197 => 74,  186 => 82,  152 => 63,  127 => 54,  114 => 71,  104 => 42,  97 => 31,  77 => 20,  53 => 16,  34 => 16,  23 => 1,  100 => 36,  81 => 27,  58 => 22,  20 => 1,  480 => 128,  474 => 285,  469 => 158,  461 => 155,  457 => 153,  453 => 142,  444 => 149,  440 => 148,  437 => 147,  435 => 258,  430 => 137,  427 => 143,  423 => 128,  413 => 134,  409 => 124,  407 => 242,  402 => 130,  398 => 119,  393 => 126,  387 => 122,  384 => 116,  381 => 120,  379 => 119,  374 => 114,  368 => 112,  365 => 141,  362 => 110,  360 => 109,  355 => 95,  341 => 131,  337 => 103,  322 => 101,  314 => 99,  312 => 143,  309 => 120,  305 => 119,  298 => 173,  294 => 90,  285 => 111,  283 => 70,  278 => 86,  268 => 107,  264 => 2,  258 => 81,  252 => 68,  247 => 66,  241 => 31,  229 => 73,  220 => 56,  214 => 99,  177 => 54,  169 => 58,  140 => 53,  132 => 44,  128 => 44,  107 => 40,  61 => 28,  273 => 96,  269 => 75,  254 => 60,  243 => 98,  240 => 86,  238 => 64,  235 => 74,  230 => 106,  227 => 60,  224 => 103,  221 => 79,  219 => 84,  217 => 79,  208 => 72,  204 => 78,  179 => 72,  159 => 49,  143 => 48,  135 => 48,  119 => 39,  102 => 39,  71 => 32,  67 => 31,  63 => 30,  59 => 29,  38 => 18,  94 => 39,  89 => 37,  85 => 28,  75 => 25,  68 => 24,  56 => 12,  87 => 29,  21 => 11,  26 => 14,  93 => 21,  88 => 37,  78 => 36,  46 => 9,  27 => 14,  44 => 20,  31 => 23,  28 => 22,  201 => 72,  196 => 65,  183 => 82,  171 => 63,  166 => 57,  163 => 60,  158 => 62,  156 => 41,  151 => 61,  142 => 58,  138 => 57,  136 => 58,  121 => 42,  117 => 50,  105 => 39,  91 => 39,  62 => 25,  49 => 23,  24 => 13,  25 => 12,  19 => 11,  79 => 33,  72 => 30,  69 => 32,  47 => 14,  40 => 6,  37 => 24,  22 => 12,  246 => 54,  157 => 58,  145 => 56,  139 => 59,  131 => 45,  123 => 48,  120 => 48,  115 => 40,  111 => 41,  108 => 42,  101 => 37,  98 => 38,  96 => 19,  83 => 35,  74 => 19,  66 => 30,  55 => 24,  52 => 24,  50 => 15,  43 => 21,  41 => 19,  35 => 17,  32 => 3,  29 => 2,  209 => 24,  203 => 56,  199 => 53,  193 => 51,  189 => 71,  187 => 60,  182 => 69,  176 => 102,  173 => 71,  168 => 60,  164 => 54,  162 => 71,  154 => 40,  149 => 62,  147 => 46,  144 => 45,  141 => 67,  133 => 51,  130 => 57,  125 => 40,  122 => 44,  116 => 47,  112 => 47,  109 => 45,  106 => 35,  103 => 41,  99 => 26,  95 => 37,  92 => 32,  86 => 17,  82 => 36,  80 => 41,  73 => 24,  64 => 28,  60 => 13,  57 => 18,  54 => 26,  51 => 16,  48 => 15,  45 => 14,  42 => 19,  39 => 25,  36 => 17,  33 => 16,  30 => 15,);
    }
}