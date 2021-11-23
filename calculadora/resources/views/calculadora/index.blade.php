@extends('layouts.plantilla')
@section('contenido')
<a href='/register' class='btn btn-primary'>Ir al registro</a>
<table class="table table-dark table-striped mt-4">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Sistema Numerico</th>
      <th scope="col">Cantidad Digitos</th>
      <th scope="col">Primer Cadena</th>
      <th scope="col">Segunda Cadena</th>
      <th scope="col">Operacion</th>
      <th scope="col">Operando</th>
      <th scope="col">Resultado</th>
    </tr>
  </thead>
  <tbody>    
    @foreach ($registro as $registro)
    <tr>
        <td>{{$registro->id}}</td>
        <td>{{$registro->Sistema_Numerico}}</td>
        <td>{{$registro->Cantidad_Digitos}}</td>
        <td>{{$registro->Primer_Cadena}}</td>
        <td>{{$registro->Segunda_Cadena}}</td>
        <td>{{$registro->Operacion}}</td>
        <td>{{$registro->Operando}}</td>
        <td>{{$registro->Resultado}}</td>
       
    </tr>
    @endforeach
  </tbody>
</table>
@endsection