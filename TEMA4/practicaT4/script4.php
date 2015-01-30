<?php 
$dni = $_POST['dni'];

// Creamos una función para comprobar si la foto es válida, y en caso afirmativo la mostramos
function comprobarFoto()
{
	$foto = $_FILES['foto']['type'];
	
	$archivoRecibido = $_FILES["foto"]["tmp_name"];
	$destino="fotos/fotoDelUsuario.jpg";
	if($foto !='image/jpeg')
	{
		echo ("Error, la foto a subir tiene que ser un fichero .jpg");
	}

	elseif (move_uploaded_file ($archivoRecibido, $destino))
	{
		echo ("<img src='fotos/fotoDelUsuario.jpg' width='200px' height='200px'>");
	}
	else
	{
		echo ("La foto no se ha podido guardar");
	}
}

// Creamos una función para comprobar el si el DNI introducido es válido. En caso de ser válido, mostramos el resto de información
function comprobarDNI($dni)
{
	$dni = strtoupper($dni);
	$letra = substr($dni, -1);
	$numeros = substr($dni, 0, -1);
	if ( substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros%23, 1) == $letra && strlen($letra) == 1 && strlen ($numeros) == 8 )
	{
		comprobarFoto();
		echo "<br>";
		
		$passNombre = substr($_POST['nombre'], 0, 3);
		$passApellido = substr($_POST['apellidos'], 0, 1);
		$passDNI = substr($_POST['dni'], 5, 3);

		echo "Nombre: ".$_POST['nombre']."<br>";
		echo "Apellidos: ".$_POST['apellidos']."<br>";
		echo $dni."<br><br>";
		echo "Contrase&ntildea generada: ".$passNombre.$passApellido.$passDNI;
	}
	else
	{
		echo 'DNI no v&aacute;lido';
	}

}

comprobarDNI($dni);
?>