<?php

/* admin/listeMembresAdmin.html.twig */
class __TwigTemplate_b0a32ee68634f13d373f17d6a8a528c4c4a6dcfeb3cf78b636bb747f75a49d40 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("/dashboard-layout.html.twig", "admin/listeMembresAdmin.html.twig", 2);
        $this->blocks = [
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'pageactuelle' => [$this, 'block_pageactuelle'],
            'body' => [$this, 'block_body'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "/dashboard-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/listeMembresAdmin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/listeMembresAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 6
        echo "
\t<!-- Specific Page Vendor CSS -->
\t<link rel=\"stylesheet\" href=\"assets/vendor/pnotify/pnotify.custom.css\" />
  <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/static/js/app.css"), "html", null, true);
        echo "\"/>
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 13
        echo "\t\t\t\t<h2>Membres</h2>
\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_pageactuelle($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageactuelle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageactuelle"));

        echo "Espace admin : Membres";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "\t\t\t\t\t\t\t
<section class=\"panel panel-featured-left panel-featured-quartenary\">
\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-summary\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-summary-col widget-summary-col-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"summary-icon bg-quartenary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-summary-col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"summary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"title\">Nombre total de membres</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong class=\"amount\">";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["nbUsers"]) || array_key_exists("nbUsers", $context) ? $context["nbUsers"] : (function () { throw new Twig_Error_Runtime('Variable "nbUsers" does not exist.', 32, $this->source); })()), "html", null, true);
        echo "</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</section>

\t\t\t\t\t\t\t\t\t<h3> Créer un nouveau membre </h3>
\t\t\t\t\t\t\t\t\t";
        // line 48
        echo "\t\t\t\t\t\t\t\t\t\t<h3 class=\"panel-title\">Supprimer un utilisateur </h3>
\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 50
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->source); })()), 'form_start');
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 51, $this->source); })()), "removeName", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md", "placeholder" => "Identifiant"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"mb-xs mt-xs mr-xs btn btn-lg btn-default\" type=\"submit\">Supprimer</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   ";
        // line 53
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->source); })()), 'form_end');
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t<h3> Rechercher un membre </h3>

\t\t<div id=\"listeMembre\" data-items=\"";
        // line 57
        echo twig_escape_filter($this->env, json_encode((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 57, $this->source); })())), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t
\t\t
    \t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t
    \t\t\t\t\t\t\t</div>
\t<div class=\"row\">
\t<div>
\t
\t\t\t
\t</div>
\t\t
\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div> 

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 76
    public function block_javascript($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 77
        echo "\t<!-- Specific Page Vendor -->
\t\t<script src=\"assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js\"></script>
\t\t<script src=\"assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js\"></script>
\t\t<script src=\"assets/vendor/store-js/store.js\"></script>
\t 
\t\t<script type=\"text/javascript\" src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/static/js/listeMembre.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/static/js/indexMembre.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/static/js/runtime.js"), "html", null, true);
        echo "\"></script>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/listeMembresAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 84,  216 => 83,  212 => 82,  205 => 77,  196 => 76,  168 => 57,  161 => 53,  156 => 51,  152 => 50,  148 => 48,  136 => 32,  121 => 19,  112 => 18,  94 => 16,  83 => 13,  74 => 12,  62 => 9,  57 => 6,  48 => 5,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"/dashboard-layout.html.twig\" %}


\t{% block head %}

\t<!-- Specific Page Vendor CSS -->
\t<link rel=\"stylesheet\" href=\"assets/vendor/pnotify/pnotify.custom.css\" />
  <link rel=\"stylesheet\" href=\"{{ asset('resources/static/js/app.css') }}\"/>
\t{% endblock %}

\t\t\t\t{% block title %}
\t\t\t\t<h2>Membres</h2>
\t\t\t\t{% endblock %}

\t\t\t\t{% block pageactuelle %}Espace admin : Membres{% endblock %}

    {% block body %}
\t\t\t\t\t\t\t
<section class=\"panel panel-featured-left panel-featured-quartenary\">
\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-summary\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-summary-col widget-summary-col-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"summary-icon bg-quartenary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-summary-col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"summary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"title\">Nombre total de membres</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong class=\"amount\">{{nbUsers}}</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</section>

\t\t\t\t\t\t\t\t\t<h3> Créer un nouveau membre </h3>
\t\t\t\t\t\t\t\t\t{# {{ form_start(form-create) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_row(form.username, {'attr': {'class': 'form-control input-lg mb-md', 'placeholder': 'Identifiant'}} ) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_row(form.email, {'attr': {'class': 'form-control input-lg mb-md', 'placeholder': 'Adresse e-mail'}} ) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_row(form.plainPassword.first, {'attr': {'class': 'form-control input-lg mb-md', 'placeholder': 'Mot de passe'}} ) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_row(form.plainPassword.second, {'attr': {'class': 'form-control input-lg mb-md', 'placeholder': 'Confirmer le mot de passe'}} ) }}
\t\t\t\t\t\t\t\t\t\t\t<button class=\"mb-xs mt-xs mr-xs btn btn-lg btn-default\" type=\"submit\">Créer</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   {{ form_end(form-create) }} #}
\t\t\t\t\t\t\t\t\t\t<h3 class=\"panel-title\">Supprimer un utilisateur </h3>
\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_start(form) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_row(form.removeName, {'attr': {'class': 'form-control input-lg mb-md', 'placeholder': 'Identifiant'}} ) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"mb-xs mt-xs mr-xs btn btn-lg btn-default\" type=\"submit\">Supprimer</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   {{ form_end(form) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t<h3> Rechercher un membre </h3>

\t\t<div id=\"listeMembre\" data-items=\"{{ data|json_encode }}\">
\t\t\t\t\t\t\t\t\t
\t\t
    \t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t
    \t\t\t\t\t\t\t</div>
\t<div class=\"row\">
\t<div>
\t
\t\t\t
\t</div>
\t\t
\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div> 

    {% endblock %}

    {% block javascript %}
\t<!-- Specific Page Vendor -->
\t\t<script src=\"assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js\"></script>
\t\t<script src=\"assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js\"></script>
\t\t<script src=\"assets/vendor/store-js/store.js\"></script>
\t 
\t\t<script type=\"text/javascript\" src=\"{{ asset('resources/static/js/listeMembre.js') }}\"></script>
\t\t<script type=\"text/javascript\" src=\"{{ asset('resources/static/js/indexMembre.js') }}\"></script>
\t\t<script type=\"text/javascript\" src=\"{{ asset('resources/static/js/runtime.js') }}\"></script>

    {% endblock %}", "admin/listeMembresAdmin.html.twig", "/opt/lampp/htdocs/TER/templates/admin/listeMembresAdmin.html.twig");
    }
}
