<!DOCTYPE html>
<html lang="es">

<head>
    
        <?php include(app_path()."/../resources/views/template/head.php");?>
    
</head>

<body>



  
      <header>
           <?php include(app_path()."/../resources/views/template/header.php");?>
      </header>
      
     


  <section class="vh-100" id="">
    <div class="container-fluid h-custom">
      <br><br>
      <div class="row d-flex justify-content-center h-100">
    
        <div class="col-md-9 col-lg-6 col-xl-5"id="imagenRegistro">
          
          <img src="./img/ceramicos/home_oficce2.jpeg" class="img-registro" alt="Sample image">
         
        </div>
        <br>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

        <div class="col-md-9 col-lg-6 col-xl-5"id="imagenIngresar">
          <img src="./img/registro.png" class="img-fluid" alt="Sample image">
        </div>

        

        <form method="post">

        <div class="form-outline mb-4">
              <input type="text" id="form3Example3" class="form-control form-control-lg"
                placeholder="Nombre y Apellido" />
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
                
              
              </div>
              
            </div>
          <div class="d-flex justify-content-around">
            <div class="text-center text-lg-start mt-4 pt-2">
              <button type="submit" name="register" class="btn btn-dark btn-lg"
              onclick="window.location='./index'"
                style="padding-left: 2.5rem; padding-right: 2.5rem;">Registrar</button>
            </div>
            
            
            
            <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" name="register" class="btn btn-primary btn-lg"
            onclick="window.location='./registro_usuario'"
               style="padding-left: 2.5rem; padding-right: 2.5rem;">Modificar</button>


            </div>
</div>
        </form>
        </div>
      </div>
    </div>


</section>
  
    <footer class="py-5 bg-dark">
    
 <?php include(app_path()."/../resources/views/template/footer.php");?>
    
    </footer>
</body>

</html>
