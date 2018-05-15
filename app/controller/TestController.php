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
        $sql = 'select * from `test`';
        $a = $model->query($sql);
        p($a->fetchAll());
        //$this->assign('');
        $this->display();
    }
}