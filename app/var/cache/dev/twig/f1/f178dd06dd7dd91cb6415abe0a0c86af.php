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

/* @SonataAdmin/Core/add_block.html.twig */
class __TwigTemplate_d15e1cdfa58447b6d867e6ca0ffae72a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/add_block.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/add_block.html.twig"));

        // line 1
        $context["items_per_column"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_config"]) || array_key_exists("sonata_config", $context) ? $context["sonata_config"] : (function () { throw new RuntimeError('Variable "sonata_config" does not exist.', 1, $this->source); })()), "getOption", ["dropdown_number_groups_per_colums"], "method", false, false, false, 1);
        // line 2
        yield "
";
        // line 3
        $context["groups"] = $this->env->getRuntime('Sonata\AdminBundle\Twig\GroupRuntime')->getDashboardGroupsWithCreatableAdmins();
        // line 4
        yield "
";
        // line 5
        $context["column_count"] = Twig\Extension\CoreExtension::round((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new RuntimeError('Variable "groups" does not exist.', 5, $this->source); })())) / (isset($context["items_per_column"]) || array_key_exists("items_per_column", $context) ? $context["items_per_column"] : (function () { throw new RuntimeError('Variable "items_per_column" does not exist.', 5, $this->source); })())), 0, "ceil");
        // line 6
        yield "
";
        // line 7
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new RuntimeError('Variable "groups" does not exist.', 7, $this->source); })())) > 0)) {
            // line 8
            yield "<div class=\"dropdown-menu multi-column dropdown-add\"
    ";
            // line 9
            if (((isset($context["column_count"]) || array_key_exists("column_count", $context) ? $context["column_count"] : (function () { throw new RuntimeError('Variable "column_count" does not exist.', 9, $this->source); })()) > 1)) {
                yield "style=\"width: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["column_count"]) || array_key_exists("column_count", $context) ? $context["column_count"] : (function () { throw new RuntimeError('Variable "column_count" does not exist.', 9, $this->source); })()) * 140), "html", null, true);
                yield "px;\"";
            }
            // line 10
            yield ">
    ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::reverse($this->env->getCharset(), (isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new RuntimeError('Variable "groups" does not exist.', 11, $this->source); })())));
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
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 12
                yield "        ";
                $context["display"] = ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "roles", [], "any", false, false, false, 12)) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_config"]) || array_key_exists("sonata_config", $context) ? $context["sonata_config"] : (function () { throw new RuntimeError('Variable "sonata_config" does not exist.', 12, $this->source); })()), "getOption", ["role_admin"], "method", false, false, false, 12))) || (Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["group"], "roles", [], "any", false, false, false, 12), function ($__role__) use ($context, $macros) { $context["role"] = $__role__; return $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 12, $this->source); })())); })) > 0));
                // line 13
                yield "
        ";
                // line 14
                if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 14)) {
                    // line 15
                    yield "            ";
                    $context["render_first_element"] = true;
                    // line 16
                    yield "        ";
                }
                // line 17
                yield "
        ";
                // line 18
                if ((isset($context["display"]) || array_key_exists("display", $context) ? $context["display"] : (function () { throw new RuntimeError('Variable "display" does not exist.', 18, $this->source); })())) {
                    // line 19
                    yield "            ";
                    if (((isset($context["render_first_element"]) || array_key_exists("render_first_element", $context) ? $context["render_first_element"] : (function () { throw new RuntimeError('Variable "render_first_element" does not exist.', 19, $this->source); })()) || ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 19) % (isset($context["items_per_column"]) || array_key_exists("items_per_column", $context) ? $context["items_per_column"] : (function () { throw new RuntimeError('Variable "items_per_column" does not exist.', 19, $this->source); })())) == 0))) {
                        // line 20
                        yield "                ";
                        if ((isset($context["render_first_element"]) || array_key_exists("render_first_element", $context) ? $context["render_first_element"] : (function () { throw new RuntimeError('Variable "render_first_element" does not exist.', 20, $this->source); })())) {
                            // line 21
                            yield "                    <div class=\"container-fluid\">
                        <div class=\"row\">
                    ";
                            // line 23
                            $context["render_first_element"] = false;
                            // line 24
                            yield "                ";
                        } else {
                            // line 25
                            yield "                    </ul>
                ";
                        }
                        // line 27
                        yield "                <ul class=\"dropdown-menu";
                        if (((isset($context["column_count"]) || array_key_exists("column_count", $context) ? $context["column_count"] : (function () { throw new RuntimeError('Variable "column_count" does not exist.', 27, $this->source); })()) > 1)) {
                            yield " col-md-";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((12 / (isset($context["column_count"]) || array_key_exists("column_count", $context) ? $context["column_count"] : (function () { throw new RuntimeError('Variable "column_count" does not exist.', 27, $this->source); })()))), "html", null, true);
                        }
                        yield "\">
            ";
                    }
                    // line 29
                    yield "            ";
                    if (((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 29) % (isset($context["items_per_column"]) || array_key_exists("items_per_column", $context) ? $context["items_per_column"] : (function () { throw new RuntimeError('Variable "items_per_column" does not exist.', 29, $this->source); })())) != 0)) {
                        // line 30
                        yield "                <li role=\"presentation\" class=\"divider\"></li>
            ";
                    }
                    // line 32
                    yield "            <li role=\"presentation\" class=\"dropdown-header\">
                ";
                    // line 33
                    yield $this->env->getRuntime('Sonata\AdminBundle\Twig\IconRuntime')->parseIcon(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "icon", [], "any", false, false, false, 33));
                    yield "
                ";
                    // line 35
                    yield "                ";
                    if ((((CoreExtension::getAttribute($this->env, $this->source, $context["group"], "translation_domain", [], "any", true, true, false, 35)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "translation_domain", [], "any", false, false, false, 35), null)) : (null)) === false)) {
                        // line 36
                        yield "                    ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "label", [], "any", false, false, false, 36), "html", null, true);
                        yield "
                ";
                    } else {
                        // line 38
                        yield "                    ";
                        // line 39
                        yield "                    ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "label", [], "any", false, false, false, 39), [], ((CoreExtension::getAttribute($this->env, $this->source, $context["group"], "translation_domain", [], "any", true, true, false, 39)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "translation_domain", [], "any", false, false, false, 39), CoreExtension::getAttribute($this->env, $this->source, $context["group"], "label_catalogue", [], "any", false, false, false, 39))) : (CoreExtension::getAttribute($this->env, $this->source, $context["group"], "label_catalogue", [], "any", false, false, false, 39)))), "html", null, true);
                        yield "
                ";
                    }
                    // line 41
                    yield "            </li>

            ";
                    // line 43
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "items", [], "any", false, false, false, 43));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 44
                        yield "                ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["admin"], "hasRoute", ["create"], "method", false, false, false, 44) && CoreExtension::getAttribute($this->env, $this->source, $context["admin"], "hasAccess", ["create"], "method", false, false, false, 44))) {
                            // line 45
                            yield "                    ";
                            if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["admin"], "subClasses", [], "any", false, false, false, 45))) {
                                // line 46
                                yield "                        <li role=\"presentation\">
                            <a role=\"menuitem\" tabindex=\"-1\" href=\"";
                                // line 47
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["admin"], "generateUrl", ["create"], "method", false, false, false, 47), "html", null, true);
                                yield "\">
                                ";
                                // line 48
                                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["admin"], "label", [], "any", false, false, false, 48))) {
                                    // line 49
                                    yield "                                    ";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["admin"], "label", [], "any", false, false, false, 49), [], CoreExtension::getAttribute($this->env, $this->source, $context["admin"], "translationdomain", [], "any", false, false, false, 49)), "html", null, true);
                                    yield "
                                ";
                                }
                                // line 51
                                yield "                            </a>
                        </li>
                    ";
                            } else {
                                // line 54
                                yield "                        ";
                                $context['_parent'] = $context;
                                $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::keys(CoreExtension::getAttribute($this->env, $this->source, $context["admin"], "subclasses", [], "any", false, false, false, 54)));
                                foreach ($context['_seq'] as $context["_key"] => $context["subclass"]) {
                                    // line 55
                                    yield "                            <li role=\"presentation\">
                                <a role=\"menuitem\" tabindex=\"-1\" href=\"";
                                    // line 56
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["admin"], "generateUrl", ["create", ["subclass" => $context["subclass"]]], "method", false, false, false, 56), "html", null, true);
                                    yield "\">
                                    ";
                                    // line 57
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["subclass"], [], CoreExtension::getAttribute($this->env, $this->source, $context["admin"], "translationdomain", [], "any", false, false, false, 57)), "html", null, true);
                                    yield "
                                </a>
                            </li>
                        ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_key'], $context['subclass'], $context['_parent']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 61
                                yield "                    ";
                            }
                            // line 62
                            yield "                ";
                        }
                        // line 63
                        yield "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['admin'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 64
                    yield "            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 64) &&  !(isset($context["render_first_element"]) || array_key_exists("render_first_element", $context) ? $context["render_first_element"] : (function () { throw new RuntimeError('Variable "render_first_element" does not exist.', 64, $this->source); })()))) {
                        // line 65
                        yield "                </ul>
                </div>
                </div>
            ";
                    }
                    // line 69
                    yield "        ";
                }
                // line 70
                yield "    ";
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
            unset($context['_seq'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            yield "</div>
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
        return "@SonataAdmin/Core/add_block.html.twig";
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
        return array (  266 => 71,  252 => 70,  249 => 69,  243 => 65,  240 => 64,  234 => 63,  231 => 62,  228 => 61,  218 => 57,  214 => 56,  211 => 55,  206 => 54,  201 => 51,  195 => 49,  193 => 48,  189 => 47,  186 => 46,  183 => 45,  180 => 44,  176 => 43,  172 => 41,  166 => 39,  164 => 38,  158 => 36,  155 => 35,  151 => 33,  148 => 32,  144 => 30,  141 => 29,  132 => 27,  128 => 25,  125 => 24,  123 => 23,  119 => 21,  116 => 20,  113 => 19,  111 => 18,  108 => 17,  105 => 16,  102 => 15,  100 => 14,  97 => 13,  94 => 12,  77 => 11,  74 => 10,  68 => 9,  65 => 8,  63 => 7,  60 => 6,  58 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set items_per_column = sonata_config.getOption('dropdown_number_groups_per_colums') %}

{% set groups = get_sonata_dashboard_groups_with_creatable_admins() %}

{% set column_count = (groups|length / items_per_column)|round(0, 'ceil') %}

{% if groups|length > 0 %}
<div class=\"dropdown-menu multi-column dropdown-add\"
    {% if column_count > 1 %}style=\"width: {{ column_count*140 }}px;\"{% endif %}
>
    {% for group in groups|reverse %}
        {% set display = group.roles is empty or is_granted(sonata_config.getOption('role_admin')) or group.roles|filter(role => is_granted(role))|length > 0 %}

        {% if loop.first %}
            {% set render_first_element = true %}
        {% endif %}

        {% if display %}
            {% if render_first_element or loop.index0 % items_per_column == 0 %}
                {% if render_first_element %}
                    <div class=\"container-fluid\">
                        <div class=\"row\">
                    {% set render_first_element = false %}
                {% else %}
                    </ul>
                {% endif %}
                <ul class=\"dropdown-menu{% if column_count > 1 %} col-md-{{ (12/column_count)|round }}{% endif %}\">
            {% endif %}
            {% if loop.index0 % items_per_column != 0 %}
                <li role=\"presentation\" class=\"divider\"></li>
            {% endif %}
            <li role=\"presentation\" class=\"dropdown-header\">
                {{ group.icon|parse_icon }}
                {# NEXT_MAJOR: Remove the default null #}
                {% if group.translation_domain|default(null) is same as(false) %}
                    {{ group.label }}
                {% else %}
                    {# NEXT_MAJOR: Remove the fallback on group.label_catalogue #}
                    {{ group.label|trans({}, group.translation_domain|default(group.label_catalogue)) }}
                {% endif %}
            </li>

            {% for admin in group.items %}
                {% if admin.hasRoute('create') and admin.hasAccess('create') %}
                    {% if admin.subClasses is empty %}
                        <li role=\"presentation\">
                            <a role=\"menuitem\" tabindex=\"-1\" href=\"{{ admin.generateUrl('create') }}\">
                                {% if admin.label is not empty %}
                                    {{ admin.label|trans({}, admin.translationdomain) }}
                                {% endif %}
                            </a>
                        </li>
                    {% else %}
                        {% for subclass in admin.subclasses|keys %}
                            <li role=\"presentation\">
                                <a role=\"menuitem\" tabindex=\"-1\" href=\"{{ admin.generateUrl('create', {'subclass': subclass}) }}\">
                                    {{ subclass|trans({}, admin.translationdomain) }}
                                </a>
                            </li>
                        {% endfor %}
                    {% endif %}
                {% endif %}
            {% endfor %}
            {% if loop.last and not render_first_element %}
                </ul>
                </div>
                </div>
            {% endif %}
        {% endif %}
    {% endfor %}
</div>
{% endif %}
", "@SonataAdmin/Core/add_block.html.twig", "/var/www/project/vendor/sonata-project/admin-bundle/src/Resources/views/Core/add_block.html.twig");
    }
}
