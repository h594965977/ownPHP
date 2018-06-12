<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/15
 * Time: 23:49
 */

namespace core\lib\drive\log;

class redis
{
    public $redis;

    public function __construct()
    {
        try {
            $this->redis = new \Redis();
            $this->redis->connect('127.0.0.1', 6379);
        } catch (\Exception $exception) {
            $exception->getMessage();
        }
    }

    public function get($value)
    {
        return $this->redis->get($value);
    }
}