<!DOCTYPE html>
<html lang="es">
    <head>
        <?php include(app_path()."/../resources/views/template/head.php");?>    
    </head>
    <body>
        <header>
            <?php include(app_path()."/../resources/views/template/header.php");?>       
        </header>
    <br>
    <!--div class="row" style="heightx:400px"-->



    <div class="tituloEntrada">
      <h4>Menu usuarios</h4>
</div>

    <div class="d-flex  justify-content-center aling-items-center contenedorMenu " style=" height:420px">
        <div class="d-flex justify-content-center aling-items-center contenedorMenu col-2 ">
            <div class="col-12" id="card_usuario">
                <div class="card" style="width:12rem; padding:12px">
                    <a href="./" class="button">
                        <img src="./img/freeListadoUsuario.png" class="card-img-top imagen20" alt="imagen de tarjeta"id="img_tarjeta">
                    </a>
                    <div class="card-body">
                        <h6>Lista usuarios</h6>
                    </div>
                </div>
            </div>
        <br>
       
        <br>
        <div class="col-12" id="card_inventario">
                <div class="card" style="width:12rem; padding:12px">
                    <a href="./" class="button">
                        <img src=" ./img/freeCrearUsuario.png" class="card-img-topUser imagen20" alt="imagen de tarjeta">
                    </a>
                    <div class="card-body">
                        <h6>Crear usuarios</h6>     
                    </div>
                </div>
            </div>
            <br>
            <div class="col-12" id="card_inventario">
                <div class="card" style="width:12rem; padding:12px">
                    <a href="./menu" class="button">
                        <img src=" ./img/freeRol.png" class="card-img-topUser imagen20" alt="imagen de tarjeta">
                    </a>
                    <div class="card-body">
                        <h6>Tipos usuario</h6>     
                    </div>
                </div>
            </div>
<br>
          
            <br>
         
        <br>
          
        
        <br>
           
        
        </div> 


     
<br>

</div> 

        <div id="content1" class="contenedorMenu col-9">
            &nbsp;
        </div>
    <!--/div-->
    <footer class="py-4 mt-4"id="bgfooterLogin">
        <?php include(app_path() . "/../resources/views/template/footer.php"); ?>
    </footer>

    

</body>

</html>