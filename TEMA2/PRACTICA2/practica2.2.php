<?php 
	// Generamos un número aleatorio, y lo mostramos por pantalla
	$aleatorio = rand();
	echo("El numero aleatorio es ".$aleatorio);

	// Creamos una función, para determinar si nuestro número es primo o no
	function primo($aleatorio){

		if ($aleatorio < 2) {
			return false;
		}
		for ($i = 2; $i < $aleatorio; $i++) {
			if ($aleatorio % $i == 0) return false;
		}
		return true;
	}
	
	// Por último, devolvemos nuestro resultado por pantalla
	if (primo($aleatorio)){
		echo(", y es primo");
	} else {
		echo(", y no es primo");
	}
 ?>