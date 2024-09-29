<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'sonata_admin_redirect', 'route' => 'sonata_admin_dashboard', 'permanent' => 'true', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction'], null, null, null, true, false, null]],
        '/admin/dashboard' => [[['_route' => 'sonata_admin_dashboard', '_controller' => 'sonata.admin.action.dashboard'], null, null, null, false, false, null]],
        '/admin/core/get-form-field-element' => [[['_route' => 'sonata_admin_retrieve_form_element', '_controller' => 'sonata.admin.action.retrieve_form_field_element'], null, null, null, false, false, null]],
        '/admin/core/append-form-field-element' => [[['_route' => 'sonata_admin_append_form_element', '_controller' => 'sonata.admin.action.append_form_field_element'], null, null, null, false, false, null]],
        '/admin/core/set-object-field-value' => [[['_route' => 'sonata_admin_set_object_field_value', '_controller' => 'sonata.admin.action.set_object_field_value'], null, null, null, false, false, null]],
        '/admin/search' => [[['_route' => 'sonata_admin_search', '_controller' => 'sonata.admin.action.search'], null, null, null, false, false, null]],
        '/admin/core/get-autocomplete-items' => [[['_route' => 'sonata_admin_retrieve_autocomplete_items', '_controller' => 'sonata.admin.action.retrieve_autocomplete_items'], null, null, null, false, false, null]],
        '/admin/app/callback/list' => [[['_route' => 'admin_app_callback_list', '_controller' => 'sonata.admin.controller.crud::listAction', '_sonata_admin' => 'admin.callback', '_sonata_name' => 'admin_app_callback_list'], null, null, null, false, false, null]],
        '/admin/app/callback/create' => [[['_route' => 'admin_app_callback_create', '_controller' => 'sonata.admin.controller.crud::createAction', '_sonata_admin' => 'admin.callback', '_sonata_name' => 'admin_app_callback_create'], null, null, null, false, false, null]],
        '/admin/app/callback/batch' => [[['_route' => 'admin_app_callback_batch', '_controller' => 'sonata.admin.controller.crud::batchAction', '_sonata_admin' => 'admin.callback', '_sonata_name' => 'admin_app_callback_batch'], null, null, null, false, false, null]],
        '/admin/app/callback/export' => [[['_route' => 'admin_app_callback_export', '_controller' => 'sonata.admin.controller.crud::exportAction', '_sonata_admin' => 'admin.callback', '_sonata_name' => 'admin_app_callback_export'], null, null, null, false, false, null]],
        '/admin/app/invoice/list' => [[['_route' => 'admin_app_invoice_list', '_controller' => 'sonata.admin.controller.crud::listAction', '_sonata_admin' => 'admin.invoice', '_sonata_name' => 'admin_app_invoice_list'], null, null, null, false, false, null]],
        '/admin/app/invoice/create' => [[['_route' => 'admin_app_invoice_create', '_controller' => 'sonata.admin.controller.crud::createAction', '_sonata_admin' => 'admin.invoice', '_sonata_name' => 'admin_app_invoice_create'], null, null, null, false, false, null]],
        '/admin/app/invoice/batch' => [[['_route' => 'admin_app_invoice_batch', '_controller' => 'sonata.admin.controller.crud::batchAction', '_sonata_admin' => 'admin.invoice', '_sonata_name' => 'admin_app_invoice_batch'], null, null, null, false, false, null]],
        '/admin/app/invoice/export' => [[['_route' => 'admin_app_invoice_export', '_controller' => 'sonata.admin.controller.crud::exportAction', '_sonata_admin' => 'admin.invoice', '_sonata_name' => 'admin_app_invoice_export'], null, null, null, false, false, null]],
        '/callback' => [[['_route' => 'handle_callback', '_controller' => 'App\\Controller\\CallbackController::handleCallback'], null, ['POST' => 0], null, false, false, null]],
        '/' => [[['_route' => 'payment_form', '_controller' => 'App\\Controller\\InvoiceController::showPaymentForm'], null, null, null, false, false, null]],
        '/invoice' => [[['_route' => 'handle_invoice', '_controller' => 'App\\Controller\\InvoiceController::handleInvoice'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/(?'
                    .'|core/get\\-short\\-object\\-description(?:\\.(html|json))?(*:71)'
                    .'|app/(?'
                        .'|callback/([^/]++)/(?'
                            .'|edit(*:110)'
                            .'|delete(*:124)'
                            .'|show(*:136)'
                        .')'
                        .'|invoice/([^/]++)/(?'
                            .'|edit(*:169)'
                            .'|delete(*:183)'
                            .'|show(*:195)'
                        .')'
                    .')'
                .')'
                .'|/invoice/signature/([^/]++)(*:233)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        71 => [[['_route' => 'sonata_admin_short_object_information', '_controller' => 'sonata.admin.action.get_short_object_description', '_format' => 'html'], ['_format'], null, null, false, true, null]],
        110 => [[['_route' => 'admin_app_callback_edit', '_controller' => 'sonata.admin.controller.crud::editAction', '_sonata_admin' => 'admin.callback', '_sonata_name' => 'admin_app_callback_edit'], ['id'], null, null, false, false, null]],
        124 => [[['_route' => 'admin_app_callback_delete', '_controller' => 'sonata.admin.controller.crud::deleteAction', '_sonata_admin' => 'admin.callback', '_sonata_name' => 'admin_app_callback_delete'], ['id'], null, null, false, false, null]],
        136 => [[['_route' => 'admin_app_callback_show', '_controller' => 'sonata.admin.controller.crud::showAction', '_sonata_admin' => 'admin.callback', '_sonata_name' => 'admin_app_callback_show'], ['id'], null, null, false, false, null]],
        169 => [[['_route' => 'admin_app_invoice_edit', '_controller' => 'sonata.admin.controller.crud::editAction', '_sonata_admin' => 'admin.invoice', '_sonata_name' => 'admin_app_invoice_edit'], ['id'], null, null, false, false, null]],
        183 => [[['_route' => 'admin_app_invoice_delete', '_controller' => 'sonata.admin.controller.crud::deleteAction', '_sonata_admin' => 'admin.invoice', '_sonata_name' => 'admin_app_invoice_delete'], ['id'], null, null, false, false, null]],
        195 => [[['_route' => 'admin_app_invoice_show', '_controller' => 'sonata.admin.controller.crud::showAction', '_sonata_admin' => 'admin.invoice', '_sonata_name' => 'admin_app_invoice_show'], ['id'], null, null, false, false, null]],
        233 => [
            [['_route' => 'invoice_signature', '_controller' => 'App\\Controller\\InvoiceController::getInvoiceSignature'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
