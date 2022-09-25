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

<br>
<br>
<br>

<div class="container">

<form>

<div class="d-grid ">
<div class="row d-flex justify-content-evenly">
<div class="col-4 d-grid gap-4">
    
<button type="button" class="btnMenu" data-bs-toggle="modal" data-bs-target="#miModal"><i class="fa-solid fa-arrow-right-to-bracket fa-2x"></i>Entradas</button>
<button type="button" class="btnMenu" data-bs-toggle="modal" data-bs-target="#miModal"><i class="fa-solid fa-arrow-up-right-from-square fa-2x"></i>Salidas</button>
<a href="./inventario">
<button type="button" class="btnMenu" data-bs-toggle="" data-bs-target=""><i class="fa-solid fa-boxes-stacked fa-2x"></i>Productos</button>
</a>
</div>
<div class="col-4 d-grid gap-4">
<button type="button" class="btnMenu" data-bs-toggle="modal" data-bs-target="#miModal"><i class="fa-solid fa-warehouse fa-2x"></i>Toma Inventario</button>
<button type="button" class="btnMenu" data-bs-toggle="modal" data-bs-target="#miModal"><i class="fa-solid fa-cart-flatbed fa-2x"></i>Movimientos</button>
<button type="button" class="btnMenu" data-bs-toggle="modal" data-bs-target="#miModal"><i class="fa-solid fa-gears fa-2x"></i>Configuracion</button>
</div>
</div>



</form>


</div>




    <div class="containerMenu" style="height:40px">
        <div class="" role="group">

           

            <div class="modal fade" id="miModal" tabindex="-1" aria-hidden="true" aria-labelledby="modalTitle">
                <div class="modal-dialog">
                    <div class="modal-content ">
                        <div class="modal-header">
                            <h5 class="modal-title" id=modalTitle>Selecione una Opcion</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                        </div>
                        <div class=" d-flex modal-body text-decoration-none"style="height:100px">
                            <a href="./inventario_entradas">
                            <img src="./img/nuevofree.png" class="card-img-top imagen20" alt="imagen de tarjeta"id="nuevoImg">
                            <div class="link">
                            <p>Nuevo</p>
                            </div>
                            </a>
                            
                            <a href="./listar_entradas">
                            <img src="./img/listarfree.png" class="card-img-top imagen20" alt="imagen de tarjeta">
                            <div class="link">
                            <p>Listar</p>
                            </div>
                            </a>
                            <a href="./inventario">
                            <img src="./img/lupafree.png" class="card-img-top imagen20" alt="imagen de tarjeta">
                            <div class="link">
                            <p>Buscar</p>
                            </div>
                            </a>



                        </div>
                        <div class="modal-footer">
                         
                        </div>
                    </div>
                </div>


            </div>


          

            <div class="modal fade" id="ModalSalida" tabindex="-1" aria-hidden="true" aria-labelledby="modalTitle">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id=modalTitle>Selecione una Opcion</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                        </div>
                        <div class="modal-body">
                            <a href="./inventario_salidas">
                                <i class="fa-solid fa-arrow-right-to-bracket fa-2x"></i>
                            </a>
                            <a href="./inventario_listar">
                                <i class="fa-solid fa-list-check fa-2x"></i>
                            </a>
                            <a href="./inventario_salidas">
                                <i class="fa-solid fa-magnifying-glass fa-2x"></i>
                            </a>



                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>


            </div>



           

            <div class="modal fade" id="ModalSalida" tabindex="-1" aria-hidden="true" aria-labelledby="modalTitle">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id=modalTitle>Selecione una Opcion</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                        </div>
                        <div class="modal-body">
                            <a href="./inventario_salidas">
                                <i class="fa-solid fa-arrow-right-to-bracket fa-2x"></i>
                            </a>
                            <a href="./inventario_listar">
                                <i class="fa-solid fa-list-check fa-2x"></i>
                            </a>
                            <a href="./inventario_salidas">
                                <i class="fa-solid fa-magnifying-glass fa-2x"></i>
                            </a>



                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>


            </div>


          

            <div class="modal fade" id="ModalSalida" tabindex="-1" aria-hidden="true" aria-labelledby="modalTitle">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id=modalTitle>Selecione una Opcion</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                        </div>
                        <div class="modal-body">
                            <a href="./inventario_salidas">
                                <i class="fa-solid fa-arrow-right-to-bracket fa-2x"></i>
                            </a>
                            <a href="./inventario_listar">
                                <i class="fa-solid fa-list-check fa-2x"></i>
                            </a>
                            <a href="./inventario_salidas">
                                <i class="fa-solid fa-magnifying-glass fa-2x"></i>
                            </a>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>


            </div>


           

            <div class="modal fade" id="ModalSalida" tabindex="-1" aria-hidden="true" aria-labelledby="modalTitle">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id=modalTitle>Selecione una Opcion</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                        </div>
                        <div class="modal-body">
                            <a href="./inventario_salidas">
                                <i class="fa-solid fa-arrow-right-to-bracket fa-2x"></i>
                            </a>
                            <a href="./inventario_listar">
                                <i class="fa-solid fa-list-check fa-2x"></i>
                            </a>
                            <a href="./inventario_salidas">
                                <i class="fa-solid fa-magnifying-glass fa-2x"></i>
                            </a>



                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>


            </div>


           

            <div class="modal fade" id="ModalSalida" tabindex="-1" aria-hidden="true" aria-labelledby="modalTitle">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id=modalTitle>Selecione una Opcion</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                        </div>
                        <div class="modal-body">
                            <a href="./inventario_salidas">
                                <i class="fa-solid fa-arrow-right-to-bracket fa-2x"></i>
                            </a>
                            <a href="./inventario_listar">
                                <i class="fa-solid fa-list-check fa-2x"></i>
                            </a>
                            <a href="./inventario_salidas">
                                <i class="fa-solid fa-magnifying-glass fa-2x"></i>
                            </a>



                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>


            </div>


          

            <div class="modal fade" id="ModalSalida" tabindex="-1" aria-hidden="true" aria-labelledby="modalTitle">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id=modalTitle>Selecione una Opcion</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                        </div>
                        <div class="modal-body">
                            <a href="./inventario_salidas">
                                <i class="fa-solid fa-arrow-right-to-bracket fa-2x"></i>
                            </a>
                            <a href="./inventario_listar">
                                <i class="fa-solid fa-list-check fa-2x"></i>
                            </a>
                            <a href="./inventario_salidas">
                                <i class="fa-solid fa-magnifying-glass fa-2x"></i>
                            </a>



                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>


            </div>


           

            <div class="modal fade" id="ModalSalida" tabindex="-1" aria-hidden="true" aria-labelledby="modalTitle">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id=modalTitle>Selecione una Opcion</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                        </div>
                        <div class="modal-body">
                            <a href="./inventario_salidas">
                                <i class="fa-solid fa-arrow-right-to-bracket fa-2x"></i>
                            </a>
                            <a href="./inventario_listar">
                                <i class="fa-solid fa-list-check fa-2x"></i>
                            </a>
                            <a href="./inventario_salidas">
                                <i class="fa-solid fa-magnifying-glass fa-2x"></i>
                            </a>



                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>


            </div>


           
                    </div>
                </div>
            </div>

        </div>
    </div>
    <footer class="py-5 bg-dark">
        <?php include(app_path() . "/../resources/views/template/footer.php"); ?>
    </footer>

</body>

</html>