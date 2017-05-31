<?php
include("../configuracion/config.php");
	$nombres = $_POST['nombres'];
	$apellidos = $_POST['apellidos'];
	$userName = $_POST['userName'];
	$email = $_POST['email'];
	$password1 = $_POST['password1'];
	$password2 = $_POST['password2'];
	if($password1==$password2){
		$sentencia = "INSERT INTO usuario (nombres, apellidos, email, userName, password) VALUES ('$nombres', '$apellidos', '$email', '$userName', '$password1')";
		$query = mysql_query($sentencia, $conexion) or die(mysql_error());
		if($query>0){
			echo '<script>alert("Registro Exitoso!\nPara utilizar la aplicación, por favor autentíquese.")</script> ';
			echo "<script>document.location.href='../index.php#registro';</script>";
		}else{
			echo '<script>alert("Registro Erróneo!\nPor favor regístrese nuevamente.")</script> ';
			echo "<script>document.location.href='../index.php#registro';</script>";
		}
	}else{
		echo '<script>alert("Contraseñas Incorrectas!\nLas contraseñas ingresadas no coninciden, ingréselas nuevamente.")</script> ';
		echo "<script>document.location.href='../index.php#registro';</script>";
	}
	
?>