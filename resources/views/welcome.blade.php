<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Animal Love</title>

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

	<!-- BootStrap -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<!-- CSS NavTop -->
 	<link rel="stylesheet" type="text/css" href="{{asset('css/navtop.css')}}">
	<!-- Style -->
	<style type="text/css">
		.navbar { background: transparent; }
	</style>

</head>
<body>

<!-- Nav bar top -->

@if (Auth::check())
<ul class="topnav fixed navbar-fixed-top text-uppercase">
  <li><a class="active" href="home">Animals Love</a></li>
  <li><a href="/">Inicio</a></li>
  <li><a href="">Perfil</a></li>
  <li><a href="">Mensajes</a></li>
  <li class="right"><a href="logout">Cerrar Sesión</a></li>
</ul>
@else
<ul class="topnav fixed navbar-fixed-top text-uppercase">
  <li><a class="active" href="/">Animals Love</a></li>
  <li><a href="/">Inicio</a></li>
  <li><a href="register">Registro</a></li>
  <li class="right"><a href="login">Iniciar Sesión</a></li>
</ul>
  @endif


<!--BODY-->
@if (Auth::check())
<h1>{{Auth::user()->Login}}</h1>
@else
<h1>IE</h1>
@endif

<!--
<div class="flex-center position-ref full-height">
		@if (Route::has('login'))
			<div class="top-right links">
				@if (Auth::check())
					<a href="{{ url('/home') }}">Home</a>
				@else
					<a href="{{ url('/login') }}">Login</a>
					<a href="{{ url('/register') }}">Register</a>
				@endif
			</div>
		@endif

		</div>
	</div>
-->

</div>
	</body>
</html>
