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

/* @SonataAdmin/CRUD/Association/edit_one_to_many_inline_table.html.twig */
class __TwigTemplate_1a81ad585cd7ecf5d2303c3beaf330fe extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/Association/edit_one_to_many_inline_table.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/Association/edit_one_to_many_inline_table.html.twig"));

        // line 11
        yield "<table class=\"table table-bordered\">
    <thead>
        <tr>
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "children", [], "any", false, false, false, 14)), "children", [], "any", false, false, false, 14));
        foreach ($context['_seq'] as $context["field_name"] => $context["nested_field"]) {
            // line 15
            yield "                ";
            if (($context["field_name"] == "_delete")) {
                // line 16
                yield "                    <th>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action_delete", [], "SonataAdminBundle"), "html", null, true);
                yield "</th>
                ";
            } else {
                // line 18
                yield "                    <th
                        ";
                // line 19
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, true, false, 19), "required", [], "array", true, true, false, 19)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, true, false, 19), "required", [], "array", false, false, false, 19), false)) : (false))) {
                    // line 20
                    yield "                            class=\"required\"
                        ";
                }
                // line 22
                yield "                        ";
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, true, false, 22), "attr", [], "array", false, true, false, 22), "hidden", [], "array", true, true, false, 22)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, true, false, 22), "attr", [], "array", false, true, false, 22), "hidden", [], "array", false, false, false, 22), false)) : (false))) {
                    // line 23
                    yield "                            style=\"display:none;\"
                        ";
                }
                // line 25
                yield "                    >
                        ";
                // line 26
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, false, false, 26), "translation_domain", [], "any", false, false, false, 26) === false)) {
                    // line 27
                    yield "                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, false, false, 27), "label", [], "any", false, false, false, 27), "html", null, true);
                    yield "
                        ";
                } else {
                    // line 29
                    yield "                            ";
                    $context["translationDomain"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, true, false, 29), "translation_domain", [], "any", true, true, false, 29)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, true, false, 29), "translation_domain", [], "any", false, false, false, 29), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, true, false, 29), "sonata_admin", [], "array", false, true, false, 29), "admin", [], "any", false, true, false, 29), "translationDomain", [], "any", true, true, false, 29)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, true, false, 29), "sonata_admin", [], "array", false, true, false, 29), "admin", [], "any", false, true, false, 29), "translationDomain", [], "any", false, false, false, 29), null)) : (null)))) : (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, true, false, 29), "sonata_admin", [], "array", false, true, false, 29), "admin", [], "any", false, true, false, 29), "translationDomain", [], "any", true, true, false, 29)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, true, false, 29), "sonata_admin", [], "array", false, true, false, 29), "admin", [], "any", false, true, false, 29), "translationDomain", [], "any", false, false, false, 29), null)) : (null))));
                    // line 30
                    yield "                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, false, false, 30), "label", [], "any", false, false, false, 30), [], (isset($context["translationDomain"]) || array_key_exists("translationDomain", $context) ? $context["translationDomain"] : (function () { throw new RuntimeError('Variable "translationDomain" does not exist.', 30, $this->source); })())), "html", null, true);
                    yield "
                        ";
                }
                // line 32
                yield "                    </th>
                ";
            }
            // line 34
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['field_name'], $context['nested_field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        yield "        </tr>
    </thead>
    <tbody class=\"sonata-ba-tbody\">
        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "children", [], "any", false, false, false, 38));
        foreach ($context['_seq'] as $context["nested_group_field_name"] => $context["nested_group_field"]) {
            // line 39
            yield "            <tr>
                ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["nested_group_field"], "children", [], "any", false, false, false, 40));
            foreach ($context['_seq'] as $context["field_name"] => $context["nested_field"]) {
                // line 41
                yield "                    <td class=\"
                        sonata-ba-td-";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 42, $this->source); })()), "html", null, true);
                yield "-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["field_name"], "html", null, true);
                yield "
                        form-group
                        control-group
                        ";
                // line 45
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, true, false, 45), "errors", [], "any", true, true, false, 45)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, true, false, 45), "errors", [], "any", false, false, false, 45), false)) : (false))) {
                    yield " error has-error sonata-ba-field-error";
                }
                // line 46
                yield "                        \"
                        ";
                // line 47
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, true, false, 47), "attr", [], "array", false, true, false, 47), "hidden", [], "array", true, true, false, 47)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, true, false, 47), "attr", [], "array", false, true, false, 47), "hidden", [], "array", false, false, false, 47), false)) : (false))) {
                    // line 48
                    yield "                            style=\"display:none;\"
                        ";
                }
                // line 50
                yield "                    >
                        ";
                // line 51
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, true, false, 51), "associationadmin", [], "any", false, true, false, 51), "formfielddescriptions", [], "any", false, true, false, 51), $context["field_name"], [], "array", true, true, false, 51)) {
                    // line 52
                    yield "                            ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["nested_field"], 'widget');
                    yield "

                            ";
                    // line 54
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["nested_field"], 'help');
                    yield "

                            ";
                    // line 56
                    $context["dummy"] = CoreExtension::getAttribute($this->env, $this->source, $context["nested_group_field"], "setrendered", [], "any", false, false, false, 56);
                    // line 57
                    yield "                        ";
                } else {
                    // line 58
                    yield "                            ";
                    if (($context["field_name"] == "_delete")) {
                        // line 59
                        yield "                                ";
                        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["nested_field"], 'widget', ["label" => false]);
                        yield "
                            ";
                    } else {
                        // line 61
                        yield "                                ";
                        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["nested_field"], 'widget');
                        yield "
                            ";
                    }
                    // line 63
                    yield "                        ";
                }
                // line 64
                yield "                        ";
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, true, false, 64), "errors", [], "any", true, true, false, 64)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, true, false, 64), "errors", [], "any", false, false, false, 64), false)) : (false))) {
                    // line 65
                    yield "                            <div class=\"help-block help-inline sonata-ba-field-error-messages\">
                                ";
                    // line 66
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["nested_field"], 'errors');
                    yield "
                            </div>
                        ";
                }
                // line 69
                yield "                    </td>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['field_name'], $context['nested_field'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            yield "            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['nested_group_field_name'], $context['nested_group_field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        yield "    </tbody>
</table>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SonataAdmin/CRUD/Association/edit_one_to_many_inline_table.html.twig";
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
        return array (  217 => 73,  210 => 71,  203 => 69,  197 => 66,  194 => 65,  191 => 64,  188 => 63,  182 => 61,  176 => 59,  173 => 58,  170 => 57,  168 => 56,  163 => 54,  157 => 52,  155 => 51,  152 => 50,  148 => 48,  146 => 47,  143 => 46,  139 => 45,  131 => 42,  128 => 41,  124 => 40,  121 => 39,  117 => 38,  112 => 35,  106 => 34,  102 => 32,  96 => 30,  93 => 29,  87 => 27,  85 => 26,  82 => 25,  78 => 23,  75 => 22,  71 => 20,  69 => 19,  66 => 18,  60 => 16,  57 => 15,  53 => 14,  48 => 11,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
<table class=\"table table-bordered\">
    <thead>
        <tr>
            {% for field_name, nested_field in form.children|first.children %}
                {% if field_name == '_delete' %}
                    <th>{{ 'action_delete'|trans({}, 'SonataAdminBundle') }}</th>
                {% else %}
                    <th
                        {% if nested_field.vars['required']|default(false) %}
                            class=\"required\"
                        {% endif %}
                        {% if nested_field.vars['attr']['hidden']|default(false) %}
                            style=\"display:none;\"
                        {% endif %}
                    >
                        {% if nested_field.vars.translation_domain is same as(false) %}
                            {{ nested_field.vars.label }}
                        {% else %}
                            {% set translationDomain = nested_field.vars.translation_domain|default(nested_field.vars['sonata_admin'].admin.translationDomain|default(null)) %}
                            {{ nested_field.vars.label|trans({}, translationDomain) }}
                        {% endif %}
                    </th>
                {% endif %}
            {% endfor %}
        </tr>
    </thead>
    <tbody class=\"sonata-ba-tbody\">
        {% for nested_group_field_name, nested_group_field in form.children %}
            <tr>
                {% for field_name, nested_field in nested_group_field.children %}
                    <td class=\"
                        sonata-ba-td-{{ id }}-{{ field_name }}
                        form-group
                        control-group
                        {% if nested_field.vars.errors|default(false) %} error has-error sonata-ba-field-error{% endif %}
                        \"
                        {% if nested_field.vars['attr']['hidden']|default(false) %}
                            style=\"display:none;\"
                        {% endif %}
                    >
                        {% if sonata_admin.field_description.associationadmin.formfielddescriptions[field_name] is defined %}
                            {{ form_widget(nested_field) }}

                            {{ form_help(nested_field) }}

                            {% set dummy = nested_group_field.setrendered %}
                        {% else %}
                            {% if field_name == '_delete' %}
                                {{ form_widget(nested_field, { label: false }) }}
                            {% else %}
                                {{ form_widget(nested_field) }}
                            {% endif %}
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
", "@SonataAdmin/CRUD/Association/edit_one_to_many_inline_table.html.twig", "/home/aleksandar/Desktop/Site/payment-demo/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/Association/edit_one_to_many_inline_table.html.twig");
    }
}
