<?php 
/**
 * Sesiones (1) 4 - borrar_2.php
 * 
 * @author    Bartolomé Sintes Marco <bartolome.sintes+mclibre@gmail.com>
 * @copyright 2014 Bartolomé Sintes Marco
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

function recogeMatriz($var) 
{
    $tmpMatriz = array();
    if (isset($_REQUEST[$var]) && is_array($_REQUEST[$var])) {
        foreach ($_REQUEST[$var] as $indice => $valor) {
            $indiceLimpio = trim(htmlspecialchars($indice, ENT_QUOTES, "ISO-8859-1"));
            $valorLimpio  = trim(htmlspecialchars($valor,  ENT_QUOTES, "ISO-8859-1"));
            $tmpMatriz[$indiceLimpio] = $valorLimpio;
        }
    }
    return $tmpMatriz;
}

$c       = recogematriz("c");
$cOk     = false;

if (!is_array($c)) {
    $cOk = false;
} else {
	$cOk = true;
}

if ($cOk) {
    foreach ($c as $indice => $valor) {
        if (isset($_SESSION[$indice])) {
            unset($_SESSION[$indice]);
        }
    }
    header("location:index.php");
    exit;
} else {
    print "<?xml version=\"1.0\" encoding=\"iso-8859-1\"?" . ">
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\"
  \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\" />
  <title>Nombre (Formulario 2). Sesiones. 
  Ejercicios. PHP. Bartolomé Sintes Marco</title>
  <link href=\"mclibre_php_soluciones.css\" rel=\"stylesheet\" type=\"text/css\" 
  title=\"Color\" />
</head>
    
<body>
<h1>Borrar datos (Resultado)</h1>

<p class=\"aviso\">Se ha producido un proeblam. No se ha borrado ningún dato.</p>

<p><a href=\"borrar_1.php\">Volver al formulario.</a></p>\n";
    
    print '<p class="ultmod">Última modificación de esta página: 3 de noviembre de 2014</p>

<p class="licencia">
Este programa forma parte del curso <strong><span xmlns:dct="http://purl.org/dc/terms/" 
xmlns:property="dct:title">Páginas web con PHP</span></strong> por
<a xmlns:cc="http://creativecommons.org/ns#" href="http://www.mclibre.org/"
rel="cc:attributionURL">Bartolomé Sintes Marco</a>.<br />
El programa PHP que genera esta página está bajo
<a rel="license" href="http://www.gnu.org/licenses/agpl.txt">licencia AGPL 3 o
posterior</a></p>
</body>
</html>';
}
?>


