<!DOCTYPE html>
<html lang="es">

<head>
    <?php include(app_path() . "/../resources/views/template/head.php"); ?>
</head>

<body>


    <header>
        <?php include(app_path() . "/../resources/views/template/header.php"); ?>
    </header>

    <div class="tituloEntrada">
        <h4>Listar Entradas</h4>
    </div>
    <br>

    <div class="container d-flex justify-content-start" style="height:200px">

        <div class="row">
            <div class="col-4">
                <div class="d-flex justify-content-around">
                    <label>Fecha Inicio</label>
                    <input type="date" class="form-control" placeholder="Fecha Inicio" aria-label="Recipient's username" aria-describedby="basic-addon2">
                </div>
            </div>

            <div class="col-4">
                <div class="d-flex">
                    <label>Fecha Final</label>
                    <input type="date" class="form-control" placeholder="Fecha Final" aria-label="Recipient's username" aria-describedby="basic-addon2">
                </div>
            </div>

            <div class="col-4">
                <button type="button" class="btn btn-secondary">Buscar</button>
            </div>
<hr>

            <div class="d-flex justufy-content-start row">
                <div class="col-3">
                    <div class="d-flex">
                        <button type="button" class="btn btn-success">Descargar Excel</button>
                    </div>
                </div>


                <div class=" fecha_registro col-4">
                    <div class="d-flex justify-content-start">

                        <input type="text" class="form-control" placeholder="Fecha de Registro" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    </div>
                </div>
                <div class="d-flex col-2">
                    <div class="col">
                        <button type="button" class="btn btn-secondary">Buscar</button>
                        </div>
                        <div class="col-2">
                            <button type="button" class="btn btn-danger">Borrar</button>
                        </div>
                    </div>
                </div>





            </div>

        </div>

    </div>
    </div>
    </div>

    <table class=" table table-striped table-hover">
        <thead>
            <tr class="table-primary">
                <th scope="col">Fecha</th>
                <th scope="col">Registro</th>
                <th scope="col">Nota Documento</th>
                <th scope="col">Usuario Registrado</th>
                <th scope="col">Provedor</th>
                <th scope="col">Monto Total</th>
                <th scope="col">Código</th>
                <th scope="col">Descuento Articulo</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"></th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>


    </table>





    <footer class="py-4 mt-4"id="bgfooterLogin">
        <?php include(app_path() . "/../resources/views/template/footer.php"); ?>
    </footer>



</body>

</html>