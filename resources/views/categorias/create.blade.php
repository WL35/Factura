@extends('layouts.app')
@section('content')
<h4 class="bg-dark text-white">Formulario de registro</h4>
<form action="{{route('categoria.store')}}" method="POST"  >
	@csrf
	<label for="">Detalle de la Categoria</label>
	<input type="text" name="cat_detalle" id="cat_detalle">
	<button type="submit" class="btn btn-success">Guardar</button>
</form>
@endsection