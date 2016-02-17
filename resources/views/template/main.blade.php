<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link rel="stylesheet" href="{{asset('pluggins/normalize/css/normalize.css')}}">
		<link rel="stylesheet" href="{{asset('pluggins/bootstrap/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('pluggins/material-design/css/ripples.min.css')}}">
		<link rel="stylesheet" href="{{asset('pluggins/material-design/css/material.min.css')}}">
		<link rel="stylesheet" href="{{asset('css/style.css')}}">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<title>TKD APP | @yield('title')</title>
	</head>
	<body>
		@yield('nav')
		<div class="container-fluid">
			<h1>@yield('title')</h1>
			@yield('content')			
		</div>
	</body>
	<script src="{{asset('pluggins/jquery/js/jquery-2.2.0.min.js')}}"></script>
	<script src="{{asset('pluggins/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('pluggins/material-design/js/ripples.min.js')}}"></script>
	<script src="{{asset('pluggins/material-design/js/material.min.js')}}"></script>
	<script src="{{asset('js/script.js')}}"></script>
</html>