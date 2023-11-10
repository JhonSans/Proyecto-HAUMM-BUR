<script type="text/javascript" src="../JS/modify.js"></script>
<?php
class Modelo_Lista{
	
	public $linea1;
	public $linea2;
	public $linea3;
	public $linea4;
	public $linea5;
	public $linea6;
	public $linea7;
	public $linea8;
	
	public function Listar_Emp(){
	
		$sql = pg_query("SELECT * FROM USUARIOS WHERE ID_ROL = 2 ORDER BY CC_USU ASC");
		
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
		
		while($row = pg_fetch_row($sql)){
			
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
	}

	public function Listar_Usu(){
		
		$sql = pg_query("SELECT * FROM USUARIOS WHERE ID_ROL = 3 ORDER BY CC_USU ASC");
		
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
		
		while($row = pg_fetch_row($sql)){
			
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
									<input type='hidden' id='' name='estado' value='".$row[9]."' class='input-list input-script'><td>";

			echo "<button class='boton-icon' onclick='MostrarBot()' name='mod-bot' value='Save-Usuario'>
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
					
					<button class='boton-icon' name='mod-bot' value='Delete-Usuario'>
						<img src='../IMA/Icon-Delete.png' id='delete-bot' alt='Delete' class='icon-delete boton_script'>
					</button>
				</form>
				
				</td>
				</tr>";
		}
		
		echo "</tbody></table>";
	}
	
	public function Listar_Ing(){

		$sql_pagina = pg_query("SELECT COUNT(*) AS total_datos FROM INGREDIENTE");
		$result = pg_fetch_array($sql_pagina);
		$total_datos = $result['total_datos'];

		$paginador_limit = 7;

		if (empty($_GET['pagina'])) {
			$pagina = 1;
		} else {
			$pagina = $_GET['pagina'];
		}

		$desde = ($pagina - 1) * $paginador_limit;
		$total_paginas = ceil($total_datos / $paginador_limit);
		
		$sql = pg_query("SELECT ID_ING, INGREDIENTE.ID_PVR, INITCAP(NOM_PVR), INITCAP(TIP_ING), DET_ING, INGREDIENTE.ID_TIP, INITCAP(NOM_ING), CANT_INV, PRE_ING FROM INGREDIENTE INNER JOIN TIPO_INGREDIENTE ON INGREDIENTE.ID_TIP = TIPO_INGREDIENTE.ID_TIP INNER JOIN PROVEEDOR ON INGREDIENTE.ID_PVR = PROVEEDOR.ID_PVR ORDER BY ID_ING ASC LIMIT $paginador_limit OFFSET $desde;");
		
		echo "<table>
					<thead>
					<tr>
						<th>Referencia</th>
						<th>Nombre</th>
						<th>Tipo</th>
						<th>Detalles</th>
						<th>Cantidad Stock</th>
						<th>Costo Unitario</th>
						<th>Proveedor</th>
						<th colspan='2'>Acciones</th>
					</tr></thead><tbody>";

		while($row = pg_fetch_row($sql)){
			
			echo "<tr><form method='post' action='../CONTROLADOR/Controlador_Modificar.php'>";
			
			echo $this -> linea1 = "<td><input type='text' id='Doc' value='".$row[0]."' class='input-list' disabled>
									<input type='hidden' id='' name='ref_ing' value='".$row[0]."' class='input-list'></td>";			
			echo $this -> linea2 = "<td><input type='text' id='Nom' value='".$row[6]."' class='input-list input-script input-datos' disabled>
									<input type='text' id='' name='nom_ing' value='".$row[6]."' class='input-list input-datos' hidden></td>";			
			echo $this -> linea3 = "<td><input type='text' id='Ape' value='".$row[3]."' class='input-list input-datos' disabled><select name='tip_ing' class='input-datos' hidden>
											<option value='".$row[5]."'>Seleccionar...</option>";
											include_once '../MODELO/Modelo_Proveedor.php';
											$c = new ConsultaProveedor();
											echo $c -> tipo_ingrediente();
			echo $this -> linea4 = "</select></td><td><input type='text' id='Ape' value='".$row[4]."' class='input-list input-script input-datos' disabled>
									<input type='text' id='' name='det_ing' value='".$row[4]."' class='input-list input-datos' hidden></td>";
			echo $this -> linea5 = "</select><td><input type='text' id='Ape' value='".$row[7]."' class='input-list input-script input-datos' disabled>
									<input type='text' id='' name='cant_ing' value='".$row[7]."' class='input-list input-datos' hidden></td>";
			echo $this -> linea6 = "</select><td><input type='text' id='Ape' value='".$row[8]."' class='input-list input-script input-datos' disabled>
									<input type='text' id='' name='cost_ing' value='".$row[8]."' class='input-list input-datos' hidden></td><td>";
			echo $this -> linea7 = "<input type='text' id='Ape' value='".$row[2]."' class='input-list input-datos' disabled>
									<select name='name_prov' class='input-datos' hidden>
											<option value='".$row[1]."'>Seleccionar...</option>";
											include_once '../MODELO/Modelo_Proveedor.php';
											$c = new ConsultaProveedor();
											echo $c -> consulta();
			echo "</select><td><button class='boton-icon' onclick='MostrarBot()' name='mod-bot' value='Save-Ingrediente'>
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
					<button class='boton-icon' name='mod-bot' value='Delete-Producto'>
						<img src='../IMA/Icon-Delete.png' id='delete-bot' alt='Delete' class='icon-delete boton_script'>
					</button>
				</form></td></tr>";
		}	
		
		echo "</tbody></table>";

		echo '<div class="paginador">
						<ul>
						<li><a href="#">|<</a></li>
						<li><a href="#"><<</a></li>';

							$bton = $_POST["list-boton"];
							for ($i=1; $i <= $total_paginas; $i++) { 
								if ($i == $pagina) {
									echo "<li class='pageSelected'>".$i."</li>";
								} else {
									echo "<li><a href='../CONTROLADOR/Controlador_Lista.php?pagina=".$i."'>".$i."</a></li>";
								}
							}
		echo'<li><a href="#">>></a></li>
			<li><a href="#">>|</a></li>
			</ul>
		</div>';

	}

	public function Listar_Prod(){
		
		$sql = pg_query("SELECT * FROM PRODUCTO ORDER BY ID_PRO ASC");
		
		echo "<table>
					<thead>
					<tr>
						<th>Referencia</th>
						<th>Ingrediente</th>
						<th>Nombre</th>
						<th>Precio</th>
						<th colspan='2'>Acciones</th>
					</tr></thead><tbody>";
		
		while($row = pg_fetch_row($sql)){
			
			echo "<tr><form method='post' action='../CONTROLADOR/Controlador_Modificar.php'>";
			
			echo $this -> linea1 = "<td><input type='text' id='Doc' value='".$row[0]."' class='input-list' disabled>
									<input type='hidden' id='' name='doc' value='".$row[0]."' class='input-list'></td>";			
			echo $this -> linea2 = "<td><input type='text' id='Nom' value='".$row[1]."' class='input-list input-script input-datos' disabled>
									<input type='text' id='' name='nom_prov' value='".$row[1]."' class='input-list input-datos' hidden></td>";			
			echo $this -> linea3 = "<td><input type='text' id='Ape' value='".$row[2]."' class='input-list input-script input-datos' disabled>
									<input type='text' id='' name='apel' value='".$row[2]."' class='input-list input-datos' hidden></td>";
			echo $this -> linea4 = "<td><input type='text' id='Ape' value='".$row[3]."' class='input-list input-script input-datos' disabled>
									<input type='text' id='' name='apel' value='".$row[3]."' class='input-list input-datos' hidden></td><td>";
			
			echo "<button class='boton-icon' onclick='MostrarBot()' name='mod-bot' value=''>
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
					<button class='boton-icon' name='mod-bot' value='Delete-Producto'>
						<img src='../IMA/Icon-Delete.png' id='delete-bot' alt='Delete' class='icon-delete boton_script'>
					</button>
				</form>
				
				</td>
				</tr>";
		}	
		
		echo "</tbody></table>";
	}

	public function Listar_Prov(){
		
		$sql = pg_query("SELECT * FROM PROVEEDOR ORDER BY ID_PVR ASC");
		
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
		
		while($row = pg_fetch_row($sql)){
			
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
	}
}
?>