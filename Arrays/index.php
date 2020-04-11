<?php

$names  = ['Sanusi', 'Bashir', 'Fatima', 'Aisha'];

$person = [
    'name' => 'Sanusi',
    'age' => 31,
    'position' => 'Software Developer',
    'agee' => '33'
];

$person['company'] = 'Terabyte Broadband Limited';

unset($person['agee']);

var_dump($person);

$task = [
    'title' => 'Learn PHP',
    'due' => '11/04/2020',
    'assigned_to' => 'Sanusi',
    'completed' => false
];
//die(var_dump($persons));

require 'index.view.php';