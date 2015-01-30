<?php 
	setCookie("nombre","Ana"); 
	if (isset($_COOKIE["nombre"])){
	$miNombre=$_COOKIE["nombre"];
	echo "Hola $miNombre"; 
	}else{
	echo "Esta es tu primera visita"; 
	}
?>

