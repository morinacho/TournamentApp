@extends('template.main')
@section('title', 'Instructor Registrados')
@section('nav')
	@extends('template.admin.nav')
@endsection
@section('content')
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Email</th>
				<th>Teléfono</th>
				<th>Matricula</th>
				<th>Competidores</th>
				<th>Editar</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($instructors as $instructor)
				<tr>
					<td>{{$instructor->name}}</td>
					<td>{{$instructor->email}}</td>
					<td>{{$instructor->phone}}</td>
					<td>{{$instructor->register}}</td>
					<td><a href="{{ route('register.competitors.view', $instructor->id) }}">Ver</a></td>
					<td><a href="">Editar</a></td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{!! $instructors->render() !!}
@endsection