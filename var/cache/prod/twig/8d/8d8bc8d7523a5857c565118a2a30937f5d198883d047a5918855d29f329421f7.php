<?php

/* @Twig/Exception/traces.html.twig */
class __TwigTemplate_e15d6d509c9ab39f2524e25fd651941b14c756322f308289a93069072718f2a0 extends Twig_Template
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
        echo "<div class=\"trace trace-as-html\" id=\"trace-box-";
        echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
        echo "\">
    <div class=\"trace-details\">
        <div class=\"trace-head\">
            <span class=\"sf-toggle\" data-toggle-selector=\"#trace-html-";
        // line 4
        echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
        echo "\" data-toggle-initial=\"";
        echo ((($context["expand"] ?? null)) ? ("display") : (""));
        echo "\">
                <h3 class=\"trace-class\">
                    <span class=\"icon icon-close\">";
        // line 6
        echo twig_include($this->env, $context, "@Twig/images/icon-minus-square-o.svg");
        echo "</span>
                    <span class=\"icon icon-open\">";
        // line 7
        echo twig_include($this->env, $context, "@Twig/images/icon-plus-square-o.svg");
        echo "</span>

                    <span class=\"trace-namespace\">
                        ";
        // line 10
        echo twig_escape_filter($this->env, twig_join_filter(twig_slice($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "class", []), "\\"), 0,  -1), "\\"), "html", null, true);
        // line 11
        echo (((twig_length_filter($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "class", []), "\\")) > 1)) ? ("\\") : (""));
        echo "
                    </span>
                    ";
        // line 13
        echo twig_escape_filter($this->env, twig_last($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "class", []), "\\")), "html", null, true);
        echo "
                </h3>

                ";
        // line 16
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "message", [])) && (($context["index"] ?? null) > 1))) {
            // line 17
            echo "                    <p class=\"break-long-words trace-message\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "message", []), "html", null, true);
            echo "</p>
                ";
        }
        // line 19
        echo "            </span>
        </div>

        <div id=\"trace-html-";
        // line 22
        echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
        echo "\" class=\"sf-toggle-content\">
        ";
        // line 23
        $context["_is_first_user_code"] = true;
        // line 24
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "trace", []));
        foreach ($context['_seq'] as $context["i"] => $context["trace"]) {
            // line 25
            echo "            ";
            $context["_is_vendor_trace"] = ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["trace"], "file", [])) && (twig_in_filter("/vendor/", twig_get_attribute($this->env, $this->source, $context["trace"], "file", [])) || twig_in_filter("/var/cache/", twig_get_attribute($this->env, $this->source, $context["trace"], "file", []))));
            // line 26
            echo "            ";
            $context["_display_code_snippet"] = (($context["_is_first_user_code"] ?? null) &&  !($context["_is_vendor_trace"] ?? null));
            // line 27
            echo "            ";
            if (($context["_display_code_snippet"] ?? null)) {
                $context["_is_first_user_code"] = false;
            }
            // line 28
            echo "            <div class=\"trace-line ";
            echo ((($context["_is_vendor_trace"] ?? null)) ? ("trace-from-vendor") : (""));
            echo "\">
                ";
            // line 29
            echo twig_include($this->env, $context, "@Twig/Exception/trace.html.twig", ["prefix" => ($context["index"] ?? null), "i" => $context["i"], "trace" => $context["trace"], "style" => ((($context["_is_vendor_trace"] ?? null)) ? ("compact") : (((($context["_display_code_snippet"] ?? null)) ? ("expanded") : (""))))], false);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 32,  100 => 29,  95 => 28,  90 => 27,  87 => 26,  84 => 25,  79 => 24,  77 => 23,  73 => 22,  68 => 19,  62 => 17,  60 => 16,  54 => 13,  49 => 11,  47 => 10,  41 => 7,  37 => 6,  30 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Twig/Exception/traces.html.twig", "/opt/lampp/htdocs/Symfony-heroku/vendor/symfony/twig-bundle/Resources/views/Exception/traces.html.twig");
    }
}
