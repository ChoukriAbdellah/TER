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

/* admin/listeMembresAdmin.html.twig */
class __TwigTemplate_6c5f053f897da18844ef801c20465e56721f79e3f6260beffdb41bc6ae6acc5e extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

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
        // line 2
        return "/dashboard-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("/dashboard-layout.html.twig", "admin/listeMembresAdmin.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        // line 6
        echo "
\t<!-- Specific Page Vendor CSS -->
\t<link rel=\"stylesheet\" href=\"assets/vendor/pnotify/pnotify.custom.css\" />
  <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/static/js/app.css"), "html", null, true);
        echo "\"/>
\t";
    }

    // line 12
    public function block_title($context, array $blocks = [])
    {
        // line 13
        echo "\t\t\t\t<h2>Membres</h2>
\t\t\t\t";
    }

    // line 16
    public function block_pageactuelle($context, array $blocks = [])
    {
        echo "Espace admin : Membres";
    }

    // line 18
    public function block_body($context, array $blocks = [])
    {
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
        echo twig_escape_filter($this->env, ($context["nbUsers"] ?? null), "html", null, true);
        echo "</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</section>

\t\t\t\t\t\t\t\t\t<h3> Créer un nouveau membre </h3>
\t\t\t\t\t\t\t\t\t";
        // line 41
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "username", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md", "placeholder" => "Identifiant"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md", "placeholder" => "Adresse e-mail"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", []), "first", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md", "placeholder" => "Mot de passe"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", []), "second", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md", "placeholder" => "Confirmer le mot de passe"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t<button class=\"mb-xs mt-xs mr-xs btn btn-lg btn-default\" type=\"submit\">Créer</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

\t\t\t\t\t\t\t\t\t<h3> Rechercher un membre </h3>

\t\t\t<div id=\"listeMembre\" data-select=\"\">
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
    }

    // line 67
    public function block_javascript($context, array $blocks = [])
    {
        // line 68
        echo "\t<!-- Specific Page Vendor -->
\t\t<script src=\"assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js\"></script>
\t\t<script src=\"assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js\"></script>
\t\t<script src=\"assets/vendor/store-js/store.js\"></script>
\t 
\t\t<script type=\"text/javascript\" src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/static/js/listeMembre.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/static/js/indexMembre.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/static/js/runtime.js"), "html", null, true);
        echo "\"></script>

    ";
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
        return array (  168 => 75,  164 => 74,  160 => 73,  153 => 68,  150 => 67,  127 => 47,  122 => 45,  118 => 44,  114 => 43,  110 => 42,  106 => 41,  94 => 32,  79 => 19,  76 => 18,  70 => 16,  65 => 13,  62 => 12,  56 => 9,  51 => 6,  48 => 5,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/listeMembresAdmin.html.twig", "/opt/lampp/htdocs/Symfony-heroku/templates/admin/listeMembresAdmin.html.twig");
    }
}
