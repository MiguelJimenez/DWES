<?php
	$edad=rand(0,90);
	if ($edad>18 && $edad<66) {
		echo ("El usuario est� en edad laboral.");
	} else {
		echo ("El usuario NO est� en edad laboral.");
	}
?>
