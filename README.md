# aws2MangaView
Readme

1. ¿Qué es MangaView?
  * MangaView es un pequeño proyecto de visionado online de contenido. Está principalmente orientado a la vision de comics y mangas online, pero podría ser adaptado para el visionado de cualquier tipo de contenidos.
2. Licencia
  * Esta aplicación web esta sujeta a una licencia Creative Commons: http://creativecommons.org/licenses/by-nc-nd/4.0/
3. Instalación
  * Descargar el repositorio completo mediante git o extraccion del .zip que se puede descargar desde aquí.
  * Extraer en el directorio deseado.
  * Crear dos directorios nuevos:
    * En la raiz, crearemos el directorio Manga.
    * Dentro de Manga, crearemos otro directorio nuevo: tmp.
    * Aquí dentro se tienen que poner los mangas que mostraremos. Los mangas tendrá que tener dentro sus correspondientes capitulos en sus directorios correspondientes, que a la vez, estos contendrán las imagenes.
4. Configuración
  * Por el momento, es necesario configurar la url de los ultimos mangas añadidos a mano, ya que la ruta de estos se encuentra estática. 
5. Lenguajes
  * PHP por parte del lado servidor para gestionar login, subida de ficheros y otras pequeñas cosas, tal como el menu superior interactivo, etc...
  * Javascript/jQuery para el lado cliente, utilizado en el carrosel y el visor de todos los contenidos.
  * Bootstrap/CSS/HTML5 para el apartado visual.
6. Funcionalidades
  * Sistema de login completo. Sin registro, por el momento.
  * Un carrousel para el visionado de los ultimos mangas subidos.
  * Otro carrousel para el visionado de todos los mangas subidos.
  * Semi-Responsive. En progreso.
  * Subida de ficheros, necesitas iniciar sesión. Solo admite ficheros .zip
7. Estructura de directorios
  * CSS
    * bootstrap.css -> CSS de bootstrap
    *	bootstrap.min.css -> CSS de bootstrap minificado
    *	carrousel.css -> CSS para el carrousel "ultimos mangas añadidos"
    *	font-awesome.css -> CSS de font Awesome. No utilizado en esta versión pero uso futuro.
    *	main.css -> CSS principal
    *	mangas.css -> CSS de la parte de mangas.php
    *	sticky-footer.css -> CSS para el footer
  * IMG
    * Nada del otro mundo, directorio con las imagenes necesarias
  * JS
    * bootstrap.min.js -> JS basico de bootstrap
  	* jquery.min.js -> Libreria de jQuery
  	* jssor.slider.mini.js -> JS del slider "ultimos mangas añadidos" 
  	* slidder-control.js -> JS del slider de todos los mangas
	* MODULOS
	  * ARCHIVOS_LOGIN
	    *	ie-emulation-modes-warning.js -> Archivo de CORE para el login, resuelve errores en IE
	    * ie10-viewport-bug-workaround.css -> Archivo de CORE para el login, resuelve errores en IE
	    * ie10-viewport-bug-workaround.js -> Archivo de CORE para el login, resuelve errores en IE
	    * login.css -> CSS del login, por despiste, se quedó aquí
	  * FICHEROS
	    * mangas.txt -> Nombres de los mangas disponibles separados por ":"
	    * users.txt -> Sí, usamos un fichero txt. Esto deberia cambiarse por una DDBB. Contiene los usiarios existentes.
	  * FUNIONAL
	    * loginAction -> CORE lógico del login
	    * logoutAction -> CORE lógico del logout
	    * subirArchivo -> CORE lógico de la subida de ficheros
  * footer.php -> Footer de la web, importado siempre como include_once().
  * header.php -> Header de la web, importado siempre como include_once, contiene el menú superior de la web y funcionalidades genéricas utilizadas en todas las planas.
  * index.php -> Página principal. 
  * list.php -> Muestra todas las iamgenes de un manga
  * mangas.php -> Listado de todos los mangas
  * upload.php -> Subida de fichero zip
