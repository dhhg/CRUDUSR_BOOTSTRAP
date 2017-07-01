<?php 
	include('php/Usuarios/conexion.php');

	$query="select id,nick,concat(ap_paterno,' ',ap_materno,' ',nombre) as nombre, 'Activo' as Estado, email from usuarios";
	$r= mysql_query($query,$db);
	$tabla='';
	while($fila=mysql_fetch_array($r)){
		$editar ='<a href=\"#\" class=\" btn btn-primary btn-xs pull-right menu\" data-toggle=\"modal\" data-target=\"#ActUsuario\" id=\"'.$fila['id'].'\" ><i class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></i><a>';
		$visualizar = '<a id=\"'.$fila['id'].'\" tabindex=\"0\" href=\"#\" class=\" btn btn-info btn-xs pull-right menu\"  data-toggle=\"popover\" data-placement=\"left\" data-trigger=\"focus\" title=\"<strong> Nick '.$fila['nick'].'</strong>\" data-content=\" <strong>Nombre:</strong><br/> '.$fila['nombre'].'<br/><hr/> <strong>Email:</strong><br/> '.$fila['email'].'\"><i class=\"glyphicon glyphicon-search\" aria-hidden=\"true\"></i></a>';
		$suspender = '<a href=\"#\" class=\"btn btn-danger btn-xs pull-right menu\"><i class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></i></a>';

		$tabla =$tabla.'{ 
					"id":"'.$fila['id'].'", 
					"Nick":"'.$fila['nick'].'", 
					"Nombre":"'.$fila['nombre'].'", 
					"Estado":"'.$fila['Estado'].'",
					"Acciones":"'.$suspender.$visualizar.$editar.'"
				  },';
	}
	$tabla = substr($tabla,0, strlen($tabla) - 1);
	echo '{"data":['.$tabla.']}';
 ?>
