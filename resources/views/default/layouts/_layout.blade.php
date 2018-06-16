<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Портал РА</title>
	   
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
</head>

<body>

	<header>
		<div class="container">
		@section('header')
			@include('default.includes.nav')
		@show
		</div>
	</header>
	
	<main class="container">
		@yield('content')
	</main>
	
	<footer class="navbar-fixed-bottom row-fluid footer">
		<div class="navbar-inner">
          <div class="container">
          	@section('footer')
          	@show
          </div>
        </div>
	</footer>
	
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	
	@section('scripts')
	@show
	
</body>

</html>