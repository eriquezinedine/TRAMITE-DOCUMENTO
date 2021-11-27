<?php include('./cabecera.php')?>

    <header class='header'>
        <div class='header_conteiner'>
            <h1 class='header_title col-50'> CONSULTAR <span class='header_title--efect'>ESTADO</span> DEL EXPEDIENTE</h1>
            <form class='header_login-contenedor' method="post" action='p_consultar.php'>
                <div class="contenedor_usuario label_container--efect">
                    <input type="text" class="contenedor_usuario-input" id="emaillocal" placeholder="N° EXPEDIENTE" name="txtn">
                </div>
                <div class="contenedor_usuario label_container--efect">
                    <input type="text" class="contenedor_usuario-input" id="emaillocal" placeholder="AÑO EXPEDIENTE" name="txta">
                </div>
                <div class="contenedor_usuario label_container--efect">
                    <input type="password" class="contenedor_usuario-input" id="usuario" placeholder="PASSWORD" name="txtp">
                </div>
                <button id='btn_sesion' type="submit" class='btn_loginI'>
                    <div  class='btn_login--efect'>
                        Consultar Expediente
                    </div>
                </button>
            </form>
        </div>
    </header>

<?php include('footer.php'); ?>