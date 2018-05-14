<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/10
 * Time: 11:05
 */

namespace core\lib;

class config
{
    /**
     * @param $fileName
     * @param $configItem
     * @return mixed
     * @throws \Exception
     */
    static public function get($fileName, $configItem = null)
    {
        if (empty($fileName)) {
            throw new \Exception('queshaocanshu');
        } else {
            $configPath = CORE . '/config/' . $fileName . '.php';
            if (is_file($configPath)) {
                $config = include $configPath;
                return null === $configItem ? $config : $config[$configItem];
            } else {
                throw new \Exception('wenjianlujingcuowu');
            }
        }
    }

}