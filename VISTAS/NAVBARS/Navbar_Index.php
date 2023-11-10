<?php
echo'<nav>
    	<div class="container">
            <input id="responsive-menu" type="checkbox">
            <label for="responsive-menu">
            	<a href="../Index.html" class="text-title-primary">Haumm-Bur!<img src="../IMA/Logo.png" alt="Logo" class="logo"></a>
            	<span id="menu-icon"></span>
            </label>
            <div id="overlay"></div>
                <ul>
                    <li><a href="../Index.html" class="link-text">Inicio</a></li>
                    <li><a href="" class="link-text">Nuestro Menú</a></li>
                    <li><a href="" class="link-text">Nosotros</a></li>
                    <li><a href="" class="link-text">Contactanos</a></li>
                    <center>
                        <hr class="h1">
                    </center>
                    <li><b><a href="../CONTROLADOR/Controlador_Redirect_Login.php" class="link-text">Iniciar Sesion</a></b></li>
                    <li><b><a href="../VISTAS/Registro.php" class="link-text">Registrarse</a></b></li>
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
            </nav>';
?>