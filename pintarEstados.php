<?php include('./cabecera.php')?>

<div class='contendor_top'>
    

<h3 class='title_fut'>FINALIZAR <span class='title--efect'>SOLICITUD</span></h3>
    <div class='table_contenedor'>
            <button type='submit' class='btn_admin'> <a href="./administrar.php">Regresar</a></button>

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
                    <th scope="col">Confirmar Solicitud</th>
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

                if($nombreestado !='ENTREGADO'){
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
                    <td scope="row">
                        <?php if($nombreestado =='FINALIZADO'){?>
                            <a class='ico_descargar' target="top"><i class="fas fa-paper-plane"></i></a>
                        <?php
                     }else{
                     ?>
                        <a class='ico_descargar' href="p_estado2.php?valor=<?php echo $r["codfut"]; ?>" target="top"><i class="fas fa-paper-plane"></i></a>
                    <?php }?>
                    </td>
                </tr>
            <?php
            }}
            ?>
            </tbody>
        </table>
    </div>
</div>
<?php include('./footer.php')?>