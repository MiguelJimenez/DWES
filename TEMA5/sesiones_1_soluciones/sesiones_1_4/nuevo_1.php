<?php
/**
 * Sesiones (1) 4 - nuevo_1.php
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

print "<?xml version=\"1.0\" encoding=\"iso-8859-1\"?>\n"; 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
       "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title>Nuevo dato (Formulario 1). Sesiones. 
  Ejercicios. PHP. Bartolom� Sintes Marco</title>
  <link href="mclibre_php_soluciones.css" rel="stylesheet" type="text/css" 
  title="Color" />
</head>

<body>
<h1>Nuevo dato (Formulario 1)</h1>

<form action="nuevo_2.php" method="get">
  <fieldset>
    <legend>Formulario</legend>
    <p>Escriba el nuevo dato:</p>

    <table cellspacing="5" class="borde">
      <tbody>
        <tr>
          <td><strong>Nombre del dato:</strong></td>
          <td><input type="text" name="nombre" size="20" maxlength="20" /></td>
        </tr>
        <tr>
          <td><strong>Valor del dato:</strong></td>
          <td><input type="text" name="valor" size="30" maxlength="30" /></td>
        </tr>
    </tbody>
    </table>

    <p class="der">
    <input type="submit" value="Guardar" /> 
    <input type="reset" value="Borrar" name="Reset" /></p>
  </fieldset>
</form>

<p><a href="index.php">Volver al inicio.</a></p>

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
