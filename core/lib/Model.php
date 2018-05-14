<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/9
 * Time: 23:08
 */

namespace core\lib;

class Model extends \PDO
{
    /**
     * model constructor.
     */
    public $con;

    public function __construct()
    {
        $dataBaseConf = config::get('database');
//        $this->con = mysqli_connect('127.0.0.1', 'homestead', 'secret', 'homestead');
//        //$this->con=new mysqli('127.0.0.1', 'homestead', 'secret', 'homestead');
//        $b = $this->con->query('select * from test');
//        p($b->fetch_all());
        try {
            $conn = new \PDO("mysql:host = 127.0.0.1;dbname = homestead", 'homestead', 'secret');
            p($conn);
            $a=$conn->query('select * from test');
            p($a);
            //parent::__construct($dataBaseConf['DSN'], $dataBaseConf['USERNAME'], $dataBaseConf['PASSWORD']);
        } catch (\PDOException $exception) {
            $exception->getMessage();
        }
    }
}