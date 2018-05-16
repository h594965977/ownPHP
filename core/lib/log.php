<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/16
 * Time: 15:20
 */

namespace core\lib;

class log
{
    static public $class;

    static public function init()
    {
        $logConf = config::get('log', 'file');
        $class = 'core\lib\drive\log\\' . $logConf['DRIVE'];
        self::$class = new $class;
    }

    static public function getLog($massage)
    {
        self::$class->log($massage);
    }
}