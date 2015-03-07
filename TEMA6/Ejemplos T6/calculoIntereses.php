<?php
// Se define una función que calcula la cuota mensual

	function calculaCuota ($capital, $interes, $meses) {
		$capital+=(($capital*$interes)/100);
		$cuota=$capital/$meses;

// La función devuelve la cuota mensual.
		return ($cuota);
	}
?>
 