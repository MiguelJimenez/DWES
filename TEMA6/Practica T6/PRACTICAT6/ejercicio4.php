<?php 

function comprobar()
{
	$nombre = $_POST['nombre'];
	$pass = $_POST['pass'];
	
	$opcion = $_POST['opcion'];
			// print_r($opcion);
			// die;

	$credencial = $nombre." ".$pass;

	if(strpos(file_get_contents("Clientes.txt"), $credencial) !== false)
	{
		if($opcion==1)
		{
			echo "El contenido del archivo 'Pedidos.txt' es:<br>";
			$manejador = fopen("Pedidos.txt", "r");
			while(!feof($manejador))
			{
				echo fgets($manejador). "<br />";
			}
			fclose($manejador);
		}
		else
		{
		 	echo '<a href="ejercicio3.html" target="_blank">Nuevo pedido</a>';
		}
	}
	else
	{
		echo "NO existe el usuario";
	}
	

}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 4</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid">
		<h1>Resultado del ejercicio</h1>
		<div class="row">
			<div class="col-md-4 col-md-offset-2">
				<p><?php comprobar(); ?></p>
			</div>
		</div>
	</div>
</body>
</html>