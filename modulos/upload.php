<?php
    if(!(isset($_SESSION["nombre"]))){
        echo '<p>Es necesario iniciar sesión para acceder a la subida de archivos.';
    }else{
        echo '<form enctype="multipart/form-data" action="funional/subirArchivo.php" method="POST">';
        echo '<input name="uploadedfile" type="file" />';
        echo '<input type="submit" value="Subir archivo" />';
        echo '</form>';
    }
?>
