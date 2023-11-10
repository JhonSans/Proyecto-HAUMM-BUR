<?php
$username = htmlspecialchars($_SESSION['usu']);       

$sql = pg_query("SELECT * FROM USUARIOS WHERE USU = '$username'");

$fila=pg_fetch_row($sql);

$row_rol = $fila[1]; 

if($row_rol == 1){

	header("location: ../VISTAS/Index_Admin.php");
}

if($row_rol == 2){
	
	header("location: ../VISTAS/Index_Proveedor.php");
}

if($row_rol == 3){
	
	header("location: ../VISTAS/Index_Usuario.php");
}
?>