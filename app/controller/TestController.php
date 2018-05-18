<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/9
 * Time: 15:49
 */

namespace App\Controller;

use core\lib\Controller;
use core\lib\Model;

class TestController extends Controller
{
    public function index()
    {
        $model = new Model();
        p($model);
        $this->assign('a', 'hello world!');
        $this->display();
    }
}