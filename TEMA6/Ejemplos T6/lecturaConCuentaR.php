<?php
// Se abre el fichero para lectura.
	$manejadorFichero1=fopen ("lecturaSimple.txt","r");
	echo ("El contenido del fichero es: <b>");
	
/* Se muestra el contenido del fichero y se asigna el total de caracteres a una variable. */
	$caracteres=fpassthru ($manejadorFichero1);
	echo ("</b><br>\n El total de caracteres es de: <b>");
	echo ($caracteres."</b><br>\n");
	fclose ($manejadorFichero1);
?>