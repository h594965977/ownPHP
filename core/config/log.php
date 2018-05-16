<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/15
 * Time: 23:54
 */
return [
    'file' => [
        'DRIVE' => 'file',
        'PATH' => FRAMEWORK . '/log/' . date('YmdH'),
        'NAME' => 'log',
        'EXT' => '.php'
    ],
    'mysql' => [
        'DRIVE' => 'MYSQL',
        'HOST' => '',
        'USERNAME' => '',
        'PASSWORD' => '',
    ],
    'redis' => [
        'DRIVE' => 'REDIS',
        'HOST' => '',
        'USERNAME' => '',
        'PASSWORD' => '',
    ],
];
