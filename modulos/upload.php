<form action="subearchivo.php" method="post" enctype="multipart/form-data"> 
    <p>El manga tiene que estar comprimido en formato ZIP, dentro del ZIP tienen que estar los 
        capitulos en diferentes carpetas numerasdas del 1 hasta el capitulo final a subir.
    </p>
   	<b>Nombre del manga:</b> 
   	<p/>
   	<input type="text" name="cadenatexto" size="20" maxlength="100"> 
   	<input type="hidden" name="MAX_FILE_SIZE" value="100000"> 
   	<br> 
   	<br> 
   	<b>Enviar un nuevo archivo: </b> 
   	<br> 
   	<input name="userfile" type="file"> 
   	<br> 
   	<input type="submit" value="Enviar">
</form>