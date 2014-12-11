<?php
	$colores=array("b"=>"green", "r"=>"blue", "d"=>"red");
	
	ksort($colores);
	
	foreach ($colores as $clave=>$valor){
	echo ("$clave=>$valor");
	}
?>