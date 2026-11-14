<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('/home', 'ConteudoController::index');
$routes->get('/contato', 'ConteudoController::contato');

// Rotas padrão do CodeIgniter Shield
service('auth')->routes($routes);

// Rotas protegidas públicas / gerais por sessão (se ainda usar)
$routes->group('', ['filter' => 'session'], static function ($routes) {
    $routes->get('conteudos', 'ConteudoController::listar');
    $routes->get('conteudos/editar/(:num)', 'ConteudoController::editar/$1');
    $routes->post('conteudos/atualizar/(:num)', 'ConteudoController::atualizar/$1');
});

// Painel administrativo: exige login e grupo admin
$routes->get('admin', 'Admin\Painel::index', [
    'filter' => ['session', 'group:admin'],
]);

// Rotas administrativas de Conteúdos (ligadas ao Admin\Painel)
$routes->group('admin', ['filter' => ['session', 'group:admin']], static function ($routes) {
    $routes->get('conteudos', 'Admin\Painel::conteudos');
    $routes->get('conteudos/editar/(:num)', 'Admin\Painel::editar/$1');
    $routes->post('conteudos/atualizar/(:num)', 'Admin\Painel::atualizar/$1');
});

// Logout: aceita apenas usuários autenticados
$routes->post('admin/sair', 'Admin\Painel::logout', [
    'filter' => 'session',
]);