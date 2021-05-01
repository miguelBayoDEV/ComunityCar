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
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'main', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/buscador' => [[['_route' => 'buscador', '_controller' => 'App\\Controller\\MainController::buscador'], null, null, null, false, false, null]],
        '/perfil' => [[['_route' => 'perfil', '_controller' => 'App\\Controller\\MainController::perfil'], null, null, null, false, false, null]],
        '/modificar' => [[['_route' => 'modificar', '_controller' => 'App\\Controller\\MainController::modificar'], null, null, null, false, false, null]],
        '/message' => [
            [['_route' => 'message', '_controller' => 'App\\Controller\\MainController::message'], null, null, null, false, false, null],
            [['_route' => 'message_index', '_controller' => 'App\\Controller\\MessageController::index'], null, ['GET' => 0], null, true, false, null],
        ],
        '/messagesReportados' => [[['_route' => 'messagesReportados', '_controller' => 'App\\Controller\\MainController::messagesReportados'], null, null, null, false, false, null]],
        '/eliminarMensajeVehiculo' => [[['_route' => 'eliminarMensajeVehiculo', '_controller' => 'App\\Controller\\MainController::eliminarMensajeVehiculo'], null, null, null, false, false, null]],
        '/comprarVehiculo' => [[['_route' => 'comprarVehiculo', '_controller' => 'App\\Controller\\MainController::comprarVehiculo'], null, null, null, false, false, null]],
        '/eliminarVehiculoBuscador' => [[['_route' => 'eliminarVehiculoBuscador', '_controller' => 'App\\Controller\\MainController::eliminarVehiculoBuscador'], null, null, null, false, false, null]],
        '/addVehiculoBuscador' => [[['_route' => 'addVehiculoBuscador', '_controller' => 'App\\Controller\\MainController::addVehiculoBuscador'], null, null, null, false, false, null]],
        '/usuarios' => [[['_route' => 'usuarios', '_controller' => 'App\\Controller\\MainController::usuarios'], null, null, null, false, false, null]],
        '/exportarUsuarios' => [[['_route' => 'exportarUsuarios', '_controller' => 'App\\Controller\\MainController::exportarUsuarios'], null, null, null, false, false, null]],
        '/exportarMensajesReportados' => [[['_route' => 'exportarMensajesReportados', '_controller' => 'App\\Controller\\MainController::exportarMensajesReportados'], null, null, null, false, false, null]],
        '/exportarVehiculosReportados' => [[['_route' => 'exportarVehiculosReportados', '_controller' => 'App\\Controller\\MainController::exportarVehiculosReportados'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/respuesta' => [[['_route' => 'respuesta_index', '_controller' => 'App\\Controller\\RespuestaController::index'], null, ['GET' => 0], null, true, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/vehiculo' => [[['_route' => 'vehiculo_index', '_controller' => 'App\\Controller\\VehiculoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/vehiculo/new' => [[['_route' => 'vehiculo_new', '_controller' => 'App\\Controller\\VehiculoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/message/(?'
                    .'|new/([^/]+)&([^/]+)&([^/]++)(*:209)'
                    .'|([^/]++)(?'
                        .'|(*:228)'
                        .'|/edit(*:241)'
                        .'|(*:249)'
                    .')'
                .')'
                .'|/respuesta/(?'
                    .'|new/([^/]++)(*:285)'
                    .'|([^/]++)(?'
                        .'|(*:304)'
                        .'|/edit(*:317)'
                        .'|(*:325)'
                    .')'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:352)'
                    .'|/edit(*:365)'
                    .'|(*:373)'
                .')'
                .'|/vehiculo/([^/]++)(?'
                    .'|(*:403)'
                    .'|/edit(*:416)'
                    .'|(*:424)'
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
        209 => [[['_route' => 'message_new', '_controller' => 'App\\Controller\\MessageController::new'], ['receptor', 'emisor', 'id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        228 => [[['_route' => 'message_show', '_controller' => 'App\\Controller\\MessageController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        241 => [[['_route' => 'message_edit', '_controller' => 'App\\Controller\\MessageController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        249 => [[['_route' => 'message_delete', '_controller' => 'App\\Controller\\MessageController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        285 => [[['_route' => 'respuesta_new', '_controller' => 'App\\Controller\\RespuestaController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        304 => [[['_route' => 'respuesta_show', '_controller' => 'App\\Controller\\RespuestaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        317 => [[['_route' => 'respuesta_edit', '_controller' => 'App\\Controller\\RespuestaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        325 => [[['_route' => 'respuesta_delete', '_controller' => 'App\\Controller\\RespuestaController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        352 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        365 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        373 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        403 => [[['_route' => 'vehiculo_show', '_controller' => 'App\\Controller\\VehiculoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        416 => [[['_route' => 'vehiculo_edit', '_controller' => 'App\\Controller\\VehiculoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        424 => [
            [['_route' => 'vehiculo_delete', '_controller' => 'App\\Controller\\VehiculoController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
