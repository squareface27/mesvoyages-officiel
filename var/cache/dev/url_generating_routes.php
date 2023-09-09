<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'accueil.index' => [[], ['_controller' => 'App\\Controller\\AccueilController::index'], [], [['text', '/']], [], [], []],
    'app_basefront' => [[], ['_controller' => 'App\\Controller\\BasefrontController::index'], [], [['text', '/basefront']], [], [], []],
    'voyages' => [[], ['_controller' => 'App\\Controller\\VoyagesController::index'], [], [['text', '/voyages']], [], [], []],
    'voyages.sort' => [['champ', 'ordre'], ['_controller' => 'App\\Controller\\VoyagesController::sort'], [], [['variable', '/', '[^/]++', 'ordre', true], ['variable', '/', '[^/]++', 'champ', true], ['text', '/voyages/tri']], [], [], []],
    'voyages.findallequal' => [['champ'], ['_controller' => 'App\\Controller\\VoyagesController::findAllEqual'], [], [['variable', '/', '[^/]++', 'champ', true], ['text', '/voyages/recherche']], [], [], []],
    'voyages.showone' => [['id'], ['_controller' => 'App\\Controller\\VoyagesController::showOne'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/voyages/voyage']], [], [], []],
    'admin.voyages' => [[], ['_controller' => 'App\\Controller\\admin\\AdminVoyagesController::index'], [], [['text', '/admin']], [], [], []],
    'admin.voyage.suppr' => [['id'], ['_controller' => 'App\\Controller\\admin\\AdminVoyagesController::suppr'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/suppr']], [], [], []],
    'admin.voyage.edit' => [['id'], ['_controller' => 'App\\Controller\\admin\\AdminVoyagesController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/edit']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
];
