<?php 
function prueba($a,$b){
	$mayor;
	$menor;
	if ($a>$b){
		$mayor = $a;
		$menor = $b;
	} else {
		$mayor = $b;
		$menor = $a;
	}
	echo "Los numeros introducidos son ".$menor." y ".$mayor."<br>";
	echo "Los numeros pares comprendidos entre ellos son:<br>";
	$contador = 0;
	for ($i=$menor; $i <=$mayor ; $i++) { 
		if($i%2==0){
			echo $i."<br>";
			$contador++;
		}
	}
	echo "Hay un total de ".$contador." numeros pares";
}

prueba(54,3);

 ?>