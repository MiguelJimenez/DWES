<?php 
// Creamos nuestra función
function cuenta($array,$numero){
	$contador=0;
	for ($i=0; $i < 10; $i++) { 
		if($array[$i]==$numero){
			$contador++;
		}

	}
	echo "El $numero se repite $contador veces";
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

// A modo de comprobación, imprimimos los elementos de nuestro array
echo "<pre>";
print_r($miArray);
echo "</pre>";

// Llamamos a nuestra función cuenta() con los parámetros correspondientes
cuenta($miArray,$numeroElegido);





 ?>