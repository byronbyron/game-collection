<?php

Route::get('/', 'GamesController@index');
Route::resource('games', 'GamesController');