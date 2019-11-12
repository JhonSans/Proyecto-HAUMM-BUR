<?php
class conexion
{	
	public function conexion()
	{
		$cadena="host='localhost' port=5432 dbname='HAUMM-BUR' user='postgres' password='12345'";
		$con= pg_connect($cadena);
		
		if ($con == true)
		{
			//echo "Conexion Realizada Exitosamente";	
		} 
		else{
			//echo "Error en la Conexion";
		}
	}
}
?>