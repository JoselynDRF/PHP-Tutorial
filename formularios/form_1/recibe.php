<?php 

	// print_r($_POST);
	// print_r($_GET);

	if (!$_POST) {
		header('Location: http://localhost/development/PHP-tutorial/formularios/');
	}

	$nombre = $_POST['nombre'];
	$sexo = $_POST['sexo'];
	$year = $_POST['year'];
	$terminos = $_POST['terminos'];
	echo "Hola, " . $nombre . ' eres ' . $sexo;

?>
