<?php

use App\Products;
Route::get('/', function () {
    return view('index');
})->name('home-page');

Route::get('/productos', 'ProductosController@index')
    ->name('product.index');

Route::get('/productos/agregar', 'ProductosController@add')
    ->name('product.add');

Route::post('/productos/agregar', 'ProductosController@addprod')
    ->name('product.addprod');

Route::get('/productos/{producto}', 'ProductosController@show')
    ->where('producto', '[0-9]+')
    ->name('product.show');

Route::delete('/productos/{producto}', 'ProductosController@delprod')
    ->name('product.del');


