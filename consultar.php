<?php include('./cabecera.php')?>

    <header class='header'>
        <div class='header_conteiner'>
            <h1 class='header_title col-50'> CONSULTAR <span class='header_title--efect'>ESTADO</span> DEL EXPEDIENTE</h1>
            <form class='header_login-contenedor' method="post" action='p_login.php'>
                <div class="contenedor_usuario label_container--efect">
                    <input type="email" class="contenedor_usuario-input" id="emaillocal" placeholder="USUARIO" name="txtusu">
                </div>

                <div class="contenedor_usuario label_container--efect">
                    <input type="password" class="contenedor_usuario-input" id="usuario" placeholder="PASSWORD" name="txtpass">
                </div>
                <button id='btn_sesion' type="submit" class='btn_loginI'>
                    <div  class='btn_login--efect'>
                        Iniciar sesion
                    </div>
                </button>
            </form>
        </div>
    </header>

<?php include('footer.php'); ?>