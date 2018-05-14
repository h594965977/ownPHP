<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/10
 * Time: 11:39
 */

namespace core\lib;


abstract class Controller
{
    public $assign;

    public function assign($name, $value)
    {
        $this->assign[$name] = $value;
    }

    /**
     * @param null $view
     * @throws \Exception
     */
    public function display($view = null)
    {
        if ($view == null) {
            $route = new route();
            $view = $route->action;
        }
        $viewPath = APP_PATH . '/view/' . $view . '.html';
        if (is_file($viewPath)) {
            include $viewPath;
        } else {
            throw new \Exception('ZHAOBUDAO');
        }
    }
}