<?php

// Se "abre" el directorio principal de la partición.
	$manejador=opendir("C:/");
	echo ("Contenido del directorio principal:<br>\n");
	
// Se rebobina el directorio para asegurarnos de posicionarnos al principio.
	rewinddir($manejador);
	
// Mientras haya elementos (directorios o ficheros) para leer.
	while ($contenido=readdir($manejador)){
		echo ($contenido."<br>\n");
	}
// Se cierra el directorio.
	closedir($manejador);
?>
