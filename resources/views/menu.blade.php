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

    

    <div class=containerMenu style="height:400px">
        <div class="d-flex justify-content-center" role="group">

            <div class="col-6">
                <button type="button" class="btnMenu" data-bs-toggle="modal" data-bs-target="#miModal">Entradas</button>
            </div>

            <div class="modal fade" id="miModal" tabindex="-1" aria-hidden="true" aria-labelledby="modalTitle">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id=modalTitle>Selecione una Opcion</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                        </div>
                        <div class="modal-body">
                            <a href="./inventario_entradas">
                            <i class="fa-solid fa-arrow-right-to-bracket fa-3x"></i>  
                            </a>
                            <a href="./inventario_salidas">
                            <i class="fa-solid fa-list-check fa-3x"></i>
                            </a>
                            <a href="./inventario_salidas">
                            <i class="fa-solid fa-magnifying-glass fa-3x"></i>
                            </a>


                            <img src="./img/listar.jpg" class="card-img-top imagen20" alt="imagen de tarjeta" id="img_tarjeta">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>


            </div>


            <div class="col-6">
                <a href="./inventario_salidas"> <button type="button" class="btnMenu">Salidas</button>
            </div>
            
            <a href="./inventario_productos"> <button type="button" class="btnMenu">Productos</button>

        </div>

        <div class="d-flex justify-content-center" role="group">
            <div class="col-6">
                <a href="./toma_inventario"><button type="button" class="btnMenu">Toma de Inventario</button>
            </div>
            <div class="col-6">
                <a href="./movimientos_almacen"> <button type="button" class="btnMenu">Movimientos entre Almacen</button>
            </div>
            <a href="./configuracion"> <button type="button" class="btnMenu">Configuración</button>
        </div>
    </div>
    <br>

    
    <footer class="py-5 bg-dark">
        <?php include(app_path() . "/../resources/views/template/footer.php"); ?>
    </footer>



    <script src="https://kit.fontawesome.com/85fec555d4.js"></script>
</body>