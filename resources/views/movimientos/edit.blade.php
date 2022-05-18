@extends('layouts.app')
@section('content')

<form action="{{route('movimientos.update',$movimiento->mov_id)}}" method="POST">
	@csrf
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<label for="">Concepto</label>
				<select name="tip_id" id="tip_id" class="form-control">
					<option value="">Elija Una opción</option>
					@foreach($tipos as $t)
					   <option value="{{$t->tip_id}}">{{$t->tip_descripcion}}</option>
					@endforeach
				</select>
			</div>
			<div class="col-md-6">
				<label for="">Fecha</label>
				<input type="date" class="form-control" id="mov_fecha" name="mov_fecha" value="{{$movimiento->mov_fecha}}" >
			</div>
			<div class="col-md-6 p-3">
				Ingreso:<input type="radio" name="mov_tipo" value="1" >
				Egreso:<input type="radio"  name="mov_tipo" value="0" >
			</div>

			<div class="col-md-6">
				<label for="">Cantidad</label>
				<input type="text" class="form-control" id="mov_cantidad" name="mov_cantidad" value="{{$movimiento->mov_cantidad}}" >
			</div>

			<div class="col-md-12">
				<label for="">Detalle</label>
				<input type="text" class="form-control" id="mov_detalle" name="mov_detalle" value="{{$movimiento->mov_detalle}}" >
			</div>

			<div class="col-md-12 mt-3">
				<button class="btn btn-success">Guardar</button>
			</div>

		</div>
	</div>
	
</form>

@endsection