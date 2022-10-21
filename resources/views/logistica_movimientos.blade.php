<!DOCTYPE html>
<html lang="es">

<head>
    <?php include(app_path() . "/../resources/views/template/head.php"); ?>
</head>


<header>
    <?php
    include(app_path() . "/../resources/views/template/header.php");
    ?>
</header>



<div class="d-flex tituloEntrada">
    <h4>Movimientos entre Almacen</h4>
</div>

<div class="contenedorComprobante">
    <div class="d-flex col justify-content-end">
        <p>N° Comprobante </p>
    </div>


    <div class="d-flex col justify-content-end gap-5 w-2">
        <p>Fecha:</p>
        <p>Hora:</p>
    </div>
</div>

<div class="container" id="contenedorBuscar">
    <div class="row">
        <div class="d-flex col justify-content-start">
            <div class="d-flex col-4">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input id="username" type="text" class="form-control w-100" placeholder="Buscar Productos" aria-label="Username" aria-describedby="basic-addon1">
            </div>
        </div>
    </div>
</div>


<div class="d-flex justify-content-start containerMovimiento">
    <div class="row">
        <div class="d-flex justify-content-start">
            <div class="col-12 d-flex justify-content-center gap-4" id="origen">
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected>Origen Deposito</option>
                    <option value="1">Ciclico</option>
                    <option value="2">Preparacion</option>
                    <option value="3">TML</option>
                </select>
                <div class="inputFlecha">
                    <i class="fa-solid fa-arrow-right-arrow-left" id="arrow"></i>
                </div>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected>Destino Deposito</option>
                    <option value="1">Talar</option>
                    <option value="2">Pilar</option>
                    <option value="3">Intralog</option>
                </select>

                <div class="btn-group gap-2" role="group" aria-label="Basic mixed styles example">
                    <button type="button" class="btn btn-success">Agregar</button>
                    <button type="button" class="btn btn-warning">Modificar</button>
                    <button type="button" class="btn btn-danger">Borrar</button>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<ul></ul>
<div class="container">
    <div class="row">
        <div class="d-flex justify-content-start">
            <div class="col-8 d-flex justify-content-between gap-4">
                <input id="username" type="text" class="form-control w-100" placeholder="Código" aria-label="Username" aria-describedby="basic-addon1">
                <input id="username" type="text" class="form-control w-100" placeholder="Articulo" aria-label="Username" aria-describedby="basic-addon1">
                <input id="username" type="text" class="form-control w-100" placeholder="Lote" aria-label="Username" aria-describedby="basic-addon1">
                <input id="username" type="number" class="form-control w-100" placeholder="Cantidad a Mover" aria-label="Username" aria-describedby="basic-addon1">
            </div>
        </div>
    </div>
</div>
</ul>




<div class="col-6 p-4">
    <div class="form-floating">
        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
        <label for="floatingTextarea">Observaciones</label>
    </div>
</div>

<div class="container" id="contenedorGuardar">
    <div class="row">
        <div class="d-flex col justify-content-center">
            <div class="d-flex">
                <i class="fa-solid fa-upload"></i>
                <button type="button" class="btn btn-success" id="botonCargar"></button>
            </div>
        </div>
    </div>
</div>




<footer class="py-4 mt-4" id="bgfooterLogin">
    <?php include(app_path() . "/../resources/views/template/footer.php"); ?>
</footer>



</body>

</html>