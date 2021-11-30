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

$valor = $_GET["valor"];


$sql = "update expediente
     	       set id_estado=3
     	       where codfut='$valor'";

mysqli_query($cn, $sql);;

echo "<script> swal({
	title: '¡Estado!',
	html: 'Fut en estado Finalizado',
	type: 'success',
  },function(isConfirm){
	alert('ok');
  });
  $('.swal2-confirm').click(function(){
	window.location.href = 'administrar.php';
  });
  
				  </script>";

