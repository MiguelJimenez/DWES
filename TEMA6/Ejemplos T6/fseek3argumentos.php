<?php

// Se abre el fichero para lectura.
	$manejadorFichero1=fopen ("lecturaSimple.txt","r");
	
// Se lee la mitad del fichero
	$contenido=fread ($manejadorFichero1,14);
	echo ("La primera mitad del fichero es: <b>$contenido</b><br>\n");
	echo ("Nos vamos a desplazar al primer caracter del fichero.<br>\n");
	
/* Desplazamos el puntero cinco caracteres hacia atrás desde la posición actual. */
	fseek ($manejadorFichero1,-5,SEEK_CUR);
	
// leemos el correspondiente carácter y lo mostramos
	echo ("El carácter correspondiente a la posición actual es <b>".fgetc($manejadorFichero1)."</b><br>\n");
	
// Se cierra el fichero
	fclose ($manejadorFichero1);
?>
