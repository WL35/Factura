@extends('layouts.app')
@section('content')

<a href="{{route('movimientos.create')}}" class="btn btn-primary btn-sm">Nuevo</a>

<form action="{{route('movimientos.search')}}" method="POST">
	@csrf
	Desde:<input type="date" name="desde" value="{{$desde}}">
	Hasta:<input type="date" name="hasta" value="{{$hasta}}">
	<button class="btn btn-success" value="btn_buscar" name="btn_buscar" >Buscar</button>
	<button class="btn btn-danger" value="btn_pdf" name="btn_pdf" >PDF</button>
</form>

<table class="table">
	<th>#</th>
	<th>Tipo</th>
	<th>Usuario</th>
	<th>Concepto</th>
	<th>Fecha</th>
	<th>Detalle</th>
	<th>Cantidad</th>
	<th>Acciones</th>
	<?php 
	$t_ing=0;
	$t_egr=0;
	$t_saldo=0;
	?>
	@foreach($mov as $m)
	<?php 
	  $t_ing+=$m->mov_cantidad;
	?>
	<tr>
		<td>{{$loop->iteration}}</td>

         @if($m->mov_tipo==1)
         <td>Ingreso</td>
         @else
         <td>Egreso</td>
         @endif

		<td>{{$m->usu_name}}</td>
		<td>{{$m->tip_descripcion}}</td>
		<td>{{$m->mov_fecha}}</td>
		<td>{{$m->mov_detalle}}</td>
		<td>${{number_format($m->mov_cantidad,2)}}</td>
		<td>
			<a href="{{route('movimientos.edit',$m->mov_id)}}" class="btn btn-primary btn-sm">Editar</a>
			<form action="{{route('movimientos.destroy',$m->mov_id)}}" onsubmit="return confirm('Eliminar?')" method="POST">
				@csrf
				<button class="btn btn-danger btn-sm">Eliminar</button>
			</form>
		</td>

	</tr>
	@endforeach()
	<tr>
		<th colspan="2">Totales:</th>
		<th>Ingresos:{{$t_ing}}</th>
		<th>Egresos:{{$t_egr}}</th>
		<th>Saldo:{{$t_saldo}}</th>
	</tr>
</table>


@endsection