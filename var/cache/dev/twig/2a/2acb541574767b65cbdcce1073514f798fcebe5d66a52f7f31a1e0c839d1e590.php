<?php

/* project/prep-terrain.html.twig */
class __TwigTemplate_a444f1ada97fe053489f00ec97b0ab90e5089dda1a3ff090a29c76b014916fd6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("/dashboard-layout.html.twig", "project/prep-terrain.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "project/prep-terrain.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "project/prep-terrain.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "
\t<!-- Specific Page Vendor CSS -->
\t<link rel=\"stylesheet\" href=\"assets/vendor/pnotify/pnotify.custom.css\" />

\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 11
        echo "\t\t\t\t<h2> Préparation et accès du terrain </h2>
\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_pageactuelle($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageactuelle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageactuelle"));

        echo " Préparation et accès du terrain ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->source); })()), 'form_start');
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->source); })()), "submit", []), 'widget', ["label" => "Ajouter un type d'arbres"]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t<br><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                  <label id=\"17\" class=\"col-sm-3 control-label\">Indiquez  la taille moyenne des pins.\"? <span class=\"required\">*</span></label>

                                                           <div class=\"col-sm-9\" id=\"18\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->source); })()), "taille_pins", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo "
                                                                </div> 

                                  <label id=\"19\" class=\"col-sm-3 control-label\">Indiquez  la taille moyenne des sapins.\"? <span class=\"required\">*</span></label>
                                                            
                                                           <div class=\"col-sm-9\"id=\"20\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->source); })()), "taille_sapins", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo " 
                                                                </div>
                                                            
                                  <label id=\"21\" class=\"col-sm-3 control-label\">Indiquez  la taille moyenne des bouleaux.\"? <span class=\"required\">*</span></label>
                                                            
                                                           <div class=\"col-sm-9\" id=\"22\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 44, $this->source); })()), "taille_bouleaux", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo " 
                                                                </div>
                                                           
                                  <label id=\"23\" class=\"col-sm-3 control-label\">Indiquez  la taille moyenne des chenes.\"? <span class=\"required\">*</span></label>
                                                            
                                                           <div class=\"col-sm-9\" id=\"24\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->source); })()), "taille_chenes", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo " 
                                                                </div> 
                                                           
                                  <label id=\"25\" class=\"col-sm-3 control-label\">Indiquez  la taille moyenne des erables.\"? <span class=\"required\">*</span></label>
                                                            
                                                           <div class=\"col-sm-9\" id=\"26\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 56, $this->source); })()), "taille_erables", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo " 
                                                                </div> 
                                                           
                                  <label id=\"27\" class=\"col-sm-3 control-label\">Indiquez  la taille moyenne des frenes.\"? <span class=\"required\">*</span></label>
                                                            
                                                           <div class=\"col-sm-9\" id=\"28\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->source); })()), "taille_frenes", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo " 
                                                                </div> 
                                                           
                                  <label id=\"29\" class=\"col-sm-3 control-label\">Indiquez  la taille moyenne des noyers.\"? <span class=\"required\">*</span></label>
                                                            
                                                           <div class=\"col-sm-9\" id=\"30\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 68, $this->source); })()), "taille_noyers", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo " 
                                                                </div>
                                                            
                                  <label id=\"31\" class=\"col-sm-3 control-label\">Indiquez  la taille moyenne d'arbres d'autre type.\"? <span class=\"required\">*</span></label>
                                                            
                                                           <div class=\"col-sm-9\" id=\"32\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 74, $this->source); })()), "taille_autres", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo "
                                                                </div>                           
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t    </div> 

                                                            ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 79, $this->source); })()), "positionTerrain", []), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Quelle est la position de votre terrain ?"]);
        echo "\t
                                                            
                                                           <div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 82, $this->source); })()), "positionTerrain", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo "
                                                                </div>                           
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t    </div> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label id=\"1\" class=\"col-sm-3 control-label\">Quel est le nombre de pins dans votre terrain <span class=\"required\">*</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\" id=\"2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 88, $this->source); })()), "nb_pins", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo "
                                                        </div>      

                              <label id=\"3\" class=\"col-sm-3 control-label\">Quel est le nombre de sapins dans votre terrain ? <span class=\"required\">*</span></label>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\" id=\"4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 94, $this->source); })()), "nb_sapins", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo "      
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                              <label id=\"5\" class=\"col-sm-3 control-label\">Quel est le nombre de bouleaux dans votre terrain ? <span class=\"required\">*</span></label>
                                                            
                                                           <div class=\"col-sm-9\"id=\"6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 100, $this->source); })()), "nb_bouleaux", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo "      
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                  <label id=\"7\" class=\"col-sm-3 control-label\">Quel est le nombre de chenes dans votre terrain ? <span class=\"required\">*</span></label>
                                                        
                                                        <div class=\"col-sm-9\" id=\"8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 106, $this->source); })()), "nb_chenes", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo "      
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                              <label id=\"9\" class=\"col-sm-3 control-label\">Quel est le nombre d'erables dans votre terrain ? <span class=\"required\">*</span></label>
                  
                                                           <div class=\"col-sm-9\" id=\"10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 112, $this->source); })()), "nb_erables", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo "      
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                  <label id=\"11\" class=\"col-sm-3 control-label\">Quel est le nombre de frenes dans votre terrain ? <span class=\"required\">*</span></label>
                                                            
                                                           <div class=\"col-sm-9\" id=\"12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 118, $this->source); })()), "nb_frenes", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo "      
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                  <label id=\"13\" class=\"col-sm-3 control-label\">Quel est le nombre de noyers dans votre terrain ? <span class=\"required\">*</span></label>
                                                            
                                                           <div class=\"col-sm-9\" id=\"14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 124, $this->source); })()), "nb_noyers", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo "      
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\t\t
                                  <label id=\"15\" class=\"col-sm-3 control-label\">Quel est le nombre d'arbres d'autre type dans votre terrain ? <span class=\"required\">*</span></label>
                                                            
                                                           <div class=\"col-sm-9\" id=\"16\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    ";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 130, $this->source); })()), "nb_autres", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo "      
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t    </div>
                                                            
                                                            
                                                            
                                                        <button class=\"mb-xs mt-xs mr-xs btn btn-lg btn-default\" type=\"submit\">Valider</button>
                                                        ";
        // line 137
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 137, $this->source); })()), 'form_end');
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 154
    public function block_javascript($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 155
        echo "\t\t<script>
\t\tfor(var \$k=1; \$k<=32;\$k++){
\t\tidd=\$k.toString();
\t\tdocument.getElementById(idd).style.visibility='hidden';
\t\t} 
\t\t
\t\t

\t\t  var \$i=1;
\t\t\tvar \$j=2;
\t\t\tvar \$k=\$i + 16;
\t\t\tvar \$l=\$j + 16;
\t\t function update(){
\t\t id=\$i.toString();
\t\t id2=\$j.toString();
\t\t id3=\$k.toString();
\t\t id4=\$l.toString();
    var checked = document.getElementById(id).value;
    document.getElementById(id).style.visibility='visible';
\t\tdocument.getElementById(id2).style.visibility='visible'; 
\t\tdocument.getElementById(id3).style.visibility='visible';
\t\tdocument.getElementById(id4).style.visibility='visible'; 
\t\t \$i=\$i+2; 
\t\t \$j=\$j+2;
\t\t \$k=\$i + 16;
\t\t \$l=\$j + 16;
\t\t 
\t\t
}

//validate();
\t\t</script>
\t<!-- Specific Page Vendor -->
\t\t<script src=\"assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js\"></script>
\t\t<script src=\"assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js\"></script>
\t\t<script src=\"assets/vendor/store-js/store.js\"></script>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  335 => 155,  326 => 154,  300 => 137,  290 => 130,  281 => 124,  272 => 118,  263 => 112,  254 => 106,  245 => 100,  236 => 94,  227 => 88,  218 => 82,  212 => 79,  204 => 74,  195 => 68,  186 => 62,  177 => 56,  168 => 50,  159 => 44,  150 => 38,  141 => 32,  131 => 25,  127 => 24,  118 => 17,  109 => 16,  91 => 14,  80 => 11,  71 => 10,  57 => 4,  48 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"/dashboard-layout.html.twig\" %}

\t{% block head %}

\t<!-- Specific Page Vendor CSS -->
\t<link rel=\"stylesheet\" href=\"assets/vendor/pnotify/pnotify.custom.css\" />

\t{% endblock %}

\t\t\t\t{% block title %}
\t\t\t\t<h2> Préparation et accès du terrain </h2>
\t\t\t\t{% endblock %}

\t\t\t\t{% block pageactuelle %} Préparation et accès du terrain {% endblock %}

    {% block body %}

\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t\t<header class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Préparation et accès du terrain</h2>
\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_start(form) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.submit, { 'label': 'Ajouter un type d\\'arbres' }) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t<br><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                  <label id=\"17\" class=\"col-sm-3 control-label\">Indiquez  la taille moyenne des pins.\"? <span class=\"required\">*</span></label>

                                                           <div class=\"col-sm-9\" id=\"18\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    {{ form_row(form.taille_pins, {'attr': {'class': 'form-control input-lg mb-md'}} ) }}
                                                                </div> 

                                  <label id=\"19\" class=\"col-sm-3 control-label\">Indiquez  la taille moyenne des sapins.\"? <span class=\"required\">*</span></label>
                                                            
                                                           <div class=\"col-sm-9\"id=\"20\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    {{ form_row(form.taille_sapins, {'attr': {'class': 'form-control input-lg mb-md'}} ) }} 
                                                                </div>
                                                            
                                  <label id=\"21\" class=\"col-sm-3 control-label\">Indiquez  la taille moyenne des bouleaux.\"? <span class=\"required\">*</span></label>
                                                            
                                                           <div class=\"col-sm-9\" id=\"22\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    {{ form_row(form.taille_bouleaux, {'attr': {'class': 'form-control input-lg mb-md'}} ) }} 
                                                                </div>
                                                           
                                  <label id=\"23\" class=\"col-sm-3 control-label\">Indiquez  la taille moyenne des chenes.\"? <span class=\"required\">*</span></label>
                                                            
                                                           <div class=\"col-sm-9\" id=\"24\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    {{ form_row(form.taille_chenes, {'attr': {'class': 'form-control input-lg mb-md'}} ) }} 
                                                                </div> 
                                                           
                                  <label id=\"25\" class=\"col-sm-3 control-label\">Indiquez  la taille moyenne des erables.\"? <span class=\"required\">*</span></label>
                                                            
                                                           <div class=\"col-sm-9\" id=\"26\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    {{ form_row(form.taille_erables, {'attr': {'class': 'form-control input-lg mb-md'}} ) }} 
                                                                </div> 
                                                           
                                  <label id=\"27\" class=\"col-sm-3 control-label\">Indiquez  la taille moyenne des frenes.\"? <span class=\"required\">*</span></label>
                                                            
                                                           <div class=\"col-sm-9\" id=\"28\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    {{ form_row(form.taille_frenes, {'attr': {'class': 'form-control input-lg mb-md'}} ) }} 
                                                                </div> 
                                                           
                                  <label id=\"29\" class=\"col-sm-3 control-label\">Indiquez  la taille moyenne des noyers.\"? <span class=\"required\">*</span></label>
                                                            
                                                           <div class=\"col-sm-9\" id=\"30\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    {{ form_row(form.taille_noyers, {'attr': {'class': 'form-control input-lg mb-md'}} ) }} 
                                                                </div>
                                                            
                                  <label id=\"31\" class=\"col-sm-3 control-label\">Indiquez  la taille moyenne d'arbres d'autre type.\"? <span class=\"required\">*</span></label>
                                                            
                                                           <div class=\"col-sm-9\" id=\"32\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    {{ form_row(form.taille_autres, {'attr': {'class': 'form-control input-lg mb-md'}} ) }}
                                                                </div>                           
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t    </div> 

                                                            {{ form_label(form.positionTerrain, \"Quelle est la position de votre terrain ?\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}\t
                                                            
                                                           <div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    {{ form_row(form.positionTerrain, {'attr': {'class': 'form-control input-lg mb-md'}} ) }}
                                                                </div>                           
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t    </div> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label id=\"1\" class=\"col-sm-3 control-label\">Quel est le nombre de pins dans votre terrain <span class=\"required\">*</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\" id=\"2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_row(form.nb_pins, {'attr': {'class': 'form-control input-lg mb-md'}} ) }}
                                                        </div>      

                              <label id=\"3\" class=\"col-sm-3 control-label\">Quel est le nombre de sapins dans votre terrain ? <span class=\"required\">*</span></label>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\" id=\"4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_row(form.nb_sapins, {'attr': {'class': 'form-control input-lg mb-md'}} ) }}      
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                              <label id=\"5\" class=\"col-sm-3 control-label\">Quel est le nombre de bouleaux dans votre terrain ? <span class=\"required\">*</span></label>
                                                            
                                                           <div class=\"col-sm-9\"id=\"6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_row(form.nb_bouleaux, {'attr': {'class': 'form-control input-lg mb-md'}} ) }}      
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                  <label id=\"7\" class=\"col-sm-3 control-label\">Quel est le nombre de chenes dans votre terrain ? <span class=\"required\">*</span></label>
                                                        
                                                        <div class=\"col-sm-9\" id=\"8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_row(form.nb_chenes, {'attr': {'class': 'form-control input-lg mb-md'}} ) }}      
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                              <label id=\"9\" class=\"col-sm-3 control-label\">Quel est le nombre d'erables dans votre terrain ? <span class=\"required\">*</span></label>
                  
                                                           <div class=\"col-sm-9\" id=\"10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_row(form.nb_erables, {'attr': {'class': 'form-control input-lg mb-md'}} ) }}      
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                  <label id=\"11\" class=\"col-sm-3 control-label\">Quel est le nombre de frenes dans votre terrain ? <span class=\"required\">*</span></label>
                                                            
                                                           <div class=\"col-sm-9\" id=\"12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_row(form.nb_frenes, {'attr': {'class': 'form-control input-lg mb-md'}} ) }}      
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                  <label id=\"13\" class=\"col-sm-3 control-label\">Quel est le nombre de noyers dans votre terrain ? <span class=\"required\">*</span></label>
                                                            
                                                           <div class=\"col-sm-9\" id=\"14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_row(form.nb_noyers, {'attr': {'class': 'form-control input-lg mb-md'}} ) }}      
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\t\t
                                  <label id=\"15\" class=\"col-sm-3 control-label\">Quel est le nombre d'arbres d'autre type dans votre terrain ? <span class=\"required\">*</span></label>
                                                            
                                                           <div class=\"col-sm-9\" id=\"16\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    {{ form_row(form.nb_autres, {'attr': {'class': 'form-control input-lg mb-md'}} ) }}      
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t    </div>
                                                            
                                                            
                                                            
                                                        <button class=\"mb-xs mt-xs mr-xs btn btn-lg btn-default\" type=\"submit\">Valider</button>
                                                        {{ form_end(form) }}
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

    {% endblock %}

    {% block javascript %}
\t\t<script>
\t\tfor(var \$k=1; \$k<=32;\$k++){
\t\tidd=\$k.toString();
\t\tdocument.getElementById(idd).style.visibility='hidden';
\t\t} 
\t\t
\t\t

\t\t  var \$i=1;
\t\t\tvar \$j=2;
\t\t\tvar \$k=\$i + 16;
\t\t\tvar \$l=\$j + 16;
\t\t function update(){
\t\t id=\$i.toString();
\t\t id2=\$j.toString();
\t\t id3=\$k.toString();
\t\t id4=\$l.toString();
    var checked = document.getElementById(id).value;
    document.getElementById(id).style.visibility='visible';
\t\tdocument.getElementById(id2).style.visibility='visible'; 
\t\tdocument.getElementById(id3).style.visibility='visible';
\t\tdocument.getElementById(id4).style.visibility='visible'; 
\t\t \$i=\$i+2; 
\t\t \$j=\$j+2;
\t\t \$k=\$i + 16;
\t\t \$l=\$j + 16;
\t\t 
\t\t
}

//validate();
\t\t</script>
\t<!-- Specific Page Vendor -->
\t\t<script src=\"assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js\"></script>
\t\t<script src=\"assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js\"></script>
\t\t<script src=\"assets/vendor/store-js/store.js\"></script>

    {% endblock %}", "project/prep-terrain.html.twig", "/opt/lampp/htdocs/TER/templates/project/prep-terrain.html.twig");
    }
}
