<?php

/* home/contact-mail.html.twig */
class __TwigTemplate_97201674f89ce6232088d2cfe86c65f5c6dc75e0e727f1e5e697c0610cc0a2e0 extends Twig_Template
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
        return array (  49 => 16,  45 => 15,  41 => 14,  37 => 13,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "home/contact-mail.html.twig", "/opt/lampp/htdocs/Symfony-heroku/templates/home/contact-mail.html.twig");
    }
}
