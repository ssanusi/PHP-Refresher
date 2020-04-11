<?php

$task = [
    'title' => 'Do assignment',
    'assigned_to' => 'sanusi',
    'due' => date("Y-m-d", time()),
    'status' => true
];

require 'index.view.php';