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

/* @WebProfiler/Collector/config.html.twig */
class __TwigTemplate_71fb834444b8357ceca102708ba30bd2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/config.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/config.html.twig", 1);
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
        if (("unknown" == twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyState", [], "any", false, false, false, 4))) {
            // line 5
            echo "        ";
            $context["block_status"] = "";
            // line 6
            echo "        ";
            $context["symfony_version_status"] = "Unable to retrieve information about the Symfony version.";
            // line 7
            echo "    ";
        } elseif (("eol" == twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyState", [], "any", false, false, false, 7))) {
            // line 8
            echo "        ";
            $context["block_status"] = "red";
            // line 9
            echo "        ";
            $context["symfony_version_status"] = "This Symfony version will no longer receive security fixes.";
            // line 10
            echo "    ";
        } elseif (("eom" == twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyState", [], "any", false, false, false, 10))) {
            // line 11
            echo "        ";
            $context["block_status"] = "yellow";
            // line 12
            echo "        ";
            $context["symfony_version_status"] = "This Symfony version will only receive security fixes.";
            // line 13
            echo "    ";
        } elseif (("dev" == twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyState", [], "any", false, false, false, 13))) {
            // line 14
            echo "        ";
            $context["block_status"] = "yellow";
            // line 15
            echo "        ";
            $context["symfony_version_status"] = "This Symfony version is still in the development phase.";
            // line 16
            echo "    ";
        } else {
            // line 17
            echo "        ";
            $context["block_status"] = "";
            // line 18
            echo "        ";
            $context["symfony_version_status"] = "";
            // line 19
            echo "    ";
        }
        // line 20
        echo "
    ";
        // line 21
        ob_start(function () { return ''; });
        // line 22
        echo "        <span class=\"sf-toolbar-label\">
            ";
        // line 23
        echo twig_source($this->env, "@WebProfiler/Icon/symfony.svg");
        echo "
        </span>
        <span class=\"sf-toolbar-value\">";
        // line 25
        ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyState", [], "any", true, true, false, 25)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyversion", [], "any", false, false, false, 25), "html", null, true))) : (print ("n/a")));
        echo "</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 27
        echo "
    ";
        // line 28
        ob_start(function () { return ''; });
        // line 29
        echo "        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece\">
                <b>Profiler token</b>
                <span>
                    ";
        // line 33
        if (($context["profiler_url"] ?? null)) {
            // line 34
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, ($context["profiler_url"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "token", [], "any", false, false, false, 34), "html", null, true);
            echo "</a>
                    ";
        } else {
            // line 36
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "token", [], "any", false, false, false, 36), "html", null, true);
            echo "
                    ";
        }
        // line 38
        echo "                </span>
            </div>

            ";
        // line 41
        if ( !("n/a" === twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "env", [], "any", false, false, false, 41))) {
            // line 42
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Environment</b>
                    <span>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "env", [], "any", false, false, false, 44), "html", null, true);
            echo "</span>
                </div>
            ";
        }
        // line 47
        echo "
            ";
        // line 48
        if ( !("n/a" === twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "debug", [], "any", false, false, false, 48))) {
            // line 49
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Debug</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 51
            echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "debug", [], "any", false, false, false, 51)) ? ("green") : ("red"));
            echo "\">";
            echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "debug", [], "any", false, false, false, 51)) ? ("enabled") : ("disabled"));
            echo "</span>
                </div>
            ";
        }
        // line 54
        echo "        </div>

        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php\">
                <b>PHP version</b>
                <span";
        // line 59
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "phpversionextra", [], "any", false, false, false, 59)) {
            echo " title=\"";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "phpversion", [], "any", false, false, false, 59) . twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "phpversionextra", [], "any", false, false, false, 59)), "html", null, true);
            echo "\"";
        }
        echo ">
                    ";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "phpversion", [], "any", false, false, false, 60), "html", null, true);
        echo "
                    &nbsp; <a href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler_phpinfo");
        echo "\">View phpinfo()</a>
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php-ext\">
                <b>PHP Extensions</b>
                ";
        // line 67
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "hasXdebugInfo", [], "any", false, false, false, 67)) {
            // line 68
            echo "                    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler_xdebug");
            echo "\" title=\"View xdebug_info()\">
                ";
        }
        // line 70
        echo "                <span class=\"sf-toolbar-status sf-toolbar-status-";
        echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "hasXdebug", [], "any", false, false, false, 70)) ? ("green") : ("gray"));
        echo "\">Xdebug ";
        echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "hasXdebug", [], "any", false, false, false, 70)) ? ("✓") : ("✗"));
        echo "</span>
                ";
        // line 71
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "hasXdebugInfo", [], "any", false, false, false, 71)) {
            // line 72
            echo "                    </a>
                ";
        }
        // line 74
        echo "                <span class=\"sf-toolbar-status sf-toolbar-status-";
        echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "hasapcu", [], "any", false, false, false, 74)) ? ("green") : ("gray"));
        echo "\">APCu ";
        echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "hasapcu", [], "any", false, false, false, 74)) ? ("✓") : ("✗"));
        echo "</span>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 75
        echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "haszendopcache", [], "any", false, false, false, 75)) ? ("green") : ("red"));
        echo "\">OPcache ";
        echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "haszendopcache", [], "any", false, false, false, 75)) ? ("✓") : ("✗"));
        echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>PHP SAPI</b>
                <span>";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "sapiName", [], "any", false, false, false, 80), "html", null, true);
        echo "</span>
            </div>
        </div>

        <div class=\"sf-toolbar-info-group\">
            ";
        // line 85
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyversion", [], "any", true, true, false, 85)) {
            // line 86
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Resources</b>
                    <span>
                        <a href=\"https://symfony.com/doc/";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyversion", [], "any", false, false, false, 89), "html", null, true);
            echo "/index.html\" rel=\"help\">
                            Read Symfony ";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyversion", [], "any", false, false, false, 90), "html", null, true);
            echo " Docs
                        </a>
                    </span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Help</b>
                    <span>
                        <a href=\"https://symfony.com/support\">
                            Symfony Support Channels
                        </a>
                    </span>
                </div>
            ";
        }
        // line 103
        echo "        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 105
        echo "
    ";
        // line 106
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => true, "name" => "config", "status" => ($context["block_status"] ?? null), "additional_classes" => "sf-toolbar-block-right", "block_attrs" => (("title=\"" . ($context["symfony_version_status"] ?? null)) . "\"")]);
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 109
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 110
        echo "    <span class=\"label label-status-";
        echo (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyState", [], "any", false, false, false, 110) == "eol")) ? ("red") : (((twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyState", [], "any", false, false, false, 110), [0 => "eom", 1 => "dev"])) ? ("yellow") : (""))));
        echo "\">
        <span class=\"icon\">";
        // line 111
        echo twig_source($this->env, "@WebProfiler/Icon/config.svg");
        echo "</span>
        <strong>Configuration</strong>
    </span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 116
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 117
        echo "    <h2>Symfony Configuration</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">
                ";
        // line 122
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyversion", [], "any", false, false, false, 122), "html", null, true);
        echo "

                ";
        // line 124
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "symfonylts", [], "any", false, false, false, 124)) {
            // line 125
            echo "                    <abbr class=\"config-symfony-version-lts\" title=\"This is a Long-Term Support version\">(LTS)</abbr>
                ";
        }
        // line 127
        echo "            </span>
            <span class=\"label\">Symfony version</span>
        </div>

        ";
        // line 131
        if ( !("n/a" === twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "env", [], "any", false, false, false, 131))) {
            // line 132
            echo "            <div class=\"metric\">
                <span class=\"value\">";
            // line 133
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "env", [], "any", false, false, false, 133), "html", null, true);
            echo "</span>
                <span class=\"label\">Environment</span>
            </div>
        ";
        }
        // line 137
        echo "
        ";
        // line 138
        if ( !("n/a" === twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "debug", [], "any", false, false, false, 138))) {
            // line 139
            echo "            <div class=\"metric\">
                <span class=\"value\">";
            // line 140
            echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "debug", [], "any", false, false, false, 140)) ? ("enabled") : ("disabled"));
            echo "</span>
                <span class=\"label\">Debug</span>
            </div>
        ";
        }
        // line 144
        echo "    </div>

    ";
        // line 146
        $context["symfony_status"] = ["dev" => "In Development", "stable" => "Maintained", "eom" => "Security Fixes Only", "eol" => "Unmaintained"];
        // line 147
        echo "    ";
        $context["symfony_status_class"] = ["dev" => "warning", "stable" => "success", "eom" => "warning", "eol" => "error"];
        // line 148
        echo "
    <div class=\"metrics\">
        <div class=\"metric-group\">
            <div class=\"metric\">
                <span class=\"value\">
                    <span class=\"config-symfony-version-status-badge status-";
        // line 153
        echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["symfony_status_class"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "symfonystate", [], "any", false, false, false, 153)] ?? null) : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (($__internal_compile_1 = ($context["symfony_status"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "symfonystate", [], "any", false, false, false, 153)] ?? null) : null)), "html", null, true);
        echo "</span>
                </span>
                <span class=\"label\">Your Symfony version status</span>
            </div>

            ";
        // line 158
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "symfonylts", [], "any", false, false, false, 158)) {
            // line 159
            echo "                <div class=\"metric\">
                    <span class=\"value config-symfony-eol\">
                        ";
            // line 161
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyeom", [], "any", false, false, false, 161), "html", null, true);
            echo "
                    </span>
                    <span class=\"label\">Bug fixes ";
            // line 163
            echo ((twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "symfonystate", [], "any", false, false, false, 163), [0 => "eom", 1 => "eol"])) ? ("ended on") : ("until"));
            echo "</span>
                </div>
            ";
        }
        // line 166
        echo "
            <div class=\"metric\">
                <span class=\"value config-symfony-eol\">
                    ";
        // line 169
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyeol", [], "any", false, false, false, 169), "html", null, true);
        echo "
                </span>
                <span class=\"label\">
                    ";
        // line 172
        echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "symfonylts", [], "any", false, false, false, 172)) ? ("Security fixes") : ("Bug fixes and security fixes"));
        echo "
                    ";
        // line 173
        echo ((("eol" == twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "symfonystate", [], "any", false, false, false, 173))) ? ("ended on") : ("until"));
        echo "</span>
            </div>
        </div>
    </div>

    <a class=\"config-symfony-version-roadmap-link\" href=\"https://symfony.com/releases/";
        // line 178
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyminorversion", [], "any", false, false, false, 178), "html", null, true);
        echo "\">View Symfony ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyversion", [], "any", false, false, false, 178), "html", null, true);
        echo " release details</a>

    <h2>PHP Configuration</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 184
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "phpversion", [], "any", false, false, false, 184), "html", null, true);
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "phpversionextra", [], "any", false, false, false, 184)) {
            echo " <span class=\"unit\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "phpversionextra", [], "any", false, false, false, 184), "html", null, true);
            echo "</span>";
        }
        echo "</span>
            <span class=\"label\">PHP version</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 189
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "phparchitecture", [], "any", false, false, false, 189), "html", null, true);
        echo " <span class=\"unit\">bits</span></span>
            <span class=\"label\">Architecture</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 194
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "phpintllocale", [], "any", false, false, false, 194), "html", null, true);
        echo "</span>
            <span class=\"label\">Intl locale</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 199
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "phptimezone", [], "any", false, false, false, 199), "html", null, true);
        echo "</span>
            <span class=\"label\">Timezone</span>
        </div>
    </div>

    <div class=\"metrics\">
        <div class=\"metric-group\">
            <div class=\"metric\">
                <span class=\"value value-is-icon ";
        // line 207
        echo (( !twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "haszendopcache", [], "any", false, false, false, 207)) ? ("value-shows-no-color") : (""));
        echo "\">";
        echo twig_source($this->env, (("@WebProfiler/Icon/" . ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "haszendopcache", [], "any", false, false, false, 207)) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
                <span class=\"label\">OPcache</span>
            </div>

            <div class=\"metric\">
                <span class=\"value value-is-icon ";
        // line 212
        echo (( !twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "hasapcu", [], "any", false, false, false, 212)) ? ("value-shows-no-color") : (""));
        echo "\">";
        echo twig_source($this->env, (("@WebProfiler/Icon/" . ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "hasapcu", [], "any", false, false, false, 212)) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
                <span class=\"label\">APCu</span>
            </div>

            <div class=\"metric\">
                <span class=\"value value-is-icon ";
        // line 217
        echo (( !twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "hasxdebug", [], "any", false, false, false, 217)) ? ("value-shows-no-color") : (""));
        echo "\">";
        echo twig_source($this->env, (("@WebProfiler/Icon/" . ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "hasxdebug", [], "any", false, false, false, 217)) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
                <span class=\"label\">Xdebug</span>
            </div>
        </div>
    </div>

    <p>
        <a href=\"";
        // line 224
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler_phpinfo");
        echo "\">View full PHP configuration</a>
    </p>

    ";
        // line 227
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "bundles", [], "any", false, false, false, 227)) {
            // line 228
            echo "        <h2>Enabled Bundles <small>(";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "bundles", [], "any", false, false, false, 228)), "html", null, true);
            echo ")</small></h2>
        <table>
            <thead>
                <tr>
                    <th class=\"key\">Name</th>
                    <th>Class</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 237
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "bundles", [], "any", false, false, false, 237))));
            foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
                // line 238
                echo "                <tr>
                    <th scope=\"row\" class=\"font-normal\">";
                // line 239
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</th>
                    <td class=\"font-normal\">";
                // line 240
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "bundles", [], "any", false, false, false, 240)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["name"]] ?? null) : null));
                echo "</td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 243
            echo "            </tbody>
        </table>
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  576 => 243,  567 => 240,  563 => 239,  560 => 238,  556 => 237,  543 => 228,  541 => 227,  535 => 224,  523 => 217,  513 => 212,  503 => 207,  492 => 199,  484 => 194,  476 => 189,  463 => 184,  452 => 178,  444 => 173,  440 => 172,  434 => 169,  429 => 166,  423 => 163,  418 => 161,  414 => 159,  412 => 158,  402 => 153,  395 => 148,  392 => 147,  390 => 146,  386 => 144,  379 => 140,  376 => 139,  374 => 138,  371 => 137,  364 => 133,  361 => 132,  359 => 131,  353 => 127,  349 => 125,  347 => 124,  342 => 122,  335 => 117,  328 => 116,  317 => 111,  312 => 110,  305 => 109,  296 => 106,  293 => 105,  289 => 103,  273 => 90,  269 => 89,  264 => 86,  262 => 85,  254 => 80,  244 => 75,  237 => 74,  233 => 72,  231 => 71,  224 => 70,  218 => 68,  216 => 67,  207 => 61,  203 => 60,  195 => 59,  188 => 54,  180 => 51,  176 => 49,  174 => 48,  171 => 47,  165 => 44,  161 => 42,  159 => 41,  154 => 38,  148 => 36,  140 => 34,  138 => 33,  132 => 29,  130 => 28,  127 => 27,  122 => 25,  117 => 23,  114 => 22,  112 => 21,  109 => 20,  106 => 19,  103 => 18,  100 => 17,  97 => 16,  94 => 15,  91 => 14,  88 => 13,  85 => 12,  82 => 11,  79 => 10,  76 => 9,  73 => 8,  70 => 7,  67 => 6,  64 => 5,  61 => 4,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Collector/config.html.twig", "/Users/jackrima/Sites/gentella/vendor/symfony/web-profiler-bundle/Resources/views/Collector/config.html.twig");
    }
}
