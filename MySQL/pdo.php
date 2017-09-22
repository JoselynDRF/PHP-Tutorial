<?php 

	$id = $_GET['id'];
	
	try {
		$conexion = new PDO('mysql:host=localhost;dbname=prueba', 'root', '');
		//echo "Conexión OK";

		// Método Query (solo usarlo cuando no es necesario variables dentro de la query)
/*		$resultados = $conexion->query('SELECT * FROM usuarios');
		foreach ($resultados as $fila) {
			echo $fila['nombre'] . '<br/>';
		}*/

		// Método Prepared Statements (protege a inyección de código)
		$statement = $conexion->prepare("SELECT * FROM usuarios WHERE id = :id");
		$statement->execute(array(
			':id' => $id
		));

		$resultado = $statement->fetch(); //fecthAll()
		print_r($resultado);

	} catch (PDOException $e) {
		echo "Error: " . $e->getMessage();
	}

?>
