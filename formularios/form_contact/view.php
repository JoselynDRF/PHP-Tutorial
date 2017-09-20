<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title> Formulario de contacto </title>
	<link rel=stylesheet href="styles.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>

<body>
	<div class="wrap">

		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
			<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre:" value="<?php if(!$enviado && isset($nombre)) echo $nombre ?>">
			<input type="text" class="form-control" id="correo" name="correo" placeholder="Correo:" value="<?php if(!$enviado && isset($correo)) echo $correo ?>">
			<textarea name="mensaje" class="form-control" id="mensaje" placeholder="Mensaje:"> <?php if(!$enviado && isset($mensaje)) echo $mensaje ?> </textarea>

			<?php if (!empty($errores)): ?>
				<div class="alert error">
					<?php echo $errores; ?>
				</div>
			<?php elseif($enviado): ?>
				<div class="alert sucess">
					<p> Enviado correctamente </p>
				</div>
			<?php endif; ?>

			<input type="submit" class="btn btn-primary" name="submit" placeholder="Correo:" value="Enviar Correo">
		</form>

	</div>
</body>
</html>
