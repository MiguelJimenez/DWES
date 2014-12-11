<?php 

	function producto($a,$b){
		$resultado = $a*$b;
		return $resultado;
	}

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	
</head>
<body>
	<?php echo producto(5,3); ?>
</body>
</html>

