<?php
require('../lib/Smarty.class.php');

class View extends Smarty
{
    function __construct()
    {
        parent::__construct();

        $this->setTemplateDir('templates');
        $this->setCompileDir('templates/compiled');
        $this->setConfigDir('conf');
        $this->setCacheDir('cache');

        $this->caching = Smarty::CACHING_LIFETIME_CURRENT;
        $this->assign('app_name', 'WebShop');
    }

    public static function render_to_response($viewName, $params)
    {
        $view = new View();
        $viewName = str_replace('#', '/', $viewName);

        foreach ($params as $key => $value)
        {
            $view->assign($key, $value);
        }

        $view->display($viewName + '.tpl');
    }

    public static function get_current_page(/*$viewName*/)
    {
        $url = 'http';
        if ($_SERVER['HTTPS'] == 'on')
        {
            $url .= 's://';
        } else
        {
            $url .= '://';
        }

        if ($_SERVER['SERVER_PORT'] != '80')
        {
            $url .= $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . $_SERVER['REQUEST_URI'];
        } else
        {
            $url .= $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
        }

        return $url;
    }
}
