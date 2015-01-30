<?php 
session_start();
$_SESSION['nombre'] = $_POST['nombre'];
echo "El nombre introducido es ".$_SESSION['nombre'];
session_destroy();
echo "<br><a href='actividad7_3.php'>Ir al tercer script</a>";


 ?>