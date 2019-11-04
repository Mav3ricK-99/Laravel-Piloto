<?php

use App\Products;
Route::get('/', function () {
    return view('index');
})->name('home-page');

Route::get('/productos', 'ProductosController@index');

Route::get('/productos/{producto}', 'ProductosController@show')->name('product.show');
