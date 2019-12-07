<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Product_type;
use Illuminate\Validation\Rule;

class ProductController extends Controller
{
    public function index()
    {
        $productos = Product::all();
        return view('productos.index', compact('productos'));
    }

    public function show(Product $producto)
    {
        return view('productos.show', compact('producto'));
    }

    public function add()
    {
        $tipos = Products_type::all();
        return view('productos.add', compact('tipos'));
    }

    public function addprod()
    {
        $data = request()->all();

        $data = request()->validate([
            'nombre' => 'required', 
            'precio' => 'required',
            'desc' => 'required|max:255',
            'tipo' => 'required|min:1'

        ],[
            'nombre.required' => 'El campo nombre es obligatorio.',
            'precio.required' => 'El precio debe ser especificado.',
            'desc.required' => 'El articulo tiene que tener una descripcion.',
            'tipo.required' => 'El producto debe tener una categoria.',
            'desc.max' => 'La descripcion del articulo tiene menos de 256 caracteres.',
            'tipo.min' => 'Se debe elegir la categoria del producto.'
        ]);

        Product::create([
            'nombre_prod' => $data['nombre'],
            'descripcion_prod' => $data['desc'],
            'precio_prod' => $data['precio'],
            'type' => $data['tipo']
           
        ]);
        return redirect()->route('product.add');
    }

    public function delprod($producto)
    {
          Product::where('id', $producto)->first()->delete() ?? abort(404);
          return redirect(route('product.index'));
    }

    public function showedit(Product $producto)
    {
        return view('productos.showedit', compact('producto'));
    }

    public function edit(Product $producto)
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
