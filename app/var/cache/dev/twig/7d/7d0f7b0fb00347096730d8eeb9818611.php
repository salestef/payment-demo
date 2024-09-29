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

/* @SonataAdmin/CRUD/dashboard__action_create.html.twig */
class __TwigTemplate_666f67cc24d73e6e4eb3719ef4f907cc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/dashboard__action_create.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/dashboard__action_create.html.twig"));

        // line 1
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 1, $this->source); })()), "subClasses", [], "any", false, false, false, 1))) {
            // line 2
            yield "    <a class=\"btn btn-link btn-flat\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 2, $this->source); })()), "url", [], "any", false, false, false, 2), "html", null, true);
            yield "\">
        ";
            // line 3
            yield $this->env->getRuntime('Sonata\AdminBundle\Twig\IconRuntime')->parseIcon(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 3, $this->source); })()), "icon", [], "any", false, false, false, 3));
            yield "
        ";
            // line 4
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "translation_domain", [], "any", true, true, false, 4) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 4, $this->source); })()), "translation_domain", [], "any", false, false, false, 4) === false))) {
                // line 5
                yield "            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 5, $this->source); })()), "label", [], "any", false, false, false, 5), "html", null, true);
                yield "
        ";
            } else {
                // line 7
                yield "            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 7, $this->source); })()), "label", [], "any", false, false, false, 7), [], ((CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "translation_domain", [], "any", true, true, false, 7)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "translation_domain", [], "any", false, false, false, 7), "SonataAdminBundle")) : ("SonataAdminBundle"))), "html", null, true);
                yield "
        ";
            }
            // line 9
            yield "    </a>
";
        } else {
            // line 11
            yield "    <a class=\"btn btn-link btn-flat dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
        ";
            // line 12
            yield $this->env->getRuntime('Sonata\AdminBundle\Twig\IconRuntime')->parseIcon(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 12, $this->source); })()), "icon", [], "any", false, false, false, 12));
            yield "
        ";
            // line 13
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "translation_domain", [], "any", true, true, false, 13) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 13, $this->source); })()), "translation_domain", [], "any", false, false, false, 13) === false))) {
                // line 14
                yield "            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 14, $this->source); })()), "label", [], "any", false, false, false, 14), "html", null, true);
                yield "
        ";
            } else {
                // line 16
                yield "            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 16, $this->source); })()), "label", [], "any", false, false, false, 16), [], ((CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "translation_domain", [], "any", true, true, false, 16)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "translation_domain", [], "any", false, false, false, 16), "SonataAdminBundle")) : ("SonataAdminBundle"))), "html", null, true);
                yield "
        ";
            }
            // line 18
            yield "        <span class=\"caret\"></span>
    </a>
    <ul class=\"dropdown-menu\">
        ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::keys(CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 21, $this->source); })()), "subclasses", [], "any", false, false, false, 21)));
            foreach ($context['_seq'] as $context["_key"] => $context["subclass"]) {
                // line 22
                yield "            <li>
                <a href=\"";
                // line 23
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 23, $this->source); })()), "generateUrl", ["create", ["subclass" => $context["subclass"]]], "method", false, false, false, 23), "html", null, true);
                yield "\">
                    ";
                // line 24
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "translation_domain", [], "any", true, true, false, 24) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 24, $this->source); })()), "translation_domain", [], "any", false, false, false, 24) === false))) {
                    // line 25
                    yield "                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["subclass"], "html", null, true);
                    yield "
                    ";
                } else {
                    // line 27
                    yield "                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["subclass"], [], ((CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "translation_domain", [], "any", true, true, false, 27)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "translation_domain", [], "any", false, false, false, 27), "SonataAdminBundle")) : ("SonataAdminBundle"))), "html", null, true);
                    yield "
                    ";
                }
                // line 29
                yield "                </a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['subclass'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            yield "    </ul>
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
        return "@SonataAdmin/CRUD/dashboard__action_create.html.twig";
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
        return array (  136 => 32,  128 => 29,  122 => 27,  116 => 25,  114 => 24,  110 => 23,  107 => 22,  103 => 21,  98 => 18,  92 => 16,  86 => 14,  84 => 13,  80 => 12,  77 => 11,  73 => 9,  67 => 7,  61 => 5,  59 => 4,  55 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if admin.subClasses is empty %}
    <a class=\"btn btn-link btn-flat\" href=\"{{ action.url }}\">
        {{ action.icon|parse_icon }}
        {% if action.translation_domain is defined and action.translation_domain is same as(false) %}
            {{ action.label }}
        {% else %}
            {{ action.label|trans({}, action.translation_domain|default('SonataAdminBundle')) }}
        {% endif %}
    </a>
{% else %}
    <a class=\"btn btn-link btn-flat dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
        {{ action.icon|parse_icon }}
        {% if action.translation_domain is defined and action.translation_domain is same as(false) %}
            {{ action.label }}
        {% else %}
            {{ action.label|trans({}, action.translation_domain|default('SonataAdminBundle')) }}
        {% endif %}
        <span class=\"caret\"></span>
    </a>
    <ul class=\"dropdown-menu\">
        {% for subclass in admin.subclasses|keys %}
            <li>
                <a href=\"{{ admin.generateUrl('create', {'subclass': subclass}) }}\">
                    {% if action.translation_domain is defined and action.translation_domain is same as(false) %}
                        {{ subclass }}
                    {% else %}
                        {{ subclass|trans({}, action.translation_domain|default('SonataAdminBundle')) }}
                    {% endif %}
                </a>
            </li>
        {% endfor %}
    </ul>
{% endif %}
", "@SonataAdmin/CRUD/dashboard__action_create.html.twig", "/home/aleksandar/Desktop/Site/payment-demo/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/dashboard__action_create.html.twig");
    }
}
