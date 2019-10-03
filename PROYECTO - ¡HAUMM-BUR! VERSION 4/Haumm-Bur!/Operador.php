<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Operador</title>
</head>

<body>
<?php
class con
{	
	/*--------REGISTRO--------*/
	public function registrar($a,$b,$c,$d,$e,$f,$g,$h)
	{	
		$enc = md5($g);

		$cadena="host='localhost' port=5433 dbname='Haumm-Bur' user='postgres' password='12345'";
		$con= pg_connect($cadena);
		
		if($g == $h)
		{
			pg_query($con,"INSERT INTO CLIENTE (NOM_CLI,APE_CLI,CELULAR,CORREO,DIREC_CLI,USU_CLI,CONT_CLI) VALUES ('$a','$b',$c,'$d','$e','$f','$enc')");
			echo "<h1>Registro Satisfactorio</h1>";
		}
		
		else{
			echo "Datos Incorrectos";
		}	
	}
	
	/*--------LOGIN--------*/
	public function login($a,$b)
	{
		$ence = md5($b);
		
		$cadena="host='localhost' port=5433 dbname='Haumm-Bur' user='postgres' password='12345'";
		$con= pg_connect($cadena);

		$result= pg_query($con,"SELECT * FROM CLIENTE WHERE USU_CLI='$a' AND CONT_CLI='$ence';");	
		
		$fila=pg_fetch_row($result);
		$r=$fila[6];
		$e=$fila[7];
			
		if($a==$r and $ence==$e)
		{ 
			echo "<h1>Ingreso Exitoso</h1>";
			echo "<hr>";
			echo "<h5><strong>USUARIO: </strong></h5>".$r;
			echo "<h5><strong>CONTRASEÑA: </strong></h5>".$b;
			echo "<hr>";
		}
		
		else{
			echo "<h1>Datos Incorrectos</h1>";
		}
	}
}	
?>
</body>
</html>