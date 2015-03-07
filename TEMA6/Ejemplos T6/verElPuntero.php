<?php

// Se abre el archivo para su lectura.
	$manejador=fopen("lecturaSimple.txt","r");
	
// Mientras no se alcance el final del fichero
	while(!feof($manejador)){
// Se lee un caracter.
		$caracter=fgetc($manejador);
// Se obtiene la posición del puntero.
		$posicion=ftell($manejador);
/* Se comprueba si no se trata de la marca de final de fichero.*/
		if ($caracter){
// Se muestra el carácter y la posición que ocupa.
			echo ("El carácter en la posición ");
			echo("<b>$posicion</b> es \"<b>");
			echo("$caracter</b>\<br>\n");
		}
	}
// Se cierra el fichero.
	fclose ($manejador);
?>