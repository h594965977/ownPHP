<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/15
 * Time: 23:48
 */

namespace core\lib\drive\log;

use core\lib\config;

class file
{
    public $logPath;
    public $logName;
    public $logExt;

    public function __construct()
    {
        $logConf = config::get('log', 'file');
        $this->logPath = $logConf['PATH'];
        $this->logName = $logConf['NAME'];
        $this->logExt = $logConf['EXT'];
    }

    public function log($message)
    {
        $fileName = $this->logPath . '/' . $this->logName . $this->logExt;
        if (!is_dir($this->logPath)) {
            mkdir($this->logPath, 0777, true);
        }
        file_put_contents($fileName, json_encode($message).PHP_EOL, FILE_APPEND);
    }
}