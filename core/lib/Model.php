<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/9
 * Time: 23:08
 */

namespace core\lib;

//class Model extends \PDO
//{
//    /**
//     * model constructor.
//     */
//    public $con;
//
//    public function __construct()
//    {
//        try {
//            $dataBaseConf = config::get('database');
//            parent::__construct($dataBaseConf['DSN'], $dataBaseConf['USERNAME'], $dataBaseConf['PASSWORD'], $dataBaseConf['OPTIONS']);
//        } catch (\PDOException $exception) {
//            echo 'lianjieshibai';
//            $exception->getMessage();
//        }
//    }
//}

use Medoo\Medoo;

class Model extends medoo
{
    public function __construct($options = null)
    {
        try {
            $options = config::get('database');
            parent::__construct($options);
        } catch (\PDOException $e) {
            //...
        }
    }
}