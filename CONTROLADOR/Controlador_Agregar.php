<?php
include_once '../BD/Conexion.php';
include_once '../MODELO/Modelo_Agregar.php';

$c = new Conexion();
$m_a = new AgregarInventario();

$boton = $_POST['boton'];

$name_pvr = $_POST['name_pvr'];
$nom_ig = $_POST['nom_ig'];
$tip_ig = $_POST['tip_ig'];
$det_ing = $_POST['det_ing'];
$can_ig = $_POST['can_ig'];
$cost_ing = $_POST['cost_ing'];

if ($boton == 'Añadir') {

	if ($name_pvr == 'value-null' OR $tip_ig == 'tipe-null') {
		$errorAlert = '<script src="../JS/sweetalert.min.js"></script>
									<script>
			        					swal({
										  title: "Error!",
										  text: "Debes seleccionar un proveedor o tipo de ingrediente.",
										  icon: "error",
										  button: "Aceptar",
										});
			    			</script>';
		include_once '../CONTROLADOR/Controlador_Proveedor.php';
	} else {
		
		$c -> conexion();
		$m_a -> agregar_ingrediente($name_pvr, $nom_ig, $tip_ig, $det_ing, $can_ig, $cost_ing);
	}
}

if ($boton == 'Agregar') {
	
}
?>