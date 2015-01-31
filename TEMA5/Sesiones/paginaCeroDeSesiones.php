<?php

	session_start();

	$_SESSION["nombreDeUsuario"]=$_POST["nombreDeUsuario"];
	$_SESSION["colorElegido"]=$_POST["colorElegido"];
?>

<html>
  <head>
  <script language="javascript" type="text/javascript">

    function mandar(){
      document.f0.submit();
    }
  </script>
  </head>

  <body onLoad="mandar();">

    <form name="f0" id="f0" method="post" action="paginaUno.php">
      <input type="hidden" name="<?php echo (session_name()); ?>" value="<?php echo (session_id()); ?>">
    </form>
  </body>
</html>
