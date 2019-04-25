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

/* admin/listeProjetsAdmin.html.twig */
class __TwigTemplate_01886669d2099593a275692edcf7823568b534ee88901a0c51822a7ccafdd7ad extends \Twig\Template
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
        $this->parent = $this->loadTemplate("/dashboard-layout.html.twig", "admin/listeProjetsAdmin.html.twig", 2);
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
        echo "\t\t\t\t<h2>Liste Projets </h2>
\t\t\t\t";
    }

    // line 16
    public function block_pageactuelle($context, array $blocks = [])
    {
        echo "Admin: Projets  ";
    }

    // line 18
    public function block_body($context, array $blocks = [])
    {
        // line 19
        echo "\t\t\t\t\t\t\t
\t\t\t

\t\t\t<div id=\"listeProjet\"  data-items=\"";
        // line 22
        echo twig_escape_filter($this->env, json_encode(($context["data"] ?? null)), "html", null, true);
        echo "\">
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

    // line 38
    public function block_javascript($context, array $blocks = [])
    {
        // line 39
        echo "\t<!-- Specific Page Vendor -->
\t\t<script src=\"assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js\"></script>
\t\t<script src=\"assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js\"></script>
\t\t<script src=\"assets/vendor/store-js/store.js\"></script>
\t 
\t\t<script type=\"text/javascript\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/static/js/app.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/static/js/app2.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/static/js/runtime.js"), "html", null, true);
        echo "\"></script>

    ";
    }

    public function getTemplateName()
    {
        return "admin/listeProjetsAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 46,  117 => 45,  113 => 44,  106 => 39,  103 => 38,  84 => 22,  79 => 19,  76 => 18,  70 => 16,  65 => 13,  62 => 12,  56 => 9,  51 => 6,  48 => 5,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/listeProjetsAdmin.html.twig", "/opt/lampp/htdocs/Symfony-heroku/templates/admin/listeProjetsAdmin.html.twig");
    }
}
