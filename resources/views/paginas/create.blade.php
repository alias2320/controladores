@extends('master')
@section('contenido')
	<h1>Formulario</h1>
	{!! Form::open(['url' => 'articulos']) !!}	
	<div class="form-group">	
		{!! Form::label('titulo','Titulo: ') !!}
		{!! Form::text('titulo',null,['class' => 'form-control']) !!}
	</div class="form-group">	
	<div class="form-group">	
		{!! Form::label('descripcion','Descripcion: ') !!}
	</div class="form-group">	
	<div class="form-group">	
		{!! Form::textarea('descripcion',null,['class' => 'form-control']) !!}
	</div class="form-group">	
	<div class="form-group">	
		{!! Form::label('autor','Autor: ') !!}
		{!! Form::text('autor',null,['class' => 'form-control']) !!}
	</div class="form-group">	
	<div class="form-group">	
		{!! Form::submit('Agregar Articulo',['class' => 'btn btn-primary form control']) !!}		
	</div class="form-group">	
	{!! Form::close() !!}
	@if ($errors->any())
		<ul class="alert alert-damage">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif
@stop

