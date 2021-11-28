<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="main.css">
    <title>tramite</title>
</head>
<body>
    <!-- MENU RESPONSIVO -->
    <nav class='nav_principal'>
        <div class='contenedor max'>
            <h3 class='title'><a href="https://unjfsc.edu.pe/" target="_blank" >UNJSC</a></h3>
            <div class='nav_contenedor'>
                <ul class='nav_principal--menu'>
                    <li class='list_item'> <a href="./index.php">FUT VIRTUAL</a></li>
                    <li class='list_item'> <a href="./consultar.php">CONSULTAR FUT </a></li>
                    <li class='list_item'> <a href="#">ADMINISTRATOR</a></li> </a></li>
                </ul>
                
                
                <?php               
                
                    if (isset( $_COOKIE["usuario"])) {
                    ?>

                    <?php 
                    echo "Hola, ".$_COOKIE["usuario"]."&nbsp";
                    ?>

                    <script>
                    window.onload = function(){killerSession();}
                    function killerSession(){
                    setTimeout("window.open('cerrarsesion.php','_top');",14401000);
                    }
                    </script>
                    <a href="cerrarsesion.php"> <button  class='btn_login'>Cerrar Sesion</button></a>
                   
                    <?php 

                }else  {
                    ?>

                    <a href="Login.php"> <button class='btn_login'>Iniciar sesion</button></a>

                   <?php    
                }

                ?>
                
            </div>
            <div class="nav-movil__menu">
                <div id="rotate" class="content-line">
                    <div class="content-line__background">
                        <div class="content-item"></div>
                        <div class="content-item"></div>
                        <div class="content-item"></div>
                    </div>
                </div>
            </div>
        </div>
        
    </nav>