<?php include("Env.php");?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include(app_path()."/../resources/views/template/head.php");?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="assets/jquery-ui-1.11.4.custom/jquery-ui.min.css"/>
    <link type="text/css" rel="stylesheet" href="assets/DataTables-1.10.7/css/jquery.dataTables.css"/>
    <script type="text/javascript" src="assets/jquery-1.11.2/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="assets/jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
    <script type="text/javascript" src="assets/DataTables-1.10.7/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/inventario.js"></script>
  
</head>

<body>


    <header>
        <?php include(app_path()."/../resources/views/template/header.php");?>                   
    </header>

    <i class="fa fa-expeditedssl" style="font-size:24px"></i>
    <i class="fa-regular fa-key"></i>

<div class="d-flex container">

<div class="card bg-primary" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Movimientos Almacen</h5>
  </div>
</div>

<div class="card bg-success" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Toma de Inventario</h5>
  </div>
</div>

<div class="card bg-danger" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Abastecimiento</h5>
  </div>
</div>

<div class="card bg-warning" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Abastecimiento</h5>
  </div>
</div>

</div>





<footer class="py-4 mt-4"id="bgfooterLogin">
        <?php include(app_path() . "/../resources/views/template/footer.php"); ?>
    </footer>








