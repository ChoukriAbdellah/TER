<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_1f3b200f3bcf82b5b0bec9af788d377807d48ccf1889e2344b0e9681948386d4 extends Twig_Template
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
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/FormTable/button_row.html.php", "/opt/lampp/htdocs/Symfony-heroku/vendor/symfony/framework-bundle/Resources/views/FormTable/button_row.html.php");
    }
}
