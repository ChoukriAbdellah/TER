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

/* project/gros-oeuvre-view.html.twig */
class __TwigTemplate_67e8e842e893295047cd8b130effa7f0e8b6df9da5ae475b7f424e28f06cb642 extends \Twig\Template
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
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "/dashboard-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("/dashboard-layout.html.twig", "project/gros-oeuvre-view.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
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
    }

    // line 14
    public function block_title($context, array $blocks = [])
    {
        echo "<h2>Votre projet : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["projet"] ?? null), "nom", []), "html", null, true);
        echo " </h2>";
    }

    // line 15
    public function block_pageactuelle($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["projet"] ?? null), "nom", []), "html", null, true);
        echo " - Gros oeuvre";
    }

    // line 17
    public function block_body($context, array $blocks = [])
    {
        // line 18
        echo "
\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t\t<header class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["projet"] ?? null), "nom", []), "html", null, true);
        echo " - Gros oeuvre</h2>
\t\t\t\t\t\t\t\t\t</header>
                                    <br>
\t\t\t\t\t\t\t\t\t<h4> ";
        // line 25
        if ((($context["nbform"] ?? null) < 11)) {
            echo " Vous avez rempli ";
            echo twig_escape_filter($this->env, ($context["nbform"] ?? null), "html", null, true);
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
        if ((((($context["nbform"] ?? null) / 11) * 100) < 25)) {
            // line 30
            echo "\t\t\t\t\t\t\t\t\t<div class=\"progress progress-striped light active m-md\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"";
            // line 31
            echo twig_escape_filter($this->env, ((($context["nbform"] ?? null) / 11) * 100), "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
            echo twig_escape_filter($this->env, ((($context["nbform"] ?? null) / 11) * 100), "html", null, true);
            echo "%;\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 32
            if ((($context["nbform"] ?? null) == 11)) {
                echo " Terminé ";
            } else {
                echo " En cours ";
            }
            // line 33
            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t";
        } elseif (((((        // line 35
($context["nbform"] ?? null) / 11) * 100) > 25) && (((($context["nbform"] ?? null) / 11) * 100) < 75))) {
            // line 36
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-striped light active m-md\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"";
            // line 37
            echo twig_escape_filter($this->env, ((($context["nbform"] ?? null) / 11) * 100), "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
            echo twig_escape_filter($this->env, ((($context["nbform"] ?? null) / 11) * 100), "html", null, true);
            echo "%;\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 38
            if ((($context["nbform"] ?? null) == 11)) {
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
            echo twig_escape_filter($this->env, ((($context["nbform"] ?? null) / 11) * 100), "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
            echo twig_escape_filter($this->env, ((($context["nbform"] ?? null) / 11) * 100), "html", null, true);
            echo "%;\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 44
            if ((($context["nbform"] ?? null) == 11)) {
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
        if ((($context["etudeSol"] ?? null) == null)) {
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
        if ((($context["etudeSol"] ?? null) != null)) {
            echo " style=\"display: none;\" ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t";
        // line 58
        if ((($context["etudeSol"] ?? null) == null)) {
            echo " 
\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etude-sol", ["id" => twig_get_attribute($this->env, $this->source, ($context["projet"] ?? null), "id", [])]), "html", null, true);
            echo "\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 62
            echo "\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\tType du sol (";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["etudeSol"] ?? null), "typeSol", []), "html", null, true);
            echo ") <br>
\t\t\t\t\t\t\t\t\t<b> Sous-total : </b> ";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["etudeSol"] ?? null), "prix", []), "html", null, true);
            echo " </b> €
\t\t\t\t\t\t\t\t\t";
        }
        // line 67
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"panel panel-secondary\" id=\"panel-2\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" ";
        // line 72
        if ((($context["prepTerrain"] ?? null) == null)) {
            echo " class=\"fa fa-caret-down\" ";
        } else {
            echo " class=\"fa fa-caret-up\" ";
        }
        echo "></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Préparation du terrain et l’accès</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\" ";
        // line 77
        if ((($context["prepTerrain"] ?? null) != null)) {
            echo " style=\"display: none;\" ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t";
        // line 78
        if ((($context["prepTerrain"] ?? null) == null)) {
            echo " 
\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prep-terrain", ["id" => twig_get_attribute($this->env, $this->source, ($context["projet"] ?? null), "id", [])]), "html", null, true);
            echo "\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 82
            echo "\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\tType de terrain (";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["prepTerrain"] ?? null), "positionTerrain", []), "html", null, true);
            echo ") <br>
\t\t\t\t\t\t\t\t\t<b> Sous-total : </b> ";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["prepTerrain"] ?? null), "prix", []), "html", null, true);
            echo " </b> €
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
        }
        // line 87
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"panel panel-tertiary\" id=\"panel-3\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" ";
        // line 92
        if ((($context["excavation"] ?? null) == null)) {
            echo " class=\"fa fa-caret-down\" ";
        } else {
            echo " class=\"fa fa-caret-up\" ";
        }
        echo "></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">L'excavation</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\" ";
        // line 97
        if ((($context["excavation"] ?? null) != null)) {
            echo " style=\"display: none;\" ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t";
        // line 98
        if ((($context["excavation"] ?? null) == null)) {
            echo " 
\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("excavation", ["id" => twig_get_attribute($this->env, $this->source, ($context["projet"] ?? null), "id", [])]), "html", null, true);
            echo "\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 102
            echo "\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\tType de terassement :  (";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["excavation"] ?? null), "typeTerrassement", []), "html", null, true);
            echo ") <br>
\t\t\t\t\t\t\t\t\tMurs péripherique :  (";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["excavation"] ?? null), "mursPeripherique", []), "html", null, true);
            echo " m) <br>
\t\t\t\t\t\t\t\t\tMurs refont :  (";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["excavation"] ?? null), "mursRefont", []), "html", null, true);
            echo " m) <br>
\t\t\t\t\t\t\t\t\tProfondeur des fouilles :  (";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["excavation"] ?? null), "profondeurFouille", []), "html", null, true);
            echo " m) <br>
\t\t\t\t\t\t\t\t\tLargeur des fouilles :  (";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["excavation"] ?? null), "largeurFouille", []), "html", null, true);
            echo " m) <br>

\t\t\t\t\t\t\t\t\t<b> Sous-total : </b> ";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["excavation"] ?? null), "prix", []), "html", null, true);
            echo " </b> €
\t\t\t\t\t\t\t\t\t";
        }
        // line 111
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t<section class=\"panel panel-primary\" id=\"panel-1\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" ";
        // line 116
        if ((($context["toiture"] ?? null) == null)) {
            echo " class=\"fa fa-caret-down\" ";
        } else {
            echo " class=\"fa fa-caret-up\" ";
        }
        echo "></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Toiture</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\" ";
        // line 121
        if ((($context["toiture"] ?? null) != null)) {
            echo " style=\"display: none;\" ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t";
        // line 122
        if ((($context["toiture"] ?? null) == null)) {
            echo " 
\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 124
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("toiture", ["id" => twig_get_attribute($this->env, $this->source, ($context["projet"] ?? null), "id", [])]), "html", null, true);
            echo "\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 126
            echo "\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\tType de toit (";
            // line 128
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["toiture"] ?? null), "typeToit", []), "html", null, true);
            echo ") <br>
\t\t\t\t\t\t\t\t\tLa pente de votre toit est de : (";
            // line 129
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["toiture"] ?? null), "degPente", []), "html", null, true);
            echo ") degrés <br>
\t\t\t\t\t\t\t\t\tVotre toit est-il renforcé ? : (";
            // line 130
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["toiture"] ?? null), "renforcement", []), "html", null, true);
            echo ")<br>
\t\t\t\t\t\t\t\t\t<b> Sous-total : </b> ";
            // line 131
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["toiture"] ?? null), "prix", []), "html", null, true);
            echo " </b> €
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
        }
        // line 133
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4\" data-plugin-portlet id=\"portlet-2\">
\t\t\t\t\t\t\t<section class=\"panel panel-quartenary\" id=\"panel-4\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" ";
        // line 140
        if ((($context["fondations"] ?? null) == null)) {
            echo " class=\"fa fa-caret-down\" ";
        } else {
            echo " class=\"fa fa-caret-up\" ";
        }
        echo "></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Les fondations</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\" ";
        // line 145
        if ((($context["fondations"] ?? null) != null)) {
            echo " style=\"display: none;\" ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t";
        // line 146
        if ((($context["fondations"] ?? null) == null)) {
            echo " 
\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 148
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fondation", ["id" => twig_get_attribute($this->env, $this->source, ($context["projet"] ?? null), "id", [])]), "html", null, true);
            echo "\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 150
            echo "\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\tZone sismique (";
            // line 152
            if ((twig_get_attribute($this->env, $this->source, ($context["fondations"] ?? null), "sismicite", []) == 1)) {
                echo "Oui";
            } else {
                echo "Non";
            }
            echo ") <br>
\t\t\t\t\t\t\t\t\t<b> Sous-total : </b> ";
            // line 153
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fondations"] ?? null), "prix", []), "html", null, true);
            echo " </b> €
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
        }
        // line 155
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"panel panel-success\" id=\"panel-5\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" ";
        // line 160
        if ((($context["soubassement"] ?? null) == null)) {
            echo " class=\"fa fa-caret-down\" ";
        } else {
            echo " class=\"fa fa-caret-up\" ";
        }
        echo "></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Le soubassement</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\" ";
        // line 165
        if ((($context["soubassement"] ?? null) != null)) {
            echo " style=\"display: none;\" ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t";
        // line 166
        if ((($context["soubassement"] ?? null) == null)) {
            echo " 
\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 168
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("soubassement", ["id" => twig_get_attribute($this->env, $this->source, ($context["projet"] ?? null), "id", [])]), "html", null, true);
            echo "\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 170
            echo "\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\tsoubassement choisi ";
            // line 172
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["soubassement"] ?? null), "typeSoubassement", []), "html", null, true);
            echo " <br>
\t\t\t\t\t\t\t\t\t<b> Sous-total : </b> ";
            // line 173
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["soubassement"] ?? null), "prix", []), "html", null, true);
            echo " €
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
        }
        // line 175
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"panel panel-warning\" id=\"panel-6\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" ";
        // line 180
        if ((($context["vrd"] ?? null) == null)) {
            echo " class=\"fa fa-caret-down\" ";
        } else {
            echo " class=\"fa fa-caret-up\" ";
        }
        echo "></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">VRD (voirie et réseaux divers)</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\" ";
        // line 185
        if ((($context["vrd"] ?? null) != null)) {
            echo " style=\"display: none;\" ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t";
        // line 186
        if ((($context["vrd"] ?? null) == null)) {
            echo " 
\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 188
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vrd", ["id" => twig_get_attribute($this->env, $this->source, ($context["projet"] ?? null), "id", [])]), "html", null, true);
            echo "\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 190
            echo "\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\t";
            // line 192
            if ((twig_get_attribute($this->env, $this->source, ($context["vrd"] ?? null), "pompeRelevage", []) == true)) {
                echo " 
\t\t\t\t\t\t\t\t\tPompe de relevage : oui <br>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 195
                echo "\t\t\t\t\t\t\t\t\tPompe de relevage : non <br>
\t\t\t\t\t\t\t\t\t";
            }
            // line 196
            echo "\t

\t\t\t\t\t\t\t\t\t";
            // line 198
            if ((twig_get_attribute($this->env, $this->source, ($context["vrd"] ?? null), "fosseSeptique", []) == true)) {
                echo " 
\t\t\t\t\t\t\t\t\tFosse septique : oui <br>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 201
                echo "\t\t\t\t\t\t\t\t\tFosse septique : non <br>
\t\t\t\t\t\t\t\t\t";
            }
            // line 202
            echo "\t

\t\t\t\t\t\t\t\t\t";
            // line 204
            if ((twig_get_attribute($this->env, $this->source, ($context["vrd"] ?? null), "microStation", []) == true)) {
                echo " 
\t\t\t\t\t\t\t\t\tMicro station : oui <br>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 207
                echo "\t\t\t\t\t\t\t\t\tMicro station : non <br>
\t\t\t\t\t\t\t\t\t";
            }
            // line 208
            echo "\t

\t\t\t\t\t\t\t\t\t";
            // line 210
            if ((twig_get_attribute($this->env, $this->source, ($context["vrd"] ?? null), "etudeHydrogeologique", []) == true)) {
                echo " 
\t\t\t\t\t\t\t\t\tEtude hydrogeologique : oui <br>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 213
                echo "\t\t\t\t\t\t\t\t\tEtude hydrogeologique : non <br>
\t\t\t\t\t\t\t\t\t";
            }
            // line 214
            echo "\t
\t\t\t\t\t\t\t\t\tDistance de raccord à l'eau potable :  (";
            // line 215
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vrd"] ?? null), "distanceEauPotable", []), "html", null, true);
            echo " m) <br>
\t\t\t\t\t\t\t\t\tDistance de raccord à l'électricité :  (";
            // line 216
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vrd"] ?? null), "distanceElectricite", []), "html", null, true);
            echo " m) <br>
\t\t\t\t\t\t\t\t\tDistance de raccord téléphonie :  (";
            // line 217
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vrd"] ?? null), "distanceTelephonique", []), "html", null, true);
            echo " m) <br>

\t\t\t\t\t\t\t\t\t<b> Sous-total : </b> ";
            // line 219
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vrd"] ?? null), "prix", []), "html", null, true);
            echo " </b> €
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
        }
        // line 221
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t<section class=\"panel panel-quartenary\" id=\"panel-4\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" ";
        // line 226
        if ((($context["menuiserie"] ?? null) == null)) {
            echo " class=\"fa fa-caret-down\" ";
        } else {
            echo " class=\"fa fa-caret-up\" ";
        }
        echo "></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Les menuiseries extérieures</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\" ";
        // line 231
        if ((($context["menuiserie"] ?? null) != null)) {
            echo " style=\"display: none;\" ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t";
        // line 232
        if ((($context["menuiserie"] ?? null) == null)) {
            echo " 
\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 234
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("menuiserie", ["id" => twig_get_attribute($this->env, $this->source, ($context["projet"] ?? null), "id", [])]), "html", null, true);
            echo "\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 236
            echo "\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\t<b> Sous-total : </b> ";
            // line 238
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["menuiserie"] ?? null), "prix", []), "html", null, true);
            echo " </b> €
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
        }
        // line 240
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4\" data-plugin-portlet id=\"portlet-3\">
\t\t\t\t\t\t\t<section class=\"panel panel-info\" id=\"panel-7\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" ";
        // line 247
        if ((($context["plancher"] ?? null) == null)) {
            echo " class=\"fa fa-caret-down\" ";
        } else {
            echo " class=\"fa fa-caret-up\" ";
        }
        echo "></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Le plancher</h2> </a>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\" ";
        // line 252
        if ((($context["plancher"] ?? null) != null)) {
            echo " style=\"display: none;\" ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t";
        // line 253
        if ((($context["plancher"] ?? null) == null)) {
            echo " 
\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 255
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("plancher", ["id" => twig_get_attribute($this->env, $this->source, ($context["projet"] ?? null), "id", [])]), "html", null, true);
            echo "\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 257
            echo "\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\tNombre de mètres carrés de plancher VS (";
            // line 259
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["plancher"] ?? null), "plancherVs", []), "html", null, true);
            echo ") <br>
\t\t\t\t\t\t\t\t\tNombre de mètres carrés de plancher d'étage (";
            // line 260
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["plancher"] ?? null), "plancherEtage", []), "html", null, true);
            echo ") <br>
\t\t\t\t\t\t\t\t\tNombre de mètres carrés de plancher de terrasse (";
            // line 261
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["plancher"] ?? null), "plancherTerrasse", []), "html", null, true);
            echo ") <br>
\t\t\t\t\t\t\t\t\tLongueur entre chaque entrevous (";
            // line 262
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["plancher"] ?? null), "longueurEntrevous", []), "html", null, true);
            echo ") <br>
\t\t\t\t\t\t\t\t\t<b> Sous-total : </b> ";
            // line 263
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["plancher"] ?? null), "prix", []), "html", null, true);
            echo " </b> €
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
        }
        // line 265
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"panel panel-dark\" id=\"panel-8\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" ";
        // line 270
        if ((($context["elevation"] ?? null) == null)) {
            echo " class=\"fa fa-caret-down\" ";
        } else {
            echo " class=\"fa fa-caret-up\" ";
        }
        echo "></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">L'élévation</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\" ";
        // line 275
        if ((($context["elevation"] ?? null) != null)) {
            echo " style=\"display: none;\" ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t";
        // line 276
        if ((($context["elevation"] ?? null) == null)) {
            echo " 
\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 278
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("elevation", ["id" => twig_get_attribute($this->env, $this->source, ($context["projet"] ?? null), "id", [])]), "html", null, true);
            echo "\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 280
            echo "\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\tMur en  ";
            // line 282
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["elevation"] ?? null), "TypeMateriauxMur", []), "html", null, true);
            echo " <br>
\t\t\t\t\t\t\t\t\tFenetre de type ";
            // line 283
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["elevation"] ?? null), "typeFenetre", []), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t<b> Sous-total : </b> ";
            // line 284
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["elevation"] ?? null), "prix", []), "html", null, true);
            echo " </b> €
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
        }
        // line 286
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"panel panel-danger\" id=\"panel-9\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" ";
        // line 291
        if ((($context["charpente"] ?? null) == null)) {
            echo " class=\"fa fa-caret-down\" ";
        } else {
            echo " class=\"fa fa-caret-up\" ";
        }
        echo "></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">La charpente/couverture</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\" ";
        // line 296
        if ((($context["charpente"] ?? null) != null)) {
            echo " style=\"display: none;\" ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t";
        // line 297
        if ((($context["charpente"] ?? null) == null)) {
            echo " 
\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 299
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("charpente", ["id" => twig_get_attribute($this->env, $this->source, ($context["projet"] ?? null), "id", [])]), "html", null, true);
            echo "\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 301
            echo "\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\tType de votre charpente (";
            // line 303
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["charpente"] ?? null), "typeCharpente", []), "html", null, true);
            echo ") <br>
\t\t\t\t\t\t\t\t\tForme de votre charpente (";
            // line 304
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["charpente"] ?? null), "formeCharpente", []), "html", null, true);
            echo ") <br>
\t\t\t\t\t\t\t\t\tNombre de mètres carrés pour votre toiture (";
            // line 305
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["charpente"] ?? null), "nbMC", []), "html", null, true);
            echo ") <br>
\t\t\t\t\t\t\t\t\t<b> Sous-total : </b> ";
            // line 306
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["charpente"] ?? null), "prix", []), "html", null, true);
            echo " </b> €
\t\t\t\t\t\t\t\t\t";
        }
        // line 308
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<br> <br>

\t\t\t\t\t<section class=\"panel panel-featured-left panel-featured-secondary\">
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
        // line 328
        if ((($context["nbform"] ?? null) == 11)) {
            echo " <strong class=\"amount\"> \t
\t\t\t\t\t\t\t\t\t";
            // line 329
            echo twig_escape_filter($this->env, ((((((((((twig_get_attribute($this->env, $this->source, ($context["etudeSol"] ?? null), "prix", []) + twig_get_attribute($this->env, $this->source, ($context["charpente"] ?? null), "prix", [])) + twig_get_attribute($this->env, $this->source, ($context["prepTerrain"] ?? null), "prix", [])) + twig_get_attribute($this->env, $this->source, ($context["soubassement"] ?? null), "prix", [])) + twig_get_attribute($this->env, $this->source, ($context["elevation"] ?? null), "prix", [])) + twig_get_attribute($this->env, $this->source,             // line 330
($context["excavation"] ?? null), "prix", [])) + twig_get_attribute($this->env, $this->source, ($context["vrd"] ?? null), "prix", [])) + twig_get_attribute($this->env, $this->source, ($context["fondations"] ?? null), "prix", [])) + twig_get_attribute($this->env, $this->source, ($context["plancher"] ?? null), "prix", [])) + twig_get_attribute($this->env, $this->source, ($context["toiture"] ?? null), "prix", [])) + twig_get_attribute($this->env, $this->source, ($context["menuiserie"] ?? null), "prix", [])), "html", null, true);
            echo " €</strong>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 331
            echo " Vous devez avoir rempli tous les formulaires pour avoir le prix total du gros oeuvre.
\t\t\t\t\t\t\t\t\t";
        }
        // line 332
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
        // line 346
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("second-oeuvre", ["id" => twig_get_attribute($this->env, $this->source, ($context["projet"] ?? null), "id", [])]), "html", null, true);
        echo "\"> <button class=\"mb-xs mt-xs mr-xs btn btn-lg btn-default\"
\t\t\t\t\t\t\t\t\t\ttype=\"button\">Passer au second oeuvre</button></a>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t";
        // line 349
        if ((($context["nbform"] ?? null) == 11)) {
            // line 350
            echo "\t\t\t\t\t\t\t\t\t\t<ul class=\"pager\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"> <button class=\"mb-xs mt-xs mr-xs btn btn-lg btn-default\"
\t\t\t\t\t\t\t\t\t\ttype=\"button\">Accéder à la facture finale</button></a>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 355
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t";
    }

    // line 363
    public function block_javascripts($context, array $blocks = [])
    {
        // line 364
        echo "
\t\t";
    }

    public function getTemplateName()
    {
        return "project/gros-oeuvre-view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  915 => 364,  912 => 363,  902 => 355,  895 => 350,  893 => 349,  887 => 346,  871 => 332,  867 => 331,  862 => 330,  861 => 329,  857 => 328,  835 => 308,  830 => 306,  826 => 305,  822 => 304,  818 => 303,  814 => 301,  809 => 299,  804 => 297,  798 => 296,  786 => 291,  779 => 286,  773 => 284,  769 => 283,  765 => 282,  761 => 280,  756 => 278,  751 => 276,  745 => 275,  733 => 270,  726 => 265,  720 => 263,  716 => 262,  712 => 261,  708 => 260,  704 => 259,  700 => 257,  695 => 255,  690 => 253,  684 => 252,  672 => 247,  663 => 240,  657 => 238,  653 => 236,  648 => 234,  643 => 232,  637 => 231,  625 => 226,  618 => 221,  612 => 219,  607 => 217,  603 => 216,  599 => 215,  596 => 214,  592 => 213,  586 => 210,  582 => 208,  578 => 207,  572 => 204,  568 => 202,  564 => 201,  558 => 198,  554 => 196,  550 => 195,  544 => 192,  540 => 190,  535 => 188,  530 => 186,  524 => 185,  512 => 180,  505 => 175,  499 => 173,  495 => 172,  491 => 170,  486 => 168,  481 => 166,  475 => 165,  463 => 160,  456 => 155,  450 => 153,  442 => 152,  438 => 150,  433 => 148,  428 => 146,  422 => 145,  410 => 140,  401 => 133,  395 => 131,  391 => 130,  387 => 129,  383 => 128,  379 => 126,  374 => 124,  369 => 122,  363 => 121,  351 => 116,  344 => 111,  339 => 110,  334 => 108,  330 => 107,  326 => 106,  322 => 105,  318 => 104,  314 => 102,  309 => 100,  304 => 98,  298 => 97,  286 => 92,  279 => 87,  273 => 85,  269 => 84,  265 => 82,  260 => 80,  255 => 78,  249 => 77,  237 => 72,  230 => 67,  225 => 65,  221 => 64,  217 => 62,  212 => 60,  207 => 58,  201 => 57,  190 => 53,  183 => 48,  178 => 45,  172 => 44,  166 => 43,  163 => 42,  158 => 39,  152 => 38,  146 => 37,  143 => 36,  141 => 35,  137 => 33,  131 => 32,  125 => 31,  122 => 30,  120 => 29,  116 => 27,  112 => 26,  105 => 25,  99 => 22,  93 => 18,  90 => 17,  83 => 15,  75 => 14,  68 => 10,  64 => 9,  60 => 8,  54 => 5,  51 => 4,  48 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "project/gros-oeuvre-view.html.twig", "/opt/lampp/htdocs/Symfony-heroku/templates/project/gros-oeuvre-view.html.twig");
    }
}
