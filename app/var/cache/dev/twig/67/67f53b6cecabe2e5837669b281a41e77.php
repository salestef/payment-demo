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

/* @SonataAdmin/Breadcrumb/breadcrumb.html.twig */
class __TwigTemplate_625ee9b91d19aec8cde4c6b5555aef4c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/Breadcrumb/breadcrumb.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/Breadcrumb/breadcrumb.html.twig"));

        // line 1
        $___internal_parse_16_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 2, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                // line 3
                $context["translation_domain"] = CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "extra", ["translation_domain", "messages"], "method", false, false, false, 3);
                // line 5
                $context["label"] = CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "getLabel", [], "method", false, false, false, 5);
                // line 6
                if ( !((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 6, $this->source); })()) === false)) {
                    // line 7
                    $context["label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 7, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "extra", ["translation_params", []], "method", false, false, false, 7), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 7, $this->source); })()));
                }
                // line 10
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 10)) {
                    // line 11
                    yield "        <li>
            ";
                    // line 12
                    if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "uri", [], "any", false, false, false, 12))) {
                        // line 13
                        yield "                <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "uri", [], "any", false, false, false, 13), "html", null, true);
                        yield "\">
                    ";
                        // line 14
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "extra", ["safe_label", true], "method", false, false, false, 14)) {
                            // line 15
                            yield (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 15, $this->source); })());
                        } else {
                            // line 17
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 17, $this->source); })())), "truncate", [100, "..."], "method", false, false, false, 17), "html", null, true);
                        }
                        // line 19
                        yield "                </a>
            ";
                    } else {
                        // line 21
                        yield "                <span>";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 21, $this->source); })())), "truncate", [100, "..."], "method", false, false, false, 21), "html", null, true);
                        yield "</span>
            ";
                    }
                    // line 23
                    yield "        </li>
    ";
                } else {
                    // line 25
                    yield "        <li class=\"active\"><span>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 25, $this->source); })())), "truncate", [100, "..."], "method", false, false, false, 25), "html", null, true);
                    yield "</span></li>
    ";
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
            unset($context['_seq'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        yield Twig\Extension\CoreExtension::spaceless($___internal_parse_16_);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SonataAdmin/Breadcrumb/breadcrumb.html.twig";
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
        return array (  130 => 1,  110 => 25,  106 => 23,  100 => 21,  96 => 19,  93 => 17,  90 => 15,  88 => 14,  83 => 13,  81 => 12,  78 => 11,  76 => 10,  73 => 7,  71 => 6,  69 => 5,  67 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% apply spaceless %}
{% for menu in items %}
    {%- set translation_domain = menu.extra('translation_domain', 'messages') -%}
    {# We use method accessor instead of \".label\" since `menu` implements `ArrayAccess` and could have a property called \"label\". #}
    {%- set label = menu.getLabel() -%}
    {%- if translation_domain is not same as(false) -%}
        {%- set label = label|trans(menu.extra('translation_params', {}), translation_domain) -%}
    {%- endif -%}

    {% if not loop.last %}
        <li>
            {% if menu.uri is not empty %}
                <a href=\"{{ menu.uri }}\">
                    {% if menu.extra('safe_label', true) %}
                        {{- label|raw -}}
                    {% else %}
                        {{- label|u.truncate(100, '...') -}}
                    {% endif %}
                </a>
            {% else %}
                <span>{{ label|u.truncate(100, '...') }}</span>
            {% endif %}
        </li>
    {% else %}
        <li class=\"active\"><span>{{ label|u.truncate(100, '...') }}</span></li>
    {% endif %}
{% endfor %}
{% endapply %}
", "@SonataAdmin/Breadcrumb/breadcrumb.html.twig", "/home/aleksandar/Desktop/Site/payment-demo/vendor/sonata-project/admin-bundle/src/Resources/views/Breadcrumb/breadcrumb.html.twig");
    }
}
