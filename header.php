<?php
    session_start();
?>
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
        <link rel="stylesheet" href="css/carrousel.css" />
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
	</head>
	<body>
	<!-- Menu -->
	<div class="navbar navbar-default navbar-fixed-top navbar-nameless" role="navigation">
		<div class="col-lg-6 col-md-6 col-sm-7">
			<ul class="menu nav navbar-nav">
				<li class="current active"><a href="index.php" title="Visor de mangas">Home</a></li>
				<li class=""><a href="mangas.php" title="Mangas">Mangas</a></li>
				<li class=""><a href="top.php" title="Tops mangas">Top</a></li>
				<li class=""><a href="modulos/upload.php" title="Subir Manga">Upload</a></li>
			</ul>
            <?php
                if(!(isset($_SESSION["usuario"]))){
                    echo '<form style="margin-bottom:-5px; float: right; padding-right:1%;"                     action="modulos/funional/loginAction.php" method="post">
                    <input type="email" id="mail" class="form-control" placeholder="Usuario" required="true" name="mail"
                           style="margin-top:5px" />
                    <input type="password" id="pass" class="form-control" placeholder="Contraseña" required="true" name="pass"
                           style="margin-top:5px" />
                    <button class="btn btn-primary" type="submit" style="margin-top:-5px;">Iniciar sesion</button>
                </form>';
                }else{
                    echo '<form style="margin-bottom:-5px; float: right; padding-right:1%;"                     action="modulos/funional/logoutAction.php" method="post">
                    <button class="btn btn-primary" type="submit" style="margin-top:5px;">Cerrar sesion</button>
                </form>';
                }

            ?>
		</div>
	</div>
	<!-- /Menu -->
