<?php
    $uploadedfileload="true";
    $uploadedfile_size=$_FILES['uploadedfile']['size'];
    $msg = "";
    if ($_FILES['uploadedfile']['size']>1500000000)
        {$msg=$msg."El archivo es mayor que 1,5GB, debes reduzcirlo antes de subirlo<BR>";
        $uploadedfileload="false";}

    if (!($_FILES['uploadedfile']['type'] =="application/x-zip-compressed")){
        $msg=$msg."El fichero no es del tipo correcto, solo se admiten subidas de ficheros .zip";
        $uploadedfileload="false";
    }

        $file_name=$_FILES['uploadedfile']['name'];
        $add="../../Mangas/tmp/".$file_name;

    if($uploadedfileload=="true"){
        if(move_uploaded_file ($_FILES['uploadedfile']['tmp_name'], $add)){
            echo " Ha sido subido satisfactoriamente";
    }else{
        echo "Error al subir el archivo";}

    }else{
        echo $msg;
    }

    /*DESCOMPRESION*/
    $zip = new ZipArchive;
    $res = $zip->open('../../Mangas/tmp/'.$_FILES['uploadedfile']["name"]);
    if ($res === TRUE) {
        $zip->extractTo('../../Mangas/'.$_FILES['uploadedfile']["name"]);
        $zip->close();
        /*BORRAMOS ZIP*/
        unlink('../../Mangas/tmp/'.$_FILES['uploadedfile']["name"]);
        ?>
            <script>
                location.href='../../upload.php?id=ok';
            </script>
        <?php
    }else{
        ?>
            <script>
                location.href='../../upload.php?id=ko';
            </script>
        <?php
    }
?>
