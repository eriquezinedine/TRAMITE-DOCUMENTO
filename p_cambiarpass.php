<?php 

include("auth.php");
include("conexion.php");
$c=$_SESSION["usuario"];
$pass=$_POST["txtpass"];
$repass=$_POST["txtrepass"];

//strlen: cantidad de caracteres de una cadena
//strcmp: comparar dos cadenas, y si las cadenas son iguales te va a devolver 0
// te va a devolver 1 o -1


if (strlen($pass)==8 && strlen($repass)==8) {
	//realice la accion, o que prosiga evaluando

    if(strcmp($pass,$repass)==0){
         
         //actualizar la contraseña

     	 $sql="update usuario
     	       set passusuario='$pass'
     	       where codusuario='$c'";

     	       mysqli_query($cn, $sql);;

     	       header('location: cerrarsesion.php');
     }else{
       header('location: cambiarpass.php');
     }

} else {
   header('location: cambiarpass.php');
}