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
	<title>Home</title>
	
</head>

<body>
	<div class="contenedor">
		<main class="main-2">
			<?php
				include_once('NAVBARS/Navbar_Admin.php');
			?>
		</main>
		<section class="section-2">
			<?php 
				if(isset($doneAlert)){
               		echo $doneAlert;		
            	}
			
				if(isset($exitoAlert)){
					echo $exitoAlert;
				}
			?>
			
			<div class="form-5">
					<form method="post" action="../CONTROLADOR/Controlador_Lista.php" class="form-6">
						<button name="list-boton" value="Productos" class="list-image-4 list-image-box">
							<div class="text-margin">
								<div class="text-image">Productos</div>
							</div>
						</button>
					</form>
						
					<form method="post" action="../CONTROLADOR/Controlador_Lista.php" class="form-6">
						<button name="list-boton" value="Ingrediente" class="list-image-3 list-image-box">
							<div class="text-margin">
								<div class="text-image">Ingredientes</div>
							</div>
						</button>
					</form>
				<br>
				<div class="boton-list">
					<a href="../VISTAS/Index_Admin.php">
						<input type="button" value="Regresar" class="history-back"/>
					</a>
				</div>
			</div>
		</section>
		<footer>
			&copy; HAUMM-BUR!
		</footer>
	</div>
</body>

</html>