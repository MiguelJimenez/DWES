<?php 
$nombre = $_POST['nombre'];
$password = $_POST['pass'];

// Creamos una función para comprobar si el password comienza por un número
function comprobarPass($pass)
{
	$array = str_split($pass);
	if(is_numeric($array[0]))
	{
		echo ("Todo correcto, tu nombre es ".$_POST['nombre']." y tu password es ".$pass);
	}
	else
	{
		echo ("Error, tu password tiene obligatoriamente que empezar por un n&uacute;mero");
		
	}
}

if($nombre == null || $password == null)
{
	echo ("Error, ambos campos son obligatorios");
}
else
{
	comprobarPass($password);
}


?>