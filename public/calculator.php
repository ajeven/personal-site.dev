<html>
	<head>
		<meta charset="utf-8">
		<title>Calculator</title>
		<link rel="stylesheet" href="/css/main.css">
		<link rel="stylesheet" href="/css/calculator.css">
	</head>
	<body>
		<?php require_once 'templates.php'; ?>
		<h3>Feel free to try it out!</h3>
		<div id="wrapper">
			<h5>Calculator</h5>
			<input readonly type="text" id="leftScreen"></input>
			<input readonly type="text" id="centerScreen"></input>
			<input readonly type="text" id="rightScreen"></input>

			<div class="row1-calculator">
				<button class="btn-calculator" data-value="1">1</button>
				<button class="btn-calculator" data-value="2">2</button>
				<button class="btn-calculator" data-value="3">3</button>
				<button class="btn-calculator operate" data-value="+">+</button>
			</div>
			<div class="row2-calculator">
				<button class="btn-calculator" data-value="4">4</button>
				<button class="btn-calculator" data-value="5">5</button>
				<button class="btn-calculator" data-value="6">6</button>
				<button class="btn-calculator operate" data-value="-">-</button>
			</div>
			<div class="row3-calculator">
				<button class="btn-calculator" data-value="7">7</button>
				<button class="btn-calculator" data-value="8">8</button>
				<button class="btn-calculator" data-value="9">9</button>
				<button class="btn-calculator operate"  data-value="x">x</button>
			</div>
			<div class="row4-calculator">
				<button class="btn-calculator" data-value="0">0</button>
				<button id="solve"  data-value="=">=</button>
				<button class="btn-calculator" id="period" data-value=".">.</button>
			</div>
			
			<div class="row5-calculator">
				<button  id="clear" data-value="">Clear</button>
				<button id="back">Delete</button>
				<button class="btn-calculator operate" id="squared" data-value="^2">^2</button>
				<button class="btn-calculator operate" data-value="/" id="divide">/</button>
			</div>
			
			
		</div>
		<script src="/js/bootstrap.min.js"></script>
		<script src="http://code.jquery.com/jquery-1.11.0.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<script src="/js/calculator.js"></script>
	</body>
</html>