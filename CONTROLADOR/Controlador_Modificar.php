<?php
include_once '../BD/Conexion.php';
include_once '../MODELO/Modelo_Modificar.php';

$c = new conexion();
$m_m = new Modelo_Modificar();

$bot_mod = $_POST['mod-bot'];

if($bot_mod == 'Save')
{
	$docu = $_POST['doc'];
	$nom = $_POST['nom_prov'];
	$apelli = $_POST['apel'];
	$cel = $_POST['tel'];
	$cor = $_POST['correo'];
	$dir = $_POST['direc'];
	$usu = $_POST['usuario'];
	
	$c -> conexion();
	$m_m -> modificar_empleado($docu,$nom,$apelli,$cel,$cor,$dir,$usu);
	
}

if($bot_mod == 'Delete')
{
	$docu = $_POST['doc'];
	$estado = $_POST['estado'];
	
	$c -> conexion();
	$m_m -> eliminar_empleado($docu, $estado);

}

if($bot_mod == 'Save-Usuario')
{
	$docu = $_POST['doc'];
	$nom = $_POST['nom_prov'];
	$apelli = $_POST['apel'];
	$cel = $_POST['tel'];
	$cor = $_POST['correo'];
	$dir = $_POST['direc'];
	$usu = $_POST['usuario'];
	
	$c -> conexion();
	$m_m -> modificar_usuario($docu,$nom,$apelli,$cel,$cor,$dir,$usu);
	
}

if($bot_mod == 'Delete-Usuario')
{
	$docu = $_POST['doc'];
	$estado = $_POST['estado'];
	
	$c -> conexion();
	$m_m -> eliminar_usuario($docu, $estado);
	
}

if($bot_mod == 'Save-Proveedor')
{
	$nit = $_POST['nit'];
	$nom = $_POST['nom_prov'];
	$cel = $_POST['tel'];
	$cor = $_POST['correo'];
	
	$c -> conexion();
	$m_m -> modificar_proveedor($nit,$nom,$cor,$cel);	
}

if($bot_mod == 'Delete-Proveedor')
{
	$nit = $_POST['nit'];
	$estado = $_POST['estado'];
	
	$c -> conexion();
	$m_m -> eliminar_proveedor($nit,$estado);	
}

if($bot_mod == 'Save-Ingrediente')
{
	$ref_ing = $_POST ['ref_ing'];
	$nom_ing = $_POST ['nom_ing'];
	$tip_ing = $_POST ['tip_ing'];
	$det_ing = $_POST ['det_ing'];
	$cant_ing = $_POST ['cant_ing'];
	$name_prov = $_POST ['name_prov'];
	$cost_ing = $_POST ['cost_ing'];
	
	$c -> conexion();
	$m_m -> modificar_ingrediente($ref_ing, $nom_ing, $tip_ing, $det_ing, $cant_ing, $name_prov, $cost_ing);
}

?>