<?php
class User_Edit
{
	public function edit_admin_account($row_cc, $nomb, $apel, $tele, $cor, $dire, $usua, $con, $conco, $archivo){

		$get_image = pg_query("SELECT IMG_USER FROM IMAGEN_USUARIO WHERE CC_USU = $row_cc");
		$get_row_image = pg_fetch_row($get_image);
			$row_img = $get_row_image[0];

		$p = fopen($archivo,'r');
		$data = fread($p,filesize($archivo));
		$image = pg_escape_bytea($data);
		
		if ($row_img == Null) {

			pg_query("INSERT INTO IMAGEN_USUARIO (CC_USU, IMG_USER) VALUES ($row_cc, '{$image}')");

		} else {
					
			pg_query("UPDATE IMAGEN_USUARIO SET IMG_USER = '{$image}' WHERE CC_USU = $row_cc");
		}

		$sql = pg_query("SELECT * FROM USUARIOS WHERE CC_USU = $row_cc");
		$fila=pg_fetch_row($sql);
		$row_cor = $fila[5];
		$row_usu = $fila[7];
		$row_con = $fila[8];

		if ($cor == $row_cor && $usua == $row_usu) {

			$enc = md5($con);

			if ($con == $row_con) {

				$query = pg_query("UPDATE USUARIOS SET NOM_USU = INITCAP('$nomb'), APE_USU = INITCAP('$apel'), CEL_USU = '$tele', COR_USU = LOWER('$cor'), DIR_USU = '$dire', USU = '$usua', CNT_USU = '$con' WHERE CC_USU = $row_cc");

				if ($query) {

					$doneAlert = '<script src="../JS/sweetalert.min.js"></script>
						<script>
        					swal({
							  title: "Exito!",
							  text: "Datos actualizados exitosamente.",
							  icon: "success",
							  button: "Aceptar",
							});
    					</script>';
					
					include_once '../VISTAS/Edit_Admin_Account.php';
				}
			} elseif ($con == $conco) {
				$query = pg_query("UPDATE USUARIOS SET NOM_USU = INITCAP('$nomb'), APE_USU = INITCAP('$apel'), CEL_USU = '$tele', COR_USU = LOWER('$cor'), DIR_USU = '$dire', USU = '$usua', CNT_USU = '$enc' WHERE CC_USU = $row_cc");

				if ($query) {

					$doneAlert = '<script src="../JS/sweetalert.min.js"></script>
						<script>
        					swal({
							  title: "Exito!",
							  text: "Datos actualizados exitosamente.",
							  icon: "success",
							  button: "Aceptar",
							});
    					</script>';
					
					include_once '../VISTAS/Edit_Admin_Account.php';
				}
			} else {
				$_SESSION['form_buffer'] = $_POST;

				$errorAlert = '<script src="../JS/sweetalert.min.js"></script>
								<script>
									swal({
									  title: "Error!",
									  text: "Contraseñas no coinciden",
									  icon: "error",
									  button: "Aceptar",
									});
								</script>';
				include_once '../VISTAS/Edit_Admin_Account.php';
			} 
		} elseif ($usua != $row_usu and $cor == $row_cor) {

			$query = pg_query("SELECT USU FROM USUARIOS WHERE USU = '$usua'");
			$sql = pg_fetch_row($query);
				$row_exist = $sql[0];
			
			if ($usua == $row_exist) {
				$errorAlert = '<script src="../JS/sweetalert.min.js"></script>
								<script>
									swal({
									  title: "Error!",
									  text: "Nombre de usuario ya registrado",
									  icon: "error",
									  button: "Aceptar",
									});
								</script>';
				include_once '../VISTAS/Edit_Admin_Account.php';
			} else {
				$enc = md5($con);

				if ($con == $row_con) {
					$query = pg_query("UPDATE USUARIOS SET NOM_USU = INITCAP('$nomb'), APE_USU = INITCAP('$apel'), CEL_USU = '$tele', COR_USU = LOWER('$cor'), DIR_USU = '$dire', USU = '$usua', CNT_USU = '$con' WHERE CC_USU = $row_cc");

					if ($query) {
						
						include_once '../MODELO/Modelo_Logout.php';
					}
				} elseif ($con == $conco) {
					$query = pg_query("UPDATE USUARIOS SET NOM_USU = INITCAP('$nomb'), APE_USU = INITCAP('$apel'), CEL_USU = '$tele', COR_USU = LOWER('$cor'), DIR_USU = '$dire', USU = '$usua', CNT_USU = '$enc' WHERE CC_USU = $row_cc");

					if ($query) {
						
						include_once '../MODELO/Modelo_Logout.php';
					}
				} else {
					$errorAlert = '<script src="../JS/sweetalert.min.js"></script>
									<script>
										swal({
										  title: "Error!",
										  text: "Contraseñas no coinciden",
										  icon: "error",
										  button: "Aceptar",
										});
									</script>';
					include_once '../VISTAS/Edit_Admin_Account.php';
				}
			}
		} elseif ($cor != $row_cor and $usua == $row_usu) {
			
			$query = pg_query("SELECT COR_USU FROM USUARIOS WHERE COR_USU = '$cor'");
			$sql = pg_fetch_row($query);
				$row_exist = $sql[0];
			
			if ($cor == $row_exist) {
				$errorAlert = '<script src="../JS/sweetalert.min.js"></script>
								<script>
									swal({
									  title: "Error!",
									  text: "Correo ya registrado",
									  icon: "error",
									  button: "Aceptar",
									});
								</script>';
				include_once '../VISTAS/Edit_Admin_Account.php';
			} else {
				$enc = md5($con);

				if ($con == $row_con) {
					$query = pg_query("UPDATE USUARIOS SET NOM_USU = INITCAP('$nomb'), APE_USU = INITCAP('$apel'), CEL_USU = '$tele', COR_USU = LOWER('$cor'), DIR_USU = '$dire', USU = '$usua', CNT_USU = '$con' WHERE CC_USU = $row_cc");

					if ($query) {
						
						$doneAlert = '<script src="../JS/sweetalert.min.js"></script>
							<script>
	        					swal({
								  title: "Exito!",
								  text: "Datos actualizados exitosamente.",
								  icon: "success",
								  button: "Aceptar",
								});
	    					</script>';
						
						include_once '../VISTAS/Edit_Admin_Account.php';
					}
				} elseif ($con == $conco) {
					$query = pg_query("UPDATE USUARIOS SET NOM_USU = INITCAP('$nomb'), APE_USU = INITCAP('$apel'), CEL_USU = '$tele', COR_USU = LOWER('$cor'), DIR_USU = '$dire', USU = '$usua', CNT_USU = '$enc' WHERE CC_USU = $row_cc");

					if ($query) {
						
						$doneAlert = '<script src="../JS/sweetalert.min.js"></script>
							<script>
	        					swal({
								  title: "Exito!",
								  text: "Datos actualizados exitosamente.",
								  icon: "success",
								  button: "Aceptar",
								});
	    					</script>';
						
						include_once '../VISTAS/Edit_Admin_Account.php';
					}
				} else {

					$errorAlert = '<script src="../JS/sweetalert.min.js"></script>
									<script>
										swal({
										  title: "Error!",
										  text: "Contraseñas no coinciden",
										  icon: "error",
										  button: "Aceptar",
										});
									</script>';
					include_once '../VISTAS/Edit_Admin_Account.php';
				}
			}
		} else {
			$query = pg_query("SELECT USU FROM USUARIOS WHERE USU = '$usua'");
			$sql = pg_fetch_row($query);
				$row_exist_usu = $sql[0];

			$query = pg_query("SELECT COR_USU FROM USUARIOS WHERE COR_USU = '$cor'");
			$sql = pg_fetch_row($query);
				$row_exist = $sql[0];
			
			if ($cor == $row_exist OR $usua == $row_exist_usu) {
				$errorAlert = '<script src="../JS/sweetalert.min.js"></script>
								<script>
									swal({
									  title: "Error!",
									  text: "Nombre de usuario/Correo ya registrado",
									  icon: "error",
									  button: "Aceptar",
									});
								</script>';
				include_once '../VISTAS/Edit_Admin_Account.php';
			} else {
				$enc = md5($con);

				if ($con == $row_con) {
					$query = pg_query("UPDATE USUARIOS SET NOM_USU = INITCAP('$nomb'), APE_USU = INITCAP('$apel'), CEL_USU = '$tele', COR_USU = LOWER('$cor'), DIR_USU = '$dire', USU = '$usua', CNT_USU = '$con' WHERE CC_USU = $row_cc");

					if ($query) {
						
						include_once '../MODELO/Modelo_Logout.php';
					}
				} elseif ($con == $conco) {
					$query = pg_query("UPDATE USUARIOS SET NOM_USU = INITCAP('$nomb'), APE_USU = INITCAP('$apel'), CEL_USU = '$tele', COR_USU = LOWER('$cor'), DIR_USU = '$dire', USU = '$usua', CNT_USU = '$enc' WHERE CC_USU = $row_cc");

					if ($query) {
						
						include_once '../MODELO/Modelo_Logout.php';
					}
				} else {
					session_name('sesion_temporal');
					session_start();

					$_SESSION['form_buffer'] = $_POST;

					$errorAlert = '<script src="../JS/sweetalert.min.js"></script>
									<script>
										swal({
										  title: "Error!",
										  text: "Contraseñas no coinciden",
										  icon: "error",
										  button: "Aceptar",
										});
									</script>';
					include_once '../VISTAS/Edit_Admin_Account.php';
				}
			}
		}
	}
}
?>