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


<body class=" ">
    <div class="contenedor d-flex justify-content-center aling-items-center vh-90 mt-4">
        <div class="bg-white p-5  text-secondary border rounded-5 " style="width:25rem">
            <div class="d-flex justify-content-center">
                <img src="./img/registro.png" class="img-fluid2" alt="Sample image" style="height: 7rem">
            </div>
            <div class="d-flex justify-content-center fs-1 fw-bold">
                Registro
            </div>
            <div class="input-group mt-3">
                <div class="input-group-text">
                    <i class="fa-solid fa-user"></i>
                </div>
                <div>
                    <input id="username" type="text" class="form-control w-100" placeholder="Nombres" aria-label="Username" aria-describedby="basic-addon1">
                </div>
            </div>

            <div class="input-group mt-3">
                <div class="input-group-text">
                    <i class="fa-solid fa-user"></i>
                </div>
                <div>
                    <input id="username" type="text" class="form-control w-100" placeholder="Apellidos" aria-label="Username" aria-describedby="basic-addon1">
                </div>
            </div>


            <div class="input-group mt-3">
                <div class="input-group-text">
                <i class="fa-solid fa-id-card"></i>
                </div>
                <div>
                    <input id="username" type="text" class="form-control w-100" placeholder="D.N.I" aria-label="Username" aria-describedby="basic-addon1">
                </div>
            </div>


            <div class="input-group mt-3 w-100">
                <div class="input-group-text">
                <i class="fa-solid fa-envelope"></i>
                </div>
                <div>
                    <input id="username" type="text" class="form-control " placeholder="Correo electronico" aria-label="Username" aria-describedby="basic-addon1">
                </div>
            </div>

            <div class="input-group mt-3">
                <div class="input-group-text"id="bg_span">
                    <i class="fa-solid fa-lock"></i>
                </div>
                <div>
                    <input id="password" type="password" class="form-control w-100" placeholder="Contraseña" aria-label="Username" aria-describedby="basic-addon1">
                </div>
            </div>
            
           

                <div class="btn btn-secondary text-black fw-semibold shadow-sm w-100 mt-5"id="login">Registrar</div>
                   
                
            </div>
        </div>
    </div>






    <footer class="py-5 bg-dark mt-4">
        <?php include(app_path() . "/../resources/views/template/footer.php"); ?>
    </footer>



</body>

</html>