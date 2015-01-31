<?PHP
   session_start ();
?>

<HTML>

<HEAD>
   <TITLE>Manejo de sesiones</TITLE>
</HEAD>

<BODY>

<H1>Manejo de sesiones</H1>

<H2>Paso 2: se accede a la variable de sesión almacenada y se destruye</H2>

<?PHP
   $var = $_SESSION['var'];
   print ("<P>Valor de la variable de sesión: $var</P>\n");
   unset ($_SESSION['var']);
?>

<A HREF="Actividad7_3.php?<?php echo (session_name()); ?>=<?php echo (session_id()); ?>">Paso 3</A>.

</BODY>
</HTML>
