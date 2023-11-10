<?php
class con
{	
	private $result;
	private $result_bot;
	private $result_pro;
	private $result_bot_pro;
	
	public function registrar($docu,$nomb,$apel,$tel,$cor,$dir,$usua,$cont,$confcont)
	{	
		$sql = pg_query("SELECT * FROM USUARIOS");
		$fila=pg_fetch_row($sql);
		$row_cor = $fila[5];
		$row_usu = $fila[7];

		$query = pg_query("SELECT CC_USU FROM USUARIOS WHERE CC_USU = '$docu'");
		$row = pg_fetch_row($query);
			$row_cc = $row[0];

		if ($row_cc == $docu){
			session_name('sesion_temporal');
			session_start();

			$_SESSION['form_buffer'] = $_POST;

			$errorAlert = '<script src="../JS/sweetalert.min.js"></script>
						<script>
        					swal({
							  title: "Error!",
							  text: "N° de documento ya ha sido registrado.",
							  icon: "error",
							  button: "Aceptar",
							});
    					</script>';
			include_once '../VISTAS/Registro.php';
		}elseif ($row_usu == $usua OR $row_cor == $cor){
			session_name('sesion_temporal');
			session_start();

			$_SESSION['form_buffer'] = $_POST;

			$errorAlert = '<script src="../JS/sweetalert.min.js"></script>
						<script>
        					swal({
							  title: "Error!",
							  text: "Nombre de usuario/Correo ya registrado.",
							  icon: "error",
							  button: "Aceptar",
							});
    					</script>';
			include_once '../VISTAS/Registro.php';
		}else {
			$enc = md5($cont);
		
			if($cont == $confcont)
			{
				pg_query("INSERT INTO USUARIOS (CC_USU, ID_ROL, NOM_USU, APE_USU, CEL_USU, COR_USU, DIR_USU, USU, CNT_USU, ESTADO) VALUES ('$docu', 3, INITCAP('$nomb'),INITCAP('$apel'),'$tel',LOWER('$cor'),'$dir','$usua','$enc', 1)");

				$doneAlert = '<script src="../JS/sweetalert.min.js"></script>
						<script>
        					swal({
							  title: "Exito!",
							  text: "El usuario ha sido registrado correctamente.",
							  icon: "success",
							  button: "Aceptar",
							});
    					</script>';
				include_once '../VISTAS/Login.php';
			}

			else{
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
				include_once '../VISTAS/Registro.php';
			}	
		}
	}
	
	public function registrar_emp($docu, $nomb, $apel, $tel, $cor, $dir, $usua, $cont, $confcont)
	{	
		$sql = pg_query("SELECT * FROM USUARIOS");
		$fila=pg_fetch_row($sql);
		$row_cor = $fila[5];
		$row_usu = $fila[7];

		$query = pg_query("SELECT CC_USU FROM USUARIOS WHERE CC_USU = '$docu'");
		$row = pg_fetch_row($query);
			$row_cc = $row[0];

		if ($row_cc == $docu){
			
			session_start();

			$_SESSION['form_buffer'] = $_POST;

			$errorAlert = '<script src="../JS/sweetalert.min.js"></script>
						<script>
        					swal({
							  title: "Error!",
							  text: "N° de documento ya registrado.",
							  icon: "error",
							  button: "Aceptar",
							});
    					</script>';
			include_once '../VISTAS/Registro_Empleados.php';
		}elseif ($row_usu == $usua OR $row_cor == $cor){
			
			session_start();

			$_SESSION['form_buffer'] = $_POST;

			$errorAlert = '<script src="../JS/sweetalert.min.js"></script>
						<script>
        					swal({
							  title: "Error!",
							  text: "Nombre de usuario/Correo ya registrado.",
							  icon: "error",
							  button: "Aceptar",
							});
    					</script>';
			include_once '../VISTAS/Registro_Empleados.php';
		}else {
			$enc = md5($cont);
		
			if($cont == $confcont)
			{
				pg_query("INSERT INTO USUARIOS (CC_USU, ID_ROL, NOM_USU, APE_USU, CEL_USU, COR_USU, DIR_USU, USU, CNT_USU, ESTADO) VALUES ('$docu', 2, INITCAP('$nomb'),INITCAP('$apel'),'$tel',LOWER('$cor'),'$dir','$usua','$enc', 1)");

				$doneAlert = '<script src="../JS/sweetalert.min.js"></script>
						<script>
        					swal({
							  title: "Exito!",
							  text: "El empleado ha sido registrado correctamente.",
							  icon: "success",
							  button: "Aceptar",
							});
    					</script>';
				include_once '../VISTAS/Index_Admin.php';
			}

			else{
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
				include_once '../VISTAS/Registro_Empleados.php';
			}	
		}
	}

	public function registrar_prov($nit, $nomb, $tele, $cor)
	{

		$sql = pg_query("SELECT * FROM PROVEEDOR");
		$fila = pg_fetch_row($sql);
			$row_nom = $fila[1];

		$query = pg_query("SELECT ID_PVR FROM PROVEEDOR");
		$row = pg_fetch_row($query);
			$row_nit = $row[0];

		if ($row_nom == $nomb OR $row_nit == $nit){
			session_start();

			$_SESSION['form_buffer'] = $_POST;

			$errorAlert = '<script src="../JS/sweetalert.min.js"></script>
						<script>
        					swal({
							  title: "Error!",
							  text: "Esta empresa ya ha sido registrada.",
							  icon: "error",
							  button: "Aceptar",
							});
    					</script>';
			include_once '../VISTAS/Registro_Empleados.php';
		}else {
			pg_query("INSERT INTO PROVEEDOR VALUES ('$nit', INITCAP('$nomb'),LOWER('$cor'), '$tele', 1)");

			$doneAlert = '<script src="../JS/sweetalert.min.js"></script>
					<script>
        				swal({
							title: "Exito!",
							text: "El proveedor ha sido registrado correctamente.",
							icon: "success",
							button: "Aceptar",
						});
    				</script>';
			include_once '../VISTAS/Index_Admin.php';
		}	
	}
	
	public function getRegistro(){
		return $this->result . "<br>" . $this->result_bot;
	}
	
	public function getRegistro_Pro(){
		return $this->result_pro . "<br>" . $this->result_bot_pro;
	}
}	
?>