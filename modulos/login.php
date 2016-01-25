<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <link rel="icon" href="../img/favicon.png">

        <title>Iniciar Sesión</title>

        <link href="./archivos_login/login.css" rel="stylesheet">
        <!-- CSS para solucionar errores con ie10 -->
        <link href="./archivos_login/ie10-viewport-bug-workaround.css" rel="stylesheet">
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="./archivos_login/ie-emulation-modes-warning.js"></script>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

  <body cz-shortcut-listen="true">

    <div class="container">

      <form class="form-signin" method="post" action="funional/loginAction.php">
        <h2 class="form-signin-heading">Inicia sesión</h2>
        <label for="usr" class="sr-only">Usuario</label>
        <input id="usr" name="mail" class="form-control" required="true" autofocus="true">
        <label for="inputPassword" class="sr-only">Contraseña</label>
        <input type="password" id="inputPassword" name="pass" class="form-control" required="true">
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Recordar mi usuario y contraseña
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar sesión</button>
      </form>

    </div>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./archivos_login/ie10-viewport-bug-workaround.js"></script>


</body></html>
