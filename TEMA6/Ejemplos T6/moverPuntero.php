<?php

// Se abre el fichero para lectura.
	$manejadorFichero1=fopen ("lecturaSimple.txt","r");
	
// Se lee la mitad del fichero
	$contenido=fread ($manejadorFichero1,14);
	echo ("La primera mitad del fichero es: <b>$contenido</b><br>\n");
	echo ("Nos vamos a desplazar a la posición 3.<br>\n");
	
// Desplazamos el puntero al cuarto carácter.
	fseek ($manejadorFichero1,3);
// leemos el cuarto carácter y lo mostramos
	echo ("El carácter correspondiente a la posición actual es <b>".fgetc($manejadorFichero1)."</b><br>\n");
// Se cierra el fichero
	fclose ($manejadorFichero1);
?>
