<?php

// Se abre el archivo para su lectura.
	$manejador=fopen("lecturaSimple.txt","r");
	
// Mientras no se alcance el final del fichero
	while(!feof($manejador)){
// Se lee un caracter.
		$caracter=fgetc($manejador);
// Se obtiene la posici�n del puntero.
		$posicion=ftell($manejador);
/* Se comprueba si no se trata de la marca de final de fichero.*/
		if ($caracter){
// Se muestra el car�cter y la posici�n que ocupa.
			echo ("El car�cter en la posici�n ");
			echo("<b>$posicion</b> es \"<b>");
			echo("$caracter</b>\<br>\n");
		}
	}
// Se cierra el fichero.
	fclose ($manejador);
?>