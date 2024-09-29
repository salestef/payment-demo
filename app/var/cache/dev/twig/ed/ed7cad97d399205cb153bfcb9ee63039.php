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

/* @SonataAdmin/Form/form_admin_fields.html.twig */
class __TwigTemplate_bfaad6210f71b93d4c0bf464c6ef4f8f extends Template
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
            'form_errors' => [$this, 'block_form_errors'],
            'form_help' => [$this, 'block_form_help'],
            'form_widget_simple' => [$this, 'block_form_widget_simple'],
            'textarea_widget' => [$this, 'block_textarea_widget'],
            'money_widget' => [$this, 'block_money_widget'],
            'percent_widget' => [$this, 'block_percent_widget'],
            'checkbox_widget' => [$this, 'block_checkbox_widget'],
            'radio_widget' => [$this, 'block_radio_widget'],
            'form_label' => [$this, 'block_form_label'],
            'checkbox_label' => [$this, 'block_checkbox_label'],
            'radio_label' => [$this, 'block_radio_label'],
            'checkbox_radio_label' => [$this, 'block_checkbox_radio_label'],
            'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
            'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
            'date_widget' => [$this, 'block_date_widget'],
            'time_widget' => [$this, 'block_time_widget'],
            'datetime_widget' => [$this, 'block_datetime_widget'],
            'form_row' => [$this, 'block_form_row'],
            'checkbox_row' => [$this, 'block_checkbox_row'],
            'radio_row' => [$this, 'block_radio_row'],
            'sonata_type_native_collection_widget_row' => [$this, 'block_sonata_type_native_collection_widget_row'],
            'sonata_type_native_collection_widget' => [$this, 'block_sonata_type_native_collection_widget'],
            'sonata_type_immutable_array_widget' => [$this, 'block_sonata_type_immutable_array_widget'],
            'sonata_type_immutable_array_widget_row' => [$this, 'block_sonata_type_immutable_array_widget_row'],
            'sonata_type_model_autocomplete_widget' => [$this, 'block_sonata_type_model_autocomplete_widget'],
            'sonata_type_choice_field_mask_widget' => [$this, 'block_sonata_type_choice_field_mask_widget'],
            'sonata_type_choice_multiple_sortable' => [$this, 'block_sonata_type_choice_multiple_sortable'],
            'sonata_type_model_autocomplete_select2_options_js' => [$this, 'block_sonata_type_model_autocomplete_select2_options_js'],
            'sonata_type_model_list_widget' => [$this, 'block_sonata_type_model_list_widget'],
            'sonata_type_template_widget' => [$this, 'block_sonata_type_template_widget'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 12
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/Form/form_admin_fields.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/Form/form_admin_fields.html.twig"));

        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "@SonataAdmin/Form/form_admin_fields.html.twig", 12);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 14
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_errors(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_errors"));

        // line 15
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 15, $this->source); })())) > 0)) {
            // line 16
            yield "        ";
            if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "parent", [], "any", false, false, false, 16)) {
                yield "<div class=\"alert alert-danger\">";
            }
            // line 17
            yield "            <ul class=\"list-unstyled\">
                ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 18, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 19
                yield "                    <li><i class=\"fas fa-exclamation-circle\" aria-hidden=\"true\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 19), "html", null, true);
                yield "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            yield "            </ul>
        ";
            // line 22
            if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "parent", [], "any", false, false, false, 22)) {
                yield "</div>";
            }
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
    public function block_form_help(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_help"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_help"));

        // line 27
        if ((array_key_exists("sonata_admin_translation_domain", $context) && (null === (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 27, $this->source); })())))) {
            // line 28
            yield "        ";
            $context["translation_domain"] = (isset($context["sonata_admin_translation_domain"]) || array_key_exists("sonata_admin_translation_domain", $context) ? $context["sonata_admin_translation_domain"] : (function () { throw new RuntimeError('Variable "sonata_admin_translation_domain" does not exist.', 28, $this->source); })());
            // line 29
            yield "    ";
        }
        // line 30
        yield "    ";
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["help"]) || array_key_exists("help", $context) ? $context["help"] : (function () { throw new RuntimeError('Variable "help" does not exist.', 30, $this->source); })()))) {
            // line 31
            yield "        ";
            $context["help_attr"] = Twig\Extension\CoreExtension::merge((isset($context["help_attr"]) || array_key_exists("help_attr", $context) ? $context["help_attr"] : (function () { throw new RuntimeError('Variable "help_attr" does not exist.', 31, $this->source); })()), ["class" => (((CoreExtension::getAttribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", true, true, false, 31)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", false, false, false, 31), "")) : ("")) . " help-block sonata-ba-field-help")]);
            // line 32
            yield "        ";
            yield from $this->yieldParentBlock("form_help", $context, $blocks);
            yield "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 36
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_widget_simple(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 37
        yield "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 37, $this->source); })()), "text")) : ("text"));
        // line 38
        yield "    ";
        if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 38, $this->source); })()) != "file")) {
            // line 39
            yield "        ";
            $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 39, $this->source); })()), ["class" => (((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 39)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 39), "")) : ("")) . " form-control")]);
            // line 40
            yield "    ";
        }
        // line 41
        yield "    ";
        yield from $this->yieldParentBlock("form_widget_simple", $context, $blocks);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 44
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_textarea_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 45
        yield "    ";
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 45, $this->source); })()), ["class" => (((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 45)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 45), "")) : ("")) . " form-control")]);
        // line 46
        yield "    ";
        yield from $this->yieldParentBlock("textarea_widget", $context, $blocks);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 49
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_money_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "money_widget"));

        // line 50
        if (((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new RuntimeError('Variable "money_pattern" does not exist.', 50, $this->source); })()) == "{{ widget }}")) {
            // line 51
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 53
            yield "        ";
            $context["currencySymbol"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::replace((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new RuntimeError('Variable "money_pattern" does not exist.', 53, $this->source); })()), ["{{ widget }}" => ""]));
            // line 54
            yield "        ";
            if (CoreExtension::matches("/^{{ widget }}/", (isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new RuntimeError('Variable "money_pattern" does not exist.', 54, $this->source); })()))) {
                // line 55
                yield "            <div class=\"input-group\">";
                // line 56
                yield from                 $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
                // line 57
                yield "<span class=\"input-group-addon\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currencySymbol"]) || array_key_exists("currencySymbol", $context) ? $context["currencySymbol"] : (function () { throw new RuntimeError('Variable "currencySymbol" does not exist.', 57, $this->source); })()), "html", null, true);
                yield "</span>
            </div>
        ";
            } elseif (CoreExtension::matches("/{{ widget }}\$/",             // line 59
(isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new RuntimeError('Variable "money_pattern" does not exist.', 59, $this->source); })()))) {
                // line 60
                yield "            <div class=\"input-group\">
                <span class=\"input-group-addon\">";
                // line 61
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currencySymbol"]) || array_key_exists("currencySymbol", $context) ? $context["currencySymbol"] : (function () { throw new RuntimeError('Variable "currencySymbol" does not exist.', 61, $this->source); })()), "html", null, true);
                yield "</span>";
                // line 62
                yield from                 $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
                // line 63
                yield "</div>
        ";
            }
            // line 65
            yield "    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 68
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_percent_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 69
        yield "    ";
        $___internal_parse_2_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 70
            yield "        ";
            $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 70, $this->source); })()), "text")) : ("text"));
            // line 71
            yield "        <div class=\"input-group\">
            ";
            // line 72
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
            yield "
            <span class=\"input-group-addon\">%</span>
        </div>
    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 69
        yield Twig\Extension\CoreExtension::spaceless($___internal_parse_2_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 78
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_checkbox_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 79
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new RuntimeError('Variable "parent_label_class" does not exist.', 79, $this->source); })()), "")) : (""));
        // line 80
        if (CoreExtension::inFilter("checkbox-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new RuntimeError('Variable "parent_label_class" does not exist.', 80, $this->source); })()))) {
            // line 81
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), 'label', ["widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)]);
        } else {
            // line 83
            yield "<div class=\"checkbox\">";
            // line 84
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), 'label', ["widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)]);
            // line 85
            yield "</div>";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 89
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_radio_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 90
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new RuntimeError('Variable "parent_label_class" does not exist.', 90, $this->source); })()), "")) : (""));
        // line 91
        if (CoreExtension::inFilter("radio-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new RuntimeError('Variable "parent_label_class" does not exist.', 91, $this->source); })()))) {
            // line 92
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), 'label', ["widget" => $this->renderParentBlock("radio_widget", $context, $blocks)]);
        } else {
            // line 94
            yield "<div class=\"radio\">";
            // line 95
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), 'label', ["widget" => $this->renderParentBlock("radio_widget", $context, $blocks)]);
            // line 96
            yield "</div>";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 101
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label"));

        // line 102
        $___internal_parse_3_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 103
            yield "    ";
            if (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 103, $this->source); })()) === false) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 103, $this->source); })()), "options", [], "any", false, false, false, 103), "form_type", [], "array", false, false, false, 103) == "horizontal"))) {
                // line 104
                yield "        ";
                $context["label_class"] = "col-sm-3";
                // line 105
                yield "    ";
            }
            // line 106
            yield "
    ";
            // line 107
            $context["label_class"] = (((array_key_exists("label_class", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["label_class"]) || array_key_exists("label_class", $context) ? $context["label_class"] : (function () { throw new RuntimeError('Variable "label_class" does not exist.', 107, $this->source); })()), "")) : ("")) . " control-label");
            // line 108
            yield "
    ";
            // line 109
            if ( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 109, $this->source); })()) === false)) {
                // line 110
                yield "        ";
                $context["label_attr"] = Twig\Extension\CoreExtension::merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 110, $this->source); })()), ["class" => ((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 110)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 110), "")) : ("")) . " ") . (isset($context["label_class"]) || array_key_exists("label_class", $context) ? $context["label_class"] : (function () { throw new RuntimeError('Variable "label_class" does not exist.', 110, $this->source); })()))]);
                // line 111
                yield "
        ";
                // line 112
                if ( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new RuntimeError('Variable "compound" does not exist.', 112, $this->source); })())) {
                    // line 113
                    yield "            ";
                    $context["label_attr"] = Twig\Extension\CoreExtension::merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 113, $this->source); })()), ["for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 113, $this->source); })())]);
                    // line 114
                    yield "        ";
                }
                // line 115
                yield "        ";
                if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 115, $this->source); })())) {
                    // line 116
                    yield "            ";
                    $context["label_attr"] = Twig\Extension\CoreExtension::merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 116, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 116)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 116), "")) : ("")) . " required"))]);
                    // line 117
                    yield "        ";
                }
                // line 118
                yield "
        ";
                // line 119
                if (Twig\Extension\CoreExtension::testEmpty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 119, $this->source); })()))) {
                    // line 120
                    if ((array_key_exists("label_format", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new RuntimeError('Variable "label_format" does not exist.', 120, $this->source); })())))) {
                        // line 121
                        $context["label"] = Twig\Extension\CoreExtension::replace((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new RuntimeError('Variable "label_format" does not exist.', 121, $this->source); })()), ["%name%" =>                         // line 122
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 122, $this->source); })()), "%id%" =>                         // line 123
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 123, $this->source); })())]);
                    } else {
                        // line 126
                        $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 126, $this->source); })()));
                    }
                }
                // line 129
                yield "
        <label";
                // line 130
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 130, $this->source); })()));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                    yield "=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrvalue"], "html", null, true);
                    yield "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['attrname'], $context['attrvalue'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                yield ">";
                // line 131
                if (((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 131, $this->source); })()) === false)) {
                    // line 132
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 132, $this->source); })()), "html", null, true);
                } elseif ( !CoreExtension::getAttribute($this->env, $this->source,                 // line 133
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 133, $this->source); })()), "admin", [], "any", false, false, false, 133)) {
                    // line 134
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 134, $this->source); })()), (isset($context["label_translation_parameters"]) || array_key_exists("label_translation_parameters", $context) ? $context["label_translation_parameters"] : (function () { throw new RuntimeError('Variable "label_translation_parameters" does not exist.', 134, $this->source); })()), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 134, $this->source); })())), "html", null, true);
                } else {
                    // line 136
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 136, $this->source); })()), (isset($context["label_translation_parameters"]) || array_key_exists("label_translation_parameters", $context) ? $context["label_translation_parameters"] : (function () { throw new RuntimeError('Variable "label_translation_parameters" does not exist.', 136, $this->source); })()), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, true, false, 136), "translationDomain", [], "any", true, true, false, 136)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, true, false, 136), "translationDomain", [], "any", false, false, false, 136), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 136, $this->source); })()), "admin", [], "any", false, false, false, 136), "translationDomain", [], "any", false, false, false, 136))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 136, $this->source); })()), "admin", [], "any", false, false, false, 136), "translationDomain", [], "any", false, false, false, 136)))), "html", null, true);
                }
                // line 138
                yield "</label>
    ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 102
        yield Twig\Extension\CoreExtension::spaceless($___internal_parse_3_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 143
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_checkbox_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 144
        yield from         $this->unwrap()->yieldBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 147
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_radio_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "radio_label"));

        // line 148
        yield from         $this->unwrap()->yieldBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 151
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_checkbox_radio_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 152
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 152, $this->source); })()), "admin", [], "any", false, false, false, 152)) {
            // line 153
            yield "        ";
            $context["translation_domain"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 153, $this->source); })()), "field_description", [], "any", false, false, false, 153), "translationDomain", [], "any", false, false, false, 153);
            // line 154
            yield "    ";
        }
        // line 155
        yield "    ";
        // line 156
        yield "    ";
        if (array_key_exists("widget", $context)) {
            // line 157
            yield "        ";
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 157, $this->source); })())) {
                // line 158
                yield "            ";
                $context["label_attr"] = Twig\Extension\CoreExtension::merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 158, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 158)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 158), "")) : ("")) . " required"))]);
                // line 159
                yield "        ";
            }
            // line 160
            yield "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 161
                yield "            ";
                $context["label_attr"] = Twig\Extension\CoreExtension::merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 161, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim(((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 161)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 161), "")) : ("")) . " ") . (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new RuntimeError('Variable "parent_label_class" does not exist.', 161, $this->source); })())))]);
                // line 162
                yield "        ";
            }
            // line 163
            yield "        ";
            if (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 163, $this->source); })()) === false) && Twig\Extension\CoreExtension::testEmpty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 163, $this->source); })())))) {
                // line 164
                yield "            ";
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 164, $this->source); })()));
                // line 165
                yield "        ";
            }
            // line 166
            yield "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 166, $this->source); })()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrvalue"], "html", null, true);
                yield "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['attrname'], $context['attrvalue'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield ">";
            // line 167
            yield (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 167, $this->source); })());
            // line 168
            if ( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 168, $this->source); })()) === false)) {
                // line 169
                yield "<span class=\"control-label__text\">
                    ";
                // line 170
                if (((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 170, $this->source); })()) === false)) {
                    // line 171
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 171, $this->source); })()), "html", null, true);
                } else {
                    // line 173
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 173, $this->source); })()), (isset($context["label_translation_parameters"]) || array_key_exists("label_translation_parameters", $context) ? $context["label_translation_parameters"] : (function () { throw new RuntimeError('Variable "label_translation_parameters" does not exist.', 173, $this->source); })()), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 173, $this->source); })())), "html", null, true);
                }
                // line 175
                yield "</span>";
            }
            // line 177
            yield "</label>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 181
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_widget_expanded(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 182
        $___internal_parse_4_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 183
            yield "    ";
            $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 183, $this->source); })()), ["class" => (((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 183)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 183), "")) : ("")) . " list-unstyled")]);
            // line 184
            yield "    <ul ";
            yield from             $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
            yield ">
    ";
            // line 185
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 185, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 186
                yield "        <li>
            ";
                // line 187
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["horizontal" => false, "horizontal_input_wrapper_class" => "", "translation_domain" =>                 // line 190
(isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new RuntimeError('Variable "choice_translation_domain" does not exist.', 190, $this->source); })())]);
                // line 191
                yield " ";
                // line 192
                yield "        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 194
            yield "    </ul>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 182
        yield Twig\Extension\CoreExtension::spaceless($___internal_parse_4_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 198
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_widget_collapsed(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 199
        $___internal_parse_5_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 200
            yield "    ";
            if ((((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 200, $this->source); })()) && array_key_exists("placeholder", $context)) && (null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new RuntimeError('Variable "placeholder" does not exist.', 200, $this->source); })())))) {
                // line 201
                yield "        ";
                $context["required"] = false;
                // line 202
                yield "    ";
            } elseif (((((((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 202, $this->source); })()) && array_key_exists("empty_value", $context)) && array_key_exists("empty_value_in_choices", $context)) && (null === (isset($context["empty_value"]) || array_key_exists("empty_value", $context) ? $context["empty_value"] : (function () { throw new RuntimeError('Variable "empty_value" does not exist.', 202, $this->source); })()))) &&  !(isset($context["empty_value_in_choices"]) || array_key_exists("empty_value_in_choices", $context) ? $context["empty_value_in_choices"] : (function () { throw new RuntimeError('Variable "empty_value_in_choices" does not exist.', 202, $this->source); })())) &&  !(isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 202, $this->source); })()))) {
                // line 203
                yield "        ";
                $context["required"] = false;
                // line 204
                yield "    ";
            }
            // line 205
            yield "
    ";
            // line 206
            $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 206, $this->source); })()), ["class" => (((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 206)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 206), "")) : ("")) . " form-control")]);
            // line 207
            yield "    ";
            if (((array_key_exists("sortable", $context) && (isset($context["sortable"]) || array_key_exists("sortable", $context) ? $context["sortable"] : (function () { throw new RuntimeError('Variable "sortable" does not exist.', 207, $this->source); })())) && (isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 207, $this->source); })()))) {
                // line 208
                yield "        ";
                yield from                 $this->unwrap()->yieldBlock("sonata_type_choice_multiple_sortable", $context, $blocks);
                yield "
    ";
            } else {
                // line 210
                yield "        ";
                $context["data_placeholder"] = (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new RuntimeError('Variable "placeholder" does not exist.', 210, $this->source); })());
                // line 211
                yield "        ";
                if (((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new RuntimeError('Variable "placeholder" does not exist.', 211, $this->source); })()) != "")) {
                    // line 212
                    yield "            ";
                    if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 212, $this->source); })()), "admin", [], "any", false, false, false, 212)) {
                        // line 213
                        yield "                ";
                        $context["data_placeholder"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new RuntimeError('Variable "placeholder" does not exist.', 213, $this->source); })()), [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 213, $this->source); })()));
                        // line 214
                        yield "            ";
                    } else {
                        // line 215
                        yield "                ";
                        $context["data_placeholder"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new RuntimeError('Variable "placeholder" does not exist.', 215, $this->source); })()), [], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 215, $this->source); })()), "field_description", [], "any", false, false, false, 215), "translationDomain", [], "any", false, false, false, 215));
                        // line 216
                        yield "            ";
                    }
                    // line 217
                    yield "        ";
                }
                // line 218
                yield "
        ";
                // line 219
                $context["use_select2"] = (array_key_exists("sonata_config", $context) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_config"]) || array_key_exists("sonata_config", $context) ? $context["sonata_config"] : (function () { throw new RuntimeError('Variable "sonata_config" does not exist.', 219, $this->source); })()), "getOption", ["use_select2"], "method", false, false, false, 219));
                // line 220
                yield "
        <select ";
                // line 221
                yield from                 $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
                if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 221, $this->source); })())) {
                    yield " multiple=\"multiple\"";
                }
                if (((array_key_exists("placeholder", $context) &&  !(null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new RuntimeError('Variable "placeholder" does not exist.', 221, $this->source); })()))) && (isset($context["use_select2"]) || array_key_exists("use_select2", $context) ? $context["use_select2"] : (function () { throw new RuntimeError('Variable "use_select2" does not exist.', 221, $this->source); })()))) {
                    yield " data-placeholder=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["data_placeholder"]) || array_key_exists("data_placeholder", $context) ? $context["data_placeholder"] : (function () { throw new RuntimeError('Variable "data_placeholder" does not exist.', 221, $this->source); })()), "html", null, true);
                    yield "\"";
                }
                yield ">
            ";
                // line 222
                if ((array_key_exists("empty_value", $context) &&  !(null === (isset($context["empty_value"]) || array_key_exists("empty_value", $context) ? $context["empty_value"] : (function () { throw new RuntimeError('Variable "empty_value" does not exist.', 222, $this->source); })())))) {
                    // line 223
                    yield "                <option value=\"\"";
                    if (((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 223, $this->source); })()) && Twig\Extension\CoreExtension::testEmpty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 223, $this->source); })())))) {
                        yield " selected=\"selected\"";
                    }
                    yield ">
                    ";
                    // line 224
                    if (((isset($context["empty_value"]) || array_key_exists("empty_value", $context) ? $context["empty_value"] : (function () { throw new RuntimeError('Variable "empty_value" does not exist.', 224, $this->source); })()) != "")) {
                        // line 225
                        yield "                        ";
                        if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 225, $this->source); })()), "admin", [], "any", false, false, false, 225)) {
                            // line 226
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["empty_value"]) || array_key_exists("empty_value", $context) ? $context["empty_value"] : (function () { throw new RuntimeError('Variable "empty_value" does not exist.', 226, $this->source); })()), [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 226, $this->source); })())), "html", null, true);
                        } else {
                            // line 228
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["empty_value"]) || array_key_exists("empty_value", $context) ? $context["empty_value"] : (function () { throw new RuntimeError('Variable "empty_value" does not exist.', 228, $this->source); })()), [], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 228, $this->source); })()), "field_description", [], "any", false, false, false, 228), "translationDomain", [], "any", false, false, false, 228)), "html", null, true);
                        }
                        // line 230
                        yield "                    ";
                    }
                    // line 231
                    yield "                </option>
            ";
                } elseif ((                // line 232
array_key_exists("placeholder", $context) &&  !(null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new RuntimeError('Variable "placeholder" does not exist.', 232, $this->source); })())))) {
                    // line 233
                    yield "                <option value=\"\"";
                    if (((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 233, $this->source); })()) && Twig\Extension\CoreExtension::testEmpty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 233, $this->source); })())))) {
                        yield " selected=\"selected\"";
                    }
                    yield ">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["data_placeholder"]) || array_key_exists("data_placeholder", $context) ? $context["data_placeholder"] : (function () { throw new RuntimeError('Variable "data_placeholder" does not exist.', 233, $this->source); })()), "html", null, true);
                    yield "</option>
            ";
                }
                // line 235
                yield "            ";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new RuntimeError('Variable "preferred_choices" does not exist.', 235, $this->source); })())) > 0)) {
                    // line 236
                    yield "                ";
                    $context["options"] = (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new RuntimeError('Variable "preferred_choices" does not exist.', 236, $this->source); })());
                    // line 237
                    yield "                ";
                    yield from                     $this->unwrap()->yieldBlock("choice_widget_options", $context, $blocks);
                    yield "
                ";
                    // line 238
                    if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 238, $this->source); })())) > 0)) {
                        // line 239
                        yield "                    <option disabled=\"disabled\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new RuntimeError('Variable "separator" does not exist.', 239, $this->source); })()), "html", null, true);
                        yield "</option>
                ";
                    }
                    // line 241
                    yield "            ";
                }
                // line 242
                yield "            ";
                $context["options"] = (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 242, $this->source); })());
                // line 243
                yield "            ";
                yield from                 $this->unwrap()->yieldBlock("choice_widget_options", $context, $blocks);
                yield "
        </select>
    ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 199
        yield Twig\Extension\CoreExtension::spaceless($___internal_parse_5_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 249
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_date_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_widget"));

        // line 250
        $___internal_parse_6_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 251
            yield "    ";
            if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 251, $this->source); })()) == "single_text")) {
                // line 252
                yield "        ";
                yield from                 $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
                yield "
    ";
            } else {
                // line 254
                yield "        ";
                if (( !array_key_exists("row", $context) || ((isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 254, $this->source); })()) == true))) {
                    // line 255
                    yield "            ";
                    $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 255, $this->source); })()), ["class" => (((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 255)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 255), "")) : ("")) . " row")]);
                    // line 256
                    yield "        ";
                }
                // line 257
                yield "        ";
                $context["input_wrapper_class"] = ((array_key_exists("input_wrapper_class", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["input_wrapper_class"]) || array_key_exists("input_wrapper_class", $context) ? $context["input_wrapper_class"] : (function () { throw new RuntimeError('Variable "input_wrapper_class" does not exist.', 257, $this->source); })()), "col-sm-4")) : ("col-sm-4"));
                // line 258
                yield "        <div ";
                yield from                 $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
                yield ">
            ";
                // line 259
                yield Twig\Extension\CoreExtension::replace((isset($context["date_pattern"]) || array_key_exists("date_pattern", $context) ? $context["date_pattern"] : (function () { throw new RuntimeError('Variable "date_pattern" does not exist.', 259, $this->source); })()), ["{{ year }}" => (((("<div class=\"" .                 // line 260
(isset($context["input_wrapper_class"]) || array_key_exists("input_wrapper_class", $context) ? $context["input_wrapper_class"] : (function () { throw new RuntimeError('Variable "input_wrapper_class" does not exist.', 260, $this->source); })())) . "\">") . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 260, $this->source); })()), "year", [], "any", false, false, false, 260), 'widget')) . "</div>"), "{{ month }}" => (((("<div class=\"" .                 // line 261
(isset($context["input_wrapper_class"]) || array_key_exists("input_wrapper_class", $context) ? $context["input_wrapper_class"] : (function () { throw new RuntimeError('Variable "input_wrapper_class" does not exist.', 261, $this->source); })())) . "\">") . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 261, $this->source); })()), "month", [], "any", false, false, false, 261), 'widget')) . "</div>"), "{{ day }}" => (((("<div class=\"" .                 // line 262
(isset($context["input_wrapper_class"]) || array_key_exists("input_wrapper_class", $context) ? $context["input_wrapper_class"] : (function () { throw new RuntimeError('Variable "input_wrapper_class" does not exist.', 262, $this->source); })())) . "\">") . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 262, $this->source); })()), "day", [], "any", false, false, false, 262), 'widget')) . "</div>")]);
                // line 263
                yield "
        </div>
    ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 250
        yield Twig\Extension\CoreExtension::spaceless($___internal_parse_6_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 269
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_time_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "time_widget"));

        // line 270
        $___internal_parse_7_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 271
            yield "    ";
            if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 271, $this->source); })()) == "single_text")) {
                // line 272
                yield "        ";
                yield from                 $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
                yield "
    ";
            } else {
                // line 274
                yield "        ";
                if (( !array_key_exists("row", $context) || ((isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 274, $this->source); })()) == true))) {
                    // line 275
                    yield "            ";
                    $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 275, $this->source); })()), ["class" => (((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 275)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 275), "")) : ("")) . " row")]);
                    // line 276
                    yield "        ";
                }
                // line 277
                yield "        ";
                $context["input_wrapper_class"] = ((array_key_exists("input_wrapper_class", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["input_wrapper_class"]) || array_key_exists("input_wrapper_class", $context) ? $context["input_wrapper_class"] : (function () { throw new RuntimeError('Variable "input_wrapper_class" does not exist.', 277, $this->source); })()), "col-sm-6")) : ("col-sm-6"));
                // line 278
                yield "        <div ";
                yield from                 $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
                yield ">
            <div class=\"";
                // line 279
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["input_wrapper_class"]) || array_key_exists("input_wrapper_class", $context) ? $context["input_wrapper_class"] : (function () { throw new RuntimeError('Variable "input_wrapper_class" does not exist.', 279, $this->source); })()), "html", null, true);
                yield "\">
                ";
                // line 280
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 280, $this->source); })()), "hour", [], "any", false, false, false, 280), 'widget');
                yield "
            </div>
            ";
                // line 282
                if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new RuntimeError('Variable "with_minutes" does not exist.', 282, $this->source); })())) {
                    // line 283
                    yield "                <div class=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["input_wrapper_class"]) || array_key_exists("input_wrapper_class", $context) ? $context["input_wrapper_class"] : (function () { throw new RuntimeError('Variable "input_wrapper_class" does not exist.', 283, $this->source); })()), "html", null, true);
                    yield "\">
                    ";
                    // line 284
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 284, $this->source); })()), "minute", [], "any", false, false, false, 284), 'widget');
                    yield "
                </div>
            ";
                }
                // line 287
                yield "            ";
                if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new RuntimeError('Variable "with_seconds" does not exist.', 287, $this->source); })())) {
                    // line 288
                    yield "                <div class=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["input_wrapper_class"]) || array_key_exists("input_wrapper_class", $context) ? $context["input_wrapper_class"] : (function () { throw new RuntimeError('Variable "input_wrapper_class" does not exist.', 288, $this->source); })()), "html", null, true);
                    yield "\">
                    ";
                    // line 289
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 289, $this->source); })()), "second", [], "any", false, false, false, 289), 'widget');
                    yield "
                </div>
            ";
                }
                // line 292
                yield "        </div>
    ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 270
        yield Twig\Extension\CoreExtension::spaceless($___internal_parse_7_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 297
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_datetime_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 298
        $___internal_parse_8_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 299
            yield "    ";
            if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 299, $this->source); })()) == "single_text")) {
                // line 300
                yield "        ";
                yield from                 $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
                yield "
    ";
            } else {
                // line 302
                yield "        ";
                $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 302, $this->source); })()), ["class" => (((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 302)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 302), "")) : ("")) . " row")]);
                // line 303
                yield "        <div ";
                yield from                 $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
                yield ">
            ";
                // line 304
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 304, $this->source); })()), "date", [], "any", false, false, false, 304), 'errors');
                yield "
            ";
                // line 305
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 305, $this->source); })()), "time", [], "any", false, false, false, 305), 'errors');
                yield "

            ";
                // line 307
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 307, $this->source); })()), "date", [], "any", false, false, false, 307), "vars", [], "any", false, false, false, 307), "widget", [], "any", false, false, false, 307) == "single_text")) {
                    // line 308
                    yield "                <div class=\"col-sm-2\">
                    ";
                    // line 309
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 309, $this->source); })()), "date", [], "any", false, false, false, 309), 'widget');
                    yield "
                </div>
            ";
                } else {
                    // line 312
                    yield "                ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 312, $this->source); })()), "date", [], "any", false, false, false, 312), 'widget', ["row" => false, "input_wrapper_class" => "col-sm-2"]);
                    yield "
            ";
                }
                // line 314
                yield "
            ";
                // line 315
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 315, $this->source); })()), "time", [], "any", false, false, false, 315), "vars", [], "any", false, false, false, 315), "widget", [], "any", false, false, false, 315) == "single_text")) {
                    // line 316
                    yield "                <div class=\"col-sm-2\">
                    ";
                    // line 317
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 317, $this->source); })()), "time", [], "any", false, false, false, 317), 'widget');
                    yield "
                </div>
            ";
                } else {
                    // line 320
                    yield "                ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 320, $this->source); })()), "time", [], "any", false, false, false, 320), 'widget', ["row" => false, "input_wrapper_class" => "col-sm-2"]);
                    yield "
            ";
                }
                // line 322
                yield "        </div>
    ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 298
        yield Twig\Extension\CoreExtension::spaceless($___internal_parse_8_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 327
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row"));

        // line 328
        yield "    ";
        $context["show_label"] = (($context["show_label"]) ?? (true));
        // line 329
        yield "    ";
        $context["row_id"] = ("sonata-ba-field-container-" . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 329, $this->source); })()));
        // line 330
        yield "    ";
        $context["row_class"] = Twig\Extension\CoreExtension::trim(((((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 330)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 330), "")) : ("")) . " form-group") . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 330, $this->source); })())) > 0)) ? (" has-error") : (""))));
        // line 331
        yield "    <div";
        $__internal_compile_0 = $context;
        $__internal_compile_1 = ["attr" => Twig\Extension\CoreExtension::merge((isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 331, $this->source); })()), ["id" => (isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 331, $this->source); })()), "class" => (isset($context["row_class"]) || array_key_exists("row_class", $context) ? $context["row_class"] : (function () { throw new RuntimeError('Variable "row_class" does not exist.', 331, $this->source); })())])];
        if (!is_iterable($__internal_compile_1)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 331, $this->getSourceContext());
        }
        $__internal_compile_1 = CoreExtension::toArray($__internal_compile_1);
        $context = $__internal_compile_1 + $context + $this->env->getGlobals();
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $__internal_compile_0;
        yield ">
        ";
        // line 332
        $context["div_class"] = "sonata-ba-field";
        // line 333
        yield "
        ";
        // line 334
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 334, $this->source); })()) === false)) {
            // line 335
            yield "            ";
            $context["div_class"] = ((isset($context["div_class"]) || array_key_exists("div_class", $context) ? $context["div_class"] : (function () { throw new RuntimeError('Variable "div_class" does not exist.', 335, $this->source); })()) . " sonata-collection-row-without-label");
            // line 336
            yield "        ";
        }
        // line 337
        yield "
        ";
        // line 338
        if ((array_key_exists("sonata_admin", $context) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 338, $this->source); })()), "options", [], "any", false, false, false, 338), "form_type", [], "array", false, false, false, 338) == "horizontal"))) {
            // line 339
            yield "            ";
            // line 340
            yield "            ";
            if ((((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 340, $this->source); })()) === false) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 340), "checked", [], "any", true, true, false, 340))) {
                // line 341
                yield "                ";
                if (CoreExtension::inFilter("collection", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 341, $this->source); })()), "parent", [], "any", false, false, false, 341), "vars", [], "any", false, false, false, 341), "block_prefixes", [], "any", false, false, false, 341))) {
                    // line 342
                    yield "                    ";
                    $context["div_class"] = ((isset($context["div_class"]) || array_key_exists("div_class", $context) ? $context["div_class"] : (function () { throw new RuntimeError('Variable "div_class" does not exist.', 342, $this->source); })()) . " col-sm-12");
                    // line 343
                    yield "                ";
                } else {
                    // line 344
                    yield "                    ";
                    $context["div_class"] = ((isset($context["div_class"]) || array_key_exists("div_class", $context) ? $context["div_class"] : (function () { throw new RuntimeError('Variable "div_class" does not exist.', 344, $this->source); })()) . " col-sm-9 col-sm-offset-3");
                    // line 345
                    yield "                ";
                }
                // line 346
                yield "            ";
            } else {
                // line 347
                yield "                ";
                $context["div_class"] = ((isset($context["div_class"]) || array_key_exists("div_class", $context) ? $context["div_class"] : (function () { throw new RuntimeError('Variable "div_class" does not exist.', 347, $this->source); })()) . " col-sm-9");
                // line 348
                yield "            ";
            }
            // line 349
            yield "        ";
        }
        // line 350
        yield "
        ";
        // line 351
        if ((isset($context["show_label"]) || array_key_exists("show_label", $context) ? $context["show_label"] : (function () { throw new RuntimeError('Variable "show_label" does not exist.', 351, $this->source); })())) {
            // line 352
            yield "            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 352, $this->source); })()), 'label', (CoreExtension::testEmpty($_label_ = ((array_key_exists("label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 352, $this->source); })()), null)) : (null))) ? [] : ["label" => $_label_]));
            yield "
        ";
        }
        // line 354
        yield "
        ";
        // line 355
        if ((array_key_exists("sonata_admin", $context) && (isset($context["sonata_admin_enabled"]) || array_key_exists("sonata_admin_enabled", $context) ? $context["sonata_admin_enabled"] : (function () { throw new RuntimeError('Variable "sonata_admin_enabled" does not exist.', 355, $this->source); })()))) {
            // line 356
            yield "            ";
            $context["div_class"] = (((((isset($context["div_class"]) || array_key_exists("div_class", $context) ? $context["div_class"] : (function () { throw new RuntimeError('Variable "div_class" does not exist.', 356, $this->source); })()) . " sonata-ba-field-") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 356, $this->source); })()), "edit", [], "any", false, false, false, 356)) . "-") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 356, $this->source); })()), "inline", [], "any", false, false, false, 356));
            // line 357
            yield "        ";
        }
        // line 358
        yield "
        ";
        // line 359
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 359, $this->source); })())) > 0)) {
            // line 360
            yield "            ";
            $context["div_class"] = ((isset($context["div_class"]) || array_key_exists("div_class", $context) ? $context["div_class"] : (function () { throw new RuntimeError('Variable "div_class" does not exist.', 360, $this->source); })()) . " sonata-ba-field-error");
            // line 361
            yield "        ";
        }
        // line 362
        yield "
        <div class=\"";
        // line 363
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["div_class"]) || array_key_exists("div_class", $context) ? $context["div_class"] : (function () { throw new RuntimeError('Variable "div_class" does not exist.', 363, $this->source); })()), "html", null, true);
        yield "\">
            ";
        // line 364
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 364, $this->source); })()), 'widget', ["horizontal" => false, "horizontal_input_wrapper_class" => ""]);
        yield " ";
        // line 365
        yield "
            ";
        // line 366
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 366, $this->source); })())) > 0)) {
            // line 367
            yield "                <div class=\"help-block sonata-ba-field-error-messages\">
                    ";
            // line 368
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 368, $this->source); })()), 'errors');
            yield "
                </div>
            ";
        }
        // line 371
        yield "
            ";
        // line 372
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 372, $this->source); })()), 'help');
        yield "
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 377
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_checkbox_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 378
        $context["show_label"] = false;
        // line 379
        yield "    ";
        yield from         $this->unwrap()->yieldBlock("form_row", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 382
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_radio_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "radio_row"));

        // line 383
        $context["show_label"] = false;
        // line 384
        yield "    ";
        yield from         $this->unwrap()->yieldBlock("form_row", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 387
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sonata_type_native_collection_widget_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_type_native_collection_widget_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_type_native_collection_widget_row"));

        // line 388
        $___internal_parse_9_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 389
            yield "    <div class=\"sonata-collection-row\">
        ";
            // line 390
            if ((isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new RuntimeError('Variable "allow_delete" does not exist.', 390, $this->source); })())) {
                // line 391
                yield "            <div class=\"row\">
                <div class=\"col-xs-1\">
                    <a href=\"#\" class=\"btn btn-link sonata-collection-delete\">
                        <i class=\"fas fa-minus-circle\" aria-hidden=\"true\"></i>
                    </a>
                </div>
                <div class=\"col-xs-11\">
        ";
            }
            // line 399
            yield "            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 399, $this->source); })()), 'row', ["label" => false]);
            yield "
        ";
            // line 400
            if ((isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new RuntimeError('Variable "allow_delete" does not exist.', 400, $this->source); })())) {
                // line 401
                yield "                </div>
            </div>
        ";
            }
            // line 404
            yield "    </div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 388
        yield Twig\Extension\CoreExtension::spaceless($___internal_parse_9_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 408
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sonata_type_native_collection_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_type_native_collection_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_type_native_collection_widget"));

        // line 409
        $___internal_parse_10_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 410
            yield "    ";
            if (array_key_exists("prototype", $context)) {
                // line 411
                yield "        ";
                $context["child"] = (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 411, $this->source); })());
                // line 412
                yield "        ";
                $context["allow_delete_backup"] = (isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new RuntimeError('Variable "allow_delete" does not exist.', 412, $this->source); })());
                // line 413
                yield "        ";
                $context["allow_delete"] = true;
                // line 414
                yield "        ";
                $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 414, $this->source); })()), ["data-prototype" =>                 $this->unwrap()->renderBlock("sonata_type_native_collection_widget_row", $context, $blocks), "data-prototype-name" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 414, $this->source); })()), "vars", [], "any", false, false, false, 414), "name", [], "any", false, false, false, 414), "class" => ((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 414)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 414), "")) : (""))]);
                // line 415
                yield "        ";
                $context["allow_delete"] = (isset($context["allow_delete_backup"]) || array_key_exists("allow_delete_backup", $context) ? $context["allow_delete_backup"] : (function () { throw new RuntimeError('Variable "allow_delete_backup" does not exist.', 415, $this->source); })());
                // line 416
                yield "    ";
            }
            // line 417
            yield "    <div ";
            yield from             $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
            yield ">
        ";
            // line 418
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 418, $this->source); })()), 'errors');
            yield "
        ";
            // line 419
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 419, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 420
                yield "            ";
                yield from                 $this->unwrap()->yieldBlock("sonata_type_native_collection_widget_row", $context, $blocks);
                yield "
        ";
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
            unset($context['_seq'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 422
            yield "        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 422, $this->source); })()), 'rest');
            yield "
        ";
            // line 423
            if ((isset($context["allow_add"]) || array_key_exists("allow_add", $context) ? $context["allow_add"] : (function () { throw new RuntimeError('Variable "allow_add" does not exist.', 423, $this->source); })())) {
                // line 424
                yield "            <div><a href=\"#\" class=\"btn btn-link sonata-collection-add\"><i class=\"fas fa-plus-circle\" aria-hidden=\"true\"></i></a></div>
        ";
            }
            // line 426
            yield "    </div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 409
        yield Twig\Extension\CoreExtension::spaceless($___internal_parse_10_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 430
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sonata_type_immutable_array_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_type_immutable_array_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_type_immutable_array_widget"));

        // line 431
        yield "    ";
        $___internal_parse_11_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 432
            yield "        <div ";
            yield from             $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
            yield ">
            ";
            // line 433
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 433, $this->source); })()), 'errors');
            yield "

            ";
            // line 435
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 435, $this->source); })()));
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
            foreach ($context['_seq'] as $context["key"] => $context["child"]) {
                // line 436
                yield "                ";
                yield from                 $this->unwrap()->yieldBlock("sonata_type_immutable_array_widget_row", $context, $blocks);
                yield "
            ";
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
            unset($context['_seq'], $context['key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 438
            yield "
            ";
            // line 439
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 439, $this->source); })()), 'rest');
            yield "
        </div>
    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 431
        yield Twig\Extension\CoreExtension::spaceless($___internal_parse_11_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 444
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sonata_type_immutable_array_widget_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_type_immutable_array_widget_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_type_immutable_array_widget_row"));

        // line 445
        yield "    ";
        $___internal_parse_12_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 446
            yield "        <div class=\"form-group";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 446, $this->source); })()), "vars", [], "any", false, false, false, 446), "errors", [], "any", false, false, false, 446)) > 0)) {
                yield " has-error";
            }
            yield "\" id=\"sonata-ba-field-container-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 446, $this->source); })()), "html", null, true);
            yield "-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 446, $this->source); })()), "html", null, true);
            yield "\">

            ";
            // line 448
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 448, $this->source); })()), 'label');
            yield "

            ";
            // line 450
            $context["div_class"] = "";
            // line 451
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 451, $this->source); })()), "options", [], "any", false, false, false, 451), "form_type", [], "array", false, false, false, 451) == "horizontal")) {
                // line 452
                yield "                ";
                $context["div_class"] = "col-sm-9";
                // line 453
                yield "            ";
            }
            // line 454
            yield "
            <div class=\"";
            // line 455
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["div_class"]) || array_key_exists("div_class", $context) ? $context["div_class"] : (function () { throw new RuntimeError('Variable "div_class" does not exist.', 455, $this->source); })()), "html", null, true);
            yield " sonata-ba-field sonata-ba-field-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 455, $this->source); })()), "edit", [], "any", false, false, false, 455), "html", null, true);
            yield "-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 455, $this->source); })()), "inline", [], "any", false, false, false, 455), "html", null, true);
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 455, $this->source); })()), "vars", [], "any", false, false, false, 455), "errors", [], "any", false, false, false, 455)) > 0)) {
                yield " sonata-ba-field-error";
            }
            yield "\">
                ";
            // line 456
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 456, $this->source); })()), 'widget', ["horizontal" => false, "horizontal_input_wrapper_class" => ""]);
            yield " ";
            // line 457
            yield "            </div>

            ";
            // line 459
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 459, $this->source); })()), "vars", [], "any", false, false, false, 459), "errors", [], "any", false, false, false, 459)) > 0)) {
                // line 460
                yield "                <div class=\"help-block sonata-ba-field-error-messages\">
                    ";
                // line 461
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 461, $this->source); })()), 'errors');
                yield "
                </div>
            ";
            }
            // line 464
            yield "        </div>
    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 445
        yield Twig\Extension\CoreExtension::spaceless($___internal_parse_12_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 468
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sonata_type_model_autocomplete_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_widget"));

        // line 469
        yield "    ";
        yield from         $this->loadTemplate((isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 469, $this->source); })()), "@SonataAdmin/Form/form_admin_fields.html.twig", 469)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 472
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sonata_type_choice_field_mask_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_type_choice_field_mask_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_type_choice_field_mask_widget"));

        // line 473
        yield "    ";
        yield from         $this->unwrap()->yieldBlock("choice_widget", $context, $blocks);
        yield "
    ";
        // line 475
        yield "    ";
        $context["main_form_name"] = Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 475, $this->source); })()), 0, ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 475, $this->source); })())) - Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 475, $this->source); })()))) - 1));
        // line 476
        yield "    ";
        if ((isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new RuntimeError('Variable "expanded" does not exist.', 476, $this->source); })())) {
            // line 477
            yield "        ";
            $context["js_selector"] = (((("#" . (isset($context["main_form_name"]) || array_key_exists("main_form_name", $context) ? $context["main_form_name"] : (function () { throw new RuntimeError('Variable "main_form_name" does not exist.', 477, $this->source); })())) . "_") . (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 477, $this->source); })())) . " input");
            // line 478
            yield "        ";
            $context["js_events"] = ["change", "ifChecked"];
            // line 479
            yield "    ";
        } else {
            // line 480
            yield "        ";
            $context["js_selector"] = ((("#" . (isset($context["main_form_name"]) || array_key_exists("main_form_name", $context) ? $context["main_form_name"] : (function () { throw new RuntimeError('Variable "main_form_name" does not exist.', 480, $this->source); })())) . "_") . (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 480, $this->source); })()));
            // line 481
            yield "        ";
            $context["js_events"] = ["change"];
            // line 482
            yield "    ";
        }
        // line 483
        yield "    <script>
        jQuery(document).ready(function() {
            var allFields = ";
        // line 485
        yield json_encode((isset($context["all_fields"]) || array_key_exists("all_fields", $context) ? $context["all_fields"] : (function () { throw new RuntimeError('Variable "all_fields" does not exist.', 485, $this->source); })()));
        yield ",
                map = ";
        // line 486
        yield json_encode((isset($context["map"]) || array_key_exists("map", $context) ? $context["map"] : (function () { throw new RuntimeError('Variable "map" does not exist.', 486, $this->source); })()));
        yield ",
                showMaskChoiceEl = jQuery(\"";
        // line 487
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["js_selector"]) || array_key_exists("js_selector", $context) ? $context["js_selector"] : (function () { throw new RuntimeError('Variable "js_selector" does not exist.', 487, $this->source); })()), "html", null, true);
        yield "\");
                ";
        // line 488
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["js_events"]) || array_key_exists("js_events", $context) ? $context["js_events"] : (function () { throw new RuntimeError('Variable "js_events" does not exist.', 488, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["js_event"]) {
            // line 489
            yield "                    showMaskChoiceEl.on(\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["js_event"], "html", null, true);
            yield "\", function () {
                        choice_field_mask_show(jQuery(this).val());
                    });
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['js_event'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 493
        yield "
            function choice_field_mask_show(val) {
                var controlGroupIdFunc = function (field) {
                    // Most of fields are named with an underscore
                    var defaultFieldId = '#sonata-ba-field-container-";
        // line 497
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["main_form_name"]) || array_key_exists("main_form_name", $context) ? $context["main_form_name"] : (function () { throw new RuntimeError('Variable "main_form_name" does not exist.', 497, $this->source); })()), "html", null, true);
        yield "_' + field;

                    // Some fields may be named with a dash (like keys of immutable array form type)
                    if (jQuery(defaultFieldId).length === 0) {
                        defaultFieldId = '#sonata-ba-field-container-";
        // line 501
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["main_form_name"]) || array_key_exists("main_form_name", $context) ? $context["main_form_name"] : (function () { throw new RuntimeError('Variable "main_form_name" does not exist.', 501, $this->source); })()), "html", null, true);
        yield "-' + field;
                    }

                    // Some fields are rendered by form_widget (no container)
                    if (jQuery(defaultFieldId).length === 0) {
                        defaultFieldId = '#";
        // line 506
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["main_form_name"]) || array_key_exists("main_form_name", $context) ? $context["main_form_name"] : (function () { throw new RuntimeError('Variable "main_form_name" does not exist.', 506, $this->source); })()), "html", null, true);
        yield "_' + field;
                    }

                    // catch select2 fields with inline: table option
                    if (jQuery(defaultFieldId).length === 0) {
                        defaultFieldId = '#";
        // line 511
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["main_form_name"]) || array_key_exists("main_form_name", $context) ? $context["main_form_name"] : (function () { throw new RuntimeError('Variable "main_form_name" does not exist.', 511, $this->source); })()), "html", null, true);
        yield "_' + field + '_autocomplete_input';
                    }

                    return defaultFieldId;
                };

                jQuery.each(allFields, function (i, field) {
                    var fieldContainer = controlGroupIdFunc(field);
                    jQuery(fieldContainer).hide();
                    ";
        // line 520
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 520, $this->source); })()), "parent", [], "any", false, false, false, 520), "vars", [], "any", false, false, false, 520), "sonata_admin", [], "any", false, false, false, 520), "inline", [], "any", false, false, false, 520) == "table")) {
            // line 521
            yield "                        var td = jQuery(fieldContainer).parent();
                        var columnIndex = td.index();
                        var headerTh = \$(\"table thead tr th:eq(\" + columnIndex + \")\");
                        td.hide();
                        headerTh.hide();
                    ";
        }
        // line 527
        yield "                    jQuery(fieldContainer).find('[required=\"required\"]').attr('data-required', 'required').removeAttr(\"required\");
                });

                if (map[val]) {
                    jQuery.each(map[val], function (i, field) {
                        var fieldContainer = controlGroupIdFunc(field);
                        jQuery(fieldContainer).show();
                        ";
        // line 534
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 534, $this->source); })()), "parent", [], "any", false, false, false, 534), "vars", [], "any", false, false, false, 534), "sonata_admin", [], "any", false, false, false, 534), "inline", [], "any", false, false, false, 534) == "table")) {
            // line 535
            yield "                            var td = jQuery(fieldContainer).parent();
                            var columnIndex = td.index();
                            var headerTh = \$(\"table thead tr th:eq(\" + columnIndex + \")\");
                            td.show();
                            headerTh.show();
                        ";
        }
        // line 541
        yield "                        jQuery(fieldContainer).find('[data-required=\"required\"]').attr(\"required\", \"required\");
                    });
                }
            }

            ";
        // line 546
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 546, $this->source); })()))) {
            // line 547
            yield "                choice_field_mask_show(showMaskChoiceEl.val());
            ";
        } else {
            // line 549
            yield "                choice_field_mask_show('";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 549, $this->source); })()), "js"), "html", null, true);
            yield "');
            ";
        }
        // line 551
        yield "        });

    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 556
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sonata_type_choice_multiple_sortable(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_type_choice_multiple_sortable"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_type_choice_multiple_sortable"));

        // line 557
        yield "    <input type=\"hidden\" name=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 557, $this->source); })()), "html", null, true);
        yield "\" id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 557, $this->source); })()), "html", null, true);
        yield "\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 557, $this->source); })()), ","), "html", null, true);
        yield "\" />

    <script>
        jQuery(document).ready(function() {
            var options = {};

            ";
        // line 563
        yield from $this->unwrap()->yieldBlock('sonata_type_model_autocomplete_select2_options_js', $context, $blocks);
        // line 564
        yield "
            Admin.setup_sortable_select2(jQuery('#";
        // line 565
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 565, $this->source); })()), "html", null, true);
        yield "'), ";
        yield json_encode(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 565, $this->source); })()), "vars", [], "any", false, false, false, 565), "choices", [], "any", false, false, false, 565));
        yield ", options);
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 563
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sonata_type_model_autocomplete_select2_options_js(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_select2_options_js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_select2_options_js"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 570
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sonata_type_model_list_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_type_model_list_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_type_model_list_widget"));

        // line 571
        yield "    <div id=\"field_container_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 571, $this->source); })()), "html", null, true);
        yield "\" class=\"field-container\">
        <span id=\"field_widget_";
        // line 572
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 572, $this->source); })()), "html", null, true);
        yield "\" class=\"field-short-description\">
            ";
        // line 573
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 573, $this->source); })()), "value", [], "any", false, false, false, 573) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 573, $this->source); })()), "field_description", [], "any", false, false, false, 573), "associationadmin", [], "any", false, false, false, 573), "urlSafeIdentifier", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 573, $this->source); })()), "value", [], "any", false, false, false, 573)], "method", false, false, false, 573)))) {
            // line 574
            yield "                ";
            yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sonata_admin_short_object_information", ((["_sonata_admin" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 575
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 575, $this->source); })()), "field_description", [], "any", false, false, false, 575), "associationadmin", [], "any", false, false, false, 575), "baseCodeRoute", [], "any", false, false, false, 575), "objectId" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 576
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 576, $this->source); })()), "field_description", [], "any", false, false, false, 576), "associationadmin", [], "any", false, false, false, 576), "urlSafeIdentifier", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 576, $this->source); })()), "value", [], "any", false, false, false, 576)], "method", false, false, false, 576), "uniqid" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 577
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 577, $this->source); })()), "field_description", [], "any", false, false, false, 577), "associationadmin", [], "any", false, false, false, 577), "uniqid", [], "any", false, false, false, 577), "linkParameters" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 578
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 578, $this->source); })()), "field_description", [], "any", false, false, false, 578), "option", ["link_parameters", []], "method", false, false, false, 578)] + ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 580
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 580, $this->source); })()), "field_description", [], "any", false, false, false, 580), "associationadmin", [], "any", false, false, false, 580), "hasRequest", [], "method", false, false, false, 580)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 581
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 581, $this->source); })()), "field_description", [], "any", false, false, false, 581), "associationadmin", [], "any", false, false, false, 581), "request", [], "any", false, false, false, 581), "attributes", [], "any", false, false, false, 581), "get", ["_route_params", []], "method", false, false, false, 581)) : ([]))) + ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 583
($context["app"] ?? null), "request", [], "any", false, true, false, 583), "query", [], "any", false, true, false, 583), "all", [], "any", true, true, false, 583)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 583), "query", [], "any", false, true, false, 583), "all", [], "any", false, false, false, 583), [])) : ([])))));
            // line 584
            yield "
            ";
        } elseif (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 585
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 585, $this->source); })()), "field_description", [], "any", false, false, false, 585), "option", ["placeholder", "short_object_description_placeholder"], "method", false, false, false, 585)) {
            // line 586
            yield "                <span class=\"inner-field-short-description\">
                    ";
            // line 587
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 587, $this->source); })()), "field_description", [], "any", false, false, false, 587), "option", ["placeholder", "short_object_description_placeholder"], "method", false, false, false, 587), [], "SonataAdminBundle"), "html", null, true);
            yield "
                </span>
            ";
        }
        // line 590
        yield "        </span>
        <span id=\"field_actions_";
        // line 591
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 591, $this->source); })()), "html", null, true);
        yield "\" class=\"field-actions\">
            <span class=\"btn-group\">
                ";
        // line 593
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 593, $this->source); })()), "field_description", [], "any", false, false, false, 593), "associationadmin", [], "any", false, false, false, 593), "hasroute", ["list"], "method", false, false, false, 593) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 593, $this->source); })()), "field_description", [], "any", false, false, false, 593), "associationadmin", [], "any", false, false, false, 593), "hasAccess", ["list"], "method", false, false, false, 593)) && (isset($context["btn_list"]) || array_key_exists("btn_list", $context) ? $context["btn_list"] : (function () { throw new RuntimeError('Variable "btn_list" does not exist.', 593, $this->source); })()))) {
            // line 594
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 594, $this->source); })()), "field_description", [], "any", false, false, false, 594), "associationadmin", [], "any", false, false, false, 594), "generateUrl", ["list", ["select" => true]], "method", false, false, false, 594), "html", null, true);
            yield "\"
                       onclick=\"return start_field_dialog_form_list_";
            // line 595
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 595, $this->source); })()), "html", null, true);
            yield "(this);\"
                       class=\"btn btn-info btn-sm sonata-ba-action\"
                       ";
            // line 598
            yield "                       title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((((            // line 599
array_key_exists("btn_translation_domain", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 599, $this->source); })()), null)) : (null)) === false)) ? (            // line 600
(isset($context["btn_list"]) || array_key_exists("btn_list", $context) ? $context["btn_list"] : (function () { throw new RuntimeError('Variable "btn_list" does not exist.', 600, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(            // line 601
(isset($context["btn_list"]) || array_key_exists("btn_list", $context) ? $context["btn_list"] : (function () { throw new RuntimeError('Variable "btn_list" does not exist.', 601, $this->source); })()), [], ((array_key_exists("btn_translation_domain", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 601, $this->source); })()), (isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 601, $this->source); })()))) : ((isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 601, $this->source); })())))))), "html", null, true);
            // line 602
            yield "\"
                    >
                        <i class=\"fas fa-list\"></i>
                        ";
            // line 606
            yield "                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((((            // line 607
array_key_exists("btn_translation_domain", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 607, $this->source); })()), null)) : (null)) === false)) ? (            // line 608
(isset($context["btn_list"]) || array_key_exists("btn_list", $context) ? $context["btn_list"] : (function () { throw new RuntimeError('Variable "btn_list" does not exist.', 608, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(            // line 609
(isset($context["btn_list"]) || array_key_exists("btn_list", $context) ? $context["btn_list"] : (function () { throw new RuntimeError('Variable "btn_list" does not exist.', 609, $this->source); })()), [], ((array_key_exists("btn_translation_domain", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 609, $this->source); })()), (isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 609, $this->source); })()))) : ((isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 609, $this->source); })())))))), "html", null, true);
            // line 610
            yield "
                    </a>
                ";
        }
        // line 613
        yield "
                ";
        // line 614
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 614, $this->source); })()), "field_description", [], "any", false, false, false, 614), "associationadmin", [], "any", false, false, false, 614), "hasroute", ["create"], "method", false, false, false, 614) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 615
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 615, $this->source); })()), "field_description", [], "any", false, false, false, 615), "associationadmin", [], "any", false, false, false, 615), "hasAccess", ["create"], "method", false, false, false, 615)) &&         // line 616
(isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new RuntimeError('Variable "btn_add" does not exist.', 616, $this->source); })()))) {
            // line 618
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 618, $this->source); })()), "field_description", [], "any", false, false, false, 618), "associationadmin", [], "any", false, false, false, 618), "generateUrl", ["create"], "method", false, false, false, 618), "html", null, true);
            yield "\"
                       onclick=\"return start_field_dialog_form_add_";
            // line 619
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 619, $this->source); })()), "html", null, true);
            yield "(this);\"
                       class=\"btn btn-success btn-sm sonata-ba-action\"
                        ";
            // line 622
            yield "                       title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((((            // line 623
array_key_exists("btn_translation_domain", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 623, $this->source); })()), null)) : (null)) === false)) ? (            // line 624
(isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new RuntimeError('Variable "btn_add" does not exist.', 624, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(            // line 625
(isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new RuntimeError('Variable "btn_add" does not exist.', 625, $this->source); })()), [], ((array_key_exists("btn_translation_domain", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 625, $this->source); })()), (isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 625, $this->source); })()))) : ((isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 625, $this->source); })())))))), "html", null, true);
            // line 626
            yield "\"
                    >
                        <i class=\"fas fa-plus-circle\"></i>
                        ";
            // line 630
            yield "                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((((            // line 631
array_key_exists("btn_translation_domain", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 631, $this->source); })()), null)) : (null)) === false)) ? (            // line 632
(isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new RuntimeError('Variable "btn_add" does not exist.', 632, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(            // line 633
(isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new RuntimeError('Variable "btn_add" does not exist.', 633, $this->source); })()), [], ((array_key_exists("btn_translation_domain", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 633, $this->source); })()), (isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 633, $this->source); })()))) : ((isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 633, $this->source); })())))))), "html", null, true);
            // line 634
            yield "
                    </a>
                ";
        }
        // line 637
        yield "                ";
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 637, $this->source); })()), "field_description", [], "any", false, false, false, 637), "associationadmin", [], "any", false, false, false, 637), "hasroute", ["edit"], "method", false, false, false, 637) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 638
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 638, $this->source); })()), "field_description", [], "any", false, false, false, 638), "associationadmin", [], "any", false, false, false, 638), "hasAccess", ["edit"], "method", false, false, false, 638)) &&         // line 639
(isset($context["btn_edit"]) || array_key_exists("btn_edit", $context) ? $context["btn_edit"] : (function () { throw new RuntimeError('Variable "btn_edit" does not exist.', 639, $this->source); })()))) {
            // line 641
            yield "                    <a href=\"";
            // line 642
            (((CoreExtension::getAttribute($this->env, $this->source,             // line 641
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 641, $this->source); })()), "value", [], "any", false, false, false, 641) == null)) ? (yield "") : (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 641, $this->source); })()), "field_description", [], "any", false, false, false, 641), "associationadmin", [], "any", false, false, false, 641), "generateUrl", ["edit", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 642
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 642, $this->source); })()), "field_description", [], "any", false, false, false, 642), "associationadmin", [], "any", false, false, false, 642), "idParameter", [], "any", false, false, false, 642) => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 642, $this->source); })()), "field_description", [], "any", false, false, false, 642), "associationadmin", [], "any", false, false, false, 642), "urlSafeIdentifier", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 642, $this->source); })()), "value", [], "any", false, false, false, 642)], "method", false, false, false, 642)]], "method", false, false, false, 641), "html", null, true)));
            // line 643
            yield "\"
                       onclick=\"return start_field_dialog_form_edit_";
            // line 644
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 644, $this->source); })()), "html", null, true);
            yield "(this);\"
                       class=\"btn btn-warning btn-sm sonata-ba-action ";
            // line 645
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 645, $this->source); })()), "value", [], "any", false, false, false, 645) == null)) {
                yield "hidden";
            }
            yield "\"
                        ";
            // line 647
            yield "                       title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((((            // line 648
array_key_exists("btn_translation_domain", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 648, $this->source); })()), null)) : (null)) === false)) ? (            // line 649
(isset($context["btn_edit"]) || array_key_exists("btn_edit", $context) ? $context["btn_edit"] : (function () { throw new RuntimeError('Variable "btn_edit" does not exist.', 649, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(            // line 650
(isset($context["btn_edit"]) || array_key_exists("btn_edit", $context) ? $context["btn_edit"] : (function () { throw new RuntimeError('Variable "btn_edit" does not exist.', 650, $this->source); })()), [], ((array_key_exists("btn_translation_domain", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 650, $this->source); })()), (isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 650, $this->source); })()))) : ((isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 650, $this->source); })())))))), "html", null, true);
            // line 651
            yield "\"
                    >
                        <i class=\"fas fa-pencil-alt\"></i>
                        ";
            // line 655
            yield "                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((((            // line 656
array_key_exists("btn_translation_domain", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 656, $this->source); })()), null)) : (null)) === false)) ? (            // line 657
(isset($context["btn_edit"]) || array_key_exists("btn_edit", $context) ? $context["btn_edit"] : (function () { throw new RuntimeError('Variable "btn_edit" does not exist.', 657, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(            // line 658
(isset($context["btn_edit"]) || array_key_exists("btn_edit", $context) ? $context["btn_edit"] : (function () { throw new RuntimeError('Variable "btn_edit" does not exist.', 658, $this->source); })()), [], ((array_key_exists("btn_translation_domain", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 658, $this->source); })()), (isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 658, $this->source); })()))) : ((isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 658, $this->source); })())))))), "html", null, true);
            // line 659
            yield "
                    </a>
                ";
        }
        // line 662
        yield "            </span>

            <span class=\"btn-group\">
                ";
        // line 665
        if ((isset($context["btn_delete"]) || array_key_exists("btn_delete", $context) ? $context["btn_delete"] : (function () { throw new RuntimeError('Variable "btn_delete" does not exist.', 665, $this->source); })())) {
            // line 666
            yield "                    <button
                        onclick=\"return remove_selected_element_";
            // line 667
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 667, $this->source); })()), "html", null, true);
            yield "(this);\"
                        class=\"btn btn-danger btn-sm sonata-ba-action\"
                        type=\"button\"
                        ";
            // line 671
            yield "                        title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((((            // line 672
array_key_exists("btn_translation_domain", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 672, $this->source); })()), null)) : (null)) === false)) ? (            // line 673
(isset($context["btn_delete"]) || array_key_exists("btn_delete", $context) ? $context["btn_delete"] : (function () { throw new RuntimeError('Variable "btn_delete" does not exist.', 673, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(            // line 674
(isset($context["btn_delete"]) || array_key_exists("btn_delete", $context) ? $context["btn_delete"] : (function () { throw new RuntimeError('Variable "btn_delete" does not exist.', 674, $this->source); })()), [], ((array_key_exists("btn_translation_domain", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 674, $this->source); })()), (isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 674, $this->source); })()))) : ((isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 674, $this->source); })())))))), "html", null, true);
            // line 675
            yield "\"
                    >
                        <i class=\"fas fa-minus-circle\"></i>
                        ";
            // line 679
            yield "                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((((            // line 680
array_key_exists("btn_translation_domain", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 680, $this->source); })()), null)) : (null)) === false)) ? (            // line 681
(isset($context["btn_delete"]) || array_key_exists("btn_delete", $context) ? $context["btn_delete"] : (function () { throw new RuntimeError('Variable "btn_delete" does not exist.', 681, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(            // line 682
(isset($context["btn_delete"]) || array_key_exists("btn_delete", $context) ? $context["btn_delete"] : (function () { throw new RuntimeError('Variable "btn_delete" does not exist.', 682, $this->source); })()), [], ((array_key_exists("btn_translation_domain", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 682, $this->source); })()), (isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 682, $this->source); })()))) : ((isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 682, $this->source); })())))))), "html", null, true);
            // line 683
            yield "
                    </button>
                ";
        }
        // line 686
        yield "            </span>
        </span>

        <span style=\"display: none\" >
            ";
        // line 691
        yield "            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 691, $this->source); })()), 'widget', ["required" => false]);
        yield "
        </span>

        <div class=\"modal fade\" id=\"field_dialog_";
        // line 694
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 694, $this->source); })()), "html", null, true);
        yield "\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-lg\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        <h4 class=\"modal-title\"></h4>
                    </div>
                    <div class=\"modal-body\">
                    </div>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 708
        yield from         $this->loadTemplate("@SonataAdmin/CRUD/Association/edit_many_script.html.twig", "@SonataAdmin/Form/form_admin_fields.html.twig", 708)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 711
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sonata_type_template_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_type_template_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_type_template_widget"));

        // line 712
        yield "    ";
        yield from         $this->loadTemplate((isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 712, $this->source); })()), "@SonataAdmin/Form/form_admin_fields.html.twig", 712)->unwrap()->yield(CoreExtension::toArray((isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 712, $this->source); })())));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SonataAdmin/Form/form_admin_fields.html.twig";
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
        return array (  2270 => 712,  2257 => 711,  2246 => 708,  2229 => 694,  2222 => 691,  2216 => 686,  2211 => 683,  2209 => 682,  2208 => 681,  2207 => 680,  2205 => 679,  2200 => 675,  2198 => 674,  2197 => 673,  2196 => 672,  2194 => 671,  2188 => 667,  2185 => 666,  2183 => 665,  2178 => 662,  2173 => 659,  2171 => 658,  2170 => 657,  2169 => 656,  2167 => 655,  2162 => 651,  2160 => 650,  2159 => 649,  2158 => 648,  2156 => 647,  2150 => 645,  2146 => 644,  2143 => 643,  2141 => 642,  2140 => 641,  2139 => 642,  2137 => 641,  2135 => 639,  2134 => 638,  2132 => 637,  2127 => 634,  2125 => 633,  2124 => 632,  2123 => 631,  2121 => 630,  2116 => 626,  2114 => 625,  2113 => 624,  2112 => 623,  2110 => 622,  2105 => 619,  2100 => 618,  2098 => 616,  2097 => 615,  2096 => 614,  2093 => 613,  2088 => 610,  2086 => 609,  2085 => 608,  2084 => 607,  2082 => 606,  2077 => 602,  2075 => 601,  2074 => 600,  2073 => 599,  2071 => 598,  2066 => 595,  2061 => 594,  2059 => 593,  2054 => 591,  2051 => 590,  2045 => 587,  2042 => 586,  2040 => 585,  2037 => 584,  2035 => 583,  2034 => 581,  2033 => 580,  2032 => 578,  2031 => 577,  2030 => 576,  2029 => 575,  2027 => 574,  2025 => 573,  2021 => 572,  2016 => 571,  2003 => 570,  1981 => 563,  1964 => 565,  1961 => 564,  1959 => 563,  1945 => 557,  1932 => 556,  1918 => 551,  1912 => 549,  1908 => 547,  1906 => 546,  1899 => 541,  1891 => 535,  1889 => 534,  1880 => 527,  1872 => 521,  1870 => 520,  1858 => 511,  1850 => 506,  1842 => 501,  1835 => 497,  1829 => 493,  1818 => 489,  1814 => 488,  1810 => 487,  1806 => 486,  1802 => 485,  1798 => 483,  1795 => 482,  1792 => 481,  1789 => 480,  1786 => 479,  1783 => 478,  1780 => 477,  1777 => 476,  1774 => 475,  1769 => 473,  1756 => 472,  1744 => 469,  1731 => 468,  1720 => 445,  1715 => 464,  1709 => 461,  1706 => 460,  1704 => 459,  1700 => 457,  1697 => 456,  1686 => 455,  1683 => 454,  1680 => 453,  1677 => 452,  1674 => 451,  1672 => 450,  1667 => 448,  1655 => 446,  1652 => 445,  1639 => 444,  1628 => 431,  1621 => 439,  1618 => 438,  1601 => 436,  1584 => 435,  1579 => 433,  1574 => 432,  1571 => 431,  1558 => 430,  1547 => 409,  1542 => 426,  1538 => 424,  1536 => 423,  1531 => 422,  1514 => 420,  1497 => 419,  1493 => 418,  1488 => 417,  1485 => 416,  1482 => 415,  1479 => 414,  1476 => 413,  1473 => 412,  1470 => 411,  1467 => 410,  1465 => 409,  1452 => 408,  1441 => 388,  1436 => 404,  1431 => 401,  1429 => 400,  1424 => 399,  1414 => 391,  1412 => 390,  1409 => 389,  1407 => 388,  1394 => 387,  1382 => 384,  1380 => 383,  1367 => 382,  1355 => 379,  1353 => 378,  1340 => 377,  1325 => 372,  1322 => 371,  1316 => 368,  1313 => 367,  1311 => 366,  1308 => 365,  1305 => 364,  1301 => 363,  1298 => 362,  1295 => 361,  1292 => 360,  1290 => 359,  1287 => 358,  1284 => 357,  1281 => 356,  1279 => 355,  1276 => 354,  1270 => 352,  1268 => 351,  1265 => 350,  1262 => 349,  1259 => 348,  1256 => 347,  1253 => 346,  1250 => 345,  1247 => 344,  1244 => 343,  1241 => 342,  1238 => 341,  1235 => 340,  1233 => 339,  1231 => 338,  1228 => 337,  1225 => 336,  1222 => 335,  1220 => 334,  1217 => 333,  1215 => 332,  1202 => 331,  1199 => 330,  1196 => 329,  1193 => 328,  1180 => 327,  1169 => 298,  1163 => 322,  1157 => 320,  1151 => 317,  1148 => 316,  1146 => 315,  1143 => 314,  1137 => 312,  1131 => 309,  1128 => 308,  1126 => 307,  1121 => 305,  1117 => 304,  1112 => 303,  1109 => 302,  1103 => 300,  1100 => 299,  1098 => 298,  1085 => 297,  1074 => 270,  1068 => 292,  1062 => 289,  1057 => 288,  1054 => 287,  1048 => 284,  1043 => 283,  1041 => 282,  1036 => 280,  1032 => 279,  1027 => 278,  1024 => 277,  1021 => 276,  1018 => 275,  1015 => 274,  1009 => 272,  1006 => 271,  1004 => 270,  991 => 269,  980 => 250,  973 => 263,  971 => 262,  970 => 261,  969 => 260,  968 => 259,  963 => 258,  960 => 257,  957 => 256,  954 => 255,  951 => 254,  945 => 252,  942 => 251,  940 => 250,  927 => 249,  916 => 199,  907 => 243,  904 => 242,  901 => 241,  895 => 239,  893 => 238,  888 => 237,  885 => 236,  882 => 235,  872 => 233,  870 => 232,  867 => 231,  864 => 230,  861 => 228,  858 => 226,  855 => 225,  853 => 224,  846 => 223,  844 => 222,  832 => 221,  829 => 220,  827 => 219,  824 => 218,  821 => 217,  818 => 216,  815 => 215,  812 => 214,  809 => 213,  806 => 212,  803 => 211,  800 => 210,  794 => 208,  791 => 207,  789 => 206,  786 => 205,  783 => 204,  780 => 203,  777 => 202,  774 => 201,  771 => 200,  769 => 199,  756 => 198,  745 => 182,  740 => 194,  733 => 192,  731 => 191,  729 => 190,  728 => 187,  725 => 186,  721 => 185,  716 => 184,  713 => 183,  711 => 182,  698 => 181,  685 => 177,  682 => 175,  679 => 173,  676 => 171,  674 => 170,  671 => 169,  669 => 168,  667 => 167,  652 => 166,  649 => 165,  646 => 164,  643 => 163,  640 => 162,  637 => 161,  634 => 160,  631 => 159,  628 => 158,  625 => 157,  622 => 156,  620 => 155,  617 => 154,  614 => 153,  611 => 152,  598 => 151,  587 => 148,  574 => 147,  563 => 144,  550 => 143,  539 => 102,  533 => 138,  530 => 136,  527 => 134,  525 => 133,  523 => 132,  521 => 131,  507 => 130,  504 => 129,  500 => 126,  497 => 123,  496 => 122,  495 => 121,  493 => 120,  491 => 119,  488 => 118,  485 => 117,  482 => 116,  479 => 115,  476 => 114,  473 => 113,  471 => 112,  468 => 111,  465 => 110,  463 => 109,  460 => 108,  458 => 107,  455 => 106,  452 => 105,  449 => 104,  446 => 103,  444 => 102,  431 => 101,  419 => 96,  417 => 95,  415 => 94,  412 => 92,  410 => 91,  408 => 90,  395 => 89,  383 => 85,  381 => 84,  379 => 83,  376 => 81,  374 => 80,  372 => 79,  359 => 78,  348 => 69,  340 => 72,  337 => 71,  334 => 70,  331 => 69,  318 => 68,  306 => 65,  302 => 63,  300 => 62,  297 => 61,  294 => 60,  292 => 59,  286 => 57,  284 => 56,  282 => 55,  279 => 54,  276 => 53,  273 => 51,  271 => 50,  258 => 49,  244 => 46,  241 => 45,  228 => 44,  214 => 41,  211 => 40,  208 => 39,  205 => 38,  202 => 37,  189 => 36,  174 => 32,  171 => 31,  168 => 30,  165 => 29,  162 => 28,  160 => 27,  147 => 26,  135 => 23,  131 => 22,  128 => 21,  119 => 19,  115 => 18,  112 => 17,  107 => 16,  105 => 15,  92 => 14,  69 => 12,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'form_div_layout.html.twig' %}

{% block form_errors -%}
    {% if errors|length > 0 %}
        {% if not form.parent %}<div class=\"alert alert-danger\">{% endif %}
            <ul class=\"list-unstyled\">
                {% for error in errors %}
                    <li><i class=\"fas fa-exclamation-circle\" aria-hidden=\"true\"></i> {{ error.message }}</li>
                {% endfor %}
            </ul>
        {% if not form.parent %}</div>{% endif %}
    {% endif %}
{%- endblock form_errors %}

{% block form_help -%}
    {% if sonata_admin_translation_domain is defined and translation_domain is null %}
        {% set translation_domain = sonata_admin_translation_domain %}
    {% endif %}
    {% if help is not empty %}
        {% set help_attr = help_attr|merge({class: (help_attr.class|default('') ~ ' help-block sonata-ba-field-help')}) %}
        {{ parent() }}
    {% endif %}
{%- endblock form_help %}

{% block form_widget_simple %}
    {% set type = type|default('text') %}
    {% if type != 'file' %}
        {% set attr = attr|merge({'class': attr.class|default('') ~ ' form-control'}) %}
    {% endif %}
    {{ parent() }}
{% endblock form_widget_simple %}

{% block textarea_widget %}
    {% set attr = attr|merge({'class': attr.class|default('') ~ ' form-control'}) %}
    {{ parent() }}
{% endblock textarea_widget %}

{% block money_widget -%}
    {% if money_pattern == '{{ widget }}' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set currencySymbol = money_pattern|replace({'{{ widget }}': ''})|trim %}
        {% if money_pattern matches '/^{{ widget }}/' %}
            <div class=\"input-group\">
                {{- block('form_widget_simple') -}}
                <span class=\"input-group-addon\">{{ currencySymbol }}</span>
            </div>
        {% elseif money_pattern matches '/{{ widget }}\$/' %}
            <div class=\"input-group\">
                <span class=\"input-group-addon\">{{ currencySymbol }}</span>
                {{- block('form_widget_simple') -}}
            </div>
        {% endif %}
    {% endif %}
{%- endblock money_widget %}

{% block percent_widget %}
    {% apply spaceless %}
        {% set type = type|default('text') %}
        <div class=\"input-group\">
            {{ block('form_widget_simple') }}
            <span class=\"input-group-addon\">%</span>
        </div>
    {% endapply %}
{% endblock percent_widget %}

{% block checkbox_widget -%}
    {% set parent_label_class = parent_label_class|default('') -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default('') -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}
{% block form_label %}
{% apply spaceless %}
    {% if label is not same as(false) and sonata_admin.options['form_type'] == 'horizontal' %}
        {% set label_class = 'col-sm-3' %}
    {% endif %}

    {% set label_class = label_class|default('') ~ ' control-label' %}

    {% if label is not same as(false) %}
        {% set label_attr = label_attr|merge({'class': label_attr.class|default('') ~ ' ' ~ label_class }) %}

        {% if not compound %}
            {% set label_attr = label_attr|merge({'for': id}) %}
        {% endif %}
        {% if required %}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}

        {% if label is empty %}
            {%- if label_format is defined and label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}

        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {%- if translation_domain is same as(false) -%}
                {{- label -}}
            {%- elseif not sonata_admin.admin -%}
                {{- label|trans(label_translation_parameters, translation_domain) -}}
            {%- else -%}
                {{- label|trans(label_translation_parameters, sonata_admin.field_description.translationDomain|default(sonata_admin.admin.translationDomain)) -}}
            {%- endif -%}
        </label>
    {% endif %}
{% endapply %}
{% endblock form_label %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {% if sonata_admin.admin %}
        {% set translation_domain = sonata_admin.field_description.translationDomain %}
    {% endif %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {% set label = name|humanize %}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw -}}
            {%- if label is not same as(false) -%}
                <span class=\"control-label__text\">
                    {% if translation_domain is same as(false) %}
                        {{- label -}}
                    {% else %}
                        {{- label|trans(label_translation_parameters, translation_domain) -}}
                    {%- endif -%}
                </span>
            {%- endif -%}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{% block choice_widget_expanded %}
{% apply spaceless %}
    {% set attr = attr|merge({'class': attr.class|default('') ~ ' list-unstyled'}) %}
    <ul {{ block('widget_container_attributes') }}>
    {% for child in form %}
        <li>
            {{ form_widget(child, {
                'horizontal': false,
                'horizontal_input_wrapper_class': '',
                'translation_domain': choice_translation_domain
            }) }} {# 'horizontal' values are needed to avoid MopaBootstrapBundle messing with the DOM #}
        </li>
    {% endfor %}
    </ul>
{% endapply %}
{% endblock choice_widget_expanded %}

{% block choice_widget_collapsed %}
{% apply spaceless %}
    {% if required and placeholder is defined and placeholder is none %}
        {% set required = false %}
    {% elseif required and empty_value is defined and empty_value_in_choices is defined and empty_value is none and not empty_value_in_choices and not multiple %}
        {% set required = false %}
    {% endif %}

    {% set attr = attr|merge({'class': attr.class|default('') ~ ' form-control'}) %}
    {% if (sortable is defined) and sortable and multiple %}
        {{ block('sonata_type_choice_multiple_sortable') }}
    {% else %}
        {% set data_placeholder = placeholder %}
        {% if placeholder != '' %}
            {% if not sonata_admin.admin %}
                {% set data_placeholder = placeholder|trans({}, translation_domain) %}
            {% else %}
                {% set data_placeholder = placeholder|trans({}, sonata_admin.field_description.translationDomain) %}
            {% endif %}
        {% endif %}

        {% set use_select2 = sonata_config is defined and sonata_config.getOption('use_select2') %}

        <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %}{% if placeholder is defined and placeholder is not none and use_select2 %} data-placeholder=\"{{ data_placeholder }}\"{% endif %}>
            {% if empty_value is defined and empty_value is not none %}
                <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>
                    {% if empty_value != '' %}
                        {% if not sonata_admin.admin %}
                            {{- empty_value|trans({}, translation_domain) -}}
                        {% else %}
                            {{- empty_value|trans({}, sonata_admin.field_description.translationDomain) -}}
                        {% endif %}
                    {% endif %}
                </option>
            {% elseif placeholder is defined and placeholder is not none %}
                <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ data_placeholder }}</option>
            {% endif %}
            {% if preferred_choices|length > 0 %}
                {% set options = preferred_choices %}
                {{ block('choice_widget_options') }}
                {% if choices|length > 0 %}
                    <option disabled=\"disabled\">{{ separator }}</option>
                {% endif %}
            {% endif %}
            {% set options = choices %}
            {{ block('choice_widget_options') }}
        </select>
    {% endif %}
{% endapply %}
{% endblock choice_widget_collapsed %}

{% block date_widget %}
{% apply spaceless %}
    {% if widget == 'single_text' %}
        {{ block('form_widget_simple') }}
    {% else %}
        {% if row is not defined or row == true %}
            {% set attr = attr|merge({'class': attr.class|default('') ~ ' row' }) %}
        {% endif %}
        {% set input_wrapper_class = input_wrapper_class|default('col-sm-4') %}
        <div {{ block('widget_container_attributes') }}>
            {{ date_pattern|replace({
                '{{ year }}':  '<div class=\"'~ input_wrapper_class ~ '\">' ~ form_widget(form.year) ~ '</div>',
                '{{ month }}': '<div class=\"'~ input_wrapper_class ~ '\">' ~ form_widget(form.month) ~ '</div>',
                '{{ day }}':   '<div class=\"'~ input_wrapper_class ~ '\">' ~ form_widget(form.day) ~ '</div>',
            })|raw }}
        </div>
    {% endif %}
{% endapply %}
{% endblock date_widget %}

{% block time_widget %}
{% apply spaceless %}
    {% if widget == 'single_text' %}
        {{ block('form_widget_simple') }}
    {% else %}
        {% if row is not defined or row == true %}
            {% set attr = attr|merge({'class': attr.class|default('') ~ ' row' }) %}
        {% endif %}
        {% set input_wrapper_class = input_wrapper_class|default('col-sm-6') %}
        <div {{ block('widget_container_attributes') }}>
            <div class=\"{{ input_wrapper_class }}\">
                {{ form_widget(form.hour) }}
            </div>
            {% if with_minutes %}
                <div class=\"{{ input_wrapper_class }}\">
                    {{ form_widget(form.minute) }}
                </div>
            {% endif %}
            {% if with_seconds %}
                <div class=\"{{ input_wrapper_class }}\">
                    {{ form_widget(form.second) }}
                </div>
            {% endif %}
        </div>
    {% endif %}
{% endapply %}
{% endblock time_widget %}

{% block datetime_widget %}
{% apply spaceless %}
    {% if widget == 'single_text' %}
        {{ block('form_widget_simple') }}
    {% else %}
        {% set attr = attr|merge({'class': attr.class|default('') ~ ' row' }) %}
        <div {{ block('widget_container_attributes') }}>
            {{ form_errors(form.date) }}
            {{ form_errors(form.time) }}

            {% if form.date.vars.widget == 'single_text' %}
                <div class=\"col-sm-2\">
                    {{ form_widget(form.date) }}
                </div>
            {% else %}
                {{ form_widget(form.date, {'row': false, 'input_wrapper_class': 'col-sm-2'}) }}
            {% endif %}

            {% if form.time.vars.widget == 'single_text' %}
                <div class=\"col-sm-2\">
                    {{ form_widget(form.time) }}
                </div>
            {% else %}
                {{ form_widget(form.time, {'row': false, 'input_wrapper_class': 'col-sm-2'}) }}
            {% endif %}
        </div>
    {% endif %}
{% endapply %}
{% endblock datetime_widget %}

{% block form_row %}
    {% set show_label = show_label ?? true %}
    {% set row_id = 'sonata-ba-field-container-'~id %}
    {% set row_class = (row_attr.class|default('') ~ ' form-group' ~ (errors|length > 0 ? ' has-error'))|trim %}
    <div{% with {attr: row_attr|merge({id: row_id, class: row_class})} %}{{ block('attributes') }}{% endwith %}>
        {% set div_class = 'sonata-ba-field' %}

        {% if label is same as(false) %}
            {% set div_class = div_class ~ ' sonata-collection-row-without-label' %}
        {% endif %}

        {% if sonata_admin is defined and sonata_admin.options['form_type'] == 'horizontal' %}
            {# Add an offset if no label or is a checkbox/radio #}
            {% if label is same as(false) or form.vars.checked is defined %}
                {% if 'collection' in form.parent.vars.block_prefixes %}
                    {% set div_class = div_class ~ ' col-sm-12' %}
                {% else %}
                    {% set div_class = div_class ~ ' col-sm-9 col-sm-offset-3' %}
                {% endif %}
            {% else %}
                {% set div_class = div_class ~ ' col-sm-9' %}
            {% endif %}
        {% endif %}

        {% if show_label %}
            {{ form_label(form, label|default(null)) }}
        {% endif %}

        {% if sonata_admin is defined and sonata_admin_enabled %}
            {% set div_class = div_class ~ ' sonata-ba-field-' ~ sonata_admin.edit ~ '-' ~ sonata_admin.inline %}
        {% endif %}

        {% if errors|length > 0 %}
            {% set div_class = div_class ~ ' sonata-ba-field-error' %}
        {% endif %}

        <div class=\"{{ div_class }}\">
            {{ form_widget(form, {'horizontal': false, 'horizontal_input_wrapper_class': ''}) }} {# {'horizontal': false, 'horizontal_input_wrapper_class': ''} needed to avoid MopaBootstrapBundle messing with the DOM #}

            {% if errors|length > 0 %}
                <div class=\"help-block sonata-ba-field-error-messages\">
                    {{ form_errors(form) }}
                </div>
            {% endif %}

            {{ form_help(form) }}
        </div>
    </div>
{% endblock form_row %}

{% block checkbox_row -%}
    {% set show_label = false %}
    {{ block('form_row') }}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {% set show_label = false %}
    {{ block('form_row') }}
{%- endblock radio_row %}

{% block sonata_type_native_collection_widget_row %}
{% apply spaceless %}
    <div class=\"sonata-collection-row\">
        {% if allow_delete %}
            <div class=\"row\">
                <div class=\"col-xs-1\">
                    <a href=\"#\" class=\"btn btn-link sonata-collection-delete\">
                        <i class=\"fas fa-minus-circle\" aria-hidden=\"true\"></i>
                    </a>
                </div>
                <div class=\"col-xs-11\">
        {% endif %}
            {{ form_row(child, { label: false }) }}
        {% if allow_delete %}
                </div>
            </div>
        {% endif %}
    </div>
{% endapply %}
{% endblock sonata_type_native_collection_widget_row %}

{% block sonata_type_native_collection_widget %}
{% apply spaceless %}
    {% if prototype is defined %}
        {% set child = prototype %}
        {% set allow_delete_backup = allow_delete %}
        {% set allow_delete = true %}
        {% set attr = attr|merge({'data-prototype': block('sonata_type_native_collection_widget_row'), 'data-prototype-name': prototype.vars.name, 'class': attr.class|default('') }) %}
        {% set allow_delete = allow_delete_backup %}
    {% endif %}
    <div {{ block('widget_container_attributes') }}>
        {{ form_errors(form) }}
        {% for child in form %}
            {{ block('sonata_type_native_collection_widget_row') }}
        {% endfor %}
        {{ form_rest(form) }}
        {% if allow_add %}
            <div><a href=\"#\" class=\"btn btn-link sonata-collection-add\"><i class=\"fas fa-plus-circle\" aria-hidden=\"true\"></i></a></div>
        {% endif %}
    </div>
{% endapply %}
{% endblock sonata_type_native_collection_widget %}

{% block sonata_type_immutable_array_widget %}
    {% apply spaceless %}
        <div {{ block('widget_container_attributes') }}>
            {{ form_errors(form) }}

            {% for key, child in form %}
                {{ block('sonata_type_immutable_array_widget_row') }}
            {% endfor %}

            {{ form_rest(form) }}
        </div>
    {% endapply %}
{% endblock sonata_type_immutable_array_widget %}

{% block sonata_type_immutable_array_widget_row %}
    {% apply spaceless %}
        <div class=\"form-group{% if child.vars.errors|length > 0 %} has-error{% endif %}\" id=\"sonata-ba-field-container-{{ id }}-{{ key }}\">

            {{ form_label(child) }}

            {% set div_class = \"\" %}
            {% if sonata_admin.options['form_type'] == 'horizontal' %}
                {% set div_class = 'col-sm-9' %}
            {% endif %}

            <div class=\"{{ div_class }} sonata-ba-field sonata-ba-field-{{ sonata_admin.edit }}-{{ sonata_admin.inline }}{% if child.vars.errors|length > 0 %} sonata-ba-field-error{% endif %}\">
                {{ form_widget(child, {'horizontal': false, 'horizontal_input_wrapper_class': ''}) }} {# {'horizontal': false, 'horizontal_input_wrapper_class': ''} needed to avoid MopaBootstrapBundle messing with the DOM #}
            </div>

            {% if child.vars.errors|length > 0 %}
                <div class=\"help-block sonata-ba-field-error-messages\">
                    {{ form_errors(child) }}
                </div>
            {% endif %}
        </div>
    {% endapply %}
{% endblock %}

{% block sonata_type_model_autocomplete_widget %}
    {% include template %}
{% endblock sonata_type_model_autocomplete_widget %}

{% block sonata_type_choice_field_mask_widget %}
    {{ block('choice_widget') }}
    {# Taking the form name excluding ending field glue character #}
    {% set main_form_name = id|slice(0, (id|length - name|length)-1) %}
    {% if expanded %}
        {% set js_selector = '#' ~ main_form_name ~ '_' ~ name ~ ' input' %}
        {% set js_events = ['change', 'ifChecked'] %}
    {% else %}
        {% set js_selector = '#' ~ main_form_name ~ '_' ~ name %}
        {% set js_events = ['change'] %}
    {% endif %}
    <script>
        jQuery(document).ready(function() {
            var allFields = {{ all_fields|json_encode|raw }},
                map = {{ map|json_encode|raw }},
                showMaskChoiceEl = jQuery(\"{{ js_selector }}\");
                {% for js_event in js_events %}
                    showMaskChoiceEl.on(\"{{ js_event }}\", function () {
                        choice_field_mask_show(jQuery(this).val());
                    });
                {% endfor %}

            function choice_field_mask_show(val) {
                var controlGroupIdFunc = function (field) {
                    // Most of fields are named with an underscore
                    var defaultFieldId = '#sonata-ba-field-container-{{ main_form_name }}_' + field;

                    // Some fields may be named with a dash (like keys of immutable array form type)
                    if (jQuery(defaultFieldId).length === 0) {
                        defaultFieldId = '#sonata-ba-field-container-{{ main_form_name }}-' + field;
                    }

                    // Some fields are rendered by form_widget (no container)
                    if (jQuery(defaultFieldId).length === 0) {
                        defaultFieldId = '#{{ main_form_name }}_' + field;
                    }

                    // catch select2 fields with inline: table option
                    if (jQuery(defaultFieldId).length === 0) {
                        defaultFieldId = '#{{ main_form_name }}_' + field + '_autocomplete_input';
                    }

                    return defaultFieldId;
                };

                jQuery.each(allFields, function (i, field) {
                    var fieldContainer = controlGroupIdFunc(field);
                    jQuery(fieldContainer).hide();
                    {% if form.parent.vars.sonata_admin.inline == 'table' %}
                        var td = jQuery(fieldContainer).parent();
                        var columnIndex = td.index();
                        var headerTh = \$(\"table thead tr th:eq(\" + columnIndex + \")\");
                        td.hide();
                        headerTh.hide();
                    {% endif %}
                    jQuery(fieldContainer).find('[required=\"required\"]').attr('data-required', 'required').removeAttr(\"required\");
                });

                if (map[val]) {
                    jQuery.each(map[val], function (i, field) {
                        var fieldContainer = controlGroupIdFunc(field);
                        jQuery(fieldContainer).show();
                        {% if form.parent.vars.sonata_admin.inline == 'table' %}
                            var td = jQuery(fieldContainer).parent();
                            var columnIndex = td.index();
                            var headerTh = \$(\"table thead tr th:eq(\" + columnIndex + \")\");
                            td.show();
                            headerTh.show();
                        {% endif %}
                        jQuery(fieldContainer).find('[data-required=\"required\"]').attr(\"required\", \"required\");
                    });
                }
            }

            {% if value is empty %}
                choice_field_mask_show(showMaskChoiceEl.val());
            {% else %}
                choice_field_mask_show('{{ value|e('js') }}');
            {% endif %}
        });

    </script>
{% endblock %}

{% block sonata_type_choice_multiple_sortable %}
    <input type=\"hidden\" name=\"{{ full_name }}\" id=\"{{ id }}\" value=\"{{ value|join(',') }}\" />

    <script>
        jQuery(document).ready(function() {
            var options = {};

            {% block sonata_type_model_autocomplete_select2_options_js %}{% endblock %}

            Admin.setup_sortable_select2(jQuery('#{{ id }}'), {{ form.vars.choices|json_encode|raw }}, options);
        });
    </script>
{% endblock %}

{% block sonata_type_model_list_widget %}
    <div id=\"field_container_{{ id }}\" class=\"field-container\">
        <span id=\"field_widget_{{ id }}\" class=\"field-short-description\">
            {% if sonata_admin.value and sonata_admin.field_description.associationadmin.urlSafeIdentifier(sonata_admin.value) is not null %}
                {{ render(path('sonata_admin_short_object_information', {
                    '_sonata_admin': sonata_admin.field_description.associationadmin.baseCodeRoute,
                    'objectId': sonata_admin.field_description.associationadmin.urlSafeIdentifier(sonata_admin.value),
                    'uniqid': sonata_admin.field_description.associationadmin.uniqid,
                    'linkParameters': sonata_admin.field_description.option('link_parameters', {})
                } + (
                    sonata_admin.field_description.associationadmin.hasRequest()
                    ? sonata_admin.field_description.associationadmin.request.attributes.get('_route_params', {})
                    : {}
                ) + app.request.query.all|default({})
                )) }}
            {% elseif sonata_admin.field_description.option('placeholder', 'short_object_description_placeholder') %}
                <span class=\"inner-field-short-description\">
                    {{ sonata_admin.field_description.option('placeholder', 'short_object_description_placeholder')|trans({}, 'SonataAdminBundle') }}
                </span>
            {% endif %}
        </span>
        <span id=\"field_actions_{{ id }}\" class=\"field-actions\">
            <span class=\"btn-group\">
                {% if sonata_admin.field_description.associationadmin.hasroute('list') and sonata_admin.field_description.associationadmin.hasAccess('list') and btn_list %}
                    <a href=\"{{ sonata_admin.field_description.associationadmin.generateUrl('list', {select: true}) }}\"
                       onclick=\"return start_field_dialog_form_list_{{ id }}(this);\"
                       class=\"btn btn-info btn-sm sonata-ba-action\"
                       {# NEXT_MAJOR: Remove the fallback on null and on btn_catalogue #}
                       title=\"{{
                           btn_translation_domain|default(null) is same as(false)
                           ? btn_list
                           : btn_list|trans({}, btn_translation_domain|default(btn_catalogue))
                       }}\"
                    >
                        <i class=\"fas fa-list\"></i>
                        {# NEXT_MAJOR: Remove the fallback on null and on btn_catalogue #}
                        {{
                            btn_translation_domain|default(null) is same as(false)
                            ? btn_list
                            : btn_list|trans({}, btn_translation_domain|default(btn_catalogue))
                        }}
                    </a>
                {% endif %}

                {% if sonata_admin.field_description.associationadmin.hasroute('create')
                    and sonata_admin.field_description.associationadmin.hasAccess('create')
                    and btn_add
                %}
                    <a href=\"{{ sonata_admin.field_description.associationadmin.generateUrl('create') }}\"
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
                {% endif %}
                {% if sonata_admin.field_description.associationadmin.hasroute('edit')
                    and sonata_admin.field_description.associationadmin.hasAccess('edit')
                    and btn_edit
                %}
                    <a href=\"{{ sonata_admin.value == null ? '' : sonata_admin.field_description.associationadmin.generateUrl('edit', {
                        (sonata_admin.field_description.associationadmin.idParameter) : sonata_admin.field_description.associationadmin.urlSafeIdentifier(sonata_admin.value)})
                    }}\"
                       onclick=\"return start_field_dialog_form_edit_{{ id }}(this);\"
                       class=\"btn btn-warning btn-sm sonata-ba-action {% if sonata_admin.value == null %}hidden{% endif %}\"
                        {# NEXT_MAJOR: Remove the fallback on null and on btn_catalogue #}
                       title=\"{{
                           btn_translation_domain|default(null) is same as(false)
                           ? btn_edit
                           : btn_edit|trans({}, btn_translation_domain|default(btn_catalogue))
                       }}\"
                    >
                        <i class=\"fas fa-pencil-alt\"></i>
                        {# NEXT_MAJOR: Remove the fallback on null and on btn_catalogue #}
                        {{
                            btn_translation_domain|default(null) is same as(false)
                            ? btn_edit
                            : btn_edit|trans({}, btn_translation_domain|default(btn_catalogue))
                        }}
                    </a>
                {% endif %}
            </span>

            <span class=\"btn-group\">
                {% if btn_delete %}
                    <button
                        onclick=\"return remove_selected_element_{{ id }}(this);\"
                        class=\"btn btn-danger btn-sm sonata-ba-action\"
                        type=\"button\"
                        {# NEXT_MAJOR: Remove the fallback on null and on btn_catalogue #}
                        title=\"{{
                            btn_translation_domain|default(null) is same as(false)
                            ? btn_delete
                            : btn_delete|trans({}, btn_translation_domain|default(btn_catalogue))
                        }}\"
                    >
                        <i class=\"fas fa-minus-circle\"></i>
                        {# NEXT_MAJOR: Remove the fallback on null and on btn_catalogue #}
                        {{
                            btn_translation_domain|default(null) is same as(false)
                            ? btn_delete
                            : btn_delete|trans({}, btn_translation_domain|default(btn_catalogue))
                        }}
                    </button>
                {% endif %}
            </span>
        </span>

        <span style=\"display: none\" >
            {# Hidden text input cannot be required, because browser will throw error \"An invalid form control with name='' is not focusable\"  #}
            {{ form_widget(form, {'required':false}) }}
        </span>

        <div class=\"modal fade\" id=\"field_dialog_{{ id }}\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-lg\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        <h4 class=\"modal-title\"></h4>
                    </div>
                    <div class=\"modal-body\">
                    </div>
                </div>
            </div>
        </div>
    </div>

    {% include '@SonataAdmin/CRUD/Association/edit_many_script.html.twig' %}
{% endblock %}

{% block sonata_type_template_widget %}
    {% include template with parameters only %}
{% endblock sonata_type_template_widget %}
", "@SonataAdmin/Form/form_admin_fields.html.twig", "/home/aleksandar/Desktop/Site/payment-demo/vendor/sonata-project/admin-bundle/src/Resources/views/Form/form_admin_fields.html.twig");
    }
}
