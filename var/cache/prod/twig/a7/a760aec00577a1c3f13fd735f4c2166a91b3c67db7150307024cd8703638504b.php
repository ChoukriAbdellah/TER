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

/* admin/create-member-mail.html.twig */
class __TwigTemplate_96fda8a449b21ed5bdadbb97fe634b526fb11e8c85f378231ab430a35bd172c6 extends \Twig\Template
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
        return array (  56 => 14,  52 => 13,  48 => 12,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/create-member-mail.html.twig", "/opt/lampp/htdocs/Symfony-heroku/templates/admin/create-member-mail.html.twig");
    }
}
