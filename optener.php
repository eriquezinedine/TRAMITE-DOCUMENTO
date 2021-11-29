
<?php


// echo $_POST
$amaterno = $_POST['amaterno'];
$apaterno = $_POST['apaterno'];
$celular = $_POST['celular'];
$correo = $_POST['correo'];
$dependencia = $_POST['dependencia'];
$fecha = date("Y-m-d");
$fundamento = $_POST['fundamento'];
$nombres = $_POST['nombres'];
$nrodocumento = $_POST['nrodocumento'];
$tipopersona = $_POST['tipopersona'];
$titulo_solicitud = $_POST['titulo_solicitud'];




function generarpass()
{
    $plantilla = "fdgfhgjhkhgfdfghjkjhghfgdfs876543jhgghjh45678";
    $pass = "";
    for ($i = 0; $i < 8; $i++) {
        $pass = $pass . substr($plantilla, rand(1, 36), 1);
    }
    return $pass;
}
function generarcodfut()
{
    $plantilla = "fdgfhgjhkhgfdfghjkjhghfgdfs876543jhgghjh45678";
    $pass = date("Y");
    $n = "";
    for ($i = 0; $i < 3; $i++) {
        $n = $n ."".substr($plantilla, rand(1, 36), 1);
    }
    $pass = $pass ."-". $n ;
    return $pass;
}
$password = generarpass();
$codfut = generarcodfut();

include("conexion.php");




$sql = "INSERT INTO fut VALUES ('$codfut','$password',$tipopersona,$dependencia,'$apaterno','$amaterno','$nombres','$nrodocumento','$celular','$correo','$fundamento','$titulo_solicitud','NO HAY RUTA','$fecha')";
$sql1 = "insert into expediente values('$codfut',1,1)";
setcookie("codfut", $codfut);

mysqli_query($cn, $sql);
mysqli_query($cn, $sql1);
// echo $sql;
// echo "N°Documento: $codfut,  Passwor: $password  ";

header('location: index.php');



?>

