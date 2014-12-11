<?php 
	$aleatorio = rand(1,100);
	echo "El numero generado es ".$aleatorio."<br>";
	echo "Los numeros impares desde 0 hasta ".$aleatorio." son:<br>";
	for ($i=0; $i <= $aleatorio; $i++) { 
		if ($i%2!=0) {
			echo $i;
			echo "<br>";
		}
	}
?>