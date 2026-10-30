<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
// Define a página principal do site
$routes->get('/', 'ConteudoController::index');

// Define a rota para o menu 'Home'
$routes->get('home', 'ConteudoController::index');

// Define a rota para o menu 'Contato'
$routes->get('contato', 'ConteudoController::contato');

// Listagem, formulário de edição e atualização
$routes->get('conteudos', 'ConteudoController::listar');
$routes->get('conteudos/editar/(:num)', 'ConteudoController::editar/$1');
$routes->post('conteudos/atualizar/(:num)', 'ConteudoController::atualizar/$1');
