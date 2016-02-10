<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link rel="stylesheet" href="{{asset('pluggins/normalize/css/normalize.css')}}">
		<link rel="stylesheet" href="{{asset('pluggins/bootstrap/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('css/style.css')}}">
		@section('title')
	</head>
	<body>
		<div class="container-fluid">
			@yield('contenido')			
		</div>
	</body>
	<script src="{{asset('pluggins/jquery/js/jquery-2.2.0.min.js')}}"></script>
	<script src="{{asset('pluggins/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/script.js')}}"></script>
</html>