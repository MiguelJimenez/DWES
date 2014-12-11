<?php 
// Creamos nuestra función
function cuenta($array,$numero){
	$contador=0;
	for ($i=0; $i < 10; $i++) { 
		if($array[$i]==$numero){
			$contador++;
		}

	}
	echo "<pre>";
	print_r($array);
	echo "</pre>";
	echo "El $numero se repite $contador veces";
}

/*function eliminar($array){
	global $resultado;
	$resultado = array_unique($array);
	echo "<pre>";
	print_r($resultado);
	echo "</pre>";
}*/
// Creamos una función que nos elimine los elementos repetidos de nuestro array
function eliminar($array){
	for ($i=0; $i < 10; $i++) { 
		if ($i==9) {
			break;
		}
		if ($array[$i]==$array[$i+1]) {
			unset($array[$i]);
		}
	}
	// Imprimimos nuestro array a modo de comprobación
	echo "<pre>";
	print_r($array);
	echo "</pre>";
}

// Creamos el array
$miArray = array();
// Ingresamos el número a buscar en una variable
$numeroElegido = 5;
// Rellenamos nuestro array con numeros aleatorios entre el 1 y el 10
// Consideramos que nuestro array es de 10 elementos
for ($i=0; $i < 10; $i++) { 
	$aleatorio = rand(1,10);
	array_push($miArray, $aleatorio);
}
// Ordenamos el array
sort($miArray) ;

// Llamamos a nuestra función cuenta() con los parámetros correspondientes
cuenta($miArray,$numeroElegido);
echo "<br><br><br>";
// Llamamos a nuesra función para eliminar los elementos repetidos en nuestro array
echo "Nuestro nuevo array sin elementos repetidos es:<br>";
eliminar($miArray);

?>