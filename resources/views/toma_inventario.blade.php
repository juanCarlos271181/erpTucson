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
<br>

<div class="container">
        
        <div class="d-flex justify-content-center row">
 
 
        <div class="d-flex col">
              <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
            <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Descargar.xls</button>
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
<br>
<br>



<span class="placeholder col-12 bg-secondary"></span>

<table class=" table table-striped table-hover">
        <thead>
            <tr class="table-primary">
                <th scope="col">Código</th>
                <th scope="col">Descripción</th>
                <th scope="col">Lote</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Unidad Medida</th>
                <th scope="col">Almacen</th>
                <th scope="col">Entrada</th>
                <th scope="col">Salida</th>
                <th scope="col">Stock Actual</th>
                <th scope="col">Total Ingreso</th>
                <th scope="col">Total Egreso</th>
                
                
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">000001</th>
                <td>Rosseto 57x57</td>
                <td>24JK</td>
                <td>420.000</td>
                <td>1.8</td>
                <td>Pilar</td>
                <td>20.000</td>
                <td>310.000</td>
                <td>130.000</td>
                <td>20.000</td>
                <td>130.000</td>
            </tr>
          
        </tbody>
    </table>

    

    
    <footer class="py-4 mt-4" id="bgfooterLogin">
        <?php include(app_path() . "/../resources/views/template/footer.php"); ?>
    </footer>



</body>

</html>