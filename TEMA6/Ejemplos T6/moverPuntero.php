<?php

// Se abre el fichero para lectura.
	$manejadorFichero1=fopen ("lecturaSimple.txt","r");
	
// Se lee la mitad del fichero
	$contenido=fread ($manejadorFichero1,14);
	echo ("La primera mitad del fichero es: <b>$contenido</b><br>\n");
	echo ("Nos vamos a desplazar a la posici�n 3.<br>\n");
	
// Desplazamos el puntero al cuarto car�cter.
	fseek ($manejadorFichero1,3);
// leemos el cuarto car�cter y lo mostramos
	echo ("El car�cter correspondiente a la posici�n actual es <b>".fgetc($manejadorFichero1)."</b><br>\n");
// Se cierra el fichero
	fclose ($manejadorFichero1);
?>
