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

/* @SonataTwig/FlashMessage/render.html.twig */
class __TwigTemplate_2310b60296fa402757ef04e6c6385edc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataTwig/FlashMessage/render.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataTwig/FlashMessage/render.html.twig"));

        // line 11
        yield "
";
        // line 12
        $context["collapse"] = ((array_key_exists("collapse", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["collapse"]) || array_key_exists("collapse", $context) ? $context["collapse"] : (function () { throw new RuntimeError('Variable "collapse" does not exist.', 12, $this->source); })()), 1)) : (1));
        // line 13
        yield "
";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->env->getRuntime('Sonata\Twig\Extension\FlashMessageRuntime')->getFlashMessagesTypes());
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
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 15
            yield "    ";
            $context["messages"] = $this->env->getRuntime('Sonata\Twig\Extension\FlashMessageRuntime')->getFlashMessages($context["type"]);
            // line 16
            yield "    ";
            if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 16, $this->source); })())) > (isset($context["collapse"]) || array_key_exists("collapse", $context) ? $context["collapse"] : (function () { throw new RuntimeError('Variable "collapse" does not exist.', 16, $this->source); })())) && ((isset($context["collapse"]) || array_key_exists("collapse", $context) ? $context["collapse"] : (function () { throw new RuntimeError('Variable "collapse" does not exist.', 16, $this->source); })()) > 0))) {
                // line 17
                yield "        <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Sonata\Twig\Extension\FlashMessageRuntime')->getFlashMessagesClass($context["type"], "default"), "html", null, true);
                yield " alert-dismissible collapsed-box\">
            <button
                    type=\"button\"
                    class=\"close\"
                    data-dismiss=\"alert\"
                    aria-hidden=\"true\"
                    aria-label=\"";
                // line 23
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("message_close", [], "SonataTwigBundle"), "html", null, true);
                yield "\">
                &times;
            </button>
            <input type=\"checkbox\" class=\"read-more-state\" id=\"toggle-more-";
                // line 26
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 26), "html", null, true);
                yield "\" />
            <div class=\"read-more-wrap\">
                ";
                // line 28
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 28, $this->source); })()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 29
                    yield "                    ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 29) > (isset($context["collapse"]) || array_key_exists("collapse", $context) ? $context["collapse"] : (function () { throw new RuntimeError('Variable "collapse" does not exist.', 29, $this->source); })()))) {
                        // line 30
                        yield "                        <span class=\"read-more-target\">";
                        yield $context["message"];
                        yield "</span>
                    ";
                    } else {
                        // line 32
                        yield "                        ";
                        yield $context["message"];
                        yield "
                    ";
                    }
                    // line 34
                    yield "                ";
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
                unset($context['_seq'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 35
                yield "            </div>

            <label for=\"toggle-more-";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 37), "html", null, true);
                yield "\" class=\"read-more-trigger\">
                <span class=\"more\">";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("more", [], "SonataTwigBundle"), "html", null, true);
                yield " &#9660;</span>
                <span class=\"less hide\">";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("less", [], "SonataTwigBundle"), "html", null, true);
                yield " &#9650;</span>
                <span class=\"badge badge-default\">";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 40, $this->source); })())), "html", null, true);
                yield "</span>
            </label>
        </div>
    ";
            } elseif ((Twig\Extension\CoreExtension::length($this->env->getCharset(),             // line 43
(isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 43, $this->source); })())) > 0)) {
                // line 44
                yield "        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 44, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 45
                    yield "            <div class=\"alert alert-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Sonata\Twig\Extension\FlashMessageRuntime')->getFlashMessagesClass($context["type"], "default"), "html", null, true);
                    yield " alert-dismissable\">
                <button
                    type=\"button\"
                    class=\"close\"
                    data-dismiss=\"alert\"
                    aria-hidden=\"true\"
                    aria-label=\"";
                    // line 51
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("message_close", [], "SonataTwigBundle"), "html", null, true);
                    yield "\">
                    &times;
                </button>
                ";
                    // line 54
                    yield $context["message"];
                    yield "
            </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                yield "    ";
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
        unset($context['_seq'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
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
        return "@SonataTwig/FlashMessage/render.html.twig";
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
        return array (  200 => 57,  191 => 54,  185 => 51,  175 => 45,  170 => 44,  168 => 43,  162 => 40,  158 => 39,  154 => 38,  150 => 37,  146 => 35,  132 => 34,  126 => 32,  120 => 30,  117 => 29,  100 => 28,  95 => 26,  89 => 23,  79 => 17,  76 => 16,  73 => 15,  56 => 14,  53 => 13,  51 => 12,  48 => 11,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% set collapse = collapse|default(1) %}

{% for type in sonata_flashmessages_types() %}
    {% set messages = sonata_flashmessages_get(type) %}
    {% if messages|length > collapse and collapse > 0 %}
        <div class=\"alert alert-{{ sonata_flashmessages_class(type, 'default') }} alert-dismissible collapsed-box\">
            <button
                    type=\"button\"
                    class=\"close\"
                    data-dismiss=\"alert\"
                    aria-hidden=\"true\"
                    aria-label=\"{{ 'message_close'|trans({}, 'SonataTwigBundle') }}\">
                &times;
            </button>
            <input type=\"checkbox\" class=\"read-more-state\" id=\"toggle-more-{{ loop.index }}\" />
            <div class=\"read-more-wrap\">
                {% for message in messages %}
                    {% if loop.index > collapse %}
                        <span class=\"read-more-target\">{{ message|raw }}</span>
                    {% else %}
                        {{ message|raw }}
                    {% endif %}
                {% endfor %}
            </div>

            <label for=\"toggle-more-{{ loop.index }}\" class=\"read-more-trigger\">
                <span class=\"more\">{{ 'more'|trans({}, 'SonataTwigBundle') }} &#9660;</span>
                <span class=\"less hide\">{{ 'less'|trans({}, 'SonataTwigBundle') }} &#9650;</span>
                <span class=\"badge badge-default\">{{ messages|length }}</span>
            </label>
        </div>
    {% elseif messages|length > 0 %}
        {% for message in messages %}
            <div class=\"alert alert-{{ sonata_flashmessages_class(type, 'default') }} alert-dismissable\">
                <button
                    type=\"button\"
                    class=\"close\"
                    data-dismiss=\"alert\"
                    aria-hidden=\"true\"
                    aria-label=\"{{ 'message_close'|trans({}, 'SonataTwigBundle') }}\">
                    &times;
                </button>
                {{ message|raw }}
            </div>
        {% endfor %}
    {% endif %}
{% endfor %}
", "@SonataTwig/FlashMessage/render.html.twig", "/home/aleksandar/Desktop/Site/payment-demo/vendor/sonata-project/twig-extensions/src/Bridge/Symfony/Resources/views/FlashMessage/render.html.twig");
    }
}
