<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
	 <meta charset="utf-8">
	 <meta http-equiv="X-UA-Compatible" content="IE=edge">
	 <meta name="viewport" content="width=device-width, initial-scale=1">

	 <!-- CSRF Token -->
	 <meta name="csrf-token" content="{{ csrf_token() }}">

	 <title>{{ config('app.name', 'Laravel') }}</title>

	 <!-- Styles -->
	 <link href="{{ asset('css/app.css') }}" rel="stylesheet">

	 <!-- Scripts -->
	 <script>
		  window.Laravel = {!! json_encode([
				'csrfToken' => csrf_token(),
		  ]) !!};
	 </script>
</head>
<body>
	 <div id="app">
		  <nav class="navbar navbar-default navbar-static-top" role="navigation">
				<div class="container">
					 <div class="navbar-header">

						  <!-- Collapsed Hamburger -->
						  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
								<span class="sr-only">Toggle Navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
						  </button>
					 </div>
					 <!-- Left Side Of Navbar -->
					 <div class="navbar-collapse collapse" id="app-navbar-collapse">
						<ul class="nav navbar-nav">  
						  <!-- Branding Image -->
						  <a class="navbar-brand" href="{{ url('/') }}">
								{{ config('app.name', 'Laravel') }}
						  </a>
						</ul>
						  <!-- Center -->
						  <ul class="nav navbar-nav navbar-center">
								@if (Auth::guest())
										<li><a href="/">Inicio</a></li>
										<li><a href="editarperfil">Perfil</a></li>
										<li><a href="/">Mensajes</a></li>
								@endif
						  </ul>

						  <!-- Right Side Of Navbar -->
						  <ul class="nav navbar-nav navbar-right">
								<!-- Authentication Links -->
								<li><a href="contacto">Contacto</a>
								@if (Auth::guest())
									 <li><a href="{{ route('login') }}">Iniciar Sesion</a></li>
									 <li><a href="{{ route('register') }}">Registrate</a></li>
								@else
									 <li class="dropdown">
										  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
												{{ Auth::user()->Nombre }} <span class="caret"></span>
										  </a>

										  <ul class="dropdown-menu" role="menu">
												<li>
													 <a href="{{ route('logout') }}"
														  onclick="event.preventDefault();
																	  document.getElementById('logout-form').submit();">
														  Logout
													 </a>

													 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
														  {{ csrf_field() }}
													 </form>
												</li>
										  </ul>
									 </li>
								@endif
						  </ul>
					 </div>
				</div>
		  </nav>

		  @yield('content')
	 </div>

	 <!-- Scripts -->
	 <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
