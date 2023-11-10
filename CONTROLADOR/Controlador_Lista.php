<?php
include_once "../BD/Conexion.php";
include_once "../MODELO/Modelo_Lista.php";

$c = new conexion();
$m = new Modelo_Lista();

$bton = $_POST["list-boton"];

if($bton == 'Empleado'){
	
	include_once "../VISTAS/Lista_Empleados.php";
}

if($bton == 'Proveedor'){
	
	include_once "../VISTAS/Lista_Proveedores.php";
}

if($bton == 'Usuario'){
	
	include_once "../VISTAS/Lista_Usuarios.php";
}

if($bton == 'Ingrediente'){
	
	include_once "../VISTAS/Lista_Ingredientes.php";
}

if($bton == 'Productos'){

	include_once "../VISTAS/Lista_Productos.php";
}


?>