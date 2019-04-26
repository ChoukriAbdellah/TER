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

/* layout.html.twig */
class __TwigTemplate_44f6847bb1301d0cfecad34dfd0743a39bed591a1df52aecef6b1199def3eb7e extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'flash' => [$this, 'block_flash'],
            'menu' => [$this, 'block_menu'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

<head>
  <meta charset=\"utf-8\">
  <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
  <meta content=\"\" name=\"keywords\">
  <meta content=\"\" name=\"description\">

  ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 34
        echo "
</head>


<body data-spy=\"scroll\" data-offset=\"0\" data-target=\"#navigation\">

    ";
        // line 40
        $this->displayBlock('flash', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('menu', $context, $blocks);
        // line 47
        echo "
    ";
        // line 48
        $this->displayBlock('body', $context, $blocks);
        // line 51
        echo "

  <div id=\"copyrights\">
    <div class=\"container\">
      <p>
        &copy; Copyrights <strong>Estimation.com</strong>. All Rights Reserved 
      </p>
      <div class=\"credits\">
        <!--
          You are NOT allowed to delete the credit link to TemplateMag with free version.
          You can delete the credit link only if you bought the pro version.
          Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/pratt-app-landing-page-template/
          Licensing information: https://templatemag.com/license/
        -->
        Created with Pratt template by <a href=\"https://templatemag.com/\">TemplateMag</a>
      </div>
    </div>
  </div>

   ";
        // line 70
        $this->displayBlock('javascripts', $context, $blocks);
        // line 82
        echo "
</body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        echo "Estimation.com";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 12
        echo "
  <!-- Favicons -->
  <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/img/favicon.png"), "html", null, true);
        echo "\" rel=\"icon\">
  <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/apple-touch-icon.png"), "html", null, true);
        echo "\" rel=\"apple-touch-icon\">

  <!-- Google Fonts -->
  <link href=\"https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic|Raleway:400,300,700\" rel=\"stylesheet\">

  <!-- Bootstrap CSS File -->
  <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/lib/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  <!-- Main Stylesheet File -->
  <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  <!-- =======================================================
    Template Name: Pratt
    Template URL: https://templatemag.com/pratt-app-landing-page-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->

  ";
    }

    // line 40
    public function block_flash($context, array $blocks = [])
    {
        // line 41
        echo "            ";
        echo twig_include($this->env, $context, "flash.html.twig");
        echo " 
";
    }

    // line 44
    public function block_menu($context, array $blocks = [])
    {
        // line 45
        echo "
";
    }

    // line 48
    public function block_body($context, array $blocks = [])
    {
        // line 49
        echo "
    ";
    }

    // line 70
    public function block_javascripts($context, array $blocks = [])
    {
        // line 71
        echo "
  <!-- JavaScript Libraries -->
  <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/lib/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/lib/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/lib/php-mail-form/validate.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/lib/easing/easing.min.js"), "html", null, true);
        echo "\"></script>

  <!-- Template Main Javascript File -->
  <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/js/main.js"), "html", null, true);
        echo "\"></script>

    ";
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  204 => 79,  198 => 76,  194 => 75,  190 => 74,  186 => 73,  182 => 71,  179 => 70,  174 => 49,  171 => 48,  166 => 45,  163 => 44,  156 => 41,  153 => 40,  139 => 24,  133 => 21,  124 => 15,  120 => 14,  116 => 12,  113 => 11,  107 => 6,  101 => 82,  99 => 70,  78 => 51,  76 => 48,  73 => 47,  71 => 44,  68 => 43,  66 => 40,  58 => 34,  56 => 11,  48 => 6,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout.html.twig", "/opt/lampp/htdocs/Symfony-heroku/templates/layout.html.twig");
    }
}
