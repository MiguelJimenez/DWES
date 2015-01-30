<?php 
session_start();
$_SESSION['nombre'] = $_POST['nombre'];
$_SESSION['pass'] = $_POST['password'];
header('Location: actividad8_3.php');


 ?>