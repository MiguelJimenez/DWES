<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
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
 	<br>
	<a href="ejercicio1.php">Volver</a>
</body>
</html>