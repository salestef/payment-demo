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

/* @SonataAdmin/CRUD/list_outer_rows_mosaic.html.twig */
class __TwigTemplate_0db8db8c203e03366282c2c1e91b7769 extends Template
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
            'sonata_mosaic_background' => [$this, 'block_sonata_mosaic_background'],
            'sonata_mosaic_default_view' => [$this, 'block_sonata_mosaic_default_view'],
            'sonata_mosaic_hover_view' => [$this, 'block_sonata_mosaic_hover_view'],
            'sonata_mosaic_description' => [$this, 'block_sonata_mosaic_description'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_outer_rows_mosaic.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_outer_rows_mosaic.html.twig"));

        // line 11
        yield "
<!--
This template can be customized to match your needs. You should only extends the template and used the different blocks to customize the view:
    - sonata_mosaic_default_view
    - sonata_mosaic_hover_view
    - sonata_mosaic_description
-->

<tr>
    ";
        // line 21
        yield "    <td colspan=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 22
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "request", [], "any", false, false, false, 22), "isXmlHttpRequest", [], "any", false, false, false, 22)) ? (((Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 23
(isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 23, $this->source); })()), "list", [], "any", false, false, false, 23), "getElements", [], "method", false, false, false, 23), function ($__element__) use ($context, $macros) { $context["element"] = $__element__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 23, $this->source); })()), "getOption", ["ajax_hidden"], "method", false, false, false, 23) != true); })) - CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 24
(isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 24, $this->source); })()), "list", [], "any", false, false, false, 24), "has", [Twig\Extension\CoreExtension::constant("Sonata\\AdminBundle\\Datagrid\\ListMapper::NAME_ACTIONS")], "method", false, false, false, 24)) - CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 25
(isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 25, $this->source); })()), "list", [], "any", false, false, false, 25), "has", [Twig\Extension\CoreExtension::constant("Sonata\\AdminBundle\\Datagrid\\ListMapper::NAME_BATCH")], "method", false, false, false, 25))) : (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 26
(isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 26, $this->source); })()), "list", [], "any", false, false, false, 26), "getElements", [], "method", false, false, false, 26)))), "html", null, true);
        // line 27
        yield "\">
        <div class=\"row\">
            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 29, $this->source); })()), "datagrid", [], "any", false, false, false, 29), "results", [], "any", false, false, false, 29));
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
        foreach ($context['_seq'] as $context["_key"] => $context["object"]) {
            // line 30
            yield "                ";
            $context["meta"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 30, $this->source); })()), "getObjectMetadata", [$context["object"]], "method", false, false, false, 30);
            // line 31
            yield "                ";
            $context["mosaic_content"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 32
                yield "                    <div class=\"mosaic-box-outter\">
                        <div class=\"mosaic-inner-box\">
                            ";
                // line 37
                yield "
                            <div class=\"mosaic-inner-box-default\">
                                ";
                // line 39
                yield from $this->unwrap()->yieldBlock('sonata_mosaic_background', $context, $blocks);
                // line 46
                yield "                                ";
                yield from $this->unwrap()->yieldBlock('sonata_mosaic_default_view', $context, $blocks);
                // line 49
                yield "                            </div>

                            ";
                // line 55
                yield "                            <div class=\"mosaic-inner-box-hover\">
                                ";
                // line 56
                yield from $this->unwrap()->yieldBlock('sonata_mosaic_hover_view', $context, $blocks);
                // line 60
                yield "                            </div>
                        </div>

                        <div class=\"mosaic-inner-text\">
                            ";
                // line 64
                if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 64, $this->source); })()), "hasRoute", ["batch"], "method", false, false, false, 64) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["batchactions"]) || array_key_exists("batchactions", $context) ? $context["batchactions"] : (function () { throw new RuntimeError('Variable "batchactions" does not exist.', 64, $this->source); })())) > 0)) || ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 64, $this->source); })()), "hasRoute", ["export"], "method", false, false, false, 64) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 64, $this->source); })()), "hasAccess", ["export"], "method", false, false, false, 64)) && Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["export_formats"]) || array_key_exists("export_formats", $context) ? $context["export_formats"] : (function () { throw new RuntimeError('Variable "export_formats" does not exist.', 64, $this->source); })()))))) {
                    // line 65
                    yield "                                <input type=\"checkbox\" name=\"idx[]\" value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 65, $this->source); })()), "id", [$context["object"]], "method", false, false, false, 65), "html", null, true);
                    yield "\">
                            ";
                } else {
                    // line 67
                    yield "                                &nbsp;
                            ";
                }
                // line 69
                yield "
                            ";
                // line 70
                yield from $this->unwrap()->yieldBlock('sonata_mosaic_description', $context, $blocks);
                // line 73
                yield "                        </div>
                    </div>
                ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 76
            yield "                <div class=\"col-xs-6 col-sm-3 mosaic-box sonata-ba-list-field-batch sonata-ba-list-field\"
                     objectId=\"";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 77, $this->source); })()), "id", [$context["object"]], "method", false, false, false, 77), "html", null, true);
            yield "\">
                    ";
            // line 78
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 78, $this->source); })()), "hasAccess", ["edit", $context["object"]], "method", false, false, false, 78) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 78, $this->source); })()), "hasRoute", ["edit"], "method", false, false, false, 78))) {
                // line 79
                yield "                        <a class=\"mosaic-inner-link\"
                           href=\"";
                // line 80
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 80, $this->source); })()), "generateObjectUrl", ["edit", $context["object"]], "method", false, false, false, 80), "html", null, true);
                yield "\">
                            ";
                // line 81
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["mosaic_content"]) || array_key_exists("mosaic_content", $context) ? $context["mosaic_content"] : (function () { throw new RuntimeError('Variable "mosaic_content" does not exist.', 81, $this->source); })()), "html", null, true);
                yield "
                        </a>
                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 83
(isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 83, $this->source); })()), "hasAccess", ["show", $context["object"]], "method", false, false, false, 83) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 83, $this->source); })()), "hasRoute", ["show"], "method", false, false, false, 83))) {
                // line 84
                yield "                        <a class=\"mosaic-inner-link\"
                           href=\"";
                // line 85
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 85, $this->source); })()), "generateObjectUrl", ["show", $context["object"]], "method", false, false, false, 85), "html", null, true);
                yield "\">
                            ";
                // line 86
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["mosaic_content"]) || array_key_exists("mosaic_content", $context) ? $context["mosaic_content"] : (function () { throw new RuntimeError('Variable "mosaic_content" does not exist.', 86, $this->source); })()), "html", null, true);
                yield "
                        </a>
                    ";
            } else {
                // line 89
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["mosaic_content"]) || array_key_exists("mosaic_content", $context) ? $context["mosaic_content"] : (function () { throw new RuntimeError('Variable "mosaic_content" does not exist.', 89, $this->source); })()), "html", null, true);
                yield "
                    ";
            }
            // line 91
            yield "                </div>

                ";
            // line 93
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 93) % 4) == 0)) {
                // line 94
                yield "                    <div class=\"clearfix hidden-xs\"></div>
                ";
            }
            // line 96
            yield "                ";
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 96) % 2) == 0)) {
                // line 97
                yield "                    <div class=\"clearfix visible-xs\"></div>
                ";
            }
            // line 99
            yield "            ";
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
        unset($context['_seq'], $context['_key'], $context['object'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        yield "        </div>
    </td>
</tr>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 39
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sonata_mosaic_background(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_mosaic_background"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_mosaic_background"));

        // line 40
        yield "                                    ";
        $context["metaImage"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["meta"] ?? null), "isImageAvailable", [], "any", true, true, false, 40) &&  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["meta"]) || array_key_exists("meta", $context) ? $context["meta"] : (function () { throw new RuntimeError('Variable "meta" does not exist.', 40, $this->source); })()), "isImageAvailable", [], "any", false, false, false, 40))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_config"]) || array_key_exists("sonata_config", $context) ? $context["sonata_config"] : (function () { throw new RuntimeError('Variable "sonata_config" does not exist.', 40, $this->source); })()), "getOption", ["mosaic_background"], "method", false, false, false, 40)) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["meta"]) || array_key_exists("meta", $context) ? $context["meta"] : (function () { throw new RuntimeError('Variable "meta" does not exist.', 40, $this->source); })()), "image", [], "any", false, false, false, 40)));
        // line 41
        yield "                                    ";
        if ( !(is_string($__internal_compile_0 = (isset($context["metaImage"]) || array_key_exists("metaImage", $context) ? $context["metaImage"] : (function () { throw new RuntimeError('Variable "metaImage" does not exist.', 41, $this->source); })())) && is_string($__internal_compile_1 = "data:") && str_starts_with($__internal_compile_0, $__internal_compile_1))) {
            // line 42
            yield "                                        ";
            $context["metaImage"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["metaImage"]) || array_key_exists("metaImage", $context) ? $context["metaImage"] : (function () { throw new RuntimeError('Variable "metaImage" does not exist.', 42, $this->source); })()));
            // line 43
            yield "                                    ";
        }
        // line 44
        yield "                                    <img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["metaImage"]) || array_key_exists("metaImage", $context) ? $context["metaImage"] : (function () { throw new RuntimeError('Variable "metaImage" does not exist.', 44, $this->source); })()), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["meta"]) || array_key_exists("meta", $context) ? $context["meta"] : (function () { throw new RuntimeError('Variable "meta" does not exist.', 44, $this->source); })()), "title", [], "any", false, false, false, 44), "html", null, true);
        yield "\" />
                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 46
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sonata_mosaic_default_view(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_mosaic_default_view"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_mosaic_default_view"));

        // line 47
        yield "                                    <span class=\"mosaic-box-label label label-primary pull-right\">#";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 47, $this->source); })()), "id", [(isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 47, $this->source); })())], "method", false, false, false, 47), "html", null, true);
        yield "</span>
                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 56
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sonata_mosaic_hover_view(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_mosaic_hover_view"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_mosaic_hover_view"));

        // line 57
        yield "                                    <span class=\"mosaic-box-label label label-primary pull-right\">#";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 57, $this->source); })()), "id", [(isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 57, $this->source); })())], "method", false, false, false, 57), "html", null, true);
        yield "</span>
                                    ";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["meta"]) || array_key_exists("meta", $context) ? $context["meta"] : (function () { throw new RuntimeError('Variable "meta" does not exist.', 58, $this->source); })()), "description", [], "any", false, false, false, 58), "html", null, true);
        yield "
                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 70
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sonata_mosaic_description(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_mosaic_description"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_mosaic_description"));

        // line 71
        yield "                                ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, (isset($context["meta"]) || array_key_exists("meta", $context) ? $context["meta"] : (function () { throw new RuntimeError('Variable "meta" does not exist.', 71, $this->source); })()), "title", [], "any", false, false, false, 71)), "truncate", [40], "method", false, false, false, 71), "html", null, true);
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
        return "@SonataAdmin/CRUD/list_outer_rows_mosaic.html.twig";
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
        return array (  348 => 71,  335 => 70,  322 => 58,  317 => 57,  304 => 56,  290 => 47,  277 => 46,  261 => 44,  258 => 43,  255 => 42,  252 => 41,  249 => 40,  236 => 39,  222 => 100,  208 => 99,  204 => 97,  201 => 96,  197 => 94,  195 => 93,  191 => 91,  185 => 89,  179 => 86,  175 => 85,  172 => 84,  170 => 83,  165 => 81,  161 => 80,  158 => 79,  156 => 78,  152 => 77,  149 => 76,  143 => 73,  141 => 70,  138 => 69,  134 => 67,  128 => 65,  126 => 64,  120 => 60,  118 => 56,  115 => 55,  111 => 49,  108 => 46,  106 => 39,  102 => 37,  98 => 32,  95 => 31,  92 => 30,  75 => 29,  71 => 27,  69 => 26,  68 => 25,  67 => 24,  66 => 23,  65 => 22,  63 => 21,  52 => 11,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

<!--
This template can be customized to match your needs. You should only extends the template and used the different blocks to customize the view:
    - sonata_mosaic_default_view
    - sonata_mosaic_hover_view
    - sonata_mosaic_description
-->

<tr>
    {# NEXT_MAJOR: Remove the NAME_ACTIONS check in version 5 and recommend using the option `ajax_hidden` instead. #}
    <td colspan=\"{{
        app.request.isXmlHttpRequest
            ? admin.list.getElements()|filter(element => element.getOption('ajax_hidden') != true)|length
                - admin.list.has(constant('Sonata\\\\AdminBundle\\\\Datagrid\\\\ListMapper::NAME_ACTIONS'))
                - admin.list.has(constant('Sonata\\\\AdminBundle\\\\Datagrid\\\\ListMapper::NAME_BATCH'))
            : admin.list.getElements()|length
    }}\">
        <div class=\"row\">
            {% for object in admin.datagrid.results %}
                {% set meta = admin.getObjectMetadata(object) %}
                {% set mosaic_content %}
                    <div class=\"mosaic-box-outter\">
                        <div class=\"mosaic-inner-box\">
                            {#
                                This box will be display when the mouse is not on the box
                            #}

                            <div class=\"mosaic-inner-box-default\">
                                {% block sonata_mosaic_background %}
                                    {% set metaImage = meta.isImageAvailable is defined and not meta.isImageAvailable ? sonata_config.getOption('mosaic_background') : meta.image %}
                                    {% if not (metaImage starts with 'data:') %}
                                        {% set metaImage = asset(metaImage) %}
                                    {% endif %}
                                    <img src=\"{{ metaImage }}\" alt=\"{{ meta.title }}\" />
                                {% endblock %}
                                {% block sonata_mosaic_default_view %}
                                    <span class=\"mosaic-box-label label label-primary pull-right\">#{{ admin.id(object) }}</span>
                                {% endblock %}
                            </div>

                            {#
                                This box will be display when the mouse is on the box
                                You can add more description
                            #}
                            <div class=\"mosaic-inner-box-hover\">
                                {% block sonata_mosaic_hover_view %}
                                    <span class=\"mosaic-box-label label label-primary pull-right\">#{{ admin.id(object) }}</span>
                                    {{ meta.description }}
                                {% endblock %}
                            </div>
                        </div>

                        <div class=\"mosaic-inner-text\">
                            {% if (admin.hasRoute('batch') and batchactions|length > 0) or (admin.hasRoute('export') and admin.hasAccess('export') and export_formats|length) %}
                                <input type=\"checkbox\" name=\"idx[]\" value=\"{{ admin.id(object) }}\">
                            {% else %}
                                &nbsp;
                            {% endif %}

                            {% block sonata_mosaic_description %}
                                {{ meta.title|u.truncate(40) }}
                            {% endblock %}
                        </div>
                    </div>
                {% endset %}
                <div class=\"col-xs-6 col-sm-3 mosaic-box sonata-ba-list-field-batch sonata-ba-list-field\"
                     objectId=\"{{ admin.id(object) }}\">
                    {% if admin.hasAccess('edit', object) and admin.hasRoute('edit') %}
                        <a class=\"mosaic-inner-link\"
                           href=\"{{ admin.generateObjectUrl('edit', object) }}\">
                            {{ mosaic_content }}
                        </a>
                    {% elseif admin.hasAccess('show', object) and admin.hasRoute('show') %}
                        <a class=\"mosaic-inner-link\"
                           href=\"{{ admin.generateObjectUrl('show', object) }}\">
                            {{ mosaic_content }}
                        </a>
                    {% else %}
                        {{ mosaic_content }}
                    {% endif %}
                </div>

                {% if loop.index % 4 == 0 %}
                    <div class=\"clearfix hidden-xs\"></div>
                {% endif %}
                {% if loop.index % 2 == 0 %}
                    <div class=\"clearfix visible-xs\"></div>
                {% endif %}
            {% endfor %}
        </div>
    </td>
</tr>
", "@SonataAdmin/CRUD/list_outer_rows_mosaic.html.twig", "/home/aleksandar/Desktop/Site/payment-demo/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/list_outer_rows_mosaic.html.twig");
    }
}
