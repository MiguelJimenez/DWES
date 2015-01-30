<?php 
$nombre = $_POST['nombre'];
$idioma = $_POST['idioma'];

if($idioma == 1)
{
	echo ("Hola ".$nombre."!");
}
elseif($idioma == 2)
{
	echo ("Hi ".$nombre."!");
}
else
{
	echo ("Salut ".$nombre."!");
}
 ?>