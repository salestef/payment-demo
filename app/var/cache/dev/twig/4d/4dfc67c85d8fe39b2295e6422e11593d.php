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

/* @SonataAdmin/CRUD/base_edit_form.html.twig */
class __TwigTemplate_848563ecfde15b0947facf7ac25950d0 extends Template
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

        $this->parent = false;

        $this->blocks = [
            'form' => [$this, 'block_form'],
            'sonata_form_action_url' => [$this, 'block_sonata_form_action_url'],
            'sonata_form_attributes' => [$this, 'block_sonata_form_attributes'],
            'sonata_pre_fieldsets' => [$this, 'block_sonata_pre_fieldsets'],
            'sonata_tab_content' => [$this, 'block_sonata_tab_content'],
            'sonata_post_fieldsets' => [$this, 'block_sonata_post_fieldsets'],
            'formactions' => [$this, 'block_formactions'],
            'sonata_form_actions' => [$this, 'block_sonata_form_actions'],
            'btn_delete' => [$this, 'block_btn_delete'],
            'btn_create' => [$this, 'block_btn_create'],
            'btn_preview' => [$this, 'block_btn_preview'],
            'btn_update_and_edit' => [$this, 'block_btn_update_and_edit'],
            'btn_update_and_list' => [$this, 'block_btn_update_and_list'],
            'btn_acl' => [$this, 'block_btn_acl'],
            'btn_create_and_edit' => [$this, 'block_btn_create_and_edit'],
            'btn_create_and_list' => [$this, 'block_btn_create_and_list'],
            'btn_create_and_create' => [$this, 'block_btn_create_and_create'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_edit_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_edit_form.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('form', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form"));

        // line 2
        yield "    ";
        yield $this->env->getRuntime('Sonata\BlockBundle\Templating\Helper\BlockHelper')->renderEvent("sonata.admin.edit.form.top", ["admin" => (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 2, $this->source); })()), "object" => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 2, $this->source); })())]);
        yield "

    ";
        // line 4
        $context["url"] = (( !(null === (isset($context["objectId"]) || array_key_exists("objectId", $context) ? $context["objectId"] : (function () { throw new RuntimeError('Variable "objectId" does not exist.', 4, $this->source); })()))) ? ("edit") : ("create"));
        // line 5
        yield "
    ";
        // line 6
        if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 6, $this->source); })()), "hasRoute", [(isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 6, $this->source); })())], "method", false, false, false, 6)) {
            // line 7
            yield "        <div>
            ";
            // line 8
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form_not_available", [], "SonataAdminBundle"), "html", null, true);
            yield "
        </div>
    ";
        } else {
            // line 11
            yield "        <form
              ";
            // line 12
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_config"]) || array_key_exists("sonata_config", $context) ? $context["sonata_config"] : (function () { throw new RuntimeError('Variable "sonata_config" does not exist.', 12, $this->source); })()), "getOption", ["form_type"], "method", false, false, false, 12) == "horizontal")) {
                yield "class=\"form-horizontal\"";
            }
            // line 13
            yield "              role=\"form\"
              action=\"";
            // line 14
            yield from $this->unwrap()->yieldBlock('sonata_form_action_url', $context, $blocks);
            yield "\"
              ";
            // line 15
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "vars", [], "any", false, false, false, 15), "multipart", [], "any", false, false, false, 15)) {
                yield " enctype=\"multipart/form-data\"";
            }
            // line 16
            yield "              method=\"POST\"
              ";
            // line 17
            if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_config"]) || array_key_exists("sonata_config", $context) ? $context["sonata_config"] : (function () { throw new RuntimeError('Variable "sonata_config" does not exist.', 17, $this->source); })()), "getOption", ["html5_validate"], "method", false, false, false, 17)) {
                yield "novalidate=\"novalidate\"";
            }
            // line 18
            yield "              ";
            yield from $this->unwrap()->yieldBlock('sonata_form_attributes', $context, $blocks);
            // line 19
            yield "              >

            ";
            // line 21
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@SonataAdmin/Helper/render_form_dismissable_errors.html.twig");
            yield "

            ";
            // line 23
            yield from $this->unwrap()->yieldBlock('sonata_pre_fieldsets', $context, $blocks);
            // line 26
            yield "
            ";
            // line 27
            yield from $this->unwrap()->yieldBlock('sonata_tab_content', $context, $blocks);
            // line 82
            yield "
            ";
            // line 83
            yield from $this->unwrap()->yieldBlock('sonata_post_fieldsets', $context, $blocks);
            // line 86
            yield "
            ";
            // line 87
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), 'rest');
            yield "

            ";
            // line 89
            yield from $this->unwrap()->yieldBlock('formactions', $context, $blocks);
            // line 156
            yield "        </form>
    ";
        }
        // line 158
        yield "
    ";
        // line 159
        yield $this->env->getRuntime('Sonata\BlockBundle\Templating\Helper\BlockHelper')->renderEvent("sonata.admin.edit.form.bottom", ["admin" => (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 159, $this->source); })()), "object" => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 159, $this->source); })())]);
        yield "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 14
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sonata_form_action_url(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_form_action_url"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_form_action_url"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 14, $this->source); })()), "generateUrl", [(isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 14, $this->source); })()), [CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 14, $this->source); })()), "idParameter", [], "any", false, false, false, 14) => (isset($context["objectId"]) || array_key_exists("objectId", $context) ? $context["objectId"] : (function () { throw new RuntimeError('Variable "objectId" does not exist.', 14, $this->source); })()), "uniqid" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 14, $this->source); })()), "uniqid", [], "any", false, false, false, 14), "subclass" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "request", [], "any", false, false, false, 14), "get", ["subclass"], "method", false, false, false, 14)]], "method", false, false, false, 14), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sonata_form_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_form_attributes"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_form_attributes"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 23
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sonata_pre_fieldsets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_pre_fieldsets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_pre_fieldsets"));

        // line 24
        yield "                <div class=\"row\">
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 27
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sonata_tab_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_tab_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_tab_content"));

        // line 28
        yield "                ";
        $macros["form_helper"] = $this->loadTemplate("@SonataAdmin/CRUD/base_edit_form_macro.html.twig", "@SonataAdmin/CRUD/base_edit_form.html.twig", 28)->unwrap();
        // line 29
        yield "                ";
        $context["formtabs"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 29, $this->source); })()), "getformtabs", [], "method", false, false, false, 29);
        // line 30
        yield "                ";
        $context["has_tab"] = (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["formtabs"]) || array_key_exists("formtabs", $context) ? $context["formtabs"] : (function () { throw new RuntimeError('Variable "formtabs" does not exist.', 30, $this->source); })())) == 1) && (CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::keys((isset($context["formtabs"]) || array_key_exists("formtabs", $context) ? $context["formtabs"] : (function () { throw new RuntimeError('Variable "formtabs" does not exist.', 30, $this->source); })())), 0, [], "array", false, false, false, 30) != "default")) || (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["formtabs"]) || array_key_exists("formtabs", $context) ? $context["formtabs"] : (function () { throw new RuntimeError('Variable "formtabs" does not exist.', 30, $this->source); })())) > 1));
        // line 31
        yield "
                <div class=\"col-md-12\">
                    ";
        // line 33
        if ((isset($context["has_tab"]) || array_key_exists("has_tab", $context) ? $context["has_tab"] : (function () { throw new RuntimeError('Variable "has_tab" does not exist.', 33, $this->source); })())) {
            // line 34
            yield "                        ";
            $context["tab_prefix"] = ((("tab_" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 34, $this->source); })()), "uniqid", [], "any", false, false, false, 34)) . "_") . Twig\Extension\CoreExtension::random($this->env->getCharset()));
            // line 35
            yield "                        ";
            $context["tab_query_index"] = Twig\Extension\CoreExtension::last($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "request", [], "any", false, false, false, 35), "query", [], "any", false, false, false, 35), "get", ["_tab", 0], "method", false, false, false, 35), "_"));
            // line 36
            yield "                        <div class=\"nav-tabs-custom\">
                            <ul class=\"nav nav-tabs\" role=\"tablist\">
                                ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["formtabs"]) || array_key_exists("formtabs", $context) ? $context["formtabs"] : (function () { throw new RuntimeError('Variable "formtabs" does not exist.', 38, $this->source); })()));
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
            foreach ($context['_seq'] as $context["name"] => $context["form_tab"]) {
                // line 39
                yield "                                    ";
                $context["_tab_name"] = (((isset($context["tab_prefix"]) || array_key_exists("tab_prefix", $context) ? $context["tab_prefix"] : (function () { throw new RuntimeError('Variable "tab_prefix" does not exist.', 39, $this->source); })()) . "_") . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 39));
                // line 40
                yield "                                    <li";
                if ((( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "request", [], "any", false, false, false, 40), "query", [], "any", false, false, false, 40), "has", ["_tab"], "method", false, false, false, 40) && (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 40) == 1)) || ((isset($context["tab_query_index"]) || array_key_exists("tab_query_index", $context) ? $context["tab_query_index"] : (function () { throw new RuntimeError('Variable "tab_query_index" does not exist.', 40, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 40)))) {
                    yield " class=\"active\"";
                }
                yield ">
                                        <a href=\"#";
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["_tab_name"]) || array_key_exists("_tab_name", $context) ? $context["_tab_name"] : (function () { throw new RuntimeError('Variable "_tab_name" does not exist.', 41, $this->source); })()), "html", null, true);
                yield "\" class=\"changer-tab\" aria-controls=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["_tab_name"]) || array_key_exists("_tab_name", $context) ? $context["_tab_name"] : (function () { throw new RuntimeError('Variable "_tab_name" does not exist.', 41, $this->source); })()), "html", null, true);
                yield "\" data-toggle=\"tab\">
                                            <i class=\"fas fa-exclamation-circle has-errors hide\" aria-hidden=\"true\"></i>
                                            ";
                // line 43
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["form_tab"], "translation_domain", [], "any", true, true, false, 43) && (CoreExtension::getAttribute($this->env, $this->source, $context["form_tab"], "translation_domain", [], "any", false, false, false, 43) === false))) {
                    // line 44
                    yield "                                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["form_tab"], "label", [], "any", false, false, false, 44), "html", null, true);
                    yield "
                                            ";
                } else {
                    // line 46
                    yield "                                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["form_tab"], "label", [], "any", false, false, false, 46), [], (((CoreExtension::getAttribute($this->env, $this->source, $context["form_tab"], "translation_domain", [], "any", true, true, false, 46) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["form_tab"], "translation_domain", [], "any", false, false, false, 46)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["form_tab"], "translation_domain", [], "any", false, false, false, 46)) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 46, $this->source); })()), "translationDomain", [], "any", false, false, false, 46)))), "html", null, true);
                    yield "
                                            ";
                }
                // line 48
                yield "                                        </a>
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
            unset($context['_seq'], $context['name'], $context['form_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            yield "                            </ul>
                            <div class=\"tab-content\">
                                ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["formtabs"]) || array_key_exists("formtabs", $context) ? $context["formtabs"] : (function () { throw new RuntimeError('Variable "formtabs" does not exist.', 53, $this->source); })()));
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
            foreach ($context['_seq'] as $context["code"] => $context["form_tab"]) {
                // line 54
                yield "                                    ";
                $context["_tab_name"] = (((isset($context["tab_prefix"]) || array_key_exists("tab_prefix", $context) ? $context["tab_prefix"] : (function () { throw new RuntimeError('Variable "tab_prefix" does not exist.', 54, $this->source); })()) . "_") . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 54));
                // line 55
                yield "                                    <div
                                        class=\"tab-pane fade";
                // line 56
                if ((( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "request", [], "any", false, false, false, 56), "query", [], "any", false, false, false, 56), "has", ["_tab"], "method", false, false, false, 56) && CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 56)) || ((isset($context["tab_query_index"]) || array_key_exists("tab_query_index", $context) ? $context["tab_query_index"] : (function () { throw new RuntimeError('Variable "tab_query_index" does not exist.', 56, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 56)))) {
                    yield " in active";
                }
                yield "\"
                                        id=\"";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["_tab_name"]) || array_key_exists("_tab_name", $context) ? $context["_tab_name"] : (function () { throw new RuntimeError('Variable "_tab_name" does not exist.', 57, $this->source); })()), "html", null, true);
                yield "\"
                                    >
                                        <div class=\"box-body  container-fluid\">
                                            <div class=\"sonata-ba-collapsed-fields\">
                                                ";
                // line 61
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["form_tab"], "description", [], "any", false, false, false, 61) != false)) {
                    // line 62
                    yield "                                                    ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["form_tab"], "translation_domain", [], "any", true, true, false, 62) && (CoreExtension::getAttribute($this->env, $this->source, $context["form_tab"], "translation_domain", [], "any", false, false, false, 62) === false))) {
                        // line 63
                        yield "                                                        <p>";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["form_tab"], "description", [], "any", false, false, false, 63);
                        yield "</p>
                                                    ";
                    } else {
                        // line 65
                        yield "                                                        <p>";
                        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["form_tab"], "description", [], "any", false, false, false, 65), [], (((CoreExtension::getAttribute($this->env, $this->source, $context["form_tab"], "translation_domain", [], "any", true, true, false, 65) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["form_tab"], "translation_domain", [], "any", false, false, false, 65)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["form_tab"], "translation_domain", [], "any", false, false, false, 65)) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 65, $this->source); })()), "translationDomain", [], "any", false, false, false, 65))));
                        yield "</p>
                                                    ";
                    }
                    // line 67
                    yield "                                                ";
                }
                // line 68
                yield "
                                                ";
                // line 69
                yield CoreExtension::callMacro($macros["form_helper"], "macro_render_groups", [(isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 69, $this->source); })()), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["form_tab"], "groups", [], "array", false, false, false, 69), (isset($context["has_tab"]) || array_key_exists("has_tab", $context) ? $context["has_tab"] : (function () { throw new RuntimeError('Variable "has_tab" does not exist.', 69, $this->source); })())], 69, $context, $this->getSourceContext());
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
            unset($context['_seq'], $context['code'], $context['form_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            yield "                            </div>
                            <input type=\"hidden\" name=\"_tab\" value=\"";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "request", [], "any", false, false, false, 75), "query", [], "any", false, false, false, 75), "get", ["_tab"], "method", false, false, false, 75), "html", null, true);
            yield "\">
                        </div>
                    ";
        } elseif (CoreExtension::getAttribute($this->env, $this->source,         // line 77
($context["formtabs"] ?? null), "default", [], "array", true, true, false, 77)) {
            // line 78
            yield "                        ";
            yield CoreExtension::callMacro($macros["form_helper"], "macro_render_groups", [(isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 78, $this->source); })()), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formtabs"]) || array_key_exists("formtabs", $context) ? $context["formtabs"] : (function () { throw new RuntimeError('Variable "formtabs" does not exist.', 78, $this->source); })()), "default", [], "array", false, false, false, 78), "groups", [], "any", false, false, false, 78), (isset($context["has_tab"]) || array_key_exists("has_tab", $context) ? $context["has_tab"] : (function () { throw new RuntimeError('Variable "has_tab" does not exist.', 78, $this->source); })())], 78, $context, $this->getSourceContext());
            yield "
                    ";
        }
        // line 80
        yield "                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 83
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sonata_post_fieldsets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_post_fieldsets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_post_fieldsets"));

        // line 84
        yield "                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 89
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_formactions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "formactions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "formactions"));

        // line 90
        yield "                <div class=\"sonata-ba-form-actions well well-small form-actions\">
                ";
        // line 91
        yield from $this->unwrap()->yieldBlock('sonata_form_actions', $context, $blocks);
        // line 154
        yield "                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 91
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sonata_form_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_form_actions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_form_actions"));

        // line 92
        yield "                    ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 92, $this->source); })()), "request", [], "any", false, false, false, 92), "isxmlhttprequest", [], "any", false, false, false, 92)) {
            // line 93
            yield "                        ";
            if ( !(null === (isset($context["objectId"]) || array_key_exists("objectId", $context) ? $context["objectId"] : (function () { throw new RuntimeError('Variable "objectId" does not exist.', 93, $this->source); })()))) {
                // line 94
                yield "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update\"><i class=\"fas fa-save\" aria-hidden=\"true\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn_update", [], "SonataAdminBundle"), "html", null, true);
                yield "</button>
                            ";
                // line 95
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 95, $this->source); })()), "hasRoute", ["delete"], "method", false, false, false, 95) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 95, $this->source); })()), "hasAccess", ["delete", (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 95, $this->source); })())], "method", false, false, false, 95))) {
                    // line 96
                    yield "                                ";
                    yield from $this->unwrap()->yieldBlock('btn_delete', $context, $blocks);
                    // line 102
                    yield "                            ";
                }
                // line 103
                yield "                        ";
            } else {
                // line 104
                yield "                            ";
                yield from $this->unwrap()->yieldBlock('btn_create', $context, $blocks);
                // line 107
                yield "                        ";
            }
            // line 108
            yield "                    ";
        } else {
            // line 109
            yield "                        ";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 109, $this->source); })()), "supportsPreviewMode", [], "any", false, false, false, 109)) {
                // line 110
                yield "                            ";
                yield from $this->unwrap()->yieldBlock('btn_preview', $context, $blocks);
                // line 116
                yield "                        ";
            }
            // line 117
            yield "                        ";
            if ( !(null === (isset($context["objectId"]) || array_key_exists("objectId", $context) ? $context["objectId"] : (function () { throw new RuntimeError('Variable "objectId" does not exist.', 117, $this->source); })()))) {
                // line 118
                yield "                            ";
                yield from $this->unwrap()->yieldBlock('btn_update_and_edit', $context, $blocks);
                // line 121
                yield "
                            ";
                // line 122
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 122, $this->source); })()), "hasRoute", ["list"], "method", false, false, false, 122) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 122, $this->source); })()), "hasAccess", ["list"], "method", false, false, false, 122))) {
                    // line 123
                    yield "                                ";
                    yield from $this->unwrap()->yieldBlock('btn_update_and_list', $context, $blocks);
                    // line 126
                    yield "                            ";
                }
                // line 127
                yield "
                            ";
                // line 128
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 128, $this->source); })()), "hasRoute", ["delete"], "method", false, false, false, 128) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 128, $this->source); })()), "hasAccess", ["delete", (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 128, $this->source); })())], "method", false, false, false, 128))) {
                    // line 129
                    yield "                                ";
                    yield from                     $this->unwrap()->yieldBlock("btn_delete", $context, $blocks);
                    yield "
                            ";
                }
                // line 131
                yield "
                            ";
                // line 132
                if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 132, $this->source); })()), "isAclEnabled", [], "method", false, false, false, 132) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 132, $this->source); })()), "hasRoute", ["acl"], "method", false, false, false, 132)) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 132, $this->source); })()), "hasAccess", ["acl", (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 132, $this->source); })())], "method", false, false, false, 132))) {
                    // line 133
                    yield "                                ";
                    yield from $this->unwrap()->yieldBlock('btn_acl', $context, $blocks);
                    // line 136
                    yield "                            ";
                }
                // line 137
                yield "                        ";
            } else {
                // line 138
                yield "                            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 138, $this->source); })()), "hasroute", ["edit"], "method", false, false, false, 138) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 138, $this->source); })()), "hasAccess", ["edit"], "method", false, false, false, 138))) {
                    // line 139
                    yield "                                ";
                    yield from $this->unwrap()->yieldBlock('btn_create_and_edit', $context, $blocks);
                    // line 142
                    yield "                            ";
                }
                // line 143
                yield "                            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 143, $this->source); })()), "hasroute", ["list"], "method", false, false, false, 143) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 143, $this->source); })()), "hasAccess", ["list"], "method", false, false, false, 143))) {
                    // line 144
                    yield "                                ";
                    yield from $this->unwrap()->yieldBlock('btn_create_and_list', $context, $blocks);
                    // line 147
                    yield "                            ";
                }
                // line 148
                yield "                            ";
                yield from $this->unwrap()->yieldBlock('btn_create_and_create', $context, $blocks);
                // line 151
                yield "                        ";
            }
            // line 152
            yield "                    ";
        }
        // line 153
        yield "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 96
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_btn_delete(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "btn_delete"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "btn_delete"));

        // line 97
        yield "                                    ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("delete_or", [], "SonataAdminBundle"), "html", null, true);
        yield "
                                    <a class=\"btn btn-danger\" href=\"";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 98, $this->source); })()), "generateObjectUrl", ["delete", (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 98, $this->source); })())], "method", false, false, false, 98), "html", null, true);
        yield "\">
                                        <i class=\"fas fa-minus-circle\" aria-hidden=\"true\"></i> ";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("link_delete", [], "SonataAdminBundle"), "html", null, true);
        yield "
                                    </a>
                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 104
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_btn_create(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "btn_create"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "btn_create"));

        // line 105
        yield "                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create\"><i class=\"fas fa-plus-circle\" aria-hidden=\"true\"></i> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn_create", [], "SonataAdminBundle"), "html", null, true);
        yield "</button>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 110
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_btn_preview(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "btn_preview"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "btn_preview"));

        // line 111
        yield "                                <button class=\"btn btn-info persist-preview\" name=\"btn_preview\" type=\"submit\">
                                    <i class=\"fas fa-eye\" aria-hidden=\"true\"></i>
                                    ";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn_preview", [], "SonataAdminBundle"), "html", null, true);
        yield "
                                </button>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 118
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_btn_update_and_edit(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "btn_update_and_edit"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "btn_update_and_edit"));

        // line 119
        yield "                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_edit\"><i class=\"fas fa-save\" aria-hidden=\"true\"></i> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn_update_and_edit_again", [], "SonataAdminBundle"), "html", null, true);
        yield "</button>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 123
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_btn_update_and_list(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "btn_update_and_list"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "btn_update_and_list"));

        // line 124
        yield "                                    <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_list\"><i class=\"fas fa-save\"></i> <i class=\"fas fa-list\" aria-hidden=\"true\"></i> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn_update_and_return_to_list", [], "SonataAdminBundle"), "html", null, true);
        yield "</button>
                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 133
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_btn_acl(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "btn_acl"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "btn_acl"));

        // line 134
        yield "                                    <a class=\"btn btn-info\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 134, $this->source); })()), "generateObjectUrl", ["acl", (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 134, $this->source); })())], "method", false, false, false, 134), "html", null, true);
        yield "\"><i class=\"fas fa-users\" aria-hidden=\"true\"></i> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("link_edit_acl", [], "SonataAdminBundle"), "html", null, true);
        yield "</a>
                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 139
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_btn_create_and_edit(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "btn_create_and_edit"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "btn_create_and_edit"));

        // line 140
        yield "                                    <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_edit\"><i class=\"fas fa-save\" aria-hidden=\"true\"></i> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn_create_and_edit_again", [], "SonataAdminBundle"), "html", null, true);
        yield "</button>
                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 144
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_btn_create_and_list(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "btn_create_and_list"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "btn_create_and_list"));

        // line 145
        yield "                                    <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create_and_list\"><i class=\"fas fa-save\"></i> <i class=\"fas fa-list\" aria-hidden=\"true\"></i> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn_create_and_return_to_list", [], "SonataAdminBundle"), "html", null, true);
        yield "</button>
                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 148
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_btn_create_and_create(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "btn_create_and_create"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "btn_create_and_create"));

        // line 149
        yield "                                <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_create\"><i class=\"fas fa-plus-circle\" aria-hidden=\"true\"></i> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn_create_and_create_a_new_one", [], "SonataAdminBundle"), "html", null, true);
        yield "</button>
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
        return "@SonataAdmin/CRUD/base_edit_form.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  904 => 149,  891 => 148,  877 => 145,  864 => 144,  850 => 140,  837 => 139,  821 => 134,  808 => 133,  794 => 124,  781 => 123,  767 => 119,  754 => 118,  740 => 113,  736 => 111,  723 => 110,  709 => 105,  696 => 104,  682 => 99,  678 => 98,  673 => 97,  660 => 96,  649 => 153,  646 => 152,  643 => 151,  640 => 148,  637 => 147,  634 => 144,  631 => 143,  628 => 142,  625 => 139,  622 => 138,  619 => 137,  616 => 136,  613 => 133,  611 => 132,  608 => 131,  602 => 129,  600 => 128,  597 => 127,  594 => 126,  591 => 123,  589 => 122,  586 => 121,  583 => 118,  580 => 117,  577 => 116,  574 => 110,  571 => 109,  568 => 108,  565 => 107,  562 => 104,  559 => 103,  556 => 102,  553 => 96,  551 => 95,  546 => 94,  543 => 93,  540 => 92,  527 => 91,  515 => 154,  513 => 91,  510 => 90,  497 => 89,  485 => 84,  472 => 83,  460 => 80,  454 => 78,  452 => 77,  447 => 75,  444 => 74,  425 => 69,  422 => 68,  419 => 67,  413 => 65,  407 => 63,  404 => 62,  402 => 61,  395 => 57,  389 => 56,  386 => 55,  383 => 54,  366 => 53,  362 => 51,  346 => 48,  340 => 46,  334 => 44,  332 => 43,  325 => 41,  318 => 40,  315 => 39,  298 => 38,  294 => 36,  291 => 35,  288 => 34,  286 => 33,  282 => 31,  279 => 30,  276 => 29,  273 => 28,  260 => 27,  248 => 24,  235 => 23,  213 => 18,  190 => 14,  176 => 159,  173 => 158,  169 => 156,  167 => 89,  162 => 87,  159 => 86,  157 => 83,  154 => 82,  152 => 27,  149 => 26,  147 => 23,  142 => 21,  138 => 19,  135 => 18,  131 => 17,  128 => 16,  124 => 15,  120 => 14,  117 => 13,  113 => 12,  110 => 11,  104 => 8,  101 => 7,  99 => 6,  96 => 5,  94 => 4,  88 => 2,  65 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block form %}
    {{ sonata_block_render_event('sonata.admin.edit.form.top', { 'admin': admin, 'object': object }) }}

    {% set url = objectId is not null ? 'edit' : 'create' %}

    {% if not admin.hasRoute(url) %}
        <div>
            {{ \"form_not_available\"|trans({}, \"SonataAdminBundle\") }}
        </div>
    {% else %}
        <form
              {% if sonata_config.getOption('form_type') == 'horizontal' %}class=\"form-horizontal\"{% endif %}
              role=\"form\"
              action=\"{% block sonata_form_action_url %}{{ admin.generateUrl(url, {(admin.idParameter): objectId, 'uniqid': admin.uniqid, 'subclass': app.request.get('subclass')}) }}{% endblock %}\"
              {% if form.vars.multipart %} enctype=\"multipart/form-data\"{% endif %}
              method=\"POST\"
              {% if not sonata_config.getOption('html5_validate') %}novalidate=\"novalidate\"{% endif %}
              {% block sonata_form_attributes %}{% endblock %}
              >

            {{ include('@SonataAdmin/Helper/render_form_dismissable_errors.html.twig') }}

            {% block sonata_pre_fieldsets %}
                <div class=\"row\">
            {% endblock %}

            {% block sonata_tab_content %}
                {% import \"@SonataAdmin/CRUD/base_edit_form_macro.html.twig\" as form_helper %}
                {% set formtabs = admin.getformtabs() %}
                {% set has_tab = ((formtabs|length == 1 and formtabs|keys[0] != 'default') or formtabs|length > 1 ) %}

                <div class=\"col-md-12\">
                    {% if has_tab %}
                        {% set tab_prefix = 'tab_' ~ admin.uniqid ~ '_' ~ random() %}
                        {% set tab_query_index = app.request.query.get('_tab', 0)|split(\"_\")|last %}
                        <div class=\"nav-tabs-custom\">
                            <ul class=\"nav nav-tabs\" role=\"tablist\">
                                {% for name, form_tab in formtabs %}
                                    {% set _tab_name = tab_prefix ~ '_' ~ loop.index %}
                                    <li{% if (not app.request.query.has('_tab') and loop.index == 1) or (tab_query_index == loop.index) %} class=\"active\"{% endif %}>
                                        <a href=\"#{{ _tab_name }}\" class=\"changer-tab\" aria-controls=\"{{ _tab_name }}\" data-toggle=\"tab\">
                                            <i class=\"fas fa-exclamation-circle has-errors hide\" aria-hidden=\"true\"></i>
                                            {% if form_tab.translation_domain is defined and form_tab.translation_domain is same as(false) %}
                                                {{ form_tab.label }}
                                            {% else %}
                                                {{ form_tab.label|trans({}, form_tab.translation_domain ?? admin.translationDomain) }}
                                            {% endif %}
                                        </a>
                                    </li>
                                {% endfor %}
                            </ul>
                            <div class=\"tab-content\">
                                {% for code, form_tab in formtabs %}
                                    {% set _tab_name = tab_prefix ~ '_' ~ loop.index %}
                                    <div
                                        class=\"tab-pane fade{% if (not app.request.query.has('_tab') and loop.first) or (tab_query_index == loop.index) %} in active{% endif %}\"
                                        id=\"{{ _tab_name }}\"
                                    >
                                        <div class=\"box-body  container-fluid\">
                                            <div class=\"sonata-ba-collapsed-fields\">
                                                {% if form_tab.description != false %}
                                                    {% if form_tab.translation_domain is defined and form_tab.translation_domain is same as(false) %}
                                                        <p>{{ form_tab.description|raw }}</p>
                                                    {% else %}
                                                        <p>{{ form_tab.description|trans({}, form_tab.translation_domain ?? admin.translationDomain)|raw }}</p>
                                                    {% endif %}
                                                {% endif %}

                                                {{ form_helper.render_groups(admin, form, form_tab['groups'], has_tab) }}
                                            </div>
                                        </div>
                                    </div>
                                {% endfor %}
                            </div>
                            <input type=\"hidden\" name=\"_tab\" value=\"{{ app.request.query.get('_tab') }}\">
                        </div>
                    {% elseif formtabs['default'] is defined %}
                        {{ form_helper.render_groups(admin, form, formtabs['default'].groups, has_tab) }}
                    {% endif %}
                </div>
            {% endblock %}

            {% block sonata_post_fieldsets %}
                </div>
            {% endblock %}

            {{ form_rest(form) }}

            {% block formactions %}
                <div class=\"sonata-ba-form-actions well well-small form-actions\">
                {% block sonata_form_actions %}
                    {% if app.request.isxmlhttprequest %}
                        {% if objectId is not null %}
                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update\"><i class=\"fas fa-save\" aria-hidden=\"true\"></i> {{ 'btn_update'|trans({}, 'SonataAdminBundle') }}</button>
                            {% if admin.hasRoute('delete') and admin.hasAccess('delete', object) %}
                                {% block btn_delete %}
                                    {{ 'delete_or'|trans({}, 'SonataAdminBundle') }}
                                    <a class=\"btn btn-danger\" href=\"{{ admin.generateObjectUrl('delete', object) }}\">
                                        <i class=\"fas fa-minus-circle\" aria-hidden=\"true\"></i> {{ 'link_delete'|trans({}, 'SonataAdminBundle') }}
                                    </a>
                                {% endblock %}
                            {% endif %}
                        {% else %}
                            {% block btn_create %}
                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create\"><i class=\"fas fa-plus-circle\" aria-hidden=\"true\"></i> {{ 'btn_create'|trans({}, 'SonataAdminBundle') }}</button>
                            {% endblock %}
                        {% endif %}
                    {% else %}
                        {% if admin.supportsPreviewMode %}
                            {% block btn_preview %}
                                <button class=\"btn btn-info persist-preview\" name=\"btn_preview\" type=\"submit\">
                                    <i class=\"fas fa-eye\" aria-hidden=\"true\"></i>
                                    {{ 'btn_preview'|trans({}, 'SonataAdminBundle') }}
                                </button>
                            {% endblock %}
                        {% endif %}
                        {% if objectId is not null %}
                            {% block btn_update_and_edit %}
                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_edit\"><i class=\"fas fa-save\" aria-hidden=\"true\"></i> {{ 'btn_update_and_edit_again'|trans({}, 'SonataAdminBundle') }}</button>
                            {% endblock %}

                            {% if admin.hasRoute('list') and admin.hasAccess('list') %}
                                {% block btn_update_and_list %}
                                    <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_list\"><i class=\"fas fa-save\"></i> <i class=\"fas fa-list\" aria-hidden=\"true\"></i> {{ 'btn_update_and_return_to_list'|trans({}, 'SonataAdminBundle') }}</button>
                                {% endblock %}
                            {% endif %}

                            {% if admin.hasRoute('delete') and admin.hasAccess('delete', object) %}
                                {{ block('btn_delete') }}
                            {% endif %}

                            {% if admin.isAclEnabled() and admin.hasRoute('acl') and admin.hasAccess('acl', object) %}
                                {% block btn_acl %}
                                    <a class=\"btn btn-info\" href=\"{{ admin.generateObjectUrl('acl', object) }}\"><i class=\"fas fa-users\" aria-hidden=\"true\"></i> {{ 'link_edit_acl'|trans({}, 'SonataAdminBundle') }}</a>
                                {% endblock %}
                            {% endif %}
                        {% else %}
                            {% if admin.hasroute('edit') and admin.hasAccess('edit') %}
                                {% block btn_create_and_edit %}
                                    <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_edit\"><i class=\"fas fa-save\" aria-hidden=\"true\"></i> {{ 'btn_create_and_edit_again'|trans({}, 'SonataAdminBundle') }}</button>
                                {% endblock %}
                            {% endif %}
                            {% if admin.hasroute('list') and admin.hasAccess('list') %}
                                {% block btn_create_and_list %}
                                    <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create_and_list\"><i class=\"fas fa-save\"></i> <i class=\"fas fa-list\" aria-hidden=\"true\"></i> {{ 'btn_create_and_return_to_list'|trans({}, 'SonataAdminBundle') }}</button>
                                {% endblock %}
                            {% endif %}
                            {% block btn_create_and_create %}
                                <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_create\"><i class=\"fas fa-plus-circle\" aria-hidden=\"true\"></i> {{ 'btn_create_and_create_a_new_one'|trans({}, 'SonataAdminBundle') }}</button>
                            {% endblock %}
                        {% endif %}
                    {% endif %}
                {% endblock %}
                </div>
            {% endblock formactions %}
        </form>
    {% endif %}

    {{ sonata_block_render_event('sonata.admin.edit.form.bottom', { 'admin': admin, 'object': object }) }}

{% endblock %}
", "@SonataAdmin/CRUD/base_edit_form.html.twig", "/home/aleksandar/Desktop/Site/payment-demo/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/base_edit_form.html.twig");
    }
}
