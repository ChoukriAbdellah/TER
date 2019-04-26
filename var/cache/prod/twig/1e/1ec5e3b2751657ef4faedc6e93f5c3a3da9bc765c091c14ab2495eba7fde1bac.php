<?php

/* project/menuiseries-int.html.twig */
class __TwigTemplate_2e28745b207196b7df4fc6ae9bf117269f4c0dc9658c01bd7327c3cda1032332 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("/dashboard-layout.html.twig", "project/menuiseries-int.html.twig", 1);
        $this->blocks = [
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'pageactuelle' => [$this, 'block_pageactuelle'],
            'body' => [$this, 'block_body'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "/dashboard-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        // line 5
        echo "
\t<!-- Specific Page Vendor CSS -->
\t<link rel=\"stylesheet\" href=\"assets/vendor/pnotify/pnotify.custom.css\" />

\t";
    }

    // line 11
    public function block_title($context, array $blocks = [])
    {
        // line 12
        echo "\t\t\t\t<h2>Menuiseries intérieures </h2>
\t\t\t\t";
    }

    // line 15
    public function block_pageactuelle($context, array $blocks = [])
    {
        echo "Menuiseries intérieures ";
    }

    // line 17
    public function block_body($context, array $blocks = [])
    {
        // line 18
        echo "
\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t\t<header class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Menuiseries intérieures</h2>
\t\t\t\t\t\t\t\t\t</header>

                                    
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t<br><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "portesPleines", []), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Indiquez le nombre de portes pleines à poser "]);
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "portesPleines", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo "        
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "portesVitrees", []), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Indiquez le nombre de portes vitrées à poser"]);
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "portesVitrees", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>  

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "portesBattantes", []), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Indiquez le nombre de portes battantes à poser"]);
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "portesBattantes", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>  

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "portesCoulissantes", []), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Indiquez le nombre de portes coulissantes à poser"]);
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "portesCoulissantes", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>  

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "portesPlacardPliantes", []), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Indiquez le nombre de portes de placard pliantes à poser"]);
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "portesPlacardPliantes", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>  

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "portesPlacardBattantes", []), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Indiquez le nombre de portes de placard battantes à poser "]);
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "portesPlacardBattantes", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>  

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "portesPlacardCoulissantes", []), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Indiquez le nombre de portes de placard coulissantes à poser"]);
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "portesPlacardCoulissantes", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>  

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "materieauRampes", []), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Quel matérieau voulez-vous pour la rampe de vos escaliers ?"]);
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "materieauRampes", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div> 

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "tailleRampes", []), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Indiquez la taille (en mètres carrés) de rampes à poser "]);
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "tailleRampes", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div> 

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "materieauBalustrades", []), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Quel matérieau voulez-vous pour vos balustrades ?"]);
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "materieauBalustrades", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div> 

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "tailleBalustrades", []), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Indiquez la taille (en mètres carrés) de balustrades à poser "]);
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "tailleBalustrades", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<br><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t  <button class=\"mb-xs mt-xs mr-xs btn btn-lg btn-default\" type=\"submit\">Valider</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   ";
        // line 89
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"pager\">

\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

    ";
    }

    // line 106
    public function block_javascript($context, array $blocks = [])
    {
        // line 107
        echo "\t<!-- Specific Page Vendor -->
\t\t<script src=\"assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js\"></script>
\t\t<script src=\"assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js\"></script>
\t\t<script src=\"assets/vendor/store-js/store.js\"></script>

    ";
    }

    public function getTemplateName()
    {
        return "project/menuiseries-int.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 107,  226 => 106,  206 => 89,  197 => 83,  192 => 81,  186 => 78,  181 => 76,  175 => 73,  170 => 71,  164 => 68,  159 => 66,  153 => 63,  148 => 61,  142 => 58,  137 => 56,  131 => 53,  126 => 51,  120 => 48,  115 => 46,  109 => 43,  104 => 41,  98 => 38,  93 => 36,  87 => 33,  82 => 31,  76 => 28,  64 => 18,  61 => 17,  55 => 15,  50 => 12,  47 => 11,  39 => 5,  36 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "project/menuiseries-int.html.twig", "/opt/lampp/htdocs/Symfony-heroku/templates/project/menuiseries-int.html.twig");
    }
}
