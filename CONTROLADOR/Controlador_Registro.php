<?php
require_once("../MODELO/Modelo_Registro.php");
include_once '../BD/Conexion.php';

$c = new conexion(); 
$p = new con();

$bot = $_POST['boton'];

if ($bot == 'Registrarse') {

	$docu = $_POST["doc"];
	$nomb = $_POST["nom"];
	$apel = $_POST["ape"];
	$tele = $_POST["tel"];
	$cor = $_POST["corre"];
	$dire = $_POST["dir"];
	$usua = $_POST["usu"];	
	$con = $_POST["pass"];
	$conco = $_POST["passco"];
	
	$c->conexion();
	$p->registrar($docu, $nomb, $apel, $tele, $cor, $dire, $usua, $con, $conco);
}

if ($bot == 'Registrar') {
	
	$docu = $_POST["doc"];
	$nomb = $_POST["nom"];
	$apel = $_POST["ape"];
	$tele = $_POST["tel"];
	$cor = $_POST["corre"];
	$dire = $_POST["dir"];
	$usua = $_POST["usu"];	
	$con = $_POST["pass"];
	$conco = $_POST["passco"];

	$c->conexion();
	$p->registrar_emp($docu, $nomb, $apel, $tele, $cor, $dire, $usua, $con, $conco);
}

if ($bot == 'Agregar'){

	$nit = $_POST["nit"];
	$nomb = $_POST["nomb"];
	$tele = $_POST["tele"];
	$cor = $_POST["corr"];

	$c->conexion();
	$p->registrar_prov($nit, $nomb, $tele, $cor);
}
?>