<?php
// Se comprueba si existe la cookie.
	if (!$_COOKIE["idiomaUsuario"]){
// Si no existe, se determina como p�gina la destinada a elegir el idioma.
		$pagina="pedirIdioma.htm";
	} elseif ($_COOKIE["idiomaUsuario"]=="sp"){
// Si existe la cookie y el valor de la variable es "sp" se ir� a la p�gina en espa�ol.
		$pagina="spanish.htm";
	} else {
// Si el valor no es "sp" se ir� a la p�gina en ingl�s.
		$pagina="english.htm";
	}
?>
<html>
	<head>
	<script language="javascript" type="text/javascript">
// Se redirige a la p�gina seleccionada.
		location.href="<?php echo($pagina); ?>";
	</script>
	</head>
</html>
