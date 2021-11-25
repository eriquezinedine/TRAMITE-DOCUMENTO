<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="main.css">
    <title>tramite</title>
</head>
<body>
    <!-- MENU RESPONSIVO -->
    <nav class='nav_principal'>
        <div class='contenedor max'>
            <h3 class='title'><a href="./index.html">UNJSC</a></h3>
            <div class='nav_contenedor'>
                <ul class='nav_principal--menu'>
                    <li class='list_item'> <a href="#">FUT VIRTUAL</a> </li>
                    <li class='list_item'> <a href="#">CONSULTAR FUT </a></li>
                </ul>
                <button class='btn_login'>Iniciar sesion</button>
            </div>
        </div>
    </nav>
    <!-- ------------------------------------- -->
    <form action="" method='post' id='fromFut'>
        <h3 class='title_fut'>FUT <span class='title--efect'>VIRTUAL</span></h3>
        <div class='contenedor_datos'>
            <div class='fut_contenedor col-50'>
                <h2>Datos Personales</h2>
                <div class="fut_contenedor_imput">
                    <label class='fut_elemento' for="nombres">NOMBRES COMPLETOS</label>
                    <input class='fut_elemento fut_elemento_input' type="text" id="nombres"  name='nombres'>
                </div>
                <div class="fut_contenedor_imput">
                    <label class='fut_elemento' for="apaterno">APELLIDO PATERNO</label>
                    <input class='fut_elemento fut_elemento_input' type="text" id="apaterno"  name='apaterno'>
                </div>
                <div class="fut_contenedor_imput">
                    <label class='fut_elemento' for="amaterno">APELLIDO MATERNO</label>
                    <input class='fut_elemento fut_elemento_input' type="text" id="amaterno"  name='amaterno'>
                </div>
                <div class="fut_contenedor_imput">
                    <label class='fut_elemento' for="nrodocumento">DNI/CARNET </label>
                    <input class='fut_elemento fut_elemento_input' type="text" id="nrodocumento"  name='nrodocumento'>
                </div>
                <div class="fut_contenedor_imput">
                    <label class='fut_elemento' for="celular">CELULAR </label>
                    <input class='fut_elemento fut_elemento_input' type="tel" id="celular"  name='celular'>
                </div>
                <div class="fut_contenedor_imput">
                    <label class='fut_elemento' for="correo">CORREO </label>
                    <input class='fut_elemento fut_elemento_input' type="email" id="correo"  name='correo'>
                </div>
                <div class="fut_contenedor_imput">
                    <label class='fut_elemento' for="tipopersona">TIPO PERSONA </label>
                    <select class='fut_elemento fut_elemento_input' name="tipopersona" id="tipopersona" style='width:348px' >
                        <option selected>seleciona</option>
                        <?php
                        include("conexion.php");
                        $sqlp='select * from tipopersona';
                        $fila =mysqli_query($cn,$sqlp);
                        while ($r =mysqli_fetch_array($fila)) {
                        ?>
                            <option value="<?php echo $r['id_tipopersona'];?>"><?php echo $r["tipopersona"];?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                
            </div>
            <div class='fut_contenedor col-50'>
                <h2>Datos del Archivo</h2>
                <div class="fut_contenedor_imput">
                    <label class='fut_elemento' for="titulo_solicitud">TITULO DE LA SOLICITUD</label>
                    <input class='fut_elemento fut_elemento_input' type="text" id="titulo_solicitud"  name='titulo_solicitud'>
                </div>
                <div class="fut_contenedor_imput">
                    <label class='fut_elemento' for="dependencia">DEPENDENCIA </label>
                    <select class='fut_elemento fut_elemento_input' name="dependencia" id="dependencia" style='width:348px' >
                        <option selected>seleciona</option>
                        <?php
                        include("conexion.php");
                        $sqlp='select * from dependencia';
                        $fila =mysqli_query($cn,$sqlp);
                        while ($r =mysqli_fetch_array($fila)) {
                        ?>
                            <option value="<?php echo $r['id_dependencia'];?>"><?php echo $r["nombredependencia"];?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="fut_contenedor_imput">
                    <label class='fut_elemento' for="ruta">ESCOJA SU ARCHIVO</label>
                    <input class='fut_elemento fut_elemento_input' type="file" id="ruta"  name='ruta'>
                </div>
                <div class="fut_contenedor_imput">
                    <label class='fut_elemento' for="fundamento">FUNDAMENTO</label>
                    <textarea class='fut_elemento fut_elemento_input' rows='' col='100' id="fundamento"  name='fundamento'></textarea>
                </div>
            </div>
        </div>
        <button id='btn_fut' type="submit" class='btn_loginI m_auto'>
                    <div class='btn_login--efect'>
                        Enviar Informacion
                    </div>
        </button>
    </form>
    <script src='./app.js'></script>
    <script src='./libreria.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>