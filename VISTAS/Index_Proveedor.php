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
	
	<!--Dont-Back-->
	<script type="application/javascript">
		function deshabilitaRetroceso(){
    	window.location.hash="Login";
    	window.location.hash="Login-Top";
    	window.onhashchange=function(){
			window.location.hash="Login";
			}
		}
	</script>
</head>

<body onload="deshabilitaRetroceso()">
	<div class="contenedor">
		<main class="main-2">
			<nav>
				<div class="container">
					<input id="responsive-menu" type="checkbox">
					<label for="responsive-menu"><a href="../VISTAS/Index_Proveedor.php" class="text-title-primary">Haumm-Bur!<img
								src="../IMA/Logo.png" alt="Logo" class="logo"></a><span id="menu-icon"></span></label>
					<div id="overlay"></div>
					<ul>
						<li><img src="../IMA/User.PNG" alt="Admin" class="user-image"></li>
						<li><a href="../VISTAS/Index_Proveedor.php" class="link-text">Inicio</a></li>
						<li><a href="" class="link-text">Nuestro Menú</a></li>
						<li><a href="" class="link-text">Nosotros</a></li>
						<li><a href="" class="link-text">Contactanos</a></li>
						<center>
							<hr class="h1">
						</center>
						<li><b><a href="" class="link-text">Text</a></b></li>
                        <li><b><a href="" class="link-text">Text</a></b></li>
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
		<section class="section-2">
			<div class="form-3">
				
				<ul>
            		<li><h1>Iniciaste como Proveedor</h1></li>
            		<li>
                		<a href="../MODELO/Modelo_Logout.php">Cerrar sesión</a>
            		</li>
        		</ul>
			</div>
		</section>

		<footer>
			&copy; HAUMM-BUR!
		</footer>
	</div>
</body>

</html>