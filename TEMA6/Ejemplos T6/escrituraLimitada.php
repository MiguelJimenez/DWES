<?php

/* Se abre el archivo para su escritura. Si no existe, PHP se encaarga de crearlo.*/
	$manejador=fopen("escrituraLimitada.txt","a");

	$cadena="Esto es una cadena de texto.";
/* Se intenta escribir la cadena y se comprueba si ha sido posible.*/
	if (fwrite($manejador,$cadena,6)){
		echo ("La cadena se ha escrito en el archivo.");
	} else {
		echo ("NO SE HA PODIDO ESCRIBIR.");
	}
// Se cierra el fichero.
	fclose ($manejador);
?>
