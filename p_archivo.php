<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.css" />
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.js"></script>
</head>

<body>
    <script>

    </script>
</body>

</html>
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
                $sql1 = "select * from fut where codfut ='$c'";
                mysqli_query($cn, $sql);
                $fila = mysqli_query($cn, $sql1);
                $r = mysqli_fetch_array($fila);
                $pa = $r["passfut"];
                echo "<script> swal({
                    title: '¡Credenciales Anotar!',
                    html: 'Codigo :$c<br> Contraseña :$pa',
                    type: 'success',
                  },function(isConfirm){
                    alert('ok');
              });
              $('.swal2-confirm').click(function(){
                    window.location.href = 'index.php';
              });
                  
                                  </script>";
                 
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


?>