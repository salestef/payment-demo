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

/* @SonataAdmin/CRUD/base_array_macro.html.twig */
class __TwigTemplate_fa6a6d54935560c2790118ba4a151e42 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_array_macro.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_array_macro.html.twig"));

        // line 11
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 12
    public function macro_render_array($__value__ = null, $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = [
            "value" => $__value__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_array"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_array"));

            // line 13
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["inline" => false, "key_translation_domain" => false, "value_translation_domain" => false, "display" => "both"],             // line 18
(isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 18, $this->source); })()));
            // line 19
            $___internal_parse_21_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 20
                $macros["__internal_parse_22"] = $this;
                // line 22
                if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 22, $this->source); })()), "inline", [], "any", false, false, false, 22)) {
                    // line 23
                    yield "<ul>";
                } else {
                    // line 25
                    yield "[";
                }
                // line 28
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 28, $this->source); })()));
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
                foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                    // line 29
                    if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 29, $this->source); })()), "inline", [], "any", false, false, false, 29)) {
                        // line 30
                        yield "<li>";
                    }
                    // line 33
                    if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 33, $this->source); })()), "display", [], "any", false, false, false, 33), ["both", "keys"])) {
                        // line 34
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 34, $this->source); })()), "key_translation_domain", [], "any", false, false, false, 34) === false)) {
                            // line 35
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                        } else {
                            // line 37
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 37, $this->source); })()), "key_translation_domain", [], "any", false, false, false, 37) === true)) {
                                // line 38
                                $context["key_translation_domain"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 38, $this->source); })()), "default_translation_domain", [], "any", false, false, false, 38);
                            } elseif ((CoreExtension::getAttribute($this->env, $this->source,                             // line 39
(isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 39, $this->source); })()), "key_translation_domain", [], "any", false, false, false, 39) === null)) {
                                // line 40
                                $context["key_translation_domain"] = null;
                            } else {
                                // line 42
                                $context["key_translation_domain"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 42, $this->source); })()), "key_translation_domain", [], "any", false, false, false, 42);
                            }
                            // line 45
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["key"], [], (isset($context["key_translation_domain"]) || array_key_exists("key_translation_domain", $context) ? $context["key_translation_domain"] : (function () { throw new RuntimeError('Variable "key_translation_domain" does not exist.', 45, $this->source); })())), "html", null, true);
                        }
                    }
                    // line 49
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 49, $this->source); })()), "display", [], "any", false, false, false, 49) == "both")) {
                        // line 50
                        yield "&nbsp;=>&nbsp;";
                    }
                    // line 53
                    if (is_iterable($context["val"])) {
                        // line 54
                        yield CoreExtension::callMacro($macros["__internal_parse_22"], "macro_render_array", [$context["val"], (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 54, $this->source); })())], 54, $context, $this->getSourceContext());
                    } else {
                        // line 56
                        if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 56, $this->source); })()), "display", [], "any", false, false, false, 56), ["both", "values"])) {
                            // line 57
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 57, $this->source); })()), "value_translation_domain", [], "any", false, false, false, 57) === false)) {
                                // line 58
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["val"], "html", null, true);
                            } else {
                                // line 60
                                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 60, $this->source); })()), "value_translation_domain", [], "any", false, false, false, 60) === true)) {
                                    // line 61
                                    $context["value_translation_domain"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 61, $this->source); })()), "default_translation_domain", [], "any", false, false, false, 61);
                                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                                 // line 62
(isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 62, $this->source); })()), "value_translation_domain", [], "any", false, false, false, 62) === null)) {
                                    // line 63
                                    $context["value_translation_domain"] = null;
                                } else {
                                    // line 65
                                    $context["value_translation_domain"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 65, $this->source); })()), "value_translation_domain", [], "any", false, false, false, 65);
                                }
                                // line 68
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["val"], [], (isset($context["value_translation_domain"]) || array_key_exists("value_translation_domain", $context) ? $context["value_translation_domain"] : (function () { throw new RuntimeError('Variable "value_translation_domain" does not exist.', 68, $this->source); })())), "html", null, true);
                            }
                        }
                    }
                    // line 73
                    if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 73, $this->source); })()), "inline", [], "any", false, false, false, 73)) {
                        // line 74
                        yield "</li>";
                    }
                    // line 77
                    if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 77, $this->source); })()), "inline", [], "any", false, false, false, 77) == true) &&  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 77))) {
                        // line 78
                        yield ",
            ";
                    }
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
                unset($context['_seq'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 82
                if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 82, $this->source); })()), "inline", [], "any", false, false, false, 82)) {
                    // line 83
                    yield "</ul>";
                } else {
                    // line 85
                    yield "]";
                }
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 19
            yield Twig\Extension\CoreExtension::spaceless($___internal_parse_21_);
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SonataAdmin/CRUD/base_array_macro.html.twig";
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
        return array (  207 => 19,  202 => 85,  199 => 83,  197 => 82,  181 => 78,  179 => 77,  176 => 74,  174 => 73,  169 => 68,  166 => 65,  163 => 63,  161 => 62,  159 => 61,  157 => 60,  154 => 58,  152 => 57,  150 => 56,  147 => 54,  145 => 53,  142 => 50,  140 => 49,  136 => 45,  133 => 42,  130 => 40,  128 => 39,  126 => 38,  124 => 37,  121 => 35,  119 => 34,  117 => 33,  114 => 30,  112 => 29,  95 => 28,  92 => 25,  89 => 23,  87 => 22,  85 => 20,  83 => 19,  81 => 18,  79 => 13,  60 => 12,  48 => 11,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% macro render_array(value, options = []) %}
    {% set options = {
        'inline': false,
        'key_translation_domain': false,
        'value_translation_domain': false,
        'display': 'both'
    }|merge(options) %}
    {%- apply spaceless -%}
        {%- from _self import render_array -%}

        {%- if not options.inline -%}
            <ul>
        {%- else -%}
            [
        {%- endif -%}

        {%- for key, val in value -%}
            {%- if not options.inline -%}
                <li>
            {%- endif -%}

            {%- if options.display in ['both', 'keys'] -%}
                {%- if options.key_translation_domain is same as(false) -%}
                    {{- key -}}
                {%- else -%}
                    {%- if options.key_translation_domain is same as(true) -%}
                        {%- set key_translation_domain = options.default_translation_domain -%}
                    {%- elseif options.key_translation_domain is same as(null) -%}
                        {%- set key_translation_domain = null -%}
                    {%- else -%}
                        {%- set key_translation_domain = options.key_translation_domain -%}
                    {%- endif -%}

                    {{- key|trans({}, key_translation_domain) -}}
                {%- endif -%}
            {%- endif -%}

            {%- if options.display == 'both' -%}
                &nbsp;=>&nbsp;
            {%- endif -%}

            {%- if val is iterable -%}
                {{ render_array(val, options) }}
            {%- else -%}
                {%- if options.display in ['both', 'values'] -%}
                    {%- if options.value_translation_domain is same as(false) -%}
                        {{ val }}
                    {%- else -%}
                        {%- if options.value_translation_domain is same as(true) -%}
                            {%- set value_translation_domain = options.default_translation_domain -%}
                        {%- elseif options.value_translation_domain is same as(null) -%}
                            {%- set value_translation_domain = null -%}
                        {%- else -%}
                            {%- set value_translation_domain = options.value_translation_domain -%}
                        {%- endif -%}

                        {{- val|trans({}, value_translation_domain) -}}
                    {%- endif -%}
                {%- endif -%}
            {%- endif -%}

            {%- if not options.inline -%}
                </li>
            {%- endif -%}

            {%- if options.inline == true and not loop.last -%}
                ,
            {% endif -%}
        {%- endfor -%}

        {%- if not options.inline -%}
            </ul>
        {%- else -%}
            ]
        {%- endif -%}
    {%- endapply -%}
{% endmacro %}
", "@SonataAdmin/CRUD/base_array_macro.html.twig", "/home/aleksandar/Desktop/Site/payment-demo/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/base_array_macro.html.twig");
    }
}
