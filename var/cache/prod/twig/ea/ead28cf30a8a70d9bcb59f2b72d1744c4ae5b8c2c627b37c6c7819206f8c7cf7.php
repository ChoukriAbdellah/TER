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

/* home/contact-mail.html.twig */
class __TwigTemplate_2308526e2acf5e279fc2a5535a00f3a7c01c83351a171fa2a55e5b64ef1a99ac extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
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
        echo twig_escape_filter($this->env, ($context["nom"] ?? null), "html", null, true);
        echo "<br>
        Adresse mail : ";
        // line 14
        echo twig_escape_filter($this->env, ($context["email"] ?? null), "html", null, true);
        echo "<br>
        Sujet : ";
        // line 15
        echo twig_escape_filter($this->env, ($context["sujet"] ?? null), "html", null, true);
        echo "<br>
        Message : ";
        // line 16
        echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
        echo "<br>
        A bientot sur Estimation.com !
    </p>
</body>
</html>
";
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
        return array (  61 => 16,  57 => 15,  53 => 14,  49 => 13,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/contact-mail.html.twig", "/opt/lampp/htdocs/Symfony-heroku/templates/home/contact-mail.html.twig");
    }
}
