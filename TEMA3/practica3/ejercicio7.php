<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 7</title>
</head>
<body>
	<?php 
	// Creamos el array con los datos de los alumnos
	$matriz =  array(
		array("German","Baena Morales",'Español',8.5),
		array("Rafael","Pérez González",'Español',7.5),
		array("Miguel","García Díaz",'Español',3),
		array("Raúl","Ruiz Blanco",'Español',4),
		array("Antonio","Gómez Jiménez",'Español',5)
		);

	// Imprimimos nuestro array a modo de comprobación
	echo "<pre>";
	print_r($matriz);
	echo "</pre>";

	// Creamos nuestra función comprueba, como parámetros pasamos la matriz y el id del alumno que queremos mostrar
	function comprueba($matriz, $id) {
		// Hacemos coindicir el id del alumno con la posición de nuestro array
		$indice_alumno = 0;
		switch ($id) {
			case '1':
			$indice_alumno = 0;
			break;
			case '2':
			$indice_alumno = 1;
			break;
			case '3':
			$indice_alumno = 2;
			break;
			case '4':
			$indice_alumno = 3;
			break;
			case '5':
			$indice_alumno = 4;
			break;

			default:
			echo "El número no se corresponde con el índice de ningún alumno";
			break;
		}

		// Con un bucle recorremos nuestro array, y devolvemos los datos según el índice del alumno
		for ($i = 0; $i <= 3; $i++) {
			echo $matriz[$indice_alumno][$i]."-";
		}
		echo "<br>";
	}

	// Creamos nuestra función de estadísticas, pasando como parámetro la matriz
	function estadisticas($matriz) {
		$aprobados = 0;
		$nota_alumnos_total = 0.0;
		for ($i = 0; $i < 5; $i++) {
			$nota_alumno = $matriz[$i][3];
			$nota_alumnos_total += $nota_alumno;
			if ($nota_alumno >= 5.0) {
				$aprobados++;
			}
		}
		$nota_media_total = $nota_alumnos_total / 5;

		echo "Hay un total de ".$aprobados." aprobados.<br>";
		echo "Nota media de la clase: ".$nota_media_total;
	}
	// Llamamos a nuestras funciones
	comprueba($matriz,1);
	estadisticas($matriz);



	?>
</body>
</html>