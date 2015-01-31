<?php 
session_start(); 
$_SESSION['nombre'] = 'Juan'; 
?>
<a href="Ejemplo2_2.php"<?php echo (session_name()); ?>=<?php echo (session_id()); ?>">Siguiente</a>
