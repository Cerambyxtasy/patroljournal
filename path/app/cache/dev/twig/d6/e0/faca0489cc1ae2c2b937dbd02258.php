<?php

/* CerambyxtasyOltreeMainBundle:Partials:header.html.twig */
class __TwigTemplate_d6e0faca0489cc1ae2c2b937dbd02258 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('header', $context, $blocks);
    }

    public function block_header($context, array $blocks = array())
    {
        echo "  
    ";
        // line 2
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 3
            echo "     ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username")), "FOSUserBundle"), "html", null, true);
            echo " |
     <a href=\"";
            // line 4
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
         ";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
     </a>
    ";
        }
        // line 7
        echo "             
";
    }

    public function getTemplateName()
    {
        return "CerambyxtasyOltreeMainBundle:Partials:header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  28 => 2,  20 => 1,  238 => 43,  235 => 42,  229 => 33,  222 => 43,  220 => 42,  215 => 40,  209 => 37,  202 => 33,  199 => 32,  167 => 31,  163 => 30,  157 => 26,  143 => 24,  138 => 23,  106 => 21,  101 => 20,  81 => 18,  76 => 17,  62 => 15,  57 => 14,  43 => 12,  39 => 5,  34 => 9,  30 => 3,  21 => 1,  119 => 33,  116 => 32,  110 => 34,  108 => 32,  104 => 30,  98 => 29,  89 => 26,  84 => 25,  79 => 24,  75 => 23,  72 => 22,  64 => 17,  59 => 15,  51 => 14,  47 => 11,  45 => 7,  42 => 9,  38 => 7,  36 => 6,  32 => 4,  29 => 3,  19 => 1,);
    }
}
