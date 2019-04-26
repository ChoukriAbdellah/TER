<?php

/* resetting/mail.html.twig */
class __TwigTemplate_f43b17d503349d9acbf8a2c35522d07fdc06974ce4df941e285ecda14d8d5810 extends Twig_Template
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
        return array (  36 => 13,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "resetting/mail.html.twig", "/opt/lampp/htdocs/Symfony-heroku/templates/resetting/mail.html.twig");
    }
}
