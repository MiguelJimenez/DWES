<?php
	
	$matriz = file("multiLinea.txt");
	
// Se recorre la matriz, mostrando cada elemento.
	foreach ($matriz as $elemento => $contenido) {
	    echo ("Elemento n� <b>$elemento</b>  Contiene: <b>$contenido</b><br>\n");
	}
?> 