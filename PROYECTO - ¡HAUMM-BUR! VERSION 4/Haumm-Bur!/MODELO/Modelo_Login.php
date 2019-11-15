<?php
include_once '../BD/Conexion.php';

class User extends conexion{
	private $nombre;
    private $user;

	public function userExists($user, $pass){
		
		$enc = md5($pass);
		
		$sql = pg_query("SELECT * FROM USUARIOS WHERE USU = '$user' AND CNT_USU = '$enc'");
		$fila=pg_fetch_row($sql);
		$row_usu=$fila[7];
		$row_cont=$fila[8];
		
		//echo "<br>".$row_usu." ".$row_cont;
		
		if ($user == $row_usu && $enc == $row_cont){
			return true;
		}else {
			return false;
		}
	}
	
	public function setUser($usu){

		$sql = pg_query("SELECT * FROM USUARIOS WHERE USU = '$usu'");
		
		$fila=pg_fetch_row($sql);
			
		$row_nom=$fila[2];
		
		$this->nombre = $row_nom;
	}
	
	public function getNombre(){
		return $this->nombre;
	}
}
?>