<?php include "index.html"; ?>
<h2>Comprobación de datos</h2>
<?php 
session_start();

if(isset($_SESSION['nombre']) && isset($_SESSION['apellidos']))
{
	echo $_SESSION['nombre']." ".$_SESSION['apellidos'];	
}
else
{
	echo "No existe la sesion";
}




 ?>
