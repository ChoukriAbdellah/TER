<?php

/* dashboard/impression.html.twig */
class __TwigTemplate_c1c17e8ee82a1822539825b8fe75810ae58f6af8e58f4bbd964bf212c0ce8db7 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dashboard/impression.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dashboard/impression.html.twig"));

        // line 1
        echo "\t\t";
        $this->displayBlock('head', $context, $blocks);
        // line 16
        echo "\t\t\t\t";
        $this->displayBlock('title', $context, $blocks);
        // line 19
        echo "
\t\t\t\t\t";
        // line 20
        $this->displayBlock('body', $context, $blocks);
        // line 321
        echo "
\t\t";
        // line 322
        $this->displayBlock('javascripts', $context, $blocks);
        // line 328
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_head($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 2
        echo "

\t\t<!-- Specific Page Vendor CSS -->

\t\t\t<!-- Web Fonts  -->
\t\t\t<link href=\"//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800\" rel=\"stylesheet\" type=\"text/css\">

\t\t\t<!-- Vendor CSS -->
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" />

\t\t\t<!-- Invoice Print Style -->
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/stylesheets/invoice-print.css"), "html", null, true);
        echo "\" />

\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 17
        echo "\t\t\t\t<h2> Facture </h2>
\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "

\t\t\t\t\t\t\t\t\t\t<div class=\"invoice\">
\t\t\t\t\t\t\t\t\t\t\t<header class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 mt-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"h2 mt-none mb-sm text-dark text-bold\"></h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"h4 m-none text-dark text-bold\">";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["nom"]) || array_key_exists("nom", $context) ? $context["nom"] : (function () { throw new Twig_Error_Runtime('Variable "nom" does not exist.', 28, $this->source); })()), "html", null, true);
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
        // line 41
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
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 52, $this->source); })()), "username", []), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 54, $this->source); })()), "email", []), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</address>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"bill-data text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-dark\">Date:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"value\">";
        // line 62
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-dark\">À régler avant le : </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 66
        $context["tomorrow"] = twig_date_modify_filter($this->env, "now", "+30 day");
        // line 67
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"value\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["tomorrow"]) || array_key_exists("tomorrow", $context) ? $context["tomorrow"] : (function () { throw new Twig_Error_Runtime('Variable "tomorrow" does not exist.', 67, $this->source); })()), "d/m/Y"), "html", null, true);
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
        // line 102
        echo twig_escape_filter($this->env, (isset($context["prixEtudeSol"]) || array_key_exists("prixEtudeSol", $context) ? $context["prixEtudeSol"] : (function () { throw new Twig_Error_Runtime('Variable "prixEtudeSol" does not exist.', 102, $this->source); })()), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000002</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Preparation et accès au terrain</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 110
        echo twig_escape_filter($this->env, (isset($context["prixPrepTerrain"]) || array_key_exists("prixPrepTerrain", $context) ? $context["prixPrepTerrain"] : (function () { throw new Twig_Error_Runtime('Variable "prixPrepTerrain" does not exist.', 110, $this->source); })()), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000003</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Excavation</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 118
        echo twig_escape_filter($this->env, (isset($context["prixExcavation"]) || array_key_exists("prixExcavation", $context) ? $context["prixExcavation"] : (function () { throw new Twig_Error_Runtime('Variable "prixExcavation" does not exist.', 118, $this->source); })()), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000004</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Fondation</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 126
        echo twig_escape_filter($this->env, (isset($context["prixFondation"]) || array_key_exists("prixFondation", $context) ? $context["prixFondation"] : (function () { throw new Twig_Error_Runtime('Variable "prixFondation" does not exist.', 126, $this->source); })()), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000005</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Soubassement</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 134
        echo twig_escape_filter($this->env, (isset($context["prixSoubassement"]) || array_key_exists("prixSoubassement", $context) ? $context["prixSoubassement"] : (function () { throw new Twig_Error_Runtime('Variable "prixSoubassement" does not exist.', 134, $this->source); })()), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000006</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Vrd</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 142
        echo twig_escape_filter($this->env, (isset($context["prixVrd"]) || array_key_exists("prixVrd", $context) ? $context["prixVrd"] : (function () { throw new Twig_Error_Runtime('Variable "prixVrd" does not exist.', 142, $this->source); })()), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000007</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Le plancher</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 150
        echo twig_escape_filter($this->env, (isset($context["prixPlancher"]) || array_key_exists("prixPlancher", $context) ? $context["prixPlancher"] : (function () { throw new Twig_Error_Runtime('Variable "prixPlancher" does not exist.', 150, $this->source); })()), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000008</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">L'élevation</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 158
        echo twig_escape_filter($this->env, (isset($context["prixElevation"]) || array_key_exists("prixElevation", $context) ? $context["prixElevation"] : (function () { throw new Twig_Error_Runtime('Variable "prixElevation" does not exist.', 158, $this->source); })()), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000009</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Charpente</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 166
        echo twig_escape_filter($this->env, (isset($context["prixCharpente"]) || array_key_exists("prixCharpente", $context) ? $context["prixCharpente"] : (function () { throw new Twig_Error_Runtime('Variable "prixCharpente" does not exist.', 166, $this->source); })()), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000010</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Toiture</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 174
        echo twig_escape_filter($this->env, (isset($context["prixToiture"]) || array_key_exists("prixToiture", $context) ? $context["prixToiture"] : (function () { throw new Twig_Error_Runtime('Variable "prixToiture" does not exist.', 174, $this->source); })()), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000011</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Menuiserie</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 182
        echo twig_escape_filter($this->env, (isset($context["prixMenuiserie"]) || array_key_exists("prixMenuiserie", $context) ? $context["prixMenuiserie"] : (function () { throw new Twig_Error_Runtime('Variable "prixMenuiserie" does not exist.', 182, $this->source); })()), "html", null, true);
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
        // line 198
        echo twig_escape_filter($this->env, (isset($context["prixEnduit"]) || array_key_exists("prixEnduit", $context) ? $context["prixEnduit"] : (function () { throw new Twig_Error_Runtime('Variable "prixEnduit" does not exist.', 198, $this->source); })()), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000013</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Isolation</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 206
        echo twig_escape_filter($this->env, (isset($context["prixIsolation"]) || array_key_exists("prixIsolation", $context) ? $context["prixIsolation"] : (function () { throw new Twig_Error_Runtime('Variable "prixIsolation" does not exist.', 206, $this->source); })()), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000014</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Revetement</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 214
        echo twig_escape_filter($this->env, (isset($context["prixRevetement"]) || array_key_exists("prixRevetement", $context) ? $context["prixRevetement"] : (function () { throw new Twig_Error_Runtime('Variable "prixRevetement" does not exist.', 214, $this->source); })()), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000015</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Cloison</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 222
        echo twig_escape_filter($this->env, (isset($context["prixCloison"]) || array_key_exists("prixCloison", $context) ? $context["prixCloison"] : (function () { throw new Twig_Error_Runtime('Variable "prixCloison" does not exist.', 222, $this->source); })()), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000016</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Evacuation</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 230
        echo twig_escape_filter($this->env, (isset($context["prixEvacuation"]) || array_key_exists("prixEvacuation", $context) ? $context["prixEvacuation"] : (function () { throw new Twig_Error_Runtime('Variable "prixEvacuation" does not exist.', 230, $this->source); })()), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000017</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Menuiserie intérieure</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 238
        echo twig_escape_filter($this->env, (isset($context["prixMenuiseriesInt"]) || array_key_exists("prixMenuiseriesInt", $context) ? $context["prixMenuiseriesInt"] : (function () { throw new Twig_Error_Runtime('Variable "prixMenuiseriesInt" does not exist.', 238, $this->source); })()), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000018</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Escaliers</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 246
        echo twig_escape_filter($this->env, (isset($context["prixEscaliers"]) || array_key_exists("prixEscaliers", $context) ? $context["prixEscaliers"] : (function () { throw new Twig_Error_Runtime('Variable "prixEscaliers" does not exist.', 246, $this->source); })()), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000019</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Plomberie</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 254
        echo twig_escape_filter($this->env, (isset($context["prixPlomberie"]) || array_key_exists("prixPlomberie", $context) ? $context["prixPlomberie"] : (function () { throw new Twig_Error_Runtime('Variable "prixPlomberie" does not exist.', 254, $this->source); })()), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000020</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Electricité</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 262
        echo twig_escape_filter($this->env, (isset($context["prixElectricite"]) || array_key_exists("prixElectricite", $context) ? $context["prixElectricite"] : (function () { throw new Twig_Error_Runtime('Variable "prixElectricite" does not exist.', 262, $this->source); })()), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000021</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Ventilation</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 270
        echo twig_escape_filter($this->env, (isset($context["prixVentilation"]) || array_key_exists("prixVentilation", $context) ? $context["prixVentilation"] : (function () { throw new Twig_Error_Runtime('Variable "prixVentilation" does not exist.', 270, $this->source); })()), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000022</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Climatisation</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 278
        echo twig_escape_filter($this->env, (isset($context["prixClimatisation"]) || array_key_exists("prixClimatisation", $context) ? $context["prixClimatisation"] : (function () { throw new Twig_Error_Runtime('Variable "prixClimatisation" does not exist.', 278, $this->source); })()), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000023</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Domotique</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 286
        echo twig_escape_filter($this->env, (isset($context["prixDomotique"]) || array_key_exists("prixDomotique", $context) ? $context["prixDomotique"] : (function () { throw new Twig_Error_Runtime('Variable "prixDomotique" does not exist.', 286, $this->source); })()), "html", null, true);
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
        // line 301
        echo twig_escape_filter($this->env, (isset($context["prixTotal"]) || array_key_exists("prixTotal", $context) ? $context["prixTotal"] : (function () { throw new Twig_Error_Runtime('Variable "prixTotal" does not exist.', 301, $this->source); })()), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"2\">TVA</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 305
        echo twig_escape_filter($this->env, (isset($context["tva"]) || array_key_exists("tva", $context) ? $context["tva"] : (function () { throw new Twig_Error_Runtime('Variable "tva" does not exist.', 305, $this->source); })()), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr class=\"h4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"2\">Somme Total</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 309
        echo twig_escape_filter($this->env, ((isset($context["prixTotal"]) || array_key_exists("prixTotal", $context) ? $context["prixTotal"] : (function () { throw new Twig_Error_Runtime('Variable "prixTotal" does not exist.', 309, $this->source); })()) + (isset($context["tva"]) || array_key_exists("tva", $context) ? $context["tva"] : (function () { throw new Twig_Error_Runtime('Variable "tva" does not exist.', 309, $this->source); })())), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t


\t\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 322
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 323
        echo "
\t\t\t<script>
\t\t\t\twindow.print();
\t\t\t</script>
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/impression.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  543 => 323,  534 => 322,  512 => 309,  505 => 305,  498 => 301,  480 => 286,  469 => 278,  458 => 270,  447 => 262,  436 => 254,  425 => 246,  414 => 238,  403 => 230,  392 => 222,  381 => 214,  370 => 206,  359 => 198,  340 => 182,  329 => 174,  318 => 166,  307 => 158,  296 => 150,  285 => 142,  274 => 134,  263 => 126,  252 => 118,  241 => 110,  230 => 102,  191 => 67,  189 => 66,  182 => 62,  171 => 54,  166 => 52,  152 => 41,  136 => 28,  127 => 21,  118 => 20,  107 => 17,  98 => 16,  85 => 13,  79 => 10,  69 => 2,  60 => 1,  49 => 328,  47 => 322,  44 => 321,  42 => 20,  39 => 19,  36 => 16,  33 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\t\t{% block head %}


\t\t<!-- Specific Page Vendor CSS -->

\t\t\t<!-- Web Fonts  -->
\t\t\t<link href=\"//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800\" rel=\"stylesheet\" type=\"text/css\">

\t\t\t<!-- Vendor CSS -->
\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('resources/assets/vendor/bootstrap/css/bootstrap.css') }}\" />

\t\t\t<!-- Invoice Print Style -->
\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('resources/stylesheets/invoice-print.css') }}\" />

\t\t{% endblock %}
\t\t\t\t{% block title %}
\t\t\t\t<h2> Facture </h2>
\t\t\t\t{% endblock %}

\t\t\t\t\t{% block body %}


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
\t\t\t\t\t\t


\t\t\t\t\t{% endblock %}

\t\t{% block javascripts %}

\t\t\t<script>
\t\t\t\twindow.print();
\t\t\t</script>
\t\t{% endblock %}

", "dashboard/impression.html.twig", "/opt/lampp/htdocs/Symfony/templates/dashboard/impression.html.twig");
    }
}
