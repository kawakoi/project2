@extends('layout')

    @section('content')
<h1>Modifica el articulo {{$articulo->id}}</h1>
        
        <form method="POST" action = {{url("/articulos/update/{$articulo->id}")}}>
            {{csrf_field()}}
            
            <label for="autor">Autor</label><br>
            <input type="text" name=autor id="autor" value={{$articulo->autor}}><br>
            @if ($errors->has('autor'))
                <div class="alert alert-danger">{{ $errors->first('autor') }}</div>
            @endif

            <label for="title">Título</label><br>
            <input type="text" name="title" id="title" value={{$articulo->title}}><br>
            @if ($errors->has('title'))
                <div class="alert alert-danger">{{ $errors->first('title') }}</div>
            @endif

            <label for="body">Contenido</label><br>
            <textarea rows="10" cols="50" name="body" id="body" >{{$articulo->body}}</textarea><br>
            @if ($errors->has('body'))
                <div class="alert alert-danger">{{ $errors->first('body') }}</div>
            @endif
            <input type="submit"  value="Enviar">
        </form>
    @endsection