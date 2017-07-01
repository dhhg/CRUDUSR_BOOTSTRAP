<?php 
	include('php/Usuarios/conexion.php');

	$nick = $_POST['nick'];
	$nombre = $_POST['nombre'];
	$ap_paterno = $_POST['appaterno'];
	$ap_materno = $_POST['apmaterno'];
	$email = $_POST['email'];
	$pwd = $_POST['pwd'];

	$sql = "insert into usuarios(nick,nombre,ap_paterno,ap_materno,email,pwd) value('".$nick."','".$nombre."','".$ap_paterno."','".$ap_materno."','".$email."','".$pwd."')";

	mysql_query($sql);

	mysql_close($db);

 ?>