<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title> Ejercicio 1 - Sintaxis de PHP </title>
</head>
<body>
	
	<?php 
		$message = "Hello World!";

		echo $message . "<br><br>";
		echo "Tipo de la variable: \n" . gettype($message)  . "<br>";
		echo "Tamaño de la variable: \n" . strlen($message) . "<br>";
		echo "Posición de la letra W: \n" . strpos($message, "W") . "<br>";
		echo "Mensaje cortado: \n" . substr($message, 1, 8) . "<br>";
		echo "En UpperCase: \n" . strtolower($message) . "<br>";

		// Explode
		$words = explode(" ", $message);
		echo $words[0] . "<br>";
		echo $words[1] . "<br>";

		// Implode
		$array = array("Hola", "Mundo!");
		$comma_separated = implode(" ", $array);
		echo $comma_separated . "<br>";

		// Comparison
		$comp1 = "Hello";
		$comp2 = "Hello";
		$resultComp = (strcmp($comp1, $comp2) != 0) ? "Las palabras son diferentes" : "Las palabras son iguales";
		echo $resultComp . "<br>";

		// Check if variavel exists (isset)
		$checkVar = "checkVar";
		if (isset($checkVar)) {
			echo "La variable $checkVar existe <br>";
		}

		// Data
		echo "Mes actual: " . date("F") . "<br>";

		// Multiplication table
		print "<br> Tabla de multiplicación";
		for ($i = 1; $i < 8; $i++) {
			echo "<br>";
			for ($j = 1; $j < 8; $j++) {
				echo $i * $j . "\n";
			}
		}
	?>

</body>
</html>
