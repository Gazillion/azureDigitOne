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

/* @WebProfiler/Collector/form.html.twig */
class __TwigTemplate_42692c9dd8dd78f4d8c7981c45340a8c extends Template
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
            'head' => [$this, 'block_head'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/form.html.twig"));

        // line 3
        $macros["__internal_parse_1"] = $this->macros["__internal_parse_1"] = $this;
        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/form.html.twig", 1);
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
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 6), "nb_errors", [], "any", false, false, false, 6) > 0) || twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 6), "forms", [], "any", false, false, false, 6)))) {
            // line 7
            echo "        ";
            $context["status_color"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 7), "nb_errors", [], "any", false, false, false, 7)) ? ("red") : (""));
            // line 8
            echo "        ";
            ob_start(function () { return ''; });
            // line 9
            echo "            ";
            echo twig_source($this->env, "@WebProfiler/Icon/form.svg");
            echo "
            <span class=\"sf-toolbar-value\">
                ";
            // line 11
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 11), "nb_errors", [], "any", false, false, false, 11)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 11), "nb_errors", [], "any", false, false, false, 11)) : (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 11), "forms", [], "any", false, false, false, 11)))), "html", null, true);
            echo "
            </span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 14
            echo "
        ";
            // line 15
            ob_start(function () { return ''; });
            // line 16
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Number of forms</b>
                <span class=\"sf-toolbar-status\">";
            // line 18
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 18), "forms", [], "any", false, false, false, 18)), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Number of errors</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 22
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 22), "nb_errors", [], "any", false, false, false, 22) > 0)) ? ("red") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 22), "nb_errors", [], "any", false, false, false, 22), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 25
            echo "
        ";
            // line 26
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null), "status" => ($context["status_color"] ?? null)]);
            echo "
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 30
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 31
        echo "    <span class=\"label label-status-";
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 31), "nb_errors", [], "any", false, false, false, 31)) ? ("error") : (""));
        echo " ";
        echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 31), "forms", [], "any", false, false, false, 31))) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 32
        echo twig_source($this->env, "@WebProfiler/Icon/form.svg");
        echo "</span>
        <strong>Forms</strong>
        ";
        // line 34
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 34), "nb_errors", [], "any", false, false, false, 34) > 0)) {
            // line 35
            echo "            <span class=\"count\">
                <span>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 36), "nb_errors", [], "any", false, false, false, 36), "html", null, true);
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
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 43
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "

    <style>
        #tree-menu {
            float: left;
            padding-right: 10px;
            width: 220px;
        }
        #tree-menu ul {
            list-style: none;
            margin: 0;
            padding-left: 0;
        }
        #tree-menu li {
            margin: 0;
            padding: 0;
            width: 100%;
        }
        #tree-menu .empty {
            border: 0;
            box-shadow: none !important;
            padding: 0;
        }
        #tree-details-container {
            border-left: 1px solid var(--table-border-color);
            margin-left: 230px;
            padding-left: 20px;
        }
        .tree-details {
            padding-bottom: 40px;
        }
        .tree-details h3 {
            font-size: 18px;
            position: relative;
        }

        .toggle-icon {
            display: inline-block;
            background: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' data-icon-name='icon-tabler-square-plus' width='24' height='24' viewBox='0 0 24 24' stroke-width='2px' stroke='currentColor' fill='none' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpath stroke='none' d='M0 0h24v24H0z' fill='none'%3E%3C/path%3E%3Crect x='4' y='4' width='16' height='16' rx='2'%3E%3C/rect%3E%3Cline x1='9' y1='12' x2='15' y2='12'%3E%3C/line%3E%3Cline x1='12' y1='9' x2='12' y2='15'%3E%3C/line%3E%3C/svg%3E\") no-repeat;
            background-size: 18px 18px;
        }
        .closed .toggle-icon, .closed.toggle-icon {
            background-position: bottom left;
        }
        .toggle-icon.empty {
            background-image: none;
        }

        .tree .tree-inner {
            cursor: pointer;
            padding: 5px 7px 5px 22px;
            position: relative;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .tree .toggle-button {
            width: 16px;
            height: 16px;
            margin-left: -18px;
        }
        .tree .toggle-icon {
            width: 18px;
            height: 18px;
            vertical-align: bottom;
        }
        .tree .toggle-icon.empty {
            width: 5px;
            height: 5px;
            position: absolute;
            top: 50%;
            margin-top: -2px;
            margin-left: -13px;
        }
        .tree .tree-inner {
            border-radius: 4px;
        }
        .tree ul ul .tree-inner {
            padding-left: 32px;
        }
        .tree ul ul ul .tree-inner {
            padding-left: 48px;
        }
        .tree ul ul ul ul .tree-inner {
            padding-left: 64px;
        }
        .tree ul ul ul ul ul .tree-inner {
            padding-left: 72px;
        }
        .tree .tree-inner:hover {
            background: var(--gray-200);
        }
        .tree .tree-inner.active, .tree .tree-inner.active:hover {
            background: var(--tree-active-background);
            font-weight: bold;
        }
        .tree-details .toggle-icon {
            width: 16px;
            height: 16px;
            /* vertically center the button */
            position: absolute;
            top: 50%;
            margin-top: -9px;
            margin-left: 6px;
        }
        .badge-error {
            float: right;
            background: var(--background-error);
            color: #FFF;
            padding: 1px 4px;
            font-size: 10px;
            font-weight: bold;
            vertical-align: middle;
        }
        .has-error {
            color: var(--color-error);
        }
        .errors h3 {
            color: var(--color-error);
        }
        .errors th {
            background: var(--background-error);
            color: #FFF;
        }
        .errors .toggle-icon {
            background-color: var(--background-error);
        }
        h3 a, h3 a:hover, h3 a:focus {
            color: inherit;
            text-decoration: inherit;
        }
    </style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 176
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 177
        echo "    <h2>Forms</h2>

    ";
        // line 179
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 179), "forms", [], "any", false, false, false, 179))) {
            // line 180
            echo "        <div id=\"tree-menu\" class=\"tree\">
            <ul>
            ";
            // line 182
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 182), "forms", [], "any", false, false, false, 182));
            foreach ($context['_seq'] as $context["formName"] => $context["formData"]) {
                // line 183
                echo "                ";
                echo twig_call_macro($macros["__internal_parse_1"], "macro_form_tree_entry", [$context["formName"], $context["formData"], true], 183, $context, $this->getSourceContext());
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['formName'], $context['formData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 185
            echo "            </ul>
        </div>

        <div id=\"tree-details-container\">
            ";
            // line 189
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 189), "forms", [], "any", false, false, false, 189));
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
            foreach ($context['_seq'] as $context["formName"] => $context["formData"]) {
                // line 190
                echo "                ";
                echo twig_call_macro($macros["__internal_parse_1"], "macro_form_tree_details", [$context["formName"], $context["formData"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 190), "forms_by_hash", [], "any", false, false, false, 190), twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 190)], 190, $context, $this->getSourceContext());
                echo "
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
            unset($context['_seq'], $context['_iterated'], $context['formName'], $context['formData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 192
            echo "        </div>
    ";
        } else {
            // line 194
            echo "        <div class=\"empty empty-panel\">
            <p>No forms were submitted for this request.</p>
        </div>
    ";
        }
        // line 198
        echo "
    <script>
    function Toggler(storage) {
        \"use strict\";

        var STORAGE_KEY = 'sf_toggle_data',

            states = {},

            isCollapsed = function (button) {
                return Sfjs.hasClass(button, 'closed');
            },

            isExpanded = function (button) {
                return !isCollapsed(button);
            },

            expand = function (button) {
                var targetId = button.dataset.toggleTargetId,
                    target = document.getElementById(targetId);

                if (!target) {
                    throw \"Toggle target \" + targetId + \" does not exist\";
                }

                if (isCollapsed(button)) {
                    Sfjs.removeClass(button, 'closed');
                    Sfjs.removeClass(target, 'hidden');

                    states[targetId] = 1;
                    storage.setItem(STORAGE_KEY, states);
                }
            },

            collapse = function (button) {
                var targetId = button.dataset.toggleTargetId,
                    target = document.getElementById(targetId);

                if (!target) {
                    throw \"Toggle target \" + targetId + \" does not exist\";
                }

                if (isExpanded(button)) {
                    Sfjs.addClass(button, 'closed');
                    Sfjs.addClass(target, 'hidden');

                    states[targetId] = 0;
                    storage.setItem(STORAGE_KEY, states);
                }
            },

            toggle = function (button) {
                if (Sfjs.hasClass(button, 'closed')) {
                    expand(button);
                } else {
                    collapse(button);
                }
            },

            initButtons = function (buttons) {
                states = storage.getItem(STORAGE_KEY, {});

                // must be an object, not an array or anything else
                // `typeof` returns \"object\" also for arrays, so the following
                // check must be done
                // see http://stackoverflow.com/questions/4775722/check-if-object-is-array
                if ('[object Object]' !== Object.prototype.toString.call(states)) {
                    states = {};
                }

                for (var i = 0, l = buttons.length; i < l; ++i) {
                    var targetId = buttons[i].dataset.toggleTargetId,
                        target = document.getElementById(targetId);

                    if (!target) {
                        throw \"Toggle target \" + targetId + \" does not exist\";
                    }

                    // correct the initial state of the button
                    if (Sfjs.hasClass(target, 'hidden')) {
                        Sfjs.addClass(buttons[i], 'closed');
                    }

                    // attach listener for expanding/collapsing the target
                    clickHandler(buttons[i], toggle);

                    if (states.hasOwnProperty(targetId)) {
                        // open or collapse based on stored data
                        if (0 === states[targetId]) {
                            collapse(buttons[i]);
                        } else {
                            expand(buttons[i]);
                        }
                    }
                }
            };

        return {
            initButtons: initButtons,

            toggle: toggle,

            isExpanded: isExpanded,

            isCollapsed: isCollapsed,

            expand: expand,

            collapse: collapse
        };
    }

    function JsonStorage(storage) {
        var setItem = function (key, data) {
                storage.setItem(key, JSON.stringify(data));
            },

            getItem = function (key, defaultValue) {
                var data = storage.getItem(key);

                if (null !== data) {
                    try {
                        return JSON.parse(data);
                    } catch(e) {
                    }
                }

                return defaultValue;
            };

        return {
            setItem: setItem,

            getItem: getItem
        };
    }

    function TabView() {
        \"use strict\";

        var activeTab = null,

            activeTarget = null,

            select = function (tab) {
                var targetId = tab.dataset.tabTargetId,
                    target = document.getElementById(targetId);

                if (!target) {
                    throw \"Tab target \" + targetId + \" does not exist\";
                }

                if (activeTab) {
                    Sfjs.removeClass(activeTab, 'active');
                }

                if (activeTarget) {
                    Sfjs.addClass(activeTarget, 'hidden');
                }

                Sfjs.addClass(tab, 'active');
                Sfjs.removeClass(target, 'hidden');

                activeTab = tab;
                activeTarget = target;
            },

            initTabs = function (tabs) {
                for (var i = 0, l = tabs.length; i < l; ++i) {
                    var targetId = tabs[i].dataset.tabTargetId,
                        target = document.getElementById(targetId);

                    if (!target) {
                        throw \"Tab target \" + targetId + \" does not exist\";
                    }

                    clickHandler(tabs[i], select);

                    Sfjs.addClass(target, 'hidden');
                }

                if (tabs.length > 0) {
                    select(tabs[0]);
                }
            };

        return {
            initTabs: initTabs,

            select: select
        };
    }

    var tabTarget = new TabView(),
        toggler = new Toggler(new JsonStorage(sessionStorage)),
        clickHandler = function (element, callback) {
            Sfjs.addEventListener(element, 'click', function (e) {
                if (!e) {
                    e = window.event;
                }

                callback(this);

                if (e.preventDefault) {
                    e.preventDefault();
                } else {
                    e.returnValue = false;
                }

                e.stopPropagation();

                return false;
            });
        };

    tabTarget.initTabs(document.querySelectorAll('.tree .tree-inner'));
    toggler.initButtons(document.querySelectorAll('.toggle-button'));
    </script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 418
    public function macro_form_tree_entry($__name__ = null, $__data__ = null, $__is_root__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "data" => $__data__,
            "is_root" => $__is_root__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "form_tree_entry"));

            // line 419
            echo "    ";
            $macros["tree"] = $this;
            // line 420
            echo "    ";
            $context["has_error"] = (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "errors", [], "any", true, true, false, 420) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "errors", [], "any", false, false, false, 420)) > 0));
            // line 421
            echo "    <li>
        <div class=\"tree-inner\" data-tab-target-id=\"";
            // line 422
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "id", [], "any", false, false, false, 422), "html", null, true);
            echo "-details\" title=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("name", $context)) ? (_twig_default_filter(($context["name"] ?? null), "(no name)")) : ("(no name)")), "html", null, true);
            echo "\">
            ";
            // line 423
            if (($context["has_error"] ?? null)) {
                // line 424
                echo "                <div class=\"badge-error\">";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "errors", [], "any", false, false, false, 424)), "html", null, true);
                echo "</div>
            ";
            }
            // line 426
            echo "
            ";
            // line 427
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "children", [], "any", false, false, false, 427))) {
                // line 428
                echo "                <a class=\"toggle-button\" data-toggle-target-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "id", [], "any", false, false, false, 428), "html", null, true);
                echo "-children\" href=\"#\"><span class=\"toggle-icon\"></span></a>
            ";
            } else {
                // line 430
                echo "                <div class=\"toggle-icon empty\"></div>
            ";
            }
            // line 432
            echo "
            <span ";
            // line 433
            if ((($context["has_error"] ?? null) || ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "has_children_error", [], "any", true, true, false, 433)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "has_children_error", [], "any", false, false, false, 433), false)) : (false)))) {
                echo "class=\"has-error\"";
            }
            echo ">
                ";
            // line 434
            echo twig_escape_filter($this->env, ((array_key_exists("name", $context)) ? (_twig_default_filter(($context["name"] ?? null), "(no name)")) : ("(no name)")), "html", null, true);
            echo "
            </span>
        </div>

        ";
            // line 438
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "children", [], "any", false, false, false, 438))) {
                // line 439
                echo "            <ul id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "id", [], "any", false, false, false, 439), "html", null, true);
                echo "-children\" ";
                if (( !($context["is_root"] ?? null) &&  !((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "has_children_error", [], "any", true, true, false, 439)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "has_children_error", [], "any", false, false, false, 439), false)) : (false)))) {
                    echo "class=\"hidden\"";
                }
                echo ">
                ";
                // line 440
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "children", [], "any", false, false, false, 440));
                foreach ($context['_seq'] as $context["childName"] => $context["childData"]) {
                    // line 441
                    echo "                    ";
                    echo twig_call_macro($macros["tree"], "macro_form_tree_entry", [$context["childName"], $context["childData"], false], 441, $context, $this->getSourceContext());
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['childName'], $context['childData'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 443
                echo "            </ul>
        ";
            }
            // line 445
            echo "    </li>
";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 448
    public function macro_form_tree_details($__name__ = null, $__data__ = null, $__forms_by_hash__ = null, $__show__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "data" => $__data__,
            "forms_by_hash" => $__forms_by_hash__,
            "show" => $__show__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "form_tree_details"));

            // line 449
            echo "    ";
            $macros["tree"] = $this;
            // line 450
            echo "    <div class=\"tree-details";
            if ( !((array_key_exists("show", $context)) ? (_twig_default_filter(($context["show"] ?? null), false)) : (false))) {
                echo " hidden";
            }
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "id", [], "any", true, true, false, 450)) {
                echo "id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "id", [], "any", false, false, false, 450), "html", null, true);
                echo "-details\"";
            }
            echo ">
        <h2>";
            // line 451
            echo twig_escape_filter($this->env, ((array_key_exists("name", $context)) ? (_twig_default_filter(($context["name"] ?? null), "(no name)")) : ("(no name)")), "html", null, true);
            echo "</h2>
        ";
            // line 452
            if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "type_class", [], "any", true, true, false, 452)) {
                // line 453
                echo "            <div class=\"form-type-class\">
                <span class=\"form-type-class-label\">Form type:</span>
                ";
                // line 455
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "type_class", [], "any", false, false, false, 455));
                echo "
            </div>
        ";
            }
            // line 458
            echo "
        ";
            // line 459
            $context["form_has_errors"] =  !twig_test_empty((((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "errors", [], "any", true, true, false, 459) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "errors", [], "any", false, false, false, 459)))) ? (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "errors", [], "any", false, false, false, 459)) : ([])));
            // line 460
            echo "        <div class=\"sf-tabs\">
            <div class=\"tab ";
            // line 461
            echo ((($context["form_has_errors"] ?? null)) ? ("active") : ("disabled"));
            echo "\">
                <h3 class=\"tab-title\">Errors</h3>

                <div class=\"tab-content\">
                    ";
            // line 465
            echo twig_call_macro($macros["_self"], "macro_render_form_errors", [($context["data"] ?? null)], 465, $context, $this->getSourceContext());
            echo "
                </div>
            </div>

            <div class=\"tab ";
            // line 469
            echo (( !($context["form_has_errors"] ?? null)) ? ("active") : (""));
            echo "\">
                <h3 class=\"tab-title\">Default Data</h3>

                <div class=\"tab-content\">
                    ";
            // line 473
            echo twig_call_macro($macros["_self"], "macro_render_form_default_data", [($context["data"] ?? null)], 473, $context, $this->getSourceContext());
            echo "
                </div>
            </div>

            <div class=\"tab ";
            // line 477
            echo ((twig_test_empty((((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "submitted_data", [], "any", true, true, false, 477) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "submitted_data", [], "any", false, false, false, 477)))) ? (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "submitted_data", [], "any", false, false, false, 477)) : ([])))) ? ("disabled") : (""));
            echo "\">
                <h3 class=\"tab-title\">Submitted Data</h3>

                <div class=\"tab-content\">
                    ";
            // line 481
            echo twig_call_macro($macros["_self"], "macro_render_form_submitted_data", [($context["data"] ?? null)], 481, $context, $this->getSourceContext());
            echo "
                </div>
            </div>

            <div class=\"tab ";
            // line 485
            echo ((twig_test_empty((((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "passed_options", [], "any", true, true, false, 485) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "passed_options", [], "any", false, false, false, 485)))) ? (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "passed_options", [], "any", false, false, false, 485)) : ([])))) ? ("disabled") : (""));
            echo "\">
                <h3 class=\"tab-title\">Passed Options</h3>

                <div class=\"tab-content\">
                    ";
            // line 489
            echo twig_call_macro($macros["_self"], "macro_render_form_passed_options", [($context["data"] ?? null)], 489, $context, $this->getSourceContext());
            echo "
                </div>
            </div>

            <div class=\"tab ";
            // line 493
            echo ((twig_test_empty((((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "resolved_options", [], "any", true, true, false, 493) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "resolved_options", [], "any", false, false, false, 493)))) ? (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "resolved_options", [], "any", false, false, false, 493)) : ([])))) ? ("disabled") : (""));
            echo "\">
                <h3 class=\"tab-title\">Resolved Options</h3>

                <div class=\"tab-content\">
                    ";
            // line 497
            echo twig_call_macro($macros["_self"], "macro_render_form_resolved_options", [($context["data"] ?? null)], 497, $context, $this->getSourceContext());
            echo "
                </div>
            </div>

            <div class=\"tab ";
            // line 501
            echo ((twig_test_empty((((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "view_vars", [], "any", true, true, false, 501) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "view_vars", [], "any", false, false, false, 501)))) ? (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "view_vars", [], "any", false, false, false, 501)) : ([])))) ? ("disabled") : (""));
            echo "\">
                <h3 class=\"tab-title\">View Vars</h3>

                <div class=\"tab-content\">
                    ";
            // line 505
            echo twig_call_macro($macros["_self"], "macro_render_form_view_variables", [($context["data"] ?? null)], 505, $context, $this->getSourceContext());
            echo "
                </div>
            </div>
        </div>
    </div>

    ";
            // line 511
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "children", [], "any", false, false, false, 511));
            foreach ($context['_seq'] as $context["childName"] => $context["childData"]) {
                // line 512
                echo "        ";
                echo twig_call_macro($macros["tree"], "macro_form_tree_details", [$context["childName"], $context["childData"], ($context["forms_by_hash"] ?? null)], 512, $context, $this->getSourceContext());
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['childName'], $context['childData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 516
    public function macro_render_form_errors($__data__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "data" => $__data__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_errors"));

            // line 517
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "errors", [], "any", true, true, false, 517) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "errors", [], "any", false, false, false, 517)) > 0))) {
                // line 518
                echo "        <div class=\"errors\">
            <h3>
                <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 520
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "id", [], "any", false, false, false, 520), "html", null, true);
                echo "-errors\" href=\"#\">
                    Errors <span class=\"toggle-icon\"></span>
                </a>
            </h3>

            <table id=\"";
                // line 525
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "id", [], "any", false, false, false, 525), "html", null, true);
                echo "-errors\">
                <thead>
                <tr>
                    <th>Message</th>
                    <th>Origin</th>
                    <th>Cause</th>
                </tr>
                </thead>
                <tbody>
                ";
                // line 534
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "errors", [], "any", false, false, false, 534));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 535
                    echo "                    <tr>
                        <td>";
                    // line 536
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 536), "html", null, true);
                    echo "</td>
                        <td>
                            ";
                    // line 538
                    if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["error"], "origin", [], "any", false, false, false, 538))) {
                        // line 539
                        echo "                                <em>This form.</em>
                            ";
                    } elseif ( !twig_get_attribute($this->env, $this->source,                     // line 540
($context["forms_by_hash"] ?? null), twig_get_attribute($this->env, $this->source, $context["error"], "origin", [], "any", false, false, false, 540), [], "array", true, true, false, 540)) {
                        // line 541
                        echo "                                <em>Unknown.</em>
                            ";
                    } else {
                        // line 543
                        echo "                                ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["forms_by_hash"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["error"], "origin", [], "any", false, false, false, 543)] ?? null) : null), "name", [], "any", false, false, false, 543), "html", null, true);
                        echo "
                            ";
                    }
                    // line 545
                    echo "                        </td>
                        <td>
                            ";
                    // line 547
                    if (twig_get_attribute($this->env, $this->source, $context["error"], "trace", [], "any", false, false, false, 547)) {
                        // line 548
                        echo "                                <span class=\"newline\">Caused by:</span>
                                ";
                        // line 549
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["error"], "trace", [], "any", false, false, false, 549));
                        foreach ($context['_seq'] as $context["_key"] => $context["stacked"]) {
                            // line 550
                            echo "                                    ";
                            echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $context["stacked"]);
                            echo "
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stacked'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 552
                        echo "                            ";
                    } else {
                        // line 553
                        echo "                                <em>Unknown.</em>
                            ";
                    }
                    // line 555
                    echo "                        </td>
                    </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 558
                echo "                </tbody>
            </table>
        </div>
    ";
            } else {
                // line 562
                echo "        <div class=\"empty\">
            <p>This form has no errors.</p>
        </div>
    ";
            }
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 568
    public function macro_render_form_default_data($__data__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "data" => $__data__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_default_data"));

            // line 569
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "default_data", [], "any", true, true, false, 569)) {
                // line 570
                echo "        <table>
            <thead>
            <tr>
                <th width=\"180\">Property</th>
                <th>Value</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th class=\"font-normal\" scope=\"row\">Model Format</th>
                <td>
                    ";
                // line 581
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "default_data", [], "any", false, true, false, 581), "model", [], "any", true, true, false, 581)) {
                    // line 582
                    echo "                        ";
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "default_data", [], "any", false, false, false, 582), "seek", [0 => "model"], "method", false, false, false, 582));
                    echo "
                    ";
                } else {
                    // line 584
                    echo "                        <em class=\"font-normal text-muted\">same as normalized format</em>
                    ";
                }
                // line 586
                echo "                </td>
            </tr>
            <tr>
                <th class=\"font-normal\" scope=\"row\">Normalized Format</th>
                <td>";
                // line 590
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "default_data", [], "any", false, false, false, 590), "seek", [0 => "norm"], "method", false, false, false, 590));
                echo "</td>
            </tr>
            <tr>
                <th class=\"font-normal\" scope=\"row\">View Format</th>
                <td>
                    ";
                // line 595
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "default_data", [], "any", false, true, false, 595), "view", [], "any", true, true, false, 595)) {
                    // line 596
                    echo "                        ";
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "default_data", [], "any", false, false, false, 596), "seek", [0 => "view"], "method", false, false, false, 596));
                    echo "
                    ";
                } else {
                    // line 598
                    echo "                        <em class=\"font-normal text-muted\">same as normalized format</em>
                    ";
                }
                // line 600
                echo "                </td>
            </tr>
            </tbody>
        </table>
    ";
            } else {
                // line 605
                echo "        <div class=\"empty\">
            <p>This form has default data defined.</p>
        </div>
    ";
            }
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 611
    public function macro_render_form_submitted_data($__data__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "data" => $__data__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_submitted_data"));

            // line 612
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "submitted_data", [], "any", false, true, false, 612), "norm", [], "any", true, true, false, 612)) {
                // line 613
                echo "        <table>
            <thead>
            <tr>
                <th width=\"180\">Property</th>
                <th>Value</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th class=\"font-normal\" scope=\"row\">View Format</th>
                <td>
                    ";
                // line 624
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "submitted_data", [], "any", false, true, false, 624), "view", [], "any", true, true, false, 624)) {
                    // line 625
                    echo "                        ";
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "submitted_data", [], "any", false, false, false, 625), "seek", [0 => "view"], "method", false, false, false, 625));
                    echo "
                    ";
                } else {
                    // line 627
                    echo "                        <em class=\"font-normal text-muted\">same as normalized format</em>
                    ";
                }
                // line 629
                echo "                </td>
            </tr>
            <tr>
                <th class=\"font-normal\" scope=\"row\">Normalized Format</th>
                <td>";
                // line 633
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "submitted_data", [], "any", false, false, false, 633), "seek", [0 => "norm"], "method", false, false, false, 633));
                echo "</td>
            </tr>
            <tr>
                <th class=\"font-normal\" scope=\"row\">Model Format</th>
                <td>
                    ";
                // line 638
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "submitted_data", [], "any", false, true, false, 638), "model", [], "any", true, true, false, 638)) {
                    // line 639
                    echo "                        ";
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "submitted_data", [], "any", false, false, false, 639), "seek", [0 => "model"], "method", false, false, false, 639));
                    echo "
                    ";
                } else {
                    // line 641
                    echo "                        <em class=\"font-normal text-muted\">same as normalized format</em>
                    ";
                }
                // line 643
                echo "                </td>
            </tr>
            </tbody>
        </table>
    ";
            } else {
                // line 648
                echo "        <div class=\"empty\">
            <p>This form was not submitted.</p>
        </div>
    ";
            }
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 654
    public function macro_render_form_passed_options($__data__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "data" => $__data__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_passed_options"));

            // line 655
            echo "    ";
            if ( !twig_test_empty((((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "passed_options", [], "any", true, true, false, 655) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "passed_options", [], "any", false, false, false, 655)))) ? (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "passed_options", [], "any", false, false, false, 655)) : ([])))) {
                // line 656
                echo "        <table>
            <thead>
            <tr>
                <th width=\"180\">Option</th>
                <th>Passed Value</th>
                <th>Resolved Value</th>
            </tr>
            </thead>
            <tbody>
            ";
                // line 665
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "passed_options", [], "any", false, false, false, 665));
                foreach ($context['_seq'] as $context["option"] => $context["value"]) {
                    // line 666
                    echo "                <tr>
                    <th>";
                    // line 667
                    echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                    echo "</th>
                    <td>";
                    // line 668
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $context["value"]);
                    echo "</td>
                    <td>
                        ";
                    // line 671
                    echo "                        ";
                    $context["option_value"] = ((twig_get_attribute($this->env, $this->source, $context["value"], "value", [], "any", true, true, false, 671)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["value"], "value", [], "any", false, false, false, 671), $context["value"])) : ($context["value"]));
                    // line 672
                    echo "                        ";
                    $context["resolved_option_value"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "resolved_options", [], "any", false, true, false, 672), $context["option"], [], "array", false, true, false, 672), "value", [], "any", true, true, false, 672)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "resolved_options", [], "any", false, true, false, 672), $context["option"], [], "array", false, true, false, 672), "value", [], "any", false, false, false, 672), (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "resolved_options", [], "any", false, false, false, 672)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["option"]] ?? null) : null))) : ((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "resolved_options", [], "any", false, false, false, 672)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["option"]] ?? null) : null)));
                    // line 673
                    echo "                        ";
                    if ((($context["resolved_option_value"] ?? null) == ($context["option_value"] ?? null))) {
                        // line 674
                        echo "                            <em class=\"font-normal text-muted\">same as passed value</em>
                        ";
                    } else {
                        // line 676
                        echo "                            ";
                        echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "resolved_options", [], "any", false, false, false, 676), "seek", [0 => $context["option"]], "method", false, false, false, 676));
                        echo "
                        ";
                    }
                    // line 678
                    echo "                    </td>
                </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['option'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 681
                echo "            </tbody>
        </table>
    ";
            } else {
                // line 684
                echo "        <div class=\"empty\">
            <p>No options were passed when constructing this form.</p>
        </div>
    ";
            }
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 690
    public function macro_render_form_resolved_options($__data__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "data" => $__data__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_resolved_options"));

            // line 691
            echo "    <table>
        <thead>
        <tr>
            <th width=\"180\">Option</th>
            <th>Value</th>
        </tr>
        </thead>
        <tbody>
        ";
            // line 699
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "resolved_options", [], "any", true, true, false, 699) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "resolved_options", [], "any", false, false, false, 699)))) ? (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "resolved_options", [], "any", false, false, false, 699)) : ([])));
            foreach ($context['_seq'] as $context["option"] => $context["value"]) {
                // line 700
                echo "            <tr>
                <th scope=\"row\">";
                // line 701
                echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                echo "</th>
                <td>";
                // line 702
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $context["value"]);
                echo "</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 705
            echo "        </tbody>
    </table>
";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 709
    public function macro_render_form_view_variables($__data__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "data" => $__data__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_view_variables"));

            // line 710
            echo "    <table>
        <thead>
        <tr>
            <th width=\"180\">Variable</th>
            <th>Value</th>
        </tr>
        </thead>
        <tbody>
        ";
            // line 718
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "view_vars", [], "any", true, true, false, 718) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "view_vars", [], "any", false, false, false, 718)))) ? (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "view_vars", [], "any", false, false, false, 718)) : ([])));
            foreach ($context['_seq'] as $context["variable"] => $context["value"]) {
                // line 719
                echo "            <tr>
                <th scope=\"row\">";
                // line 720
                echo twig_escape_filter($this->env, $context["variable"], "html", null, true);
                echo "</th>
                <td>";
                // line 721
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $context["value"]);
                echo "</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['variable'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 724
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
        return "@WebProfiler/Collector/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1412 => 724,  1403 => 721,  1399 => 720,  1396 => 719,  1392 => 718,  1382 => 710,  1366 => 709,  1352 => 705,  1343 => 702,  1339 => 701,  1336 => 700,  1332 => 699,  1322 => 691,  1306 => 690,  1290 => 684,  1285 => 681,  1277 => 678,  1271 => 676,  1267 => 674,  1264 => 673,  1261 => 672,  1258 => 671,  1253 => 668,  1249 => 667,  1246 => 666,  1242 => 665,  1231 => 656,  1228 => 655,  1212 => 654,  1196 => 648,  1189 => 643,  1185 => 641,  1179 => 639,  1177 => 638,  1169 => 633,  1163 => 629,  1159 => 627,  1153 => 625,  1151 => 624,  1138 => 613,  1135 => 612,  1119 => 611,  1103 => 605,  1096 => 600,  1092 => 598,  1086 => 596,  1084 => 595,  1076 => 590,  1070 => 586,  1066 => 584,  1060 => 582,  1058 => 581,  1045 => 570,  1042 => 569,  1026 => 568,  1010 => 562,  1004 => 558,  996 => 555,  992 => 553,  989 => 552,  980 => 550,  976 => 549,  973 => 548,  971 => 547,  967 => 545,  961 => 543,  957 => 541,  955 => 540,  952 => 539,  950 => 538,  945 => 536,  942 => 535,  938 => 534,  926 => 525,  918 => 520,  914 => 518,  911 => 517,  895 => 516,  876 => 512,  872 => 511,  863 => 505,  856 => 501,  849 => 497,  842 => 493,  835 => 489,  828 => 485,  821 => 481,  814 => 477,  807 => 473,  800 => 469,  793 => 465,  786 => 461,  783 => 460,  781 => 459,  778 => 458,  772 => 455,  768 => 453,  766 => 452,  762 => 451,  749 => 450,  746 => 449,  727 => 448,  714 => 445,  710 => 443,  701 => 441,  697 => 440,  688 => 439,  686 => 438,  679 => 434,  673 => 433,  670 => 432,  666 => 430,  660 => 428,  658 => 427,  655 => 426,  649 => 424,  647 => 423,  641 => 422,  638 => 421,  635 => 420,  632 => 419,  614 => 418,  389 => 198,  383 => 194,  379 => 192,  362 => 190,  345 => 189,  339 => 185,  330 => 183,  326 => 182,  322 => 180,  320 => 179,  316 => 177,  309 => 176,  169 => 43,  162 => 42,  154 => 39,  148 => 36,  145 => 35,  143 => 34,  138 => 32,  131 => 31,  124 => 30,  114 => 26,  111 => 25,  103 => 22,  96 => 18,  92 => 16,  90 => 15,  87 => 14,  81 => 11,  75 => 9,  72 => 8,  69 => 7,  66 => 6,  59 => 5,  51 => 1,  49 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Collector/form.html.twig", "/Users/jackrima/Sites/gentella/vendor/symfony/web-profiler-bundle/Resources/views/Collector/form.html.twig");
    }
}
