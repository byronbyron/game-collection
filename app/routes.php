<?php

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@home']);

Route::group(array('before' => 'auth'), function()
{
    Route::get('profile', function() {
        return "Welcome. Your email address is " . Auth::user()->email;
    });

    Route::resource('games', 'GamesController');

    Route::get('logout', 'SessionsController@destroy');
});

Route::get('login', 'SessionsController@create');
Route::resource('sessions', 'SessionsController', ['only' => ['create', 'store', 'destroy']]);
