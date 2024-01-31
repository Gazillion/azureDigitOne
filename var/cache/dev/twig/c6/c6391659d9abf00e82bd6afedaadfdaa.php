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

/* admin/blog/historique.html.twig */
class __TwigTemplate_cbfccce9ea72c93af71cf819cb7e21e2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'contenpage' => [$this, 'block_contenpage'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/bars.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/blog/historique.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/blog/historique.html.twig"));

        $this->parent = $this->loadTemplate("admin/bars.html.twig", "admin/blog/historique.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_contenpage($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenpage"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenpage"));

        // line 4
        echo "    <div class=\"\">
        <div class=\"page-title\">
            <div class=\"title_left\">
                <h5><a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_blogPosts");
        echo "\">Listing</a> >> <a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_edit_blogPosts", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["blogPost"]) || array_key_exists("blogPost", $context) ? $context["blogPost"] : (function () { throw new RuntimeError('Variable "blogPost" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7)]), "html", null, true);
        echo "\">Modifié blog</a> >> Historique  </h5>
            </div>
        </div>

        <div class=\"clearfix\"></div>

        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2>Historique des modification du post du blog</h2>
                        <ul class=\"nav navbar-right panel_toolbox\">
                        </ul>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                        <div class=\"row\">
                            <table id=\"example\" class=\"display table table-striped table-bordered datanotminetables\" >
                                <thead>
                                <th>Action</th>
                                <th>Date</th>
                                <th>";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.menu.user"), "html", null, true);
        echo "</th>
                                <th>Undo</th>
                                <th>Ancienne version</th>
                                </thead>
                                <tbody>
                                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["blogPost"]) || array_key_exists("blogPost", $context) ? $context["blogPost"] : (function () { throw new RuntimeError('Variable "blogPost" does not exist.', 33, $this->source); })()), "historiques", [], "any", false, false, false, 33));
        foreach ($context['_seq'] as $context["_key"] => $context["historique"]) {
            // line 34
            echo "                                    <tr>
                                        <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["historique"], "action", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                                        <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["historique"], "actionDate", [], "any", false, false, false, 36), "d/m/Y h:i:s"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["historique"], "user", [], "any", false, false, false, 37), "nomComplet", [], "any", false, false, false, 37), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["historique"], "user", [], "any", false, false, false, 37), "id", [], "any", false, false, false, 37), "html", null, true);
            echo ")</td>
                                        <td>
                                            ";
            // line 39
            if ((twig_get_attribute($this->env, $this->source, $context["historique"], "action", [], "any", false, false, false, 39) != "Creation")) {
                // line 40
                echo "                                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_historique_undo", ["id" => twig_get_attribute($this->env, $this->source, $context["historique"], "id", [], "any", false, false, false, 40)]), "html", null, true);
                echo "\" class=\"btn btn-primary\">Annuler</a>
                                            ";
            } else {
                // line 42
                echo "                                                No action
                                            ";
            }
            // line 44
            echo "                                        </td>
                                        <td>
                                            ";
            // line 46
            if (twig_get_attribute($this->env, $this->source, $context["historique"], "oldPost", [], "any", false, false, false, 46)) {
                // line 47
                echo "                                            <a class=\"btn btn-warning\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_oldpost_blogPosts", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["historique"], "oldPost", [], "any", false, false, false, 47), "id", [], "any", false, false, false, 47)]), "html", null, true);
                echo "\">
                                                <i class=\"fa fa-eye\"></i>
                                            </a>
                                            ";
            }
            // line 51
            echo "                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['historique'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/blog/historique.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 54,  155 => 51,  147 => 47,  145 => 46,  141 => 44,  137 => 42,  131 => 40,  129 => 39,  122 => 37,  118 => 36,  114 => 35,  111 => 34,  107 => 33,  99 => 28,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/bars.html.twig\" %}

{% block contenpage %}
    <div class=\"\">
        <div class=\"page-title\">
            <div class=\"title_left\">
                <h5><a href=\"{{ path('app_admin_blogPosts') }}\">Listing</a> >> <a href=\"{{ path('app_admin_edit_blogPosts', {'id': blogPost.id}) }}\">Modifié blog</a> >> Historique  </h5>
            </div>
        </div>

        <div class=\"clearfix\"></div>

        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2>Historique des modification du post du blog</h2>
                        <ul class=\"nav navbar-right panel_toolbox\">
                        </ul>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                        <div class=\"row\">
                            <table id=\"example\" class=\"display table table-striped table-bordered datanotminetables\" >
                                <thead>
                                <th>Action</th>
                                <th>Date</th>
                                <th>{{ \"backend.menu.user\"|trans }}</th>
                                <th>Undo</th>
                                <th>Ancienne version</th>
                                </thead>
                                <tbody>
                                {% for historique in blogPost.historiques  %}
                                    <tr>
                                        <td>{{ historique.action }}</td>
                                        <td>{{ historique.actionDate|date(\"d/m/Y h:i:s\") }}</td>
                                        <td>{{ historique.user.nomComplet }} ({{ historique.user.id }})</td>
                                        <td>
                                            {% if historique.action != \"Creation\"  %}
                                                <a href=\"{{ path('app_admin_historique_undo', {'id': historique.id}) }}\" class=\"btn btn-primary\">Annuler</a>
                                            {% else %}
                                                No action
                                            {% endif %}
                                        </td>
                                        <td>
                                            {% if historique.oldPost %}
                                            <a class=\"btn btn-warning\" href=\"{{ path('app_admin_oldpost_blogPosts', {'id': historique.oldPost.id}) }}\">
                                                <i class=\"fa fa-eye\"></i>
                                            </a>
                                            {% endif %}
                                        </td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "admin/blog/historique.html.twig", "/Users/jackrima/Sites/gentella/templates/admin/blog/historique.html.twig");
    }
}
