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

/* @SonataAdmin/CRUD/display_choice.html.twig */
class __TwigTemplate_27ef61d54f61720a1eecceeaf23a440f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/display_choice.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/display_choice.html.twig"));

        // line 12
        $___internal_parse_26_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 13
            yield "    ";
            $context["choices"] = ((array_key_exists("choices", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 13, $this->source); })()), [])) : ([]));
            // line 14
            yield "    ";
            if ((((array_key_exists("multiple", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 14, $this->source); })()), false)) : (false)) && is_iterable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 14, $this->source); })())))) {
                // line 15
                yield "
        ";
                // line 16
                $context["result"] = "";
                // line 17
                yield "        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 17, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
                    // line 18
                    yield "            ";
                    if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 18, $this->source); })()))) {
                        // line 19
                        yield "                ";
                        $context["result"] = ((isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 19, $this->source); })()) . ((array_key_exists("delimiter", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["delimiter"]) || array_key_exists("delimiter", $context) ? $context["delimiter"] : (function () { throw new RuntimeError('Variable "delimiter" does not exist.', 19, $this->source); })()), ", ")) : (", ")));
                        // line 20
                        yield "            ";
                    }
                    // line 21
                    yield "
            ";
                    // line 22
                    if (CoreExtension::getAttribute($this->env, $this->source, ($context["choices"] ?? null), $context["val"], [], "array", true, true, false, 22)) {
                        // line 23
                        yield "                ";
                        $context["choice"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 23, $this->source); })()), $context["val"], [], "array", false, false, false, 23);
                        // line 24
                        yield "            ";
                    } else {
                        // line 25
                        yield "                ";
                        $context["choice"] = $context["val"];
                        // line 26
                        yield "            ";
                    }
                    // line 27
                    yield "            ";
                    if ((null === ((array_key_exists("translation_domain", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 27, $this->source); })()), null)) : (null)))) {
                        // line 28
                        yield "                ";
                        $context["result"] = ((isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 28, $this->source); })()) . (isset($context["choice"]) || array_key_exists("choice", $context) ? $context["choice"] : (function () { throw new RuntimeError('Variable "choice" does not exist.', 28, $this->source); })()));
                        // line 29
                        yield "            ";
                    } else {
                        // line 30
                        yield "                ";
                        $context["result"] = ((isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 30, $this->source); })()) . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["choice"]) || array_key_exists("choice", $context) ? $context["choice"] : (function () { throw new RuntimeError('Variable "choice" does not exist.', 30, $this->source); })()), [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 30, $this->source); })())));
                        // line 31
                        yield "            ";
                    }
                    // line 32
                    yield "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['val'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                yield "
        ";
                // line 34
                $context["value"] = (isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 34, $this->source); })());
                // line 35
                yield "
    ";
            } elseif (CoreExtension::inFilter(            // line 36
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 36, $this->source); })()), Twig\Extension\CoreExtension::keys((isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 36, $this->source); })())))) {
                // line 37
                yield "        ";
                if ((null === ((array_key_exists("translation_domain", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 37, $this->source); })()), null)) : (null)))) {
                    // line 38
                    yield "            ";
                    $context["value"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 38, $this->source); })()), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 38, $this->source); })()), [], "array", false, false, false, 38);
                    // line 39
                    yield "        ";
                } else {
                    // line 40
                    yield "            ";
                    $context["value"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 40, $this->source); })()), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 40, $this->source); })()), [], "array", false, false, false, 40), [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 40, $this->source); })()));
                    // line 41
                    yield "        ";
                }
                // line 42
                yield "    ";
            }
            // line 43
            yield "
    ";
            // line 44
            if (((array_key_exists("safe", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["safe"]) || array_key_exists("safe", $context) ? $context["safe"] : (function () { throw new RuntimeError('Variable "safe" does not exist.', 44, $this->source); })()), false)) : (false))) {
                // line 45
                yield "        ";
                yield (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 45, $this->source); })());
                yield "
    ";
            } else {
                // line 47
                yield "        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 47, $this->source); })()), "html", null, true);
                yield "
    ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 12
        yield Twig\Extension\CoreExtension::spaceless($___internal_parse_26_);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SonataAdmin/CRUD/display_choice.html.twig";
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
        return array (  160 => 12,  152 => 47,  146 => 45,  144 => 44,  141 => 43,  138 => 42,  135 => 41,  132 => 40,  129 => 39,  126 => 38,  123 => 37,  121 => 36,  118 => 35,  116 => 34,  113 => 33,  107 => 32,  104 => 31,  101 => 30,  98 => 29,  95 => 28,  92 => 27,  89 => 26,  86 => 25,  83 => 24,  80 => 23,  78 => 22,  75 => 21,  72 => 20,  69 => 19,  66 => 18,  61 => 17,  59 => 16,  56 => 15,  53 => 14,  50 => 13,  48 => 12,);
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
    {% set choices = choices|default([]) %}
    {% if multiple|default(false) and value is iterable %}

        {% set result = '' %}
        {% for val in value %}
            {% if result is not empty %}
                {% set result = result ~ delimiter|default(', ') %}
            {% endif %}

            {% if choices[val] is defined %}
                {% set choice = choices[val] %}
            {% else %}
                {% set choice = val %}
            {% endif %}
            {% if translation_domain|default(null) is null %}
                {% set result = result ~ choice %}
            {% else %}
                {% set result = result ~ choice|trans({}, translation_domain) %}
            {% endif %}
        {% endfor %}

        {% set value = result %}

    {% elseif value in choices|keys %}
        {% if translation_domain|default(null) is null %}
            {% set value = choices[value] %}
        {% else %}
            {% set value = choices[value]|trans({}, translation_domain) %}
        {% endif %}
    {% endif %}

    {% if safe|default(false) %}
        {{ value|raw }}
    {% else %}
        {{ value }}
    {% endif %}
{% endapply -%}
", "@SonataAdmin/CRUD/display_choice.html.twig", "/home/aleksandar/Desktop/Site/payment-demo/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/display_choice.html.twig");
    }
}
