<?php

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::get('/', function ()
{
    // return Config::get('services.stripe.secret');
    // return Hash::make('secret');

    return view('welcome');

});

