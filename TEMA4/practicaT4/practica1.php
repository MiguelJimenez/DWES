<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Práctica 4 - Ejercicio 1</title>
</head>
<body>
	<h1>Selector de idioma</h1>
	<form action="idioma.php" method="post">
		Nombre: <input type="text" name="nombre" id="nombre"> 
		<br><br>
		País: 
		<select name="idioma" id="idioma">
			<option value="1">Español</option>
			<option value="2">Inglés</option>
			<option value="3">Francés</option>
		</select>
		<br><br>
		<input type="submit" value="Enviar">
	</form>
	
</body>
</html>