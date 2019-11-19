    @extends('layout')

    @section('css_styles')
        <link rel="stylesheet" type="text/css" href={{asset('/css/producto-box.css')}}>
    @endsection

    @section('titulo')
        <title>{{$producto->nombre_prod}}</title>
    @endsection

    @section('content')
    <section class="product-box">
    
        <ul class="product-ul">
           
            <div id="col-1">
            <li> <h3 id="titl_prod">{{$producto->nombre_prod}}</h3> </li>
            <li>  
                <img src='https://www.casadelaudio.com/Image/0/500_500-331-ATM-002_1.png' width='300'>  
            </li>
            </div>
            <div id="col-2">
            <h2> Descripcion </h2>
            <li id="parag"> <p> {{ $producto->descripcion_prod }} </p> </li>
            <hr>
            <h2> Precio </h2>
            <li> <h4> {{ $producto->precio_prod }} $</h4> </li>
            <hr>
            <article class="prod-buttons">
            
                    <form action={{route('product.del', $producto)}} method="POST">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }} 
                            <input class="form-sub" id="del-f" type="submit" value="Eliminar">
                    </form>
           
                    <a class="form-sub" id="upd-f" href={{route('product.showedit', $producto)}}>Editar</a>
            </article>
            </div>
        </ul>
        
    </section>
    @endsection
