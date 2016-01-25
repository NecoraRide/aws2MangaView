<?php
    // Funcion de inicio de sesion
    session_start();
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Home</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

        <link rel="stylesheet" href="css/carrousel.css" />
        <link rel="stylesheet" href="css/manga.css" />
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
				<li class="current active"><a href="index.php" title="Visor de mangas">Home</a></li>
				<li class=""><a href="mangas.php" title="Mangas">Mangas</a></li>
				<li class=""><a href="#" title="Tops mangas">Top</a></li>
				<li class=""><a href="#" title="Subir Manga">Upload</a></li>
			</ul>
            <?php
            //Si hay sesion iniciada...
            if(isset($_SESSION["usuario"])){
                echo 'Bienvenido '.$_SESSION["usuario"]."<br>";

                echo '<form action="modulos/funional/logoutAction.php" method="post"
                        style="float: right; padding-right: 15px; margin-bottom:-5px; margin-top: -10px">
                        <button class="btn btn-default" style="margin-top:-5px">Cerrar sesi&oacute;n</button>
                      </form>';
            }
            else{
                //Si no hay sesion iniciada...
                echo '<form role="form" method="post" action="modulos/funional/loginAction.php"
                            style="float: right; padding-right: 15px; margin-bottom: -5px">
                        <input type="email" class="form-control" id="mail" placeholder="Email/Usuario" name="mail" style="margin-top:5px" />
                        <input type="password" class="form-control" id="pass" placeholder="Contraseña" name="pass" style="margin-top:5px" />
                        <button type="submit" class="btn btn-default" style="margin-top:-5px" >Iniciar sesión</button>
                    </form>';
            }
            ?>

		</div>
	</div>
	<!-- /Menu -->
