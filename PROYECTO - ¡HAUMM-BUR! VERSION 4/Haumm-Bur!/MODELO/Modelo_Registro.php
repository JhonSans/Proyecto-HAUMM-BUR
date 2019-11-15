<?php
class con
{	
	/*--------REGISTRO--------*/
	public static function registrar($docu,$nomb,$apel,$tel,$cor,$dir,$usua,$cont,$confcont)
	{	
		$enc = md5($cont);
		
		if($cont == $confcont)
		{
			pg_query("INSERT INTO USUARIOS VALUES (3, '$docu','$nomb','$apel','$tel','$cor','$dir','$usua','$enc')");
			echo "<h1>Registro Satisfactorio</h1>";
			echo '<a href="../Index.html">Regresar</a>';
		}
		
		else{
			echo "Datos Incorrectos";
			echo '<a onclick="window.history.back();">Regresar</a>';
		}	
	}
	
	/*--------LOGIN--------*/
	
	public function login($usua,$cont)
	{
		$ence = md5($cont);

		$result= pg_query("SELECT * FROM USUARIOS WHERE USU='$usua' AND CNT_USU='$ence';");	
		
		$fila=pg_fetch_row($result);
		$row_rol=$fila[0];
		$row_usu=$fila[7];
		$row_cont=$fila[8];
			
		if($usua==$row_usu and $ence==$row_cont)
		{ 
			if($row_rol == 1)
			{
				header("location:../VISTAS/Index_Admin.php");
			}
			if($row_rol == 3) {
				header("location:../VISTAS/Index_Usuario.php");
			}
		}
		
		else{
			echo "Datos Incorrectos";
		}
	}
}	
?>