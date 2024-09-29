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
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/callback' => [[['_route' => 'handle_callback', '_controller' => 'App\\Controller\\CallbackController::handleCallback'], null, ['POST' => 0], null, false, false, null]],
        '/' => [[['_route' => 'payment_form', '_controller' => 'App\\Controller\\InvoiceController::showPaymentForm'], null, null, null, false, false, null]],
        '/invoice' => [[['_route' => 'handle_invoice', '_controller' => 'App\\Controller\\InvoiceController::handleInvoice'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|core/get\\-short\\-object\\-description(?:\\.(html|json))?(*:266)'
                    .'|app/(?'
                        .'|callback/([^/]++)/(?'
                            .'|edit(*:306)'
                            .'|delete(*:320)'
                            .'|show(*:332)'
                        .')'
                        .'|invoice/([^/]++)/(?'
                            .'|edit(*:365)'
                            .'|delete(*:379)'
                            .'|show(*:391)'
                        .')'
                    .')'
                .')'
                .'|/callback/generate\\-curl/invoice/([^/]++)(*:443)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        266 => [[['_route' => 'sonata_admin_short_object_information', '_controller' => 'sonata.admin.action.get_short_object_description', '_format' => 'html'], ['_format'], null, null, false, true, null]],
        306 => [[['_route' => 'admin_app_callback_edit', '_controller' => 'sonata.admin.controller.crud::editAction', '_sonata_admin' => 'admin.callback', '_sonata_name' => 'admin_app_callback_edit'], ['id'], null, null, false, false, null]],
        320 => [[['_route' => 'admin_app_callback_delete', '_controller' => 'sonata.admin.controller.crud::deleteAction', '_sonata_admin' => 'admin.callback', '_sonata_name' => 'admin_app_callback_delete'], ['id'], null, null, false, false, null]],
        332 => [[['_route' => 'admin_app_callback_show', '_controller' => 'sonata.admin.controller.crud::showAction', '_sonata_admin' => 'admin.callback', '_sonata_name' => 'admin_app_callback_show'], ['id'], null, null, false, false, null]],
        365 => [[['_route' => 'admin_app_invoice_edit', '_controller' => 'sonata.admin.controller.crud::editAction', '_sonata_admin' => 'admin.invoice', '_sonata_name' => 'admin_app_invoice_edit'], ['id'], null, null, false, false, null]],
        379 => [[['_route' => 'admin_app_invoice_delete', '_controller' => 'sonata.admin.controller.crud::deleteAction', '_sonata_admin' => 'admin.invoice', '_sonata_name' => 'admin_app_invoice_delete'], ['id'], null, null, false, false, null]],
        391 => [[['_route' => 'admin_app_invoice_show', '_controller' => 'sonata.admin.controller.crud::showAction', '_sonata_admin' => 'admin.invoice', '_sonata_name' => 'admin_app_invoice_show'], ['id'], null, null, false, false, null]],
        443 => [
            [['_route' => 'callback_generate_curl', '_controller' => 'App\\Controller\\CallbackController::getInvoiceSignature'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
