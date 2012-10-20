<?php
require('lib/php_error.php');
require('app/Templates.php');
require('app/Routes.php');

$routes = new Routes();

$conf = json_decode(file_get_contents('conf/config.json'), true);
$env = $conf['system']['environment'];

if ($env == 'development')
{
    \php_error\reportErrors();
}

if (!(isset($_REQUEST['page'])) && $_REQUEST['page'] == null)
{
    Template::render_to_response('index', array(
        'name' => 'denny'
    ));
} else
{
    $templateParams = array();

    foreach ($_REQUEST as $key => $value)
    {
        if ($key != 'page')
        {
            $templateParams[$key] = $value;
        }
    }

    Template::render_to_response($_REQUEST['page'], $templateParams);
}