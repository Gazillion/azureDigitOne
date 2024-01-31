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

/* @WebProfiler/Collector/serializer.html.twig */
class __TwigTemplate_b6abf44a4d9fd6501bc2865ea471f524 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/serializer.html.twig"));

        // line 3
        $macros["helper"] = $this->macros["helper"] = $this;
        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/serializer.html.twig", 1);
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
        if ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "handledCount", [], "any", false, false, false, 6) > 0)) {
            // line 7
            echo "        ";
            ob_start(function () { return ''; });
            // line 8
            echo "            ";
            echo twig_source($this->env, "@WebProfiler/Icon/serializer.svg");
            echo "
            <span class=\"sf-toolbar-value\">
                ";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "handledCount", [], "any", false, false, false, 10), "html", null, true);
            echo "
            </span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 13
            echo "
        ";
            // line 14
            ob_start(function () { return ''; });
            // line 15
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Total calls</b>
                <span class=\"sf-toolbar-status\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "handledCount", [], "any", false, false, false, 17), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Total time</b>
                <span>
                    ";
            // line 22
            echo twig_escape_filter($this->env, twig_sprintf("%.2f", (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "totalTime", [], "any", false, false, false, 22) * 1000)), "html", null, true);
            echo " <span class=\"unit\">ms</span>
                </span>
            </div>

            <div class=\"detailed-metrics\">
                <div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Serialize</b>
                        <span class=\"sf-toolbar-status\">";
            // line 30
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 30), "serialize", [], "any", false, false, false, 30)), "html", null, true);
            echo "</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Deserialize</b>
                        <span class=\"sf-toolbar-status\">";
            // line 34
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 34), "deserialize", [], "any", false, false, false, 34)), "html", null, true);
            echo "</span>
                    </div>
                </div>
                <div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Encode</b>
                        <span class=\"sf-toolbar-status\">";
            // line 40
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 40), "encode", [], "any", false, false, false, 40)), "html", null, true);
            echo "</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Decode</b>
                        <span class=\"sf-toolbar-status\">";
            // line 44
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 44), "decode", [], "any", false, false, false, 44)), "html", null, true);
            echo "</span>
                    </div>
                </div>
                <div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Normalize</b>
                        <span class=\"sf-toolbar-status\">";
            // line 50
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 50), "normalize", [], "any", false, false, false, 50)), "html", null, true);
            echo "</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Denormalize</b>
                        <span class=\"sf-toolbar-status\">";
            // line 54
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 54), "denormalize", [], "any", false, false, false, 54)), "html", null, true);
            echo "</span>
                    </div>
                </div>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 59
            echo "
        ";
            // line 60
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null)]);
            echo "
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 64
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 65
        echo "    <span class=\"label ";
        echo (( !twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "handledCount", [], "any", false, false, false, 65)) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 66
        echo twig_source($this->env, "@WebProfiler/Icon/serializer.svg");
        echo "</span>
        <strong>Serializer</strong>
    </span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 71
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 72
        echo "    <h2>Serializer</h2>
    <div class=\"sf-serializer sf-reset\">
        ";
        // line 74
        if ( !twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "handledCount", [], "any", false, false, false, 74)) {
            // line 75
            echo "            <div class=\"empty empty-panel\">
                <p>Nothing was handled by the serializer for this request.</p>
            </div>
        ";
        } else {
            // line 79
            echo "            <div class=\"metrics\">
                <div class=\"metric\">
                    <span class=\"value\">";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "handledCount", [], "any", false, false, false, 81), "html", null, true);
            echo "</span>
                    <span class=\"label\">Handled</span>
                </div>

                <div class=\"metric\">
                    <span class=\"value\">";
            // line 86
            echo twig_escape_filter($this->env, twig_sprintf("%.2f", (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "totalTime", [], "any", false, false, false, 86) * 1000)), "html", null, true);
            echo " <span class=\"unit\">ms</span></span>
                    <span class=\"label\">Total time</span>
                </div>
            </div>

            <div class=\"sf-tabs\">
                ";
            // line 92
            echo twig_call_macro($macros["helper"], "macro_render_serialize_tab", [twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 92), true], 92, $context, $this->getSourceContext());
            echo "
                ";
            // line 93
            echo twig_call_macro($macros["helper"], "macro_render_serialize_tab", [twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 93), false], 93, $context, $this->getSourceContext());
            echo "

                ";
            // line 95
            echo twig_call_macro($macros["helper"], "macro_render_normalize_tab", [twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 95), true], 95, $context, $this->getSourceContext());
            echo "
                ";
            // line 96
            echo twig_call_macro($macros["helper"], "macro_render_normalize_tab", [twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 96), false], 96, $context, $this->getSourceContext());
            echo "

                ";
            // line 98
            echo twig_call_macro($macros["helper"], "macro_render_encode_tab", [twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 98), true], 98, $context, $this->getSourceContext());
            echo "
                ";
            // line 99
            echo twig_call_macro($macros["helper"], "macro_render_encode_tab", [twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 99), false], 99, $context, $this->getSourceContext());
            echo "
            </div>
        ";
        }
        // line 102
        echo "    </div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 105
    public function macro_render_serialize_tab($__collectorData__ = null, $__serialize__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "collectorData" => $__collectorData__,
            "serialize" => $__serialize__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_serialize_tab"));

            // line 106
            echo "    ";
            $context["data"] = ((($context["serialize"] ?? null)) ? (twig_get_attribute($this->env, $this->source, ($context["collectorData"] ?? null), "serialize", [], "any", false, false, false, 106)) : (twig_get_attribute($this->env, $this->source, ($context["collectorData"] ?? null), "deserialize", [], "any", false, false, false, 106)));
            // line 107
            echo "    ";
            $context["cellPrefix"] = ((($context["serialize"] ?? null)) ? ("serialize") : ("deserialize"));
            // line 108
            echo "
    <div class=\"tab ";
            // line 109
            echo (( !($context["data"] ?? null)) ? ("disabled") : (""));
            echo "\">
        <h3 class=\"tab-title\">";
            // line 110
            echo ((($context["serialize"] ?? null)) ? ("serialize") : ("deserialize"));
            echo " <span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["data"] ?? null)), "html", null, true);
            echo "</h3>
        <div class=\"tab-content\">
            ";
            // line 112
            if ( !twig_length_filter($this->env, ($context["data"] ?? null))) {
                // line 113
                echo "                <div class=\"empty\">
                    <p>Nothing was ";
                // line 114
                echo ((($context["serialize"] ?? null)) ? ("serialized") : ("deserialized"));
                echo ".</p>
                </div>
            ";
            } else {
                // line 117
                echo "                <table>
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Context</th>
                            <th>Normalizer</th>
                            <th>Encoder</th>
                            <th>Time</th>
                            <th>Caller</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
                // line 129
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 130
                    echo "                            <tr>
                                <td>";
                    // line 131
                    echo twig_call_macro($macros["helper"], "macro_render_data_cell", [$context["item"], twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 131), ($context["cellPrefix"] ?? null)], 131, $context, $this->getSourceContext());
                    echo "</td>
                                <td>";
                    // line 132
                    echo twig_call_macro($macros["helper"], "macro_render_context_cell", [$context["item"], twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 132), ($context["cellPrefix"] ?? null)], 132, $context, $this->getSourceContext());
                    echo "</td>
                                <td>";
                    // line 133
                    echo twig_call_macro($macros["helper"], "macro_render_normalizer_cell", [$context["item"], twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 133), ($context["cellPrefix"] ?? null)], 133, $context, $this->getSourceContext());
                    echo "</td>
                                <td>";
                    // line 134
                    echo twig_call_macro($macros["helper"], "macro_render_encoder_cell", [$context["item"], twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 134), ($context["cellPrefix"] ?? null)], 134, $context, $this->getSourceContext());
                    echo "</td>
                                <td>";
                    // line 135
                    echo twig_call_macro($macros["helper"], "macro_render_time_cell", [$context["item"]], 135, $context, $this->getSourceContext());
                    echo "</td>
                                <td>";
                    // line 136
                    echo twig_call_macro($macros["helper"], "macro_render_caller_cell", [$context["item"], twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 136), ($context["cellPrefix"] ?? null)], 136, $context, $this->getSourceContext());
                    echo "</td>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 139
                echo "                    </tbody>
                </table>
            ";
            }
            // line 142
            echo "        </div>
    </div>
";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 146
    public function macro_render_caller_cell($__item__ = null, $__index__ = null, $__method__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "index" => $__index__,
            "method" => $__method__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_caller_cell"));

            // line 147
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "caller", [], "any", true, true, false, 147)) {
                // line 148
                echo "        <span class=\"metadata\">
            ";
                // line 149
                $context["caller"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "caller", [], "any", false, false, false, 149);
                // line 150
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "line", [], "any", false, false, false, 150)) {
                    // line 151
                    echo "                ";
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "file", [], "any", false, false, false, 151), twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "line", [], "any", false, false, false, 151));
                    // line 152
                    echo "                ";
                    if (($context["link"] ?? null)) {
                        // line 153
                        echo "                    <a href=\"";
                        echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "file", [], "any", false, false, false, 153), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "name", [], "any", false, false, false, 153), "html", null, true);
                        echo "</a>
                ";
                    } else {
                        // line 155
                        echo "                    <abbr title=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "file", [], "any", false, false, false, 155), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "name", [], "any", false, false, false, 155), "html", null, true);
                        echo "</abbr>
                ";
                    }
                    // line 157
                    echo "            ";
                } else {
                    // line 158
                    echo "                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "name", [], "any", false, false, false, 158), "html", null, true);
                    echo "
            ";
                }
                // line 160
                echo "            line <a class=\"text-small sf-toggle\" data-toggle-selector=\"#sf-trace-";
                echo twig_escape_filter($this->env, ($context["method"] ?? null), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "line", [], "any", false, false, false, 160), "html", null, true);
                echo "</a>
        </span>

        <div class=\"sf-serializer-compact hidden\" id=\"sf-trace-";
                // line 163
                echo twig_escape_filter($this->env, ($context["method"] ?? null), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
                echo "\">
            <div class=\"trace\">
                ";
                // line 165
                echo twig_replace_filter($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->fileExcerpt(twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "file", [], "any", false, false, false, 165), twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "line", [], "any", false, false, false, 165)), ["#DD0000" => "var(--highlight-string)", "#007700" => "var(--highlight-keyword)", "#0000BB" => "var(--highlight-default)", "#FF8000" => "var(--highlight-comment)"]);
                // line 170
                echo "
            </div>
        </div>
    ";
            }
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 176
    public function macro_render_normalize_tab($__collectorData__ = null, $__normalize__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "collectorData" => $__collectorData__,
            "normalize" => $__normalize__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_normalize_tab"));

            // line 177
            echo "    ";
            $context["data"] = ((($context["normalize"] ?? null)) ? (twig_get_attribute($this->env, $this->source, ($context["collectorData"] ?? null), "normalize", [], "any", false, false, false, 177)) : (twig_get_attribute($this->env, $this->source, ($context["collectorData"] ?? null), "denormalize", [], "any", false, false, false, 177)));
            // line 178
            echo "    ";
            $context["cellPrefix"] = ((($context["normalize"] ?? null)) ? ("normalize") : ("denormalize"));
            // line 179
            echo "
    <div class=\"tab ";
            // line 180
            echo (( !($context["data"] ?? null)) ? ("disabled") : (""));
            echo "\">
        <h3 class=\"tab-title\">";
            // line 181
            echo ((($context["normalize"] ?? null)) ? ("normalize") : ("denormalize"));
            echo " <span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["data"] ?? null)), "html", null, true);
            echo "</h3>
        <div class=\"tab-content\">
            ";
            // line 183
            if ( !twig_length_filter($this->env, ($context["data"] ?? null))) {
                // line 184
                echo "                <div class=\"empty\">
                    <p>Nothing was ";
                // line 185
                echo ((($context["normalize"] ?? null)) ? ("normalized") : ("denormalized"));
                echo ".</p>
                </div>
            ";
            } else {
                // line 188
                echo "                <table>
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Context</th>
                            <th>Normalizer</th>
                            <th>Time</th>
                            <th>Caller</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
                // line 199
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 200
                    echo "                            <tr>
                                <td>";
                    // line 201
                    echo twig_call_macro($macros["helper"], "macro_render_data_cell", [$context["item"], twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 201), ($context["cellPrefix"] ?? null)], 201, $context, $this->getSourceContext());
                    echo "</td>
                                <td>";
                    // line 202
                    echo twig_call_macro($macros["helper"], "macro_render_context_cell", [$context["item"], twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 202), ($context["cellPrefix"] ?? null)], 202, $context, $this->getSourceContext());
                    echo "</td>
                                <td>";
                    // line 203
                    echo twig_call_macro($macros["helper"], "macro_render_normalizer_cell", [$context["item"], twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 203), ($context["cellPrefix"] ?? null)], 203, $context, $this->getSourceContext());
                    echo "</td>
                                <td>";
                    // line 204
                    echo twig_call_macro($macros["helper"], "macro_render_time_cell", [$context["item"]], 204, $context, $this->getSourceContext());
                    echo "</td>
                                <td>";
                    // line 205
                    echo twig_call_macro($macros["helper"], "macro_render_caller_cell", [$context["item"], twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 205), ($context["cellPrefix"] ?? null)], 205, $context, $this->getSourceContext());
                    echo "</td>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 208
                echo "                    </tbody>
                </table>
            ";
            }
            // line 211
            echo "        </div>
    </div>
";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 215
    public function macro_render_encode_tab($__collectorData__ = null, $__encode__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "collectorData" => $__collectorData__,
            "encode" => $__encode__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_encode_tab"));

            // line 216
            echo "    ";
            $context["data"] = ((($context["encode"] ?? null)) ? (twig_get_attribute($this->env, $this->source, ($context["collectorData"] ?? null), "encode", [], "any", false, false, false, 216)) : (twig_get_attribute($this->env, $this->source, ($context["collectorData"] ?? null), "decode", [], "any", false, false, false, 216)));
            // line 217
            echo "    ";
            $context["cellPrefix"] = ((($context["encode"] ?? null)) ? ("encode") : ("decode"));
            // line 218
            echo "
    <div class=\"tab ";
            // line 219
            echo (( !($context["data"] ?? null)) ? ("disabled") : (""));
            echo "\">
        <h3 class=\"tab-title\">";
            // line 220
            echo ((($context["encode"] ?? null)) ? ("encode") : ("decode"));
            echo " <span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["data"] ?? null)), "html", null, true);
            echo "</h3>
        <div class=\"tab-content\">
            ";
            // line 222
            if ( !twig_length_filter($this->env, ($context["data"] ?? null))) {
                // line 223
                echo "                <div class=\"empty\">
                    <p>Nothing was ";
                // line 224
                echo ((($context["encode"] ?? null)) ? ("encoded") : ("decoded"));
                echo ".</p>
                </div>
            ";
            } else {
                // line 227
                echo "                <table>
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Context</th>
                            <th>Encoder</th>
                            <th>Time</th>
                            <th>Caller</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
                // line 238
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 239
                    echo "                            <tr>
                                <td>";
                    // line 240
                    echo twig_call_macro($macros["helper"], "macro_render_data_cell", [$context["item"], twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 240), ($context["cellPrefix"] ?? null)], 240, $context, $this->getSourceContext());
                    echo "</td>
                                <td>";
                    // line 241
                    echo twig_call_macro($macros["helper"], "macro_render_context_cell", [$context["item"], twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 241), ($context["cellPrefix"] ?? null)], 241, $context, $this->getSourceContext());
                    echo "</td>
                                <td>";
                    // line 242
                    echo twig_call_macro($macros["helper"], "macro_render_encoder_cell", [$context["item"], twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 242), ($context["cellPrefix"] ?? null)], 242, $context, $this->getSourceContext());
                    echo "</td>
                                <td>";
                    // line 243
                    echo twig_call_macro($macros["helper"], "macro_render_time_cell", [$context["item"]], 243, $context, $this->getSourceContext());
                    echo "</td>
                                <td>";
                    // line 244
                    echo twig_call_macro($macros["helper"], "macro_render_caller_cell", [$context["item"], twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 244), ($context["cellPrefix"] ?? null)], 244, $context, $this->getSourceContext());
                    echo "</td>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 247
                echo "                    </tbody>
                </table>
            ";
            }
            // line 250
            echo "        </div>
    </div>
";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 254
    public function macro_render_data_cell($__item__ = null, $__index__ = null, $__method__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "index" => $__index__,
            "method" => $__method__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_data_cell"));

            // line 255
            echo "    ";
            $context["data_id"] = ((("data-" . ($context["method"] ?? null)) . "-") . ($context["index"] ?? null));
            // line 256
            echo "
    <span class=\"nowrap\">";
            // line 257
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "dataType", [], "any", false, false, false, 257), "html", null, true);
            echo "</span>

    <div>
        <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
            // line 260
            echo twig_escape_filter($this->env, ($context["data_id"] ?? null), "html", null, true);
            echo "\" data-toggle-alt-content=\"Hide contents\">Show contents</a>
        <div id=\"";
            // line 261
            echo twig_escape_filter($this->env, ($context["data_id"] ?? null), "html", null, true);
            echo "\" class=\"context sf-toggle-content sf-toggle-hidden\">
            ";
            // line 262
            echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "data", [], "any", false, false, false, 262));
            echo "
        </div>
    </div>
";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 267
    public function macro_render_context_cell($__item__ = null, $__index__ = null, $__method__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "index" => $__index__,
            "method" => $__method__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_context_cell"));

            // line 268
            echo "    ";
            $context["context_id"] = ((("context-" . ($context["method"] ?? null)) . "-") . ($context["index"] ?? null));
            // line 269
            echo "
    ";
            // line 270
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "type", [], "any", false, false, false, 270)) {
                // line 271
                echo "        <span class=\"nowrap\">Type: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "type", [], "any", false, false, false, 271), "html", null, true);
                echo "</span>
        <div class=\"nowrap\">Format: ";
                // line 272
                ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "format", [], "any", false, false, false, 272)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "format", [], "any", false, false, false, 272), "html", null, true))) : (print ("none")));
                echo "</div>
    ";
            } else {
                // line 274
                echo "        <span class=\"nowrap\">Format: ";
                ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "format", [], "any", false, false, false, 274)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "format", [], "any", false, false, false, 274), "html", null, true))) : (print ("none")));
                echo "</span>
    ";
            }
            // line 276
            echo "
    <div>
        <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
            // line 278
            echo twig_escape_filter($this->env, ($context["context_id"] ?? null), "html", null, true);
            echo "\" data-toggle-alt-content=\"Hide context\">Show context</a>
        <div id=\"";
            // line 279
            echo twig_escape_filter($this->env, ($context["context_id"] ?? null), "html", null, true);
            echo "\" class=\"context sf-toggle-content sf-toggle-hidden\">
            ";
            // line 280
            echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "context", [], "any", false, false, false, 280));
            echo "
        </div>
    </div>
";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 285
    public function macro_render_normalizer_cell($__item__ = null, $__index__ = null, $__method__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "index" => $__index__,
            "method" => $__method__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_normalizer_cell"));

            // line 286
            echo "    ";
            $context["nested_normalizers_id"] = ((("nested-normalizers-" . ($context["method"] ?? null)) . "-") . ($context["index"] ?? null));
            // line 287
            echo "
    ";
            // line 288
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "normalizer", [], "any", true, true, false, 288)) {
                // line 289
                echo "        <span class=\"nowrap\"><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "normalizer", [], "any", false, false, false, 289), "file", [], "any", false, false, false, 289), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "normalizer", [], "any", false, false, false, 289), "line", [], "any", false, false, false, 289)), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "normalizer", [], "any", false, false, false, 289), "file", [], "any", false, false, false, 289), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "normalizer", [], "any", false, false, false, 289), "class", [], "any", false, false, false, 289), "html", null, true);
                echo "</a> (";
                echo twig_escape_filter($this->env, twig_sprintf("%.2f", (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "normalizer", [], "any", false, false, false, 289), "time", [], "any", false, false, false, 289) * 1000)), "html", null, true);
                echo " ms)</span>
    ";
            }
            // line 291
            echo "
    ";
            // line 292
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "normalization", [], "any", false, false, false, 292)) > 1)) {
                // line 293
                echo "        <div>
            <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                // line 294
                echo twig_escape_filter($this->env, ($context["nested_normalizers_id"] ?? null), "html", null, true);
                echo "\" data-toggle-alt-content=\"Hide nested normalizers\">Show nested normalizers</a>
            <div id=\"";
                // line 295
                echo twig_escape_filter($this->env, ($context["nested_normalizers_id"] ?? null), "html", null, true);
                echo "\" class=\"context sf-toggle-content sf-toggle-hidden\">
                <ul class=\"text-small\" style=\"line-height:80%;margin-top:10px\">
                    ";
                // line 297
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "normalization", [], "any", false, false, false, 297));
                foreach ($context['_seq'] as $context["_key"] => $context["normalizer"]) {
                    // line 298
                    echo "                        <li><span class=\"nowrap\">x";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["normalizer"], "calls", [], "any", false, false, false, 298), "html", null, true);
                    echo " <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(twig_get_attribute($this->env, $this->source, $context["normalizer"], "file", [], "any", false, false, false, 298), twig_get_attribute($this->env, $this->source, $context["normalizer"], "line", [], "any", false, false, false, 298)), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["normalizer"], "file", [], "any", false, false, false, 298), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["normalizer"], "class", [], "any", false, false, false, 298), "html", null, true);
                    echo "</a> (";
                    echo twig_escape_filter($this->env, twig_sprintf("%.2f", (twig_get_attribute($this->env, $this->source, $context["normalizer"], "time", [], "any", false, false, false, 298) * 1000)), "html", null, true);
                    echo " ms)</span></li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['normalizer'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 300
                echo "                </ul>
            </div>
        </div>
    ";
            }
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 306
    public function macro_render_encoder_cell($__item__ = null, $__index__ = null, $__method__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "index" => $__index__,
            "method" => $__method__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_encoder_cell"));

            // line 307
            echo "    ";
            $context["nested_encoders_id"] = ((("nested-encoders-" . ($context["method"] ?? null)) . "-") . ($context["index"] ?? null));
            // line 308
            echo "
    ";
            // line 309
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "encoder", [], "any", true, true, false, 309)) {
                // line 310
                echo "        <span class=\"nowrap\"><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "encoder", [], "any", false, false, false, 310), "file", [], "any", false, false, false, 310), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "encoder", [], "any", false, false, false, 310), "line", [], "any", false, false, false, 310)), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "encoder", [], "any", false, false, false, 310), "file", [], "any", false, false, false, 310), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "encoder", [], "any", false, false, false, 310), "class", [], "any", false, false, false, 310), "html", null, true);
                echo "</a> (";
                echo twig_escape_filter($this->env, twig_sprintf("%.2f", (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "encoder", [], "any", false, false, false, 310), "time", [], "any", false, false, false, 310) * 1000)), "html", null, true);
                echo " ms)</span>
    ";
            }
            // line 312
            echo "
    ";
            // line 313
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "encoding", [], "any", false, false, false, 313)) > 1)) {
                // line 314
                echo "        <div>
            <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                // line 315
                echo twig_escape_filter($this->env, ($context["nested_encoders_id"] ?? null), "html", null, true);
                echo "\" data-toggle-alt-content=\"Hide nested encoders\">Show nested encoders</a>
            <div id=\"";
                // line 316
                echo twig_escape_filter($this->env, ($context["nested_encoders_id"] ?? null), "html", null, true);
                echo "\" class=\"context sf-toggle-content sf-toggle-hidden\">
                <ul class=\"text-small\" style=\"line-height:80%;margin-top:10px\">
                    ";
                // line 318
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "encoding", [], "any", false, false, false, 318));
                foreach ($context['_seq'] as $context["_key"] => $context["encoder"]) {
                    // line 319
                    echo "                        <li><span class=\"nowrap\">x";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["encoder"], "calls", [], "any", false, false, false, 319), "html", null, true);
                    echo " <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(twig_get_attribute($this->env, $this->source, $context["encoder"], "file", [], "any", false, false, false, 319), twig_get_attribute($this->env, $this->source, $context["encoder"], "line", [], "any", false, false, false, 319)), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["encoder"], "file", [], "any", false, false, false, 319), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["encoder"], "class", [], "any", false, false, false, 319), "html", null, true);
                    echo "</a> (";
                    echo twig_escape_filter($this->env, twig_sprintf("%.2f", (twig_get_attribute($this->env, $this->source, $context["encoder"], "time", [], "any", false, false, false, 319) * 1000)), "html", null, true);
                    echo " ms)</span></li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['encoder'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 321
                echo "                </ul>
            </div>
        </div>
    ";
            }
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 327
    public function macro_render_time_cell($__item__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_time_cell"));

            // line 328
            echo "    <span class=\"nowrap\">";
            echo twig_escape_filter($this->env, twig_sprintf("%.2f", (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "time", [], "any", false, false, false, 328) * 1000)), "html", null, true);
            echo " ms</span>
";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/serializer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1095 => 328,  1079 => 327,  1063 => 321,  1046 => 319,  1042 => 318,  1037 => 316,  1033 => 315,  1030 => 314,  1028 => 313,  1025 => 312,  1013 => 310,  1011 => 309,  1008 => 308,  1005 => 307,  987 => 306,  971 => 300,  954 => 298,  950 => 297,  945 => 295,  941 => 294,  938 => 293,  936 => 292,  933 => 291,  921 => 289,  919 => 288,  916 => 287,  913 => 286,  895 => 285,  879 => 280,  875 => 279,  871 => 278,  867 => 276,  861 => 274,  856 => 272,  851 => 271,  849 => 270,  846 => 269,  843 => 268,  825 => 267,  809 => 262,  805 => 261,  801 => 260,  795 => 257,  792 => 256,  789 => 255,  771 => 254,  757 => 250,  752 => 247,  735 => 244,  731 => 243,  727 => 242,  723 => 241,  719 => 240,  716 => 239,  699 => 238,  686 => 227,  680 => 224,  677 => 223,  675 => 222,  668 => 220,  664 => 219,  661 => 218,  658 => 217,  655 => 216,  638 => 215,  624 => 211,  619 => 208,  602 => 205,  598 => 204,  594 => 203,  590 => 202,  586 => 201,  583 => 200,  566 => 199,  553 => 188,  547 => 185,  544 => 184,  542 => 183,  535 => 181,  531 => 180,  528 => 179,  525 => 178,  522 => 177,  505 => 176,  489 => 170,  487 => 165,  480 => 163,  469 => 160,  463 => 158,  460 => 157,  452 => 155,  442 => 153,  439 => 152,  436 => 151,  433 => 150,  431 => 149,  428 => 148,  425 => 147,  407 => 146,  393 => 142,  388 => 139,  371 => 136,  367 => 135,  363 => 134,  359 => 133,  355 => 132,  351 => 131,  348 => 130,  331 => 129,  317 => 117,  311 => 114,  308 => 113,  306 => 112,  299 => 110,  295 => 109,  292 => 108,  289 => 107,  286 => 106,  269 => 105,  261 => 102,  255 => 99,  251 => 98,  246 => 96,  242 => 95,  237 => 93,  233 => 92,  224 => 86,  216 => 81,  212 => 79,  206 => 75,  204 => 74,  200 => 72,  193 => 71,  182 => 66,  177 => 65,  170 => 64,  160 => 60,  157 => 59,  149 => 54,  142 => 50,  133 => 44,  126 => 40,  117 => 34,  110 => 30,  99 => 22,  91 => 17,  87 => 15,  85 => 14,  82 => 13,  76 => 10,  70 => 8,  67 => 7,  64 => 6,  57 => 5,  49 => 1,  47 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Collector/serializer.html.twig", "/Users/jackrima/Sites/gentella/vendor/symfony/web-profiler-bundle/Resources/views/Collector/serializer.html.twig");
    }
}
