<?php

/* home/contact-mail.html.twig */
class __TwigTemplate_cf6808eb3fb0e3334905f3a05372e30da2487da920b80991b78ec220152dce7b extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/contact-mail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/contact-mail.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>Votre compte a été crée !</title>
</head>
<body>
    <p>
        Bonjour, <br>
        Un nouveau message a été envoyé par un visiteur <br>
        ---------------------------------------------------- <br>
        Nom : ";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["nom"]) || array_key_exists("nom", $context) ? $context["nom"] : (function () { throw new Twig_Error_Runtime('Variable "nom" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "<br>
        Adresse mail : ";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new Twig_Error_Runtime('Variable "email" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "<br>
        Sujet : ";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["sujet"]) || array_key_exists("sujet", $context) ? $context["sujet"] : (function () { throw new Twig_Error_Runtime('Variable "sujet" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "<br>
        Message : ";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "<br>
        A bientot sur Estimation.com !
    </p>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/contact-mail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 16,  51 => 15,  47 => 14,  43 => 13,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>Votre compte a été crée !</title>
</head>
<body>
    <p>
        Bonjour, <br>
        Un nouveau message a été envoyé par un visiteur <br>
        ---------------------------------------------------- <br>
        Nom : {{nom}}<br>
        Adresse mail : {{email}}<br>
        Sujet : {{sujet}}<br>
        Message : {{message}}<br>
        A bientot sur Estimation.com !
    </p>
</body>
</html>
", "home/contact-mail.html.twig", "/opt/lampp/htdocs/Symfony/templates/home/contact-mail.html.twig");
    }
}
