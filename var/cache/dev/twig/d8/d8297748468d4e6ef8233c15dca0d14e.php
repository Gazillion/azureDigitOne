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

/* admin/categorie/categorie.html.twig */
class __TwigTemplate_012df0426184405c3f6edb49828435d3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/categorie/categorie.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/categorie/categorie.html.twig"));

        $this->parent = $this->loadTemplate("admin/bars.html.twig", "admin/categorie/categorie.html.twig", 1);
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
                        <h2>Liste des Policies</h2>
                        <ul class=\"nav navbar-right panel_toolbox\">
                            <li><a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_new_categorie");
        echo "\" class=\"btn btn-success\">NEW</a>
                            </li>
                        </ul>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                        <div class=\"row\">
                            <form action=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_groupaction_categorie");
        echo "\" id=\"grpaction\" method=\"post\" name=\"grpaction\">
                                <div class=\"form-group form-inline\">
                                    <select class=\"form-control\" name=\"action\" required id=\"action_select\">
                                        <option value=\"\">Action de groupe</option>
                                        <option value=\"desactiver\">Desactiver</option>
                                        <option value=\"activer\">Activer</option>
                                        <option value=\"supprimer\">Supprimer</option>
                                    </select>
                                    <button class=\"btn btn-primary\" type=\"submit\">Go!!</button>
                                </div>

                            </form>
                            <table id=\"example\" class=\"display table table-striped table-bordered dataminetables\" >
                                <thead>
                                <th><input type=\"checkbox\" id=\"select_all\" name=\"select_all\"></th>
                                <th>No</th>
                                <th>Holder</th>
                                <th>Status</th>
                                <th>Type</th>
                                <th>Effective Date</th>
                                <th>Expiration Date</th>
                                <th>Vehicles</th>
                                <th>Drivers</th>
                                <th>Action</th>
                                </thead>
                                <tbody>
                                ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 52, $this->source); })()), function ($__categorie__) use ($context, $macros) { $context["categorie"] = $__categorie__; return  !twig_get_attribute($this->env, $this->source, $context["categorie"], "deleted", [], "any", false, false, false, 52); }));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 53
            echo "                                    <tr>
                                        <td><input type=\"checkbox\" class=\"chkgrp\" name=\"chkgrp[]\" value=\"";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 54), "html", null, true);
            echo "\"></td>
                                        <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "libelle", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
                                        <td>";
            // line 56
            if (twig_get_attribute($this->env, $this->source, $context["categorie"], "categorieParente", [], "any", false, false, false, 56)) {
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["categorie"], "categorieParente", [], "any", false, false, false, 56), "libelle", [], "any", false, false, false, 56), "html", null, true);
                echo " ";
            }
            echo "</td>
                                        <td></td>
                                        <td>
                                            
                                        </td>
                                        <td></td>
                                        <td>test</td>
                                        <td>test</td>
                                        <td>test</td>
                                        <td>
                                            <a class=\"btn btn-primary\" href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_edit_categorie", ["id" => twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 66)]), "html", null, true);
            echo "\"><i class=\"fa fa-edit\"></i></a>
                                            <a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_delete_categorie", ["id" => twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 67)]), "html", null, true);
            echo "\" class=\"btn btn-danger disable-btn del-link\" type=\"submit\" ><i class=\"fa fa-trash\"></i></a>
                                            ";
            // line 68
            if (twig_get_attribute($this->env, $this->source, $context["categorie"], "valid", [], "any", false, false, false, 68)) {
                // line 69
                echo "                                                <a class=\"btn btn-success activate-link\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_changevalidite_categorie", ["id" => twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 69)]), "html", null, true);
                echo "\"> <i class=\"fa fa-check\"></i></a>
                                            ";
            } else {
                // line 71
                echo "                                                <a class=\"btn btn-warning activate-link\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_changevalidite_categorie", ["id" => twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 71)]), "html", null, true);
                echo "\"> <i class=\"fa fa-times\"></i></a>
                                            ";
            }
            // line 73
            echo "                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
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
        return "admin/categorie/categorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 76,  178 => 73,  172 => 71,  166 => 69,  164 => 68,  160 => 67,  156 => 66,  139 => 56,  135 => 55,  131 => 54,  128 => 53,  124 => 52,  95 => 26,  85 => 19,  68 => 4,  58 => 3,  35 => 1,);
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
                        <h2>Liste des Policies</h2>
                        <ul class=\"nav navbar-right panel_toolbox\">
                            <li><a href=\"{{ path('app_admin_new_categorie') }}\" class=\"btn btn-success\">NEW</a>
                            </li>
                        </ul>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                        <div class=\"row\">
                            <form action=\"{{ path('app_admin_groupaction_categorie') }}\" id=\"grpaction\" method=\"post\" name=\"grpaction\">
                                <div class=\"form-group form-inline\">
                                    <select class=\"form-control\" name=\"action\" required id=\"action_select\">
                                        <option value=\"\">Action de groupe</option>
                                        <option value=\"desactiver\">Desactiver</option>
                                        <option value=\"activer\">Activer</option>
                                        <option value=\"supprimer\">Supprimer</option>
                                    </select>
                                    <button class=\"btn btn-primary\" type=\"submit\">Go!!</button>
                                </div>

                            </form>
                            <table id=\"example\" class=\"display table table-striped table-bordered dataminetables\" >
                                <thead>
                                <th><input type=\"checkbox\" id=\"select_all\" name=\"select_all\"></th>
                                <th>No</th>
                                <th>Holder</th>
                                <th>Status</th>
                                <th>Type</th>
                                <th>Effective Date</th>
                                <th>Expiration Date</th>
                                <th>Vehicles</th>
                                <th>Drivers</th>
                                <th>Action</th>
                                </thead>
                                <tbody>
                                {% for categorie in categories|filter(categorie => not categorie.deleted)  %}
                                    <tr>
                                        <td><input type=\"checkbox\" class=\"chkgrp\" name=\"chkgrp[]\" value=\"{{ categorie.id }}\"></td>
                                        <td>{{ categorie.libelle }}</td>
                                        <td>{%  if categorie.categorieParente %} {{ categorie.categorieParente.libelle }} {% endif %}</td>
                                        <td></td>
                                        <td>
                                            
                                        </td>
                                        <td></td>
                                        <td>test</td>
                                        <td>test</td>
                                        <td>test</td>
                                        <td>
                                            <a class=\"btn btn-primary\" href=\"{{ path('app_admin_edit_categorie',{\"id\":categorie.id}) }}\"><i class=\"fa fa-edit\"></i></a>
                                            <a href=\"{{ path('app_admin_delete_categorie', {'id': categorie.id}) }}\" class=\"btn btn-danger disable-btn del-link\" type=\"submit\" ><i class=\"fa fa-trash\"></i></a>
                                            {%  if categorie.valid %}
                                                <a class=\"btn btn-success activate-link\" href=\"{{ path('app_admin_changevalidite_categorie', {'id': categorie.id}) }}\"> <i class=\"fa fa-check\"></i></a>
                                            {% else %}
                                                <a class=\"btn btn-warning activate-link\" href=\"{{ path('app_admin_changevalidite_categorie', {'id': categorie.id}) }}\"> <i class=\"fa fa-times\"></i></a>
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
", "admin/categorie/categorie.html.twig", "/Users/jackrima/Sites/gentella/templates/admin/categorie/categorie.html.twig");
    }
}
