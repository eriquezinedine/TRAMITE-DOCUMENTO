<?php 
//trabajando con sesiones
//iniciar la sesion
session_start();
include("conexion.php");

$usu=$_POST["txtusu"];
$pass=$_POST["txtpass"];


$sql="select * from usuario where correousuario='$usu' and passusuario='$pass'";

$fila=mysqli_query($cn, $sql);

$r=mysqli_fetch_array($fila);

$valor=$r["correousuario"];

	if ($valor==null) {
		
		header('location: index.html');

	} else {

				$_SESSION["codusuario"]=$valor;
				$_SESSION["auth"]=1;
	setcookie("usuario", $valor, time()+14400000);

		header('location: FUTVIRTUAL.php');
	}
	
 ?>