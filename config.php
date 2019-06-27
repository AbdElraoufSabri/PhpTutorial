<?php

return [
    'database' => [
        'name' => 'mytodo',
        'username' => 'root',
        'password' => 'root',
        'db_type' => 'mysql',
        'db_host' => '127.0.0.1',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ]
    ]
];
