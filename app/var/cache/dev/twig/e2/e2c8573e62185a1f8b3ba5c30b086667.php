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

/* @SonataAdmin/CRUD/Association/edit_many_to_one.html.twig */
class __TwigTemplate_fa9b0d1bec5cac390147c546f53ab684 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/Association/edit_many_to_one.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/Association/edit_many_to_one.html.twig"));

        // line 11
        yield "
";
        // line 12
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 12, $this->source); })()), "field_description", [], "any", false, false, false, 12), "hasassociationadmin", [], "any", false, false, false, 12)) {
            // line 13
            yield "    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Sonata\AdminBundle\Twig\RenderElementRuntime')->renderRelationElement((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 13, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 13, $this->source); })()), "field_description", [], "any", false, false, false, 13)), "html", null, true);
            yield "
";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 14
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 14, $this->source); })()), "edit", [], "any", false, false, false, 14) == "inline")) {
            // line 15
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 15, $this->source); })()), "field_description", [], "any", false, false, false, 15), "associationadmin", [], "any", false, false, false, 15), "formfielddescriptions", [], "any", false, false, false, 15));
            foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
                // line 16
                yield "        ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["field_description"], "name", [], "any", false, false, false, 16), [], "array", false, false, false, 16), 'row');
                yield "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['field_description'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 19
            yield "    <div id=\"field_container_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 19, $this->source); })()), "html", null, true);
            yield "\" class=\"field-container\">
        ";
            // line 20
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 20, $this->source); })()), "edit", [], "any", false, false, false, 20) == "list")) {
                // line 21
                yield "            <span id=\"field_widget_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 21, $this->source); })()), "html", null, true);
                yield "\" class=\"field-short-description\">
                ";
                // line 22
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 22, $this->source); })()), "value", [], "any", false, false, false, 22) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 22, $this->source); })()), "field_description", [], "any", false, false, false, 22), "associationadmin", [], "any", false, false, false, 22), "id", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 22, $this->source); })()), "value", [], "any", false, false, false, 22)], "method", false, false, false, 22)))) {
                    // line 23
                    yield "                    ";
                    yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sonata_admin_short_object_information", ((["_sonata_admin" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 24
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 24, $this->source); })()), "field_description", [], "any", false, false, false, 24), "associationadmin", [], "any", false, false, false, 24), "baseCodeRoute", [], "any", false, false, false, 24), "objectId" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 25
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 25, $this->source); })()), "field_description", [], "any", false, false, false, 25), "associationadmin", [], "any", false, false, false, 25), "id", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 25, $this->source); })()), "value", [], "any", false, false, false, 25)], "method", false, false, false, 25), "uniqid" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 26
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 26, $this->source); })()), "field_description", [], "any", false, false, false, 26), "associationadmin", [], "any", false, false, false, 26), "uniqid", [], "any", false, false, false, 26), "linkParameters" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 27
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 27, $this->source); })()), "field_description", [], "any", false, false, false, 27), "option", ["link_parameters", []], "method", false, false, false, 27)] + ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 29
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 29, $this->source); })()), "field_description", [], "any", false, false, false, 29), "associationadmin", [], "any", false, false, false, 29), "hasRequest", [], "method", false, false, false, 29)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 30
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 30, $this->source); })()), "field_description", [], "any", false, false, false, 30), "associationadmin", [], "any", false, false, false, 30), "request", [], "any", false, false, false, 30), "attributes", [], "any", false, false, false, 30), "get", ["_route_params", []], "method", false, false, false, 30)) : ([]))) + ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 32
($context["app"] ?? null), "request", [], "any", false, true, false, 32), "query", [], "any", false, true, false, 32), "all", [], "any", true, true, false, 32)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 32), "query", [], "any", false, true, false, 32), "all", [], "any", false, false, false, 32), [])) : ([])))));
                    // line 33
                    yield "
                ";
                } elseif (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 34
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 34, $this->source); })()), "field_description", [], "any", false, false, false, 34), "option", ["placeholder", "short_object_description_placeholder"], "method", false, false, false, 34)) {
                    // line 35
                    yield "                    <span class=\"inner-field-short-description\">
                        ";
                    // line 36
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 36, $this->source); })()), "field_description", [], "any", false, false, false, 36), "option", ["placeholder", "short_object_description_placeholder"], "method", false, false, false, 36), [], "SonataAdminBundle"), "html", null, true);
                    yield "
                    </span>
                ";
                }
                // line 39
                yield "            </span>
            <span style=\"display: none\" >
                ";
                // line 41
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), 'widget');
                yield "
            </span>
        ";
            } else {
                // line 44
                yield "            <span id=\"field_widget_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 44, $this->source); })()), "html", null, true);
                yield "\" >
                ";
                // line 45
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), 'widget');
                yield "
            </span>
        ";
            }
            // line 48
            yield "
        <div id=\"field_actions_";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 49, $this->source); })()), "html", null, true);
            yield "\" class=\"field-actions\">
            ";
            // line 50
            $context["display_btn_list"] = ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 50, $this->source); })()), "edit", [], "any", false, false, false, 50) == "list") && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 51
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 51, $this->source); })()), "field_description", [], "any", false, false, false, 51), "associationadmin", [], "any", false, false, false, 51), "hasRoute", ["list"], "method", false, false, false, 51)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 52
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 52, $this->source); })()), "field_description", [], "any", false, false, false, 52), "associationadmin", [], "any", false, false, false, 52), "hasAccess", ["list"], "method", false, false, false, 52)) &&             // line 53
(isset($context["btn_list"]) || array_key_exists("btn_list", $context) ? $context["btn_list"] : (function () { throw new RuntimeError('Variable "btn_list" does not exist.', 53, $this->source); })()));
            // line 54
            yield "            ";
            $context["display_btn_add"] = ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 54, $this->source); })()), "edit", [], "any", false, false, false, 54) != "admin") && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 55
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 55, $this->source); })()), "field_description", [], "any", false, false, false, 55), "associationadmin", [], "any", false, false, false, 55), "hasRoute", ["create"], "method", false, false, false, 55)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 56
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 56, $this->source); })()), "field_description", [], "any", false, false, false, 56), "associationadmin", [], "any", false, false, false, 56), "hasAccess", ["create"], "method", false, false, false, 56)) &&             // line 57
(isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new RuntimeError('Variable "btn_add" does not exist.', 57, $this->source); })()));
            // line 58
            yield "            ";
            if (((isset($context["display_btn_list"]) || array_key_exists("display_btn_list", $context) ? $context["display_btn_list"] : (function () { throw new RuntimeError('Variable "display_btn_list" does not exist.', 58, $this->source); })()) || (isset($context["display_btn_add"]) || array_key_exists("display_btn_add", $context) ? $context["display_btn_add"] : (function () { throw new RuntimeError('Variable "display_btn_add" does not exist.', 58, $this->source); })()))) {
                // line 59
                yield "            <div class=\"btn-group\">
                ";
                // line 60
                if ((isset($context["display_btn_list"]) || array_key_exists("display_btn_list", $context) ? $context["display_btn_list"] : (function () { throw new RuntimeError('Variable "display_btn_list" does not exist.', 60, $this->source); })())) {
                    // line 61
                    yield "                    <a  href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 61, $this->source); })()), "field_description", [], "any", false, false, false, 61), "associationadmin", [], "any", false, false, false, 61), "generateUrl", ["list", Twig\Extension\CoreExtension::merge(["select" => true], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 61, $this->source); })()), "field_description", [], "any", false, false, false, 61), "getOption", ["link_parameters", []], "method", false, false, false, 61))], "method", false, false, false, 61), "html", null, true);
                    yield "\"
                        onclick=\"return start_field_dialog_form_list_";
                    // line 62
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 62, $this->source); })()), "html", null, true);
                    yield "(this);\"
                        class=\"btn btn-info btn-sm sonata-ba-action\"
                        ";
                    // line 65
                    yield "                        title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((((                    // line 66
array_key_exists("btn_translation_domain", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 66, $this->source); })()), null)) : (null)) === false)) ? (                    // line 67
(isset($context["btn_list"]) || array_key_exists("btn_list", $context) ? $context["btn_list"] : (function () { throw new RuntimeError('Variable "btn_list" does not exist.', 67, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(                    // line 68
(isset($context["btn_list"]) || array_key_exists("btn_list", $context) ? $context["btn_list"] : (function () { throw new RuntimeError('Variable "btn_list" does not exist.', 68, $this->source); })()), [], ((array_key_exists("btn_translation_domain", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 68, $this->source); })()), (isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 68, $this->source); })()))) : ((isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 68, $this->source); })())))))), "html", null, true);
                    // line 69
                    yield "\"
                        >
                        <i class=\"fas fa-list\"></i>
                        ";
                    // line 73
                    yield "                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((((                    // line 74
array_key_exists("btn_translation_domain", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 74, $this->source); })()), null)) : (null)) === false)) ? (                    // line 75
(isset($context["btn_list"]) || array_key_exists("btn_list", $context) ? $context["btn_list"] : (function () { throw new RuntimeError('Variable "btn_list" does not exist.', 75, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(                    // line 76
(isset($context["btn_list"]) || array_key_exists("btn_list", $context) ? $context["btn_list"] : (function () { throw new RuntimeError('Variable "btn_list" does not exist.', 76, $this->source); })()), [], ((array_key_exists("btn_translation_domain", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 76, $this->source); })()), (isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 76, $this->source); })()))) : ((isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 76, $this->source); })())))))), "html", null, true);
                    // line 77
                    yield "
                    </a>
                ";
                }
                // line 80
                yield "
                ";
                // line 81
                if ((isset($context["display_btn_add"]) || array_key_exists("display_btn_add", $context) ? $context["display_btn_add"] : (function () { throw new RuntimeError('Variable "display_btn_add" does not exist.', 81, $this->source); })())) {
                    // line 82
                    yield "                    <a  href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 82, $this->source); })()), "field_description", [], "any", false, false, false, 82), "associationadmin", [], "any", false, false, false, 82), "generateUrl", ["create", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 82, $this->source); })()), "field_description", [], "any", false, false, false, 82), "getOption", ["link_parameters", []], "method", false, false, false, 82)], "method", false, false, false, 82), "html", null, true);
                    yield "\"
                        onclick=\"return start_field_dialog_form_add_";
                    // line 83
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 83, $this->source); })()), "html", null, true);
                    yield "(this);\"
                        class=\"btn btn-success btn-sm sonata-ba-action\"
                        ";
                    // line 86
                    yield "                        title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((((                    // line 87
array_key_exists("btn_translation_domain", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 87, $this->source); })()), null)) : (null)) === false)) ? (                    // line 88
(isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new RuntimeError('Variable "btn_add" does not exist.', 88, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(                    // line 89
(isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new RuntimeError('Variable "btn_add" does not exist.', 89, $this->source); })()), [], ((array_key_exists("btn_translation_domain", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 89, $this->source); })()), (isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 89, $this->source); })()))) : ((isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 89, $this->source); })())))))), "html", null, true);
                    // line 90
                    yield "\"
                        >
                        <i class=\"fas fa-plus-circle\"></i>
                        ";
                    // line 94
                    yield "                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((((                    // line 95
array_key_exists("btn_translation_domain", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 95, $this->source); })()), null)) : (null)) === false)) ? (                    // line 96
(isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new RuntimeError('Variable "btn_add" does not exist.', 96, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(                    // line 97
(isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new RuntimeError('Variable "btn_add" does not exist.', 97, $this->source); })()), [], ((array_key_exists("btn_translation_domain", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 97, $this->source); })()), (isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 97, $this->source); })()))) : ((isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 97, $this->source); })())))))), "html", null, true);
                    // line 98
                    yield "
                    </a>
                ";
                }
                // line 101
                yield "            </div>
            ";
            }
            // line 103
            yield "
            ";
            // line 104
            $context["display_btn_delete"] = ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 104, $this->source); })()), "edit", [], "any", false, false, false, 104) == "list") && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 105
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 105, $this->source); })()), "field_description", [], "any", false, false, false, 105), "associationadmin", [], "any", false, false, false, 105), "hasRoute", ["delete"], "method", false, false, false, 105)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 106
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 106, $this->source); })()), "field_description", [], "any", false, false, false, 106), "associationadmin", [], "any", false, false, false, 106), "hasAccess", ["delete"], "method", false, false, false, 106)) &&             // line 107
(isset($context["btn_delete"]) || array_key_exists("btn_delete", $context) ? $context["btn_delete"] : (function () { throw new RuntimeError('Variable "btn_delete" does not exist.', 107, $this->source); })()));
            // line 108
            yield "            ";
            if ((isset($context["display_btn_delete"]) || array_key_exists("display_btn_delete", $context) ? $context["display_btn_delete"] : (function () { throw new RuntimeError('Variable "display_btn_delete" does not exist.', 108, $this->source); })())) {
                // line 109
                yield "                <a  href=\"\"
                    onclick=\"return remove_selected_element_";
                // line 110
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 110, $this->source); })()), "html", null, true);
                yield "(this);\"
                    class=\"btn btn-danger btn-sm sonata-ba-action\"
                    ";
                // line 113
                yield "                    title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((((                // line 114
array_key_exists("btn_translation_domain", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 114, $this->source); })()), null)) : (null)) === false)) ? (                // line 115
(isset($context["btn_delete"]) || array_key_exists("btn_delete", $context) ? $context["btn_delete"] : (function () { throw new RuntimeError('Variable "btn_delete" does not exist.', 115, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(                // line 116
(isset($context["btn_delete"]) || array_key_exists("btn_delete", $context) ? $context["btn_delete"] : (function () { throw new RuntimeError('Variable "btn_delete" does not exist.', 116, $this->source); })()), [], ((array_key_exists("btn_translation_domain", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 116, $this->source); })()), (isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 116, $this->source); })()))) : ((isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 116, $this->source); })())))))), "html", null, true);
                // line 117
                yield "\"
                    >
                    <i class=\"fas fa-minus-circle\"></i>
                    ";
                // line 121
                yield "                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((((                // line 122
array_key_exists("btn_translation_domain", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 122, $this->source); })()), null)) : (null)) === false)) ? (                // line 123
(isset($context["btn_delete"]) || array_key_exists("btn_delete", $context) ? $context["btn_delete"] : (function () { throw new RuntimeError('Variable "btn_delete" does not exist.', 123, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(                // line 124
(isset($context["btn_delete"]) || array_key_exists("btn_delete", $context) ? $context["btn_delete"] : (function () { throw new RuntimeError('Variable "btn_delete" does not exist.', 124, $this->source); })()), [], ((array_key_exists("btn_translation_domain", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 124, $this->source); })()), (isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 124, $this->source); })()))) : ((isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 124, $this->source); })())))))), "html", null, true);
                // line 125
                yield "
                </a>
            ";
            }
            // line 128
            yield "
            ";
            // line 129
            if ((((isset($context["display_btn_list"]) || array_key_exists("display_btn_list", $context) ? $context["display_btn_list"] : (function () { throw new RuntimeError('Variable "display_btn_list" does not exist.', 129, $this->source); })()) || (isset($context["display_btn_add"]) || array_key_exists("display_btn_add", $context) ? $context["display_btn_add"] : (function () { throw new RuntimeError('Variable "display_btn_add" does not exist.', 129, $this->source); })())) || (isset($context["display_btn_delete"]) || array_key_exists("display_btn_delete", $context) ? $context["display_btn_delete"] : (function () { throw new RuntimeError('Variable "display_btn_delete" does not exist.', 129, $this->source); })()))) {
                // line 130
                yield "                ";
                yield from                 $this->loadTemplate("@SonataAdmin/CRUD/Association/edit_modal.html.twig", "@SonataAdmin/CRUD/Association/edit_many_to_one.html.twig", 130)->unwrap()->yield($context);
                // line 131
                yield "                ";
                yield from                 $this->loadTemplate("@SonataAdmin/CRUD/Association/edit_many_script.html.twig", "@SonataAdmin/CRUD/Association/edit_many_to_one.html.twig", 131)->unwrap()->yield($context);
                // line 132
                yield "            ";
            }
            // line 133
            yield "        </div>
    </div>
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
        return "@SonataAdmin/CRUD/Association/edit_many_to_one.html.twig";
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
        return array (  288 => 133,  285 => 132,  282 => 131,  279 => 130,  277 => 129,  274 => 128,  269 => 125,  267 => 124,  266 => 123,  265 => 122,  263 => 121,  258 => 117,  256 => 116,  255 => 115,  254 => 114,  252 => 113,  247 => 110,  244 => 109,  241 => 108,  239 => 107,  238 => 106,  237 => 105,  236 => 104,  233 => 103,  229 => 101,  224 => 98,  222 => 97,  221 => 96,  220 => 95,  218 => 94,  213 => 90,  211 => 89,  210 => 88,  209 => 87,  207 => 86,  202 => 83,  197 => 82,  195 => 81,  192 => 80,  187 => 77,  185 => 76,  184 => 75,  183 => 74,  181 => 73,  176 => 69,  174 => 68,  173 => 67,  172 => 66,  170 => 65,  165 => 62,  160 => 61,  158 => 60,  155 => 59,  152 => 58,  150 => 57,  149 => 56,  148 => 55,  146 => 54,  144 => 53,  143 => 52,  142 => 51,  141 => 50,  137 => 49,  134 => 48,  128 => 45,  123 => 44,  117 => 41,  113 => 39,  107 => 36,  104 => 35,  102 => 34,  99 => 33,  97 => 32,  96 => 30,  95 => 29,  94 => 27,  93 => 26,  92 => 25,  91 => 24,  89 => 23,  87 => 22,  82 => 21,  80 => 20,  75 => 19,  65 => 16,  60 => 15,  58 => 14,  53 => 13,  51 => 12,  48 => 11,);
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
    {{ value|render_relation_element(sonata_admin.field_description) }}
{% elseif sonata_admin.edit == 'inline' %}
    {% for field_description in sonata_admin.field_description.associationadmin.formfielddescriptions %}
        {{ form_row(form[field_description.name]) }}
    {% endfor %}
{% else %}
    <div id=\"field_container_{{ id }}\" class=\"field-container\">
        {% if sonata_admin.edit == 'list' %}
            <span id=\"field_widget_{{ id }}\" class=\"field-short-description\">
                {% if sonata_admin.value and sonata_admin.field_description.associationadmin.id(sonata_admin.value) is not null %}
                    {{ render(path('sonata_admin_short_object_information', {
                        '_sonata_admin': sonata_admin.field_description.associationadmin.baseCodeRoute,
                        'objectId': sonata_admin.field_description.associationadmin.id(sonata_admin.value),
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
            <span style=\"display: none\" >
                {{ form_widget(form) }}
            </span>
        {% else %}
            <span id=\"field_widget_{{ id }}\" >
                {{ form_widget(form) }}
            </span>
        {% endif %}

        <div id=\"field_actions_{{ id }}\" class=\"field-actions\">
            {% set display_btn_list = sonata_admin.edit == 'list'
                and sonata_admin.field_description.associationadmin.hasRoute('list')
                and sonata_admin.field_description.associationadmin.hasAccess('list')
                and btn_list %}
            {% set display_btn_add = sonata_admin.edit != 'admin'
                and sonata_admin.field_description.associationadmin.hasRoute('create')
                and sonata_admin.field_description.associationadmin.hasAccess('create')
                and btn_add %}
            {% if display_btn_list or display_btn_add %}
            <div class=\"btn-group\">
                {% if display_btn_list %}
                    <a  href=\"{{ sonata_admin.field_description.associationadmin.generateUrl('list', {select: true}|merge(sonata_admin.field_description.getOption('link_parameters', {}))) }}\"
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

                {% if display_btn_add %}
                    <a  href=\"{{ sonata_admin.field_description.associationadmin.generateUrl('create', sonata_admin.field_description.getOption('link_parameters', {})) }}\"
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
            </div>
            {% endif %}

            {% set display_btn_delete = sonata_admin.edit == 'list'
                and sonata_admin.field_description.associationadmin.hasRoute('delete')
                and sonata_admin.field_description.associationadmin.hasAccess('delete')
                and btn_delete %}
            {% if display_btn_delete %}
                <a  href=\"\"
                    onclick=\"return remove_selected_element_{{ id }}(this);\"
                    class=\"btn btn-danger btn-sm sonata-ba-action\"
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
                </a>
            {% endif %}

            {% if display_btn_list or display_btn_add or display_btn_delete %}
                {% include '@SonataAdmin/CRUD/Association/edit_modal.html.twig' %}
                {% include '@SonataAdmin/CRUD/Association/edit_many_script.html.twig' %}
            {% endif %}
        </div>
    </div>
{% endif %}
", "@SonataAdmin/CRUD/Association/edit_many_to_one.html.twig", "/home/aleksandar/Desktop/Site/payment-demo/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/Association/edit_many_to_one.html.twig");
    }
}
