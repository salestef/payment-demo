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

/* @SonataAdmin/standard_layout.html.twig */
class __TwigTemplate_e90f14046cc4d2faa41dcc1dc4a8f7c1 extends Template
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
            'html_attributes' => [$this, 'block_html_attributes'],
            'meta_tags' => [$this, 'block_meta_tags'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'sonata_javascript_config' => [$this, 'block_sonata_javascript_config'],
            'sonata_javascript_pool' => [$this, 'block_sonata_javascript_pool'],
            'sonata_head_title' => [$this, 'block_sonata_head_title'],
            'body_attributes' => [$this, 'block_body_attributes'],
            'admin_lte_skin_class' => [$this, 'block_admin_lte_skin_class'],
            'sonata_header' => [$this, 'block_sonata_header'],
            'sonata_header_noscript_warning' => [$this, 'block_sonata_header_noscript_warning'],
            'logo' => [$this, 'block_logo'],
            'sonata_nav' => [$this, 'block_sonata_nav'],
            'sonata_breadcrumb' => [$this, 'block_sonata_breadcrumb'],
            'sonata_top_nav_menu' => [$this, 'block_sonata_top_nav_menu'],
            'sonata_top_nav_menu_add_block' => [$this, 'block_sonata_top_nav_menu_add_block'],
            'sonata_top_nav_menu_user_block' => [$this, 'block_sonata_top_nav_menu_user_block'],
            'sonata_wrapper' => [$this, 'block_sonata_wrapper'],
            'sonata_left_side' => [$this, 'block_sonata_left_side'],
            'sonata_side_nav' => [$this, 'block_sonata_side_nav'],
            'sonata_sidebar_search' => [$this, 'block_sonata_sidebar_search'],
            'side_bar_before_nav' => [$this, 'block_side_bar_before_nav'],
            'side_bar_nav' => [$this, 'block_side_bar_nav'],
            'side_bar_after_nav' => [$this, 'block_side_bar_after_nav'],
            'side_bar_after_nav_content' => [$this, 'block_side_bar_after_nav_content'],
            'sonata_page_content' => [$this, 'block_sonata_page_content'],
            'sonata_page_content_header' => [$this, 'block_sonata_page_content_header'],
            'sonata_page_content_nav' => [$this, 'block_sonata_page_content_nav'],
            'tab_menu_navbar_header' => [$this, 'block_tab_menu_navbar_header'],
            'sonata_admin_content_actions_wrappers' => [$this, 'block_sonata_admin_content_actions_wrappers'],
            'sonata_admin_content' => [$this, 'block_sonata_admin_content'],
            'notice' => [$this, 'block_notice'],
            'bootlint' => [$this, 'block_bootlint'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/standard_layout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/standard_layout.html.twig"));

        // line 12
        $context["_preview"] = ((        $this->unwrap()->hasBlock("preview", $context, $blocks)) ? (Twig\Extension\CoreExtension::trim(        $this->unwrap()->renderBlock("preview", $context, $blocks))) : (null));
        // line 13
        $context["_form"] = ((        $this->unwrap()->hasBlock("form", $context, $blocks)) ? (Twig\Extension\CoreExtension::trim(        $this->unwrap()->renderBlock("form", $context, $blocks))) : (null));
        // line 14
        $context["_show"] = ((        $this->unwrap()->hasBlock("show", $context, $blocks)) ? (Twig\Extension\CoreExtension::trim(        $this->unwrap()->renderBlock("show", $context, $blocks))) : (null));
        // line 15
        $context["_list_table"] = ((        $this->unwrap()->hasBlock("list_table", $context, $blocks)) ? (Twig\Extension\CoreExtension::trim(        $this->unwrap()->renderBlock("list_table", $context, $blocks))) : (null));
        // line 16
        $context["_list_filters"] = ((        $this->unwrap()->hasBlock("list_filters", $context, $blocks)) ? (Twig\Extension\CoreExtension::trim(        $this->unwrap()->renderBlock("list_filters", $context, $blocks))) : (null));
        // line 17
        $context["_tab_menu"] = ((        $this->unwrap()->hasBlock("tab_menu", $context, $blocks)) ? (Twig\Extension\CoreExtension::trim(        $this->unwrap()->renderBlock("tab_menu", $context, $blocks))) : (null));
        // line 18
        $context["_content"] = ((        $this->unwrap()->hasBlock("content", $context, $blocks)) ? (Twig\Extension\CoreExtension::trim(        $this->unwrap()->renderBlock("content", $context, $blocks))) : (null));
        // line 19
        $context["_title"] = ((        $this->unwrap()->hasBlock("title", $context, $blocks)) ? (Twig\Extension\CoreExtension::trim(        $this->unwrap()->renderBlock("title", $context, $blocks))) : (null));
        // line 20
        $context["_breadcrumb"] = ((        $this->unwrap()->hasBlock("breadcrumb", $context, $blocks)) ? (Twig\Extension\CoreExtension::trim(        $this->unwrap()->renderBlock("breadcrumb", $context, $blocks))) : (null));
        // line 21
        $context["_actions"] = ((        $this->unwrap()->hasBlock("actions", $context, $blocks)) ? (Twig\Extension\CoreExtension::trim(        $this->unwrap()->renderBlock("actions", $context, $blocks))) : (null));
        // line 22
        $context["_navbar_title"] = ((        $this->unwrap()->hasBlock("navbar_title", $context, $blocks)) ? (Twig\Extension\CoreExtension::trim(        $this->unwrap()->renderBlock("navbar_title", $context, $blocks))) : (null));
        // line 23
        $context["_list_filters_actions"] = ((        $this->unwrap()->hasBlock("list_filters_actions", $context, $blocks)) ? (Twig\Extension\CoreExtension::trim(        $this->unwrap()->renderBlock("list_filters_actions", $context, $blocks))) : (null));
        // line 24
        $context["_skin"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_config"]) || array_key_exists("sonata_config", $context) ? $context["sonata_config"] : (function () { throw new RuntimeError('Variable "sonata_config" does not exist.', 24, $this->source); })()), "getOption", ["skin"], "method", false, false, false, 24);
        // line 25
        $context["_use_select2"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_config"]) || array_key_exists("sonata_config", $context) ? $context["sonata_config"] : (function () { throw new RuntimeError('Variable "sonata_config" does not exist.', 25, $this->source); })()), "getOption", ["use_select2"], "method", false, false, false, 25);
        // line 26
        $context["_use_icheck"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_config"]) || array_key_exists("sonata_config", $context) ? $context["sonata_config"] : (function () { throw new RuntimeError('Variable "sonata_config" does not exist.', 26, $this->source); })()), "getOption", ["use_icheck"], "method", false, false, false, 26);
        // line 27
        yield "
<!DOCTYPE html>
<html ";
        // line 29
        yield from $this->unwrap()->yieldBlock('html_attributes', $context, $blocks);
        yield ">
    <head>
        ";
        // line 31
        yield from $this->unwrap()->yieldBlock('meta_tags', $context, $blocks);
        // line 36
        yield "
        <meta data-sonata-admin='";
        // line 37
        yield json_encode(["config" => ["SKIN" =>         // line 39
(isset($context["_skin"]) || array_key_exists("_skin", $context) ? $context["_skin"] : (function () { throw new RuntimeError('Variable "_skin" does not exist.', 39, $this->source); })()), "CONFIRM_EXIT" => CoreExtension::getAttribute($this->env, $this->source,         // line 40
(isset($context["sonata_config"]) || array_key_exists("sonata_config", $context) ? $context["sonata_config"] : (function () { throw new RuntimeError('Variable "sonata_config" does not exist.', 40, $this->source); })()), "getOption", ["confirm_exit"], "method", false, false, false, 40), "USE_SELECT2" =>         // line 41
(isset($context["_use_select2"]) || array_key_exists("_use_select2", $context) ? $context["_use_select2"] : (function () { throw new RuntimeError('Variable "_use_select2" does not exist.', 41, $this->source); })()), "USE_ICHECK" =>         // line 42
(isset($context["_use_icheck"]) || array_key_exists("_use_icheck", $context) ? $context["_use_icheck"] : (function () { throw new RuntimeError('Variable "_use_icheck" does not exist.', 42, $this->source); })()), "USE_STICKYFORMS" => CoreExtension::getAttribute($this->env, $this->source,         // line 43
(isset($context["sonata_config"]) || array_key_exists("sonata_config", $context) ? $context["sonata_config"] : (function () { throw new RuntimeError('Variable "sonata_config" does not exist.', 43, $this->source); })()), "getOption", ["use_stickyforms"], "method", false, false, false, 43), "DEBUG" => CoreExtension::getAttribute($this->env, $this->source,         // line 44
(isset($context["sonata_config"]) || array_key_exists("sonata_config", $context) ? $context["sonata_config"] : (function () { throw new RuntimeError('Variable "sonata_config" does not exist.', 44, $this->source); })()), "getOption", ["js_debug"], "method", false, false, false, 44)], "translations" => ["CONFIRM_EXIT" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("confirm_exit", [], "SonataAdminBundle")]]);
        // line 49
        yield "'
        >

        ";
        // line 52
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 57
        yield "
        ";
        // line 58
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 83
        yield "
        <title>
        ";
        // line 85
        yield from $this->unwrap()->yieldBlock('sonata_head_title', $context, $blocks);
        // line 97
        yield "        </title>
    </head>
    <body
            ";
        // line 100
        yield from $this->unwrap()->yieldBlock('body_attributes', $context, $blocks);
        // line 108
        yield ">

    <div class=\"wrapper\">

        ";
        // line 112
        yield from $this->unwrap()->yieldBlock('sonata_header', $context, $blocks);
        // line 194
        yield "
        ";
        // line 195
        yield from $this->unwrap()->yieldBlock('sonata_wrapper', $context, $blocks);
        // line 341
        yield "    </div>

    ";
        // line 343
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_config"]) || array_key_exists("sonata_config", $context) ? $context["sonata_config"] : (function () { throw new RuntimeError('Variable "sonata_config" does not exist.', 343, $this->source); })()), "getOption", ["use_bootlint"], "method", false, false, false, 343)) {
            // line 344
            yield "        ";
            yield from $this->unwrap()->yieldBlock('bootlint', $context, $blocks);
            // line 350
            yield "    ";
        }
        // line 351
        yield "
    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 29
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_html_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "html_attributes"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "html_attributes"));

        yield "class=\"no-js\"";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 31
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_meta_tags(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta_tags"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta_tags"));

        // line 32
        yield "            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 52
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 53
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_config"]) || array_key_exists("sonata_config", $context) ? $context["sonata_config"] : (function () { throw new RuntimeError('Variable "sonata_config" does not exist.', 53, $this->source); })()), "getOption", ["stylesheets", []], "method", false, false, false, 53));
        foreach ($context['_seq'] as $context["_key"] => $context["stylesheet"]) {
            // line 54
            yield "                <link rel=\"stylesheet\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["stylesheet"]), "html", null, true);
            yield "\">
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['stylesheet'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 58
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 59
        yield "            ";
        yield from $this->unwrap()->yieldBlock('sonata_javascript_config', $context, $blocks);
        // line 61
        yield "
            ";
        // line 62
        yield from $this->unwrap()->yieldBlock('sonata_javascript_pool', $context, $blocks);
        // line 67
        yield "
            ";
        // line 69
        yield "            ";
        // line 70
        yield "            ";
        $context["localeForMoment"] = $this->env->getRuntime('Sonata\AdminBundle\Twig\CanonicalizeRuntime')->getCanonicalizedLocaleForMoment();
        // line 71
        yield "            ";
        if ((isset($context["localeForMoment"]) || array_key_exists("localeForMoment", $context) ? $context["localeForMoment"] : (function () { throw new RuntimeError('Variable "localeForMoment" does not exist.', 71, $this->source); })())) {
            // line 72
            yield "                <script src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("bundles/sonataform/moment-locale/" . (isset($context["localeForMoment"]) || array_key_exists("localeForMoment", $context) ? $context["localeForMoment"] : (function () { throw new RuntimeError('Variable "localeForMoment" does not exist.', 72, $this->source); })())) . ".js")), "html", null, true);
            yield "\"></script>
            ";
        }
        // line 74
        yield "
            ";
        // line 76
        yield "            ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_config"]) || array_key_exists("sonata_config", $context) ? $context["sonata_config"] : (function () { throw new RuntimeError('Variable "sonata_config" does not exist.', 76, $this->source); })()), "getOption", ["use_select2"], "method", false, false, false, 76)) {
            // line 77
            yield "                ";
            $context["localeForSelect2"] = $this->env->getRuntime('Sonata\AdminBundle\Twig\CanonicalizeRuntime')->getCanonicalizedLocaleForSelect2();
            // line 78
            yield "                ";
            if ((isset($context["localeForSelect2"]) || array_key_exists("localeForSelect2", $context) ? $context["localeForSelect2"] : (function () { throw new RuntimeError('Variable "localeForSelect2" does not exist.', 78, $this->source); })())) {
                // line 79
                yield "                    <script src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("bundles/sonataadmin/select2-locale/" . (isset($context["localeForSelect2"]) || array_key_exists("localeForSelect2", $context) ? $context["localeForSelect2"] : (function () { throw new RuntimeError('Variable "localeForSelect2" does not exist.', 79, $this->source); })())) . ".js")), "html", null, true);
                yield "\"></script>
                ";
            }
            // line 81
            yield "            ";
        }
        // line 82
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 59
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sonata_javascript_config(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_javascript_config"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_javascript_config"));

        // line 60
        yield "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 62
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sonata_javascript_pool(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_javascript_pool"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_javascript_pool"));

        // line 63
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_config"]) || array_key_exists("sonata_config", $context) ? $context["sonata_config"] : (function () { throw new RuntimeError('Variable "sonata_config" does not exist.', 63, $this->source); })()), "getOption", ["javascripts", []], "method", false, false, false, 63));
        foreach ($context['_seq'] as $context["_key"] => $context["javascript"]) {
            // line 64
            yield "                    <script src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["javascript"]), "html", null, true);
            yield "\"></script>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['javascript'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        yield "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 85
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sonata_head_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_head_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_head_title"));

        // line 86
        yield "            ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Admin", [], "SonataAdminBundle"), "html", null, true);
        yield "

            ";
        // line 88
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["_title"]) || array_key_exists("_title", $context) ? $context["_title"] : (function () { throw new RuntimeError('Variable "_title" does not exist.', 88, $this->source); })()))) {
            // line 89
            yield "                ";
            yield Twig\Extension\CoreExtension::striptags((isset($context["_title"]) || array_key_exists("_title", $context) ? $context["_title"] : (function () { throw new RuntimeError('Variable "_title" does not exist.', 89, $this->source); })()));
            yield "
            ";
        } else {
            // line 91
            yield "                ";
            if (array_key_exists("action", $context)) {
                // line 92
                yield "                    -
                    ";
                // line 93
                yield $this->env->getRuntime('Sonata\AdminBundle\Twig\BreadcrumbsRuntime')->renderBreadcrumbsForTitle($this->env, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 93, $this->source); })()), (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 93, $this->source); })()));
                yield "
                ";
            }
            // line 95
            yield "            ";
        }
        // line 96
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 100
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_attributes"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_attributes"));

        // line 101
        yield "class=\"sonata-bc ";
        yield from $this->unwrap()->yieldBlock('admin_lte_skin_class', $context, $blocks);
        yield " fixed
                ";
        // line 102
        if ((isset($context["_use_select2"]) || array_key_exists("_use_select2", $context) ? $context["_use_select2"] : (function () { throw new RuntimeError('Variable "_use_select2" does not exist.', 102, $this->source); })())) {
            yield "sonata-select2";
        }
        // line 103
        yield "                ";
        if ((isset($context["_use_icheck"]) || array_key_exists("_use_icheck", $context) ? $context["_use_icheck"] : (function () { throw new RuntimeError('Variable "_use_icheck" does not exist.', 103, $this->source); })())) {
            yield "sonata-icheck";
        }
        // line 104
        yield "                ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 104, $this->source); })()), "request", [], "any", false, false, false, 104), "cookies", [], "any", false, false, false, 104), "get", ["sonata_sidebar_hide"], "method", false, false, false, 104)) {
            // line 105
            yield "sidebar-collapse";
        }
        // line 106
        yield "\"";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 101
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_admin_lte_skin_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "admin_lte_skin_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "admin_lte_skin_class"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["_skin"]) || array_key_exists("_skin", $context) ? $context["_skin"] : (function () { throw new RuntimeError('Variable "_skin" does not exist.', 101, $this->source); })()), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 112
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sonata_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_header"));

        // line 113
        yield "            <header class=\"main-header\">
                ";
        // line 114
        yield from $this->unwrap()->yieldBlock('sonata_header_noscript_warning', $context, $blocks);
        // line 121
        yield "                ";
        yield from $this->unwrap()->yieldBlock('logo', $context, $blocks);
        // line 133
        yield "                ";
        yield from $this->unwrap()->yieldBlock('sonata_nav', $context, $blocks);
        // line 192
        yield "            </header>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 114
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sonata_header_noscript_warning(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_header_noscript_warning"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_header_noscript_warning"));

        // line 115
        yield "                    <noscript>
                        <div class=\"noscript-warning\">
                            ";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("noscript_warning", [], "SonataAdminBundle"), "html", null, true);
        yield "
                        </div>
                    </noscript>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 121
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_logo(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "logo"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "logo"));

        // line 122
        yield "                    ";
        $___internal_parse_43_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 123
            yield "                        <a class=\"logo\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sonata_admin_dashboard");
            yield "\">
                            ";
            // line 124
            if ((("icon" == CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_config"]) || array_key_exists("sonata_config", $context) ? $context["sonata_config"] : (function () { throw new RuntimeError('Variable "sonata_config" does not exist.', 124, $this->source); })()), "getOption", ["logo_content"], "method", false, false, false, 124)) || ("all" == CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_config"]) || array_key_exists("sonata_config", $context) ? $context["sonata_config"] : (function () { throw new RuntimeError('Variable "sonata_config" does not exist.', 124, $this->source); })()), "getOption", ["logo_content"], "method", false, false, false, 124)))) {
                // line 125
                yield "                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_config"]) || array_key_exists("sonata_config", $context) ? $context["sonata_config"] : (function () { throw new RuntimeError('Variable "sonata_config" does not exist.', 125, $this->source); })()), "logo", [], "any", false, false, false, 125)), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_config"]) || array_key_exists("sonata_config", $context) ? $context["sonata_config"] : (function () { throw new RuntimeError('Variable "sonata_config" does not exist.', 125, $this->source); })()), "title", [], "any", false, false, false, 125), "html", null, true);
                yield "\">
                            ";
            }
            // line 127
            yield "                            ";
            if ((("text" == CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_config"]) || array_key_exists("sonata_config", $context) ? $context["sonata_config"] : (function () { throw new RuntimeError('Variable "sonata_config" does not exist.', 127, $this->source); })()), "getOption", ["logo_content"], "method", false, false, false, 127)) || ("all" == CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_config"]) || array_key_exists("sonata_config", $context) ? $context["sonata_config"] : (function () { throw new RuntimeError('Variable "sonata_config" does not exist.', 127, $this->source); })()), "getOption", ["logo_content"], "method", false, false, false, 127)))) {
                // line 128
                yield "                                <span>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_config"]) || array_key_exists("sonata_config", $context) ? $context["sonata_config"] : (function () { throw new RuntimeError('Variable "sonata_config" does not exist.', 128, $this->source); })()), "title", [], "any", false, false, false, 128), "html", null, true);
                yield "</span>
                            ";
            }
            // line 130
            yield "                        </a>
                    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 122
        yield Twig\Extension\CoreExtension::spaceless($___internal_parse_43_);
        // line 132
        yield "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 133
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sonata_nav(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_nav"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_nav"));

        // line 134
        yield "                    <nav class=\"navbar navbar-static-top\">
                        <a href=\"#\" class=\"sidebar-toggle fa5\" data-toggle=\"push-menu\"
                           role=\"button\" title=\"";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("toggle_navigation", [], "SonataAdminBundle"), "html", null, true);
        yield "\">
                            <span class=\"sr-only\">";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("toggle_navigation", [], "SonataAdminBundle"), "html", null, true);
        yield "</span>
                        </a>

                        <div class=\"navbar-left\">
                            ";
        // line 141
        yield from $this->unwrap()->yieldBlock('sonata_breadcrumb', $context, $blocks);
        // line 156
        yield "                        </div>

                        ";
        // line 158
        yield from $this->unwrap()->yieldBlock('sonata_top_nav_menu', $context, $blocks);
        // line 190
        yield "                    </nav>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 141
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sonata_breadcrumb(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        // line 142
        yield "                                <div class=\"hidden-xs\">
                                    ";
        // line 143
        if (( !Twig\Extension\CoreExtension::testEmpty((isset($context["_breadcrumb"]) || array_key_exists("_breadcrumb", $context) ? $context["_breadcrumb"] : (function () { throw new RuntimeError('Variable "_breadcrumb" does not exist.', 143, $this->source); })())) || array_key_exists("action", $context))) {
            // line 144
            yield "                                        <ol class=\"nav navbar-top-links breadcrumb\">
                                            ";
            // line 145
            if (Twig\Extension\CoreExtension::testEmpty((isset($context["_breadcrumb"]) || array_key_exists("_breadcrumb", $context) ? $context["_breadcrumb"] : (function () { throw new RuntimeError('Variable "_breadcrumb" does not exist.', 145, $this->source); })()))) {
                // line 146
                yield "                                                ";
                if (array_key_exists("action", $context)) {
                    // line 147
                    yield "                                                    ";
                    yield $this->env->getRuntime('Sonata\AdminBundle\Twig\BreadcrumbsRuntime')->renderBreadcrumbs($this->env, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 147, $this->source); })()), (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 147, $this->source); })()));
                    yield "
                                                ";
                }
                // line 149
                yield "                                            ";
            } else {
                // line 150
                yield "                                                ";
                yield (isset($context["_breadcrumb"]) || array_key_exists("_breadcrumb", $context) ? $context["_breadcrumb"] : (function () { throw new RuntimeError('Variable "_breadcrumb" does not exist.', 150, $this->source); })());
                yield "
                                            ";
            }
            // line 152
            yield "                                        </ol>
                                    ";
        }
        // line 154
        yield "                                </div>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 158
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sonata_top_nav_menu(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

        // line 159
        yield "                            <div class=\"navbar-custom-menu\">
                                <ul class=\"nav navbar-nav\">
                                    ";
        // line 161
        yield from $this->unwrap()->yieldBlock('sonata_top_nav_menu_add_block', $context, $blocks);
        // line 172
        yield "                                    ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 172, $this->source); })()), "user", [], "any", false, false, false, 172)) {
            // line 173
            yield "                                        ";
            yield from $this->unwrap()->yieldBlock('sonata_top_nav_menu_user_block', $context, $blocks);
            // line 186
            yield "                                    ";
        }
        // line 187
        yield "                                </ul>
                            </div>
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 161
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sonata_top_nav_menu_add_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_add_block"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_add_block"));

        // line 162
        yield "                                        ";
        $context["addBlock"] = Twig\Extension\CoreExtension::include($this->env, $context, $this->env->getRuntime('Sonata\AdminBundle\Twig\TemplateRegistryRuntime')->getGlobalTemplate("add_block"));
        // line 163
        yield "                                        ";
        if ( !Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::spaceless((isset($context["addBlock"]) || array_key_exists("addBlock", $context) ? $context["addBlock"] : (function () { throw new RuntimeError('Variable "addBlock" does not exist.', 163, $this->source); })())))) {
            // line 164
            yield "                                            <li class=\"dropdown\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fas fa-plus-square fa-fw\" aria-hidden=\"true\"></i> <i class=\"fas fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                ";
            // line 168
            yield (isset($context["addBlock"]) || array_key_exists("addBlock", $context) ? $context["addBlock"] : (function () { throw new RuntimeError('Variable "addBlock" does not exist.', 168, $this->source); })());
            yield "
                                            </li>
                                        ";
        }
        // line 171
        yield "                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 173
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sonata_top_nav_menu_user_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_user_block"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_user_block"));

        // line 174
        yield "                                            ";
        $context["userBlock"] = Twig\Extension\CoreExtension::include($this->env, $context, $this->env->getRuntime('Sonata\AdminBundle\Twig\TemplateRegistryRuntime')->getGlobalTemplate("user_block"));
        // line 175
        yield "                                            ";
        if ( !Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::spaceless((isset($context["userBlock"]) || array_key_exists("userBlock", $context) ? $context["userBlock"] : (function () { throw new RuntimeError('Variable "userBlock" does not exist.', 175, $this->source); })())))) {
            // line 176
            yield "                                                <li class=\"dropdown user-menu\">
                                                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                        <i class=\"fas fa-user fa-fw\" aria-hidden=\"true\"></i> <i class=\"fas fa-caret-down\" aria-hidden=\"true\"></i>
                                                    </a>
                                                    <ul class=\"dropdown-menu dropdown-user\">
                                                        ";
            // line 181
            yield (isset($context["userBlock"]) || array_key_exists("userBlock", $context) ? $context["userBlock"] : (function () { throw new RuntimeError('Variable "userBlock" does not exist.', 181, $this->source); })());
            yield "
                                                    </ul>
                                                </li>
                                            ";
        }
        // line 185
        yield "                                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 195
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sonata_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 196
        yield "            ";
        yield from $this->unwrap()->yieldBlock('sonata_left_side', $context, $blocks);
        // line 229
        yield "
            <div class=\"content-wrapper\">
                ";
        // line 231
        yield from $this->unwrap()->yieldBlock('sonata_page_content', $context, $blocks);
        // line 339
        yield "            </div>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 196
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sonata_left_side(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_left_side"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_left_side"));

        // line 197
        yield "                <aside class=\"main-sidebar\">
                    <section class=\"sidebar\">
                        ";
        // line 199
        yield from $this->unwrap()->yieldBlock('sonata_side_nav', $context, $blocks);
        // line 226
        yield "                    </section>
                </aside>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 199
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sonata_side_nav(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_side_nav"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_side_nav"));

        // line 200
        yield "                            ";
        yield from $this->unwrap()->yieldBlock('sonata_sidebar_search', $context, $blocks);
        // line 214
        yield "
                            ";
        // line 215
        yield from $this->unwrap()->yieldBlock('side_bar_before_nav', $context, $blocks);
        // line 216
        yield "                            ";
        yield from $this->unwrap()->yieldBlock('side_bar_nav', $context, $blocks);
        // line 219
        yield "                            ";
        yield from $this->unwrap()->yieldBlock('side_bar_after_nav', $context, $blocks);
        // line 225
        yield "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 200
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sonata_sidebar_search(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

        // line 201
        yield "                                ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_config"]) || array_key_exists("sonata_config", $context) ? $context["sonata_config"] : (function () { throw new RuntimeError('Variable "sonata_config" does not exist.', 201, $this->source); })()), "getOption", ["search"], "method", false, false, false, 201)) {
            // line 202
            yield "                                    <form action=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sonata_admin_search");
            yield "\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                        <div class=\"input-group custom-search-form\">
                                            <input type=\"text\" name=\"q\" value=\"";
            // line 204
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 204, $this->source); })()), "request", [], "any", false, false, false, 204), "get", ["q"], "method", false, false, false, 204), "html", null, true);
            yield "\" class=\"form-control\" placeholder=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("search_placeholder", [], "SonataAdminBundle"), "html", null, true);
            yield "\">
                                            <span class=\"input-group-btn\">
                                                <button class=\"btn btn-flat\" type=\"submit\">
                                                    <i class=\"fas fa-search\" aria-hidden=\"true\"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </form>
                                ";
        }
        // line 213
        yield "                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 215
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_side_bar_before_nav(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "side_bar_before_nav"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "side_bar_before_nav"));

        yield " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 216
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_side_bar_nav(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "side_bar_nav"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "side_bar_nav"));

        // line 217
        yield "                                ";
        yield $this->extensions['Knp\Menu\Twig\MenuExtension']->render("sonata_admin_sidebar", ["template" => $this->env->getRuntime('Sonata\AdminBundle\Twig\TemplateRegistryRuntime')->getGlobalTemplate("knp_menu_template")]);
        yield "
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 219
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_side_bar_after_nav(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        // line 220
        yield "                                <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\">
                                    ";
        // line 221
        yield from $this->unwrap()->yieldBlock('side_bar_after_nav_content', $context, $blocks);
        // line 223
        yield "                                </p>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 221
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_side_bar_after_nav_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "side_bar_after_nav_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "side_bar_after_nav_content"));

        // line 222
        yield "                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 231
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sonata_page_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_page_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 232
        yield "                    <section class=\"content-header\">

                        ";
        // line 234
        yield from $this->unwrap()->yieldBlock('sonata_page_content_header', $context, $blocks);
        // line 300
        yield "                    </section>

                    <section class=\"content\">
                        ";
        // line 303
        yield from $this->unwrap()->yieldBlock('sonata_admin_content', $context, $blocks);
        // line 337
        yield "                    </section>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 234
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sonata_page_content_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        // line 235
        yield "                            ";
        yield from $this->unwrap()->yieldBlock('sonata_page_content_nav', $context, $blocks);
        // line 299
        yield "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 235
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sonata_page_content_nav(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

        // line 236
        yield "                                ";
        if (((( !Twig\Extension\CoreExtension::testEmpty((isset($context["_navbar_title"]) || array_key_exists("_navbar_title", $context) ? $context["_navbar_title"] : (function () { throw new RuntimeError('Variable "_navbar_title" does not exist.', 236, $this->source); })())) ||  !Twig\Extension\CoreExtension::testEmpty(        // line 237
(isset($context["_tab_menu"]) || array_key_exists("_tab_menu", $context) ? $context["_tab_menu"] : (function () { throw new RuntimeError('Variable "_tab_menu" does not exist.', 237, $this->source); })()))) ||  !Twig\Extension\CoreExtension::testEmpty(        // line 238
(isset($context["_actions"]) || array_key_exists("_actions", $context) ? $context["_actions"] : (function () { throw new RuntimeError('Variable "_actions" does not exist.', 238, $this->source); })()))) ||  !Twig\Extension\CoreExtension::testEmpty(        // line 239
(isset($context["_list_filters_actions"]) || array_key_exists("_list_filters_actions", $context) ? $context["_list_filters_actions"] : (function () { throw new RuntimeError('Variable "_list_filters_actions" does not exist.', 239, $this->source); })())))) {
            // line 241
            yield "                                    <nav class=\"navbar navbar-default\" role=\"navigation\">
                                        <div class=\"container-fluid\">
                                            ";
            // line 243
            yield from $this->unwrap()->yieldBlock('tab_menu_navbar_header', $context, $blocks);
            // line 250
            yield "
                                            <div class=\"navbar-collapse\">
                                                ";
            // line 252
            if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["_tab_menu"]) || array_key_exists("_tab_menu", $context) ? $context["_tab_menu"] : (function () { throw new RuntimeError('Variable "_tab_menu" does not exist.', 252, $this->source); })()))) {
                // line 253
                yield "                                                    <div class=\"navbar-left\">
                                                        ";
                // line 254
                yield (isset($context["_tab_menu"]) || array_key_exists("_tab_menu", $context) ? $context["_tab_menu"] : (function () { throw new RuntimeError('Variable "_tab_menu" does not exist.', 254, $this->source); })());
                yield "
                                                    </div>
                                                ";
            }
            // line 257
            yield "
                                                ";
            // line 258
            if ((((array_key_exists("admin", $context) && array_key_exists("action", $context)) && ((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 258, $this->source); })()) == "list")) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 258, $this->source); })()), "listModes", [], "any", false, false, false, 258)) > 1))) {
                // line 259
                yield "                                                    <div class=\"nav navbar-right btn-group\">
                                                        ";
                // line 260
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 260, $this->source); })()), "listModes", [], "any", false, false, false, 260));
                foreach ($context['_seq'] as $context["mode"] => $context["settings"]) {
                    // line 261
                    yield "                                                            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 261, $this->source); })()), "generateUrl", ["list", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 261, $this->source); })()), "request", [], "any", false, false, false, 261), "query", [], "any", false, false, false, 261), "all", [], "any", false, false, false, 261), ["_list_mode" => $context["mode"]])], "method", false, false, false, 261), "html", null, true);
                    yield "\" class=\"btn btn-default navbar-btn btn-sm";
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 261, $this->source); })()), "getListMode", [], "method", false, false, false, 261) == $context["mode"])) {
                        yield " active";
                    }
                    yield "\">
                                                                ";
                    // line 263
                    yield "                                                                ";
                    if (( !CoreExtension::getAttribute($this->env, $this->source, $context["settings"], "icon", [], "any", true, true, false, 263) && CoreExtension::getAttribute($this->env, $this->source, $context["settings"], "class", [], "any", true, true, false, 263))) {
                        // line 264
                        yield "                                                                    ";
                        trigger_deprecation('', '', "Relying on the \"class\" setting is deprecated since sonata-project/admin-bundle 4.9, use the \"icon\" setting instead"." in \"@SonataAdmin/standard_layout.html.twig\" at line 264.");
                        // line 265
                        yield "                                                                    <i class=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["settings"], "class", [], "any", false, false, false, 265), "html", null, true);
                        yield "\" aria-hidden=\"true\"></i>
                                                                ";
                    } else {
                        // line 267
                        yield "                                                                    ";
                        yield $this->env->getRuntime('Sonata\AdminBundle\Twig\IconRuntime')->parseIcon(((CoreExtension::getAttribute($this->env, $this->source, $context["settings"], "icon", [], "any", true, true, false, 267)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["settings"], "icon", [], "any", false, false, false, 267), "")) : ("")));
                        yield "
                                                                ";
                    }
                    // line 269
                    yield "                                                            </a>
                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['mode'], $context['settings'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 271
                yield "                                                    </div>
                                                ";
            }
            // line 273
            yield "
                                                ";
            // line 274
            yield from $this->unwrap()->yieldBlock('sonata_admin_content_actions_wrappers', $context, $blocks);
            // line 290
            yield "
                                                ";
            // line 291
            if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["_list_filters_actions"]) || array_key_exists("_list_filters_actions", $context) ? $context["_list_filters_actions"] : (function () { throw new RuntimeError('Variable "_list_filters_actions" does not exist.', 291, $this->source); })()))) {
                // line 292
                yield "                                                    ";
                yield (isset($context["_list_filters_actions"]) || array_key_exists("_list_filters_actions", $context) ? $context["_list_filters_actions"] : (function () { throw new RuntimeError('Variable "_list_filters_actions" does not exist.', 292, $this->source); })());
                yield "
                                                ";
            }
            // line 294
            yield "                                            </div>
                                        </div>
                                    </nav>
                                ";
        }
        // line 298
        yield "                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 243
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_tab_menu_navbar_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tab_menu_navbar_header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tab_menu_navbar_header"));

        // line 244
        yield "                                                ";
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["_navbar_title"]) || array_key_exists("_navbar_title", $context) ? $context["_navbar_title"] : (function () { throw new RuntimeError('Variable "_navbar_title" does not exist.', 244, $this->source); })()))) {
            // line 245
            yield "                                                    <div class=\"navbar-header\">
                                                        <a class=\"navbar-brand\" href=\"#\">";
            // line 246
            yield (isset($context["_navbar_title"]) || array_key_exists("_navbar_title", $context) ? $context["_navbar_title"] : (function () { throw new RuntimeError('Variable "_navbar_title" does not exist.', 246, $this->source); })());
            yield "</a>
                                                    </div>
                                                ";
        }
        // line 249
        yield "                                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 274
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sonata_admin_content_actions_wrappers(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_admin_content_actions_wrappers"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_admin_content_actions_wrappers"));

        // line 275
        yield "                                                    ";
        if ( !Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::replace((isset($context["_actions"]) || array_key_exists("_actions", $context) ? $context["_actions"] : (function () { throw new RuntimeError('Variable "_actions" does not exist.', 275, $this->source); })()), ["<li>" => "", "</li>" => ""])))) {
            // line 276
            yield "                                                        <ul class=\"nav navbar-nav navbar-right\">
                                                        ";
            // line 277
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), (isset($context["_actions"]) || array_key_exists("_actions", $context) ? $context["_actions"] : (function () { throw new RuntimeError('Variable "_actions" does not exist.', 277, $this->source); })()), "</a>")) > 2)) {
                // line 278
                yield "                                                            <li class=\"dropdown sonata-actions\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 279
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("link_actions", [], "SonataAdminBundle"), "html", null, true);
                yield " <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                                    ";
                // line 281
                yield (isset($context["_actions"]) || array_key_exists("_actions", $context) ? $context["_actions"] : (function () { throw new RuntimeError('Variable "_actions" does not exist.', 281, $this->source); })());
                yield "
                                                                </ul>
                                                            </li>
                                                        ";
            } else {
                // line 285
                yield "                                                            ";
                yield (isset($context["_actions"]) || array_key_exists("_actions", $context) ? $context["_actions"] : (function () { throw new RuntimeError('Variable "_actions" does not exist.', 285, $this->source); })());
                yield "
                                                        ";
            }
            // line 287
            yield "                                                        </ul>
                                                    ";
        }
        // line 289
        yield "                                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 303
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sonata_admin_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_admin_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_admin_content"));

        // line 304
        yield "
                            ";
        // line 305
        yield from $this->unwrap()->yieldBlock('notice', $context, $blocks);
        // line 308
        yield "
                            ";
        // line 309
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["_preview"]) || array_key_exists("_preview", $context) ? $context["_preview"] : (function () { throw new RuntimeError('Variable "_preview" does not exist.', 309, $this->source); })()))) {
            // line 310
            yield "                                <div class=\"sonata-ba-preview\">";
            yield (isset($context["_preview"]) || array_key_exists("_preview", $context) ? $context["_preview"] : (function () { throw new RuntimeError('Variable "_preview" does not exist.', 310, $this->source); })());
            yield "</div>
                            ";
        }
        // line 312
        yield "
                            ";
        // line 313
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["_content"]) || array_key_exists("_content", $context) ? $context["_content"] : (function () { throw new RuntimeError('Variable "_content" does not exist.', 313, $this->source); })()))) {
            // line 314
            yield "                                <div class=\"sonata-ba-content\">";
            yield (isset($context["_content"]) || array_key_exists("_content", $context) ? $context["_content"] : (function () { throw new RuntimeError('Variable "_content" does not exist.', 314, $this->source); })());
            yield "</div>
                            ";
        }
        // line 316
        yield "
                            ";
        // line 317
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["_show"]) || array_key_exists("_show", $context) ? $context["_show"] : (function () { throw new RuntimeError('Variable "_show" does not exist.', 317, $this->source); })()))) {
            // line 318
            yield "                                <div class=\"sonata-ba-show\">";
            yield (isset($context["_show"]) || array_key_exists("_show", $context) ? $context["_show"] : (function () { throw new RuntimeError('Variable "_show" does not exist.', 318, $this->source); })());
            yield "</div>
                            ";
        }
        // line 320
        yield "
                            ";
        // line 321
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["_form"]) || array_key_exists("_form", $context) ? $context["_form"] : (function () { throw new RuntimeError('Variable "_form" does not exist.', 321, $this->source); })()))) {
            // line 322
            yield "                                <div class=\"sonata-ba-form\">";
            yield (isset($context["_form"]) || array_key_exists("_form", $context) ? $context["_form"] : (function () { throw new RuntimeError('Variable "_form" does not exist.', 322, $this->source); })());
            yield "</div>
                            ";
        }
        // line 324
        yield "
                            ";
        // line 325
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["_list_filters"]) || array_key_exists("_list_filters", $context) ? $context["_list_filters"] : (function () { throw new RuntimeError('Variable "_list_filters" does not exist.', 325, $this->source); })()))) {
            // line 326
            yield "                                <div class=\"row\">
                                    ";
            // line 327
            yield (isset($context["_list_filters"]) || array_key_exists("_list_filters", $context) ? $context["_list_filters"] : (function () { throw new RuntimeError('Variable "_list_filters" does not exist.', 327, $this->source); })());
            yield "
                                </div>
                            ";
        }
        // line 330
        yield "
                            ";
        // line 331
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["_list_table"]) || array_key_exists("_list_table", $context) ? $context["_list_table"] : (function () { throw new RuntimeError('Variable "_list_table" does not exist.', 331, $this->source); })()))) {
            // line 332
            yield "                                <div class=\"row\">
                                    ";
            // line 333
            yield (isset($context["_list_table"]) || array_key_exists("_list_table", $context) ? $context["_list_table"] : (function () { throw new RuntimeError('Variable "_list_table" does not exist.', 333, $this->source); })());
            yield "
                                </div>
                            ";
        }
        // line 336
        yield "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 305
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_notice(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "notice"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "notice"));

        // line 306
        yield "                                ";
        yield from         $this->loadTemplate("@SonataTwig/FlashMessage/render.html.twig", "@SonataAdmin/standard_layout.html.twig", 306)->unwrap()->yield($context);
        // line 307
        yield "                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 344
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bootlint(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bootlint"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bootlint"));

        // line 345
        yield "            ";
        // line 346
        yield "            <script type=\"text/javascript\">
                javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
            </script>
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
        return "@SonataAdmin/standard_layout.html.twig";
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
        return array (  1573 => 346,  1571 => 345,  1558 => 344,  1547 => 307,  1544 => 306,  1531 => 305,  1520 => 336,  1514 => 333,  1511 => 332,  1509 => 331,  1506 => 330,  1500 => 327,  1497 => 326,  1495 => 325,  1492 => 324,  1486 => 322,  1484 => 321,  1481 => 320,  1475 => 318,  1473 => 317,  1470 => 316,  1464 => 314,  1462 => 313,  1459 => 312,  1453 => 310,  1451 => 309,  1448 => 308,  1446 => 305,  1443 => 304,  1430 => 303,  1419 => 289,  1415 => 287,  1409 => 285,  1402 => 281,  1397 => 279,  1394 => 278,  1392 => 277,  1389 => 276,  1386 => 275,  1373 => 274,  1362 => 249,  1356 => 246,  1353 => 245,  1350 => 244,  1337 => 243,  1326 => 298,  1320 => 294,  1314 => 292,  1312 => 291,  1309 => 290,  1307 => 274,  1304 => 273,  1300 => 271,  1293 => 269,  1287 => 267,  1281 => 265,  1278 => 264,  1275 => 263,  1266 => 261,  1262 => 260,  1259 => 259,  1257 => 258,  1254 => 257,  1248 => 254,  1245 => 253,  1243 => 252,  1239 => 250,  1237 => 243,  1233 => 241,  1231 => 239,  1230 => 238,  1229 => 237,  1227 => 236,  1214 => 235,  1203 => 299,  1200 => 235,  1187 => 234,  1175 => 337,  1173 => 303,  1168 => 300,  1166 => 234,  1162 => 232,  1149 => 231,  1138 => 222,  1125 => 221,  1113 => 223,  1111 => 221,  1108 => 220,  1095 => 219,  1081 => 217,  1068 => 216,  1045 => 215,  1034 => 213,  1020 => 204,  1014 => 202,  1011 => 201,  998 => 200,  987 => 225,  984 => 219,  981 => 216,  979 => 215,  976 => 214,  973 => 200,  960 => 199,  947 => 226,  945 => 199,  941 => 197,  928 => 196,  916 => 339,  914 => 231,  910 => 229,  907 => 196,  894 => 195,  883 => 185,  876 => 181,  869 => 176,  866 => 175,  863 => 174,  850 => 173,  839 => 171,  833 => 168,  827 => 164,  824 => 163,  821 => 162,  808 => 161,  795 => 187,  792 => 186,  789 => 173,  786 => 172,  784 => 161,  780 => 159,  767 => 158,  755 => 154,  751 => 152,  745 => 150,  742 => 149,  736 => 147,  733 => 146,  731 => 145,  728 => 144,  726 => 143,  723 => 142,  710 => 141,  698 => 190,  696 => 158,  692 => 156,  690 => 141,  683 => 137,  679 => 136,  675 => 134,  662 => 133,  651 => 132,  649 => 122,  644 => 130,  638 => 128,  635 => 127,  627 => 125,  625 => 124,  620 => 123,  617 => 122,  604 => 121,  589 => 117,  585 => 115,  572 => 114,  560 => 192,  557 => 133,  554 => 121,  552 => 114,  549 => 113,  536 => 112,  513 => 101,  502 => 106,  499 => 105,  496 => 104,  491 => 103,  487 => 102,  482 => 101,  469 => 100,  458 => 96,  455 => 95,  450 => 93,  447 => 92,  444 => 91,  438 => 89,  436 => 88,  430 => 86,  417 => 85,  406 => 66,  397 => 64,  392 => 63,  379 => 62,  368 => 60,  355 => 59,  344 => 82,  341 => 81,  335 => 79,  332 => 78,  329 => 77,  326 => 76,  323 => 74,  317 => 72,  314 => 71,  311 => 70,  309 => 69,  306 => 67,  304 => 62,  301 => 61,  298 => 59,  285 => 58,  274 => 56,  265 => 54,  260 => 53,  247 => 52,  233 => 32,  220 => 31,  197 => 29,  183 => 351,  180 => 350,  177 => 344,  175 => 343,  171 => 341,  169 => 195,  166 => 194,  164 => 112,  158 => 108,  156 => 100,  151 => 97,  149 => 85,  145 => 83,  143 => 58,  140 => 57,  138 => 52,  133 => 49,  131 => 44,  130 => 43,  129 => 42,  128 => 41,  127 => 40,  126 => 39,  125 => 37,  122 => 36,  120 => 31,  115 => 29,  111 => 27,  109 => 26,  107 => 25,  105 => 24,  103 => 23,  101 => 22,  99 => 21,  97 => 20,  95 => 19,  93 => 18,  91 => 17,  89 => 16,  87 => 15,  85 => 14,  83 => 13,  81 => 12,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{%- set _preview = block('preview') is defined ? block('preview')|trim : null %}
{% set _form = block('form') is defined ? block('form')|trim : null %}
{% set _show = block('show') is defined ? block('show')|trim : null %}
{% set _list_table = block('list_table') is defined ? block('list_table')|trim : null %}
{% set _list_filters = block('list_filters') is defined ? block('list_filters')|trim : null %}
{% set _tab_menu = block('tab_menu') is defined ? block('tab_menu')|trim : null %}
{% set _content = block('content') is defined ? block('content')|trim : null %}
{% set _title = block('title') is defined ? block('title')|trim : null %}
{% set _breadcrumb = block('breadcrumb') is defined ? block('breadcrumb')|trim : null %}
{% set _actions = block('actions') is defined ? block('actions')|trim : null %}
{% set _navbar_title = block('navbar_title') is defined ? block('navbar_title')|trim : null %}
{% set _list_filters_actions = block('list_filters_actions') is defined ? block('list_filters_actions')|trim : null -%}
{% set _skin = sonata_config.getOption('skin') %}
{% set _use_select2 = sonata_config.getOption('use_select2') %}
{% set _use_icheck = sonata_config.getOption('use_icheck') %}

<!DOCTYPE html>
<html {% block html_attributes %}class=\"no-js\"{% endblock %}>
    <head>
        {% block meta_tags %}
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        {% endblock %}

        <meta data-sonata-admin='{{ {
            config: {
                SKIN: _skin,
                CONFIRM_EXIT: sonata_config.getOption('confirm_exit'),
                USE_SELECT2: _use_select2,
                USE_ICHECK: _use_icheck,
                USE_STICKYFORMS: sonata_config.getOption('use_stickyforms'),
                DEBUG: sonata_config.getOption('js_debug'),
            },
            translations: {
                CONFIRM_EXIT: 'confirm_exit'|trans({}, 'SonataAdminBundle'),
            },
        }|json_encode()|raw }}'
        >

        {% block stylesheets %}
            {% for stylesheet in sonata_config.getOption('stylesheets', []) %}
                <link rel=\"stylesheet\" href=\"{{ asset(stylesheet) }}\">
            {% endfor %}
        {% endblock %}

        {% block javascripts %}
            {% block sonata_javascript_config %}
            {% endblock %}

            {% block sonata_javascript_pool %}
                {% for javascript in sonata_config.getOption('javascripts', []) %}
                    <script src=\"{{ asset(javascript) }}\"></script>
                {% endfor %}
            {% endblock %}

            {# TODO: Drop locale for moment calls when dropping support for `sonata-project/form-extensions` 1.x #}
            {# localize moment #}
            {% set localeForMoment = canonicalize_locale_for_moment() %}
            {% if localeForMoment %}
                <script src=\"{{ asset('bundles/sonataform/moment-locale/' ~ localeForMoment ~ '.js') }}\"></script>
            {% endif %}

            {# localize select2 #}
            {% if sonata_config.getOption('use_select2') %}
                {% set localeForSelect2 = canonicalize_locale_for_select2() %}
                {% if localeForSelect2 %}
                    <script src=\"{{ asset('bundles/sonataadmin/select2-locale/' ~ localeForSelect2 ~ '.js') }}\"></script>
                {% endif %}
            {% endif %}
        {% endblock %}

        <title>
        {% block sonata_head_title %}
            {{ 'Admin'|trans({}, 'SonataAdminBundle') }}

            {% if _title is not empty %}
                {{ _title|striptags|raw }}
            {% else %}
                {% if action is defined %}
                    -
                    {{ render_breadcrumbs_for_title(admin, action) }}
                {% endif %}
            {% endif %}
        {% endblock %}
        </title>
    </head>
    <body
            {% block body_attributes -%}
                class=\"sonata-bc {% block admin_lte_skin_class %}{{ _skin }}{% endblock %} fixed
                {% if _use_select2 %}sonata-select2{% endif %}
                {% if _use_icheck %}sonata-icheck{% endif %}
                {% if app.request.cookies.get('sonata_sidebar_hide') -%}
                    sidebar-collapse
                {%- endif -%}\"
            {%- endblock -%}
    >

    <div class=\"wrapper\">

        {% block sonata_header %}
            <header class=\"main-header\">
                {% block sonata_header_noscript_warning %}
                    <noscript>
                        <div class=\"noscript-warning\">
                            {{ 'noscript_warning'|trans({}, 'SonataAdminBundle') }}
                        </div>
                    </noscript>
                {% endblock %}
                {% block logo %}
                    {% apply spaceless %}
                        <a class=\"logo\" href=\"{{ path('sonata_admin_dashboard') }}\">
                            {% if 'icon' == sonata_config.getOption('logo_content') or 'all' == sonata_config.getOption('logo_content') %}
                                <img src=\"{{ asset(sonata_config.logo) }}\" alt=\"{{ sonata_config.title }}\">
                            {% endif %}
                            {% if 'text' == sonata_config.getOption('logo_content') or 'all' == sonata_config.getOption('logo_content') %}
                                <span>{{ sonata_config.title }}</span>
                            {% endif %}
                        </a>
                    {% endapply %}
                {% endblock %}
                {% block sonata_nav %}
                    <nav class=\"navbar navbar-static-top\">
                        <a href=\"#\" class=\"sidebar-toggle fa5\" data-toggle=\"push-menu\"
                           role=\"button\" title=\"{{ 'toggle_navigation'|trans({}, 'SonataAdminBundle') }}\">
                            <span class=\"sr-only\">{{ 'toggle_navigation'|trans({}, 'SonataAdminBundle') }}</span>
                        </a>

                        <div class=\"navbar-left\">
                            {% block sonata_breadcrumb %}
                                <div class=\"hidden-xs\">
                                    {% if _breadcrumb is not empty or action is defined %}
                                        <ol class=\"nav navbar-top-links breadcrumb\">
                                            {% if _breadcrumb is empty %}
                                                {% if action is defined %}
                                                    {{ render_breadcrumbs(admin, action) }}
                                                {% endif %}
                                            {% else %}
                                                {{ _breadcrumb|raw }}
                                            {% endif %}
                                        </ol>
                                    {% endif %}
                                </div>
                            {% endblock sonata_breadcrumb %}
                        </div>

                        {% block sonata_top_nav_menu %}
                            <div class=\"navbar-custom-menu\">
                                <ul class=\"nav navbar-nav\">
                                    {% block sonata_top_nav_menu_add_block %}
                                        {% set addBlock = include(get_global_template('add_block')) %}
                                        {% if addBlock|spaceless is not empty %}
                                            <li class=\"dropdown\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fas fa-plus-square fa-fw\" aria-hidden=\"true\"></i> <i class=\"fas fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                {{ addBlock|raw }}
                                            </li>
                                        {% endif %}
                                    {% endblock %}
                                    {% if app.user %}
                                        {% block sonata_top_nav_menu_user_block %}
                                            {% set userBlock = include(get_global_template('user_block')) %}
                                            {% if userBlock|spaceless is not empty %}
                                                <li class=\"dropdown user-menu\">
                                                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                        <i class=\"fas fa-user fa-fw\" aria-hidden=\"true\"></i> <i class=\"fas fa-caret-down\" aria-hidden=\"true\"></i>
                                                    </a>
                                                    <ul class=\"dropdown-menu dropdown-user\">
                                                        {{ userBlock|raw }}
                                                    </ul>
                                                </li>
                                            {% endif %}
                                        {% endblock %}
                                    {% endif %}
                                </ul>
                            </div>
                        {% endblock %}
                    </nav>
                {% endblock sonata_nav %}
            </header>
        {% endblock sonata_header %}

        {% block sonata_wrapper %}
            {% block sonata_left_side %}
                <aside class=\"main-sidebar\">
                    <section class=\"sidebar\">
                        {% block sonata_side_nav %}
                            {% block sonata_sidebar_search %}
                                {% if sonata_config.getOption('search') %}
                                    <form action=\"{{ path('sonata_admin_search') }}\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                        <div class=\"input-group custom-search-form\">
                                            <input type=\"text\" name=\"q\" value=\"{{ app.request.get('q') }}\" class=\"form-control\" placeholder=\"{{ 'search_placeholder'|trans({}, 'SonataAdminBundle') }}\">
                                            <span class=\"input-group-btn\">
                                                <button class=\"btn btn-flat\" type=\"submit\">
                                                    <i class=\"fas fa-search\" aria-hidden=\"true\"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </form>
                                {% endif %}
                            {% endblock sonata_sidebar_search %}

                            {% block side_bar_before_nav %} {% endblock %}
                            {% block side_bar_nav %}
                                {{ knp_menu_render('sonata_admin_sidebar', {template: get_global_template('knp_menu_template')}) }}
                            {% endblock side_bar_nav %}
                            {% block side_bar_after_nav %}
                                <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\">
                                    {% block side_bar_after_nav_content %}
                                    {% endblock %}
                                </p>
                            {% endblock %}
                        {% endblock sonata_side_nav %}
                    </section>
                </aside>
            {% endblock sonata_left_side %}

            <div class=\"content-wrapper\">
                {% block sonata_page_content %}
                    <section class=\"content-header\">

                        {% block sonata_page_content_header %}
                            {% block sonata_page_content_nav %}
                                {% if _navbar_title is not empty
                                  or _tab_menu is not empty
                                  or _actions is not empty
                                  or _list_filters_actions is not empty
                                 %}
                                    <nav class=\"navbar navbar-default\" role=\"navigation\">
                                        <div class=\"container-fluid\">
                                            {% block tab_menu_navbar_header %}
                                                {% if _navbar_title is not empty %}
                                                    <div class=\"navbar-header\">
                                                        <a class=\"navbar-brand\" href=\"#\">{{ _navbar_title|raw }}</a>
                                                    </div>
                                                {% endif %}
                                            {% endblock %}

                                            <div class=\"navbar-collapse\">
                                                {% if _tab_menu is not empty %}
                                                    <div class=\"navbar-left\">
                                                        {{ _tab_menu|raw }}
                                                    </div>
                                                {% endif %}

                                                {% if admin is defined and action is defined and action == 'list' and admin.listModes|length > 1 %}
                                                    <div class=\"nav navbar-right btn-group\">
                                                        {% for mode, settings in admin.listModes %}
                                                            <a href=\"{{ admin.generateUrl('list', app.request.query.all|merge({_list_mode: mode})) }}\" class=\"btn btn-default navbar-btn btn-sm{% if admin.getListMode() == mode %} active{% endif %}\">
                                                                {# NEXT_MAJOR: Remove the if and keep the else part #}
                                                                {% if settings.icon is not defined and settings.class is defined %}
                                                                    {% deprecated 'Relying on the \"class\" setting is deprecated since sonata-project/admin-bundle 4.9, use the \"icon\" setting instead' %}
                                                                    <i class=\"{{ settings.class }}\" aria-hidden=\"true\"></i>
                                                                {% else %}
                                                                    {{ settings.icon|default('')|parse_icon }}
                                                                {% endif %}
                                                            </a>
                                                        {% endfor %}
                                                    </div>
                                                {% endif %}

                                                {% block sonata_admin_content_actions_wrappers %}
                                                    {% if _actions|replace({ '<li>': '', '</li>': '' })|trim is not empty %}
                                                        <ul class=\"nav navbar-nav navbar-right\">
                                                        {% if _actions|split('</a>')|length > 2 %}
                                                            <li class=\"dropdown sonata-actions\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">{{ 'link_actions'|trans({}, 'SonataAdminBundle') }} <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                                    {{ _actions|raw }}
                                                                </ul>
                                                            </li>
                                                        {% else %}
                                                            {{ _actions|raw }}
                                                        {% endif %}
                                                        </ul>
                                                    {% endif %}
                                                {% endblock sonata_admin_content_actions_wrappers %}

                                                {% if _list_filters_actions is not empty %}
                                                    {{ _list_filters_actions|raw }}
                                                {% endif %}
                                            </div>
                                        </div>
                                    </nav>
                                {% endif %}
                            {% endblock sonata_page_content_nav %}
                        {% endblock sonata_page_content_header %}
                    </section>

                    <section class=\"content\">
                        {% block sonata_admin_content %}

                            {% block notice %}
                                {% include '@SonataTwig/FlashMessage/render.html.twig' %}
                            {% endblock notice %}

                            {% if _preview is not empty %}
                                <div class=\"sonata-ba-preview\">{{ _preview|raw }}</div>
                            {% endif %}

                            {% if _content is not empty %}
                                <div class=\"sonata-ba-content\">{{ _content|raw }}</div>
                            {% endif %}

                            {% if _show is not empty %}
                                <div class=\"sonata-ba-show\">{{ _show|raw }}</div>
                            {% endif %}

                            {% if _form is not empty %}
                                <div class=\"sonata-ba-form\">{{ _form|raw }}</div>
                            {% endif %}

                            {% if _list_filters is not empty %}
                                <div class=\"row\">
                                    {{ _list_filters|raw }}
                                </div>
                            {% endif %}

                            {% if _list_table is not empty %}
                                <div class=\"row\">
                                    {{ _list_table|raw }}
                                </div>
                            {% endif %}
                        {% endblock sonata_admin_content %}
                    </section>
                {% endblock sonata_page_content %}
            </div>
        {% endblock sonata_wrapper %}
    </div>

    {% if sonata_config.getOption('use_bootlint') %}
        {% block bootlint %}
            {# Bootlint - https://github.com/twbs/bootlint#in-the-browser #}
            <script type=\"text/javascript\">
                javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
            </script>
        {% endblock %}
    {% endif %}

    </body>
</html>
", "@SonataAdmin/standard_layout.html.twig", "/home/aleksandar/Desktop/Site/payment-demo/vendor/sonata-project/admin-bundle/src/Resources/views/standard_layout.html.twig");
    }
}
