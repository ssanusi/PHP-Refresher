<?php


$router = new Router();

$router->get('', 'controllers/index.php' );
$router->get('about', 'controllers/about.php' );
$router->get('contact', 'controllers/contact.php' );
$router->post('todo', 'controllers/add-todo.php' );



