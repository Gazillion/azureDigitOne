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

/* security/login.html.twig */
class __TwigTemplate_27bc014d8c72661b794a17cfd45746e7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'bodyclass' => [$this, 'block_bodyclass'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Login
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "\t<meta
\thttp-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
\t<!-- Meta, title, CSS, favicons, etc. -->
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta
\tname=\"viewport\" content=\"width=device-width, initial-scale=1\">

\t<!-- Bootstrap -->
\t<link
\thref=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<!-- Font Awesome -->
\t<link
\thref=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<!-- NProgress -->
\t<link
\thref=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/nprogress/nprogress.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<!-- Animate -->
\t<link
\thref=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/animate.css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<!-- iCheck -->
\t<link
\thref=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/iCheck/skins/flat/green.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<!-- Custom Theme Style -->
\t<link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/custom.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 32
    public function block_bodyclass($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyclass"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyclass"));

        echo "class=\"login\"
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 34
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 35
        echo "\t<div>
\t\t<a class=\"hiddenanchor\" id=\"signup\"></a>
\t\t<a class=\"hiddenanchor\" id=\"signin\"></a>
\t\t<div class=\"login_wrapper\">
\t\t\t<div class=\"animate form login_form\">
\t\t\t\t<section class=\"login_content\">
\t\t\t\t\t<form method=\"post\">
\t\t\t\t\t\t<h1>ADMIN PANEL</h1>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<input type=\"text\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 44, $this->source); })()), "html", null, true);
        echo "\" name=\"username\" id=\"inputText\" class=\"form-control\" placeholder=\"Username\" required autofocus>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Password\" required>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"\" name=\"_remember_me\"><span>Remember me</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<button class=\"btn btn-success submit\" href=\"index.html\">Log in</button>
\t\t\t\t\t\t\t<a class=\"reset_pass\" href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        echo "\">Lost your password?</a>
                                                        <a class=\"reset_pass\" href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        echo "\">Sign Up</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"separator\">
\t\t\t\t\t\t\t";
        // line 66
        echo "
\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t<br/>

\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-paw\"></i>
\t\t\t\t\t\t\t\t\tADMIN PANEL</h1>
\t\t\t\t\t\t\t\t<p>©";
        // line 74
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.login.all_rights"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"//example.com\">example.com</a></p>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t";
        // line 82
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 82, $this->source); })())) {
            // line 83
            echo "\t\t\t\t\t\t\t<div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 83, $this->source); })()), "messageKey", [], "any", false, false, false, 83), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 83, $this->source); })()), "messageData", [], "any", false, false, false, 83), "security"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t";
        }
        // line 85
        echo "\t\t\t\t\t</form>
\t\t\t\t</section>
\t\t\t</div>
\t\t\t<div id=\"register\" class=\"animate form registration_form\">
\t\t\t\t<section class=\"login_content\">
\t\t\t\t\t<form>
\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.login.create_acount"), "html", null, true);
        echo "</h1>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Username\" required=\"\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" placeholder=\"Email\" required=\"\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" placeholder=\"Password\" required=\"\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<a class=\"btn btn-default submit\" href=\"index.html\">Submit</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"clearfix\"></div>

\t\t\t\t\t\t<div class=\"separator\">
\t\t\t\t\t\t\t<p class=\"change_link\">";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.login.already_member"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t<a href=\"#signin\" class=\"to_register\">
\t\t\t\t\t\t\t\t\t";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.login.log_in"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-paw\"></i>
\t\t\t\t\t\t\t\t\tADMIN PANEL</h1>
\t\t\t\t\t\t\t\t<p>©";
        // line 121
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.login.all_rights"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"\">jacques.rima</a></p>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</section>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 133
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 133,  297 => 122,  293 => 121,  280 => 111,  275 => 109,  255 => 92,  246 => 85,  240 => 83,  238 => 82,  228 => 75,  224 => 74,  214 => 66,  207 => 56,  203 => 55,  193 => 48,  186 => 44,  175 => 35,  165 => 34,  145 => 32,  133 => 30,  128 => 28,  122 => 25,  116 => 22,  110 => 19,  104 => 16,  92 => 6,  82 => 5,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Login
{% endblock %}
{% block stylesheets %}
\t<meta
\thttp-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
\t<!-- Meta, title, CSS, favicons, etc. -->
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta
\tname=\"viewport\" content=\"width=device-width, initial-scale=1\">

\t<!-- Bootstrap -->
\t<link
\thref=\"{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
\t<!-- Font Awesome -->
\t<link
\thref=\"{{ asset('vendors/font-awesome/css/font-awesome.min.css') }}\" rel=\"stylesheet\">
\t<!-- NProgress -->
\t<link
\thref=\"{{ asset('vendors/nprogress/nprogress.css') }}\" rel=\"stylesheet\">
\t<!-- Animate -->
\t<link
\thref=\"{{ asset('vendors/animate.css/animate.css') }}\" rel=\"stylesheet\">
\t<!-- iCheck -->
\t<link
\thref=\"{{ asset('vendors/iCheck/skins/flat/green.css') }}\" rel=\"stylesheet\">
\t<!-- Custom Theme Style -->
\t<link href=\"{{ asset('build/css/custom.min.css') }}\" rel=\"stylesheet\">
{% endblock %}
{% block bodyclass %}class=\"login\"
{% endblock %}
{% block body %}
\t<div>
\t\t<a class=\"hiddenanchor\" id=\"signup\"></a>
\t\t<a class=\"hiddenanchor\" id=\"signin\"></a>
\t\t<div class=\"login_wrapper\">
\t\t\t<div class=\"animate form login_form\">
\t\t\t\t<section class=\"login_content\">
\t\t\t\t\t<form method=\"post\">
\t\t\t\t\t\t<h1>ADMIN PANEL</h1>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<input type=\"text\" value=\"{{ last_username }}\" name=\"username\" id=\"inputText\" class=\"form-control\" placeholder=\"Username\" required autofocus>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Password\" required>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"\" name=\"_remember_me\"><span>Remember me</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<button class=\"btn btn-success submit\" href=\"index.html\">Log in</button>
\t\t\t\t\t\t\t<a class=\"reset_pass\" href=\"{{path('app_forgot_password_request')}}\">Lost your password?</a>
                                                        <a class=\"reset_pass\" href=\"{{path('app_forgot_password_request')}}\">Sign Up</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"separator\">
\t\t\t\t\t\t\t{# <p class=\"change_link\">
\t\t\t\t\t\t\t\t{{ \"backend.login.new_site\"|trans }}
\t\t\t\t\t\t\t\t<a href=\"#signup\" class=\"to_register\">
\t\t\t\t\t\t\t\t\t{{ \"backend.login.create_acount\"|trans }}
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</p> #}

\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t<br/>

\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-paw\"></i>
\t\t\t\t\t\t\t\t\tADMIN PANEL</h1>
\t\t\t\t\t\t\t\t<p>©{{ \"now\"|date(\"Y\") }}
\t\t\t\t\t\t\t\t\t{{ \"backend.login.all_rights\"|trans }}
\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"//example.com\">example.com</a></p>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t{% if error %}
\t\t\t\t\t\t\t<div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</form>
\t\t\t\t</section>
\t\t\t</div>
\t\t\t<div id=\"register\" class=\"animate form registration_form\">
\t\t\t\t<section class=\"login_content\">
\t\t\t\t\t<form>
\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t{{ \"backend.login.create_acount\"|trans }}</h1>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Username\" required=\"\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" placeholder=\"Email\" required=\"\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" placeholder=\"Password\" required=\"\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<a class=\"btn btn-default submit\" href=\"index.html\">Submit</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"clearfix\"></div>

\t\t\t\t\t\t<div class=\"separator\">
\t\t\t\t\t\t\t<p class=\"change_link\">{{ \"backend.login.already_member\"|trans }}
\t\t\t\t\t\t\t\t<a href=\"#signin\" class=\"to_register\">
\t\t\t\t\t\t\t\t\t{{ \"backend.login.log_in\"|trans }}
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-paw\"></i>
\t\t\t\t\t\t\t\t\tADMIN PANEL</h1>
\t\t\t\t\t\t\t\t<p>©{{ \"now\"|date(\"Y\") }}
\t\t\t\t\t\t\t\t\t{{ \"backend.login.all_rights\"|trans }}
\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"\">jacques.rima</a></p>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</section>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
{% block javascripts %}{% endblock %}
", "security/login.html.twig", "/Users/jackrima/Sites/gentella/templates/security/login.html.twig");
    }
}
