<?php
include_once '../MODELO/Modelo_Login.php';
include_once '../MODELO/Modelo_User.php';

$userSession = new UserSession();
$user = new User();

if(isset($_SESSION['usu'])){
	
	$user->setUser($userSession->getCurrentUser());
	include_once '../VISTAS/Index_Usuario.php';
	//header("location: ../VISTAS/Index_Usuario.php");
	
}else if(isset($_POST['usu']) && isset($_POST['pass'])){
	
	$userForm = $_POST['usu'];
	$passForm = $_POST['pass'];
	
	//echo $userForm." ".$passForm;
	
	if($user->userExists($userForm, $passForm)){
		
		$userSession->setCurrentUser($userForm);
		$user->setUser($userForm);

		//echo "Iniciaste Sesion XD";
		include_once '../VISTAS/Index_Usuario.php';
		//header("location: ../VISTAS/Index_Usuario.php");
	}else{
		
		$errorLogin = "Nombre de Usuario o Contraseña Incorrectas";
		include_once '../VISTAS/Login.php';
	}
}

?>