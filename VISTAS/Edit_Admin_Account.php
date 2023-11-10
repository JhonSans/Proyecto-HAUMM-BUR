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
    <title>Index</title>
</head>

<body>
	<div class="contenedor">
		<main class="main-2">
			<?php
				include_once('NAVBARS/Navbar_Admin.php');
			
				if(isset($errorAlert)){
					echo $errorAlert;		
            	}	

            	if(isset($doneAlert)){
               		echo $doneAlert;		
            	}

            	include_once '../MODELO/Modelo_Informacion_User.php';
			?>
		</main>
		<section class="section-2">
			<div class="form-5">
				<center>
					<h1 class="conf_title">Cuenta</h1>
				</center>
				<hr>
				<form method="post" action="../CONTROLADOR/Controlador_User_Edit.php" enctype="multipart/form-data">
					<div class="content_user">
						<div class="img-user-content">
							<div>
								<img src="../CONTROLADOR/Controlador_User_Img.php" alt="Imagen Usuario" class="img-user">
							</div>
						</div>
						<div class="user_span">
							<input type="file" name="archivo">	
						</div>
					</div>
					
					<div class="user_content">
						<div class="user_content_information">
							<h1>Información Personal</h1>
							<input type="text" id="txtCurp" name="nom" class="input-text" placeholder="Nombre" value="<?=$row_name?>" onkeypress="return checkLet(event)" required="required">
							<input type="text" id="txtCurp" name="ape" class="input-text" placeholder="Apellido" value="<?=$row_apel?>" onkeypress="return checkLet(event)" required="required">
							<input type="text" id="txtCurp" name="tel" class="input-text" placeholder="Telefono" value="<?=$row_tel?>" onkeypress="return checkNum(event)" required="required">
							<input type="email" id="txtCurp" name="corre" class="input-text" placeholder="Correo" value="<?=$row_cor?>" required="required">
							<input type="text" id="txtCurp" name="dir" class="input-text" placeholder="Direccion" value="<?=$row_dir?>" required="required">
						</div>
						<div class="user_content_information">
							<h1>Información Usuario</h1>
							<input type="text" id="txtCurp" name="usu" class="input-text" placeholder="Usuario" value="<?=$row_user?>" required="required">	
							<input type="password" id="pwd" name="pass" class="input-text input-show" placeholder="Contraseña">
							<input type="password" id="pwd-conf" name="passco" class="input-text input-show" placeholder="Confirmar Contraseña">
							<center>
								<button type="button" id="eye" class="show-password" onClick="show()">
									<img src="../IMA/Eye.png" alt="eye" class="boton-show">
								</button>
								<button type="button" id="eye" class="show-password" onClick="hide()" hidden>
									<img src="../IMA/Eye.png" alt="eye" class="boton-show">
								</button>
							</center>
							
						</div>
					</div>
					<center>
						<div class="boton-registro">
							<input type="submit" name="boton" value="Guardar" >
						</div>
						<a href="../VISTAS/Index_Admin.php">
							<input type="button" value="Regresar" class="history-back"/>
						</a>
					</center>
				</form>
			</div>
		</section>

		<footer>
			&copy; HAUMM-BUR!
		</footer>
	</div>
</body>

</html>