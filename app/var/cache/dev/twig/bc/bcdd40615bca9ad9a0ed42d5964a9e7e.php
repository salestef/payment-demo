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

/* @SonataAdmin/CRUD/Association/edit_many_script.html.twig */
class __TwigTemplate_1e9db180c9cfdbf651b0e5ea099ce274 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/Association/edit_many_script.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/Association/edit_many_script.html.twig"));

        // line 11
        yield "

";
        // line 18
        yield "
";
        // line 20
        yield "
";
        // line 21
        $context["associationadmin"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 21, $this->source); })()), "field_description", [], "any", false, false, false, 21), "associationadmin", [], "any", false, false, false, 21);
        // line 22
        yield "
<!-- edit many association -->

<script type=\"text/javascript\">

    ";
        // line 32
        yield "
    var field_dialog_form_list_link_";
        // line 33
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 33, $this->source); })());
        yield " = function(event) {
        initialize_popup_";
        // line 34
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 34, $this->source); })());
        yield "();

        var target = jQuery(this);

        if (target.attr('href').length === 0 || target.attr('href') === '#') {
            return;
        }

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 45
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 45, $this->source); })());
        yield "|field_dialog_form_list_link] handle link click in a list');

        var element = jQuery(this).parents('#field_dialog_";
        // line 47
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 47, $this->source); })());
        yield " .sonata-ba-list-field');

        // the user does not click on a row column
        if (element.length == 0) {
            Admin.log('[";
        // line 51
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 51, $this->source); })());
        yield "|field_dialog_form_list_link] the user does not click on a row column, make ajax call to retrieve inner html');
            // make a recursive call (ie: reset the filter)
            jQuery.ajax({
                type: 'GET',
                url: jQuery(this).attr('href'),
                dataType: 'html',
                success: function(html) {
                    Admin.log('[";
        // line 58
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 58, $this->source); })());
        yield "|field_dialog_form_list_link] callback success, attach valid js event');

                    field_dialog_content_";
        // line 60
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 60, $this->source); })());
        yield ".html(html);
                    field_dialog_form_list_handle_action_";
        // line 61
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 61, $this->source); })());
        yield "();

                    Admin.shared_setup(field_dialog_";
        // line 63
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 63, $this->source); })());
        yield ");
                }
            });

            return;
        }

        Admin.log('[";
        // line 70
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 70, $this->source); })());
        yield "|field_dialog_form_list_link] the user select one element, update input and hide the modal');

        jQuery('#";
        // line 72
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 72, $this->source); })());
        yield "').val(element.attr('objectId'));
        jQuery('#";
        // line 73
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 73, $this->source); })());
        yield "').trigger('change');

        field_dialog_";
        // line 75
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 75, $this->source); })());
        yield ".modal('hide');
    };

    // this function handle action on the modal list when inside a selected list
    var field_dialog_form_list_handle_action_";
        // line 79
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 79, $this->source); })());
        yield "  =  function() {
        Admin.log('[";
        // line 80
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 80, $this->source); })());
        yield "|field_dialog_form_list_handle_action] attaching valid js event');

        // capture the submit event to make an ajax call, ie : POST data to the
        // related create admin
        jQuery('a', field_dialog_";
        // line 84
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 84, $this->source); })());
        yield ").on('click', field_dialog_form_list_link_";
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 84, $this->source); })());
        yield ");
        jQuery('form', field_dialog_";
        // line 85
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 85, $this->source); })());
        yield ").on('submit', function(event) {
            event.preventDefault();

            var form = jQuery(this);

            Admin.log('[";
        // line 90
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 90, $this->source); })());
        yield "|field_dialog_form_list_handle_action] catching submit event, sending ajax request');

            jQuery(form).ajaxSubmit({
                type: form.attr('method'),
                url: form.attr('action'),
                dataType: 'html',
                data: {_xml_http_request: true},
                success: function(html) {

                    Admin.log('[";
        // line 99
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 99, $this->source); })());
        yield "|field_dialog_form_list_handle_action] form submit success, restoring event');

                    field_dialog_content_";
        // line 101
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 101, $this->source); })());
        yield ".html(html);
                    field_dialog_form_list_handle_action_";
        // line 102
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 102, $this->source); })());
        yield "();

                    Admin.shared_setup(field_dialog_";
        // line 104
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 104, $this->source); })());
        yield ");
                }
            });
        });
    };

    // handle the list link
    var field_dialog_form_list_";
        // line 111
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 111, $this->source); })());
        yield " = function(event) {

        initialize_popup_";
        // line 113
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 113, $this->source); })());
        yield "();

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 118
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 118, $this->source); })());
        yield "|field_dialog_form_list] open the list modal');

        var a = jQuery(this);

        field_dialog_content_";
        // line 122
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 122, $this->source); })());
        yield ".html('');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[";
        // line 130
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 130, $this->source); })());
        yield "|field_dialog_form_list] retrieving the list content');

                // populate the popup container
                field_dialog_content_";
        // line 133
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 133, $this->source); })());
        yield ".html(html);
                ";
        // line 134
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["associationadmin"]) || array_key_exists("associationadmin", $context) ? $context["associationadmin"] : (function () { throw new RuntimeError('Variable "associationadmin" does not exist.', 134, $this->source); })()), "label", [], "any", false, false, false, 134))) {
            // line 135
            yield "                    field_dialog_title_";
            yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 135, $this->source); })());
            yield ".html(\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["associationadmin"]) || array_key_exists("associationadmin", $context) ? $context["associationadmin"] : (function () { throw new RuntimeError('Variable "associationadmin" does not exist.', 135, $this->source); })()), "label", [], "any", false, false, false, 135), [], CoreExtension::getAttribute($this->env, $this->source, (isset($context["associationadmin"]) || array_key_exists("associationadmin", $context) ? $context["associationadmin"] : (function () { throw new RuntimeError('Variable "associationadmin" does not exist.', 135, $this->source); })()), "translationdomain", [], "any", false, false, false, 135));
            yield "\");
                ";
        }
        // line 137
        yield "
                Admin.shared_setup(field_dialog_";
        // line 138
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 138, $this->source); })());
        yield ");

                field_dialog_form_list_handle_action_";
        // line 140
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 140, $this->source); })());
        yield "();

                // open the dialog in modal mode
                field_dialog_";
        // line 143
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 143, $this->source); })());
        yield ".modal();

                Admin.setup_list_modal(field_dialog_";
        // line 145
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 145, $this->source); })());
        yield ");
            }
        });
    };

    // handle the add link
    var field_dialog_form_add_";
        // line 151
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 151, $this->source); })());
        yield " = function(event) {
        initialize_popup_";
        // line 152
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 152, $this->source); })());
        yield "();

        event.preventDefault();
        event.stopPropagation();

        var a = jQuery(this);

        field_dialog_content_";
        // line 159
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 159, $this->source); })());
        yield ".html('');

        Admin.log('[";
        // line 161
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 161, $this->source); })());
        yield "|field_dialog_form_add] add link action');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[";
        // line 169
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 169, $this->source); })());
        yield "|field_dialog_form_add] ajax success', field_dialog_";
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 169, $this->source); })());
        yield ");

                // populate the popup container
                field_dialog_content_";
        // line 172
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 172, $this->source); })());
        yield ".html(html);
                ";
        // line 173
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["associationadmin"]) || array_key_exists("associationadmin", $context) ? $context["associationadmin"] : (function () { throw new RuntimeError('Variable "associationadmin" does not exist.', 173, $this->source); })()), "label", [], "any", false, false, false, 173))) {
            // line 174
            yield "                    field_dialog_title_";
            yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 174, $this->source); })());
            yield ".html(\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["associationadmin"]) || array_key_exists("associationadmin", $context) ? $context["associationadmin"] : (function () { throw new RuntimeError('Variable "associationadmin" does not exist.', 174, $this->source); })()), "label", [], "any", false, false, false, 174), [], CoreExtension::getAttribute($this->env, $this->source, (isset($context["associationadmin"]) || array_key_exists("associationadmin", $context) ? $context["associationadmin"] : (function () { throw new RuntimeError('Variable "associationadmin" does not exist.', 174, $this->source); })()), "translationdomain", [], "any", false, false, false, 174));
            yield "\");
                ";
        }
        // line 176
        yield "
                Admin.shared_setup(field_dialog_";
        // line 177
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 177, $this->source); })());
        yield ");

                // capture the submit event to make an ajax call, ie : POST data to the
                // related create admin
                jQuery(document).on('click','#field_dialog_";
        // line 181
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 181, $this->source); })());
        yield " a', field_dialog_form_action_";
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 181, $this->source); })());
        yield ");
                jQuery('form', field_dialog_";
        // line 182
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 182, $this->source); })());
        yield ").on('submit', field_dialog_form_action_";
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 182, $this->source); })());
        yield ");

                // open the dialog in modal mode
                field_dialog_";
        // line 185
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 185, $this->source); })());
        yield ".modal();

                Admin.setup_list_modal(field_dialog_";
        // line 187
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 187, $this->source); })());
        yield ");
            }
        });
    };

    // handle the edit link
    var field_dialog_form_edit_";
        // line 193
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 193, $this->source); })());
        yield " = function(event) {
        initialize_popup_";
        // line 194
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 194, $this->source); })());
        yield "();

        event.preventDefault();
        event.stopPropagation();

        var a = jQuery(this);

        field_dialog_content_";
        // line 201
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 201, $this->source); })());
        yield ".html('');

        Admin.log('[";
        // line 203
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 203, $this->source); })());
        yield "|field_dialog_form_edit] edit link action');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[";
        // line 211
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 211, $this->source); })());
        yield "|field_dialog_form_edit] ajax success', field_dialog_";
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 211, $this->source); })());
        yield ");

                // populate the popup container
                field_dialog_content_";
        // line 214
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 214, $this->source); })());
        yield ".html(html);
                ";
        // line 215
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["associationadmin"]) || array_key_exists("associationadmin", $context) ? $context["associationadmin"] : (function () { throw new RuntimeError('Variable "associationadmin" does not exist.', 215, $this->source); })()), "label", [], "any", false, false, false, 215))) {
            // line 216
            yield "                    field_dialog_title_";
            yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 216, $this->source); })());
            yield ".html(\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["associationadmin"]) || array_key_exists("associationadmin", $context) ? $context["associationadmin"] : (function () { throw new RuntimeError('Variable "associationadmin" does not exist.', 216, $this->source); })()), "label", [], "any", false, false, false, 216), [], CoreExtension::getAttribute($this->env, $this->source, (isset($context["associationadmin"]) || array_key_exists("associationadmin", $context) ? $context["associationadmin"] : (function () { throw new RuntimeError('Variable "associationadmin" does not exist.', 216, $this->source); })()), "translationdomain", [], "any", false, false, false, 216));
            yield "\");
                ";
        }
        // line 218
        yield "
                Admin.shared_setup(field_dialog_";
        // line 219
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 219, $this->source); })());
        yield ");

                // capture the submit event to make an ajax call, ie : POST data to the
                // related create admin
                jQuery(document).on('click','#field_dialog_";
        // line 223
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 223, $this->source); })());
        yield " a', field_dialog_form_action_";
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 223, $this->source); })());
        yield ");
                jQuery('form', field_dialog_";
        // line 224
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 224, $this->source); })());
        yield ").on('submit', field_dialog_form_action_";
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 224, $this->source); })());
        yield ");

                // open the dialog in modal mode
                field_dialog_";
        // line 227
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 227, $this->source); })());
        yield ".modal();

                Admin.setup_list_modal(field_dialog_";
        // line 229
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 229, $this->source); })());
        yield ");
            }
        });
    };

    // handle the post data
    var field_dialog_form_action_";
        // line 235
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 235, $this->source); })());
        yield " = function(event) {

        var element = jQuery(this);

        // return if the link is an anchor inside the same page
        if (
            this.nodeName === 'A'
            && (
                element.attr('href').length === 0
                || element.attr('href')[0] === '#'
                || element.attr('href').substr(0, 11) === 'javascript:'
            )
        ) {
            Admin.log('[";
        // line 248
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 248, $this->source); })());
        yield "|field_dialog_form_action] element is an anchor or a script, skipping action', this);
            return;
        }

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 255
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 255, $this->source); })());
        yield "|field_dialog_form_action] action catch', this);

        initialize_popup_";
        // line 257
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 257, $this->source); })());
        yield "();

        if (this.nodeName == 'FORM') {
            var url  = element.attr('action');
            var type = element.attr('method');
        } else if (this.nodeName == 'A') {
            var url  = element.attr('href');
            var type = 'GET';
        } else {
            alert('unexpected element : @' + this.nodeName + '@');
            return;
        }

        if (element.hasClass('sonata-ba-action')) {
            Admin.log('[";
        // line 271
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 271, $this->source); })());
        yield "|field_dialog_form_action] reserved action stop catch all events');
            return;
        }

        var data = {
            _xml_http_request: true
        }

        var form = jQuery(this);

        Admin.log('[";
        // line 281
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 281, $this->source); })());
        yield "|field_dialog_form_action] execute ajax call');

        var oldErrorMessages = jQuery(field_dialog_content_";
        // line 283
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 283, $this->source); })());
        yield ").find('div.alert-danger');
        // Remove old error messages.
        if (oldErrorMessages.length > 0) {
          oldErrorMessages.remove();
        }

        // the ajax post
        jQuery(form).ajaxSubmit({
            url: url,
            type: type,
            headers: {
                Accept: 'application/json'
            },
            data: data,
            success: function(data) {
                Admin.log('[";
        // line 298
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 298, $this->source); })());
        yield "|field_dialog_form_action] ajax success');

                // if the crud action return ok, then the element has been added
                // so the widget container must be refresh with the last option available
                if (typeof data != 'string' && data.result == 'ok') {
                    field_dialog_";
        // line 303
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 303, $this->source); })());
        yield ".modal('hide');

                    ";
        // line 305
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 305, $this->source); })()), "edit", [], "any", false, false, false, 305) == "list")) {
            // line 306
            yield "                        ";
            // line 310
            yield "                        jQuery('#";
            yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 310, $this->source); })());
            yield "').val(data.objectId);
                        jQuery('#";
            // line 311
            yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 311, $this->source); })());
            yield "').change();

                    ";
        } else {
            // line 314
            yield "
                        // reload the form element
                        jQuery('#field_widget_";
            // line 316
            yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 316, $this->source); })());
            yield "').closest('form').ajaxSubmit({
                            url: '";
            // line 317
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sonata_admin_retrieve_form_element", ((["_sonata_admin" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 318
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 318, $this->source); })()), "admin", [], "any", false, false, false, 318), "root", [], "any", false, false, false, 318), "baseCodeRoute", [], "any", false, false, false, 318), "elementId" =>             // line 319
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 319, $this->source); })()), "subclass" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 320
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 320, $this->source); })()), "admin", [], "any", false, false, false, 320), "hasActiveSubClass", [], "method", false, false, false, 320)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 320, $this->source); })()), "admin", [], "any", false, false, false, 320), "getActiveSubclassCode", [], "method", false, false, false, 320)) : (null)), "objectId" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 321
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 321, $this->source); })()), "admin", [], "any", false, false, false, 321), "root", [], "any", false, false, false, 321), "id", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 321, $this->source); })()), "admin", [], "any", false, false, false, 321), "root", [], "any", false, false, false, 321), "subject", [], "any", false, false, false, 321)], "method", false, false, false, 321), "uniqid" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 322
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 322, $this->source); })()), "admin", [], "any", false, false, false, 322), "root", [], "any", false, false, false, 322), "uniqid", [], "any", false, false, false, 322)] + ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 324
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 324, $this->source); })()), "admin", [], "any", false, false, false, 324), "root", [], "any", false, false, false, 324), "hasRequest", [], "method", false, false, false, 324)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 325
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 325, $this->source); })()), "admin", [], "any", false, false, false, 325), "root", [], "any", false, false, false, 325), "request", [], "any", false, false, false, 325), "attributes", [], "any", false, false, false, 325), "get", ["_route_params", []], "method", false, false, false, 325)) : ([]))) + ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 327
($context["app"] ?? null), "request", [], "any", false, true, false, 327), "query", [], "any", false, true, false, 327), "all", [], "any", true, true, false, 327)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 327), "query", [], "any", false, true, false, 327), "all", [], "any", false, false, false, 327), [])) : ([]))));
            // line 328
            yield "',
                            data: {_xml_http_request: true },
                            dataType: 'html',
                            type: 'POST',
                            success: function(html) {
                                jQuery('#field_container_";
            // line 333
            yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 333, $this->source); })());
            yield "').replaceWith(html);
                                var newElement = jQuery('#";
            // line 334
            yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 334, $this->source); })());
            yield " [value=\"' + data.objectId + '\"]');
                                if (newElement.is(\"input\")) {
                                    newElement.attr('checked', 'checked');
                                } else {
                                    newElement.attr('selected', 'selected');
                                }

                                jQuery('#field_container_";
            // line 341
            yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 341, $this->source); })());
            yield "').trigger('sonata-admin-append-form-element');
                            }
                        });

                    ";
        }
        // line 346
        yield "
                    return;
                }

                // otherwise, display form error
                field_dialog_content_";
        // line 351
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 351, $this->source); })());
        yield ".html(data);

                Admin.shared_setup(field_dialog_";
        // line 353
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 353, $this->source); })());
        yield ");

                // reattach the event
                jQuery('form', field_dialog_";
        // line 356
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 356, $this->source); })());
        yield ").submit(field_dialog_form_action_";
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 356, $this->source); })());
        yield ");
            },
            error: function(xhr) {
                var content = '';

                if ('application/json' === xhr.getResponseHeader('Content-Type')) {
                    var jsonContent = JSON.parse(xhr.responseText);

                    if (jsonContent.title) {
                        content += '<div class=\"alert alert-danger alert-dismissable\">'
                            + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>'
                            + jsonContent.title
                            + '</div>';
                    }

                    if (!jsonContent.violations) {
                        return;
                    }

                    event.currentTarget.querySelectorAll('.help-block.sonata-ba-field-error-messages').forEach((element) => {
                        element.remove();
                    });

                    event.currentTarget.querySelectorAll('.has-error').forEach((element) => {
                        element.classList.remove('has-error');
                    });

                    event.currentTarget.querySelectorAll('button').forEach((element) => {
                        element.removeAttribute('disabled');
                    });

                    jsonContent.violations.forEach((violation) => {
                        const field = event.currentTarget.querySelector(`[name=\"\${violation.propertyPath}\"]`);

                        if (!field) {
                            content += '<div class=\"alert alert-danger alert-dismissable\">'
                                + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>'
                                + violation.title
                                + '</div>';

                            return;
                        }

                        const formGroup = field.closest('.form-group');

                        let errorList = formGroup.querySelector(
                            '.help-block.sonata-ba-field-error-messages .list-unstyled'
                        );

                        if (!errorList) {
                            const errorWrapper = document.createElement('div');
                            errorWrapper.classList.add('help-block');
                            errorWrapper.classList.add('sonata-ba-field-error-messages');

                            errorList = document.createElement('ul');
                            errorList.classList.add('list-unstyled');

                            formGroup.classList.add('has-error');

                            errorWrapper.appendChild(errorList);
                            formGroup.appendChild(errorWrapper);
                        }

                        const errorItem = document.createElement('li');
                        errorItem.innerHTML = `<i class=\"fas fa-exclamation-circle\" aria-hidden=\"true\"></i> \${violation.title}`;

                        errorList.appendChild(errorItem);
                    });
                } else {
                    content += xhr.responseText;
                }

                // Display the error.
                field_dialog_content_";
        // line 429
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 429, $this->source); })());
        yield ".prepend(content);

                // Reset the submit buttons.
                \$(form).find('button[type=\"submit\"]').removeAttr('disabled');
            }
        });

        return false;
    };

    var field_dialog_";
        // line 439
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 439, $this->source); })());
        yield "         = false;
    var field_dialog_content_";
        // line 440
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 440, $this->source); })());
        yield " = false;
    var field_dialog_title_";
        // line 441
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 441, $this->source); })());
        yield "   = false;

    function initialize_popup_";
        // line 443
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 443, $this->source); })());
        yield "() {
        // initialize component
        if (!field_dialog_";
        // line 445
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 445, $this->source); })());
        yield ") {
            field_dialog_";
        // line 446
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 446, $this->source); })());
        yield "         = jQuery(\"#field_dialog_";
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 446, $this->source); })());
        yield "\");
            field_dialog_content_";
        // line 447
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 447, $this->source); })());
        yield " = jQuery(\".modal-body\", \"#field_dialog_";
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 447, $this->source); })());
        yield "\");
            field_dialog_title_";
        // line 448
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 448, $this->source); })());
        yield "   = jQuery(\".modal-title\", \"#field_dialog_";
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 448, $this->source); })());
        yield "\");

            // move the dialog as a child of the root element, nested form breaks html ...
            jQuery(document.body).append(field_dialog_";
        // line 451
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 451, $this->source); })());
        yield ");

            Admin.log('[";
        // line 453
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 453, $this->source); })());
        yield "|field_dialog] move dialog container as a document child');
        }
    }

    ";
        // line 460
        yield "    // this function initializes the popup
    // this can be only done this way as popup can be cascaded
    function start_field_dialog_form_add_";
        // line 462
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 462, $this->source); })());
        yield "(link) {

        // remove the html event
        link.onclick = null;

        initialize_popup_";
        // line 467
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 467, $this->source); })());
        yield "();

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_dialog_form_add_";
        // line 471
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 471, $this->source); })());
        yield ")
            .trigger('click')
        ;

        return false;
    }

    ";
        // line 481
        yield "    // this function initializes the popup
    // this can only be done this way as popup can be cascaded
    function start_field_dialog_form_edit_";
        // line 483
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 483, $this->source); })());
        yield "(link) {

        // remove the html event
        link.onclick = null;

        initialize_popup_";
        // line 488
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 488, $this->source); })());
        yield "();

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_dialog_form_edit_";
        // line 492
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 492, $this->source); })());
        yield ")
            .trigger('click')
        ;

        return false;
    }

    if (field_dialog_";
        // line 499
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 499, $this->source); })());
        yield ") {
        Admin.shared_setup(field_dialog_";
        // line 500
        yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 500, $this->source); })());
        yield ");
    }

    ";
        // line 503
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 503, $this->source); })()), "edit", [], "any", false, false, false, 503) == "list")) {
            // line 504
            yield "        ";
            // line 507
            yield "        // this function initializes the popup
        // this can be only done this way as popup can be cascaded
        function start_field_dialog_form_list_";
            // line 509
            yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 509, $this->source); })());
            yield "(link) {

            link.onclick = null;

            initialize_popup_";
            // line 513
            yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 513, $this->source); })());
            yield "();

            // add the jQuery event to the a element
            jQuery(link)
                .click(field_dialog_form_list_";
            // line 517
            yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 517, $this->source); })());
            yield ")
                .trigger('click')
            ;

            return false;
        }

        function remove_selected_element_";
            // line 524
            yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 524, $this->source); })());
            yield "(link) {

            link.onclick = null;

            jQuery(link)
                .click(field_remove_element_";
            // line 529
            yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 529, $this->source); })());
            yield ")
                .trigger('click')
            ;

            return false;
        }

        function field_remove_element_";
            // line 536
            yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 536, $this->source); })());
            yield "(event) {
            event.preventDefault();

            if (jQuery('#";
            // line 539
            yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 539, $this->source); })());
            yield " option').get(0)) {
                jQuery('#";
            // line 540
            yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 540, $this->source); })());
            yield "').attr('selectedIndex', '-1').children(\"option:selected\").attr(\"selected\", false);
            }

            jQuery('#";
            // line 543
            yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 543, $this->source); })());
            yield "').val('');
            jQuery('#";
            // line 544
            yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 544, $this->source); })());
            yield "').trigger('change');

            return false;
        }
        ";
            // line 551
            yield "
        // update the label
        jQuery('#";
            // line 553
            yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 553, $this->source); })());
            yield "').on('change', function(event) {

            Admin.log('[";
            // line 555
            yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 555, $this->source); })());
            yield "|on:change] update the label');

            var objectId = jQuery(this).val();

            // Skip short object information call if object is missing.
            if (undefined === objectId || null === objectId || '' === objectId) {
                jQuery('#field_widget_";
            // line 561
            yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 561, $this->source); })());
            yield "').html('";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("short_object_description_placeholder", [], "SonataAdminBundle");
            yield "');

                ";
            // line 563
            if ((isset($context["btn_edit"]) || array_key_exists("btn_edit", $context) ? $context["btn_edit"] : (function () { throw new RuntimeError('Variable "btn_edit" does not exist.', 563, $this->source); })())) {
                // line 564
                yield "                    jQuery('#field_actions_";
                yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 564, $this->source); })());
                yield " a.btn-warning').addClass('hidden');
                ";
            }
            // line 566
            yield "
                return;
            }

            jQuery('#field_widget_";
            // line 570
            yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 570, $this->source); })());
            yield "').html(\"<span><img src=\\\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/sonataadmin/images/ajax-loader.gif");
            yield "\\\" style=\\\"vertical-align: middle; margin-right: 10px\\\"/>";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("loading_information", [], "SonataAdminBundle");
            yield "</span>\");
            jQuery.ajax({
                type: 'GET',
                url: '";
            // line 573
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sonata_admin_short_object_information", ((["_sonata_admin" => CoreExtension::getAttribute($this->env, $this->source,             // line 574
(isset($context["associationadmin"]) || array_key_exists("associationadmin", $context) ? $context["associationadmin"] : (function () { throw new RuntimeError('Variable "associationadmin" does not exist.', 574, $this->source); })()), "baseCodeRoute", [], "any", false, false, false, 574), "objectId" => "OBJECT_ID", "uniqid" => CoreExtension::getAttribute($this->env, $this->source,             // line 576
(isset($context["associationadmin"]) || array_key_exists("associationadmin", $context) ? $context["associationadmin"] : (function () { throw new RuntimeError('Variable "associationadmin" does not exist.', 576, $this->source); })()), "uniqid", [], "any", false, false, false, 576), "linkParameters" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 577
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 577, $this->source); })()), "field_description", [], "any", false, false, false, 577), "option", ["link_parameters", []], "method", false, false, false, 577)] + ((CoreExtension::getAttribute($this->env, $this->source,             // line 579
(isset($context["associationadmin"]) || array_key_exists("associationadmin", $context) ? $context["associationadmin"] : (function () { throw new RuntimeError('Variable "associationadmin" does not exist.', 579, $this->source); })()), "hasRequest", [], "method", false, false, false, 579)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 580
(isset($context["associationadmin"]) || array_key_exists("associationadmin", $context) ? $context["associationadmin"] : (function () { throw new RuntimeError('Variable "associationadmin" does not exist.', 580, $this->source); })()), "request", [], "any", false, false, false, 580), "attributes", [], "any", false, false, false, 580), "get", ["_route_params", []], "method", false, false, false, 580)) : ([]))) + ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 582
($context["app"] ?? null), "request", [], "any", false, true, false, 582), "query", [], "any", false, true, false, 582), "all", [], "any", true, true, false, 582)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 582), "query", [], "any", false, true, false, 582), "all", [], "any", false, false, false, 582), [])) : ([]))));
            // line 583
            yield "'.replace('OBJECT_ID', objectId),
                dataType: 'html',
                success: function(html) {
                    jQuery('#field_widget_";
            // line 586
            yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 586, $this->source); })());
            yield "').html(html);
                }
            });

            ";
            // line 590
            if ((isset($context["btn_edit"]) || array_key_exists("btn_edit", $context) ? $context["btn_edit"] : (function () { throw new RuntimeError('Variable "btn_edit" does not exist.', 590, $this->source); })())) {
                // line 591
                yield "                var edit_button_url = '";
                yield CoreExtension::getAttribute($this->env, $this->source,                 // line 592
(isset($context["associationadmin"]) || array_key_exists("associationadmin", $context) ? $context["associationadmin"] : (function () { throw new RuntimeError('Variable "associationadmin" does not exist.', 592, $this->source); })()), "generateUrl", ["edit", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["associationadmin"]) || array_key_exists("associationadmin", $context) ? $context["associationadmin"] : (function () { throw new RuntimeError('Variable "associationadmin" does not exist.', 592, $this->source); })()), "idParameter", [], "any", false, false, false, 592) => "OBJECT_ID"]], "method", false, false, false, 592);
                // line 593
                yield "'.replace('OBJECT_ID', objectId);

                jQuery('#field_actions_";
                // line 595
                yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 595, $this->source); })());
                yield " a.btn-warning').removeClass('hidden').attr('href', edit_button_url);
            ";
            }
            // line 597
            yield "        });

    ";
        }
        // line 600
        yield "

</script>
<!-- / edit many association -->

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SonataAdmin/CRUD/Association/edit_many_script.html.twig";
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
        return array (  1031 => 600,  1026 => 597,  1021 => 595,  1017 => 593,  1015 => 592,  1013 => 591,  1011 => 590,  1004 => 586,  999 => 583,  997 => 582,  996 => 580,  995 => 579,  994 => 577,  993 => 576,  992 => 574,  991 => 573,  981 => 570,  975 => 566,  969 => 564,  967 => 563,  960 => 561,  951 => 555,  946 => 553,  942 => 551,  935 => 544,  931 => 543,  925 => 540,  921 => 539,  915 => 536,  905 => 529,  897 => 524,  887 => 517,  880 => 513,  873 => 509,  869 => 507,  867 => 504,  865 => 503,  859 => 500,  855 => 499,  845 => 492,  838 => 488,  830 => 483,  826 => 481,  816 => 471,  809 => 467,  801 => 462,  797 => 460,  790 => 453,  785 => 451,  777 => 448,  771 => 447,  765 => 446,  761 => 445,  756 => 443,  751 => 441,  747 => 440,  743 => 439,  730 => 429,  652 => 356,  646 => 353,  641 => 351,  634 => 346,  626 => 341,  616 => 334,  612 => 333,  605 => 328,  603 => 327,  602 => 325,  601 => 324,  600 => 322,  599 => 321,  598 => 320,  597 => 319,  596 => 318,  595 => 317,  591 => 316,  587 => 314,  581 => 311,  576 => 310,  574 => 306,  572 => 305,  567 => 303,  559 => 298,  541 => 283,  536 => 281,  523 => 271,  506 => 257,  501 => 255,  491 => 248,  475 => 235,  466 => 229,  461 => 227,  453 => 224,  447 => 223,  440 => 219,  437 => 218,  429 => 216,  427 => 215,  423 => 214,  415 => 211,  404 => 203,  399 => 201,  389 => 194,  385 => 193,  376 => 187,  371 => 185,  363 => 182,  357 => 181,  350 => 177,  347 => 176,  339 => 174,  337 => 173,  333 => 172,  325 => 169,  314 => 161,  309 => 159,  299 => 152,  295 => 151,  286 => 145,  281 => 143,  275 => 140,  270 => 138,  267 => 137,  259 => 135,  257 => 134,  253 => 133,  247 => 130,  236 => 122,  229 => 118,  221 => 113,  216 => 111,  206 => 104,  201 => 102,  197 => 101,  192 => 99,  180 => 90,  172 => 85,  166 => 84,  159 => 80,  155 => 79,  148 => 75,  143 => 73,  139 => 72,  134 => 70,  124 => 63,  119 => 61,  115 => 60,  110 => 58,  100 => 51,  93 => 47,  88 => 45,  74 => 34,  70 => 33,  67 => 32,  60 => 22,  58 => 21,  55 => 20,  52 => 18,  48 => 11,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}


{#

This code manages the many-to-[one|many] association field popup

#}

{% autoescape false %}

{% set associationadmin = sonata_admin.field_description.associationadmin %}

<!-- edit many association -->

<script type=\"text/javascript\">

    {#
      handle link click in a list :
        - if the parent has an objectId defined then the related input get updated
        - if the parent has NO object then an ajax request is made to refresh the popup
    #}

    var field_dialog_form_list_link_{{ id }} = function(event) {
        initialize_popup_{{ id }}();

        var target = jQuery(this);

        if (target.attr('href').length === 0 || target.attr('href') === '#') {
            return;
        }

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[{{ id }}|field_dialog_form_list_link] handle link click in a list');

        var element = jQuery(this).parents('#field_dialog_{{ id }} .sonata-ba-list-field');

        // the user does not click on a row column
        if (element.length == 0) {
            Admin.log('[{{ id }}|field_dialog_form_list_link] the user does not click on a row column, make ajax call to retrieve inner html');
            // make a recursive call (ie: reset the filter)
            jQuery.ajax({
                type: 'GET',
                url: jQuery(this).attr('href'),
                dataType: 'html',
                success: function(html) {
                    Admin.log('[{{ id }}|field_dialog_form_list_link] callback success, attach valid js event');

                    field_dialog_content_{{ id }}.html(html);
                    field_dialog_form_list_handle_action_{{ id }}();

                    Admin.shared_setup(field_dialog_{{ id }});
                }
            });

            return;
        }

        Admin.log('[{{ id }}|field_dialog_form_list_link] the user select one element, update input and hide the modal');

        jQuery('#{{ id }}').val(element.attr('objectId'));
        jQuery('#{{ id }}').trigger('change');

        field_dialog_{{ id }}.modal('hide');
    };

    // this function handle action on the modal list when inside a selected list
    var field_dialog_form_list_handle_action_{{ id }}  =  function() {
        Admin.log('[{{ id }}|field_dialog_form_list_handle_action] attaching valid js event');

        // capture the submit event to make an ajax call, ie : POST data to the
        // related create admin
        jQuery('a', field_dialog_{{ id }}).on('click', field_dialog_form_list_link_{{ id }});
        jQuery('form', field_dialog_{{ id }}).on('submit', function(event) {
            event.preventDefault();

            var form = jQuery(this);

            Admin.log('[{{ id }}|field_dialog_form_list_handle_action] catching submit event, sending ajax request');

            jQuery(form).ajaxSubmit({
                type: form.attr('method'),
                url: form.attr('action'),
                dataType: 'html',
                data: {_xml_http_request: true},
                success: function(html) {

                    Admin.log('[{{ id }}|field_dialog_form_list_handle_action] form submit success, restoring event');

                    field_dialog_content_{{ id }}.html(html);
                    field_dialog_form_list_handle_action_{{ id }}();

                    Admin.shared_setup(field_dialog_{{ id }});
                }
            });
        });
    };

    // handle the list link
    var field_dialog_form_list_{{ id }} = function(event) {

        initialize_popup_{{ id }}();

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[{{ id }}|field_dialog_form_list] open the list modal');

        var a = jQuery(this);

        field_dialog_content_{{ id }}.html('');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[{{ id }}|field_dialog_form_list] retrieving the list content');

                // populate the popup container
                field_dialog_content_{{ id }}.html(html);
                {% if associationadmin.label is not empty %}
                    field_dialog_title_{{ id }}.html(\"{{ associationadmin.label|trans({}, associationadmin.translationdomain) }}\");
                {% endif %}

                Admin.shared_setup(field_dialog_{{ id }});

                field_dialog_form_list_handle_action_{{ id }}();

                // open the dialog in modal mode
                field_dialog_{{ id }}.modal();

                Admin.setup_list_modal(field_dialog_{{ id }});
            }
        });
    };

    // handle the add link
    var field_dialog_form_add_{{ id }} = function(event) {
        initialize_popup_{{ id }}();

        event.preventDefault();
        event.stopPropagation();

        var a = jQuery(this);

        field_dialog_content_{{ id }}.html('');

        Admin.log('[{{ id }}|field_dialog_form_add] add link action');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[{{ id }}|field_dialog_form_add] ajax success', field_dialog_{{ id }});

                // populate the popup container
                field_dialog_content_{{ id }}.html(html);
                {% if associationadmin.label is not empty %}
                    field_dialog_title_{{ id }}.html(\"{{ associationadmin.label|trans({}, associationadmin.translationdomain) }}\");
                {% endif %}

                Admin.shared_setup(field_dialog_{{ id }});

                // capture the submit event to make an ajax call, ie : POST data to the
                // related create admin
                jQuery(document).on('click','#field_dialog_{{ id }} a', field_dialog_form_action_{{ id }});
                jQuery('form', field_dialog_{{ id }}).on('submit', field_dialog_form_action_{{ id }});

                // open the dialog in modal mode
                field_dialog_{{ id }}.modal();

                Admin.setup_list_modal(field_dialog_{{ id }});
            }
        });
    };

    // handle the edit link
    var field_dialog_form_edit_{{ id }} = function(event) {
        initialize_popup_{{ id }}();

        event.preventDefault();
        event.stopPropagation();

        var a = jQuery(this);

        field_dialog_content_{{ id }}.html('');

        Admin.log('[{{ id }}|field_dialog_form_edit] edit link action');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[{{ id }}|field_dialog_form_edit] ajax success', field_dialog_{{ id }});

                // populate the popup container
                field_dialog_content_{{ id }}.html(html);
                {% if associationadmin.label is not empty %}
                    field_dialog_title_{{ id }}.html(\"{{ associationadmin.label|trans({}, associationadmin.translationdomain) }}\");
                {% endif %}

                Admin.shared_setup(field_dialog_{{ id }});

                // capture the submit event to make an ajax call, ie : POST data to the
                // related create admin
                jQuery(document).on('click','#field_dialog_{{ id }} a', field_dialog_form_action_{{ id }});
                jQuery('form', field_dialog_{{ id }}).on('submit', field_dialog_form_action_{{ id }});

                // open the dialog in modal mode
                field_dialog_{{ id }}.modal();

                Admin.setup_list_modal(field_dialog_{{ id }});
            }
        });
    };

    // handle the post data
    var field_dialog_form_action_{{ id }} = function(event) {

        var element = jQuery(this);

        // return if the link is an anchor inside the same page
        if (
            this.nodeName === 'A'
            && (
                element.attr('href').length === 0
                || element.attr('href')[0] === '#'
                || element.attr('href').substr(0, 11) === 'javascript:'
            )
        ) {
            Admin.log('[{{ id }}|field_dialog_form_action] element is an anchor or a script, skipping action', this);
            return;
        }

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[{{ id }}|field_dialog_form_action] action catch', this);

        initialize_popup_{{ id }}();

        if (this.nodeName == 'FORM') {
            var url  = element.attr('action');
            var type = element.attr('method');
        } else if (this.nodeName == 'A') {
            var url  = element.attr('href');
            var type = 'GET';
        } else {
            alert('unexpected element : @' + this.nodeName + '@');
            return;
        }

        if (element.hasClass('sonata-ba-action')) {
            Admin.log('[{{ id }}|field_dialog_form_action] reserved action stop catch all events');
            return;
        }

        var data = {
            _xml_http_request: true
        }

        var form = jQuery(this);

        Admin.log('[{{ id }}|field_dialog_form_action] execute ajax call');

        var oldErrorMessages = jQuery(field_dialog_content_{{ id }}).find('div.alert-danger');
        // Remove old error messages.
        if (oldErrorMessages.length > 0) {
          oldErrorMessages.remove();
        }

        // the ajax post
        jQuery(form).ajaxSubmit({
            url: url,
            type: type,
            headers: {
                Accept: 'application/json'
            },
            data: data,
            success: function(data) {
                Admin.log('[{{ id }}|field_dialog_form_action] ajax success');

                // if the crud action return ok, then the element has been added
                // so the widget container must be refresh with the last option available
                if (typeof data != 'string' && data.result == 'ok') {
                    field_dialog_{{ id }}.modal('hide');

                    {% if sonata_admin.edit == 'list' %}
                        {#
                           in this case we update the hidden input, and call the change event to
                           retrieve the post information
                        #}
                        jQuery('#{{ id }}').val(data.objectId);
                        jQuery('#{{ id }}').change();

                    {% else %}

                        // reload the form element
                        jQuery('#field_widget_{{ id }}').closest('form').ajaxSubmit({
                            url: '{{ path('sonata_admin_retrieve_form_element', {
                                '_sonata_admin': sonata_admin.admin.root.baseCodeRoute,
                                'elementId': id,
                                'subclass': sonata_admin.admin.hasActiveSubClass() ? sonata_admin.admin.getActiveSubclassCode() : null,
                                'objectId': sonata_admin.admin.root.id(sonata_admin.admin.root.subject),
                                'uniqid': sonata_admin.admin.root.uniqid,
                            } + (
                                sonata_admin.admin.root.hasRequest()
                                ? sonata_admin.admin.root.request.attributes.get('_route_params', {})
                                : {}
                            ) + app.request.query.all|default({})
                            ) }}',
                            data: {_xml_http_request: true },
                            dataType: 'html',
                            type: 'POST',
                            success: function(html) {
                                jQuery('#field_container_{{ id }}').replaceWith(html);
                                var newElement = jQuery('#{{ id }} [value=\"' + data.objectId + '\"]');
                                if (newElement.is(\"input\")) {
                                    newElement.attr('checked', 'checked');
                                } else {
                                    newElement.attr('selected', 'selected');
                                }

                                jQuery('#field_container_{{ id }}').trigger('sonata-admin-append-form-element');
                            }
                        });

                    {% endif %}

                    return;
                }

                // otherwise, display form error
                field_dialog_content_{{ id }}.html(data);

                Admin.shared_setup(field_dialog_{{ id }});

                // reattach the event
                jQuery('form', field_dialog_{{ id }}).submit(field_dialog_form_action_{{ id }});
            },
            error: function(xhr) {
                var content = '';

                if ('application/json' === xhr.getResponseHeader('Content-Type')) {
                    var jsonContent = JSON.parse(xhr.responseText);

                    if (jsonContent.title) {
                        content += '<div class=\"alert alert-danger alert-dismissable\">'
                            + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>'
                            + jsonContent.title
                            + '</div>';
                    }

                    if (!jsonContent.violations) {
                        return;
                    }

                    event.currentTarget.querySelectorAll('.help-block.sonata-ba-field-error-messages').forEach((element) => {
                        element.remove();
                    });

                    event.currentTarget.querySelectorAll('.has-error').forEach((element) => {
                        element.classList.remove('has-error');
                    });

                    event.currentTarget.querySelectorAll('button').forEach((element) => {
                        element.removeAttribute('disabled');
                    });

                    jsonContent.violations.forEach((violation) => {
                        const field = event.currentTarget.querySelector(`[name=\"\${violation.propertyPath}\"]`);

                        if (!field) {
                            content += '<div class=\"alert alert-danger alert-dismissable\">'
                                + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>'
                                + violation.title
                                + '</div>';

                            return;
                        }

                        const formGroup = field.closest('.form-group');

                        let errorList = formGroup.querySelector(
                            '.help-block.sonata-ba-field-error-messages .list-unstyled'
                        );

                        if (!errorList) {
                            const errorWrapper = document.createElement('div');
                            errorWrapper.classList.add('help-block');
                            errorWrapper.classList.add('sonata-ba-field-error-messages');

                            errorList = document.createElement('ul');
                            errorList.classList.add('list-unstyled');

                            formGroup.classList.add('has-error');

                            errorWrapper.appendChild(errorList);
                            formGroup.appendChild(errorWrapper);
                        }

                        const errorItem = document.createElement('li');
                        errorItem.innerHTML = `<i class=\"fas fa-exclamation-circle\" aria-hidden=\"true\"></i> \${violation.title}`;

                        errorList.appendChild(errorItem);
                    });
                } else {
                    content += xhr.responseText;
                }

                // Display the error.
                field_dialog_content_{{ id }}.prepend(content);

                // Reset the submit buttons.
                \$(form).find('button[type=\"submit\"]').removeAttr('disabled');
            }
        });

        return false;
    };

    var field_dialog_{{ id }}         = false;
    var field_dialog_content_{{ id }} = false;
    var field_dialog_title_{{ id }}   = false;

    function initialize_popup_{{ id }}() {
        // initialize component
        if (!field_dialog_{{ id }}) {
            field_dialog_{{ id }}         = jQuery(\"#field_dialog_{{ id }}\");
            field_dialog_content_{{ id }} = jQuery(\".modal-body\", \"#field_dialog_{{ id }}\");
            field_dialog_title_{{ id }}   = jQuery(\".modal-title\", \"#field_dialog_{{ id }}\");

            // move the dialog as a child of the root element, nested form breaks html ...
            jQuery(document.body).append(field_dialog_{{ id }});

            Admin.log('[{{ id }}|field_dialog] move dialog container as a document child');
        }
    }

    {#
        This code is used to define the \"add\" popup
    #}
    // this function initializes the popup
    // this can be only done this way as popup can be cascaded
    function start_field_dialog_form_add_{{ id }}(link) {

        // remove the html event
        link.onclick = null;

        initialize_popup_{{ id }}();

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_dialog_form_add_{{ id }})
            .trigger('click')
        ;

        return false;
    }

    {#
        This code is used to define the \"edit\" popup
    #}
    // this function initializes the popup
    // this can only be done this way as popup can be cascaded
    function start_field_dialog_form_edit_{{ id }}(link) {

        // remove the html event
        link.onclick = null;

        initialize_popup_{{ id }}();

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_dialog_form_edit_{{ id }})
            .trigger('click')
        ;

        return false;
    }

    if (field_dialog_{{ id }}) {
        Admin.shared_setup(field_dialog_{{ id }});
    }

    {% if sonata_admin.edit == 'list' %}
        {#
            This code is used to defined the \"list\" popup
        #}
        // this function initializes the popup
        // this can be only done this way as popup can be cascaded
        function start_field_dialog_form_list_{{ id }}(link) {

            link.onclick = null;

            initialize_popup_{{ id }}();

            // add the jQuery event to the a element
            jQuery(link)
                .click(field_dialog_form_list_{{ id }})
                .trigger('click')
            ;

            return false;
        }

        function remove_selected_element_{{ id }}(link) {

            link.onclick = null;

            jQuery(link)
                .click(field_remove_element_{{ id }})
                .trigger('click')
            ;

            return false;
        }

        function field_remove_element_{{ id }}(event) {
            event.preventDefault();

            if (jQuery('#{{ id }} option').get(0)) {
                jQuery('#{{ id }}').attr('selectedIndex', '-1').children(\"option:selected\").attr(\"selected\", false);
            }

            jQuery('#{{ id }}').val('');
            jQuery('#{{ id }}').trigger('change');

            return false;
        }
        {#
          attach onchange event on the input
        #}

        // update the label
        jQuery('#{{ id }}').on('change', function(event) {

            Admin.log('[{{ id }}|on:change] update the label');

            var objectId = jQuery(this).val();

            // Skip short object information call if object is missing.
            if (undefined === objectId || null === objectId || '' === objectId) {
                jQuery('#field_widget_{{ id }}').html('{{ 'short_object_description_placeholder'|trans({}, 'SonataAdminBundle') }}');

                {% if btn_edit %}
                    jQuery('#field_actions_{{ id }} a.btn-warning').addClass('hidden');
                {% endif %}

                return;
            }

            jQuery('#field_widget_{{ id }}').html(\"<span><img src=\\\"{{ asset('bundles/sonataadmin/images/ajax-loader.gif') }}\\\" style=\\\"vertical-align: middle; margin-right: 10px\\\"/>{{ 'loading_information'|trans([], 'SonataAdminBundle') }}</span>\");
            jQuery.ajax({
                type: 'GET',
                url: '{{ path('sonata_admin_short_object_information',{
                    '_sonata_admin': associationadmin.baseCodeRoute,
                    'objectId': 'OBJECT_ID',
                    'uniqid': associationadmin.uniqid,
                    'linkParameters': sonata_admin.field_description.option('link_parameters', {})
                } + (
                    associationadmin.hasRequest()
                    ? associationadmin.request.attributes.get('_route_params', {})
                    : {}
                ) + app.request.query.all|default({})
                )}}'.replace('OBJECT_ID', objectId),
                dataType: 'html',
                success: function(html) {
                    jQuery('#field_widget_{{ id }}').html(html);
                }
            });

            {% if btn_edit %}
                var edit_button_url = '{{
                    associationadmin.generateUrl('edit', {(associationadmin.idParameter) : 'OBJECT_ID'})
                }}'.replace('OBJECT_ID', objectId);

                jQuery('#field_actions_{{ id }} a.btn-warning').removeClass('hidden').attr('href', edit_button_url);
            {% endif %}
        });

    {% endif %}


</script>
<!-- / edit many association -->

{% endautoescape %}
", "@SonataAdmin/CRUD/Association/edit_many_script.html.twig", "/home/aleksandar/Desktop/Site/payment-demo/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/Association/edit_many_script.html.twig");
    }
}
