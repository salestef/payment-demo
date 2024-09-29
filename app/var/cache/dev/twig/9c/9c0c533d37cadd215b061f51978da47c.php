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

/* @SonataForm/Form/datepicker.html.twig */
class __TwigTemplate_f20df3614a4d224d3de0071ee64cfd3a extends Template
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
            'sonata_type_datetime_picker_widget_html' => [$this, 'block_sonata_type_datetime_picker_widget_html'],
            'sonata_type_datetime_picker_widget' => [$this, 'block_sonata_type_datetime_picker_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataForm/Form/datepicker.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataForm/Form/datepicker.html.twig"));

        // line 11
        yield "
";
        // line 12
        yield from $this->unwrap()->yieldBlock('sonata_type_datetime_picker_widget_html', $context, $blocks);
        // line 39
        yield "
";
        // line 40
        yield from $this->unwrap()->yieldBlock('sonata_type_datetime_picker_widget', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sonata_type_datetime_picker_widget_html(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_type_datetime_picker_widget_html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_type_datetime_picker_widget_html"));

        // line 13
        yield "    <div
        id=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 14, $this->source); })()) . "_controller"), "html", null, true);
        yield "\"
        class=\"input-group date\"
        data-controller=\"datepicker\"
        data-datepicker-options-value=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode((isset($context["datepicker_options"]) || array_key_exists("datepicker_options", $context) ? $context["datepicker_options"] : (function () { throw new RuntimeError('Variable "datepicker_options" does not exist.', 17, $this->source); })())), "html_attr");
        yield "\"
        ";
        // line 18
        if (((array_key_exists("linked_to", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["linked_to"]) || array_key_exists("linked_to", $context) ? $context["linked_to"] : (function () { throw new RuntimeError('Variable "linked_to" does not exist.', 18, $this->source); })()), false)) : (false))) {
            yield "data-datepicker-datepicker-outlet=\"#";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["linked_to"]) || array_key_exists("linked_to", $context) ? $context["linked_to"] : (function () { throw new RuntimeError('Variable "linked_to" does not exist.', 18, $this->source); })()) . "_controller"), "html", null, true);
            yield "\"";
        }
        // line 19
        yield "        data-td-target-input=\"nearest\"
        ";
        // line 20
        if ((isset($context["datepicker_use_button"]) || array_key_exists("datepicker_use_button", $context) ? $context["datepicker_use_button"] : (function () { throw new RuntimeError('Variable "datepicker_use_button" does not exist.', 20, $this->source); })())) {
            yield "data-td-target-toggle=\"nearest\"";
        }
        // line 21
        yield "    >
        ";
        // line 22
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 22, $this->source); })()), ["data-td-target" => (("#" .         // line 23
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 23, $this->source); })())) . "_controller")]);
        // line 25
        yield "
        ";
        // line 26
        yield from         $this->unwrap()->yieldBlock("datetime_widget", $context, $blocks);
        yield "

        ";
        // line 28
        if ((isset($context["datepicker_use_button"]) || array_key_exists("datepicker_use_button", $context) ? $context["datepicker_use_button"] : (function () { throw new RuntimeError('Variable "datepicker_use_button" does not exist.', 28, $this->source); })())) {
            // line 29
            yield "            <span
                class=\"input-group-addon\"
                data-td-target=\"#";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 31, $this->source); })()) . "_controller"), "html", null, true);
            yield "\"
                data-td-toggle=\"datetimepicker\"
            >
                <i class=\"fas ";
            // line 34
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["datepicker_options"] ?? null), "display", [], "any", false, true, false, 34), "viewMode", [], "any", true, true, false, 34) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["datepicker_options"]) || array_key_exists("datepicker_options", $context) ? $context["datepicker_options"] : (function () { throw new RuntimeError('Variable "datepicker_options" does not exist.', 34, $this->source); })()), "display", [], "any", false, false, false, 34), "viewMode", [], "any", false, false, false, 34) == "clock"))) {
                yield "fa-clock";
            } else {
                yield "fa-calendar";
            }
            yield "\"></i>
            </span>
        ";
        }
        // line 37
        yield "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 40
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sonata_type_datetime_picker_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_type_datetime_picker_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_type_datetime_picker_widget"));

        // line 41
        yield "    ";
        $___internal_parse_0_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 42
            yield "        ";
            if ((isset($context["wrap_fields_with_addons"]) || array_key_exists("wrap_fields_with_addons", $context) ? $context["wrap_fields_with_addons"] : (function () { throw new RuntimeError('Variable "wrap_fields_with_addons" does not exist.', 42, $this->source); })())) {
                // line 43
                yield "            <div class=\"input-group\">
                ";
                // line 44
                yield from                 $this->unwrap()->yieldBlock("sonata_type_datetime_picker_widget_html", $context, $blocks);
                yield "
            </div>
        ";
            } else {
                // line 47
                yield "            ";
                yield from                 $this->unwrap()->yieldBlock("sonata_type_datetime_picker_widget_html", $context, $blocks);
                yield "
        ";
            }
            // line 49
            yield "    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 41
        yield Twig\Extension\CoreExtension::spaceless($___internal_parse_0_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SonataForm/Form/datepicker.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  194 => 41,  190 => 49,  184 => 47,  178 => 44,  175 => 43,  172 => 42,  169 => 41,  156 => 40,  144 => 37,  134 => 34,  128 => 31,  124 => 29,  122 => 28,  117 => 26,  114 => 25,  112 => 23,  111 => 22,  108 => 21,  104 => 20,  101 => 19,  95 => 18,  91 => 17,  85 => 14,  82 => 13,  69 => 12,  58 => 40,  55 => 39,  53 => 12,  50 => 11,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% block sonata_type_datetime_picker_widget_html %}
    <div
        id=\"{{ id ~ '_controller' }}\"
        class=\"input-group date\"
        data-controller=\"datepicker\"
        data-datepicker-options-value=\"{{ datepicker_options|json_encode|escape('html_attr') }}\"
        {% if linked_to|default(false) %}data-datepicker-datepicker-outlet=\"#{{ linked_to ~ '_controller' }}\"{% endif %}
        data-td-target-input=\"nearest\"
        {% if datepicker_use_button %}data-td-target-toggle=\"nearest\"{% endif %}
    >
        {% set attr = attr|merge({
            'data-td-target': '#' ~ id ~ '_controller',
        }) %}

        {{ block('datetime_widget') }}

        {% if datepicker_use_button %}
            <span
                class=\"input-group-addon\"
                data-td-target=\"#{{ id ~ '_controller' }}\"
                data-td-toggle=\"datetimepicker\"
            >
                <i class=\"fas {% if datepicker_options.display.viewMode is defined and datepicker_options.display.viewMode == 'clock' %}fa-clock{% else %}fa-calendar{% endif %}\"></i>
            </span>
        {% endif %}
    </div>
{% endblock sonata_type_datetime_picker_widget_html %}

{% block sonata_type_datetime_picker_widget %}
    {% apply spaceless %}
        {% if wrap_fields_with_addons %}
            <div class=\"input-group\">
                {{ block('sonata_type_datetime_picker_widget_html') }}
            </div>
        {% else %}
            {{ block('sonata_type_datetime_picker_widget_html') }}
        {% endif %}
    {% endapply %}
{% endblock sonata_type_datetime_picker_widget %}
", "@SonataForm/Form/datepicker.html.twig", "/home/aleksandar/Desktop/Site/payment-demo/vendor/sonata-project/form-extensions/src/Bridge/Symfony/Resources/views/Form/datepicker.html.twig");
    }
}
