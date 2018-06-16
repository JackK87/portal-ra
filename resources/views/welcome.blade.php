<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Портал РА</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	  <![endif]-->
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-lg-2 col-md-3 col-sm-6 col-xs-4 block">
				<p class="visible-lg-block">col-lg-2</p>
				<p class="visible-md-block">col-md-3</p>
				<p class="visible-sm-block">col-sm-6</p>
				<p class="visible-xs-block">col-xs-4</p>
			</div>
			<div class="col-lg-8 col-md-6 col-sm-6 col-xs-4 block">
				<p class="visible-lg-block">col-lg-8</p>
				<p class="visible-md-block">col-md-6</p>
				<p class="visible-sm-block">col-sm-6</p>
				<p class="visible-xs-block">col-xs-4</p>
			</div>
			<div class="col-lg-2 col-md-3 col-xs-4 hidden-sm block">
				<p class="visible-lg-block">col-lg-2</p>
				<p class="visible-md-block">col-md-3</p>
				<p class="visible-xs-block">col-xs-4</p>
			</div>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>