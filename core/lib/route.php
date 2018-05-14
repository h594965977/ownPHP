<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/8
 * Time: 23:17
 */

namespace core\lib;

class route
{
    public $controller;
    public $action;

    public function __construct()
    {
        /**
         * 1 映射
         * 2 省略.php
         * 3 参数支持/分割
         */
        $path = $_SERVER['REQUEST_URI'];
        if (isset($path) && $path != '/') {
            $pathArr = explode('/', trim($path, '/'));
            $pathCount = count($pathArr);
            if (isset($pathArr)) {
                $this->controller = $pathArr[0];
                unset($pathArr[0]);
            }
            $this->action = isset($pathArr[1]) ? $pathArr[1] : config::get('route', 'ACTION');
            if (isset($pathArr[1])) {
                unset($pathArr[1]);
            }

            $i = 2;
            while ($i < $pathCount + 2) {
                if (isset($pathArr[$i + 1])) {
                    $_GET[$pathArr[$i]] = $pathArr[$i + 1];
                }
                $i += 2;
            }
        } else {
            $this->controller = config::get('route', 'CONTROLLER');
            $this->action = config::get('route', 'ACTION');
        }
    }
}