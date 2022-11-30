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


    <div class="tituloEntrada">
      <h4>INVENTARIO</h4>
</div>
<br>

    <div class="container mt-4" style=" height:500px">

        <form>

            <div class="d-grid ">
                <div class="row d-flex justify-content-evenly">
                    <div class="col-4 d-grid gap-4">

                        <button type="button" class="btnMenu" data-bs-toggle="modal" data-bs-target="#miModalEntrada"> <img src="./img/freeEntrada.png" class="card-img-top imagen20" alt="imagen de tarjeta" id="nuevoImg"> Entradas</button>
                        <button type="button" class="btnMenu" data-bs-toggle="modal" data-bs-target="#miModalSalida"> <img src="./img/freeSalida.png" class="card-img-top imagen20" alt="imagen de tarjeta" id="nuevoImg"> Salidas</button>
                        <button type="button" class="btnMenu" data-bs-toggle="modal" data-bs-target="#miModalProducto"><img src="./img/productosfree.png" class="card-img-top imagen20" alt="imagen de tarjeta" id="nuevoImg"> Productos</button>

                    </div>
                    <div class="col-4 d-grid gap-4">
                        <a href="./toma_inventarios">
                            <button type="button" class="btnMenu" data-bs-toggle="modal" data-bs-target="#miModal"> <img src="./img/freeAlmacen.png" class="card-img-top imagen20" alt="imagen de tarjeta" id="nuevoImg"> Toma Inventario</button>
                        </a>
                        <a href="./logistica_movimientos">
                            <button type="button" class="btnMenu" data-bs-toggle="modal" data-bs-target="#miModal"> <img src="./img/movimientosfree.png" class="card-img-top imagen20" alt="imagen de tarjeta" id="nuevoImg"> Movimientos</button>
                        </a>
                        <button type="button" class="btnMenu" data-bs-toggle="modal" data-bs-target="#miModal"> <img src="./img/freeConfiguracion.png" class="card-img-top imagen20" alt="imagen de tarjeta" id="nuevoImg"> Configuracion</button>
                    </div>
                </div>



        </form>


    </div>




    <div class="containerMenu" style="height:60px">
        <div class="" role="group">



            <div class="modal fade" id="miModalEntrada" tabindex="-1" aria-hidden="true" aria-labelledby="modalTitle">
                <div class="modal-dialog">
                    <div class="modal-content ">
                        <div class="modal-header">
                            <h5 class="modal-title" id=modalTitle>Entradas</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                        </div>
                        <div class=" d-flex justufy-content-center modal-body text-decoration-none" style="height:100px">
                            <a href="./inventario_entradas">
                                <img src="./img/freeNuevo.png" class="card-img-topMain imagen20" alt="imagen de tarjeta" id="nuevoImg">
                                <div class="link">
                                    <p>Nuevo</p>
                                </div>
                            </a>

                            <a href="./listar_entradas">
                                <img src="./img/freeListar.png" class="card-img-topMain imagen20" alt="imagen de tarjeta">
                                <div class="link">
                                    <p>Listar</p>
                                </div>
                            </a>
                            <a href="./inventario">
                                <img src="./img/freeLupa.png" class="card-img-topMain imagen20" alt="imagen de tarjeta">
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








            <div class="modal fade" id="miModalSalida" tabindex="-1" aria-hidden="true" aria-labelledby="modalTitle">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id=modalTitle>Salidas</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                        </div>
                        <div class="modal-body">
                            <div class=" d-flex justify-content-center modal-body text-decoration-none" style="height:90px">
                                <a href="./inventario_salidas">
                                    <img src="./img/freeNuevo.png" class="card-img-topMain imagen20" alt="imagen de tarjeta" id="nuevoImg">
                                    <div class="linkSalida">
                                        <p>Nuevo</p>
                                    </div>
                                </a>
                                <a href="./listar_salidas">
                                    <img src="./img/freeListar.png" class="card-img-topMain imagen20" alt="imagen de tarjeta">
                                    <div class="linkSalida">
                                        <p>Listar</p>
                                    </div>
                                </a>
                                <a href="./inventario_salidas">
                                    <img src="./img/freeLupa.png" class="card-img-topMain imagen20" alt="imagen de tarjeta">
                                    <div class="linkSalida">
                                        <p>Buscar</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="modal-footer">

                        </div>
                    </div>
                </div>


            </div>




            <div class="modal fade" id="miModalProducto" tabindex="-1" aria-hidden="true" aria-labelledby="modalTitle">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id=modalTitle>Productos</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                        </div>
                        <div class="modal-body">
                            <div class=" d-flex justify-content-center modal-body text-decoration-none" style="height:95px ">
                                <a href="./crearProducto">
                                    <img src="./img/freeNuevo.png" class="card-img-top2 imagen20" alt="imagen de tarjeta" id="nuevoImg">
                                    <div class="linkSalida">
                                        <p>Nuevo</p>
                                    </div>
                                </a>
                                <a href="./">
                                    <img src="./img/freeDonload.png" class="card-img-top2 imagen20" alt="imagen de tarjeta" id="nuevoImg">
                                    <div class="linkSalida">
                                        <p>Cargar</p>
                                    </div>
                                </a>
                                <a href="./inventario">
                                    <img src="./img/freeListar.png" class="card-img-top2 imagen20" alt="imagen de tarjeta" id="nuevoImg">
                                    <div class="linkSalida">
                                        <p>Listar</p>
                                    </div>
                                </a>
                            </div>
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
                        <div class="modal-footer mt-4">
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
    


   



</body>

</html>