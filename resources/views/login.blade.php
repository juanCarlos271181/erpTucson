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

  <section class="vh-100" id="">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
    
        <div class="col-md-9 col-lg-6 col-xl-5"id="imagenForm">
          <img src="./img/almacen-registrate.webp" class="img-fluid" alt="Sample image">
        </div>
        <br>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
       
        <div>

        <div class="col-md-9 col-lg-6 col-xl-5"id="imagenCandado">
          <img src="./img/candado.png" class="img-fluid" alt="Sample image">
        </div>
        
            <div class="form-outline mb-4">
              <input type="text" id="form3Example3" class="form-control form-control-lg"
                placeholder="Usuario" />
              <label class="form-label" for="form3Example3"></label>
             </div>
             


            <div class="form-outline mb-3">
              <input type="password" id="form3Example4" class="form-control form-control-lg"
                placeholder="Contraseña" />

              <label class="form-label" for="form3Example4"></label>
            </div>

            <div class="d-flex justify-content-between align-items-center">

              <div class="form-check mb-0">
                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                <label class="form-check-label" for="form2Example3">
                Recordar
                </label>
              </div>
              <a href="./registro_usuario" class="text-body">Registrarme</a>
            </div>

            <div class="text-center text-lg-start mt-4 pt-2">
              <button type="button" name="register" class="btn btn-dark btn-lg"
                onclick="window.location='./menu_principal'"
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