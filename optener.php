<?php


// echo $_POST
$amaterno = $_POST['amaterno'];
$apaterno = $_POST['apaterno'];
$celular = $_POST['celular'];
$correo = $_POST['correo'];
$dependencia = $_POST['dependencia'];
$fecha = $_POST['fecha'];
$fundamento = $_POST['fundamento'];
$nombres = $_POST['nombres'];
$nrodocumento = $_POST['nrodocumento'];
$tipopersona = $_POST['tipopersona'];
$titulo_solicitud = $_POST['titulo_solicitud'];
$codfut = $_POST['codfut'];
// $ruta = $_FILES['ruta']['tmp_name'];
function generarpass(){
    $plantilla="fdgfhgjhkhgfdfghjkjhghfgdfs876543jhgghjh45678";
    $pass="";
    for($i=0;$i<8;$i++){
        $pass= $pass.substr($plantilla,rand(1,36),1);
    
    }
    return $pass;
}
$password = generarpass();
include("conexion.php");




$sql ="INSERT INTO fut VALUES ('$codfut','$password',$tipopersona,$dependencia,'$apaterno','$amaterno','$nombres','$nrodocumento','$celular','$correo','$fundamento','$titulo_solicitud','NO HAY RUTA','$fecha')";
$sql1 = "insert into expediente values('$codfut',1,1)";

mysqli_query($cn, $sql);
mysqli_query($cn, $sql1);
// echo $sql;
echo "N°Documento: $codfut,  Passwor: $password  ";


?>