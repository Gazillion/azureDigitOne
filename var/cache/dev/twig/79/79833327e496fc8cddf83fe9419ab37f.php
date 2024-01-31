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

/* @WebProfiler/Collector/logger.html.twig */
class __TwigTemplate_13f84d648be2e3a7c701519ad0391a1c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/logger.html.twig"));

        // line 3
        $macros["helper"] = $this->macros["helper"] = $this;
        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/logger.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 6
        echo "    ";
        if (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "counterrors", [], "any", false, false, false, 6) || twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countdeprecations", [], "any", false, false, false, 6)) || twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countwarnings", [], "any", false, false, false, 6))) {
            // line 7
            echo "        ";
            ob_start(function () { return ''; });
            // line 8
            echo "            ";
            $context["status_color"] = ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "counterrors", [], "any", false, false, false, 8)) ? ("red") : (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countwarnings", [], "any", false, false, false, 8)) ? ("yellow") : ("none"))));
            // line 9
            echo "            ";
            echo twig_source($this->env, "@WebProfiler/Icon/logger.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 10
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "counterrors", [], "any", false, false, false, 10)) ? (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "counterrors", [], "any", false, false, false, 10)) : ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countdeprecations", [], "any", false, false, false, 10) + twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countwarnings", [], "any", false, false, false, 10)))), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 12
            echo "
        ";
            // line 13
            ob_start(function () { return ''; });
            // line 14
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Errors</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 16
            echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "counterrors", [], "any", false, false, false, 16)) ? ("red") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "counterrors", [], "any", true, true, false, 16)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "counterrors", [], "any", false, false, false, 16), 0)) : (0)), "html", null, true);
            echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Warnings</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 21
            echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countwarnings", [], "any", false, false, false, 21)) ? ("yellow") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countwarnings", [], "any", true, true, false, 21)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countwarnings", [], "any", false, false, false, 21), 0)) : (0)), "html", null, true);
            echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Deprecations</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 26
            echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countdeprecations", [], "any", false, false, false, 26)) ? ("none") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countdeprecations", [], "any", true, true, false, 26)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countdeprecations", [], "any", false, false, false, 26), 0)) : (0)), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 29
            echo "
        ";
            // line 30
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null), "status" => ($context["status_color"] ?? null)]);
            echo "
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 34
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 35
        echo "    <span class=\"label label-status-";
        echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "counterrors", [], "any", false, false, false, 35)) ? ("error") : (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countwarnings", [], "any", false, false, false, 35)) ? ("warning") : ("none"))));
        echo " ";
        echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "logs", [], "any", false, false, false, 35))) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 36
        echo twig_source($this->env, "@WebProfiler/Icon/logger.svg");
        echo "</span>
        <strong>Logs</strong>
        ";
        // line 38
        if (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "counterrors", [], "any", false, false, false, 38) || twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countdeprecations", [], "any", false, false, false, 38)) || twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countwarnings", [], "any", false, false, false, 38))) {
            // line 39
            echo "            <span class=\"count\">
                <span>";
            // line 40
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "counterrors", [], "any", false, false, false, 40)) ? (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "counterrors", [], "any", false, false, false, 40)) : ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countdeprecations", [], "any", false, false, false, 40) + twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countwarnings", [], "any", false, false, false, 40)))), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 43
        echo "    </span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 46
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 47
        echo "    <h2>Log Messages</h2>

    ";
        // line 49
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "processedLogs", [], "any", false, false, false, 49))) {
            // line 50
            echo "        <div class=\"empty empty-panel\">
            <p>No log messages available.</p>
        </div>
    ";
        } else {
            // line 54
            echo "        ";
            $context["has_error_logs"] = (twig_length_filter($this->env, twig_array_filter($this->env, twig_array_column(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "processedLogs", [], "any", false, false, false, 54), "type"), function ($__type__) use ($context, $macros) { $context["type"] = $__type__; return ("error" == ($context["type"] ?? null)); })) > 0);
            // line 55
            echo "        ";
            $context["has_deprecation_logs"] = (twig_length_filter($this->env, twig_array_filter($this->env, twig_array_column(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "processedLogs", [], "any", false, false, false, 55), "type"), function ($__type__) use ($context, $macros) { $context["type"] = $__type__; return ("deprecation" == ($context["type"] ?? null)); })) > 0);
            // line 56
            echo "
        ";
            // line 57
            $context["filters"] = twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "filters", [], "any", false, false, false, 57);
            // line 58
            echo "        <div class=\"log-filters\">
            <div id=\"log-filter-type\" class=\"log-filter\">
                <ul class=\"tab-navigation\">
                    <li class=\"";
            // line 61
            echo ((( !($context["has_error_logs"] ?? null) &&  !($context["has_deprecation_logs"] ?? null))) ? ("active") : (""));
            echo "\">
                        <input ";
            // line 62
            echo ((( !($context["has_error_logs"] ?? null) &&  !($context["has_deprecation_logs"] ?? null))) ? ("checked") : (""));
            echo " type=\"radio\" id=\"filter-log-type-all\" name=\"filter-log-type\" value=\"all\">
                        <label for=\"filter-log-type-all\">All messages</label>
                    </li>

                    <li class=\"";
            // line 66
            echo ((($context["has_error_logs"] ?? null)) ? ("active") : (""));
            echo "\">
                        <input ";
            // line 67
            echo ((($context["has_error_logs"] ?? null)) ? ("checked") : (""));
            echo " type=\"radio\" id=\"filter-log-type-error\" name=\"filter-log-type\" value=\"error\">
                        <label for=\"filter-log-type-error\">
                            Errors
                            <span class=\"badge status-";
            // line 70
            echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "counterrors", [], "any", false, false, false, 70)) ? ("error") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "counterrors", [], "any", true, true, false, 70)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "counterrors", [], "any", false, false, false, 70), 0)) : (0)), "html", null, true);
            echo "</span>
                        </label>
                    </li>

                    <li class=\"";
            // line 74
            echo ((( !($context["has_error_logs"] ?? null) && ($context["has_deprecation_logs"] ?? null))) ? ("active") : (""));
            echo "\">
                        <input ";
            // line 75
            echo ((( !($context["has_error_logs"] ?? null) && ($context["has_deprecation_logs"] ?? null))) ? ("checked") : (""));
            echo " type=\"radio\" id=\"filter-log-type-deprecation\" name=\"filter-log-type\" value=\"deprecation\">
                        <label for=\"filter-log-type-deprecation\">
                            Deprecations
                            <span class=\"badge status-";
            // line 78
            echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countdeprecations", [], "any", false, false, false, 78)) ? ("warning") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countdeprecations", [], "any", true, true, false, 78)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countdeprecations", [], "any", false, false, false, 78), 0)) : (0)), "html", null, true);
            echo "</span>
                        </label>
                    </li>
                </ul>
            </div>

            <details id=\"log-filter-priority\" class=\"log-filter\">
                <summary>
                    <span class=\"icon\">";
            // line 86
            echo twig_source($this->env, "@WebProfiler/Icon/filter.svg");
            echo "</span>
                    Level (<span class=\"filter-active-num\">";
            // line 87
            echo twig_escape_filter($this->env, (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "priority", [], "any", false, false, false, 87)) - 1), "html", null, true);
            echo "</span>)
                </summary>

                <div class=\"log-filter-content\">
                    <div class=\"filter-select-all-or-none\">
                        <button type=\"button\" class=\"btn btn-link select-all\">Select All</button>
                        <button type=\"button\" class=\"btn btn-link select-none\">Select None</button>
                    </div>

                    ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "priority", [], "any", false, false, false, 96));
            foreach ($context['_seq'] as $context["label"] => $context["value"]) {
                // line 97
                echo "                        <div class=\"log-filter-option\">
                            <input ";
                // line 98
                echo ((("debug" != $context["value"])) ? ("checked") : (""));
                echo " type=\"checkbox\" id=\"filter-log-level-";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\" name=\"filter-log-level-";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\">
                            <label for=\"filter-log-level-";
                // line 99
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "</label>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['label'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "                </div>
            </details>

            <details id=\"log-filter-channel\" class=\"log-filter\">
                <summary>
                    <span class=\"icon\">";
            // line 107
            echo twig_source($this->env, "@WebProfiler/Icon/filter.svg");
            echo "</span>
                    Channel (<span class=\"filter-active-num\">";
            // line 108
            echo twig_escape_filter($this->env, (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "channel", [], "any", false, false, false, 108)) - 1), "html", null, true);
            echo "</span>)
                </summary>

                <div class=\"log-filter-content\">
                    <div class=\"filter-select-all-or-none\">
                        <button type=\"button\" class=\"btn btn-link select-all\">Select All</button>
                        <button type=\"button\" class=\"btn btn-link select-none\">Select None</button>
                    </div>

                    ";
            // line 117
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "channel", [], "any", false, false, false, 117));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 118
                echo "                        <div class=\"log-filter-option\">
                            <input ";
                // line 119
                echo ((("event" != $context["value"])) ? ("checked") : (""));
                echo " type=\"checkbox\" id=\"filter-log-channel-";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\" name=\"filter-log-channel-";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\">
                            <label for=\"filter-log-channel-";
                // line 120
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $context["value"]), "html", null, true);
                echo "</label>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "                </div>
            </details>
        </div>

        <table class=\"logs\">
            <colgroup>
                <col width=\"140px\">
                <col>
            </colgroup>

            <thead>
                <tr>
                    <th>Time</th>
                    <th>Message</th>
                </tr>
            </thead>

            <tbody>
                ";
            // line 141
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "processedLogs", [], "any", false, false, false, 141));
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
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 142
                echo "                    ";
                $context["css_class"] = ((("error" == twig_get_attribute($this->env, $this->source, $context["log"], "type", [], "any", false, false, false, 142))) ? ("error") : (((((twig_get_attribute($this->env, $this->source,                 // line 143
$context["log"], "priorityName", [], "any", false, false, false, 143) == "WARNING") || ("deprecation" == twig_get_attribute($this->env, $this->source, $context["log"], "type", [], "any", false, false, false, 143)))) ? ("warning") : (((("silenced" == twig_get_attribute($this->env, $this->source,                 // line 144
$context["log"], "type", [], "any", false, false, false, 144))) ? ("silenced") : (""))))));
                // line 146
                echo "                    <tr class=\"log-status-";
                echo twig_escape_filter($this->env, ($context["css_class"] ?? null), "html", null, true);
                echo "\" data-type=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "type", [], "any", false, false, false, 146), "html", null, true);
                echo "\" data-priority=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "priority", [], "any", false, false, false, 146), "html", null, true);
                echo "\" data-channel=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "channel", [], "any", false, false, false, 146), "html", null, true);
                echo "\" style=\"";
                echo (((("event" == twig_get_attribute($this->env, $this->source, $context["log"], "channel", [], "any", false, false, false, 146)) || ("DEBUG" == twig_get_attribute($this->env, $this->source, $context["log"], "priorityName", [], "any", false, false, false, 146)))) ? ("display: none") : (""));
                echo "\">
                        <td class=\"log-timestamp\">
                            <time title=\"";
                // line 148
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "timestamp", [], "any", false, false, false, 148), "r"), "html", null, true);
                echo "\" datetime=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "timestamp", [], "any", false, false, false, 148), "c"), "html", null, true);
                echo "\">
                                ";
                // line 149
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "timestamp", [], "any", false, false, false, 149), "H:i:s.v"), "html", null, true);
                echo "
                            </time>

                            ";
                // line 152
                if ((twig_in_filter(twig_get_attribute($this->env, $this->source, $context["log"], "type", [], "any", false, false, false, 152), [0 => "error", 1 => "deprecation", 2 => "silenced"]) || ("WARNING" == twig_get_attribute($this->env, $this->source, $context["log"], "priorityName", [], "any", false, false, false, 152)))) {
                    // line 153
                    echo "                                <span class=\"log-type-badge badge badge-";
                    echo twig_escape_filter($this->env, ($context["css_class"] ?? null), "html", null, true);
                    echo "\">
                                    ";
                    // line 154
                    if ((("error" == twig_get_attribute($this->env, $this->source, $context["log"], "type", [], "any", false, false, false, 154)) || ("WARNING" == twig_get_attribute($this->env, $this->source, $context["log"], "priorityName", [], "any", false, false, false, 154)))) {
                        // line 155
                        echo "                                        ";
                        echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "priorityName", [], "any", false, false, false, 155)), "html", null, true);
                        echo "
                                    ";
                    } else {
                        // line 157
                        echo "                                        ";
                        echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "type", [], "any", false, false, false, 157)), "html", null, true);
                        echo "
                                    ";
                    }
                    // line 159
                    echo "                                </span>
                            ";
                } else {
                    // line 161
                    echo "                                <span class=\"log-type-badge badge badge-";
                    echo twig_escape_filter($this->env, ($context["css_class"] ?? null), "html", null, true);
                    echo "\">
                                    ";
                    // line 162
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "priorityName", [], "any", false, false, false, 162)), "html", null, true);
                    echo "
                                </span>
                            ";
                }
                // line 165
                echo "                        </td>

                        <td class=\"font-normal\">
                            ";
                // line 168
                echo twig_call_macro($macros["helper"], "macro_render_log_message", ["debug", twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 168), $context["log"]], 168, $context, $this->getSourceContext());
                echo "
                        </td>
                    </tr>
                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 172
            echo "            </tbody>
        </table>

        <div class=\"no-logs-message empty\">
            <p>There are no log messages.</p>
        </div>

        <script>Sfjs.initializeLogsTable();</script>
    ";
        }
        // line 181
        echo "
    ";
        // line 182
        $context["compilerLogTotal"] = 0;
        // line 183
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "compilerLogs", [], "any", false, false, false, 183));
        foreach ($context['_seq'] as $context["_key"] => $context["logs"]) {
            // line 184
            echo "        ";
            $context["compilerLogTotal"] = (($context["compilerLogTotal"] ?? null) + twig_length_filter($this->env, $context["logs"]));
            // line 185
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['logs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 186
        echo "
    <details class=\"container-compilation-logs\">
        <summary>
            <h4>Container Compilation Logs <span class=\"text-muted\">(";
        // line 189
        echo twig_escape_filter($this->env, ($context["compilerLogTotal"] ?? null), "html", null, true);
        echo ")</span></h4>
            <span class=\"text-muted\">Log messages generated during the compilation of the service container.</span>
        </summary>

        ";
        // line 193
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "compilerLogs", [], "any", false, false, false, 193))) {
            // line 194
            echo "            <div class=\"empty\">
                <p>There are no compiler log messages.</p>
            </div>
        ";
        } else {
            // line 198
            echo "            <table class=\"container-logs\">
                <thead>
                <tr>
                    <th>Messages</th>
                    <th class=\"full-width\">Class</th>
                </tr>
                </thead>

                <tbody>
                ";
            // line 207
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "compilerLogs", [], "any", false, false, false, 207));
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
            foreach ($context['_seq'] as $context["class"] => $context["logs"]) {
                // line 208
                echo "                    <tr>
                        <td class=\"font-normal text-right\">";
                // line 209
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $context["logs"]), "html", null, true);
                echo "</td>
                        <td class=\"font-normal\">
                            ";
                // line 211
                $context["context_id"] = ("context-compiler-" . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 211));
                // line 212
                echo "
                            <button type=\"button\" class=\"btn btn-link sf-toggle\" data-toggle-selector=\"#";
                // line 213
                echo twig_escape_filter($this->env, ($context["context_id"] ?? null), "html", null, true);
                echo "\" data-toggle-alt-content=\"";
                echo twig_escape_filter($this->env, $context["class"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["class"], "html", null, true);
                echo "</button>

                            <div id=\"";
                // line 215
                echo twig_escape_filter($this->env, ($context["context_id"] ?? null), "html", null, true);
                echo "\" class=\"context sf-toggle-content sf-toggle-hidden\">
                                <ul class=\"break-long-words\">
                                    ";
                // line 217
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["logs"]);
                foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                    // line 218
                    echo "                                        <li>";
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpLog($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "message", [], "any", false, false, false, 218));
                    echo "</li>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 220
                echo "                                </ul>
                            </div>
                        </td>
                    </tr>
                ";
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
            unset($context['_seq'], $context['_iterated'], $context['class'], $context['logs'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 225
            echo "                </tbody>
            </table>
        ";
        }
        // line 228
        echo "    </details>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 231
    public function macro_render_log_message($__category__ = null, $__log_index__ = null, $__log__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "category" => $__category__,
            "log_index" => $__log_index__,
            "log" => $__log__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_log_message"));

            // line 232
            echo "    ";
            $context["has_context"] = (twig_get_attribute($this->env, $this->source, ($context["log"] ?? null), "context", [], "any", true, true, false, 232) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["log"] ?? null), "context", [], "any", false, false, false, 232)));
            // line 233
            echo "    ";
            $context["has_trace"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["log"] ?? null), "context", [], "any", false, true, false, 233), "exception", [], "any", false, true, false, 233), "trace", [], "any", true, true, false, 233);
            // line 234
            echo "
    ";
            // line 235
            if ( !($context["has_context"] ?? null)) {
                // line 236
                echo "        ";
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpLog($this->env, twig_get_attribute($this->env, $this->source, ($context["log"] ?? null), "message", [], "any", false, false, false, 236));
                echo "
    ";
            } else {
                // line 238
                echo "        ";
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpLog($this->env, twig_get_attribute($this->env, $this->source, ($context["log"] ?? null), "message", [], "any", false, false, false, 238), twig_get_attribute($this->env, $this->source, ($context["log"] ?? null), "context", [], "any", false, false, false, 238));
                echo "
    ";
            }
            // line 240
            echo "
    <div class=\"log-metadata\">
        ";
            // line 242
            if (twig_get_attribute($this->env, $this->source, ($context["log"] ?? null), "channel", [], "any", false, false, false, 242)) {
                // line 243
                echo "            <span class=\"badge\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["log"] ?? null), "channel", [], "any", false, false, false, 243), "html", null, true);
                echo "</span>
        ";
            }
            // line 245
            echo "
        ";
            // line 246
            if ((twig_get_attribute($this->env, $this->source, ($context["log"] ?? null), "errorCount", [], "any", true, true, false, 246) && (twig_get_attribute($this->env, $this->source, ($context["log"] ?? null), "errorCount", [], "any", false, false, false, 246) > 1))) {
                // line 247
                echo "            <span class=\"log-num-occurrences\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["log"] ?? null), "errorCount", [], "any", false, false, false, 247), "html", null, true);
                echo " times</span>
        ";
            }
            // line 249
            echo "
        ";
            // line 250
            if (($context["has_context"] ?? null)) {
                // line 251
                echo "            ";
                $context["context_id"] = ((("context-" . ($context["category"] ?? null)) . "-") . ($context["log_index"] ?? null));
                // line 252
                echo "            <span><button type=\"button\" class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                echo twig_escape_filter($this->env, ($context["context_id"] ?? null), "html", null, true);
                echo "\" data-toggle-alt-content=\"Hide context\">Show context</button></span>
        ";
            }
            // line 254
            echo "
        ";
            // line 255
            if (($context["has_trace"] ?? null)) {
                // line 256
                echo "            ";
                $context["trace_id"] = ((("trace-" . ($context["category"] ?? null)) . "-") . ($context["log_index"] ?? null));
                // line 257
                echo "            <span><button type=\"button\" class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                echo twig_escape_filter($this->env, ($context["trace_id"] ?? null), "html", null, true);
                echo "\" data-toggle-alt-content=\"Hide trace\">Show trace</button></span>
        ";
            }
            // line 259
            echo "
        ";
            // line 260
            if (($context["has_context"] ?? null)) {
                // line 261
                echo "            <div id=\"";
                echo twig_escape_filter($this->env, ($context["context_id"] ?? null), "html", null, true);
                echo "\" class=\"context sf-toggle-content sf-toggle-hidden\">
                ";
                // line 262
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, ($context["log"] ?? null), "context", [], "any", false, false, false, 262), 1);
                echo "
            </div>
        ";
            }
            // line 265
            echo "
        ";
            // line 266
            if (($context["has_trace"] ?? null)) {
                // line 267
                echo "            <div id=\"";
                echo twig_escape_filter($this->env, ($context["trace_id"] ?? null), "html", null, true);
                echo "\" class=\"context sf-toggle-content sf-toggle-hidden\">
                ";
                // line 268
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["log"] ?? null), "context", [], "any", false, false, false, 268), "exception", [], "any", false, false, false, 268), "trace", [], "any", false, false, false, 268), 1);
                echo "
            </div>
        ";
            }
            // line 271
            echo "    </div>
";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/logger.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  754 => 271,  748 => 268,  743 => 267,  741 => 266,  738 => 265,  732 => 262,  727 => 261,  725 => 260,  722 => 259,  716 => 257,  713 => 256,  711 => 255,  708 => 254,  702 => 252,  699 => 251,  697 => 250,  694 => 249,  688 => 247,  686 => 246,  683 => 245,  677 => 243,  675 => 242,  671 => 240,  665 => 238,  659 => 236,  657 => 235,  654 => 234,  651 => 233,  648 => 232,  630 => 231,  622 => 228,  617 => 225,  599 => 220,  590 => 218,  586 => 217,  581 => 215,  572 => 213,  569 => 212,  567 => 211,  562 => 209,  559 => 208,  542 => 207,  531 => 198,  525 => 194,  523 => 193,  516 => 189,  511 => 186,  505 => 185,  502 => 184,  497 => 183,  495 => 182,  492 => 181,  481 => 172,  463 => 168,  458 => 165,  452 => 162,  447 => 161,  443 => 159,  437 => 157,  431 => 155,  429 => 154,  424 => 153,  422 => 152,  416 => 149,  410 => 148,  396 => 146,  394 => 144,  393 => 143,  391 => 142,  374 => 141,  354 => 123,  343 => 120,  333 => 119,  330 => 118,  326 => 117,  314 => 108,  310 => 107,  303 => 102,  292 => 99,  282 => 98,  279 => 97,  275 => 96,  263 => 87,  259 => 86,  246 => 78,  240 => 75,  236 => 74,  227 => 70,  221 => 67,  217 => 66,  210 => 62,  206 => 61,  201 => 58,  199 => 57,  196 => 56,  193 => 55,  190 => 54,  184 => 50,  182 => 49,  178 => 47,  171 => 46,  163 => 43,  157 => 40,  154 => 39,  152 => 38,  147 => 36,  140 => 35,  133 => 34,  123 => 30,  120 => 29,  112 => 26,  102 => 21,  92 => 16,  88 => 14,  86 => 13,  83 => 12,  78 => 10,  73 => 9,  70 => 8,  67 => 7,  64 => 6,  57 => 5,  49 => 1,  47 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Collector/logger.html.twig", "/Users/jackrima/Sites/gentella/vendor/symfony/web-profiler-bundle/Resources/views/Collector/logger.html.twig");
    }
}
