		<!-- <select name="productos" id="productos">
			<option value="lapiz">Lapicero</option>
			<option value="goma">Goma</option>
			<option value="sacapuntas">Sacapuntas</option>
			<option value="regla">Regla</option>
			<option value="boli">Bolígrafo</option>
		</select> -->
	<?php 

/// NOTAS MIAS: meter el precio en una funcion con el paramettro producto, y luego pasarlo a la tabla

	session_start();
	$precios = array(0.60, 0.25, 0.60, 0.90, 0.35);
	
	
	if (isset($_POST['anadir']))
	{
		$producto = $_POST['productos'];	
		$_SESSION[$producto] = $_POST['cantidad'];

		echo "<table><tr><td>Producto</td><td>Cantidad</td></tr>";

		foreach ($_SESSION as $producto => $valor)
		{
			echo "<tr><td>$producto</td><td>$valor</td></tr>";			
		}
		echo "</table>";
	}
	


	
	
	
		
	
	
	 ?>
	 <a href="formulario.html">Volver al formulario</a>

