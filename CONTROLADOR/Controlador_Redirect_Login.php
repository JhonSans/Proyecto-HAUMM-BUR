<?php
include_once '../MODELO/Modelo_Login.php';
include_once '../MODELO/Modelo_User.php';

$userSession = new UserSession();
$user = new User();

if(isset($_SESSION['usu'])){
	
include_once '../MODELO/Modelo_Redirect_Login.php';
	
$user->setUser($userSession->getCurrentUser());
	
}else{
	header ('location: ../VISTAS/Login.php');
}
?>