<?php

/* dashboard/index.html.twig */
class __TwigTemplate_e4c0601c583542492529738d4f5c7d0b193371102697dab81140bee772fc9c48 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("/dashboard-layout.html.twig", "dashboard/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

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

    // line 13
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 14
        echo "\t\t\t\t<h2> Tableau de bord </h2>
\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_pageactuelle($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageactuelle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageactuelle"));

        echo " Mes informations ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t\t<header class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Mes informations</h2>

\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 29
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 29, $this->source); })()), "username", []) != null)) {
            // line 30
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b>Nom </b>: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 30, $this->source); })()), "username", []), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 32
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 33
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 33, $this->source); })()), "dateInscription", []) != null)) {
            // line 34
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b>Date d'inscription</b> : ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 34, $this->source); })()), "dateInscription", []), "d/m/Y"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 36
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 37
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 37, $this->source); })()), "email", []) != null)) {
            // line 38
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b>Email </b>: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 38, $this->source); })()), "email", []), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 40
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 41
        if (((isset($context["nbformEnCours"]) || array_key_exists("nbformEnCours", $context) ? $context["nbformEnCours"] : (function () { throw new Twig_Error_Runtime('Variable "nbformEnCours" does not exist.', 41, $this->source); })()) != null)) {
            // line 42
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b>Nombre de projets en cours </b>: ";
            echo twig_escape_filter($this->env, (isset($context["nbformEnCours"]) || array_key_exists("nbformEnCours", $context) ? $context["nbformEnCours"] : (function () { throw new Twig_Error_Runtime('Variable "nbformEnCours" does not exist.', 42, $this->source); })()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 44
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 45
        if (((isset($context["nbformRemplit"]) || array_key_exists("nbformRemplit", $context) ? $context["nbformRemplit"] : (function () { throw new Twig_Error_Runtime('Variable "nbformRemplit" does not exist.', 45, $this->source); })()) != null)) {
            // line 46
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b>Nombre de projets terminé(s) </b>: ";
            echo twig_escape_filter($this->env, (isset($context["nbformRemplit"]) || array_key_exists("nbformRemplit", $context) ? $context["nbformRemplit"] : (function () { throw new Twig_Error_Runtime('Variable "nbformRemplit" does not exist.', 46, $this->source); })()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 48
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b>Nombre de projet terminé </b>: 0
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 50
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<section class=\"panel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<header class=\"panel-heading panel-heading-transparent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-caret-down\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-times\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Mes Projets</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-striped mb-none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Projets</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Statut</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Progression</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Facture</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 81
        if (((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 81, $this->source); })()) > 0)) {
            // line 82
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 82, $this->source); })()) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 83
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 85
                echo twig_escape_filter($this->env, $context["p"], "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 86
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["projets"]) || array_key_exists("projets", $context) ? $context["projets"] : (function () { throw new Twig_Error_Runtime('Variable "projets" does not exist.', 86, $this->source); })()), $context["p"], [], "array"), "nom", []), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 87
                if ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 87, $this->source); })()), $context["p"], [], "array") == 23)) {
                    // line 88
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"label label-success\">Terminé</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 90
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"label label-warning\">En cours</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 92
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-sm progress-half-rounded m-none mt-xs light\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-primary\" role=\"progressbar\" aria-valuenow=";
                // line 94
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dataPourcentage"]) || array_key_exists("dataPourcentage", $context) ? $context["dataPourcentage"] : (function () { throw new Twig_Error_Runtime('Variable "dataPourcentage" does not exist.', 94, $this->source); })()), $context["p"], [], "array"), "html", null, true);
                echo " aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dataPourcentage"]) || array_key_exists("dataPourcentage", $context) ? $context["dataPourcentage"] : (function () { throw new Twig_Error_Runtime('Variable "dataPourcentage" does not exist.', 94, $this->source); })()), $context["p"], [], "array"), "html", null, true);
                echo "%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 95
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dataPourcentage"]) || array_key_exists("dataPourcentage", $context) ? $context["dataPourcentage"] : (function () { throw new Twig_Error_Runtime('Variable "dataPourcentage" does not exist.', 95, $this->source); })()), $context["p"], [], "array"), "html", null, true);
                echo " %
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"pager\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 101
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("facture", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["projets"]) || array_key_exists("projets", $context) ? $context["projets"] : (function () { throw new Twig_Error_Runtime('Variable "projets" does not exist.', 101, $this->source); })()), $context["p"], [], "array"), "id", [])]), "html", null, true);
                echo "\"> <button class=\"mb-xs mt-xs mr-xs btn btn-lg btn-default\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   type=\"button\">Facture</button></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 110
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>




\t\t\t\t\t\t\t\t\t\t\t\t\t<br>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Modification du mot de passe</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 125
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 125, $this->source); })()), 'form_start');
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t<br><br>

\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->source); })()), "oldPassword", []), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Quel est votre ancien mot de passe ? "]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 130, $this->source); })()), "oldPassword", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 132, $this->source); })()), "plainPassword", []), "first", []), 'label', ["label_attr" => ["class" => "col-sm-3 control-label", "placeholder" => "Mot de passe"], "label" => "Quel est votre nouveau mot de passe ? "]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 134, $this->source); })()), "plainPassword", []), "first", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 136, $this->source); })()), "plainPassword", []), "second", []), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Répetez le mot de passe ? "]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 138
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 138, $this->source); })()), "plainPassword", []), "second", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 141, $this->source); })()), "email", []), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Voulez vous changer l'email ? (faculatif)  "]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 143
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 143, $this->source); })()), "email", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>



\t\t\t\t\t\t\t\t\t\t\t\t\t\t   ";
        // line 148
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 148, $this->source); })()), 'form_end');
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

\t\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 166
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 167
        echo "
\t\t<!-- Specific Page Vendor -->
\t\t<script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/jquery-appear/jquery.appear.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/jquery-easypiechart/jquery.easypiechart.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/flot/jquery.flot.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/flot-tooltip/jquery.flot.tooltip.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/flot/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/flot/jquery.flot.categories.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/flot/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/jquery-sparkline/jquery.sparkline.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/raphael/raphael.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/morris/morris.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/gauge/gauge.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/snap-svg/snap.svg.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/liquid-meter/liquid.meter.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/jqvmap/jquery.vmap.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/jqvmap/data/jquery.vmap.sampledata.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/jqvmap/maps/jquery.vmap.world.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/jqvmap/maps/continents/jquery.vmap.africa.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/jqvmap/maps/continents/jquery.vmap.asia.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/jqvmap/maps/continents/jquery.vmap.australia.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/jqvmap/maps/continents/jquery.vmap.europe.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"), "html", null, true);
        echo "\"></script>

\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  502 => 193,  498 => 192,  494 => 191,  490 => 190,  486 => 189,  482 => 188,  478 => 187,  474 => 186,  470 => 185,  466 => 184,  462 => 183,  458 => 182,  454 => 181,  450 => 180,  446 => 179,  442 => 178,  438 => 177,  434 => 176,  430 => 175,  426 => 174,  422 => 173,  418 => 172,  414 => 171,  410 => 170,  406 => 169,  402 => 167,  393 => 166,  366 => 148,  358 => 143,  353 => 141,  347 => 138,  342 => 136,  337 => 134,  332 => 132,  327 => 130,  322 => 128,  316 => 125,  299 => 110,  296 => 109,  282 => 101,  273 => 95,  267 => 94,  263 => 92,  259 => 90,  255 => 88,  253 => 87,  249 => 86,  245 => 85,  241 => 83,  236 => 82,  234 => 81,  201 => 50,  197 => 48,  191 => 46,  189 => 45,  186 => 44,  180 => 42,  178 => 41,  175 => 40,  169 => 38,  167 => 37,  164 => 36,  158 => 34,  156 => 33,  153 => 32,  147 => 30,  145 => 29,  134 => 20,  125 => 19,  107 => 17,  96 => 14,  87 => 13,  74 => 10,  70 => 9,  66 => 8,  60 => 5,  57 => 4,  48 => 3,  15 => 1,);
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
\t\t\t\t{% block title %}
\t\t\t\t<h2> Tableau de bord </h2>
\t\t\t\t{% endblock %}

\t\t\t\t{% block pageactuelle %} Mes informations {% endblock %}

\t\t\t\t\t{% block body %}

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t\t<header class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Mes informations</h2>

\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if user.username != NULL %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b>Nom </b>: {{ user.username }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if user.dateInscription != NULL %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b>Date d'inscription</b> : {{ user.dateInscription|date(\"d/m/Y\") }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if user.email != NULL %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b>Email </b>: {{ user.email }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if nbformEnCours != NULL %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b>Nombre de projets en cours </b>: {{ nbformEnCours }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if nbformRemplit != NULL %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b>Nombre de projets terminé(s) </b>: {{ nbformRemplit }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{%  else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b>Nombre de projet terminé </b>: 0
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<section class=\"panel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<header class=\"panel-heading panel-heading-transparent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-caret-down\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-times\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Mes Projets</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-striped mb-none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Projets</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Statut</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Progression</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Facture</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if i > 0 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for p in 0..i-1 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ p }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ projets[p].nom }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if  data[p]  == 23 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"label label-success\">Terminé</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"label label-warning\">En cours</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-sm progress-half-rounded m-none mt-xs light\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-primary\" role=\"progressbar\" aria-valuenow={{dataPourcentage[p]}} aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: {{dataPourcentage[p]}}%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ dataPourcentage[p]}} %
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"pager\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{path('facture', {'id': projets[p].id}) }}\"> <button class=\"mb-xs mt-xs mr-xs btn btn-lg btn-default\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   type=\"button\">Facture</button></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>




\t\t\t\t\t\t\t\t\t\t\t\t\t<br>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Modification du mot de passe</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_start(form) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t<br><br>

\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_label(form.oldPassword, \"Quel est votre ancien mot de passe ? \", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_row(form.oldPassword, {'attr': {'class': 'form-control input-lg mb-md'}} ) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_label(form.plainPassword.first, \"Quel est votre nouveau mot de passe ? \", {'label_attr': {'class': 'col-sm-3 control-label', 'placeholder' : 'Mot de passe'}}) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_row(form.plainPassword.first, {'attr': {'class': 'form-control input-lg mb-md'}} ) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_label(form.plainPassword.second, \"Répetez le mot de passe ? \", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_row(form.plainPassword.second, {'attr': {'class': 'form-control input-lg mb-md'}} ) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_label(form.email, \"Voulez vous changer l'email ? (faculatif)  \", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_row(form.email, {'attr': {'class': 'form-control input-lg mb-md'}} ) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>



\t\t\t\t\t\t\t\t\t\t\t\t\t\t   {{ form_end(form) }}
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

\t\t\t\t\t{% endblock %}

\t\t{% block javascripts %}

\t\t<!-- Specific Page Vendor -->
\t\t<script src=\"{{ asset('resources/assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js') }}\"></script>
\t\t<script src=\"{{ asset('resources/assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js') }}\"></script>
\t\t<script src=\"{{ asset('resources/assets/vendor/jquery-appear/jquery.appear.js') }}\"></script>
\t\t<script src=\"{{ asset('resources/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js') }}\"></script>
\t\t<script src=\"{{ asset('resources/assets/vendor/jquery-easypiechart/jquery.easypiechart.js') }}\"></script>
\t\t<script src=\"{{ asset('resources/assets/vendor/flot/jquery.flot.js') }}\"></script>
\t\t<script src=\"{{ asset('resources/assets/vendor/flot-tooltip/jquery.flot.tooltip.js') }}\"></script>
\t\t<script src=\"{{ asset('resources/assets/vendor/flot/jquery.flot.pie.js') }}\"></script>
\t\t<script src=\"{{ asset('resources/assets/vendor/flot/jquery.flot.categories.js') }}\"></script>
\t\t<script src=\"{{ asset('resources/assets/vendor/flot/jquery.flot.resize.js') }}\"></script>
\t\t<script src=\"{{ asset('resources/assets/vendor/jquery-sparkline/jquery.sparkline.js') }}\"></script>
\t\t<script src=\"{{ asset('resources/assets/vendor/raphael/raphael.js') }}\"></script>
\t\t<script src=\"{{ asset('resources/assets/vendor/morris/morris.js') }}\"></script>
\t\t<script src=\"{{ asset('resources/assets/vendor/gauge/gauge.js') }}\"></script>
\t\t<script src=\"{{ asset('resources/assets/vendor/snap-svg/snap.svg.js') }}\"></script>
\t\t<script src=\"{{ asset('resources/assets/vendor/liquid-meter/liquid.meter.js') }}\"></script>
\t\t<script src=\"{{ asset('resources/assets/vendor/jqvmap/jquery.vmap.js') }}\"></script>
\t\t<script src=\"{{ asset('resources/assets/vendor/jqvmap/data/jquery.vmap.sampledata.js') }}\"></script>
\t\t<script src=\"{{ asset('resources/assets/vendor/jqvmap/maps/jquery.vmap.world.js') }}\"></script>
\t\t<script src=\"{{ asset('resources/assets/vendor/jqvmap/maps/continents/jquery.vmap.africa.js') }}\"></script>
\t\t<script src=\"{{ asset('resources/assets/vendor/jqvmap/maps/continents/jquery.vmap.asia.js') }}\"></script>
\t\t<script src=\"{{ asset('resources/assets/vendor/jqvmap/maps/continents/jquery.vmap.australia.js') }}\"></script>
\t\t<script src=\"{{ asset('resources/assets/vendor/jqvmap/maps/continents/jquery.vmap.europe.js') }}\"></script>
\t\t<script src=\"{{ asset('resources/assets/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js') }}\"></script>
\t\t<script src=\"{{ asset('resources/assets/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js') }}\"></script>

\t\t{% endblock %}", "dashboard/index.html.twig", "/opt/lampp/htdocs/Symfony/templates/dashboard/index.html.twig");
    }
}
