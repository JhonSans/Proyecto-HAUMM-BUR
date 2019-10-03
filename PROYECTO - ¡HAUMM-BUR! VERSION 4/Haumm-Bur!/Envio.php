<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="Stylo.css">
<title>Envio</title>
</head>

<body>
<div class="contenedor">
		<main>
			<input type="checkbox" class="openSidebarMenu" id="openSidebarMenu">
					<label for="openSidebarMenu" class="sidebarIconToggle">
    				<div class="spinner diagonal part-1"></div>
    				<div class="spinner horizontal"></div>
    				<div class="spinner diagonal part-2"></div>
  					</label>
			
			
			<ul class="navbar">
  				<li class="bar"><a class="active" href="#H">HAUMM-BUR!</a></li>
				<li class="buri">
					<a href="#I"><img src="Img/Logo.png" class="img" alt="Logo"></a>
				</li>
				<li class="rig"><a href="#C">Carrito</a></li>
				<li class="rig">
					
				</li>
				
			</ul>
			<div id="sidebarMenu">
				<ul class="sidebarMenuInner">
      				<li><span>Inicio</span></li>
      				<li><a href="" target="_blank">Menu</a></li>
      				<li><a href="" target="_blank">Nosotros</a></li>
      				<li><a href="" target="_blank">Iniciar Sesion</a></li>
      				<li><a href="" target="_blank">Registrarse</a></li>
    			</ul>
			</div>
		</main>
	
		<header>
		
		</header>
		<section>
			<?php
				include "Operador.php";
				$p= new con();
		
				$a=$_POST['boton'];
		
				if($a=='Registrar')
				{
					$nomb=$_POST["nom"];
					$apel=$_POST["ape"];
					$tele=$_POST["tel"];
					$cor=$_POST["corre"];
					$dire=$_POST["dir"];
					$usua=$_POST["usu"];
					$con=$_POST["pass"];
					$conco=$_POST["passco"];
					
					echo $p->registrar($nomb,$apel,$tele,$cor,$dire,$usua,$con,$conco);
					echo "<br>";
					echo '<a href="Index.html">Regresar</a>';
				}
		
				if($a=='Ingresar')
				{
					$us=$_POST["usua"];
					$pa=$_POST["passa"];
					
					echo $p->login($us,$pa);
					echo "<br>";
					echo '<a href="Index.html">Regresar</a>';
				}
	
			?>
		</section>
		<aside>
		
		</aside>
		<aside>
		
		</aside>
		<footer>
			&copy; HAUMM-BUR!
		</footer>
	</div>
</body>
</html>