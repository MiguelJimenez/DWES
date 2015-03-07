<?php
/**
 * Sesiones (1) 3 - index.php
 * 
 * @author    Bartolom� Sintes Marco <bartolome.sintes+mclibre@gmail.com>
 * @copyright 2014 Bartolom� Sintes Marco
 * @license   http://www.gnu.org/licenses/agpl.txt AGPL 3 or later
 * @version   2014-11-03
 * @link      http://www.mclibre.org
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU Affero General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU Affero General Public License for more details.
 *
 *  You should have received a copy of the GNU Affero General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

ini_set("session.save_handler", "files"); 
session_start();

print "<?xml version=\"1.0\" encoding=\"iso-8859-1\"?>\n"; 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
  <title>Nombre y apellidos (Inicio). Sesiones. Ejercicios. PHP. Bartolom�
  Sintes Marco</title>
  <meta name="generator" content="amaya 8.7.1, see http://www.w3.org/Amaya/" />
  <link href="mclibre_php_soluciones.css" rel="stylesheet" type="text/css"
  title="Color" />
</head>

<body>
<h1>Nombre y apellidos (Inicio)</h1>

<?php
if (!isset($_SESSION["nombre"]) and !isset($_SESSION["apellidos"])) {
    print "<p>Usted no ha escrito todav�a ni su nombre ni sus apellidos</p>";
} elseif (isset($_SESSION["nombre"]) and !isset($_SESSION["apellidos"])) {
    print "<p>Usted s�lo ha escrito su nombre: <strong>$_SESSION[nombre]</strong></p>\n";
} elseif (!isset($_SESSION["nombre"]) and isset($_SESSION["apellidos"])) {
    print "<p>Usted s�lo ha escrito sus apellidos: <strong>$_SESSION[apellidos]</strong></p>\n";
} else {
    print "<p>Usted ha escrito su nombre: <strong>$_SESSION[nombre]</strong></p>\n";
    print "<p>Usted ha escrito sus apellidos: <strong>$_SESSION[apellidos]</strong></p>\n";
}
?>

<p>Elija una opci�n:</p>
<ul>
  <li><a href="nombre_1.php">Escribir su nombre</a></li>
  <li><a href="apellidos_1.php">Escribir sus apellidos</a></li>
  <li><a href="cerrar.php">Borrar la informaci�n</a></li>
</ul>

<p class="ultmod">�ltima modificaci�n de esta p�gina: 3 de noviembre de 2014</p>

<p class="licencia">
Este programa forma parte del curso <strong><span xmlns:dct="http://purl.org/dc/terms/" 
xmlns:property="dct:title">P�ginas web con PHP</span></strong> por
<a xmlns:cc="http://creativecommons.org/ns#" href="http://www.mclibre.org/"
rel="cc:attributionURL">Bartolom� Sintes Marco</a>.<br />
El programa PHP que genera esta p�gina est� bajo
<a rel="license" href="http://www.gnu.org/licenses/agpl.txt">licencia AGPL 3 o
posterior</a></p>
</body>
</html>
