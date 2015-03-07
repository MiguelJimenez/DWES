<?php 
/**
 * Sesiones (1) 1 - sesiones_1c.php
 * 
 * @author    Bartolomé Sintes Marco <bartolome.sintes+mclibre@gmail.com>
 * @copyright 2014 Bartolomé Sintes Marco
 * @license   http://www.gnu.org/licenses/agpl.txt AGPL 3 or later
 * @version   2014-11-13
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
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title>Formulario en tres pasos (Resultado). Sesiones. 
  Ejercicios. PHP. Bartolomé Sintes Marco</title>
  <link href="mclibre_php_soluciones.css" rel="stylesheet" type="text/css" 
  title="Color" />
</head>

<body>
<h1>Formulario en tres pasos (Resultado)</h1>
<?php

function recoge($var)
{
    $tmp = (isset($_REQUEST[$var]))
    ? trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "ISO-8859-1"))
    : "";
    return $tmp;
}

$correcto   = recoge("correcto");
$correctoOk = false;

if ($correcto != "Sí" && $correcto != "No") {
    print "<p class=\"aviso\">No ha contestado Sí o No.</p>\n";
} else {
	$correctoOk = true;
}

if ($correctoOk) {
    if ($correcto == "No") {
        print "<p>Su nombre y apellidos <strong>no</strong> son: <strong>$_SESSION[nombre] " 
            ."$_SESSION[apellidos]</strong>.</p>\n";
        print "<p>Vuelva al formulario inicial utilizando el enlace siguiente.</p>\n";
    } else {
        print "<p>Su nombre y apellidos son: <strong>$_SESSION[nombre] " 
            ."$_SESSION[apellidos]</strong>.</p>\n";
        print "<p>Gracias por usar este programa.</p>\n";
    }
}
?>

<p><a href="sesiones_1_1_1.html">Volver a la primera página.</a></p>

<p class="ultmod">Última modificación de esta página: 31 de octubre de 2014</p>

<p class="licencia">
Este programa forma parte del curso <strong><span xmlns:dct="http://purl.org/dc/terms/" 
xmlns:property="dct:title">Páginas web con PHP</span></strong> por
<a xmlns:cc="http://creativecommons.org/ns#" href="http://www.mclibre.org/"
rel="cc:attributionURL">Bartolomé Sintes Marco</a>.<br />
El programa PHP que genera esta página está bajo
<a rel="license" href="http://www.gnu.org/licenses/agpl.txt">licencia AGPL 3 o
posterior</a></p>
</body>
</html>