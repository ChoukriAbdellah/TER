<?php

/* dashboard/estimation.html.twig */
class __TwigTemplate_8fc619df0eed4b7ac9072c1b520db75fde19967ecaf9899cfd753869931bdb93 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("dashboard/index.html.twig", "dashboard/estimation.html.twig", 1);
        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "dashboard/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dashboard/estimation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dashboard/estimation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t<section class=\"panel form-wizard\" id=\"w4\">
\t\t\t\t\t\t\t\t\t<header class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-caret-down\"></a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-times\"></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Nouvelle estimation</h2>
\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"wizard-progress wizard-progress-lg\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"steps-progress\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-indicator\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"wizard-steps\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#w4-account\" data-toggle=\"tab\"><span>1</span>Gros Oeuvre</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#w4-profile\" data-toggle=\"tab\"><span>2</span>Second Oeuvre</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#w4-billing\" data-toggle=\"tab\"><span>3</span>...</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#w4-confirm\" data-toggle=\"tab\"><span>4</span>Confirmation</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<form class=\"form-horizontal\" novalidate=\"novalidate\">
                                         <h1> Etude de sol </h1>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"w4-account\" class=\"tab-pane active\">
                                                   
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"w4-username\">Type de sol</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"sol\" id=\"w4-username\" required> 
                                                            <option value=\"sol-argileux\">SOL ARGILEUX</option>
                                                            <option value=\"sol-calcaire\">SOL CALCAIRE</option>
                                                            <option value=\"sol-humifere\">SOL HUMIFÈRE</option>
                                                            <option value=\"sol-limoneux\">SOL LIMONEUX</option>
                                                            <option value=\"sol-sableux\">SOL SABLEUX</option>
                                                            </select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"w4-password\">Nombre d'arbres sur le terrain</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" class=\"form-control\" name=\"password\" id=\"w4-password\" required minlength=\"6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"w4-profile\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"w4-first-name\">First Name</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"first-name\" id=\"w4-first-name\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"w4-last-name\">Last Name</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"last-name\" id=\"w4-last-name\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"w4-billing\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"w4-cc\">Card Number</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"cc-number\" id=\"w4-cc\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"inputSuccess\">Expiration</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"exp-month\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>January</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>February</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>March</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>April</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>May</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>June</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>July</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>August</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>September</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>October</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>November</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>December</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"exp-year\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>2014</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>2015</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>2016</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>2017</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>2018</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>2019</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>2020</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>2021</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>2022</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"w4-confirm\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"w4-email\">Email</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"email\" id=\"w4-email\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox-custom\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"terms\" id=\"w4-terms\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"w4-terms\">I agree to the terms of service</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"pager\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"previous disabled\">
\t\t\t\t\t\t\t\t\t\t\t\t<a><i class=\"fa fa-angle-left\"></i> Précédent</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"finish hidden pull-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<a>Valider</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"next\">
\t\t\t\t\t\t\t\t\t\t\t\t<a>Suivant <i class=\"fa fa-angle-right\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 154
    public function block_javascript($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 155
        echo "
    \t<script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/jquery-validation/jquery.validate.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/bootstrap-wizard/jquery.bootstrap.wizard.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/pnotify/pnotify.custom.js"), "html", null, true);
        echo "\"></script>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/estimation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 158,  228 => 157,  224 => 156,  221 => 155,  212 => 154,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"dashboard/index.html.twig\" %}

    {% block body %}

\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t<section class=\"panel form-wizard\" id=\"w4\">
\t\t\t\t\t\t\t\t\t<header class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-caret-down\"></a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-times\"></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Nouvelle estimation</h2>
\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"wizard-progress wizard-progress-lg\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"steps-progress\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-indicator\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"wizard-steps\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#w4-account\" data-toggle=\"tab\"><span>1</span>Gros Oeuvre</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#w4-profile\" data-toggle=\"tab\"><span>2</span>Second Oeuvre</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#w4-billing\" data-toggle=\"tab\"><span>3</span>...</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#w4-confirm\" data-toggle=\"tab\"><span>4</span>Confirmation</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<form class=\"form-horizontal\" novalidate=\"novalidate\">
                                         <h1> Etude de sol </h1>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"w4-account\" class=\"tab-pane active\">
                                                   
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"w4-username\">Type de sol</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"sol\" id=\"w4-username\" required> 
                                                            <option value=\"sol-argileux\">SOL ARGILEUX</option>
                                                            <option value=\"sol-calcaire\">SOL CALCAIRE</option>
                                                            <option value=\"sol-humifere\">SOL HUMIFÈRE</option>
                                                            <option value=\"sol-limoneux\">SOL LIMONEUX</option>
                                                            <option value=\"sol-sableux\">SOL SABLEUX</option>
                                                            </select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"w4-password\">Nombre d'arbres sur le terrain</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" class=\"form-control\" name=\"password\" id=\"w4-password\" required minlength=\"6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"w4-profile\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"w4-first-name\">First Name</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"first-name\" id=\"w4-first-name\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"w4-last-name\">Last Name</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"last-name\" id=\"w4-last-name\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"w4-billing\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"w4-cc\">Card Number</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"cc-number\" id=\"w4-cc\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"inputSuccess\">Expiration</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"exp-month\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>January</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>February</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>March</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>April</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>May</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>June</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>July</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>August</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>September</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>October</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>November</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>December</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"exp-year\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>2014</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>2015</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>2016</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>2017</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>2018</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>2019</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>2020</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>2021</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>2022</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"w4-confirm\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"w4-email\">Email</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"email\" id=\"w4-email\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox-custom\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"terms\" id=\"w4-terms\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"w4-terms\">I agree to the terms of service</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"pager\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"previous disabled\">
\t\t\t\t\t\t\t\t\t\t\t\t<a><i class=\"fa fa-angle-left\"></i> Précédent</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"finish hidden pull-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<a>Valider</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"next\">
\t\t\t\t\t\t\t\t\t\t\t\t<a>Suivant <i class=\"fa fa-angle-right\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

    {% endblock %}

    {% block javascript %}

    \t<script src=\"{{ asset('resources/assets/vendor/jquery-validation/jquery.validate.js') }}\"></script>
\t\t<script src=\"{{ asset('resources/assets/vendor/bootstrap-wizard/jquery.bootstrap.wizard.js') }}\"></script>
\t\t<script src=\"{{ asset('resources/assets/vendor/pnotify/pnotify.custom.js') }}\"></script>

    {% endblock %}", "dashboard/estimation.html.twig", "/opt/lampp/htdocs/TER/templates/dashboard/estimation.html.twig");
    }
}
