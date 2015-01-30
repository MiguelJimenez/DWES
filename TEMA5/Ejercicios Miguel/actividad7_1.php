<?php session_start(); ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Actividad 7</title>
</head>
<body>
	<form action="actividad7_2.php" method='post'>
		<input type="text" name='nombre' placeholder='Ingresa aquí tu nombre'>
		<input type="submit" value='Enviar'>
	</form>
	<?php 
		// $_SESSION['nombre'] = $_POST['nombre'];

	 ?>
</body>
</html>