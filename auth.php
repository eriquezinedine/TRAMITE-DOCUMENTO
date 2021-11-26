<?php 


session_start();




if ($_SESSION["auth"]!="1") {

$mensaje="LOGUEO INCORRECTO";
	header('location: index.php?m='.$mensaje);
	exit();

}






 ?>
