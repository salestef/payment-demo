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

/* @SonataAdmin/CRUD/base_list.html.twig */
class __TwigTemplate_f998467d17c496a457ec4da183c2c068 extends Template
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
            'actions' => [$this, 'block_actions'],
            'tab_menu' => [$this, 'block_tab_menu'],
            'title' => [$this, 'block_title'],
            'navbar_title' => [$this, 'block_navbar_title'],
            'list_table' => [$this, 'block_list_table'],
            'list_header' => [$this, 'block_list_header'],
            'table' => [$this, 'block_table'],
            'table_header' => [$this, 'block_table_header'],
            'table_body' => [$this, 'block_table_body'],
            'table_footer' => [$this, 'block_table_footer'],
            'no_result_content' => [$this, 'block_no_result_content'],
            'list_footer' => [$this, 'block_list_footer'],
            'batch' => [$this, 'block_batch'],
            'batch_javascript' => [$this, 'block_batch_javascript'],
            'batch_actions' => [$this, 'block_batch_actions'],
            'pager_results' => [$this, 'block_pager_results'],
            'pager_links' => [$this, 'block_pager_links'],
            'list_filters_actions' => [$this, 'block_list_filters_actions'],
            'list_filters' => [$this, 'block_list_filters'],
            'sonata_list_filter_group_class' => [$this, 'block_sonata_list_filter_group_class'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new RuntimeError('Variable "base_template" does not exist.', 12, $this->source); })()), "@SonataAdmin/CRUD/base_list.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_list.html.twig"));

        // line 34
        $context["datagrid_has_results"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 34, $this->source); })()), "datagrid", [], "any", false, false, false, 34), "results", [], "any", false, false, false, 34)) > 0);
        // line 12
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 14
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

        // line 15
        yield from         $this->loadTemplate("@SonataAdmin/CRUD/action_buttons.html.twig", "@SonataAdmin/CRUD/base_list.html.twig", 15)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 18
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

        // line 19
        yield $this->extensions['Knp\Menu\Twig\MenuExtension']->render(CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 19, $this->source); })()), "sidemenu", [(isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 19, $this->source); })())], "method", false, false, false, 19), ["currentClass" => "active", "template" => $this->env->getRuntime('Sonata\AdminBundle\Twig\TemplateRegistryRuntime')->getGlobalTemplate("tab_menu_template")], "twig");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 25
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

        // line 26
        yield "    ";
        (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 26, $this->source); })()), "isChild", [], "any", false, false, false, 26) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 26, $this->source); })()), "parent", [], "any", false, false, false, 26), "subject", [], "any", false, false, false, 26))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title_edit", ["%name%" => CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 26, $this->source); })()), "parent", [], "any", false, false, false, 26), "toString", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 26, $this->source); })()), "parent", [], "any", false, false, false, 26), "subject", [], "any", false, false, false, 26)], "method", false, false, false, 26)), "truncate", [15, "..."], "method", false, false, false, 26)], "SonataAdminBundle"), "html", null, true)) : (yield ""));
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 29
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

        // line 30
        yield "    ";
        (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 30, $this->source); })()), "isChild", [], "any", false, false, false, 30) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 30, $this->source); })()), "parent", [], "any", false, false, false, 30), "subject", [], "any", false, false, false, 30))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title_edit", ["%name%" => CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 30, $this->source); })()), "parent", [], "any", false, false, false, 30), "toString", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 30, $this->source); })()), "parent", [], "any", false, false, false, 30), "subject", [], "any", false, false, false, 30)], "method", false, false, false, 30)), "truncate", [100, "..."], "method", false, false, false, 30)], "SonataAdminBundle"), "html", null, true)) : (yield ""));
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 36
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_list_table(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list_table"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list_table"));

        // line 37
        yield "    <div class=\"col-xs-12 col-md-12\">
        ";
        // line 38
        $context["batchactions"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 38, $this->source); })()), "batchactions", [], "any", false, false, false, 38);
        // line 39
        yield "        ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 39, $this->source); })()), "hasRoute", ["batch"], "method", false, false, false, 39) && Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["batchactions"]) || array_key_exists("batchactions", $context) ? $context["batchactions"] : (function () { throw new RuntimeError('Variable "batchactions" does not exist.', 39, $this->source); })())))) {
            // line 40
            yield "            <form action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 40, $this->source); })()), "generateUrl", ["batch", ["filter" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 40, $this->source); })()), "filterParameters", [], "any", false, false, false, 40)]], "method", false, false, false, 40), "html", null, true);
            yield "\" method=\"POST\" >
            <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new RuntimeError('Variable "csrf_token" does not exist.', 41, $this->source); })()), "html", null, true);
            yield "\">
        ";
        }
        // line 43
        yield "
        ";
        // line 45
        yield "        <div class=\"box box-primary\"";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 45, $this->source); })()), "datagrid", [], "any", false, false, false, 45), "pager", [], "any", false, false, false, 45), "lastPage", [], "any", false, false, false, 45) == 1)) {
            yield " style=\"margin-bottom: 100px;\"";
        }
        yield ">
            <div class=\"box-body";
        // line 46
        if ((isset($context["datagrid_has_results"]) || array_key_exists("datagrid_has_results", $context) ? $context["datagrid_has_results"] : (function () { throw new RuntimeError('Variable "datagrid_has_results" does not exist.', 46, $this->source); })())) {
            yield " table-responsive no-padding";
        }
        yield "\">
                ";
        // line 47
        yield $this->env->getRuntime('Sonata\BlockBundle\Templating\Helper\BlockHelper')->renderEvent("sonata.admin.list.table.top", ["admin" => (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 47, $this->source); })())]);
        yield "

                ";
        // line 49
        yield from $this->unwrap()->yieldBlock('list_header', $context, $blocks);
        // line 50
        yield "
                ";
        // line 51
        if ((isset($context["datagrid_has_results"]) || array_key_exists("datagrid_has_results", $context) ? $context["datagrid_has_results"] : (function () { throw new RuntimeError('Variable "datagrid_has_results" does not exist.', 51, $this->source); })())) {
            // line 52
            yield "                    ";
            yield from $this->unwrap()->yieldBlock('table', $context, $blocks);
            // line 117
            yield "                ";
        } else {
            // line 118
            yield "                    ";
            yield from $this->unwrap()->yieldBlock('no_result_content', $context, $blocks);
            // line 142
            yield "                ";
        }
        // line 143
        yield "
                ";
        // line 144
        yield $this->env->getRuntime('Sonata\BlockBundle\Templating\Helper\BlockHelper')->renderEvent("sonata.admin.list.table.bottom", ["admin" => (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 144, $this->source); })())]);
        yield "
            </div>
            ";
        // line 146
        yield from $this->unwrap()->yieldBlock('list_footer', $context, $blocks);
        // line 251
        yield "        </div>
        ";
        // line 252
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 252, $this->source); })()), "hasRoute", ["batch"], "method", false, false, false, 252) && Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["batchactions"]) || array_key_exists("batchactions", $context) ? $context["batchactions"] : (function () { throw new RuntimeError('Variable "batchactions" does not exist.', 252, $this->source); })())))) {
            // line 253
            yield "            </form>
        ";
        }
        // line 255
        yield "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 49
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_list_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list_header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list_header"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 52
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_table(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table"));

        // line 53
        yield "                        <table class=\"table table-bordered table-striped table-hover sonata-ba-list\">
                        ";
        // line 54
        yield from $this->unwrap()->yieldBlock('table_header', $context, $blocks);
        // line 106
        yield "
                        ";
        // line 107
        yield from $this->unwrap()->yieldBlock('table_body', $context, $blocks);
        // line 112
        yield "
                        ";
        // line 113
        yield from $this->unwrap()->yieldBlock('table_footer', $context, $blocks);
        // line 115
        yield "                    </table>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 54
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_table_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_header"));

        // line 55
        yield "                            <thead>
                                <tr class=\"sonata-ba-list-field-header\">
                                    ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 57, $this->source); })()), "list", [], "any", false, false, false, 57), "getElements", [], "method", false, false, false, 57));
        foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
            // line 58
            yield "                                        ";
            if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 58, $this->source); })()), "hasRoute", ["batch"], "method", false, false, false, 58) && (CoreExtension::getAttribute($this->env, $this->source, $context["field_description"], "name", [], "any", false, false, false, 58) == Twig\Extension\CoreExtension::constant("Sonata\\AdminBundle\\Datagrid\\ListMapper::NAME_BATCH"))) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["batchactions"]) || array_key_exists("batchactions", $context) ? $context["batchactions"] : (function () { throw new RuntimeError('Variable "batchactions" does not exist.', 58, $this->source); })())) > 0))) {
                // line 59
                yield "                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-batch\">
                                              <input type=\"checkbox\" id=\"list_batch_checkbox\">
                                            </th>
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 62
$context["field_description"], "name", [], "any", false, false, false, 62) == Twig\Extension\CoreExtension::constant("Sonata\\AdminBundle\\Datagrid\\ListMapper::NAME_SELECT"))) {
                // line 63
                yield "                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-select\"></th>
                                        ";
            } elseif (((CoreExtension::getAttribute($this->env, $this->source,             // line 64
$context["field_description"], "name", [], "any", false, false, false, 64) == Twig\Extension\CoreExtension::constant("Sonata\\AdminBundle\\Datagrid\\ListMapper::NAME_ACTIONS")) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "request", [], "any", false, false, false, 64), "isXmlHttpRequest", [], "any", false, false, false, 64))) {
                // line 65
                yield "                                            ";
                // line 66
                yield "                                            ";
                // line 67
                yield "                                        ";
            } elseif (((CoreExtension::getAttribute($this->env, $this->source, $context["field_description"], "getOption", ["ajax_hidden"], "method", false, false, false, 67) == true) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "request", [], "any", false, false, false, 67), "isXmlHttpRequest", [], "any", false, false, false, 67))) {
                // line 68
                yield "                                            ";
                // line 69
                yield "                                        ";
            } else {
                // line 70
                yield "                                            ";
                $context["sortable"] = false;
                // line 71
                yield "                                            ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["field_description"], "option", ["sortable", false], "method", false, false, false, 71)) {
                    // line 72
                    yield "                                                ";
                    $context["sortable"] = true;
                    // line 73
                    yield "                                                ";
                    $context["sort_parameters"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 73, $this->source); })()), "datagrid", [], "any", false, false, false, 73), "sortparameters", [$context["field_description"]], "method", false, false, false, 73);
                    // line 74
                    yield "                                                ";
                    $context["current"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", [], "any", false, true, false, 74), "values", [], "any", false, true, false, 74), Twig\Extension\CoreExtension::constant("Sonata\\AdminBundle\\Datagrid\\DatagridInterface::SORT_BY"), [], "array", true, true, false, 74) && ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 75
(isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 75, $this->source); })()), "datagrid", [], "any", false, false, false, 75), "values", [], "any", false, false, false, 75), Twig\Extension\CoreExtension::constant("Sonata\\AdminBundle\\Datagrid\\DatagridInterface::SORT_BY"), [], "array", false, false, false, 75) == $context["field_description"]) || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 76
(isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 76, $this->source); })()), "datagrid", [], "any", false, false, false, 76), "values", [], "any", false, false, false, 76), Twig\Extension\CoreExtension::constant("Sonata\\AdminBundle\\Datagrid\\DatagridInterface::SORT_BY"), [], "array", false, false, false, 76), "name", [], "any", false, false, false, 76) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sort_parameters"]) || array_key_exists("sort_parameters", $context) ? $context["sort_parameters"] : (function () { throw new RuntimeError('Variable "sort_parameters" does not exist.', 76, $this->source); })()), "filter", [], "any", false, false, false, 76), Twig\Extension\CoreExtension::constant("Sonata\\AdminBundle\\Datagrid\\DatagridInterface::SORT_BY"), [], "array", false, false, false, 76))));
                    // line 77
                    yield "                                                ";
                    $context["sort_active_class"] = (((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 77, $this->source); })())) ? ("sonata-ba-list-field-order-active") : (""));
                    // line 78
                    yield "                                                ";
                    $context["sort_by"] = (((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 78, $this->source); })())) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 78, $this->source); })()), "datagrid", [], "any", false, false, false, 78), "values", [], "any", false, false, false, 78), Twig\Extension\CoreExtension::constant("Sonata\\AdminBundle\\Datagrid\\DatagridInterface::SORT_ORDER"), [], "array", false, false, false, 78)) : (CoreExtension::getAttribute($this->env, $this->source, $context["field_description"], "option", [Twig\Extension\CoreExtension::constant("Sonata\\AdminBundle\\Datagrid\\DatagridInterface::SORT_ORDER"), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sort_parameters"]) || array_key_exists("sort_parameters", $context) ? $context["sort_parameters"] : (function () { throw new RuntimeError('Variable "sort_parameters" does not exist.', 78, $this->source); })()), "filter", [], "any", false, false, false, 78), Twig\Extension\CoreExtension::constant("Sonata\\AdminBundle\\Datagrid\\DatagridInterface::SORT_ORDER"), [], "array", false, false, false, 78)], "method", false, false, false, 78)));
                    // line 79
                    yield "                                            ";
                }
                // line 80
                yield "
                                            ";
                // line 81
                $___internal_parse_37_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 82
                    yield "                                                <th class=\"sonata-ba-list-field-header-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field_description"], "type", [], "any", false, false, false, 82), "html", null, true);
                    if ((isset($context["sortable"]) || array_key_exists("sortable", $context) ? $context["sortable"] : (function () { throw new RuntimeError('Variable "sortable" does not exist.', 82, $this->source); })())) {
                        yield " sonata-ba-list-field-header-order-";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), (isset($context["sort_by"]) || array_key_exists("sort_by", $context) ? $context["sort_by"] : (function () { throw new RuntimeError('Variable "sort_by" does not exist.', 82, $this->source); })())), "html", null, true);
                        yield " ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sort_active_class"]) || array_key_exists("sort_active_class", $context) ? $context["sort_active_class"] : (function () { throw new RuntimeError('Variable "sort_active_class" does not exist.', 82, $this->source); })()), "html", null, true);
                    }
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["field_description"], "option", ["header_class"], "method", false, false, false, 82)) {
                        yield " ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field_description"], "option", ["header_class"], "method", false, false, false, 82), "html", null, true);
                    }
                    yield "\"";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["field_description"], "option", ["header_style"], "method", false, false, false, 82)) {
                        yield " style=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field_description"], "option", ["header_style"], "method", false, false, false, 82), "html", null, true);
                        yield "\"";
                    }
                    yield ">
                                                    ";
                    // line 83
                    if ((isset($context["sortable"]) || array_key_exists("sortable", $context) ? $context["sortable"] : (function () { throw new RuntimeError('Variable "sortable" does not exist.', 83, $this->source); })())) {
                        // line 84
                        yield "                                                        <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 84, $this->source); })()), "generateUrl", [((array_key_exists("action", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 84, $this->source); })()), "list")) : ("list")), Twig\Extension\CoreExtension::merge((isset($context["sort_parameters"]) || array_key_exists("sort_parameters", $context) ? $context["sort_parameters"] : (function () { throw new RuntimeError('Variable "sort_parameters" does not exist.', 84, $this->source); })()), ["_list_mode" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 84, $this->source); })()), "getListMode", [], "method", false, false, false, 84)])], "method", false, false, false, 84), "html", null, true);
                        yield "\">
                                                    ";
                    }
                    // line 86
                    yield "                                                    ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["field_description"], "getOption", ["label_icon"], "method", false, false, false, 86)) {
                        // line 87
                        yield "                                                        <span class=\"sonata-ba-list-field-header-label-icon\">
                                                            ";
                        // line 88
                        yield $this->env->getRuntime('Sonata\AdminBundle\Twig\IconRuntime')->parseIcon(CoreExtension::getAttribute($this->env, $this->source, $context["field_description"], "getOption", ["label_icon"], "method", false, false, false, 88));
                        yield "
                                                        </span>
                                                    ";
                    }
                    // line 91
                    yield "                                                    ";
                    if ( !(CoreExtension::getAttribute($this->env, $this->source, $context["field_description"], "label", [], "any", false, false, false, 91) === false)) {
                        // line 92
                        yield "                                                        ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["field_description"], "translationDomain", [], "any", false, false, false, 92) === false)) {
                            // line 93
                            yield "                                                            ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field_description"], "label", [], "any", false, false, false, 93), "html", null, true);
                            yield "
                                                        ";
                        } else {
                            // line 95
                            yield "                                                            ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["field_description"], "label", [], "any", false, false, false, 95), [], CoreExtension::getAttribute($this->env, $this->source, $context["field_description"], "translationDomain", [], "any", false, false, false, 95)), "html", null, true);
                            yield "
                                                        ";
                        }
                        // line 97
                        yield "                                                    ";
                    }
                    // line 98
                    yield "                                                    ";
                    if ((isset($context["sortable"]) || array_key_exists("sortable", $context) ? $context["sortable"] : (function () { throw new RuntimeError('Variable "sortable" does not exist.', 98, $this->source); })())) {
                        yield "</a>";
                    }
                    // line 99
                    yield "                                                </th>
                                            ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 81
                yield Twig\Extension\CoreExtension::spaceless($___internal_parse_37_);
                // line 101
                yield "                                        ";
            }
            // line 102
            yield "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field_description'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        yield "                                </tr>
                            </thead>
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 107
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_table_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_body"));

        // line 108
        yield "                            <tbody>
                                ";
        // line 109
        yield from         $this->loadTemplate($this->env->getRuntime('Sonata\AdminBundle\Twig\TemplateRegistryRuntime')->getAdminTemplate(("outer_list_rows_" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 109, $this->source); })()), "getListMode", [], "method", false, false, false, 109)), CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 109, $this->source); })()), "code", [], "any", false, false, false, 109)), "@SonataAdmin/CRUD/base_list.html.twig", 109)->unwrap()->yield($context);
        // line 110
        yield "                            </tbody>
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 113
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_table_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_footer"));

        // line 114
        yield "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 118
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_no_result_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "no_result_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "no_result_content"));

        // line 119
        yield "                        <div class=\"info-box\">
                            <span class=\"info-box-icon bg-aqua\"><i class=\"fas fa-arrow-circle-right\" aria-hidden=\"true\"></i></span>
                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("no_result", [], "SonataAdminBundle"), "html", null, true);
        yield "</span>
                                <div class=\"progress\">
                                    <div class=\"progress-bar\" style=\"width: 0%\"></div>
                                </div>
                                <div class=\"progress-description\">
                                    <ul class=\"list-unstyled\">";
        // line 128
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 128, $this->source); })()), "datagrid", [], "any", false, false, false, 128), "pager", [], "any", false, false, false, 128), "countResults", [], "method", false, false, false, 128) > 0)) {
            // line 129
            yield "<li>
                                                <a href=\"";
            // line 130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 130, $this->source); })()), "generateUrl", [((array_key_exists("action", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 130, $this->source); })()), "list")) : ("list")), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 130, $this->source); })()), "datagrid", [], "any", false, false, false, 130), "getPaginationParameters", [1], "method", false, false, false, 130)], "method", false, false, false, 130), "html", null, true);
            yield "\">";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("go_to_the_first_page", [], "SonataAdminBundle"), "html", null, true);
            // line 132
            yield "</a>
                                            </li>";
        } elseif ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 134
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 134, $this->source); })()), "request", [], "any", false, false, false, 134), "xmlHttpRequest", [], "any", false, false, false, 134)) {
            // line 135
            yield from             $this->loadTemplate($this->env->getRuntime('Sonata\AdminBundle\Twig\TemplateRegistryRuntime')->getAdminTemplate("button_create", CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 135, $this->source); })()), "code", [], "any", false, false, false, 135)), "@SonataAdmin/CRUD/base_list.html.twig", 135)->unwrap()->yield($context);
        }
        // line 137
        yield "</ul>
                                </div>
                            </div><!-- /.info-box-content -->
                        </div>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 146
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_list_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list_footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list_footer"));

        // line 147
        yield "                ";
        if ((isset($context["datagrid_has_results"]) || array_key_exists("datagrid_has_results", $context) ? $context["datagrid_has_results"] : (function () { throw new RuntimeError('Variable "datagrid_has_results" does not exist.', 147, $this->source); })())) {
            // line 148
            yield "                    <div class=\"box-footer\">
                        <div class=\"form-inline clearfix\">
                            ";
            // line 150
            if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 150, $this->source); })()), "request", [], "any", false, false, false, 150), "isXmlHttpRequest", [], "any", false, false, false, 150)) {
                // line 151
                yield "                                <div class=\"pull-left\">
                                    ";
                // line 152
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 152, $this->source); })()), "hasRoute", ["batch"], "method", false, false, false, 152) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["batchactions"]) || array_key_exists("batchactions", $context) ? $context["batchactions"] : (function () { throw new RuntimeError('Variable "batchactions" does not exist.', 152, $this->source); })())) > 0))) {
                    // line 153
                    yield "                                        ";
                    yield from $this->unwrap()->yieldBlock('batch', $context, $blocks);
                    // line 207
                    yield "                                    ";
                }
                // line 208
                yield "                                </div>

                                <div class=\"pull-right\">
                                    ";
                // line 211
                if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 211, $this->source); })()), "hasRoute", ["export"], "method", false, false, false, 211) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 211, $this->source); })()), "hasAccess", ["export"], "method", false, false, false, 211)) && Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["export_formats"]) || array_key_exists("export_formats", $context) ? $context["export_formats"] : (function () { throw new RuntimeError('Variable "export_formats" does not exist.', 211, $this->source); })())))) {
                    // line 212
                    yield "                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                                                <i class=\"fas fa-share-square\" aria-hidden=\"true\"></i>
                                                ";
                    // line 215
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_export_download", [], "SonataAdminBundle"), "html", null, true);
                    yield "
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\">
                                                ";
                    // line 219
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["export_formats"]) || array_key_exists("export_formats", $context) ? $context["export_formats"] : (function () { throw new RuntimeError('Variable "export_formats" does not exist.', 219, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["format"]) {
                        // line 220
                        yield "                                                <li>
                                                    <a href=\"";
                        // line 221
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 221, $this->source); })()), "generateUrl", ["export", (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 221, $this->source); })()), "datagrid", [], "any", false, false, false, 221), "paginationparameters", [0], "method", false, false, false, 221) + ["format" => $context["format"]])], "method", false, false, false, 221), "html", null, true);
                        yield "\">
                                                        <i class=\"fas fa-arrow-circle-o-down\" aria-hidden=\"true\"></i>
                                                        ";
                        // line 223
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("export_format_" . $context["format"]), [], "SonataAdminBundle"), "html", null, true);
                        yield "
                                                    </a>
                                                </li>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['format'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 227
                    yield "                                            </ul>
                                        </div>

                                        ";
                    // line 230
                    if ( !Twig\Extension\CoreExtension::testEmpty(                    $this->unwrap()->renderBlock("pager_results", $context, $blocks))) {
                        // line 231
                        yield "                                            &nbsp;-&nbsp;
                                        ";
                    }
                    // line 233
                    yield "                                    ";
                }
                // line 234
                yield "
                                    ";
                // line 235
                yield from $this->unwrap()->yieldBlock('pager_results', $context, $blocks);
                // line 238
                yield "                                </div>
                            ";
            }
            // line 240
            yield "                        </div>

                        ";
            // line 242
            yield from $this->unwrap()->yieldBlock('pager_links', $context, $blocks);
            // line 248
            yield "                    </div>
                ";
        }
        // line 250
        yield "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 153
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_batch(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "batch"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "batch"));

        // line 154
        yield "                                            <script>
                                                ";
        // line 155
        yield from $this->unwrap()->yieldBlock('batch_javascript', $context, $blocks);
        // line 183
        yield "                                            </script>

                                        ";
        // line 185
        yield from $this->unwrap()->yieldBlock('batch_actions', $context, $blocks);
        // line 204
        yield "
                                            <input type=\"submit\" class=\"btn btn-small btn-primary\" value=\"";
        // line 205
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn_batch", [], "SonataAdminBundle"), "html", null, true);
        yield "\">
                                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 155
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_batch_javascript(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "batch_javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "batch_javascript"));

        // line 156
        yield "                                                    jQuery(document).ready(function (\$) {
                                                        // Toggle individual checkboxes when the batch checkbox is changed
                                                        \$('#list_batch_checkbox').on('ifChanged change', function () {
                                                            var checkboxes = \$(this)
                                                                .closest('table')
                                                                .find('td.sonata-ba-list-field-batch input[type=\"checkbox\"], div.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                            ;

                                                            if (Admin.get_config('USE_ICHECK')) {
                                                                checkboxes.iCheck(\$(this).is(':checked') ? 'check' : 'uncheck');
                                                            } else {
                                                                checkboxes.prop('checked', this.checked);
                                                            }
                                                        });

                                                        // Add a CSS class to rows when they are selected
                                                        \$('td.sonata-ba-list-field-batch input[type=\"checkbox\"], div.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                            .on('ifChanged change', function () {
                                                                \$(this)
                                                                    .closest('tr, div.sonata-ba-list-field-batch')
                                                                    .toggleClass('sonata-ba-list-row-selected', \$(this).is(':checked'))
                                                                ;
                                                            })
                                                            .trigger('ifChanged')
                                                        ;
                                                    });
                                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 185
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_batch_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "batch_actions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "batch_actions"));

        // line 186
        yield "                                            <label class=\"checkbox\" for=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 186, $this->source); })()), "uniqid", [], "any", false, false, false, 186), "html", null, true);
        yield "_all_elements\">
                                                <input type=\"checkbox\" name=\"all_elements\" id=\"";
        // line 187
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 187, $this->source); })()), "uniqid", [], "any", false, false, false, 187), "html", null, true);
        yield "_all_elements\">
                                                ";
        // line 188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("all_elements", [], "SonataAdminBundle"), "html", null, true);
        yield "
                                                (";
        // line 189
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 189, $this->source); })()), "datagrid", [], "any", false, false, false, 189), "pager", [], "any", false, false, false, 189), "countResults", [], "method", false, false, false, 189), "html", null, true);
        yield ")
                                            </label>

                                            <select name=\"action\" style=\"width: auto; height: auto\" class=\"form-control\">
                                                ";
        // line 193
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["batchactions"]) || array_key_exists("batchactions", $context) ? $context["batchactions"] : (function () { throw new RuntimeError('Variable "batchactions" does not exist.', 193, $this->source); })()));
        foreach ($context['_seq'] as $context["action"] => $context["options"]) {
            // line 194
            yield "                                                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["action"], "html", null, true);
            yield "\">
                                                        ";
            // line 195
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["options"], "translation_domain", [], "any", true, true, false, 195) && (CoreExtension::getAttribute($this->env, $this->source, $context["options"], "translation_domain", [], "any", false, false, false, 195) === false))) {
                // line 196
                yield "                                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["options"], "label", [], "any", false, false, false, 196), "html", null, true);
                yield "
                                                        ";
            } else {
                // line 198
                yield "                                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["options"], "label", [], "any", false, false, false, 198), [], (((CoreExtension::getAttribute($this->env, $this->source, $context["options"], "translation_domain", [], "any", true, true, false, 198) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["options"], "translation_domain", [], "any", false, false, false, 198)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["options"], "translation_domain", [], "any", false, false, false, 198)) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 198, $this->source); })()), "translationDomain", [], "any", false, false, false, 198)))), "html", null, true);
                yield "
                                                        ";
            }
            // line 200
            yield "                                                    </option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['action'], $context['options'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 202
        yield "                                            </select>
                                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 235
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pager_results(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pager_results"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pager_results"));

        // line 236
        yield "                                        ";
        yield from         $this->loadTemplate($this->env->getRuntime('Sonata\AdminBundle\Twig\TemplateRegistryRuntime')->getAdminTemplate("pager_results", CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 236, $this->source); })()), "code", [], "any", false, false, false, 236)), "@SonataAdmin/CRUD/base_list.html.twig", 236)->unwrap()->yield($context);
        // line 237
        yield "                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 242
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pager_links(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pager_links"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pager_links"));

        // line 243
        yield "                            ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 243, $this->source); })()), "datagrid", [], "any", false, false, false, 243), "pager", [], "any", false, false, false, 243), "haveToPaginate", [], "method", false, false, false, 243)) {
            // line 244
            yield "                                <hr/>
                                ";
            // line 245
            yield from             $this->loadTemplate($this->env->getRuntime('Sonata\AdminBundle\Twig\TemplateRegistryRuntime')->getAdminTemplate("pager_links", CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 245, $this->source); })()), "code", [], "any", false, false, false, 245)), "@SonataAdmin/CRUD/base_list.html.twig", 245)->unwrap()->yield($context);
            // line 246
            yield "                            ";
        }
        // line 247
        yield "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 258
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_list_filters_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list_filters_actions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list_filters_actions"));

        // line 259
        yield "    ";
        // line 260
        yield "    ";
        $context["displayableFilters"] = Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 260, $this->source); })()), "datagrid", [], "any", false, false, false, 260), "filters", [], "any", false, false, false, 260), function ($__filter__) use ($context, $macros) { $context["filter"] = $__filter__; return  !(((CoreExtension::getAttribute($this->env, $this->source, ($context["filter"] ?? null), "showFilter", [], "any", true, true, false, 260)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filter"] ?? null), "showFilter", [], "any", false, false, false, 260), CoreExtension::getAttribute($this->env, $this->source, (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 260, $this->source); })()), "option", ["show_filter"], "method", false, false, false, 260))) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 260, $this->source); })()), "option", ["show_filter"], "method", false, false, false, 260))) === false); });
        // line 261
        if (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["displayableFilters"]) || array_key_exists("displayableFilters", $context) ? $context["displayableFilters"] : (function () { throw new RuntimeError('Variable "displayableFilters" does not exist.', 261, $this->source); })()))) {
            // line 262
            yield "        <ul class=\"nav navbar-nav navbar-right\">

            <li class=\"dropdown sonata-actions\">
                <a href=\"#\" class=\"dropdown-toggle sonata-ba-action\" data-toggle=\"dropdown\">
                    <i class=\"fas fa-filter\" aria-hidden=\"true\"></i>
                    ";
            // line 267
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("link_filters", [], "SonataAdminBundle"), "html", null, true);
            yield "
                    <span class=\"badge sonata-filter-count\"></span>
                    <b class=\"caret\"></b>
                </a>

                <ul class=\"dropdown-menu dropdown-menu-scrollable\" role=\"menu\">
                    ";
            // line 273
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["displayableFilters"]) || array_key_exists("displayableFilters", $context) ? $context["displayableFilters"] : (function () { throw new RuntimeError('Variable "displayableFilters" does not exist.', 273, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 274
                yield "                        ";
                // line 275
                yield "                        ";
                $context["filterDisplayed"] = (CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "isActive", [], "method", false, false, false, 275) || (((CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "showFilter", [], "any", true, true, false, 275)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "showFilter", [], "any", false, false, false, 275), CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "option", ["show_filter"], "method", false, false, false, 275))) : (CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "option", ["show_filter"], "method", false, false, false, 275))) === true));
                // line 276
                yield "                        <li>
                            <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-";
                // line 277
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 277, $this->source); })()), "uniqid", [], "any", false, false, false, 277), "html", null, true);
                yield "-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "name", [], "any", false, false, false, 277), "html", null, true);
                yield "\" filter-container=\"filter-container-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 277, $this->source); })()), "uniqid", [], "method", false, false, false, 277), "html", null, true);
                yield "\">
                                <i class=\"far ";
                // line 278
                yield (((isset($context["filterDisplayed"]) || array_key_exists("filterDisplayed", $context) ? $context["filterDisplayed"] : (function () { throw new RuntimeError('Variable "filterDisplayed" does not exist.', 278, $this->source); })())) ? ("fa-check-square") : ("fa-square"));
                yield "\"></i>
                                ";
                // line 279
                if ( !(CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "label", [], "any", false, false, false, 279) === false)) {
                    // line 280
                    yield "                                    ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "translationDomain", [], "any", false, false, false, 280) === false)) {
                        // line 281
                        yield "                                        ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "label", [], "any", false, false, false, 281), "html", null, true);
                        yield "
                                    ";
                    } elseif (CoreExtension::getAttribute($this->env, $this->source,                     // line 282
$context["filter"], "labelTranslationParameters", [], "any", true, true, false, 282)) {
                        // line 283
                        yield "                                        ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "label", [], "any", false, false, false, 283), CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "labelTranslationParameters", [], "any", false, false, false, 283), (((CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "translationDomain", [], "any", true, true, false, 283) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "translationDomain", [], "any", false, false, false, 283)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "translationDomain", [], "any", false, false, false, 283)) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 283, $this->source); })()), "translationDomain", [], "any", false, false, false, 283)))), "html", null, true);
                        yield "
                                    ";
                    } else {
                        // line 284
                        yield " ";
                        // line 285
                        yield "                                        ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "label", [], "any", false, false, false, 285), CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "option", ["label_translation_parameters", []], "method", false, false, false, 285), (((CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "translationDomain", [], "any", true, true, false, 285) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "translationDomain", [], "any", false, false, false, 285)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "translationDomain", [], "any", false, false, false, 285)) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 285, $this->source); })()), "translationDomain", [], "any", false, false, false, 285)))), "html", null, true);
                        yield "
                                    ";
                    }
                    // line 287
                    yield "                                ";
                }
                // line 288
                yield "                            </a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['filter'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 291
            yield "                </ul>
            </li>
        </ul>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 297
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_list_filters(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list_filters"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list_filters"));

        // line 298
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 298, $this->source); })()), "datagrid", [], "any", false, false, false, 298), "filters", [], "any", false, false, false, 298)) {
            // line 299
            yield "        ";
            $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 299, $this->source); })()), [$this->env->getRuntime('Sonata\AdminBundle\Twig\TemplateRegistryRuntime')->getAdminTemplate("filter", CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 299, $this->source); })()), "code", [], "any", false, false, false, 299))], true);
            // line 300
            yield "
        <div class=\"col-xs-12 col-md-12 sonata-filters-box\" style=\"display: ";
            // line 301
            yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 301, $this->source); })()), "datagrid", [], "any", false, false, false, 301), "hasDisplayableFilters", [], "any", false, false, false, 301)) ? ("block") : ("none"));
            yield "\" id=\"filter-container-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 301, $this->source); })()), "uniqid", [], "method", false, false, false, 301), "html", null, true);
            yield "\">
            <div class=\"box box-primary\" >
                <div class=\"box-body\">
                    <form
                        class=\"sonata-filter-form form-horizontal ";
            // line 305
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 305, $this->source); })()), "isChild", [], "any", false, false, false, 305) && (1 == Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 305, $this->source); })()), "datagrid", [], "any", false, false, false, 305), "filters", [], "any", false, false, false, 305))))) ? ("hide") : (""));
            yield "\"
                        action=\"";
            // line 306
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 306, $this->source); })()), "generateUrl", [((array_key_exists("action", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 306, $this->source); })()), "list")) : ("list"))], "method", false, false, false, 306), "html", null, true);
            yield "\"
                        method=\"GET\"
                        role=\"form\"
                        data-default-values=\"";
            // line 309
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 309, $this->source); })()), "defaultFilterParameters", [], "any", false, false, false, 309)), "html", null, true);
            yield "\"
                    >
                        ";
            // line 311
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 311, $this->source); })()), 'errors');
            yield "

                        <div class=\"row\">
                            <div class=\"col-sm-9\">
                                ";
            // line 315
            $context["withAdvancedFilter"] = false;
            // line 316
            yield "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 316, $this->source); })()), "datagrid", [], "any", false, false, false, 316), "filters", [], "any", false, false, false, 316));
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
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 317
                yield "                                    ";
                // line 318
                yield "                                    ";
                $context["filterDisplayed"] = (CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "isActive", [], "method", false, false, false, 318) || (((CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "showFilter", [], "any", true, true, false, 318)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "showFilter", [], "any", false, false, false, 318), CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "option", ["show_filter"], "method", false, false, false, 318))) : (CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "option", ["show_filter"], "method", false, false, false, 318))) === true));
                // line 319
                yield "                                    ";
                $context["filterCanBeDisplayed"] =  !(CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "option", ["show_filter"], "method", false, false, false, 319) === false);
                // line 320
                yield "                                    <div class=\"form-group ";
                yield from $this->unwrap()->yieldBlock('sonata_list_filter_group_class', $context, $blocks);
                yield "\" id=\"filter-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 320, $this->source); })()), "uniqid", [], "any", false, false, false, 320), "html", null, true);
                yield "-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "name", [], "any", false, false, false, 320), "html", null, true);
                yield "\" sonata-filter=\"";
                yield (((isset($context["filterCanBeDisplayed"]) || array_key_exists("filterCanBeDisplayed", $context) ? $context["filterCanBeDisplayed"] : (function () { throw new RuntimeError('Variable "filterCanBeDisplayed" does not exist.', 320, $this->source); })())) ? ("true") : ("false"));
                yield "\" style=\"display: ";
                if ((isset($context["filterDisplayed"]) || array_key_exists("filterDisplayed", $context) ? $context["filterDisplayed"] : (function () { throw new RuntimeError('Variable "filterDisplayed" does not exist.', 320, $this->source); })())) {
                    yield "block";
                } else {
                    yield "none";
                }
                yield "\">
                                        ";
                // line 321
                if ( !(CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "label", [], "any", false, false, false, 321) === false)) {
                    // line 322
                    yield "                                            <label for=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 322, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "formName", [], "any", false, false, false, 322), [], "array", false, false, false, 322), "children", [], "any", false, false, false, 322), "value", [], "array", false, false, false, 322), "vars", [], "any", false, false, false, 322), "id", [], "any", false, false, false, 322), "html", null, true);
                    yield "\" class=\"col-sm-3 control-label\">
                                                ";
                    // line 323
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "translationDomain", [], "any", false, false, false, 323) === false)) {
                        // line 324
                        yield "                                                    ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "label", [], "any", false, false, false, 324), "html", null, true);
                        yield "
                                                ";
                    } else {
                        // line 326
                        yield "                                                    ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "label", [], "any", false, false, false, 326), CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "option", ["label_translation_parameters", []], "method", false, false, false, 326), (((CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "translationDomain", [], "any", true, true, false, 326) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "translationDomain", [], "any", false, false, false, 326)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "translationDomain", [], "any", false, false, false, 326)) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 326, $this->source); })()), "translationDomain", [], "any", false, false, false, 326)))), "html", null, true);
                        yield "
                                                ";
                    }
                    // line 328
                    yield "                                            </label>
                                        ";
                }
                // line 330
                yield "                                        ";
                $context["attr"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "formName", [], "any", false, false, false, 330), [], "array", false, true, false, 330), "children", [], "any", false, true, false, 330), "type", [], "array", false, true, false, 330), "vars", [], "any", false, true, false, 330), "attr", [], "any", true, true, false, 330)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "formName", [], "any", false, false, false, 330), [], "array", false, true, false, 330), "children", [], "any", false, true, false, 330), "type", [], "array", false, true, false, 330), "vars", [], "any", false, true, false, 330), "attr", [], "any", false, false, false, 330), [])) : ([]));
                // line 331
                yield "
                                        <div class=\"col-sm-4 advanced-filter\">
                                            ";
                // line 333
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 333, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "formName", [], "any", false, false, false, 333), [], "array", false, false, false, 333), "children", [], "any", false, false, false, 333), "type", [], "array", false, false, false, 333), 'widget', ["attr" => (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 333, $this->source); })())]);
                yield "
                                        </div>

                                        <div class=\"col-sm-4\">
                                            ";
                // line 337
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 337, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "formName", [], "any", false, false, false, 337), [], "array", false, false, false, 337), "children", [], "any", false, false, false, 337), "value", [], "array", false, false, false, 337), 'widget');
                yield "
                                        </div>

                                        ";
                // line 340
                if ((isset($context["filterCanBeDisplayed"]) || array_key_exists("filterCanBeDisplayed", $context) ? $context["filterCanBeDisplayed"] : (function () { throw new RuntimeError('Variable "filterCanBeDisplayed" does not exist.', 340, $this->source); })())) {
                    // line 341
                    yield "                                            <div class=\"col-sm-1\">
                                                <label class=\"control-label\">
                                                    <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-";
                    // line 343
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 343, $this->source); })()), "uniqid", [], "any", false, false, false, 343), "html", null, true);
                    yield "-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "name", [], "any", false, false, false, 343), "html", null, true);
                    yield "\" filter-container=\"filter-container-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 343, $this->source); })()), "uniqid", [], "method", false, false, false, 343), "html", null, true);
                    yield "\">
                                                        <i class=\"fas fa-minus-circle\" aria-hidden=\"true\"></i>
                                                    </a>
                                                </label>
                                            </div>
                                        ";
                }
                // line 349
                yield "                                    </div>

                                    ";
                // line 352
                yield "                                    ";
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "withAdvancedFilter", [], "any", true, true, false, 352)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "withAdvancedFilter", [], "any", false, false, false, 352), CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "option", ["advanced_filter"], "method", false, false, false, 352))) : (CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "option", ["advanced_filter"], "method", false, false, false, 352)))) {
                    // line 353
                    yield "                                        ";
                    $context["withAdvancedFilter"] = true;
                    // line 354
                    yield "                                    ";
                }
                // line 355
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
            unset($context['_seq'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 356
            yield "                            </div>
                            <div class=\"col-sm-3 text-center\">
                                <input type=\"hidden\" name=\"filter[";
            // line 358
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Sonata\\AdminBundle\\Datagrid\\DatagridInterface::PAGE"), "html", null, true);
            yield "]\" id=\"filter__page\" value=\"1\">

                                ";
            // line 360
            $context["foo"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 360, $this->source); })()), Twig\Extension\CoreExtension::constant("Sonata\\AdminBundle\\Datagrid\\DatagridInterface::PAGE"), [], "array", false, false, false, 360), "setRendered", [], "method", false, false, false, 360);
            // line 361
            yield "                                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 361, $this->source); })()), 'rest');
            yield "

                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-primary\">
                                        <i class=\"fas fa-filter\" aria-hidden=\"true\"></i> ";
            // line 365
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn_filter", [], "SonataAdminBundle"), "html", null, true);
            yield "
                                    </button>

                                    <a class=\"btn btn-default\" href=\"";
            // line 368
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 368, $this->source); })()), "generateUrl", [((array_key_exists("action", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 368, $this->source); })()), "list")) : ("list")), ["filters" => "reset"]], "method", false, false, false, 368), "html", null, true);
            yield "\">
                                        ";
            // line 369
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("link_reset_filter", [], "SonataAdminBundle"), "html", null, true);
            yield "
                                    </a>
                                </div>

                                ";
            // line 373
            if ((isset($context["withAdvancedFilter"]) || array_key_exists("withAdvancedFilter", $context) ? $context["withAdvancedFilter"] : (function () { throw new RuntimeError('Variable "withAdvancedFilter" does not exist.', 373, $this->source); })())) {
                // line 374
                yield "                                    <div class=\"form-group\">
                                        <a href=\"#\" data-toggle=\"advanced-filter\">
                                            <i class=\"fas fa-cogs\" aria-hidden=\"true\"></i>
                                            ";
                // line 377
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn_advanced_filters", [], "SonataAdminBundle"), "html", null, true);
                yield "
                                        </a>
                                    </div>
                                ";
            }
            // line 381
            yield "                            </div>
                        </div>

                        ";
            // line 384
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 384, $this->source); })()), "persistentParameters", [], "any", false, false, false, 384));
            foreach ($context['_seq'] as $context["paramKey"] => $context["paramValue"]) {
                // line 385
                yield "                            <input type=\"hidden\" name=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["paramKey"], "html", null, true);
                yield "\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["paramValue"], "html", null, true);
                yield "\">
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['paramKey'], $context['paramValue'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 387
            yield "                    </form>
                </div>
            </div>
        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 320
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sonata_list_filter_group_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_list_filter_group_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_list_filter_group_class"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SonataAdmin/CRUD/base_list.html.twig";
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
        return array (  1370 => 320,  1354 => 387,  1343 => 385,  1339 => 384,  1334 => 381,  1327 => 377,  1322 => 374,  1320 => 373,  1313 => 369,  1309 => 368,  1303 => 365,  1295 => 361,  1293 => 360,  1288 => 358,  1284 => 356,  1270 => 355,  1267 => 354,  1264 => 353,  1261 => 352,  1257 => 349,  1244 => 343,  1240 => 341,  1238 => 340,  1232 => 337,  1225 => 333,  1221 => 331,  1218 => 330,  1214 => 328,  1208 => 326,  1202 => 324,  1200 => 323,  1195 => 322,  1193 => 321,  1176 => 320,  1173 => 319,  1170 => 318,  1168 => 317,  1150 => 316,  1148 => 315,  1141 => 311,  1136 => 309,  1130 => 306,  1126 => 305,  1117 => 301,  1114 => 300,  1111 => 299,  1108 => 298,  1095 => 297,  1080 => 291,  1072 => 288,  1069 => 287,  1063 => 285,  1061 => 284,  1055 => 283,  1053 => 282,  1048 => 281,  1045 => 280,  1043 => 279,  1039 => 278,  1031 => 277,  1028 => 276,  1025 => 275,  1023 => 274,  1019 => 273,  1010 => 267,  1003 => 262,  1001 => 261,  998 => 260,  996 => 259,  983 => 258,  972 => 247,  969 => 246,  967 => 245,  964 => 244,  961 => 243,  948 => 242,  937 => 237,  934 => 236,  921 => 235,  909 => 202,  902 => 200,  896 => 198,  890 => 196,  888 => 195,  883 => 194,  879 => 193,  872 => 189,  868 => 188,  864 => 187,  859 => 186,  846 => 185,  809 => 156,  796 => 155,  783 => 205,  780 => 204,  778 => 185,  774 => 183,  772 => 155,  769 => 154,  756 => 153,  745 => 250,  741 => 248,  739 => 242,  735 => 240,  731 => 238,  729 => 235,  726 => 234,  723 => 233,  719 => 231,  717 => 230,  712 => 227,  702 => 223,  697 => 221,  694 => 220,  690 => 219,  683 => 215,  678 => 212,  676 => 211,  671 => 208,  668 => 207,  665 => 153,  663 => 152,  660 => 151,  658 => 150,  654 => 148,  651 => 147,  638 => 146,  623 => 137,  620 => 135,  618 => 134,  615 => 132,  613 => 131,  610 => 130,  607 => 129,  605 => 128,  597 => 122,  592 => 119,  579 => 118,  568 => 114,  555 => 113,  543 => 110,  541 => 109,  538 => 108,  525 => 107,  512 => 103,  506 => 102,  503 => 101,  501 => 81,  496 => 99,  491 => 98,  488 => 97,  482 => 95,  476 => 93,  473 => 92,  470 => 91,  464 => 88,  461 => 87,  458 => 86,  452 => 84,  450 => 83,  429 => 82,  427 => 81,  424 => 80,  421 => 79,  418 => 78,  415 => 77,  413 => 76,  412 => 75,  410 => 74,  407 => 73,  404 => 72,  401 => 71,  398 => 70,  395 => 69,  393 => 68,  390 => 67,  388 => 66,  386 => 65,  384 => 64,  381 => 63,  379 => 62,  374 => 59,  371 => 58,  367 => 57,  363 => 55,  350 => 54,  338 => 115,  336 => 113,  333 => 112,  331 => 107,  328 => 106,  326 => 54,  323 => 53,  310 => 52,  288 => 49,  276 => 255,  272 => 253,  270 => 252,  267 => 251,  265 => 146,  260 => 144,  257 => 143,  254 => 142,  251 => 118,  248 => 117,  245 => 52,  243 => 51,  240 => 50,  238 => 49,  233 => 47,  227 => 46,  220 => 45,  217 => 43,  212 => 41,  207 => 40,  204 => 39,  202 => 38,  199 => 37,  186 => 36,  172 => 30,  159 => 29,  145 => 26,  132 => 25,  121 => 19,  108 => 18,  97 => 15,  84 => 14,  74 => 12,  72 => 34,  59 => 12,);
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

{%- block actions -%}
    {% include '@SonataAdmin/CRUD/action_buttons.html.twig' %}
{%- endblock -%}

{%- block tab_menu -%}
    {{ knp_menu_render(admin.sidemenu(action), {
        'currentClass': 'active',
        'template': get_global_template('tab_menu_template')
    }, 'twig') }}
{%- endblock -%}

{% block title %}
    {{ admin.isChild and admin.parent.subject ? 'title_edit'|trans({'%name%': admin.parent.toString(admin.parent.subject)|u.truncate(15, '...') }, 'SonataAdminBundle') : '' }}
{% endblock %}

{% block navbar_title %}
    {{ admin.isChild and admin.parent.subject ? 'title_edit'|trans({'%name%': admin.parent.toString(admin.parent.subject)|u.truncate(100, '...') }, 'SonataAdminBundle') : '' }}
{% endblock %}

{# Define the variable out of the block to prevent error if someone is overriding the list_table and not the list_footer #}
{% set datagrid_has_results = admin.datagrid.results|length > 0 %}

{% block list_table %}
    <div class=\"col-xs-12 col-md-12\">
        {% set batchactions = admin.batchactions %}
        {% if admin.hasRoute('batch') and batchactions|length %}
            <form action=\"{{ admin.generateUrl('batch', {'filter': admin.filterParameters}) }}\" method=\"POST\" >
            <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"{{ csrf_token }}\">
        {% endif %}

        {# Add a margin if no pager to prevent dropdown cropping on window #}
        <div class=\"box box-primary\"{% if admin.datagrid.pager.lastPage == 1 %} style=\"margin-bottom: 100px;\"{% endif %}>
            <div class=\"box-body{% if datagrid_has_results %} table-responsive no-padding{% endif %}\">
                {{ sonata_block_render_event('sonata.admin.list.table.top', { 'admin': admin }) }}

                {% block list_header %}{% endblock %}

                {% if datagrid_has_results %}
                    {% block table %}
                        <table class=\"table table-bordered table-striped table-hover sonata-ba-list\">
                        {% block table_header %}
                            <thead>
                                <tr class=\"sonata-ba-list-field-header\">
                                    {% for field_description in admin.list.getElements() %}
                                        {% if admin.hasRoute('batch') and field_description.name == constant('Sonata\\\\AdminBundle\\\\Datagrid\\\\ListMapper::NAME_BATCH') and batchactions|length > 0 %}
                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-batch\">
                                              <input type=\"checkbox\" id=\"list_batch_checkbox\">
                                            </th>
                                        {% elseif field_description.name == constant('Sonata\\\\AdminBundle\\\\Datagrid\\\\ListMapper::NAME_SELECT') %}
                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-select\"></th>
                                        {% elseif field_description.name == constant('Sonata\\\\AdminBundle\\\\Datagrid\\\\ListMapper::NAME_ACTIONS') and app.request.isXmlHttpRequest %}
                                            {# NEXT_MAJOR: Remove this case in version 5 and recommend using the option `ajax_hidden` instead. #}
                                            {# Action buttons disabled in ajax view! #}
                                        {% elseif field_description.getOption('ajax_hidden') == true and app.request.isXmlHttpRequest %}
                                            {# Disable fields with 'ajax_hidden' option set to true #}
                                        {% else %}
                                            {% set sortable = false %}
                                            {% if field_description.option('sortable', false) %}
                                                {% set sortable             = true %}
                                                {% set sort_parameters      = admin.datagrid.sortparameters(field_description) %}
                                                {% set current              = admin.datagrid.values[constant('Sonata\\\\AdminBundle\\\\Datagrid\\\\DatagridInterface::SORT_BY')] is defined
                                                    and (admin.datagrid.values[constant('Sonata\\\\AdminBundle\\\\Datagrid\\\\DatagridInterface::SORT_BY')] == field_description
                                                        or admin.datagrid.values[constant('Sonata\\\\AdminBundle\\\\Datagrid\\\\DatagridInterface::SORT_BY')].name == sort_parameters.filter[constant('Sonata\\\\AdminBundle\\\\Datagrid\\\\DatagridInterface::SORT_BY')]) %}
                                                {% set sort_active_class    = current ? 'sonata-ba-list-field-order-active' : '' %}
                                                {% set sort_by              = current ? admin.datagrid.values[constant('Sonata\\\\AdminBundle\\\\Datagrid\\\\DatagridInterface::SORT_ORDER')] : field_description.option(constant('Sonata\\\\AdminBundle\\\\Datagrid\\\\DatagridInterface::SORT_ORDER'), sort_parameters.filter[constant('Sonata\\\\AdminBundle\\\\Datagrid\\\\DatagridInterface::SORT_ORDER')]) %}
                                            {% endif %}

                                            {% apply spaceless %}
                                                <th class=\"sonata-ba-list-field-header-{{ field_description.type }}{% if sortable %} sonata-ba-list-field-header-order-{{ sort_by|lower }} {{ sort_active_class }}{% endif %}{% if field_description.option('header_class') %} {{ field_description.option('header_class') }}{% endif %}\"{% if field_description.option('header_style') %} style=\"{{ field_description.option('header_style') }}\"{% endif %}>
                                                    {% if sortable %}
                                                        <a href=\"{{ admin.generateUrl(action|default('list'), sort_parameters|merge({_list_mode: admin.getListMode()})) }}\">
                                                    {% endif %}
                                                    {% if field_description.getOption('label_icon') %}
                                                        <span class=\"sonata-ba-list-field-header-label-icon\">
                                                            {{ field_description.getOption('label_icon')|parse_icon }}
                                                        </span>
                                                    {% endif %}
                                                    {% if field_description.label is not same as(false) %}
                                                        {% if field_description.translationDomain is same as(false) %}
                                                            {{ field_description.label }}
                                                        {% else %}
                                                            {{ field_description.label|trans({}, field_description.translationDomain) }}
                                                        {% endif %}
                                                    {% endif %}
                                                    {% if sortable %}</a>{% endif %}
                                                </th>
                                            {% endapply %}
                                        {% endif %}
                                    {% endfor %}
                                </tr>
                            </thead>
                        {% endblock %}

                        {% block table_body %}
                            <tbody>
                                {% include get_admin_template('outer_list_rows_' ~ admin.getListMode(), admin.code) %}
                            </tbody>
                        {% endblock %}

                        {% block table_footer %}
                        {% endblock %}
                    </table>
                    {% endblock %}
                {% else %}
                    {% block no_result_content %}
                        <div class=\"info-box\">
                            <span class=\"info-box-icon bg-aqua\"><i class=\"fas fa-arrow-circle-right\" aria-hidden=\"true\"></i></span>
                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">{{ 'no_result'|trans({}, 'SonataAdminBundle') }}</span>
                                <div class=\"progress\">
                                    <div class=\"progress-bar\" style=\"width: 0%\"></div>
                                </div>
                                <div class=\"progress-description\">
                                    <ul class=\"list-unstyled\">
                                        {%- if admin.datagrid.pager.countResults() > 0 -%}
                                            <li>
                                                <a href=\"{{ admin.generateUrl(action|default('list'), admin.datagrid.getPaginationParameters(1)) }}\">
                                                    {{- 'go_to_the_first_page'|trans({}, 'SonataAdminBundle') -}}
                                                </a>
                                            </li>
                                        {%- elseif not app.request.xmlHttpRequest -%}
                                            {%- include get_admin_template('button_create', admin.code) -%}
                                        {%- endif -%}
                                    </ul>
                                </div>
                            </div><!-- /.info-box-content -->
                        </div>
                    {% endblock %}
                {% endif %}

                {{ sonata_block_render_event('sonata.admin.list.table.bottom', { 'admin': admin }) }}
            </div>
            {% block list_footer %}
                {% if datagrid_has_results %}
                    <div class=\"box-footer\">
                        <div class=\"form-inline clearfix\">
                            {% if not app.request.isXmlHttpRequest %}
                                <div class=\"pull-left\">
                                    {% if admin.hasRoute('batch') and batchactions|length > 0 %}
                                        {% block batch %}
                                            <script>
                                                {% block batch_javascript %}
                                                    jQuery(document).ready(function (\$) {
                                                        // Toggle individual checkboxes when the batch checkbox is changed
                                                        \$('#list_batch_checkbox').on('ifChanged change', function () {
                                                            var checkboxes = \$(this)
                                                                .closest('table')
                                                                .find('td.sonata-ba-list-field-batch input[type=\"checkbox\"], div.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                            ;

                                                            if (Admin.get_config('USE_ICHECK')) {
                                                                checkboxes.iCheck(\$(this).is(':checked') ? 'check' : 'uncheck');
                                                            } else {
                                                                checkboxes.prop('checked', this.checked);
                                                            }
                                                        });

                                                        // Add a CSS class to rows when they are selected
                                                        \$('td.sonata-ba-list-field-batch input[type=\"checkbox\"], div.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                            .on('ifChanged change', function () {
                                                                \$(this)
                                                                    .closest('tr, div.sonata-ba-list-field-batch')
                                                                    .toggleClass('sonata-ba-list-row-selected', \$(this).is(':checked'))
                                                                ;
                                                            })
                                                            .trigger('ifChanged')
                                                        ;
                                                    });
                                                {% endblock %}
                                            </script>

                                        {% block batch_actions %}
                                            <label class=\"checkbox\" for=\"{{ admin.uniqid }}_all_elements\">
                                                <input type=\"checkbox\" name=\"all_elements\" id=\"{{ admin.uniqid }}_all_elements\">
                                                {{ 'all_elements'|trans({}, 'SonataAdminBundle') }}
                                                ({{ admin.datagrid.pager.countResults() }})
                                            </label>

                                            <select name=\"action\" style=\"width: auto; height: auto\" class=\"form-control\">
                                                {% for action, options in batchactions %}
                                                    <option value=\"{{ action }}\">
                                                        {% if options.translation_domain is defined and options.translation_domain is same as(false) %}
                                                            {{ options.label }}
                                                        {% else %}
                                                            {{ options.label|trans({}, options.translation_domain ?? admin.translationDomain) }}
                                                        {% endif %}
                                                    </option>
                                                {% endfor %}
                                            </select>
                                        {% endblock %}

                                            <input type=\"submit\" class=\"btn btn-small btn-primary\" value=\"{{ 'btn_batch'|trans({}, 'SonataAdminBundle') }}\">
                                        {% endblock %}
                                    {% endif %}
                                </div>

                                <div class=\"pull-right\">
                                    {% if admin.hasRoute('export') and admin.hasAccess('export') and export_formats|length %}
                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                                                <i class=\"fas fa-share-square\" aria-hidden=\"true\"></i>
                                                {{ \"label_export_download\"|trans({}, \"SonataAdminBundle\") }}
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\">
                                                {% for format in export_formats %}
                                                <li>
                                                    <a href=\"{{ admin.generateUrl('export', admin.datagrid.paginationparameters(0) + {'format' : format}) }}\">
                                                        <i class=\"fas fa-arrow-circle-o-down\" aria-hidden=\"true\"></i>
                                                        {{ (\"export_format_\" ~ format)|trans({}, 'SonataAdminBundle') }}
                                                    </a>
                                                </li>
                                                {% endfor %}
                                            </ul>
                                        </div>

                                        {% if block('pager_results') is not empty %}
                                            &nbsp;-&nbsp;
                                        {% endif %}
                                    {% endif %}

                                    {% block pager_results %}
                                        {% include get_admin_template('pager_results', admin.code) %}
                                    {% endblock %}
                                </div>
                            {% endif %}
                        </div>

                        {% block pager_links %}
                            {% if admin.datagrid.pager.haveToPaginate() %}
                                <hr/>
                                {% include get_admin_template('pager_links', admin.code) %}
                            {% endif %}
                        {% endblock %}
                    </div>
                {% endif %}
            {% endblock %}
        </div>
        {% if admin.hasRoute('batch') and batchactions|length %}
            </form>
        {% endif %}
    </div>
{% endblock %}

{% block list_filters_actions %}
    {# NEXT_MAJOR: Remove |default(filter.option('show_filter')) #}
    {% set displayableFilters = admin.datagrid.filters|filter(filter => filter.showFilter|default(filter.option('show_filter')) is not same as (false)) %}
    {%- if displayableFilters|length %}
        <ul class=\"nav navbar-nav navbar-right\">

            <li class=\"dropdown sonata-actions\">
                <a href=\"#\" class=\"dropdown-toggle sonata-ba-action\" data-toggle=\"dropdown\">
                    <i class=\"fas fa-filter\" aria-hidden=\"true\"></i>
                    {{ 'link_filters'|trans({}, 'SonataAdminBundle') }}
                    <span class=\"badge sonata-filter-count\"></span>
                    <b class=\"caret\"></b>
                </a>

                <ul class=\"dropdown-menu dropdown-menu-scrollable\" role=\"menu\">
                    {% for filter in displayableFilters %}
                        {# NEXT_MAJOR: Remove |default(filter.option('show_filter')) #}
                        {% set filterDisplayed = filter.isActive() or filter.showFilter|default(filter.option('show_filter')) is same as (true) %}
                        <li>
                            <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-{{ admin.uniqid }}-{{ filter.name }}\" filter-container=\"filter-container-{{ admin.uniqid() }}\">
                                <i class=\"far {{ filterDisplayed ? 'fa-check-square' : 'fa-square' }}\"></i>
                                {% if filter.label is not same as(false) %}
                                    {% if filter.translationDomain is same as(false) %}
                                        {{ filter.label }}
                                    {% elseif filter.labelTranslationParameters is defined %}
                                        {{ filter.label|trans(filter.labelTranslationParameters, filter.translationDomain ?? admin.translationDomain) }}
                                    {% else %} {# NEXT_MAJOR: remove the else part and change elseif to else #}
                                        {{ filter.label|trans(filter.option('label_translation_parameters', {}), filter.translationDomain ?? admin.translationDomain) }}
                                    {% endif %}
                                {% endif %}
                            </a>
                        </li>
                    {% endfor %}
                </ul>
            </li>
        </ul>
    {% endif -%}
{% endblock %}

{% block list_filters %}
    {% if admin.datagrid.filters %}
        {% form_theme form get_admin_template('filter', admin.code) %}

        <div class=\"col-xs-12 col-md-12 sonata-filters-box\" style=\"display: {{ admin.datagrid.hasDisplayableFilters ? 'block' : 'none' }}\" id=\"filter-container-{{ admin.uniqid() }}\">
            <div class=\"box box-primary\" >
                <div class=\"box-body\">
                    <form
                        class=\"sonata-filter-form form-horizontal {{ admin.isChild and 1 == admin.datagrid.filters|length ? 'hide' : '' }}\"
                        action=\"{{ admin.generateUrl(action|default('list')) }}\"
                        method=\"GET\"
                        role=\"form\"
                        data-default-values=\"{{ admin.defaultFilterParameters|json_encode }}\"
                    >
                        {{ form_errors(form) }}

                        <div class=\"row\">
                            <div class=\"col-sm-9\">
                                {% set withAdvancedFilter = false %}
                                {% for filter in admin.datagrid.filters %}
                                    {# NEXT_MAJOR: Remove |default(filter.option('show_filter')) #}
                                    {% set filterDisplayed = filter.isActive() or filter.showFilter|default(filter.option('show_filter')) is same as (true) %}
                                    {% set filterCanBeDisplayed = filter.option('show_filter') is not same as(false) %}
                                    <div class=\"form-group {% block sonata_list_filter_group_class %}{% endblock %}\" id=\"filter-{{ admin.uniqid }}-{{ filter.name }}\" sonata-filter=\"{{ filterCanBeDisplayed ? 'true' : 'false' }}\" style=\"display: {% if filterDisplayed %}block{% else %}none{% endif %}\">
                                        {% if filter.label is not same as(false) %}
                                            <label for=\"{{ form[filter.formName].children['value'].vars.id }}\" class=\"col-sm-3 control-label\">
                                                {% if filter.translationDomain is same as(false) %}
                                                    {{ filter.label }}
                                                {% else %}
                                                    {{ filter.label|trans(filter.option('label_translation_parameters', {}), filter.translationDomain ?? admin.translationDomain) }}
                                                {% endif %}
                                            </label>
                                        {% endif %}
                                        {% set attr = form[filter.formName].children['type'].vars.attr|default({}) %}

                                        <div class=\"col-sm-4 advanced-filter\">
                                            {{ form_widget(form[filter.formName].children['type'], {'attr':  attr}) }}
                                        </div>

                                        <div class=\"col-sm-4\">
                                            {{ form_widget(form[filter.formName].children['value']) }}
                                        </div>

                                        {% if filterCanBeDisplayed %}
                                            <div class=\"col-sm-1\">
                                                <label class=\"control-label\">
                                                    <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-{{ admin.uniqid }}-{{ filter.name }}\" filter-container=\"filter-container-{{ admin.uniqid() }}\">
                                                        <i class=\"fas fa-minus-circle\" aria-hidden=\"true\"></i>
                                                    </a>
                                                </label>
                                            </div>
                                        {% endif %}
                                    </div>

                                    {# NEXT_MAJOR: Remove |default(filter.option('advanced_filter')) #}
                                    {% if filter.withAdvancedFilter|default(filter.option('advanced_filter')) %}
                                        {% set withAdvancedFilter = true %}
                                    {% endif %}
                                {% endfor %}
                            </div>
                            <div class=\"col-sm-3 text-center\">
                                <input type=\"hidden\" name=\"filter[{{ constant('Sonata\\\\AdminBundle\\\\Datagrid\\\\DatagridInterface::PAGE') }}]\" id=\"filter__page\" value=\"1\">

                                {% set foo = form[constant('Sonata\\\\AdminBundle\\\\Datagrid\\\\DatagridInterface::PAGE')].setRendered() %}
                                {{ form_rest(form) }}

                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-primary\">
                                        <i class=\"fas fa-filter\" aria-hidden=\"true\"></i> {{ 'btn_filter'|trans({}, 'SonataAdminBundle') }}
                                    </button>

                                    <a class=\"btn btn-default\" href=\"{{ admin.generateUrl(action|default('list'), {filters: 'reset'}) }}\">
                                        {{ 'link_reset_filter'|trans({}, 'SonataAdminBundle') }}
                                    </a>
                                </div>

                                {% if withAdvancedFilter %}
                                    <div class=\"form-group\">
                                        <a href=\"#\" data-toggle=\"advanced-filter\">
                                            <i class=\"fas fa-cogs\" aria-hidden=\"true\"></i>
                                            {{ 'btn_advanced_filters'|trans({}, 'SonataAdminBundle') }}
                                        </a>
                                    </div>
                                {% endif %}
                            </div>
                        </div>

                        {% for paramKey, paramValue in admin.persistentParameters %}
                            <input type=\"hidden\" name=\"{{ paramKey }}\" value=\"{{ paramValue }}\">
                        {% endfor %}
                    </form>
                </div>
            </div>
        </div>
    {% endif %}
{% endblock %}
", "@SonataAdmin/CRUD/base_list.html.twig", "/home/aleksandar/Desktop/Site/payment-demo/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/base_list.html.twig");
    }
}
