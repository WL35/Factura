@extends('layouts.app')
@section('content')
<h2 class="bg-dark text-white">Lista de Usuarios</h2>
<button class="btn btn-primary">Nuevo</button>
  <table class="table" >
  	<th>#</th>
  	<th>Nombre</th>
  	<th>Cedula</th>
  @foreach($users as $u)
  <tr>
  	<td>{{ $loop->iteration }}</td>
  	<td>{{ $u->usu_name }}</td>
  	<td>{{ $u->usu_cedula }}</td>
  </tr>
  @endforeach	
  </table>
@endsection