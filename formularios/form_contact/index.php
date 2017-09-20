<?php 

$errores = '';
$enviado = '';

if(isset($_POST['submit'])) {
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$mensaje = $_POST['mensaje'];

	// Check name
	if (!empty($nombre)) {
		$nombre = trim($nombre);
		$nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
	} else {
		$errores .= 'Por favor ingresa un nombre <br/>';
	}

	// Check email
	if (!empty($correo)) {
		$correo = filter_var($correo, FILTER_SANITIZE_EMAIL);

		if(!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
			$errores .= 'Por favor ingresa un correo válido <br/>';
		}
	} else {
		$errores .= 'Por favor ingresa un correo <br/>';
	}

	// Check message
	if (!empty($mensaje)) {
		$mensaje = htmlspecialchars($mensaje);
		$mensaje = trim($mensaje);
		$mensaje = stripcslashes($mensaje);
	} else {
		$errores .= 'Por favor ingresa el mensaje <br/>';
	}	

	// Check errors
	if (!$errores) {
		$enviar_a = 'mariajoselyndosramos@yahoo.es';
		$asunto = 'Correo enviado desde mi página web';
		$mensaje_preparado = "De: $nombre \n";
		$mensaje_preparado .= "Correo: $correo \n";
		$mensaje_preparado .= "Mensaje" . $mensaje;

		//mail($enviar_a, $asunto, $mensaje_preparado);
		$enviado = true;
	}

};

require('view.php');
?>
