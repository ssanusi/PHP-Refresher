<?php

return [
    'database' => [
        'name' => 'tododb',
        'username' => 'root',
        'password' => 'secret@mysql',
         'connection' => 'mysql:host=127.0.0.1' ,
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ]
    ]
];
