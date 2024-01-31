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

/* @WebProfiler/Collector/time.html.twig */
class __TwigTemplate_3ca59ba233d2fc02f3db452071f7e892 extends Template
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
            'panelContent' => [$this, 'block_panelContent'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/time.html.twig"));

        // line 3
        $macros["helper"] = $this->macros["helper"] = $this;
        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/time.html.twig", 1);
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
        $context["has_time_events"] = (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 6)) > 0);
        // line 7
        echo "    ";
        $context["total_time"] = ((($context["has_time_events"] ?? null)) ? (twig_sprintf("%.0f", twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "duration", [], "any", false, false, false, 7))) : ("n/a"));
        // line 8
        echo "    ";
        $context["initialization_time"] = ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 8))) ? (twig_sprintf("%.0f", twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "inittime", [], "any", false, false, false, 8))) : ("n/a"));
        // line 9
        echo "    ";
        $context["status_color"] = (((($context["has_time_events"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "duration", [], "any", false, false, false, 9) > 1000))) ? ("yellow") : (""));
        // line 10
        echo "
    ";
        // line 11
        ob_start(function () { return ''; });
        // line 12
        echo "        ";
        echo twig_source($this->env, "@WebProfiler/Icon/time.svg");
        echo "
        <span class=\"sf-toolbar-value\">";
        // line 13
        echo twig_escape_filter($this->env, ($context["total_time"] ?? null), "html", null, true);
        echo "</span>
        <span class=\"sf-toolbar-label\">ms</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 16
        echo "
    ";
        // line 17
        ob_start(function () { return ''; });
        // line 18
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Total time</b>
            <span>";
        // line 20
        echo twig_escape_filter($this->env, ($context["total_time"] ?? null), "html", null, true);
        echo " ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Initialization time</b>
            <span>";
        // line 24
        echo twig_escape_filter($this->env, ($context["initialization_time"] ?? null), "html", null, true);
        echo " ms</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 27
        echo "
    ";
        // line 28
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null), "status" => ($context["status_color"] ?? null)]);
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 31
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 32
        echo "    <span class=\"label\">
        <span class=\"icon\">";
        // line 33
        echo twig_source($this->env, "@WebProfiler/Icon/time.svg");
        echo "</span>
        <strong>Performance</strong>
    </span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 38
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 39
        echo "    ";
        $context["has_time_events"] = (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 39)) > 0);
        // line 40
        echo "    <h2>Performance metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric-group\">
            <div class=\"metric\">
                <span class=\"value\">";
        // line 45
        echo twig_escape_filter($this->env, twig_sprintf("%.0f", twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "duration", [], "any", false, false, false, 45)), "html", null, true);
        echo " <span class=\"unit\">ms</span></span>
                <span class=\"label\">Total execution time</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
        // line 50
        echo twig_escape_filter($this->env, twig_sprintf("%.0f", twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "inittime", [], "any", false, false, false, 50)), "html", null, true);
        echo " <span class=\"unit\">ms</span></span>
                <span class=\"label\">Symfony initialization</span>
            </div>
        </div>

        ";
        // line 55
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "collectors", [], "any", false, false, false, 55), "memory", [], "any", false, false, false, 55)) {
            // line 56
            echo "            <div class=\"metric-divider\"></div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 59
            echo twig_escape_filter($this->env, twig_sprintf("%.2f", ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "collectors", [], "any", false, false, false, 59), "memory", [], "any", false, false, false, 59), "memory", [], "any", false, false, false, 59) / 1024) / 1024)), "html", null, true);
            echo " <span class=\"unit\">MiB</span></span>
                <span class=\"label\">Peak memory usage</span>
            </div>
        ";
        }
        // line 63
        echo "
        ";
        // line 64
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, false, 64)) > 0)) {
            // line 65
            echo "            <div class=\"metric-divider\"></div>

            <div class=\"metric-group\">
                <div class=\"metric\">
                    <span class=\"value\">";
            // line 69
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, false, 69)), "html", null, true);
            echo "</span>
                    <span class=\"label\">Sub-Request";
            // line 70
            echo (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, false, 70)) > 1)) ? ("s") : (""));
            echo "</span>
                </div>

                ";
            // line 73
            if (($context["has_time_events"] ?? null)) {
                // line 74
                echo "                    ";
                $context["subrequests_time"] = 0;
                // line 75
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, false, 75));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 76
                    echo "                        ";
                    $context["subrequests_time"] = (($context["subrequests_time"] ?? null) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "getcollector", [0 => "time"], "method", false, false, false, 76), "events", [], "any", false, false, false, 76), "__section__", [], "any", false, false, false, 76), "duration", [], "any", false, false, false, 76));
                    // line 77
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 78
                echo "                ";
            } else {
                // line 79
                echo "                    ";
                $context["subrequests_time"] = "n/a";
                // line 80
                echo "                ";
            }
            // line 81
            echo "
                <div class=\"metric\">
                    <span class=\"value\">";
            // line 83
            echo twig_escape_filter($this->env, ($context["subrequests_time"] ?? null), "html", null, true);
            echo " <span class=\"unit\">ms</span></span>
                    <span class=\"label\">Sub-Request";
            // line 84
            echo (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, false, 84)) > 1)) ? ("s") : (""));
            echo " time</span>
                </div>
            </div>
        ";
        }
        // line 88
        echo "    </div>

    <h2>Execution timeline</h2>

    ";
        // line 92
        if ( !twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "isStopwatchInstalled", [], "method", false, false, false, 92)) {
            // line 93
            echo "        <div class=\"empty empty-panel\">
            <p>The Stopwatch component is not installed. If you want to see timing events, run: <code>composer require symfony/stopwatch</code>.</p>
        </div>
    ";
        } elseif (twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 96
($context["collector"] ?? null), "events", [], "any", false, false, false, 96))) {
            // line 97
            echo "        <div class=\"empty\">
            <p>No timing events have been recorded. Check that symfony/stopwatch is installed and debugging enabled in the kernel.</p>
        </div>
    ";
        } else {
            // line 101
            echo "        ";
            $this->displayBlock("panelContent", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 105
    public function block_panelContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panelContent"));

        // line 106
        echo "    <form id=\"timeline-control\" action=\"\" method=\"get\">
        <input type=\"hidden\" name=\"panel\" value=\"time\">
        <label for=\"threshold\">Threshold</label>
        <input type=\"number\" name=\"threshold\" id=\"threshold\" value=\"1\" min=\"0\" placeholder=\"1.1\"> ms
        <span class=\"help\">(timeline only displays events with a duration longer than this threshold)</span>
    </form>

    ";
        // line 113
        if (twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "parent", [], "any", false, false, false, 113)) {
            // line 114
            echo "        <h3 class=\"dump-inline\">
            Sub-Request ";
            // line 115
            echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "getcollector", [0 => "request"], "method", false, false, false, 115), "requestattributes", [], "any", false, false, false, 115), "get", [0 => "_controller"], "method", false, false, false, 115));
            echo "
            <small>
                ";
            // line 117
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 117), "__section__", [], "any", false, false, false, 117), "duration", [], "any", false, false, false, 117), "html", null, true);
            echo " ms
                <a class=\"newline\" href=\"";
            // line 118
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "parent", [], "any", false, false, false, 118), "token", [], "any", false, false, false, 118), "panel" => "time"]), "html", null, true);
            echo "\">Return to parent request</a>
            </small>
        </h3>
    ";
        } elseif ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 121
($context["profile"] ?? null), "children", [], "any", false, false, false, 121)) > 0)) {
            // line 122
            echo "        <h3>
            Main Request <small>";
            // line 123
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 123), "__section__", [], "any", false, false, false, 123), "duration", [], "any", false, false, false, 123), "html", null, true);
            echo " ms</small>
        </h3>
    ";
        }
        // line 126
        echo "
    ";
        // line 127
        echo twig_call_macro($macros["helper"], "macro_display_timeline", [($context["token"] ?? null), twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 127), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 127), "__section__", [], "any", false, false, false, 127), "origin", [], "any", false, false, false, 127)], 127, $context, $this->getSourceContext());
        echo "

    ";
        // line 129
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, false, 129))) {
            // line 130
            echo "        <p class=\"help\">Note: sections with a striped background correspond to sub-requests.</p>

        <h3>Sub-requests <small>(";
            // line 132
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, false, 132)), "html", null, true);
            echo ")</small></h3>

        ";
            // line 134
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, false, 134));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 135
                echo "            ";
                $context["events"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "getcollector", [0 => "time"], "method", false, false, false, 135), "events", [], "any", false, false, false, 135);
                // line 136
                echo "            <h4>
                <a href=\"";
                // line 137
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => twig_get_attribute($this->env, $this->source, $context["child"], "token", [], "any", false, false, false, 137), "panel" => "time"]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "getcollector", [0 => "request"], "method", false, false, false, 137), "identifier", [], "any", false, false, false, 137), "html", null, true);
                echo "</a>
                <small>";
                // line 138
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "__section__", [], "any", false, false, false, 138), "duration", [], "any", false, false, false, 138), "html", null, true);
                echo " ms</small>
            </h4>

            ";
                // line 141
                echo twig_call_macro($macros["helper"], "macro_display_timeline", [twig_get_attribute($this->env, $this->source, $context["child"], "token", [], "any", false, false, false, 141), ($context["events"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 141), "__section__", [], "any", false, false, false, 141), "origin", [], "any", false, false, false, 141)], 141, $context, $this->getSourceContext());
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 143
            echo "    ";
        }
        // line 144
        echo "
<svg id=\"timeline-template\" width=\"0\" height=\"0\">
  <defs>
    <pattern id=\"subrequest\" class=\"timeline-subrequest-pattern\" patternUnits=\"userSpaceOnUse\" width=\"20\" height=\"20\" viewBox=\"0 0 40 40\">
        <path d=\"M0 40L40 0H20L0 20M40 40V20L20 40\"/>
    </pattern>
  </defs>
</svg>
<style type=\"text/css\">
";
        // line 153
        echo twig_include($this->env, $context, "@WebProfiler/Collector/time.css.twig");
        echo "
</style>
<script>
";
        // line 156
        echo twig_source($this->env, "@WebProfiler/Collector/time.js");
        echo "
</script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 160
    public function macro_dump_request_data($__token__ = null, $__events__ = null, $__origin__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "token" => $__token__,
            "events" => $__events__,
            "origin" => $__origin__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "dump_request_data"));

            // line 162
            $macros["__internal_parse_0"] = $this;
            // line 163
            echo "{
    id: \"";
            // line 164
            echo twig_escape_filter($this->env, ($context["token"] ?? null), "js", null, true);
            echo "\",
    left: ";
            // line 165
            echo twig_escape_filter($this->env, twig_sprintf("%F", (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "__section__", [], "any", false, false, false, 165), "origin", [], "any", false, false, false, 165) - ($context["origin"] ?? null))), "js", null, true);
            echo ",
    end: \"";
            // line 166
            echo twig_escape_filter($this->env, twig_sprintf("%F", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "__section__", [], "any", false, false, false, 166), "endtime", [], "any", false, false, false, 166)), "js", null, true);
            echo "\",
    events: [ ";
            // line 167
            echo twig_call_macro($macros["__internal_parse_0"], "macro_dump_events", [($context["events"] ?? null)], 167, $context, $this->getSourceContext());
            echo " ],
}
";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 172
    public function macro_dump_events($__events__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "events" => $__events__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "dump_events"));

            // line 174
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["events"] ?? null));
            foreach ($context['_seq'] as $context["name"] => $context["event"]) {
                // line 175
                if (("__section__" != $context["name"])) {
                    // line 176
                    echo "{
    name: \"";
                    // line 177
                    echo twig_escape_filter($this->env, $context["name"], "js", null, true);
                    echo "\",
    category: \"";
                    // line 178
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "category", [], "any", false, false, false, 178), "js", null, true);
                    echo "\",
    origin: ";
                    // line 179
                    echo twig_escape_filter($this->env, twig_sprintf("%F", twig_get_attribute($this->env, $this->source, $context["event"], "origin", [], "any", false, false, false, 179)), "js", null, true);
                    echo ",
    starttime: ";
                    // line 180
                    echo twig_escape_filter($this->env, twig_sprintf("%F", twig_get_attribute($this->env, $this->source, $context["event"], "starttime", [], "any", false, false, false, 180)), "js", null, true);
                    echo ",
    endtime: ";
                    // line 181
                    echo twig_escape_filter($this->env, twig_sprintf("%F", twig_get_attribute($this->env, $this->source, $context["event"], "endtime", [], "any", false, false, false, 181)), "js", null, true);
                    echo ",
    duration: ";
                    // line 182
                    echo twig_escape_filter($this->env, twig_sprintf("%F", twig_get_attribute($this->env, $this->source, $context["event"], "duration", [], "any", false, false, false, 182)), "js", null, true);
                    echo ",
    memory: ";
                    // line 183
                    echo twig_escape_filter($this->env, twig_sprintf("%.1F", ((twig_get_attribute($this->env, $this->source, $context["event"], "memory", [], "any", false, false, false, 183) / 1024) / 1024)), "js", null, true);
                    echo ",
    elements: {},
    periods: [";
                    // line 186
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["event"], "periods", [], "any", false, false, false, 186));
                    foreach ($context['_seq'] as $context["_key"] => $context["period"]) {
                        // line 187
                        echo "{
            start: ";
                        // line 188
                        echo twig_escape_filter($this->env, twig_sprintf("%F", twig_get_attribute($this->env, $this->source, $context["period"], "starttime", [], "any", false, false, false, 188)), "js", null, true);
                        echo ",
            end: ";
                        // line 189
                        echo twig_escape_filter($this->env, twig_sprintf("%F", twig_get_attribute($this->env, $this->source, $context["period"], "endtime", [], "any", false, false, false, 189)), "js", null, true);
                        echo ",
            duration: ";
                        // line 190
                        echo twig_escape_filter($this->env, twig_sprintf("%F", twig_get_attribute($this->env, $this->source, $context["period"], "duration", [], "any", false, false, false, 190)), "js", null, true);
                        echo ",
            elements: {}
        },";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['period'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 194
                    echo "],
},
";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 201
    public function macro_display_timeline($__token__ = null, $__events__ = null, $__origin__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "token" => $__token__,
            "events" => $__events__,
            "origin" => $__origin__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "display_timeline"));

            // line 202
            $macros["helper"] = $this;
            // line 203
            echo "    <div class=\"sf-profiler-timeline\">
        <div id=\"legend-";
            // line 204
            echo twig_escape_filter($this->env, ($context["token"] ?? null), "html", null, true);
            echo "\" class=\"legends\"></div>
        <svg id=\"timeline-";
            // line 205
            echo twig_escape_filter($this->env, ($context["token"] ?? null), "html", null, true);
            echo "\" class=\"timeline-graph\"></svg>
        <script>";
            // line 207
            echo "            window.addEventListener('load', function onLoad() {
                const theme = new Theme();

                new TimelineEngine(
                    theme,
                    new SvgRenderer(document.getElementById('timeline-";
            // line 212
            echo twig_escape_filter($this->env, ($context["token"] ?? null), "js", null, true);
            echo "')),
                    new Legend(document.getElementById('legend-";
            // line 213
            echo twig_escape_filter($this->env, ($context["token"] ?? null), "js", null, true);
            echo "'), theme),
                    document.getElementById('threshold'),
                    ";
            // line 215
            echo twig_call_macro($macros["helper"], "macro_dump_request_data", [($context["token"] ?? null), ($context["events"] ?? null), ($context["origin"] ?? null)], 215, $context, $this->getSourceContext());
            echo "
                );
            });
        ";
            // line 218
            echo "</script>
    </div>
";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  617 => 218,  611 => 215,  606 => 213,  602 => 212,  595 => 207,  591 => 205,  587 => 204,  584 => 203,  582 => 202,  564 => 201,  545 => 194,  536 => 190,  532 => 189,  528 => 188,  525 => 187,  521 => 186,  516 => 183,  512 => 182,  508 => 181,  504 => 180,  500 => 179,  496 => 178,  492 => 177,  489 => 176,  487 => 175,  483 => 174,  467 => 172,  452 => 167,  448 => 166,  444 => 165,  440 => 164,  437 => 163,  435 => 162,  417 => 160,  407 => 156,  401 => 153,  390 => 144,  387 => 143,  379 => 141,  373 => 138,  367 => 137,  364 => 136,  361 => 135,  357 => 134,  352 => 132,  348 => 130,  346 => 129,  341 => 127,  338 => 126,  332 => 123,  329 => 122,  327 => 121,  321 => 118,  317 => 117,  312 => 115,  309 => 114,  307 => 113,  298 => 106,  291 => 105,  280 => 101,  274 => 97,  272 => 96,  267 => 93,  265 => 92,  259 => 88,  252 => 84,  248 => 83,  244 => 81,  241 => 80,  238 => 79,  235 => 78,  229 => 77,  226 => 76,  221 => 75,  218 => 74,  216 => 73,  210 => 70,  206 => 69,  200 => 65,  198 => 64,  195 => 63,  188 => 59,  183 => 56,  181 => 55,  173 => 50,  165 => 45,  158 => 40,  155 => 39,  148 => 38,  137 => 33,  134 => 32,  127 => 31,  118 => 28,  115 => 27,  109 => 24,  102 => 20,  98 => 18,  96 => 17,  93 => 16,  87 => 13,  82 => 12,  80 => 11,  77 => 10,  74 => 9,  71 => 8,  68 => 7,  65 => 6,  58 => 5,  50 => 1,  48 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Collector/time.html.twig", "/Users/jackrima/Sites/gentella/vendor/symfony/web-profiler-bundle/Resources/views/Collector/time.html.twig");
    }
}
