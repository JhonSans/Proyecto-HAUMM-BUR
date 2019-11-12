<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--Caracteres Especiales-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" href="../CSS/Stylo.css">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Controlador</title>
</head>

<body>
	<div class="contenedor">
		<main class="main-2">			
			<nav>
				<div class="container">
					<input id="responsive-menu" type="checkbox">
					<label for="responsive-menu"><a href="../Index.html" class="text-title-primary">Haumm-Bur!<img
								src="../IMA/Logo.png" alt="Logo" class="logo"></a><span id="menu-icon"></span></label>
					<div id="overlay"></div>
					<ul>
						<li><a href="../Index.html" class="link-text">Inicio</a></li>
						<li><a href="" class="link-text">Nuestro Menú</a></li>
						<li><a href="" class="link-text">Nosotros</a></li>
						<li><a href="" class="link-text">Contactanos</a></li>
						<center>
							<hr class="h1">
						</center>
						<li><b><a href="../VISTAS/Login.html" class="link-text">Iniciar Sesion</a></b></li>
						<li><b><a href="../VISTAS/Registro.html" class="link-text">Registrarse</a></b></li>
					</ul>
					<ul id="social-media">
						<li>
							<a href="https://www.facebook.com/">
								<i class="fab fa-facebook-f"></i>
								<span class="screen-reader-text">Facebook</span>
							</a>
						</li>
						<li>
							<a href="https://www.gmail.com/">
								<i class="fab fa-google"></i>
								<span class="screen-reader-text">Gmail</span>
							</a>
						</li>
						<li>
							<a href="https://www.twitter.com/">
								<i class="fab fa-twitter"></i>
								<span class="screen-reader-text">Twitter</span>
							</a>
						</li>
						<li>
							<a href="https://www.instagram.com/">
								<i class="fab fa-instagram"></i>
								<span class="screen-reader-text">Instagram</span>
							</a>
						</li>
					</ul>
				</div>
			</nav>	
		</main>
	
		<header>
		
		</header>
		<section class="section-2">
			<div class="form-3">
			<?php
				require_once("../MODELO/Modelo_Registro.php");
				require_once("../BD/Conexion.php");
				
				$c = new conexion(); 
				$p = new con();
		
				$bot=$_POST['boton'];
		
				if($bot=='Registrar')
				{
					$docu=$_POST["doc"];
					$nomb=$_POST["nom"];
					$apel=$_POST["ape"];
					$tele=$_POST["tel"];
					$cor=$_POST["corre"];
					$dire=$_POST["dir"];
					$usua=$_POST["usu"];
					$con=$_POST["pass"];
					$conco=$_POST["passco"];
					
					$c->conexion();	
					$p->registrar($docu,$nomb,$apel,$tele,$cor,$dire,$usua,$con,$conco);
					echo "<br>";
					
					
				}
		
				if($bot=='Ingresar')
				{
					$us=$_POST["usu"];
					$pa=$_POST["pass"];
					
					$c->conexion();
					
					echo $p->login($us,$pa);
					echo "<br>";
					echo '<a onclick="window.history.back();">Regresar</a>';
				}
	
			?>
			</div>
		</section>
		<footer>
			&copy; HAUMM-BUR!
		</footer>
	</div>
</body>
</html>