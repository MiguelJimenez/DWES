<?php 
session_start(); 
echo "Esta es la misma sesi�n, abierta en otra p�gina <br><br>"; 


echo 'La sesi�n actual es: '.session_name().'<br>';
echo 'La sesi�n actual es: '. session_id().'<br>';
?>
<a href="Ejemplo1_1.php?<?php echo (session_name()); ?>=<?php echo (session_id()); ?>">Volver</a>
