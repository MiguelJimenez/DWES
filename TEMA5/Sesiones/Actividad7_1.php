<?PHP
   session_start ();
?>

<HTML>

<HEAD>
   <TITLE>Manejo de sesiones</TITLE>
</HEAD>

<BODY>

<H1>Manejo de sesiones</H1>

<H2>Paso 1: se crea la variable de sesión y se almacena</H2>

<?PHP
   $var = "María";
   $_SESSION['var'] = $var;
   print ("<P>Valor de la variable de sesión: $var</P>\n");
?>

<A HREF="Actividad7_2.php?<?php echo (session_name()); ?>=<?php echo (session_id()); ?>">Paso 2</A>.

</BODY>
</HTML>
