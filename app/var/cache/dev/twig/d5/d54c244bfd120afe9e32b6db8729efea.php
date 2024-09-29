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

/* @SonataAdmin/Block/block_search_result.html.twig */
class __TwigTemplate_a2653563ad66974657c85b62066924c4 extends Template
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
            'block' => [$this, 'block_block'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 12
        return $this->loadTemplate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_block"]) || array_key_exists("sonata_block", $context) ? $context["sonata_block"] : (function () { throw new RuntimeError('Variable "sonata_block" does not exist.', 12, $this->source); })()), "templates", [], "any", false, false, false, 12), "block_base", [], "any", false, false, false, 12), "@SonataAdmin/Block/block_search_result.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/Block/block_search_result.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/Block/block_search_result.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 14
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "block"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "block"));

        // line 15
        yield "    ";
        $context["results_count"] = (((isset($context["pager"]) || array_key_exists("pager", $context) ? $context["pager"] : (function () { throw new RuntimeError('Variable "pager" does not exist.', 15, $this->source); })())) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["pager"]) || array_key_exists("pager", $context) ? $context["pager"] : (function () { throw new RuntimeError('Variable "pager" does not exist.', 15, $this->source); })()), "countResults", [], "method", false, false, false, 15)) : (0));
        // line 16
        yield "    ";
        $context["has_results"] = ((isset($context["results_count"]) || array_key_exists("results_count", $context) ? $context["results_count"] : (function () { throw new RuntimeError('Variable "results_count" does not exist.', 16, $this->source); })()) > 0);
        // line 17
        yield "    ";
        $context["current_page_results"] = (((isset($context["has_results"]) || array_key_exists("has_results", $context) ? $context["has_results"] : (function () { throw new RuntimeError('Variable "has_results" does not exist.', 17, $this->source); })())) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["pager"]) || array_key_exists("pager", $context) ? $context["pager"] : (function () { throw new RuntimeError('Variable "pager" does not exist.', 17, $this->source); })()), "currentPageResults", [], "any", false, false, false, 17)) : ([]));
        // line 18
        yield "    ";
        $context["visibility_class"] = ("sonata-search-result-" . (((isset($context["has_results"]) || array_key_exists("has_results", $context) ? $context["has_results"] : (function () { throw new RuntimeError('Variable "has_results" does not exist.', 18, $this->source); })())) ? ("show") : ((isset($context["show_empty_boxes"]) || array_key_exists("show_empty_boxes", $context) ? $context["show_empty_boxes"] : (function () { throw new RuntimeError('Variable "show_empty_boxes" does not exist.', 18, $this->source); })()))));
        // line 19
        yield "
    <div class=\"col-lg-4 col-md-6 search-box-item ";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["visibility_class"]) || array_key_exists("visibility_class", $context) ? $context["visibility_class"] : (function () { throw new RuntimeError('Variable "visibility_class" does not exist.', 20, $this->source); })()), "html", null, true);
        yield "\">
        <div class=\"box box-solid ";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["visibility_class"]) || array_key_exists("visibility_class", $context) ? $context["visibility_class"] : (function () { throw new RuntimeError('Variable "visibility_class" does not exist.', 21, $this->source); })()), "html", null, true);
        yield "\">
            <div class=\"box-header with-border ";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["visibility_class"]) || array_key_exists("visibility_class", $context) ? $context["visibility_class"] : (function () { throw new RuntimeError('Variable "visibility_class" does not exist.', 22, $this->source); })()), "html", null, true);
        yield "\">
                ";
        // line 23
        yield $this->env->getRuntime('Sonata\AdminBundle\Twig\IconRuntime')->parseIcon(((CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "icon", [], "any", true, true, false, 23)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "icon", [], "any", false, false, false, 23), "")) : ("")));
        yield "
                <h3 class=\"box-title\">
                    ";
        // line 25
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 25, $this->source); })()), "label", [], "any", false, false, false, 25))) {
            // line 26
            yield "                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 26, $this->source); })()), "label", [], "any", false, false, false, 26), [], CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 26, $this->source); })()), "translationdomain", [], "any", false, false, false, 26)), "html", null, true);
            yield "
                    ";
        }
        // line 28
        yield "                </h3>

                <div class=\"box-tools pull-right\">
                    ";
        // line 31
        if ((isset($context["has_results"]) || array_key_exists("has_results", $context) ? $context["has_results"] : (function () { throw new RuntimeError('Variable "has_results" does not exist.', 31, $this->source); })())) {
            // line 32
            yield "                        <span class=\"badge\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["results_count"]) || array_key_exists("results_count", $context) ? $context["results_count"] : (function () { throw new RuntimeError('Variable "results_count" does not exist.', 32, $this->source); })()), "html", null, true);
            yield "</span>
                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 33
(isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 33, $this->source); })()), "hasRoute", ["create"], "method", false, false, false, 33) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 33, $this->source); })()), "hasAccess", ["create"], "method", false, false, false, 33))) {
            // line 34
            yield "                        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 34, $this->source); })()), "generateUrl", ["create"], "method", false, false, false, 34), "html", null, true);
            yield "\" class=\"btn btn-box-tool\">
                            <i class=\"fas fa-plus\" aria-hidden=\"true\"></i>
                        </a>
                    ";
        }
        // line 38
        yield "                    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 38, $this->source); })()), "hasRoute", ["list"], "method", false, false, false, 38) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 38, $this->source); })()), "hasAccess", ["list"], "method", false, false, false, 38))) {
            // line 39
            yield "                        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 39, $this->source); })()), "generateUrl", ["list"], "method", false, false, false, 39), "html", null, true);
            yield "\" class=\"btn btn-box-tool\">
                            <i class=\"fas fa-list\" aria-hidden=\"true\"></i>
                        </a>
                    ";
        }
        // line 43
        yield "                </div>

                <div class=\"matches\">
                    ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 46, $this->source); })()));
        foreach ($context['_seq'] as $context["name"] => $context["filter"]) {
            // line 47
            yield "                        <a class=\"label label-primary\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 47, $this->source); })()), "generateUrl", ["list", ["filter" => [CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "formName", [], "any", false, false, false, 47) => ["value" => (isset($context["term"]) || array_key_exists("term", $context) ? $context["term"] : (function () { throw new RuntimeError('Variable "term" does not exist.', 47, $this->source); })())]]]], "method", false, false, false, 47), "html", null, true);
            yield "\">
                            ";
            // line 48
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "translationDomain", [], "any", false, false, false, 48) === false)) {
                // line 49
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "label", [], "any", false, false, false, 49), "html", null, true);
                yield "
                            ";
            } else {
                // line 51
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "label", [], "any", false, false, false, 51), [], (((CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "translationDomain", [], "any", true, true, false, 51) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "translationDomain", [], "any", false, false, false, 51)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "translationDomain", [], "any", false, false, false, 51)) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 51, $this->source); })()), "translationDomain", [], "any", false, false, false, 51)))), "html", null, true);
                yield "
                            ";
            }
            // line 53
            yield "                        </a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['name'], $context['filter'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        yield "                </div>
            </div>
            ";
        // line 57
        if ((isset($context["has_results"]) || array_key_exists("has_results", $context) ? $context["has_results"] : (function () { throw new RuntimeError('Variable "has_results" does not exist.', 57, $this->source); })())) {
            // line 58
            yield "                <div class=\"box-body no-padding\">
                    <ul class=\"nav nav-stacked sonata-search-result-list\">
                        ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["current_page_results"]) || array_key_exists("current_page_results", $context) ? $context["current_page_results"] : (function () { throw new RuntimeError('Variable "current_page_results" does not exist.', 60, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 61
                yield "                            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 61, $this->source); })()), "hasRoute", [(isset($context["admin_route"]) || array_key_exists("admin_route", $context) ? $context["admin_route"] : (function () { throw new RuntimeError('Variable "admin_route" does not exist.', 61, $this->source); })())], "method", false, false, false, 61) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 61, $this->source); })()), "hasAccess", [(isset($context["admin_route"]) || array_key_exists("admin_route", $context) ? $context["admin_route"] : (function () { throw new RuntimeError('Variable "admin_route" does not exist.', 61, $this->source); })()), $context["result"]], "method", false, false, false, 61))) {
                    // line 62
                    yield "                                <li>
                                    <a href=\"";
                    // line 63
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 63, $this->source); })()), "generateObjectUrl", [(isset($context["admin_route"]) || array_key_exists("admin_route", $context) ? $context["admin_route"] : (function () { throw new RuntimeError('Variable "admin_route" does not exist.', 63, $this->source); })()), $context["result"]], "method", false, false, false, 63), "html", null, true);
                    yield "\">
                                        ";
                    // line 64
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 64, $this->source); })()), "toString", [$context["result"]], "method", false, false, false, 64), "html", null, true);
                    yield "
                                    </a>
                                </li>
                            ";
                } else {
                    // line 68
                    yield "                                <li><a>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 68, $this->source); })()), "toString", [$context["result"]], "method", false, false, false, 68), "html", null, true);
                    yield "</a></li>
                            ";
                }
                // line 70
                yield "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['result'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            yield "                    </ul>
                </div>
            ";
        } else {
            // line 74
            yield "                <div class=\"box-body\">
                    <p>
                        <em>";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("no_results_found", [], "SonataAdminBundle"), "html", null, true);
            yield "</em>
                    </p>
                </div>
            ";
        }
        // line 80
        yield "        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SonataAdmin/Block/block_search_result.html.twig";
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
        return array (  242 => 80,  235 => 76,  231 => 74,  226 => 71,  220 => 70,  214 => 68,  207 => 64,  203 => 63,  200 => 62,  197 => 61,  193 => 60,  189 => 58,  187 => 57,  183 => 55,  176 => 53,  170 => 51,  164 => 49,  162 => 48,  157 => 47,  153 => 46,  148 => 43,  140 => 39,  137 => 38,  129 => 34,  127 => 33,  122 => 32,  120 => 31,  115 => 28,  109 => 26,  107 => 25,  102 => 23,  98 => 22,  94 => 21,  90 => 20,  87 => 19,  84 => 18,  81 => 17,  78 => 16,  75 => 15,  62 => 14,  40 => 12,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends sonata_block.templates.block_base %}

{% block block %}
    {% set results_count = pager ? pager.countResults() : 0 %}
    {% set has_results = results_count > 0 %}
    {% set current_page_results = has_results ? pager.currentPageResults : [] %}
    {% set visibility_class = 'sonata-search-result-' ~ (has_results ? 'show' : show_empty_boxes) %}

    <div class=\"col-lg-4 col-md-6 search-box-item {{ visibility_class }}\">
        <div class=\"box box-solid {{ visibility_class }}\">
            <div class=\"box-header with-border {{ visibility_class }}\">
                {{ settings.icon|default('')|parse_icon }}
                <h3 class=\"box-title\">
                    {% if admin.label is not empty %}
                        {{ admin.label|trans({}, admin.translationdomain) }}
                    {% endif %}
                </h3>

                <div class=\"box-tools pull-right\">
                    {% if has_results %}
                        <span class=\"badge\">{{ results_count }}</span>
                    {% elseif admin.hasRoute('create') and admin.hasAccess('create') %}
                        <a href=\"{{ admin.generateUrl('create') }}\" class=\"btn btn-box-tool\">
                            <i class=\"fas fa-plus\" aria-hidden=\"true\"></i>
                        </a>
                    {% endif %}
                    {% if admin.hasRoute('list') and admin.hasAccess('list') %}
                        <a href=\"{{ admin.generateUrl('list') }}\" class=\"btn btn-box-tool\">
                            <i class=\"fas fa-list\" aria-hidden=\"true\"></i>
                        </a>
                    {% endif %}
                </div>

                <div class=\"matches\">
                    {% for name, filter in filters %}
                        <a class=\"label label-primary\" href=\"{{ admin.generateUrl('list', {'filter': {(filter.formName): {'value': term}}}) }}\">
                            {% if filter.translationDomain is same as(false) %}
                                {{ filter.label }}
                            {% else %}
                                {{ filter.label|trans({}, filter.translationDomain ?? admin.translationDomain) }}
                            {% endif %}
                        </a>
                    {% endfor %}
                </div>
            </div>
            {% if has_results %}
                <div class=\"box-body no-padding\">
                    <ul class=\"nav nav-stacked sonata-search-result-list\">
                        {% for result in current_page_results %}
                            {% if admin.hasRoute(admin_route) and admin.hasAccess(admin_route, result) %}
                                <li>
                                    <a href=\"{{ admin.generateObjectUrl(admin_route, result) }}\">
                                        {{ admin.toString(result) }}
                                    </a>
                                </li>
                            {% else %}
                                <li><a>{{ admin.toString(result) }}</a></li>
                            {% endif %}
                        {% endfor %}
                    </ul>
                </div>
            {% else %}
                <div class=\"box-body\">
                    <p>
                        <em>{{ 'no_results_found'|trans({}, 'SonataAdminBundle') }}</em>
                    </p>
                </div>
            {% endif %}
        </div>
    </div>
{% endblock %}
", "@SonataAdmin/Block/block_search_result.html.twig", "/home/aleksandar/Desktop/Site/payment-demo/vendor/sonata-project/admin-bundle/src/Resources/views/Block/block_search_result.html.twig");
    }
}
