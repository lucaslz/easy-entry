<?php
return [
    'settings' => [
        //coloque false em producao
        'displayErrorDetails' => true,
        // Permitir que o web server content-length header
        'addContentLengthHeader' => false,

        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/App/Views/',
            // 'template_path_cache' => __DIR__ . '/App/ViewsCache/'
            'template_path_cache' => false            
        ],
        'db' => [
            'driver' => 'mysql',
            'host' => '192.168.33.10',
            'database' => 'easyentry',
            'username' => 'homestead',
            'password' => 'secret',
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => ''
        ],
        'secretKey' => 'jaf92yu8ufahnu9yrth0398yhuirgh3789y498yhui9'
    ],
];
