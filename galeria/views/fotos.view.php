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
			<h1 class="titulo"> 
				<?php
				if(!empty($foto['titulo'])) {
					echo $foto['titulo'];
				} else {
					echo $foto['imagen'];
				}
				?></h1>
		</div>
	</header>

	<div class="contenedor">
		<div class="foto">
			<img src="fotos/<?php echo $foto['imagen']; ?>" alt="">
			<p class="texto"><?php echo $foto['texto'] ?></p>
		</div>
	</div> 

	<div class="contenedor">
		<a href="index.php" class="btn"> Regresar </a>
	</div> 

</body>
</html>
