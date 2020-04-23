<?php


use App\Core\Router;

$router = new Router();

$router->get('', 'PageController@home' );
$router->get('about', 'PageController@about' );
$router->get('contact', 'PageController@contact');
$router->get('todo', 'TodoController@index');
$router->post('todo', 'TodoController@create');



