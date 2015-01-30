<?php
// Se comprueba si el archivo tiene el formato adecuado.
	if ($_FILES["fichero"]["type"]!="image/pjpeg") {
		die ("El fichero no tiene el formato adecuado.");
	}

// Se comprueba que tenga un peso adecuado.
	if ($_FILES["fichero"]["size"] > 200000) {
		die ("El fichero es demasiado grande.");
	}

// Se comprueba que no se hayan producido errores.
	if ($_FILES["fichero"]["error"] != 0) {
		die ("Se ha producido un error.");
	}

// Por último, se intenta grabar y se comprueba si se graba bien.
	$archivoRecibido=$_FILES["fichero"]["tmp_name"];
	$destino="ficherosSubidos/fotoDelUsuario.jpg";
	if (move_uploaded_file ($archivoRecibido, $destino)) {
		echo ("Fichero grabado");
	} else {
		echo ("El fichero no se ha podido grabar.");
	}
?>
