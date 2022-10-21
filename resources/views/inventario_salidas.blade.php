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
        <h4>Nueva Salida</h4>
    </div>
    <br>

    <div class="container">

        <div class="row">


            <div class="col-4">
                <label>N° de Documento</label>
                <input type="text" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2">
            </div>

            <div class="col-4">
                <label>Fecha de Registro</label>
                <input type="date" class="form-control" placeholder="Fecha de Registro:" aria-label="Recipient's username" aria-describedby="basic-addon2">
            </div>


        </div>



        <hr>

        <div class="d-flex justify-content-start containerSalida">

            <div class="row">
                <div class="col-4">
                    <label>Documento Cliente</label>
                    <input type="text" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2">
                </div>

                <div class="col-4">
                    <label>Nombre del Cliente</label>
                    <input type="text" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2">
                </div>

                <div class="col-4" id="buscarCliente">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <label></label>
                    <div class="col">
                        <button type="button" class="btn btn-secondary">Buscar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>
    <br>

    <div class="d-flex justify-content-start containerSalida2">
        <div class="row">
            <div class="col-4">
                <label>Código Producto</label>
                <input type="text" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2">
            </div>

            <div class="col-2">
                <label>Articulos</label>
                <input type="text" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2">
            </div>

            <div class="col-2" id="buscarArticulos">
                <i class="fa-solid fa-magnifying-glass"></i>
                <label></label>
                <div class="col">
                    <button type="button" class="btn btn-secondary">Buscar</button>
                </div>
            </div>

            <div class="col-2">
                <label>Stock</label>
                <input type="text" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2">
            </div>
            <div class="col-2">
                <label></label>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected>Cantidad</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>

        </div>
    </div>




    <br>
    <br>
    <br>

    <span class="placeholder col-12 bg-secondary"></span>
    <table class=" table table-striped table-hover">
        <thead>
            <tr class="table-primary">
                <th scope="col">Código</th>
                <th scope="col">Descripción</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Precio Venta</th>
                <th scope="col">Sub Total</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">000001</th>
                <td>Rosseto 57x57</td>
                <td>24JK</td>
                <td>420.000<img class="imagen" src=""></td>
                <td><img class="imagen" src=""></td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td></td>
                <td></td>
                <td><img class="imagen" src=""></td>
                <td><img class="imagen" src=""></td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td colspan=""></td>
                <td></td>
                <td><img class="imagen" src=""></td>
                <td><img class="imagen" src=""></td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td colspan=""></td>
                <td></td>
                <td><img class="imagen" src=""></td>
                <td><img class="imagen" src=""></td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td colspan=""></td>
                <td></td>
                <td><img class="imagen" src=""></td>
                <td><img class="imagen" src=""></td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td colspan=""></td>
                <td></td>
                <td><img class="imagen" src=""></td>
                <td><img class="imagen" src=""></td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td colspan=""></td>
                <td></td>
                <td><img class="imagen" src=""></td>
                <td><img class="imagen" src=""></td>
            </tr>

            </tr>
        </tbody>
    </table>

    <div class="total">
        <h4>Total:</h4>
    </div>


    <div class="text-center text-lg-center mt-4 pt-2">
        <button type="button" id="login" class="btn btn-secondary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Guardar Salida</button>
    </div>



    <br>
    <br>




    <footer class="py-4 mt-4" id="bgfooterLogin">
        <?php include(app_path() . "/../resources/views/template/footer.php"); ?>
    </footer>



</body>

</html>