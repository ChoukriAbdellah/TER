<?php

/* project/second-oeuvre-view.html.twig */
class __TwigTemplate_a9f87d0b00c8a7e544e5433d0cef2278d24451011dec201a0a9b46c3a655effb extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("/dashboard-layout.html.twig", "project/second-oeuvre-view.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "project/second-oeuvre-view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "project/second-oeuvre-view.html.twig"));

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
        echo " - Second oeuvre";
        
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
        echo " - Second oeuvre</h2>
\t\t\t\t\t\t\t\t\t</header>
                                    <br>
\t\t\t\t\t\t\t\t\t<h4> ";
        // line 25
        if (((isset($context["nbform"]) || array_key_exists("nbform", $context) ? $context["nbform"] : (function () { throw new Twig_Error_Runtime('Variable "nbform" does not exist.', 25, $this->source); })()) < 11)) {
            echo " Vous avez rempli ";
            echo twig_escape_filter($this->env, (isset($context["nbform"]) || array_key_exists("nbform", $context) ? $context["nbform"] : (function () { throw new Twig_Error_Runtime('Variable "nbform" does not exist.', 25, $this->source); })()), "html", null, true);
            echo " formulaire(s) sur 12 pour le second oeuvre de votre chantier. 
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 26
            echo " Vous avez renseigné toutes les informations nécessaires pour le second oeuvre.
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
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-caret-down\"></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t <h2 class=\"panel-title\">L'enduit de façade</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t...
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"panel panel-secondary\" id=\"panel-2\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-caret-down\"></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">L’isolation thermique et phonique</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t....

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"panel panel-tertiary\" id=\"panel-3\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-caret-down\"></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Le revêtement intérieur</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\" >
\t\t\t\t\t\t\t\t...
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t<section class=\"panel panel-primary\" id=\"panel-1\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" ";
        // line 90
        if (((isset($context["cloisons"]) || array_key_exists("cloisons", $context) ? $context["cloisons"] : (function () { throw new Twig_Error_Runtime('Variable "cloisons" does not exist.', 90, $this->source); })()) == null)) {
            echo " class=\"fa fa-caret-down\" ";
        } else {
            echo " class=\"fa fa-caret-up\" ";
        }
        echo "></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Les cloisons intérieures</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\" ";
        // line 95
        if (((isset($context["cloisons"]) || array_key_exists("cloisons", $context) ? $context["cloisons"] : (function () { throw new Twig_Error_Runtime('Variable "cloisons" does not exist.', 95, $this->source); })()) != null)) {
            echo " style=\"display: none;\" ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t";
        // line 96
        if (((isset($context["cloisons"]) || array_key_exists("cloisons", $context) ? $context["cloisons"] : (function () { throw new Twig_Error_Runtime('Variable "cloisons" does not exist.', 96, $this->source); })()) == null)) {
            echo " 
\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cloisons", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new Twig_Error_Runtime('Variable "projet" does not exist.', 98, $this->source); })()), "id", [])]), "html", null, true);
            echo "\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 100
            echo "\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\tNombre de mètres carrés de cloisons amovibles (";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cloisons"]) || array_key_exists("cloisons", $context) ? $context["cloisons"] : (function () { throw new Twig_Error_Runtime('Variable "cloisons" does not exist.', 102, $this->source); })()), "cloisonsAmovibles", []), "html", null, true);
            echo ") <br>
\t\t\t\t\t\t\t\t\tNombre de mètres carrés de cloisons sèches (";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cloisons"]) || array_key_exists("cloisons", $context) ? $context["cloisons"] : (function () { throw new Twig_Error_Runtime('Variable "cloisons" does not exist.', 103, $this->source); })()), "cloisonsSeches", []), "html", null, true);
            echo ") <br>
\t\t\t\t\t\t\t\t\tNombre de mètres carrés de cloisons pour pièces humides (";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cloisons"]) || array_key_exists("cloisons", $context) ? $context["cloisons"] : (function () { throw new Twig_Error_Runtime('Variable "cloisons" does not exist.', 104, $this->source); })()), "cloisonsPiecesHumides", []), "html", null, true);
            echo ") <br>
\t\t\t\t\t\t\t\t\tNombre de mètres carrés de cloisons en verre (";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cloisons"]) || array_key_exists("cloisons", $context) ? $context["cloisons"] : (function () { throw new Twig_Error_Runtime('Variable "cloisons" does not exist.', 105, $this->source); })()), "cloisonsVerre", []), "html", null, true);
            echo ") <br>
\t\t\t\t\t\t\t\t\tNombre de mètres carrés de cloisons japonaises (";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cloisons"]) || array_key_exists("cloisons", $context) ? $context["cloisons"] : (function () { throw new Twig_Error_Runtime('Variable "cloisons" does not exist.', 106, $this->source); })()), "cloisonsJaponaises", []), "html", null, true);
            echo ") <br>
\t\t\t\t\t\t\t\t\tNombre de mètres carrés de claustras intérieur (";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cloisons"]) || array_key_exists("cloisons", $context) ? $context["cloisons"] : (function () { throw new Twig_Error_Runtime('Variable "cloisons" does not exist.', 107, $this->source); })()), "claustraInterieur", []), "html", null, true);
            echo ") <br>
\t\t\t\t\t\t\t\t\tNombre de mètres carrés de cloisons vitrées style atelier (";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cloisons"]) || array_key_exists("cloisons", $context) ? $context["cloisons"] : (function () { throw new Twig_Error_Runtime('Variable "cloisons" does not exist.', 108, $this->source); })()), "cloisonsVitreesStyleAtelier", []), "html", null, true);
            echo ") <br>
\t\t\t\t\t\t\t\t\tNombre de mètres carrés de cloisons végétales (";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cloisons"]) || array_key_exists("cloisons", $context) ? $context["cloisons"] : (function () { throw new Twig_Error_Runtime('Variable "cloisons" does not exist.', 109, $this->source); })()), "cloisonsVegetales", []), "html", null, true);
            echo ") <br>
\t\t\t\t\t
\t\t\t\t\t\t\t\t\t <br>
\t\t\t\t\t\t\t\t\t<b> Sous-total : </b> ";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cloisons"]) || array_key_exists("cloisons", $context) ? $context["cloisons"] : (function () { throw new Twig_Error_Runtime('Variable "cloisons" does not exist.', 112, $this->source); })()), "prix", []), "html", null, true);
            echo " €
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
        }
        // line 114
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4\" data-plugin-portlet id=\"portlet-2\">
\t\t\t\t\t\t\t<section class=\"panel panel-quartenary\" id=\"panel-4\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" ";
        // line 121
        if (((isset($context["evacuation"]) || array_key_exists("evacuation", $context) ? $context["evacuation"] : (function () { throw new Twig_Error_Runtime('Variable "evacuation" does not exist.', 121, $this->source); })()) == null)) {
            echo " class=\"fa fa-caret-down\" ";
        } else {
            echo " class=\"fa fa-caret-up\" ";
        }
        echo "></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Evacuation des fumées</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\" ";
        // line 126
        if (((isset($context["evacuation"]) || array_key_exists("evacuation", $context) ? $context["evacuation"] : (function () { throw new Twig_Error_Runtime('Variable "evacuation" does not exist.', 126, $this->source); })()) != null)) {
            echo " style=\"display: none;\" ";
        }
        echo ">
\t\t\t\t\t\t\t\t";
        // line 127
        if (((isset($context["evacuation"]) || array_key_exists("evacuation", $context) ? $context["evacuation"] : (function () { throw new Twig_Error_Runtime('Variable "evacuation" does not exist.', 127, $this->source); })()) == null)) {
            echo " 
\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 129
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evacuation", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new Twig_Error_Runtime('Variable "projet" does not exist.', 129, $this->source); })()), "id", [])]), "html", null, true);
            echo "\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 131
            echo "\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\tMatérieau utilisé pour votre cheminée :  (";
            // line 133
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evacuation"]) || array_key_exists("evacuation", $context) ? $context["evacuation"] : (function () { throw new Twig_Error_Runtime('Variable "evacuation" does not exist.', 133, $this->source); })()), "materieauUtilise", []), "html", null, true);
            echo ") <br>
\t\t\t\t\t\t\t\t\tForme de votre cheminée :  (";
            // line 134
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evacuation"]) || array_key_exists("evacuation", $context) ? $context["evacuation"] : (function () { throw new Twig_Error_Runtime('Variable "evacuation" does not exist.', 134, $this->source); })()), "forme", []), "html", null, true);
            echo ") <br>
\t\t\t\t\t\t\t\t\tType de votre cheminée :  (";
            // line 135
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evacuation"]) || array_key_exists("evacuation", $context) ? $context["evacuation"] : (function () { throw new Twig_Error_Runtime('Variable "evacuation" does not exist.', 135, $this->source); })()), "typeCheminee", []), "html", null, true);
            echo ") <br>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<b> Sous-total : </b> ";
            // line 137
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evacuation"]) || array_key_exists("evacuation", $context) ? $context["evacuation"] : (function () { throw new Twig_Error_Runtime('Variable "evacuation" does not exist.', 137, $this->source); })()), "prix", []), "html", null, true);
            echo " €
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
        }
        // line 139
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"panel panel-success\" id=\"panel-5\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" ";
        // line 144
        if (((isset($context["menuiseriesInt"]) || array_key_exists("menuiseriesInt", $context) ? $context["menuiseriesInt"] : (function () { throw new Twig_Error_Runtime('Variable "menuiseriesInt" does not exist.', 144, $this->source); })()) == null)) {
            echo " class=\"fa fa-caret-down\" ";
        } else {
            echo " class=\"fa fa-caret-up\" ";
        }
        echo "></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Les menuiseries intérieures</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\" ";
        // line 149
        if (((isset($context["menuiseriesInt"]) || array_key_exists("menuiseriesInt", $context) ? $context["menuiseriesInt"] : (function () { throw new Twig_Error_Runtime('Variable "menuiseriesInt" does not exist.', 149, $this->source); })()) != null)) {
            echo " style=\"display: none;\" ";
        }
        echo ">
\t\t\t\t\t\t\t\t";
        // line 150
        if (((isset($context["menuiseriesInt"]) || array_key_exists("menuiseriesInt", $context) ? $context["menuiseriesInt"] : (function () { throw new Twig_Error_Runtime('Variable "menuiseriesInt" does not exist.', 150, $this->source); })()) == null)) {
            echo " 
\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 152
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("menuiseriesInt", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new Twig_Error_Runtime('Variable "projet" does not exist.', 152, $this->source); })()), "id", [])]), "html", null, true);
            echo "\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 154
            echo "\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\tNombre de portes pleines (";
            // line 156
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["menuiseriesInt"]) || array_key_exists("menuiseriesInt", $context) ? $context["menuiseriesInt"] : (function () { throw new Twig_Error_Runtime('Variable "menuiseriesInt" does not exist.', 156, $this->source); })()), "portesPleines", []), "html", null, true);
            echo ") <br>
\t\t\t\t\t\t\t\t\tNombre de portes vitrées (";
            // line 157
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["menuiseriesInt"]) || array_key_exists("menuiseriesInt", $context) ? $context["menuiseriesInt"] : (function () { throw new Twig_Error_Runtime('Variable "menuiseriesInt" does not exist.', 157, $this->source); })()), "portesVitrees", []), "html", null, true);
            echo ")  <br>
\t\t\t\t\t\t\t\t\tNombre de portes battantes (";
            // line 158
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["menuiseriesInt"]) || array_key_exists("menuiseriesInt", $context) ? $context["menuiseriesInt"] : (function () { throw new Twig_Error_Runtime('Variable "menuiseriesInt" does not exist.', 158, $this->source); })()), "portesBattantes", []), "html", null, true);
            echo ")  <br>
\t\t\t\t\t\t\t\t\tNombre de portes coulissantes (";
            // line 159
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["menuiseriesInt"]) || array_key_exists("menuiseriesInt", $context) ? $context["menuiseriesInt"] : (function () { throw new Twig_Error_Runtime('Variable "menuiseriesInt" does not exist.', 159, $this->source); })()), "portesCoulissantes", []), "html", null, true);
            echo ")  <br>
\t\t\t\t\t\t\t\t\tNombre de portes de placard pliantes (";
            // line 160
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["menuiseriesInt"]) || array_key_exists("menuiseriesInt", $context) ? $context["menuiseriesInt"] : (function () { throw new Twig_Error_Runtime('Variable "menuiseriesInt" does not exist.', 160, $this->source); })()), "portesPlacardPliantes", []), "html", null, true);
            echo ")  <br>
\t\t\t\t\t\t\t\t\tNombre de portes de placard battantes (";
            // line 161
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["menuiseriesInt"]) || array_key_exists("menuiseriesInt", $context) ? $context["menuiseriesInt"] : (function () { throw new Twig_Error_Runtime('Variable "menuiseriesInt" does not exist.', 161, $this->source); })()), "portesPlacardBattantes", []), "html", null, true);
            echo ")  <br>
\t\t\t\t\t\t\t\t\tNombre de portes de placard coulissantes (";
            // line 162
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["menuiseriesInt"]) || array_key_exists("menuiseriesInt", $context) ? $context["menuiseriesInt"] : (function () { throw new Twig_Error_Runtime('Variable "menuiseriesInt" does not exist.', 162, $this->source); })()), "portesPlacardCoulissantes", []), "html", null, true);
            echo ")  <br>
\t\t\t\t\t\t\t\t\tMatérieau choisi pour vos rampes (";
            // line 163
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["menuiseriesInt"]) || array_key_exists("menuiseriesInt", $context) ? $context["menuiseriesInt"] : (function () { throw new Twig_Error_Runtime('Variable "menuiseriesInt" does not exist.', 163, $this->source); })()), "materieauRampes", []), "html", null, true);
            echo ")  <br>
\t\t\t\t\t\t\t\t\tNombre de rampes à poser (";
            // line 164
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["menuiseriesInt"]) || array_key_exists("menuiseriesInt", $context) ? $context["menuiseriesInt"] : (function () { throw new Twig_Error_Runtime('Variable "menuiseriesInt" does not exist.', 164, $this->source); })()), "tailleRampes", []), "html", null, true);
            echo " m2)  <br>
\t\t\t\t\t\t\t\t\tMatérieau choisi pour vos balustrades (";
            // line 165
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["menuiseriesInt"]) || array_key_exists("menuiseriesInt", $context) ? $context["menuiseriesInt"] : (function () { throw new Twig_Error_Runtime('Variable "menuiseriesInt" does not exist.', 165, $this->source); })()), "materieauBalustrades", []), "html", null, true);
            echo ")  <br>
\t\t\t\t\t\t\t\t\tNombre de balustrades à poser (";
            // line 166
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["menuiseriesInt"]) || array_key_exists("menuiseriesInt", $context) ? $context["menuiseriesInt"] : (function () { throw new Twig_Error_Runtime('Variable "menuiseriesInt" does not exist.', 166, $this->source); })()), "tailleBalustrades", []), "html", null, true);
            echo " m2)  <br>

\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<b> Sous-total : </b> ";
            // line 169
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["menuiseriesInt"]) || array_key_exists("menuiseriesInt", $context) ? $context["menuiseriesInt"] : (function () { throw new Twig_Error_Runtime('Variable "menuiseriesInt" does not exist.', 169, $this->source); })()), "prix", []), "html", null, true);
            echo " €
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
        }
        // line 171
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"panel panel-warning\" id=\"panel-6\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" ";
        // line 176
        if (((isset($context["escaliers"]) || array_key_exists("escaliers", $context) ? $context["escaliers"] : (function () { throw new Twig_Error_Runtime('Variable "escaliers" does not exist.', 176, $this->source); })()) == null)) {
            echo " class=\"fa fa-caret-down\" ";
        } else {
            echo " class=\"fa fa-caret-up\" ";
        }
        echo "></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Les escaliers</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\" ";
        // line 181
        if (((isset($context["escaliers"]) || array_key_exists("escaliers", $context) ? $context["escaliers"] : (function () { throw new Twig_Error_Runtime('Variable "escaliers" does not exist.', 181, $this->source); })()) != null)) {
            echo " style=\"display: none;\" ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t";
        // line 182
        if (((isset($context["escaliers"]) || array_key_exists("escaliers", $context) ? $context["escaliers"] : (function () { throw new Twig_Error_Runtime('Variable "escaliers" does not exist.', 182, $this->source); })()) == null)) {
            // line 183
            echo "\t\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 184
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("escaliers", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new Twig_Error_Runtime('Variable "projet" does not exist.', 184, $this->source); })()), "id", [])]), "html", null, true);
            echo "\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 186
            echo "\t\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\t\tType d'escalier :  ";
            // line 188
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["escaliers"]) || array_key_exists("escaliers", $context) ? $context["escaliers"] : (function () { throw new Twig_Error_Runtime('Variable "escaliers" does not exist.', 188, $this->source); })()), "typeEscalier", []), "html", null, true);
            echo " <br>
\t\t\t\t\t\t\t\t\t\tDimensions :  ";
            // line 189
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["escaliers"]) || array_key_exists("escaliers", $context) ? $context["escaliers"] : (function () { throw new Twig_Error_Runtime('Variable "escaliers" does not exist.', 189, $this->source); })()), "dimensions", []), "html", null, true);
            echo " <br>
\t\t\t\t\t\t\t\t\t\tMateriel :  ";
            // line 190
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["escaliers"]) || array_key_exists("escaliers", $context) ? $context["escaliers"] : (function () { throw new Twig_Error_Runtime('Variable "escaliers" does not exist.', 190, $this->source); })()), "materiaux", []), "html", null, true);
            echo " <br>

\t\t\t\t\t\t\t\t\t\t<b> Sous-total : </b> ";
            // line 192
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["escaliers"]) || array_key_exists("escaliers", $context) ? $context["escaliers"] : (function () { throw new Twig_Error_Runtime('Variable "escaliers" does not exist.', 192, $this->source); })()), "prix", []), "html", null, true);
            echo " €

\t\t\t\t\t\t\t\t\t";
        }
        // line 194
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t<section class=\"panel panel-quartenary\" id=\"panel-4\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" ";
        // line 199
        if (((isset($context["plomberie"]) || array_key_exists("plomberie", $context) ? $context["plomberie"] : (function () { throw new Twig_Error_Runtime('Variable "plomberie" does not exist.', 199, $this->source); })()) == null)) {
            echo " class=\"fa fa-caret-down\" ";
        } else {
            echo " class=\"fa fa-caret-up\" ";
        }
        echo "></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">La plomberie</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t<div class=\"panel-body\" ";
        // line 204
        if (((isset($context["plomberie"]) || array_key_exists("plomberie", $context) ? $context["plomberie"] : (function () { throw new Twig_Error_Runtime('Variable "plomberie" does not exist.', 204, $this->source); })()) != null)) {
            echo " style=\"display: none;\" ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t\t";
        // line 205
        if (((isset($context["plomberie"]) || array_key_exists("plomberie", $context) ? $context["plomberie"] : (function () { throw new Twig_Error_Runtime('Variable "plomberie" does not exist.', 205, $this->source); })()) == null)) {
            // line 206
            echo "\t\t\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 207
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("plomberie", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new Twig_Error_Runtime('Variable "projet" does not exist.', 207, $this->source); })()), "id", [])]), "html", null, true);
            echo "\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 209
            echo "\t\t\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\t\t\tDimensions tuyau :  ";
            // line 211
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plomberie"]) || array_key_exists("plomberie", $context) ? $context["plomberie"] : (function () { throw new Twig_Error_Runtime('Variable "plomberie" does not exist.', 211, $this->source); })()), "nbMetreTuyau", []), "html", null, true);
            echo " m <br>
\t\t\t\t\t\t\t\t\t\t\tType tuyau :  ";
            // line 212
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plomberie"]) || array_key_exists("plomberie", $context) ? $context["plomberie"] : (function () { throw new Twig_Error_Runtime('Variable "plomberie" does not exist.', 212, $this->source); })()), "typeTuyau", []), "html", null, true);
            echo " <br>
\t\t\t\t\t\t\t\t\t\t\tNombre de robinets :  ";
            // line 213
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plomberie"]) || array_key_exists("plomberie", $context) ? $context["plomberie"] : (function () { throw new Twig_Error_Runtime('Variable "plomberie" does not exist.', 213, $this->source); })()), "nbRobinets", []), "html", null, true);
            echo " <br>
\t\t\t\t\t\t\t\t\t\t\tNombre de WC :  ";
            // line 214
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plomberie"]) || array_key_exists("plomberie", $context) ? $context["plomberie"] : (function () { throw new Twig_Error_Runtime('Variable "plomberie" does not exist.', 214, $this->source); })()), "nbWC", []), "html", null, true);
            echo " <br>
\t\t\t\t\t\t\t\t\t\t\tType chauffage eau :  ";
            // line 215
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plomberie"]) || array_key_exists("plomberie", $context) ? $context["plomberie"] : (function () { throw new Twig_Error_Runtime('Variable "plomberie" does not exist.', 215, $this->source); })()), "typeChauffageEau", []), "html", null, true);
            echo " <br>
\t\t\t\t\t\t\t\t\t\t\tType compteur :  ";
            // line 216
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plomberie"]) || array_key_exists("plomberie", $context) ? $context["plomberie"] : (function () { throw new Twig_Error_Runtime('Variable "plomberie" does not exist.', 216, $this->source); })()), "typeCompteur", []), "html", null, true);
            echo " <br>
\t\t\t\t\t\t\t\t\t\t\tNombre de baignoires :  ";
            // line 217
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plomberie"]) || array_key_exists("plomberie", $context) ? $context["plomberie"] : (function () { throw new Twig_Error_Runtime('Variable "plomberie" does not exist.', 217, $this->source); })()), "nbBaignoire", []), "html", null, true);
            echo " <br>
\t\t\t\t\t\t\t\t\t\t\tNombre de douches :  ";
            // line 218
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plomberie"]) || array_key_exists("plomberie", $context) ? $context["plomberie"] : (function () { throw new Twig_Error_Runtime('Variable "plomberie" does not exist.', 218, $this->source); })()), "nbDouche", []), "html", null, true);
            echo " <br>

\t\t\t\t\t\t\t\t\t\t\t<b> Sous-total : </b> ";
            // line 220
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plomberie"]) || array_key_exists("plomberie", $context) ? $context["plomberie"] : (function () { throw new Twig_Error_Runtime('Variable "plomberie" does not exist.', 220, $this->source); })()), "prix", []), "html", null, true);
            echo " </b> €

\t\t\t\t\t\t\t\t\t\t";
        }
        // line 222
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4\" data-plugin-portlet id=\"portlet-3\">
\t\t\t\t\t\t\t<section class=\"panel panel-info\" id=\"panel-7\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" ";
        // line 229
        if (((isset($context["electricite"]) || array_key_exists("electricite", $context) ? $context["electricite"] : (function () { throw new Twig_Error_Runtime('Variable "electricite" does not exist.', 229, $this->source); })()) == null)) {
            echo " class=\"fa fa-caret-down\" ";
        } else {
            echo " class=\"fa fa-caret-up\" ";
        }
        echo "></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">L’électricité</h2> </a>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\" ";
        // line 234
        if (((isset($context["electricite"]) || array_key_exists("electricite", $context) ? $context["electricite"] : (function () { throw new Twig_Error_Runtime('Variable "electricite" does not exist.', 234, $this->source); })()) != null)) {
            echo " style=\"display: none;\" ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t";
        // line 235
        if (((isset($context["electricite"]) || array_key_exists("electricite", $context) ? $context["electricite"] : (function () { throw new Twig_Error_Runtime('Variable "electricite" does not exist.', 235, $this->source); })()) == null)) {
            // line 236
            echo "\t\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 237
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("electricite", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new Twig_Error_Runtime('Variable "projet" does not exist.', 237, $this->source); })()), "id", [])]), "html", null, true);
            echo "\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 239
            echo "\t\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\t\tDimension cable :  ";
            // line 241
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["electricite"]) || array_key_exists("electricite", $context) ? $context["electricite"] : (function () { throw new Twig_Error_Runtime('Variable "electricite" does not exist.', 241, $this->source); })()), "dimensionCable", []), "html", null, true);
            echo " m <br>
\t\t\t\t\t\t\t\t\t\tNombre de chauffage :  ";
            // line 242
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["electricite"]) || array_key_exists("electricite", $context) ? $context["electricite"] : (function () { throw new Twig_Error_Runtime('Variable "electricite" does not exist.', 242, $this->source); })()), "nbChauffage", []), "html", null, true);
            echo " <br>
\t\t\t\t\t\t\t\t\t\tNombre d'interrupteurs :  ";
            // line 243
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["electricite"]) || array_key_exists("electricite", $context) ? $context["electricite"] : (function () { throw new Twig_Error_Runtime('Variable "electricite" does not exist.', 243, $this->source); })()), "nbInterrupteur", []), "html", null, true);
            echo " <br>
\t\t\t\t\t\t\t\t\t\tNombre de sortie de lumières:  ";
            // line 244
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["electricite"]) || array_key_exists("electricite", $context) ? $context["electricite"] : (function () { throw new Twig_Error_Runtime('Variable "electricite" does not exist.', 244, $this->source); })()), "nbSortieLumieres", []), "html", null, true);
            echo " <br>
\t\t\t\t\t\t\t\t\t\tNombre de prises électriques :  ";
            // line 245
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["electricite"]) || array_key_exists("electricite", $context) ? $context["electricite"] : (function () { throw new Twig_Error_Runtime('Variable "electricite" does not exist.', 245, $this->source); })()), "nbPriseElectrique", []), "html", null, true);
            echo " <br>
\t\t\t\t\t\t\t\t\t\tNombre de volets roulant :  ";
            // line 246
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["electricite"]) || array_key_exists("electricite", $context) ? $context["electricite"] : (function () { throw new Twig_Error_Runtime('Variable "electricite" does not exist.', 246, $this->source); })()), "nbVoletRoulant", []), "html", null, true);
            echo " <br>

\t\t\t\t\t\t\t\t\t\t<b> Sous-total : </b> ";
            // line 248
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["electricite"]) || array_key_exists("electricite", $context) ? $context["electricite"] : (function () { throw new Twig_Error_Runtime('Variable "electricite" does not exist.', 248, $this->source); })()), "prix", []), "html", null, true);
            echo " </b> €

\t\t\t\t\t\t\t\t\t";
        }
        // line 250
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"panel panel-dark\" id=\"panel-8\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-caret-down\" }></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">La ventilation</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t<div class=\"panel-body\" ";
        // line 260
        if (((isset($context["ventilation"]) || array_key_exists("ventilation", $context) ? $context["ventilation"] : (function () { throw new Twig_Error_Runtime('Variable "ventilation" does not exist.', 260, $this->source); })()) != null)) {
            echo " style=\"display: none;\" ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t";
        // line 261
        if (((isset($context["ventilation"]) || array_key_exists("ventilation", $context) ? $context["ventilation"] : (function () { throw new Twig_Error_Runtime('Variable "ventilation" does not exist.', 261, $this->source); })()) == null)) {
            echo " 
\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 263
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ventilation", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new Twig_Error_Runtime('Variable "projet" does not exist.', 263, $this->source); })()), "id", [])]), "html", null, true);
            echo "\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 265
            echo "\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\tType de Ventilation : <b>";
            // line 267
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ventilation"]) || array_key_exists("ventilation", $context) ? $context["ventilation"] : (function () { throw new Twig_Error_Runtime('Variable "ventilation" does not exist.', 267, $this->source); })()), "typeVentilation", []), "html", null, true);
            echo " <b/><br>
\t\t\t\t\t\t\t\t\t<b> Sous-total : </b> ";
            // line 268
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ventilation"]) || array_key_exists("ventilation", $context) ? $context["ventilation"] : (function () { throw new Twig_Error_Runtime('Variable "ventilation" does not exist.', 268, $this->source); })()), "prix", []), "html", null, true);
            echo " </b> €
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
        }
        // line 270
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>

\t\t\t\t\t\t\t<section class=\"panel panel-danger\" id=\"panel-9\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-caret-down\" ></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">La climatisation</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\" ";
        // line 281
        if (((isset($context["climatisation"]) || array_key_exists("climatisation", $context) ? $context["climatisation"] : (function () { throw new Twig_Error_Runtime('Variable "climatisation" does not exist.', 281, $this->source); })()) != null)) {
            echo " style=\"display: none;\" ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t";
        // line 282
        if (((isset($context["climatisation"]) || array_key_exists("climatisation", $context) ? $context["climatisation"] : (function () { throw new Twig_Error_Runtime('Variable "climatisation" does not exist.', 282, $this->source); })()) == null)) {
            echo " 
\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 284
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("climatisation", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new Twig_Error_Runtime('Variable "projet" does not exist.', 284, $this->source); })()), "id", [])]), "html", null, true);
            echo "\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 286
            echo "\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\t<b>Type de climatisation : ";
            // line 288
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["climatisation"]) || array_key_exists("climatisation", $context) ? $context["climatisation"] : (function () { throw new Twig_Error_Runtime('Variable "climatisation" does not exist.', 288, $this->source); })()), "typeClimatisation", []), "html", null, true);
            echo "</b> <br>
\t\t\t\t\t\t\t\t\t<b> Sous-total : </b> ";
            // line 289
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["climatisation"]) || array_key_exists("climatisation", $context) ? $context["climatisation"] : (function () { throw new Twig_Error_Runtime('Variable "climatisation" does not exist.', 289, $this->source); })()), "prix", []), "html", null, true);
            echo " </b> €
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
        }
        // line 291
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>

\t\t\t\t\t\t\t<section class=\"panel panel-info\" id=\"panel-7\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-caret-down\" ></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">La domotique</h2> </a>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\" ";
        // line 302
        if (((isset($context["domotique"]) || array_key_exists("domotique", $context) ? $context["domotique"] : (function () { throw new Twig_Error_Runtime('Variable "domotique" does not exist.', 302, $this->source); })()) != null)) {
            echo " style=\"display: none;\" ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t";
        // line 303
        if (((isset($context["domotique"]) || array_key_exists("domotique", $context) ? $context["domotique"] : (function () { throw new Twig_Error_Runtime('Variable "domotique" does not exist.', 303, $this->source); })()) == null)) {
            echo " 
\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 305
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("domotique", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new Twig_Error_Runtime('Variable "projet" does not exist.', 305, $this->source); })()), "id", [])]), "html", null, true);
            echo "\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 307
            echo "\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\t";
            // line 309
            if ((twig_get_attribute($this->env, $this->source, (isset($context["domotique"]) || array_key_exists("domotique", $context) ? $context["domotique"] : (function () { throw new Twig_Error_Runtime('Variable "domotique" does not exist.', 309, $this->source); })()), "regularisationChauffage", []) != null)) {
                // line 310
                echo "\t\t\t\t\t\t\t\t\t<b>Option Chauffage autonome<b>
\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t";
            }
            // line 313
            echo "\t\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["domotique"]) || array_key_exists("domotique", $context) ? $context["domotique"] : (function () { throw new Twig_Error_Runtime('Variable "domotique" does not exist.', 313, $this->source); })()), "eclairageAuto", []) != null)) {
                // line 314
                echo "\t\t\t\t\t\t\t\t\t<b>Option Eclairage automatique<b>
\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t";
            }
            // line 317
            echo "\t\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["domotique"]) || array_key_exists("domotique", $context) ? $context["domotique"] : (function () { throw new Twig_Error_Runtime('Variable "domotique" does not exist.', 317, $this->source); })()), "ouvertureFermetureAuto", []) != null)) {
                // line 318
                echo "\t\t\t\t\t\t\t\t\t<b>Option ouverture et fermeture automatique des fenêtre<b>
\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t";
            }
            // line 321
            echo "\t\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["domotique"]) || array_key_exists("domotique", $context) ? $context["domotique"] : (function () { throw new Twig_Error_Runtime('Variable "domotique" does not exist.', 321, $this->source); })()), "autonomieEau", []) != null)) {
                // line 322
                echo "\t\t\t\t\t\t\t\t\t<b>Option Autonomie du débit d'eau<b>
\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t";
            }
            // line 325
            echo "\t\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["domotique"]) || array_key_exists("domotique", $context) ? $context["domotique"] : (function () { throw new Twig_Error_Runtime('Variable "domotique" does not exist.', 325, $this->source); })()), "detecteurEtAlarme", []) != null)) {
                // line 326
                echo "\t\t\t\t\t\t\t\t\t<b>Option alarme et détecteurs<b>
\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t";
            }
            // line 329
            echo "\t\t\t\t\t\t\t\t\t<b> Sous-total : </b> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["domotique"]) || array_key_exists("domotique", $context) ? $context["domotique"] : (function () { throw new Twig_Error_Runtime('Variable "domotique" does not exist.', 329, $this->source); })()), "prix", []), "html", null, true);
            echo " </b> €
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
        }
        // line 331
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"pager\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gros-oeuvre", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new Twig_Error_Runtime('Variable "projet" does not exist.', 341, $this->source); })()), "id", [])]), "html", null, true);
        echo "\"> <button class=\"mb-xs mt-xs mr-xs btn btn-lg btn-default\"
\t\t\t\t\t\t\t\t\t\ttype=\"button\">Revenir au gros oeuvre</button></a>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 351
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 352
        echo "
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "project/second-oeuvre-view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  904 => 352,  895 => 351,  876 => 341,  864 => 331,  857 => 329,  852 => 326,  849 => 325,  844 => 322,  841 => 321,  836 => 318,  833 => 317,  828 => 314,  825 => 313,  820 => 310,  818 => 309,  814 => 307,  809 => 305,  804 => 303,  798 => 302,  785 => 291,  779 => 289,  775 => 288,  771 => 286,  766 => 284,  761 => 282,  755 => 281,  742 => 270,  736 => 268,  732 => 267,  728 => 265,  723 => 263,  718 => 261,  712 => 260,  700 => 250,  694 => 248,  689 => 246,  685 => 245,  681 => 244,  677 => 243,  673 => 242,  669 => 241,  665 => 239,  660 => 237,  657 => 236,  655 => 235,  649 => 234,  637 => 229,  628 => 222,  622 => 220,  617 => 218,  613 => 217,  609 => 216,  605 => 215,  601 => 214,  597 => 213,  593 => 212,  589 => 211,  585 => 209,  580 => 207,  577 => 206,  575 => 205,  569 => 204,  557 => 199,  550 => 194,  544 => 192,  539 => 190,  535 => 189,  531 => 188,  527 => 186,  522 => 184,  519 => 183,  517 => 182,  511 => 181,  499 => 176,  492 => 171,  486 => 169,  480 => 166,  476 => 165,  472 => 164,  468 => 163,  464 => 162,  460 => 161,  456 => 160,  452 => 159,  448 => 158,  444 => 157,  440 => 156,  436 => 154,  431 => 152,  426 => 150,  420 => 149,  408 => 144,  401 => 139,  395 => 137,  390 => 135,  386 => 134,  382 => 133,  378 => 131,  373 => 129,  368 => 127,  362 => 126,  350 => 121,  341 => 114,  335 => 112,  329 => 109,  325 => 108,  321 => 107,  317 => 106,  313 => 105,  309 => 104,  305 => 103,  301 => 102,  297 => 100,  292 => 98,  287 => 96,  281 => 95,  269 => 90,  225 => 48,  220 => 45,  214 => 44,  208 => 43,  205 => 42,  200 => 39,  194 => 38,  188 => 37,  185 => 36,  183 => 35,  179 => 33,  173 => 32,  167 => 31,  164 => 30,  162 => 29,  158 => 27,  154 => 26,  147 => 25,  141 => 22,  135 => 18,  126 => 17,  107 => 15,  87 => 14,  74 => 10,  70 => 9,  66 => 8,  60 => 5,  57 => 4,  48 => 3,  15 => 1,);
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
\t\t\t\t{% block pageactuelle %}{{projet.nom}} - Second oeuvre{% endblock %}

\t\t\t\t\t{% block body %}

\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t\t<header class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">{{projet.nom}} - Second oeuvre</h2>
\t\t\t\t\t\t\t\t\t</header>
                                    <br>
\t\t\t\t\t\t\t\t\t<h4> {% if nbform < 11 %} Vous avez rempli {{nbform}} formulaire(s) sur 12 pour le second oeuvre de votre chantier. 
\t\t\t\t\t\t\t\t\t\t{% else %} Vous avez renseigné toutes les informations nécessaires pour le second oeuvre.
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
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-caret-down\"></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t <h2 class=\"panel-title\">L'enduit de façade</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t...
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"panel panel-secondary\" id=\"panel-2\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-caret-down\"></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">L’isolation thermique et phonique</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t....

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"panel panel-tertiary\" id=\"panel-3\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-caret-down\"></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Le revêtement intérieur</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\" >
\t\t\t\t\t\t\t\t...
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t<section class=\"panel panel-primary\" id=\"panel-1\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" {% if cloisons == null %} class=\"fa fa-caret-down\" {% else %} class=\"fa fa-caret-up\" {% endif %}></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Les cloisons intérieures</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\" {% if cloisons != null %} style=\"display: none;\" {% endif %}>
\t\t\t\t\t\t\t\t\t{% if cloisons == null %} 
\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('cloisons', {'id': projet.id}) }}\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\tNombre de mètres carrés de cloisons amovibles ({{cloisons.cloisonsAmovibles}}) <br>
\t\t\t\t\t\t\t\t\tNombre de mètres carrés de cloisons sèches ({{cloisons.cloisonsSeches}}) <br>
\t\t\t\t\t\t\t\t\tNombre de mètres carrés de cloisons pour pièces humides ({{cloisons.cloisonsPiecesHumides}}) <br>
\t\t\t\t\t\t\t\t\tNombre de mètres carrés de cloisons en verre ({{cloisons.cloisonsVerre}}) <br>
\t\t\t\t\t\t\t\t\tNombre de mètres carrés de cloisons japonaises ({{cloisons.cloisonsJaponaises}}) <br>
\t\t\t\t\t\t\t\t\tNombre de mètres carrés de claustras intérieur ({{cloisons.claustraInterieur}}) <br>
\t\t\t\t\t\t\t\t\tNombre de mètres carrés de cloisons vitrées style atelier ({{cloisons.cloisonsVitreesStyleAtelier}}) <br>
\t\t\t\t\t\t\t\t\tNombre de mètres carrés de cloisons végétales ({{cloisons.cloisonsVegetales}}) <br>
\t\t\t\t\t
\t\t\t\t\t\t\t\t\t <br>
\t\t\t\t\t\t\t\t\t<b> Sous-total : </b> {{cloisons.prix}} €
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t{% endif %}\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4\" data-plugin-portlet id=\"portlet-2\">
\t\t\t\t\t\t\t<section class=\"panel panel-quartenary\" id=\"panel-4\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" {% if evacuation == null %} class=\"fa fa-caret-down\" {% else %} class=\"fa fa-caret-up\" {% endif %}></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Evacuation des fumées</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\" {% if evacuation != null %} style=\"display: none;\" {% endif %}>
\t\t\t\t\t\t\t\t{% if evacuation == null %} 
\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('evacuation', {'id': projet.id}) }}\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\tMatérieau utilisé pour votre cheminée :  ({{evacuation.materieauUtilise}}) <br>
\t\t\t\t\t\t\t\t\tForme de votre cheminée :  ({{evacuation.forme}}) <br>
\t\t\t\t\t\t\t\t\tType de votre cheminée :  ({{evacuation.typeCheminee}}) <br>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<b> Sous-total : </b> {{evacuation.prix}} €
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t{% endif %}\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"panel panel-success\" id=\"panel-5\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" {% if menuiseriesInt == null %} class=\"fa fa-caret-down\" {% else %} class=\"fa fa-caret-up\" {% endif %}></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Les menuiseries intérieures</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\" {% if menuiseriesInt != null %} style=\"display: none;\" {% endif %}>
\t\t\t\t\t\t\t\t{% if menuiseriesInt == null %} 
\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('menuiseriesInt', {'id': projet.id}) }}\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\tNombre de portes pleines ({{menuiseriesInt.portesPleines}}) <br>
\t\t\t\t\t\t\t\t\tNombre de portes vitrées ({{menuiseriesInt.portesVitrees}})  <br>
\t\t\t\t\t\t\t\t\tNombre de portes battantes ({{menuiseriesInt.portesBattantes}})  <br>
\t\t\t\t\t\t\t\t\tNombre de portes coulissantes ({{menuiseriesInt.portesCoulissantes}})  <br>
\t\t\t\t\t\t\t\t\tNombre de portes de placard pliantes ({{menuiseriesInt.portesPlacardPliantes}})  <br>
\t\t\t\t\t\t\t\t\tNombre de portes de placard battantes ({{menuiseriesInt.portesPlacardBattantes}})  <br>
\t\t\t\t\t\t\t\t\tNombre de portes de placard coulissantes ({{menuiseriesInt.portesPlacardCoulissantes}})  <br>
\t\t\t\t\t\t\t\t\tMatérieau choisi pour vos rampes ({{menuiseriesInt.materieauRampes}})  <br>
\t\t\t\t\t\t\t\t\tNombre de rampes à poser ({{menuiseriesInt.tailleRampes}} m2)  <br>
\t\t\t\t\t\t\t\t\tMatérieau choisi pour vos balustrades ({{menuiseriesInt.materieauBalustrades}})  <br>
\t\t\t\t\t\t\t\t\tNombre de balustrades à poser ({{menuiseriesInt.tailleBalustrades}} m2)  <br>

\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<b> Sous-total : </b> {{menuiseriesInt.prix}} €
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t{% endif %}\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"panel panel-warning\" id=\"panel-6\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" {% if escaliers == null %} class=\"fa fa-caret-down\" {% else %} class=\"fa fa-caret-up\" {% endif %}></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Les escaliers</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\" {% if escaliers != null %} style=\"display: none;\" {% endif %}>
\t\t\t\t\t\t\t\t\t{% if escaliers == null %}
\t\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('escaliers', {'id': projet.id}) }}\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\t\tType d'escalier :  {{escaliers.typeEscalier}} <br>
\t\t\t\t\t\t\t\t\t\tDimensions :  {{escaliers.dimensions}} <br>
\t\t\t\t\t\t\t\t\t\tMateriel :  {{escaliers.materiaux}} <br>

\t\t\t\t\t\t\t\t\t\t<b> Sous-total : </b> {{escaliers.prix}} €

\t\t\t\t\t\t\t\t\t{% endif %}\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t<section class=\"panel panel-quartenary\" id=\"panel-4\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" {% if plomberie == null %} class=\"fa fa-caret-down\" {% else %} class=\"fa fa-caret-up\" {% endif %}></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">La plomberie</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t<div class=\"panel-body\" {% if plomberie != null %} style=\"display: none;\" {% endif %}>
\t\t\t\t\t\t\t\t\t\t{% if plomberie == null %}
\t\t\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('plomberie', {'id': projet.id}) }}\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\t\t\tDimensions tuyau :  {{plomberie.nbMetreTuyau}} m <br>
\t\t\t\t\t\t\t\t\t\t\tType tuyau :  {{plomberie.typeTuyau}} <br>
\t\t\t\t\t\t\t\t\t\t\tNombre de robinets :  {{plomberie.nbRobinets}} <br>
\t\t\t\t\t\t\t\t\t\t\tNombre de WC :  {{plomberie.nbWC}} <br>
\t\t\t\t\t\t\t\t\t\t\tType chauffage eau :  {{plomberie.typeChauffageEau}} <br>
\t\t\t\t\t\t\t\t\t\t\tType compteur :  {{plomberie.typeCompteur}} <br>
\t\t\t\t\t\t\t\t\t\t\tNombre de baignoires :  {{plomberie.nbBaignoire}} <br>
\t\t\t\t\t\t\t\t\t\t\tNombre de douches :  {{plomberie.nbDouche}} <br>

\t\t\t\t\t\t\t\t\t\t\t<b> Sous-total : </b> {{plomberie.prix}} </b> €

\t\t\t\t\t\t\t\t\t\t{% endif %}\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4\" data-plugin-portlet id=\"portlet-3\">
\t\t\t\t\t\t\t<section class=\"panel panel-info\" id=\"panel-7\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" {% if electricite == null %} class=\"fa fa-caret-down\" {% else %} class=\"fa fa-caret-up\" {% endif %}></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">L’électricité</h2> </a>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\" {% if electricite != null %} style=\"display: none;\" {% endif %}>
\t\t\t\t\t\t\t\t\t{% if electricite == null %}
\t\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('electricite', {'id': projet.id}) }}\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\t\tDimension cable :  {{electricite.dimensionCable}} m <br>
\t\t\t\t\t\t\t\t\t\tNombre de chauffage :  {{electricite.nbChauffage}} <br>
\t\t\t\t\t\t\t\t\t\tNombre d'interrupteurs :  {{electricite.nbInterrupteur}} <br>
\t\t\t\t\t\t\t\t\t\tNombre de sortie de lumières:  {{electricite.nbSortieLumieres}} <br>
\t\t\t\t\t\t\t\t\t\tNombre de prises électriques :  {{electricite.nbPriseElectrique}} <br>
\t\t\t\t\t\t\t\t\t\tNombre de volets roulant :  {{electricite.nbVoletRoulant}} <br>

\t\t\t\t\t\t\t\t\t\t<b> Sous-total : </b> {{electricite.prix}} </b> €

\t\t\t\t\t\t\t\t\t{% endif %}\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"panel panel-dark\" id=\"panel-8\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-caret-down\" }></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">La ventilation</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t<div class=\"panel-body\" {% if ventilation != null %} style=\"display: none;\" {% endif %}>
\t\t\t\t\t\t\t\t\t{% if ventilation == null %} 
\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('ventilation', {'id': projet.id}) }}\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\tType de Ventilation : <b>{{ventilation.typeVentilation}} <b/><br>
\t\t\t\t\t\t\t\t\t<b> Sous-total : </b> {{ventilation.prix}} </b> €
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t{% endif %}\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>

\t\t\t\t\t\t\t<section class=\"panel panel-danger\" id=\"panel-9\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-caret-down\" ></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">La climatisation</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\" {% if climatisation != null %} style=\"display: none;\" {% endif %}>
\t\t\t\t\t\t\t\t\t{% if climatisation == null %} 
\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('climatisation', {'id': projet.id}) }}\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\t<b>Type de climatisation : {{climatisation.typeClimatisation}}</b> <br>
\t\t\t\t\t\t\t\t\t<b> Sous-total : </b> {{climatisation.prix}} </b> €
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t{% endif %}\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>

\t\t\t\t\t\t\t<section class=\"panel panel-info\" id=\"panel-7\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-caret-down\" ></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">La domotique</h2> </a>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\" {% if domotique != null %} style=\"display: none;\" {% endif %}>
\t\t\t\t\t\t\t\t\t{% if domotique == null %} 
\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('domotique', {'id': projet.id}) }}\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\t{% if domotique.regularisationChauffage != null %}
\t\t\t\t\t\t\t\t\t<b>Option Chauffage autonome<b>
\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% if domotique.eclairageAuto != null %}
\t\t\t\t\t\t\t\t\t<b>Option Eclairage automatique<b>
\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% if domotique.ouvertureFermetureAuto != null %}
\t\t\t\t\t\t\t\t\t<b>Option ouverture et fermeture automatique des fenêtre<b>
\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% if domotique.autonomieEau != null %}
\t\t\t\t\t\t\t\t\t<b>Option Autonomie du débit d'eau<b>
\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% if domotique.detecteurEtAlarme != null %}
\t\t\t\t\t\t\t\t\t<b>Option alarme et détecteurs<b>
\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t<b> Sous-total : </b> {{domotique.prix}} </b> €
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t{% endif %}\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"pager\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{path('gros-oeuvre', {'id': projet.id}) }}\"> <button class=\"mb-xs mt-xs mr-xs btn btn-lg btn-default\"
\t\t\t\t\t\t\t\t\t\ttype=\"button\">Revenir au gros oeuvre</button></a>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t{% endblock %}

\t\t{% block javascripts %}

\t\t{% endblock %}
", "project/second-oeuvre-view.html.twig", "/opt/lampp/htdocs/Symfony/templates/project/second-oeuvre-view.html.twig");
    }
}
