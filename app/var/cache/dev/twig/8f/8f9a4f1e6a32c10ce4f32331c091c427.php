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

/* @SonataAdmin/CRUD/Association/edit_many_to_many.html.twig */
class __TwigTemplate_92d194a0f7e2daa131a8f6f94617fbd9 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/Association/edit_many_to_many.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/Association/edit_many_to_many.html.twig"));

        // line 11
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 11, $this->source); })()), "field_description", [], "any", false, false, false, 11), "hasassociationadmin", [], "any", false, false, false, 11)) {
            // line 12
            yield "    <div id=\"field_container_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 12, $this->source); })()), "html", null, true);
            yield "\" class=\"field-container\">
        <span id=\"field_widget_";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 13, $this->source); })()), "html", null, true);
            yield "\" >
            ";
            // line 14
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 14, $this->source); })()), "edit", [], "any", false, false, false, 14) == "inline")) {
                // line 15
                yield "                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 15, $this->source); })()), "inline", [], "any", false, false, false, 15) == "table")) {
                    // line 16
                    yield "                    ";
                    if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "children", [], "any", false, false, false, 16)) > 0)) {
                        // line 17
                        yield "                        <table class=\"table table-bordered\">
                            <thead>
                                <tr>
                                    ";
                        // line 20
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "children", [], "any", false, false, false, 20)), "children", [], "any", false, false, false, 20));
                        foreach ($context['_seq'] as $context["field_name"] => $context["nested_field"]) {
                            // line 21
                            yield "                                        ";
                            if (($context["field_name"] == "_delete")) {
                                // line 22
                                yield "                                            <th>";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action_delete", [], "SonataAdminBundle"), "html", null, true);
                                yield "</th>
                                        ";
                            } else {
                                // line 24
                                yield "                                            <th
                                                ";
                                // line 25
                                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, true, false, 25), "required", [], "array", true, true, false, 25)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, true, false, 25), "required", [], "array", false, false, false, 25), false)) : (false))) {
                                    // line 26
                                    yield "                                                    class=\"required\"
                                                ";
                                }
                                // line 28
                                yield "                                            >
                                                ";
                                // line 29
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, false, false, 29), "label", [], "any", false, false, false, 29), [], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, false, false, 29), "sonata_admin", [], "array", false, false, false, 29), "admin", [], "any", false, false, false, 29), "translationDomain", [], "any", false, false, false, 29)), "html", null, true);
                                yield "
                                            </th>
                                        ";
                            }
                            // line 32
                            yield "                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['field_name'], $context['nested_field'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 33
                        yield "                                </tr>
                            </thead>
                            <tbody class=\"sonata-ba-tbody\">
                                ";
                        // line 36
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "children", [], "any", false, false, false, 36));
                        foreach ($context['_seq'] as $context["nested_group_field_name"] => $context["nested_group_field"]) {
                            // line 37
                            yield "                                    <tr>
                                        ";
                            // line 38
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["nested_group_field"], "children", [], "any", false, false, false, 38));
                            foreach ($context['_seq'] as $context["field_name"] => $context["nested_field"]) {
                                // line 39
                                yield "                                            <td
                                                class=\"sonata-ba-td-";
                                // line 40
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 40, $this->source); })()), "html", null, true);
                                yield "-";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["field_name"], "html", null, true);
                                yield " form-group control-group
                                                ";
                                // line 41
                                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, true, false, 41), "errors", [], "any", true, true, false, 41)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, true, false, 41), "errors", [], "any", false, false, false, 41), false)) : (false))) {
                                    yield " error has-error sonata-ba-field-error";
                                }
                                yield "\"
                                            >
                                                ";
                                // line 43
                                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, true, false, 43), "associationadmin", [], "any", false, true, false, 43), "hasformfielddescriptions", [$context["field_name"]], "method", true, true, false, 43)) {
                                    // line 44
                                    yield "                                                    ";
                                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["nested_field"], 'widget');
                                    yield "

                                                    ";
                                    // line 46
                                    $context["dummy"] = CoreExtension::getAttribute($this->env, $this->source, $context["nested_group_field"], "setrendered", [], "any", false, false, false, 46);
                                    // line 47
                                    yield "                                                ";
                                } else {
                                    // line 48
                                    yield "                                                    ";
                                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["nested_field"], 'widget');
                                    yield "
                                                ";
                                }
                                // line 50
                                yield "                                                ";
                                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, true, false, 50), "errors", [], "any", true, true, false, 50)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, true, false, 50), "errors", [], "any", false, false, false, 50), false)) : (false))) {
                                    // line 51
                                    yield "                                                    <div class=\"help-block help-inline sonata-ba-field-error-messages\">
                                                        ";
                                    // line 52
                                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["nested_field"], 'errors');
                                    yield "
                                                    </div>
                                                ";
                                }
                                // line 55
                                yield "                                            </td>
                                        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['field_name'], $context['nested_field'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 57
                            yield "                                    </tr>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['nested_group_field_name'], $context['nested_group_field'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 59
                        yield "                            </tbody>
                        </table>
                    ";
                    }
                    // line 62
                    yield "                ";
                } elseif ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "children", [], "any", false, false, false, 62)) > 0)) {
                    // line 63
                    yield "                    <div>
                        ";
                    // line 64
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "children", [], "any", false, false, false, 64));
                    foreach ($context['_seq'] as $context["nested_group_field_name"] => $context["nested_group_field"]) {
                        // line 65
                        yield "                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["nested_group_field"], "children", [], "any", false, false, false, 65));
                        foreach ($context['_seq'] as $context["field_name"] => $context["nested_field"]) {
                            // line 66
                            yield "                                ";
                            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, true, false, 66), "associationadmin", [], "any", false, true, false, 66), "hasformfielddescriptions", [$context["field_name"]], "method", true, true, false, 66)) {
                                // line 67
                                yield "                                    ";
                                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["nested_field"], 'row');
                                yield "
                                    ";
                                // line 68
                                $context["dummy"] = CoreExtension::getAttribute($this->env, $this->source, $context["nested_group_field"], "setrendered", [], "any", false, false, false, 68);
                                // line 69
                                yield "                                ";
                            } else {
                                // line 70
                                yield "                                    ";
                                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, false, false, 70), "name", [], "any", false, false, false, 70) == "_delete")) {
                                    // line 71
                                    yield "                                        ";
                                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["nested_field"], 'row', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action_delete", [], "SonataAdminBundle")]);
                                    yield "
                                    ";
                                } else {
                                    // line 73
                                    yield "                                        ";
                                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["nested_field"], 'row');
                                    yield "
                                    ";
                                }
                                // line 75
                                yield "                                ";
                            }
                            // line 76
                            yield "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['field_name'], $context['nested_field'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 77
                        yield "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['nested_group_field_name'], $context['nested_group_field'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 78
                    yield "                    </div>
                ";
                }
                // line 80
                yield "            ";
            } else {
                // line 81
                yield "                ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), 'widget');
                yield "
            ";
            }
            // line 83
            yield "
        </span>

        ";
            // line 86
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 86, $this->source); })()), "edit", [], "any", false, false, false, 86) == "inline")) {
                // line 87
                yield "
            ";
                // line 88
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 88, $this->source); })()), "field_description", [], "any", false, false, false, 88), "associationadmin", [], "any", false, false, false, 88), "hasRoute", ["create"], "method", false, false, false, 88) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 89
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 89, $this->source); })()), "field_description", [], "any", false, false, false, 89), "associationadmin", [], "any", false, false, false, 89), "hasAccess", ["create"], "method", false, false, false, 89)) &&                 // line 90
(isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new RuntimeError('Variable "btn_add" does not exist.', 90, $this->source); })()))) {
                    // line 91
                    yield "                <span id=\"field_actions_";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 91, $this->source); })()), "html", null, true);
                    yield "\" >
                    <a
                        href=\"";
                    // line 93
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 93, $this->source); })()), "field_description", [], "any", false, false, false, 93), "associationadmin", [], "any", false, false, false, 93), "generateUrl", ["create", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 93, $this->source); })()), "field_description", [], "any", false, false, false, 93), "getOption", ["link_parameters", []], "method", false, false, false, 93)], "method", false, false, false, 93), "html", null, true);
                    yield "\"
                        onclick=\"return start_field_retrieve_";
                    // line 94
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 94, $this->source); })()), "html", null, true);
                    yield "(this);\"
                        class=\"btn btn-success btn-sm sonata-ba-action\"
                        ";
                    // line 97
                    yield "                        title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((((                    // line 98
array_key_exists("btn_translation_domain", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 98, $this->source); })()), null)) : (null)) === false)) ? (                    // line 99
(isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new RuntimeError('Variable "btn_add" does not exist.', 99, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(                    // line 100
(isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new RuntimeError('Variable "btn_add" does not exist.', 100, $this->source); })()), [], ((array_key_exists("btn_translation_domain", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 100, $this->source); })()), (isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 100, $this->source); })()))) : ((isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 100, $this->source); })())))))), "html", null, true);
                    // line 101
                    yield "\"
                        >
                        <i class=\"fas fa-plus-circle\"></i>
                        ";
                    // line 105
                    yield "                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((((                    // line 106
array_key_exists("btn_translation_domain", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 106, $this->source); })()), null)) : (null)) === false)) ? (                    // line 107
(isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new RuntimeError('Variable "btn_add" does not exist.', 107, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(                    // line 108
(isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new RuntimeError('Variable "btn_add" does not exist.', 108, $this->source); })()), [], ((array_key_exists("btn_translation_domain", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 108, $this->source); })()), (isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 108, $this->source); })()))) : ((isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 108, $this->source); })())))))), "html", null, true);
                    // line 109
                    yield "
                    </a>
                </span>
            ";
                }
                // line 113
                yield "
            ";
                // line 115
                yield "            ";
                yield from                 $this->loadTemplate("@SonataAdmin/CRUD/Association/edit_one_script.html.twig", "@SonataAdmin/CRUD/Association/edit_many_to_many.html.twig", 115)->unwrap()->yield($context);
                // line 116
                yield "
        ";
            } else {
                // line 118
                yield "            <span id=\"field_actions_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 118, $this->source); })()), "html", null, true);
                yield "\" class=\"field-actions\">
                ";
                // line 119
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 119, $this->source); })()), "field_description", [], "any", false, false, false, 119), "associationadmin", [], "any", false, false, false, 119), "hasRoute", ["create"], "method", false, false, false, 119) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 120
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 120, $this->source); })()), "field_description", [], "any", false, false, false, 120), "associationadmin", [], "any", false, false, false, 120), "hasAccess", ["create"], "method", false, false, false, 120)) &&                 // line 121
(isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new RuntimeError('Variable "btn_add" does not exist.', 121, $this->source); })()))) {
                    // line 122
                    yield "                    <a
                        href=\"";
                    // line 123
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 123, $this->source); })()), "field_description", [], "any", false, false, false, 123), "associationadmin", [], "any", false, false, false, 123), "generateUrl", ["create", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 123, $this->source); })()), "field_description", [], "any", false, false, false, 123), "getOption", ["link_parameters", []], "method", false, false, false, 123)], "method", false, false, false, 123), "html", null, true);
                    yield "\"
                        onclick=\"return start_field_dialog_form_add_";
                    // line 124
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 124, $this->source); })()), "html", null, true);
                    yield "(this);\"
                        class=\"btn btn-success btn-sm sonata-ba-action\"
                        ";
                    // line 127
                    yield "                        title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((((                    // line 128
array_key_exists("btn_translation_domain", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 128, $this->source); })()), null)) : (null)) === false)) ? (                    // line 129
(isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new RuntimeError('Variable "btn_add" does not exist.', 129, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(                    // line 130
(isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new RuntimeError('Variable "btn_add" does not exist.', 130, $this->source); })()), [], ((array_key_exists("btn_translation_domain", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 130, $this->source); })()), (isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 130, $this->source); })()))) : ((isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 130, $this->source); })())))))), "html", null, true);
                    // line 131
                    yield "\"
                        >
                        <i class=\"fas fa-plus-circle\"></i>
                        ";
                    // line 135
                    yield "                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((((                    // line 136
array_key_exists("btn_translation_domain", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 136, $this->source); })()), null)) : (null)) === false)) ? (                    // line 137
(isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new RuntimeError('Variable "btn_add" does not exist.', 137, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(                    // line 138
(isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new RuntimeError('Variable "btn_add" does not exist.', 138, $this->source); })()), [], ((array_key_exists("btn_translation_domain", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 138, $this->source); })()), (isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 138, $this->source); })()))) : ((isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 138, $this->source); })())))))), "html", null, true);
                    // line 139
                    yield "
                    </a>
                    ";
                    // line 141
                    yield from                     $this->loadTemplate("@SonataAdmin/CRUD/Association/edit_modal.html.twig", "@SonataAdmin/CRUD/Association/edit_many_to_many.html.twig", 141)->unwrap()->yield($context);
                    // line 142
                    yield "                    ";
                    yield from                     $this->loadTemplate("@SonataAdmin/CRUD/Association/edit_many_script.html.twig", "@SonataAdmin/CRUD/Association/edit_many_to_many.html.twig", 142)->unwrap()->yield($context);
                    // line 143
                    yield "                ";
                }
                // line 144
                yield "            </span>
        ";
            }
            // line 146
            yield "    </div>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SonataAdmin/CRUD/Association/edit_many_to_many.html.twig";
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
        return array (  378 => 146,  374 => 144,  371 => 143,  368 => 142,  366 => 141,  362 => 139,  360 => 138,  359 => 137,  358 => 136,  356 => 135,  351 => 131,  349 => 130,  348 => 129,  347 => 128,  345 => 127,  340 => 124,  336 => 123,  333 => 122,  331 => 121,  330 => 120,  329 => 119,  324 => 118,  320 => 116,  317 => 115,  314 => 113,  308 => 109,  306 => 108,  305 => 107,  304 => 106,  302 => 105,  297 => 101,  295 => 100,  294 => 99,  293 => 98,  291 => 97,  286 => 94,  282 => 93,  276 => 91,  274 => 90,  273 => 89,  272 => 88,  269 => 87,  267 => 86,  262 => 83,  256 => 81,  253 => 80,  249 => 78,  243 => 77,  237 => 76,  234 => 75,  228 => 73,  222 => 71,  219 => 70,  216 => 69,  214 => 68,  209 => 67,  206 => 66,  201 => 65,  197 => 64,  194 => 63,  191 => 62,  186 => 59,  179 => 57,  172 => 55,  166 => 52,  163 => 51,  160 => 50,  154 => 48,  151 => 47,  149 => 46,  143 => 44,  141 => 43,  134 => 41,  128 => 40,  125 => 39,  121 => 38,  118 => 37,  114 => 36,  109 => 33,  103 => 32,  97 => 29,  94 => 28,  90 => 26,  88 => 25,  85 => 24,  79 => 22,  76 => 21,  72 => 20,  67 => 17,  64 => 16,  61 => 15,  59 => 14,  55 => 13,  50 => 12,  48 => 11,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
{% if sonata_admin.field_description.hasassociationadmin %}
    <div id=\"field_container_{{ id }}\" class=\"field-container\">
        <span id=\"field_widget_{{ id }}\" >
            {% if sonata_admin.edit == 'inline' %}
                {% if sonata_admin.inline == 'table' %}
                    {% if form.children|length > 0 %}
                        <table class=\"table table-bordered\">
                            <thead>
                                <tr>
                                    {% for field_name, nested_field in (form.children|first).children %}
                                        {% if field_name == '_delete' %}
                                            <th>{{ 'action_delete'|trans({}, 'SonataAdminBundle') }}</th>
                                        {% else %}
                                            <th
                                                {% if nested_field.vars['required']|default(false) %}
                                                    class=\"required\"
                                                {% endif %}
                                            >
                                                {{ nested_field.vars.label|trans({}, nested_field.vars['sonata_admin'].admin.translationDomain) }}
                                            </th>
                                        {% endif %}
                                    {% endfor %}
                                </tr>
                            </thead>
                            <tbody class=\"sonata-ba-tbody\">
                                {% for nested_group_field_name, nested_group_field in form.children %}
                                    <tr>
                                        {% for field_name, nested_field in nested_group_field.children %}
                                            <td
                                                class=\"sonata-ba-td-{{ id }}-{{ field_name }} form-group control-group
                                                {% if nested_field.vars.errors|default(false) %} error has-error sonata-ba-field-error{% endif %}\"
                                            >
                                                {% if sonata_admin.field_description.associationadmin.hasformfielddescriptions(field_name) is defined %}
                                                    {{ form_widget(nested_field) }}

                                                    {% set dummy = nested_group_field.setrendered %}
                                                {% else %}
                                                    {{ form_widget(nested_field) }}
                                                {% endif %}
                                                {% if nested_field.vars.errors|default(false) %}
                                                    <div class=\"help-block help-inline sonata-ba-field-error-messages\">
                                                        {{ form_errors(nested_field) }}
                                                    </div>
                                                {% endif %}
                                            </td>
                                        {% endfor %}
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    {% endif %}
                {% elseif form.children|length > 0 %}
                    <div>
                        {% for nested_group_field_name, nested_group_field in form.children %}
                            {% for field_name, nested_field in nested_group_field.children %}
                                {% if sonata_admin.field_description.associationadmin.hasformfielddescriptions(field_name) is defined %}
                                    {{ form_row(nested_field) }}
                                    {% set dummy = nested_group_field.setrendered %}
                                {% else %}
                                    {% if nested_field.vars.name == '_delete' %}
                                        {{ form_row(nested_field, { 'label': ('action_delete'|trans({}, 'SonataAdminBundle')) }) }}
                                    {% else %}
                                        {{ form_row(nested_field) }}
                                    {% endif %}
                                {% endif %}
                            {% endfor %}
                        {% endfor %}
                    </div>
                {% endif %}
            {% else %}
                {{ form_widget(form) }}
            {% endif %}

        </span>

        {% if sonata_admin.edit == 'inline' %}

            {% if sonata_admin.field_description.associationadmin.hasRoute('create')
                and sonata_admin.field_description.associationadmin.hasAccess('create')
                and btn_add %}
                <span id=\"field_actions_{{ id }}\" >
                    <a
                        href=\"{{ sonata_admin.field_description.associationadmin.generateUrl('create', sonata_admin.field_description.getOption('link_parameters', {})) }}\"
                        onclick=\"return start_field_retrieve_{{ id }}(this);\"
                        class=\"btn btn-success btn-sm sonata-ba-action\"
                        {# NEXT_MAJOR: Remove the fallback on null and on btn_catalogue #}
                        title=\"{{
                            btn_translation_domain|default(null) is same as(false)
                            ? btn_add
                            : btn_add|trans({}, btn_translation_domain|default(btn_catalogue))
                        }}\"
                        >
                        <i class=\"fas fa-plus-circle\"></i>
                        {# NEXT_MAJOR: Remove the fallback on null and on btn_catalogue #}
                        {{
                            btn_translation_domain|default(null) is same as(false)
                            ? btn_add
                            : btn_add|trans({}, btn_translation_domain|default(btn_catalogue))
                        }}
                    </a>
                </span>
            {% endif %}

            {# include association code #}
            {% include '@SonataAdmin/CRUD/Association/edit_one_script.html.twig' %}

        {% else %}
            <span id=\"field_actions_{{ id }}\" class=\"field-actions\">
                {% if sonata_admin.field_description.associationadmin.hasRoute('create')
                    and sonata_admin.field_description.associationadmin.hasAccess('create')
                    and btn_add %}
                    <a
                        href=\"{{ sonata_admin.field_description.associationadmin.generateUrl('create', sonata_admin.field_description.getOption('link_parameters', {})) }}\"
                        onclick=\"return start_field_dialog_form_add_{{ id }}(this);\"
                        class=\"btn btn-success btn-sm sonata-ba-action\"
                        {# NEXT_MAJOR: Remove the fallback on null and on btn_catalogue #}
                        title=\"{{
                            btn_translation_domain|default(null) is same as(false)
                            ? btn_add
                            : btn_add|trans({}, btn_translation_domain|default(btn_catalogue))
                        }}\"
                        >
                        <i class=\"fas fa-plus-circle\"></i>
                        {# NEXT_MAJOR: Remove the fallback on null and on btn_catalogue #}
                        {{
                            btn_translation_domain|default(null) is same as(false)
                            ? btn_add
                            : btn_add|trans({}, btn_translation_domain|default(btn_catalogue))
                        }}
                    </a>
                    {% include '@SonataAdmin/CRUD/Association/edit_modal.html.twig' %}
                    {% include '@SonataAdmin/CRUD/Association/edit_many_script.html.twig' %}
                {% endif %}
            </span>
        {% endif %}
    </div>
{% endif %}
", "@SonataAdmin/CRUD/Association/edit_many_to_many.html.twig", "/home/aleksandar/Desktop/Site/payment-demo/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/Association/edit_many_to_many.html.twig");
    }
}
