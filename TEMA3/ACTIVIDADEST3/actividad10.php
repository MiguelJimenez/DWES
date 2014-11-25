<?php 
function sumatorio(){
	$resultado=0;
	for ($i=10;$i<=100;$i++){
		$resultado = $i+$resultado;
		$i++;
		
	}
	return $resultado;
}
	echo sumatorio();

 ?>