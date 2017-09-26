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
			<h1 class="titulo"> Galeria en PHP </h1>
		</div>
	</header>

		<div class="contenedor">
			<?php foreach ($fotos as $foto): ?>
				<div>
					<a href="foto.php?id=<?php echo $foto['id']?>">
						<img src="fotos/<?php echo $foto['imagen'] ?>" class="imagenes">
					</a>
				</div>
			<?php endforeach; ?>
		</div>

		<div class="paginacion">
			<?php if ($pagina_actual > 1): ?>
				<a href="index.php?p=<?php echo $pagina_actual - 1 ?>"> Página Anterior </a>
			<?php endif; ?>

			<?php if ($total_paginas != $pagina_actual): ?>
				<a href="index.php?p=<?php echo $pagina_actual + 1 ?>"> Página Siguiente </a>
			<?php endif; ?>
		</div>
	

</body>
</html>
