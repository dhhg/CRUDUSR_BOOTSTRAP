<?php 
	include('php/Usuarios/conexion.php');
	if(isset($_GET['idUsr']))
	{
		$query="select concat(ap_paterno,' ',ap_materno,' ',nombre) as nombre,nick,email from usuarios where id=".$_GET['idUsr'];
		$r= mysql_query($query,$db);
		$tabla = array();

		while($fila=mysql_fetch_array($r)){
			
					$tabla[]=array(
						'nombre'=>$fila['nombre'],
						'nick'=>$fila['nick'],
						'email'=>$fila['email']
					);
		}
		$json = json_encode($tabla);
		echo $json;
	}
 ?>