<?php include('./cabecera.php')?>


<div class='contendor_top'>

<h3 class='title_fut'>ADMINISTRADOR <span class='title--efect'>MEZA DE PARTO</span></h3>
    <div class='table_contenedor'>
            <table class="styled-table">
            <thead>
                <tr>
                    <th scope="col">Nombres</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">DNI</th>
                    <th scope="col">Destino</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Fundamento</th>
                    <th scope="col">Descargar</th>
                    <th scope="col">Enviar</th>
                </tr>
            </thead>
            <tbody>
            <?php

            //trabajar con bd
            include("conexion.php");

            $sql = "select * from fut f inner join expediente e on f.codfut=e.codfut inner join estado es on e.id_estado=es.id_estado inner join dependencia d on f.id_dependencia=d.id_dependencia";

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
                <tr>
                    <td scope="row" ><?php echo $nombres; ?></td>
                    <td scope="row" ><?php echo "$apaterno $amaterno"; ?></td>
                    <td scope="row" ><?php echo $nrodocumento; ?></td>
                    <td scope="row" ><?php echo $nombredependencia; ?></td>
                    <td scope="row" ><?php echo $titulo_solicitud; ?></td>
                    <td scope="row" ><?php echo $fundamento; ?></td>
                    <td scope="row" >
                        <a href=<?php echo "'./$ruta;'" ?> download=<?php echo $apaterno?> >por php</a>
                    </td>
                    <td scope="row" >
                        <a href='./archivo/2021-5fj.pdf' download=<?php echo $apaterno?> >Descargar</a>
                    </td>
                    <td><button>Enviar</button></td>
                </tr>
            <?php
            }
            ?>
            </tbody>
        </table>
    </div>
</div>



<?php include('./footer.php')?>