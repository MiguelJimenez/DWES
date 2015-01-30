<?php 
session_start();
echo "El nombre introducido es ".$_SESSION['nombre'];
echo "<br>Su contraseña es ".$_SESSION['pass'];

 ?>