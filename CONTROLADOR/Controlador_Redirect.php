<?php
error_reporting(0);

include_once '../MODELO/Modelo_Login.php';
include_once '../MODELO/Modelo_User.php';

$userSession = new UserSession();
$user = new User();

if(!isset($_SESSION['usu'])){
	header ('location: ../VISTAS/Login.php');	
}
?>