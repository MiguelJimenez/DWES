<?PHP
   session_start ();
?>

<HTML>

<HEAD>
   <TITLE>Manejo de sesiones</TITLE>
</HEAD>

<BODY>

<H1>Manejo de sesiones</H1>

<H2>Paso 3: la variable ya ha sido destruida y su valor se ha perdido</H2>

<?PHP
   session_destroy ();
   $var = $_SESSION['var'];
   print ("<P>Valor de la variable de sesión: $var</P>\n");
   
?>

<A HREF="Actividad7_1.php?<?php echo (session_name()); ?>=<?php echo (session_id()); ?>">Volver al paso 1</A>.

</BODY>
</HTML>
