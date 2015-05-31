<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/main.css') }}" rel="stylesheet">

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
	<header class="main">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="row">
						<div class="col-md-6">
							<a class="navbar-brand" href="/">Done</a>
						</div>

						<div class="col-md-6">
							<ul class="nav nav-pills navbar-right">
								@if (Auth::guest())
									<li><a href="{{ url('/auth/login') }}">Login</a></li>
									<li><a href="{{ url('/auth/register') }}">Register</a></li>
								@else
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
										<ul class="dropdown-menu" role="menu">
											<li><a href="/">Dashboard</a></li>
											<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
										</ul>
									</li>
								@endif
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	@yield('content')

	<footer class="main">
		<div class="container">
			<div class="text-center">
				<p>
					Built by <a href="https://github.com/javichito" target="_blank">Javier Hidalgo</a>. Done is part of <a href="#">LaravelApps</a>.
				</p>
			</div>
		</div>
	</footer>

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
