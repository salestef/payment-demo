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

/* @SonataAdmin/CRUD/list_choice.html.twig */
class __TwigTemplate_40bdc17cfb9c3c831effca62bc99f969 extends Template
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
        return $this->loadTemplate($this->env->getRuntime('Sonata\AdminBundle\Twig\TemplateRegistryRuntime')->getAdminTemplate("base_list_field", CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 12, $this->source); })()), "code", [], "any", false, false, false, 12)), "@SonataAdmin/CRUD/list_choice.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_choice.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_choice.html.twig"));

        // line 14
        $context["is_editable"] = (CoreExtension::getAttribute($this->env, $this->source,         // line 15
(isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 15, $this->source); })()), "option", ["editable", false], "method", false, false, false, 15) && CoreExtension::getAttribute($this->env, $this->source,         // line 16
(isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 16, $this->source); })()), "hasAccess", ["edit", (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 16, $this->source); })())], "method", false, false, false, 16));
        // line 18
        $context["x_editable_type"] = $this->env->getRuntime('Sonata\AdminBundle\Twig\XEditableRuntime')->getXEditableType(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 18, $this->source); })()), "type", [], "any", false, false, false, 18));
        // line 12
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 20
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

        // line 21
        yield "    ";
        if (((isset($context["is_editable"]) || array_key_exists("is_editable", $context) ? $context["is_editable"] : (function () { throw new RuntimeError('Variable "is_editable" does not exist.', 21, $this->source); })()) && (isset($context["x_editable_type"]) || array_key_exists("x_editable_type", $context) ? $context["x_editable_type"] : (function () { throw new RuntimeError('Variable "x_editable_type" does not exist.', 21, $this->source); })()))) {
            // line 22
            yield "        ";
            $___internal_parse_34_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 23
                yield "            ";
                yield from $this->yieldParentBlock("field_span_attributes", $context, $blocks);
                yield "
            data-source=\"";
                // line 24
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode($this->env->getRuntime('Sonata\AdminBundle\Twig\XEditableRuntime')->getXEditableChoices((isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 24, $this->source); })()))), "html", null, true);
                yield "\"
        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 22
            yield Twig\Extension\CoreExtension::spaceless($___internal_parse_34_);
            // line 26
            yield "    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 30
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

        // line 31
        yield from         $this->loadTemplate("@SonataAdmin/CRUD/display_choice.html.twig", "@SonataAdmin/CRUD/list_choice.html.twig", 31)->unwrap()->yield(CoreExtension::toArray(["value" =>         // line 32
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 32, $this->source); })()), "choices" => CoreExtension::getAttribute($this->env, $this->source,         // line 33
(isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 33, $this->source); })()), "option", ["choices"], "method", false, false, false, 33), "multiple" => CoreExtension::getAttribute($this->env, $this->source,         // line 34
(isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 34, $this->source); })()), "option", ["multiple"], "method", false, false, false, 34), "delimiter" => CoreExtension::getAttribute($this->env, $this->source,         // line 35
(isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 35, $this->source); })()), "option", ["delimiter"], "method", false, false, false, 35), "translation_domain" => CoreExtension::getAttribute($this->env, $this->source,         // line 36
(isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 36, $this->source); })()), "option", ["choice_translation_domain", CoreExtension::getAttribute($this->env, $this->source, (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 36, $this->source); })()), "option", ["catalogue"], "method", false, false, false, 36)], "method", false, false, false, 36), "safe" => CoreExtension::getAttribute($this->env, $this->source,         // line 37
(isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 37, $this->source); })()), "option", ["safe"], "method", false, false, false, 37)]));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SonataAdmin/CRUD/list_choice.html.twig";
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
        return array (  133 => 37,  132 => 36,  131 => 35,  130 => 34,  129 => 33,  128 => 32,  127 => 31,  114 => 30,  102 => 26,  100 => 22,  94 => 24,  89 => 23,  86 => 22,  83 => 21,  70 => 20,  60 => 12,  58 => 18,  56 => 16,  55 => 15,  54 => 14,  41 => 12,);
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

{% set is_editable =
    field_description.option('editable', false) and
    admin.hasAccess('edit', object)
%}
{% set x_editable_type = field_description.type|sonata_xeditable_type %}

{% block field_span_attributes %}
    {% if is_editable and x_editable_type %}
        {% apply spaceless %}
            {{ parent() }}
            data-source=\"{{ field_description|sonata_xeditable_choices|json_encode }}\"
        {% endapply %}
    {% endif %}
{% endblock %}

{# NEXT_MAJOR: Remove the fallback on catalogue #}
{% block field %}
    {%- include '@SonataAdmin/CRUD/display_choice.html.twig' with {
        value: value,
        choices: field_description.option('choices'),
        multiple: field_description.option('multiple'),
        delimiter: field_description.option('delimiter'),
        translation_domain: field_description.option('choice_translation_domain', field_description.option('catalogue')),
        safe: field_description.option('safe'),
    } only -%}
{% endblock %}
", "@SonataAdmin/CRUD/list_choice.html.twig", "/home/aleksandar/Desktop/Site/payment-demo/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/list_choice.html.twig");
    }
}
