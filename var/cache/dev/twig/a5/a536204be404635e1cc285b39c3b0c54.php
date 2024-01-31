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

/* admin/params/faq/faq.html.twig */
class __TwigTemplate_f33a148a4602b39ae65ef336add5c30d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/params/faq/faq.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/params/faq/faq.html.twig"));

        $this->parent = $this->loadTemplate("admin/bars.html.twig", "admin/params/faq/faq.html.twig", 1);
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
                <h5> Listing </h5>
            </div>
        </div>

        <div class=\"clearfix\"></div>

        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2>Liste FAQ</h2>
                        <ul class=\"nav navbar-right panel_toolbox\">
                            <li><a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_new_faq");
        echo "\" class=\"btn btn-success\">NEW</a>
                            </li>
                        </ul>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                        <div class=\"row\">
                            <form action=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_groupaction_faq");
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
                                <th>Question</th>
                                <th>Reponse</th>
                                <th>Modifier</th>
                                <th>Etat ?</th>
                                <th>Suprimer</th>
                                </thead>
                                <tbody>
                                ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, (isset($context["faqs"]) || array_key_exists("faqs", $context) ? $context["faqs"] : (function () { throw new RuntimeError('Variable "faqs" does not exist.', 48, $this->source); })()), function ($__faq__) use ($context, $macros) { $context["faq"] = $__faq__; return  !twig_get_attribute($this->env, $this->source, $context["faq"], "deleted", [], "any", false, false, false, 48); }));
        foreach ($context['_seq'] as $context["_key"] => $context["faq"]) {
            // line 49
            echo "                                    <tr>
                                        <td><input type=\"checkbox\" class=\"chkgrp\" name=\"chkgrp[]\" value=\"";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["faq"], "id", [], "any", false, false, false, 50), "html", null, true);
            echo "\"></td>
                                        <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["faq"], "question", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                                        <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["faq"], "answer", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                                        <td><a class=\"btn btn-primary\" href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_edit_faq", ["id" => twig_get_attribute($this->env, $this->source, $context["faq"], "id", [], "any", false, false, false, 53)]), "html", null, true);
            echo "\"><i class=\"fa fa-edit\"></i></a></td>
                                        <td>
                                            ";
            // line 55
            if (twig_get_attribute($this->env, $this->source, $context["faq"], "valid", [], "any", false, false, false, 55)) {
                // line 56
                echo "                                                <a class=\"btn btn-success activate-link\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_changevalidite_faq", ["id" => twig_get_attribute($this->env, $this->source, $context["faq"], "id", [], "any", false, false, false, 56)]), "html", null, true);
                echo "\"> <i class=\"fa fa-check\"></i></a>
                                            ";
            } else {
                // line 58
                echo "                                                <a class=\"btn btn-warning activate-link\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_changevalidite_faq", ["id" => twig_get_attribute($this->env, $this->source, $context["faq"], "id", [], "any", false, false, false, 58)]), "html", null, true);
                echo "\"> <i class=\"fa fa-times\"></i></a>
                                            ";
            }
            // line 60
            echo "                                        </td>
                                        <td><a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_delete_faq", ["id" => twig_get_attribute($this->env, $this->source, $context["faq"], "id", [], "any", false, false, false, 61)]), "html", null, true);
            echo "\" class=\"btn btn-danger disable-btn del-link\" type=\"submit\" ><i class=\"fa fa-trash\"></i></a></td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faq'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
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
        return "admin/params/faq/faq.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 64,  161 => 61,  158 => 60,  152 => 58,  146 => 56,  144 => 55,  139 => 53,  135 => 52,  131 => 51,  127 => 50,  124 => 49,  120 => 48,  95 => 26,  85 => 19,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/bars.html.twig\" %}

{% block contenpage %}
    <div class=\"\">
        <div class=\"page-title\">
            <div class=\"title_left\">
                <h5> Listing </h5>
            </div>
        </div>

        <div class=\"clearfix\"></div>

        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2>Liste FAQ</h2>
                        <ul class=\"nav navbar-right panel_toolbox\">
                            <li><a href=\"{{ path('app_admin_new_faq') }}\" class=\"btn btn-success\">NEW</a>
                            </li>
                        </ul>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                        <div class=\"row\">
                            <form action=\"{{ path('app_admin_groupaction_faq') }}\" id=\"grpaction\" method=\"post\" name=\"grpaction\">
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
                                <th>Question</th>
                                <th>Reponse</th>
                                <th>Modifier</th>
                                <th>Etat ?</th>
                                <th>Suprimer</th>
                                </thead>
                                <tbody>
                                {% for faq in faqs|filter(faq => not faq.deleted)  %}
                                    <tr>
                                        <td><input type=\"checkbox\" class=\"chkgrp\" name=\"chkgrp[]\" value=\"{{ faq.id }}\"></td>
                                        <td>{{ faq.question }}</td>
                                        <td>{{ faq.answer }}</td>
                                        <td><a class=\"btn btn-primary\" href=\"{{ path('app_admin_edit_faq',{\"id\":faq.id}) }}\"><i class=\"fa fa-edit\"></i></a></td>
                                        <td>
                                            {%  if faq.valid %}
                                                <a class=\"btn btn-success activate-link\" href=\"{{ path('app_admin_changevalidite_faq', {'id': faq.id}) }}\"> <i class=\"fa fa-check\"></i></a>
                                            {% else %}
                                                <a class=\"btn btn-warning activate-link\" href=\"{{ path('app_admin_changevalidite_faq', {'id': faq.id}) }}\"> <i class=\"fa fa-times\"></i></a>
                                            {% endif %}
                                        </td>
                                        <td><a href=\"{{ path('app_admin_delete_faq', {'id': faq.id}) }}\" class=\"btn btn-danger disable-btn del-link\" type=\"submit\" ><i class=\"fa fa-trash\"></i></a></td>
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
", "admin/params/faq/faq.html.twig", "/Users/jackrima/Sites/gentella/templates/admin/params/faq/faq.html.twig");
    }
}
