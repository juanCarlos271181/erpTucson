<!DOCTYPE html>
<html lang="es">
    
    <head>
    <?php include(app_path()."/../resources/views/template/head.php");?>
    </head>

    <body>


      <header>
      <?php include(app_path()."/../resources/views/template/header.php");?>
      </header>

  

    
    </nav>


<div class="datos_cliente">
    <div class="accion_cliente">
        <h4>Datos del Cliente</h4>
<a href="#"class="btn btn-primary">Nuevo Cliente</a>
    </div>
</div>


      <div class="row">
  <div class="col">
    <input type="text" class="form-control" placeholder="NIT" aria-label="First name">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="Nombre" aria-label="Last name">
  </div>
</div>
<div class="col">
    <input type="number" class="form-control" placeholder="Telefono" aria-label="Last name">
  </div>
</div>
<div class="col">
    <input type="text" class="form-control" placeholder="Direccion" aria-label="Last name">
  </div>
</div>



<footer class="py-4 mt-4"id="bgfooterLogin">
        <?php include(app_path() . "/../resources/views/template/footer.php"); ?>
    </footer>



</body>

</html>





     