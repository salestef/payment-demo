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

/* @SonataAdmin/Form/Type/sonata_type_model_autocomplete.html.twig */
class __TwigTemplate_a0cc4f0e69a47e342b97269aed5c1b09 extends Template
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
            'sonata_type_model_autocomplete_ajax_request_parameters' => [$this, 'block_sonata_type_model_autocomplete_ajax_request_parameters'],
            'sonata_type_model_autocomplete_dropdown_item_format' => [$this, 'block_sonata_type_model_autocomplete_dropdown_item_format'],
            'sonata_type_model_autocomplete_selection_format' => [$this, 'block_sonata_type_model_autocomplete_selection_format'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/Form/Type/sonata_type_model_autocomplete.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/Form/Type/sonata_type_model_autocomplete.html.twig"));

        // line 11
        $___internal_parse_15_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 12
            yield "    <select id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 12, $this->source); })()), "html", null, true);
            yield "_autocomplete_input\" data-sonata-select2=\"false\"";
            // line 13
            if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 13, $this->source); })())) {
                yield " disabled=\"disabled\"";
            }
            // line 14
            if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 14, $this->source); })())) {
                yield " multiple=\"multiple\"";
            }
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 15, $this->source); })()));
            foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attribute"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                yield "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['attribute'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            yield ">";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 17, $this->source); })()), function ($__val__, $__idx__) use ($context, $macros) { $context["val"] = $__val__; $context["idx"] = $__idx__; return (($context["idx"] . "") != "_labels"); }));
            foreach ($context['_seq'] as $context["idx"] => $context["val"]) {
                // line 18
                yield "<option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["val"], "html", null, true);
                yield "\" selected>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 18, $this->source); })()), "_labels", [], "array", false, false, false, 18), $context["idx"], [], "array", false, false, false, 18), "html", null, true);
                yield "</option>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['idx'], $context['val'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            yield "</select>

    <div id=\"";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 22, $this->source); })()), "html", null, true);
            yield "_hidden_inputs_wrap\">
        ";
            // line 23
            if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 23, $this->source); })())) {
                // line 24
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 24, $this->source); })()), function ($__val__, $__idx__) use ($context, $macros) { $context["val"] = $__val__; $context["idx"] = $__idx__; return (($context["idx"] . "") != "_labels"); }));
                foreach ($context['_seq'] as $context["idx"] => $context["val"]) {
                    // line 25
                    yield "<input type=\"hidden\" name=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 25, $this->source); })()), "html", null, true);
                    yield "[]\"";
                    if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 25, $this->source); })())) {
                        yield " disabled=\"disabled\"";
                    }
                    yield " value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["val"], "html", null, true);
                    yield "\">";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['idx'], $context['val'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            } else {
                // line 28
                yield "<input type=\"hidden\" name=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 28, $this->source); })()), "html", null, true);
                yield "\"";
                if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 28, $this->source); })())) {
                    yield " disabled=\"disabled\"";
                }
                yield " value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["value"] ?? null), 0, [], "array", true, true, false, 28)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["value"] ?? null), 0, [], "array", false, false, false, 28), "")) : ("")), "html", null, true);
                yield "\">
        ";
            }
            // line 30
            yield "</div>

    ";
            // line 32
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 32, $this->source); })()), "field_description", [], "any", false, false, false, 32) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 32, $this->source); })()), "field_description", [], "any", false, false, false, 32), "hasAssociationAdmin", [], "any", false, false, false, 32))) {
                // line 33
                yield "        <div id=\"field_actions_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 33, $this->source); })()), "html", null, true);
                yield "\" class=\"field-actions\">
            ";
                // line 34
                $context["display_btn_add"] = ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 34, $this->source); })()), "edit", [], "any", false, false, false, 34) != "admin") && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 34, $this->source); })()), "field_description", [], "any", false, false, false, 34), "associationadmin", [], "any", false, false, false, 34), "hasRoute", ["create"], "method", false, false, false, 34)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 35
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 35, $this->source); })()), "field_description", [], "any", false, false, false, 35), "associationadmin", [], "any", false, false, false, 35), "isGranted", ["CREATE"], "method", false, false, false, 35)) && (isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new RuntimeError('Variable "btn_add" does not exist.', 35, $this->source); })()));
                // line 36
                yield "            ";
                if ((isset($context["display_btn_add"]) || array_key_exists("display_btn_add", $context) ? $context["display_btn_add"] : (function () { throw new RuntimeError('Variable "display_btn_add" does not exist.', 36, $this->source); })())) {
                    // line 37
                    yield "                <a  href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 37, $this->source); })()), "field_description", [], "any", false, false, false, 37), "associationadmin", [], "any", false, false, false, 37), "generateUrl", ["create", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 38
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 38, $this->source); })()), "field_description", [], "any", false, false, false, 38), "getOption", ["link_parameters", []], "method", false, false, false, 38)], "method", false, false, false, 37), "html", null, true);
                    // line 39
                    yield "\"
                    onclick=\"return start_field_dialog_form_add_";
                    // line 40
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 40, $this->source); })()), "html", null, true);
                    yield "(this);\"
                    class=\"btn btn-success btn-sm sonata-ba-action\"
                    ";
                    // line 43
                    yield "                    title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((((                    // line 44
array_key_exists("btn_translation_domain", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 44, $this->source); })()), null)) : (null)) === false)) ? (                    // line 45
(isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new RuntimeError('Variable "btn_add" does not exist.', 45, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(                    // line 46
(isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new RuntimeError('Variable "btn_add" does not exist.', 46, $this->source); })()), [], ((array_key_exists("btn_translation_domain", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 46, $this->source); })()), (isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 46, $this->source); })()))) : ((isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 46, $this->source); })())))))), "html", null, true);
                    // line 47
                    yield "\"
                    >
                    <i class=\"fas fa-plus-circle\"></i>
                    ";
                    // line 51
                    yield "                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((((                    // line 52
array_key_exists("btn_translation_domain", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 52, $this->source); })()), null)) : (null)) === false)) ? (                    // line 53
(isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new RuntimeError('Variable "btn_add" does not exist.', 53, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(                    // line 54
(isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new RuntimeError('Variable "btn_add" does not exist.', 54, $this->source); })()), [], ((array_key_exists("btn_translation_domain", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 54, $this->source); })()), (isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 54, $this->source); })()))) : ((isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 54, $this->source); })())))))), "html", null, true);
                    // line 55
                    yield "
                </a>
                ";
                    // line 57
                    yield from                     $this->loadTemplate("@SonataAdmin/CRUD/Association/edit_modal.html.twig", "@SonataAdmin/Form/Type/sonata_type_model_autocomplete.html.twig", 57)->unwrap()->yield($context);
                    // line 58
                    yield "                ";
                    yield from                     $this->loadTemplate("@SonataAdmin/CRUD/Association/edit_many_script.html.twig", "@SonataAdmin/Form/Type/sonata_type_model_autocomplete.html.twig", 58)->unwrap()->yield($context);
                    // line 59
                    yield "            ";
                }
                // line 60
                yield "        </div>
    ";
            }
            // line 62
            yield "
    <script>
        ";
            // line 65
            yield "        jQuery(function (\$) {
            var autocompleteInput = \$('#";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 66, $this->source); })()), "js", null, true);
            yield "_autocomplete_input');

            var select2Options = {";
            // line 69
            $context["allowClearPlaceholder"] = ((( !(isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 69, $this->source); })()) &&  !(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 69, $this->source); })()))) ? (" ") : (""));
            // line 70
            yield "placeholder: '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new RuntimeError('Variable "placeholder" does not exist.', 70, $this->source); })())) ?: ((isset($context["allowClearPlaceholder"]) || array_key_exists("allowClearPlaceholder", $context) ? $context["allowClearPlaceholder"] : (function () { throw new RuntimeError('Variable "allowClearPlaceholder" does not exist.', 70, $this->source); })()))), "js", null, true);
            yield "', // allowClear needs placeholder to work properly
                allowClear: ";
            // line 71
            yield (((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 71, $this->source); })())) ? ("false") : ("true"));
            yield ",
                enable: ";
            // line 72
            yield (((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 72, $this->source); })())) ? ("false") : ("true"));
            yield ",
                minimumInputLength: ";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["minimum_input_length"]) || array_key_exists("minimum_input_length", $context) ? $context["minimum_input_length"] : (function () { throw new RuntimeError('Variable "minimum_input_length" does not exist.', 73, $this->source); })()), "js", null, true);
            yield ",
                theme: 'bootstrap',
                width: function() {
                    return Admin.get_select2_width(jQuery(this));
                },
                language: \"";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Sonata\AdminBundle\Twig\CanonicalizeRuntime')->getCanonicalizedLocaleForSelect2(), "js", null, true);
            yield "\",
                dropdownAutoWidth: ";
            // line 79
            yield (((isset($context["dropdown_auto_width"]) || array_key_exists("dropdown_auto_width", $context) ? $context["dropdown_auto_width"] : (function () { throw new RuntimeError('Variable "dropdown_auto_width" does not exist.', 79, $this->source); })())) ? ("true") : ("false"));
            yield ",
                containerCssClass: '";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["container_css_class"]) || array_key_exists("container_css_class", $context) ? $context["container_css_class"] : (function () { throw new RuntimeError('Variable "container_css_class" does not exist.', 80, $this->source); })()) . " form-control"), "js", null, true);
            yield "',
                dropdownCssClass: '";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["dropdown_css_class"]) || array_key_exists("dropdown_css_class", $context) ? $context["dropdown_css_class"] : (function () { throw new RuntimeError('Variable "dropdown_css_class" does not exist.', 81, $this->source); })()), "js", null, true);
            yield "',
                dropdownParent: autocompleteInput.parents('.modal').length > 0 ? autocompleteInput.parents('.modal') : \$(document.body),
                ajax: {
                    url:  '";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 84, $this->source); })())) ?: ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 84, $this->source); })()), "name", [], "any", false, false, false, 84), ((CoreExtension::getAttribute($this->env, $this->source, ($context["route"] ?? null), "parameters", [], "any", true, true, false, 84)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["route"] ?? null), "parameters", [], "any", false, false, false, 84), [])) : ([]))))), "js", null, true);
            yield "',
                    dataType: 'json',
                    delay: ";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((((isset($context["delay"]) || array_key_exists("delay", $context) ? $context["delay"] : (function () { throw new RuntimeError('Variable "delay" does not exist.', 86, $this->source); })()) == 100) && ((isset($context["quiet_millis"]) || array_key_exists("quiet_millis", $context) ? $context["quiet_millis"] : (function () { throw new RuntimeError('Variable "quiet_millis" does not exist.', 86, $this->source); })()) != 100))) ? ((isset($context["quiet_millis"]) || array_key_exists("quiet_millis", $context) ? $context["quiet_millis"] : (function () { throw new RuntimeError('Variable "quiet_millis" does not exist.', 86, $this->source); })())) : ((isset($context["delay"]) || array_key_exists("delay", $context) ? $context["delay"] : (function () { throw new RuntimeError('Variable "delay" does not exist.', 86, $this->source); })()))), "js", null, true);
            yield ", // NEXT_MAJOR: Replace by `";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["delay"]) || array_key_exists("delay", $context) ? $context["delay"] : (function () { throw new RuntimeError('Variable "delay" does not exist.', 86, $this->source); })()), "js", null, true);
            yield "` instead.
                    cache: ";
            // line 87
            yield (((isset($context["cache"]) || array_key_exists("cache", $context) ? $context["cache"] : (function () { throw new RuntimeError('Variable "cache" does not exist.', 87, $this->source); })())) ? ("true") : ("false"));
            yield ",
                    processResults: function (data, params) {
                        return {
                            results: data.items,
                            pagination: {
                                more: data.more
                            }
                        };
                    },
                    data: function (params) {
                        ";
            // line 97
            yield from $this->unwrap()->yieldBlock('sonata_type_model_autocomplete_ajax_request_parameters', $context, $blocks);
            // line 132
            yield "                    },
                },
                escapeMarkup: function (m) { return m; }, // we do not want to escape markup since we are displaying html in results
                templateResult: function (item) {
                    // When selecting a new result, the label is undefined and the correct property is text
                    if (typeof item.label === 'undefined') {
                        item.label = item.text;
                    }

                    return ";
            // line 141
            yield from $this->unwrap()->yieldBlock('sonata_type_model_autocomplete_dropdown_item_format', $context, $blocks);
            // line 147
            yield "; // format of one dropdown item
                },
                templateSelection: function (item) {
                    // The searching... placeholder appears as text
                    if (typeof item.label === 'undefined') {
                        item.label = item.text;
                    }

                    return ";
            // line 155
            yield from $this->unwrap()->yieldBlock('sonata_type_model_autocomplete_selection_format', $context, $blocks);
            // line 161
            yield "; // format selected item '<b>'+item.label+'</b>';
                },
            };

            autocompleteInput.select2(select2Options);

            autocompleteInput.on('select2:select select2:unselect', function(e) {
                if (e.type === 'select2:select') {
                    e.added = e.params.data;
                }
                if (e.type === 'select2:unselect') {
                    e.removed = e.params.data;
                }

                // console.log('change '+JSON.stringify({val:e.val, added:e.added, removed:e.removed}));

                // remove input
                if (undefined !== e.removed && null !== e.removed) {
                    var removedItems = e.removed;

                    ";
            // line 181
            if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 181, $this->source); })())) {
                // line 182
                yield "                        if(!\$.isArray(removedItems)) {
                            removedItems = [removedItems];
                        }

                        var length = removedItems.length;
                        for (var i = 0; i < length; i++) {
                            el = removedItems[i];
                            \$('#";
                // line 189
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 189, $this->source); })()), "js", null, true);
                yield "_hidden_inputs_wrap input:hidden[value=\"'+el.id+'\"]').remove();
                        }";
            } else {
                // line 192
                yield "\$('#";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 192, $this->source); })()), "js", null, true);
                yield "_hidden_inputs_wrap input:hidden').val('');";
            }
            // line 194
            yield "                }

                // add new input
                var el = null;
                if (undefined !== e.added) {

                    var addedItems = e.added;

                    ";
            // line 202
            if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 202, $this->source); })())) {
                // line 203
                yield "                        if(!\$.isArray(addedItems)) {
                            addedItems = [addedItems];
                        }

                        var length = addedItems.length;
                        for (var i = 0; i < length; i++) {
                            el = addedItems[i];
                            \$('#";
                // line 210
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 210, $this->source); })()), "js", null, true);
                yield "_hidden_inputs_wrap').append('<input type=\"hidden\" name=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 210, $this->source); })()), "js", null, true);
                yield "[]\" value=\"'+el.id+'\" />');
                        }";
            } else {
                // line 213
                yield "\$('#";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 213, $this->source); })()), "js", null, true);
                yield "_hidden_inputs_wrap input:hidden').val(addedItems.id);";
            }
            // line 215
            yield "                }
            });

            // remove unneeded autocomplete text input before form submit
            autocompleteInput.closest('form').submit(function()
            {
                autocompleteInput.remove();
                return true;
            });

            // Automatically select the created record after closing the popup window
            ";
            // line 226
            if (((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 226, $this->source); })()), "field_description", [], "any", false, false, false, 226) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 227
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 227, $this->source); })()), "field_description", [], "any", false, false, false, 227), "hasAssociationAdmin", [], "any", false, false, false, 227)) &&             // line 228
(isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new RuntimeError('Variable "btn_add" does not exist.', 228, $this->source); })())) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 229
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 229, $this->source); })()), "field_description", [], "any", false, false, false, 229), "associationadmin", [], "any", false, false, false, 229), "hasRoute", ["create"], "method", false, false, false, 229)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 230
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 230, $this->source); })()), "field_description", [], "any", false, false, false, 230), "associationadmin", [], "any", false, false, false, 230), "hasAccess", ["create"], "method", false, false, false, 230))) {
                // line 231
                yield "
                ";
                // line 232
                $context["create_url"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 232, $this->source); })()), "field_description", [], "any", false, false, false, 232), "associationadmin", [], "any", false, false, false, 232), "generateUrl", ["create", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 232, $this->source); })()), "field_description", [], "any", false, false, false, 232), "getOption", ["link_parameters", []], "method", false, false, false, 232)], "method", false, false, false, 232);
                // line 233
                yield "
                \$(document).ajaxSuccess(function(event, xhr, settings) {
                  if(typeof xhr.responseJSON != 'undefined') {
                      if ('";
                // line 236
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["create_url"]) || array_key_exists("create_url", $context) ? $context["create_url"] : (function () { throw new RuntimeError('Variable "create_url" does not exist.', 236, $this->source); })()), "js", null, true);
                yield "'.indexOf(settings.url) !== -1 && typeof xhr.responseJSON != 'string' && xhr.responseJSON.result == 'ok') {
                        var item = new Option(
                          new DOMParser().parseFromString(xhr.responseJSON.objectName, \"text/html\").documentElement.textContent,
                          xhr.responseJSON.objectId,
                          true, true
                          );

                        // append to Select2
                        autocompleteInput.append(item).trigger('change');

                        // manually trigger the `select2:select` event
                        autocompleteInput.trigger({
                            type: 'select2:select',
                            params: {
                                data: autocompleteInput.select2('data')
                            }
                        });

                        ";
                // line 254
                if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 254, $this->source); })())) {
                    // line 255
                    yield "                          \$('#";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 255, $this->source); })()), "js", null, true);
                    yield "_hidden_inputs_wrap').append('<input type=\"hidden\" name=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 255, $this->source); })()), "js", null, true);
                    yield "[]\" value=\"'+xhr.responseJSON.objectId+'\" />');
                        ";
                } else {
                    // line 257
                    yield "                          \$('#";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 257, $this->source); })()), "js", null, true);
                    yield "_hidden_inputs_wrap').html('<input type=\"hidden\" name=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 257, $this->source); })()), "js", null, true);
                    yield "\" value=\"'+xhr.responseJSON.objectId+'\" />');
                        ";
                }
                // line 259
                yield "                      }
                  }
                });
            ";
            }
            // line 263
            yield "        });
        ";
            // line 265
            yield "    </script>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 11
        yield Twig\Extension\CoreExtension::spaceless($___internal_parse_15_);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 97
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sonata_type_model_autocomplete_ajax_request_parameters(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_ajax_request_parameters"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_ajax_request_parameters"));

        // line 98
        yield "                        return {
                                //search term
                                '";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["req_param_name_search"]) || array_key_exists("req_param_name_search", $context) ? $context["req_param_name_search"] : (function () { throw new RuntimeError('Variable "req_param_name_search" does not exist.', 100, $this->source); })()), "js", null, true);
        yield "': params.term,

                                // page size
                                '";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["req_param_name_items_per_page"]) || array_key_exists("req_param_name_items_per_page", $context) ? $context["req_param_name_items_per_page"] : (function () { throw new RuntimeError('Variable "req_param_name_items_per_page" does not exist.', 103, $this->source); })()), "js", null, true);
        yield "': ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["items_per_page"]) || array_key_exists("items_per_page", $context) ? $context["items_per_page"] : (function () { throw new RuntimeError('Variable "items_per_page" does not exist.', 103, $this->source); })()), "js", null, true);
        yield ",

                                // page number
                                '";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["req_param_name_page_number"]) || array_key_exists("req_param_name_page_number", $context) ? $context["req_param_name_page_number"] : (function () { throw new RuntimeError('Variable "req_param_name_page_number" does not exist.', 106, $this->source); })()), "js", null, true);
        yield "': (params.page !== 'undefined' ? params.page : 1),

                                // admin
                                ";
        // line 109
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 109, $this->source); })()), "admin", [], "any", false, false, false, 109)) {
            // line 110
            yield "                                    'uniqid': '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 110, $this->source); })()), "admin", [], "any", false, false, false, 110), "uniqid", [], "any", false, false, false, 110), "js", null, true);
            yield "',
                                    '_sonata_admin': '";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 111, $this->source); })()), "admin", [], "any", false, false, false, 111), "baseCodeRoute", [], "any", false, false, false, 111), "js");
            yield "',
                                ";
        } elseif (        // line 112
(isset($context["admin_code"]) || array_key_exists("admin_code", $context) ? $context["admin_code"] : (function () { throw new RuntimeError('Variable "admin_code" does not exist.', 112, $this->source); })())) {
            // line 113
            yield "                                    '_sonata_admin': '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["admin_code"]) || array_key_exists("admin_code", $context) ? $context["admin_code"] : (function () { throw new RuntimeError('Variable "admin_code" does not exist.', 113, $this->source); })()), "js");
            yield "',
                                ";
        }
        // line 115
        yield "
                                ";
        // line 116
        if (((isset($context["context"]) || array_key_exists("context", $context) ? $context["context"] : (function () { throw new RuntimeError('Variable "context" does not exist.', 116, $this->source); })()) == "filter")) {
            // line 117
            yield "                                    'field':  '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace((isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 117, $this->source); })()), ["filter[" => "", "][value]" => "", "__" => "."]), "js", null, true);
            yield "',
                                    '_context': 'filter'
                                ";
        } else {
            // line 120
            yield "                                    'field':  '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 120, $this->source); })()), "js", null, true);
            yield "'
                                ";
        }
        // line 122
        yield "
                                // other parameters
                                ";
        // line 124
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["req_params"]) || array_key_exists("req_params", $context) ? $context["req_params"] : (function () { throw new RuntimeError('Variable "req_params" does not exist.', 124, $this->source); })()))) {
            yield ",";
            // line 125
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["req_params"]) || array_key_exists("req_params", $context) ? $context["req_params"] : (function () { throw new RuntimeError('Variable "req_params" does not exist.', 125, $this->source); })()));
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
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 126
                yield "'";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "js", null, true);
                yield "': '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "js", null, true);
                yield "'";
                // line 127
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 127)) {
                    yield ", ";
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
            unset($context['_seq'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 130
        yield "                        };
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 141
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sonata_type_model_autocomplete_dropdown_item_format(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_dropdown_item_format"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_dropdown_item_format"));

        // line 142
        if (((array_key_exists("safe_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["safe_label"]) || array_key_exists("safe_label", $context) ? $context["safe_label"] : (function () { throw new RuntimeError('Variable "safe_label" does not exist.', 142, $this->source); })()), false)) : (false))) {
            // line 143
            yield "                            '<div class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["dropdown_item_css_class"]) || array_key_exists("dropdown_item_css_class", $context) ? $context["dropdown_item_css_class"] : (function () { throw new RuntimeError('Variable "dropdown_item_css_class" does not exist.', 143, $this->source); })()), "js", null, true);
            yield "\">'+item.label+'<\\/div>'
                        ";
        } else {
            // line 145
            yield "                            jQuery('<div class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["dropdown_item_css_class"]) || array_key_exists("dropdown_item_css_class", $context) ? $context["dropdown_item_css_class"] : (function () { throw new RuntimeError('Variable "dropdown_item_css_class" does not exist.', 145, $this->source); })()), "js", null, true);
            yield "\">').text(item.label).prop('outerHTML')
                        ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 155
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sonata_type_model_autocomplete_selection_format(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_selection_format"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_selection_format"));

        // line 156
        if (((array_key_exists("safe_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["safe_label"]) || array_key_exists("safe_label", $context) ? $context["safe_label"] : (function () { throw new RuntimeError('Variable "safe_label" does not exist.', 156, $this->source); })()), false)) : (false))) {
            // line 157
            yield "                            item.label
                        ";
        } else {
            // line 159
            yield "                            jQuery('<div>').text(item.label).prop('innerHTML')
                        ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SonataAdmin/Form/Type/sonata_type_model_autocomplete.html.twig";
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
        return array (  658 => 159,  654 => 157,  652 => 156,  639 => 155,  624 => 145,  618 => 143,  616 => 142,  603 => 141,  591 => 130,  574 => 127,  568 => 126,  551 => 125,  548 => 124,  544 => 122,  538 => 120,  531 => 117,  529 => 116,  526 => 115,  520 => 113,  518 => 112,  514 => 111,  509 => 110,  507 => 109,  501 => 106,  493 => 103,  487 => 100,  483 => 98,  470 => 97,  459 => 11,  454 => 265,  451 => 263,  445 => 259,  437 => 257,  429 => 255,  427 => 254,  406 => 236,  401 => 233,  399 => 232,  396 => 231,  394 => 230,  393 => 229,  392 => 228,  391 => 227,  390 => 226,  377 => 215,  372 => 213,  365 => 210,  356 => 203,  354 => 202,  344 => 194,  339 => 192,  334 => 189,  325 => 182,  323 => 181,  301 => 161,  299 => 155,  289 => 147,  287 => 141,  276 => 132,  274 => 97,  261 => 87,  255 => 86,  250 => 84,  244 => 81,  240 => 80,  236 => 79,  232 => 78,  224 => 73,  220 => 72,  216 => 71,  211 => 70,  209 => 69,  204 => 66,  201 => 65,  197 => 62,  193 => 60,  190 => 59,  187 => 58,  185 => 57,  181 => 55,  179 => 54,  178 => 53,  177 => 52,  175 => 51,  170 => 47,  168 => 46,  167 => 45,  166 => 44,  164 => 43,  159 => 40,  156 => 39,  154 => 38,  152 => 37,  149 => 36,  147 => 35,  146 => 34,  141 => 33,  139 => 32,  135 => 30,  123 => 28,  108 => 25,  104 => 24,  102 => 23,  98 => 22,  94 => 20,  84 => 18,  80 => 17,  78 => 16,  65 => 15,  61 => 14,  57 => 13,  53 => 12,  51 => 11,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
{% apply spaceless %}
    <select id=\"{{ id }}_autocomplete_input\" data-sonata-select2=\"false\"
        {%- if disabled %} disabled=\"disabled\"{% endif %}
        {%- if multiple %} multiple=\"multiple\"{% endif %}
        {%- for attribute, value in attr %} {{ attribute }}=\"{{ value }}\" {% endfor -%}
    >
        {%- for idx, val in value|filter((val, idx) => idx~'' != '_labels') -%}
            <option value=\"{{ val }}\" selected>{{ value['_labels'][idx] }}</option>
        {%- endfor -%}
    </select>

    <div id=\"{{ id }}_hidden_inputs_wrap\">
        {% if multiple -%}
            {%- for idx, val in value|filter((val, idx) => idx~'' != '_labels') -%}
                <input type=\"hidden\" name=\"{{ full_name }}[]\" {%- if disabled %} disabled=\"disabled\"{% endif %} value=\"{{ val }}\">
            {%- endfor -%}
        {% else -%}
            <input type=\"hidden\" name=\"{{ full_name }}\" {%- if disabled %} disabled=\"disabled\"{% endif %} value=\"{{ value[0]|default('') }}\">
        {% endif -%}
    </div>

    {% if sonata_admin.field_description and sonata_admin.field_description.hasAssociationAdmin %}
        <div id=\"field_actions_{{ id }}\" class=\"field-actions\">
            {% set display_btn_add = sonata_admin.edit != 'admin' and sonata_admin.field_description.associationadmin.hasRoute('create')
                                     and sonata_admin.field_description.associationadmin.isGranted('CREATE') and btn_add %}
            {% if display_btn_add %}
                <a  href=\"{{ sonata_admin.field_description.associationadmin.generateUrl('create',
                             sonata_admin.field_description.getOption('link_parameters', {}))
                          }}\"
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
        </div>
    {% endif %}

    <script>
        {% autoescape 'js' %}
        jQuery(function (\$) {
            var autocompleteInput = \$('#{{ id }}_autocomplete_input');

            var select2Options = {
                {%- set allowClearPlaceholder = (not multiple and not required) ? ' ' : '' -%}
                placeholder: '{{ placeholder ?: allowClearPlaceholder }}', // allowClear needs placeholder to work properly
                allowClear: {{ required ? 'false' : 'true' }},
                enable: {{ disabled ? 'false' : 'true' }},
                minimumInputLength: {{ minimum_input_length }},
                theme: 'bootstrap',
                width: function() {
                    return Admin.get_select2_width(jQuery(this));
                },
                language: \"{{ canonicalize_locale_for_select2() }}\",
                dropdownAutoWidth: {{ dropdown_auto_width ? 'true' : 'false' }},
                containerCssClass: '{{ container_css_class ~ ' form-control' }}',
                dropdownCssClass: '{{ dropdown_css_class }}',
                dropdownParent: autocompleteInput.parents('.modal').length > 0 ? autocompleteInput.parents('.modal') : \$(document.body),
                ajax: {
                    url:  '{{ url ?: path(route.name, route.parameters|default([])) }}',
                    dataType: 'json',
                    delay: {{ delay == 100 and quiet_millis != 100 ? quiet_millis : delay }}, // NEXT_MAJOR: Replace by `{{ delay }}` instead.
                    cache: {{ cache ? 'true' : 'false' }},
                    processResults: function (data, params) {
                        return {
                            results: data.items,
                            pagination: {
                                more: data.more
                            }
                        };
                    },
                    data: function (params) {
                        {% block sonata_type_model_autocomplete_ajax_request_parameters %}
                        return {
                                //search term
                                '{{ req_param_name_search }}': params.term,

                                // page size
                                '{{ req_param_name_items_per_page }}': {{ items_per_page }},

                                // page number
                                '{{ req_param_name_page_number }}': (params.page !== 'undefined' ? params.page : 1),

                                // admin
                                {% if sonata_admin.admin %}
                                    'uniqid': '{{ sonata_admin.admin.uniqid }}',
                                    '_sonata_admin': '{{ sonata_admin.admin.baseCodeRoute|e('js') }}',
                                {% elseif admin_code %}
                                    '_sonata_admin': '{{ admin_code|e('js') }}',
                                {% endif %}

                                {% if context == 'filter' %}
                                    'field':  '{{ full_name|replace({'filter[': '', '][value]': '', '__':'.'}) }}',
                                    '_context': 'filter'
                                {% else %}
                                    'field':  '{{ name }}'
                                {% endif %}

                                // other parameters
                                {% if req_params is not empty %},
                                    {%- for key, value in req_params -%}
                                        '{{- key -}}': '{{- value -}}'
                                        {%- if not loop.last -%}, {% endif -%}
                                    {%- endfor -%}
                                {% endif %}
                        };
                        {% endblock %}
                    },
                },
                escapeMarkup: function (m) { return m; }, // we do not want to escape markup since we are displaying html in results
                templateResult: function (item) {
                    // When selecting a new result, the label is undefined and the correct property is text
                    if (typeof item.label === 'undefined') {
                        item.label = item.text;
                    }

                    return {% block sonata_type_model_autocomplete_dropdown_item_format -%}
                        {% if safe_label|default(false) %}
                            '<div class=\"{{ dropdown_item_css_class }}\">'+item.label+'<\\/div>'
                        {% else %}
                            jQuery('<div class=\"{{ dropdown_item_css_class }}\">').text(item.label).prop('outerHTML')
                        {% endif %}
                    {%- endblock %}; // format of one dropdown item
                },
                templateSelection: function (item) {
                    // The searching... placeholder appears as text
                    if (typeof item.label === 'undefined') {
                        item.label = item.text;
                    }

                    return {% block sonata_type_model_autocomplete_selection_format -%}
                        {% if safe_label|default(false) %}
                            item.label
                        {% else %}
                            jQuery('<div>').text(item.label).prop('innerHTML')
                        {% endif %}
                    {%- endblock %}; // format selected item '<b>'+item.label+'</b>';
                },
            };

            autocompleteInput.select2(select2Options);

            autocompleteInput.on('select2:select select2:unselect', function(e) {
                if (e.type === 'select2:select') {
                    e.added = e.params.data;
                }
                if (e.type === 'select2:unselect') {
                    e.removed = e.params.data;
                }

                // console.log('change '+JSON.stringify({val:e.val, added:e.added, removed:e.removed}));

                // remove input
                if (undefined !== e.removed && null !== e.removed) {
                    var removedItems = e.removed;

                    {% if multiple %}
                        if(!\$.isArray(removedItems)) {
                            removedItems = [removedItems];
                        }

                        var length = removedItems.length;
                        for (var i = 0; i < length; i++) {
                            el = removedItems[i];
                            \$('#{{ id }}_hidden_inputs_wrap input:hidden[value=\"'+el.id+'\"]').remove();
                        }
                    {%- else -%}
                        \$('#{{ id }}_hidden_inputs_wrap input:hidden').val('');
                    {%- endif %}
                }

                // add new input
                var el = null;
                if (undefined !== e.added) {

                    var addedItems = e.added;

                    {% if multiple %}
                        if(!\$.isArray(addedItems)) {
                            addedItems = [addedItems];
                        }

                        var length = addedItems.length;
                        for (var i = 0; i < length; i++) {
                            el = addedItems[i];
                            \$('#{{ id }}_hidden_inputs_wrap').append('<input type=\"hidden\" name=\"{{ full_name }}[]\" value=\"'+el.id+'\" />');
                        }
                    {%- else -%}
                        \$('#{{ id }}_hidden_inputs_wrap input:hidden').val(addedItems.id);
                    {%- endif %}
                }
            });

            // remove unneeded autocomplete text input before form submit
            autocompleteInput.closest('form').submit(function()
            {
                autocompleteInput.remove();
                return true;
            });

            // Automatically select the created record after closing the popup window
            {% if sonata_admin.field_description
                and sonata_admin.field_description.hasAssociationAdmin
                and btn_add
                and sonata_admin.field_description.associationadmin.hasRoute('create')
                and sonata_admin.field_description.associationadmin.hasAccess('create') %}

                {% set create_url = sonata_admin.field_description.associationadmin.generateUrl('create', sonata_admin.field_description.getOption('link_parameters', {})) %}

                \$(document).ajaxSuccess(function(event, xhr, settings) {
                  if(typeof xhr.responseJSON != 'undefined') {
                      if ('{{ create_url }}'.indexOf(settings.url) !== -1 && typeof xhr.responseJSON != 'string' && xhr.responseJSON.result == 'ok') {
                        var item = new Option(
                          new DOMParser().parseFromString(xhr.responseJSON.objectName, \"text/html\").documentElement.textContent,
                          xhr.responseJSON.objectId,
                          true, true
                          );

                        // append to Select2
                        autocompleteInput.append(item).trigger('change');

                        // manually trigger the `select2:select` event
                        autocompleteInput.trigger({
                            type: 'select2:select',
                            params: {
                                data: autocompleteInput.select2('data')
                            }
                        });

                        {% if multiple %}
                          \$('#{{ id }}_hidden_inputs_wrap').append('<input type=\"hidden\" name=\"{{ full_name }}[]\" value=\"'+xhr.responseJSON.objectId+'\" />');
                        {% else %}
                          \$('#{{ id }}_hidden_inputs_wrap').html('<input type=\"hidden\" name=\"{{ full_name }}\" value=\"'+xhr.responseJSON.objectId+'\" />');
                        {% endif %}
                      }
                  }
                });
            {% endif %}
        });
        {% endautoescape %}
    </script>
{% endapply %}
", "@SonataAdmin/Form/Type/sonata_type_model_autocomplete.html.twig", "/home/aleksandar/Desktop/Site/payment-demo/vendor/sonata-project/admin-bundle/src/Resources/views/Form/Type/sonata_type_model_autocomplete.html.twig");
    }
}
