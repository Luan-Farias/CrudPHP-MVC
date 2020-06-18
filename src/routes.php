<?php

use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/new', 'UsersControllers@create');
$router->post('/new', 'UsersControllers@createAction');
$router->get('/users/{id}/edit', 'UsersControllers@edit');
$router->post('/users/{id}/edit', 'UsersControllers@editAction');
$router->get('/users/{id}/delete', 'UsersControllers@delete');