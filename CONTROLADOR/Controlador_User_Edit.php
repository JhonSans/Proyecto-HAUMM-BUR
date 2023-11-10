<?php
error_reporting(0);

include_once '../BD/Conexion.php';
include_once '../MODELO/Modelo_User_Edit.php';
include_once '../MODELO/Modelo_Login.php';
include_once '../MODELO/Modelo_User.php';

$userSession = new UserSession();
$user = new User();
$c = new conexion();
$m_u_e = new User_Edit();

$username = htmlspecialchars($_SESSION['usu']);       

$sql = pg_query("SELECT * FROM USUARIOS WHERE USU = '$username'");

$fila = pg_fetch_row($sql);
	$row_cc = $fila[0]; 
	$row_cnt = $fila[8];

$query = pg_query("SELECT IMG_USER FROM IMAGEN_USUARIO INNER JOIN USUARIOS ON IMAGEN_USUARIO.ID_IMG = USUARIOS.ID_IMG WHERE CC_USU = '$row_cc'");

$linea = pg_fetch_row($query);
	$linea_img = $linea[0];

$nomb = $_POST["nom"];
$apel = $_POST["ape"];
$tele = $_POST["tel"];
$cor = $_POST["corre"];
$dire = $_POST["dir"];
$usua = $_POST["usu"];	
$con = $_POST["pass"];
$conco = $_POST["passco"];

$archivo = $_FILES['archivo']['tmp_name'];

$permitido = array("image/jpeg", "image/png");
$limite = 5000;

if ($con == "") {
		if ($archivo == "") {
			$c -> conexion();
			$m_u_e -> edit_admin_account($row_cc, $nomb, $apel, $tele, $cor, $dire, $usua, $row_cnt, $row_cnt, $linea_img);
		}
		else {
			if (in_array($_FILES['archivo']['type'], $permitido) && $_FILES['archivo']['size'] <= $limite * 1024) {
				$c -> conexion();
				$m_u_e -> edit_admin_account($row_cc, $nomb, $apel, $tele, $cor, $dire, $usua, $row_cnt, $row_cnt, $archivo);
			} else {
				$errorAlert = '<script src="../JS/sweetalert.min.js"></script>
									<script>
			        					swal({
										  title: "Error!",
										  text: "Archivo no admitido o excede limite de tamaño.",
										  icon: "error",
										  button: "Aceptar",
										});
			    			</script>';
				include_once '../VISTAS/Edit_Admin_Account.php';
			}
		}
}else{
	if ($archivo == "") {
		$c -> conexion();
		$m_u_e -> edit_admin_account($row_cc, $nomb, $apel, $tele, $cor, $dire, $usua, $con, $conco, $linea_img);
	}
	else {	
		if (in_array($_FILES['archivo']['type'], $permitido) && $_FILES['archivo']['size'] <= $limite * 1024) {
			$c -> conexion();
			$m_u_e -> edit_admin_account($row_cc, $nomb, $apel, $tele, $cor, $dire, $usua, $con, $conco, $archivo);
		} else {
			$errorAlert = '<script src="../JS/sweetalert.min.js"></script>
									<script>
			        					swal({
										  title: "Error!",
										  text: "Archivo no admitido o excede limite de tamaño.",
										  icon: "error",
										  button: "Aceptar",
										});
			    			</script>';
			include_once '../VISTAS/Edit_Admin_Account.php';
		}		
	}
}
?>