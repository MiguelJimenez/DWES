<?php 
session_start(); 
echo "He inicializado la sesión <br> <br>"; 


echo 'La sesión actual es: '.session_name().'<br>';
echo 'La sesión actual es: '. session_id().'<br>';
?>
<a href="Ejemplo1_2.php?<?php echo (session_name()); ?>=<?php echo (session_id()); ?>">Siguiente</a>
