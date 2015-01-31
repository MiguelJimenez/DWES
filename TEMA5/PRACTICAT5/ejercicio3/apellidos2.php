<?php 
session_start();
$_SESSION['apellidos'] = $_POST['apellidos'];
header("Location: index.html");

?>