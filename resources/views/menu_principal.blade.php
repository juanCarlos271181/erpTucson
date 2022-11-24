<!DOCTYPE html>
<html lang="es">

<head>
    <?php include(app_path() . "/../resources/views/template/head.php"); ?>
</head>

<body>
    <header>
        <?php include(app_path() . "/../resources/views/template/header.php"); ?>
    </header>
    <br>
    <!--div class="row" style="heightx:400px"-->
    <style>



    </style>

<div class="tituloEntrada">
      <h4>Menu Principal</h4>
</div>


    <div class="contenedorMenu" style=" height:300px">
        <div class="contenedorMenu  col-2">
            <div class="col-12" id="card_usuario">
                <div class="card" style="width:10rem; padding:10px">
                    <a href="./menu_usuarios" class="button">
                        <img src="./img/usuarioNew.png" class="card-img-top imagen20" alt="imagen de tarjeta" id="img_tarjeta">
                    </a>
                    <div class="card-body">
                        <h6>USUARIOS</h6>
                    </div>
                </div>
            </div>
            <br>
            <div class="col-12"id="card_inventario">
                <div class="card" style="width:10rem; padding:10px">
                    <div class="card-body">
                        <h6>VENTAS</h6>
                    </div>
                    <a href="./menu_ventas"class="button">
                    <img src="./img/ventasNew.png" class="card-img-top imagen20" alt="imagen de tarjeta">
                    </a>
                </div>
            </div>
            <br>
            <div class="col-12" id="card_inventario">
                <div class="card" style="width:10rem; padding:10px">
                    <a href="./menu" class="button">
                        <img src=" ./img/inventarioNew.png" class="card-img-top imagen20" alt="imagen de tarjeta">
                    </a>
                    <div class="card-body">
                        <h6>INVENTARIO</h6>
                    </div>
                </div>
            </div>
            <br>
            <div class="col-12">
                <div class="card" style="width:10rem; padding:10px">
                    <a href="" class="button">
                        <img src=" ./img/logisticaNew.png" class="card-img-top imagen20" alt="imagen de tarjeta">
                    </a>
                    <div class="card-body">
                        <h6>LOGISTICA</h6>
                    </div>
                </div>
            </div>
            <br>
            <div class="col-12">
                <div class="card" style="width:10rem; padding:10px">
                    <img src="./img/operacionNew.png " class="card-img-top imagen20" alt="imagen de tarjeta">
                    <div class="card-body">
                        <h6>OPERACION</h6>
                        <a href="#"></a>
                    </div>
                </div>
            </div>
            <br>

            <div class="col-12" id="card_inventario">
                <div class="card" style="width:10rem; padding:10px">
                    <a href="./dashboard" class="button">
                        <img src="./img/dashboardNew.png" class="card-img-top imagen20" alt="imagen de tarjeta">
                    </a>
                    <div class="card-body">
                        <h6>DASHBOARD</h6>
                    </div>
                </div>
            </div>








            <br>


        </div>



        <br>



        <div id="content1" class="contenedorMenu col-9">
            &nbsp;
        </div>
        <!--/div-->
    </div>

    <footer class="py-4 mt-4" id="bgfooterLogin">
        <?php include(app_path() . "/../resources/views/template/footer.php"); ?>
    </footer>



</body>

</html>