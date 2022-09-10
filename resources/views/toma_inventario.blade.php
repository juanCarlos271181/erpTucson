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

<div class="tomaInventario">
<h4>Toma de Inventario</h4>
</div>

<br>
<div class="container">
        
        <div class="d-flex justify-content-center row">
 
 
        <div class="d-flex col">
            <label>Fecha Inicio:</label>
        <input type="date" class="form-control" placeholder="Fecha Inicio:" aria-label="Recipient's username" aria-describedby="basic-addon2"> 
        </div>
         
        <div class="d-flex col">
        <label>Fecha Final:</label>
        <input type="date" class="form-control" placeholder="Fecha Final:" aria-label="Recipient's username" aria-describedby="basic-addon2"> 
        </div>

        <div class="col">
        <button type="button" class="btn btn-secondary">Buscar</button>
        </div>

                
</div>


</div>
<br>
<span class="placeholder col-12 bg-secondary"></span>

<br>
<div class="col-4">
<div class="input-group">
  <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
  <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04"></button>
</div>
</div>

<br>
<br>
<br>








<div class="modal-body">
  <h5>Popover in a modal</h5>
  <p>This <a href="#" role="button" class="btn btn-secondary" data-bs-toggle="popover" title="Popover title" data-bs-content="Popover body content is set in this attribute.">button</a> triggers a popover on click.</p>
  
  <span class="placeholder col-12 bg-secondary"></span>

  <h5>Tooltips in a modal</h5>
  <p><a href="#" data-bs-toggle="tooltip" title="Tooltip">This link</a> and <a href="#" data-bs-toggle="tooltip" title="Tooltip">that link</a> have tooltips on hover.</p>
</div>








<footer class="py-4 bg-dark">
    <?php include(app_path()."/../resources/views/template/footer.php");?>
</footer>

</body>
</html>