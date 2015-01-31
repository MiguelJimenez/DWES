<?php
	session_start ();
?>
<html>
  <head>
  <title>Uso de sesiones</title>
  </head>
  <body>

    <form name="fPrincipal" id="fPrincipal" method="post" action="paginaCeroDeSesiones.php">
      Nombre de usuario:
      <input type="text" name="nombreDeUsuario" id="nombreDeUsuario" value="">
      <br>
      Color:
      <select name="colorElegido" id="colorElegido">
        <option value="#FF0000">Rojo</option>
        <option value="#00FF00">Verde</option>
        <option value="#0000FF">Azul</option>
      </select>
      <br>

      <input type="hidden" name="<?php echo (session_name()); ?>" value="<?php echo (session_id()); ?>">
      <input type="submit" name="mandar" value="ACCEDER">
    </form>
  </body>
</html>
