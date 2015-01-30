<?php 
$clave = $_POST['clave'];
switch ($clave) {
	case 'magica':
		header('Location: magica.html');
		break;
	case 'calatrava':
		header('Location: calatrava.html');
		break;
	default:
		echo ("Error, clave incorrecta. Ingresa magica o calatrava como clave");
		break;
}
?>