<?php 
	$nombre=$_POST["nombre5"];
	setCookie("nombre",$nombre); 
	if(isset($_COOKIE["nombre"])) {
		$miNombre=$_COOKIE["nombre"];
		echo "Hola $miNombre <br>"; 
		}
		else{
	echo "Esta es tu primera visita"; 
	}
?>

