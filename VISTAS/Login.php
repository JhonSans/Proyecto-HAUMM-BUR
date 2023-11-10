<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--Caracteres Especiales-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="../CSS/Stylo.css">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Login</title>
</head>

<body">
	<div class="contenedor">
		<main class="main-2">
			<?php
				include_once 'NAVBARS/Navbar_Index.php';
			?>
		</main>
		<section class="section-2">
			<div class="form-3">
				<?php
            	if(isset($errorLogin)){
                echo $errorLogin;
            	}	
				
				if(isset($doneAlert)){
               	echo $doneAlert;		
            	}
       			?>
				<form method="post" action="../CONTROLADOR/Controlador_Login.php" class="content-form-login">
					<h1>Iniciar Sesion</h1>
					<br>
					<input type="text" id="" name="usu" placeholder="Usuario" required class="input-text">
					<br>
					<br>
					<input type="password" id="" name="pass" placeholder="Contraseña" required class="input-text">
					<br>
					<br>
					<input type="submit" name="boton" value="Ingresar">
				</form>
			</div>
		</section>
		<footer>
			&copy; HAUMM-BUR!
		</footer>
	</div>
</body>
</html>