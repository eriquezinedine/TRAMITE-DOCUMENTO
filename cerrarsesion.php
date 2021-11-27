<?php 
session_start();
session_destroy();
setcookie("usuario", "ARRIBA ALIANZA",1);

header('location: index.php');


 ?>