<?php 
//trabajando con sesiones
//iniciar la sesion
session_start();
include("conexion.php");

$n=$_POST["txtn"];
$fecha=$_POST["txta"];
$pass=$_POST["txtp"];

$sql="select * from fut f inner join expediente e on f.codfut=e.codfut inner join estado es on e.id_estado=es.id_estado inner join dependencia d on f.id_dependencia=d.id_dependencia where f.codfut='$n' and concat(f.fecha) like '%$fecha%' and f.passfut='$pass'";

$fila=mysqli_query($cn, $sql);

$r=mysqli_fetch_array($fila);

$codfut=$r["codfut"];
$passfut=$r["passfut"];
$id_tipopersona=$r["id_tipopersona"];
$id_dependencia=$r["id_dependencia"];
$apaterno=$r["apaterno"];
$amaterno=$r["amaterno"];
$nombres=$r["nombres"];
$nrodocumento=$r["nrodocumento"];
$celular=$r["celular"];
$correo=$r["correo"];
$fundamento=$r["fundamento"];
$titulo_solicitud=$r["titulo_solicitud"];
$ruta=$r["ruta"];
$fecha=$r["fecha"];
$id_estado=$r["id_estado"];
$codusuario=$r["codusuario"];
$nombreestado=$r["nombreestado"];
$nombredependencia=$r["nombredependencia"];

 ?>
<?php include('./cabecera.php');?>

    <h2>CONSULTA DE <span>EXPEDIENTE</span> EN LINEA</h2>
    <section class='informacion max'>
        <div class ='title_contenedor'>
            <h3>INFORMACION DEL EXPEDIENTE</h3>
        </div>
        <div class='infor_contenedor'>
            <div class='infor_subcontenedor'>
                <div class='info_item'>
                    <h4 class='infor_item--title'>
                        N° EXPEDIENTE
                    </h4>
                    <p class='infor_item--parrafo'>
                        <?php  echo $codfut?>
                    </p>
                </div>
                <div class='info_item'>
                    <h4 class='infor_item--title'>
                        DOCUMENTO
                    </h4>
                    <p class='infor_item--parrafo'>
                        SOLICITUD-S/N
                    </p>
                </div>
            </div>
            <div class='infor_subcontenedor'>
            <div class='info_item'>
                <h4 class='infor_item--title'>
                    NOMBRE DEL ADMINISTRADO
                </h4>
                <p class='infor_item--parrafo'>
                    <?php  echo "$nombres $apaterno $amaterno"?>
                </p>
            </div>
            <div class='info_item'>
                <h4 class='infor_item--title'>
                    ASUNTO
                </h4>
                <p class='infor_item--parrafo'>
                    <?php echo $titulo_solicitud; ?>
                </p>
            </div>
        </div>
        </div>
            <div class ='title_contenedor title_subcontenedor--efect'>
                    <h3>LA SITUACION ACTUAL DE SU EXPEDIENTE CONSULTADO ES:</h3>
            </div>
            <div class='infor_contenedor'>
                <div class='infor_subcontenedor'>
                    <div class='info_item'>
                        <h4 class='infor_item--title'>
                            ESTADO ACTUAL
                        </h4>
                        <p class='infor_item--parrafo'>
                            <?php  echo $nombreestado?>
                        </p>
                    </div>
                </div>
            <div class='infor_subcontenedor'>
                <div class='info_item'>
                    <h4 class='infor_item--title'>
                        UBICACION ACTUAL
                    </h4>
                    <p class='infor_item--parrafo'>
                        <?php echo $nombredependencia; ?>
                    </p>
                </div>
            </div>
            </div>
        </div>
        </div>
        </div>
    </section>

    <section class='informacion-btn'>
        <button id='btn_sesion' type="submit" class='btn_loginI btn_expediente'>
            <div id='boton_detalle'class='btn_login--efect btn_alernativa'>
                detalle expediente
            </div>
        </button>

        <button id='btn_sesion btn_alernativa' type="submit" class='btn_loginI btn_saliExpediente'>
            <div id='boton_salir' href='https://www.facebook.com/' class='btn_login--efect btn_alernativa'>
                <a href="./consultar.php"> salir del sistema</a>
            </div>
        </button>
    </section>
    <section class='contenedorDetalle'>
            <article class='detalle_container'>
                <div class='detalle_container_title'>
                    <h1 class='detalle_title'> Detalle Fut</h1>
                </div>
                <div class='detalle_container_datos'>
                    <div class="fut_contenedor_imput">
                        <label class='fut_elemento' for="fecha">FECHA EMISION</label>
                        <input class='fut_elemento fut_elemento_input' type="text" id="fecha"  name='fecha' value='<?php echo $fecha; ?>' disabled >
                    </div>
                    <div class="fut_contenedor_imput">
                        <label class='fut_elemento' for="nrodocumento">DNI/DOCUMENTO</label>
                        <input class='fut_elemento fut_elemento_input' type="text" id="nrodocumento"  name='nrodocumento' value='<?php echo$nrodocumento;?>' disabled >
                    </div>
                    <div class="fut_contenedor_imput">
                            <label class='fut_elemento' for="celular">CELULAR </label>
                            <input class='fut_elemento fut_elemento_input' type="tel" id="celular"  name='celular' value='<?php echo$celular;?>' disabled >
                        </div>
                        <div class="fut_contenedor_imput">
                            <label class='fut_elemento' for="correo">CORREO </label>
                            <input class='fut_elemento fut_elemento_input' type="email" id="correo"  name='correo' value='<?php echo$correo;?>' disabled >
                        </div>
                </div>
                <div class='detalle_icono'>
                    <i class="fas fa-times"></i>
                </div>
            </article>
    </section>

<?php include('./footer.php');?>

