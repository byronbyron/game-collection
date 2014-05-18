<?php

# Home
Route::get('/', ['as' => 'home', 'uses' => 'PagesController@index']);

# Registration
Route::get('/register', 'RegistrationController@create')->before('guest');
Route::post('/register', ['as' => 'registration.store', 'uses' => 'RegistrationController@store']);

# Authentication
Route::get('logout', ['as' => 'login', 'uses' => 'SessionsController@destroy']);
Route::get('login', ['as' => 'logout', 'uses' => 'SessionsController@create']);
Route::resource('sessions', 'SessionsController', ['only' => ['create', 'store', 'destroy']]);

# Games
Route::resource('games', 'GamesController');

# Profile
Route::resource('profile', 'ProfilesController', ['only' => ['show', 'edit', 'update']]);
Route::get('/{profile}', ['as' => 'profile', 'uses' => 'ProfilesController@show']);