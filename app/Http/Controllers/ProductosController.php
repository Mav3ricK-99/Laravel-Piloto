<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use Illuminate\Validation\Rule;

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

    public function add()
    {
        return view('productos.add');
    }

    public function addprod()
    {
        $data = request()->all();

        $data = request()->validate([
            'nombre' => 'required', 
            'precio' => 'required',
            'desc' => 'required|max:255'
        ],[
            'nombre.required' => 'El campo nombre es obligatorio',
            'precio.required' => 'El precio debe ser especificado',
            'desc.required' => 'El articulo tiene que tener una descripcion',
            'desc.max' => 'La descripcion del articulo tiene menos de 256 caracteres'
        ]);

        Products::create([
            'nombre_prod' => $data['nombre'],
            'descripcion_prod' => $data['desc'],
            'precio_prod' => $data['precio'],
            'type_id' => 3
           
        ]);
        return redirect()->route('product.add');
    }

    public function delprod($producto)
    {
          Products::where('id', $producto)->first()->delete() ?? abort(404);
          return redirect(route('product.index'));
    }

    public function showedit(Products $producto)
    {
        return view('productos.showedit', compact('producto'));
    }

    public function edit(Products $producto)
    {
        $data = request()->all();
        $data = request()->validate([
            'nombre_prod' => 'required', 
            'precio_prod' => 'required',
            'descripcion_prod' => 'required|max:255'
        ],[
            'nombre_prod.required' => 'El campo nombre no debe estar vacio.',
            'precio_prod.required' => 'El precio debe ser especificado.',
            'descripcion_prod.required' => 'El articulo tiene que tener una descripcion',
            'descripcion_prod.max' => 'La descripcion del articulo tiene menos de 256 caracteres'
        ]);
        
        $producto->update($data);
        return redirect()->route('product.show', compact('producto'));
    }
}
