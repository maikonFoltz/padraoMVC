<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');

$router->get('/novo', 'UsuariosController@adicionar');
$router->post('/novo', 'UsuariosController@adicionarAction');

