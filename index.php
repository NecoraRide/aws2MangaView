<!DOCTYPE HTML>
<html>
	<head>
		<!-- LOGIN
			<script src="js/auth.js"></script>
		-->
		<title>Home</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />


		<link rel="shortcut icon" type="image/png" href="img/favicon.png">
		<link rel="stylesheet" href="css/bootstrap.css" />
		<link rel="stylesheet" href="css/main.css" />
		<link rel="stylesheet" href="css/font-awesome.css" />
	</head>
	<body>
	<!-- Menu -->
	<div class="navbar navbar-default navbar-fixed-top navbar-nameless" role="navigation">
		<div class="col-lg-6 col-md-6 col-sm-7">
			<ul class="menu nav navbar-nav">
				<li class="current active"><a href="#" title="Visor de mangas">Home</a></li>
				<li class=""><a href="#" title="Mangas">Mangas</a></li>
				<li class=""><a href="#" title="Tops mangas">Top</a></li>
				<li class=""><a href="#" title="Subir Manga">Upload</a></li>
			</ul>
		</div>
	</div>
	<!-- /Menu -->
	<div class="col-sm-12 col-xs-12 col-md-9 col-lg-9">
		<div id="espaciadoTop"></div>
		<h1>ULTIMOS MANGAS A&Ntilde;ADIDOS</h1>
		<div class="zone">
			<?php for($i=0;$i<6;$i++) :?>
			<div class="col-sm-4">
				<img class="manga" src="Mangas/test.png"></img>
				<img class="separacion "src="img/separador2.png"></img>
			</div>
			<?php endfor; ?>

		</div>
	</div>
	</body>
	<footer class="panel panel-default footerMod">
		<div class="textFooter">&copy; Juan Carlos Lopez Puig, Alex Serret Aranda, Cristian Fernandez Plaza</div>
	</footer>
</html>
