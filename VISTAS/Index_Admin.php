<?php
include_once '../CONTROLADOR/Controlador_Redirect.php';
?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8>
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
				if(isset($doneAlert)){
               		echo $doneAlert;		
            	}
			
				if(isset($exitoAlert)){
					echo $exitoAlert;
				}

			?>
		</main>
		<section class="section-2">
			<div class="form-5-5">
            	<h1 class="name-admin">Bienvenido <?php include_once '../MODELO/Modelo_Name.php'; ?></h1>
            	<br>
            	<div class="admin-select-button">
            		<a href="../VISTAS/Registro_Empleados.php"><button class="button-admin">Registro</button></a>
					<a href="../VISTAS/Home_Listas.php"><button class="button-admin">Listados</button></a>
					<a href="../VISTAS/Home_Productos.php"><button class="button-admin">Inventario</button></a>
					<a href=""><button class="button-admin">Nosotros</button></a>
					<a href=""><button class="button-admin">Reporte de Ventas</button></a>
				</div>
			</div>
		</section>

		<footer>
			&copy; HAUMM-BUR!
		</footer>
	</div>
</body>

</html>