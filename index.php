<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/8
 * Time: 11:55
 */

//入口文件
/**
 * 定义系统常量
 * 载入框架公共方法
 * 载入框架运行文件
 */
//根目录
define('FRAMEWORK', __DIR__);

//框架核心文件
define('CORE', FRAMEWORK . '/core');

//项目目录
define('APP_PATH', FRAMEWORK . '/app');

//模块
define('MODULE', 'app');

//debug模式
define('APP_DEBUG', true);
//$debugValue = APP_DEBUG === true ? 'On' : 'Off';
//ini_set('display_errors', $debugValue);
require 'vendor/autoload.php';
if (APP_DEBUG) {
    $whoops = new\Whoops\Run();
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler());
    $whoops->register();

}
//加载公共函数库
include CORE . '/common/functions.php';

include CORE . '/framework.php';

spl_autoload_register('\core\framework::load');

\core\framework::run();





