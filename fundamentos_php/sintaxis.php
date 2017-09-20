<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title> Sintaxis de PHP </title>
	</head>
	<body>
		
		<?php 
			$message = "Hello World!";

			echo $message . "<br><br>";
			echo "Tipo de la variable: \n" . gettype($message)  . "<br>";
			echo "Tamaño de la variable: \n" . strlen($message) . "<br>";
			echo "Posición de la letra W: \n" . strpos($message, "W") . "<br>";
			echo "Mensaje cortado: \n" . substr($message, 1, 8) . "<br>";
			echo "En UpperCase: \n" . strtolower($message) . "<br><br>";

			// Strings Functions
			$texto = "<b> hola </b>";
			echo htmlspecialchars($texto);

			$deleteEspaciosBlancos = " Blanco ";
			echo trim($deleteEspaciosBlancos);

			// Explode
			$words = explode(" ", $message);
			echo "<br><br> $words[0] <br>";
			echo "$words[1] <br>";

			// Implode
			$array = array("Hola", "Mundo!");
			$comma_separated = implode(" ", $array);
			echo "$comma_separated <br>";

			// Comparison
			$comp1 = "Hello";
			$comp2 = "Hello";
			$resultComp = (strcmp($comp1, $comp2) != 0) ? "Las palabras son diferentes" : "Las palabras son iguales";
			echo "$resultComp <br>";

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

			// ARRAYS
			print "<br><br> Trabajando con arrays! <br><br>";
			$countries = ['Venezuela', 'Portugal'];
			print_r($countries);

			// Add
			$countries[] = 'Francia';
			print "<br>";
			print_r($countries);
			echo "<br> Número de paises: " . count($countries);

			// Order
			asort($countries);
			echo "<br> Paises ordenados alfabeticamente: " . implode(', ', $countries);

			shuffle($countries);
			echo "<br> Paises ordenados aleatoriamente: " . implode(', ', $countries);

			// Create an associative array
			$associativeArray = ['Venezuela' => 'Mi pais natal', 'Portugal' => 'Donde vivo actualmente'];
			print "<br>";
			print_r($associativeArray);

			// Add
			$associativeArray['Francia'] = 'Último pais visitado';
			print "<br>";
			print_r($associativeArray);

			// Loop
			foreach ($associativeArray as $country) {
				echo "<br> Pais: " . $country;
			}

			print "<br>";

			foreach ($associativeArray as $index => $country) {
				echo "<br> $index es $country";
			}

			// Multidimensional Arrays
			$games = array(
				'tableTop' => ['sorry', 'life', 'scrabble'],
				'cardGames' => ['blackjark', 'poker']
			);

			print "<br><br>";
			print_r($games);
			print "<br>";
			print_r($games['tableTop']);
			echo "<br>" . $games['tableTop'][0];

			print "<br><br> Saber informaciones sobre alguna variable <br>";
			echo "<pre>";
			var_dump($games);
			echo "</pre>";

			// Pasar array a variables
			$amigos = array('telefono' => 1234, 'ciudad' => 'Carora', 'edad' => 20);
			extract($amigos);
			echo "Edad sacada de un array: $edad";
		?>

	</body>
</html>
