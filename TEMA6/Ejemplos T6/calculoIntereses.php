<?php
// Se define una funci�n que calcula la cuota mensual

	function calculaCuota ($capital, $interes, $meses) {
		$capital+=(($capital*$interes)/100);
		$cuota=$capital/$meses;

// La funci�n devuelve la cuota mensual.
		return ($cuota);
	}
?>
 