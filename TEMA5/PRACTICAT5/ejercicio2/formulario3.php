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
			$_SESSION['telefono'] = $_POST['telefono'];
			$_SESSION['email'] = $_POST['email'];
			echo "Tu nombre de usuario es ".$_SESSION['nombre'];
			echo "<br>Tu teléfono es ".$_SESSION['telefono'];
			echo "<br>Tu email es ".$_SESSION['email'];

		 ?>
	</div>
	<form action="formulario4.php" method="post">
		<p>¿Quiere confirmar estos datos?</p>
		<input type="submit" value="Confirmar" name="confirmar">
		<input type="submit" value="Cancelar" name="cancelar">
	</form>