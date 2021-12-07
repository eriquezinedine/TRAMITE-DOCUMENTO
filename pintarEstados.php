<?php include('./cabecera.php')?>

<div class='contendor_top'>
    

<h3 class='title_fut'>ADMINISTRAR <span class='title--efect'>MEZA DE PARTO</span></h3>
    <div class='table_contenedor'>
    <button class='btn_admin'>Adminsitrar</button>
            <table class="styled-table">
            <thead>
                <tr style='text-align:center;'>
                    <th scope="col">Nombres</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">DNI</th>
                    <th scope="col">Destino</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Estado del FUT</th>
                    <th scope="col">Fundamento</th>
                    <th scope="col">Descargar</th>
                    <th scope="col">Leer</th>
                    <th scope="col">Enviar</th>
                </tr>
            </thead>
            <tbody>
            <?php
			$idDependencia = $_POST['dependencia'];
            //trabajar con bd
            include("conexion.php");
			$sql = "select * 
			from fut f inner join expediente e on f.codfut=e.codfut inner join estado es on e.id_estado=es.id_estado inner join dependencia d on f.id_dependencia=d.id_dependencia
			where f.id_dependencia='$idDependencia'";
            $fila=mysqli_query($cn,$sql);

            while($r=mysqli_fetch_array($fila))
            {
                $codfut = $r["codfut"];
                $passfut = $r["passfut"];
                $id_tipopersona = $r["id_tipopersona"];
                $id_dependencia = $r["id_dependencia"];
                $apaterno = $r["apaterno"];
                $amaterno = $r["amaterno"];
                $nombres = $r["nombres"];
                $nrodocumento = $r["nrodocumento"];
                $celular = $r["celular"];
                $correo = $r["correo"];
                $fundamento = $r["fundamento"];
                $titulo_solicitud = $r["titulo_solicitud"];
                $ruta = $r["ruta"];
                $fecha = $r["fecha"];
                $id_estado = $r["id_estado"];
                $codusuario = $r["codusuario"];
                $nombreestado = $r["nombreestado"];
                $nombredependencia = $r["nombredependencia"];
            ?>
                <tr style='text-align:center;'  >
                    <td scope="row" ><?php echo $nombres; ?></td>
                    <td scope="row" ><?php echo "$apaterno $amaterno"; ?></td>
                    <td scope="row" ><?php echo $nrodocumento; ?></td>
                    <td scope="row" ><?php echo $nombredependencia; ?></td>
                    <td scope="row" ><?php echo $titulo_solicitud; ?></td>
                    <td scope="row" class='estado_pintar'><?php echo $nombreestado; ?></td>
                    <td scope="row" > <textarea name="" id="" cols="30" rows="4" disabled><?php echo $fundamento; ?></textarea></td>
                    <td scope="row" >
                        <a  class='ico_descargar' href=<?php echo "'./$ruta'" ?> download=<?php echo $apaterno?> ><i class="fas fa-file-download"></i></a>
                    </td>

                    <td scope="row"><a class='ico_descargar' href="p_estado.php?valor=<?php echo $r["codfut"]; ?>" target="top"><i class="fas fa-book-reader"></i></a>
                    </td>
                    <td scope="row">
                        <a class='ico_descargar' href="p_estado2.php?valor=<?php echo $r["codfut"]; ?>" target="top"><i class="fas fa-paper-plane"></i></a>
                    </td>
                </tr>
            <?php
            }
            ?>
            </tbody>
        </table>
    </div>
</div>

<form method="POST" action='./pintarEstados' id='admin_despliegue' class='contenedorDetalle'>
    <article class='detalle_container'>
        <div class='detalle_container_title'>
            <h1 class='detalle_title'> Administrar Dependencia</h1>
        </div>
        <div class='detalle_container_datos'>
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
        </div>
        <div class='detalle_icono'>
            <i class="fas fa-times"></i>
        </div>
        <button type='submit' class='btn_admin' style='width:80%; margin-left: 45px;'>Adminsitrar</button>
    </article>
</form>


<?php include('./footer.php')?>