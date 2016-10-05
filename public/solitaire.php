<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<title>Home</title>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
			<link rel="stylesheet" href="/css/main.css">
			<link href="https://fonts.googleapis.com/css?family=Architects+Daughter" rel="stylesheet">
			<style>
			.workspace {
				border: 1px solid lightgreen;
			}
			div.hotspot {
				border: 1px solid lightgreen;
				border-radius: 10%;
			}
			#putgamehere {  
			    border: 1px solid black;
			    padding: 2px;
			    background-color: aliceblue;
			    position: absolute;
			    width: 100%;
			    top: 90%;
			}
			</style>	
		</head>
		<body>
			<?php require_once "templates.php" ?>
			<div class="col-lg-12">
				<div class="col-md-4 col-md-offset-4">
					<div class="row">
						<p>
							This plays with the standard Klondike Solitaire rules. Please enjoy this game.
							JS files come from <a href="http://www.howtocreate.co.uk/tutorials/jsexamples/solitaire.html">Here</a>
						</p>
					</div>
				</div>
				<div class="row">
					<div id="putgamehere">
						<!-- For the game to be applied -->
					</div>
				</div>
			</div>
			<script src="/js/solitaireGame.js"></script>
			<script src="/js/solitaire.js"></script>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
			<script src="/js/bootstrap.min.js"></script>
			<script>
			window.onload = function () {
			  if( !document.getElementById ) { return; } // To be nice to old browsers
			  var game1 = new solitaireGame('solitaire1',document.getElementById('putgamehere'));
			  game1.addImagePack('mainset',[['set1','Back Set 1']],'.png',25,36,'Main set');
			  game1.startGame();
			}
			window.onload = function () {
			  if( !document.getElementById ) { return; } // To be nice to old browsers
			  var game1 = new solitaireGame('solitaire1',document.getElementById('putgamehere'));
			  game1.addImagePack('cardsets/h36/',[['walk','Mountain walk'],['midnightsun','Midnight sun']],'.png',25,36,'Northern Norway');
			  game1.addImagePack('cardsets/h96/',[['bluepattern','Blue pattern'],['blue','Plain blue'],['x','Red X']],'.gif',71,96,'Once in a Lifetime');
			  game1.addImagePack('cardsets/h135/',[['cloud','Shroud of cloud'],['redwine','Red wine'],['horse','Horseback'],['mouldings','Mouldings']],'.png',90,135,'Orca');
			  game1.startGame();
			}
			</script>	
		</body>
	</html>