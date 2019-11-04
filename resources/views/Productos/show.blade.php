    @extends('layout')

    @section('css_styles')
        <link rel="stylesheet" type="text/css" href={{asset('/css/producto-box.css')}}>
    @endsection

    @section('titulo')
        <title>{{$producto->nombre_prod}}</title>
    @endsection

    @section('content')
        
    <h2>Productos</h2>
        <ul>
            <li>  {{ $producto->nombre_prod }}  </li>
            <li>  {{ $producto->descripcion_prod }}  </li>
            <li>  {{ $producto->precio_prod }}  </li>
        </ul>
        
    @endsection
