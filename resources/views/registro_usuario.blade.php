<!DOCTYPE html>
<html lang="es">

<head>
    
        <?php include(app_path()."/../resources/views/template/head.php");?>
    
</head>

<body>



  
      <header>
           <?php include(app_path()."/../resources/views/template/header.php");?>
      </header>
      <div class="tituloPrincipal">
       <h4>REGISTRO DE USUARIOS</h4>
    </div>
<br>

  <section class="vh-100" id="">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
    
        <div class="col-md-9 col-lg-6 col-xl-5"id="imagenForm">
          <img src="./img/ceramicos/home_oficce2.jpeg" class="img-fluid" alt="Sample image">
        </div>
        <br>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

        <div class="col-md-9 col-lg-6 col-xl-5"id="imagenForm">
          <img src="./img/ceramicos/registro.png" class="img-fluid" alt="Sample image">
        </div>

        <form method="post">

        <div class="form-outline mb-4">
              <input type="text" id="form3Example3" class="form-control form-control-lg"
                placeholder="Nombre y apellido" />
              <label class="form-label" for="form3Example3"></label>
             </div>

        <div class="form-outline mb-4">
              <input type="text" id="form3Example3" class="form-control form-control-lg"
                placeholder="DNI" />
              <label class="form-label" for="form3Example3"></label>
             </div>
        
            <div class="form-outline mb-4">
              <input type="text" id="form3Example3" class="form-control form-control-lg"
                placeholder="Correo Electrónico"/>
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
                  To remember
                </label>
              </div>
              <a href="#!" class="text-body">you forgot password?</a>
            </div>

            <div class="text-center text-lg-start mt-4 pt-2">
              <button type="submit" name="register" class="btn btn-dark btn-lg"
                style="padding-left: 2.5rem; padding-right: 2.5rem;">Ingresar al Sistema</button>
            </div>
        </form>
        </div>
      </div>
    </div>


    <footer class="py-5 bg-dark">
    
 <?php include(app_path()."/../resources/views/template/footer.php");?>
    
    </footer>
</body>

</html>
