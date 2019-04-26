<?php

/* admin/listePrix.html.twig */
class __TwigTemplate_3202672f5a8426ab160526af6dbc3fe206360e9a6036ecfde575d51285319455 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("/dashboard-layout.html.twig", "admin/listePrix.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        // line 4
        echo "
\t<!-- Specific Page Vendor CSS -->
\t<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/pnotify/pnotify.custom.css"), "html", null, true);
        echo "\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/select2/select2.css"), "html", null, true);
        echo "\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/jquery-datatables-bs3/assets/css/datatables.css"), "html", null, true);
        echo "\" />

\t";
    }

    // line 12
    public function block_title($context, array $blocks = [])
    {
        // line 13
        echo "\t\t\t\t<h2> Table des prix</h2>
\t\t\t\t";
    }

    // line 16
    public function block_pageactuelle($context, array $blocks = [])
    {
        echo " Table des prix ";
    }

    // line 18
    public function block_body($context, array $blocks = [])
    {
        // line 19
        echo "
\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t\t<header class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Table des prix</h2>
\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"mb-md\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutPrix");
        echo "\"> <button id=\"addToTable\" class=\"btn btn-primary\">Ajouter <i class=\"fa fa-plus\"></i></button> </a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<table class=\"table table-bordered table-striped mb-none\" id=\"datatable-editable\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
                                            <th>id </th>
\t\t\t\t\t\t\t\t\t\t\t<th>Nom de l'objet ou du facteur</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Prix</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Actions</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
                                        ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["liste"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 44
            echo "                                   
\t\t\t\t\t\t\t\t\t\t<tr class=\"gradeA\">
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "id", []), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "nom", []), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "montant", []), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"actions\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifPrix", ["id" => twig_get_attribute($this->env, $this->source, $context["e"], "id", [])]), "html", null, true);
            echo "\" class=\"on-default edit-row\"><i class=\"fa fa-pencil\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("suppPrix", ["id" => twig_get_attribute($this->env, $this->source, $context["e"], "id", [])]), "html", null, true);
            echo "\" class=\"on-default remove-row\"><i class=\"fa fa-trash-o\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</section>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"pager\">

\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

    ";
    }

    // line 75
    public function block_javascript($context, array $blocks = [])
    {
        // line 76
        echo "\t<!-- Specific Page Vendor -->
\t\t<script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/store-js/store.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/select2/select2.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/jquery-datatables/media/js/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/jquery-datatables-bs3/assets/js/datatables.js"), "html", null, true);
        echo "\"></script>

    ";
    }

    public function getTemplateName()
    {
        return "admin/listePrix.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 82,  183 => 81,  179 => 80,  175 => 79,  171 => 78,  167 => 77,  164 => 76,  161 => 75,  142 => 58,  130 => 52,  126 => 51,  120 => 48,  116 => 47,  112 => 46,  108 => 44,  104 => 43,  87 => 29,  75 => 19,  72 => 18,  66 => 16,  61 => 13,  58 => 12,  51 => 8,  47 => 7,  43 => 6,  39 => 4,  36 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/listePrix.html.twig", "/opt/lampp/htdocs/Symfony-heroku/templates/admin/listePrix.html.twig");
    }
}
