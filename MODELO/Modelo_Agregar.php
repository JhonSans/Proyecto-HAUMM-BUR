<?php
class AgregarInventario
{
	public function agregar_ingrediente($name_pvr, $nom_ig, $tip_ig, $det_ing, $can_ig, $cost_ing){
		$query = pg_query("SELECT NOM_ING, DET_ING FROM INGREDIENTE");
		$row = pg_fetch_row($query);
			$row_name = $row[0];
			$row_det = $row[1];

		$lowe_name = strtolower($nom_ig);
		$lowe_det = strtolower($det_ing);

		if ($lowe_name == $row_name and $lowe_det == $row_det) {
			$errorAlert = '<script src="../JS/sweetalert.min.js"></script>
									<script>
			        					swal({
										  title: "Error!",
										  text: "Este ingrediente ya se encuentra agregado",
										  icon: "error",
										  button: "Aceptar",
										});
			    			</script>';
			include_once '../CONTROLADOR/Controlador_Proveedor.php';
		} else {
			pg_query("INSERT INTO INGREDIENTE (ID_PVR, ID_TIP, NOM_ING, CANT_INV, DET_ING, PRE_ING) VALUES ($name_pvr, $tip_ig, LOWER('$nom_ig'), $can_ig, '$det_ing', $cost_ing)");

			$doneAlert = '<script src="../JS/sweetalert.min.js"></script>
					<script>
        				swal({
							title: "Exito!",
							text: "Ingrediente registrado correctamente.",
							icon: "success",
							button: "Aceptar",
						});
    				</script>';
			include_once '../VISTAS/Index_Admin.php';
		}
	}
}
?>