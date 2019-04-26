<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_320ad63f46058a9d9a350c0eac013c217c97f44446d8d7919bb268c1c4b893e2 extends Twig_Template
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
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/repeated_row.html.php", "/opt/lampp/htdocs/Symfony-heroku/vendor/symfony/framework-bundle/Resources/views/Form/repeated_row.html.php");
    }
}
