<?php
include("../configuracion/config.php");
	$userName = $_POST['userName'];
	$password = $_POST['password'];
	$sentencia ="SELECT * FROM usuario WHERE username='$userName' AND password='$password'";
	$resultado = mysql_query($sentencia, $conexion) or die(mysql_error());
	$totalFilas = mysql_num_rows($resultado);
	if($totalFilas>0){
		while ($filasConsultadas = mysql_fetch_assoc($resultado)) {
			session_start();
			$_SESSION["codigoUsuario"]=$filasConsultadas['codigo'];
			$_SESSION["nombres"]=$filasConsultadas['nombres'];
			$_SESSION["apellidos"]=$filasConsultadas['apellidos'];
		}
		echo "<script>document.location.href='../internas/principal.php';</script>";
	}else{
		echo "<script>alert('El usuario/password ingresado no es correcto. Porfavor verifícalo e ingresalo de nuevo.');</script>";
		echo "<script>document.location.href='../index.php#registro';</script>";
	}
?>