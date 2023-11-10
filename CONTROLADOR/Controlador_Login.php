<?php
include_once '../MODELO/Modelo_Login.php';
include_once '../MODELO/Modelo_User.php';

$userSession = new UserSession();
$user = new User();

if(isset($_POST['usu']) && isset($_POST['pass'])){
	
$userForm = $_POST['usu'];
$passForm = $_POST['pass'];
	
if($user->userExists($userForm, $passForm)){
		
	$userSession->setCurrentUser($userForm);
	$user->setUser($userForm);
		
	if($user->getRol() == 1){
	
		include_once '../VISTAS/Index_Admin.php';
	}
	
	if($user->getRol() == 3){
	
		include_once '../VISTAS/Index_Usuario.php';
	}
	
	}else{
	
		$errorLogin = '<script src="../JS/sweetalert.min.js"></script>
						<script>
        					swal({
							  title: "Error!",
							  text: "Los datos ingresados son incorrectos",
							  icon: "error",
							  button: "Aceptar",
							});
    					</script>';
		include_once '../VISTAS/Login.php';
	}
}	
?>