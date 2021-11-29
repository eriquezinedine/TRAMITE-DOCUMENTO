<?php include('./cabecera.php') ?>
<!-- ------------------------------------- -->
<form action="optener.php" method='post' id='fromFut'>
    <h3 class='title_fut'>FUT <span class='title--efect'>VIRTUAL</span></h3>
    <div class='contenedor_datos'>
        <div class='fut_contenedor '>
            <h2>Datos Personales</h2>
            <div class="fut_contenedor_imput">
                <label class='fut_elemento' for="nombres">NOMBRES COMPLETOS</label>
                <input class='fut_elemento fut_elemento_input' type="text" id="nombres" name='nombres'>
            </div>
            <article class='content_datos1'>
                <div class="fut_contenedor_imput">
                    <label class='fut_elemento' for="apaterno">APELLIDO PATERNO</label>
                    <input class='fut_elemento fut_elemento_input' type="text" id="apaterno" name='apaterno'>
                </div>
                <div class="fut_contenedor_imput">
                    <label class='fut_elemento' for="amaterno">APELLIDO MATERNO</label>
                    <input class='fut_elemento fut_elemento_input' type="text" id="amaterno" name='amaterno'>
                </div>
                <div class="fut_contenedor_imput">
                    <label class='fut_elemento' for="nrodocumento">DNI/CARNET </label>
                    <input class='fut_elemento fut_elemento_input' type="text" id="nrodocumento" name='nrodocumento'>
                </div>
            </article>
            <article class='content_datos2'>
                <div class="fut_contenedor_imput">
                    <label class='fut_elemento' for="celular">CELULAR </label>
                    <input class='fut_elemento fut_elemento_input' type="tel" id="celular" name='celular'>
                </div>
                <div class="fut_contenedor_imput">
                    <label class='fut_elemento' for="correo">CORREO </label>
                    <input class='fut_elemento fut_elemento_input' type="email" id="correo" name='correo'>
                </div>
            </article>
            <div class="fut_contenedor_imput">
                <label class='fut_elemento' for="tipopersona">TIPO PERSONA </label>
                <select class='fut_elemento fut_elemento_input' name="tipopersona" id="tipopersona" style='width:100%'>
                    <option selected>seleciona</option>
                    <?php
                    include("conexion.php");
                    $sqlp = 'select * from tipopersona';
                    $fila = mysqli_query($cn, $sqlp);
                    while ($r = mysqli_fetch_array($fila)) {
                    ?>
                        <option value="<?php echo $r['id_tipopersona']; ?>"><?php echo $r["tipopersona"]; ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>

        </div>
        <div class='fut_contenedor '>
            <h2>Datos del Archivo</h2>
            <div class="fut_contenedor_imput">
                <label class='fut_elemento' for="titulo_solicitud">TITULO DE LA SOLICITUD</label>
                <input class='fut_elemento fut_elemento_input' type="text" id="titulo_solicitud" name='titulo_solicitud'>
            </div>
            <div class="fut_contenedor_imput">
                <label class='fut_elemento' for="dependencia">DEPENDENCIA </label>
                <select class='fut_elemento fut_elemento_input' name="dependencia" id="dependencia" style='width:100%'>
                    <option selected>seleciona</option>
                    <?php
                    include("conexion.php");
                    $sqlp = 'select * from dependencia';
                    $fila = mysqli_query($cn, $sqlp);
                    while ($r = mysqli_fetch_array($fila)) {
                    ?>
                        <option value="<?php echo $r['id_dependencia']; ?>"><?php echo $r["nombredependencia"]; ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>

            <div class="fut_contenedor_imput">
                <label class='fut_elemento' for="fundamento">FUNDAMENTO</label>
                <textarea class='fut_elemento fut_elemento_input' rows='' col='100' id="fundamento" name='fundamento'></textarea>
            </div>
        </div>
    </div>
    <button id='btn_fut' type="submit" class='btn_loginI m_auto'>
        <div class='btn_login--efect'>
            Enviar Informacion
        </div>
    </button>
</form>
<form id="contenedorArchivo" action="p_archivo.php" method='post' enctype="multipart/form-data">
    <div class="fut_contenedor_imput" >
        <label class='fut_elemento' for="ruta">ESCOJA SU ARCHIVO</label>
        <input class='fut_elemento fut_elemento_input' type="file" id="ruta" name="archivo">
        <input class='btn_archivo' type="submit" value="Procesar Archivo">

    </div>
</form>
<?php include('footer.php'); ?>