<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'HOME';
});

Route::get('/usuarios','UserController@index');

Route::get('/usuarios/nuevo', 'UserController@new_user');

Route::get('/usuarios/{id}', 'UserController@show');

Route::get('/saludo/{name}/{nickname?}', 'WelcomeUserController');