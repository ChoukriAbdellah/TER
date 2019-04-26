<?php

/* admin/create-member-mail.html.twig */
class __TwigTemplate_8f259317ebe8d9af84d0751f7f5a7dac200fed0c74cbf9e8512fa821e61fe1df extends Twig_Template
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
        Un administrateur du site Estmation.com a crée un compte pour vous : <br>
        Identifiant : ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", []), "html", null, true);
        echo "<br>
        Mot de passe : ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "plainPassword", []), "html", null, true);
        echo "<br>
        Crée le : ";
        // line 14
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "dateInscription", []), "d-m-Y"), "html", null, true);
        echo " <br>
        A bientot sur Estimation.com !
    </p>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "admin/create-member-mail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 14,  40 => 13,  36 => 12,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/create-member-mail.html.twig", "/opt/lampp/htdocs/Symfony-heroku/templates/admin/create-member-mail.html.twig");
    }
}
