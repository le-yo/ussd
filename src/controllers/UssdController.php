<?php namespace Leyo\Ussd\Controllers;


class UssdController extends \BaseController
{
    public function index()
    {
        return \View::make('ussd::create')->with('route_name','This is called from ussd controller');
    }
}