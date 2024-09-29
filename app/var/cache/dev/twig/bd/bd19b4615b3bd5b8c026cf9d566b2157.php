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

/* @SonataAdmin/CRUD/Association/edit_one_to_many.html.twig */
class __TwigTemplate_c5caaccd01952dd03adc8f3b1d6ebd99 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/Association/edit_one_to_many.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/Association/edit_one_to_many.html.twig"));

        // line 11
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 11, $this->source); })()), "field_description", [], "any", false, false, false, 11), "hasassociationadmin", [], "any", false, false, false, 11)) {
            // line 12
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 12, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 13
                yield "        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Sonata\AdminBundle\Twig\RenderElementRuntime')->renderRelationElement($context["element"], CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 13, $this->source); })()), "field_description", [], "any", false, false, false, 13)), "html", null, true);
                yield "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['element'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 16
            yield "
    <div id=\"field_container_";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 17, $this->source); })()), "html", null, true);
            yield "\" class=\"field-container\">
        <span id=\"field_widget_";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 18, $this->source); })()), "html", null, true);
            yield "\" >
            ";
            // line 19
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 19, $this->source); })()), "edit", [], "any", false, false, false, 19) == "inline")) {
                // line 20
                yield "                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 20, $this->source); })()), "inline", [], "any", false, false, false, 20) == "table")) {
                    // line 21
                    yield "                    ";
                    if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "children", [], "any", false, false, false, 21)) > 0)) {
                        // line 22
                        yield "                        ";
                        yield from                         $this->loadTemplate("@SonataAdmin/CRUD/Association/edit_one_to_many_inline_table.html.twig", "@SonataAdmin/CRUD/Association/edit_one_to_many.html.twig", 22)->unwrap()->yield($context);
                        // line 23
                        yield "                    ";
                    }
                    // line 24
                    yield "                ";
                } elseif ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "children", [], "any", false, false, false, 24)) > 0)) {
                    // line 25
                    yield "                    ";
                    $context["associationAdmin"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 25, $this->source); })()), "field_description", [], "any", false, false, false, 25), "associationadmin", [], "any", false, false, false, 25);
                    // line 26
                    yield "                    ";
                    yield from                     $this->loadTemplate("@SonataAdmin/CRUD/Association/edit_one_to_many_inline_tabs.html.twig", "@SonataAdmin/CRUD/Association/edit_one_to_many.html.twig", 26)->unwrap()->yield($context);
                    // line 27
                    yield "
                ";
                }
                // line 29
                yield "            ";
            } else {
                // line 30
                yield "                ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), 'widget');
                yield "
            ";
            }
            // line 32
            yield "
        </span>

        ";
            // line 35
            $context["display_create_button"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 35, $this->source); })()), "field_description", [], "any", false, false, false, 35), "associationadmin", [], "any", false, false, false, 35), "hasRoute", ["create"], "method", false, false, false, 35) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 36
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 36, $this->source); })()), "field_description", [], "any", false, false, false, 36), "associationadmin", [], "any", false, false, false, 36), "hasAccess", ["create"], "method", false, false, false, 36)) &&             // line 37
(isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new RuntimeError('Variable "btn_add" does not exist.', 37, $this->source); })())) && ((null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 39
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 39, $this->source); })()), "field_description", [], "any", false, false, false, 39), "option", ["limit"], "method", false, false, false, 39)) || (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,             // line 40
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "children", [], "any", false, false, false, 40)) < CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 40, $this->source); })()), "field_description", [], "any", false, false, false, 40), "option", ["limit"], "method", false, false, false, 40))));
            // line 42
            yield "
        ";
            // line 43
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 43, $this->source); })()), "edit", [], "any", false, false, false, 43) == "inline")) {
                // line 44
                yield "
            ";
                // line 45
                if ((isset($context["display_create_button"]) || array_key_exists("display_create_button", $context) ? $context["display_create_button"] : (function () { throw new RuntimeError('Variable "display_create_button" does not exist.', 45, $this->source); })())) {
                    // line 46
                    yield "                <span id=\"field_actions_";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 46, $this->source); })()), "html", null, true);
                    yield "\" >
                    <a
                        href=\"";
                    // line 48
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 48, $this->source); })()), "field_description", [], "any", false, false, false, 48), "associationadmin", [], "any", false, false, false, 48), "generateUrl", ["create", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 50
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 50, $this->source); })()), "field_description", [], "any", false, false, false, 50), "getOption", ["link_parameters", []], "method", false, false, false, 50)], "method", false, false, false, 48), "html", null, true);
                    // line 51
                    yield "\"
                        onclick=\"return start_field_retrieve_";
                    // line 52
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 52, $this->source); })()), "html", null, true);
                    yield "(this);\"
                        class=\"btn btn-success btn-sm sonata-ba-action\"
                        ";
                    // line 55
                    yield "                        title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((((                    // line 56
array_key_exists("btn_translation_domain", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 56, $this->source); })()), null)) : (null)) === false)) ? (                    // line 57
(isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new RuntimeError('Variable "btn_add" does not exist.', 57, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(                    // line 58
(isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new RuntimeError('Variable "btn_add" does not exist.', 58, $this->source); })()), [], ((array_key_exists("btn_translation_domain", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 58, $this->source); })()), (isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 58, $this->source); })()))) : ((isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 58, $this->source); })())))))), "html", null, true);
                    // line 59
                    yield "\"
                    >
                        <i class=\"fas fa-plus-circle\"></i>
                        ";
                    // line 63
                    yield "                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((((                    // line 64
array_key_exists("btn_translation_domain", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 64, $this->source); })()), null)) : (null)) === false)) ? (                    // line 65
(isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new RuntimeError('Variable "btn_add" does not exist.', 65, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(                    // line 66
(isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new RuntimeError('Variable "btn_add" does not exist.', 66, $this->source); })()), [], ((array_key_exists("btn_translation_domain", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 66, $this->source); })()), (isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 66, $this->source); })()))) : ((isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 66, $this->source); })())))))), "html", null, true);
                    // line 67
                    yield "
                    </a>
                </span>
            ";
                }
                // line 71
                yield "
            ";
                // line 73
                yield "            ";
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 73, $this->source); })()), "field_description", [], "any", false, false, false, 73), "option", ["sortable", false], "method", false, false, false, 73)) {
                    // line 74
                    yield "                ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 74, $this->source); })()), "inline", [], "any", false, false, false, 74) == "table")) {
                        // line 75
                        yield "                    ";
                        yield from                         $this->loadTemplate("@SonataAdmin/CRUD/Association/edit_one_to_many_sortable_script_table.html.twig", "@SonataAdmin/CRUD/Association/edit_one_to_many.html.twig", 75)->unwrap()->yield($context);
                        // line 76
                        yield "                ";
                    } else {
                        // line 77
                        yield "                    ";
                        yield from                         $this->loadTemplate("@SonataAdmin/CRUD/Association/edit_one_to_many_sortable_script_tabs.html.twig", "@SonataAdmin/CRUD/Association/edit_one_to_many.html.twig", 77)->unwrap()->yield($context);
                        // line 78
                        yield "                ";
                    }
                    // line 79
                    yield "            ";
                }
                // line 80
                yield "
            ";
                // line 82
                yield "            ";
                yield from                 $this->loadTemplate("@SonataAdmin/CRUD/Association/edit_one_script.html.twig", "@SonataAdmin/CRUD/Association/edit_one_to_many.html.twig", 82)->unwrap()->yield($context);
                // line 83
                yield "
        ";
            } else {
                // line 85
                yield "            <span id=\"field_actions_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 85, $this->source); })()), "html", null, true);
                yield "\" >
                ";
                // line 86
                if ((isset($context["display_create_button"]) || array_key_exists("display_create_button", $context) ? $context["display_create_button"] : (function () { throw new RuntimeError('Variable "display_create_button" does not exist.', 86, $this->source); })())) {
                    // line 87
                    yield "                    <a
                        href=\"";
                    // line 88
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 88, $this->source); })()), "field_description", [], "any", false, false, false, 88), "associationadmin", [], "any", false, false, false, 88), "generateUrl", ["create", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 90
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 90, $this->source); })()), "field_description", [], "any", false, false, false, 90), "getOption", ["link_parameters", []], "method", false, false, false, 90)], "method", false, false, false, 88), "html", null, true);
                    // line 91
                    yield "\"
                        onclick=\"return start_field_dialog_form_add_";
                    // line 92
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 92, $this->source); })()), "html", null, true);
                    yield "(this);\"
                        class=\"btn btn-success btn-sm sonata-ba-action\"
                        ";
                    // line 95
                    yield "                        title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((((                    // line 96
array_key_exists("btn_translation_domain", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 96, $this->source); })()), null)) : (null)) === false)) ? (                    // line 97
(isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new RuntimeError('Variable "btn_add" does not exist.', 97, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(                    // line 98
(isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new RuntimeError('Variable "btn_add" does not exist.', 98, $this->source); })()), [], ((array_key_exists("btn_translation_domain", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 98, $this->source); })()), (isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 98, $this->source); })()))) : ((isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 98, $this->source); })())))))), "html", null, true);
                    // line 99
                    yield "\"
                    >
                        <i class=\"fas fa-plus-circle\"></i>
                        ";
                    // line 103
                    yield "                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((((                    // line 104
array_key_exists("btn_translation_domain", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 104, $this->source); })()), null)) : (null)) === false)) ? (                    // line 105
(isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new RuntimeError('Variable "btn_add" does not exist.', 105, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(                    // line 106
(isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new RuntimeError('Variable "btn_add" does not exist.', 106, $this->source); })()), [], ((array_key_exists("btn_translation_domain", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 106, $this->source); })()), (isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 106, $this->source); })()))) : ((isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 106, $this->source); })())))))), "html", null, true);
                    // line 107
                    yield "
                    </a>
                    ";
                    // line 109
                    yield from                     $this->loadTemplate("@SonataAdmin/CRUD/Association/edit_modal.html.twig", "@SonataAdmin/CRUD/Association/edit_one_to_many.html.twig", 109)->unwrap()->yield($context);
                    // line 110
                    yield "                    ";
                    yield from                     $this->loadTemplate("@SonataAdmin/CRUD/Association/edit_many_script.html.twig", "@SonataAdmin/CRUD/Association/edit_one_to_many.html.twig", 110)->unwrap()->yield($context);
                    // line 111
                    yield "                ";
                }
                // line 112
                yield "            </span>
        ";
            }
            // line 114
            yield "    </div>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SonataAdmin/CRUD/Association/edit_one_to_many.html.twig";
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
        return array (  261 => 114,  257 => 112,  254 => 111,  251 => 110,  249 => 109,  245 => 107,  243 => 106,  242 => 105,  241 => 104,  239 => 103,  234 => 99,  232 => 98,  231 => 97,  230 => 96,  228 => 95,  223 => 92,  220 => 91,  218 => 90,  217 => 88,  214 => 87,  212 => 86,  207 => 85,  203 => 83,  200 => 82,  197 => 80,  194 => 79,  191 => 78,  188 => 77,  185 => 76,  182 => 75,  179 => 74,  176 => 73,  173 => 71,  167 => 67,  165 => 66,  164 => 65,  163 => 64,  161 => 63,  156 => 59,  154 => 58,  153 => 57,  152 => 56,  150 => 55,  145 => 52,  142 => 51,  140 => 50,  139 => 48,  133 => 46,  131 => 45,  128 => 44,  126 => 43,  123 => 42,  121 => 40,  120 => 39,  119 => 37,  118 => 36,  117 => 35,  112 => 32,  106 => 30,  103 => 29,  99 => 27,  96 => 26,  93 => 25,  90 => 24,  87 => 23,  84 => 22,  81 => 21,  78 => 20,  76 => 19,  72 => 18,  68 => 17,  65 => 16,  55 => 13,  50 => 12,  48 => 11,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
{% if not sonata_admin.field_description.hasassociationadmin %}
    {% for element in value %}
        {{ element|render_relation_element(sonata_admin.field_description) }}
    {% endfor %}
{% else %}

    <div id=\"field_container_{{ id }}\" class=\"field-container\">
        <span id=\"field_widget_{{ id }}\" >
            {% if sonata_admin.edit == 'inline' %}
                {% if sonata_admin.inline == 'table' %}
                    {% if form.children|length > 0 %}
                        {% include '@SonataAdmin/CRUD/Association/edit_one_to_many_inline_table.html.twig' %}
                    {% endif %}
                {% elseif form.children|length > 0 %}
                    {% set associationAdmin = sonata_admin.field_description.associationadmin %}
                    {% include '@SonataAdmin/CRUD/Association/edit_one_to_many_inline_tabs.html.twig' %}

                {% endif %}
            {% else %}
                {{ form_widget(form) }}
            {% endif %}

        </span>

        {% set display_create_button = sonata_admin.field_description.associationadmin.hasRoute('create')
            and sonata_admin.field_description.associationadmin.hasAccess('create')
            and btn_add
            and (
                sonata_admin.field_description.option('limit') is null or
                form.children|length < sonata_admin.field_description.option('limit')
            ) %}

        {% if sonata_admin.edit == 'inline' %}

            {% if display_create_button %}
                <span id=\"field_actions_{{ id }}\" >
                    <a
                        href=\"{{ sonata_admin.field_description.associationadmin.generateUrl(
                            'create',
                            sonata_admin.field_description.getOption('link_parameters', {})
                        ) }}\"
                        onclick=\"return start_field_retrieve_{{ id }}(this);\"
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
                </span>
            {% endif %}

            {# add code for the sortable options #}
            {% if sonata_admin.field_description.option('sortable', false) %}
                {% if sonata_admin.inline == 'table' %}
                    {% include '@SonataAdmin/CRUD/Association/edit_one_to_many_sortable_script_table.html.twig' %}
                {% else %}
                    {% include '@SonataAdmin/CRUD/Association/edit_one_to_many_sortable_script_tabs.html.twig' %}
                {% endif %}
            {% endif %}

            {# include association code #}
            {% include '@SonataAdmin/CRUD/Association/edit_one_script.html.twig' %}

        {% else %}
            <span id=\"field_actions_{{ id }}\" >
                {% if display_create_button %}
                    <a
                        href=\"{{ sonata_admin.field_description.associationadmin.generateUrl(
                            'create',
                            sonata_admin.field_description.getOption('link_parameters', {})
                        ) }}\"
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
            </span>
        {% endif %}
    </div>
{% endif %}
", "@SonataAdmin/CRUD/Association/edit_one_to_many.html.twig", "/home/aleksandar/Desktop/Site/payment-demo/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/Association/edit_one_to_many.html.twig");
    }
}
