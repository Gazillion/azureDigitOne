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

/* @WebProfiler/Profiler/layout.html.twig */
class __TwigTemplate_98a2989fc8636b647da6ef972dd5682e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'summary' => [$this, 'block_summary'],
            'sidebar' => [$this, 'block_sidebar'],
            'sidebar_shortcuts_links' => [$this, 'block_sidebar_shortcuts_links'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/layout.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/layout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/header.html.twig", array(), false);
        echo "

        <div id=\"summary\">
        ";
        // line 8
        $this->displayBlock('summary', $context, $blocks);
        // line 112
        echo "    </div>

        <div id=\"content\">
            <div id=\"main\">
                <div id=\"sidebar\">
                    ";
        // line 117
        $this->displayBlock('sidebar', $context, $blocks);
        // line 156
        echo "                </div>

                <div id=\"collector-wrapper\">
                    <div id=\"collector-content\">
                        ";
        // line 160
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/base_js.html.twig");
        echo "
                        ";
        // line 161
        $this->displayBlock('panel', $context, $blocks);
        // line 162
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_summary($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "summary"));

        // line 9
        echo "            ";
        if (array_key_exists("profile", $context)) {
            // line 10
            echo "                ";
            $context["request_collector"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "collectors", [], "any", false, true, false, 10), "request", [], "any", true, true, false, 10)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "collectors", [], "any", false, true, false, 10), "request", [], "any", false, false, false, 10), false)) : (false));
            // line 11
            echo "                ";
            $context["status_code"] = ((($context["request_collector"] ?? null)) ? (((twig_get_attribute($this->env, $this->source, ($context["request_collector"] ?? null), "statuscode", [], "any", true, true, false, 11)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request_collector"] ?? null), "statuscode", [], "any", false, false, false, 11), 0)) : (0))) : (0));
            // line 12
            echo "                ";
            $context["css_class"] = (((($context["status_code"] ?? null) > 399)) ? ("status-error") : ((((($context["status_code"] ?? null) > 299)) ? ("status-warning") : ("status-success"))));
            // line 13
            echo "
                ";
            // line 14
            if ((($context["request_collector"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["request_collector"] ?? null), "redirect", [], "any", false, false, false, 14))) {
                // line 15
                echo "                    ";
                $context["redirect"] = twig_get_attribute($this->env, $this->source, ($context["request_collector"] ?? null), "redirect", [], "any", false, false, false, 15);
                // line 16
                echo "                    ";
                $context["link_to_source_code"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["redirect"] ?? null), "controller", [], "any", false, true, false, 16), "class", [], "any", true, true, false, 16)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["redirect"] ?? null), "controller", [], "any", false, false, false, 16), "file", [], "any", false, false, false, 16), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["redirect"] ?? null), "controller", [], "any", false, false, false, 16), "line", [], "any", false, false, false, 16))) : (""));
                // line 17
                echo "                    ";
                $context["redirect_route_name"] = ("@" . twig_get_attribute($this->env, $this->source, ($context["redirect"] ?? null), "route", [], "any", false, false, false, 17));
                // line 18
                echo "
                    <div class=\"status status-compact status-warning\">
                        <span class=\"icon icon-redirect\">";
                // line 20
                echo twig_source($this->env, "@WebProfiler/Icon/redirect.svg");
                echo "</span>

                        <span class=\"status-response-status-code\">";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["redirect"] ?? null), "status_code", [], "any", false, false, false, 22), "html", null, true);
                echo "</span> redirect from

                        <span class=\"status-request-method\">";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["redirect"] ?? null), "method", [], "any", false, false, false, 24), "html", null, true);
                echo "</span>

                        ";
                // line 26
                if (($context["link_to_source_code"] ?? null)) {
                    // line 27
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, ($context["link_to_source_code"] ?? null), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["redirect"] ?? null), "controller", [], "any", false, false, false, 27), "file", [], "any", false, false, false, 27), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, ($context["redirect_route_name"] ?? null), "html", null, true);
                    echo "</a>
                        ";
                } else {
                    // line 29
                    echo "                            ";
                    echo twig_escape_filter($this->env, ($context["redirect_route_name"] ?? null), "html", null, true);
                    echo "
                        ";
                }
                // line 31
                echo "
                        (<a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => twig_get_attribute($this->env, $this->source, ($context["redirect"] ?? null), "token", [], "any", false, false, false, 32), "panel" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "query", [], "any", false, false, false, 32), "get", [0 => "panel", 1 => "request"], "method", false, false, false, 32)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["redirect"] ?? null), "token", [], "any", false, false, false, 32), "html", null, true);
                echo "</a>)
                    </div>
                ";
            }
            // line 35
            echo "
                <div class=\"status ";
            // line 36
            echo twig_escape_filter($this->env, ($context["css_class"] ?? null), "html", null, true);
            echo "\">
                    ";
            // line 37
            if ((($context["status_code"] ?? null) > 399)) {
                // line 38
                echo "                        <p class=\"status-error-details\">
                            <span class=\"icon\">";
                // line 39
                echo twig_source($this->env, "@WebProfiler/Icon/alert-circle.svg");
                echo "</span>
                            <span class=\"status-response-status-code\">Error ";
                // line 40
                echo twig_escape_filter($this->env, ($context["status_code"] ?? null), "html", null, true);
                echo "</span>
                            <span class=\"status-response-status-text\">";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request_collector"] ?? null), "statusText", [], "any", false, false, false, 41), "html", null, true);
                echo "</span>
                        </p>
                    ";
            }
            // line 44
            echo "
                    <h2>
                        <span class=\"status-request-method\">
                            ";
            // line 47
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "method", [], "any", false, false, false, 47)), "html", null, true);
            echo "
                        </span>

                        ";
            // line 50
            $context["profile_title"] = (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "url", [], "any", false, false, false, 50)) < 160)) ? (twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "url", [], "any", false, false, false, 50)) : ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "url", [], "any", false, false, false, 50), 0, 160) . "…")));
            // line 51
            echo "                        ";
            if (twig_in_filter(twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "method", [], "any", false, false, false, 51)), [0 => "GET", 1 => "HEAD"])) {
                // line 52
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "url", [], "any", false, false, false, 52), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["profile_title"] ?? null), "html", null, true);
                echo "</a>
                        ";
            } else {
                // line 54
                echo "                            ";
                echo twig_escape_filter($this->env, ($context["profile_title"] ?? null), "html", null, true);
                echo "
                        ";
            }
            // line 56
            echo "                    </h2>

                    <dl class=\"metadata\">
                        ";
            // line 59
            if ((($context["status_code"] ?? null) < 400)) {
                // line 60
                echo "                            <dt>Response</dt>
                            <dd>
                                <span class=\"status-response-status-code\">";
                // line 62
                echo twig_escape_filter($this->env, ($context["status_code"] ?? null), "html", null, true);
                echo "</span>
                                <span class=\"status-response-status-text\">";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request_collector"] ?? null), "statusText", [], "any", false, false, false, 63), "html", null, true);
                echo "</span>
                            </dd>
                        ";
            }
            // line 66
            echo "
                        ";
            // line 67
            $context["referer"] = ((($context["request_collector"] ?? null)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["request_collector"] ?? null), "requestheaders", [], "any", false, false, false, 67), "get", [0 => "referer"], "method", false, false, false, 67)) : (null));
            // line 68
            echo "                        ";
            if (($context["referer"] ?? null)) {
                // line 69
                echo "                            <dt></dt>
                            <dd>
                                <span class=\"icon icon-referer\">";
                // line 71
                echo twig_source($this->env, "@WebProfiler/Icon/referrer.svg");
                echo "</span>
                                <a href=\"";
                // line 72
                echo twig_escape_filter($this->env, ($context["referer"] ?? null), "html", null, true);
                echo "\" class=\"referer\">Browse referrer URL</a>
                            </dd>
                        ";
            }
            // line 75
            echo "
                        <dt>IP</dt>
                        <dd>
                            <a href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler_search_results", ["token" => ($context["token"] ?? null), "limit" => 10, "ip" => twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "ip", [], "any", false, false, false, 78)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "ip", [], "any", false, false, false, 78), "html", null, true);
            echo "</a>
                        </dd>

                        <dt>Profiled on</dt>
                        <dd><time datetime=\"";
            // line 82
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "time", [], "any", false, false, false, 82), "c"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "time", [], "any", false, false, false, 82), "r"), "html", null, true);
            echo "</time></dd>

                        <dt>Token</dt>
                        <dd>";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "token", [], "any", false, false, false, 85), "html", null, true);
            echo "</dd>
                    </dl>
                </div>

                ";
            // line 89
            if ((($context["request_collector"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["request_collector"] ?? null), "forwardtoken", [], "any", false, false, false, 89))) {
                // line 90
                $context["forward_profile"] = twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "childByToken", [0 => twig_get_attribute($this->env, $this->source, ($context["request_collector"] ?? null), "forwardtoken", [], "any", false, false, false, 90)], "method", false, false, false, 90);
                // line 91
                echo "                    ";
                $context["controller"] = ((($context["forward_profile"] ?? null)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["forward_profile"] ?? null), "collector", [0 => "request"], "method", false, false, false, 91), "controller", [], "any", false, false, false, 91)) : ("n/a"));
                // line 92
                echo "                    <div class=\"status status-compact status-compact-forward\">
                        <span class=\"icon icon-forward\">";
                // line 93
                echo twig_source($this->env, "@WebProfiler/Icon/forward.svg");
                echo "</span>

                        Forwarded to

                            ";
                // line 97
                $context["link"] = ((twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "file", [], "any", true, true, false, 97)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "file", [], "any", false, false, false, 97), twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "line", [], "any", false, false, false, 97))) : (null));
                // line 98
                if (($context["link"] ?? null)) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "file", [], "any", false, false, false, 98), "html", null, true);
                    echo "\">";
                }
                // line 99
                if (twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "class", [], "any", true, true, false, 99)) {
                    // line 100
                    echo twig_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->abbrClass(twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "class", [], "any", false, false, false, 100))), "html", null, true);
                    // line 101
                    ((twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "method", [], "any", false, false, false, 101)) ? (print (twig_escape_filter($this->env, (" :: " . twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "method", [], "any", false, false, false, 101)), "html", null, true))) : (print ("")));
                } else {
                    // line 103
                    echo twig_escape_filter($this->env, ($context["controller"] ?? null), "html", null, true);
                }
                // line 105
                if (($context["link"] ?? null)) {
                    echo "</a>";
                }
                // line 106
                echo "                            (<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => twig_get_attribute($this->env, $this->source, ($context["request_collector"] ?? null), "forwardtoken", [], "any", false, false, false, 106)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request_collector"] ?? null), "forwardtoken", [], "any", false, false, false, 106), "html", null, true);
                echo "</a>)

                    </div>";
            }
            // line 110
            echo "            ";
        }
        // line 111
        echo "        ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 117
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 118
        echo "                        <div id=\"sidebar-contents\">
                            <div id=\"sidebar-shortcuts\">
                                ";
        // line 120
        $this->displayBlock('sidebar_shortcuts_links', $context, $blocks);
        // line 130
        echo "
                                ";
        // line 131
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("web_profiler.controller.profiler::searchBarAction", array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "query", [], "any", false, false, false, 131), "all", [], "any", false, false, false, 131)));
        echo "
                            </div>

                            ";
        // line 134
        if (array_key_exists("templates", $context)) {
            // line 135
            echo "                                <ul id=\"menu-profiler\">
                                    ";
            // line 136
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["templates"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["name"] => $context["template"]) {
                // line 137
                echo "                                        ";
                ob_start(function () { return ''; });
                // line 138
                if (                $this->loadTemplate($context["template"], "@WebProfiler/Profiler/layout.html.twig", 138)->hasBlock("menu", $context)) {
                    // line 139
                    $__internal_compile_0 = $context;
                    $__internal_compile_1 = ["collector" => twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "getcollector", [0 => $context["name"]], "method", false, false, false, 139), "profiler_markup_version" => ($context["profiler_markup_version"] ?? null)];
                    if (!twig_test_iterable($__internal_compile_1)) {
                        throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 139, $this->getSourceContext());
                    }
                    $__internal_compile_1 = twig_to_array($__internal_compile_1);
                    $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_1));
                    // line 140
                    $this->loadTemplate($context["template"], "@WebProfiler/Profiler/layout.html.twig", 140)->displayBlock("menu", $context);
                    $context = $__internal_compile_0;
                }
                $context["menu"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 144
                echo "                                        ";
                if ( !twig_test_empty(($context["menu"] ?? null))) {
                    // line 145
                    echo "                                            <li class=\"";
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo " ";
                    echo ((($context["name"] == ($context["panel"] ?? null))) ? ("selected") : (""));
                    echo "\">
                                                <a href=\"";
                    // line 146
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => ($context["token"] ?? null), "panel" => $context["name"]]), "html", null, true);
                    echo "\">";
                    echo ($context["menu"] ?? null);
                    echo "</a>
                                            </li>
                                        ";
                }
                // line 149
                echo "                                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['template'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 150
            echo "                                </ul>
                            ";
        }
        // line 152
        echo "                        </div>

                        ";
        // line 154
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/settings.html.twig");
        echo "
                    ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 120
    public function block_sidebar_shortcuts_links($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_shortcuts_links"));

        // line 121
        echo "                                    <div class=\"shortcuts\">
                                        <a class=\"btn btn-link\" href=\"";
        // line 122
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler_search", ["limit" => 10]);
        echo "\">Last 10</a>
                                        <a class=\"btn btn-link\" href=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", twig_array_merge(["token" => "latest"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "query", [], "any", false, false, false, 123), "all", [], "any", false, false, false, 123))), "html", null, true);
        echo "\">Latest</a>

                                        <a class=\"sf-toggle btn btn-link\" data-toggle-selector=\"#sidebar-search\" ";
        // line 125
        if ((array_key_exists("tokens", $context) || array_key_exists("about", $context))) {
            echo "data-toggle-initial=\"display\"";
        }
        echo ">
                                            ";
        // line 126
        echo twig_source($this->env, "@WebProfiler/Icon/search.svg");
        echo " <span class=\"hidden-small\">Search</span>
                                        </a>
                                    </div>
                                ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 161
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  523 => 161,  512 => 126,  506 => 125,  501 => 123,  497 => 122,  494 => 121,  487 => 120,  478 => 154,  474 => 152,  470 => 150,  456 => 149,  448 => 146,  441 => 145,  438 => 144,  433 => 140,  425 => 139,  423 => 138,  420 => 137,  403 => 136,  400 => 135,  398 => 134,  392 => 131,  389 => 130,  387 => 120,  383 => 118,  376 => 117,  369 => 111,  366 => 110,  357 => 106,  353 => 105,  350 => 103,  347 => 101,  345 => 100,  343 => 99,  335 => 98,  333 => 97,  326 => 93,  323 => 92,  320 => 91,  318 => 90,  316 => 89,  309 => 85,  301 => 82,  292 => 78,  287 => 75,  281 => 72,  277 => 71,  273 => 69,  270 => 68,  268 => 67,  265 => 66,  259 => 63,  255 => 62,  251 => 60,  249 => 59,  244 => 56,  238 => 54,  230 => 52,  227 => 51,  225 => 50,  219 => 47,  214 => 44,  208 => 41,  204 => 40,  200 => 39,  197 => 38,  195 => 37,  191 => 36,  188 => 35,  180 => 32,  177 => 31,  171 => 29,  161 => 27,  159 => 26,  154 => 24,  149 => 22,  144 => 20,  140 => 18,  137 => 17,  134 => 16,  131 => 15,  129 => 14,  126 => 13,  123 => 12,  120 => 11,  117 => 10,  114 => 9,  107 => 8,  95 => 162,  93 => 161,  89 => 160,  83 => 156,  81 => 117,  74 => 112,  72 => 8,  66 => 5,  63 => 4,  56 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Profiler/layout.html.twig", "/Users/jackrima/Sites/gentella/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/layout.html.twig");
    }
}
