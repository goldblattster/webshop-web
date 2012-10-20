<?php
require(dirname(__FILE__) . '/Templates.php');

class Views
{
    public static function index($request)
    {
        Template::render_to_response('index', array(
            'name' => 'Denny'
        ));
    }
}
