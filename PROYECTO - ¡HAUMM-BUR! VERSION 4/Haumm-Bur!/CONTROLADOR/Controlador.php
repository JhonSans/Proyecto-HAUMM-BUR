<?php
require_once("../MODELO/Modelo_Registro.php");
require_once("../BD/Conexion.php");

$c = new conexion();
$p = new con();

$bot = $_POST['boton'];

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
	$p->registrar($docu, $nomb, $apel, $tele, $cor, $dire, $usua, $con, $conco);
}

if ($bot == 'Ingresar') {

	$us = $_POST["usu"];
	$pa = $_POST["pass"];

	$c->conexion();

	$p->login($us, $pa);

}

?>

