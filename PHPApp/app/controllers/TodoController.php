<?php

namespace App\Controllers;

use App\core\App;

class TodoController
{

    public function index()
    {
        try {
            $todos = App::get('database')->selectAll('todos');
        } catch (Exception $e) {
            die($e->getMessage());
        }
        return view('todos', compact('todos'));
    }

    public function create()
    {
        try {
            App::get('database')->insert('todos', ['description' => $_POST['description'], 'completed' => boolval($_POST['completed'])]);
        } catch (Exception $e) {
            die($e->getMessage());
        }

        return redirect('todo');
    }

}