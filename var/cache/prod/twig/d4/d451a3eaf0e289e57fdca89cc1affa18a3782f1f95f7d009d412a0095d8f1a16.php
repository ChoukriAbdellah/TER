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

/* @Twig/Exception/traces_text.html.twig */
class __TwigTemplate_b2e6cca25bec9253fad16f8002d413ad7bc731f7566bfce94f85e280a93a920e extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            '__internal_05f907eeba7c8431e1db67a308d4d9bb0db0d4f4055816dd782720b3543ce5d7' => [$this, 'block___internal_05f907eeba7c8431e1db67a308d4d9bb0db0d4f4055816dd782720b3543ce5d7'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<table class=\"trace trace-as-text\">
    <thead class=\"trace-head\">
        <tr>
            <th class=\"sf-toggle\" data-toggle-selector=\"#trace-text-";
        // line 4
        echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
        echo "\" data-toggle-initial=\"";
        echo (((1 == ($context["index"] ?? null))) ? ("display") : (""));
        echo "\">
                <h3 class=\"trace-class\">
                    ";
        // line 6
        if ((($context["num_exceptions"] ?? null) > 1)) {
            // line 7
            echo "                        <span class=\"text-muted\">[";
            echo twig_escape_filter($this->env, ((($context["num_exceptions"] ?? null) - ($context["index"] ?? null)) + 1), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, ($context["num_exceptions"] ?? null), "html", null, true);
            echo "]</span>
                    ";
        }
        // line 9
        echo "                    ";
        echo twig_escape_filter($this->env, twig_last($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "class", []), "\\")), "html", null, true);
        echo "
                    <span class=\"icon icon-close\">";
        // line 10
        echo twig_include($this->env, $context, "@Twig/images/icon-minus-square-o.svg");
        echo "</span>
                    <span class=\"icon icon-open\">";
        // line 11
        echo twig_include($this->env, $context, "@Twig/images/icon-plus-square-o.svg");
        echo "</span>
                </h3>
            </th>
        </tr>
    </thead>

    <tbody id=\"trace-text-";
        // line 17
        echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
        echo "\">
        <tr>
            <td>
                ";
        // line 20
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "trace", []))) {
            // line 21
            echo "                <pre class=\"stacktrace\">";
            // line 22
            echo twig_escape_filter($this->env,             $this->renderBlock("__internal_05f907eeba7c8431e1db67a308d4d9bb0db0d4f4055816dd782720b3543ce5d7", $context, $blocks), "html");
            // line 25
            echo "</pre>
                ";
        }
        // line 27
        echo "            </td>
        </tr>
    </tbody>
</table>
";
    }

    // line 22
    public function block___internal_05f907eeba7c8431e1db67a308d4d9bb0db0d4f4055816dd782720b3543ce5d7($context, array $blocks = [])
    {
        // line 23
        echo twig_include($this->env, $context, "@Twig/Exception/traces.txt.twig", ["exception" => ($context["exception"] ?? null), "format" => "html"], false);
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 23,  100 => 22,  92 => 27,  88 => 25,  86 => 22,  84 => 21,  82 => 20,  76 => 17,  67 => 11,  63 => 10,  58 => 9,  50 => 7,  48 => 6,  41 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Twig/Exception/traces_text.html.twig", "/opt/lampp/htdocs/Symfony-heroku/vendor/symfony/twig-bundle/Resources/views/Exception/traces_text.html.twig");
    }
}
