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

/* @SonataAdmin/Menu/sonata_menu.html.twig */
class __TwigTemplate_1fe2c862dbfd25ce91ea9eb72107bf5e extends Template
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
            'root' => [$this, 'block_root'],
            'item' => [$this, 'block_item'],
            'linkElement' => [$this, 'block_linkElement'],
            'spanElement' => [$this, 'block_spanElement'],
            'label' => [$this, 'block_label'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/Menu/sonata_menu.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/Menu/sonata_menu.html.twig"));

        $this->parent = $this->loadTemplate("knp_menu.html.twig", "@SonataAdmin/Menu/sonata_menu.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_root(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "root"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "root"));

        // line 4
        $context["listAttributes"] = Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 4, $this->source); })()), "childrenAttributes", [], "any", false, false, false, 4), ["class" => "sidebar-menu", "data-widget" => "tree"]);
        // line 5
        $context["request"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 5, $this->source); })()), "extra", ["request"], "method", false, false, false, 5)) ?: (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "request", [], "any", false, false, false, 5)));
        // line 6
        yield from         $this->unwrap()->yieldBlock("list", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_item(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "item"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "item"));

        // line 10
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 10, $this->source); })()), "displayed", [], "any", false, false, false, 10)) {
            // line 12
            $context["display"] = ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 12, $this->source); })()), "extra", ["roles"], "method", false, false, false, 12)) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_config"]) || array_key_exists("sonata_config", $context) ? $context["sonata_config"] : (function () { throw new RuntimeError('Variable "sonata_config" does not exist.', 12, $this->source); })()), "getOption", ["role_super_admin"], "method", false, false, false, 12))) || (Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 12, $this->source); })()), "extra", ["roles"], "method", false, false, false, 12), function ($__role__) use ($context, $macros) { $context["role"] = $__role__; return $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 12, $this->source); })())); })) > 0));
        }
        // line 15
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 15, $this->source); })()), "displayed", [], "any", false, false, false, 15) && ((array_key_exists("display", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["display"]) || array_key_exists("display", $context) ? $context["display"] : (function () { throw new RuntimeError('Variable "display" does not exist.', 15, $this->source); })()))) : ("")))) {
            // line 16
            $context["options"] = Twig\Extension\CoreExtension::merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 16, $this->source); })()), ["branch_class" => "treeview", "currentClass" => "active", "ancestorClass" => "active"]);
            // line 17
            CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 17, $this->source); })()), "setChildrenAttribute", ["class", Twig\Extension\CoreExtension::trim((CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 17, $this->source); })()), "childrenAttribute", ["class"], "method", false, false, false, 17) . " active"))], "method", false, false, false, 17);
            // line 18
            CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 18, $this->source); })()), "setChildrenAttribute", ["class", Twig\Extension\CoreExtension::trim((CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 18, $this->source); })()), "childrenAttribute", ["class"], "method", false, false, false, 18) . " treeview-menu"))], "method", false, false, false, 18);
            // line 19
            yield from $this->yieldParentBlock("item", $context, $blocks);
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 23
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_linkElement(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "linkElement"));

        // line 24
        yield "    ";
        $___internal_parse_1_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 25
            yield "        ";
            // line 26
            $context["translation_domain"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 26, $this->source); })()), "extra", ["translation_domain", CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 26, $this->source); })()), "extra", ["label_catalogue", "messages"], "method", false, false, false, 26)], "method", false, false, false, 26);
            // line 27
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "extra", ["on_top"], "method", true, true, false, 27) &&  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 27, $this->source); })()), "extra", ["on_top"], "method", false, false, false, 27))) {
                // line 28
                $context["icon"] = $this->env->getRuntime('Sonata\AdminBundle\Twig\IconRuntime')->parseIcon(((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "extra", ["icon"], "method", true, true, false, 28)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "extra", ["icon"], "method", false, false, false, 28), (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 28, $this->source); })()), "level", [], "any", false, false, false, 28) > 1)) ? ("fa fa-angle-double-right") : ("")))) : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 28, $this->source); })()), "level", [], "any", false, false, false, 28) > 1)) ? ("fa fa-angle-double-right") : ("")))));
            } else {
                // line 30
                $context["icon"] = $this->env->getRuntime('Sonata\AdminBundle\Twig\IconRuntime')->parseIcon(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 30, $this->source); })()), "extra", ["icon"], "method", false, false, false, 30));
            }
            // line 32
            $context["is_link"] = true;
            // line 33
            yield from $this->yieldParentBlock("linkElement", $context, $blocks);
            yield "
    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 24
        yield Twig\Extension\CoreExtension::spaceless($___internal_parse_1_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 37
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_spanElement(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "spanElement"));

        // line 38
        yield "    ";
        $___internal_parse_2_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 39
            yield "        <a href=\"#\">
            ";
            // line 41
            $context["translation_domain"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 41, $this->source); })()), "extra", ["translation_domain", CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 41, $this->source); })()), "extra", ["label_catalogue", "messages"], "method", false, false, false, 41)], "method", false, false, false, 41);
            // line 42
            $context["icon"] = $this->env->getRuntime('Sonata\AdminBundle\Twig\IconRuntime')->parseIcon(((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "extra", ["icon"], "method", true, true, false, 42)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "extra", ["icon"], "method", false, false, false, 42), "")) : ("")));
            // line 43
            yield (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 43, $this->source); })());
            yield "
            ";
            // line 44
            yield from $this->yieldParentBlock("spanElement", $context, $blocks);
            // line 45
            if (( !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "extra", ["keep_open"], "method", true, true, false, 45) ||  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 45, $this->source); })()), "extra", ["keep_open"], "method", false, false, false, 45))) {
                // line 46
                yield "<span class=\"pull-right-container\"><i class=\"fas pull-right fa-angle-left\"></i></span>";
            }
            // line 48
            yield "</a>
    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 38
        yield Twig\Extension\CoreExtension::spaceless($___internal_parse_2_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 52
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "label"));

        // line 53
        yield "    ";
        $___internal_parse_3_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 54
            if (((array_key_exists("is_link", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["is_link"]) || array_key_exists("is_link", $context) ? $context["is_link"] : (function () { throw new RuntimeError('Variable "is_link" does not exist.', 54, $this->source); })()), false)) : (false))) {
                // line 55
                yield $this->env->getRuntime('Sonata\AdminBundle\Twig\IconRuntime')->parseIcon(((array_key_exists("icon", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 55, $this->source); })()), "")) : ("")));
            }
            // line 58
            $context["item_label"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 58, $this->source); })()), "getLabel", [], "method", false, false, false, 58);
            // line 59
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 59, $this->source); })()), "allow_safe_labels", [], "any", false, false, false, 59) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 59, $this->source); })()), "extra", ["safe_label", false], "method", false, false, false, 59))) {
                // line 60
                yield (isset($context["item_label"]) || array_key_exists("item_label", $context) ? $context["item_label"] : (function () { throw new RuntimeError('Variable "item_label" does not exist.', 60, $this->source); })());
            } else {
                // line 63
                $context["translation_domain"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 63, $this->source); })()), "extra", ["translation_domain", CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 63, $this->source); })()), "extra", ["label_catalogue", "messages"], "method", false, false, false, 63)], "method", false, false, false, 63);
                // line 64
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["item_label"]) || array_key_exists("item_label", $context) ? $context["item_label"] : (function () { throw new RuntimeError('Variable "item_label" does not exist.', 64, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 64, $this->source); })()), "extra", ["label_translation_parameters", []], "method", false, false, false, 64), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 64, $this->source); })())), "html", null, true);
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 53
        yield Twig\Extension\CoreExtension::spaceless($___internal_parse_3_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SonataAdmin/Menu/sonata_menu.html.twig";
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
        return array (  265 => 53,  260 => 64,  258 => 63,  255 => 60,  253 => 59,  251 => 58,  248 => 55,  246 => 54,  243 => 53,  230 => 52,  219 => 38,  214 => 48,  211 => 46,  209 => 45,  207 => 44,  203 => 43,  201 => 42,  199 => 41,  196 => 39,  193 => 38,  180 => 37,  169 => 24,  163 => 33,  161 => 32,  158 => 30,  155 => 28,  153 => 27,  151 => 26,  149 => 25,  146 => 24,  133 => 23,  121 => 19,  119 => 18,  117 => 17,  115 => 16,  113 => 15,  110 => 12,  108 => 10,  95 => 9,  84 => 6,  82 => 5,  80 => 4,  67 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'knp_menu.html.twig' %}

{% block root %}
    {%- set listAttributes = item.childrenAttributes|merge({'class': 'sidebar-menu', 'data-widget': 'tree'}) -%}
    {%- set request        = item.extra('request') ?: app.request -%}
    {{ block('list') -}}
{% endblock %}

{% block item %}
    {%- if item.displayed -%}
        {#- check role of the group #}
        {%- set display = item.extra('roles') is empty or is_granted(sonata_config.getOption('role_super_admin')) or item.extra('roles')|filter(role => is_granted(role))|length > 0 -%}
    {%- endif -%}

    {%- if item.displayed and display|default -%}
        {%- set options = options|merge({branch_class: 'treeview', currentClass: \"active\", ancestorClass: \"active\"}) -%}
        {%- do item.setChildrenAttribute('class', (item.childrenAttribute('class')~' active')|trim) -%}
        {%- do item.setChildrenAttribute('class', (item.childrenAttribute('class')~' treeview-menu')|trim) -%}
        {{ parent() }}
    {%- endif -%}
{% endblock %}

{% block linkElement %}
    {% apply spaceless %}
        {# NEXT_MAJOR: Remove the label_catalogue fallback #}
        {%- set translation_domain = item.extra('translation_domain', item.extra('label_catalogue', 'messages')) -%}
        {%- if item.extra('on_top') is defined and not item.extra('on_top') -%}
            {%- set icon = item.extra('icon')|default(item.level > 1 ? 'fa fa-angle-double-right' : '')|parse_icon -%}
        {%- else -%}
            {%- set icon = item.extra('icon')|parse_icon -%}
        {%- endif -%}
        {%- set is_link = true -%}
        {{ parent() }}
    {% endapply %}
{% endblock %}

{% block spanElement %}
    {% apply spaceless %}
        <a href=\"#\">
            {# NEXT_MAJOR: Remove the label_catalogue fallback #}
            {%- set translation_domain = item.extra('translation_domain', item.extra('label_catalogue', 'messages')) -%}
            {%- set icon = item.extra('icon')|default('')|parse_icon -%}
            {{ icon|raw }}
            {{ parent() }}
            {%- if item.extra('keep_open') is not defined or not item.extra('keep_open') -%}
                <span class=\"pull-right-container\"><i class=\"fas pull-right fa-angle-left\"></i></span>
            {%- endif -%}
        </a>
    {% endapply %}
{% endblock %}

{% block label %}
    {% apply spaceless %}
        {%- if is_link|default(false) -%}
            {{ icon|default('')|parse_icon }}
        {%- endif -%}
        {# We use method accessor instead of \".label\" since `item` implements `ArrayAccess` and could have a property called \"label\". #}
        {%- set item_label = item.getLabel() -%}
        {%- if options.allow_safe_labels and item.extra('safe_label', false) -%}
            {{ item_label|raw }}
        {%- else -%}
            {# NEXT_MAJOR: Remove the label_catalogue fallback #}
            {%- set translation_domain = item.extra('translation_domain', item.extra('label_catalogue', 'messages')) -%}
            {{ item_label|trans(item.extra('label_translation_parameters', {}), translation_domain) }}
        {%- endif -%}
    {% endapply %}
{% endblock %}
", "@SonataAdmin/Menu/sonata_menu.html.twig", "/var/www/project/vendor/sonata-project/admin-bundle/src/Resources/views/Menu/sonata_menu.html.twig");
    }
}
