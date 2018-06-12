<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/9
 * Time: 15:49
 */

namespace App\Controller;

use core\lib\Controller;
use core\lib\drive\log\redis;
use core\lib\Model;

class TestController extends Controller
{
    public function index()
    {
        //$model = new Model();
       // $a = $model->query('select * from test');
        $redis = new Redis();

        p($redis->get('hello'));
        //获取一个字符串的值
        //echo $redis->get('cat'); // 111
        //p($redis->ping());
        //$redis = new redis();
        //$redis->connect('127.0.0.1', 2379);
       // p($redis);
        //$this->assign('a', 'hello world!');
        phpinfo();
        $this->display();
    }
}