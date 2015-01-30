<?php
// comprobar si el formulario ha sido enviado
if (isset($_POST["enviar"])){
		$Colorf=$_POST["bgColor"];
		$Colort=$_POST["txtColor"];
		// establecer las cookies
		setcookie("fondo",$Colorf);
		setcookie("texto",$Colort);
}

//En caso de que el usuario venga por primera vez
//y las cookies no estén fijadas
if ((!isset($_COOKIE['fondo']) ) && (!isset($_COOKIE['texto']))){
	$Colorf = "Black";
	$Colort="White";
}else{
	#Si las cookies están fijadas las utilizamos
	$Colorf = $_COOKIE['fondo'];
	$Colort = $_COOKIE['texto'];
}
?>
<html>
<body bgcolor="<?php echo $Colorf ?>" text="<?php echo $Colort ?>">
<p><?php echo ("Los colores elegidos"); ?></p>
</body>
</html>