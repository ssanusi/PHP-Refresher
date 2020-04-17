<?php


$todos = $app['database']->selectAll('todos');


require 'views/index.view.php';