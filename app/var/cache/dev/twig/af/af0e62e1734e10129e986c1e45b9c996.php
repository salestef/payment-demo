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

/* @SonataAdmin/Core/dashboard.html.twig */
class __TwigTemplate_eda92eba7b57a38552967a582f39291a extends Template
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
            'title' => [$this, 'block_title'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new RuntimeError('Variable "base_template" does not exist.', 12, $this->source); })()), "@SonataAdmin/Core/dashboard.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/dashboard.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 14
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title_dashboard", [], "SonataAdminBundle"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 15
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_breadcrumb(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 17
        yield "
    ";
        // line 18
        $context["has_left"] = false;
        // line 19
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["blocks"]) || array_key_exists("blocks", $context) ? $context["blocks"] : (function () { throw new RuntimeError('Variable "blocks" does not exist.', 19, $this->source); })()), "left", [], "any", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 20
            yield "        ";
            if (( !(isset($context["has_left"]) || array_key_exists("has_left", $context) ? $context["has_left"] : (function () { throw new RuntimeError('Variable "has_left" does not exist.', 20, $this->source); })()) && ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["block"], "roles", [], "any", false, false, false, 20)) == 0) || $this->env->getRuntime('Sonata\AdminBundle\Twig\SecurityRuntime')->isGrantedAffirmative(CoreExtension::getAttribute($this->env, $this->source, $context["block"], "roles", [], "any", false, false, false, 20))))) {
                // line 21
                yield "            ";
                $context["has_left"] = true;
                // line 22
                yield "        ";
            }
            // line 23
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['block'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        yield "
    ";
        // line 25
        $context["has_center"] = false;
        // line 26
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["blocks"]) || array_key_exists("blocks", $context) ? $context["blocks"] : (function () { throw new RuntimeError('Variable "blocks" does not exist.', 26, $this->source); })()), "center", [], "any", false, false, false, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 27
            yield "        ";
            if (( !(isset($context["has_center"]) || array_key_exists("has_center", $context) ? $context["has_center"] : (function () { throw new RuntimeError('Variable "has_center" does not exist.', 27, $this->source); })()) && ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["block"], "roles", [], "any", false, false, false, 27)) == 0) || $this->env->getRuntime('Sonata\AdminBundle\Twig\SecurityRuntime')->isGrantedAffirmative(CoreExtension::getAttribute($this->env, $this->source, $context["block"], "roles", [], "any", false, false, false, 27))))) {
                // line 28
                yield "            ";
                $context["has_center"] = true;
                // line 29
                yield "        ";
            }
            // line 30
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['block'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        yield "
    ";
        // line 32
        $context["has_right"] = false;
        // line 33
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["blocks"]) || array_key_exists("blocks", $context) ? $context["blocks"] : (function () { throw new RuntimeError('Variable "blocks" does not exist.', 33, $this->source); })()), "right", [], "any", false, false, false, 33));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 34
            yield "        ";
            if (( !(isset($context["has_right"]) || array_key_exists("has_right", $context) ? $context["has_right"] : (function () { throw new RuntimeError('Variable "has_right" does not exist.', 34, $this->source); })()) && ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["block"], "roles", [], "any", false, false, false, 34)) == 0) || $this->env->getRuntime('Sonata\AdminBundle\Twig\SecurityRuntime')->isGrantedAffirmative(CoreExtension::getAttribute($this->env, $this->source, $context["block"], "roles", [], "any", false, false, false, 34))))) {
                // line 35
                yield "            ";
                $context["has_right"] = true;
                // line 36
                yield "        ";
            }
            // line 37
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['block'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "
    ";
        // line 39
        $context["has_top"] = false;
        // line 40
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["blocks"]) || array_key_exists("blocks", $context) ? $context["blocks"] : (function () { throw new RuntimeError('Variable "blocks" does not exist.', 40, $this->source); })()), "top", [], "any", false, false, false, 40));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 41
            yield "        ";
            if (( !(isset($context["has_top"]) || array_key_exists("has_top", $context) ? $context["has_top"] : (function () { throw new RuntimeError('Variable "has_top" does not exist.', 41, $this->source); })()) && ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["block"], "roles", [], "any", false, false, false, 41)) == 0) || $this->env->getRuntime('Sonata\AdminBundle\Twig\SecurityRuntime')->isGrantedAffirmative(CoreExtension::getAttribute($this->env, $this->source, $context["block"], "roles", [], "any", false, false, false, 41))))) {
                // line 42
                yield "            ";
                $context["has_top"] = true;
                // line 43
                yield "        ";
            }
            // line 44
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['block'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "
    ";
        // line 46
        $context["has_bottom"] = false;
        // line 47
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["blocks"]) || array_key_exists("blocks", $context) ? $context["blocks"] : (function () { throw new RuntimeError('Variable "blocks" does not exist.', 47, $this->source); })()), "bottom", [], "any", false, false, false, 47));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 48
            yield "        ";
            if (( !(isset($context["has_bottom"]) || array_key_exists("has_bottom", $context) ? $context["has_bottom"] : (function () { throw new RuntimeError('Variable "has_bottom" does not exist.', 48, $this->source); })()) && ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["block"], "roles", [], "any", false, false, false, 48)) == 0) || $this->env->getRuntime('Sonata\AdminBundle\Twig\SecurityRuntime')->isGrantedAffirmative(CoreExtension::getAttribute($this->env, $this->source, $context["block"], "roles", [], "any", false, false, false, 48))))) {
                // line 49
                yield "            ";
                $context["has_bottom"] = true;
                // line 50
                yield "        ";
            }
            // line 51
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['block'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        yield "
    ";
        // line 53
        yield $this->env->getRuntime('Sonata\BlockBundle\Templating\Helper\BlockHelper')->renderEvent("sonata.admin.dashboard.top");
        yield "

    ";
        // line 55
        if ((isset($context["has_top"]) || array_key_exists("has_top", $context) ? $context["has_top"] : (function () { throw new RuntimeError('Variable "has_top" does not exist.', 55, $this->source); })())) {
            // line 56
            yield "        <div class=\"row\">
            ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["blocks"]) || array_key_exists("blocks", $context) ? $context["blocks"] : (function () { throw new RuntimeError('Variable "blocks" does not exist.', 57, $this->source); })()), "top", [], "any", false, false, false, 57));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 58
                yield "                ";
                if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["block"], "roles", [], "any", false, false, false, 58)) == 0) || $this->env->getRuntime('Sonata\AdminBundle\Twig\SecurityRuntime')->isGrantedAffirmative(CoreExtension::getAttribute($this->env, $this->source, $context["block"], "roles", [], "any", false, false, false, 58)))) {
                    // line 59
                    yield "                    <div class=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["block"], "class", [], "any", false, false, false, 59), "html", null, true);
                    yield "\">
                        ";
                    // line 60
                    yield $this->env->getRuntime('Sonata\BlockBundle\Templating\Helper\BlockHelper')->render(["type" => CoreExtension::getAttribute($this->env, $this->source, $context["block"], "type", [], "any", false, false, false, 60), "settings" => CoreExtension::getAttribute($this->env, $this->source, $context["block"], "settings", [], "any", false, false, false, 60)]);
                    yield "
                    </div>
                ";
                }
                // line 63
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['block'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            yield "        </div>
    ";
        }
        // line 66
        yield "
    <div class=\"row\">
        ";
        // line 68
        $context["width_left"] = 4;
        // line 69
        yield "        ";
        $context["width_right"] = 4;
        // line 70
        yield "        ";
        $context["width_center"] = 4;
        // line 71
        yield "
        ";
        // line 73
        yield "        ";
        if ( !(isset($context["has_center"]) || array_key_exists("has_center", $context) ? $context["has_center"] : (function () { throw new RuntimeError('Variable "has_center" does not exist.', 73, $this->source); })())) {
            // line 74
            yield "            ";
            $context["width_left"] = 6;
            // line 75
            yield "            ";
            $context["width_right"] = 6;
            // line 76
            yield "        ";
        }
        // line 77
        yield "
        ";
        // line 79
        yield "        ";
        if (( !(isset($context["has_left"]) || array_key_exists("has_left", $context) ? $context["has_left"] : (function () { throw new RuntimeError('Variable "has_left" does not exist.', 79, $this->source); })()) &&  !(isset($context["has_right"]) || array_key_exists("has_right", $context) ? $context["has_right"] : (function () { throw new RuntimeError('Variable "has_right" does not exist.', 79, $this->source); })()))) {
            // line 80
            yield "            ";
            $context["width_center"] = 12;
            // line 81
            yield "        ";
        }
        // line 82
        yield "
        ";
        // line 84
        yield "        ";
        if (((isset($context["has_left"]) || array_key_exists("has_left", $context) ? $context["has_left"] : (function () { throw new RuntimeError('Variable "has_left" does not exist.', 84, $this->source); })()) || (isset($context["has_right"]) || array_key_exists("has_right", $context) ? $context["has_right"] : (function () { throw new RuntimeError('Variable "has_right" does not exist.', 84, $this->source); })()))) {
            // line 85
            yield "        <div class=\"col-md-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["width_left"]) || array_key_exists("width_left", $context) ? $context["width_left"] : (function () { throw new RuntimeError('Variable "width_left" does not exist.', 85, $this->source); })()), "html", null, true);
            yield "\">
            ";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["blocks"]) || array_key_exists("blocks", $context) ? $context["blocks"] : (function () { throw new RuntimeError('Variable "blocks" does not exist.', 86, $this->source); })()), "left", [], "any", false, false, false, 86));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 87
                yield "                ";
                if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["block"], "roles", [], "any", false, false, false, 87)) == 0) || $this->env->getRuntime('Sonata\AdminBundle\Twig\SecurityRuntime')->isGrantedAffirmative(CoreExtension::getAttribute($this->env, $this->source, $context["block"], "roles", [], "any", false, false, false, 87)))) {
                    // line 88
                    yield "                    ";
                    yield $this->env->getRuntime('Sonata\BlockBundle\Templating\Helper\BlockHelper')->render(["type" => CoreExtension::getAttribute($this->env, $this->source, $context["block"], "type", [], "any", false, false, false, 88), "settings" => CoreExtension::getAttribute($this->env, $this->source, $context["block"], "settings", [], "any", false, false, false, 88)]);
                    yield "
                ";
                }
                // line 90
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['block'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            yield "        </div>
        ";
        }
        // line 93
        yield "
        ";
        // line 94
        if ((isset($context["has_center"]) || array_key_exists("has_center", $context) ? $context["has_center"] : (function () { throw new RuntimeError('Variable "has_center" does not exist.', 94, $this->source); })())) {
            // line 95
            yield "            <div class=\"col-md-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["width_center"]) || array_key_exists("width_center", $context) ? $context["width_center"] : (function () { throw new RuntimeError('Variable "width_center" does not exist.', 95, $this->source); })()), "html", null, true);
            yield "\">
                ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["blocks"]) || array_key_exists("blocks", $context) ? $context["blocks"] : (function () { throw new RuntimeError('Variable "blocks" does not exist.', 96, $this->source); })()), "center", [], "any", false, false, false, 96));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 97
                yield "                    ";
                if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["block"], "roles", [], "any", false, false, false, 97)) == 0) || $this->env->getRuntime('Sonata\AdminBundle\Twig\SecurityRuntime')->isGrantedAffirmative(CoreExtension::getAttribute($this->env, $this->source, $context["block"], "roles", [], "any", false, false, false, 97)))) {
                    // line 98
                    yield "                        ";
                    yield $this->env->getRuntime('Sonata\BlockBundle\Templating\Helper\BlockHelper')->render(["type" => CoreExtension::getAttribute($this->env, $this->source, $context["block"], "type", [], "any", false, false, false, 98), "settings" => CoreExtension::getAttribute($this->env, $this->source, $context["block"], "settings", [], "any", false, false, false, 98)]);
                    yield "
                    ";
                }
                // line 100
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['block'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            yield "            </div>
        ";
        }
        // line 103
        yield "
        ";
        // line 105
        yield "        ";
        if (((isset($context["has_left"]) || array_key_exists("has_left", $context) ? $context["has_left"] : (function () { throw new RuntimeError('Variable "has_left" does not exist.', 105, $this->source); })()) || (isset($context["has_right"]) || array_key_exists("has_right", $context) ? $context["has_right"] : (function () { throw new RuntimeError('Variable "has_right" does not exist.', 105, $this->source); })()))) {
            // line 106
            yield "         <div class=\"col-md-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["width_right"]) || array_key_exists("width_right", $context) ? $context["width_right"] : (function () { throw new RuntimeError('Variable "width_right" does not exist.', 106, $this->source); })()), "html", null, true);
            yield "\">
            ";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["blocks"]) || array_key_exists("blocks", $context) ? $context["blocks"] : (function () { throw new RuntimeError('Variable "blocks" does not exist.', 107, $this->source); })()), "right", [], "any", false, false, false, 107));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 108
                yield "                ";
                if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["block"], "roles", [], "any", false, false, false, 108)) == 0) || $this->env->getRuntime('Sonata\AdminBundle\Twig\SecurityRuntime')->isGrantedAffirmative(CoreExtension::getAttribute($this->env, $this->source, $context["block"], "roles", [], "any", false, false, false, 108)))) {
                    // line 109
                    yield "                    ";
                    yield $this->env->getRuntime('Sonata\BlockBundle\Templating\Helper\BlockHelper')->render(["type" => CoreExtension::getAttribute($this->env, $this->source, $context["block"], "type", [], "any", false, false, false, 109), "settings" => CoreExtension::getAttribute($this->env, $this->source, $context["block"], "settings", [], "any", false, false, false, 109)]);
                    yield "
                ";
                }
                // line 111
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['block'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            yield "        </div>
        ";
        }
        // line 114
        yield "    </div>

    ";
        // line 116
        if ((isset($context["has_bottom"]) || array_key_exists("has_bottom", $context) ? $context["has_bottom"] : (function () { throw new RuntimeError('Variable "has_bottom" does not exist.', 116, $this->source); })())) {
            // line 117
            yield "        <div class=\"row\">
            ";
            // line 118
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["blocks"]) || array_key_exists("blocks", $context) ? $context["blocks"] : (function () { throw new RuntimeError('Variable "blocks" does not exist.', 118, $this->source); })()), "bottom", [], "any", false, false, false, 118));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 119
                yield "                ";
                if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["block"], "roles", [], "any", false, false, false, 119)) == 0) || $this->env->getRuntime('Sonata\AdminBundle\Twig\SecurityRuntime')->isGrantedAffirmative(CoreExtension::getAttribute($this->env, $this->source, $context["block"], "roles", [], "any", false, false, false, 119)))) {
                    // line 120
                    yield "                    <div class=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["block"], "class", [], "any", false, false, false, 120), "html", null, true);
                    yield "\">
                        ";
                    // line 121
                    yield $this->env->getRuntime('Sonata\BlockBundle\Templating\Helper\BlockHelper')->render(["type" => CoreExtension::getAttribute($this->env, $this->source, $context["block"], "type", [], "any", false, false, false, 121), "settings" => CoreExtension::getAttribute($this->env, $this->source, $context["block"], "settings", [], "any", false, false, false, 121)]);
                    yield "
                    </div>
                ";
                }
                // line 124
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['block'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            yield "        </div>
    ";
        }
        // line 127
        yield "
    ";
        // line 128
        yield $this->env->getRuntime('Sonata\BlockBundle\Templating\Helper\BlockHelper')->renderEvent("sonata.admin.dashboard.bottom");
        yield "

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
        return "@SonataAdmin/Core/dashboard.html.twig";
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
        return array (  468 => 128,  465 => 127,  461 => 125,  455 => 124,  449 => 121,  444 => 120,  441 => 119,  437 => 118,  434 => 117,  432 => 116,  428 => 114,  424 => 112,  418 => 111,  412 => 109,  409 => 108,  405 => 107,  400 => 106,  397 => 105,  394 => 103,  390 => 101,  384 => 100,  378 => 98,  375 => 97,  371 => 96,  366 => 95,  364 => 94,  361 => 93,  357 => 91,  351 => 90,  345 => 88,  342 => 87,  338 => 86,  333 => 85,  330 => 84,  327 => 82,  324 => 81,  321 => 80,  318 => 79,  315 => 77,  312 => 76,  309 => 75,  306 => 74,  303 => 73,  300 => 71,  297 => 70,  294 => 69,  292 => 68,  288 => 66,  284 => 64,  278 => 63,  272 => 60,  267 => 59,  264 => 58,  260 => 57,  257 => 56,  255 => 55,  250 => 53,  247 => 52,  241 => 51,  238 => 50,  235 => 49,  232 => 48,  227 => 47,  225 => 46,  222 => 45,  216 => 44,  213 => 43,  210 => 42,  207 => 41,  202 => 40,  200 => 39,  197 => 38,  191 => 37,  188 => 36,  185 => 35,  182 => 34,  177 => 33,  175 => 32,  172 => 31,  166 => 30,  163 => 29,  160 => 28,  157 => 27,  152 => 26,  150 => 25,  147 => 24,  141 => 23,  138 => 22,  135 => 21,  132 => 20,  127 => 19,  125 => 18,  122 => 17,  109 => 16,  87 => 15,  64 => 14,  42 => 12,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends base_template %}

{% block title %}{{ 'title_dashboard'|trans({}, 'SonataAdminBundle') }}{% endblock %}
{% block breadcrumb %}{% endblock %}
{% block content %}

    {% set has_left = false %}
    {% for block in blocks.left %}
        {% if not has_left and (block.roles|length == 0 or is_granted_affirmative(block.roles)) %}
            {% set has_left = true %}
        {% endif %}
    {% endfor %}

    {% set has_center = false %}
    {% for block in blocks.center %}
        {% if not has_center and (block.roles|length == 0 or is_granted_affirmative(block.roles)) %}
            {% set has_center = true %}
        {% endif %}
    {% endfor %}

    {% set has_right = false %}
    {% for block in blocks.right %}
        {% if not has_right and (block.roles|length == 0 or is_granted_affirmative(block.roles)) %}
            {% set has_right = true %}
        {% endif %}
    {% endfor %}

    {% set has_top = false %}
    {% for block in blocks.top %}
        {% if not has_top and (block.roles|length == 0 or is_granted_affirmative(block.roles)) %}
            {% set has_top = true %}
        {% endif %}
    {% endfor %}

    {% set has_bottom = false %}
    {% for block in blocks.bottom %}
        {% if not has_bottom and (block.roles|length == 0 or is_granted_affirmative(block.roles)) %}
            {% set has_bottom = true %}
        {% endif %}
    {% endfor %}

    {{ sonata_block_render_event('sonata.admin.dashboard.top') }}

    {% if has_top %}
        <div class=\"row\">
            {% for block in blocks.top %}
                {% if block.roles|length == 0 or is_granted_affirmative(block.roles) %}
                    <div class=\"{{ block.class }}\">
                        {{ sonata_block_render({ 'type': block.type, 'settings': block.settings}) }}
                    </div>
                {% endif %}
            {% endfor %}
        </div>
    {% endif %}

    <div class=\"row\">
        {% set width_left = 4 %}
        {% set width_right = 4 %}
        {% set width_center = 4 %}

        {# if center block is not present we make left and right ones wider #}
        {% if not has_center %}
            {% set width_left = 6 %}
            {% set width_right = 6 %}
        {% endif %}

        {# if there is no right and left block present we make center one full width #}
        {% if not has_left and not has_right %}
            {% set width_center = 12 %}
        {% endif %}

        {# don't show left column if only center one is present #}
        {% if has_left or has_right %}
        <div class=\"col-md-{{ width_left }}\">
            {% for block in blocks.left %}
                {% if block.roles|length == 0 or is_granted_affirmative(block.roles) %}
                    {{ sonata_block_render({ 'type': block.type, 'settings': block.settings}) }}
                {% endif %}
            {% endfor %}
        </div>
        {% endif %}

        {% if has_center %}
            <div class=\"col-md-{{ width_center }}\">
                {% for block in blocks.center %}
                    {% if block.roles|length == 0 or is_granted_affirmative(block.roles) %}
                        {{ sonata_block_render({ 'type': block.type, 'settings': block.settings}) }}
                    {% endif %}
                {% endfor %}
            </div>
        {% endif %}

        {# don't show right column if only center one is present #}
        {% if has_left or has_right %}
         <div class=\"col-md-{{ width_right }}\">
            {% for block in blocks.right %}
                {% if block.roles|length == 0 or is_granted_affirmative(block.roles) %}
                    {{ sonata_block_render({ 'type': block.type, 'settings': block.settings}) }}
                {% endif %}
            {% endfor %}
        </div>
        {% endif %}
    </div>

    {% if has_bottom %}
        <div class=\"row\">
            {% for block in blocks.bottom %}
                {% if block.roles|length == 0 or is_granted_affirmative(block.roles) %}
                    <div class=\"{{ block.class }}\">
                        {{ sonata_block_render({ 'type': block.type, 'settings': block.settings}) }}
                    </div>
                {% endif %}
            {% endfor %}
        </div>
    {% endif %}

    {{ sonata_block_render_event('sonata.admin.dashboard.bottom') }}

{% endblock %}
", "@SonataAdmin/Core/dashboard.html.twig", "/home/aleksandar/Desktop/Site/payment-demo/vendor/sonata-project/admin-bundle/src/Resources/views/Core/dashboard.html.twig");
    }
}
