<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name=viewport content="width=device-width,  user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel=stylesheet href="css/styles.css">
		<title> Iniciar Sesión </title>
	</head>

	<body>
		<div class="contenedor">
			<h1 class="titulo"> Iniciar Sesión </h1>
			<hr class="border">

			<form action="<?php echo htmlspecialchars($_Server['PHP_SELF']); ?>" method="post" class="formulario" name="login">
				<div class="form-group">
					<i class="icono izquierda fa fa-user"></i><input type="text" name="usuario" class="usuario" placeholder="Usuario">
				</div>

				<div class="form-group">
					<i class="icono izquierda fa fa-lock"></i><input type="password" name="password" class="password-btn" placeholder="Contraseña">
					<i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
				</div>
			</form>

			<p class="texto-registrate">
				Aún no tienes cuenta?
				<a href="registrate.php"> Registrate </a>
			</p>

		</div>
	</body>

</html>
