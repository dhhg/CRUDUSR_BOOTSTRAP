<?php 
	include('php/Usuarios/conexion.php');
	if(isset($_GET['idUsr']))
	{
		$query="select id,nick, ap_paterno,ap_materno,nombre,email,pwd from usuarios where id=".$_GET['idUsr'];
		$r= mysql_query($query,$db);
		$tabla = array();

		while($fila=mysql_fetch_array($r)){
			/*$tabla =$tabla.'{ 
						"id":"'.$fila['id'].'", 
						"Nick":"'.$fila['nick'].'", 
						"Nombre":"'.$fila['nombre'].'",
						"Ap_Paterno":"'.$fila['ap_paterno'].'",
						"Ap_Materno":"'.$fila['ap_materno'].'",
						"Email":"'.$fila['email'].'",
						"Pwd":"'.$fila['pwd'].'"
					},';*/
					$tabla[]=array(
						'id'=>$fila['id'],
						'nick'=>$fila['nick'],
						'nombre'=>$fila['nombre'],
						'ap_paterno'=>$fila['ap_paterno'],
						'ap_materno'=>$fila['ap_materno'],
						'email'=>$fila['email'],
						'pwd'=>$fila['pwd']);
		}
		$json = json_encode($tabla);
		echo $json;
	}
 ?>