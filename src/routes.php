<?php

Route::get('/ussd/create', function(){
    return View::make('ussd::create')->with('route_name','This is called from packageview');
});

Route::get('/ussdcontroller', 'Leyo\Ussd\Controllers\UssdController@index');
