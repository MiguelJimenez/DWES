<?php 
$aleatorio = rand(0,93);
echo "La edad aleatoria es ".$aleatorio;
echo "<br>";
if(($aleatorio<18) || ($aleatorio>=65)){
	echo "No es una edad laboral";
} else {
	echo "Es una edad laboral";
}
?>