<?php
require(dirname(__FILE__) . '/Views.php');

class Routes
{
    private $routes;

    function __construct()
    {
        $this->routes = array();
    }

    public function addRoute($route, $viewName)
    {
        $route[$route] = 'Views::' . $viewName . '($request)';
    }

    public function callView($route, $request=array())
    {
        if (array_key_exists($route, $this->routes))
        {
            call_user_func($this->routes[$route]);
        }
    }
}
