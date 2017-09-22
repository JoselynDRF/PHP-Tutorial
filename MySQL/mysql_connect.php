<!-- No recomendado, es preferible conectar a la BD con PDO -->
<?php  
	$conexion = mysqli_connect('localhost', 'root', '') or die('No se pudo conectar a la base de datos');
	mysqli_select_db($conexion, 'prueba');
	$resultados = mysqli_query($conexion, 'SELECT * FROM usuarios');

	// $fila = mysqli_fetch_object($resultados);
	// echo $fila->nombre;

/*	while ($fila = mysqli_fetch_object($resultados)) {
		echo $fila->nombre;
		echo '<br/>';
	}*/

	while ($fila = mysqli_fetch_array($resultados)) {
		echo $fila['nombre'];
		echo '<br/>';
	}
?>
