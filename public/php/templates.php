<?php 
 echo  '<nav class="navbar navbar-default container">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand"></a>
			</div>
				<ul class="nav navbar-nav">
					<li><a href="/resume.html">Home</a></li>
					<li><a href="portfolio.html">Portfolio</a></li>
				<!--	<li><a href="/php/login.php" target="_blank">Login</a></li> -->
				</ul>
					<button class="btn btn-default btn-sm col-md-1" id="login">
							<a class="dropdown-toggle" href="#" data-toggle="dropdown" id="navLogin">Login</a>
						<div class="dropdown-menu" style="padding:17px;">
							<form class="form" id="formLogin"> 
								<input name="username" id="username" type="text" placeholder="Username"> 
								<input name="password" id="password" type="password" placeholder="Password"><br>
					</button>
			<form class="navbar-form navbar-right" role="search">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Search">
						<span class="input-group-btn">
							<button type="reset" class="btn btn-default">
								<span class="glyphicon glyphicon-remove">
									<span class="sr-only">Close</span>
								</span>
							</button>
						<button type="submit" class="btn btn-default">
							<span class="glyphicon glyphicon-search">
								<span class="sr-only">Search</span>
							</span>
						</button>
					</span>
				</div>
			</form>
		</div>
	</nav>';
?>