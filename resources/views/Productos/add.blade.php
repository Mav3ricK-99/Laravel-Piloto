@extends('layout')

@section('titulo')
    <title>Agregar Producto</title>
@endsection

@section('content')
 
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>

    <h2>Agregar un producto</h2>
    <form action={{route('product.addprod')}} method="POST">
       {{ csrf_field() }}
       <input type="text" name="nombre" placeholder="Nombre Articulo" value={{ old('nombre') }}>
       <input type="number" name="precio" placeholder="Precio Articulo" value={{ old('precio') }}>
       <select name="tipo">
           <option value="0">Categoria</option>

          @foreach ($tipos as $tipo)
                <option value={{$tipo->id_prod}}>{{$tipo->nombre_tipo}}</option>
          @endforeach

       </select>
       <textarea name="desc" placeholder="Descripcion Articulo" value={{ old('desc') }}></textarea>
       <input type="submit" value="Enviar">
    </form>
   
@endsection