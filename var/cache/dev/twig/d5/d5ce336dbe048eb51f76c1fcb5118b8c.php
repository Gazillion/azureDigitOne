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

/* @WebProfiler/Collector/mailer.html.twig */
class __TwigTemplate_1250529275ea4e92e2fbd80e613fb60c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/mailer.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/mailer.html.twig", 1);
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
        $context["events"] = twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 4);
        // line 5
        echo "
    ";
        // line 6
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "messages", [], "any", false, false, false, 6))) {
            // line 7
            echo "        ";
            ob_start(function () { return ''; });
            // line 8
            echo "            ";
            echo twig_source($this->env, "@WebProfiler/Icon/mailer.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 9
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "messages", [], "any", false, false, false, 9)), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 11
            echo "
        ";
            // line 12
            ob_start(function () { return ''; });
            // line 13
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Queued messages</b>
                <span class=\"sf-toolbar-status\">";
            // line 15
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "events", [], "any", false, false, false, 15), function ($__e__) use ($context, $macros) { $context["e"] = $__e__; return twig_get_attribute($this->env, $this->source, ($context["e"] ?? null), "isQueued", [], "method", false, false, false, 15); })), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Sent messages</b>
                <span class=\"sf-toolbar-status\">";
            // line 19
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "events", [], "any", false, false, false, 19), function ($__e__) use ($context, $macros) { $context["e"] = $__e__; return  !twig_get_attribute($this->env, $this->source, ($context["e"] ?? null), "isQueued", [], "method", false, false, false, 19); })), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 22
            echo "
        ";
            // line 23
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null)]);
            echo "
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 27
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 28
        echo "    ";
        $context["events"] = twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 28);
        // line 29
        echo "
    <span class=\"label ";
        // line 30
        echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "messages", [], "any", false, false, false, 30))) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 31
        echo twig_source($this->env, "@WebProfiler/Icon/mailer.svg");
        echo "</span>

        <strong>E-mails</strong>
        ";
        // line 34
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "messages", [], "any", false, false, false, 34)) > 0)) {
            // line 35
            echo "            <span class=\"count\">
                <span>";
            // line 36
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "messages", [], "any", false, false, false, 36)), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 39
        echo "    </span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 42
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 43
        echo "    ";
        $context["events"] = twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 43);
        // line 44
        echo "    <h2>Emails</h2>

    ";
        // line 46
        if ( !twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "messages", [], "any", false, false, false, 46))) {
            // line 47
            echo "        <div class=\"empty empty-panel\">
            <p>No emails were sent.</p>
        </div>
    ";
        } else {
            // line 51
            echo "        <div class=\"metrics\">
            <div class=\"metric-group\">
                <div class=\"metric\">
                    <span class=\"value\">";
            // line 54
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "events", [], "any", false, false, false, 54), function ($__e__) use ($context, $macros) { $context["e"] = $__e__; return twig_get_attribute($this->env, $this->source, ($context["e"] ?? null), "isQueued", [], "method", false, false, false, 54); })), "html", null, true);
            echo "</span>
                    <span class=\"label\">Queued</span>
                </div>

                <div class=\"metric\">
                    <span class=\"value\">";
            // line 59
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "events", [], "any", false, false, false, 59), function ($__e__) use ($context, $macros) { $context["e"] = $__e__; return  !twig_get_attribute($this->env, $this->source, ($context["e"] ?? null), "isQueued", [], "method", false, false, false, 59); })), "html", null, true);
            echo "</span>
                    <span class=\"label\">Sent</span>
                </div>
            </div>
        </div>
    ";
        }
        // line 65
        echo "
    ";
        // line 66
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "transports", [], "any", false, false, false, 66)) > 1)) {
            // line 67
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "transports", [], "any", false, false, false, 67));
            foreach ($context['_seq'] as $context["_key"] => $context["transport"]) {
                // line 68
                echo "            <h2><code>";
                echo twig_escape_filter($this->env, $context["transport"], "html", null, true);
                echo "</code> transport</h2>
            ";
                // line 69
                echo twig_call_macro($macros["_self"], "macro_render_transport_details", [($context["collector"] ?? null), $context["transport"]], 69, $context, $this->getSourceContext());
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transport'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "    ";
        } elseif ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "transports", [], "any", false, false, false, 71))) {
            // line 72
            echo "        ";
            echo twig_call_macro($macros["_self"], "macro_render_transport_details", [($context["collector"] ?? null), twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "transports", [], "any", false, false, false, 72)), true], 72, $context, $this->getSourceContext());
            echo "
    ";
        }
        // line 74
        echo "
    ";
        // line 115
        echo "
    ";
        // line 252
        echo "
    ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 75
    public function macro_render_transport_details($__collector__ = null, $__transport__ = null, $__show_transport_name__ = false, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "collector" => $__collector__,
            "transport" => $__transport__,
            "show_transport_name" => $__show_transport_name__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_transport_details"));

            // line 76
            echo "        <div class=\"card\">
            ";
            // line 77
            $context["num_emails"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 77), "events", [0 => ($context["transport"] ?? null)], "method", false, false, false, 77));
            // line 78
            echo "            ";
            if ((($context["num_emails"] ?? null) > 1)) {
                // line 79
                echo "                <div class=\"mailer-email-summary-table-wrapper\">
                    <table class=\"mailer-email-summary-table\">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Subject</th>
                                <th>To</th>
                                <th class=\"visually-hidden\">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
                // line 90
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 90), "events", [0 => ($context["transport"] ?? null)], "method", false, false, false, 90));
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
                foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                    // line 91
                    echo "                                <tr class=\"mailer-email-summary-table-row ";
                    echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 91)) ? ("active") : (""));
                    echo "\" data-target=\"#email-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 91), "html", null, true);
                    echo "\">
                                    <td>";
                    // line 92
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 92), "html", null, true);
                    echo "</td>
                                    <td>";
                    // line 93
                    (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "message", [], "any", false, true, false, 93), "getSubject", [], "method", true, true, false, 93) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "message", [], "any", false, true, false, 93), "getSubject", [], "method", false, false, false, 93)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "message", [], "any", false, true, false, 93), "getSubject", [], "method", false, false, false, 93), "html", null, true))) : (print ("(No subject)")));
                    echo "</td>
                                    <td>";
                    // line 94
                    echo twig_escape_filter($this->env, _twig_default_filter(twig_join_filter(twig_array_map($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "message", [], "any", false, false, false, 94), "getTo", [], "method", false, false, false, 94), function ($__addr__) use ($context, $macros) { $context["addr"] = $__addr__; return twig_get_attribute($this->env, $this->source, ($context["addr"] ?? null), "toString", [], "method", false, false, false, 94); }), ", "), "(empty)"), "html", null, true);
                    echo "</td>
                                    <td class=\"visually-hidden\"><button class=\"mailer-email-summary-table-row-button\" data-target=\"#email-";
                    // line 95
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 95), "html", null, true);
                    echo "\">View email details</button></td>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 98
                echo "                        </tbody>
                    </table>
                </div>

                ";
                // line 102
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 102), "events", [0 => ($context["transport"] ?? null)], "method", false, false, false, 102));
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
                foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                    // line 103
                    echo "                    <div class=\"mailer-email-details ";
                    echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 103)) ? ("active") : (""));
                    echo "\" id=\"email-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 103), "html", null, true);
                    echo "\">
                        ";
                    // line 104
                    echo twig_call_macro($macros["_self"], "macro_render_email_details", [($context["collector"] ?? null), ($context["transport"] ?? null), twig_get_attribute($this->env, $this->source, $context["event"], "message", [], "any", false, false, false, 104), twig_get_attribute($this->env, $this->source, $context["event"], "isQueued", [], "any", false, false, false, 104), ($context["show_transport_name"] ?? null)], 104, $context, $this->getSourceContext());
                    echo "
                    </div>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 107
                echo "
                <script>Sfjs.initializeMailerTable();</script>
            ";
            } else {
                // line 110
                echo "                ";
                $context["event"] = twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 110), "events", [0 => ($context["transport"] ?? null)], "method", false, false, false, 110));
                // line 111
                echo "                ";
                echo twig_call_macro($macros["_self"], "macro_render_email_details", [($context["collector"] ?? null), ($context["transport"] ?? null), twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "message", [], "any", false, false, false, 111), twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "isQueued", [], "any", false, false, false, 111), ($context["show_transport_name"] ?? null)], 111, $context, $this->getSourceContext());
                echo "
            ";
            }
            // line 113
            echo "        </div>
    ";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 116
    public function macro_render_email_details($__collector__ = null, $__transport__ = null, $__message__ = null, $__message_is_queued__ = null, $__show_transport_name__ = false, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "collector" => $__collector__,
            "transport" => $__transport__,
            "message" => $__message__,
            "message_is_queued" => $__message_is_queued__,
            "show_transport_name" => $__show_transport_name__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_email_details"));

            // line 117
            echo "        ";
            if (($context["show_transport_name"] ?? null)) {
                // line 118
                echo "            <p class=\"mailer-transport-information\">
                <strong>Status:</strong> <span class=\"badge badge-";
                // line 119
                echo ((($context["message_is_queued"] ?? null)) ? ("warning") : ("success"));
                echo "\">";
                echo ((($context["message_is_queued"] ?? null)) ? ("Queued") : ("Sent"));
                echo "</span>
                &bull;
                <strong>Transport:</strong> <code>";
                // line 121
                echo twig_escape_filter($this->env, ($context["transport"] ?? null), "html", null, true);
                echo "</code>
            </p>
        ";
            }
            // line 124
            echo "
        ";
            // line 125
            if ( !twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "headers", [], "any", true, true, false, 125)) {
                // line 126
                echo "            ";
                // line 127
                echo "            <a class=\"mailer-message-download-raw\" href=\"data:application/octet-stream;base64,";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "base64Encode", [0 => twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "toString", [], "method", false, false, false, 127)], "method", false, false, false, 127), "html", null, true);
                echo "\" download=\"email.eml\">
                ";
                // line 128
                echo twig_source($this->env, "@WebProfiler/Icon/download.svg");
                echo "
                Download as EML file
            </a>

            <pre class=\"prewrap\" style=\"max-height: 600px; margin-left: 5px\">";
                // line 132
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "toString", [], "method", false, false, false, 132), "html", null, true);
                echo "</pre>
        ";
            } else {
                // line 134
                echo "            <div class=\"sf-tabs\">
                <div class=\"tab\">
                    <h3 class=\"tab-title\">Email contents</h3>
                    <div class=\"tab-content\">
                        <div class=\"card-block\">
                            <p class=\"mailer-message-subject\">
                                ";
                // line 140
                (((twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "getSubject", [], "method", true, true, false, 140) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "getSubject", [], "method", false, false, false, 140)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "getSubject", [], "method", false, false, false, 140), "html", null, true))) : (print ("(No subject)")));
                echo "
                            </p>
                            <div class=\"mailer-message-headers\">
                                <p><strong>From:</strong> ";
                // line 143
                echo twig_escape_filter($this->env, _twig_default_filter(twig_join_filter(twig_array_map($this->env, twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "getFrom", [], "method", false, false, false, 143), function ($__addr__) use ($context, $macros) { $context["addr"] = $__addr__; return twig_get_attribute($this->env, $this->source, ($context["addr"] ?? null), "toString", [], "method", false, false, false, 143); }), ", "), "(empty)"), "html", null, true);
                echo "</p>
                                <p><strong>To:</strong> ";
                // line 144
                echo twig_escape_filter($this->env, _twig_default_filter(twig_join_filter(twig_array_map($this->env, twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "getTo", [], "method", false, false, false, 144), function ($__addr__) use ($context, $macros) { $context["addr"] = $__addr__; return twig_get_attribute($this->env, $this->source, ($context["addr"] ?? null), "toString", [], "method", false, false, false, 144); }), ", "), "(empty)"), "html", null, true);
                echo "</p>
                                ";
                // line 145
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "headers", [], "any", false, false, false, 145), "all", [], "any", false, false, false, 145), function ($__header__) use ($context, $macros) { $context["header"] = $__header__; return !twig_in_filter(twig_lower_filter($this->env, (((twig_get_attribute($this->env, $this->source, $context["header"], "name", [], "any", true, true, false, 145) &&  !(null === twig_get_attribute($this->env, $this->source, $context["header"], "name", [], "any", false, false, false, 145)))) ? (twig_get_attribute($this->env, $this->source, $context["header"], "name", [], "any", false, false, false, 145)) : (""))), [0 => "subject", 1 => "from", 2 => "to"]); }));
                foreach ($context['_seq'] as $context["_key"] => $context["header"]) {
                    // line 146
                    echo "                                    <p class=\"mailer-message-header-secondary\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "toString", [], "any", false, false, false, 146), "html", null, true);
                    echo "</p>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['header'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 148
                echo "                            </div>
                        </div>

                        ";
                // line 151
                if (twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "attachments", [], "any", false, false, false, 151)) {
                    // line 152
                    echo "                            <div class=\"card-block\">
                                ";
                    // line 153
                    $context["num_of_attachments"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "attachments", [], "any", false, false, false, 153));
                    // line 154
                    echo "                                ";
                    $context["total_attachments_size_in_bytes"] = twig_array_reduce($this->env, twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "attachments", [], "any", false, false, false, 154), function ($__total_size__, $__attachment__) use ($context, $macros) { $context["total_size"] = $__total_size__; $context["attachment"] = $__attachment__; return (($context["total_size"] ?? null) + twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["attachment"] ?? null), "body", [], "any", false, false, false, 154))); });
                    // line 155
                    echo "                                <p class=\"mailer-message-attachments-title\">
                                    ";
                    // line 156
                    echo twig_source($this->env, "@WebProfiler/Icon/attachment.svg");
                    echo "
                                    Attachments <span>(";
                    // line 157
                    echo twig_escape_filter($this->env, ($context["num_of_attachments"] ?? null), "html", null, true);
                    echo " file";
                    echo (((($context["num_of_attachments"] ?? null) > 1)) ? ("s") : (""));
                    echo " / ";
                    echo twig_call_macro($macros["_self"], "macro_render_file_size_humanized", [($context["total_attachments_size_in_bytes"] ?? null)], 157, $context, $this->getSourceContext());
                    echo ")</span>
                                </p>

                                <ul class=\"mailer-message-attachments-list\">
                                    ";
                    // line 161
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "attachments", [], "any", false, false, false, 161));
                    foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                        // line 162
                        echo "                                        <li>
                                            ";
                        // line 163
                        echo twig_source($this->env, "@WebProfiler/Icon/file.svg");
                        echo "

                                            ";
                        // line 165
                        if (((twig_get_attribute($this->env, $this->source, $context["attachment"], "filename", [], "any", true, true, false, 165)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["attachment"], "filename", [], "any", false, false, false, 165))) : (""))) {
                            // line 166
                            echo "                                                ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attachment"], "filename", [], "any", false, false, false, 166), "html", null, true);
                            echo "
                                            ";
                        } else {
                            // line 168
                            echo "                                                <em>(no filename)</em>
                                            ";
                        }
                        // line 170
                        echo "
                                            (";
                        // line 171
                        echo twig_call_macro($macros["_self"], "macro_render_file_size_humanized", [twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attachment"], "body", [], "any", false, false, false, 171))], 171, $context, $this->getSourceContext());
                        echo ")

                                            <a href=\"data:";
                        // line 173
                        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["attachment"], "contentType", [], "any", true, true, false, 173)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["attachment"], "contentType", [], "any", false, false, false, 173), "application/octet-stream")) : ("application/octet-stream")), "html", null, true);
                        echo ";base64,";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "base64Encode", [0 => twig_get_attribute($this->env, $this->source, $context["attachment"], "body", [], "any", false, false, false, 173)], "method", false, false, false, 173), "html", null, true);
                        echo "\" download=\"";
                        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["attachment"], "filename", [], "any", true, true, false, 173)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["attachment"], "filename", [], "any", false, false, false, 173), "attachment")) : ("attachment")), "html", null, true);
                        echo "\">Download</a>
                                        </li>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 176
                    echo "                                </ul>
                            </div>
                        ";
                }
                // line 179
                echo "
                        ";
                // line 180
                if ((twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "htmlBody", [], "any", false, false, false, 180) || twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "textBody", [], "any", false, false, false, 180))) {
                    // line 181
                    echo "                            <div class=\"card-block\">
                                <div class=\"sf-tabs sf-tabs-sm\">
                                    ";
                    // line 183
                    if (twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "htmlBody", [], "any", false, false, false, 183)) {
                        // line 184
                        echo "                                        ";
                        $context["htmlBody"] = twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "htmlBody", [], "method", false, false, false, 184);
                        // line 185
                        echo "                                        <div class=\"tab\">
                                            <h3 class=\"tab-title\">HTML preview</h3>
                                            <div class=\"tab-content\">
                                                <iframe
                                                    src=\"data:text/html;charset=utf-8;base64,";
                        // line 189
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "base64Encode", [0 => ($context["htmlBody"] ?? null)], "method", false, false, false, 189), "html", null, true);
                        echo "\"
                                                    style=\"height: 80vh;width: 100%;max-height: 600px;\"
                                                >
                                                </iframe>
                                            </div>
                                        </div>

                                        <div class=\"tab\">
                                            <h3 class=\"tab-title\">HTML content</h3>
                                            <div class=\"tab-content\">
                                                <pre class=\"prewrap\" style=\"max-height: 600px\">";
                        // line 200
                        if (twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "htmlCharset", [], "method", false, false, false, 200)) {
                            // line 201
                            echo twig_escape_filter($this->env, twig_convert_encoding(($context["htmlBody"] ?? null), "UTF-8", twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "htmlCharset", [], "method", false, false, false, 201)), "html", null, true);
                        } else {
                            // line 203
                            echo twig_escape_filter($this->env, ($context["htmlBody"] ?? null), "html", null, true);
                        }
                        // line 205
                        echo "</pre>
                                            </div>
                                        </div>
                                    ";
                    }
                    // line 209
                    echo "
                                    ";
                    // line 210
                    if (twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "textBody", [], "any", false, false, false, 210)) {
                        // line 211
                        echo "                                        ";
                        $context["textBody"] = twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "textBody", [], "method", false, false, false, 211);
                        // line 212
                        echo "                                        <div class=\"tab\">
                                            <h3 class=\"tab-title\">Text content</h3>
                                            <div class=\"tab-content\">
                                                <pre class=\"prewrap\" style=\"max-height: 600px\">";
                        // line 216
                        if (twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "textCharset", [], "method", false, false, false, 216)) {
                            // line 217
                            echo twig_escape_filter($this->env, twig_convert_encoding(($context["textBody"] ?? null), "UTF-8", twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "textCharset", [], "method", false, false, false, 217)), "html", null, true);
                        } else {
                            // line 219
                            echo twig_escape_filter($this->env, ($context["textBody"] ?? null), "html", null, true);
                        }
                        // line 221
                        echo "</pre>
                                            </div>
                                        </div>
                                    ";
                    }
                    // line 225
                    echo "                                </div>
                            </div>
                        ";
                }
                // line 228
                echo "                    </div>
                </div>

                <div class=\"tab\">
                    <h3 class=\"tab-title\">MIME parts</h3>
                    <div class=\"tab-content\">
                        <pre class=\"prewrap\" style=\"max-height: 600px; margin-left: 5px\">";
                // line 234
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "body", [], "method", false, false, false, 234), "asDebugString", [], "method", false, false, false, 234), "html", null, true);
                echo "</pre>
                    </div>
                </div>

                <div class=\"tab\">
                    <h3 class=\"tab-title\">Raw Message</h3>
                    <div class=\"tab-content\">
                        <a class=\"mailer-message-download-raw\" href=\"data:application/octet-stream;base64,";
                // line 241
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "base64Encode", [0 => twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "toString", [], "method", false, false, false, 241)], "method", false, false, false, 241), "html", null, true);
                echo "\" download=\"email.eml\">
                            ";
                // line 242
                echo twig_source($this->env, "@WebProfiler/Icon/download.svg");
                echo "
                            Download as EML file
                        </a>

                        <pre class=\"prewrap\" style=\"max-height: 600px; margin-left: 5px\">";
                // line 246
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "toString", [], "method", false, false, false, 246), "html", null, true);
                echo "</pre>
                    </div>
                </div>
            </div>
        ";
            }
            // line 251
            echo "    ";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 253
    public function macro_render_file_size_humanized($__bytes__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "bytes" => $__bytes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_file_size_humanized"));

            // line 254
            if ((($context["bytes"] ?? null) < 1000)) {
                // line 255
                echo twig_escape_filter($this->env, (($context["bytes"] ?? null) . " bytes"), "html", null, true);
            } elseif ((            // line 256
($context["bytes"] ?? null) < (1000 ** 2))) {
                // line 257
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (($context["bytes"] ?? null) / 1000), 2) . " kB"), "html", null, true);
            } else {
                // line 259
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (($context["bytes"] ?? null) / (1000 ** 2)), 2) . " MB"), "html", null, true);
            }
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/mailer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  750 => 259,  747 => 257,  745 => 256,  743 => 255,  741 => 254,  725 => 253,  713 => 251,  705 => 246,  698 => 242,  694 => 241,  684 => 234,  676 => 228,  671 => 225,  665 => 221,  662 => 219,  659 => 217,  657 => 216,  652 => 212,  649 => 211,  647 => 210,  644 => 209,  638 => 205,  635 => 203,  632 => 201,  630 => 200,  617 => 189,  611 => 185,  608 => 184,  606 => 183,  602 => 181,  600 => 180,  597 => 179,  592 => 176,  579 => 173,  574 => 171,  571 => 170,  567 => 168,  561 => 166,  559 => 165,  554 => 163,  551 => 162,  547 => 161,  536 => 157,  532 => 156,  529 => 155,  526 => 154,  524 => 153,  521 => 152,  519 => 151,  514 => 148,  505 => 146,  501 => 145,  497 => 144,  493 => 143,  487 => 140,  479 => 134,  474 => 132,  467 => 128,  462 => 127,  460 => 126,  458 => 125,  455 => 124,  449 => 121,  442 => 119,  439 => 118,  436 => 117,  416 => 116,  403 => 113,  397 => 111,  394 => 110,  389 => 107,  372 => 104,  365 => 103,  348 => 102,  342 => 98,  325 => 95,  321 => 94,  317 => 93,  313 => 92,  306 => 91,  289 => 90,  276 => 79,  273 => 78,  271 => 77,  268 => 76,  250 => 75,  242 => 252,  239 => 115,  236 => 74,  230 => 72,  227 => 71,  219 => 69,  214 => 68,  209 => 67,  207 => 66,  204 => 65,  195 => 59,  187 => 54,  182 => 51,  176 => 47,  174 => 46,  170 => 44,  167 => 43,  160 => 42,  152 => 39,  146 => 36,  143 => 35,  141 => 34,  135 => 31,  131 => 30,  128 => 29,  125 => 28,  118 => 27,  108 => 23,  105 => 22,  99 => 19,  92 => 15,  88 => 13,  86 => 12,  83 => 11,  78 => 9,  73 => 8,  70 => 7,  68 => 6,  65 => 5,  62 => 4,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Collector/mailer.html.twig", "/Users/jackrima/Sites/gentella/vendor/symfony/web-profiler-bundle/Resources/views/Collector/mailer.html.twig");
    }
}
