<?php

Route::get('/', function () {
    return view('index');
})->name('home-page');

Route::get('/productos', 'ProductController@index')
    ->name('product.index');

Route::get('/productos/agregar', 'ProductController@add')
    ->name('product.add');

Route::post('/productos/agregar', 'ProductController@addprod')
    ->name('product.addprod');

Route::get('/productos/{producto}', 'ProductController@show')
    ->where('producto', '[0-9]+')
    ->name('product.show');

Route::delete('/productos/{producto}', 'ProductController@delprod')
    ->where('producto', '[0-9]+')
    ->name('product.del');

Route::get('/productos/{producto}/editar', 'ProductController@showedit')
    ->name('product.showedit');

Route::put('/productos/{producto}/editar', 'ProductController@edit')
    ->name('product.edit');

