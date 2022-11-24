<!DOCTYPE html>
<html lang="es">

<head>
  <?php include(app_path() . "/../resources/views/template/head.php"); ?>
</head>



<header>
  <?php include(app_path() . "/../resources/views/template/header.php"); ?>
</header>

<body>

  <div class="d-flex justify-content-center mt-3">
    <img src="./img/usuariofreepik.png" class="img-fluid" alt="Sample image" style="height: 7rem">
  </div>
  <div class="d-flex justify-content-center fs-1 fw-bold mt-4">
    Login
  </div>


  <form class="container2 mt-3" id="prueba">

    <div class="row d-flex justify-content-center">
      <div class="formulario_grupo col-5 mb-3" id="input__usuario">
        <label for="exampleInputEmail1" class="form-label">Usuario</label>
        <div class="formulario_grupo-input">
          <input type="text" class="form-control" name="usuario" id="usuario" placeholder="juan123" aria-describedby="emailHelp">
          <i class="formulario_validacion-estado fas fa-times-circle"></i>
        </div>
        <div id="emailHelp" class="form-text"></div>
        <p class="formulario_input-error">El usuario debe contener de 4 a 16 digitos</p>
      </div>
      <div class="formulario_grupo col-5 mb-3" id="input__nombre">
        <label for="exampleInputEmail1" class="form-label">Nombre</label>
        <div class="formulario_grupo-input">
          <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Juan Mejias" aria-describedby="emailHelp">
          <i class="formulario_validacion-estado fas fa-times-circle"></i>
        </div>
        <div id="emailHelp" class="form-text"></div>
        <p class="formulario_input-error">El usuario debe contener de 4 a 16 digitos</p>
      </div>
      <div class="row d-flex justify-content-center">
        <div class="formulario_grupo col-5 mb-3" id="input__password">
          <label for="exampleInputEmail1" class="form-label">Contraseña</label>
          <div class="formulario_grupo-input">
            <input type="password" class="form-control" name="password" id="password" aria-describedby="emailHelp">
            <i class="formulario_validacion-estado fas fa-times-circle"></i>
          </div>
          <div id="emailHelp" class="form-text"></div>
          <p class="formulario_input-error">Ambas contraseñas deben ser iguales</p>
        </div>
        <div class="formulario_grupo col-5 mb-3" id="input__password2">
          <label for="exampleInputEmail1" class="form-label">Repetir Contraseña</label>
          <div class="formulario_grupo-input">
            <input type="password" class="form-control" name="password2" id="password2" aria-describedby="emailHelp">
            <i class="formulario_validacion-estado fas fa-times-circle"></i>
          </div>
          <div id="emailHelp" class="form-text"></div>
          <p class="formulario_input-error">Ambas contraseñas deben ser iguales</p>
        </div>
        <div class="row d-flex justify-content-center">
          <div class="formulario_grupo col-5 mb-3" id="input__correo">
            <label for="exampleInputEmail1" class="form-label">Correo Electónico</label>
            <div class="formulario_grupo-input">
              <input type="email" class="form-control" name="correo" id="correo" placeholder="Correo@correo" aria-describedby="emailHelp">
              <i class="formulario_validacion-estado fas fa-times-circle"></i>
            </div>
            <div id="emailHelp" class="form-text"></div>
            <p class="formulario_input-error">El usuario debe contener de 4 a 16 digitos</p>
          </div>
          <div class="formulario_grupo col-5 mb-3" id="input__telefono">
            <label for="exampleInputPassword1" class="form-label">Teléfono</label>
            <div class="formulario_grupo-input">
              <input type="text" class="form-control" name="telefono" id="telefono" placeholder="1164369132">
              <i class="formulario_validacion-estado fas fa-times-circle" id="icon"></i>
            </div>
            <p class="formulario_input-error">El teléfono debe contener un maximo de 14 digitos</p>
          </div>

          <div class="mb-3 form-check" id=contenedorCheck>
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1" id="labelRecordar">Recordar Contraseña</label>
          </div>
        </div>

        <div class="formulario__mensaje d-flex justify-content-center mt-3" id="formulario__mensaje">
          <p><i class="fas fa-exclamation-triangle"></i><b>Error: </b>Por favor completar el formulario correctamente!</p>
        </div>

        <div class="loginPrueba d-flex justify-content-center mt-2">
          <button type="submit" class="btn btn-primary" id="btnEnviar">Enviar</button>
          <p class="formulario__mensaje-exito mt-3" id="formulario__mensaje-exito">Formulario enviado exitosamente</p>
        </div>



  </form>
<br>
<br>
<br>


  <script src="js/prueba.js"></script>







</body>



</html>