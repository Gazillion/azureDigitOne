<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/media/cache/resolve/(?'
                    .'|([A-z0-9_-]*)/rc/([^/]++)/(.+)(*:223)'
                    .'|([A-z0-9_-]*)/(.+)(*:249)'
                .')'
                .'|/(en|fr)/(?'
                    .'|admin(?'
                        .'|(*:278)'
                        .'|/(?'
                            .'|c(?'
                                .'|ontact(?'
                                    .'|(*:303)'
                                    .'|/(?'
                                        .'|read/([^/]++)(*:328)'
                                        .'|delete/([^/]++)(*:351)'
                                    .')'
                                .')'
                                .'|ategorie(?'
                                    .'|(*:372)'
                                    .'|/(?'
                                        .'|new(*:387)'
                                        .'|edit/([^/]++)(*:408)'
                                        .'|changevalidite/([^/]++)(*:439)'
                                        .'|delete/([^/]++)(*:462)'
                                        .'|groupaction(*:481)'
                                    .')'
                                .')'
                            .')'
                            .'|parametre/(?'
                                .'|FAQ(?'
                                    .'|(*:511)'
                                    .'|/(?'
                                        .'|new(*:526)'
                                        .'|changevalidite/([^/]++)(*:557)'
                                        .'|delete/([^/]++)(*:580)'
                                        .'|groupaction(*:599)'
                                    .')'
                                .')'
                                .'|generale(*:617)'
                            .')'
                            .'|user(?'
                                .'|/(?'
                                    .'|parametre/FAQ/([^/]++)(*:659)'
                                    .'|new(*:670)'
                                    .'|edit/([^/]++)(*:691)'
                                    .'|change(?'
                                        .'|validite/([^/]++)(*:725)'
                                        .'|Password(*:741)'
                                    .')'
                                    .'|delete/([^/]++)(*:765)'
                                    .'|groupaction(*:784)'
                                .')'
                                .'|(*:793)'
                            .')'
                            .'|blog(?'
                                .'|(*:809)'
                                .'|/(?'
                                    .'|new(*:824)'
                                    .'|edit/([^/]++)(*:845)'
                                    .'|changevalidite/([^/]++)(*:876)'
                                    .'|delete/([^/]++)(*:899)'
                                    .'|groupaction(*:918)'
                                    .'|historique(?'
                                        .'|/(?'
                                            .'|([^/]++)(*:951)'
                                            .'|undo/([^/]++)(*:972)'
                                            .'|oldpost/([^/]++)(*:996)'
                                        .')'
                                        .'|s(*:1006)'
                                    .')'
                                    .'|preview/([^/]++)(*:1032)'
                                .')'
                            .')'
                            .'|login(*:1048)'
                        .')'
                    .')'
                    .'|reset\\-password(?'
                        .'|(*:1077)'
                        .'|/(?'
                            .'|check\\-email(*:1102)'
                            .'|reset(?:/([^/]++))?(*:1130)'
                        .')'
                    .')'
                    .'|logout(*:1147)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        223 => [[['_route' => 'liip_imagine_filter_runtime', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter', 'hash', 'path'], ['GET' => 0], null, false, true, null]],
        249 => [[['_route' => 'liip_imagine_filter', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter', 'path'], ['GET' => 0], null, false, true, null]],
        278 => [[['_route' => 'app_admin_index', '_controller' => 'App\\Controller\\AdminController::index', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        303 => [[['_route' => 'app_admin_contacts', '_controller' => 'App\\Controller\\AppContactController::contacts', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        328 => [[['_route' => 'app_admin_read_contact', '_controller' => 'App\\Controller\\AppContactController::readContact', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        351 => [[['_route' => 'app_admin_delete_contact', '_controller' => 'App\\Controller\\AppContactController::deleteContact', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        372 => [[['_route' => 'app_admin_categories', '_controller' => 'App\\Controller\\CategorieController::users', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        387 => [[['_route' => 'app_admin_new_categorie', '_controller' => 'App\\Controller\\CategorieController::newCategorie', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        408 => [[['_route' => 'app_admin_edit_categorie', '_controller' => 'App\\Controller\\CategorieController::editCategorie', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        439 => [[['_route' => 'app_admin_changevalidite_categorie', '_controller' => 'App\\Controller\\CategorieController::activate', '_locale' => 'en'], ['_locale', 'id'], ['POST' => 0], null, false, true, null]],
        462 => [[['_route' => 'app_admin_delete_categorie', '_controller' => 'App\\Controller\\CategorieController::delete', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        481 => [[['_route' => 'app_admin_groupaction_categorie', '_controller' => 'App\\Controller\\CategorieController::groupAction', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        511 => [[['_route' => 'app_admin_faqs', '_controller' => 'App\\Controller\\AppFAQController::faqs', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        526 => [[['_route' => 'app_admin_new_faq', '_controller' => 'App\\Controller\\AppFAQController::newFAQ', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        557 => [[['_route' => 'app_admin_changevalidite_faq', '_controller' => 'App\\Controller\\AppFAQController::activate', '_locale' => 'en'], ['_locale', 'id'], ['POST' => 0], null, false, true, null]],
        580 => [[['_route' => 'app_admin_delete_faq', '_controller' => 'App\\Controller\\AppFAQController::delete', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        599 => [[['_route' => 'app_admin_groupaction_faq', '_controller' => 'App\\Controller\\AppFAQController::groupAction', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        617 => [[['_route' => 'app_admin_parametre_generale', '_controller' => 'App\\Controller\\ParamsController::parametres', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        659 => [[['_route' => 'app_admin_edit_faq', '_controller' => 'App\\Controller\\AppFAQController::editFAQ', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        670 => [[['_route' => 'app_admin_new_user', '_controller' => 'App\\Controller\\UserController::newUser', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        691 => [[['_route' => 'app_admin_edit_user', '_controller' => 'App\\Controller\\UserController::editUser', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        725 => [[['_route' => 'app_admin_changevalidite_user', '_controller' => 'App\\Controller\\UserController::activate', '_locale' => 'en'], ['_locale', 'id'], ['POST' => 0], null, false, true, null]],
        741 => [[['_route' => 'app_admin_changepswd', '_controller' => 'App\\Controller\\UserController::changePswd', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        765 => [[['_route' => 'app_admin_delete_user', '_controller' => 'App\\Controller\\UserController::delete', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        784 => [[['_route' => 'app_admin_groupaction_user', '_controller' => 'App\\Controller\\UserController::groupAction', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        793 => [[['_route' => 'app_admin_users', '_controller' => 'App\\Controller\\UserController::users', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        809 => [[['_route' => 'app_admin_blogPosts', '_controller' => 'App\\Controller\\BlogController::blogPosts', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        824 => [[['_route' => 'app_admin_new_blogPosts', '_controller' => 'App\\Controller\\BlogController::newBlogPost', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        845 => [[['_route' => 'app_admin_edit_blogPosts', '_controller' => 'App\\Controller\\BlogController::editBlogPost', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        876 => [[['_route' => 'app_admin_changevalidite_blogPost', '_controller' => 'App\\Controller\\BlogController::activate', '_locale' => 'en'], ['_locale', 'id'], ['POST' => 0], null, false, true, null]],
        899 => [[['_route' => 'app_admin_delete_blogPost', '_controller' => 'App\\Controller\\BlogController::delete', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        918 => [[['_route' => 'app_admin_groupaction_blogPost', '_controller' => 'App\\Controller\\BlogController::groupAction', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        951 => [[['_route' => 'app_admin_historique_blogPost', '_controller' => 'App\\Controller\\BlogController::historique', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        972 => [[['_route' => 'app_admin_historique_undo', '_controller' => 'App\\Controller\\BlogController::undo', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        996 => [[['_route' => 'app_admin_oldpost_blogPosts', '_controller' => 'App\\Controller\\BlogController::oldPost', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        1006 => [[['_route' => 'app_admin_allhistorique_blogPosts', '_controller' => 'App\\Controller\\BlogController::historiques', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1032 => [[['_route' => 'app_admin_preview_blogpost', '_controller' => 'App\\Controller\\BlogController::preview', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        1048 => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1077 => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1102 => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1130 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset', '_locale' => 'en'], ['_locale', 'token'], null, null, false, true, null]],
        1147 => [
            [['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout', '_locale' => 'en'], ['_locale'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
