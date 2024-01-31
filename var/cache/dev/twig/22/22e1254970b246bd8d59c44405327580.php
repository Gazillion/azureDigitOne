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

/* @Doctrine/Collector/db.html.twig */
class __TwigTemplate_3277a527508e1e9dd0d7baa9f168d323 extends Template
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
            'queries' => [$this, 'block_queries'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "isXmlHttpRequest", [], "any", false, false, false, 1)) ? ("@WebProfiler/Profiler/ajax_layout.html.twig") : ("@WebProfiler/Profiler/layout.html.twig")), "@Doctrine/Collector/db.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Doctrine/Collector/db.html.twig"));

        // line 3
        $macros["helper"] = $this->macros["helper"] = $this;
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
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
        if (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", [], "any", false, false, false, 6) > 0) || (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", [], "any", false, false, false, 6) > 0))) {
            // line 7
            echo "
        ";
            // line 8
            ob_start(function () { return ''; });
            // line 9
            echo "            ";
            $context["status"] = (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", [], "any", false, false, false, 9) > 0)) ? ("red") : ((((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", [], "any", false, false, false, 9) > 50)) ? ("yellow") : (""))));
            // line 10
            echo "
            ";
            // line 11
            if ((($context["profiler_markup_version"] ?? null) >= 3)) {
                // line 12
                echo "                ";
                echo twig_include($this->env, $context, "@Doctrine/Collector/database.svg");
                echo "
            ";
            } else {
                // line 14
                echo "                <span class=\"icon\">";
                echo twig_include($this->env, $context, "@Doctrine/Collector/icon.svg");
                echo "</span>
            ";
            }
            // line 16
            echo "
            ";
            // line 17
            if (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", [], "any", false, false, false, 17) == 0) && (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", [], "any", false, false, false, 17) > 0))) {
                // line 18
                echo "                <span class=\"sf-toolbar-value\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", [], "any", false, false, false, 18), "html", null, true);
                echo "</span>
                <span class=\"sf-toolbar-label\">errors</span>
            ";
            } else {
                // line 21
                echo "                <span class=\"sf-toolbar-value\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", [], "any", false, false, false, 21), "html", null, true);
                echo "</span>
                <span class=\"sf-toolbar-info-piece-additional-detail\">
                    <span class=\"sf-toolbar-label\">in</span>
                    <span class=\"sf-toolbar-value\">";
                // line 24
                echo twig_escape_filter($this->env, twig_sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "time", [], "any", false, false, false, 24) * 1000)), "html", null, true);
                echo "</span>
                    <span class=\"sf-toolbar-label\">ms</span>
                </span>
            ";
            }
            // line 28
            echo "        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 29
            echo "
        ";
            // line 30
            ob_start(function () { return ''; });
            // line 31
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Database Queries</b>
                <span class=\"sf-toolbar-status ";
            // line 33
            echo (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", [], "any", false, false, false, 33) > 50)) ? ("sf-toolbar-status-yellow") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", [], "any", false, false, false, 33), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Different statements</b>
                <span class=\"sf-toolbar-status\">";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "groupedQueryCount", [], "any", false, false, false, 37), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Query time</b>
                <span>";
            // line 41
            echo twig_escape_filter($this->env, twig_sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "time", [], "any", false, false, false, 41) * 1000)), "html", null, true);
            echo " ms</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Invalid entities</b>
                <span class=\"sf-toolbar-status ";
            // line 45
            echo (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", [], "any", false, false, false, 45) > 0)) ? ("sf-toolbar-status-red") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", [], "any", false, false, false, 45), "html", null, true);
            echo "</span>
            </div>
            ";
            // line 47
            if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheEnabled", [], "any", false, false, false, 47)) {
                // line 48
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache hits</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-green\">";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheHitsCount", [], "any", false, false, false, 50), "html", null, true);
                echo "</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache misses</b>
                    <span class=\"sf-toolbar-status ";
                // line 54
                echo (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheMissesCount", [], "any", false, false, false, 54) > 0)) ? ("sf-toolbar-status-yellow") : (""));
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheMissesCount", [], "any", false, false, false, 54), "html", null, true);
                echo "</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache puts</b>
                    <span class=\"sf-toolbar-status ";
                // line 58
                echo (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cachePutsCount", [], "any", false, false, false, 58) > 0)) ? ("sf-toolbar-status-yellow") : (""));
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cachePutsCount", [], "any", false, false, false, 58), "html", null, true);
                echo "</span>
                </div>
            ";
            } else {
                // line 61
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Second Level Cache</b>
                    <span class=\"sf-toolbar-status\">disabled</span>
                </div>
            ";
            }
            // line 66
            echo "        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 67
            echo "
        ";
            // line 68
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null), "status" => ((array_key_exists("status", $context)) ? (_twig_default_filter(($context["status"] ?? null), "")) : (""))]);
            echo "

    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 73
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 74
        echo "    <span class=\"label ";
        echo (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", [], "any", false, false, false, 74) > 0)) ? ("label-status-error") : (""));
        echo " ";
        echo (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", [], "any", false, false, false, 74) == 0)) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 75
        echo twig_include($this->env, $context, (("@Doctrine/Collector/" . (((($context["profiler_markup_version"] ?? null) < 3)) ? ("icon") : ("database"))) . ".svg"));
        echo "</span>
        <strong>Doctrine</strong>
        ";
        // line 77
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", [], "any", false, false, false, 77)) {
            // line 78
            echo "            <span class=\"count\">
                <span>";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", [], "any", false, false, false, 79), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 82
        echo "    </span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 85
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 86
        echo "    ";
        if (("explain" == ($context["page"] ?? null))) {
            // line 87
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("Doctrine\\Bundle\\DoctrineBundle\\Controller\\ProfilerController::explainAction", ["token" =>             // line 88
($context["token"] ?? null), "panel" => "db", "connectionName" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 90
($context["request"] ?? null), "query", [], "any", false, false, false, 90), "get", [0 => "connection"], "method", false, false, false, 90), "query" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 91
($context["request"] ?? null), "query", [], "any", false, false, false, 91), "get", [0 => "query"], "method", false, false, false, 91)]));
            // line 92
            echo "
    ";
        } else {
            // line 94
            echo "        ";
            $this->displayBlock("queries", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 98
    public function block_queries($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "queries"));

        // line 99
        echo "    <style>
        .time-container { position: relative; }
        .time-container .nowrap { position: relative; z-index: 1; text-shadow: 0 0 2px #fff; }
        .time-bar { display: block; position: absolute; top: 0; left: 0; bottom: 0; background: #e0e0e0; }
        .sql-runnable.sf-toggle-content.sf-toggle-visible { display: flex; flex-direction: column; }
        .sql-runnable button { align-self: end; }
    </style>

    <h2>Query Metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric-group\">
            <div class=\"metric\">
                <span class=\"value\">";
        // line 112
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", [], "any", false, false, false, 112), "html", null, true);
        echo "</span>
                <span class=\"label\">Database Queries</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
        // line 117
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "groupedQueryCount", [], "any", false, false, false, 117), "html", null, true);
        echo "</span>
                <span class=\"label\">Different statements</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
        // line 122
        echo twig_escape_filter($this->env, twig_sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "time", [], "any", false, false, false, 122) * 1000)), "html", null, true);
        echo " ms</span>
                <span class=\"label\">Query time</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
        // line 127
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", [], "any", false, false, false, 127), "html", null, true);
        echo "</span>
                <span class=\"label\">Invalid entities</span>
            </div>
        </div>

        ";
        // line 132
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheEnabled", [], "any", false, false, false, 132)) {
            // line 133
            echo "            <div class=\"metric-group\">
                <div class=\"metric\">
                    <span class=\"value\">";
            // line 135
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheHitsCount", [], "any", false, false, false, 135), "html", null, true);
            echo "</span>
                    <span class=\"label\">Cache hits</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">";
            // line 139
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheMissesCount", [], "any", false, false, false, 139), "html", null, true);
            echo "</span>
                    <span class=\"label\">Cache misses</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">";
            // line 143
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cachePutsCount", [], "any", false, false, false, 143), "html", null, true);
            echo "</span>
                    <span class=\"label\">Cache puts</span>
                </div>
            </div>
        ";
        }
        // line 148
        echo "    </div>

    <div class=\"sf-tabs\" style=\"margin-top: 20px;\">
        <div class=\"tab ";
        // line 151
        echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "queries", [], "any", false, false, false, 151))) ? ("disabled") : (""));
        echo "\">
            ";
        // line 152
        $context["group_queries"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "query", [], "any", false, false, false, 152), "getBoolean", [0 => "group"], "method", false, false, false, 152);
        // line 153
        echo "            <h3 class=\"tab-title\">
                ";
        // line 154
        if (($context["group_queries"] ?? null)) {
            // line 155
            echo "                    Grouped Statements
                ";
        } else {
            // line 157
            echo "                    Queries
                ";
        }
        // line 159
        echo "            </h3>

            <div class=\"tab-content\">
                ";
        // line 162
        if ( !twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "queries", [], "any", false, false, false, 162)) {
            // line 163
            echo "                    <div class=\"empty\">
                        <p>No executed queries.</p>
                    </div>
                ";
        } else {
            // line 167
            echo "                    ";
            if (($context["group_queries"] ?? null)) {
                // line 168
                echo "                        <p><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["panel" => "db", "token" => ($context["token"] ?? null)]), "html", null, true);
                echo "\">Show all queries</a></p>
                    ";
            } else {
                // line 170
                echo "                        <p><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["panel" => "db", "token" => ($context["token"] ?? null), "group" => true]), "html", null, true);
                echo "\">Group similar statements</a></p>
                    ";
            }
            // line 172
            echo "
                    ";
            // line 173
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "queries", [], "any", false, false, false, 173));
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
            foreach ($context['_seq'] as $context["connection"] => $context["queries"]) {
                // line 174
                echo "                        ";
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "connections", [], "any", false, false, false, 174)) > 1)) {
                    // line 175
                    echo "                            <h3>";
                    echo twig_escape_filter($this->env, $context["connection"], "html", null, true);
                    echo " <small>connection</small></h3>
                        ";
                }
                // line 177
                echo "
                        ";
                // line 178
                if (twig_test_empty($context["queries"])) {
                    // line 179
                    echo "                            <div class=\"empty\">
                                <p>No database queries were performed.</p>
                            </div>
                        ";
                } else {
                    // line 183
                    echo "                            ";
                    if (($context["group_queries"] ?? null)) {
                        // line 184
                        echo "                                ";
                        $context["queries"] = (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "groupedQueries", [], "any", false, false, false, 184)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["connection"]] ?? null) : null);
                        // line 185
                        echo "                            ";
                    }
                    // line 186
                    echo "                            <table class=\"alt queries-table\">
                                <thead>
                                <tr>
                                    ";
                    // line 189
                    if (($context["group_queries"] ?? null)) {
                        // line 190
                        echo "                                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 0, 'queries-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 190), "html", null, true);
                        echo "')\" data-sort-direction=\"1\" style=\"cursor: pointer;\">Time<span class=\"text-muted\">&#9660;</span></th>
                                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 1, 'queries-";
                        // line 191
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 191), "html", null, true);
                        echo "')\" style=\"cursor: pointer;\">Count<span></span></th>
                                    ";
                    } else {
                        // line 193
                        echo "                                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 0, 'queries-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 193), "html", null, true);
                        echo "')\" data-sort-direction=\"-1\" style=\"cursor: pointer;\">#<span class=\"text-muted\">&#9650;</span></th>
                                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 1, 'queries-";
                        // line 194
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 194), "html", null, true);
                        echo "')\" style=\"cursor: pointer;\">Time<span></span></th>
                                    ";
                    }
                    // line 196
                    echo "                                    <th style=\"width: 100%;\">Info</th>
                                </tr>
                                </thead>
                                <tbody id=\"queries-";
                    // line 199
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 199), "html", null, true);
                    echo "\">
                                ";
                    // line 200
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["queries"]);
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
                    foreach ($context['_seq'] as $context["i"] => $context["query"]) {
                        // line 201
                        echo "                                    ";
                        $context["i"] = ((($context["group_queries"] ?? null)) ? (twig_get_attribute($this->env, $this->source, $context["query"], "index", [], "any", false, false, false, 201)) : ($context["i"]));
                        // line 202
                        echo "                                    <tr id=\"queryNo-";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 202), "loop", [], "any", false, false, false, 202), "index", [], "any", false, false, false, 202), "html", null, true);
                        echo "\">
                                        ";
                        // line 203
                        if (($context["group_queries"] ?? null)) {
                            // line 204
                            echo "                                            <td class=\"time-container\">
                                                <span class=\"time-bar\" style=\"width:";
                            // line 205
                            echo twig_escape_filter($this->env, twig_sprintf("%0.2f", twig_get_attribute($this->env, $this->source, $context["query"], "executionPercent", [], "any", false, false, false, 205)), "html", null, true);
                            echo "%\"></span>
                                                <span class=\"nowrap\">";
                            // line 206
                            echo twig_escape_filter($this->env, twig_sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, $context["query"], "executionMS", [], "any", false, false, false, 206) * 1000)), "html", null, true);
                            echo "&nbsp;ms<br />(";
                            echo twig_escape_filter($this->env, twig_sprintf("%0.2f", twig_get_attribute($this->env, $this->source, $context["query"], "executionPercent", [], "any", false, false, false, 206)), "html", null, true);
                            echo "%)</span>
                                            </td>
                                            <td class=\"nowrap\">";
                            // line 208
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["query"], "count", [], "any", false, false, false, 208), "html", null, true);
                            echo "</td>
                                        ";
                        } else {
                            // line 210
                            echo "                                            <td class=\"nowrap\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 210), "html", null, true);
                            echo "</td>
                                            <td class=\"nowrap\">";
                            // line 211
                            echo twig_escape_filter($this->env, twig_sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, $context["query"], "executionMS", [], "any", false, false, false, 211) * 1000)), "html", null, true);
                            echo "&nbsp;ms</td>
                                        ";
                        }
                        // line 213
                        echo "                                        <td>
                                            ";
                        // line 214
                        echo $this->extensions['Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension']->prettifySql(twig_get_attribute($this->env, $this->source, $context["query"], "sql", [], "any", false, false, false, 214));
                        echo "

                                            <div>
                                                <strong class=\"font-normal text-small\">Parameters</strong>: ";
                        // line 217
                        echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, $context["query"], "params", [], "any", false, false, false, 217), 2);
                        echo "
                                            </div>

                                            <div class=\"text-small font-normal\">
                                                <a href=\"#\" class=\"sf-toggle link-inverse\" data-toggle-selector=\"#formatted-query-";
                        // line 221
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 221), "loop", [], "any", false, false, false, 221), "index", [], "any", false, false, false, 221), "html", null, true);
                        echo "\" data-toggle-alt-content=\"Hide formatted query\">View formatted query</a>

                                                ";
                        // line 223
                        if (twig_get_attribute($this->env, $this->source, $context["query"], "runnable", [], "any", false, false, false, 223)) {
                            // line 224
                            echo "                                                    &nbsp;&nbsp;
                                                    <a href=\"#\" class=\"sf-toggle link-inverse\" data-toggle-selector=\"#original-query-";
                            // line 225
                            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                            echo "-";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 225), "loop", [], "any", false, false, false, 225), "index", [], "any", false, false, false, 225), "html", null, true);
                            echo "\" data-toggle-alt-content=\"Hide runnable query\">View runnable query</a>
                                                ";
                        }
                        // line 227
                        echo "
                                                ";
                        // line 228
                        if (twig_get_attribute($this->env, $this->source, $context["query"], "explainable", [], "any", false, false, false, 228)) {
                            // line 229
                            echo "                                                    &nbsp;&nbsp;
                                                    <a class=\"link-inverse\" href=\"";
                            // line 230
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["panel" => "db", "token" => ($context["token"] ?? null), "page" => "explain", "connection" => $context["connection"], "query" => $context["i"]]), "html", null, true);
                            echo "\" onclick=\"return explain(this);\" data-target-id=\"explain-";
                            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                            echo "-";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 230), "loop", [], "any", false, false, false, 230), "index", [], "any", false, false, false, 230), "html", null, true);
                            echo "\">Explain query</a>
                                                ";
                        }
                        // line 232
                        echo "
                                                ";
                        // line 233
                        if (twig_get_attribute($this->env, $this->source, $context["query"], "backtrace", [], "any", true, true, false, 233)) {
                            // line 234
                            echo "                                                    &nbsp;&nbsp;
                                                    <a href=\"#\" class=\"sf-toggle link-inverse\" data-toggle-selector=\"#backtrace-";
                            // line 235
                            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                            echo "-";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 235), "loop", [], "any", false, false, false, 235), "index", [], "any", false, false, false, 235), "html", null, true);
                            echo "\" data-toggle-alt-content=\"Hide query backtrace\">View query backtrace</a>
                                                ";
                        }
                        // line 237
                        echo "                                            </div>

                                            <div id=\"formatted-query-";
                        // line 239
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 239), "loop", [], "any", false, false, false, 239), "index", [], "any", false, false, false, 239), "html", null, true);
                        echo "\" class=\"sql-runnable hidden\">
                                                ";
                        // line 240
                        echo $this->extensions['Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension']->formatSql(twig_get_attribute($this->env, $this->source, $context["query"], "sql", [], "any", false, false, false, 240), true);
                        echo "
                                                <button class=\"btn btn-sm hidden\" data-clipboard-text=\"";
                        // line 241
                        echo twig_escape_filter($this->env, $this->extensions['Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension']->formatSql(twig_get_attribute($this->env, $this->source, $context["query"], "sql", [], "any", false, false, false, 241), false), "html_attr");
                        echo "\">Copy</button>
                                            </div>

                                            ";
                        // line 244
                        if (twig_get_attribute($this->env, $this->source, $context["query"], "runnable", [], "any", false, false, false, 244)) {
                            // line 245
                            echo "                                                <div id=\"original-query-";
                            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                            echo "-";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 245), "loop", [], "any", false, false, false, 245), "index", [], "any", false, false, false, 245), "html", null, true);
                            echo "\" class=\"sql-runnable hidden\">
                                                    ";
                            // line 246
                            $context["runnable_sql"] = $this->extensions['Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension']->replaceQueryParameters((twig_get_attribute($this->env, $this->source, $context["query"], "sql", [], "any", false, false, false, 246) . ";"), twig_get_attribute($this->env, $this->source, $context["query"], "params", [], "any", false, false, false, 246));
                            // line 247
                            echo "                                                    ";
                            echo $this->extensions['Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension']->prettifySql(($context["runnable_sql"] ?? null));
                            echo "
                                                    <button class=\"btn btn-sm hidden\" data-clipboard-text=\"";
                            // line 248
                            echo twig_escape_filter($this->env, ($context["runnable_sql"] ?? null), "html_attr");
                            echo "\">Copy</button>
                                                </div>
                                            ";
                        }
                        // line 251
                        echo "
                                            ";
                        // line 252
                        if (twig_get_attribute($this->env, $this->source, $context["query"], "explainable", [], "any", false, false, false, 252)) {
                            // line 253
                            echo "                                                <div id=\"explain-";
                            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                            echo "-";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 253), "loop", [], "any", false, false, false, 253), "index", [], "any", false, false, false, 253), "html", null, true);
                            echo "\" class=\"sql-explain\"></div>
                                            ";
                        }
                        // line 255
                        echo "
                                            ";
                        // line 256
                        if (twig_get_attribute($this->env, $this->source, $context["query"], "backtrace", [], "any", true, true, false, 256)) {
                            // line 257
                            echo "                                                <div id=\"backtrace-";
                            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                            echo "-";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 257), "loop", [], "any", false, false, false, 257), "index", [], "any", false, false, false, 257), "html", null, true);
                            echo "\" class=\"hidden\">
                                                    <table>
                                                        <thead>
                                                        <tr>
                                                            <th scope=\"col\">#</th>
                                                            <th scope=\"col\">File/Call</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        ";
                            // line 266
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["query"], "backtrace", [], "any", false, false, false, 266));
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
                            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                                // line 267
                                echo "                                                            <tr>
                                                                <td>";
                                // line 268
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 268), "html", null, true);
                                echo "</td>
                                                                <td>
                                                                            <span class=\"text-small\">
                                                                                ";
                                // line 271
                                $context["line_number"] = ((twig_get_attribute($this->env, $this->source, $context["trace"], "line", [], "any", true, true, false, 271)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["trace"], "line", [], "any", false, false, false, 271), 1)) : (1));
                                // line 272
                                echo "                                                                                ";
                                if (twig_get_attribute($this->env, $this->source, $context["trace"], "file", [], "any", true, true, false, 272)) {
                                    // line 273
                                    echo "                                                                                    <a href=\"";
                                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(twig_get_attribute($this->env, $this->source, $context["trace"], "file", [], "any", false, false, false, 273), ($context["line_number"] ?? null)), "html", null, true);
                                    echo "\">
                                                                                ";
                                }
                                // line 275
                                echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, $context["trace"], "class", [], "any", true, true, false, 275)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["trace"], "class", [], "any", false, false, false, 275))) : ("")) . ((twig_get_attribute($this->env, $this->source, $context["trace"], "class", [], "any", true, true, false, 275)) ? (((twig_get_attribute($this->env, $this->source, $context["trace"], "type", [], "any", true, true, false, 275)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["trace"], "type", [], "any", false, false, false, 275), "::")) : ("::"))) : (""))), "html", null, true);
                                // line 276
                                echo "<span class=\"status-warning\">";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trace"], "function", [], "any", false, false, false, 276), "html", null, true);
                                echo "</span>
                                                                                ";
                                // line 277
                                if (twig_get_attribute($this->env, $this->source, $context["trace"], "file", [], "any", true, true, false, 277)) {
                                    // line 278
                                    echo "                                                                                    </a>
                                                                                ";
                                }
                                // line 280
                                echo "                                                                                (line ";
                                echo twig_escape_filter($this->env, ($context["line_number"] ?? null), "html", null, true);
                                echo ")
                                                                            </span>
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
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 285
                            echo "                                                        </tbody>
                                                    </table>
                                                </div>
                                            ";
                        }
                        // line 289
                        echo "                                        </td>
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
                    unset($context['_seq'], $context['_iterated'], $context['i'], $context['query'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 292
                    echo "                                </tbody>
                            </table>
                        ";
                }
                // line 295
                echo "                    ";
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
            unset($context['_seq'], $context['_iterated'], $context['connection'], $context['queries'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 296
            echo "                ";
        }
        // line 297
        echo "            </div>
        </div>

        <div class=\"tab ";
        // line 300
        echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "connections", [], "any", false, false, false, 300))) ? ("disabled") : (""));
        echo "\">
            <h3 class=\"tab-title\">Database Connections</h3>
            <div class=\"tab-content\">
                ";
        // line 303
        if ( !twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "connections", [], "any", false, false, false, 303)) {
            // line 304
            echo "                    <div class=\"empty\">
                        <p>There are no configured database connections.</p>
                    </div>
                ";
        } else {
            // line 308
            echo "                    ";
            echo twig_call_macro($macros["helper"], "macro_render_simple_table", ["Name", "Service", twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "connections", [], "any", false, false, false, 308)], 308, $context, $this->getSourceContext());
            echo "
                ";
        }
        // line 310
        echo "            </div>
        </div>

        <div class=\"tab ";
        // line 313
        echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "managers", [], "any", false, false, false, 313))) ? ("disabled") : (""));
        echo "\">
            <h3 class=\"tab-title\">Entity Managers</h3>
            <div class=\"tab-content\">

                ";
        // line 317
        if ( !twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "managers", [], "any", false, false, false, 317)) {
            // line 318
            echo "                    <div class=\"empty\">
                        <p>There are no configured entity managers.</p>
                    </div>
                ";
        } else {
            // line 322
            echo "                    ";
            echo twig_call_macro($macros["helper"], "macro_render_simple_table", ["Name", "Service", twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "managers", [], "any", false, false, false, 322)], 322, $context, $this->getSourceContext());
            echo "
                ";
        }
        // line 324
        echo "            </div>
        </div>

        <div class=\"tab ";
        // line 327
        echo (( !twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheEnabled", [], "any", false, false, false, 327)) ? ("disabled") : (""));
        echo "\">
            <h3 class=\"tab-title\">Second Level Cache</h3>
            <div class=\"tab-content\">

                ";
        // line 331
        if ( !twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheEnabled", [], "any", false, false, false, 331)) {
            // line 332
            echo "                    <div class=\"empty\">
                        <p>Second Level Cache is not enabled.</p>
                    </div>
                ";
        } else {
            // line 336
            echo "                    ";
            if ( !twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheCounts", [], "any", false, false, false, 336)) {
                // line 337
                echo "                        <div class=\"empty\">
                            <p>Second level cache information is not available.</p>
                        </div>
                    ";
            } else {
                // line 341
                echo "                        <div class=\"metrics\">
                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 343
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheCounts", [], "any", false, false, false, 343), "hits", [], "any", false, false, false, 343), "html", null, true);
                echo "</span>
                                <span class=\"label\">Hits</span>
                            </div>

                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 348
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheCounts", [], "any", false, false, false, 348), "misses", [], "any", false, false, false, 348), "html", null, true);
                echo "</span>
                                <span class=\"label\">Misses</span>
                            </div>

                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 353
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheCounts", [], "any", false, false, false, 353), "puts", [], "any", false, false, false, 353), "html", null, true);
                echo "</span>
                                <span class=\"label\">Puts</span>
                            </div>
                        </div>

                        ";
                // line 358
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheRegions", [], "any", false, false, false, 358), "hits", [], "any", false, false, false, 358)) {
                    // line 359
                    echo "                            <h3>Number of cache hits</h3>
                            ";
                    // line 360
                    echo twig_call_macro($macros["helper"], "macro_render_simple_table", ["Region", "Hits", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheRegions", [], "any", false, false, false, 360), "hits", [], "any", false, false, false, 360)], 360, $context, $this->getSourceContext());
                    echo "
                        ";
                }
                // line 362
                echo "
                        ";
                // line 363
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheRegions", [], "any", false, false, false, 363), "misses", [], "any", false, false, false, 363)) {
                    // line 364
                    echo "                            <h3>Number of cache misses</h3>
                            ";
                    // line 365
                    echo twig_call_macro($macros["helper"], "macro_render_simple_table", ["Region", "Misses", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheRegions", [], "any", false, false, false, 365), "misses", [], "any", false, false, false, 365)], 365, $context, $this->getSourceContext());
                    echo "
                        ";
                }
                // line 367
                echo "
                        ";
                // line 368
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheRegions", [], "any", false, false, false, 368), "puts", [], "any", false, false, false, 368)) {
                    // line 369
                    echo "                            <h3>Number of cache puts</h3>
                            ";
                    // line 370
                    echo twig_call_macro($macros["helper"], "macro_render_simple_table", ["Region", "Puts", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheRegions", [], "any", false, false, false, 370), "puts", [], "any", false, false, false, 370)], 370, $context, $this->getSourceContext());
                    echo "
                        ";
                }
                // line 372
                echo "                    ";
            }
            // line 373
            echo "                ";
        }
        // line 374
        echo "            </div>
        </div>

        <div class=\"tab ";
        // line 377
        echo (( !twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "entities", [], "any", false, false, false, 377)) ? ("disabled") : (""));
        echo "\">
            <h3 class=\"tab-title\">Entities Mapping</h3>
            <div class=\"tab-content\">

                ";
        // line 381
        if ( !twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "entities", [], "any", false, false, false, 381)) {
            // line 382
            echo "                    <div class=\"empty\">
                        <p>No mapped entities.</p>
                    </div>
                ";
        } else {
            // line 386
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "entities", [], "any", false, false, false, 386));
            foreach ($context['_seq'] as $context["manager"] => $context["classes"]) {
                // line 387
                echo "                        ";
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "managers", [], "any", false, false, false, 387)) > 1)) {
                    // line 388
                    echo "                            <h3>";
                    echo twig_escape_filter($this->env, $context["manager"], "html", null, true);
                    echo " <small>entity manager</small></h3>
                        ";
                }
                // line 390
                echo "
                        ";
                // line 391
                if (twig_test_empty($context["classes"])) {
                    // line 392
                    echo "                            <div class=\"empty\">
                                <p>No loaded entities.</p>
                            </div>
                        ";
                } else {
                    // line 396
                    echo "                            <table>
                                <thead>
                                <tr>
                                    <th scope=\"col\">Class</th>
                                    <th scope=\"col\">Mapping errors</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
                    // line 404
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["classes"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
                        // line 405
                        echo "                                    ";
                        $context["contains_errors"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "mappingErrors", [], "any", false, true, false, 405), $context["manager"], [], "array", true, true, false, 405) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "mappingErrors", [], "any", false, true, false, 405), $context["manager"], [], "array", false, true, false, 405), twig_get_attribute($this->env, $this->source, $context["class"], "class", [], "any", false, false, false, 405), [], "array", true, true, false, 405));
                        // line 406
                        echo "                                    <tr class=\"";
                        echo ((($context["contains_errors"] ?? null)) ? ("status-error") : (""));
                        echo "\">
                                        <td>
                                <a href=\"";
                        // line 408
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(twig_get_attribute($this->env, $this->source, $context["class"], "file", [], "any", false, false, false, 408), twig_get_attribute($this->env, $this->source, $context["class"], "line", [], "any", false, false, false, 408)), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["class"], "class", [], "any", false, false, false, 408), "html", null, true);
                        echo "</a>
                            </td>
                                        <td class=\"font-normal\">
                                            ";
                        // line 411
                        if (($context["contains_errors"] ?? null)) {
                            // line 412
                            echo "                                                <ul>
                                                    ";
                            // line 413
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable((($__internal_compile_1 = (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "mappingErrors", [], "any", false, false, false, 413)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["manager"]] ?? null) : null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["class"], "class", [], "any", false, false, false, 413)] ?? null) : null));
                            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                                // line 414
                                echo "                                                        <li>";
                                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                                echo "</li>
                                                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 416
                            echo "                                                </ul>
                                            ";
                        } else {
                            // line 418
                            echo "                                                No errors.
                                            ";
                        }
                        // line 420
                        echo "                                        </td>
                                    </tr>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 423
                    echo "                                </tbody>
                            </table>
                        ";
                }
                // line 426
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['manager'], $context['classes'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 427
            echo "                ";
        }
        // line 428
        echo "            </div>
        </div>
    </div>

    <script type=\"text/javascript\">//<![CDATA[
        function explain(link) {
            \"use strict\";

            var targetId = link.getAttribute('data-target-id');
            var targetElement = document.getElementById(targetId);

            if (targetElement.style.display != 'block') {
                Sfjs.load(targetId, link.href, null, function(xhr, el) {
                    el.innerHTML = 'An error occurred while loading the query explanation.';
                });

                targetElement.style.display = 'block';
                link.innerHTML = 'Hide query explanation';
            } else {
                targetElement.style.display = 'none';
                link.innerHTML = 'Explain query';
            }

            return false;
        }

        function sortTable(header, column, targetId) {
            \"use strict\";

            var direction = parseInt(header.getAttribute('data-sort-direction')) || 1,
                items = [],
                target = document.getElementById(targetId),
                rows = target.children,
                headers = header.parentElement.children,
                i;

            for (i = 0; i < rows.length; ++i) {
                items.push(rows[i]);
            }

            for (i = 0; i < headers.length; ++i) {
                headers[i].removeAttribute('data-sort-direction');
                if (headers[i].children.length > 0) {
                    headers[i].children[0].innerHTML = '';
                }
            }

            header.setAttribute('data-sort-direction', (-1*direction).toString());
            header.children[0].innerHTML = direction > 0 ? '<span class=\"text-muted\">&#9650;</span>' : '<span class=\"text-muted\">&#9660;</span>';

            items.sort(function(a, b) {
                return direction * (parseFloat(a.children[column].innerHTML) - parseFloat(b.children[column].innerHTML));
            });

            for (i = 0; i < items.length; ++i) {
                Sfjs.removeClass(items[i], i % 2 ? 'even' : 'odd');
                Sfjs.addClass(items[i], i % 2 ? 'odd' : 'even');
                target.appendChild(items[i]);
            }
        }

        if (navigator.clipboard) {
            document.querySelectorAll('[data-clipboard-text]').forEach(function(button) {
                Sfjs.removeClass(button, 'hidden');
                button.addEventListener('click', function() {
                    navigator.clipboard.writeText(button.getAttribute('data-clipboard-text'));
                })
            });
        }

        //]]></script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 501
    public function macro_render_simple_table($__label1__ = null, $__label2__ = null, $__data__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label1" => $__label1__,
            "label2" => $__label2__,
            "data" => $__data__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_simple_table"));

            // line 502
            echo "    <table>
        <thead>
        <tr>
            <th scope=\"col\" class=\"key\">";
            // line 505
            echo twig_escape_filter($this->env, ($context["label1"] ?? null), "html", null, true);
            echo "</th>
            <th scope=\"col\">";
            // line 506
            echo twig_escape_filter($this->env, ($context["label2"] ?? null), "html", null, true);
            echo "</th>
        </tr>
        </thead>
        <tbody>
        ";
            // line 510
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 511
                echo "            <tr>
                <th scope=\"row\">";
                // line 512
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "</th>
                <td>";
                // line 513
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 516
            echo "        </tbody>
    </table>
";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@Doctrine/Collector/db.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1222 => 516,  1213 => 513,  1209 => 512,  1206 => 511,  1202 => 510,  1195 => 506,  1191 => 505,  1186 => 502,  1168 => 501,  1090 => 428,  1087 => 427,  1081 => 426,  1076 => 423,  1068 => 420,  1064 => 418,  1060 => 416,  1051 => 414,  1047 => 413,  1044 => 412,  1042 => 411,  1034 => 408,  1028 => 406,  1025 => 405,  1021 => 404,  1011 => 396,  1005 => 392,  1003 => 391,  1000 => 390,  994 => 388,  991 => 387,  986 => 386,  980 => 382,  978 => 381,  971 => 377,  966 => 374,  963 => 373,  960 => 372,  955 => 370,  952 => 369,  950 => 368,  947 => 367,  942 => 365,  939 => 364,  937 => 363,  934 => 362,  929 => 360,  926 => 359,  924 => 358,  916 => 353,  908 => 348,  900 => 343,  896 => 341,  890 => 337,  887 => 336,  881 => 332,  879 => 331,  872 => 327,  867 => 324,  861 => 322,  855 => 318,  853 => 317,  846 => 313,  841 => 310,  835 => 308,  829 => 304,  827 => 303,  821 => 300,  816 => 297,  813 => 296,  799 => 295,  794 => 292,  778 => 289,  772 => 285,  752 => 280,  748 => 278,  746 => 277,  741 => 276,  739 => 275,  733 => 273,  730 => 272,  728 => 271,  722 => 268,  719 => 267,  702 => 266,  687 => 257,  685 => 256,  682 => 255,  674 => 253,  672 => 252,  669 => 251,  663 => 248,  658 => 247,  656 => 246,  649 => 245,  647 => 244,  641 => 241,  637 => 240,  631 => 239,  627 => 237,  620 => 235,  617 => 234,  615 => 233,  612 => 232,  603 => 230,  600 => 229,  598 => 228,  595 => 227,  588 => 225,  585 => 224,  583 => 223,  576 => 221,  569 => 217,  563 => 214,  560 => 213,  555 => 211,  550 => 210,  545 => 208,  538 => 206,  534 => 205,  531 => 204,  529 => 203,  522 => 202,  519 => 201,  502 => 200,  498 => 199,  493 => 196,  488 => 194,  483 => 193,  478 => 191,  473 => 190,  471 => 189,  466 => 186,  463 => 185,  460 => 184,  457 => 183,  451 => 179,  449 => 178,  446 => 177,  440 => 175,  437 => 174,  420 => 173,  417 => 172,  411 => 170,  405 => 168,  402 => 167,  396 => 163,  394 => 162,  389 => 159,  385 => 157,  381 => 155,  379 => 154,  376 => 153,  374 => 152,  370 => 151,  365 => 148,  357 => 143,  350 => 139,  343 => 135,  339 => 133,  337 => 132,  329 => 127,  321 => 122,  313 => 117,  305 => 112,  290 => 99,  283 => 98,  272 => 94,  268 => 92,  266 => 91,  265 => 90,  264 => 88,  262 => 87,  259 => 86,  252 => 85,  244 => 82,  238 => 79,  235 => 78,  233 => 77,  228 => 75,  221 => 74,  214 => 73,  203 => 68,  200 => 67,  197 => 66,  190 => 61,  182 => 58,  173 => 54,  166 => 50,  162 => 48,  160 => 47,  153 => 45,  146 => 41,  139 => 37,  130 => 33,  126 => 31,  124 => 30,  121 => 29,  118 => 28,  111 => 24,  104 => 21,  97 => 18,  95 => 17,  92 => 16,  86 => 14,  80 => 12,  78 => 11,  75 => 10,  72 => 9,  70 => 8,  67 => 7,  64 => 6,  57 => 5,  50 => 1,  48 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Doctrine/Collector/db.html.twig", "/Users/jackrima/Sites/gentella/vendor/doctrine/doctrine-bundle/Resources/views/Collector/db.html.twig");
    }
}
