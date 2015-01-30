<?php
$visitas = 1;
if (isset($_COOKIE["visitas"])) {
	    $visitas = $_COOKIE["visitas"];
}
setcookie("visitas", $visitas + 1);
echo "Has visitado está página $visitas veces.";
?>



