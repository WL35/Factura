@extends('layouts.app')
@section('content')
    <div class="bg-primary container text-center text-white display-5">Formulario de Facturación</div>
	<div class="container">
	   @include('facturas.fields')
	</div>
@endsection