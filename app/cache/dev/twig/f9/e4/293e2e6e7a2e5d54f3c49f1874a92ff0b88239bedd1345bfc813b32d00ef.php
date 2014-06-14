<?php

/* ::base.html.twig */
class __TwigTemplate_f9e4293e2e6e7a2e5d54f3c49f1874a92ff0b88239bedd1345bfc813b32d00ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'connection' => array($this, 'block_connection'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'pied' => array($this, 'block_pied'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('connection', $context, $blocks);
        // line 32
        echo "        <a href=\"";
        echo $this->env->getExtension('routing')->getPath("chapeau");
        echo "\">retour sur le chapeau</a>
        ";
        // line 33
        $this->displayBlock('menu', $context, $blocks);
        // line 39
        echo "        
         ";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 41
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 42
        echo "        
    
    ";
        // line 44
        $this->displayBlock('pied', $context, $blocks);
        // line 55
        echo "   </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "AsblSoleil";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 10
    public function block_connection($context, array $blocks = array())
    {
        // line 11
        echo "          <div>
            ";
        // line 12
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 13
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username")), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 14
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>  |
                <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("emh_membres_profil", array("slug" => $this->getAttribute((isset($context["sites"]) ? $context["sites"] : $this->getContext($context, "sites")), "slug"))), "html", null, true);
            echo "\">profil</a>
            ";
        } else {
            // line 19
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>|
                 <a href=\"";
            // line 20
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">s'enregistrer</a>
            ";
        }
        // line 22
        echo "        </div>

        ";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 25
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
            foreach ($context['_seq'] as $context["key"] => $context["message"]) {
                // line 26
                echo "                <div class=\"flash-";
                echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
                echo "\">
                    ";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), array(), "FOSUserBundle"), "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        ";
    }

    // line 33
    public function block_menu($context, array $blocks = array())
    {
        echo " 
       
        <div class=\"menu\">
              ";
        // line 36
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("emhcmsPrincipalBundle:Rubrique:menu", array("slug" => $this->getAttribute((isset($context["sites"]) ? $context["sites"] : $this->getContext($context, "sites")), "slug"))), array());
        // line 37
        echo "\t</div>
        ";
    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
    }

    // line 41
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 44
    public function block_pied($context, array $blocks = array())
    {
        // line 45
        echo "    Pied de page
    ";
        // line 47
        echo "    <form action=\"https://www.paypal.com/cgi-bin/webscr\" method=\"post\" target=\"_top\">
      <input type=\"hidden\" name=\"cmd\" value=\"_s-xclick\">
      <input type=\"hidden\" name=\"hosted_button_id\" value=\"GADXW639KXMTQ\">
      <input type=\"image\" src=\"https://www.paypalobjects.com/fr_FR/BE/i/btn/btn_donateCC_LG.gif\" border=\"0\" name=\"submit\" alt=\"PayPal - la solution de paiement en ligne la plus simple et la plus sécurisée !\">
      <img alt=\"\" border=\"0\" src=\"https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif\" width=\"1\" height=\"1\">
    </form>
    
    ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 47,  188 => 45,  185 => 44,  180 => 41,  175 => 40,  170 => 37,  168 => 36,  161 => 33,  157 => 31,  151 => 30,  142 => 27,  137 => 26,  132 => 25,  128 => 24,  124 => 22,  119 => 20,  112 => 19,  107 => 17,  102 => 15,  98 => 14,  93 => 13,  91 => 12,  88 => 11,  85 => 10,  80 => 6,  74 => 5,  66 => 44,  57 => 40,  54 => 39,  52 => 33,  45 => 10,  36 => 6,  32 => 5,  26 => 1,  84 => 41,  79 => 39,  76 => 38,  73 => 37,  68 => 55,  62 => 42,  59 => 41,  56 => 28,  50 => 26,  47 => 32,  44 => 23,  38 => 7,  35 => 20,  28 => 16,);
    }
}
