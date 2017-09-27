<?php require('header.php'); ?>

<div class="contenedor">
	<?php foreach ($resultados as $resultado): ?>
		<div class="post">
			<article>
				<h2 class="titulo"><a href="single.php?id=<?php echo $resultado['id']; ?>"> <?php echo $resultado['titulo']; ?> </a></h2>
				<p class="fecha"> <?php echo fecha($resultado['fecha']); ?> </p>

				<div class="thumb">
					<a href="single.php?id=<?php echo $resultado['id']; ?>">
						<img src="<?php echo RUTA; ?>/imagenes/<?php echo $resultado['thumb']; ?>" class="img">
					</a>
				</div>
				
				<p class="extracto"><?php echo $resultado['extracto']; ?></p>
				<a href="single.php?id=<?php echo $resultado['id']; ?>"" class="continuar"> Continuar leyendo </a>
			</article>
		</div>
	<?php endforeach; ?>


	</div>

	<?php require('paginacion.php'); ?>
