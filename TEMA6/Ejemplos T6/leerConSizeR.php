<?php

// Se determina el tamaño del fichero.
	$caracteres=filesize ("lecturaSimple.txt");
	
// Se abre el fichero para lectura.
	$manejadorFichero1=fopen ("lecturaSimple.txt","r");
	
// Se lee todo el fichero de una vez.
	$bloque=fread ($manejadorFichero1, $caracteres);
	echo ("El contenido del fichero es: <b>$bloque</b><br>\n");
	
// Se muestra el tamaño del fichero.
	echo ("El total de caracteres es de: <b>$caracteres</b>");
	
// Se cierra el fichero
	fclose ($manejadorFichero1);
?>