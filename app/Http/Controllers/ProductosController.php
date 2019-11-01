<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\products;

class ProductosController extends Controller
{
    public function index()
    {
        $productos = products::all();
        return view('productos.index', compact('productos'));
    }
}
