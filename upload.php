<?php include('header.php') ?>
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="espaciadoTop"></div>
                <h1>SUBIR MANGAS</h1>
                <div class="subirmanga" style="backgroundColor: white;">
                    <?php
                        if($endofurl == 'upload.php?subida=error'){
                            echo '<div class="error">
                                    <p>ERROR AL SUBIR EL FICHERO</p>
                                  </div>';
                        }else if($endofurl == 'upload.php?subida=success'){
                            echo '<div class="success">
                                    <p>Manga subido correctamente</p>
                                  </div>';
                        }
                        if(!(isset($_SESSION["usuario"]))){
                            echo '<p>Es necesario iniciar sesión para acceder a la subida de archivos.';
                        }else{
                            echo '<form enctype="multipart/form-data" action="modulos/funional/subirArchivo.php" method="POST">';
                            echo '<br /><input name="uploadedfile" type="file" />';
                            echo '<input class="botonEnviarManga" type="submit" value="Subir archivo" />';
                            echo '</form>';
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php include('footer.php') ?>
