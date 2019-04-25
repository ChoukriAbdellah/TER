<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* project/prep-terrain.html.twig */
class __TwigTemplate_06d294c5385a0130946f2ae577b963ae50322012cf10f4ef7b75921fbb45fe8d extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

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
        // line 1
        return "/dashboard-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("/dashboard-layout.html.twig", "project/prep-terrain.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        // line 4
        echo "
\t<!-- Specific Page Vendor CSS -->
\t<link rel=\"stylesheet\" href=\"assets/vendor/pnotify/pnotify.custom.css\" />

\t";
    }

    // line 10
    public function block_title($context, array $blocks = [])
    {
        // line 11
        echo "\t\t\t\t<h2> Préparation et accès du terrain </h2>
\t\t\t\t";
    }

    // line 14
    public function block_pageactuelle($context, array $blocks = [])
    {
        echo " Préparation et accès du terrain ";
    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        // line 17
        echo "
\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t\t<header class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Préparation et accès du terrain</h2>
\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t<br><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nb_pins", []), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Quel est le nombre de pins dans votre terrain ?"]);
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nb_pins", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo "
                                                        </div>      

                                                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nb_sapins", []), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Quel est le nombre de sapins dans votre terrain ?"]);
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nb_sapins", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo "      
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                                        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nb_bouleaux", []), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Quel est le nombre de bouleaux dans votre terrain ?"]);
        echo "\t
                                                            
                                                           <div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nb_bouleaux", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo "      
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                                          ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nb_chenes", []), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Quel est le nombre de chenes dans votre terrain ?"]);
        echo "\t
                                                            
                                                        <div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nb_chenes", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo "      
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                                         ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nb_erables", []), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Quel est le nombre d'erables dans votre terrain ?"]);
        echo "\t
                                                            
                                                           <div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nb_erables", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo "      
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                                         ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nb_frenes", []), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Quel est le nombre de frenes dans votre terrain ?"]);
        echo "\t
                                                            
                                                           <div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nb_frenes", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo "      
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                                         ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nb_noyers", []), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Quel est le nombre de noyers dans votre terrain ?"]);
        echo "\t
                                                            
                                                           <div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nb_noyers", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo "      
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                                         ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nb_autres", []), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Indiquez  le nombre d'arbre d'un autre type non cité."]);
        echo "\t
                                                            
                                                           <div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nb_autres", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo "      
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t    </div>
                                                            ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "taille_pins", []), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Indiquez  la taille moyenne des pins."]);
        echo "\t
                                                            
                                                           <div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "taille_pins", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo "
                                                                </div> 

                                                            ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "taille_sapins", []), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Indiquez  la taille moyenne des sapins."]);
        echo "\t
                                                            
                                                           <div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "taille_sapins", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo " 
                                                                </div>
                                                            
                                                            ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "taille_bouleaux", []), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Indiquez  la taille moyenne des bouleaux."]);
        echo "\t
                                                            
                                                           <div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "taille_bouleaux", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo " 
                                                                </div>
                                                           
                                                            ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "taille_chenes", []), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Indiquez  la taille moyenne des chenes."]);
        echo "\t
                                                            
                                                           <div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "taille_chenes", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo " 
                                                                </div> 
                                                           
                                                            ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "taille_erables", []), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Indiquez  la taille moyenne des erables."]);
        echo "\t
                                                            
                                                           <div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "taille_erables", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo " 
                                                                </div> 
                                                           
                                                            ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "taille_frenes", []), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Indiquez  la taille moyenne des frenes."]);
        echo "\t
                                                            
                                                           <div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "taille_frenes", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo " 
                                                                </div> 
                                                           
                                                            ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "taille_noyers", []), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Indiquez  la taille moyenne des noyers."]);
        echo "\t
                                                            
                                                           <div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "taille_noyers", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo " 
                                                                </div>
                                                            
                                                            ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "taille_autres", []), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Indiquez  la taille moyenne d'arbre de d'un autre type."]);
        echo "\t
                                                            
                                                           <div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "taille_autres", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo "
                                                                </div>                           
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t    </div> 

                                                            ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "positionTerrain", []), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Quelle est la position de votre terrain ?"]);
        echo "\t
                                                            
                                                           <div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "positionTerrain", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo "
                                                                </div>                           
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t    </div> 
                                                            
                                                            
                                                            
                                                        <button class=\"mb-xs mt-xs mr-xs btn btn-lg btn-default\" type=\"submit\">Valider</button>
                                                        ";
        // line 133
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

    // line 154
    public function block_javascript($context, array $blocks = [])
    {
        // line 155
        echo "\t<!-- Specific Page Vendor -->
\t\t<script src=\"assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js\"></script>
\t\t<script src=\"assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js\"></script>
\t\t<script src=\"assets/vendor/store-js/store.js\"></script>

    ";
    }

    public function getTemplateName()
    {
        return "project/prep-terrain.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 155,  323 => 154,  299 => 133,  288 => 125,  282 => 122,  274 => 117,  268 => 114,  262 => 111,  256 => 108,  250 => 105,  244 => 102,  238 => 99,  232 => 96,  226 => 93,  220 => 90,  214 => 87,  208 => 84,  202 => 81,  196 => 78,  190 => 75,  184 => 72,  178 => 69,  172 => 66,  166 => 63,  160 => 60,  154 => 57,  148 => 54,  142 => 51,  136 => 48,  130 => 45,  124 => 42,  118 => 39,  112 => 36,  106 => 33,  101 => 31,  95 => 28,  90 => 26,  85 => 24,  76 => 17,  73 => 16,  67 => 14,  62 => 11,  59 => 10,  51 => 4,  48 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "project/prep-terrain.html.twig", "/opt/lampp/htdocs/Symfony-heroku/templates/project/prep-terrain.html.twig");
    }
}
