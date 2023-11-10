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
				error_reporting(0);

				if(isset($errorAlert)){
				session_name('sesion_temporal');

				$datos = $_SESSION['form_buffer'];

				unset($_SESSION['form_buffer']);
               	echo $errorAlert;		
            	}	
			?>
		</main>
		<section class="section-2">
       		<div class="form-5">
					<form method="post" action="../CONTROLADOR/Controlador_Agregar.php" class="content-form">
						<h1>Ingrediente</h1>
						<div class="content-registro-2">
							<input type="text" id="txtCurp" name="nom_ig" class="input-text" placeholder="Nombre" value="<?=$datos['nom_ig'] ?>" style="width: 50%" required>
							<br>
							<select name="name_pvr">
								<option value="value-null">Seleccionar...</option>
								<?php echo $m_p -> consulta(); ?>
							</select>
							<select name="tip_ig">
								<option value="tipe-null">Seleccionar...</option>
								<?php echo $m_p -> tipo_ingrediente(); ?>
							</select>
							<br>
							<input type="text" id="txtCurp" name="can_ig" class="input-text" placeholder="Cantidad" value="<?=$datos['can_ig'] ?>" onkeypress="return checkNum(event)" style="width: 50%" required>
							<input type="text" id="txtCurp" name="det_ing" class="input-text" placeholder="Detalles(Opcional)" value="<?=$datos['det_ing'] ?>" style="width: 50%" required>
							<input type="text" id="txtCurp" name="cost_ing" class="input-text" placeholder="Precio" value="<?=$datos['cost_ing'] ?>" style="width: 50%" required>
						</div>
						<div class="boton-registro-emp">
							<input type="submit" name="boton" value="Añadir">
						</div>
					</form>
				<div class="boton-list">
					<a href="../VISTAS/Home_Productos.php">
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