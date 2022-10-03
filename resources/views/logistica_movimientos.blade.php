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



<div class="tituloEntrada">
    <h4>Movimientos entre Almacen</h4>
</div>

<div class="d-flex col justify-content-end">
    <p>N° Comprobante </p>
</div>

<div class="d-flex col justify-content-end gap-5 w-2">
    <p>Fecha:</p>
    <p>Hora:</p>
</div>


<div class="container">
    <div class="row">
        <div class="d-flex col justify-content-start">
            <div class="col-6">
                <input id="username" type="text" class="form-control w-100" placeholder="Buscar" aria-label="Username" aria-describedby="basic-addon1">
            </div>
        </div>
    </div>
</div>

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

<hr>







<footer class="py-4 bg-dark mt-4">
    <?php include(app_path() . "/../resources/views/template/footer.php"); ?>
</footer>



</body>

</html>