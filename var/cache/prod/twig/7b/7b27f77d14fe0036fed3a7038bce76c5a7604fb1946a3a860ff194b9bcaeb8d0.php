<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_f0259a2a6d50e545945d8a45e1dc7afd7340c312bce8bf970e39409ed73db699 extends Twig_Template
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
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/button_row.html.php", "/opt/lampp/htdocs/Symfony-heroku/vendor/symfony/framework-bundle/Resources/views/Form/button_row.html.php");
    }
}
