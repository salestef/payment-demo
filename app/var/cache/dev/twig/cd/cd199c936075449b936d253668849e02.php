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

/* @SonataAdmin/CRUD/base_list_inner_row.html.twig */
class __TwigTemplate_8888e46c454697b0273c9104d1c0a576 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_list_inner_row.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_list_inner_row.html.twig"));

        // line 11
        yield "
";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 12, $this->source); })()), "list", [], "any", false, false, false, 12), "getElements", [], "method", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
            // line 13
            yield "    ";
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["field_description"], "name", [], "any", false, false, false, 13) == Twig\Extension\CoreExtension::constant("Sonata\\AdminBundle\\Datagrid\\ListMapper::NAME_ACTIONS")) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "request", [], "any", false, false, false, 13), "isXmlHttpRequest", [], "any", false, false, false, 13))) {
                // line 14
                yield "        ";
                // line 15
                yield "        ";
                // line 16
                yield "    ";
            } elseif (((CoreExtension::getAttribute($this->env, $this->source, $context["field_description"], "getOption", ["ajax_hidden"], "method", false, false, false, 16) == true) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "request", [], "any", false, false, false, 16), "isXmlHttpRequest", [], "any", false, false, false, 16))) {
                // line 17
                yield "        ";
                // line 18
                yield "    ";
            } else {
                // line 19
                yield "        ";
                yield $this->env->getRuntime('Sonata\AdminBundle\Twig\RenderElementRuntime')->renderListElement($this->env, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 19, $this->source); })()), $context["field_description"]);
                yield "
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field_description'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SonataAdmin/CRUD/base_list_inner_row.html.twig";
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
        return array (  70 => 19,  67 => 18,  65 => 17,  62 => 16,  60 => 15,  58 => 14,  55 => 13,  51 => 12,  48 => 11,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% for field_description in admin.list.getElements() %}
    {% if field_description.name == constant('Sonata\\\\AdminBundle\\\\Datagrid\\\\ListMapper::NAME_ACTIONS') and app.request.isXmlHttpRequest %}
        {# NEXT_MAJOR: Remove this case in version 5 and recommend using the option `ajax_hidden` instead. #}
        {# Action buttons disabled in ajax view! #}
    {% elseif field_description.getOption('ajax_hidden') == true and app.request.isXmlHttpRequest %}
        {# Disable fields with 'ajax_hidden' option set to true #}
    {% else %}
        {{ object|render_list_element(field_description) }}
    {% endif %}
{% endfor %}
", "@SonataAdmin/CRUD/base_list_inner_row.html.twig", "/home/aleksandar/Desktop/Site/payment-demo/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/base_list_inner_row.html.twig");
    }
}
