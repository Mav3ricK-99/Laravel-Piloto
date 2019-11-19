@extends('layout')

@section('css_styles')
    <link rel="stylesheet" type="text/css" href={{asset('/css/producto-box.css')}}>
@endsection

@section('titulo')
    <title>{{$producto->nombre_prod}}</title>
@endsection

@section('content')
<section class="content-edit">
    <article class="product-box-form-edit">
        
        <form action={{route('product.edit', $producto)}} method="POST" class="form-edit">
        {{ method_field('PUT') }}
        {{ csrf_field() }} 
        <h2>Nombre producto</h2>
        <input type="text" name="nombre_prod" placeholder="Lavarropas" value="{{old('nombre_prod', $producto->nombre_prod)}}">
            <hr>
        <h3>Precio</h3>
        <input type="number" name="precio_prod" placeholder="3200" value="{{old('nombre_prod', $producto->precio_prod)}}">
            <hr>
        <h3>Descripcion</h3>
        <textarea name="descripcion_prod" placeholder="Una descripcion muuy larga.." >{{old('nombre_prod', $producto->descripcion_prod)}}</textarea>
            <hr>
           
            <input class="form-sub" id="del-f" type="submit" form="del-form" value="Eliminar">
            <input class="form-sub" id="upd-f" type="submit" value="Actualizar">
            
        </form>
    
    </article>
    <img src='https://www.casadelaudio.com/Image/0/500_500-331-ATM-002_1.png'>  
</section>

<form action={{route('product.del', $producto)}} method="POST" id="del-form">
        {{ method_field('DELETE') }}
        {{ csrf_field() }} 
</form>

@endsection
