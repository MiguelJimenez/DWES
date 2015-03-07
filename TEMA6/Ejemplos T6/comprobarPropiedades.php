<?php

// Se comprueba si existe el fichero.
	if (file_exists($_POST["elemento"])) {
		echo ("El elemento existe.<br>\n");
	} else {
		echo ("El elemento NO existe en la ruta especificada .<br>\n");
	}
// Se comprueba si es un fichero.
	if (is_file($_POST["elemento"])) {
		echo ("El elemento es un fichero.<br>\n");
	} else {
		echo ("El elemento NO es un fichero.<br>\n");
	}
// Se comprueba si es un directorio.
	if (is_dir($_POST["elemento"])) {
		echo ("El elemento es un directorio.<br>\n");
	} else {
		echo ("El elemento NO es un directorio.<br>\n");
	}
// Se comprueba si se puede leer.
	if (is_readable($_POST["elemento"])) {
		echo ("El elemento es legible.<br>\n");
	} else {
		echo ("El elemento NO es legible.<br>\n");
	}
// Se comprueba si se puede escribir.
	if (is_writeable($_POST["elemento"])) {
		echo ("El elemento es escribible.<br>\n");
	} else {
		echo ("El elemento NO es escribible.<br>\n");
	}
// Se comprueba si se puede ejecutar.
	if (is_executable($_POST["elemento"])) {
		echo ("El elemento es ejecutable.<br>\n");
	} else {
		echo ("El elemento NO es ejecutable.<br>\n");
	}
?>
