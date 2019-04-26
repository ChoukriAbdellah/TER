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

/* @Twig/Exception/exception.html.twig */
class __TwigTemplate_3c546d24d0d259e1fc9b5b03c93d2cdc526d40c86c17427ec9aefeb7b5d3c5a9 extends \Twig\Template
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
        echo "<div class=\"exception-summary ";
        echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "message", []))) ? ("exception-without-message") : (""));
        echo "\">
    <div class=\"exception-metadata\">
        <div class=\"container\">
            <h2 class=\"exception-hierarchy\">
                ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "allPrevious", [])));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["previousException"]) {
            // line 6
            echo "                    <a href=\"#trace-box-";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["loop"], "revindex", []) + 1), "html", null, true);
            echo "\">";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->abbrClass(twig_get_attribute($this->env, $this->source, $context["previousException"], "class", []));
            echo "</a>
                    <span class=\"icon\">";
            // line 7
            echo twig_include($this->env, $context, "@Twig/images/chevron-right.svg");
            echo "</span>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['previousException'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "                <a href=\"#trace-box-1\">";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->abbrClass(twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "class", []));
        echo "</a>
            </h2>
            <h2 class=\"exception-http\">
                HTTP ";
        // line 12
        echo twig_escape_filter($this->env, ($context["status_code"] ?? null), "html", null, true);
        echo " <small>";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? null), "html", null, true);
        echo "</small>
            </h2>
        </div>
    </div>

    <div class=\"exception-message-wrapper\">
        <div class=\"container\">
            <h1 class=\"break-long-words exception-message ";
        // line 19
        echo (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "message", [])) > 180)) ? ("long") : (""));
        echo "\">";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->formatFileFromText(nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "message", []), "html", null, true)));
        // line 21
        echo "</h1>

            <div class=\"exception-illustration hidden-xs-down\">
                ";
        // line 24
        echo twig_include($this->env, $context, "@Twig/images/symfony-ghost.svg");
        echo "
            </div>
        </div>
    </div>
</div>

<div class=\"container\">
    <div class=\"sf-tabs\">
        <div class=\"tab\">
            ";
        // line 33
        $context["exception_as_array"] = twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "toarray", []);
        // line 34
        echo "            ";
        $context["_exceptions_with_user_code"] = [];
        // line 35
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["exception_as_array"] ?? null));
        foreach ($context['_seq'] as $context["i"] => $context["e"]) {
            // line 36
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["e"], "trace", []));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 37
                echo "                    ";
                if (((( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["trace"], "file", [])) && !twig_in_filter("/vendor/", twig_get_attribute($this->env, $this->source, $context["trace"], "file", []))) && !twig_in_filter("/var/cache/", twig_get_attribute($this->env, $this->source, $context["trace"], "file", []))) &&  !twig_get_attribute($this->env, $this->source, $context["loop"], "last", []))) {
                    // line 38
                    echo "                        ";
                    $context["_exceptions_with_user_code"] = twig_array_merge(($context["_exceptions_with_user_code"] ?? null), [0 => $context["i"]]);
                    // line 39
                    echo "                    ";
                }
                // line 40
                echo "                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "            <h3 class=\"tab-title\">
                ";
        // line 43
        if ((twig_length_filter($this->env, ($context["exception_as_array"] ?? null)) > 1)) {
            // line 44
            echo "                    Exceptions <span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["exception_as_array"] ?? null)), "html", null, true);
            echo "</span>
                ";
        } else {
            // line 46
            echo "                    Exception
                ";
        }
        // line 48
        echo "            </h3>

            <div class=\"tab-content\">
                ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["exception_as_array"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["i"] => $context["e"]) {
            // line 52
            echo "                    ";
            echo twig_include($this->env, $context, "@Twig/Exception/traces.html.twig", ["exception" => $context["e"], "index" => twig_get_attribute($this->env, $this->source, $context["loop"], "index", []), "expand" => (twig_in_filter($context["i"], ($context["_exceptions_with_user_code"] ?? null)) || (twig_test_empty(($context["_exceptions_with_user_code"] ?? null)) && twig_get_attribute($this->env, $this->source, $context["loop"], "first", [])))], false);
            echo "
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "            </div>
        </div>

        ";
        // line 57
        if (($context["logger"] ?? null)) {
            // line 58
            echo "        <div class=\"tab ";
            echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["logger"] ?? null), "logs", []))) ? ("disabled") : (""));
            echo "\">
            <h3 class=\"tab-title\">
                Logs
                ";
            // line 61
            if ((((twig_get_attribute($this->env, $this->source, ($context["logger"] ?? null), "counterrors", [], "any", true, true) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["logger"] ?? null), "counterrors", [])))) ? (twig_get_attribute($this->env, $this->source, ($context["logger"] ?? null), "counterrors", [])) : (false))) {
                echo "<span class=\"badge status-error\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["logger"] ?? null), "counterrors", []), "html", null, true);
                echo "</span>";
            }
            // line 62
            echo "            </h3>

            <div class=\"tab-content\">
                ";
            // line 65
            if (twig_get_attribute($this->env, $this->source, ($context["logger"] ?? null), "logs", [])) {
                // line 66
                echo "                    ";
                echo twig_include($this->env, $context, "@Twig/Exception/logs.html.twig", ["logs" => twig_get_attribute($this->env, $this->source, ($context["logger"] ?? null), "logs", [])], false);
                echo "
                ";
            } else {
                // line 68
                echo "                    <div class=\"empty\">
                        <p>No log messages</p>
                    </div>
                ";
            }
            // line 72
            echo "            </div>
        </div>
        ";
        }
        // line 75
        echo "
        <div class=\"tab\">
            <h3 class=\"tab-title\">
                ";
        // line 78
        if ((twig_length_filter($this->env, ($context["exception_as_array"] ?? null)) > 1)) {
            // line 79
            echo "                    Stack Traces <span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["exception_as_array"] ?? null)), "html", null, true);
            echo "</span>
                ";
        } else {
            // line 81
            echo "                    Stack Trace
                ";
        }
        // line 83
        echo "            </h3>

            <div class=\"tab-content\">
                ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["exception_as_array"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 87
            echo "                    ";
            echo twig_include($this->env, $context, "@Twig/Exception/traces_text.html.twig", ["exception" => $context["e"], "index" => twig_get_attribute($this->env, $this->source, $context["loop"], "index", []), "num_exceptions" => twig_get_attribute($this->env, $this->source, $context["loop"], "length", [])], false);
            echo "
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "            </div>
        </div>

        ";
        // line 92
        if ( !twig_test_empty(($context["currentContent"] ?? null))) {
            // line 93
            echo "        <div class=\"tab\">
            <h3 class=\"tab-title\">Output content</h3>

            <div class=\"tab-content\">
                ";
            // line 97
            echo twig_escape_filter($this->env, ($context["currentContent"] ?? null), "html", null, true);
            echo "
            </div>
        </div>
        ";
        }
        // line 101
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  355 => 101,  348 => 97,  342 => 93,  340 => 92,  335 => 89,  318 => 87,  301 => 86,  296 => 83,  292 => 81,  286 => 79,  284 => 78,  279 => 75,  274 => 72,  268 => 68,  262 => 66,  260 => 65,  255 => 62,  249 => 61,  242 => 58,  240 => 57,  235 => 54,  218 => 52,  201 => 51,  196 => 48,  192 => 46,  186 => 44,  184 => 43,  181 => 42,  175 => 41,  161 => 40,  158 => 39,  155 => 38,  152 => 37,  134 => 36,  129 => 35,  126 => 34,  124 => 33,  112 => 24,  107 => 21,  105 => 20,  102 => 19,  90 => 12,  83 => 9,  67 => 7,  60 => 6,  43 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Twig/Exception/exception.html.twig", "/opt/lampp/htdocs/Symfony-heroku/vendor/symfony/twig-bundle/Resources/views/Exception/exception.html.twig");
    }
}
