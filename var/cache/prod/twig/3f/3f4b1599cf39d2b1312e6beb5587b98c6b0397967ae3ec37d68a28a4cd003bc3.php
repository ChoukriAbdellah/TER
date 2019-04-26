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

/* form_div_layout.html.twig */
class __TwigTemplate_0ac9c6a787ea5a3840b260cad55079c09f4d17ef24934a1bee75aa99facaa1bc extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'form_widget' => [$this, 'block_form_widget'],
            'form_widget_simple' => [$this, 'block_form_widget_simple'],
            'form_widget_compound' => [$this, 'block_form_widget_compound'],
            'collection_widget' => [$this, 'block_collection_widget'],
            'textarea_widget' => [$this, 'block_textarea_widget'],
            'choice_widget' => [$this, 'block_choice_widget'],
            'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
            'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
            'choice_widget_options' => [$this, 'block_choice_widget_options'],
            'checkbox_widget' => [$this, 'block_checkbox_widget'],
            'radio_widget' => [$this, 'block_radio_widget'],
            'datetime_widget' => [$this, 'block_datetime_widget'],
            'date_widget' => [$this, 'block_date_widget'],
            'time_widget' => [$this, 'block_time_widget'],
            'dateinterval_widget' => [$this, 'block_dateinterval_widget'],
            'number_widget' => [$this, 'block_number_widget'],
            'integer_widget' => [$this, 'block_integer_widget'],
            'money_widget' => [$this, 'block_money_widget'],
            'url_widget' => [$this, 'block_url_widget'],
            'search_widget' => [$this, 'block_search_widget'],
            'percent_widget' => [$this, 'block_percent_widget'],
            'password_widget' => [$this, 'block_password_widget'],
            'hidden_widget' => [$this, 'block_hidden_widget'],
            'email_widget' => [$this, 'block_email_widget'],
            'range_widget' => [$this, 'block_range_widget'],
            'button_widget' => [$this, 'block_button_widget'],
            'submit_widget' => [$this, 'block_submit_widget'],
            'reset_widget' => [$this, 'block_reset_widget'],
            'tel_widget' => [$this, 'block_tel_widget'],
            'color_widget' => [$this, 'block_color_widget'],
            'form_label' => [$this, 'block_form_label'],
            'button_label' => [$this, 'block_button_label'],
            'form_help' => [$this, 'block_form_help'],
            'repeated_row' => [$this, 'block_repeated_row'],
            'form_row' => [$this, 'block_form_row'],
            'button_row' => [$this, 'block_button_row'],
            'hidden_row' => [$this, 'block_hidden_row'],
            'form' => [$this, 'block_form'],
            'form_start' => [$this, 'block_form_start'],
            'form_end' => [$this, 'block_form_end'],
            'form_errors' => [$this, 'block_form_errors'],
            'form_rest' => [$this, 'block_form_rest'],
            'form_rows' => [$this, 'block_form_rows'],
            'widget_attributes' => [$this, 'block_widget_attributes'],
            'widget_container_attributes' => [$this, 'block_widget_container_attributes'],
            'button_attributes' => [$this, 'block_button_attributes'],
            'attributes' => [$this, 'block_attributes'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $this->displayBlock('form_widget', $context, $blocks);
        // line 11
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 20
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 30
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 37
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 41
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 49
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 58
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 78
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 91
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 95
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 99
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 112
        $this->displayBlock('date_widget', $context, $blocks);
        // line 126
        $this->displayBlock('time_widget', $context, $blocks);
        // line 137
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 172
        $this->displayBlock('number_widget', $context, $blocks);
        // line 178
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 183
        $this->displayBlock('money_widget', $context, $blocks);
        // line 187
        $this->displayBlock('url_widget', $context, $blocks);
        // line 192
        $this->displayBlock('search_widget', $context, $blocks);
        // line 197
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 202
        $this->displayBlock('password_widget', $context, $blocks);
        // line 207
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 212
        $this->displayBlock('email_widget', $context, $blocks);
        // line 217
        $this->displayBlock('range_widget', $context, $blocks);
        // line 222
        $this->displayBlock('button_widget', $context, $blocks);
        // line 238
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 243
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 248
        $this->displayBlock('tel_widget', $context, $blocks);
        // line 253
        $this->displayBlock('color_widget', $context, $blocks);
        // line 260
        $this->displayBlock('form_label', $context, $blocks);
        // line 288
        $this->displayBlock('button_label', $context, $blocks);
        // line 291
        echo "
";
        // line 292
        $this->displayBlock('form_help', $context, $blocks);
        // line 304
        echo "
";
        // line 307
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 315
        $this->displayBlock('form_row', $context, $blocks);
        // line 328
        $this->displayBlock('button_row', $context, $blocks);
        // line 334
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 340
        $this->displayBlock('form', $context, $blocks);
        // line 346
        $this->displayBlock('form_start', $context, $blocks);
        // line 360
        $this->displayBlock('form_end', $context, $blocks);
        // line 367
        $this->displayBlock('form_errors', $context, $blocks);
        // line 377
        $this->displayBlock('form_rest', $context, $blocks);
        // line 398
        echo "
";
        // line 401
        $this->displayBlock('form_rows', $context, $blocks);
        // line 407
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 414
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 419
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 424
        $this->displayBlock('attributes', $context, $blocks);
    }

    // line 3
    public function block_form_widget($context, array $blocks = [])
    {
        // line 4
        if (($context["compound"] ?? null)) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = [])
    {
        // line 12
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "text")) : ("text"));
        // line 13
        if (((($context["type"] ?? null) == "range") || (($context["type"] ?? null) == "color"))) {
            // line 15
            $context["required"] = false;
        }
        // line 17
        echo "<input type=\"";
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty(($context["value"] ?? null))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" ";
        }
        echo "/>";
    }

    // line 20
    public function block_form_widget_compound($context, array $blocks = [])
    {
        // line 21
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 22
        if (Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? null))) {
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        }
        // line 25
        $this->displayBlock("form_rows", $context, $blocks);
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        // line 27
        echo "</div>";
    }

    // line 30
    public function block_collection_widget($context, array $blocks = [])
    {
        // line 31
        if (((isset($context["prototype"]) || array_key_exists("prototype", $context)) &&  !twig_get_attribute($this->env, $this->source, ($context["prototype"] ?? null), "rendered", []))) {
            // line 32
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["prototype"] ?? null), 'row')]);
        }
        // line 34
        $this->displayBlock("form_widget", $context, $blocks);
    }

    // line 37
    public function block_textarea_widget($context, array $blocks = [])
    {
        // line 38
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
        echo "</textarea>";
    }

    // line 41
    public function block_choice_widget($context, array $blocks = [])
    {
        // line 42
        if (($context["expanded"] ?? null)) {
            // line 43
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 45
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
    }

    // line 49
    public function block_choice_widget_expanded($context, array $blocks = [])
    {
        // line 50
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 52
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            // line 53
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label', ["translation_domain" => ($context["choice_translation_domain"] ?? null)]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "</div>";
    }

    // line 58
    public function block_choice_widget_collapsed($context, array $blocks = [])
    {
        // line 59
        if (((((($context["required"] ?? null) && (null === ($context["placeholder"] ?? null))) &&  !($context["placeholder_in_choices"] ?? null)) &&  !($context["multiple"] ?? null)) && ( !twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "size", [], "any", true, true) || (twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "size", []) <= 1)))) {
            // line 60
            $context["required"] = false;
        }
        // line 62
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? null)) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 63
        if ( !(null === ($context["placeholder"] ?? null))) {
            // line 64
            echo "<option value=\"\"";
            if ((($context["required"] ?? null) && twig_test_empty(($context["value"] ?? null)))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            (((($context["placeholder"] ?? null) != "")) ? (print (twig_escape_filter($this->env, (((($context["translation_domain"] ?? null) === false)) ? (($context["placeholder"] ?? null)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["placeholder"] ?? null), [], ($context["translation_domain"] ?? null)))), "html", null, true))) : (print ("")));
            echo "</option>";
        }
        // line 66
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? null)) > 0)) {
            // line 67
            $context["options"] = ($context["preferred_choices"] ?? null);
            // line 68
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 69
            if (((twig_length_filter($this->env, ($context["choices"] ?? null)) > 0) &&  !(null === ($context["separator"] ?? null)))) {
                // line 70
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? null), "html", null, true);
                echo "</option>";
            }
        }
        // line 73
        $context["options"] = ($context["choices"] ?? null);
        // line 74
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 75
        echo "</select>";
    }

    // line 78
    public function block_choice_widget_options($context, array $blocks = [])
    {
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
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
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 80
            if (twig_test_iterable($context["choice"])) {
                // line 81
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, (((($context["choice_translation_domain"] ?? null) === false)) ? ($context["group_label"]) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["group_label"], [], ($context["choice_translation_domain"] ?? null)))), "html", null, true);
                echo "\">
                ";
                // line 82
                $context["options"] = $context["choice"];
                // line 83
                $this->displayBlock("choice_widget_options", $context, $blocks);
                // line 84
                echo "</optgroup>";
            } else {
                // line 86
                echo "<option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["choice"], "value", []), "html", null, true);
                echo "\"";
                if (twig_get_attribute($this->env, $this->source, $context["choice"], "attr", [])) {
                    $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ["attr" => twig_get_attribute($this->env, $this->source, $context["choice"], "attr", [])];
                    if (!twig_test_iterable($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4)) {
                        throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 86, $this->getSourceContext());
                    }
                    $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_to_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4);
                    $context['_parent'] = $context;
                    $context = $this->env->mergeGlobals(array_merge($context, $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4));
                    $this->displayBlock("attributes", $context, $blocks);
                    $context = $context['_parent'];
                }
                if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], ($context["value"] ?? null))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, (((($context["choice_translation_domain"] ?? null) === false)) ? (twig_get_attribute($this->env, $this->source, $context["choice"], "label", [])) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["choice"], "label", []), [], ($context["choice_translation_domain"] ?? null)))), "html", null, true);
                echo "</option>";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 91
    public function block_checkbox_widget($context, array $blocks = [])
    {
        // line 92
        echo "<input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["value"]) || array_key_exists("value", $context))) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " />";
    }

    // line 95
    public function block_radio_widget($context, array $blocks = [])
    {
        // line 96
        echo "<input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["value"]) || array_key_exists("value", $context))) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " />";
    }

    // line 99
    public function block_datetime_widget($context, array $blocks = [])
    {
        // line 100
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 101
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 103
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 104
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", []), 'errors');
            // line 105
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", []), 'errors');
            // line 106
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", []), 'widget');
            // line 107
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", []), 'widget');
            // line 108
            echo "</div>";
        }
    }

    // line 112
    public function block_date_widget($context, array $blocks = [])
    {
        // line 113
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 114
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 116
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 117
            echo twig_replace_filter(($context["date_pattern"] ?? null), ["{{ year }}" =>             // line 118
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "year", []), 'widget'), "{{ month }}" =>             // line 119
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "month", []), 'widget'), "{{ day }}" =>             // line 120
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "day", []), 'widget')]);
            // line 122
            echo "</div>";
        }
    }

    // line 126
    public function block_time_widget($context, array $blocks = [])
    {
        // line 127
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 128
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 130
            $context["vars"] = (((($context["widget"] ?? null) == "text")) ? (["attr" => ["size" => 1]]) : ([]));
            // line 131
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 132
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hour", []), 'widget', ($context["vars"] ?? null));
            if (($context["with_minutes"] ?? null)) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "minute", []), 'widget', ($context["vars"] ?? null));
            }
            if (($context["with_seconds"] ?? null)) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "second", []), 'widget', ($context["vars"] ?? null));
            }
            // line 133
            echo "        </div>";
        }
    }

    // line 137
    public function block_dateinterval_widget($context, array $blocks = [])
    {
        // line 138
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 139
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 141
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 142
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            // line 143
            echo "<table class=\"";
            echo twig_escape_filter($this->env, (((isset($context["table_class"]) || array_key_exists("table_class", $context))) ? (_twig_default_filter(($context["table_class"] ?? null), "")) : ("")), "html", null, true);
            echo "\" role=\"presentation\">
                <thead>
                    <tr>";
            // line 146
            if (($context["with_years"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "years", []), 'label');
                echo "</th>";
            }
            // line 147
            if (($context["with_months"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "months", []), 'label');
                echo "</th>";
            }
            // line 148
            if (($context["with_weeks"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "weeks", []), 'label');
                echo "</th>";
            }
            // line 149
            if (($context["with_days"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "days", []), 'label');
                echo "</th>";
            }
            // line 150
            if (($context["with_hours"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hours", []), 'label');
                echo "</th>";
            }
            // line 151
            if (($context["with_minutes"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "minutes", []), 'label');
                echo "</th>";
            }
            // line 152
            if (($context["with_seconds"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "seconds", []), 'label');
                echo "</th>";
            }
            // line 153
            echo "</tr>
                </thead>
                <tbody>
                    <tr>";
            // line 157
            if (($context["with_years"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "years", []), 'widget');
                echo "</td>";
            }
            // line 158
            if (($context["with_months"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "months", []), 'widget');
                echo "</td>";
            }
            // line 159
            if (($context["with_weeks"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "weeks", []), 'widget');
                echo "</td>";
            }
            // line 160
            if (($context["with_days"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "days", []), 'widget');
                echo "</td>";
            }
            // line 161
            if (($context["with_hours"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hours", []), 'widget');
                echo "</td>";
            }
            // line 162
            if (($context["with_minutes"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "minutes", []), 'widget');
                echo "</td>";
            }
            // line 163
            if (($context["with_seconds"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "seconds", []), 'widget');
                echo "</td>";
            }
            // line 164
            echo "</tr>
                </tbody>
            </table>";
            // line 167
            if (($context["with_invert"] ?? null)) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "invert", []), 'widget');
            }
            // line 168
            echo "</div>";
        }
    }

    // line 172
    public function block_number_widget($context, array $blocks = [])
    {
        // line 174
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "text")) : ("text"));
        // line 175
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 178
    public function block_integer_widget($context, array $blocks = [])
    {
        // line 179
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "number")) : ("number"));
        // line 180
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 183
    public function block_money_widget($context, array $blocks = [])
    {
        // line 184
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, ($context["money_pattern"] ?? null),         $this->renderBlock("form_widget_simple", $context, $blocks));
    }

    // line 187
    public function block_url_widget($context, array $blocks = [])
    {
        // line 188
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "url")) : ("url"));
        // line 189
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 192
    public function block_search_widget($context, array $blocks = [])
    {
        // line 193
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "search")) : ("search"));
        // line 194
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 197
    public function block_percent_widget($context, array $blocks = [])
    {
        // line 198
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "text")) : ("text"));
        // line 199
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
    }

    // line 202
    public function block_password_widget($context, array $blocks = [])
    {
        // line 203
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "password")) : ("password"));
        // line 204
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 207
    public function block_hidden_widget($context, array $blocks = [])
    {
        // line 208
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "hidden")) : ("hidden"));
        // line 209
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 212
    public function block_email_widget($context, array $blocks = [])
    {
        // line 213
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "email")) : ("email"));
        // line 214
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 217
    public function block_range_widget($context, array $blocks = [])
    {
        // line 218
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "range")) : ("range"));
        // line 219
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 222
    public function block_button_widget($context, array $blocks = [])
    {
        // line 223
        if (twig_test_empty(($context["label"] ?? null))) {
            // line 224
            if ( !twig_test_empty(($context["label_format"] ?? null))) {
                // line 225
                $context["label"] = twig_replace_filter(($context["label_format"] ?? null), ["%name%" =>                 // line 226
($context["name"] ?? null), "%id%" =>                 // line 227
($context["id"] ?? null)]);
            } elseif ((            // line 229
($context["label"] ?? null) === false)) {
                // line 230
                $context["translation_domain"] = false;
            } else {
                // line 232
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
            }
        }
        // line 235
        echo "<button type=\"";
        echo twig_escape_filter($this->env, (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), [], ($context["translation_domain"] ?? null)))), "html", null, true);
        echo "</button>";
    }

    // line 238
    public function block_submit_widget($context, array $blocks = [])
    {
        // line 239
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "submit")) : ("submit"));
        // line 240
        $this->displayBlock("button_widget", $context, $blocks);
    }

    // line 243
    public function block_reset_widget($context, array $blocks = [])
    {
        // line 244
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "reset")) : ("reset"));
        // line 245
        $this->displayBlock("button_widget", $context, $blocks);
    }

    // line 248
    public function block_tel_widget($context, array $blocks = [])
    {
        // line 249
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "tel")) : ("tel"));
        // line 250
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 253
    public function block_color_widget($context, array $blocks = [])
    {
        // line 254
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "color")) : ("color"));
        // line 255
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 260
    public function block_form_label($context, array $blocks = [])
    {
        // line 261
        if ( !(($context["label"] ?? null) === false)) {
            // line 262
            if ( !($context["compound"] ?? null)) {
                // line 263
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["for" => ($context["id"] ?? null)]);
            }
            // line 265
            if (($context["required"] ?? null)) {
                // line 266
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", []), "")) : ("")) . " required"))]);
            }
            // line 268
            if (twig_test_empty(($context["label"] ?? null))) {
                // line 269
                if ( !twig_test_empty(($context["label_format"] ?? null))) {
                    // line 270
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? null), ["%name%" =>                     // line 271
($context["name"] ?? null), "%id%" =>                     // line 272
($context["id"] ?? null)]);
                } else {
                    // line 275
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                }
            }
            // line 278
            echo "<";
            echo twig_escape_filter($this->env, (((isset($context["element"]) || array_key_exists("element", $context))) ? (_twig_default_filter(($context["element"] ?? null), "label")) : ("label")), "html", null, true);
            if (($context["label_attr"] ?? null)) {
                $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ["attr" => ($context["label_attr"] ?? null)];
                if (!twig_test_iterable($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144)) {
                    throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 278, $this->getSourceContext());
                }
                $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_to_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144);
                $context['_parent'] = $context;
                $context = $this->env->mergeGlobals(array_merge($context, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144));
                $this->displayBlock("attributes", $context, $blocks);
                $context = $context['_parent'];
            }
            echo ">";
            // line 279
            if ((($context["translation_domain"] ?? null) === false)) {
                // line 280
                echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            } else {
                // line 282
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), [], ($context["translation_domain"] ?? null)), "html", null, true);
            }
            // line 284
            echo "</";
            echo twig_escape_filter($this->env, (((isset($context["element"]) || array_key_exists("element", $context))) ? (_twig_default_filter(($context["element"] ?? null), "label")) : ("label")), "html", null, true);
            echo ">";
        }
    }

    // line 288
    public function block_button_label($context, array $blocks = [])
    {
    }

    // line 292
    public function block_form_help($context, array $blocks = [])
    {
        // line 293
        if ( !twig_test_empty(($context["help"] ?? null))) {
            // line 294
            $context["help_attr"] = twig_array_merge(($context["help_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", []), "")) : ("")) . " help-text"))]);
            // line 295
            echo "<p id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "_help\"";
            $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ["attr" => ($context["help_attr"] ?? null)];
            if (!twig_test_iterable($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 295, $this->getSourceContext());
            }
            $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_to_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b);
            $context['_parent'] = $context;
            $context = $this->env->mergeGlobals(array_merge($context, $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b));
            $this->displayBlock("attributes", $context, $blocks);
            $context = $context['_parent'];
            echo ">";
            // line 296
            if ((($context["translation_domain"] ?? null) === false)) {
                // line 297
                echo twig_escape_filter($this->env, ($context["help"] ?? null), "html", null, true);
            } else {
                // line 299
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["help"] ?? null), [], ($context["translation_domain"] ?? null)), "html", null, true);
            }
            // line 301
            echo "</p>";
        }
    }

    // line 307
    public function block_repeated_row($context, array $blocks = [])
    {
        // line 312
        $this->displayBlock("form_rows", $context, $blocks);
    }

    // line 315
    public function block_form_row($context, array $blocks = [])
    {
        // line 316
        $context["widget_attr"] = [];
        // line 317
        if ( !twig_test_empty(($context["help"] ?? null))) {
            // line 318
            $context["widget_attr"] = ["attr" => ["aria-describedby" => (($context["id"] ?? null) . "_help")]];
        }
        // line 320
        echo "<div>";
        // line 321
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 322
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 323
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ($context["widget_attr"] ?? null));
        // line 324
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
        // line 325
        echo "</div>";
    }

    // line 328
    public function block_button_row($context, array $blocks = [])
    {
        // line 329
        echo "<div>";
        // line 330
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 331
        echo "</div>";
    }

    // line 334
    public function block_hidden_row($context, array $blocks = [])
    {
        // line 335
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
    }

    // line 340
    public function block_form($context, array $blocks = [])
    {
        // line 341
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        // line 342
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 343
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
    }

    // line 346
    public function block_form_start($context, array $blocks = [])
    {
        // line 347
        twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "setMethodRendered", [], "method");
        // line 348
        $context["method"] = twig_upper_filter($this->env, ($context["method"] ?? null));
        // line 349
        if (twig_in_filter(($context["method"] ?? null), [0 => "GET", 1 => "POST"])) {
            // line 350
            $context["form_method"] = ($context["method"] ?? null);
        } else {
            // line 352
            $context["form_method"] = "POST";
        }
        // line 354
        echo "<form";
        if ((($context["name"] ?? null) != "")) {
            echo " name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\"";
        }
        echo " method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["form_method"] ?? null)), "html", null, true);
        echo "\"";
        if ((($context["action"] ?? null) != "")) {
            echo " action=\"";
            echo twig_escape_filter($this->env, ($context["action"] ?? null), "html", null, true);
            echo "\"";
        }
        $this->displayBlock("attributes", $context, $blocks);
        if (($context["multipart"] ?? null)) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 355
        if ((($context["form_method"] ?? null) != ($context["method"] ?? null))) {
            // line 356
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, ($context["method"] ?? null), "html", null, true);
            echo "\" />";
        }
    }

    // line 360
    public function block_form_end($context, array $blocks = [])
    {
        // line 361
        if (( !(isset($context["render_rest"]) || array_key_exists("render_rest", $context)) || ($context["render_rest"] ?? null))) {
            // line 362
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        }
        // line 364
        echo "</form>";
    }

    // line 367
    public function block_form_errors($context, array $blocks = [])
    {
        // line 368
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 369
            echo "<ul>";
            // line 370
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 371
                echo "<li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", []), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 373
            echo "</ul>";
        }
    }

    // line 377
    public function block_form_rest($context, array $blocks = [])
    {
        // line 378
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 379
            if ( !twig_get_attribute($this->env, $this->source, $context["child"], "rendered", [])) {
                // line 380
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 384
        if (( !twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "methodRendered", []) && Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? null)))) {
            // line 385
            twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "setMethodRendered", [], "method");
            // line 386
            $context["method"] = twig_upper_filter($this->env, ($context["method"] ?? null));
            // line 387
            if (twig_in_filter(($context["method"] ?? null), [0 => "GET", 1 => "POST"])) {
                // line 388
                $context["form_method"] = ($context["method"] ?? null);
            } else {
                // line 390
                $context["form_method"] = "POST";
            }
            // line 393
            if ((($context["form_method"] ?? null) != ($context["method"] ?? null))) {
                // line 394
                echo "<input type=\"hidden\" name=\"_method\" value=\"";
                echo twig_escape_filter($this->env, ($context["method"] ?? null), "html", null, true);
                echo "\" />";
            }
        }
    }

    // line 401
    public function block_form_rows($context, array $blocks = [])
    {
        // line 402
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            if ( !twig_get_attribute($this->env, $this->source, $context["child"], "rendered", [])) {
                // line 403
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 407
    public function block_widget_attributes($context, array $blocks = [])
    {
        // line 408
        echo "id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
        echo "\"";
        // line 409
        if (($context["disabled"] ?? null)) {
            echo " disabled=\"disabled\"";
        }
        // line 410
        if (($context["required"] ?? null)) {
            echo " required=\"required\"";
        }
        // line 411
        $this->displayBlock("attributes", $context, $blocks);
    }

    // line 414
    public function block_widget_container_attributes($context, array $blocks = [])
    {
        // line 415
        if ( !twig_test_empty(($context["id"] ?? null))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\"";
        }
        // line 416
        $this->displayBlock("attributes", $context, $blocks);
    }

    // line 419
    public function block_button_attributes($context, array $blocks = [])
    {
        // line 420
        echo "id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
        echo "\"";
        if (($context["disabled"] ?? null)) {
            echo " disabled=\"disabled\"";
        }
        // line 421
        $this->displayBlock("attributes", $context, $blocks);
    }

    // line 424
    public function block_attributes($context, array $blocks = [])
    {
        // line 425
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 426
            echo " ";
            // line 427
            if (twig_in_filter($context["attrname"], [0 => "placeholder", 1 => "title"])) {
                // line 428
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? null) === false)) ? ($context["attrvalue"]) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["attrvalue"], [], ($context["translation_domain"] ?? null)))), "html", null, true);
                echo "\"";
            } elseif ((            // line 429
$context["attrvalue"] === true)) {
                // line 430
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 431
$context["attrvalue"] === false)) {
                // line 432
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1178 => 432,  1176 => 431,  1171 => 430,  1169 => 429,  1164 => 428,  1162 => 427,  1160 => 426,  1156 => 425,  1153 => 424,  1149 => 421,  1140 => 420,  1137 => 419,  1133 => 416,  1127 => 415,  1124 => 414,  1120 => 411,  1116 => 410,  1112 => 409,  1106 => 408,  1103 => 407,  1094 => 403,  1089 => 402,  1086 => 401,  1078 => 394,  1076 => 393,  1073 => 390,  1070 => 388,  1068 => 387,  1066 => 386,  1064 => 385,  1062 => 384,  1055 => 380,  1053 => 379,  1049 => 378,  1046 => 377,  1041 => 373,  1033 => 371,  1029 => 370,  1027 => 369,  1025 => 368,  1022 => 367,  1018 => 364,  1015 => 362,  1013 => 361,  1010 => 360,  1003 => 356,  1001 => 355,  981 => 354,  978 => 352,  975 => 350,  973 => 349,  971 => 348,  969 => 347,  966 => 346,  962 => 343,  960 => 342,  958 => 341,  955 => 340,  951 => 335,  948 => 334,  944 => 331,  942 => 330,  940 => 329,  937 => 328,  933 => 325,  931 => 324,  929 => 323,  927 => 322,  925 => 321,  923 => 320,  920 => 318,  918 => 317,  916 => 316,  913 => 315,  909 => 312,  906 => 307,  901 => 301,  898 => 299,  895 => 297,  893 => 296,  879 => 295,  877 => 294,  875 => 293,  872 => 292,  867 => 288,  860 => 284,  857 => 282,  854 => 280,  852 => 279,  837 => 278,  833 => 275,  830 => 272,  829 => 271,  828 => 270,  826 => 269,  824 => 268,  821 => 266,  819 => 265,  816 => 263,  814 => 262,  812 => 261,  809 => 260,  805 => 255,  803 => 254,  800 => 253,  796 => 250,  794 => 249,  791 => 248,  787 => 245,  785 => 244,  782 => 243,  778 => 240,  776 => 239,  773 => 238,  763 => 235,  759 => 232,  756 => 230,  754 => 229,  752 => 227,  751 => 226,  750 => 225,  748 => 224,  746 => 223,  743 => 222,  739 => 219,  737 => 218,  734 => 217,  730 => 214,  728 => 213,  725 => 212,  721 => 209,  719 => 208,  716 => 207,  712 => 204,  710 => 203,  707 => 202,  702 => 199,  700 => 198,  697 => 197,  693 => 194,  691 => 193,  688 => 192,  684 => 189,  682 => 188,  679 => 187,  675 => 184,  672 => 183,  668 => 180,  666 => 179,  663 => 178,  659 => 175,  657 => 174,  654 => 172,  649 => 168,  645 => 167,  641 => 164,  635 => 163,  629 => 162,  623 => 161,  617 => 160,  611 => 159,  605 => 158,  599 => 157,  594 => 153,  588 => 152,  582 => 151,  576 => 150,  570 => 149,  564 => 148,  558 => 147,  552 => 146,  546 => 143,  544 => 142,  540 => 141,  537 => 139,  535 => 138,  532 => 137,  527 => 133,  517 => 132,  512 => 131,  510 => 130,  507 => 128,  505 => 127,  502 => 126,  497 => 122,  495 => 120,  494 => 119,  493 => 118,  492 => 117,  488 => 116,  485 => 114,  483 => 113,  480 => 112,  475 => 108,  473 => 107,  471 => 106,  469 => 105,  467 => 104,  463 => 103,  460 => 101,  458 => 100,  455 => 99,  441 => 96,  438 => 95,  424 => 92,  421 => 91,  385 => 86,  382 => 84,  380 => 83,  378 => 82,  373 => 81,  371 => 80,  354 => 79,  351 => 78,  347 => 75,  345 => 74,  343 => 73,  337 => 70,  335 => 69,  333 => 68,  331 => 67,  329 => 66,  320 => 64,  318 => 63,  311 => 62,  308 => 60,  306 => 59,  303 => 58,  299 => 55,  293 => 53,  291 => 52,  287 => 51,  283 => 50,  280 => 49,  275 => 45,  272 => 43,  270 => 42,  267 => 41,  259 => 38,  256 => 37,  252 => 34,  249 => 32,  247 => 31,  244 => 30,  240 => 27,  238 => 26,  236 => 25,  233 => 23,  231 => 22,  227 => 21,  224 => 20,  210 => 17,  207 => 15,  205 => 13,  203 => 12,  200 => 11,  195 => 7,  192 => 5,  190 => 4,  187 => 3,  183 => 424,  181 => 419,  179 => 414,  177 => 407,  175 => 401,  172 => 398,  170 => 377,  168 => 367,  166 => 360,  164 => 346,  162 => 340,  160 => 334,  158 => 328,  156 => 315,  154 => 307,  151 => 304,  149 => 292,  146 => 291,  144 => 288,  142 => 260,  140 => 253,  138 => 248,  136 => 243,  134 => 238,  132 => 222,  130 => 217,  128 => 212,  126 => 207,  124 => 202,  122 => 197,  120 => 192,  118 => 187,  116 => 183,  114 => 178,  112 => 172,  110 => 137,  108 => 126,  106 => 112,  104 => 99,  102 => 95,  100 => 91,  98 => 78,  96 => 58,  94 => 49,  92 => 41,  90 => 37,  88 => 30,  86 => 20,  84 => 11,  82 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "form_div_layout.html.twig", "/opt/lampp/htdocs/Symfony-heroku/vendor/symfony/twig-bridge/Resources/views/Form/form_div_layout.html.twig");
    }
}
