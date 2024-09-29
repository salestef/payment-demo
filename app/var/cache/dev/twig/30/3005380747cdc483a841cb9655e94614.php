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

/* @SonataAdmin/CRUD/display_html.html.twig */
class __TwigTemplate_18ba8ca2c90d39e6c3d47fa785e72378 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/display_html.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/display_html.html.twig"));

        // line 12
        $___internal_parse_39_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 13
            if (Twig\Extension\CoreExtension::testEmpty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 13, $this->source); })()))) {
                // line 14
                yield "&nbsp;
    ";
            } else {
                // line 16
                if (((array_key_exists("truncate", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["truncate"]) || array_key_exists("truncate", $context) ? $context["truncate"] : (function () { throw new RuntimeError('Variable "truncate" does not exist.', 16, $this->source); })()), null)) : (null))) {
                    // line 17
                    $context["length"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["truncate"] ?? null), "length", [], "any", true, true, false, 17)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["truncate"] ?? null), "length", [], "any", false, false, false, 17), 30)) : (30));
                    // line 18
                    yield "            ";
                    $context["cut"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["truncate"] ?? null), "cut", [], "any", true, true, false, 18) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["truncate"] ?? null), "cut", [], "any", false, false, false, 18)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["truncate"] ?? null), "cut", [], "any", false, false, false, 18)) : (true));
                    // line 19
                    yield "            ";
                    $context["ellipsis"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["truncate"] ?? null), "ellipsis", [], "any", true, true, false, 19)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["truncate"] ?? null), "ellipsis", [], "any", false, false, false, 19), "...")) : ("..."));
                    // line 20
                    yield "            ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(Twig\Extension\CoreExtension::striptags((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 20, $this->source); })()))), "truncate", [(isset($context["length"]) || array_key_exists("length", $context) ? $context["length"] : (function () { throw new RuntimeError('Variable "length" does not exist.', 20, $this->source); })()), (isset($context["ellipsis"]) || array_key_exists("ellipsis", $context) ? $context["ellipsis"] : (function () { throw new RuntimeError('Variable "ellipsis" does not exist.', 20, $this->source); })()), (isset($context["cut"]) || array_key_exists("cut", $context) ? $context["cut"] : (function () { throw new RuntimeError('Variable "cut" does not exist.', 20, $this->source); })())], "method", false, false, false, 20);
                } else {
                    // line 22
                    if (((array_key_exists("strip", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["strip"]) || array_key_exists("strip", $context) ? $context["strip"] : (function () { throw new RuntimeError('Variable "strip" does not exist.', 22, $this->source); })()), false)) : (false))) {
                        // line 23
                        $context["value"] = Twig\Extension\CoreExtension::striptags((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 23, $this->source); })()));
                    }
                    // line 25
                    yield (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 25, $this->source); })());
                    yield "
        ";
                }
                // line 27
                yield "    ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 12
        yield Twig\Extension\CoreExtension::spaceless($___internal_parse_39_);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SonataAdmin/CRUD/display_html.html.twig";
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
        return array (  85 => 12,  80 => 27,  75 => 25,  72 => 23,  70 => 22,  66 => 20,  63 => 19,  60 => 18,  58 => 17,  56 => 16,  52 => 14,  50 => 13,  48 => 12,);
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
    {%- if value is empty -%}
        &nbsp;
    {% else %}
        {%- if truncate|default(null) -%}
            {% set length = truncate.length|default(30) %}
            {% set cut = truncate.cut ?? true %}
            {% set ellipsis = truncate.ellipsis|default('...') %}
            {{ value|striptags|u.truncate(length, ellipsis, cut)|raw }}
        {%- else -%}
            {%- if strip|default(false) -%}
                {% set value = value|striptags %}
            {%- endif -%}
            {{ value|raw }}
        {% endif %}
    {% endif %}
{% endapply -%}
", "@SonataAdmin/CRUD/display_html.html.twig", "/home/aleksandar/Desktop/Site/payment-demo/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/display_html.html.twig");
    }
}
