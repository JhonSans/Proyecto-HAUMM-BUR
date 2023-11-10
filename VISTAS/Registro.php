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
				include_once 'NAVBARS/Navbar_Index.php';
			?>
		</main>
		<section class="section-2">
			<?php
				error_reporting(0);
			
				if(isset($errorAlert)){
				session_name('sesion_temporal');

				$datos = $_SESSION['form_buffer'];

				unset($_SESSION['sesion_temporal']);
				session_destroy('sesion_temporal');
				echo $errorAlert;		
            	}	
       		?>
			<div class="form-3">
				<form method="post" action="../CONTROLADOR/Controlador_Registro.php" class="content-form-registro">
					<h1>Registro</h1>
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
					<div class="boton-registro">
						<input type="submit" name="boton" value="Registrarse">
					</div>
				</form>
			</div>
			
			<div class="form-3-2">
				<form>
					<h1>Registrarse con redes sociales</h1>
				</form>
			</div>
		</section>

		<footer>
			&copy; HAUMM-BUR!
		</footer>
	</div>
</body>

</html>