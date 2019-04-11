<?php

/* project/view.html.twig */
class __TwigTemplate_f70d72ba42b6733502b797590ff07afca28e9509db186e06436b93cdf6a9f93e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("/dashboard-layout.html.twig", "project/view.html.twig", 1);
        $this->blocks = [
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'pageactuelle' => [$this, 'block_pageactuelle'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "/dashboard-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "project/view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "project/view.html.twig"));

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
\t\t";
        // line 5
        $this->displayParentBlock("head", $context, $blocks);
        echo "

\t\t<!-- Specific Page Vendor CSS -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css"), "html", null, true);
        echo "\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css"), "html", null, true);
        echo "\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/morris/morris.css"), "html", null, true);
        echo "\" />

\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "<h2>Votre projet : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new Twig_Error_Runtime('Variable "projet" does not exist.', 14, $this->source); })()), "nom", []), "html", null, true);
        echo "</h2>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_pageactuelle($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageactuelle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageactuelle"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new Twig_Error_Runtime('Variable "projet" does not exist.', 15, $this->source); })()), "nom", []), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "
\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t\t<header class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new Twig_Error_Runtime('Variable "projet" does not exist.', 22, $this->source); })()), "nom", []), "html", null, true);
        echo "</h2>
\t\t\t\t\t\t\t\t\t</header>
                                    <br>
\t\t\t\t\t\t\t\t\t<h4> ";
        // line 25
        if (((isset($context["nbform"]) || array_key_exists("nbform", $context) ? $context["nbform"] : (function () { throw new Twig_Error_Runtime('Variable "nbform" does not exist.', 25, $this->source); })()) < 11)) {
            echo " Vous avez rempli ";
            echo twig_escape_filter($this->env, (isset($context["nbform"]) || array_key_exists("nbform", $context) ? $context["nbform"] : (function () { throw new Twig_Error_Runtime('Variable "nbform" does not exist.', 25, $this->source); })()), "html", null, true);
            echo " formulaire(s) sur 11 pour le gros oeuvre de votre chantier. 
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 26
            echo " Vous avez renseigné toutes les informations nécessaires pour le gros oeuvre.
\t\t\t\t\t\t\t\t\t\t ";
        }
        // line 27
        echo " </h4>
\t\t<div class=\"row\">
\t\t\t";
        // line 29
        if (((((isset($context["nbform"]) || array_key_exists("nbform", $context) ? $context["nbform"] : (function () { throw new Twig_Error_Runtime('Variable "nbform" does not exist.', 29, $this->source); })()) / 11) * 100) < 25)) {
            // line 30
            echo "\t\t\t\t\t\t\t\t\t<div class=\"progress progress-striped light active m-md\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"";
            // line 31
            echo twig_escape_filter($this->env, (((isset($context["nbform"]) || array_key_exists("nbform", $context) ? $context["nbform"] : (function () { throw new Twig_Error_Runtime('Variable "nbform" does not exist.', 31, $this->source); })()) / 11) * 100), "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
            echo twig_escape_filter($this->env, (((isset($context["nbform"]) || array_key_exists("nbform", $context) ? $context["nbform"] : (function () { throw new Twig_Error_Runtime('Variable "nbform" does not exist.', 31, $this->source); })()) / 11) * 100), "html", null, true);
            echo "%;\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 32
            if (((isset($context["nbform"]) || array_key_exists("nbform", $context) ? $context["nbform"] : (function () { throw new Twig_Error_Runtime('Variable "nbform" does not exist.', 32, $this->source); })()) == 11)) {
                echo " Terminé ";
            } else {
                echo " En cours ";
            }
            // line 33
            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t";
        } elseif (((((        // line 35
(isset($context["nbform"]) || array_key_exists("nbform", $context) ? $context["nbform"] : (function () { throw new Twig_Error_Runtime('Variable "nbform" does not exist.', 35, $this->source); })()) / 11) * 100) > 25) && ((((isset($context["nbform"]) || array_key_exists("nbform", $context) ? $context["nbform"] : (function () { throw new Twig_Error_Runtime('Variable "nbform" does not exist.', 35, $this->source); })()) / 11) * 100) < 75))) {
            // line 36
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-striped light active m-md\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"";
            // line 37
            echo twig_escape_filter($this->env, (((isset($context["nbform"]) || array_key_exists("nbform", $context) ? $context["nbform"] : (function () { throw new Twig_Error_Runtime('Variable "nbform" does not exist.', 37, $this->source); })()) / 11) * 100), "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
            echo twig_escape_filter($this->env, (((isset($context["nbform"]) || array_key_exists("nbform", $context) ? $context["nbform"] : (function () { throw new Twig_Error_Runtime('Variable "nbform" does not exist.', 37, $this->source); })()) / 11) * 100), "html", null, true);
            echo "%;\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 38
            if (((isset($context["nbform"]) || array_key_exists("nbform", $context) ? $context["nbform"] : (function () { throw new Twig_Error_Runtime('Variable "nbform" does not exist.', 38, $this->source); })()) == 11)) {
                echo " Terminé ";
            } else {
                echo " En cours ";
            }
            // line 39
            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t";
        } else {
            // line 42
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-striped light active m-md\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"";
            // line 43
            echo twig_escape_filter($this->env, (((isset($context["nbform"]) || array_key_exists("nbform", $context) ? $context["nbform"] : (function () { throw new Twig_Error_Runtime('Variable "nbform" does not exist.', 43, $this->source); })()) / 11) * 100), "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
            echo twig_escape_filter($this->env, (((isset($context["nbform"]) || array_key_exists("nbform", $context) ? $context["nbform"] : (function () { throw new Twig_Error_Runtime('Variable "nbform" does not exist.', 43, $this->source); })()) / 11) * 100), "html", null, true);
            echo "%;\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 44
            if (((isset($context["nbform"]) || array_key_exists("nbform", $context) ? $context["nbform"] : (function () { throw new Twig_Error_Runtime('Variable "nbform" does not exist.', 44, $this->source); })()) == 11)) {
                echo " Terminé ";
            } else {
                echo " En cours ";
            }
            // line 45
            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t";
        }
        // line 48
        echo "\t\t\t<br> <br>
\t\t\t\t\t\t<div class=\"col-md-4\" data-plugin-portlet id=\"portlet-1\">
\t\t\t\t\t\t\t<section class=\"panel panel-primary\" id=\"panel-1\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" ";
        // line 53
        if (((isset($context["etudeSol"]) || array_key_exists("etudeSol", $context) ? $context["etudeSol"] : (function () { throw new Twig_Error_Runtime('Variable "etudeSol" does not exist.', 53, $this->source); })()) == null)) {
            echo " class=\"fa fa-caret-down\" ";
        } else {
            echo " class=\"fa fa-caret-up\" ";
        }
        echo "></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t <h2 class=\"panel-title\">Etude du sol </h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\" ";
        // line 57
        if (((isset($context["etudeSol"]) || array_key_exists("etudeSol", $context) ? $context["etudeSol"] : (function () { throw new Twig_Error_Runtime('Variable "etudeSol" does not exist.', 57, $this->source); })()) != null)) {
            echo " style=\"display: none;\" ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t";
        // line 58
        if (((isset($context["etudeSol"]) || array_key_exists("etudeSol", $context) ? $context["etudeSol"] : (function () { throw new Twig_Error_Runtime('Variable "etudeSol" does not exist.', 58, $this->source); })()) == null)) {
            echo " 
\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etude-sol", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new Twig_Error_Runtime('Variable "projet" does not exist.', 60, $this->source); })()), "id", [])]), "html", null, true);
            echo "\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 62
            echo "\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\tType du sol (";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["etudeSol"]) || array_key_exists("etudeSol", $context) ? $context["etudeSol"] : (function () { throw new Twig_Error_Runtime('Variable "etudeSol" does not exist.', 64, $this->source); })()), "typeSol", []), "html", null, true);
            echo ")
\t\t\t\t\t\t\t\t\t";
        }
        // line 66
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"panel panel-secondary\" id=\"panel-2\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" ";
        // line 71
        if (((isset($context["prepTerrain"]) || array_key_exists("prepTerrain", $context) ? $context["prepTerrain"] : (function () { throw new Twig_Error_Runtime('Variable "prepTerrain" does not exist.', 71, $this->source); })()) == null)) {
            echo " class=\"fa fa-caret-down\" ";
        } else {
            echo " class=\"fa fa-caret-up\" ";
        }
        echo "></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Préparation du terrain et l’accès</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\" ";
        // line 76
        if (((isset($context["prepTerrain"]) || array_key_exists("prepTerrain", $context) ? $context["prepTerrain"] : (function () { throw new Twig_Error_Runtime('Variable "prepTerrain" does not exist.', 76, $this->source); })()) != null)) {
            echo " style=\"display: none;\" ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t";
        // line 77
        if (((isset($context["prepTerrain"]) || array_key_exists("prepTerrain", $context) ? $context["prepTerrain"] : (function () { throw new Twig_Error_Runtime('Variable "prepTerrain" does not exist.', 77, $this->source); })()) == null)) {
            echo " 
\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prep-terrain", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new Twig_Error_Runtime('Variable "projet" does not exist.', 79, $this->source); })()), "id", [])]), "html", null, true);
            echo "\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 81
            echo "\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
        }
        // line 84
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"panel panel-tertiary\" id=\"panel-3\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" ";
        // line 89
        if (((isset($context["excavation"]) || array_key_exists("excavation", $context) ? $context["excavation"] : (function () { throw new Twig_Error_Runtime('Variable "excavation" does not exist.', 89, $this->source); })()) == null)) {
            echo " class=\"fa fa-caret-down\" ";
        } else {
            echo " class=\"fa fa-caret-up\" ";
        }
        echo "></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">L'excavation</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\" ";
        // line 94
        if (((isset($context["excavation"]) || array_key_exists("excavation", $context) ? $context["excavation"] : (function () { throw new Twig_Error_Runtime('Variable "excavation" does not exist.', 94, $this->source); })()) != null)) {
            echo " style=\"display: none;\" ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t";
        // line 95
        if (((isset($context["excavation"]) || array_key_exists("excavation", $context) ? $context["excavation"] : (function () { throw new Twig_Error_Runtime('Variable "excavation" does not exist.', 95, $this->source); })()) == null)) {
            echo " 
\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("excavation", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new Twig_Error_Runtime('Variable "projet" does not exist.', 97, $this->source); })()), "id", [])]), "html", null, true);
            echo "\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 99
            echo "\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
        }
        // line 102
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t<section class=\"panel panel-primary\" id=\"panel-1\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" ";
        // line 107
        if (((isset($context["toiture"]) || array_key_exists("toiture", $context) ? $context["toiture"] : (function () { throw new Twig_Error_Runtime('Variable "toiture" does not exist.', 107, $this->source); })()) == null)) {
            echo " class=\"fa fa-caret-down\" ";
        } else {
            echo " class=\"fa fa-caret-up\" ";
        }
        echo "></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Toiture</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\" ";
        // line 112
        if (((isset($context["toiture"]) || array_key_exists("toiture", $context) ? $context["toiture"] : (function () { throw new Twig_Error_Runtime('Variable "toiture" does not exist.', 112, $this->source); })()) != null)) {
            echo " style=\"display: none;\" ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t";
        // line 113
        if (((isset($context["toiture"]) || array_key_exists("toiture", $context) ? $context["toiture"] : (function () { throw new Twig_Error_Runtime('Variable "toiture" does not exist.', 113, $this->source); })()) == null)) {
            echo " 
\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("toiture", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new Twig_Error_Runtime('Variable "projet" does not exist.', 115, $this->source); })()), "id", [])]), "html", null, true);
            echo "\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 117
            echo "\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
        }
        // line 120
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4\" data-plugin-portlet id=\"portlet-2\">
\t\t\t\t\t\t\t<section class=\"panel panel-quartenary\" id=\"panel-4\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" ";
        // line 127
        if (((isset($context["fondations"]) || array_key_exists("fondations", $context) ? $context["fondations"] : (function () { throw new Twig_Error_Runtime('Variable "fondations" does not exist.', 127, $this->source); })()) == null)) {
            echo " class=\"fa fa-caret-down\" ";
        } else {
            echo " class=\"fa fa-caret-up\" ";
        }
        echo "></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Les fondations</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\" ";
        // line 132
        if (((isset($context["fondations"]) || array_key_exists("fondations", $context) ? $context["fondations"] : (function () { throw new Twig_Error_Runtime('Variable "fondations" does not exist.', 132, $this->source); })()) != null)) {
            echo " style=\"display: none;\" ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t";
        // line 133
        if (((isset($context["fondations"]) || array_key_exists("fondations", $context) ? $context["fondations"] : (function () { throw new Twig_Error_Runtime('Variable "fondations" does not exist.', 133, $this->source); })()) == null)) {
            echo " 
\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 135
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fondation", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new Twig_Error_Runtime('Variable "projet" does not exist.', 135, $this->source); })()), "id", [])]), "html", null, true);
            echo "\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 137
            echo "\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
        }
        // line 140
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"panel panel-success\" id=\"panel-5\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" ";
        // line 145
        if (((isset($context["soubassement"]) || array_key_exists("soubassement", $context) ? $context["soubassement"] : (function () { throw new Twig_Error_Runtime('Variable "soubassement" does not exist.', 145, $this->source); })()) == null)) {
            echo " class=\"fa fa-caret-down\" ";
        } else {
            echo " class=\"fa fa-caret-up\" ";
        }
        echo "></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Le soubassement</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\" ";
        // line 150
        if (((isset($context["soubassement"]) || array_key_exists("soubassement", $context) ? $context["soubassement"] : (function () { throw new Twig_Error_Runtime('Variable "soubassement" does not exist.', 150, $this->source); })()) != null)) {
            echo " style=\"display: none;\" ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t";
        // line 151
        if (((isset($context["soubassement"]) || array_key_exists("soubassement", $context) ? $context["soubassement"] : (function () { throw new Twig_Error_Runtime('Variable "soubassement" does not exist.', 151, $this->source); })()) == null)) {
            echo " 
\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 153
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("soubassement", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new Twig_Error_Runtime('Variable "projet" does not exist.', 153, $this->source); })()), "id", [])]), "html", null, true);
            echo "\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 155
            echo "\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
        }
        // line 158
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"panel panel-warning\" id=\"panel-6\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" ";
        // line 163
        if (((isset($context["vrd"]) || array_key_exists("vrd", $context) ? $context["vrd"] : (function () { throw new Twig_Error_Runtime('Variable "vrd" does not exist.', 163, $this->source); })()) == null)) {
            echo " class=\"fa fa-caret-down\" ";
        } else {
            echo " class=\"fa fa-caret-up\" ";
        }
        echo "></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">VRD (voirie et réseaux divers)</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\" ";
        // line 168
        if (((isset($context["vrd"]) || array_key_exists("vrd", $context) ? $context["vrd"] : (function () { throw new Twig_Error_Runtime('Variable "vrd" does not exist.', 168, $this->source); })()) != null)) {
            echo " style=\"display: none;\" ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t";
        // line 169
        if (((isset($context["vrd"]) || array_key_exists("vrd", $context) ? $context["vrd"] : (function () { throw new Twig_Error_Runtime('Variable "vrd" does not exist.', 169, $this->source); })()) == null)) {
            echo " 
\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 171
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vrd", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new Twig_Error_Runtime('Variable "projet" does not exist.', 171, $this->source); })()), "id", [])]), "html", null, true);
            echo "\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 173
            echo "\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
        }
        // line 176
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t<section class=\"panel panel-quartenary\" id=\"panel-4\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-caret-down\"></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Les menuiseries extérieures</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non imperdiet nisi. Quisque cursus leo et lacus tempus porttitor. Sed egestas laoreet justo non feugiat.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4\" data-plugin-portlet id=\"portlet-3\">
\t\t\t\t\t\t\t<section class=\"panel panel-info\" id=\"panel-7\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" ";
        // line 195
        if (((isset($context["plancher"]) || array_key_exists("plancher", $context) ? $context["plancher"] : (function () { throw new Twig_Error_Runtime('Variable "plancher" does not exist.', 195, $this->source); })()) == null)) {
            echo " class=\"fa fa-caret-down\" ";
        } else {
            echo " class=\"fa fa-caret-up\" ";
        }
        echo "></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Le plancher</h2> </a>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\" ";
        // line 200
        if (((isset($context["plancher"]) || array_key_exists("plancher", $context) ? $context["plancher"] : (function () { throw new Twig_Error_Runtime('Variable "plancher" does not exist.', 200, $this->source); })()) != null)) {
            echo " style=\"display: none;\" ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t";
        // line 201
        if (((isset($context["plancher"]) || array_key_exists("plancher", $context) ? $context["plancher"] : (function () { throw new Twig_Error_Runtime('Variable "plancher" does not exist.', 201, $this->source); })()) == null)) {
            echo " 
\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 203
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("plancher", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new Twig_Error_Runtime('Variable "projet" does not exist.', 203, $this->source); })()), "id", [])]), "html", null, true);
            echo "\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 205
            echo "\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
        }
        // line 208
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"panel panel-dark\" id=\"panel-8\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" ";
        // line 213
        if (((isset($context["elevation"]) || array_key_exists("elevation", $context) ? $context["elevation"] : (function () { throw new Twig_Error_Runtime('Variable "elevation" does not exist.', 213, $this->source); })()) == null)) {
            echo " class=\"fa fa-caret-down\" ";
        } else {
            echo " class=\"fa fa-caret-up\" ";
        }
        echo "></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">L'élévation</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\" ";
        // line 218
        if (((isset($context["elevation"]) || array_key_exists("elevation", $context) ? $context["elevation"] : (function () { throw new Twig_Error_Runtime('Variable "elevation" does not exist.', 218, $this->source); })()) != null)) {
            echo " style=\"display: none;\" ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t";
        // line 219
        if (((isset($context["elevation"]) || array_key_exists("elevation", $context) ? $context["elevation"] : (function () { throw new Twig_Error_Runtime('Variable "elevation" does not exist.', 219, $this->source); })()) == null)) {
            echo " 
\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 221
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("elevation", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new Twig_Error_Runtime('Variable "projet" does not exist.', 221, $this->source); })()), "id", [])]), "html", null, true);
            echo "\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 223
            echo "\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
        }
        // line 226
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"panel panel-danger\" id=\"panel-9\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" ";
        // line 231
        if (((isset($context["charpente"]) || array_key_exists("charpente", $context) ? $context["charpente"] : (function () { throw new Twig_Error_Runtime('Variable "charpente" does not exist.', 231, $this->source); })()) == null)) {
            echo " class=\"fa fa-caret-down\" ";
        } else {
            echo " class=\"fa fa-caret-up\" ";
        }
        echo "></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">La charpente/couverture</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\" ";
        // line 236
        if (((isset($context["charpente"]) || array_key_exists("charpente", $context) ? $context["charpente"] : (function () { throw new Twig_Error_Runtime('Variable "charpente" does not exist.', 236, $this->source); })()) != null)) {
            echo " style=\"display: none;\" ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t";
        // line 237
        if (((isset($context["charpente"]) || array_key_exists("charpente", $context) ? $context["charpente"] : (function () { throw new Twig_Error_Runtime('Variable "charpente" does not exist.', 237, $this->source); })()) == null)) {
            echo " 
\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 239
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("charpente", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new Twig_Error_Runtime('Variable "projet" does not exist.', 239, $this->source); })()), "id", [])]), "html", null, true);
            echo "\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 241
            echo "\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\tType de votre charpente (";
            // line 243
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["charpente"]) || array_key_exists("charpente", $context) ? $context["charpente"] : (function () { throw new Twig_Error_Runtime('Variable "charpente" does not exist.', 243, $this->source); })()), "typeCharpente", []), "html", null, true);
            echo ") <br>
\t\t\t\t\t\t\t\t\tForme de votre charpente (";
            // line 244
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["charpente"]) || array_key_exists("charpente", $context) ? $context["charpente"] : (function () { throw new Twig_Error_Runtime('Variable "charpente" does not exist.', 244, $this->source); })()), "formeCharpente", []), "html", null, true);
            echo ") <br>
\t\t\t\t\t\t\t\t\tNombre de mètres carrés pour votre toiture (";
            // line 245
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["charpente"]) || array_key_exists("charpente", $context) ? $context["charpente"] : (function () { throw new Twig_Error_Runtime('Variable "charpente" does not exist.', 245, $this->source); })()), "nbMC", []), "html", null, true);
            echo ")
\t\t\t\t\t\t\t\t\t";
        }
        // line 247
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"pager\">
\t\t\t\t\t\t\t\t\t\t<button class=\"mb-xs mt-xs mr-xs btn btn-lg btn-default\" ";
        // line 257
        if (((isset($context["nbform"]) || array_key_exists("nbform", $context) ? $context["nbform"] : (function () { throw new Twig_Error_Runtime('Variable "nbform" does not exist.', 257, $this->source); })()) == 11)) {
            echo " disabled=\"false\" ";
        } else {
            echo " disabled=\"true\" ";
        }
        echo " 
\t\t\t\t\t\t\t\t\t\ttype=\"button\">Passer au second oeuvre</button>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 267
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 268
        echo "
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "project/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  707 => 268,  698 => 267,  675 => 257,  663 => 247,  658 => 245,  654 => 244,  650 => 243,  646 => 241,  641 => 239,  636 => 237,  630 => 236,  618 => 231,  611 => 226,  605 => 223,  600 => 221,  595 => 219,  589 => 218,  577 => 213,  570 => 208,  564 => 205,  559 => 203,  554 => 201,  548 => 200,  536 => 195,  515 => 176,  509 => 173,  504 => 171,  499 => 169,  493 => 168,  481 => 163,  474 => 158,  468 => 155,  463 => 153,  458 => 151,  452 => 150,  440 => 145,  433 => 140,  427 => 137,  422 => 135,  417 => 133,  411 => 132,  399 => 127,  390 => 120,  384 => 117,  379 => 115,  374 => 113,  368 => 112,  356 => 107,  349 => 102,  343 => 99,  338 => 97,  333 => 95,  327 => 94,  315 => 89,  308 => 84,  302 => 81,  297 => 79,  292 => 77,  286 => 76,  274 => 71,  267 => 66,  262 => 64,  258 => 62,  253 => 60,  248 => 58,  242 => 57,  231 => 53,  224 => 48,  219 => 45,  213 => 44,  207 => 43,  204 => 42,  199 => 39,  193 => 38,  187 => 37,  184 => 36,  182 => 35,  178 => 33,  172 => 32,  166 => 31,  163 => 30,  161 => 29,  157 => 27,  153 => 26,  146 => 25,  140 => 22,  134 => 18,  125 => 17,  107 => 15,  87 => 14,  74 => 10,  70 => 9,  66 => 8,  60 => 5,  57 => 4,  48 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"/dashboard-layout.html.twig\" %}

\t\t{% block head %}

\t\t{{ parent() }}

\t\t<!-- Specific Page Vendor CSS -->
\t\t<link rel=\"stylesheet\" href=\"{{ asset('resources/assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css') }}\" />
\t\t<link rel=\"stylesheet\" href=\"{{ asset('resources/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css') }}\" />
\t\t<link rel=\"stylesheet\" href=\"{{ asset('resources/assets/vendor/morris/morris.css') }}\" />

\t\t{% endblock %}

\t\t\t\t{% block title %}<h2>Votre projet : {{projet.nom}}</h2>{% endblock %}
\t\t\t\t{% block pageactuelle %}{{projet.nom}}{% endblock %}

\t\t\t\t\t{% block body %}

\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t\t<header class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">{{projet.nom}}</h2>
\t\t\t\t\t\t\t\t\t</header>
                                    <br>
\t\t\t\t\t\t\t\t\t<h4> {% if nbform < 11 %} Vous avez rempli {{nbform}} formulaire(s) sur 11 pour le gros oeuvre de votre chantier. 
\t\t\t\t\t\t\t\t\t\t{% else %} Vous avez renseigné toutes les informations nécessaires pour le gros oeuvre.
\t\t\t\t\t\t\t\t\t\t {% endif %} </h4>
\t\t<div class=\"row\">
\t\t\t{% if (nbform/11)*100 < 25 %}
\t\t\t\t\t\t\t\t\t<div class=\"progress progress-striped light active m-md\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"{{(nbform/11)*100}}\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: {{(nbform/11)*100}}%;\">
\t\t\t\t\t\t\t\t\t\t\t{% if nbform == 11 %} Terminé {% else %} En cours {% endif %}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t{% elseif (nbform/11)*100 > 25 and (nbform/11)*100 < 75 %}
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-striped light active m-md\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"{{(nbform/11)*100}}\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: {{(nbform/11)*100}}%;\">
\t\t\t\t\t\t\t\t\t\t\t{% if nbform == 11 %} Terminé {% else %} En cours {% endif %}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-striped light active m-md\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"{{(nbform/11)*100}}\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: {{(nbform/11)*100}}%;\">
\t\t\t\t\t\t\t\t\t\t\t{% if nbform == 11 %} Terminé {% else %} En cours {% endif %}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t{% endif %}
\t\t\t<br> <br>
\t\t\t\t\t\t<div class=\"col-md-4\" data-plugin-portlet id=\"portlet-1\">
\t\t\t\t\t\t\t<section class=\"panel panel-primary\" id=\"panel-1\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" {% if etudeSol == null %} class=\"fa fa-caret-down\" {% else %} class=\"fa fa-caret-up\" {% endif %}></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t <h2 class=\"panel-title\">Etude du sol </h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\" {% if etudeSol != null %} style=\"display: none;\" {% endif %}>
\t\t\t\t\t\t\t\t\t{% if etudeSol == null %} 
\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('etude-sol', {'id': projet.id}) }}\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\tType du sol ({{etudeSol.typeSol}})
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"panel panel-secondary\" id=\"panel-2\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" {% if prepTerrain == null %} class=\"fa fa-caret-down\" {% else %} class=\"fa fa-caret-up\" {% endif %}></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Préparation du terrain et l’accès</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\" {% if prepTerrain != null %} style=\"display: none;\" {% endif %}>
\t\t\t\t\t\t\t\t\t{% if prepTerrain == null %} 
\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('prep-terrain', {'id': projet.id}) }}\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t{% endif %}\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"panel panel-tertiary\" id=\"panel-3\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" {% if excavation == null %} class=\"fa fa-caret-down\" {% else %} class=\"fa fa-caret-up\" {% endif %}></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">L'excavation</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\" {% if excavation != null %} style=\"display: none;\" {% endif %}>
\t\t\t\t\t\t\t\t\t{% if excavation == null %} 
\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('excavation', {'id': projet.id}) }}\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t{% endif %}\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t<section class=\"panel panel-primary\" id=\"panel-1\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" {% if toiture == null %} class=\"fa fa-caret-down\" {% else %} class=\"fa fa-caret-up\" {% endif %}></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Toiture</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\" {% if toiture != null %} style=\"display: none;\" {% endif %}>
\t\t\t\t\t\t\t\t\t{% if toiture == null %} 
\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('toiture', {'id': projet.id}) }}\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t{% endif %}\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4\" data-plugin-portlet id=\"portlet-2\">
\t\t\t\t\t\t\t<section class=\"panel panel-quartenary\" id=\"panel-4\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" {% if fondations == null %} class=\"fa fa-caret-down\" {% else %} class=\"fa fa-caret-up\" {% endif %}></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Les fondations</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\" {% if fondations != null %} style=\"display: none;\" {% endif %}>
\t\t\t\t\t\t\t\t\t{% if fondations == null %} 
\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('fondation', {'id': projet.id}) }}\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t{% endif %}\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"panel panel-success\" id=\"panel-5\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" {% if soubassement == null %} class=\"fa fa-caret-down\" {% else %} class=\"fa fa-caret-up\" {% endif %}></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Le soubassement</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\" {% if soubassement != null %} style=\"display: none;\" {% endif %}>
\t\t\t\t\t\t\t\t\t{% if soubassement == null %} 
\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('soubassement', {'id': projet.id}) }}\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t{% endif %}\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"panel panel-warning\" id=\"panel-6\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" {% if vrd == null %} class=\"fa fa-caret-down\" {% else %} class=\"fa fa-caret-up\" {% endif %}></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">VRD (voirie et réseaux divers)</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\" {% if vrd != null %} style=\"display: none;\" {% endif %}>
\t\t\t\t\t\t\t\t\t{% if vrd == null %} 
\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('vrd', {'id': projet.id}) }}\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t{% endif %}\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t<section class=\"panel panel-quartenary\" id=\"panel-4\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-caret-down\"></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Les menuiseries extérieures</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non imperdiet nisi. Quisque cursus leo et lacus tempus porttitor. Sed egestas laoreet justo non feugiat.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4\" data-plugin-portlet id=\"portlet-3\">
\t\t\t\t\t\t\t<section class=\"panel panel-info\" id=\"panel-7\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" {% if plancher == null %} class=\"fa fa-caret-down\" {% else %} class=\"fa fa-caret-up\" {% endif %}></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Le plancher</h2> </a>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\" {% if plancher != null %} style=\"display: none;\" {% endif %}>
\t\t\t\t\t\t\t\t\t{% if plancher == null %} 
\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('plancher', {'id': projet.id}) }}\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t{% endif %}\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"panel panel-dark\" id=\"panel-8\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" {% if elevation == null %} class=\"fa fa-caret-down\" {% else %} class=\"fa fa-caret-up\" {% endif %}></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">L'élévation</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\" {% if elevation != null %} style=\"display: none;\" {% endif %}>
\t\t\t\t\t\t\t\t\t{% if elevation == null %} 
\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('elevation', {'id': projet.id}) }}\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t{% endif %}\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"panel panel-danger\" id=\"panel-9\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" {% if charpente == null %} class=\"fa fa-caret-down\" {% else %} class=\"fa fa-caret-up\" {% endif %}></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">La charpente/couverture</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\" {% if charpente != null %} style=\"display: none;\" {% endif %}>
\t\t\t\t\t\t\t\t\t{% if charpente == null %} 
\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('charpente', {'id': projet.id}) }}\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\tType de votre charpente ({{charpente.typeCharpente}}) <br>
\t\t\t\t\t\t\t\t\tForme de votre charpente ({{charpente.formeCharpente}}) <br>
\t\t\t\t\t\t\t\t\tNombre de mètres carrés pour votre toiture ({{charpente.nbMC}})
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"pager\">
\t\t\t\t\t\t\t\t\t\t<button class=\"mb-xs mt-xs mr-xs btn btn-lg btn-default\" {% if nbform == 11 %} disabled=\"false\" {% else %} disabled=\"true\" {% endif %} 
\t\t\t\t\t\t\t\t\t\ttype=\"button\">Passer au second oeuvre</button>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t{% endblock %}

\t\t{% block javascripts %}

\t\t{% endblock %}
", "project/view.html.twig", "C:\\xampp\\htdocs\\TER\\templates\\project\\view.html.twig");
    }
}
