<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name=viewport content="width=device-width,  user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
	<link rel=stylesheet href="css/styles.css">
	<title> Galeria </title>
</head>
<body>
	
	<header>
		<div class="contenedor">
			<h1 class="titulo"> Subir Foto </h1>
		</div>
	</header>

	<div class="contenedor">
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" enctype="multipart/form-data">
			<label for="foto"> Seleciona tu foto </label><br/>
			<input type="file" id="foto" name="foto"><br/><br/>

			<label for="titulo"> Titulo de la foto </label> <br/>
			<input type="text" id="titulo" name="titulo"><br/><br/>

			<label for="texto"> Descripción </label> <br/>
			<textarea name="texto" id="texto" placeholder="Ingresa una descripción"></textarea><br/><br/>

			<?php if (isset($error)): ?>
				<p> <?php echo $error ?></p>
			<?php endif; ?>

			<button type="submit" value="Subir foto"> Enviar </button>
		</form>
	</div>

</body>
</html>
