<?php

/* project/second-oeuvre-view.html.twig */
class __TwigTemplate_dadfb72fe1aa56f52270791f396a0bb4de6434680a39a9c8afe9041ed2dd38b4 extends Twig_Template
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
        if (((isset($context["nbform"]) || array_key_exists("nbform", $context) ? $context["nbform"] : (function () { throw new Twig_Error_Runtime('Variable "nbform" does not exist.', 25, $this->source); })()) < 12)) {
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
        if (((((isset($context["nbform"]) || array_key_exists("nbform", $context) ? $context["nbform"] : (function () { throw new Twig_Error_Runtime('Variable "nbform" does not exist.', 29, $this->source); })()) / 12) * 100) < 25)) {
            // line 30
            echo "\t\t\t\t\t\t\t\t\t<div class=\"progress progress-striped light active m-md\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"";
            // line 31
            echo twig_escape_filter($this->env, (((isset($context["nbform"]) || array_key_exists("nbform", $context) ? $context["nbform"] : (function () { throw new Twig_Error_Runtime('Variable "nbform" does not exist.', 31, $this->source); })()) / 12) * 100), "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
            echo twig_escape_filter($this->env, (((isset($context["nbform"]) || array_key_exists("nbform", $context) ? $context["nbform"] : (function () { throw new Twig_Error_Runtime('Variable "nbform" does not exist.', 31, $this->source); })()) / 12) * 100), "html", null, true);
            echo "%;\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 32
            if (((isset($context["nbform"]) || array_key_exists("nbform", $context) ? $context["nbform"] : (function () { throw new Twig_Error_Runtime('Variable "nbform" does not exist.', 32, $this->source); })()) == 12)) {
                echo " Terminé ";
            } else {
                echo " En cours ";
            }
            // line 33
            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t";
        } elseif (((((        // line 35
(isset($context["nbform"]) || array_key_exists("nbform", $context) ? $context["nbform"] : (function () { throw new Twig_Error_Runtime('Variable "nbform" does not exist.', 35, $this->source); })()) / 12) * 100) > 25) && ((((isset($context["nbform"]) || array_key_exists("nbform", $context) ? $context["nbform"] : (function () { throw new Twig_Error_Runtime('Variable "nbform" does not exist.', 35, $this->source); })()) / 12) * 100) < 75))) {
            // line 36
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-striped light active m-md\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"";
            // line 37
            echo twig_escape_filter($this->env, (((isset($context["nbform"]) || array_key_exists("nbform", $context) ? $context["nbform"] : (function () { throw new Twig_Error_Runtime('Variable "nbform" does not exist.', 37, $this->source); })()) / 12) * 100), "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
            echo twig_escape_filter($this->env, (((isset($context["nbform"]) || array_key_exists("nbform", $context) ? $context["nbform"] : (function () { throw new Twig_Error_Runtime('Variable "nbform" does not exist.', 37, $this->source); })()) / 12) * 100), "html", null, true);
            echo "%;\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 38
            if (((isset($context["nbform"]) || array_key_exists("nbform", $context) ? $context["nbform"] : (function () { throw new Twig_Error_Runtime('Variable "nbform" does not exist.', 38, $this->source); })()) == 12)) {
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
            echo twig_escape_filter($this->env, (((isset($context["nbform"]) || array_key_exists("nbform", $context) ? $context["nbform"] : (function () { throw new Twig_Error_Runtime('Variable "nbform" does not exist.', 43, $this->source); })()) / 12) * 100), "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
            echo twig_escape_filter($this->env, (((isset($context["nbform"]) || array_key_exists("nbform", $context) ? $context["nbform"] : (function () { throw new Twig_Error_Runtime('Variable "nbform" does not exist.', 43, $this->source); })()) / 12) * 100), "html", null, true);
            echo "%;\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 44
            if (((isset($context["nbform"]) || array_key_exists("nbform", $context) ? $context["nbform"] : (function () { throw new Twig_Error_Runtime('Variable "nbform" does not exist.', 44, $this->source); })()) == 12)) {
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
\t\t\t\t\t\t\t<section class=\"panel panel-quartenary\" id=\"panel-4\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" ";
        // line 53
        if (((isset($context["enduit"]) || array_key_exists("enduit", $context) ? $context["enduit"] : (function () { throw new Twig_Error_Runtime('Variable "enduit" does not exist.', 53, $this->source); })()) == null)) {
            echo " class=\"fa fa-caret-down\" ";
        } else {
            echo " class=\"fa fa-caret-up\" ";
        }
        echo "></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Enduit de facade</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\" ";
        // line 58
        if (((isset($context["enduit"]) || array_key_exists("enduit", $context) ? $context["enduit"] : (function () { throw new Twig_Error_Runtime('Variable "enduit" does not exist.', 58, $this->source); })()) != null)) {
            echo " style=\"display: none;\" ";
        }
        echo ">
\t\t\t\t\t\t\t\t";
        // line 59
        if (((isset($context["enduit"]) || array_key_exists("enduit", $context) ? $context["enduit"] : (function () { throw new Twig_Error_Runtime('Variable "enduit" does not exist.', 59, $this->source); })()) == null)) {
            echo " 
\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("enduit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new Twig_Error_Runtime('Variable "projet" does not exist.', 61, $this->source); })()), "id", [])]), "html", null, true);
            echo "\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 63
            echo "\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\tsurface de la facade :  (";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["enduit"]) || array_key_exists("enduit", $context) ? $context["enduit"] : (function () { throw new Twig_Error_Runtime('Variable "enduit" does not exist.', 65, $this->source); })()), "surface", []), "html", null, true);
            echo ") <br>
\t\t\t\t\t\t\t\t\tnombre de couches  :  (";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["enduit"]) || array_key_exists("enduit", $context) ? $context["enduit"] : (function () { throw new Twig_Error_Runtime('Variable "enduit" does not exist.', 66, $this->source); })()), "nbCouches", []), "html", null, true);
            echo ") <br>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<b> Sous-total : </b> ";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["enduit"]) || array_key_exists("enduit", $context) ? $context["enduit"] : (function () { throw new Twig_Error_Runtime('Variable "enduit" does not exist.', 69, $this->source); })()), "prix", []), "html", null, true);
            echo " €
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
        }
        // line 71
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"panel panel-secondary\" id=\"panel-2\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" ";
        // line 76
        if (((isset($context["isolation"]) || array_key_exists("isolation", $context) ? $context["isolation"] : (function () { throw new Twig_Error_Runtime('Variable "isolation" does not exist.', 76, $this->source); })()) == null)) {
            echo " class=\"fa fa-caret-down\" ";
        } else {
            echo " class=\"fa fa-caret-up\" ";
        }
        echo "></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">L’isolation thermique et phonique</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\" ";
        // line 81
        if (((isset($context["isolation"]) || array_key_exists("isolation", $context) ? $context["isolation"] : (function () { throw new Twig_Error_Runtime('Variable "isolation" does not exist.', 81, $this->source); })()) != null)) {
            echo " style=\"display: none;\" ";
        }
        echo ">
\t\t\t\t\t\t\t\t";
        // line 82
        if (((isset($context["isolation"]) || array_key_exists("isolation", $context) ? $context["isolation"] : (function () { throw new Twig_Error_Runtime('Variable "isolation" does not exist.', 82, $this->source); })()) == null)) {
            echo " 
\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("isolation", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new Twig_Error_Runtime('Variable "projet" does not exist.', 84, $this->source); })()), "id", [])]), "html", null, true);
            echo "\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 86
            echo "\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\tsurface de l'isolation thermique :  (";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["isolation"]) || array_key_exists("isolation", $context) ? $context["isolation"] : (function () { throw new Twig_Error_Runtime('Variable "isolation" does not exist.', 88, $this->source); })()), "surfaceThermique", []), "html", null, true);
            echo ") <br>
\t\t\t\t\t\t\t\t\tsurface de l'isolation phonique :  (";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["isolation"]) || array_key_exists("isolation", $context) ? $context["isolation"] : (function () { throw new Twig_Error_Runtime('Variable "isolation" does not exist.', 89, $this->source); })()), "surfacePhonique", []), "html", null, true);
            echo ") <br>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<b> Sous-total : </b> ";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["isolation"]) || array_key_exists("isolation", $context) ? $context["isolation"] : (function () { throw new Twig_Error_Runtime('Variable "isolation" does not exist.', 92, $this->source); })()), "prix", []), "html", null, true);
            echo " €
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
        }
        // line 94
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"panel panel-tertiary\" id=\"panel-3\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" ";
        // line 100
        if (((isset($context["revetement"]) || array_key_exists("revetement", $context) ? $context["revetement"] : (function () { throw new Twig_Error_Runtime('Variable "revetement" does not exist.', 100, $this->source); })()) == null)) {
            echo " class=\"fa fa-caret-down\" ";
        } else {
            echo " class=\"fa fa-caret-up\" ";
        }
        echo "></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Le revêtement intérieur</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\" ";
        // line 105
        if (((isset($context["revetement"]) || array_key_exists("revetement", $context) ? $context["revetement"] : (function () { throw new Twig_Error_Runtime('Variable "revetement" does not exist.', 105, $this->source); })()) != null)) {
            echo " style=\"display: none;\" ";
        }
        echo ">
\t\t\t\t\t\t\t\t";
        // line 106
        if (((isset($context["revetement"]) || array_key_exists("revetement", $context) ? $context["revetement"] : (function () { throw new Twig_Error_Runtime('Variable "revetement" does not exist.', 106, $this->source); })()) == null)) {
            echo " 
\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 108
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("revetement", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new Twig_Error_Runtime('Variable "projet" does not exist.', 108, $this->source); })()), "id", [])]), "html", null, true);
            echo "\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 110
            echo "\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\tsurface  du papier classique :  (";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["revetement"]) || array_key_exists("revetement", $context) ? $context["revetement"] : (function () { throw new Twig_Error_Runtime('Variable "revetement" does not exist.', 112, $this->source); })()), "surfRevetClassique", []), "html", null, true);
            echo ") <br>
\t\t\t\t\t\t\t\t\tsurface  du papier avec motif :  (";
            // line 113
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["revetement"]) || array_key_exists("revetement", $context) ? $context["revetement"] : (function () { throw new Twig_Error_Runtime('Variable "revetement" does not exist.', 113, $this->source); })()), "surfRevetMotif", []), "html", null, true);
            echo ") <br>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<b> Sous-total : </b> ";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["revetement"]) || array_key_exists("revetement", $context) ? $context["revetement"] : (function () { throw new Twig_Error_Runtime('Variable "revetement" does not exist.', 116, $this->source); })()), "prix", []), "html", null, true);
            echo " €
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
        }
        // line 118
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t<section class=\"panel panel-primary\" id=\"panel-1\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" ";
        // line 124
        if (((isset($context["cloisons"]) || array_key_exists("cloisons", $context) ? $context["cloisons"] : (function () { throw new Twig_Error_Runtime('Variable "cloisons" does not exist.', 124, $this->source); })()) == null)) {
            echo " class=\"fa fa-caret-down\" ";
        } else {
            echo " class=\"fa fa-caret-up\" ";
        }
        echo "></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Les cloisons intérieures</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\" ";
        // line 129
        if (((isset($context["cloisons"]) || array_key_exists("cloisons", $context) ? $context["cloisons"] : (function () { throw new Twig_Error_Runtime('Variable "cloisons" does not exist.', 129, $this->source); })()) != null)) {
            echo " style=\"display: none;\" ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t";
        // line 130
        if (((isset($context["cloisons"]) || array_key_exists("cloisons", $context) ? $context["cloisons"] : (function () { throw new Twig_Error_Runtime('Variable "cloisons" does not exist.', 130, $this->source); })()) == null)) {
            echo " 
\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 132
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cloisons", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new Twig_Error_Runtime('Variable "projet" does not exist.', 132, $this->source); })()), "id", [])]), "html", null, true);
            echo "\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 134
            echo "\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\tNombre de mètres carrés de cloisons amovibles (";
            // line 136
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cloisons"]) || array_key_exists("cloisons", $context) ? $context["cloisons"] : (function () { throw new Twig_Error_Runtime('Variable "cloisons" does not exist.', 136, $this->source); })()), "cloisonsAmovibles", []), "html", null, true);
            echo ") <br>
\t\t\t\t\t\t\t\t\tNombre de mètres carrés de cloisons sèches (";
            // line 137
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cloisons"]) || array_key_exists("cloisons", $context) ? $context["cloisons"] : (function () { throw new Twig_Error_Runtime('Variable "cloisons" does not exist.', 137, $this->source); })()), "cloisonsSeches", []), "html", null, true);
            echo ") <br>
\t\t\t\t\t\t\t\t\tNombre de mètres carrés de cloisons pour pièces humides (";
            // line 138
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cloisons"]) || array_key_exists("cloisons", $context) ? $context["cloisons"] : (function () { throw new Twig_Error_Runtime('Variable "cloisons" does not exist.', 138, $this->source); })()), "cloisonsPiecesHumides", []), "html", null, true);
            echo ") <br>
\t\t\t\t\t\t\t\t\tNombre de mètres carrés de cloisons en verre (";
            // line 139
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cloisons"]) || array_key_exists("cloisons", $context) ? $context["cloisons"] : (function () { throw new Twig_Error_Runtime('Variable "cloisons" does not exist.', 139, $this->source); })()), "cloisonsVerre", []), "html", null, true);
            echo ") <br>
\t\t\t\t\t\t\t\t\tNombre de mètres carrés de cloisons japonaises (";
            // line 140
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cloisons"]) || array_key_exists("cloisons", $context) ? $context["cloisons"] : (function () { throw new Twig_Error_Runtime('Variable "cloisons" does not exist.', 140, $this->source); })()), "cloisonsJaponaises", []), "html", null, true);
            echo ") <br>
\t\t\t\t\t\t\t\t\tNombre de mètres carrés de claustras intérieur (";
            // line 141
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cloisons"]) || array_key_exists("cloisons", $context) ? $context["cloisons"] : (function () { throw new Twig_Error_Runtime('Variable "cloisons" does not exist.', 141, $this->source); })()), "claustraInterieur", []), "html", null, true);
            echo ") <br>
\t\t\t\t\t\t\t\t\tNombre de mètres carrés de cloisons vitrées style atelier (";
            // line 142
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cloisons"]) || array_key_exists("cloisons", $context) ? $context["cloisons"] : (function () { throw new Twig_Error_Runtime('Variable "cloisons" does not exist.', 142, $this->source); })()), "cloisonsVitreesStyleAtelier", []), "html", null, true);
            echo ") <br>
\t\t\t\t\t\t\t\t\tNombre de mètres carrés de cloisons végétales (";
            // line 143
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cloisons"]) || array_key_exists("cloisons", $context) ? $context["cloisons"] : (function () { throw new Twig_Error_Runtime('Variable "cloisons" does not exist.', 143, $this->source); })()), "cloisonsVegetales", []), "html", null, true);
            echo ") <br>
\t\t\t\t\t
\t\t\t\t\t\t\t\t\t <br>
\t\t\t\t\t\t\t\t\t<b> Sous-total : </b> ";
            // line 146
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cloisons"]) || array_key_exists("cloisons", $context) ? $context["cloisons"] : (function () { throw new Twig_Error_Runtime('Variable "cloisons" does not exist.', 146, $this->source); })()), "prix", []), "html", null, true);
            echo " €
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
        }
        // line 148
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4\" data-plugin-portlet id=\"portlet-2\">
\t\t\t\t\t\t\t<section class=\"panel panel-quartenary\" id=\"panel-4\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" ";
        // line 155
        if (((isset($context["evacuation"]) || array_key_exists("evacuation", $context) ? $context["evacuation"] : (function () { throw new Twig_Error_Runtime('Variable "evacuation" does not exist.', 155, $this->source); })()) == null)) {
            echo " class=\"fa fa-caret-down\" ";
        } else {
            echo " class=\"fa fa-caret-up\" ";
        }
        echo "></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Evacuation des fumées</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\" ";
        // line 160
        if (((isset($context["evacuation"]) || array_key_exists("evacuation", $context) ? $context["evacuation"] : (function () { throw new Twig_Error_Runtime('Variable "evacuation" does not exist.', 160, $this->source); })()) != null)) {
            echo " style=\"display: none;\" ";
        }
        echo ">
\t\t\t\t\t\t\t\t";
        // line 161
        if (((isset($context["evacuation"]) || array_key_exists("evacuation", $context) ? $context["evacuation"] : (function () { throw new Twig_Error_Runtime('Variable "evacuation" does not exist.', 161, $this->source); })()) == null)) {
            echo " 
\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 163
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evacuation", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new Twig_Error_Runtime('Variable "projet" does not exist.', 163, $this->source); })()), "id", [])]), "html", null, true);
            echo "\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 165
            echo "\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\tMatérieau utilisé pour votre cheminée :  (";
            // line 167
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evacuation"]) || array_key_exists("evacuation", $context) ? $context["evacuation"] : (function () { throw new Twig_Error_Runtime('Variable "evacuation" does not exist.', 167, $this->source); })()), "materieauUtilise", []), "html", null, true);
            echo ") <br>
\t\t\t\t\t\t\t\t\tForme de votre cheminée :  (";
            // line 168
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evacuation"]) || array_key_exists("evacuation", $context) ? $context["evacuation"] : (function () { throw new Twig_Error_Runtime('Variable "evacuation" does not exist.', 168, $this->source); })()), "forme", []), "html", null, true);
            echo ") <br>
\t\t\t\t\t\t\t\t\tType de votre cheminée :  (";
            // line 169
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evacuation"]) || array_key_exists("evacuation", $context) ? $context["evacuation"] : (function () { throw new Twig_Error_Runtime('Variable "evacuation" does not exist.', 169, $this->source); })()), "typeCheminee", []), "html", null, true);
            echo ") <br>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<b> Sous-total : </b> ";
            // line 171
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evacuation"]) || array_key_exists("evacuation", $context) ? $context["evacuation"] : (function () { throw new Twig_Error_Runtime('Variable "evacuation" does not exist.', 171, $this->source); })()), "prix", []), "html", null, true);
            echo " € 
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
        }
        // line 173
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>

\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<section class=\"panel panel-success\" id=\"panel-5\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" ";
        // line 181
        if (((isset($context["menuiseriesInt"]) || array_key_exists("menuiseriesInt", $context) ? $context["menuiseriesInt"] : (function () { throw new Twig_Error_Runtime('Variable "menuiseriesInt" does not exist.', 181, $this->source); })()) == null)) {
            echo " class=\"fa fa-caret-down\" ";
        } else {
            echo " class=\"fa fa-caret-up\" ";
        }
        echo "></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Les menuiseries intérieures</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\" ";
        // line 186
        if (((isset($context["menuiseriesInt"]) || array_key_exists("menuiseriesInt", $context) ? $context["menuiseriesInt"] : (function () { throw new Twig_Error_Runtime('Variable "menuiseriesInt" does not exist.', 186, $this->source); })()) != null)) {
            echo " style=\"display: none;\" ";
        }
        echo ">
\t\t\t\t\t\t\t\t";
        // line 187
        if (((isset($context["menuiseriesInt"]) || array_key_exists("menuiseriesInt", $context) ? $context["menuiseriesInt"] : (function () { throw new Twig_Error_Runtime('Variable "menuiseriesInt" does not exist.', 187, $this->source); })()) == null)) {
            echo " 
\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 189
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("menuiseriesInt", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new Twig_Error_Runtime('Variable "projet" does not exist.', 189, $this->source); })()), "id", [])]), "html", null, true);
            echo "\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 191
            echo "\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\tNombre de portes pleines (";
            // line 193
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["menuiseriesInt"]) || array_key_exists("menuiseriesInt", $context) ? $context["menuiseriesInt"] : (function () { throw new Twig_Error_Runtime('Variable "menuiseriesInt" does not exist.', 193, $this->source); })()), "portesPleines", []), "html", null, true);
            echo ") <br>
\t\t\t\t\t\t\t\t\tNombre de portes vitrées (";
            // line 194
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["menuiseriesInt"]) || array_key_exists("menuiseriesInt", $context) ? $context["menuiseriesInt"] : (function () { throw new Twig_Error_Runtime('Variable "menuiseriesInt" does not exist.', 194, $this->source); })()), "portesVitrees", []), "html", null, true);
            echo ")  <br>
\t\t\t\t\t\t\t\t\tNombre de portes battantes (";
            // line 195
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["menuiseriesInt"]) || array_key_exists("menuiseriesInt", $context) ? $context["menuiseriesInt"] : (function () { throw new Twig_Error_Runtime('Variable "menuiseriesInt" does not exist.', 195, $this->source); })()), "portesBattantes", []), "html", null, true);
            echo ")  <br>
\t\t\t\t\t\t\t\t\tNombre de portes coulissantes (";
            // line 196
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["menuiseriesInt"]) || array_key_exists("menuiseriesInt", $context) ? $context["menuiseriesInt"] : (function () { throw new Twig_Error_Runtime('Variable "menuiseriesInt" does not exist.', 196, $this->source); })()), "portesCoulissantes", []), "html", null, true);
            echo ")  <br>
\t\t\t\t\t\t\t\t\tNombre de portes de placard pliantes (";
            // line 197
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["menuiseriesInt"]) || array_key_exists("menuiseriesInt", $context) ? $context["menuiseriesInt"] : (function () { throw new Twig_Error_Runtime('Variable "menuiseriesInt" does not exist.', 197, $this->source); })()), "portesPlacardPliantes", []), "html", null, true);
            echo ")  <br>
\t\t\t\t\t\t\t\t\tNombre de portes de placard battantes (";
            // line 198
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["menuiseriesInt"]) || array_key_exists("menuiseriesInt", $context) ? $context["menuiseriesInt"] : (function () { throw new Twig_Error_Runtime('Variable "menuiseriesInt" does not exist.', 198, $this->source); })()), "portesPlacardBattantes", []), "html", null, true);
            echo ")  <br>
\t\t\t\t\t\t\t\t\tNombre de portes de placard coulissantes (";
            // line 199
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["menuiseriesInt"]) || array_key_exists("menuiseriesInt", $context) ? $context["menuiseriesInt"] : (function () { throw new Twig_Error_Runtime('Variable "menuiseriesInt" does not exist.', 199, $this->source); })()), "portesPlacardCoulissantes", []), "html", null, true);
            echo ")  <br>
\t\t\t\t\t\t\t\t\tMatérieau choisi pour vos rampes (";
            // line 200
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["menuiseriesInt"]) || array_key_exists("menuiseriesInt", $context) ? $context["menuiseriesInt"] : (function () { throw new Twig_Error_Runtime('Variable "menuiseriesInt" does not exist.', 200, $this->source); })()), "materieauRampes", []), "html", null, true);
            echo ")  <br>
\t\t\t\t\t\t\t\t\tNombre de rampes à poser (";
            // line 201
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["menuiseriesInt"]) || array_key_exists("menuiseriesInt", $context) ? $context["menuiseriesInt"] : (function () { throw new Twig_Error_Runtime('Variable "menuiseriesInt" does not exist.', 201, $this->source); })()), "tailleRampes", []), "html", null, true);
            echo " m2)  <br>
\t\t\t\t\t\t\t\t\tMatérieau choisi pour vos balustrades (";
            // line 202
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["menuiseriesInt"]) || array_key_exists("menuiseriesInt", $context) ? $context["menuiseriesInt"] : (function () { throw new Twig_Error_Runtime('Variable "menuiseriesInt" does not exist.', 202, $this->source); })()), "materieauBalustrades", []), "html", null, true);
            echo ")  <br>
\t\t\t\t\t\t\t\t\tNombre de balustrades à poser (";
            // line 203
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["menuiseriesInt"]) || array_key_exists("menuiseriesInt", $context) ? $context["menuiseriesInt"] : (function () { throw new Twig_Error_Runtime('Variable "menuiseriesInt" does not exist.', 203, $this->source); })()), "tailleBalustrades", []), "html", null, true);
            echo " m2)  <br>

\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<b> Sous-total : </b> ";
            // line 206
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["menuiseriesInt"]) || array_key_exists("menuiseriesInt", $context) ? $context["menuiseriesInt"] : (function () { throw new Twig_Error_Runtime('Variable "menuiseriesInt" does not exist.', 206, $this->source); })()), "prix", []), "html", null, true);
            echo " € 
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
        }
        // line 208
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"panel panel-warning\" id=\"panel-6\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" ";
        // line 213
        if (((isset($context["escaliers"]) || array_key_exists("escaliers", $context) ? $context["escaliers"] : (function () { throw new Twig_Error_Runtime('Variable "escaliers" does not exist.', 213, $this->source); })()) == null)) {
            echo " class=\"fa fa-caret-down\" ";
        } else {
            echo " class=\"fa fa-caret-up\" ";
        }
        echo "></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Les escaliers</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\" ";
        // line 218
        if (((isset($context["escaliers"]) || array_key_exists("escaliers", $context) ? $context["escaliers"] : (function () { throw new Twig_Error_Runtime('Variable "escaliers" does not exist.', 218, $this->source); })()) != null)) {
            echo " style=\"display: none;\" ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t";
        // line 219
        if (((isset($context["escaliers"]) || array_key_exists("escaliers", $context) ? $context["escaliers"] : (function () { throw new Twig_Error_Runtime('Variable "escaliers" does not exist.', 219, $this->source); })()) == null)) {
            // line 220
            echo "\t\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 221
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("escaliers", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new Twig_Error_Runtime('Variable "projet" does not exist.', 221, $this->source); })()), "id", [])]), "html", null, true);
            echo "\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 223
            echo "\t\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\t\tType d'escalier :  ";
            // line 225
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["escaliers"]) || array_key_exists("escaliers", $context) ? $context["escaliers"] : (function () { throw new Twig_Error_Runtime('Variable "escaliers" does not exist.', 225, $this->source); })()), "typeEscalier", []), "html", null, true);
            echo " <br>
\t\t\t\t\t\t\t\t\t\tDimensions :  ";
            // line 226
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["escaliers"]) || array_key_exists("escaliers", $context) ? $context["escaliers"] : (function () { throw new Twig_Error_Runtime('Variable "escaliers" does not exist.', 226, $this->source); })()), "dimensions", []), "html", null, true);
            echo " <br>
\t\t\t\t\t\t\t\t\t\tMateriel :  ";
            // line 227
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["escaliers"]) || array_key_exists("escaliers", $context) ? $context["escaliers"] : (function () { throw new Twig_Error_Runtime('Variable "escaliers" does not exist.', 227, $this->source); })()), "materiaux", []), "html", null, true);
            echo " <br>

\t\t\t\t\t\t\t\t\t\t<b> Sous-total : </b> ";
            // line 229
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["escaliers"]) || array_key_exists("escaliers", $context) ? $context["escaliers"] : (function () { throw new Twig_Error_Runtime('Variable "escaliers" does not exist.', 229, $this->source); })()), "prix", []), "html", null, true);
            echo " € 

\t\t\t\t\t\t\t\t\t";
        }
        // line 231
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t<section class=\"panel panel-quartenary\" id=\"panel-4\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" ";
        // line 236
        if (((isset($context["plomberie"]) || array_key_exists("plomberie", $context) ? $context["plomberie"] : (function () { throw new Twig_Error_Runtime('Variable "plomberie" does not exist.', 236, $this->source); })()) == null)) {
            echo " class=\"fa fa-caret-down\" ";
        } else {
            echo " class=\"fa fa-caret-up\" ";
        }
        echo "></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">La plomberie</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t<div class=\"panel-body\" ";
        // line 241
        if (((isset($context["plomberie"]) || array_key_exists("plomberie", $context) ? $context["plomberie"] : (function () { throw new Twig_Error_Runtime('Variable "plomberie" does not exist.', 241, $this->source); })()) != null)) {
            echo " style=\"display: none;\" ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t\t";
        // line 242
        if (((isset($context["plomberie"]) || array_key_exists("plomberie", $context) ? $context["plomberie"] : (function () { throw new Twig_Error_Runtime('Variable "plomberie" does not exist.', 242, $this->source); })()) == null)) {
            // line 243
            echo "\t\t\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 244
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("plomberie", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new Twig_Error_Runtime('Variable "projet" does not exist.', 244, $this->source); })()), "id", [])]), "html", null, true);
            echo "\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 246
            echo "\t\t\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\t\t\tDimensions tuyau :  ";
            // line 248
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plomberie"]) || array_key_exists("plomberie", $context) ? $context["plomberie"] : (function () { throw new Twig_Error_Runtime('Variable "plomberie" does not exist.', 248, $this->source); })()), "nbMetreTuyau", []), "html", null, true);
            echo " m <br>
\t\t\t\t\t\t\t\t\t\t\tType tuyau :  ";
            // line 249
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plomberie"]) || array_key_exists("plomberie", $context) ? $context["plomberie"] : (function () { throw new Twig_Error_Runtime('Variable "plomberie" does not exist.', 249, $this->source); })()), "typeTuyau", []), "html", null, true);
            echo " <br>
\t\t\t\t\t\t\t\t\t\t\tNombre de robinets :  ";
            // line 250
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plomberie"]) || array_key_exists("plomberie", $context) ? $context["plomberie"] : (function () { throw new Twig_Error_Runtime('Variable "plomberie" does not exist.', 250, $this->source); })()), "nbRobinets", []), "html", null, true);
            echo " <br>
\t\t\t\t\t\t\t\t\t\t\tNombre de WC :  ";
            // line 251
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plomberie"]) || array_key_exists("plomberie", $context) ? $context["plomberie"] : (function () { throw new Twig_Error_Runtime('Variable "plomberie" does not exist.', 251, $this->source); })()), "nbWC", []), "html", null, true);
            echo " <br>
\t\t\t\t\t\t\t\t\t\t\tType chauffage eau :  ";
            // line 252
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plomberie"]) || array_key_exists("plomberie", $context) ? $context["plomberie"] : (function () { throw new Twig_Error_Runtime('Variable "plomberie" does not exist.', 252, $this->source); })()), "typeChauffageEau", []), "html", null, true);
            echo " <br>
\t\t\t\t\t\t\t\t\t\t\tType compteur :  ";
            // line 253
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plomberie"]) || array_key_exists("plomberie", $context) ? $context["plomberie"] : (function () { throw new Twig_Error_Runtime('Variable "plomberie" does not exist.', 253, $this->source); })()), "typeCompteur", []), "html", null, true);
            echo " <br>
\t\t\t\t\t\t\t\t\t\t\tNombre de baignoires :  ";
            // line 254
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plomberie"]) || array_key_exists("plomberie", $context) ? $context["plomberie"] : (function () { throw new Twig_Error_Runtime('Variable "plomberie" does not exist.', 254, $this->source); })()), "nbBaignoire", []), "html", null, true);
            echo " <br>
\t\t\t\t\t\t\t\t\t\t\tNombre de douches :  ";
            // line 255
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plomberie"]) || array_key_exists("plomberie", $context) ? $context["plomberie"] : (function () { throw new Twig_Error_Runtime('Variable "plomberie" does not exist.', 255, $this->source); })()), "nbDouche", []), "html", null, true);
            echo " <br>

\t\t\t\t\t\t\t\t\t\t\t<b> Sous-total : </b> ";
            // line 257
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plomberie"]) || array_key_exists("plomberie", $context) ? $context["plomberie"] : (function () { throw new Twig_Error_Runtime('Variable "plomberie" does not exist.', 257, $this->source); })()), "prix", []), "html", null, true);
            echo " </b> € 

\t\t\t\t\t\t\t\t\t\t";
        }
        // line 259
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4\" data-plugin-portlet id=\"portlet-3\">
\t\t\t\t\t\t\t<section class=\"panel panel-info\" id=\"panel-7\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" ";
        // line 266
        if (((isset($context["electricite"]) || array_key_exists("electricite", $context) ? $context["electricite"] : (function () { throw new Twig_Error_Runtime('Variable "electricite" does not exist.', 266, $this->source); })()) == null)) {
            echo " class=\"fa fa-caret-down\" ";
        } else {
            echo " class=\"fa fa-caret-up\" ";
        }
        echo "></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">L’électricité</h2> </a>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\" ";
        // line 271
        if (((isset($context["electricite"]) || array_key_exists("electricite", $context) ? $context["electricite"] : (function () { throw new Twig_Error_Runtime('Variable "electricite" does not exist.', 271, $this->source); })()) != null)) {
            echo " style=\"display: none;\" ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t";
        // line 272
        if (((isset($context["electricite"]) || array_key_exists("electricite", $context) ? $context["electricite"] : (function () { throw new Twig_Error_Runtime('Variable "electricite" does not exist.', 272, $this->source); })()) == null)) {
            // line 273
            echo "\t\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 274
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("electricite", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new Twig_Error_Runtime('Variable "projet" does not exist.', 274, $this->source); })()), "id", [])]), "html", null, true);
            echo "\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 276
            echo "\t\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\t\tDimension cable :  ";
            // line 278
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["electricite"]) || array_key_exists("electricite", $context) ? $context["electricite"] : (function () { throw new Twig_Error_Runtime('Variable "electricite" does not exist.', 278, $this->source); })()), "dimensionCable", []), "html", null, true);
            echo " m <br>
\t\t\t\t\t\t\t\t\t\tNombre de chauffage :  ";
            // line 279
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["electricite"]) || array_key_exists("electricite", $context) ? $context["electricite"] : (function () { throw new Twig_Error_Runtime('Variable "electricite" does not exist.', 279, $this->source); })()), "nbChauffage", []), "html", null, true);
            echo " <br>
\t\t\t\t\t\t\t\t\t\tNombre d'interrupteurs :  ";
            // line 280
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["electricite"]) || array_key_exists("electricite", $context) ? $context["electricite"] : (function () { throw new Twig_Error_Runtime('Variable "electricite" does not exist.', 280, $this->source); })()), "nbInterrupteur", []), "html", null, true);
            echo " <br>
\t\t\t\t\t\t\t\t\t\tNombre de sortie de lumières:  ";
            // line 281
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["electricite"]) || array_key_exists("electricite", $context) ? $context["electricite"] : (function () { throw new Twig_Error_Runtime('Variable "electricite" does not exist.', 281, $this->source); })()), "nbSortieLumieres", []), "html", null, true);
            echo " <br>
\t\t\t\t\t\t\t\t\t\tNombre de prises électriques :  ";
            // line 282
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["electricite"]) || array_key_exists("electricite", $context) ? $context["electricite"] : (function () { throw new Twig_Error_Runtime('Variable "electricite" does not exist.', 282, $this->source); })()), "nbPriseElectrique", []), "html", null, true);
            echo " <br>
\t\t\t\t\t\t\t\t\t\tNombre de volets roulant :  ";
            // line 283
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["electricite"]) || array_key_exists("electricite", $context) ? $context["electricite"] : (function () { throw new Twig_Error_Runtime('Variable "electricite" does not exist.', 283, $this->source); })()), "nbVoletRoulant", []), "html", null, true);
            echo " <br>

\t\t\t\t\t\t\t\t\t\t<b> Sous-total : </b> ";
            // line 285
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["electricite"]) || array_key_exists("electricite", $context) ? $context["electricite"] : (function () { throw new Twig_Error_Runtime('Variable "electricite" does not exist.', 285, $this->source); })()), "prix", []), "html", null, true);
            echo " </b> € 

\t\t\t\t\t\t\t\t\t";
        }
        // line 287
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
        // line 297
        if (((isset($context["ventilation"]) || array_key_exists("ventilation", $context) ? $context["ventilation"] : (function () { throw new Twig_Error_Runtime('Variable "ventilation" does not exist.', 297, $this->source); })()) != null)) {
            echo " style=\"display: none;\" ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t";
        // line 298
        if (((isset($context["ventilation"]) || array_key_exists("ventilation", $context) ? $context["ventilation"] : (function () { throw new Twig_Error_Runtime('Variable "ventilation" does not exist.', 298, $this->source); })()) == null)) {
            echo " 
\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 300
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ventilation", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new Twig_Error_Runtime('Variable "projet" does not exist.', 300, $this->source); })()), "id", [])]), "html", null, true);
            echo "\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 302
            echo "\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\tType de Ventilation : ";
            // line 304
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ventilation"]) || array_key_exists("ventilation", $context) ? $context["ventilation"] : (function () { throw new Twig_Error_Runtime('Variable "ventilation" does not exist.', 304, $this->source); })()), "typeVentilation", []), "html", null, true);
            echo " <br>
\t\t\t\t\t\t\t\t\t<b> Sous-total : </b> ";
            // line 305
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ventilation"]) || array_key_exists("ventilation", $context) ? $context["ventilation"] : (function () { throw new Twig_Error_Runtime('Variable "ventilation" does not exist.', 305, $this->source); })()), "prix", []), "html", null, true);
            echo "  € 
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
        }
        // line 307
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
        // line 318
        if (((isset($context["climatisation"]) || array_key_exists("climatisation", $context) ? $context["climatisation"] : (function () { throw new Twig_Error_Runtime('Variable "climatisation" does not exist.', 318, $this->source); })()) != null)) {
            echo " style=\"display: none;\" ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t";
        // line 319
        if (((isset($context["climatisation"]) || array_key_exists("climatisation", $context) ? $context["climatisation"] : (function () { throw new Twig_Error_Runtime('Variable "climatisation" does not exist.', 319, $this->source); })()) == null)) {
            echo " 
\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 321
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("climatisation", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new Twig_Error_Runtime('Variable "projet" does not exist.', 321, $this->source); })()), "id", [])]), "html", null, true);
            echo "\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 323
            echo "\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\t<b>Type de climatisation : ";
            // line 325
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["climatisation"]) || array_key_exists("climatisation", $context) ? $context["climatisation"] : (function () { throw new Twig_Error_Runtime('Variable "climatisation" does not exist.', 325, $this->source); })()), "typeClimatisation", []), "html", null, true);
            echo "</b> <br>
\t\t\t\t\t\t\t\t\t<b> Sous-total : </b> ";
            // line 326
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["climatisation"]) || array_key_exists("climatisation", $context) ? $context["climatisation"] : (function () { throw new Twig_Error_Runtime('Variable "climatisation" does not exist.', 326, $this->source); })()), "prix", []), "html", null, true);
            echo " </b> €
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
        }
        // line 328
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
        // line 339
        if (((isset($context["domotique"]) || array_key_exists("domotique", $context) ? $context["domotique"] : (function () { throw new Twig_Error_Runtime('Variable "domotique" does not exist.', 339, $this->source); })()) != null)) {
            echo " style=\"display: none;\" ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t";
        // line 340
        if (((isset($context["domotique"]) || array_key_exists("domotique", $context) ? $context["domotique"] : (function () { throw new Twig_Error_Runtime('Variable "domotique" does not exist.', 340, $this->source); })()) == null)) {
            echo " 
\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 342
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("domotique", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new Twig_Error_Runtime('Variable "projet" does not exist.', 342, $this->source); })()), "id", [])]), "html", null, true);
            echo "\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 344
            echo "\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\t";
            // line 346
            if ((twig_get_attribute($this->env, $this->source, (isset($context["domotique"]) || array_key_exists("domotique", $context) ? $context["domotique"] : (function () { throw new Twig_Error_Runtime('Variable "domotique" does not exist.', 346, $this->source); })()), "regularisationChauffage", []) != null)) {
                // line 347
                echo "\t\t\t\t\t\t\t\t\t<b>Option Chauffage autonome<b>
\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t";
            }
            // line 350
            echo "\t\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["domotique"]) || array_key_exists("domotique", $context) ? $context["domotique"] : (function () { throw new Twig_Error_Runtime('Variable "domotique" does not exist.', 350, $this->source); })()), "eclairageAuto", []) != null)) {
                // line 351
                echo "\t\t\t\t\t\t\t\t\t<b>Option Eclairage automatique<b>
\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t";
            }
            // line 354
            echo "\t\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["domotique"]) || array_key_exists("domotique", $context) ? $context["domotique"] : (function () { throw new Twig_Error_Runtime('Variable "domotique" does not exist.', 354, $this->source); })()), "ouvertureFermetureAuto", []) != null)) {
                // line 355
                echo "\t\t\t\t\t\t\t\t\t<b>Option ouverture et fermeture automatique des fenêtre<b>
\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t";
            }
            // line 358
            echo "\t\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["domotique"]) || array_key_exists("domotique", $context) ? $context["domotique"] : (function () { throw new Twig_Error_Runtime('Variable "domotique" does not exist.', 358, $this->source); })()), "autonomieEau", []) != null)) {
                // line 359
                echo "\t\t\t\t\t\t\t\t\t<b>Option Autonomie du débit d'eau<b>
\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t";
            }
            // line 362
            echo "\t\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["domotique"]) || array_key_exists("domotique", $context) ? $context["domotique"] : (function () { throw new Twig_Error_Runtime('Variable "domotique" does not exist.', 362, $this->source); })()), "detecteurEtAlarme", []) != null)) {
                // line 363
                echo "\t\t\t\t\t\t\t\t\t<b>Option alarme et détecteurs<b>
\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t";
            }
            // line 366
            echo "\t\t\t\t\t\t\t\t\t<b> Sous-total : </b> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["domotique"]) || array_key_exists("domotique", $context) ? $context["domotique"] : (function () { throw new Twig_Error_Runtime('Variable "domotique" does not exist.', 366, $this->source); })()), "prix", []), "html", null, true);
            echo " </b> €
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
        }
        // line 368
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t\t<section class=\"panel panel-featured-left panel-featured-secondary\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"widget-summary\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-summary-col widget-summary-col-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"summary-icon bg-secondary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-usd\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-summary-col\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"summary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"title\">Sous-total</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 386
        if (((isset($context["nbform"]) || array_key_exists("nbform", $context) ? $context["nbform"] : (function () { throw new Twig_Error_Runtime('Variable "nbform" does not exist.', 386, $this->source); })()) == 12)) {
            echo " <strong class=\"amount\"> \t
\t\t\t\t\t\t\t\t\t";
            // line 387
            echo twig_escape_filter($this->env, (((((((((((twig_get_attribute($this->env, $this->source, (isset($context["cloisons"]) || array_key_exists("cloisons", $context) ? $context["cloisons"] : (function () { throw new Twig_Error_Runtime('Variable "cloisons" does not exist.', 387, $this->source); })()), "prix", []) + twig_get_attribute($this->env, $this->source, (isset($context["domotique"]) || array_key_exists("domotique", $context) ? $context["domotique"] : (function () { throw new Twig_Error_Runtime('Variable "domotique" does not exist.', 387, $this->source); })()), "prix", [])) + twig_get_attribute($this->env, $this->source, (isset($context["isolation"]) || array_key_exists("isolation", $context) ? $context["isolation"] : (function () { throw new Twig_Error_Runtime('Variable "isolation" does not exist.', 387, $this->source); })()), "prix", [])) + twig_get_attribute($this->env, $this->source, (isset($context["enduit"]) || array_key_exists("enduit", $context) ? $context["enduit"] : (function () { throw new Twig_Error_Runtime('Variable "enduit" does not exist.', 387, $this->source); })()), "prix", [])) + twig_get_attribute($this->env, $this->source, (isset($context["climatisation"]) || array_key_exists("climatisation", $context) ? $context["climatisation"] : (function () { throw new Twig_Error_Runtime('Variable "climatisation" does not exist.', 387, $this->source); })()), "prix", [])) + twig_get_attribute($this->env, $this->source, (isset($context["ventilation"]) || array_key_exists("ventilation", $context) ? $context["ventilation"] : (function () { throw new Twig_Error_Runtime('Variable "ventilation" does not exist.', 387, $this->source); })()), "prix", [])) + twig_get_attribute($this->env, $this->source,             // line 388
(isset($context["electricite"]) || array_key_exists("electricite", $context) ? $context["electricite"] : (function () { throw new Twig_Error_Runtime('Variable "electricite" does not exist.', 388, $this->source); })()), "prix", [])) + twig_get_attribute($this->env, $this->source, (isset($context["plomberie"]) || array_key_exists("plomberie", $context) ? $context["plomberie"] : (function () { throw new Twig_Error_Runtime('Variable "plomberie" does not exist.', 388, $this->source); })()), "prix", [])) + twig_get_attribute($this->env, $this->source, (isset($context["escaliers"]) || array_key_exists("escaliers", $context) ? $context["escaliers"] : (function () { throw new Twig_Error_Runtime('Variable "escaliers" does not exist.', 388, $this->source); })()), "prix", [])) + twig_get_attribute($this->env, $this->source, (isset($context["menuiseriesInt"]) || array_key_exists("menuiseriesInt", $context) ? $context["menuiseriesInt"] : (function () { throw new Twig_Error_Runtime('Variable "menuiseriesInt" does not exist.', 388, $this->source); })()), "prix", [])) + twig_get_attribute($this->env, $this->source, (isset($context["evacuation"]) || array_key_exists("evacuation", $context) ? $context["evacuation"] : (function () { throw new Twig_Error_Runtime('Variable "evacuation" does not exist.', 388, $this->source); })()), "prix", [])) + twig_get_attribute($this->env, $this->source, (isset($context["revetement"]) || array_key_exists("revetement", $context) ? $context["revetement"] : (function () { throw new Twig_Error_Runtime('Variable "revetement" does not exist.', 388, $this->source); })()), "prix", [])), "html", null, true);
            echo " €</strong>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 389
            echo " Vous devez avoir rempli tous les formulaires pour avoir le prix total du second oeuvre.
\t\t\t\t\t\t\t\t\t";
        }
        // line 390
        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"pager\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 403
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gros-oeuvre", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new Twig_Error_Runtime('Variable "projet" does not exist.', 403, $this->source); })()), "id", [])]), "html", null, true);
        echo "\"> <button class=\"mb-xs mt-xs mr-xs btn btn-lg btn-default\"
\t\t\t\t\t\t\t\t\t\ttype=\"button\" >Revenir au gros oeuvre</button></a>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t";
        // line 406
        if (((isset($context["nbform"]) || array_key_exists("nbform", $context) ? $context["nbform"] : (function () { throw new Twig_Error_Runtime('Variable "nbform" does not exist.', 406, $this->source); })()) == 12)) {
            // line 407
            echo "\t\t\t\t\t\t\t\t\t\t<ul class=\"pager\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"> <button class=\"mb-xs mt-xs mr-xs btn btn-lg btn-default\"
\t\t\t\t\t\t\t\t\t\ttype=\"button\">Accéder à la facture finale</button></a>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 412
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 419
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 420
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
        return array (  1085 => 420,  1076 => 419,  1061 => 412,  1054 => 407,  1052 => 406,  1046 => 403,  1031 => 390,  1027 => 389,  1022 => 388,  1021 => 387,  1017 => 386,  997 => 368,  990 => 366,  985 => 363,  982 => 362,  977 => 359,  974 => 358,  969 => 355,  966 => 354,  961 => 351,  958 => 350,  953 => 347,  951 => 346,  947 => 344,  942 => 342,  937 => 340,  931 => 339,  918 => 328,  912 => 326,  908 => 325,  904 => 323,  899 => 321,  894 => 319,  888 => 318,  875 => 307,  869 => 305,  865 => 304,  861 => 302,  856 => 300,  851 => 298,  845 => 297,  833 => 287,  827 => 285,  822 => 283,  818 => 282,  814 => 281,  810 => 280,  806 => 279,  802 => 278,  798 => 276,  793 => 274,  790 => 273,  788 => 272,  782 => 271,  770 => 266,  761 => 259,  755 => 257,  750 => 255,  746 => 254,  742 => 253,  738 => 252,  734 => 251,  730 => 250,  726 => 249,  722 => 248,  718 => 246,  713 => 244,  710 => 243,  708 => 242,  702 => 241,  690 => 236,  683 => 231,  677 => 229,  672 => 227,  668 => 226,  664 => 225,  660 => 223,  655 => 221,  652 => 220,  650 => 219,  644 => 218,  632 => 213,  625 => 208,  619 => 206,  613 => 203,  609 => 202,  605 => 201,  601 => 200,  597 => 199,  593 => 198,  589 => 197,  585 => 196,  581 => 195,  577 => 194,  573 => 193,  569 => 191,  564 => 189,  559 => 187,  553 => 186,  541 => 181,  531 => 173,  525 => 171,  520 => 169,  516 => 168,  512 => 167,  508 => 165,  503 => 163,  498 => 161,  492 => 160,  480 => 155,  471 => 148,  465 => 146,  459 => 143,  455 => 142,  451 => 141,  447 => 140,  443 => 139,  439 => 138,  435 => 137,  431 => 136,  427 => 134,  422 => 132,  417 => 130,  411 => 129,  399 => 124,  391 => 118,  385 => 116,  379 => 113,  375 => 112,  371 => 110,  366 => 108,  361 => 106,  355 => 105,  343 => 100,  335 => 94,  329 => 92,  323 => 89,  319 => 88,  315 => 86,  310 => 84,  305 => 82,  299 => 81,  287 => 76,  280 => 71,  274 => 69,  268 => 66,  264 => 65,  260 => 63,  255 => 61,  250 => 59,  244 => 58,  232 => 53,  225 => 48,  220 => 45,  214 => 44,  208 => 43,  205 => 42,  200 => 39,  194 => 38,  188 => 37,  185 => 36,  183 => 35,  179 => 33,  173 => 32,  167 => 31,  164 => 30,  162 => 29,  158 => 27,  154 => 26,  147 => 25,  141 => 22,  135 => 18,  126 => 17,  107 => 15,  87 => 14,  74 => 10,  70 => 9,  66 => 8,  60 => 5,  57 => 4,  48 => 3,  15 => 1,);
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
\t\t\t\t\t\t\t\t\t<h4> {% if nbform < 12 %} Vous avez rempli {{nbform}} formulaire(s) sur 12 pour le second oeuvre de votre chantier. 
\t\t\t\t\t\t\t\t\t\t{% else %} Vous avez renseigné toutes les informations nécessaires pour le second oeuvre.
\t\t\t\t\t\t\t\t\t\t {% endif %} </h4>
\t\t<div class=\"row\">
\t\t\t{% if (nbform/12)*100 < 25 %}
\t\t\t\t\t\t\t\t\t<div class=\"progress progress-striped light active m-md\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"{{(nbform/12)*100}}\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: {{(nbform/12)*100}}%;\">
\t\t\t\t\t\t\t\t\t\t\t{% if nbform == 12 %} Terminé {% else %} En cours {% endif %}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t{% elseif (nbform/12)*100 > 25 and (nbform/12)*100 < 75 %}
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-striped light active m-md\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"{{(nbform/12)*100}}\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: {{(nbform/12)*100}}%;\">
\t\t\t\t\t\t\t\t\t\t\t{% if nbform == 12 %} Terminé {% else %} En cours {% endif %}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-striped light active m-md\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"{{(nbform/12)*100}}\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: {{(nbform/12)*100}}%;\">
\t\t\t\t\t\t\t\t\t\t\t{% if nbform == 12 %} Terminé {% else %} En cours {% endif %}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t{% endif %}
\t\t\t<br> <br>
\t\t\t\t\t\t<div class=\"col-md-4\" data-plugin-portlet id=\"portlet-1\">
\t\t\t\t\t\t\t<section class=\"panel panel-quartenary\" id=\"panel-4\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" {% if enduit == null %} class=\"fa fa-caret-down\" {% else %} class=\"fa fa-caret-up\" {% endif %}></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Enduit de facade</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\" {% if enduit != null %} style=\"display: none;\" {% endif %}>
\t\t\t\t\t\t\t\t{% if enduit == null %} 
\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('enduit', {'id': projet.id}) }}\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\tsurface de la facade :  ({{enduit.surface}}) <br>
\t\t\t\t\t\t\t\t\tnombre de couches  :  ({{enduit.nbCouches}}) <br>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<b> Sous-total : </b> {{enduit.prix}} €
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t{% endif %}\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"panel panel-secondary\" id=\"panel-2\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" {% if isolation == null %} class=\"fa fa-caret-down\" {% else %} class=\"fa fa-caret-up\" {% endif %}></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">L’isolation thermique et phonique</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\" {% if isolation != null %} style=\"display: none;\" {% endif %}>
\t\t\t\t\t\t\t\t{% if isolation == null %} 
\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('isolation', {'id': projet.id}) }}\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\tsurface de l'isolation thermique :  ({{isolation.surfaceThermique}}) <br>
\t\t\t\t\t\t\t\t\tsurface de l'isolation phonique :  ({{isolation.surfacePhonique}}) <br>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<b> Sous-total : </b> {{isolation.prix}} €
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t{% endif %}\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"panel panel-tertiary\" id=\"panel-3\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" {% if revetement == null %} class=\"fa fa-caret-down\" {% else %} class=\"fa fa-caret-up\" {% endif %}></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Le revêtement intérieur</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\" {% if revetement != null %} style=\"display: none;\" {% endif %}>
\t\t\t\t\t\t\t\t{% if revetement == null %} 
\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('revetement', {'id': projet.id}) }}\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\tsurface  du papier classique :  ({{revetement.surfRevetClassique}}) <br>
\t\t\t\t\t\t\t\t\tsurface  du papier avec motif :  ({{revetement.surfRevetMotif}}) <br>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<b> Sous-total : </b> {{revetement.prix}} €
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t{% endif %}\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
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

\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
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
\t\t\t\t\t\t\t\t\tType de Ventilation : {{ventilation.typeVentilation}} <br>
\t\t\t\t\t\t\t\t\t<b> Sous-total : </b> {{ventilation.prix}}  € 
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

\t\t\t\t\t\t<section class=\"panel panel-featured-left panel-featured-secondary\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"widget-summary\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-summary-col widget-summary-col-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"summary-icon bg-secondary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-usd\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-summary-col\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"summary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"title\">Sous-total</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if nbform == 12 %} <strong class=\"amount\"> \t
\t\t\t\t\t\t\t\t\t{{cloisons.prix + domotique.prix + isolation.prix + enduit.prix + climatisation.prix + ventilation.prix + 
\t\t\t\t\t\t\t\t\telectricite.prix + plomberie.prix + escaliers.prix + menuiseriesInt.prix + evacuation.prix + revetement.prix }} €</strong>
\t\t\t\t\t\t\t\t\t{% else %} Vous devez avoir rempli tous les formulaires pour avoir le prix total du second oeuvre.
\t\t\t\t\t\t\t\t\t{% endif %} 
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"pager\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{path('gros-oeuvre', {'id': projet.id}) }}\"> <button class=\"mb-xs mt-xs mr-xs btn btn-lg btn-default\"
\t\t\t\t\t\t\t\t\t\ttype=\"button\" >Revenir au gros oeuvre</button></a>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t{% if nbform == 12 %}
\t\t\t\t\t\t\t\t\t\t<ul class=\"pager\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"> <button class=\"mb-xs mt-xs mr-xs btn btn-lg btn-default\"
\t\t\t\t\t\t\t\t\t\ttype=\"button\">Accéder à la facture finale</button></a>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t{% endif %}
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
