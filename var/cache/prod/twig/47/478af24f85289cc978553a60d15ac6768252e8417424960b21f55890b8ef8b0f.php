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

/* dashboard/impression.html.twig */
class __TwigTemplate_1995618378da09551d90a376004584988583143abc4793f941f0446a316d302f extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
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
    }

    // line 1
    public function block_head($context, array $blocks = [])
    {
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
    }

    // line 16
    public function block_title($context, array $blocks = [])
    {
        // line 17
        echo "\t\t\t\t<h2> Facture </h2>
\t\t\t\t";
    }

    // line 20
    public function block_body($context, array $blocks = [])
    {
        // line 21
        echo "

\t\t\t\t\t\t\t\t\t\t<div class=\"invoice\">
\t\t\t\t\t\t\t\t\t\t\t<header class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 mt-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"h2 mt-none mb-sm text-dark text-bold\"></h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"h4 m-none text-dark text-bold\">";
        // line 28
        echo twig_escape_filter($this->env, ($context["nom"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", []), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", []), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["tomorrow"] ?? null), "d/m/Y"), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["prixEtudeSol"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["prixPrepTerrain"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["prixExcavation"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["prixFondation"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["prixSoubassement"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["prixVrd"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["prixPlancher"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["prixElevation"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["prixCharpente"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["prixToiture"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["prixMenuiserie"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["prixEnduit"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["prixIsolation"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["prixRevetement"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["prixCloison"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["prixEvacuation"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["prixMenuiseriesInt"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["prixEscaliers"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["prixPlomberie"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["prixElectricite"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["prixVentilation"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["prixClimatisation"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["prixDomotique"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["prixTotal"] ?? null), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"2\">TVA</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 305
        echo twig_escape_filter($this->env, ($context["tva"] ?? null), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr class=\"h4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"2\">Somme Total</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 309
        echo twig_escape_filter($this->env, (($context["prixTotal"] ?? null) + ($context["tva"] ?? null)), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>



\t\t\t\t\t";
    }

    // line 322
    public function block_javascripts($context, array $blocks = [])
    {
        // line 323
        echo "
\t\t\t<script>
\t\t\t\twindow.print();
\t\t\t</script>
\t\t";
    }

    public function getTemplateName()
    {
        return "dashboard/impression.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  501 => 323,  498 => 322,  482 => 309,  475 => 305,  468 => 301,  450 => 286,  439 => 278,  428 => 270,  417 => 262,  406 => 254,  395 => 246,  384 => 238,  373 => 230,  362 => 222,  351 => 214,  340 => 206,  329 => 198,  310 => 182,  299 => 174,  288 => 166,  277 => 158,  266 => 150,  255 => 142,  244 => 134,  233 => 126,  222 => 118,  211 => 110,  200 => 102,  161 => 67,  159 => 66,  152 => 62,  141 => 54,  136 => 52,  122 => 41,  106 => 28,  97 => 21,  94 => 20,  89 => 17,  86 => 16,  79 => 13,  73 => 10,  63 => 2,  60 => 1,  55 => 328,  53 => 322,  50 => 321,  48 => 20,  45 => 19,  42 => 16,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dashboard/impression.html.twig", "/opt/lampp/htdocs/Symfony-heroku/templates/dashboard/impression.html.twig");
    }
}
