<?php
session_start();
$visitas = 1;
if (isset($_SESSION["visitas"])) {
	    $visitas = $_SESSION["visitas"];
}
$_SESSION["visitas"]=$visitas+1;
echo "Has visitado est� p�gina $visitas veces.";
?>



