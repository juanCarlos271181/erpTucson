
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


<body class=" contenedorLogin">
    <div class="contenedor d-flex justify-content-center aling-items-center "style= "height:490px">
        <div class="p-5 mt-4 text-dark rounded-2"  style="width:25rem"id="containerLogin">
            <div class="d-flex justify-content-center">
                <img src="./img/usuariofreepik.png" class="img-fluid" alt="Sample image" style="height: 7rem">
            </div>
            <div class="d-flex justify-content-center fs-1 fw-bold">
                Login
            </div>
            <div class="input-group mt-2">
                <div class="input-group-text "id="bgLogin">
                    <i class="fa-solid fa-user"></i>
                </div>
                <div>
                    <input id="username" type="text" name="usuario" class="form-control w-100" placeholder="Usuario" aria-label="Username" aria-describedby="basic-addon1">
                </div>
            </div>

            <div class="input-group mt-2">
                <div class="input-group-text"id="bgLogin">
                    <i class="fa-solid fa-lock"></i>
                </div>
                <div>
                    <input id="password" type="password" name="contraseña" class="form-control w-100" placeholder="Contraseña" aria-label="Username" aria-describedby="basic-addon1">
                </div>
            </div>
            
            <div class="d-flex justify-content-around mt-4">
                <div class="d-flex aling-items-center gap-2">
                    <input class="form-check-input" type="checkbox"/>
                    <div style="font-size: 0.9rem"> Recordar contraseña</div>
                </div>
                <div>
                    <a href="./registro_usuario2" class="text-decoration-none text-dark fw-semibold fst-italic">Registrarme?</a>
                </div>
                </div>
               <br>

                <div class="btn btn-secondary text-black fw-semibold shadow-sm w-100"id="login">Login</div>
                
                
            </div>
        </div>
    </div>




 <br>
 <br>
 <br>






    <footer class="py-2 mt-4"id="bgfooterLogin">
        <?php include(app_path() . "/../resources/views/template/footer.php"); ?>
    </footer>



</body>

</html>