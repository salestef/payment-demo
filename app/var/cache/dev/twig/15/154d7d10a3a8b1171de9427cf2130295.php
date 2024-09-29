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

/* @SonataAdmin/CRUD/base_list_field.html.twig */
class __TwigTemplate_33271c012e68a12a1ef5fbff4ff8eb97 extends Template
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
            'field' => [$this, 'block_field'],
            'field_span_attributes' => [$this, 'block_field_span_attributes'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_list_field.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_list_field.html.twig"));

        // line 11
        yield "
<td class=\"sonata-ba-list-field sonata-ba-list-field-";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 12, $this->source); })()), "type", [], "any", false, false, false, 12), "html", null, true);
        yield "\" objectId=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 12, $this->source); })()), "id", [(isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 12, $this->source); })())], "method", false, false, false, 12), "html", null, true);
        yield "\"";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 12, $this->source); })()), "option", ["row_align"], "method", false, false, false, 12)) {
            yield " style=\"text-align:";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 12, $this->source); })()), "option", ["row_align"], "method", false, false, false, 12), "html", null, true);
            yield "\"";
        }
        yield ">
    ";
        // line 13
        $context["route_name"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field_description"] ?? null), "option", ["route"], "method", false, true, false, 13), "name", [], "any", true, true, false, 13)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field_description"] ?? null), "option", ["route"], "method", false, true, false, 13), "name", [], "any", false, false, false, 13), CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_config"]) || array_key_exists("sonata_config", $context) ? $context["sonata_config"] : (function () { throw new RuntimeError('Variable "sonata_config" does not exist.', 13, $this->source); })()), "getOption", ["default_admin_route"], "method", false, false, false, 13))) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_config"]) || array_key_exists("sonata_config", $context) ? $context["sonata_config"] : (function () { throw new RuntimeError('Variable "sonata_config" does not exist.', 13, $this->source); })()), "getOption", ["default_admin_route"], "method", false, false, false, 13)));
        // line 14
        yield "    ";
        $context["route_parameters"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field_description"] ?? null), "option", ["route"], "method", false, true, false, 14), "parameters", [], "any", true, true, false, 14)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field_description"] ?? null), "option", ["route"], "method", false, true, false, 14), "parameters", [], "any", false, false, false, 14), [])) : ([]));
        // line 15
        yield "
    ";
        // line 16
        if (((CoreExtension::getAttribute($this->env, $this->source,         // line 17
(isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 17, $this->source); })()), "option", ["identifier", false], "method", false, false, false, 17) && CoreExtension::getAttribute($this->env, $this->source,         // line 18
(isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 18, $this->source); })()), "hasRoute", [(isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 18, $this->source); })())], "method", false, false, false, 18)) && CoreExtension::getAttribute($this->env, $this->source,         // line 19
(isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 19, $this->source); })()), "hasAccess", [(isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 19, $this->source); })()), ((CoreExtension::inFilter((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 19, $this->source); })()), ["show", "edit"])) ? ((isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 19, $this->source); })())) : (null))], "method", false, false, false, 19))) {
            // line 21
            yield "        <a class=\"sonata-link-identifier\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 21, $this->source); })()), "generateObjectUrl", [(isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 21, $this->source); })()), (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 21, $this->source); })()), (isset($context["route_parameters"]) || array_key_exists("route_parameters", $context) ? $context["route_parameters"] : (function () { throw new RuntimeError('Variable "route_parameters" does not exist.', 21, $this->source); })())], "method", false, false, false, 21), "html", null, true);
            yield "\">";
            // line 22
            yield from $this->unwrap()->yieldBlock('field', $context, $blocks);
            // line 35
            yield "</a>
    ";
        } else {
            // line 37
            yield "        ";
            $context["is_editable"] = (CoreExtension::getAttribute($this->env, $this->source, (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 37, $this->source); })()), "option", ["editable", false], "method", false, false, false, 37) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 37, $this->source); })()), "hasAccess", ["edit", (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 37, $this->source); })())], "method", false, false, false, 37));
            // line 38
            yield "        ";
            if ((((isset($context["is_editable"]) || array_key_exists("is_editable", $context) ? $context["is_editable"] : (function () { throw new RuntimeError('Variable "is_editable" does not exist.', 38, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 38, $this->source); })()), "option", ["multiple", false], "method", false, false, false, 38)) && is_iterable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 38, $this->source); })())))) {
                // line 39
                yield "            ";
                // line 40
                yield "            ";
                // line 41
                yield "            ";
                $context["x_editable_type"] = "checklist";
                // line 42
                yield "        ";
            } else {
                // line 43
                yield "            ";
                $context["x_editable_type"] = $this->env->getRuntime('Sonata\AdminBundle\Twig\XEditableRuntime')->getXEditableType(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 43, $this->source); })()), "type", [], "any", false, false, false, 43));
                // line 44
                yield "        ";
            }
            // line 45
            yield "
        ";
            // line 46
            if (((isset($context["is_editable"]) || array_key_exists("is_editable", $context) ? $context["is_editable"] : (function () { throw new RuntimeError('Variable "is_editable" does not exist.', 46, $this->source); })()) && (isset($context["x_editable_type"]) || array_key_exists("x_editable_type", $context) ? $context["x_editable_type"] : (function () { throw new RuntimeError('Variable "x_editable_type" does not exist.', 46, $this->source); })()))) {
                // line 47
                yield "            ";
                $context["url"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sonata_admin_set_object_field_value", (((["_sonata_admin" => CoreExtension::getAttribute($this->env, $this->source,                 // line 50
(isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 50, $this->source); })()), "baseCodeRoute", [], "any", false, false, false, 50), "context" => "list", "field" => CoreExtension::getAttribute($this->env, $this->source,                 // line 52
(isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 52, $this->source); })()), "name", [], "any", false, false, false, 52), "objectId" => CoreExtension::getAttribute($this->env, $this->source,                 // line 53
(isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 53, $this->source); })()), "urlSafeIdentifier", [(isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 53, $this->source); })())], "method", false, false, false, 53)] + ((CoreExtension::getAttribute($this->env, $this->source,                 // line 54
(isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 54, $this->source); })()), "hasRequest", [], "method", false, false, false, 54)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 54, $this->source); })()), "request", [], "any", false, false, false, 54), "attributes", [], "any", false, false, false, 54), "get", ["_route_params", []], "method", false, false, false, 54)) : ([]))) + CoreExtension::getAttribute($this->env, $this->source,                 // line 55
(isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 55, $this->source); })()), "getPersistentParameters", [], "method", false, false, false, 55)) + ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 56
($context["app"] ?? null), "request", [], "any", false, true, false, 56), "query", [], "any", false, true, false, 56), "all", [], "any", true, true, false, 56)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 56), "query", [], "any", false, true, false, 56), "all", [], "any", false, false, false, 56), [])) : ([]))));
                // line 58
                yield "
            ";
                // line 59
                if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 59, $this->source); })()), "type", [], "any", false, false, false, 59) == Twig\Extension\CoreExtension::constant("Sonata\\AdminBundle\\FieldDescription\\FieldDescriptionInterface::TYPE_DATE")) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 59, $this->source); })())))) {
                    // line 60
                    yield "                ";
                    // line 61
                    yield "                ";
                    $context["data_value"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 61, $this->source); })()), "Y-m-d", ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "timezone", [], "any", true, true, false, 61)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "timezone", [], "any", false, false, false, 61), null)) : (null)));
                    // line 62
                    yield "            ";
                } elseif (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 62, $this->source); })()), "type", [], "any", false, false, false, 62) == Twig\Extension\CoreExtension::constant("Sonata\\AdminBundle\\FieldDescription\\FieldDescriptionInterface::TYPE_BOOLEAN")) && Twig\Extension\CoreExtension::testEmpty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 62, $this->source); })())))) {
                    // line 63
                    yield "                ";
                    $context["data_value"] = 0;
                    // line 64
                    yield "            ";
                } elseif (is_iterable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 64, $this->source); })()))) {
                    // line 65
                    yield "                ";
                    $context["data_value"] = json_encode((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 65, $this->source); })()));
                    // line 66
                    yield "            ";
                } else {
                    // line 67
                    yield "                ";
                    $context["data_value"] = (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 67, $this->source); })());
                    // line 68
                    yield "            ";
                }
                // line 69
                yield "
            <span ";
                // line 70
                yield from $this->unwrap()->yieldBlock('field_span_attributes', $context, $blocks);
                // line 84
                yield ">
                ";
                // line 85
                yield from                 $this->unwrap()->yieldBlock("field", $context, $blocks);
                yield "
            </span>
        ";
            } else {
                // line 88
                yield "            ";
                yield from                 $this->unwrap()->yieldBlock("field", $context, $blocks);
                yield "
        ";
            }
            // line 90
            yield "    ";
        }
        // line 91
        yield "</td>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 22
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_field(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "field"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "field"));

        // line 23
        yield "                ";
        $___internal_parse_41_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 24
            yield "                    ";
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 24, $this->source); })()), "option", ["collapse"], "method", false, false, false, 24))) {
                // line 25
                yield "                        ";
                $context["collapse"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 25, $this->source); })()), "option", ["collapse"], "method", false, false, false, 25);
                // line 26
                yield "                        <div class=\"sonata-readmore\"
                              data-readmore-height=\"";
                // line 27
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["collapse"] ?? null), "height", [], "any", true, true, false, 27)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["collapse"] ?? null), "height", [], "any", false, false, false, 27), 40)) : (40)), "html", null, true);
                yield "\"
                              data-readmore-more=\"";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((CoreExtension::getAttribute($this->env, $this->source, ($context["collapse"] ?? null), "more", [], "any", true, true, false, 28)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["collapse"] ?? null), "more", [], "any", false, false, false, 28), "read_more")) : ("read_more")), [], "SonataAdminBundle"), "html", null, true);
                yield "\"
                              data-readmore-less=\"";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((CoreExtension::getAttribute($this->env, $this->source, ($context["collapse"] ?? null), "less", [], "any", true, true, false, 29)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["collapse"] ?? null), "less", [], "any", false, false, false, 29), "read_less")) : ("read_less")), [], "SonataAdminBundle"), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 29, $this->source); })()), "html", null, true);
                yield "</div>
                    ";
            } else {
                // line 31
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 31, $this->source); })()), "html", null, true);
                yield "
                    ";
            }
            // line 33
            yield "                ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 23
        yield Twig\Extension\CoreExtension::spaceless($___internal_parse_41_);
        // line 34
        yield "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 70
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_field_span_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "field_span_attributes"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "field_span_attributes"));

        yield "class=\"x-editable\"
                  data-type=\"";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["x_editable_type"]) || array_key_exists("x_editable_type", $context) ? $context["x_editable_type"] : (function () { throw new RuntimeError('Variable "x_editable_type" does not exist.', 71, $this->source); })()), "html", null, true);
        yield "\"
                  data-value=\"";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["data_value"]) || array_key_exists("data_value", $context) ? $context["data_value"] : (function () { throw new RuntimeError('Variable "data_value" does not exist.', 72, $this->source); })()), "html", null, true);
        yield "\"
                  ";
        // line 73
        if ( !(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 73, $this->source); })()), "label", [], "any", false, false, false, 73) === false)) {
            // line 74
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 74, $this->source); })()), "translationDomain", [], "any", false, false, false, 74) === false)) {
                // line 75
                yield "                          data-title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 75, $this->source); })()), "label", [], "any", false, false, false, 75), "html", null, true);
                yield "\"
                      ";
            } else {
                // line 77
                yield "                          data-title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 77, $this->source); })()), "label", [], "any", false, false, false, 77), [], CoreExtension::getAttribute($this->env, $this->source, (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 77, $this->source); })()), "translationDomain", [], "any", false, false, false, 77)), "html", null, true);
                yield "\"
                      ";
            }
            // line 79
            yield "                  ";
        }
        // line 80
        yield "                  ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 80, $this->source); })()), "type", [], "any", false, false, false, 80) == Twig\Extension\CoreExtension::constant("Sonata\\AdminBundle\\FieldDescription\\FieldDescriptionInterface::TYPE_DATE"))) {
            // line 81
            yield "                    data-format=\"yyyy-mm-dd\"
                  ";
        }
        // line 83
        yield "                  data-pk=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 83, $this->source); })()), "id", [(isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 83, $this->source); })())], "method", false, false, false, 83), "html", null, true);
        yield "\"
                  data-url=\"";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 84, $this->source); })()), "html", null, true);
        yield "\" ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SonataAdmin/CRUD/base_list_field.html.twig";
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
        return array (  308 => 84,  303 => 83,  299 => 81,  296 => 80,  293 => 79,  287 => 77,  281 => 75,  278 => 74,  276 => 73,  272 => 72,  268 => 71,  253 => 70,  242 => 34,  240 => 23,  236 => 33,  230 => 31,  223 => 29,  219 => 28,  215 => 27,  212 => 26,  209 => 25,  206 => 24,  203 => 23,  190 => 22,  178 => 91,  175 => 90,  169 => 88,  163 => 85,  160 => 84,  158 => 70,  155 => 69,  152 => 68,  149 => 67,  146 => 66,  143 => 65,  140 => 64,  137 => 63,  134 => 62,  131 => 61,  129 => 60,  127 => 59,  124 => 58,  122 => 56,  121 => 55,  120 => 54,  119 => 53,  118 => 52,  117 => 50,  115 => 47,  113 => 46,  110 => 45,  107 => 44,  104 => 43,  101 => 42,  98 => 41,  96 => 40,  94 => 39,  91 => 38,  88 => 37,  84 => 35,  82 => 22,  78 => 21,  76 => 19,  75 => 18,  74 => 17,  73 => 16,  70 => 15,  67 => 14,  65 => 13,  53 => 12,  50 => 11,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

<td class=\"sonata-ba-list-field sonata-ba-list-field-{{ field_description.type }}\" objectId=\"{{ admin.id(object) }}\"{% if field_description.option('row_align') %} style=\"text-align:{{ field_description.option('row_align') }}\"{% endif %}>
    {% set route_name = field_description.option('route').name|default(sonata_config.getOption('default_admin_route')) %}
    {% set route_parameters = field_description.option('route').parameters|default([]) %}

    {% if
        field_description.option('identifier', false)
        and admin.hasRoute(route_name)
        and admin.hasAccess(route_name, route_name in ['show', 'edit'] ? object : null)
    %}
        <a class=\"sonata-link-identifier\" href=\"{{ admin.generateObjectUrl(route_name, object, route_parameters) }}\">
            {%- block field %}
                {% apply spaceless %}
                    {% if field_description.option('collapse') is not null %}
                        {% set collapse = field_description.option('collapse') %}
                        <div class=\"sonata-readmore\"
                              data-readmore-height=\"{{ collapse.height|default(40) }}\"
                              data-readmore-more=\"{{ collapse.more|default('read_more')|trans({}, 'SonataAdminBundle') }}\"
                              data-readmore-less=\"{{ collapse.less|default('read_less')|trans({}, 'SonataAdminBundle') }}\">{{ value }}</div>
                    {% else %}
                        {{ value }}
                    {% endif %}
                {% endapply %}
            {% endblock -%}
        </a>
    {% else %}
        {% set is_editable = field_description.option('editable', false) and admin.hasAccess('edit', object) %}
        {% if is_editable and field_description.option('multiple', false) and value is iterable %}
            {# multiple editable field should be real multiple #}
            {# https://vitalets.github.io/x-editable/docs.html#checklist #}
            {% set x_editable_type = 'checklist' %}
        {% else %}
            {% set x_editable_type = field_description.type|sonata_xeditable_type %}
        {% endif %}

        {% if is_editable and x_editable_type %}
            {% set url = path(
                'sonata_admin_set_object_field_value',
                {
                    '_sonata_admin': admin.baseCodeRoute,
                    'context': 'list',
                    'field': field_description.name,
                    'objectId': admin.urlSafeIdentifier(object)
                } + (admin.hasRequest() ? admin.request.attributes.get('_route_params', {}) : {})
                + admin.getPersistentParameters()
                + app.request.query.all|default({})
            ) %}

            {% if field_description.type == constant('Sonata\\\\AdminBundle\\\\FieldDescription\\\\FieldDescriptionInterface::TYPE_DATE') and value is not empty %}
                {# it is a x-editable format https://vitalets.github.io/x-editable/docs.html#date #}
                {% set data_value = value|date('Y-m-d', options.timezone|default(null)) %}
            {% elseif field_description.type == constant('Sonata\\\\AdminBundle\\\\FieldDescription\\\\FieldDescriptionInterface::TYPE_BOOLEAN') and value is empty %}
                {% set data_value = 0 %}
            {% elseif value is iterable %}
                {% set data_value = value|json_encode %}
            {% else %}
                {% set data_value = value %}
            {% endif %}

            <span {% block field_span_attributes %}class=\"x-editable\"
                  data-type=\"{{ x_editable_type }}\"
                  data-value=\"{{ data_value }}\"
                  {% if field_description.label is not same as(false) %}
                      {% if field_description.translationDomain is same as(false) %}
                          data-title=\"{{ field_description.label }}\"
                      {% else %}
                          data-title=\"{{ field_description.label|trans({}, field_description.translationDomain) }}\"
                      {% endif %}
                  {% endif %}
                  {% if field_description.type == constant('Sonata\\\\AdminBundle\\\\FieldDescription\\\\FieldDescriptionInterface::TYPE_DATE') %}
                    data-format=\"yyyy-mm-dd\"
                  {% endif %}
                  data-pk=\"{{ admin.id(object) }}\"
                  data-url=\"{{ url }}\" {% endblock %}>
                {{ block('field') }}
            </span>
        {% else %}
            {{ block('field') }}
        {% endif %}
    {% endif %}
</td>
", "@SonataAdmin/CRUD/base_list_field.html.twig", "/home/aleksandar/Desktop/Site/payment-demo/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/base_list_field.html.twig");
    }
}
