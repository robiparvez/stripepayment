<?php

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function ()
{
	return view('test');
});

Route::group(['prefix' => 'subscription'], function ()
{
    Route::get('/', [
        'as'   => 'subscription',
        'uses' => 'SubscriptionController@getIndex',

    ]);
});














// return view('test');
// return Config::get('services.stripe.secret');
// return Hash::make('secret');
// return view('welcome');
// return var_dump(Auth::check());