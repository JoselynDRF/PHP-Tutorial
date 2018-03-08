<?php
	sleep(2);

	// Calcular el factorial de un número
	function factorial($n) { 
		return ($n < 2) ? 1 : ($n * factorial($n - 1));
	}

	$num = $_POST["numFactorial"]; // Parámetros del pedido Ajax

	if ($num > 10) {
		echo "El número tiene que ser inferior a 10!";
		exit();
	}

	if (!is_numeric($num)) {
		echo "Esto no es un número!";
		exit();
	}

	$factorial = factorial($num);
	echo "El factorial de " . $num . " es ". $factorial;

?>