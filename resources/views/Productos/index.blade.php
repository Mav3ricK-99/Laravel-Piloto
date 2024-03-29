    @extends('layout')

    @section('css_styles')
        <link rel="stylesheet" type="text/css" href={{asset('/css/lista-productos.css')}}>
    @endsection

    @section('titulo')
        <title>Productos</title>
    @endsection

    @section('content')
       
        <h2>Catalogo de Productos</h2>
        
        <div class='row'>
        
        @foreach ($productos as $item)

        <div class='product--blue'>
          <div class='product_inner'>
            <h4>{{ $item->nombre_prod }}</h4>
            <img src='https://www.casadelaudio.com/Image/0/500_500-331-ATM-002_1.png' width='300'>
           <a id="button-a" href={{ route('product.show', $item->id) }}>
                <button>Ver Detalles</button>
           </a>
           <a id="button-a" href={{ route('product.showedit', $item->id) }}>
            <button>Editar Producto</button>
           </a>
          </div>
        </div>
        
        @endforeach

    </div>
       
    @endsection