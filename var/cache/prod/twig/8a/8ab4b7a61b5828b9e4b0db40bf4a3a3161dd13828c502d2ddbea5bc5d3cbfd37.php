<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_8b6b40f39cff2f84849a3ec07dcf0db9e12be87f1cbf5a6e3001cc4a703cd066 extends Twig_Template
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
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', ['type' => isset(\$type) ? \$type : 'number']) ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/integer_widget.html.php", "/opt/lampp/htdocs/Symfony-heroku/vendor/symfony/framework-bundle/Resources/views/Form/integer_widget.html.php");
    }
}
