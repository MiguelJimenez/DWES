<?php 
$producto = $_POST['producto'];
$cantidad = $_POST['cantidad'];

$registro = "\r\n".$producto." ".$cantidad;

	$manejador=fopen("Pedidos.txt","a");
	if (fwrite($manejador,$registro))
	{
		echo ("El registro se ha escrito en el archivo Pedidos.txt");
	}
	else
	{
		echo ("No se ha podido escribir el registro");
	}
	fclose ($manejador);
?>