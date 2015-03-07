<?php
// Se establece el nombre que tendrá el fichero original, y el de la copia.
	$original="multilinea.txt";
	$copia="copiado.txt";
// Se intenta copiar y se muestra el resultado.
	if(copy($original, $copia)){
		echo ("El fichero ha sido copiado.<br>\n");
	} else {
		echo ("El fichero NO pudo ser copiado.<br>\n");
	}
?>
