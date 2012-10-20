<?php
require_once(dirname(__FILE__) . '/../lib/smarty/Smarty.class.php');

class Template extends Smarty
{
    function __construct()
    {
        parent::__construct();

        $this->setTemplateDir(dirname(__FILE__) . '/templates');
        $this->setCompileDir(dirname(__FILE__) . '/templates/compiled');
        $this->setConfigDir(dirname(__FILE__) . '/../conf');
        $this->setCacheDir(dirname(__FILE__) . '/cache');

        $this->caching = Smarty::CACHING_LIFETIME_CURRENT;
        $this->assign('app_name', 'WebShop');
    }

    public static function render_to_response($templateName, $params)
    {
        $template = new Template();
        $templateName = str_replace('#', '/', $templateName);

        foreach ($params as $key => $value)
        {
            $template->assign($key, $value);
        }

        $template->display($templateName . '.tpl');
    }

    public static function get_current_page(/*$templateName*/)
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
