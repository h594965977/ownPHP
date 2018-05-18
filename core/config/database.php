<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/10
 * Time: 11:30
 */
//return [
//    'DSN' => 'mysql:host=127.0.0.1;dbname=homestead',
//    'USERNAME' => 'homestead',
//    'PASSWORD' => 'secret',
//    'OPTIONS' => [
//        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION, //默认是PDO::ERRMODE_SILENT, 0, (忽略错误模式)
//        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC, // 默认是PDO::FETCH_BOTH, 4
//    ],
//];
return [
    'database_type' => 'mysql',
    'database_name' => 'homestead',
    'server' => 'localhost',
    'username' => 'homestead',
    'password' => 'secret',
    'charset' => 'utf8'
];