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

/* admin/user/userform.html.twig */
class __TwigTemplate_bfc3574ec65e7a44c68c8f9069ce2863 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/userform.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/userform.html.twig"));

        $this->parent = $this->loadTemplate("admin/bars.html.twig", "admin/user/userform.html.twig", 1);
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.user.user_listing"), "html", null, true);
        echo "</a> >> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.menu.user"), "html", null, true);
        echo " </h5>
            </div>
        </div>

        <div class=\"clearfix\"></div>

        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2>";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.menu.user"), "html", null, true);
        echo "</h2>
                        <ul class=\"nav navbar-right panel_toolbox\">
                            <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                            </li>
                            <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
                            </li>
                        </ul>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                        ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 27, $this->source); })()), 'form_start');
        echo "
                        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 28, $this->source); })()), 'widget');
        echo "
                        <div class=\"ln_solid\"></div>
                        <div class=\"item form-group\">
                            <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
                                <a class=\"btn btn-warning\" href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.user.cancel"), "html", null, true);
        echo "</a>
                                <button type=\"submit\" name=\"valider\" class=\"btn btn-success\">";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.user.register"), "html", null, true);
        echo "</button>
                            </div>
                        </div>
                        ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 36, $this->source); })()), 'form_end');
        echo "
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
        return "admin/user/userform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 36,  120 => 33,  114 => 32,  107 => 28,  103 => 27,  90 => 17,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/bars.html.twig' %}

{% block contenpage %}
    <div class=\"\">
        <div class=\"page-title\">
            <div class=\"title_left\">
                <h5><a href=\"{{ path('app_admin_users') }}\">{{ \"backend.user.user_listing\"|trans }}</a> >> {{ \"backend.menu.user\"|trans }} </h5>
            </div>
        </div>

        <div class=\"clearfix\"></div>

        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2>{{ \"backend.menu.user\"|trans }}</h2>
                        <ul class=\"nav navbar-right panel_toolbox\">
                            <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                            </li>
                            <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
                            </li>
                        </ul>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                        {{ form_start(userForm) }}
                        {{ form_widget(userForm) }}
                        <div class=\"ln_solid\"></div>
                        <div class=\"item form-group\">
                            <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
                                <a class=\"btn btn-warning\" href=\"{{ path('app_admin_users') }}\">{{ \"backend.user.cancel\"|trans }}</a>
                                <button type=\"submit\" name=\"valider\" class=\"btn btn-success\">{{ \"backend.user.register\"|trans }}</button>
                            </div>
                        </div>
                        {{ form_end(userForm) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "admin/user/userform.html.twig", "/Users/jackrima/Sites/gentella/templates/admin/user/userform.html.twig");
    }
}
