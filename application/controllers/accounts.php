<?php
use Laravel\Redirect;

class Accounts_Controller extends Base_Controller
{
    public function action_index()
    {
        if (Auth::check())
        {
            return Redirect::to(home);
        } else
        {
            return Redirect::to('/accounts/login');
        }
    }

    public function action_login()
    {

    }


}