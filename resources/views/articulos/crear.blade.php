@extends('layout')

    @section('content')
        <h1>Crea un nuevo artículo</h1>
        {{--dd($errors->all('autor'))--}}
       {{-- @if ($errors->any())
         <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif --}}
        <form method="POST" action = {{url('articulos/store')}}>
            {{csrf_field()}}
            <label for="autor">Autor</label><br>
            <input type="text" name=autor id="autor" value={{old('autor')}}><br>
            @if ($errors->has('autor'))
                <div class="alert alert-danger">{{ $errors->first('autor') }}</div>
            @endif

            <label for="title">Título</label><br>
            <input type="text" name="title" id="title" value={{old('title')}}><br>
            @if ($errors->has('title'))
                <div class="alert alert-danger">{{ $errors->first('title') }}</div>
            @endif

            <label for="body">Contenido</label><br>
            <textarea rows="10" cols="50" name="body" id="body" >{{old('body', 'deefecasdcscto')}}</textarea><br>
            @if ($errors->has('body'))
                <div class="alert alert-danger">{{ $errors->first('body') }}</div>
            @endif
            <input type="submit"  value="Enviar">
        </form>
    @endsection