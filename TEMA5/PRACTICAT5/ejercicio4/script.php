<?php 
session_start();

function precios($producto)
{
	switch ($producto)
	{
		case 'Lapicero':
		$precio = 0.60;
		return $precio;
		break;

		case 'Goma':
		$precio = 0.25;
		return $precio;
		break;

		case 'Sacapuntas':
		$precio = 0.30;
		return $precio;
		break;

		case 'Regla':
		$precio = 0.90;
		return $precio;
		break;

		case 'Boligrafo':
		$precio = 0.35;
		return $precio;
		break;

	}
}

if (isset($_POST['anadir']))
{
	$producto = $_POST['productos'];	
	$_SESSION[$producto] = $_POST['cantidad'];


	echo "<table border=1><tr><td>Producto</td><td>Cantidad</td><td>Precio</td><td>Subtotal</td></tr>";
	$sumaTotal = 0;
	foreach ($_SESSION as $producto => $valor)
	{
		$precio = number_format(precios($producto),2);
		$subtotal = number_format(($precio * $valor),2);
		$sumaTotal += $subtotal;

		echo "<tr><td>$producto</td><td>$valor</td><td>$precio</td><td>$subtotal</td></tr>";			
	}
	echo "<tr><td></td><td></td><td>SUMA TOTAL</td><td>$sumaTotal</td></tr>";			
	echo "</table>";
}

?>
<a href="formulario.html">Volver al formulario</a>

