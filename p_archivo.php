<?php
include("conexion.php");

$nombre = $_FILES["archivo"]["name"];
$tipo = $_FILES["archivo"]["type"];
$tamanio = $_FILES["archivo"]["size"];
$ruta = $_FILES["archivo"]["tmp_name"];
list($na, $e) = explode(".", $nombre);

if (isset($_COOKIE["codfut"])) {
    $destino = "archivo/" . $_COOKIE["codfut"] . ".pdf";
    if ($e == "pdf") {
        if ($nombre != "") {
            if (move_uploaded_file($_FILES["archivo"]["tmp_name"], $destino)) {

                $c = $_COOKIE["codfut"];
                $sql = "update fut set ruta ='$destino' where  codfut ='$c'";
                mysqli_query($cn, $sql);
                echo "El archivo " . basename($_FILES["archivo"]["name"]) . " Se subio correctamente";
            } else {
                echo "Error al cargar el archivo";
            }
        }
    } else {

        header('location: index.php');
        echo "<script>alert('Tipo de Archivo Incorrecto, Solo Aceptamos en extención .pdf!!');</script>";
    }
} else {

    header('location: index.php');
    echo "<script>alert('Porfavor Primero Guarde su Informacion!!');</script>";
}
