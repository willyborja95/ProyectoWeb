<?php
include("../configuracion/config.php");
	$textoModificado = $_GET['textoModificado'];
	$codigoCapitulo = $_GET['codigoCapitulo'];	
	$sentencia = "UPDATE capitulo SET texto='$textoModificado' WHERE codigo=$codigoCapitulo";
	$query = mysql_query($sentencia, $conexion) or die(mysql_error());
	if($query>0){
		echo '<script>alert("Se ha modificado el texto satisfactoriamente!")</script>';
		echo "<script>document.location.href='../internas/principal.php';</script>";
	}else{
		echo '<script>alert("Registro Erróneo!")</script> ';
		echo "<script>document.location.href='../internas/principal.php';</script>";
	}
	
?>