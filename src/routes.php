<?php
use core\Router;

$router = new Router();


$router->get('/', 'HomeController@index');
$router->get('/novo', 'UsuariosController@add');
$router->post('/novo', 'UsuariosController@addAction');
// A rota que recebe o post pode ter o mesmo nome do get.

$router->get('/usuario/{id}/editar', 'UsuariosController@edit');
$router->post('/usuario/{id}/editar', 'UsuariosController@editAction');


$router->get('/usuario/{id}/excluir', 'UsuariosController@delete');