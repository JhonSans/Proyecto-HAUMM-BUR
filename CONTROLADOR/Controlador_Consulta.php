<?php
include_once '../BD/Conexion.php';
include_once '../MODELO/Modelo_Consulta.php';

$c = new Conexion();
$s = new Consulta();

$num_id = $_POST['num_id'];

$c -> conexion();

include_once '../VISTAS/Home_Consulta.php';
?>