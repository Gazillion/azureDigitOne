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

/* admin/app_contact/inbox.html.twig */
class __TwigTemplate_881a509902b6724471bf40eac859182f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/app_contact/inbox.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/app_contact/inbox.html.twig"));

        $this->parent = $this->loadTemplate("admin/bars.html.twig", "admin/app_contact/inbox.html.twig", 1);
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
                <h3>Inbox</h3>
            </div>

            <div class=\"title_right\">
                <div class=\"col-md-8 col-sm-8   form-group pull-right top_search\">
                    <div class=\"input-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Recherche\">
                        <span class=\"input-group-btn\">
                      <button class=\"btn btn-secondary\" type=\"button\"><i class=\"fa fa-search\"></i></button>
                    </span>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"clearfix\"></div>

        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2>Inbox</h2>
                        <ul class=\"nav navbar-right panel_toolbox\">
                        </ul>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                        <div class=\"row\">
                            <div style=\"height: 700px;overflow-y: scroll;\" class=\"col-sm-3 mail_list_column\">
                                ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 36, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 37
            echo "                                    <a class=\"mail_link\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_read_contact", ["id" => twig_get_attribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\">
                                        <div class=\"mail_list ";
            // line 38
            if ( !twig_get_attribute($this->env, $this->source, $context["contact"], "isRead", [], "any", false, false, false, 38)) {
                echo " not_read_mail ";
            }
            echo "\">
                                            <div class=\"left\">
                                                ";
            // line 40
            if ( !twig_get_attribute($this->env, $this->source, $context["contact"], "isRead", [], "any", false, false, false, 40)) {
                // line 41
                echo "                                                    <i class=\"fa fa-envelope\"></i>
                                                ";
            } else {
                // line 43
                echo "                                                    <i class=\"fa fa-envelope-o\"></i>
                                                ";
            }
            // line 45
            echo "                                                ";
            if (twig_get_attribute($this->env, $this->source, $context["contact"], "isAnswered", [], "any", false, false, false, 45)) {
                // line 46
                echo "                                                    <i class=\"fa fa-reply\"></i>
                                                ";
            }
            // line 48
            echo "                                            </div>
                                            <div class=\"right\">
                                                <h3>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "fullName", [], "any", false, false, false, 50), "html", null, true);
            echo "<small>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "sendedAt", [], "any", false, false, false, 50), "d/m/y h:i:s"), "html", null, true);
            echo "</small></h3>
                                                <p>";
            // line 51
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "message", [], "any", false, false, false, 51), 0, 25), "html", null, true);
            echo "...</p>
                                            </div>
                                        </div>
                                    </a>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                            </div>
                            <!-- /MAIL LIST -->

                            <!-- CONTENT MAIL -->
                            <div style=\"height: 700px;overflow-y: scroll\" class=\"col-sm-9 mail_view\">
                                <div style=\"display: none;\" class=\"inbox-body\">
                                    <div class=\"mail_heading row\">
                                        <div class=\"col-md-8\">
                                            <div class=\"btn-group\">
                                                <button class=\"btn btn-sm btn-primary\" type=\"button\"><i class=\"fa fa-reply\"></i> Répondre</button>
                                            </div>
                                        </div>
                                        <div class=\"col-md-4 text-right\">
                                            <p id=\"datePlace\" class=\"date\"> date</p>
                                        </div>
                                        <div class=\"col-md-12\">
                                            <h4 id=\"objetPlace\">Objet</h4>
                                        </div>
                                    </div>
                                    <div class=\"sender-info\">
                                        <div class=\"row\">
                                            <div class=\"col-md-12\">
                                                <strong id=\"namePlace\" >Nom complet</strong>
                                                <span id=\"emailPlace\">(adresss mail)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"view-mail\">
                                        contenu
                                    </div>
                                    <div class=\"btn-group\">
                                        <button class=\"btn btn-sm btn-primary\" type=\"button\"><i class=\"fa fa-reply\"></i> Répondre</button>
                                    </div>
                                </div>

                            </div>
                            <!-- /CONTENT MAIL -->
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
        return "admin/app_contact/inbox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 56,  145 => 51,  139 => 50,  135 => 48,  131 => 46,  128 => 45,  124 => 43,  120 => 41,  118 => 40,  111 => 38,  106 => 37,  102 => 36,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/bars.html.twig\" %}

{% block contenpage %}
    <div class=\"\">
        <div class=\"page-title\">
            <div class=\"title_left\">
                <h3>Inbox</h3>
            </div>

            <div class=\"title_right\">
                <div class=\"col-md-8 col-sm-8   form-group pull-right top_search\">
                    <div class=\"input-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Recherche\">
                        <span class=\"input-group-btn\">
                      <button class=\"btn btn-secondary\" type=\"button\"><i class=\"fa fa-search\"></i></button>
                    </span>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"clearfix\"></div>

        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2>Inbox</h2>
                        <ul class=\"nav navbar-right panel_toolbox\">
                        </ul>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                        <div class=\"row\">
                            <div style=\"height: 700px;overflow-y: scroll;\" class=\"col-sm-3 mail_list_column\">
                                {% for contact in contacts %}
                                    <a class=\"mail_link\" href=\"{{ path('app_admin_read_contact', {'id': contact.id}) }}\">
                                        <div class=\"mail_list {% if not contact.isRead%} not_read_mail {% endif %}\">
                                            <div class=\"left\">
                                                {% if not contact.isRead%}
                                                    <i class=\"fa fa-envelope\"></i>
                                                {% else %}
                                                    <i class=\"fa fa-envelope-o\"></i>
                                                {% endif %}
                                                {% if contact.isAnswered%}
                                                    <i class=\"fa fa-reply\"></i>
                                                {% endif %}
                                            </div>
                                            <div class=\"right\">
                                                <h3>{{ contact.fullName}}<small>{{ contact.sendedAt|date(\"d/m/y h:i:s\") }}</small></h3>
                                                <p>{{ contact.message[0:25] }}...</p>
                                            </div>
                                        </div>
                                    </a>
                                {% endfor %}
                            </div>
                            <!-- /MAIL LIST -->

                            <!-- CONTENT MAIL -->
                            <div style=\"height: 700px;overflow-y: scroll\" class=\"col-sm-9 mail_view\">
                                <div style=\"display: none;\" class=\"inbox-body\">
                                    <div class=\"mail_heading row\">
                                        <div class=\"col-md-8\">
                                            <div class=\"btn-group\">
                                                <button class=\"btn btn-sm btn-primary\" type=\"button\"><i class=\"fa fa-reply\"></i> Répondre</button>
                                            </div>
                                        </div>
                                        <div class=\"col-md-4 text-right\">
                                            <p id=\"datePlace\" class=\"date\"> date</p>
                                        </div>
                                        <div class=\"col-md-12\">
                                            <h4 id=\"objetPlace\">Objet</h4>
                                        </div>
                                    </div>
                                    <div class=\"sender-info\">
                                        <div class=\"row\">
                                            <div class=\"col-md-12\">
                                                <strong id=\"namePlace\" >Nom complet</strong>
                                                <span id=\"emailPlace\">(adresss mail)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"view-mail\">
                                        contenu
                                    </div>
                                    <div class=\"btn-group\">
                                        <button class=\"btn btn-sm btn-primary\" type=\"button\"><i class=\"fa fa-reply\"></i> Répondre</button>
                                    </div>
                                </div>

                            </div>
                            <!-- /CONTENT MAIL -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "admin/app_contact/inbox.html.twig", "/Users/jackrima/Sites/gentella/templates/admin/app_contact/inbox.html.twig");
    }
}
