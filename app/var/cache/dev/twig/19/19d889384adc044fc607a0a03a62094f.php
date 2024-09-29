<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @SonataAdmin/CRUD/base_show.html.twig */
class __TwigTemplate_d56232cae1547ac0abaa52aa4e6a9816 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'navbar_title' => [$this, 'block_navbar_title'],
            'actions' => [$this, 'block_actions'],
            'tab_menu' => [$this, 'block_tab_menu'],
            'show' => [$this, 'block_show'],
            'show_groups' => [$this, 'block_show_groups'],
            'field_row' => [$this, 'block_field_row'],
            'show_title' => [$this, 'block_show_title'],
            'show_field' => [$this, 'block_show_field'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new RuntimeError('Variable "base_template" does not exist.', 12, $this->source); })()), "@SonataAdmin/CRUD/base_show.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_show.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 14
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 15
        yield "    ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title_show", ["%name%" => CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 15, $this->source); })()), "toString", [(isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 15, $this->source); })())], "method", false, false, false, 15)), "truncate", [15, "..."], "method", false, false, false, 15)], "SonataAdminBundle"), "html", null, true);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navbar_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 19
        yield "    ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title_show", ["%name%" => CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 19, $this->source); })()), "toString", [(isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 19, $this->source); })())], "method", false, false, false, 19)), "truncate", [100, "..."], "method", false, false, false, 19)], "SonataAdminBundle"), "html", null, true);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 22
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actions"));

        // line 23
        yield from         $this->loadTemplate("@SonataAdmin/CRUD/action_buttons.html.twig", "@SonataAdmin/CRUD/base_show.html.twig", 23)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 26
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_tab_menu(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 27
        yield "    ";
        yield $this->extensions['Knp\Menu\Twig\MenuExtension']->render(CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 27, $this->source); })()), "sidemenu", [(isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 27, $this->source); })())], "method", false, false, false, 27), ["currentClass" => "active", "template" => $this->env->getRuntime('Sonata\AdminBundle\Twig\TemplateRegistryRuntime')->getGlobalTemplate("tab_menu_template")], "twig");
        // line 30
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 33
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_show(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "show"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "show"));

        // line 34
        yield "    <div class=\"sonata-ba-view\">

        ";
        // line 36
        yield $this->env->getRuntime('Sonata\BlockBundle\Templating\Helper\BlockHelper')->renderEvent("sonata.admin.show.top", ["admin" => (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 36, $this->source); })()), "object" => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 36, $this->source); })())]);
        yield "

        ";
        // line 38
        $context["showtabs"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 38, $this->source); })()), "getshowtabs", [], "method", false, false, false, 38);
        // line 39
        yield "        ";
        $context["has_tab"] = (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["showtabs"]) || array_key_exists("showtabs", $context) ? $context["showtabs"] : (function () { throw new RuntimeError('Variable "showtabs" does not exist.', 39, $this->source); })())) == 1) && (CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::keys((isset($context["showtabs"]) || array_key_exists("showtabs", $context) ? $context["showtabs"] : (function () { throw new RuntimeError('Variable "showtabs" does not exist.', 39, $this->source); })())), 0, [], "array", false, false, false, 39) != "default")) || (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["showtabs"]) || array_key_exists("showtabs", $context) ? $context["showtabs"] : (function () { throw new RuntimeError('Variable "showtabs" does not exist.', 39, $this->source); })())) > 1));
        // line 40
        yield "
        ";
        // line 41
        if ((isset($context["has_tab"]) || array_key_exists("has_tab", $context) ? $context["has_tab"] : (function () { throw new RuntimeError('Variable "has_tab" does not exist.', 41, $this->source); })())) {
            // line 42
            yield "            ";
            $context["tab_prefix"] = ((("tab_" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 42, $this->source); })()), "uniqid", [], "any", false, false, false, 42)) . "_") . Twig\Extension\CoreExtension::random($this->env->getCharset()));
            // line 43
            yield "            ";
            $context["tab_query_index"] = Twig\Extension\CoreExtension::last($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "request", [], "any", false, false, false, 43), "query", [], "any", false, false, false, 43), "get", ["_tab", 0], "method", false, false, false, 43), "_"));
            // line 44
            yield "            <div class=\"nav-tabs-custom\">
                <ul class=\"nav nav-tabs\" role=\"tablist\">
                    ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["showtabs"]) || array_key_exists("showtabs", $context) ? $context["showtabs"] : (function () { throw new RuntimeError('Variable "showtabs" does not exist.', 46, $this->source); })()));
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
            foreach ($context['_seq'] as $context["name"] => $context["show_tab"]) {
                // line 47
                yield "                        ";
                $context["_tab_name"] = (((isset($context["tab_prefix"]) || array_key_exists("tab_prefix", $context) ? $context["tab_prefix"] : (function () { throw new RuntimeError('Variable "tab_prefix" does not exist.', 47, $this->source); })()) . "_") . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 47));
                // line 48
                yield "                        <li";
                if ((( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "request", [], "any", false, false, false, 48), "query", [], "any", false, false, false, 48), "has", ["_tab"], "method", false, false, false, 48) && (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 48) == 1)) || ((isset($context["tab_query_index"]) || array_key_exists("tab_query_index", $context) ? $context["tab_query_index"] : (function () { throw new RuntimeError('Variable "tab_query_index" does not exist.', 48, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 48)))) {
                    yield " class=\"active\"";
                }
                yield ">
                            <a href=\"#";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["_tab_name"]) || array_key_exists("_tab_name", $context) ? $context["_tab_name"] : (function () { throw new RuntimeError('Variable "_tab_name" does not exist.', 49, $this->source); })()), "html", null, true);
                yield "\" class=\"changer-tab\" aria-controls=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["_tab_name"]) || array_key_exists("_tab_name", $context) ? $context["_tab_name"] : (function () { throw new RuntimeError('Variable "_tab_name" does not exist.', 49, $this->source); })()), "html", null, true);
                yield "\" data-toggle=\"tab\">
                                ";
                // line 50
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["show_tab"], "translation_domain", [], "any", true, true, false, 50) && (CoreExtension::getAttribute($this->env, $this->source, $context["show_tab"], "translation_domain", [], "any", false, false, false, 50) === false))) {
                    // line 51
                    yield "                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["show_tab"], "label", [], "any", false, false, false, 51), "html", null, true);
                    yield "
                                ";
                } else {
                    // line 53
                    yield "                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["show_tab"], "label", [], "any", false, false, false, 53), [], (((CoreExtension::getAttribute($this->env, $this->source, $context["show_tab"], "translation_domain", [], "any", true, true, false, 53) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["show_tab"], "translation_domain", [], "any", false, false, false, 53)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["show_tab"], "translation_domain", [], "any", false, false, false, 53)) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 53, $this->source); })()), "translationDomain", [], "any", false, false, false, 53)))), "html", null, true);
                    yield "
                                ";
                }
                // line 55
                yield "                            </a>
                        </li>
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['name'], $context['show_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            yield "                </ul>

                <div class=\"tab-content\">
                    ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["showtabs"]) || array_key_exists("showtabs", $context) ? $context["showtabs"] : (function () { throw new RuntimeError('Variable "showtabs" does not exist.', 61, $this->source); })()));
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
            foreach ($context['_seq'] as $context["code"] => $context["show_tab"]) {
                // line 62
                yield "                        ";
                $context["_tab_name"] = (((isset($context["tab_prefix"]) || array_key_exists("tab_prefix", $context) ? $context["tab_prefix"] : (function () { throw new RuntimeError('Variable "tab_prefix" does not exist.', 62, $this->source); })()) . "_") . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 62));
                // line 63
                yield "                        <div
                            class=\"tab-pane fade";
                // line 64
                if ((( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "request", [], "any", false, false, false, 64), "query", [], "any", false, false, false, 64), "has", ["_tab"], "method", false, false, false, 64) && CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 64)) || ((isset($context["tab_query_index"]) || array_key_exists("tab_query_index", $context) ? $context["tab_query_index"] : (function () { throw new RuntimeError('Variable "tab_query_index" does not exist.', 64, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 64)))) {
                    yield " in active";
                }
                yield "\"
                            id=\"";
                // line 65
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["_tab_name"]) || array_key_exists("_tab_name", $context) ? $context["_tab_name"] : (function () { throw new RuntimeError('Variable "_tab_name" does not exist.', 65, $this->source); })()), "html", null, true);
                yield "\"
                        >
                            <div class=\"box-body  container-fluid\">
                                <div class=\"sonata-ba-collapsed-fields\">
                                    ";
                // line 69
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["show_tab"], "description", [], "any", false, false, false, 69) != false)) {
                    // line 70
                    yield "                                        <p>";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["show_tab"], "description", [], "any", false, false, false, 70);
                    yield "</p>
                                    ";
                }
                // line 72
                yield "
                                    ";
                // line 73
                $context["groups"] = CoreExtension::getAttribute($this->env, $this->source, $context["show_tab"], "groups", [], "any", false, false, false, 73);
                // line 74
                yield "                                    ";
                yield from                 $this->unwrap()->yieldBlock("show_groups", $context, $blocks);
                yield "
                                </div>
                            </div>
                        </div>
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['code'], $context['show_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            yield "                </div>
            </div>
        ";
        } elseif (CoreExtension::getAttribute($this->env, $this->source,         // line 81
($context["showtabs"] ?? null), "default", [], "array", true, true, false, 81)) {
            // line 82
            yield "            ";
            $context["groups"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["showtabs"]) || array_key_exists("showtabs", $context) ? $context["showtabs"] : (function () { throw new RuntimeError('Variable "showtabs" does not exist.', 82, $this->source); })()), "default", [], "array", false, false, false, 82), "groups", [], "any", false, false, false, 82);
            // line 83
            yield "            ";
            yield from             $this->unwrap()->yieldBlock("show_groups", $context, $blocks);
            yield "
        ";
        }
        // line 85
        yield "
    </div>

    ";
        // line 88
        yield $this->env->getRuntime('Sonata\BlockBundle\Templating\Helper\BlockHelper')->renderEvent("sonata.admin.show.bottom", ["admin" => (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 88, $this->source); })()), "object" => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 88, $this->source); })())]);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 91
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_show_groups(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "show_groups"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "show_groups"));

        // line 92
        yield "    <div class=\"row\">
        ";
        // line 93
        yield from $this->unwrap()->yieldBlock('field_row', $context, $blocks);
        // line 129
        yield "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 93
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_field_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "field_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "field_row"));

        // line 94
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new RuntimeError('Variable "groups" does not exist.', 94, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
            // line 95
            yield "                ";
            $context["show_group"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 95, $this->source); })()), "showgroups", [], "any", false, false, false, 95), $context["code"], [], "array", false, false, false, 95);
            // line 96
            yield "
                <div class=\"";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["show_group"] ?? null), "class", [], "any", true, true, false, 97)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["show_group"] ?? null), "class", [], "any", false, false, false, 97), "col-md-12")) : ("col-md-12")), "html", null, true);
            yield " ";
            yield ((((array_key_exists("no_padding", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["no_padding"]) || array_key_exists("no_padding", $context) ? $context["no_padding"] : (function () { throw new RuntimeError('Variable "no_padding" does not exist.', 97, $this->source); })()), false)) : (false))) ? ("nopadding") : (""));
            yield "\">
                    <div class=\"";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["show_group"]) || array_key_exists("show_group", $context) ? $context["show_group"] : (function () { throw new RuntimeError('Variable "show_group" does not exist.', 98, $this->source); })()), "box_class", [], "any", false, false, false, 98), "html", null, true);
            yield "\">
                        <div class=\"box-header\">
                            <h4 class=\"box-title\">
                                ";
            // line 101
            yield from $this->unwrap()->yieldBlock('show_title', $context, $blocks);
            // line 108
            yield "                            </h4>
                        </div>
                        <div class=\"box-body table-responsive no-padding\">
                            <table class=\"table\">
                                <tbody>
                                ";
            // line 113
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["show_group"]) || array_key_exists("show_group", $context) ? $context["show_group"] : (function () { throw new RuntimeError('Variable "show_group" does not exist.', 113, $this->source); })()), "fields", [], "any", false, false, false, 113));
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
            foreach ($context['_seq'] as $context["_key"] => $context["show_field_name"]) {
                // line 114
                yield "                                    ";
                yield from $this->unwrap()->yieldBlock('show_field', $context, $blocks);
                // line 121
                yield "                                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['show_field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            yield "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 101
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_show_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "show_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "show_title"));

        // line 102
        yield "                                    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["show_group"] ?? null), "translation_domain", [], "any", true, true, false, 102) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["show_group"]) || array_key_exists("show_group", $context) ? $context["show_group"] : (function () { throw new RuntimeError('Variable "show_group" does not exist.', 102, $this->source); })()), "translation_domain", [], "any", false, false, false, 102) === false))) {
            // line 103
            yield "                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["show_group"]) || array_key_exists("show_group", $context) ? $context["show_group"] : (function () { throw new RuntimeError('Variable "show_group" does not exist.', 103, $this->source); })()), "label", [], "any", false, false, false, 103), "html", null, true);
            yield "
                                    ";
        } else {
            // line 105
            yield "                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["show_group"]) || array_key_exists("show_group", $context) ? $context["show_group"] : (function () { throw new RuntimeError('Variable "show_group" does not exist.', 105, $this->source); })()), "label", [], "any", false, false, false, 105), [], (((CoreExtension::getAttribute($this->env, $this->source, ($context["show_group"] ?? null), "translation_domain", [], "any", true, true, false, 105) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["show_group"] ?? null), "translation_domain", [], "any", false, false, false, 105)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["show_group"] ?? null), "translation_domain", [], "any", false, false, false, 105)) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 105, $this->source); })()), "translationDomain", [], "any", false, false, false, 105)))), "html", null, true);
            yield "
                                    ";
        }
        // line 107
        yield "                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 114
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_show_field(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "show_field"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "show_field"));

        // line 115
        yield "                                        <tr class=\"sonata-ba-view-container\">
                                            ";
        // line 116
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["elements"] ?? null), (isset($context["show_field_name"]) || array_key_exists("show_field_name", $context) ? $context["show_field_name"] : (function () { throw new RuntimeError('Variable "show_field_name" does not exist.', 116, $this->source); })()), [], "array", true, true, false, 116)) {
            // line 117
            yield "                                                ";
            yield $this->env->getRuntime('Sonata\AdminBundle\Twig\RenderElementRuntime')->renderViewElement($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["elements"]) || array_key_exists("elements", $context) ? $context["elements"] : (function () { throw new RuntimeError('Variable "elements" does not exist.', 117, $this->source); })()), (isset($context["show_field_name"]) || array_key_exists("show_field_name", $context) ? $context["show_field_name"] : (function () { throw new RuntimeError('Variable "show_field_name" does not exist.', 117, $this->source); })()), [], "array", false, false, false, 117), (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 117, $this->source); })()));
            yield "
                                            ";
        }
        // line 119
        yield "                                        </tr>
                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SonataAdmin/CRUD/base_show.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  604 => 119,  598 => 117,  596 => 116,  593 => 115,  580 => 114,  569 => 107,  563 => 105,  557 => 103,  554 => 102,  541 => 101,  530 => 128,  511 => 122,  497 => 121,  494 => 114,  477 => 113,  470 => 108,  468 => 101,  462 => 98,  456 => 97,  453 => 96,  450 => 95,  432 => 94,  419 => 93,  406 => 129,  404 => 93,  401 => 92,  388 => 91,  375 => 88,  370 => 85,  364 => 83,  361 => 82,  359 => 81,  355 => 79,  335 => 74,  333 => 73,  330 => 72,  324 => 70,  322 => 69,  315 => 65,  309 => 64,  306 => 63,  303 => 62,  286 => 61,  281 => 58,  265 => 55,  259 => 53,  253 => 51,  251 => 50,  245 => 49,  238 => 48,  235 => 47,  218 => 46,  214 => 44,  211 => 43,  208 => 42,  206 => 41,  203 => 40,  200 => 39,  198 => 38,  193 => 36,  189 => 34,  176 => 33,  164 => 30,  161 => 27,  148 => 26,  137 => 23,  124 => 22,  110 => 19,  97 => 18,  83 => 15,  70 => 14,  48 => 12,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends base_template %}

{% block title %}
    {{ 'title_show'|trans({'%name%': admin.toString(object)|u.truncate(15, '...') }, 'SonataAdminBundle') }}
{% endblock %}

{% block navbar_title %}
    {{ 'title_show'|trans({'%name%': admin.toString(object)|u.truncate(100, '...') }, 'SonataAdminBundle') }}
{% endblock %}

{%- block actions -%}
    {% include '@SonataAdmin/CRUD/action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}
    {{ knp_menu_render(admin.sidemenu(action), {
        'currentClass' : 'active',
        'template': get_global_template('tab_menu_template')
    }, 'twig') }}
{% endblock %}

{% block show %}
    <div class=\"sonata-ba-view\">

        {{ sonata_block_render_event('sonata.admin.show.top', { 'admin': admin, 'object': object }) }}

        {% set showtabs = admin.getshowtabs() %}
        {% set has_tab = (showtabs|length == 1 and showtabs|keys[0] != 'default') or showtabs|length > 1 %}

        {% if has_tab %}
            {% set tab_prefix = 'tab_' ~ admin.uniqid ~ '_' ~ random() %}
            {% set tab_query_index = app.request.query.get('_tab', 0)|split(\"_\")|last %}
            <div class=\"nav-tabs-custom\">
                <ul class=\"nav nav-tabs\" role=\"tablist\">
                    {% for name, show_tab in showtabs %}
                        {% set _tab_name = tab_prefix ~ '_' ~ loop.index %}
                        <li{% if (not app.request.query.has('_tab') and loop.index == 1) or (tab_query_index == loop.index) %} class=\"active\"{% endif %}>
                            <a href=\"#{{ _tab_name }}\" class=\"changer-tab\" aria-controls=\"{{ _tab_name }}\" data-toggle=\"tab\">
                                {% if show_tab.translation_domain is defined and show_tab.translation_domain is same as(false) %}
                                    {{ show_tab.label }}
                                {% else %}
                                    {{ show_tab.label|trans({}, show_tab.translation_domain ?? admin.translationDomain) }}
                                {% endif %}
                            </a>
                        </li>
                    {% endfor %}
                </ul>

                <div class=\"tab-content\">
                    {% for code, show_tab in showtabs %}
                        {% set _tab_name = tab_prefix ~ '_' ~ loop.index %}
                        <div
                            class=\"tab-pane fade{% if (not app.request.query.has('_tab') and loop.first) or (tab_query_index == loop.index) %} in active{% endif %}\"
                            id=\"{{ _tab_name }}\"
                        >
                            <div class=\"box-body  container-fluid\">
                                <div class=\"sonata-ba-collapsed-fields\">
                                    {% if show_tab.description != false %}
                                        <p>{{ show_tab.description|raw }}</p>
                                    {% endif %}

                                    {% set groups = show_tab.groups %}
                                    {{ block('show_groups') }}
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            </div>
        {% elseif showtabs['default'] is defined %}
            {% set groups = showtabs['default'].groups %}
            {{ block('show_groups') }}
        {% endif %}

    </div>

    {{ sonata_block_render_event('sonata.admin.show.bottom', { 'admin': admin, 'object': object }) }}
{% endblock %}

{% block show_groups %}
    <div class=\"row\">
        {% block field_row %}
            {% for code in groups %}
                {% set show_group = admin.showgroups[code] %}

                <div class=\"{{ show_group.class|default('col-md-12') }} {{ no_padding|default(false) ? 'nopadding' }}\">
                    <div class=\"{{ show_group.box_class }}\">
                        <div class=\"box-header\">
                            <h4 class=\"box-title\">
                                {% block show_title %}
                                    {% if show_group.translation_domain is defined and show_group.translation_domain is same as(false) %}
                                        {{ show_group.label }}
                                    {% else %}
                                        {{ show_group.label|trans({}, show_group.translation_domain ?? admin.translationDomain) }}
                                    {% endif %}
                                {% endblock %}
                            </h4>
                        </div>
                        <div class=\"box-body table-responsive no-padding\">
                            <table class=\"table\">
                                <tbody>
                                {% for show_field_name in show_group.fields %}
                                    {% block show_field %}
                                        <tr class=\"sonata-ba-view-container\">
                                            {% if elements[show_field_name] is defined %}
                                                {{ elements[show_field_name]|render_view_element(object) }}
                                            {% endif %}
                                        </tr>
                                    {% endblock %}
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            {% endfor %}
        {% endblock %}

    </div>
{% endblock %}
", "@SonataAdmin/CRUD/base_show.html.twig", "/home/aleksandar/Desktop/Site/payment-demo/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/base_show.html.twig");
    }
}
