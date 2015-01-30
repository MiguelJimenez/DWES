<?php
	$archivoRecibido=$_FILES["fichero"]["tmp_name"];
	$destino="ficherosSubidos/fotoDelUsuario.jpg";
	move_uploaded_file ($archivoRecibido, $destino);
	echo ("Fichero grabado");
?>
