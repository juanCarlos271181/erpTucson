<!DOCTYPE html>
<html lang="es">
<head>    
    <?php include(app_path()."/../resources/views/template/head.php");?>
    <script type="text/javascript" src="assets/jquery-1.11.2/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="assets/jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/usuario_registro.js"></script>
</head>
<body>
  <header>
        <?php include(app_path()."/../resources/views/template/header.php");?>
  </header>
 
<br>

  <section class="vh-100" id="">
    <div class="container-fluid h-custom">
      <br><br>
      <div class="row d-flex justify-content-center align-items-center">
    
        <div class="col-md-5 col-lg-5 col-xl-5"id="imagenForm" class="form-control form-control-lg">
          <img src="./img/ceramicos/home_oficce2.jpeg" width="60%" class="img-fluid" alt="Sample image">
        </div>
        <br>
        <div class="row d-flex justify-content-center col-md-8 col-lg-6 col-xl-4 offset-xl-1">

        <div class=" d-flex justify-content-center col-md-9 col-lg-8 col-xl-6 "id="imagenForm">
          <img src="./img/registro.png" class="img-fluid" alt="Sample image">
        </div>

        <div >

        <div class="form-outline ">
              <input type="text" id="user_nombre" class="form-control form-control-lg"
                placeholder="Nombre(s)" />
              <label class="form-label" for="user_nombre"></label>
        </div>
        <div class="form-outline ">
              <input type="text" id="user_apellido" class="form-control form-control-lg"
                placeholder="Apellido(s)" />
              <label class="form-label" for="user_apellido"></label>
        </div>

        <div class="form-outline ">
              <input type="text" id="user_dni" class="form-control form-control-lg"
                placeholder="DNI" />
              <label class="form-label" for="user_dni"></label>
        </div>

        <div class="form-outline ">
              <input type="text" id="user_email" class="form-control form-control-lg"
                placeholder="Correo Electrónico"/>
              <label class="form-label" for="user_email"></label>
        </div>
        <div class="form-outline ">
            <input type="password" id="user_password" class="form-control form-control-lg"
              placeholder="Contraseña" />
            <label class="form-label" for="user_password"></label>
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
                style="padding-left: 2.5rem; padding-right: 2.5rem;">Ingresar</button>
            </div>
        </form>
        </div>
      </div>
    </div>
    </div>


   

    <footer class="py-5 bg-dark">
      <?php include(app_path()."/../resources/views/template/footer.php");?>
    </footer> 
</body>


