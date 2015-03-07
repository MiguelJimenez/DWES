<?php
	
	$matriz = file("multiLinea.txt");
	
// Se recorre la matriz, mostrando cada elemento.
	foreach ($matriz as $elemento => $contenido) {
	    echo ("Elemento nº <b>$elemento</b>  Contiene: <b>$contenido</b><br>\n");
	}
?> 