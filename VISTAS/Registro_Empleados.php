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
    <script type="text/javascript" src="../JS/show_password.js"></script>
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
				
				$datos = $_SESSION['form_buffer'];

               	echo $errorAlert;		
            	}	
			?>
		</main>
		<section class="section-2">
       		<div class="form-5">
				<div class="form-3">
					<form method="post" action="../CONTROLADOR/Controlador_Registro.php" class="content-form">
						<h1>Registrar Empleado</h1>
						<div class="content-registro-1">
							<input type="text" id="txtCurp" name="doc" class="input-text" placeholder="Documento" value="<?=$datos['doc'] ?>" onkeypress="return checkNum(event)" required>
							<input type="text" id="txtCurp" name="nom" class="input-text" placeholder="Nombre" value="<?=$datos['nom'] ?>" onkeypress="return checkLet(event)" required>
							<input type="text" id="txtCurp" name="ape" class="input-text" placeholder="Apellido" value="<?=$datos['ape'] ?>" onkeypress="return checkLet(event)" required>
							<input type="text" id="txtCurp" name="tel" class="input-text" placeholder="Telefono" value="<?=$datos['tel'] ?>" onkeypress="return checkNum(event)" required>
							<input type="email" id="txtCurp" name="corre" class="input-text" placeholder="Correo" value="<?=$datos['corre'] ?>" required>
							<input type="text" id="txtCurp" name="dir" class="input-text" placeholder="Direccion" value="<?=$datos['dir'] ?>" required>
						</div>
						<div class="content-registro-1">
							<input type="text" id="txtCurp" name="usu" class="input-text" placeholder="Usuario" required>	
							<input type="password" id="pwd" name="pass" class="input-text input-show" placeholder="Contraseña" required>
							<input type="password" id="pwd-conf" name="passco" class="input-text input-show" placeholder="Confirmar Contraseña">	
							<button type="button" id="eye" class="show-password" onClick="show()">
								<img src="../IMA/Eye.png" alt="eye" class="boton-show">
							</button>
							<button type="button" id="eye" class="show-password" onClick="hide()" hidden>
								<img src="../IMA/Eye.png" alt="eye" class="boton-show">
							</button>
						</div>
						<div class="boton-registro-emp">
							<input type="submit" name="boton" value="Registrar">
						</div>
					</form>
				</div>

				<div class="content-division">
					<hr class="division">
				</div>
				
				<div class="form-3">
					<form method="post" action="../CONTROLADOR/Controlador_Registro.php" class="content-form">
						<h1>Registrar Proveedor</h1>
						<div class="content-registro-2">
							<input type="text" id="txtCurp" name="nit" class="input-text" placeholder="NIT" value="<?=$datos['nit']  ?>" onkeypress="return checkNum(event)" required>
							<input type="text" id="txtCurp" name="nomb" class="input-text" placeholder="Nombre" value="<?=$datos['nomb'] ?>" onkeypress="return checkLet(event)" required>
							<input type="text" id="txtCurp" name="tele" class="input-text" placeholder="Telefono" value="<?=$datos['tele'] ?>" onkeypress="return checkNum(event)" required>
							<input type="email" id="txtCurp" name="corr" class="input-text" placeholder="Correo" value="<?=$datos['corr'] ?>" required>
							<div class="boton-registro-emp">
								<input type="submit" name="boton" value="Agregar">
							</div>
						</div>
					</form>
				</div>
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