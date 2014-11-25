<?php 
	$miVariable = "Juan";
	echo ("Informacion de la variable \"\$miVariable\":");
	echo ("<br>");
	var_dump($miVariable);
	echo ("<br>");
	echo("Contenido de la variable: ".$miVariable);
	echo ("<br>");
	$miVariable = null;
	echo ("Despues de asignarle el valor nulo: ".gettype($miVariable));
	
?> 