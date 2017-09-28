<?php require('header.php'); ?>

<div class="contenedor">
	<div class="post">
		<article>
			<h2 class="titulo"> Iniciar Sesión </h2>

			<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="formulario">
				<input type="text" name="usuario" placeholder="Usuario">
				<input type="password" name="password" placeholder="Contraseña">
				<input type="submit" value="Iniciar Sesión">
			</form>

		</article>
	</div>
</div>
