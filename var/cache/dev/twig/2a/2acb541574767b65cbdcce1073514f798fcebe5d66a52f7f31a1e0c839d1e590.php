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
\t\t\t\t\t\t\t\t\t\t\t\t\t<br><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->source); })()), "nb_pins", []), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Quel est le nombre de pins dans votre terrain ?"]);
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->source); })()), "nb_pins", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo "
                                                        </div>      

                                                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->source); })()), "nb_sapins", []), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Quel est le nombre de sapins dans votre terrain ?"]);
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->source); })()), "nb_sapins", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo "      
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                                        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->source); })()), "nb_bouleaux", []), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Quel est le nombre de bouleaux dans votre terrain ?"]);
        echo "\t
                                                            
                                                           <div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->source); })()), "nb_bouleaux", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo "      
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                                          ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->source); })()), "nb_chenes", []), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Quel est le nombre de chenes dans votre terrain ?"]);
        echo "\t
                                                            
                                                        <div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 45, $this->source); })()), "nb_chenes", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo "      
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                                         ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->source); })()), "nb_erables", []), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Quel est le nombre d'erables dans votre terrain ?"]);
        echo "\t
                                                            
                                                           <div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 51, $this->source); })()), "nb_erables", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo "      
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                                         ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 54, $this->source); })()), "nb_frenes", []), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Quel est le nombre de frenes dans votre terrain ?"]);
        echo "\t
                                                            
                                                           <div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 57, $this->source); })()), "nb_frenes", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo "      
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                                         ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 60, $this->source); })()), "nb_noyers", []), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Quel est le nombre de noyers dans votre terrain ?"]);
        echo "\t
                                                            
                                                           <div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 63, $this->source); })()), "nb_noyers", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo "      
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                                         ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 66, $this->source); })()), "nb_autres", []), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Indiquez  le nombre d'arbre d'un autre type non cité."]);
        echo "\t
                                                            
                                                           <div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 69, $this->source); })()), "nb_autres", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo "      
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t    </div>
                                                            ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 72, $this->source); })()), "taille_pins", []), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Indiquez  la taille moyenne des pins."]);
        echo "\t
                                                            
                                                           <div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 75, $this->source); })()), "taille_pins", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo "
                                                                </div> 

                                                            ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 78, $this->source); })()), "taille_sapins", []), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Indiquez  la taille moyenne des sapins."]);
        echo "\t
                                                            
                                                           <div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 81, $this->source); })()), "taille_sapins", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo " 
                                                                </div>
                                                            
                                                            ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 84, $this->source); })()), "taille_bouleaux", []), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Indiquez  la taille moyenne des bouleaux."]);
        echo "\t
                                                            
                                                           <div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 87, $this->source); })()), "taille_bouleaux", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo " 
                                                                </div>
                                                           
                                                            ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 90, $this->source); })()), "taille_chenes", []), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Indiquez  la taille moyenne des chenes."]);
        echo "\t
                                                            
                                                           <div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 93, $this->source); })()), "taille_chenes", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo " 
                                                                </div> 
                                                           
                                                            ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 96, $this->source); })()), "taille_erables", []), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Indiquez  la taille moyenne des erables."]);
        echo "\t
                                                            
                                                           <div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 99, $this->source); })()), "taille_erables", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo " 
                                                                </div> 
                                                           
                                                            ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 102, $this->source); })()), "taille_frenes", []), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Indiquez  la taille moyenne des frenes."]);
        echo "\t
                                                            
                                                           <div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 105, $this->source); })()), "taille_frenes", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo " 
                                                                </div> 
                                                           
                                                            ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 108, $this->source); })()), "taille_noyers", []), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Indiquez  la taille moyenne des noyers."]);
        echo "\t
                                                            
                                                           <div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 111, $this->source); })()), "taille_noyers", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo " 
                                                                </div>
                                                            
                                                            ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 114, $this->source); })()), "taille_autres", []), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Indiquez  la taille moyenne d'arbre de d'un autre type."]);
        echo "\t
                                                            
                                                           <div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 117, $this->source); })()), "taille_autres", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo "
                                                                </div>                           
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t    </div> 

                                                            ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 122, $this->source); })()), "positionTerrain", []), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Quelle est la position de votre terrain ?"]);
        echo "\t
                                                            
                                                           <div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 125, $this->source); })()), "positionTerrain", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo "
                                                                </div>                           
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t    </div> 
                                                            
                                                            
                                                            
                                                        <button class=\"mb-xs mt-xs mr-xs btn btn-lg btn-default\" type=\"submit\">Valider</button>
                                                        ";
        // line 133
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 133, $this->source); })()), 'form_end');
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
        echo "\t<!-- Specific Page Vendor -->
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
        return array (  380 => 155,  371 => 154,  341 => 133,  330 => 125,  324 => 122,  316 => 117,  310 => 114,  304 => 111,  298 => 108,  292 => 105,  286 => 102,  280 => 99,  274 => 96,  268 => 93,  262 => 90,  256 => 87,  250 => 84,  244 => 81,  238 => 78,  232 => 75,  226 => 72,  220 => 69,  214 => 66,  208 => 63,  202 => 60,  196 => 57,  190 => 54,  184 => 51,  178 => 48,  172 => 45,  166 => 42,  160 => 39,  154 => 36,  148 => 33,  143 => 31,  137 => 28,  132 => 26,  127 => 24,  118 => 17,  109 => 16,  91 => 14,  80 => 11,  71 => 10,  57 => 4,  48 => 3,  15 => 1,);
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
\t\t\t\t\t\t\t\t\t\t\t\t\t<br><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_label(form.nb_pins, \"Quel est le nombre de pins dans votre terrain ?\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_row(form.nb_pins, {'attr': {'class': 'form-control input-lg mb-md'}} ) }}
                                                        </div>      

                                                        {{ form_label(form.nb_sapins, \"Quel est le nombre de sapins dans votre terrain ?\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_row(form.nb_sapins, {'attr': {'class': 'form-control input-lg mb-md'}} ) }}      
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                                        {{ form_label(form.nb_bouleaux, \"Quel est le nombre de bouleaux dans votre terrain ?\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}\t
                                                            
                                                           <div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_row(form.nb_bouleaux, {'attr': {'class': 'form-control input-lg mb-md'}} ) }}      
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                                          {{ form_label(form.nb_chenes, \"Quel est le nombre de chenes dans votre terrain ?\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}\t
                                                            
                                                        <div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_row(form.nb_chenes, {'attr': {'class': 'form-control input-lg mb-md'}} ) }}      
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                                         {{ form_label(form.nb_erables, \"Quel est le nombre d'erables dans votre terrain ?\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}\t
                                                            
                                                           <div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_row(form.nb_erables, {'attr': {'class': 'form-control input-lg mb-md'}} ) }}      
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                                         {{ form_label(form.nb_frenes, \"Quel est le nombre de frenes dans votre terrain ?\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}\t
                                                            
                                                           <div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_row(form.nb_frenes, {'attr': {'class': 'form-control input-lg mb-md'}} ) }}      
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                                         {{ form_label(form.nb_noyers, \"Quel est le nombre de noyers dans votre terrain ?\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}\t
                                                            
                                                           <div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_row(form.nb_noyers, {'attr': {'class': 'form-control input-lg mb-md'}} ) }}      
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                                         {{ form_label(form.nb_autres, \"Indiquez  le nombre d'arbre d'un autre type non cité.\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}\t
                                                            
                                                           <div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    {{ form_row(form.nb_autres, {'attr': {'class': 'form-control input-lg mb-md'}} ) }}      
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t    </div>
                                                            {{ form_label(form.taille_pins, \"Indiquez  la taille moyenne des pins.\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}\t
                                                            
                                                           <div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    {{ form_row(form.taille_pins, {'attr': {'class': 'form-control input-lg mb-md'}} ) }}
                                                                </div> 

                                                            {{ form_label(form.taille_sapins, \"Indiquez  la taille moyenne des sapins.\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}\t
                                                            
                                                           <div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    {{ form_row(form.taille_sapins, {'attr': {'class': 'form-control input-lg mb-md'}} ) }} 
                                                                </div>
                                                            
                                                            {{ form_label(form.taille_bouleaux, \"Indiquez  la taille moyenne des bouleaux.\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}\t
                                                            
                                                           <div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    {{ form_row(form.taille_bouleaux, {'attr': {'class': 'form-control input-lg mb-md'}} ) }} 
                                                                </div>
                                                           
                                                            {{ form_label(form.taille_chenes, \"Indiquez  la taille moyenne des chenes.\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}\t
                                                            
                                                           <div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    {{ form_row(form.taille_chenes, {'attr': {'class': 'form-control input-lg mb-md'}} ) }} 
                                                                </div> 
                                                           
                                                            {{ form_label(form.taille_erables, \"Indiquez  la taille moyenne des erables.\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}\t
                                                            
                                                           <div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    {{ form_row(form.taille_erables, {'attr': {'class': 'form-control input-lg mb-md'}} ) }} 
                                                                </div> 
                                                           
                                                            {{ form_label(form.taille_frenes, \"Indiquez  la taille moyenne des frenes.\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}\t
                                                            
                                                           <div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    {{ form_row(form.taille_frenes, {'attr': {'class': 'form-control input-lg mb-md'}} ) }} 
                                                                </div> 
                                                           
                                                            {{ form_label(form.taille_noyers, \"Indiquez  la taille moyenne des noyers.\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}\t
                                                            
                                                           <div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    {{ form_row(form.taille_noyers, {'attr': {'class': 'form-control input-lg mb-md'}} ) }} 
                                                                </div>
                                                            
                                                            {{ form_label(form.taille_autres, \"Indiquez  la taille moyenne d'arbre de d'un autre type.\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}\t
                                                            
                                                           <div class=\"col-sm-9\">
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
\t<!-- Specific Page Vendor -->
\t\t<script src=\"assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js\"></script>
\t\t<script src=\"assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js\"></script>
\t\t<script src=\"assets/vendor/store-js/store.js\"></script>

    {% endblock %}", "project/prep-terrain.html.twig", "/opt/lampp/htdocs/Symfony/templates/project/prep-terrain.html.twig");
    }
}
