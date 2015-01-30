<?php 
$sectores = array('Electricistas', 'Fontaneros','Transportistas', 'Aseguradores');
echo "La opción elegida es: ".$_POST['sector']."<br>";
echo "La profesión correspondiente es: ".$sectores[$sector];
?>