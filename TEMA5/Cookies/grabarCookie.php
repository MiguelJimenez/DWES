<?php
// Se graba una cookie con una validez de 24 horas.
	if(isset($_POST["idioma"])) {
	$idiomaUsuario=$_POST["idioma"];
	setcookie("idiomaUsuario",$idiomaUsuario,time()+86400);}
?>
<html>
	<body>
	<script language="javascript" type="text/javascript">
// Se regresa a la página principal.
		location.href="usoDeCookies.php";
	</script>
	</body>
</html>
