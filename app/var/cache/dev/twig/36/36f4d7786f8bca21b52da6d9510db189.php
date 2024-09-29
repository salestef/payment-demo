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

/* @SonataAdmin/CRUD/display_url.html.twig */
class __TwigTemplate_568ce3d6b33f9f916168caa36630a683 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/display_url.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/display_url.html.twig"));

        // line 12
        $___internal_parse_40_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 13
            yield "    ";
            if (Twig\Extension\CoreExtension::testEmpty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 13, $this->source); })()))) {
                // line 14
                yield "        &nbsp;
    ";
            } else {
                // line 16
                yield "        ";
                if (((array_key_exists("url", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 16, $this->source); })()), null)) : (null))) {
                    // line 17
                    yield "            ";
                    // line 18
                    yield "            ";
                    $context["url_address"] = (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 18, $this->source); })());
                    // line 19
                    yield "        ";
                } elseif (( !(null === ((array_key_exists("route", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 19, $this->source); })()), null)) : (null))) && !CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19), ["edit", "show"]))) {
                    // line 20
                    yield "            ";
                    // line 21
                    yield "            ";
                    $context["parameters"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["route"] ?? null), "parameters", [], "any", true, true, false, 21)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["route"] ?? null), "parameters", [], "any", false, false, false, 21), [])) : ([]));
                    // line 22
                    yield "
            ";
                    // line 23
                    if (((CoreExtension::getAttribute($this->env, $this->source, ($context["route"] ?? null), "absolute", [], "any", true, true, false, 23)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["route"] ?? null), "absolute", [], "any", false, false, false, 23), false)) : (false))) {
                        // line 24
                        yield "                ";
                        $context["url_address"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 24, $this->source); })()), "name", [], "any", false, false, false, 24), (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 24, $this->source); })()));
                        // line 25
                        yield "            ";
                    } else {
                        // line 26
                        yield "                ";
                        $context["url_address"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 26, $this->source); })()), "name", [], "any", false, false, false, 26), (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 26, $this->source); })()));
                        // line 27
                        yield "            ";
                    }
                    // line 28
                    yield "        ";
                } else {
                    // line 29
                    yield "            ";
                    // line 30
                    yield "            ";
                    $context["url_address"] = (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 30, $this->source); })());
                    // line 31
                    yield "        ";
                }
                // line 32
                yield "
        ";
                // line 33
                if (((array_key_exists("hide_protocol", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["hide_protocol"]) || array_key_exists("hide_protocol", $context) ? $context["hide_protocol"] : (function () { throw new RuntimeError('Variable "hide_protocol" does not exist.', 33, $this->source); })()), false)) : (false))) {
                    // line 34
                    yield "            ";
                    $context["value"] = Twig\Extension\CoreExtension::replace((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 34, $this->source); })()), ["http://" => "", "https://" => ""]);
                    // line 35
                    yield "        ";
                }
                // line 36
                yield "
        <a
            href=\"";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["url_address"]) || array_key_exists("url_address", $context) ? $context["url_address"] : (function () { throw new RuntimeError('Variable "url_address" does not exist.', 38, $this->source); })()), "html", null, true);
                yield "\"";
                // line 39
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(((array_key_exists("attributes", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 39, $this->source); })()), [])) : ([])));
                foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                    // line 40
                    yield "            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attribute"], "html", null, true);
                    yield "=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html_attr");
                    yield "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['attribute'], $context['value'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                yield ">";
                // line 43
                if (((array_key_exists("safe", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["safe"]) || array_key_exists("safe", $context) ? $context["safe"] : (function () { throw new RuntimeError('Variable "safe" does not exist.', 43, $this->source); })()), false)) : (false))) {
                    // line 44
                    yield (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 44, $this->source); })());
                } else {
                    // line 46
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 46, $this->source); })()), "html", null, true);
                }
                // line 48
                yield "</a>
    ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 12
        yield Twig\Extension\CoreExtension::spaceless($___internal_parse_40_);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SonataAdmin/CRUD/display_url.html.twig";
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
        return array (  149 => 12,  143 => 48,  140 => 46,  137 => 44,  135 => 43,  133 => 42,  123 => 40,  119 => 39,  116 => 38,  112 => 36,  109 => 35,  106 => 34,  104 => 33,  101 => 32,  98 => 31,  95 => 30,  93 => 29,  90 => 28,  87 => 27,  84 => 26,  81 => 25,  78 => 24,  76 => 23,  73 => 22,  70 => 21,  68 => 20,  65 => 19,  62 => 18,  60 => 17,  57 => 16,  53 => 14,  50 => 13,  48 => 12,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{%- apply spaceless %}
    {% if value is empty %}
        &nbsp;
    {% else %}
        {% if url|default(null) %}
            {# target url is string #}
            {% set url_address = url %}
        {% elseif route|default(null) is not null and route.name not in ['edit', 'show'] %}
            {# target url is Symfony route #}
            {% set parameters = route.parameters|default([]) %}

            {% if route.absolute|default(false) %}
                {% set url_address = url(route.name, parameters) %}
            {% else %}
                {% set url_address = path(route.name, parameters) %}
            {% endif %}
        {% else %}
            {# value is url #}
            {% set url_address = value %}
        {% endif %}

        {% if hide_protocol|default(false) %}
            {% set value = value|replace({'http://': '', 'https://': ''}) %}
        {% endif %}

        <a
            href=\"{{ url_address }}\"
        {%- for attribute, value in attributes|default([]) %}
            {{ attribute }}=\"{{ value|escape('html_attr') }}\"
        {%- endfor -%}
        >
        {%- if safe|default(false) -%}
            {{- value|raw -}}
        {%- else -%}
            {{- value -}}
        {%- endif -%}
        </a>
    {% endif %}
{% endapply -%}
", "@SonataAdmin/CRUD/display_url.html.twig", "/home/aleksandar/Desktop/Site/payment-demo/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/display_url.html.twig");
    }
}
