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

/* @SonataAdmin/CRUD/base_edit_form_macro.html.twig */
class __TwigTemplate_b4450a91cf257365735c6bf212676849 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_edit_form_macro.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_edit_form_macro.html.twig"));

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 1
    public function macro_render_groups($__admin__ = null, $__form__ = null, $__groups__ = null, $__has_tab__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = [
            "admin" => $__admin__,
            "form" => $__form__,
            "groups" => $__groups__,
            "has_tab" => $__has_tab__,
            "varargs" => $__varargs__,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_groups"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_groups"));

            // line 2
            yield "    <div class=\"row\">

    ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, (isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new RuntimeError('Variable "groups" does not exist.', 4, $this->source); })()), function ($__code__) use ($context, $macros) { $context["code"] = $__code__; return CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "formgroups", [], "any", false, true, false, 4), $context["code"], [], "array", true, true, false, 4); }));
            foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
                // line 5
                yield "        ";
                $context["form_group"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 5, $this->source); })()), "formgroups", [], "any", false, false, false, 5), $context["code"], [], "array", false, false, false, 5);
                // line 6
                yield "
        <div class=\"";
                // line 7
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["form_group"] ?? null), "class", [], "any", true, true, false, 7)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["form_group"] ?? null), "class", [], "any", false, false, false, 7), "col-md-12")) : ("col-md-12")), "html", null, true);
                yield "\">
            <div class=\"";
                // line 8
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_group"]) || array_key_exists("form_group", $context) ? $context["form_group"] : (function () { throw new RuntimeError('Variable "form_group" does not exist.', 8, $this->source); })()), "box_class", [], "any", false, false, false, 8), "html", null, true);
                yield "\">
                <div class=\"box-header\">
                    <h4 class=\"box-title\">
                        ";
                // line 11
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["form_group"] ?? null), "translation_domain", [], "any", true, true, false, 11) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_group"]) || array_key_exists("form_group", $context) ? $context["form_group"] : (function () { throw new RuntimeError('Variable "form_group" does not exist.', 11, $this->source); })()), "translation_domain", [], "any", false, false, false, 11) === false))) {
                    // line 12
                    yield "                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_group"]) || array_key_exists("form_group", $context) ? $context["form_group"] : (function () { throw new RuntimeError('Variable "form_group" does not exist.', 12, $this->source); })()), "label", [], "any", false, false, false, 12), "html", null, true);
                    yield "
                        ";
                } else {
                    // line 14
                    yield "                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_group"]) || array_key_exists("form_group", $context) ? $context["form_group"] : (function () { throw new RuntimeError('Variable "form_group" does not exist.', 14, $this->source); })()), "label", [], "any", false, false, false, 14), [], (((CoreExtension::getAttribute($this->env, $this->source, ($context["form_group"] ?? null), "translation_domain", [], "any", true, true, false, 14) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["form_group"] ?? null), "translation_domain", [], "any", false, false, false, 14)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["form_group"] ?? null), "translation_domain", [], "any", false, false, false, 14)) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 14, $this->source); })()), "translationDomain", [], "any", false, false, false, 14)))), "html", null, true);
                    yield "
                        ";
                }
                // line 16
                yield "                    </h4>
                </div>
                <div class=\"box-body\">
                    <div class=\"sonata-ba-collapsed-fields\">
                        ";
                // line 20
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_group"]) || array_key_exists("form_group", $context) ? $context["form_group"] : (function () { throw new RuntimeError('Variable "form_group" does not exist.', 20, $this->source); })()), "description", [], "any", false, false, false, 20)) {
                    // line 21
                    yield "                            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, ($context["form_group"] ?? null), "translation_domain", [], "any", true, true, false, 21) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_group"]) || array_key_exists("form_group", $context) ? $context["form_group"] : (function () { throw new RuntimeError('Variable "form_group" does not exist.', 21, $this->source); })()), "translation_domain", [], "any", false, false, false, 21) === false))) {
                        // line 22
                        yield "                                <p>";
                        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_group"]) || array_key_exists("form_group", $context) ? $context["form_group"] : (function () { throw new RuntimeError('Variable "form_group" does not exist.', 22, $this->source); })()), "description", [], "any", false, false, false, 22);
                        yield "</p>
                            ";
                    } else {
                        // line 24
                        yield "                                <p>";
                        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_group"]) || array_key_exists("form_group", $context) ? $context["form_group"] : (function () { throw new RuntimeError('Variable "form_group" does not exist.', 24, $this->source); })()), "description", [], "any", false, false, false, 24), [], (((CoreExtension::getAttribute($this->env, $this->source, ($context["form_group"] ?? null), "translation_domain", [], "any", true, true, false, 24) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["form_group"] ?? null), "translation_domain", [], "any", false, false, false, 24)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["form_group"] ?? null), "translation_domain", [], "any", false, false, false, 24)) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 24, $this->source); })()), "translationDomain", [], "any", false, false, false, 24))));
                        yield "</p>
                            ";
                    }
                    // line 26
                    yield "                        ";
                }
                // line 27
                yield "
                        ";
                // line 28
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_group"]) || array_key_exists("form_group", $context) ? $context["form_group"] : (function () { throw new RuntimeError('Variable "form_group" does not exist.', 28, $this->source); })()), "fields", [], "any", false, false, false, 28), function ($__form_field_name__) use ($context, $macros) { $context["form_field_name"] = $__form_field_name__; return CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), $context["form_field_name"], [], "array", true, true, false, 28); }));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["form_field_name"]) {
                    // line 29
                    yield "                            ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), $context["form_field_name"], [], "array", false, false, false, 29), 'row');
                    yield "
                        ";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 31
                    yield "                            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_group"]) || array_key_exists("form_group", $context) ? $context["form_group"] : (function () { throw new RuntimeError('Variable "form_group" does not exist.', 31, $this->source); })()), "empty_message", [], "any", false, false, false, 31) != false)) {
                        // line 32
                        yield "                                ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["form_group"] ?? null), "empty_message_translation_domain", [], "any", true, true, false, 32) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_group"]) || array_key_exists("form_group", $context) ? $context["form_group"] : (function () { throw new RuntimeError('Variable "form_group" does not exist.', 32, $this->source); })()), "empty_message_translation_domain", [], "any", false, false, false, 32) === false))) {
                            // line 33
                            yield "                                    <em>";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_group"]) || array_key_exists("form_group", $context) ? $context["form_group"] : (function () { throw new RuntimeError('Variable "form_group" does not exist.', 33, $this->source); })()), "empty_message", [], "any", false, false, false, 33), "html", null, true);
                            yield "</em>
                                ";
                        } else {
                            // line 35
                            yield "                                    <em>";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_group"]) || array_key_exists("form_group", $context) ? $context["form_group"] : (function () { throw new RuntimeError('Variable "form_group" does not exist.', 35, $this->source); })()), "empty_message", [], "any", false, false, false, 35), [], (((CoreExtension::getAttribute($this->env, $this->source, ($context["form_group"] ?? null), "empty_message_translation_domain", [], "any", true, true, false, 35) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["form_group"] ?? null), "empty_message_translation_domain", [], "any", false, false, false, 35)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["form_group"] ?? null), "empty_message_translation_domain", [], "any", false, false, false, 35)) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 35, $this->source); })()), "translationDomain", [], "any", false, false, false, 35)))), "html", null, true);
                            yield "</em>
                                ";
                        }
                        // line 37
                        yield "                            ";
                    }
                    // line 38
                    yield "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['form_field_name'], $context['_parent'], $context['_iterated']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                yield "                    </div>
                </div>
            </div>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['code'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            yield "    </div>
";
            
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
        return "@SonataAdmin/CRUD/base_edit_form_macro.html.twig";
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
        return array (  195 => 44,  185 => 39,  179 => 38,  176 => 37,  170 => 35,  164 => 33,  161 => 32,  158 => 31,  150 => 29,  145 => 28,  142 => 27,  139 => 26,  133 => 24,  127 => 22,  124 => 21,  122 => 20,  116 => 16,  110 => 14,  104 => 12,  102 => 11,  96 => 8,  92 => 7,  89 => 6,  86 => 5,  82 => 4,  78 => 2,  57 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% macro render_groups(admin, form, groups, has_tab) %}
    <div class=\"row\">

    {% for code in groups|filter(code => admin.formgroups[code] is defined) %}
        {% set form_group = admin.formgroups[code] %}

        <div class=\"{{ form_group.class|default('col-md-12') }}\">
            <div class=\"{{ form_group.box_class }}\">
                <div class=\"box-header\">
                    <h4 class=\"box-title\">
                        {% if form_group.translation_domain is defined and form_group.translation_domain is same as(false) %}
                            {{ form_group.label }}
                        {% else %}
                            {{ form_group.label|trans({}, form_group.translation_domain ?? admin.translationDomain) }}
                        {% endif %}
                    </h4>
                </div>
                <div class=\"box-body\">
                    <div class=\"sonata-ba-collapsed-fields\">
                        {% if form_group.description %}
                            {% if form_group.translation_domain is defined and form_group.translation_domain is same as(false) %}
                                <p>{{ form_group.description|raw }}</p>
                            {% else %}
                                <p>{{ form_group.description|trans({}, form_group.translation_domain ?? admin.translationDomain)|raw }}</p>
                            {% endif %}
                        {% endif %}

                        {% for form_field_name in form_group.fields|filter(form_field_name => form[form_field_name] is defined) %}
                            {{ form_row(form[form_field_name]) }}
                        {% else %}
                            {% if form_group.empty_message != false %}
                                {% if form_group.empty_message_translation_domain is defined and form_group.empty_message_translation_domain is same as(false) %}
                                    <em>{{ form_group.empty_message }}</em>
                                {% else %}
                                    <em>{{ form_group.empty_message|trans({}, form_group.empty_message_translation_domain ?? admin.translationDomain) }}</em>
                                {% endif %}
                            {% endif %}
                        {% endfor %}
                    </div>
                </div>
            </div>
        </div>
    {% endfor %}
    </div>
{% endmacro %}
", "@SonataAdmin/CRUD/base_edit_form_macro.html.twig", "/home/aleksandar/Desktop/Site/payment-demo/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/base_edit_form_macro.html.twig");
    }
}
