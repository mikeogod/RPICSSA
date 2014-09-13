<!DOCTYPE html>
<html>
	<head>
	    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	    <meta name="Author" content="Mike Xie" />
	    
	    <!-- jQuery -->
	    <!-- <script src="//code.jquery.com/jquery-1.10.2.js"></script> -->
	    <script src="scripts/jquery-1.11.1.min.js"></script>
	    
	    <!-- Bootstrap -->
	    <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
		
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	    
	    <title>RPI CSSA</title>
	    
	</head>
	<body>
		<div class="container">
			@section('header')
			<div class="panel panel-default" id="header">
				<h2>This header</h2>
			</div>
			@show
			
			@section('top-menu')
			<div class="panel panel-default" id="top-menu">
				<h2>This is top menu</h2>
			</div>
			@show
			
			@yield('content')
			
			@section('footer')
			<div class="panel panel-default" id="footer">
				<h2>This is footer</h2>
			</div>
			@show
		
		</div>
		
	</body>
</html>
