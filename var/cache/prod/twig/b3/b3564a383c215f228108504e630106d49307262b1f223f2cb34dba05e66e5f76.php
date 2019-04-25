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

/* resetting/mail.html.twig */
class __TwigTemplate_b977a19ff89c71e11d20d2e403025cfff0b0bd4669d833a7c7460f40d4322ec9 extends \Twig\Template
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
    <title>Renouvellement du mot de passe</title>
</head>
<body>
    <p>
        Bonjour, <br>
        Cliquez sur ce lien pour changer votre mot de passe.
        ";
        // line 13
        echo "        <a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("resetting", ["id" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", []), "token" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "token", [])])), "html", null, true);
        echo "\">Changer le mot de passe</a>
    </p>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "resetting/mail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 13,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "resetting/mail.html.twig", "/opt/lampp/htdocs/Symfony-heroku/templates/resetting/mail.html.twig");
    }
}
