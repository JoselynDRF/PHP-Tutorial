<?php 

	session_start();
	$_SESSION['nombre'] = 'Maria';

?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title> Sesiones </title>
	</head>
	<body>
		
		<h1> Página de inicio </h1>
		<a href="pagina2.php"> Ir a la página 2 </a>

	</body>
</html>
