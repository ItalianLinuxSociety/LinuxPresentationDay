<?php

function doHeader() {
	?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Linux Presentation Day [IT]</title>

		<link href="css/bootstrap.min.css" rel="stylesheet" />
		<link href="css/leaflet.css" rel="stylesheet" />
		<script src="js/leaflet.js"></script>
		<script src="js/jquery-2.1.1.min.js"></script>
		
		<style>
			.logo {
				background-image: url(images/people.png);
				background-position: center;
				background-repeat: no-repeat;
			}
			
			#map {
				width: 100%;
				height: 500px;
			}
		</style>

		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container">
			<br/>

			<div class="row">
				<div class="col-md-12">
					<div class="jumbotron text-center">
						<div class="logo">
							<a href="index.php"><img src="images/logo.png"></a>
						</div>
						<h1>Linux Presentation Day</h1>
						<p>Il 30 aprile, in tutta Europa,<br/>una occasione per conoscere e far conoscere Linux ed il software libero.</p>
					</div>
				</div>
			</div>
	
	<?php
}

function doFooter() {
	?>
	
			<hr/>
			
			<div class="row">
				<div class="col-md-12 well text-right">
					<p>Powered by <a href="http://linux-presentation-day.org/">Linux Presentation Day</a> and <a href="http://www.ils.org/">Italian Linux Society</a></p>
				</div>
			</div>
		</div>
	</body>
</html>
	
	<?php
}

