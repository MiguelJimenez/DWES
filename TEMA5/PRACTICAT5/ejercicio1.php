<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Práctica 5 - Ejercicio 1</title>
</head>
<body>
	<form action="ejercicio1.php" method="post">
		Ingrese el nombre de la cookie<input type="text" name="nombre">
		<br>
		Ingrese el valor de la cookie<input type="text" name="valor">
		<br>
		Ingrese el tiempo de vida en segundos de la cookie<input type="text" name="tiempo">
		<br>
		<input type="submit" name="boton" value="Crear">
		<input type="submit" name="boton" value="Comprobar">
		<input type="submit" name="boton" value="Destruir">
	</form>
	<br>
	<div>
		<?php 

	error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
	/*$_POST['nombre'] = $_POST['nombre'];
	$valor = $_POST['valor'];
	$tiempo = $_POST['tiempo'];*/


	switch ($_POST['boton'])
	{
		case 'Crear':
			if(is_numeric($_POST['tiempo']) && $_POST['nombre']!="" && $_POST['valor']!="")
			{
				if(!$_COOKIE[$_POST['nombre']])
				{
					setcookie($_POST['nombre'], $_POST['valor'], time()+$_POST['tiempo']);

				 	echo "Se ha creado la cookie ".$_COOKIE[$_POST['nombre']]." Se destruirá en ".$_POST['tiempo']." segundos";
			 	}
			 	else
			 	{
			 		echo "Ya existe la cookie";
			 	}
			}
			else
			{
				echo "Por favor, rellena todos los campos, e ingresa un número en el campo 'Tiempo'";
			}
			break;

		case 'Comprobar':
			if(isset($_COOKIE[$_POST['nombre']]))
			{
				echo "Existe ".$_COOKIE[$_POST['nombre']];
			}
			else
			{
				echo "No existe la cookie ".$_COOKIE[$_POST['nombre']];
			}

		break;
		
		case 'Destruir':
			setcookie($_POST['nombre'], "", time()-36000);
			echo "La cookie ".$_COOKIE[$_POST['nombre']]." ha sido destruida";
			break;
	}

 ?>
	</div>
	
	
</body>
</html>