<?php

/*Se intenta eliminar un fichero y se informa del resultado.*/
	if (unlink("ficheroParaEliminar.txt")){
		echo ("Se ha eliminado el fichero.<br>\n");
	} else {
		echo ("NO se pudo eliminar el fichero.<br>\n");
	}
?>
