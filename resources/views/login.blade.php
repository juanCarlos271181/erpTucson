<!DOCTYPE html>
<html lang="es">

<head>
  <?php include(app_path()."/../resources/views/template/head.php");?>
</head>

<body>
  <header>
    <?php
    include(app_path()."/../resources/views/template/header.php");
    ?>
  </header>
<br>

  <section class="vh-100" id="bgLogin">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
    
        <div class="col-md-9 col-lg-6 col-xl-5"id="imagenForm">
          <img src="./img/almacen-registrate.webp" class="img-fluid" alt="Sample image">
        </div>
        <br>
        <div class="d-flex justify-content-center  col-md-8 col-lg-8 col-xl-4 offset-xl-1">
       
        <div> 

        <div class="col-xl-4 "id="imagenCandado">
          <img src="./img/candado.png" class="img-fluid" alt="Sample image">
          </div>

  
        
           
<div class="input-group mb-3">
  <span class="input-group-text" id="username">@</span>
  <input type="text" class="form-control" placeholder="Usuario" aria-label="Username" aria-describedby="basic-addon1">
  <label class="form-label" for="username"></label>
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1"><i class="fa fa-expeditedssl" style="font-size:15px"></i></span>
  <input type="password" class="form-control" placeholder="Contraseña" aria-label="Username" aria-describedby="basic-addon1">
  <label class="form-label" for="password"></label>
</div>
             


            <div class="d-flex justify-content-between align-items-center">
              <a href="./registro_usuario" class="text-body">Registrarme</a>
            </div>

            <div class="text-center text-lg-start mt-4 pt-2">
              <button type="button" id="login" class="btn btn-dark btn-lg"                
                style="padding-left: 2.5rem; padding-right: 2.5rem;">Ingresar</button>
            </div>
         </div>
        </div>
      </div>
    </div>
  
    <br>
    
    <footer class="py-5 bg-dark">
      <?php include(app_path()."/../resources/views/template/footer.php");?>
    </footer>  

      </div>
  </section>
</body>