<?php 
	function Conexion()
	{
		$db=mysql_connect("localhost","root","191082") or die("No se logro establecer conexión con el servidro");
		mysql_select_db("obra",$db) or die("No se logro establecer conexión con la base de datos");
		return $db;
	}

	$db=Conexion();
 ?>