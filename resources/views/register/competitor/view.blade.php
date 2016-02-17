@extends('template.main')
@section('title', 'Competitors Registrados')
@section('nav')
	@extends('template.admin.nav')
@endsection
@section('content')
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Edad</th>
				<th>Sexo</th>
				<th>Peso</th>
				<th>Altura</th>
				<th>Graduacion</th>
				<th>Registrto</th>
				<th>Editar</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($competitors as $competitor)
				<tr>
					<td>{{$competitor->name}}</td>
					<td>{{$competitor->age}}</td>
					<td>{{$competitor->sex}}</td>
					<td>{{$competitor->weight}}</td>
					<td>{{$competitor->height}}</td>
					<td>{{$competitor->graduation}}</td>
					<td>{{$competitor->register}}</td>
					<td><a href="">Editar</a></td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection