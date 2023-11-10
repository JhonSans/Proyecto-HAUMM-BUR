<?php
include_once '../CONTROLADOR/Controlador_Redirect.php';
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--Caracteres Especiales-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="../CSS/Stylo.css">
	<script type="text/javascript" src="../JS/lock_keyboard.js"></script>
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Registro</title>
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
				<div class="pro_img">
					<div class="det_img">
						
					</div>
					<div class="sel_img">
						<input type="file" name="archivo">
					</div>
				</div>
				<div class="det_pro">
					<div>
						<input type="text" name="" placeholder="Nombre">
					</div>
					<div style="margin-top: 5px;">
						<textarea name="" placeholder="Descripcion" class="info_pro"></textarea>
					</div>
				</div>
				<div class="ing_pro">
					
				</div>
			</div>
		</section>

		<footer>
			&copy; HAUMM-BUR!
		</footer>
	</div>
</body>

</html>