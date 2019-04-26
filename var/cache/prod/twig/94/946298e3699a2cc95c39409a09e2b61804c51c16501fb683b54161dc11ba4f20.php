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

/* project/second-oeuvre-view.html.twig */
class __TwigTemplate_b09d566bf168de4164775833686cc569bdb84aaced4c56f57a140756f7774e8d extends \Twig\Template
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
        $this->parent = $this->loadTemplate("/dashboard-layout.html.twig", "project/second-oeuvre-view.html.twig", 1);
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
        echo "</h2>";
    }

    // line 15
    public function block_pageactuelle($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["projet"] ?? null), "nom", []), "html", null, true);
        echo " - Second oeuvre";
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
        echo " - Second oeuvre</h2>
\t\t\t\t\t\t\t\t\t</header>
                                    <br>
\t\t\t\t\t\t\t\t\t<h4> ";
        // line 25
        if ((($context["nbform"] ?? null) < 12)) {
            echo " Vous avez rempli ";
            echo twig_escape_filter($this->env, ($context["nbform"] ?? null), "html", null, true);
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
        if ((((($context["nbform"] ?? null) / 12) * 100) < 25)) {
            // line 30
            echo "\t\t\t\t\t\t\t\t\t<div class=\"progress progress-striped light active m-md\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"";
            // line 31
            echo twig_escape_filter($this->env, ((($context["nbform"] ?? null) / 12) * 100), "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
            echo twig_escape_filter($this->env, ((($context["nbform"] ?? null) / 12) * 100), "html", null, true);
            echo "%;\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 32
            if ((($context["nbform"] ?? null) == 12)) {
                echo " Terminé ";
            } else {
                echo " En cours ";
            }
            // line 33
            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t";
        } elseif (((((        // line 35
($context["nbform"] ?? null) / 12) * 100) > 25) && (((($context["nbform"] ?? null) / 12) * 100) < 75))) {
            // line 36
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-striped light active m-md\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"";
            // line 37
            echo twig_escape_filter($this->env, ((($context["nbform"] ?? null) / 12) * 100), "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
            echo twig_escape_filter($this->env, ((($context["nbform"] ?? null) / 12) * 100), "html", null, true);
            echo "%;\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 38
            if ((($context["nbform"] ?? null) == 12)) {
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
            echo twig_escape_filter($this->env, ((($context["nbform"] ?? null) / 12) * 100), "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
            echo twig_escape_filter($this->env, ((($context["nbform"] ?? null) / 12) * 100), "html", null, true);
            echo "%;\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 44
            if ((($context["nbform"] ?? null) == 12)) {
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
        if ((($context["enduit"] ?? null) == null)) {
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
        if ((($context["enduit"] ?? null) != null)) {
            echo " style=\"display: none;\" ";
        }
        echo ">
\t\t\t\t\t\t\t\t";
        // line 59
        if ((($context["enduit"] ?? null) == null)) {
            echo " 
\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("enduit", ["id" => twig_get_attribute($this->env, $this->source, ($context["projet"] ?? null), "id", [])]), "html", null, true);
            echo "\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 63
            echo "\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\tsurface de la facade :  (";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["enduit"] ?? null), "surface", []), "html", null, true);
            echo ") <br>
\t\t\t\t\t\t\t\t\tnombre de couches  :  (";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["enduit"] ?? null), "nbCouches", []), "html", null, true);
            echo ") <br>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<b> Sous-total : </b> ";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["enduit"] ?? null), "prix", []), "html", null, true);
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
        if ((($context["isolation"] ?? null) == null)) {
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
        if ((($context["isolation"] ?? null) != null)) {
            echo " style=\"display: none;\" ";
        }
        echo ">
\t\t\t\t\t\t\t\t";
        // line 82
        if ((($context["isolation"] ?? null) == null)) {
            echo " 
\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("isolation", ["id" => twig_get_attribute($this->env, $this->source, ($context["projet"] ?? null), "id", [])]), "html", null, true);
            echo "\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 86
            echo "\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\tsurface de l'isolation thermique :  (";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["isolation"] ?? null), "surfaceThermique", []), "html", null, true);
            echo ") <br>
\t\t\t\t\t\t\t\t\tsurface de l'isolation phonique :  (";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["isolation"] ?? null), "surfacePhonique", []), "html", null, true);
            echo ") <br>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<b> Sous-total : </b> ";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["isolation"] ?? null), "prix", []), "html", null, true);
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
        if ((($context["revetement"] ?? null) == null)) {
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
        if ((($context["revetement"] ?? null) != null)) {
            echo " style=\"display: none;\" ";
        }
        echo ">
\t\t\t\t\t\t\t\t";
        // line 106
        if ((($context["revetement"] ?? null) == null)) {
            echo " 
\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 108
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("revetement", ["id" => twig_get_attribute($this->env, $this->source, ($context["projet"] ?? null), "id", [])]), "html", null, true);
            echo "\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 110
            echo "\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\tsurface  du papier classique :  (";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["revetement"] ?? null), "surfRevetClassique", []), "html", null, true);
            echo ") <br>
\t\t\t\t\t\t\t\t\tsurface  du papier avec motif :  (";
            // line 113
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["revetement"] ?? null), "surfRevetMotif", []), "html", null, true);
            echo ") <br>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<b> Sous-total : </b> ";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["revetement"] ?? null), "prix", []), "html", null, true);
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
        if ((($context["cloisons"] ?? null) == null)) {
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
        if ((($context["cloisons"] ?? null) != null)) {
            echo " style=\"display: none;\" ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t";
        // line 130
        if ((($context["cloisons"] ?? null) == null)) {
            echo " 
\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 132
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cloisons", ["id" => twig_get_attribute($this->env, $this->source, ($context["projet"] ?? null), "id", [])]), "html", null, true);
            echo "\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 134
            echo "\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\tNombre de mètres carrés de cloisons amovibles (";
            // line 136
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cloisons"] ?? null), "cloisonsAmovibles", []), "html", null, true);
            echo ") <br>
\t\t\t\t\t\t\t\t\tNombre de mètres carrés de cloisons sèches (";
            // line 137
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cloisons"] ?? null), "cloisonsSeches", []), "html", null, true);
            echo ") <br>
\t\t\t\t\t\t\t\t\tNombre de mètres carrés de cloisons pour pièces humides (";
            // line 138
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cloisons"] ?? null), "cloisonsPiecesHumides", []), "html", null, true);
            echo ") <br>
\t\t\t\t\t\t\t\t\tNombre de mètres carrés de cloisons en verre (";
            // line 139
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cloisons"] ?? null), "cloisonsVerre", []), "html", null, true);
            echo ") <br>
\t\t\t\t\t\t\t\t\tNombre de mètres carrés de cloisons japonaises (";
            // line 140
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cloisons"] ?? null), "cloisonsJaponaises", []), "html", null, true);
            echo ") <br>
\t\t\t\t\t\t\t\t\tNombre de mètres carrés de claustras intérieur (";
            // line 141
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cloisons"] ?? null), "claustraInterieur", []), "html", null, true);
            echo ") <br>
\t\t\t\t\t\t\t\t\tNombre de mètres carrés de cloisons vitrées style atelier (";
            // line 142
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cloisons"] ?? null), "cloisonsVitreesStyleAtelier", []), "html", null, true);
            echo ") <br>
\t\t\t\t\t\t\t\t\tNombre de mètres carrés de cloisons végétales (";
            // line 143
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cloisons"] ?? null), "cloisonsVegetales", []), "html", null, true);
            echo ") <br>
\t\t\t\t\t
\t\t\t\t\t\t\t\t\t <br>
\t\t\t\t\t\t\t\t\t<b> Sous-total : </b> ";
            // line 146
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cloisons"] ?? null), "prix", []), "html", null, true);
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
        if ((($context["evacuation"] ?? null) == null)) {
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
        if ((($context["evacuation"] ?? null) != null)) {
            echo " style=\"display: none;\" ";
        }
        echo ">
\t\t\t\t\t\t\t\t";
        // line 161
        if ((($context["evacuation"] ?? null) == null)) {
            echo " 
\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 163
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evacuation", ["id" => twig_get_attribute($this->env, $this->source, ($context["projet"] ?? null), "id", [])]), "html", null, true);
            echo "\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 165
            echo "\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\tMatérieau utilisé pour votre cheminée :  (";
            // line 167
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evacuation"] ?? null), "materieauUtilise", []), "html", null, true);
            echo ") <br>
\t\t\t\t\t\t\t\t\tForme de votre cheminée :  (";
            // line 168
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evacuation"] ?? null), "forme", []), "html", null, true);
            echo ") <br>
\t\t\t\t\t\t\t\t\tType de votre cheminée :  (";
            // line 169
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evacuation"] ?? null), "typeCheminee", []), "html", null, true);
            echo ") <br>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<b> Sous-total : </b> ";
            // line 171
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evacuation"] ?? null), "prix", []), "html", null, true);
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
        if ((($context["menuiseriesInt"] ?? null) == null)) {
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
        if ((($context["menuiseriesInt"] ?? null) != null)) {
            echo " style=\"display: none;\" ";
        }
        echo ">
\t\t\t\t\t\t\t\t";
        // line 187
        if ((($context["menuiseriesInt"] ?? null) == null)) {
            echo " 
\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 189
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("menuiseriesInt", ["id" => twig_get_attribute($this->env, $this->source, ($context["projet"] ?? null), "id", [])]), "html", null, true);
            echo "\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 191
            echo "\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\tNombre de portes pleines (";
            // line 193
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["menuiseriesInt"] ?? null), "portesPleines", []), "html", null, true);
            echo ") <br>
\t\t\t\t\t\t\t\t\tNombre de portes vitrées (";
            // line 194
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["menuiseriesInt"] ?? null), "portesVitrees", []), "html", null, true);
            echo ")  <br>
\t\t\t\t\t\t\t\t\tNombre de portes battantes (";
            // line 195
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["menuiseriesInt"] ?? null), "portesBattantes", []), "html", null, true);
            echo ")  <br>
\t\t\t\t\t\t\t\t\tNombre de portes coulissantes (";
            // line 196
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["menuiseriesInt"] ?? null), "portesCoulissantes", []), "html", null, true);
            echo ")  <br>
\t\t\t\t\t\t\t\t\tNombre de portes de placard pliantes (";
            // line 197
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["menuiseriesInt"] ?? null), "portesPlacardPliantes", []), "html", null, true);
            echo ")  <br>
\t\t\t\t\t\t\t\t\tNombre de portes de placard battantes (";
            // line 198
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["menuiseriesInt"] ?? null), "portesPlacardBattantes", []), "html", null, true);
            echo ")  <br>
\t\t\t\t\t\t\t\t\tNombre de portes de placard coulissantes (";
            // line 199
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["menuiseriesInt"] ?? null), "portesPlacardCoulissantes", []), "html", null, true);
            echo ")  <br>
\t\t\t\t\t\t\t\t\tMatérieau choisi pour vos rampes (";
            // line 200
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["menuiseriesInt"] ?? null), "materieauRampes", []), "html", null, true);
            echo ")  <br>
\t\t\t\t\t\t\t\t\tNombre de rampes à poser (";
            // line 201
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["menuiseriesInt"] ?? null), "tailleRampes", []), "html", null, true);
            echo " m2)  <br>
\t\t\t\t\t\t\t\t\tMatérieau choisi pour vos balustrades (";
            // line 202
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["menuiseriesInt"] ?? null), "materieauBalustrades", []), "html", null, true);
            echo ")  <br>
\t\t\t\t\t\t\t\t\tNombre de balustrades à poser (";
            // line 203
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["menuiseriesInt"] ?? null), "tailleBalustrades", []), "html", null, true);
            echo " m2)  <br>

\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<b> Sous-total : </b> ";
            // line 206
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["menuiseriesInt"] ?? null), "prix", []), "html", null, true);
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
        if ((($context["escaliers"] ?? null) == null)) {
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
        if ((($context["escaliers"] ?? null) != null)) {
            echo " style=\"display: none;\" ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t";
        // line 219
        if ((($context["escaliers"] ?? null) == null)) {
            // line 220
            echo "\t\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 221
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("escaliers", ["id" => twig_get_attribute($this->env, $this->source, ($context["projet"] ?? null), "id", [])]), "html", null, true);
            echo "\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 223
            echo "\t\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\t\tType d'escalier :  ";
            // line 225
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["escaliers"] ?? null), "typeEscalier", []), "html", null, true);
            echo " <br>
\t\t\t\t\t\t\t\t\t\tDimensions :  ";
            // line 226
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["escaliers"] ?? null), "dimensions", []), "html", null, true);
            echo " <br>
\t\t\t\t\t\t\t\t\t\tMateriel :  ";
            // line 227
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["escaliers"] ?? null), "materiaux", []), "html", null, true);
            echo " <br>

\t\t\t\t\t\t\t\t\t\t<b> Sous-total : </b> ";
            // line 229
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["escaliers"] ?? null), "prix", []), "html", null, true);
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
        if ((($context["plomberie"] ?? null) == null)) {
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
        if ((($context["plomberie"] ?? null) != null)) {
            echo " style=\"display: none;\" ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t\t";
        // line 242
        if ((($context["plomberie"] ?? null) == null)) {
            // line 243
            echo "\t\t\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 244
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("plomberie", ["id" => twig_get_attribute($this->env, $this->source, ($context["projet"] ?? null), "id", [])]), "html", null, true);
            echo "\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 246
            echo "\t\t\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\t\t\tDimensions tuyau :  ";
            // line 248
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["plomberie"] ?? null), "nbMetreTuyau", []), "html", null, true);
            echo " m <br>
\t\t\t\t\t\t\t\t\t\t\tType tuyau :  ";
            // line 249
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["plomberie"] ?? null), "typeTuyau", []), "html", null, true);
            echo " <br>
\t\t\t\t\t\t\t\t\t\t\tNombre de robinets :  ";
            // line 250
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["plomberie"] ?? null), "nbRobinets", []), "html", null, true);
            echo " <br>
\t\t\t\t\t\t\t\t\t\t\tNombre de WC :  ";
            // line 251
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["plomberie"] ?? null), "nbWC", []), "html", null, true);
            echo " <br>
\t\t\t\t\t\t\t\t\t\t\tType chauffage eau :  ";
            // line 252
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["plomberie"] ?? null), "typeChauffageEau", []), "html", null, true);
            echo " <br>
\t\t\t\t\t\t\t\t\t\t\tType compteur :  ";
            // line 253
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["plomberie"] ?? null), "typeCompteur", []), "html", null, true);
            echo " <br>
\t\t\t\t\t\t\t\t\t\t\tNombre de baignoires :  ";
            // line 254
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["plomberie"] ?? null), "nbBaignoire", []), "html", null, true);
            echo " <br>
\t\t\t\t\t\t\t\t\t\t\tNombre de douches :  ";
            // line 255
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["plomberie"] ?? null), "nbDouche", []), "html", null, true);
            echo " <br>

\t\t\t\t\t\t\t\t\t\t\t<b> Sous-total : </b> ";
            // line 257
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["plomberie"] ?? null), "prix", []), "html", null, true);
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
        if ((($context["electricite"] ?? null) == null)) {
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
        if ((($context["electricite"] ?? null) != null)) {
            echo " style=\"display: none;\" ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t";
        // line 272
        if ((($context["electricite"] ?? null) == null)) {
            // line 273
            echo "\t\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 274
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("electricite", ["id" => twig_get_attribute($this->env, $this->source, ($context["projet"] ?? null), "id", [])]), "html", null, true);
            echo "\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 276
            echo "\t\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\t\tDimension cable :  ";
            // line 278
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["electricite"] ?? null), "dimensionCable", []), "html", null, true);
            echo " m <br>
\t\t\t\t\t\t\t\t\t\tNombre de chauffage :  ";
            // line 279
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["electricite"] ?? null), "nbChauffage", []), "html", null, true);
            echo " <br>
\t\t\t\t\t\t\t\t\t\tNombre d'interrupteurs :  ";
            // line 280
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["electricite"] ?? null), "nbInterrupteur", []), "html", null, true);
            echo " <br>
\t\t\t\t\t\t\t\t\t\tNombre de sortie de lumières:  ";
            // line 281
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["electricite"] ?? null), "nbSortieLumieres", []), "html", null, true);
            echo " <br>
\t\t\t\t\t\t\t\t\t\tNombre de prises électriques :  ";
            // line 282
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["electricite"] ?? null), "nbPriseElectrique", []), "html", null, true);
            echo " <br>
\t\t\t\t\t\t\t\t\t\tNombre de volets roulant :  ";
            // line 283
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["electricite"] ?? null), "nbVoletRoulant", []), "html", null, true);
            echo " <br>

\t\t\t\t\t\t\t\t\t\t<b> Sous-total : </b> ";
            // line 285
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["electricite"] ?? null), "prix", []), "html", null, true);
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
        if ((($context["ventilation"] ?? null) != null)) {
            echo " style=\"display: none;\" ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t";
        // line 298
        if ((($context["ventilation"] ?? null) == null)) {
            echo " 
\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 300
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ventilation", ["id" => twig_get_attribute($this->env, $this->source, ($context["projet"] ?? null), "id", [])]), "html", null, true);
            echo "\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 302
            echo "\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\tType de Ventilation : ";
            // line 304
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ventilation"] ?? null), "typeVentilation", []), "html", null, true);
            echo " <br>
\t\t\t\t\t\t\t\t\t<b> Sous-total : </b> ";
            // line 305
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ventilation"] ?? null), "prix", []), "html", null, true);
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
        if ((($context["climatisation"] ?? null) != null)) {
            echo " style=\"display: none;\" ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t";
        // line 319
        if ((($context["climatisation"] ?? null) == null)) {
            echo " 
\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 321
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("climatisation", ["id" => twig_get_attribute($this->env, $this->source, ($context["projet"] ?? null), "id", [])]), "html", null, true);
            echo "\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 323
            echo "\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\t<b>Type de climatisation : ";
            // line 325
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["climatisation"] ?? null), "typeClimatisation", []), "html", null, true);
            echo "</b> <br>
\t\t\t\t\t\t\t\t\t<b> Sous-total : </b> ";
            // line 326
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["climatisation"] ?? null), "prix", []), "html", null, true);
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
        if ((($context["domotique"] ?? null) != null)) {
            echo " style=\"display: none;\" ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t";
        // line 340
        if ((($context["domotique"] ?? null) == null)) {
            echo " 
\t\t\t\t\t\t\t\t\tVous n'avez pas encore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 342
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("domotique", ["id" => twig_get_attribute($this->env, $this->source, ($context["projet"] ?? null), "id", [])]), "html", null, true);
            echo "\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 344
            echo "\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\t";
            // line 346
            if ((twig_get_attribute($this->env, $this->source, ($context["domotique"] ?? null), "regularisationChauffage", []) != null)) {
                // line 347
                echo "\t\t\t\t\t\t\t\t\t<b>Option Chauffage autonome<b>
\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t";
            }
            // line 350
            echo "\t\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, ($context["domotique"] ?? null), "eclairageAuto", []) != null)) {
                // line 351
                echo "\t\t\t\t\t\t\t\t\t<b>Option Eclairage automatique<b>
\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t";
            }
            // line 354
            echo "\t\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, ($context["domotique"] ?? null), "ouvertureFermetureAuto", []) != null)) {
                // line 355
                echo "\t\t\t\t\t\t\t\t\t<b>Option ouverture et fermeture automatique des fenêtre<b>
\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t";
            }
            // line 358
            echo "\t\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, ($context["domotique"] ?? null), "autonomieEau", []) != null)) {
                // line 359
                echo "\t\t\t\t\t\t\t\t\t<b>Option Autonomie du débit d'eau<b>
\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t";
            }
            // line 362
            echo "\t\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, ($context["domotique"] ?? null), "detecteurEtAlarme", []) != null)) {
                // line 363
                echo "\t\t\t\t\t\t\t\t\t<b>Option alarme et détecteurs<b>
\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t";
            }
            // line 366
            echo "\t\t\t\t\t\t\t\t\t<b> Sous-total : </b> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["domotique"] ?? null), "prix", []), "html", null, true);
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
        if ((($context["nbform"] ?? null) == 12)) {
            echo " <strong class=\"amount\"> \t
\t\t\t\t\t\t\t\t\t";
            // line 387
            echo twig_escape_filter($this->env, (((((((((((twig_get_attribute($this->env, $this->source, ($context["cloisons"] ?? null), "prix", []) + twig_get_attribute($this->env, $this->source, ($context["domotique"] ?? null), "prix", [])) + twig_get_attribute($this->env, $this->source, ($context["isolation"] ?? null), "prix", [])) + twig_get_attribute($this->env, $this->source, ($context["enduit"] ?? null), "prix", [])) + twig_get_attribute($this->env, $this->source, ($context["climatisation"] ?? null), "prix", [])) + twig_get_attribute($this->env, $this->source, ($context["ventilation"] ?? null), "prix", [])) + twig_get_attribute($this->env, $this->source,             // line 388
($context["electricite"] ?? null), "prix", [])) + twig_get_attribute($this->env, $this->source, ($context["plomberie"] ?? null), "prix", [])) + twig_get_attribute($this->env, $this->source, ($context["escaliers"] ?? null), "prix", [])) + twig_get_attribute($this->env, $this->source, ($context["menuiseriesInt"] ?? null), "prix", [])) + twig_get_attribute($this->env, $this->source, ($context["evacuation"] ?? null), "prix", [])) + twig_get_attribute($this->env, $this->source, ($context["revetement"] ?? null), "prix", [])), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gros-oeuvre", ["id" => twig_get_attribute($this->env, $this->source, ($context["projet"] ?? null), "id", [])]), "html", null, true);
        echo "\"> <button class=\"mb-xs mt-xs mr-xs btn btn-lg btn-default\"
\t\t\t\t\t\t\t\t\t\ttype=\"button\" >Revenir au gros oeuvre</button></a>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t";
        // line 406
        if ((($context["nbform"] ?? null) == 12)) {
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
    }

    // line 419
    public function block_javascripts($context, array $blocks = [])
    {
        // line 420
        echo "
\t\t";
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
        return array (  1031 => 420,  1028 => 419,  1019 => 412,  1012 => 407,  1010 => 406,  1004 => 403,  989 => 390,  985 => 389,  980 => 388,  979 => 387,  975 => 386,  955 => 368,  948 => 366,  943 => 363,  940 => 362,  935 => 359,  932 => 358,  927 => 355,  924 => 354,  919 => 351,  916 => 350,  911 => 347,  909 => 346,  905 => 344,  900 => 342,  895 => 340,  889 => 339,  876 => 328,  870 => 326,  866 => 325,  862 => 323,  857 => 321,  852 => 319,  846 => 318,  833 => 307,  827 => 305,  823 => 304,  819 => 302,  814 => 300,  809 => 298,  803 => 297,  791 => 287,  785 => 285,  780 => 283,  776 => 282,  772 => 281,  768 => 280,  764 => 279,  760 => 278,  756 => 276,  751 => 274,  748 => 273,  746 => 272,  740 => 271,  728 => 266,  719 => 259,  713 => 257,  708 => 255,  704 => 254,  700 => 253,  696 => 252,  692 => 251,  688 => 250,  684 => 249,  680 => 248,  676 => 246,  671 => 244,  668 => 243,  666 => 242,  660 => 241,  648 => 236,  641 => 231,  635 => 229,  630 => 227,  626 => 226,  622 => 225,  618 => 223,  613 => 221,  610 => 220,  608 => 219,  602 => 218,  590 => 213,  583 => 208,  577 => 206,  571 => 203,  567 => 202,  563 => 201,  559 => 200,  555 => 199,  551 => 198,  547 => 197,  543 => 196,  539 => 195,  535 => 194,  531 => 193,  527 => 191,  522 => 189,  517 => 187,  511 => 186,  499 => 181,  489 => 173,  483 => 171,  478 => 169,  474 => 168,  470 => 167,  466 => 165,  461 => 163,  456 => 161,  450 => 160,  438 => 155,  429 => 148,  423 => 146,  417 => 143,  413 => 142,  409 => 141,  405 => 140,  401 => 139,  397 => 138,  393 => 137,  389 => 136,  385 => 134,  380 => 132,  375 => 130,  369 => 129,  357 => 124,  349 => 118,  343 => 116,  337 => 113,  333 => 112,  329 => 110,  324 => 108,  319 => 106,  313 => 105,  301 => 100,  293 => 94,  287 => 92,  281 => 89,  277 => 88,  273 => 86,  268 => 84,  263 => 82,  257 => 81,  245 => 76,  238 => 71,  232 => 69,  226 => 66,  222 => 65,  218 => 63,  213 => 61,  208 => 59,  202 => 58,  190 => 53,  183 => 48,  178 => 45,  172 => 44,  166 => 43,  163 => 42,  158 => 39,  152 => 38,  146 => 37,  143 => 36,  141 => 35,  137 => 33,  131 => 32,  125 => 31,  122 => 30,  120 => 29,  116 => 27,  112 => 26,  105 => 25,  99 => 22,  93 => 18,  90 => 17,  83 => 15,  75 => 14,  68 => 10,  64 => 9,  60 => 8,  54 => 5,  51 => 4,  48 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "project/second-oeuvre-view.html.twig", "/opt/lampp/htdocs/Symfony-heroku/templates/project/second-oeuvre-view.html.twig");
    }
}
