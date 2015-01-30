<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Práctica 4 - Ejercicio 3</title>
</head>
<body>
	<h1>Generador de contraseña</h1>
	<form action="script4.php" method="post" enctype="multipart/form-data">
			Foto: <input type="file" name="foto" id="foto">
			<br><br>
			Nombre: <input type="text" id="nombre" name="nombre" required>
			Apellidos: <input type="text" id="apellidos" name="apellidos" required>
			<br><br>
			DNI: <input type="text" id="dni" name="dni" required>
			<input type="submit" value="Enviar">
		</form>
</body>
</html>

