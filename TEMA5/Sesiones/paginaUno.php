 <?php

    session_start();
?>
<html>
  <head>
  <title>Uso de sesiones</title>
  </head>
  <body>
  <?php

    echo ("El nombre de usuario es: ".$_SESSION["nombreDeUsuario"]."<br>");
    echo ("El color elegido es: <h1><font color='".$_SESSION["colorElegido"]."'>P&Aacute;GINA UNO</font></h1>"."<br>");
  ?>

  <a href="paginaDos.php?<?php echo (session_name()); ?>=<?php echo (session_id()); ?>">Ir a p&aacute;gina 2</a>
  <br>
  <a href="paginaTres.php?<?php echo (session_name()); ?>=<?php echo (session_id()); ?>">Ir a p&aacute;gina 3</a>
  </body>
</html>
