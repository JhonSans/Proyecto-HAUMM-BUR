<?php
include_once '../MODELO/Modelo_User_Img.php';
echo '<nav>
	<div class="container">
		<label for="responsive-menu">
			<a href="../VISTAS/Index_Admin.php" class="text-title-primary">
				Haumm-Bur!
				<img src="../IMA/Logo.png" alt="Logo" class="logo">
			</a>
			<div class="admin-icon">';
			if ($row_img == NULL) {
				echo '<img src="../IMA/User.PNG" alt="Admin" class="user-image">';
			} else {
				echo '<img src="../CONTROLADOR/Controlador_User_Img.php" alt="Admin" class="user-image">';
			}
				
echo			'<div class="overlay">
					<center>
						<div class="user-content-img">
							<a href="../VISTAS/Edit_Admin_Account.php" class="cerrar-admin conf-admin">Cuenta</a>
							<a href="../MODELO/Modelo_Logout.php" class="cerrar-admin">
                                <img src="../IMA/Icon-Log-Out.png" class="icon-close" alt="Cerrar Sesión">
                           	</a>
						</div>
					</center>
				</div>
			</div>
		</label>
	</div>
</nav>';
?>