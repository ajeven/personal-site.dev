<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<title>Splinter Says</title>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
			<link rel="stylesheet" href="/css/bootstrap.min.css">
			<link rel="stylesheet" href="/css/splinter_says.css">
		</head>
		<body id="page">
			<?php require_once 'templates.php'; ?>
			<!-- GAME HEADERS && BACKGROUND -->	
			<h1 class="tracker">Splinter Says</h1>
					<div class="tracker" data-level="lvl">
						Level: <span id="lvl"></span>
					</div>
				<!-- GAME BUTTONS -->
				<div class= "splinter" id="container-fluid">	
					<img class="tile" id="center" data-tile="1">
					<img class="tile" id="red" data-tile="2">
					<img class="tile" id="purple" data-tile="3">
					<img class="tile" id="blue" data-tile="4">
					<img class="tile" id="orange" data-tile="5">
				</div>
				<button  id="start" class="btn btn-info" data-action="start">Start Game</button>
				<script src="http://code.jquery.com/jquery-1.11.0.js"></script>
				<script src="/js/bootstrap.js"></script>
				<script src="/js/splinter_says.js"></script>
		</body>
	</html>