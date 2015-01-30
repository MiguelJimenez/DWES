<?php

	$manejador=fopen ("multiLinea.txt","r");
	$long=filesize("multiLinea.txt");
	$contenido= fread($manejador, $long);
	$contenidom = explode(" ", $contenido);
	$buscar="os";
	$cont=0;
	foreach($contenidom as $palabra){
		if($palabra==$buscar){
		$cont++;
		}
		}
	echo ("se repite $cont veces");
	fclose ($manejador);
?>