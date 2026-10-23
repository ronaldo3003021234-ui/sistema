<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
<<<<<<< HEAD
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
=======
$routes->get('/', 'Home::index');
>>>>>>> 7c970552b8bc04963785957c1b9755aef21c4128
