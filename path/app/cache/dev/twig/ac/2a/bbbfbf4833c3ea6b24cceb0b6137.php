<?php

/* CerambyxtasyOltreeMainBundle::layout.html.twig */
class __TwigTemplate_ac2abbbfbf4833c3ea6b24cceb0b6137 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />

        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js\"></script>
        <script src=\"//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js\"></script>
        <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script> 

        ";
        // line 11
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "8aeb694_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8aeb694_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/8aeb694_part_1_jquery.sprite.min_1.js");
            // line 12
            echo "        <script type='text/javascript' src='";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "'></script>            
        ";
        } else {
            // asset "8aeb694"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8aeb694") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/8aeb694.js");
            echo "        <script type='text/javascript' src='";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "'></script>            
        ";
        }
        unset($context["asset_url"]);
        // line 14
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "d0910f8_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d0910f8_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/d0910f8_tiny.editor.packed_1.js");
            // line 15
            echo "        <script type='text/javascript' src='";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "'></script>            
        ";
        } else {
            // asset "d0910f8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d0910f8") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/d0910f8.js");
            echo "        <script type='text/javascript' src='";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "'></script>            
        ";
        }
        unset($context["asset_url"]);
        // line 17
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "b135e72_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b135e72_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/b135e72_part_1_HexagonTools_1.js");
            // line 18
            echo "        <script type='text/javascript' src='";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "'></script>            
        ";
        } else {
            // asset "b135e72"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b135e72") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/b135e72.js");
            echo "        <script type='text/javascript' src='";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "'></script>            
        ";
        }
        unset($context["asset_url"]);
        // line 20
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "ad439e6_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ad439e6_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/ad439e6_part_1_Grid_1.js");
            // line 21
            echo "        <script type='text/javascript' src='";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "'></script>            
        ";
            // asset "ad439e6_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ad439e6_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/ad439e6_part_1_HexCalcs_2.js");
            echo "        <script type='text/javascript' src='";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "'></script>            
        ";
        } else {
            // asset "ad439e6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ad439e6") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/ad439e6.js");
            echo "        <script type='text/javascript' src='";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "'></script>            
        ";
        }
        unset($context["asset_url"]);
        // line 23
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "9cb803f_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9cb803f_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/9cb803f_part_1_config_1.js");
            // line 24
            echo "        <script type='text/javascript' src='";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "'></script>            
        ";
            // asset "9cb803f_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9cb803f_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/9cb803f_part_1_listeners_2.js");
            echo "        <script type='text/javascript' src='";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "'></script>            
        ";
            // asset "9cb803f_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9cb803f_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/9cb803f_part_1_plugins_3.js");
            echo "        <script type='text/javascript' src='";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "'></script>            
        ";
            // asset "9cb803f_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9cb803f_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/9cb803f_part_1_utils_4.js");
            echo "        <script type='text/javascript' src='";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "'></script>            
        ";
        } else {
            // asset "9cb803f"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9cb803f") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/9cb803f.js");
            echo "        <script type='text/javascript' src='";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "'></script>            
        ";
        }
        unset($context["asset_url"]);
        // line 26
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "33e3f27_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_33e3f27_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/33e3f27_part_1_main_1.js");
            // line 27
            echo "        <script type='text/javascript' src='";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "'></script>            
        ";
        } else {
            // asset "33e3f27"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_33e3f27") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/33e3f27.js");
            echo "        <script type='text/javascript' src='";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "'></script>            
        ";
        }
        unset($context["asset_url"]);
        // line 29
        echo "
        <link rel=\"stylesheet\" href=\"http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css\" />
        <link href='http://fonts.googleapis.com/css?family=Quintessential' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Fondamento&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        ";
        // line 33
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3e0e169_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3e0e169_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/3e0e169_part_1_ie_1.css");
            // line 34
            echo "        <link rel='stylesheet' href='";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "'/>
        ";
            // asset "3e0e169_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3e0e169_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/3e0e169_part_1_main_2.css");
            echo "        <link rel='stylesheet' href='";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "'/>
        ";
            // asset "3e0e169_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3e0e169_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/3e0e169_part_1_print_3.css");
            echo "        <link rel='stylesheet' href='";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "'/>
        ";
            // asset "3e0e169_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3e0e169_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/3e0e169_part_1_screen_4.css");
            echo "        <link rel='stylesheet' href='";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "'/>
        ";
        } else {
            // asset "3e0e169"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3e0e169") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/3e0e169.css");
            echo "        <link rel='stylesheet' href='";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "'/>
        ";
        }
        unset($context["asset_url"]);
        // line 35
        echo "            
        ";
        // line 36
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "9884273_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9884273_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/9884273_part_1_tinyeditor_1.css");
            // line 37
            echo "        <link rel='stylesheet' href='";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "'/>
        ";
        } else {
            // asset "9884273"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9884273") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/9884273.css");
            echo "        <link rel='stylesheet' href='";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "'/>
        ";
        }
        unset($context["asset_url"]);
        // line 38
        echo "            
        <title>";
        // line 39
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    </head>
    <body>
        <header class=\"row\">
            ";
        // line 43
        $this->env->loadTemplate("CerambyxtasyOltreeMainBundle:Partials:header.html.twig")->display($context);
        echo "            
        </header>
            ";
        // line 45
        $this->displayBlock('body', $context, $blocks);
        // line 46
        echo "            
        <footer class=\"row\"></footer>
    </body>    
</html>";
    }

    // line 39
    public function block_title($context, array $blocks = array())
    {
        echo "Oltréé ! ";
    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        // line 46
        echo "            ";
    }

    public function getTemplateName()
    {
        return "CerambyxtasyOltreeMainBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 46,  269 => 45,  263 => 39,  256 => 46,  254 => 45,  249 => 43,  242 => 39,  239 => 38,  225 => 37,  221 => 36,  218 => 35,  186 => 34,  182 => 33,  176 => 29,  162 => 27,  157 => 26,  125 => 24,  120 => 23,  100 => 21,  95 => 20,  81 => 18,  76 => 17,  62 => 15,  57 => 14,  43 => 12,  39 => 11,  34 => 9,  30 => 8,  21 => 1,);
    }
}
