<?php
	function producto($valor1, $valor2){
		$resultado=$valor1+$valor2;
		return $resultado;
	}
	$numero1=3;
	$numero2=4;
	$resultado=producto($numero1, $numero2);
	echo ("El resultado de la suma es: $resultado");
?>
