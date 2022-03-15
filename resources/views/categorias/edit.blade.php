@extends('layouts.app')
@section('content')
<h4 class="bg-dark text-white">Editar Categoría</h4>
<h1>Editar categorias</h1>
<form action="{{route('categoria.update',$categoria->cat_id)}}" method="POST"  >
	@csrf
	<label for="">Detalle de la Categoria</label>
	<input type="text" value="{{$categoria->cat_detalle}}" name="cat_detalle" id="cat_detalle">
	<button type="submit" class="btn btn-success">Guardar</button>
</form>
@endsection