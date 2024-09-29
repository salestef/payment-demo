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

/* payment/form.html.twig */
class __TwigTemplate_04d46c32c7d70add36aa62f3bdd7e43f extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payment/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payment/form.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "payment/form.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "    <h1>Invoice Form</h1>
    <form method=\"POST\" action=\"";
        // line 5
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("handle_invoice");
        yield "\">
        <div style=\"margin-bottom: 15px;\">
            <label for=\"first_name\">First Name:</label>
            <input type=\"text\" id=\"first_name\" name=\"first_name\" placeholder=\"Enter your first name\" required style=\"margin-top: 5px; width: 300px;\">
        </div>
        <div style=\"margin-bottom: 15px;\">
            <label for=\"last_name\">Last Name:</label>
            <input type=\"text\" id=\"last_name\" name=\"last_name\" placeholder=\"Enter your last name\" required style=\"margin-top: 5px; width: 300px;\">
        </div>
        <div style=\"margin-bottom: 15px;\">
            <label for=\"email\">Email:</label>
            <input type=\"email\" id=\"email\" name=\"email\" placeholder=\"Enter your email address\" required style=\"margin-top: 5px; width: 300px;\">
        </div>
        <div style=\"margin-bottom: 15px;\">
            <label for=\"amount\">Amount:</label>
            <input type=\"text\" id=\"amount\" name=\"amount\" placeholder=\"Enter amount\" pattern=\"^\\d+(\\.\\d{1,2})?\$\" required style=\"margin-top: 5px; width: 300px;\">
            <small>Format: 123.45</small>
        </div>
        <div style=\"margin-bottom: 15px;\">
            <label for=\"currency\">Currency:</label>
            <select id=\"currency\" name=\"currency\" required style=\"margin-top: 5px; width: 300px;\">
                <option value=\"EUR\">EUR</option>
                <option value=\"USD\">USD</option>
            </select>
        </div>
        <button type=\"submit\" style=\"padding: 10px 15px; background-color: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer;\">Submit</button>
    </form>
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
        return "payment/form.html.twig";
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
        return array (  79 => 5,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Invoice Form</h1>
    <form method=\"POST\" action=\"{{ path('handle_invoice') }}\">
        <div style=\"margin-bottom: 15px;\">
            <label for=\"first_name\">First Name:</label>
            <input type=\"text\" id=\"first_name\" name=\"first_name\" placeholder=\"Enter your first name\" required style=\"margin-top: 5px; width: 300px;\">
        </div>
        <div style=\"margin-bottom: 15px;\">
            <label for=\"last_name\">Last Name:</label>
            <input type=\"text\" id=\"last_name\" name=\"last_name\" placeholder=\"Enter your last name\" required style=\"margin-top: 5px; width: 300px;\">
        </div>
        <div style=\"margin-bottom: 15px;\">
            <label for=\"email\">Email:</label>
            <input type=\"email\" id=\"email\" name=\"email\" placeholder=\"Enter your email address\" required style=\"margin-top: 5px; width: 300px;\">
        </div>
        <div style=\"margin-bottom: 15px;\">
            <label for=\"amount\">Amount:</label>
            <input type=\"text\" id=\"amount\" name=\"amount\" placeholder=\"Enter amount\" pattern=\"^\\d+(\\.\\d{1,2})?\$\" required style=\"margin-top: 5px; width: 300px;\">
            <small>Format: 123.45</small>
        </div>
        <div style=\"margin-bottom: 15px;\">
            <label for=\"currency\">Currency:</label>
            <select id=\"currency\" name=\"currency\" required style=\"margin-top: 5px; width: 300px;\">
                <option value=\"EUR\">EUR</option>
                <option value=\"USD\">USD</option>
            </select>
        </div>
        <button type=\"submit\" style=\"padding: 10px 15px; background-color: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer;\">Submit</button>
    </form>
{% endblock %}
", "payment/form.html.twig", "/var/www/project/templates/payment/form.html.twig");
    }
}
