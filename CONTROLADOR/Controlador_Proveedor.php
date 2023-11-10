<?php
include_once '../BD/Conexion.php';
include_once '../MODELO/Modelo_Proveedor.php';

$c = new conexion();
$m_p = new ConsultaProveedor();

$c -> conexion();

$crear = $_POST['crear'];

if ($crear == 'registrar') {
	include_once '../VISTAS/Agregar_Producto.php';
} else {
	include_once '../VISTAS/Agregar_Ingredientes.php';
}

?>