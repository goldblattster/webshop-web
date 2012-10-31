<?php
require_once(dirname(__FILE__) . '/lib/php_error/php_error.php');

require_once(dirname(__FILE__) . '/app/Routes.php');
require_once(dirname(__FILE__) . '/app/Templates.php');

/*
 * ROUTE DEFINITIONS
 */
$routes = new Routes();
$routes->addRouteSimple('index');
$routes->addRouteSimple('login');
$routes->addRouteSimple('register');

$conf = json_decode(file_get_contents('conf/config.json'), true);
$env = $conf['system']['environment'];

if ($env == 'development')
{
    \php_error\reportErrors();
}

if (!(isset($_REQUEST['page'])) && $_REQUEST['page'] == null)
{
    $routes->callView('index', $_REQUEST);
} else
{
    $routes->callView($_REQUEST['page'], $_REQUEST);
}
