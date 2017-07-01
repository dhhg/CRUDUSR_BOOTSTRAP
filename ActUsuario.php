<?php 
	include('php/Usuarios/conexion.php');

	if(isset($_GET['id']))
	{
		$query="update usuarios set nick='".$_GET['nick']."', nombre='".$_GET['nombre']."',ap_paterno='".$_GET['ap_paterno']."',ap_materno='".$_GET['ap_materno']."',email='".$_GET['email']."',pwd='".$_GET['pwd']."' where id=".$_GET['id'];

		$r=mysql_query($query);
	}
 ?>