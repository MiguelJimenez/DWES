<?PHP
   session_start ();
?>

<HTML>

<HEAD>
   <TITLE>Manejo de sesiones</TITLE>
</HEAD>

<BODY>

<H1>Manejo de sesiones</H1>

<H2>Paso 1: se crea la variable de sesi�n y se almacena</H2>

<?PHP
   $var = "Mar�a";
   $_SESSION['var'] = $var;
   print ("<P>Valor de la variable de sesi�n: $var</P>\n");
?>

<A HREF="Actividad7_2.php?<?php echo (session_name()); ?>=<?php echo (session_id()); ?>">Paso 2</A>.

</BODY>
</HTML>
