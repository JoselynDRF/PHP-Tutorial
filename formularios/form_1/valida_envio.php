<?php 

/*	if ($_SERVER['REQUEST_METHOD'] == 'GET') {
		echo 'Se enviaron por GET';
	} else {
		echo 'Se enviaron por POST';
	}*/

	$errores = '';

	if (isset($_POST['submit'])) {
		$nombre = $_POST['nombre'];
		$correo = $_POST['correo'];

		if(!empty($nombre)) {
			$nombre = trim($nombre);
			$nombre = htmlspecialchars($nombre);
			$nombre = stripcslashes($nombre);

			filter_var($nombre, FILTER_SANITIZE_STRING);
			echo "Tu nombre es $nombre <br/>";
		} else {
			$errores .= 'Por favor ingrese su nombre';
		}

		
	} 
?>
