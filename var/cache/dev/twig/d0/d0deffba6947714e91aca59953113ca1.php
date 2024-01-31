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

/* @WebProfiler/Collector/request.html.twig */
class __TwigTemplate_b8bd6f2290d6262acec9232efc910b61 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/request.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/request.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start(function () { return ''; });
        // line 5
        echo "        ";
        echo twig_call_macro($macros["_self"], "macro_set_handler", [twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "controller", [], "any", false, false, false, 5)], 5, $context, $this->getSourceContext());
        echo "
    ";
        $context["request_handler"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 7
        echo "
    ";
        // line 8
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", [], "any", false, false, false, 8)) {
            // line 9
            echo "        ";
            ob_start(function () { return ''; });
            // line 10
            echo "            ";
            echo twig_call_macro($macros["_self"], "macro_set_handler", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", [], "any", false, false, false, 10), "controller", [], "any", false, false, false, 10), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", [], "any", false, false, false, 10), "route", [], "any", false, false, false, 10), ((("GET" != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", [], "any", false, false, false, 10), "method", [], "any", false, false, false, 10))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", [], "any", false, false, false, 10), "method", [], "any", false, false, false, 10)) : (""))], 10, $context, $this->getSourceContext());
            echo "
        ";
            $context["redirect_handler"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 12
            echo "    ";
        }
        // line 13
        echo "
    ";
        // line 14
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "forwardtoken", [], "any", false, false, false, 14)) {
            // line 15
            echo "        ";
            $context["forward_profile"] = twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "childByToken", [0 => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "forwardtoken", [], "any", false, false, false, 15)], "method", false, false, false, 15);
            // line 16
            echo "        ";
            ob_start(function () { return ''; });
            // line 17
            echo "            ";
            echo twig_call_macro($macros["_self"], "macro_set_handler", [((($context["forward_profile"] ?? null)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["forward_profile"] ?? null), "collector", [0 => "request"], "method", false, false, false, 17), "controller", [], "any", false, false, false, 17)) : ("n/a"))], 17, $context, $this->getSourceContext());
            echo "
        ";
            $context["forward_handler"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 19
            echo "    ";
        }
        // line 20
        echo "
    ";
        // line 21
        $context["request_status_code_color"] = (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "statuscode", [], "any", false, false, false, 21) >= 400)) ? ("red") : ((((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "statuscode", [], "any", false, false, false, 21) >= 300)) ? ("yellow") : ("green"))));
        // line 22
        echo "
    ";
        // line 23
        ob_start(function () { return ''; });
        // line 24
        echo "        <span class=\"sf-toolbar-status sf-toolbar-status-";
        echo twig_escape_filter($this->env, ($context["request_status_code_color"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "statuscode", [], "any", false, false, false, 24), "html", null, true);
        echo "</span>
        ";
        // line 25
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "route", [], "any", false, false, false, 25)) {
            // line 26
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", [], "any", false, false, false, 26)) {
                echo "<span class=\"sf-toolbar-request-icon\">";
                echo twig_source($this->env, "@WebProfiler/Icon/redirect.svg");
                echo "</span>";
            }
            // line 27
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "forwardtoken", [], "any", false, false, false, 27)) {
                echo "<span class=\"sf-toolbar-request-icon\">";
                echo twig_source($this->env, "@WebProfiler/Icon/forward.svg");
                echo "</span>";
            }
            // line 28
            echo "            <span class=\"sf-toolbar-label\">";
            ((("GET" != twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "method", [], "any", false, false, false, 28))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "method", [], "any", false, false, false, 28), "html", null, true))) : (print ("")));
            echo " @</span>
            <span class=\"sf-toolbar-value sf-toolbar-info-piece-additional\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "route", [], "any", false, false, false, 29), "html", null, true);
            echo "</span>
        ";
        }
        // line 31
        echo "    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 32
        echo "
    ";
        // line 33
        ob_start(function () { return ''; });
        // line 34
        echo "        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece\">
                <b>HTTP status</b>
                <span>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "statuscode", [], "any", false, false, false, 37), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "statustext", [], "any", false, false, false, 37), "html", null, true);
        echo "</span>
            </div>

            ";
        // line 40
        if (("GET" != twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "method", [], "any", false, false, false, 40))) {
            // line 41
            echo "<div class=\"sf-toolbar-info-piece\">
                    <b>Method</b>
                    <span>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "method", [], "any", false, false, false, 43), "html", null, true);
            echo "</span>
                </div>";
        }
        // line 46
        echo "
            <div class=\"sf-toolbar-info-piece\">
                <b>Controller</b>
                <span>";
        // line 49
        echo twig_escape_filter($this->env, ($context["request_handler"] ?? null), "html", null, true);
        echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Route name</b>
                <span>";
        // line 54
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "route", [], "any", true, true, false, 54)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "route", [], "any", false, false, false, 54), "n/a")) : ("n/a")), "html", null, true);
        echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Has session</b>
                <span>";
        // line 59
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "sessionmetadata", [], "any", false, false, false, 59))) {
            echo "yes";
        } else {
            echo "no";
        }
        echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Stateless Check</b>
                <span>";
        // line 64
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "statelesscheck", [], "any", false, false, false, 64)) {
            echo "yes";
        } else {
            echo "no";
        }
        echo "</span>
            </div>
        </div>

        ";
        // line 68
        if (array_key_exists("redirect_handler", $context)) {
            // line 69
            echo "<div class=\"sf-toolbar-info-group\">
                <div class=\"sf-toolbar-info-piece\">
                    <b>
                        <span class=\"sf-toolbar-redirection-status sf-toolbar-status-yellow\">";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", [], "any", false, false, false, 72), "status_code", [], "any", false, false, false, 72), "html", null, true);
            echo "</span>
                        Redirect from
                    </b>
                    <span>
                        ";
            // line 76
            echo twig_escape_filter($this->env, ($context["redirect_handler"] ?? null), "html", null, true);
            echo "
                        (<a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", [], "any", false, false, false, 77), "token", [], "any", false, false, false, 77)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", [], "any", false, false, false, 77), "token", [], "any", false, false, false, 77), "html", null, true);
            echo "</a>)
                    </span>
                </div>
            </div>
        ";
        }
        // line 82
        echo "
        ";
        // line 83
        if (array_key_exists("forward_handler", $context)) {
            // line 84
            echo "            <div class=\"sf-toolbar-info-group\">
                <div class=\"sf-toolbar-info-piece\">
                    <b>Forwarded to</b>
                    <span>
                        ";
            // line 88
            echo twig_escape_filter($this->env, ($context["forward_handler"] ?? null), "html", null, true);
            echo "
                        (<a href=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "forwardtoken", [], "any", false, false, false, 89)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "forwardtoken", [], "any", false, false, false, 89), "html", null, true);
            echo "</a>)
                    </span>
                </div>
            </div>
        ";
        }
        // line 94
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 95
        echo "
    ";
        // line 96
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null)]);
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 99
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 100
        echo "    <span class=\"label\">
        <span class=\"icon\">";
        // line 101
        echo twig_source($this->env, "@WebProfiler/Icon/request.svg");
        echo "</span>
        <strong>Request / Response</strong>
    </span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 106
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 107
        echo "    ";
        $context["controller_name"] = twig_call_macro($macros["_self"], "macro_set_handler", [twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "controller", [], "any", false, false, false, 107)], 107, $context, $this->getSourceContext());
        // line 108
        echo "    <h2>
        ";
        // line 109
        ((twig_in_filter("n/a", ($context["controller_name"] ?? null))) ? (print ("Request / Response")) : (print (twig_escape_filter($this->env, ($context["controller_name"] ?? null), "html", null, true))));
        echo "
    </h2>

    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">Request</h3>

            <div class=\"tab-content\">
                ";
        // line 117
        $context["has_no_query_post_or_files"] = ((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestquery", [], "any", false, false, false, 117), "all", [], "any", false, false, false, 117)) && twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestrequest", [], "any", false, false, false, 117), "all", [], "any", false, false, false, 117))) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestfiles", [], "any", false, false, false, 117)));
        // line 118
        echo "                ";
        if (($context["has_no_query_post_or_files"] ?? null)) {
            // line 119
            echo "                    <div class=\"empty-query-post-files\" style=\"display: flex; align-items: stretch\">
                        <div>
                            <h3>GET Parameters</h3>
                            <div class=\"empty\"><p>None</p></div>
                        </div>
                        <div>
                            <h3>POST Parameters</h3>
                            <div class=\"empty\"><p>None</p></div>
                        </div>
                        <div>
                            <h3>Uploaded Files</h3>
                            <div class=\"empty\"><p>None</p></div>
                        </div>
                    </div>
                ";
        } else {
            // line 134
            echo "                    <h3>GET Parameters</h3>

                    ";
            // line 136
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestquery", [], "any", false, false, false, 136), "all", [], "any", false, false, false, 136))) {
                // line 137
                echo "                        <div class=\"empty\">
                            <p>No GET parameters</p>
                        </div>
                    ";
            } else {
                // line 141
                echo "                        ";
                echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestquery", [], "any", false, false, false, 141), "maxDepth" => 1], false);
                echo "
                    ";
            }
            // line 143
            echo "
                    <h3>POST Parameters</h3>

                    ";
            // line 146
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestrequest", [], "any", false, false, false, 146), "all", [], "any", false, false, false, 146))) {
                // line 147
                echo "                        <div class=\"empty\">
                            <p>No POST parameters</p>
                        </div>
                    ";
            } else {
                // line 151
                echo "                        ";
                echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestrequest", [], "any", false, false, false, 151), "maxDepth" => 1], false);
                echo "
                    ";
            }
            // line 153
            echo "
                    <h4>Uploaded Files</h4>

                    ";
            // line 156
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestfiles", [], "any", false, false, false, 156))) {
                // line 157
                echo "                        <div class=\"empty\">
                            <p>No files were uploaded</p>
                        </div>
                    ";
            } else {
                // line 161
                echo "                        ";
                echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestfiles", [], "any", false, false, false, 161), "maxDepth" => 1], false);
                echo "
                    ";
            }
            // line 163
            echo "                ";
        }
        // line 164
        echo "
                <h3>Request Attributes</h3>

                ";
        // line 167
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestattributes", [], "any", false, false, false, 167), "all", [], "any", false, false, false, 167))) {
            // line 168
            echo "                    <div class=\"empty\">
                        <p>No attributes</p>
                    </div>
                ";
        } else {
            // line 172
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestattributes", [], "any", false, false, false, 172)], false);
            echo "
                ";
        }
        // line 174
        echo "
                <h3>Request Headers</h3>
                ";
        // line 176
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestheaders", [], "any", false, false, false, 176), "labels" => [0 => "Header", 1 => "Value"], "maxDepth" => 1], false);
        echo "

                <h3>Request Content</h3>

                ";
        // line 180
        if ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "content", [], "any", false, false, false, 180) == false)) {
            // line 181
            echo "                    <div class=\"empty\">
                        <p>Request content not available (it was retrieved as a resource).</p>
                    </div>
                ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 184
($context["collector"] ?? null), "content", [], "any", false, false, false, 184)) {
            // line 185
            echo "                    <div class=\"sf-tabs\">
                        ";
            // line 186
            $context["prettyJson"] = ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "isJsonRequest", [], "any", false, false, false, 186)) ? (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "prettyJson", [], "any", false, false, false, 186)) : (null));
            // line 187
            echo "                        ";
            if ( !(null === ($context["prettyJson"] ?? null))) {
                // line 188
                echo "                        <div class=\"tab\">
                            <h3 class=\"tab-title\">Pretty</h3>
                            <div class=\"tab-content\">
                                <div class=\"card\" style=\"max-height: 500px; overflow-y: auto;\">
                                    <pre class=\"break-long-words\">";
                // line 192
                echo twig_escape_filter($this->env, ($context["prettyJson"] ?? null), "html", null, true);
                echo "</pre>
                                </div>
                            </div>
                        </div>
                        ";
            }
            // line 197
            echo "
                        <div class=\"tab\">
                            <h3 class=\"tab-title\">Raw</h3>
                            <div class=\"tab-content\">
                                <div class=\"card\">
                                    <pre class=\"break-long-words\">";
            // line 202
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "content", [], "any", false, false, false, 202), "html", null, true);
            echo "</pre>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
        } else {
            // line 208
            echo "                    <div class=\"empty\">
                        <p>No content</p>
                    </div>
                ";
        }
        // line 212
        echo "            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Response</h3>

            <div class=\"tab-content\">
                <h3>Response Headers</h3>

                ";
        // line 221
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "responseheaders", [], "any", false, false, false, 221), "labels" => [0 => "Header", 1 => "Value"], "maxDepth" => 1], false);
        echo "
            </div>
        </div>

        <div class=\"tab ";
        // line 225
        echo (((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestcookies", [], "any", false, false, false, 225), "all", [], "any", false, false, false, 225)) && twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "responsecookies", [], "any", false, false, false, 225), "all", [], "any", false, false, false, 225)))) ? ("disabled") : (""));
        echo "\">
            <h3 class=\"tab-title\">Cookies</h3>

            <div class=\"tab-content\">
                <h3>Request Cookies</h3>

                ";
        // line 231
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestcookies", [], "any", false, false, false, 231), "all", [], "any", false, false, false, 231))) {
            // line 232
            echo "                    <div class=\"empty\">
                        <p>No request cookies</p>
                    </div>
                ";
        } else {
            // line 236
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestcookies", [], "any", false, false, false, 236)], false);
            echo "
                ";
        }
        // line 238
        echo "
                <h3>Response Cookies</h3>

                ";
        // line 241
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "responsecookies", [], "any", false, false, false, 241), "all", [], "any", false, false, false, 241))) {
            // line 242
            echo "                    <div class=\"empty\">
                        <p>No response cookies</p>
                    </div>
                ";
        } else {
            // line 246
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "responsecookies", [], "any", false, false, false, 246)], true);
            echo "
                ";
        }
        // line 248
        echo "            </div>
        </div>

        <div class=\"tab ";
        // line 251
        echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "sessionmetadata", [], "any", false, false, false, 251))) ? ("disabled") : (""));
        echo "\">
            <h3 class=\"tab-title\">Session";
        // line 252
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "sessionusages", [], "any", false, false, false, 252))) {
            echo " <span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "sessionusages", [], "any", false, false, false, 252)), "html", null, true);
            echo "</span>";
        }
        echo "</h3>

            <div class=\"tab-content\">
                <h3>Session Metadata</h3>

                ";
        // line 257
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "sessionmetadata", [], "any", false, false, false, 257))) {
            // line 258
            echo "                    <div class=\"empty\">
                        <p>No session metadata</p>
                    </div>
                ";
        } else {
            // line 262
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "sessionmetadata", [], "any", false, false, false, 262)], false);
            echo "
                ";
        }
        // line 264
        echo "
                <h3>Session Attributes</h3>

                ";
        // line 267
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "sessionattributes", [], "any", false, false, false, 267))) {
            // line 268
            echo "                    <div class=\"empty\">
                        <p>No session attributes</p>
                    </div>
                ";
        } else {
            // line 272
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "sessionattributes", [], "any", false, false, false, 272), "labels" => [0 => "Attribute", 1 => "Value"]], false);
            echo "
                ";
        }
        // line 274
        echo "
                <h3>Session Usage</h3>

                <div class=\"metrics\">
                    <div class=\"metric\">
                        <span class=\"value\">";
        // line 279
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "sessionusages", [], "any", false, false, false, 279)), "html", null, true);
        echo "</span>
                        <span class=\"label\">Usages</span>
                    </div>

                    <div class=\"metric\">
                        <span class=\"value\">";
        // line 284
        echo twig_source($this->env, (("@WebProfiler/Icon/" . ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "statelesscheck", [], "any", false, false, false, 284)) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
                        <span class=\"label\">Stateless check enabled</span>
                    </div>
                </div>

                ";
        // line 289
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "sessionusages", [], "any", false, false, false, 289))) {
            // line 290
            echo "                    <div class=\"empty\">
                        <p>Session not used.</p>
                    </div>
                ";
        } else {
            // line 294
            echo "                    <table class=\"session_usages\">
                        <thead>
                        <tr>
                            <th class=\"full-width\">Usage</th>
                        </tr>
                        </thead>

                        <tbody>
                        ";
            // line 302
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "sessionusages", [], "any", false, false, false, 302));
            foreach ($context['_seq'] as $context["key"] => $context["usage"]) {
                // line 303
                echo "                            <tr>
                                <td class=\"font-normal\">";
                // line 305
                $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(twig_get_attribute($this->env, $this->source, $context["usage"], "file", [], "any", false, false, false, 305), twig_get_attribute($this->env, $this->source, $context["usage"], "line", [], "any", false, false, false, 305));
                // line 306
                if (($context["link"] ?? null)) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usage"], "name", [], "any", false, false, false, 306), "html", null, true);
                    echo "\">";
                } else {
                    echo "<span title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usage"], "name", [], "any", false, false, false, 306), "html", null, true);
                    echo "\">";
                }
                // line 307
                echo "                                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usage"], "name", [], "any", false, false, false, 307), "html", null, true);
                // line 308
                if (($context["link"] ?? null)) {
                    echo "</a>";
                } else {
                    echo "</span>";
                }
                // line 309
                echo "                                    <div class=\"text-small font-normal\">
                                        ";
                // line 310
                $context["usage_id"] = ("session-usage-trace-" . $context["key"]);
                // line 311
                echo "                                        <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                echo twig_escape_filter($this->env, ($context["usage_id"] ?? null), "html", null, true);
                echo "\" data-toggle-alt-content=\"Hide trace\">Show trace</a>
                                    </div>
                                    <div id=\"";
                // line 313
                echo twig_escape_filter($this->env, ($context["usage_id"] ?? null), "html", null, true);
                echo "\" class=\"context sf-toggle-content sf-toggle-hidden\">
                                        ";
                // line 314
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, $context["usage"], "trace", [], "any", false, false, false, 314), 2);
                echo "
                                    </div>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['usage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 319
            echo "                        </tbody>
                    </table>
                ";
        }
        // line 322
        echo "            </div>
        </div>

        <div class=\"tab ";
        // line 325
        echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "flashes", [], "any", false, false, false, 325))) ? ("disabled") : (""));
        echo "\">
            <h3 class=\"tab-title\">Flashes</h3>

            <div class=\"tab-content\">
                <h3>Flashes</h3>

                ";
        // line 331
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "flashes", [], "any", false, false, false, 331))) {
            // line 332
            echo "                    <div class=\"empty\">
                        <p>No flash messages were created.</p>
                    </div>
                ";
        } else {
            // line 336
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "flashes", [], "any", false, false, false, 336)], false);
            echo "
                ";
        }
        // line 338
        echo "            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Server Parameters</h3>
            <div class=\"tab-content\">
                <h3>Server Parameters</h3>
                <h4>Defined in .env</h4>
                ";
        // line 346
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "dotenvvars", [], "any", false, false, false, 346)], false);
        echo "

                <h4>Defined as regular env variables</h4>
                ";
        // line 349
        $context["requestserver"] = [];
        // line 350
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestserver", [], "any", false, false, false, 350), function ($_____, $__key__) use ($context, $macros) { $context["_"] = $_____; $context["key"] = $__key__; return !twig_in_filter($context["key"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "dotenvvars", [], "any", false, false, false, 350), "keys", [], "any", false, false, false, 350)); }));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 351
            echo "                    ";
            $context["requestserver"] = twig_array_merge(($context["requestserver"] ?? null), [$context["key"] => $context["value"]]);
            // line 352
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 353
        echo "                ";
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => ($context["requestserver"] ?? null)], false);
        echo "
            </div>
        </div>

        ";
        // line 357
        if (twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "parent", [], "any", false, false, false, 357)) {
            // line 358
            echo "        <div class=\"tab\">
            <h3 class=\"tab-title\">Parent Request</h3>

            <div class=\"tab-content\">
                <h3>
                    <a href=\"";
            // line 363
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "parent", [], "any", false, false, false, 363), "token", [], "any", false, false, false, 363)]), "html", null, true);
            echo "\">Return to parent request</a>
                    <small>(token = ";
            // line 364
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "parent", [], "any", false, false, false, 364), "token", [], "any", false, false, false, 364), "html", null, true);
            echo ")</small>
                </h3>

                ";
            // line 367
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "parent", [], "any", false, false, false, 367), "getcollector", [0 => "request"], "method", false, false, false, 367), "requestattributes", [], "any", false, false, false, 367)], false);
            echo "
            </div>
        </div>
        ";
        }
        // line 371
        echo "
        ";
        // line 372
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, false, 372))) {
            // line 373
            echo "        <div class=\"tab\">
            <h3 class=\"tab-title\">Sub Requests <span class=\"badge\">";
            // line 374
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, false, 374)), "html", null, true);
            echo "</span></h3>

            <div class=\"tab-content\">
                ";
            // line 377
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, false, 377));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 378
                echo "                    <h3>
                        ";
                // line 379
                echo twig_call_macro($macros["_self"], "macro_set_handler", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "getcollector", [0 => "request"], "method", false, false, false, 379), "controller", [], "any", false, false, false, 379)], 379, $context, $this->getSourceContext());
                echo "
                        <small>(token = <a href=\"";
                // line 380
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => twig_get_attribute($this->env, $this->source, $context["child"], "token", [], "any", false, false, false, 380)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "token", [], "any", false, false, false, 380), "html", null, true);
                echo "</a>)</small>
                    </h3>

                    ";
                // line 383
                echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "getcollector", [0 => "request"], "method", false, false, false, 383), "requestattributes", [], "any", false, false, false, 383)], false);
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 385
            echo "            </div>
        </div>
        ";
        }
        // line 388
        echo "    </div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 391
    public function macro_set_handler($__controller__ = null, $__route__ = null, $__method__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "controller" => $__controller__,
            "route" => $__route__,
            "method" => $__method__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "set_handler"));

            // line 392
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "class", [], "any", true, true, false, 392)) {
                // line 393
                if (((array_key_exists("method", $context)) ? (_twig_default_filter(($context["method"] ?? null), false)) : (false))) {
                    echo "<span class=\"sf-toolbar-status sf-toolbar-redirection-method\">";
                    echo twig_escape_filter($this->env, ($context["method"] ?? null), "html", null, true);
                    echo "</span>";
                }
                // line 394
                $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "file", [], "any", false, false, false, 394), twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "line", [], "any", false, false, false, 394));
                // line 395
                if (($context["link"] ?? null)) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "class", [], "any", false, false, false, 395), "html", null, true);
                    echo "\">";
                } else {
                    echo "<span title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "class", [], "any", false, false, false, 395), "html", null, true);
                    echo "\">";
                }
                // line 397
                if (((array_key_exists("route", $context)) ? (_twig_default_filter(($context["route"] ?? null), false)) : (false))) {
                    // line 398
                    echo "@";
                    echo twig_escape_filter($this->env, ($context["route"] ?? null), "html", null, true);
                } else {
                    // line 400
                    echo twig_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->abbrClass(twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "class", [], "any", false, false, false, 400))), "html", null, true);
                    // line 401
                    ((twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "method", [], "any", false, false, false, 401)) ? (print (twig_escape_filter($this->env, (" :: " . twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "method", [], "any", false, false, false, 401)), "html", null, true))) : (print ("")));
                }
                // line 404
                if (($context["link"] ?? null)) {
                    echo "</a>";
                } else {
                    echo "</span>";
                }
            } else {
                // line 406
                echo "<span>";
                echo twig_escape_filter($this->env, ((array_key_exists("route", $context)) ? (_twig_default_filter(($context["route"] ?? null), ($context["controller"] ?? null))) : (($context["controller"] ?? null))), "html", null, true);
                echo "</span>";
            }
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  927 => 406,  920 => 404,  917 => 401,  915 => 400,  911 => 398,  909 => 397,  897 => 395,  895 => 394,  889 => 393,  886 => 392,  868 => 391,  860 => 388,  855 => 385,  847 => 383,  839 => 380,  835 => 379,  832 => 378,  828 => 377,  822 => 374,  819 => 373,  817 => 372,  814 => 371,  807 => 367,  801 => 364,  797 => 363,  790 => 358,  788 => 357,  780 => 353,  774 => 352,  771 => 351,  766 => 350,  764 => 349,  758 => 346,  748 => 338,  742 => 336,  736 => 332,  734 => 331,  725 => 325,  720 => 322,  715 => 319,  704 => 314,  700 => 313,  694 => 311,  692 => 310,  689 => 309,  683 => 308,  680 => 307,  668 => 306,  666 => 305,  663 => 303,  659 => 302,  649 => 294,  643 => 290,  641 => 289,  633 => 284,  625 => 279,  618 => 274,  612 => 272,  606 => 268,  604 => 267,  599 => 264,  593 => 262,  587 => 258,  585 => 257,  573 => 252,  569 => 251,  564 => 248,  558 => 246,  552 => 242,  550 => 241,  545 => 238,  539 => 236,  533 => 232,  531 => 231,  522 => 225,  515 => 221,  504 => 212,  498 => 208,  489 => 202,  482 => 197,  474 => 192,  468 => 188,  465 => 187,  463 => 186,  460 => 185,  458 => 184,  453 => 181,  451 => 180,  444 => 176,  440 => 174,  434 => 172,  428 => 168,  426 => 167,  421 => 164,  418 => 163,  412 => 161,  406 => 157,  404 => 156,  399 => 153,  393 => 151,  387 => 147,  385 => 146,  380 => 143,  374 => 141,  368 => 137,  366 => 136,  362 => 134,  345 => 119,  342 => 118,  340 => 117,  329 => 109,  326 => 108,  323 => 107,  316 => 106,  305 => 101,  302 => 100,  295 => 99,  286 => 96,  283 => 95,  280 => 94,  270 => 89,  266 => 88,  260 => 84,  258 => 83,  255 => 82,  245 => 77,  241 => 76,  234 => 72,  229 => 69,  227 => 68,  216 => 64,  204 => 59,  196 => 54,  188 => 49,  183 => 46,  178 => 43,  174 => 41,  172 => 40,  164 => 37,  159 => 34,  157 => 33,  154 => 32,  151 => 31,  146 => 29,  141 => 28,  134 => 27,  127 => 26,  125 => 25,  118 => 24,  116 => 23,  113 => 22,  111 => 21,  108 => 20,  105 => 19,  99 => 17,  96 => 16,  93 => 15,  91 => 14,  88 => 13,  85 => 12,  79 => 10,  76 => 9,  74 => 8,  71 => 7,  65 => 5,  62 => 4,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Collector/request.html.twig", "/Users/jackrima/Sites/gentella/vendor/symfony/web-profiler-bundle/Resources/views/Collector/request.html.twig");
    }
}
