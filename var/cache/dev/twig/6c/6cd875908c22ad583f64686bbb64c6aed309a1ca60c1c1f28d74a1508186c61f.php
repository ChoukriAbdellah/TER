<?php

/* Estimation/index.html.twig */
class __TwigTemplate_a9c1f599ce51ff261cf9690605c9039e59b1e9f1d2b565e5b91324b73a282ea6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Estimation/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Estimation/index.html.twig"));

        // line 1
        echo "


<!DOCTYPE html>

<html>

  <head>

    <title>Estim</title>

  </head>

  <body>
<h1> Les informations entrée  .. </h1>
    <h3>Ville : ";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["ville"]) || array_key_exists("ville", $context) ? $context["ville"] : (function () { throw new Twig_Error_Runtime('Variable "ville" does not exist.', 16, $this->source); })()), "html", null, true);
        echo " !</h3>
    <h3>Surface: ";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["surface"]) || array_key_exists("surface", $context) ? $context["surface"] : (function () { throw new Twig_Error_Runtime('Variable "surface" does not exist.', 17, $this->source); })()), "html", null, true);
        echo " !</h3>
    <h3>Nombre de chambre : ";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["nb"]) || array_key_exists("nb", $context) ? $context["nb"] : (function () { throw new Twig_Error_Runtime('Variable "nb" does not exist.', 18, $this->source); })()), "html", null, true);
        echo " !</h3>

<h1> Le cout estimer pour la construction .. </h1>
<h3> ";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["cout"]) || array_key_exists("cout", $context) ? $context["cout"] : (function () { throw new Twig_Error_Runtime('Variable "cout" does not exist.', 21, $this->source); })()), "html", null, true);
        echo " euros </h3>*/ 
  
  </body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Estimation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 21,  54 => 18,  50 => 17,  46 => 16,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("


<!DOCTYPE html>

<html>

  <head>

    <title>Estim</title>

  </head>

  <body>
<h1> Les informations entrée  .. </h1>
    <h3>Ville : {{ ville }} !</h3>
    <h3>Surface: {{ surface }} !</h3>
    <h3>Nombre de chambre : {{ nb }} !</h3>

<h1> Le cout estimer pour la construction .. </h1>
<h3> {{ cout }} euros </h3>*/ 
  
  </body>

</html>", "Estimation/index.html.twig", "/var/www/Symfony/templates/Estimation/index.html.twig");
    }
}
