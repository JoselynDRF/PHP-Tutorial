<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name=viewport content="width=device-width,  user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel=stylesheet href="<?php echo RUTA; ?>css/styles.css">
	<title> Blog </title>
</head>
<body>

	<?php require('header.php') ?>

	<div class="contenedor">
		<div class="post">
			<article>
				<h2 class="titulo"><a href="#"> Título del artículo </a></h2>
				<p class="fecha"> 1 de enero de 2017 </p>
				<div class="thumb">
					<a href="#">
						<img src="<?php echo RUTA; ?>/imagenes/1.jpg" class="img">
					</a>
				</div>
				<p class="extracto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, cumque.</p>
				<a href="#" class="continuar"> Continuar leyendo </a>
			</article>
		</div>

		<div class="post">
			<article>
				<h2 class="titulo"><a href="#"> Título del artículo </a></h2>
				<p class="fecha"> 1 de enero de 2017 </p>
				<div class="thumb">
					<a href="#">
						<img src="<?php echo RUTA; ?>/imagenes/1.jpg" class="img">
					</a>
				</div>
				<p class="extracto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, cumque.</p>
				<a href="#" class="continuar"> Continuar leyendo </a>
			</article>
		</div>

		<?php require('paginacion.php') ?>
	</div>

</body>
</html>
