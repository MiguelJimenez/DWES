<?php 
session_start(); 
echo "El nombre es: ".$_SESSION['nombre']; 
?>
<br>
<a href="Ejemplo2_1.php"<?php echo (session_name()); ?>=<?php echo (session_id()); ?>">Volver</a>
