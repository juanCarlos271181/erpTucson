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



<form class="row g-8 mx-4 contenedor  mt-4 p-4 border rounded-5  d-flex justify-content-center aling-items-center"id="bgRegistro">
    <div class="d-flex justify-content-center">
        <img src="./img/usuariofreepik.png" class="img-fluid" alt="Sample image" style="height: 7rem">
    </div>
    <div class="d-flex justify-content-center fs-1 fw-bold"id="tituloRegistro">
                Registro
            </div>
    <div class="col-md-4">
        <label for="inputEmail4" class="form-label">Email</label>
        <input type="email" class="form-control" id="inputEmail4">
    </div>
    <div class="col-md-4">
        <label for="inputPassword4" class="form-label">Password</label>
        <input type="password" class="form-control" id="inputPassword4">
    </div>
    <div class="col-8">
        <label for="inputAddress" class="form-label">Direccion</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
    </div>
    <div class="col-8">
        <label for="inputAddress2" class="form-label">Address 2</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
    </div>
    <div class="col-6 md-4">
        <label for="inputCity" class="form-label">Ciudad</label>
        <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="col-md-2">
        <label for="inputState" class="form-label">Estado</label>
        <select id="inputState" class="form-select">
            <option selected>Elegir...</option>
            <option>...</option>
        </select>
    </div>
    <div class="col-md-2">
        <label for="inputZip" class="form-label">Código Postal</label>
        <input type="text" class="form-control" id="inputZip">
    </div>
    <div class="col-6">

    </div>
    <div class="col-12 d-flex justify-content-center mt-2"id="botoRegistro">
        <button type="submit" class="btn btn-secondary">Iniciar sesion</button>
    </div>
</form>

<br>

</div>


<!--/div-->
<footer class="py-2 mt-4"id="bgfooterLogin">
        <?php include(app_path() . "/../resources/views/template/footer.php"); ?>
    </footer>



</body>

</html>