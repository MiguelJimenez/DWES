<?php 

if (isset($_POST['nombre']))
{
	$nombre = $_POST['nombre'];
	$valor = $_POST['valor'];
	$tiempo = $_POST['tiempo'];



	switch ($_POST['boton'])
	{
		case 'Crear':
		if(!isset($_COOKIE[$nombre]))
		{
			if(is_numeric($tiempo) && $nombre!="" && $valor!="")
			{
				setcookie($nombre, $valor, time()+$tiempo);
				echo "Se ha creado la cookie ".$nombre." Se destruirá en ".$tiempo." segundos";
			}
			else
			{
				echo "Por favor, rellena todos los campos, e ingresa un número en el campo 'Tiempo'";
			}
		}
		else
		{
			echo "Ya existe la cookie";
		}

		break;

		case 'Comprobar':
		if(isset($_COOKIE[$nombre]))
		{
			echo "Existe la cookie ".$nombre." con valor: ".$_COOKIE[$nombre];
		}
		else
		{
			echo "No existe la cookie ".$nombre;
		}

		break;

		case 'Destruir':
		setcookie($nombre, "", time()-36000);
		echo "La cookie ".$nombre." ha sido destruida";
		break;
		
	}

}

?>

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
		
	</div>


</body>
</html>