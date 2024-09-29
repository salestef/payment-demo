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

/* @SonataAdmin/Block/block_admin_preview.html.twig */
class __TwigTemplate_c136b80f63f251d53e1f906f1fbd39fc extends Template
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
            'block' => [$this, 'block_block'],
            'list_header' => [$this, 'block_list_header'],
            'table_header' => [$this, 'block_table_header'],
            'table_body' => [$this, 'block_table_body'],
            'table_footer' => [$this, 'block_table_footer'],
            'no_result_content' => [$this, 'block_no_result_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 12
        return $this->loadTemplate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_block"]) || array_key_exists("sonata_block", $context) ? $context["sonata_block"] : (function () { throw new RuntimeError('Variable "sonata_block" does not exist.', 12, $this->source); })()), "templates", [], "any", false, false, false, 12), "block_base", [], "any", false, false, false, 12), "@SonataAdmin/Block/block_admin_preview.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/Block/block_admin_preview.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/Block/block_admin_preview.html.twig"));

        // line 14
        $context["translation_domain"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "translation_domain", [], "any", true, true, false, 14) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "translation_domain", [], "any", false, false, false, 14)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "translation_domain", [], "any", false, false, false, 14)) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 14, $this->source); })()), "translationDomain", [], "any", false, false, false, 14)));
        // line 12
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "block"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "block"));

        // line 17
        yield "    ";
        $context["inlineAnchor"] = Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 17, $this->source); })()), "text", [], "any", false, false, false, 17), ["." => "_"]);
        // line 18
        yield "    ";
        $context["results_count"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 18, $this->source); })()), "datagrid", [], "any", false, false, false, 18), "pager", [], "any", false, false, false, 18), "countResults", [], "any", false, false, false, 18);
        // line 19
        yield "    <div class=\"box box-primary\" id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["inlineAnchor"]) || array_key_exists("inlineAnchor", $context) ? $context["inlineAnchor"] : (function () { throw new RuntimeError('Variable "inlineAnchor" does not exist.', 19, $this->source); })()), "html", null, true);
        yield "\">
        <div class=\"box-header with-border\">
            ";
        // line 21
        yield $this->env->getRuntime('Sonata\AdminBundle\Twig\IconRuntime')->parseIcon(((CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "icon", [], "any", true, true, false, 21)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "icon", [], "any", false, false, false, 21), "")) : ("")));
        yield "
            <h3 class=\"box-title\">
                <a href=\"#";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["inlineAnchor"]) || array_key_exists("inlineAnchor", $context) ? $context["inlineAnchor"] : (function () { throw new RuntimeError('Variable "inlineAnchor" does not exist.', 23, $this->source); })()), "html", null, true);
        yield "\">
                    ";
        // line 24
        if (((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 24, $this->source); })()) === false)) {
            // line 25
            yield "                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 25, $this->source); })()), "text", [], "any", false, false, false, 25), "html", null, true);
            yield "
                    ";
        } else {
            // line 27
            yield "                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 27, $this->source); })()), "text", [], "any", false, false, false, 27), [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 27, $this->source); })())), "html", null, true);
            yield "
                    ";
        }
        // line 29
        yield "                </a>
            </h3>
        </div>
        <div class=\"box-body ";
        // line 32
        if (((isset($context["results_count"]) || array_key_exists("results_count", $context) ? $context["results_count"] : (function () { throw new RuntimeError('Variable "results_count" does not exist.', 32, $this->source); })()) > 0)) {
            yield "table-responsive no-padding";
        }
        yield "\">
            ";
        // line 33
        yield $this->env->getRuntime('Sonata\BlockBundle\Templating\Helper\BlockHelper')->renderEvent("sonata.admin.list.table.top", ["admin" => (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 33, $this->source); })())]);
        yield "

            ";
        // line 35
        yield from $this->unwrap()->yieldBlock('list_header', $context, $blocks);
        // line 36
        yield "
            ";
        // line 37
        if (((isset($context["results_count"]) || array_key_exists("results_count", $context) ? $context["results_count"] : (function () { throw new RuntimeError('Variable "results_count" does not exist.', 37, $this->source); })()) > 0)) {
            // line 38
            yield "                <table class=\"table table-bordered table-striped table-hover sonata-ba-list\">
                    ";
            // line 39
            yield from $this->unwrap()->yieldBlock('table_header', $context, $blocks);
            // line 65
            yield "
                    ";
            // line 66
            yield from $this->unwrap()->yieldBlock('table_body', $context, $blocks);
            // line 71
            yield "
                    ";
            // line 72
            yield from $this->unwrap()->yieldBlock('table_footer', $context, $blocks);
            // line 74
            yield "                </table>
                <div class=\"box-footer\">
                    ";
            // line 76
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 76, $this->source); })()), "hasAccess", ["list"], "method", false, false, false, 76)) {
                // line 77
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 77, $this->source); })()), "generateUrl", ["list", ["filter" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 77, $this->source); })()), "filters", [], "any", false, false, false, 77)]], "method", false, false, false, 77), "html", null, true);
                yield "\" class=\"btn btn-primary btn-block\">
                            <i class=\"fas fa-list\" aria-hidden=\"true\"></i> ";
                // line 78
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("preview_view_more", [], "SonataAdminBundle"), "html", null, true);
                yield "
                        </a>
                    ";
            }
            // line 81
            yield "                </div>
            ";
        } else {
            // line 83
            yield "                ";
            yield from $this->unwrap()->yieldBlock('no_result_content', $context, $blocks);
            // line 90
            yield "            ";
        }
        // line 91
        yield "
            ";
        // line 92
        yield $this->env->getRuntime('Sonata\BlockBundle\Templating\Helper\BlockHelper')->renderEvent("sonata.admin.list.table.bottom", ["admin" => (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 92, $this->source); })())]);
        yield "
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 35
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

    // line 39
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

        // line 40
        yield "                        <thead>
                            <tr class=\"sonata-ba-list-field-header\">
                                ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 42, $this->source); })()), "list", [], "any", false, false, false, 42), "getElements", [], "method", false, false, false, 42));
        foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
            // line 43
            yield "                                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["field_description"], "name", [], "any", false, false, false, 43) == Twig\Extension\CoreExtension::constant("Sonata\\AdminBundle\\Datagrid\\ListMapper::NAME_SELECT"))) {
                // line 44
                yield "                                        <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-select\"></th>
                                    ";
            } else {
                // line 46
                yield "                                        ";
                $___internal_parse_1_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 47
                    yield "                                            <th class=\"sonata-ba-list-field-header-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field_description"], "type", [], "any", false, false, false, 47), "html", null, true);
                    yield " ";
                    if ( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["field_description"], "option", ["header_class"], "method", false, false, false, 47))) {
                        yield " ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field_description"], "option", ["header_class"], "method", false, false, false, 47), "html", null, true);
                    }
                    yield "\"";
                    if ( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["field_description"], "option", ["header_style"], "method", false, false, false, 47))) {
                        yield " style=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field_description"], "option", ["header_style"], "method", false, false, false, 47), "html", null, true);
                        yield "\"";
                    }
                    yield ">
                                                ";
                    // line 48
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["field_description"], "option", ["label_icon"], "method", false, false, false, 48)) {
                        // line 49
                        yield "                                                    <span class=\"sonata-ba-list-field-header-label-icon\">
                                                        ";
                        // line 50
                        yield $this->env->getRuntime('Sonata\AdminBundle\Twig\IconRuntime')->parseIcon(CoreExtension::getAttribute($this->env, $this->source, $context["field_description"], "option", ["label_icon"], "method", false, false, false, 50));
                        yield "
                                                    </span>
                                                ";
                    }
                    // line 53
                    yield "                                                ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["field_description"], "translationDomain", [], "any", false, false, false, 53) === false)) {
                        // line 54
                        yield "                                                    ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field_description"], "label", [], "any", false, false, false, 54), "html", null, true);
                        yield "
                                                ";
                    } else {
                        // line 56
                        yield "                                                    ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["field_description"], "label", [], "any", false, false, false, 56), [], CoreExtension::getAttribute($this->env, $this->source, $context["field_description"], "translationDomain", [], "any", false, false, false, 56)), "html", null, true);
                        yield "
                                                ";
                    }
                    // line 58
                    yield "                                            </th>
                                        ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 46
                yield Twig\Extension\CoreExtension::spaceless($___internal_parse_1_);
                // line 60
                yield "                                    ";
            }
            // line 61
            yield "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field_description'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        yield "                            </tr>
                        </thead>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 66
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

        // line 67
        yield "                        <tbody>
                            ";
        // line 68
        yield from         $this->loadTemplate($this->env->getRuntime('Sonata\AdminBundle\Twig\TemplateRegistryRuntime')->getAdminTemplate(("outer_list_rows_" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 68, $this->source); })()), "getListMode", [], "method", false, false, false, 68)), CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 68, $this->source); })()), "code", [], "any", false, false, false, 68)), "@SonataAdmin/Block/block_admin_preview.html.twig", 68)->unwrap()->yield($context);
        // line 69
        yield "                        </tbody>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 72
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

        // line 73
        yield "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 83
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

        // line 84
        yield "                    <div class=\"info-box\">
                        <div class=\"info-box\">
                            <span class=\"info-box-text\">";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("no_result", [], "SonataAdminBundle"), "html", null, true);
        yield "</span>
                        </div><!-- /.info-box-content -->
                    </div>
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
        return "@SonataAdmin/Block/block_admin_preview.html.twig";
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
        return array (  396 => 86,  392 => 84,  379 => 83,  368 => 73,  355 => 72,  343 => 69,  341 => 68,  338 => 67,  325 => 66,  312 => 62,  306 => 61,  303 => 60,  301 => 46,  296 => 58,  290 => 56,  284 => 54,  281 => 53,  275 => 50,  272 => 49,  270 => 48,  254 => 47,  251 => 46,  247 => 44,  244 => 43,  240 => 42,  236 => 40,  223 => 39,  201 => 35,  186 => 92,  183 => 91,  180 => 90,  177 => 83,  173 => 81,  167 => 78,  162 => 77,  160 => 76,  156 => 74,  154 => 72,  151 => 71,  149 => 66,  146 => 65,  144 => 39,  141 => 38,  139 => 37,  136 => 36,  134 => 35,  129 => 33,  123 => 32,  118 => 29,  112 => 27,  106 => 25,  104 => 24,  100 => 23,  95 => 21,  89 => 19,  86 => 18,  83 => 17,  70 => 16,  60 => 12,  58 => 14,  45 => 12,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends sonata_block.templates.block_base %}

{% set translation_domain = settings.translation_domain ?? admin.translationDomain %}

{% block block %}
    {% set inlineAnchor = settings.text|replace({'.':'_'}) %}
    {% set results_count = admin.datagrid.pager.countResults %}
    <div class=\"box box-primary\" id=\"{{ inlineAnchor }}\">
        <div class=\"box-header with-border\">
            {{ settings.icon|default('')|parse_icon }}
            <h3 class=\"box-title\">
                <a href=\"#{{ inlineAnchor }}\">
                    {% if translation_domain is same as(false) %}
                        {{ settings.text }}
                    {% else %}
                        {{ settings.text|trans({}, translation_domain) }}
                    {% endif %}
                </a>
            </h3>
        </div>
        <div class=\"box-body {% if results_count > 0 %}table-responsive no-padding{% endif %}\">
            {{ sonata_block_render_event('sonata.admin.list.table.top', { 'admin': admin }) }}

            {% block list_header %}{% endblock %}

            {% if results_count > 0 %}
                <table class=\"table table-bordered table-striped table-hover sonata-ba-list\">
                    {% block table_header %}
                        <thead>
                            <tr class=\"sonata-ba-list-field-header\">
                                {% for field_description in admin.list.getElements() %}
                                    {% if field_description.name == constant('Sonata\\\\AdminBundle\\\\Datagrid\\\\ListMapper::NAME_SELECT') %}
                                        <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-select\"></th>
                                    {% else %}
                                        {% apply spaceless %}
                                            <th class=\"sonata-ba-list-field-header-{{ field_description.type}} {% if field_description.option('header_class') is not null %} {{ field_description.option('header_class') }}{% endif %}\"{% if field_description.option('header_style') is not null %} style=\"{{ field_description.option('header_style') }}\"{% endif %}>
                                                {% if field_description.option('label_icon') %}
                                                    <span class=\"sonata-ba-list-field-header-label-icon\">
                                                        {{ field_description.option('label_icon')|parse_icon }}
                                                    </span>
                                                {% endif %}
                                                {% if field_description.translationDomain is same as(false) %}
                                                    {{ field_description.label }}
                                                {% else %}
                                                    {{ field_description.label|trans({}, field_description.translationDomain) }}
                                                {% endif %}
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
                <div class=\"box-footer\">
                    {% if admin.hasAccess('list') %}
                        <a href=\"{{ admin.generateUrl('list', {filter: settings.filters}) }}\" class=\"btn btn-primary btn-block\">
                            <i class=\"fas fa-list\" aria-hidden=\"true\"></i> {{ 'preview_view_more'|trans({}, 'SonataAdminBundle') }}
                        </a>
                    {% endif %}
                </div>
            {% else %}
                {% block no_result_content %}
                    <div class=\"info-box\">
                        <div class=\"info-box\">
                            <span class=\"info-box-text\">{{ 'no_result'|trans({}, 'SonataAdminBundle') }}</span>
                        </div><!-- /.info-box-content -->
                    </div>
                {% endblock %}
            {% endif %}

            {{ sonata_block_render_event('sonata.admin.list.table.bottom', { 'admin': admin }) }}
        </div>
    </div>
{% endblock %}
", "@SonataAdmin/Block/block_admin_preview.html.twig", "/home/aleksandar/Desktop/Site/payment-demo/vendor/sonata-project/admin-bundle/src/Resources/views/Block/block_admin_preview.html.twig");
    }
}
