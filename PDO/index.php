<?php

$query = require 'bootstrap.php';
require 'Todo.php';

$todos = $query->selectAll('todos');


require 'index.view.php';