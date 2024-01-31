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

/* admin/blog/blogform.html.twig */
class __TwigTemplate_fab9bc37f67eef5ef59523f391f9185d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/blog/blogform.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/blog/blogform.html.twig"));

        $this->parent = $this->loadTemplate("admin/bars.html.twig", "admin/blog/blogform.html.twig", 1);
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
        echo "\">Listing</a> >> Blog</h5>
            </div>

        </div>

        <div class=\"clearfix\"></div>

        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2> Blog &nbsp;&nbsp;&nbsp; ";
        // line 18
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["blogForm"]) || array_key_exists("blogForm", $context) ? $context["blogForm"] : (function () { throw new RuntimeError('Variable "blogForm" does not exist.', 18, $this->source); })()), "vars", [], "any", false, false, false, 18), "value", [], "any", false, false, false, 18), "id", [], "any", false, false, false, 18)) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPERUSER"))) {
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_historique_blogPost", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["blogForm"]) || array_key_exists("blogForm", $context) ? $context["blogForm"] : (function () { throw new RuntimeError('Variable "blogForm" does not exist.', 18, $this->source); })()), "vars", [], "any", false, false, false, 18), "value", [], "any", false, false, false, 18), "id", [], "any", false, false, false, 18)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Voir l'historique <i class=\"fa fa-history\"></i></a>";
        }
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
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["blogForm"]) || array_key_exists("blogForm", $context) ? $context["blogForm"] : (function () { throw new RuntimeError('Variable "blogForm" does not exist.', 29, $this->source); })()), 'form_start');
        echo "
                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["blogForm"]) || array_key_exists("blogForm", $context) ? $context["blogForm"] : (function () { throw new RuntimeError('Variable "blogForm" does not exist.', 30, $this->source); })()), 'widget');
        echo "

                        ";
        // line 32
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["blogForm"]) || array_key_exists("blogForm", $context) ? $context["blogForm"] : (function () { throw new RuntimeError('Variable "blogForm" does not exist.', 32, $this->source); })()), "vars", [], "any", false, false, false, 32), "value", [], "any", false, false, false, 32), "blogImage", [], "any", false, false, false, 32))) {
            // line 33
            echo "                            <div class=\"item form-group\">
                                Image
                                <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
                                    <img src=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getRuntime('Liip\ImagineBundle\Templating\LazyFilterRuntime')->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/Blog/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["blogForm"]) || array_key_exists("blogForm", $context) ? $context["blogForm"] : (function () { throw new RuntimeError('Variable "blogForm" does not exist.', 36, $this->source); })()), "vars", [], "any", false, false, false, 36), "value", [], "any", false, false, false, 36), "blogImage", [], "any", false, false, false, 36))), "keep_ratio_thumbnail_small"), "html", null, true);
            echo "\" alt=\"\">
                                </div>
                            </div>
                        ";
        }
        // line 40
        echo "                        <div class=\"ln_solid\"></div>
                        <div class=\"item form-group\">
                            <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
                                <a class=\"btn btn-warning\" href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_blogPosts");
        echo "\">Annuler</a>
                                <button type=\"submit\" name=\"valider\" class=\"btn btn-success\">Enregistrer</button>
                            </div>
                        </div>
                        ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["blogForm"]) || array_key_exists("blogForm", $context) ? $context["blogForm"] : (function () { throw new RuntimeError('Variable "blogForm" does not exist.', 47, $this->source); })()), 'form_end');
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
        return "admin/blog/blogform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 47,  133 => 43,  128 => 40,  121 => 36,  116 => 33,  114 => 32,  109 => 30,  105 => 29,  87 => 18,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/bars.html.twig' %}

{% block contenpage %}
    <div class=\"\">
        <div class=\"page-title\">
            <div class=\"title_left\">
                <h5><a href=\"{{ path('app_admin_blogPosts') }}\">Listing</a> >> Blog</h5>
            </div>

        </div>

        <div class=\"clearfix\"></div>

        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2> Blog &nbsp;&nbsp;&nbsp; {% if blogForm.vars.value.id is not empty and is_granted(\"ROLE_SUPERUSER\") %} <a href=\"{{ path('app_admin_historique_blogPost', {'id': blogForm.vars.value.id}) }}\" class=\"btn btn-primary\">Voir l'historique <i class=\"fa fa-history\"></i></a>{% endif %}</h2>
                        <ul class=\"nav navbar-right panel_toolbox\">
                            <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                            </li>
                            <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
                            </li>
                        </ul>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">

                        {{ form_start(blogForm) }}
                        {{ form_widget(blogForm) }}

                        {% if blogForm.vars.value.blogImage is not empty %}
                            <div class=\"item form-group\">
                                Image
                                <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
                                    <img src=\"{{ asset('images/Blog/'~blogForm.vars.value.blogImage)|imagine_filter(\"keep_ratio_thumbnail_small\") }}\" alt=\"\">
                                </div>
                            </div>
                        {% endif %}
                        <div class=\"ln_solid\"></div>
                        <div class=\"item form-group\">
                            <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
                                <a class=\"btn btn-warning\" href=\"{{ path('app_admin_blogPosts') }}\">Annuler</a>
                                <button type=\"submit\" name=\"valider\" class=\"btn btn-success\">Enregistrer</button>
                            </div>
                        </div>
                        {{ form_end(blogForm) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "admin/blog/blogform.html.twig", "/Users/jackrima/Sites/gentella/templates/admin/blog/blogform.html.twig");
    }
}
