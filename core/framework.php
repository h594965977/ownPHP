<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/8
 * Time: 13:21
 */

namespace core;

use core\lib\log;
use core\lib\route;

class framework
{
    static public $classMap = [];

    /**
     * @throws \Exception
     */
    static public function run()
    {
        log::init();
        $route = new route();
        $action = $route->action;
        $controller = $route->controller;
        $controllerPath = APP_PATH . '/' . 'controller' . '/' . $controller . 'Controller.php';
        $controllerClass = '\\' . MODULE . '\Controller\\' . $controller . 'Controller';
        if (is_file($controllerPath)) {
            include $controllerPath;
            $class = new $controllerClass;
            $class->$action();
        } else {
            throw new \Exception('zhaobudao');
        }
    }

    /**
     * @param $className
     * @return bool
     */
    static public function load($className)
    {
        if (isset($classMap[$className])) {
            //TODO ?????
            return true;
        } else {
            $className = str_replace('\\', '/', $className);
            $file = FRAMEWORK . '/' . $className . '.php';
            if (is_file($file)) {
                include $file;
                //require FRAMEWORK . '/' . 'vendor/autoload.php';
                self::$classMap[$className] = $className;
            } else {
                return false;
            }
        }
    }
}

