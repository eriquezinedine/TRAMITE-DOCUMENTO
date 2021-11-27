<?php 
//trabajando con sesiones
//iniciar la sesion
session_start();
include("conexion.php");

$n=$_POST["txtn"];
$fecha=$_POST["txta"];
$pass=$_POST["txtp"];


$sql="select * from fut f inner join expediente e on f.codfut=e.codfut inner join estado es on e.id_estado=es.id_estado where f.codfut='$n' and concat(f.fecha) like '%$fecha%' and f.passfut='$pass'";

$fila=mysqli_query($cn, $sql);

$r=mysqli_fetch_array($fila);

echo "N°Documento:" .$r["fecha"];


	
 ?>