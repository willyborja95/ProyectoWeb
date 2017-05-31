<?php
	include("../configuracion/config.php");
	$sentencia ="SELECT * FROM notebook";
	$resultado = mysql_query($sentencia, $conexion) or die(mysql_error());
	totalFilas = mysql_num_rows($resultado);
?>