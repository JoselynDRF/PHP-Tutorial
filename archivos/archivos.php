<?php  

/*	$resultado = file_exists('documento.txt');
	var_dump($resultado);

	if (file_exists('documento.txt')) {
		echo "El archivo si existe";
	} else {
		echo "El archivo no existe";
	}*/

	// Leer el contenido
	echo file_get_contents('documento.txt');

	// Escribir contenido
	//file_put_contents("documento.txt", "Hola Maria \n", FILE_APPEND);

	file_put_contents('documento.txt', '');
	for ($i = 1; $i <= 10; $i++) {
		file_put_contents("documento.txt", "$i \n", FILE_APPEND);
	}

	// Convertir en array
	$archivo = file('documento.txt');
	print_r($archivo);

?>
