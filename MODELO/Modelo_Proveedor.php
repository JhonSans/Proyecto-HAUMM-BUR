<?php
class ConsultaProveedor {
	public function consulta(){
		$sql = pg_query("SELECT ID_PVR, INITCAP(NOM_PVR) FROM PROVEEDOR ORDER BY NOM_PVR ASC");

		while ($row = pg_fetch_row($sql)) {
			echo "<option value='".$row[0]."'>".$row[1]."</option>";
		}
	}

	public function tipo_ingrediente() {
		$sql = pg_query("SELECT ID_TIP, INITCAP(TIP_ING) FROM TIPO_INGREDIENTE ORDER BY TIP_ING ASC");

		while ($row = pg_fetch_row($sql)) {
			echo "<option value='".$row[0]."'>".$row[1]."</option>";
		}
	}
}
?>