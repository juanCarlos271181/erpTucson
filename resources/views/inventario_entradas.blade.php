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
<div class="tituloEntrada">
      <h4>Nueva Entrada</h4>
</div>
<br>

<div class="container">
        
        <div class="row">
 
 
        <div class="col-4">
        <input type="text" class="form-control" placeholder="N° de Documento" aria-label="Recipient's username" aria-describedby="basic-addon2"> 
        </div>
         
        <div class="col-4">
        <input type="date" class="form-control" placeholder="Fecha de Documento" aria-label="Recipient's username" aria-describedby="basic-addon2"> 
        </div>

                
</div>
</div>
<br>
 

<hr>

    <div class="container">
        
        <div class="row">
 
 
        <div class="col">
        <input type="text" class="form-control" placeholder="Documento Proveedor" aria-label="Recipient's username" aria-describedby="basic-addon2"> 
        </div>
         
        <div class="col">
        <input type="text" class="form-control" placeholder="Nombre Proveedor" aria-label="Recipient's username" aria-describedby="basic-addon2"> 
        </div>
<br>
        <div class="col">
        <button type="button" class="btn btn-secondary">Buscar</button>
        </div>

                
</div>

   <br>  
   
</div>
          
</div>

    <div class="container">
        
       <div class="row">


       <div class="col">
       <input type="text" class="form-control" placeholder="Código de Producto" aria-label="Recipient's username" aria-describedby="basic-addon2"> 
       </div>
        
       <div class="col">
       <input type="text" class="form-control" placeholder="Descripción Producto" aria-label="Recipient's username" aria-describedby="basic-addon2"> 
       </div>
<br>
       <div class="col">
       <button type="button" class="btn btn-secondary">Buscar</button>
       </div>

       <div class="col">
       <input type="text" class="form-control" placeholder="Precio de Compra" aria-label="Recipient's username" aria-describedby="basic-addon2"> 
       </div>

       <div class="col">
       <input type="text" class="form-control" placeholder="Precio de Venta" aria-label="Recipient's username" aria-describedby="basic-addon2"> 
       </div>

       <div class="col">
       <select class="form-select" size="1" aria-label="size 3 select example">
       </div>
<br>
<br>
<div class="col">
  <option selected>Cantidad</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>

        </select>
        </div>

       </div>


    </div>
    </div>
    <br>        

    <span class="placeholder col-12 bg-secondary"></span>

    <br>
    <br>
    <br>

<table class=" table table-striped table-hover">
        <thead>
            <tr class="table-primary">
                <th scope="col">Código</th>
                <th scope="col">Descripción</th>
                <th scope="col">Precio Compra</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Sub Total</th>
                
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">000001</th>
                <td>Rosseto 57x57</td>
                <td>24JK</td>
                <td>420.000<img class="imagen" src=""></td>
                <td><img class="imagen"src=""></td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td></td>
                <td></td>
                <td><img class="imagen" src=""></td>
                <td><img class="imagen"src=""></td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td colspan=""></td>
                <td></td>
                <td><img class="imagen" src=""></td>
                <td><img class="imagen"src=""></td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td colspan=""></td>
                <td></td>
                <td><img class="imagen"src=""></td>
                <td><img class="imagen"src=""></td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td colspan=""></td>
                <td></td>
                <td><img class="imagen"src=""></td>
                <td><img class="imagen"src=""></td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td colspan=""></td>
                <td></td>
                <td><img class="imagen"src=""></td>
                <td><img class="imagen"src=""></td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td colspan=""></td>
                <td></td>
                <td><img class="imagen"src=""></td>
                <td><img class="imagen"src=""></td>
            </tr>
            
            </tr>
        </tbody>
    </table>
<br>
    <div class="text-center text-lg-center mt-4 pt-2">
              <button type="button" id="login" class="btn btn-primary btn-lg"                
                style="padding-left: 2.5rem; padding-right: 2.5rem;">Guardar Entrada</button>
            </div>
            
            <br>

            <footer class="py-4 mt-4"id="bgfooterLogin">
        <?php include(app_path() . "/../resources/views/template/footer.php"); ?>
    </footer>



</body>

</html>