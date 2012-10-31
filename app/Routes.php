<?php
require_once(dirname(__FILE__) . '/Views.php');

class Routes
{
    private $routes;

    function __construct()
    {
        $this->routes = array();
    }

    public function addRouteSimple($route)
    {
        $this->routes[$route] = $route;
    }

    public function addRoute($route, $viewName)
    {
        $this->routes[$route] = $viewName;
    }

    public function callView($route, $request=array())
    {
        if (array_key_exists($route, $this->routes))
        {
            call_user_func(array('Views', $this->routes[$route]), $request);
        } else
        {
            // TODO: Implement actual errors
            echo("lol that view doesn't exist");
        }
    }
}
