@extends('template.main')
@section('title', 'Registrar Competidores')
@section('nav')
	@extends('template.register.nav')
@endsection
@section('content')
	{!! Form::open(['route' => 'register.competitors.store', 'method' => 'POST'])!!}

		<div class="form-group label-floating is-empty">
			{!! Form::label( 'name', 'Nombre', ["class" => 'control-label'])!!}
			{!! Form::text('name', null, ['class' => 'form-control', 'required'])!!}
			{!! Form::label('Help', 'Ingresar Nombre Completo',['class' => 'help-block'])!!}
		</div>

		<div class="form-group label-floating is-empty">
			{!! Form::label('sex','Sexo', ['class' => 'control-label'])!!}
			{!! Form::select('sex', ['' => '' ,'m' => 'Mujer', 'h' => 'Hombre'], null, ['class' => 'form-control', 'required'])!!}
		</div>

		<div class="form-group label-floating is-empty">
			{!! Form::label('age','Edad', ['class' => 'control-label'])!!}
			{!! Form::text('age', null, ['class' => 'form-control justNumbers', 'required',
			'maxlength' => '2'])!!}
			{!! Form::label('Help', 'Ingresar solo numeros',['class' => 'help-block'])!!}
	    </div>

	    <div class="form-group label-floating is-empty">
			{!! Form::label('weight','Peso', ['class' => 'control-label'])!!}
			{!! Form::text('weight', null, ['class' => 'form-control justFloats', 'required'])!!}
			{!! Form::label('Help', 'Ingrese altura en centimetros. Ejemplo: 1.62 ',['class' => 'help-block'])!!}
	    </div>

	    <div class="form-group label-floating is-empty">
			{!! Form::label('height','Altura', ['class' => 'control-label'])!!}
			{!! Form::text('height', null, ['class' => 'form-control justFloats', 'required'])!!}
			{!! Form::label('Help', 'Ingrese peso en kilogramos. Ejemplo: 62.5 ',['class' => 'help-block'])!!}
	    </div>

		<div class="form-group label-floating is-empty">
			{!! Form::label('graduation','Graduación', ['class' => 'control-label'])!!}
			{!! Form::select('graduation', ['' => '' ,'0' => 'Blanco', '1' => 'P. Amarilla','2' => 'Amarillo', '3' => 'P. Verde','4' => 'Verde', '5' => 'P. Azul','6' => 'Azul', '7' => 'P. Roja','8' => 'Rojo', '9' => 'P. Negra', '10' => 'I Dan', '11' => 'II Dan', '12' => 'III Dan', '13' => 'IV Dan', '14' => 'V Dan', '15' => 'VI Dan'], null, ['class' => 'form-control', 'required'])!!}
		</div>

		<div class="form-group label-floating is-empty">
				{!! Form::label('register', 'Nº de Matricula', ["class" => 'control-label'])!!}
				{!! Form::text('register', null, ['class' => 'form-control toUpper', 'required','disabled'])!!}
				{!! Form::label('Help', 'AR-05-0000',['class' => 'help-block'])!!}
		</div>
		
		<div class="form-group label-floating is-empty">
			{!! Form::label('country', 'País', ["class" => 'control-label'])!!}
			{!! Form::text('country', null, ['class' => 'form-control', 'required'])!!}
			{!! Form::label('Help', 'Argetina',['class' => 'help-block'])!!}
		</div>

		<div style="display: none;">
			{!! Form::text('instructor_id', $id)!!}
		</div>

		<div style="display: none;">
			{!! Form::text('category_id', "1")!!}
		</div>

		<div class="formgroup">
			{!! Form::submit('Registrar', ['class' => 'btn btn-raised btn-info btn-my-css'])!!}
		</div>
	{!! Form::close()!!}
@endsection