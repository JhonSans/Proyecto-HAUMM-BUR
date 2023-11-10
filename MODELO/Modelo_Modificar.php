<?php
class Modelo_Modificar{
	
	public function modificar_empleado($docu,$nom,$apelli,$cel,$cor,$dir,$usu)
	{
		//echo $docu." ".$nom." ".$apelli." ".$cel." ".$cor." ".$dir." ".$usu." ".$estado;	
		$sql = pg_query("UPDATE USUARIOS SET NOM_USU=INITCAP('$nom'),APE_USU=INITCAP('$apelli'),CEL_USU='$cel',COR_USU=LOWER('$cor'),DIR_USU='$dir',USU='$usu' WHERE CC_USU='$docu'");
		$exitoAlert = '<script src="../JS/sweetalert.min.js"></script>
						<script>
        					swal({
							  title: "Exito!",
							  text: "Datos modificados exitosamente.",
							  icon: "success",
							  button: "Aceptar",
							});
    					</script>';
		include_once '../VISTAS/Home_Listas.php';
	}
	
	public function eliminar_empleado($docu, $estado)
	{
		//echo $docu." ".$estado;	
		if($estado == '1'){
			$sql = pg_query("UPDATE USUARIOS SET ESTADO='0' WHERE CC_USU='$docu'");
			$exitoAlert = '<script src="../JS/sweetalert.min.js"></script>
						<script>
        					swal({
							  title: "Exito!",
							  text: "Usuario eliminado exitosamente.",
							  icon: "success",
							  button: "Aceptar",
							});
    					</script>';
			include_once '../VISTAS/Home_Listas.php';
		}
		else{
			$sql = pg_query("UPDATE USUARIOS SET ESTADO='1' WHERE CC_USU='$docu'");
			$exitoAlert = '<script src="../JS/sweetalert.min.js"></script>
						<script>
        					swal({
							  title: "Exito!",
							  text: "Usuario activado exitosamente.",
							  icon: "success",
							  button: "Aceptar",
							});
    					</script>';
			include_once '../VISTAS/Home_Listas.php';
		}
		
	}
	
	public function modificar_usuario($docu,$nom,$apelli,$cel,$cor,$dir,$usu)
	{
		//echo $docu." ".$nom." ".$apelli." ".$cel." ".$cor." ".$dir." ".$usu." ".$estado;	
		$sql = pg_query("UPDATE USUARIOS SET NOM_USU=INITCAP('$nom'),APE_USU=INITCAP('$apelli'),CEL_USU='$cel',COR_USU=LOWER('$cor'),DIR_USU='$dir',USU='$usu' WHERE CC_USU='$docu'");
		$exitoAlert = '<script src="../JS/sweetalert.min.js"></script>
						<script>
        					swal({
							  title: "Exito!",
							  text: "Datos modificados exitosamente.",
							  icon: "success",
							  button: "Aceptar",
							});
    					</script>';
		include_once '../VISTAS/Home_Listas.php';
	}
	
	public function eliminar_usuario($docu, $estado)
	{
		if($estado == '1'){
			$sql = pg_query("UPDATE USUARIOS SET ESTADO='0' WHERE CC_USU='$docu'");
			$exitoAlert = '<script src="../JS/sweetalert.min.js"></script>
						<script>
        					swal({
							  title: "Exito!",
							  text: "Usuario eliminado exitosamente.",
							  icon: "success",
							  button: "Aceptar",
							});
    					</script>';
			include_once '../VISTAS/Home_Listas.php';
		}
		else{
			$sql = pg_query("UPDATE USUARIOS SET ESTADO='1' WHERE CC_USU='$docu'");
			$exitoAlert = '<script src="../JS/sweetalert.min.js"></script>
						<script>
        					swal({
							  title: "Exito!",
							  text: "Usuario activado exitosamente.",
							  icon: "success",
							  button: "Aceptar",
							});
    					</script>';
			include_once '../VISTAS/Home_Listas.php';
		}
		
	}

	public function modificar_proveedor($nit,$nom,$cor,$cel)
	{
		$sql = pg_query("UPDATE PROVEEDOR SET NOM_PVR=LOWER('$nom'),COR_PVR='$cor',TEL_PVR='$cel' WHERE ID_PVR='$nit'");
		$exitoAlert = '<script src="../JS/sweetalert.min.js"></script>
						<script>
        					swal({
							  title: "Exito!",
							  text: "Datos modificados exitosamente.",
							  icon: "success",
							  button: "Aceptar",
							});
    					</script>';
		include_once '../VISTAS/Home_Listas.php';
	}

	public function eliminar_proveedor($nit, $estado)
	{
		if($estado == '1'){
			$sql = pg_query("UPDATE PROVEEDOR SET EST_PVR ='0' WHERE ID_PVR = '$nit'");
			$exitoAlert = '<script src="../JS/sweetalert.min.js"></script>
						<script>
        					swal({
							  title: "Exito!",
							  text: "Usuario eliminado exitosamente.",
							  icon: "success",
							  button: "Aceptar",
							});
    					</script>';
			include_once '../VISTAS/Home_Listas.php';
		}
		else{
			$sql = pg_query("UPDATE PROVEEDOR SET EST_PVR ='1' WHERE ID_PVR = '$nit'");
			$exitoAlert = '<script src="../JS/sweetalert.min.js"></script>
						<script>
        					swal({
							  title: "Exito!",
							  text: "Usuario activado exitosamente.",
							  icon: "success",
							  button: "Aceptar",
							});
    					</script>';
			include_once '../VISTAS/Home_Listas.php';
		}
	}

	public function modificar_ingrediente($ref_ing, $nom_ing, $tip_ing, $det_ing, $cant_ing, $name_prov, $cost_ing) {
		pg_query("UPDATE INGREDIENTE SET ID_PVR = $name_prov, ID_TIP = $tip_ing, NOM_ING = LOWER('$nom_ing'), CANT_INV = $cant_ing, DET_ING = '$det_ing', PRE_ING = $cost_ing WHERE ID_ING = $ref_ing");

		$doneAlert = '<script src="../JS/sweetalert.min.js"></script>
					<script>
        				swal({
							title: "Exito!",
							text: "Ingrediente modificado correctamente.",
							icon: "success",
							button: "Aceptar",
						});
    				</script>';
		include_once '../VISTAS/Home_Productos.php';
	}
}

?>