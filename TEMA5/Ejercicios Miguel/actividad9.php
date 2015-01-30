<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Actividad 9</title>
</head>
<body>
	<?php 
session_start();
if(!isset($_SESSION['contador']))
{
	$_SESSION['contador'] = 1;
}
else
{
	$_SESSION['contador']++;
}

echo "Has visitado la página ".$_SESSION['contador']." veces";

echo '<br>La sesión actual es: '.session_id();

?>
</body>
</html>