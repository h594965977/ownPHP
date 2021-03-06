<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/10
 * Time: 11:39
 */

namespace core\lib;


use Twig_Environment;
use Twig_Loader_Filesystem;

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
            //extract($this->assign);
            //include $viewPath;
            $loader = new Twig_Loader_Filesystem(APP_PATH . '/view');
            $twig = new Twig_Environment($loader, array(
                'cache' => FRAMEWORK . '/log',
            ));
            $template = $twig->load($view . '.html');
            $template->display($this->assign ? $this->assign : []);
        } else {
            throw new \Exception('ZHAOBUDAO');
        }
    }
}