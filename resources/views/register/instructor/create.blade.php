@extends('template.main')
@section('title', 'Registrar Instructor')
@section('nav')
	@extends('template.register.nav')
@endsection
@section('content')
	{!! Form::open(['route' => 'register.instructors.store', 'method' => 'POST'])!!}

		<div class="form-group label-floating is-empty">
			{!! Form::label( 'name', 'Nombre', ["class" => 'control-label'])!!}
			{!! Form::text('name', null, ['class' => 'form-control', 'required'])!!}
			{!! Form::label('Help', 'Ingresar Nombre Completo',['class' => 'help-block'])!!}
		</div>

		<div class="form-group label-floating is-empty">
			{!! Form::label('email','Email', ['class' => 'control-label'])!!}
			{!! Form::text('email', null, ['class' => 'form-control', 'required'])!!}
			{!! Form::label('Help', 'example@mail.com',['class' => 'help-block'])!!}
	    </div>

	    <div class="form-group label-floating is-empty">
			{!! Form::label('phone','Teléfono', ['class' => 'control-label'])!!}
			{!! Form::text('phone', null, ['class' => 'form-control justNumbers', 'required'])!!}
			{!! Form::label('Help', 'Ingrese solo numeros ',['class' => 'help-block'])!!}
	    </div>

		<div class="form-group label-floating is-empty">
				{!! Form::label('register', 'Nº de Matricula', ["class" => 'control-label'])!!}
				{!! Form::text('register', null, ['class' => 'form-control toUpper', 'required'])!!}
				{!! Form::label('Help', 'AR-05-0000',['class' => 'help-block'])!!}
		</div>
		
		<div class="form-group label-floating is-empty">
			{!! Form::label('country', 'País', ["class" => 'control-label'])!!}
			{!! Form::text('country', null, ['class' => 'form-control', 'required'])!!}
			{!! Form::label('Help', 'Argetina',['class' => 'help-block'])!!}
		</div>

		<div class="formgroup">
			{!! Form::submit('Registrar', ['class' => 'btn btn-raised btn-info btn-my-css'])!!}
		</div>
	{!! Form::close()!!}
@endsection