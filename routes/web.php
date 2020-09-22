<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'HOME';
});

Route::get('/usuarios', function () {
    return 'Usuarios';
});

# Crear ruta nuevo ususario
Route::get('/usuarios/nuevo', function () {
    return 'Crear Nuevo Usuario';
});

# Tener una URL más limpia 
# Creo una ruta dinamica
Route::get('/usuarios/{id}', function ($id) {
    return 'Mostrando detalle del ususario: '.$id;
});


Route::get('/saludo/{name}/{nickname?}', function ($name, $nickname = null) {
    if($nickname) {
    	return 'Bienvenido '.$name.' tu apodo es: '.$nickname;
    } else {
    	return 'Bienvenido '.$name.' no tienes apodo';
    }
    
});