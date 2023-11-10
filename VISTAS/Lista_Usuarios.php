<?php
include_once '../CONTROLADOR/Controlador_Redirect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--Caracteres Especiales-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="../CSS/Stylo.css">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Index</title>
</head>

<body>
	<div class="contenedor">
		<main class="main-2">
			<?php
				include_once('NAVBARS/Navbar_Admin.php');
			?>
		</main>
		<section class="section-2">
			<div class="form-5">
				<?php
					include_once 'NAVBARS/Navbar_Search.php';

					echo $m -> Listar_Usu();
				?>
				<br>
				<div class="boton-list"><a href="../VISTAS/Home_Listas.php"><input type="button" value="Regresar" class="history-back"/></a></div>
			</div>
			
			
		</section>

		<footer>
			&copy; HAUMM-BUR!
		</footer>
	</div>
</body>

</html>