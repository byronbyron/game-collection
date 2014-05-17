<?php

# Home
Route::get('/', ['as' => 'home', 'uses' => 'PagesController@index']);

# Registration
Route::get('register', 'RegistrationController@create');
Route::post('/register', ['as' => 'register.store', 'uses' => 'RegisterController@store']);

# Authentication
Route::get('logout', ['as' => 'login', 'uses' => 'SessionsController@destroy']);
Route::get('login', ['as' => 'logout', 'uses' => 'SessionsController@create']);
Route::resource('sessions', 'SessionsController', ['only' => ['create', 'store', 'destroy']]);

# Games
Route::resource('games', 'GamesController');