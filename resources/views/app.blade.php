<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>

	{{--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">--}}
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>



<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
	<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<nav class="navbar navbar-light bg-faded">
		<a class="navbar-brand" href="#">
			<img src="https://upload.wikimedia.org/wikipedia/commons/b/be/Mapa_do_Brasil_com_a_Bandeira_Nacional.png" width="30" height="30" alt="">
		</a>
	</nav>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link"  href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
			</li>
			@if(Auth::user())
				@if(Auth::user()->role == "admin")
					<li class="nav-item">
						<a class="nav-link" href="{{ route('admin.states.index') }}">Cadastros</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="{{ route('admin.users.index') }}">Usuarios</a>
					</li>
				@elseif(Auth::user()->role == "common")

					<li class="nav-item">
						<a class="nav-link" href="{{ route('customer.index') }}">Estados</a>
					</li>
				@endif
			@endif
		</ul>

		<ul class="nav justify-content-end navbar-nav">

			@if(auth()->guest())
				@if(!Request::is('auth/login'))
					<li class="nav-item">
						<a href="{{ url('/auth/login') }}" class="nav-link">Login</a>
					</li>
				@endif
				@if(!Request::is('auth/register'))
					<li class="nav-item">
						<a href="{{ url('/auth/register') }}" class="nav-link">Registra-se</a>
					</li>
				@endif
			@else


				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">{{ auth()->user()->name }} <span class="caret"></span></a>

					<div class="dropdown-menu">
						<a class="dropdown-item" href="{{ url('/auth/logout') }}">Sair</a>

					</div>
				</li>
			@endif
		</ul>

	</div>
</nav>

@yield('content')


	{{--<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>--}}
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

	<script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
@yield('post-script')

</body>
</html>
