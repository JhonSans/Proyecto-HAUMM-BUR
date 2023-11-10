<script type="text/javascript" src="../JS/modify.js"></script>
<?php
class Consulta
{
	public $linea1;
	public $linea2;
	public $linea3;
	public $linea4;
	public $linea5;
	public $linea6;
	public $linea7;
	public $linea8;

	public function consulta_usuario($num_id){

		$sql = pg_query("SELECT CC_USU FROM USUARIOS WHERE CC_USU = '$num_id'");
		$query = pg_query("SELECT ID_PVR FROM PROVEEDOR WHERE ID_PVR = '$num_id'");

		$row = pg_fetch_row($sql);
			$row_id = $row[0];

		$linea = pg_fetch_row($query);
			$linea_id = $linea[0];

		if ($row_id) {
			$sql2 = pg_query("SELECT * FROM USUARIOS WHERE CC_USU = '$num_id'");

			echo "<table>
					<thead>
					<tr>
						<th>Documento</th>
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Telefono</th>
						<th>Correo</th>
						<th>Dirección</th>
						<th>Usuario</th>
						<th>Estado</th>
						<th colspan='2'>Acciones</th>
					</tr></thead><tbody>";

				while($row = pg_fetch_row($sql2)){
					
					echo "<tr><form method='post' action='../CONTROLADOR/Controlador_Modificar.php'>";
					
					echo $this -> linea1 = "<td><input type='text' id='Doc' value='".$row[0]."' class='input-list' disabled>
											<input type='hidden' id='' name='doc' value='".$row[0]."' class='input-list'></td>";			
					echo $this -> linea2 = "<td><input type='text' id='Nom' value='".$row[2]."' class='input-list input-script input-datos' disabled>
											<input type='text' id='' name='nom_prov' value='".$row[2]."' class='input-list input-datos' hidden></td>";			
					echo $this -> linea3 = "<td><input type='text' id='Ape' value='".$row[3]."' class='input-list input-script input-datos' disabled>
											<input type='text' id='' name='apel' value='".$row[3]."' class='input-list input-datos' hidden></td>";
					echo $this -> linea4 = "<td><input type='text' id='Tel' value='".$row[4]."' class='input-list input-script input-datos' disabled>
											<input type='text' id='' name='tel' value='".$row[4]."' class='input-list input-datos' hidden></td>";
					echo $this -> linea5 = "<td><input type='text' id='Cor' value='".$row[5]."' class='input-list input-script input-datos' disabled>
											<input type='text' id='' name='correo' value='".$row[5]."' class='input-list input-datos' hidden></td>";
					echo $this -> linea6 = "<td><input type='text' id='Dir' value='".$row[6]."' class='input-list input-script input-datos' disabled>
											<input type='text' id='' name='direc' value='".$row[6]."' class='input-list input-datos' hidden></td>";
					echo $this -> linea7 = "<td><input type='text' id='Usu' value='".$row[7]."' class='input-list input-script input-datos' disabled>
											<input type='text' id='' name='usuario' value='".$row[7]."' class='input-list input-datos' hidden></td>";
					echo $this -> linea8 = "<td><input type='text' id='Est' value='".$row[9]."' class='input-list' style='width:50px;' disabled></td>
											<td>";

					echo "<button class='boton-icon' onclick='MostrarBot()' name='mod-bot' value='Save'>
							<img src='../IMA/Icon-Save.png' alt='Guardar' id='mostrar-bot' class='icon-edit boton_script' name='cambio-save' hidden>
						  </button>
						</form>
							<button class='boton-icon' onclick='BotProv()'>
								<img src='../IMA/Icon-Edit.png' alt='Editar' id='icon-bot' class='icon-edit boton_script' name='cambio-save'>
							</button>
						</td>
						<td>			
							<button class='boton-icon' onclick='MostrarBot()'>
								<img src='../IMA/Icon-Cancel.png' alt='Editar' id='cancel-bot' class='icon-edit boton_script' name='cambio-save' hidden>
							</button>
							
						<form method='post' action='../CONTROLADOR/Controlador_Modificar.php'>
							<input type='hidden' id='' name='doc' value='".$row[0]."' class='input-list'>
							<input type='hidden' id='' name='estado' value='".$row[9]."' class='input-list input-script'>
			
							<button class='boton-icon' name='mod-bot' value='Delete'>
								<img src='../IMA/Icon-Delete.png' id='delete-bot' alt='Delete' class='icon-delete boton_script' onClick='Advertencia()'>
							</button>
						</form>
						
						</td>
						</tr>";
				}

			echo "</tbody></table>";

		} elseif ($linea_id) {
			$sql2 = pg_query("SELECT * FROM PROVEEDOR WHERE ID_PVR = '$num_id'");
		
			echo "<table>
						<thead>
						<tr>
							<th>NIT</th>
							<th>Nombre</th>
							<th>Correo</th>
							<th>Telefono</th>
							<th>Estado</th>
							<th colspan='2'>Acciones</th>
						</tr></thead><tbody>";
			
			while($row = pg_fetch_row($sql2)){
				
				echo "<tr><form method='post' action='../CONTROLADOR/Controlador_Modificar.php'>";
				
				echo $this -> linea1 = "<td><input type='text' id='Nit' value='".$row[0]."' class='input-list' disabled>
										<input type='hidden' id='' name='nit' value='".$row[0]."' class='input-list'></td>";			
				echo $this -> linea2 = "<td><input type='text' id='Nom' value='".$row[1]."' class='input-list input-script input-datos' disabled>
										<input type='text' id='' name='nom_prov' value='".$row[1]."' class='input-list input-datos' hidden></td>";			
				echo $this -> linea3 = "<td><input type='text' id='Correo' value='".$row[2]."' class='input-list input-script input-datos' disabled>
										<input type='text' id='' name='correo' value='".$row[2]."' class='input-list input-datos' hidden></td>";
				echo $this -> linea4 = "<td><input type='text' id='Telefono' value='".$row[3]."' class='input-list input-script input-datos' disabled>
										<input type='text' id='' name='tel' value='".$row[3]."' class='input-list input-datos' hidden></td>";

				echo $this -> linea5 = "<td><input type='text' id='Telefono' value='".$row[4]."' class='input-list' disabled>
										<input type='text' id='' name='est_pvr' value='".$row[4]."' class='input-list' hidden></td><td>";
				
				echo "<button class='boton-icon' onclick='MostrarBot()' name='mod-bot' value='Save-Proveedor'>
						<img src='../IMA/Icon-Save.png' alt='Guardar' id='mostrar-bot' class='icon-edit boton_script' name='cambio-save' hidden>
					  </button>
					</form>
						<button class='boton-icon' onclick='BotProv()'>
							<img src='../IMA/Icon-Edit.png' alt='Editar' id='icon-bot' class='icon-edit boton_script' name='cambio-save'>
						</button>
					</td>
					<td>			
						<button class='boton-icon' onclick='MostrarBot()'>
							<img src='../IMA/Icon-Cancel.png' alt='Editar' id='cancel-bot' class='icon-edit boton_script' name='cambio-save' hidden>
						</button>
						<form method='post' action='../CONTROLADOR/Controlador_Modificar.php'>
						<input type='hidden' id='' name='nit' value='".$row[0]."' class='input-list'>
						<input type='hidden' id='' name='estado' value='".$row[4]."' class='input-list input-script'>
						
						<button class='boton-icon' name='mod-bot' value='Delete-Proveedor'>
							<img src='../IMA/Icon-Delete.png' id='delete-bot' alt='Delete' class='icon-delete boton_script'>
						</button>
					</form>
					</td>
					</tr>";
			}	
			
			echo "</tbody></table>";
			
		} else {
			$errorAlert = '<script src="../JS/sweetalert.min.js"></script>
							<script>
	        					swal({
								  title: "Error!",
								  text: "Usuario/Proveedor no se encuentra registrado.",
								  icon: "error",
								  button: "Aceptar",
								});
	    					</script>';
	    					
	    	echo $errorAlert;
		}
	}
}
?>