<?php
require('lib/php_error.php');

$conf = json_decode(file_get_contents('conf/config.json', TRUE));
$env = $conf['system']['environment'];

if ($env == 'development')
{
    \php_error\reportErrors();
}

if (!(isset($_REQUEST['page'])) && $_REQUEST['page'] != null)
{
    View::render_to_response('home', array(
        'name' => 'denny'
    ));
} else
{
    $viewParams = array();

    foreach ($_REQUEST as $key => $value)
    {
        if ($key != 'page')
        {
            $viewParams[$key] = $value;
        }
    }

    View::render_to_response($_REQUEST['page'], $viewParams);
}