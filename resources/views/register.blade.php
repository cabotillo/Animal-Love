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
  <li class="right"><a href="">Cerrar Sesión</a></li>
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

<div class="container">

<form action="" method="post">

<div class="form-group">
    <label for="nick">Nick</label>
    <input type="text" class="form-control" id="nick">
</div>

<div class="form-group">
    <label for="name">Nombre Completo</label>
    <input type="text" class="form-control" id="name">
</div>
<div class="form-group">
    <label for="pass">Contraseña</label>
    <input type="password" class="form-control" id="pass">
</div>

<div class="form-group">
    <label for="email">Correo electrónico</label>
    <input type="email" class="form-control" id="email">
</div>

<div class="form-group">
    <label for="provincia">Provincia</label>
    <select class="form-control" id="provincia">
		<option value="">- selecciona -</option>
		<option value="15">A coruña</option>
		<option value="1">Álava</option>
		<option value="2">Albacete</option>
		<option value="3">Alicante</option>
		<option value="4">Almería</option>
		<option value="33">Asturias</option>
		<option value="5">Ávila</option>
		<option value="6">Badajoz</option>
		<option value="7">Baleares</option>
		<option value="8">Barcelona</option>
		<option value="9">Burgos</option>
		<option value="10">Cáceres</option>
		<option value="11">Cádiz</option>
		<option value="39">Cantabria</option>
		<option value="12">Castellón</option>
		<option value="51">Ceuta</option>
		<option value="13">Ciudad Real</option>
		<option value="14">Córdoba</option>
		<option value="16">Cuenca</option>
		<option value="99">Extranjero</option>
		<option value="17">Girona</option>
		<option value="18">Granada</option>
		<option value="19">Guadalajara</option>
		<option value="20">Guipúzcoa</option>
		<option value="21">Huelva</option>
		<option value="22">Huesca</option>
		<option value="23">Jaén</option>
		<option value="26">La rioja</option>
		<option value="35">Las palmas</option>
		<option value="24">León</option>
		<option value="25">Lleida</option>
		<option value="27">Lugo</option>
		<option value="28">Madrid</option>
		<option value="29">Málaga</option>
		<option value="52">Melilla</option>
		<option value="30">Murcia</option>
		<option value="31">Navarra</option>
		<option value="32">Ourense</option>
		<option value="34">Palencia</option>
		<option value="36">Pontevedra</option>
		<option value="37">Salamanca</option>
		<option value="38">Santa cruz de tenerife</option>
		<option value="40">Segovia</option>
		<option value="41">Sevilla</option>
		<option value="42">Soria</option>
		<option value="43">Tarragona</option>
		<option value="44">Teruel</option>
		<option value="45">Toledo</option>
		<option value="46">Valencia</option>
		<option value="47">Valladolid</option>
		<option value="48">Vizcaya</option>
		<option value="49">Zamora</option>
		<option value="50">Zaragoza</option>
	</select>
</div>

  <button type="submit" class="btn btn-default">Submit</button>

</form>
	

</div>

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
