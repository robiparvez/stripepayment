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
    Route::group(['before' => ['middleware' => 'notsubscribed']], function ()
    {
        Route::get('/', [
            'as'   => 'subscription',
            'uses' => 'SubscriptionController@getIndex',

        ]);

        Route::get('join', [
            'as'   => 'subscription-join',
            'uses' => 'SubscriptionController@getJoin',
        ]);

        Route::post('join', [
            'before' => 'csrf',
            'uses'   => 'SubscriptionController@postJoin',
        ]);
    });

});

// return view('test');
// return Config::get('services.stripe.secret');
// return Hash::make('secret');
// return view('welcome');
// return var_dump(Auth::check());