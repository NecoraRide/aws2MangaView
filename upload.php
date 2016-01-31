<?php include('header.php') ?>
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="espaciadoTop"></div>
                <h1>SUBIR MANGAS</h1>
                <div class="zone">
                    <?php
                        if(!(isset($_SESSION["usuario"]))){
                            echo '<p>Es necesario iniciar sesión para acceder a la subida de archivos.';
                        }else{
                            echo '<form enctype="multipart/form-data" action="modulos/funional/subirArchivo.php" method="POST">';
                            echo '<input name="uploadedfile" type="file" /><br />';
                            echo '<input type="submit" value="Subir archivo" />';
                            echo '</form>';
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php include('footer.php') ?>
