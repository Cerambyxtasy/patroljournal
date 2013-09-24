<?php

/* CerambyxtasyOltreeMainBundle:Journal:nav.html.twig */
class __TwigTemplate_70471ad5f35bf61014de281295000015 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'nav' => array($this, 'block_nav'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('nav', $context, $blocks);
    }

    public function block_nav($context, array $blocks = array())
    {
        // line 2
        echo "<nav class=\"row\">
    <ul>
        <li class=\"small-4 column\"><a href=\"#\">Carte</a></li>
        <li class=\"small-4 column\"><a href=\"#\">Ajouter une note</a></li>
        <li class=\"small-4 column\"><a href=\"#\">Consulter le journal</a></li>
    </ul>
</nav>
";
    }

    public function getTemplateName()
    {
        return "CerambyxtasyOltreeMainBundle:Journal:nav.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  20 => 1,  59 => 21,  49 => 14,  44 => 12,  36 => 7,  31 => 5,  28 => 4,);
    }
}
