<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Práctica 6 - Ejercicio 1</title>
</head>
<body>
	<h2>Contenido del archivo</h2>

	<?php
	$manejador = fopen("Pedidos.txt", "r");
	while(!feof($manejador))
	{
		echo fgets($manejador). "<br />";
	}
	fclose($manejador);
	?>
	
</body>
</html>