@extends('layout')

@section('content')

@section('content')

<style>
    table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
    }
    th, td {
  padding: 5px;
  text-align: left;
}

</style>

    <h1>Detalle del Pastel {{$pastel->id }}</h1>

<table style="width:100%">
    <tr>
        <td>Título</td>
        <td>Ingredientes</td>
        <td>Preparación</td>
      </tr>
<tr>
<td> {{$pastel->titulo}} </td>
<td> {{$pastel->ingredientes}} </td>
<td> {{$pastel->preparacion}} </td>
</tr>
</table>
<a href={{url()->previous()}}>Volver</a>
@endsection

