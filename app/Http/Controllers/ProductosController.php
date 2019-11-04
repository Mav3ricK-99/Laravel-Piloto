<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class ProductosController extends Controller
{
    public function index()
    {
        $productos = Products::all();
        return view('productos.index', compact('productos'));
    }

    public function show(Products $producto)
    {
        return view('productos.show', compact('producto'));
    }

}
