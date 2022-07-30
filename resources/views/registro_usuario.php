<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/proyectoTucson/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="/proyectoTucson/assets/css/styles.css">
  <link rel="icon" type="image/x-icon" href="../img/logoBlue.png" style="height: 30px" />
  <title>tucPrototipo</title>

</head>

<body>



  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="navBar">
      <div class="container">
        <div class="logo" id="logoTucson">
        <img src="../img/logoBlue.png" alt="" style="width: 55%;">
        </div>
        <a class="navbar-brand" href="#!">REGISTRO USUARIO</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
            class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="./index.php">Home</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="./login.php">Login</a></li>
            

          </ul>
        </div>
      </div>
    </nav>
  </header>
<br>

  <section class="vh-100" id="">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
    
        <div class="col-md-9 col-lg-6 col-xl-5"id="imagenForm">
          <img src="../img/ceramicos/home_oficce2.jpeg" class="img-fluid" alt="Sample image">
        </div>
        <br>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
       
        <form method="post">

        <div class="form-outline mb-4">
              <input type="text" id="form3Example3" class="form-control form-control-lg"
                placeholder="Usuario" />
              <label class="form-label" for="form3Example3"></label>
             </div>

        <div class="form-outline mb-4">
              <input type="text" id="form3Example3" class="form-control form-control-lg"
                placeholder="Usuario" />
              <label class="form-label" for="form3Example3"></label>
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
        <div class="m-0 text-center text-white">
            <img src="./img/logo-2.png" alt="">
            
            <div class="container">
                <p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p>
            </div>
    </footer>
</body>

</html>
