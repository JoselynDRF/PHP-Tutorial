<?php  

	echo pathinfo('documento.txt', PATHINFO_BASENAME);
	echo pathinfo('usuario/carpeta/documento.txt', PATHINFO_DIRNAME);
	echo pathinfo('documento.txt', PATHINFO_EXTENSION);
	echo pathinfo('documento.txt', PATHINFO_FILENAME);

	// Extraer ficheros con patrón en un arreglo
	$resultados = glob('*.php');
	print_r($resultados);

	$resultados2 = glob('*.{php, html, txt}', GLOB_BRACE);
	print_r($resultados2);

	// Saber el nombre sin ruta
	echo basename('carpeta1/carpeta2/archivo.php');
	echo basename('carpeta1/carpeta2/archivo.php', '.php');

	// Devuelve el directorio padre de la ruta
	echo dirname('carpeta1/carpeta2/archivo.php');
?>
