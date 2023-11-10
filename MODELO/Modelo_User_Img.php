<?php
error_reporting(0);
include_once '../BD/Conexion.php';
include_once '../MODELO/Modelo_Login.php';
include_once '../MODELO/Modelo_User.php';

$userSession = new UserSession();
$user = new User();
$c = new conexion(); 

$username = htmlspecialchars($_SESSION['usu']);       

$sql = pg_query("SELECT * FROM USUARIOS WHERE USU = '$username'");

$fila=pg_fetch_row($sql);
$row_cc = $fila[0];

$query = pg_query("SELECT IMG_USER FROM IMAGEN_USUARIO WHERE CC_USU = $row_cc");
$row = pg_fetch_row($query);
	$row_img = $row[0];
?>