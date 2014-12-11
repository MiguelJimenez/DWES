<?php 
function suma($a){
	$sumatorio=0;
	for ($i=0; $i < $a; $i++) { 
		$sumatorio+=$i;
	}
	return $sumatorio;
}
echo suma(4);
 ?>