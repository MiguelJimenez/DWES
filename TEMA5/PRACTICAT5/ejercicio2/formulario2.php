<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Práctica 5 - Ejercicio 2</title>
</head>
<body>
	<div>
		<?php 
			session_start();
			$_SESSION['nombre'] = $_POST['nombre'];
			echo "Tu nombre de usuario es ".$_SESSION['nombre'];
		 ?>
	</div>
	<form action="formulario3.php" method="post">
		<label for="telefono">
			Ingresa tu teléfono:
		</label>
		<input type="text" name="telefono" id="telefono" required>
		<br>
		<label for="email">
			Ingresa tu E-mail:
		</label>
		<input type="text" name="email" id="email" required>
		<br>
		<input type="submit" value="Enviar">
	</form>
</body>
</html>