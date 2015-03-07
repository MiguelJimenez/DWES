<?php 
$producto = $_POST['producto'];

if(strpos(file_get_contents("Pedidos.txt"), $producto) !== false)
{
	echo "Existe el producto ".$producto." en el archivo Pedidos.txt"  ;
}
else
{
	echo "NO existe el producto ".$producto." en el archivo Pedidos.txt"  ;
}

?>