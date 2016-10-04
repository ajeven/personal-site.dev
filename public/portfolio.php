<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link rel="stylesheet" href="/css/bootstrap.min.css">
		<link rel="stylesheet" href="/css/main.css">
		<script src="/js/bootstrap.min.js"></script>
		<title>Portfolio</title>
	</head>
	<body class="color text">
			<a id="top"></a>
	<?php require_once 'templates.php'; ?>
		<div class="container pic dont-show">
			<h1 class="text-center name-header">Projects</h1>
			<div>
				<h2 class="name-header">Calculator</h2>
					<p>This is a calculator I made with HTML CSS & Javascript.</p>
						<a href="/calculator.php">
							<img class="calculator-img" src="/img/calculator_img.png"> 
						</a>
					
				<div class="progress">
					<div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
						<span class="sr-only">80% Complete</span>
					</div>
				</div>
			</div>
				<span>Project under-construction.
				Feel free to play with it but it is not complete.</span>
			<br>
			<div>
				<h2 class="name-header">Splinter Says</h2>
					<p>This is a version of Simple Simon I made with HTML CSS & Javascript & JQuery.</p>
						<a class="splinter-img" href="/simon.php">
							<img src="/img/splinter_img.png"> 
						</a>
						
					<div class="progress splinter">
						<div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
							<span class="sr-only">50% Complete</span>
					</div>
				</div>
			</div>
				<span>Project under-construction.
				Feel free to play with it but it is not complete.</span>
				<br>
			<div>
				<h2 class="name-header">Weather Map</h2>
					<p>Need to know the three day forcast for somewhere in the world?
						Use this weather map I made with some APIs from google & openweathermap.</p>
						<a href="/weather_map.php">
							<img class="wmap-img" src="/img/wmap_img.png"> 
						</a>
			</div>
			<a href="#top" class="back-top">Back to top</a>
		</div>	
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	</body>
</html>