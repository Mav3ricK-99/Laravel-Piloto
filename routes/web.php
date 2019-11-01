<?php

Route::get('/', function () {
    return view('index'); //Cambiar vista.
});

Route::get('/productos', 'ProductosController@index');