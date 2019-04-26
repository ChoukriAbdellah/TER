<?php

/* dashboard/facture.html.twig */
class __TwigTemplate_44f8f5968f7572c788989476354641784bd8157355abf1ee726a69d85a5c4d92 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("/dashboard-layout.html.twig", "dashboard/facture.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dashboard/facture.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dashboard/facture.html.twig"));

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
        echo "\t\t\t\t<h2> Facture </h2>
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

        echo " Ma facture ";
        
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

\t\t\t\t\t\t\t\t<!-- start: page -->

\t\t\t\t\t\t\t\t<section class=\"panel\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"invoice\">
\t\t\t\t\t\t\t\t\t\t\t<header class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 mt-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"h2 mt-none mb-sm text-dark text-bold\"></h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"h4 m-none text-dark text-bold\">";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["nom"]) || array_key_exists("nom", $context) ? $context["nom"] : (function () { throw new Twig_Error_Runtime('Variable "nom" does not exist.', 33, $this->source); })()), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 text-right mt-md mb-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<address class=\"ib mr-xlg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tEstimation Themes Ltd
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tFaculté des Sciences, Montpellier, France
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tTéléphone: 04 67 14 36 76
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\testimation@gmail.com
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ib\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/img/estimation.svg"), "html", null, true);
        echo " alt=\"OKLER Themes\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"bill-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"bill-to\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"h5 mb-xs text-dark text-semibold\">À :</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<address>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 57, $this->source); })()), "username", []), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 59, $this->source); })()), "email", []), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</address>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"bill-data text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-dark\">Date:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"value\">";
        // line 67
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-dark\">À régler avant le : </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 71
        $context["tomorrow"] = twig_date_modify_filter($this->env, "now", "+30 day");
        // line 72
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"value\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["tomorrow"]) || array_key_exists("tomorrow", $context) ? $context["tomorrow"] : (function () { throw new Twig_Error_Runtime('Variable "tomorrow" does not exist.', 72, $this->source); })()), "d/m/Y"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table invoice-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr class=\"h4 text-dark\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th id=\"cell-id\"     class=\"text-semibold\">#</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th id=\"cell-item\"   class=\"text-semibold\">Objet</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th id=\"cell-desc\"   class=\"text-semibold\"></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th id=\"cell-price\"  class=\"text-center text-semibold\"></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th id=\"cell-qty\"    class=\"text-center text-semibold\"></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th id=\"cell-total\"  class=\"text-center text-semibold\">Total</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Gros Oeuvre</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000001</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Etude sol </td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 107
        echo twig_escape_filter($this->env, (isset($context["prixEtudeSol"]) || array_key_exists("prixEtudeSol", $context) ? $context["prixEtudeSol"] : (function () { throw new Twig_Error_Runtime('Variable "prixEtudeSol" does not exist.', 107, $this->source); })()), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000002</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Preparation et accès au terrain</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 115
        echo twig_escape_filter($this->env, (isset($context["prixPrepTerrain"]) || array_key_exists("prixPrepTerrain", $context) ? $context["prixPrepTerrain"] : (function () { throw new Twig_Error_Runtime('Variable "prixPrepTerrain" does not exist.', 115, $this->source); })()), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000003</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Excavation</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 123
        echo twig_escape_filter($this->env, (isset($context["prixExcavation"]) || array_key_exists("prixExcavation", $context) ? $context["prixExcavation"] : (function () { throw new Twig_Error_Runtime('Variable "prixExcavation" does not exist.', 123, $this->source); })()), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000004</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Fondation</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 131
        echo twig_escape_filter($this->env, (isset($context["prixFondation"]) || array_key_exists("prixFondation", $context) ? $context["prixFondation"] : (function () { throw new Twig_Error_Runtime('Variable "prixFondation" does not exist.', 131, $this->source); })()), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000005</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Soubassement</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 139
        echo twig_escape_filter($this->env, (isset($context["prixSoubassement"]) || array_key_exists("prixSoubassement", $context) ? $context["prixSoubassement"] : (function () { throw new Twig_Error_Runtime('Variable "prixSoubassement" does not exist.', 139, $this->source); })()), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000006</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Vrd</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 147
        echo twig_escape_filter($this->env, (isset($context["prixVrd"]) || array_key_exists("prixVrd", $context) ? $context["prixVrd"] : (function () { throw new Twig_Error_Runtime('Variable "prixVrd" does not exist.', 147, $this->source); })()), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000007</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Le plancher</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 155
        echo twig_escape_filter($this->env, (isset($context["prixPlancher"]) || array_key_exists("prixPlancher", $context) ? $context["prixPlancher"] : (function () { throw new Twig_Error_Runtime('Variable "prixPlancher" does not exist.', 155, $this->source); })()), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000008</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">L'élevation</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 163
        echo twig_escape_filter($this->env, (isset($context["prixElevation"]) || array_key_exists("prixElevation", $context) ? $context["prixElevation"] : (function () { throw new Twig_Error_Runtime('Variable "prixElevation" does not exist.', 163, $this->source); })()), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000009</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Charpente</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 171
        echo twig_escape_filter($this->env, (isset($context["prixCharpente"]) || array_key_exists("prixCharpente", $context) ? $context["prixCharpente"] : (function () { throw new Twig_Error_Runtime('Variable "prixCharpente" does not exist.', 171, $this->source); })()), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000010</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Toiture</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 179
        echo twig_escape_filter($this->env, (isset($context["prixToiture"]) || array_key_exists("prixToiture", $context) ? $context["prixToiture"] : (function () { throw new Twig_Error_Runtime('Variable "prixToiture" does not exist.', 179, $this->source); })()), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000011</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Menuiserie</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 187
        echo twig_escape_filter($this->env, (isset($context["prixMenuiserie"]) || array_key_exists("prixMenuiserie", $context) ? $context["prixMenuiserie"] : (function () { throw new Twig_Error_Runtime('Variable "prixMenuiserie" does not exist.', 187, $this->source); })()), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Second Oeuvre</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000012</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Enduit</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 203
        echo twig_escape_filter($this->env, (isset($context["prixEnduit"]) || array_key_exists("prixEnduit", $context) ? $context["prixEnduit"] : (function () { throw new Twig_Error_Runtime('Variable "prixEnduit" does not exist.', 203, $this->source); })()), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000013</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Isolation</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 211
        echo twig_escape_filter($this->env, (isset($context["prixIsolation"]) || array_key_exists("prixIsolation", $context) ? $context["prixIsolation"] : (function () { throw new Twig_Error_Runtime('Variable "prixIsolation" does not exist.', 211, $this->source); })()), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000014</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Revetement</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 219
        echo twig_escape_filter($this->env, (isset($context["prixRevetement"]) || array_key_exists("prixRevetement", $context) ? $context["prixRevetement"] : (function () { throw new Twig_Error_Runtime('Variable "prixRevetement" does not exist.', 219, $this->source); })()), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000015</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Cloison</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 227
        echo twig_escape_filter($this->env, (isset($context["prixCloison"]) || array_key_exists("prixCloison", $context) ? $context["prixCloison"] : (function () { throw new Twig_Error_Runtime('Variable "prixCloison" does not exist.', 227, $this->source); })()), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000016</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Evacuation</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 235
        echo twig_escape_filter($this->env, (isset($context["prixEvacuation"]) || array_key_exists("prixEvacuation", $context) ? $context["prixEvacuation"] : (function () { throw new Twig_Error_Runtime('Variable "prixEvacuation" does not exist.', 235, $this->source); })()), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000017</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Menuiserie intérieure</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 243
        echo twig_escape_filter($this->env, (isset($context["prixMenuiseriesInt"]) || array_key_exists("prixMenuiseriesInt", $context) ? $context["prixMenuiseriesInt"] : (function () { throw new Twig_Error_Runtime('Variable "prixMenuiseriesInt" does not exist.', 243, $this->source); })()), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000018</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Escaliers</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 251
        echo twig_escape_filter($this->env, (isset($context["prixEscaliers"]) || array_key_exists("prixEscaliers", $context) ? $context["prixEscaliers"] : (function () { throw new Twig_Error_Runtime('Variable "prixEscaliers" does not exist.', 251, $this->source); })()), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000019</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Plomberie</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 259
        echo twig_escape_filter($this->env, (isset($context["prixPlomberie"]) || array_key_exists("prixPlomberie", $context) ? $context["prixPlomberie"] : (function () { throw new Twig_Error_Runtime('Variable "prixPlomberie" does not exist.', 259, $this->source); })()), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000020</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Electricité</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 267
        echo twig_escape_filter($this->env, (isset($context["prixElectricite"]) || array_key_exists("prixElectricite", $context) ? $context["prixElectricite"] : (function () { throw new Twig_Error_Runtime('Variable "prixElectricite" does not exist.', 267, $this->source); })()), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000021</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Ventilation</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 275
        echo twig_escape_filter($this->env, (isset($context["prixVentilation"]) || array_key_exists("prixVentilation", $context) ? $context["prixVentilation"] : (function () { throw new Twig_Error_Runtime('Variable "prixVentilation" does not exist.', 275, $this->source); })()), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000022</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Climatisation</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 283
        echo twig_escape_filter($this->env, (isset($context["prixClimatisation"]) || array_key_exists("prixClimatisation", $context) ? $context["prixClimatisation"] : (function () { throw new Twig_Error_Runtime('Variable "prixClimatisation" does not exist.', 283, $this->source); })()), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000023</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Domotique</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 291
        echo twig_escape_filter($this->env, (isset($context["prixDomotique"]) || array_key_exists("prixDomotique", $context) ? $context["prixDomotique"] : (function () { throw new Twig_Error_Runtime('Variable "prixDomotique" does not exist.', 291, $this->source); })()), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>


\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"invoice-summary\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4 col-sm-offset-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table h5 text-dark\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr class=\"b-top-none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"2\">Hors TVA</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 306
        echo twig_escape_filter($this->env, (isset($context["prixTotal"]) || array_key_exists("prixTotal", $context) ? $context["prixTotal"] : (function () { throw new Twig_Error_Runtime('Variable "prixTotal" does not exist.', 306, $this->source); })()), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"2\">TVA</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 310
        echo twig_escape_filter($this->env, (isset($context["tva"]) || array_key_exists("tva", $context) ? $context["tva"] : (function () { throw new Twig_Error_Runtime('Variable "tva" does not exist.', 310, $this->source); })()), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr class=\"h4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"2\">Somme Total</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 314
        echo twig_escape_filter($this->env, ((isset($context["prixTotal"]) || array_key_exists("prixTotal", $context) ? $context["prixTotal"] : (function () { throw new Twig_Error_Runtime('Variable "prixTotal" does not exist.', 314, $this->source); })()) + (isset($context["tva"]) || array_key_exists("tva", $context) ? $context["tva"] : (function () { throw new Twig_Error_Runtime('Variable "tva" does not exist.', 314, $this->source); })())), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"text-right mr-lg\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default\">Envoyer</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 325
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("impression", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 325, $this->source); })())]), "html", null, true);
        echo "\" target=\"_blank\" class=\"btn btn-primary ml-sm\"><i class=\"fa fa-print\"></i> Imprimer</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</section>

\t\t\t\t\t\t\t\t<!-- end: page -->

\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 338
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 339
        echo "
\t\t<!-- Specific Page Vendor -->
\t\t<script src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 343
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/jquery-appear/jquery.appear.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 345
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/jquery-easypiechart/jquery.easypiechart.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/flot/jquery.flot.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/flot-tooltip/jquery.flot.tooltip.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 348
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/flot/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/flot/jquery.flot.categories.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/flot/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/jquery-sparkline/jquery.sparkline.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 352
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/raphael/raphael.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/morris/morris.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 354
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/gauge/gauge.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 355
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/snap-svg/snap.svg.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 356
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/liquid-meter/liquid.meter.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 357
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/jqvmap/jquery.vmap.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/jqvmap/data/jquery.vmap.sampledata.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/jqvmap/maps/jquery.vmap.world.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 360
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/jqvmap/maps/continents/jquery.vmap.africa.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 361
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/jqvmap/maps/continents/jquery.vmap.asia.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 362
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/jqvmap/maps/continents/jquery.vmap.australia.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 363
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/jqvmap/maps/continents/jquery.vmap.europe.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 364
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 365
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"), "html", null, true);
        echo "\"></script>

\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/facture.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  670 => 365,  666 => 364,  662 => 363,  658 => 362,  654 => 361,  650 => 360,  646 => 359,  642 => 358,  638 => 357,  634 => 356,  630 => 355,  626 => 354,  622 => 353,  618 => 352,  614 => 351,  610 => 350,  606 => 349,  602 => 348,  598 => 347,  594 => 346,  590 => 345,  586 => 344,  582 => 343,  578 => 342,  574 => 341,  570 => 339,  561 => 338,  539 => 325,  525 => 314,  518 => 310,  511 => 306,  493 => 291,  482 => 283,  471 => 275,  460 => 267,  449 => 259,  438 => 251,  427 => 243,  416 => 235,  405 => 227,  394 => 219,  383 => 211,  372 => 203,  353 => 187,  342 => 179,  331 => 171,  320 => 163,  309 => 155,  298 => 147,  287 => 139,  276 => 131,  265 => 123,  254 => 115,  243 => 107,  204 => 72,  202 => 71,  195 => 67,  184 => 59,  179 => 57,  165 => 46,  149 => 33,  134 => 20,  125 => 19,  107 => 17,  96 => 14,  87 => 13,  74 => 10,  70 => 9,  66 => 8,  60 => 5,  57 => 4,  48 => 3,  15 => 1,);
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
\t\t\t\t<h2> Facture </h2>
\t\t\t\t{% endblock %}

\t\t\t\t{% block pageactuelle %} Ma facture {% endblock %}

\t\t\t\t\t{% block body %}

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xs-12\">

\t\t\t\t\t\t\t\t<!-- start: page -->

\t\t\t\t\t\t\t\t<section class=\"panel\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"invoice\">
\t\t\t\t\t\t\t\t\t\t\t<header class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 mt-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"h2 mt-none mb-sm text-dark text-bold\"></h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"h4 m-none text-dark text-bold\">{{ nom }}</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 text-right mt-md mb-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<address class=\"ib mr-xlg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tEstimation Themes Ltd
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tFaculté des Sciences, Montpellier, France
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tTéléphone: 04 67 14 36 76
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\testimation@gmail.com
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ib\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src={{ asset('resources/img/estimation.svg') }} alt=\"OKLER Themes\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"bill-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"bill-to\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"h5 mb-xs text-dark text-semibold\">À :</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<address>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ user.username }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ user.email }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</address>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"bill-data text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-dark\">Date:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"value\">{{ \"now\"|date(\"d/m/Y\") }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-dark\">À régler avant le : </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% set tomorrow = 'now'|date_modify(\"+30 day\") %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"value\">{{ tomorrow|date(\"d/m/Y\") }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table invoice-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr class=\"h4 text-dark\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th id=\"cell-id\"     class=\"text-semibold\">#</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th id=\"cell-item\"   class=\"text-semibold\">Objet</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th id=\"cell-desc\"   class=\"text-semibold\"></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th id=\"cell-price\"  class=\"text-center text-semibold\"></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th id=\"cell-qty\"    class=\"text-center text-semibold\"></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th id=\"cell-total\"  class=\"text-center text-semibold\">Total</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Gros Oeuvre</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000001</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Etude sol </td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">{{ prixEtudeSol }} €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000002</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Preparation et accès au terrain</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">{{ prixPrepTerrain }} €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000003</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Excavation</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">{{ prixExcavation }} €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000004</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Fondation</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">{{ prixFondation }} €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000005</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Soubassement</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">{{ prixSoubassement }} €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000006</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Vrd</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">{{ prixVrd }} €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000007</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Le plancher</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">{{ prixPlancher }} €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000008</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">L'élevation</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">{{ prixElevation }} €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000009</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Charpente</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">{{ prixCharpente }} €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000010</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Toiture</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">{{ prixToiture }} €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000011</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Menuiserie</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">{{ prixMenuiserie }} €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Second Oeuvre</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000012</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Enduit</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">{{ prixEnduit }} €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000013</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Isolation</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">{{ prixIsolation }} €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000014</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Revetement</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">{{ prixRevetement }} €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000015</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Cloison</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">{{ prixCloison }} €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000016</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Evacuation</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">{{ prixEvacuation }} €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000017</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Menuiserie intérieure</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">{{ prixMenuiseriesInt }} €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000018</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Escaliers</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">{{ prixEscaliers }} €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000019</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Plomberie</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">{{ prixPlomberie }} €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000020</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Electricité</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">{{ prixElectricite }} €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000021</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Ventilation</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">{{ prixVentilation }} €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000022</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Climatisation</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">{{ prixClimatisation }} €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000023</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Domotique</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">{{ prixDomotique }} €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>


\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"invoice-summary\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4 col-sm-offset-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table h5 text-dark\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr class=\"b-top-none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"2\">Hors TVA</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">{{ prixTotal }} €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"2\">TVA</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">{{ tva }} €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr class=\"h4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"2\">Somme Total</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">{{ prixTotal + tva }} €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"text-right mr-lg\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default\">Envoyer</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{path('impression', {'id': id}) }}\" target=\"_blank\" class=\"btn btn-primary ml-sm\"><i class=\"fa fa-print\"></i> Imprimer</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</section>

\t\t\t\t\t\t\t\t<!-- end: page -->

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

\t\t{% endblock %}", "dashboard/facture.html.twig", "/opt/lampp/htdocs/Symfony/templates/dashboard/facture.html.twig");
    }
}
