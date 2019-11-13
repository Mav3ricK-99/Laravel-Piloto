@extends('layout')

@section('css_styles')
        <link rel="stylesheet" type="text/css" href={{asset('/css/producto-box.css')}}>
    @endsection
    @section('titulo')
        <title>Inicio</title>
    @endsection

    @section('content')
       
        <h1>Laravel Piloto</h1>
        <a href='/productos/'>Productos</a>

        <p class="lead">
        blbla
        </p>
        
    @endsection


    