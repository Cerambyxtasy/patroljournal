<?php

/* CerambyxtasyOltreeMainBundle:Journal:index.html.twig */
class __TwigTemplate_e91cc0227bf8f6567a8c3a5362d77f4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("CerambyxtasyOltreeMainBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CerambyxtasyOltreeMainBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        $this->env->loadTemplate("CerambyxtasyOltreeMainBundle:Journal:nav.html.twig")->display($context);
        echo "   
<div id=\"JournalEntry\" class=\"row\">
    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formJournal"]) ? $context["formJournal"] : $this->getContext($context, "formJournal")), 'form_start');
        echo "
        <label for=\"hexagon_id\">Hexagone</label>
        <select type=\"text\" name=\"hexagonId\" id=\"hexagonId\"/>
        </select>
        <input type=\"hidden\" name=\"journalEntryId\" id=\"journalEntryId\"/>
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formJournal"]) ? $context["formJournal"] : $this->getContext($context, "formJournal")), 'errors');
        echo "

    ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formJournal"]) ? $context["formJournal"] : $this->getContext($context, "formJournal")), 'form_end');
        echo "        
    </div>
<div id=\"main\" class=\"row\">
    <section class=\"mapSection\">
        <article id=\"map\" class=\"mapSection small-10 column\">
            <canvas id=\"hexaGrid\">      
            </canvas>
            <div id=\"mapImage\" style=\"background-image:url('/bundles/cerambyxtasyoltreemain/images/uploads/";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["mapImageName"]) ? $context["mapImageName"] : $this->getContext($context, "mapImageName")), "html", null, true);
        echo "');\">
            </div>
        </article>
        <aside id=\"tools\" class=\"small-2 collapse-right column\">        
            <div id=\"generalInfos\">
                <p>Etalez votre carte</p>
                <p>sur la table ci-contre :</p>
                <p>d'un clic glissé,</p>
                <p>déplacez votre fichier !</p>
            </div>              
            <!--<label class=\"small-12 column\">Largeur des hexagones :</label><input class=\"small-12 column hexaWidth\" type=\"text\" placeholder=\"Hexagon width\" name=\"hexawidth\"/>
            <label class=\"small-12 column\">Hauteur des hexagones :</label><input class=\"small-12 column hexaHeight\" type=\"text\" placeholder=\"Hexagon Height\" name=\"hexaheight\"/>-->
            <fieldset class=\"buttonSet\">
                <input type=\"checkbox\" id=\"setGrid\" class=\"small-12 column\" name=\"setGrid\"/><label for=\"setGrid\">Placer la grille</label>     
                <button id=\"resetGrid\" class=\"small-12 column\">Réinitialiser</button>      
            </fieldset>
            <div id=\"gridAdjustInfos\">
                <p>Pointez, glissez le coeur léger</p>
                <p><b>ZQSD</b> la position ajuster</p>
                <p><b>ZQSD+shift</b> pour retailler</p>
            </div>                            
            <!--<button id=\"mesureHexagon\" class=\"button small-12 column\">Mesurer un hexagone</button>-->

            <fieldset class=\"buttonSet\">
                <legend>Affichages</legend>
                <input type=\"checkbox\" name=\"displayHexaGrid\" id=\"displayHexaGrid\" checked=\"checked\"/><label for=\"displayHexaGrid\">Grille</label>                               
                <input type=\"checkbox\" name=\"displayHexaNumbers\" id=\"displayHexaNumbers\" /><label for=\"displayHexaNumbers\">Num&eacute;ros</label>
                <input type=\"checkbox\" name=\"displayHexaLabels\" id=\"displayHexaLabels\" /><label for=\"displayHexaLabels\">Labels</label>                                    
            </fieldset>

            <fieldset id=\"gridColors\">
                <legend>Couleurs de la grille</legend>
                <input type=\"radio\" id=\"greenGrid\" name=\"radio\" data-classColor=\"#078941\" /><label for=\"greenGrid\">Sinople</label>
                <input type=\"radio\" id=\"blueGrid\" name=\"radio\" data-classColor=\"#2e72bb\"/><label for=\"blueGrid\">Azur</label>
                <input type=\"radio\" id=\"redGrid\" name=\"radio\" data-classColor=\"#c4102a\"/><label for=\"redGrid\">Gueules</label>
                <input type=\"radio\" id=\"greyGrid\" name=\"radio\" data-classColor=\"grey\" checked=\"checked\"/><label for=\"greyGrid\">Sable</label>
            </fieldset>                                    
        </aside>        
    </section>
</div>
";
    }

    public function getTemplateName()
    {
        return "CerambyxtasyOltreeMainBundle:Journal:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 21,  49 => 14,  44 => 12,  36 => 7,  31 => 5,  28 => 4,);
    }
}
