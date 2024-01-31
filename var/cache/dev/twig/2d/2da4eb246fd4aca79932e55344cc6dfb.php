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

/* admin/blog/blog.html.twig */
class __TwigTemplate_6dc31f2583bb919ac6b430888623e495 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/blog/blog.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/blog/blog.html.twig"));

        $this->parent = $this->loadTemplate("admin/bars.html.twig", "admin/blog/blog.html.twig", 1);
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
                <h5> Policies </h5>
            </div>
        </div>

        <div class=\"clearfix\"></div>

        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2>Liste des policies</h2>
                        <ul class=\"nav navbar-right panel_toolbox\">
                            <li><a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_new_blogPosts");
        echo "\" class=\"btn btn-success\">NEW</a>
                            </li>
                        </ul>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                        <div class=\"row\">
                            <form action=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_groupaction_blogPost");
        echo "\" id=\"grpaction\" method=\"post\" name=\"grpaction\">
                                <div class=\"form-group form-inline\">
                                    ";
        // line 28
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EDITORIAL")) {
            // line 29
            echo "                                        <select class=\"form-control\" name=\"action\" required id=\"action_select\">
                                            <option value=\"\">Action de groupe</option>
                                            <option value=\"desactiver\">Desactiver</option>
                                            <option value=\"activer\">Activer</option>
                                            <option value=\"supprimer\">Supprimer</option>
                                        </select>
                                        <button class=\"btn btn-primary\" type=\"submit\">Go!!</button>
                                    ";
        }
        // line 37
        echo "                                </div>

                            </form>
                            <table id=\"example\" class=\"display table table-striped table-bordered ";
        // line 40
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EDITORIAL")) {
            echo " dataminetables ";
        } else {
            echo " datanotminetables ";
        }
        echo "\" >
                                <thead>
                                    <th><input type=\"checkbox\" id=\"select_all\" name=\"select_all\"></th>
                                    <th>No</th>
                                    <th>Holder</th>
                                    <th>Status</th>
                                    <th>Type</th>
                                    <th>Effective</th>
                                    <th>Expiration</th>
                                    <th>Vehicles</th>
                                    <th>Drivers</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, (isset($context["blogPosts"]) || array_key_exists("blogPosts", $context) ? $context["blogPosts"] : (function () { throw new RuntimeError('Variable "blogPosts" does not exist.', 54, $this->source); })()), function ($__blogPost__) use ($context, $macros) { $context["blogPost"] = $__blogPost__; return  !twig_get_attribute($this->env, $this->source, $context["blogPost"], "deleted", [], "any", false, false, false, 54); }));
        foreach ($context['_seq'] as $context["_key"] => $context["blogPost"]) {
            // line 55
            echo "                                    <tr>
                                        ";
            // line 56
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EDITORIAL")) {
                // line 57
                echo "                                            <td><input type=\"checkbox\" class=\"chkgrp\" name=\"chkgrp[]\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blogPost"], "id", [], "any", false, false, false, 57), "html", null, true);
                echo "\"></td>
                                        ";
            }
            // line 59
            echo "                                        <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blogPost"], "titre", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blogPost"], "plubishedAt", [], "any", false, false, false, 63), "d/m/y"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blogPost"], "createdAt", [], "any", false, false, false, 64), "d/m/y"), "html", null, true);
            echo "</td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a class=\"btn btn-primary\" href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_edit_blogPosts", ["id" => twig_get_attribute($this->env, $this->source, $context["blogPost"], "id", [], "any", false, false, false, 68)]), "html", null, true);
            echo "\"><i class=\"fa fa-edit\"></i></a>
                                            ";
            // line 69
            if (twig_get_attribute($this->env, $this->source, $context["blogPost"], "valid", [], "any", false, false, false, 69)) {
                // line 70
                echo "                                                <a class=\"btn btn-success activate-link\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_changevalidite_blogPost", ["id" => twig_get_attribute($this->env, $this->source, $context["blogPost"], "id", [], "any", false, false, false, 70)]), "html", null, true);
                echo "\"> <i class=\"fa fa-check\"></i></a>
                                            ";
            } else {
                // line 72
                echo "                                                <a class=\"btn btn-warning activate-link\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_changevalidite_blogPost", ["id" => twig_get_attribute($this->env, $this->source, $context["blogPost"], "id", [], "any", false, false, false, 72)]), "html", null, true);
                echo "\"> <i class=\"fa fa-times\"></i></a>
                                            ";
            }
            // line 74
            echo "                                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_preview_blogpost", ["id" => twig_get_attribute($this->env, $this->source, $context["blogPost"], "id", [], "any", false, false, false, 74)]), "html", null, true);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-eye\"></i></a>
                                            <a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_delete_blogPost", ["id" => twig_get_attribute($this->env, $this->source, $context["blogPost"], "id", [], "any", false, false, false, 75)]), "html", null, true);
            echo "\" class=\"btn btn-danger disable-btn del-link\" type=\"submit\" ><i class=\"fa fa-trash\"></i></a>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blogPost'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
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
        return "admin/blog/blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 79,  195 => 75,  190 => 74,  184 => 72,  178 => 70,  176 => 69,  172 => 68,  165 => 64,  161 => 63,  153 => 59,  147 => 57,  145 => 56,  142 => 55,  138 => 54,  117 => 40,  112 => 37,  102 => 29,  100 => 28,  95 => 26,  85 => 19,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/bars.html.twig\" %}

{% block contenpage %}
    <div class=\"\">
        <div class=\"page-title\">
            <div class=\"title_left\">
                <h5> Policies </h5>
            </div>
        </div>

        <div class=\"clearfix\"></div>

        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2>Liste des policies</h2>
                        <ul class=\"nav navbar-right panel_toolbox\">
                            <li><a href=\"{{ path('app_admin_new_blogPosts') }}\" class=\"btn btn-success\">NEW</a>
                            </li>
                        </ul>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                        <div class=\"row\">
                            <form action=\"{{ path('app_admin_groupaction_blogPost') }}\" id=\"grpaction\" method=\"post\" name=\"grpaction\">
                                <div class=\"form-group form-inline\">
                                    {%  if is_granted(\"ROLE_EDITORIAL\") %}
                                        <select class=\"form-control\" name=\"action\" required id=\"action_select\">
                                            <option value=\"\">Action de groupe</option>
                                            <option value=\"desactiver\">Desactiver</option>
                                            <option value=\"activer\">Activer</option>
                                            <option value=\"supprimer\">Supprimer</option>
                                        </select>
                                        <button class=\"btn btn-primary\" type=\"submit\">Go!!</button>
                                    {% endif %}
                                </div>

                            </form>
                            <table id=\"example\" class=\"display table table-striped table-bordered {% if is_granted(\"ROLE_EDITORIAL\") %} dataminetables {% else %} datanotminetables {% endif %}\" >
                                <thead>
                                    <th><input type=\"checkbox\" id=\"select_all\" name=\"select_all\"></th>
                                    <th>No</th>
                                    <th>Holder</th>
                                    <th>Status</th>
                                    <th>Type</th>
                                    <th>Effective</th>
                                    <th>Expiration</th>
                                    <th>Vehicles</th>
                                    <th>Drivers</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                {% for blogPost in blogPosts|filter(blogPost => not blogPost.deleted)  %}
                                    <tr>
                                        {% if is_granted(\"ROLE_EDITORIAL\") %}
                                            <td><input type=\"checkbox\" class=\"chkgrp\" name=\"chkgrp[]\" value=\"{{ blogPost.id }}\"></td>
                                        {% endif %}
                                        <td>{{ blogPost.titre }}</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>{{ blogPost.plubishedAt|date(\"d/m/y\") }}</td>
                                        <td>{{ blogPost.createdAt|date(\"d/m/y\") }}</td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a class=\"btn btn-primary\" href=\"{{ path('app_admin_edit_blogPosts',{\"id\":blogPost.id}) }}\"><i class=\"fa fa-edit\"></i></a>
                                            {%  if blogPost.valid %}
                                                <a class=\"btn btn-success activate-link\" href=\"{{ path('app_admin_changevalidite_blogPost', {'id': blogPost.id}) }}\"> <i class=\"fa fa-check\"></i></a>
                                            {% else %}
                                                <a class=\"btn btn-warning activate-link\" href=\"{{ path('app_admin_changevalidite_blogPost', {'id': blogPost.id}) }}\"> <i class=\"fa fa-times\"></i></a>
                                            {% endif %}
                                            <a href=\"{{ path('app_admin_preview_blogpost', {'id': blogPost.id}) }}\" class=\"btn btn-primary\"><i class=\"fa fa-eye\"></i></a>
                                            <a href=\"{{ path('app_admin_delete_blogPost', {'id': blogPost.id}) }}\" class=\"btn btn-danger disable-btn del-link\" type=\"submit\" ><i class=\"fa fa-trash\"></i></a>
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
", "admin/blog/blog.html.twig", "/Users/jackrima/Sites/gentella/templates/admin/blog/blog.html.twig");
    }
}
