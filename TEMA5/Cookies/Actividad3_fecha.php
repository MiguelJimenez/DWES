<?php 
date_default_timezone_set('UTC');
$fecha = date("d/m/y | H:i:s");  
	setCookie("fecha",$fecha);  
	if(isset($_COOKIE["fecha"])) {  
	echo "Tu última visita en la página fue el ".$_COOKIE["fecha"]; 
	}  
	else {  
	echo "Esta es tu primera visita en la página";  
	} 
?>

