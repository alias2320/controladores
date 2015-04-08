@extends('master')
@section('contenido')
	<h1>Listado de articulos</h1>
	@foreach ($articulos as $articulo)
		<article>
			<a href=#> {{ $articulo->titulo }}</a>				
		</article>
	@endforeach
@stop

