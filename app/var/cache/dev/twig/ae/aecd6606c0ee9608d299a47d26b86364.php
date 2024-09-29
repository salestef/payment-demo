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

/* @SonataAdmin/CRUD/list_boolean.html.twig */
class __TwigTemplate_6dbe4146470c169a68ca6d39ec216487 extends Template
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
            'field_span_attributes' => [$this, 'block_field_span_attributes'],
            'field' => [$this, 'block_field'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 12
        return $this->loadTemplate($this->env->getRuntime('Sonata\AdminBundle\Twig\TemplateRegistryRuntime')->getAdminTemplate("base_list_field", CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 12, $this->source); })()), "code", [], "any", false, false, false, 12)), "@SonataAdmin/CRUD/list_boolean.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_boolean.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_boolean.html.twig"));

        // line 14
        $context["is_editable"] = (CoreExtension::getAttribute($this->env, $this->source, (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 14, $this->source); })()), "option", ["editable", false], "method", false, false, false, 14) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 14, $this->source); })()), "hasAccess", ["edit", (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 14, $this->source); })())], "method", false, false, false, 14));
        // line 15
        $context["x_editable_type"] = $this->env->getRuntime('Sonata\AdminBundle\Twig\XEditableRuntime')->getXEditableType(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 15, $this->source); })()), "type", [], "any", false, false, false, 15));
        // line 12
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 17
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_field_span_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "field_span_attributes"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "field_span_attributes"));

        // line 18
        yield "    ";
        if (((isset($context["is_editable"]) || array_key_exists("is_editable", $context) ? $context["is_editable"] : (function () { throw new RuntimeError('Variable "is_editable" does not exist.', 18, $this->source); })()) && (isset($context["x_editable_type"]) || array_key_exists("x_editable_type", $context) ? $context["x_editable_type"] : (function () { throw new RuntimeError('Variable "x_editable_type" does not exist.', 18, $this->source); })()))) {
            // line 19
            yield "        ";
            $___internal_parse_23_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 20
                yield "            ";
                yield from $this->yieldParentBlock("field_span_attributes", $context, $blocks);
                yield "
            data-source=\"[{value: 0, text: '";
                // line 21
                yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_type_no", [], "SonataAdminBundle");
                yield "'},{value: 1, text: '";
                yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_type_yes", [], "SonataAdminBundle");
                yield "'}]\"
        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 19
            yield Twig\Extension\CoreExtension::spaceless($___internal_parse_23_);
            // line 23
            yield "    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 26
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_field(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "field"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "field"));

        // line 27
        yield from         $this->loadTemplate("@SonataAdmin/CRUD/display_boolean.html.twig", "@SonataAdmin/CRUD/list_boolean.html.twig", 27)->unwrap()->yield(CoreExtension::toArray(["value" =>         // line 28
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 28, $this->source); })()), "inverse" => CoreExtension::getAttribute($this->env, $this->source,         // line 29
(isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 29, $this->source); })()), "option", ["inverse"], "method", false, false, false, 29)]));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SonataAdmin/CRUD/list_boolean.html.twig";
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
        return array (  129 => 29,  128 => 28,  127 => 27,  114 => 26,  102 => 23,  100 => 19,  92 => 21,  87 => 20,  84 => 19,  81 => 18,  68 => 17,  58 => 12,  56 => 15,  54 => 14,  41 => 12,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends get_admin_template('base_list_field', admin.code) %}

{% set is_editable = field_description.option('editable', false) and admin.hasAccess('edit', object) %}
{% set x_editable_type = field_description.type|sonata_xeditable_type %}

{% block field_span_attributes %}
    {% if is_editable and x_editable_type %}
        {% apply spaceless %}
            {{ parent() }}
            data-source=\"[{value: 0, text: '{%- trans from 'SonataAdminBundle' %}label_type_no{% endtrans -%}'},{value: 1, text: '{%- trans from 'SonataAdminBundle' %}label_type_yes{% endtrans -%}'}]\"
        {% endapply %}
    {% endif %}
{% endblock %}

{% block field %}
    {%- include '@SonataAdmin/CRUD/display_boolean.html.twig' with {
        value: value,
        inverse: field_description.option('inverse'),
    } only -%}
{% endblock %}
", "@SonataAdmin/CRUD/list_boolean.html.twig", "/home/aleksandar/Desktop/Site/payment-demo/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/list_boolean.html.twig");
    }
}
