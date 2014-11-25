<?php 
	// Creamos el primer numero aleatorio entre el 0 y el 12
	$lado1 = rand(0,12);
	echo ("El lado 1 mide ".$lado1."<br>");
	// Creamos el segundo numero aleatorio entre el 0 y el 12
	$lado2 = rand(0,12);
	echo ("El lado 2 mide ".$lado2."<br>");
	// Calculamos el area y lo mostramos por pantalla
	$area = $lado1*$lado2;
	echo ("El area del rectangulo es ".$area."<br>");
	// calculamos el perimetro y lo mostramos por pantalla
	$perimetro = (2*$lado1)+(2*$lado2);
	echo("El perimetro del rectangulo es ".$perimetro);

 ?>