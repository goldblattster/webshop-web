<?php
require_once(dirname(__FILE__) . '/Templates.php');

class Views
{
    public static function index($request)
    {
        Template::render_to_response('index', array(
            'name' => 'Denny'
        ));
    }

    public static function login($request)
    {
        Template::render_to_response('login', array(

        ));
    }

    public static function register($request)
    {
        Template::render_to_response('register', array(

        ));
    }
}
