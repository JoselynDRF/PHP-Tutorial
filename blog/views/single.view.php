<?php require('header.php'); ?>

<div class="contenedor">
	<div class="post">
		<article>
			<h2 class="titulo"> <?php echo $post['titulo']; ?> </h2>
			<p class="fecha"> <?php echo fecha($post['fecha']); ?> </p>
			<div class="thumb">
				<img src="<?php echo RUTA; ?>/imagenes/<?php echo $post['thumb']; ?>" class="img">
			</div>

			<p class="extracto"><?php echo $post['extracto']; ?></p>

		</article>
	</div>

</div>
