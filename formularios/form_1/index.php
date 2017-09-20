<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title> Formularios </title>
	</head>
	<body>
		
		<!-- <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" name="">  -->
		<form action="recibe.php" method="post" name="">
			<input type="text" name="nombre" placeholder="Ingrese su nombre">
			<br>

			<label for="hombre"> Hombre </label>
			<input type="radio" name="sexo" value="hombre" id="hombre">
			<br>

			<label for="mujer"> Mujer </label>
			<input type="radio" name="sexo" value="mujer" id="mujer">
			<br>

			<select name="year">
				<option value="2000"> 2000 </option>
				<option value="2001"> 2001 </option>
				<option value="2002"> 2002 </option>
			</select>
			<br>

			<label for="terminos"> Aceptar los términos </label>
			<input type="checkbox" name="terminos" id="terminos" value="ok">
			<br>

			<input type="submit" name="" value="Enviar">

		</form>

		<br><br><br>

		<!-- Validar envio de formulario -->
		<form action="valida_envio.php" method="post">
			<input type="text" name="nombre" placeholder="Ingrese su nombre">
			<input type="email" name="correo" placeholder="Ingrese su correo">
			<input type="submit" name="submit" value="Enviar">
			<br>
		</form>

	</body>
</html>
