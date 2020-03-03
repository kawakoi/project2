@extends('layout')

    @section('content')
        <h1>Detalle del Articulo {{$articulo->id }}</h1>
        <p> {{$articulo->titulo}} </p>
        <p> {{$articulo->cuerpo}} </p>
        <p> {{$articulo->autor}} </p>
        <a href={{url()->previous()}}>Volver</a>
    @endsection

@section('sidebar')
    @parent
        <ul>
            <li><a href={{route("articulo_modificar", ['id' => $articulo->id] )}}>Modificar Articulo</a></li>
            <li><a href={{route("articulo_eliminar", ['id' => $articulo->id])}}>Eliminar Articulo</a></li>
        </ul>
@endsection