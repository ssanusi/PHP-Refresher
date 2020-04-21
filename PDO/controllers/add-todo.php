<?php


try {
    App::get('database')->insert('todos', ['description' => $_POST['description'], 'completed' => boolval($_POST['completed'])]);
} catch (Exception $e) {
    die($e->getMessage());
}

header('Location: /');