<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_9deb2935e7c82d4a44ed0161a0d7897c4faf5ea7c84b4ea7c6f3e39f7cd3d456 extends Twig_Template
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
        echo json_encode(["error" => ["code" => ($context["status_code"] ?? null), "message" => ($context["status_text"] ?? null)]]);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Twig/Exception/error.json.twig", "/opt/lampp/htdocs/Symfony-heroku/vendor/symfony/twig-bundle/Resources/views/Exception/error.json.twig");
    }
}
