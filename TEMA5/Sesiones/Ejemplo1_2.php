<?php 
session_start(); 
echo "Esta es la misma sesión, abierta en otra página <br><br>"; 


echo 'La sesión actual es: '.session_name().'<br>';
echo 'La sesión actual es: '. session_id().'<br>';
?>
<a href="Ejemplo1_1.php?<?php echo (session_name()); ?>=<?php echo (session_id()); ?>">Volver</a>
