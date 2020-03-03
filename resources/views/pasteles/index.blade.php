@extends('layout')

@section('content')
    <h2>Lista de pasteles</h2>
    <ul>
    @foreach ($pasteles as $pastel)
       <li> {{$pastel->titulo}}
        <a href={{route('detalle_pastel', ['id'=>$pastel->id])}}
            >Ver detalles</a></li>
    </li>
    @endforeach
    </ul>

    @section('sidebar')
    @parent
        <li><a href={{route("pastel_nuevo")}}>Nuevo pastel</a></li>
@endsection
@endsection
