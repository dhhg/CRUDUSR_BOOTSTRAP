<?php 
	include('conexion.php');

	$query="select id,nick,concat(ap_paterno,' ',ap_materno,' ',nombre) as nombre, 'Activo' as Estado from usuarios";
	$r= mysql_query($query,$db);

	while($fila=mysql_fetch_array($r)){
		$editar ='<a href="#" class=" btn-sm btn-primary btn-xs pull-right menu">
					<i class="glyphicon glyphicon-pencil" aria-hidden="true"></i>
				 <a>';
		$visualizar = '<a href="#" class=" btn-sm btn-info btn-xs pull-right menu">
							<i class="glyphicon glyphicon-search" aria-hidden="true"></i>
						</a>';
		$suspender = '<a href="#" class="btn btn-danger btn-xs pull-right menu">
						<i class="glyphicon glyphicon-remove" aria-hidden="true"></i>
					 </a>';

		$tabla = '{ 
					"id":"'.$fila['id'].'", 
					"Nick":"'.$fila['nick'].'", 
					"Nombre":"'.$fila['nombre'].'", 
					"Estado":"'.$fila['Estado'].'", 
					"Acciones":"'.$editar,$visualizar,$suspender.'"
				  },';
	}
	$table =substr($tabla,0,strlen($tabla)-1);
	echo '{"data":['.$tabla.']}';
 ?>
