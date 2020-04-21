<?php


try {
    $todos = App::get('database')->selectAll('todos');
} catch (Exception $e) {
    die($e->getMessage());
}


require 'views/index.view.php';