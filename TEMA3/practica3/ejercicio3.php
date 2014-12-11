<?php 
function cuadrado($a){
	$superficie = $a*$a;
	echo "La superficie del cuadrado es ".$superficie."<br>";
	$perimetro = 4*$a;
	echo "El perimetro del cuadrado es ".$perimetro."<br>";
}
$lado = 5;
echo "La longitud del lado del cuadrado es ".$lado;
echo "<br>";
cuadrado($lado);

 ?>