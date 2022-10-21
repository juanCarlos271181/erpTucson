<!DOCTYPE html>
<html lang="es">
    <head>
    <?php include(app_path()."/../resources/views/template/head.php");?>
    
    </head>
    <body>
      <header>


      <?php include(app_path()."/../resources/views/template/header.php");?> 
       
     </header>
     
<br><br>
     
     <table class=" table table-striped table-hover">
        <thead>
       
            <tr class="table-primary">
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Email</th>
                <th scope="col">Telefono</th>
                <th scope="col">Rol</th>
                <th scope="col">Accion</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        
        
            <tr>
                <th scope="row">01</th>
                <td>Juan Carlos</td>
                <td>Mejias</td>
                <td>juancarlos996@gmail.com</td>
                <td>1164369090</td>
                <td>Supervisor</td>
                <td>
                <a href="./perfil_usuario" class="button"><img class="imagen" src="./img/eye.png"style="height: 30px;width:30px"><a/>
                <a href="./perfil_usuario" class="button"><img class="imagen" src="./img/lapiz.png"style="height: 30px;width:30px"><a/>
                <a href="./perfil_usuario" class="button"><img class="imagen" src="./img/papelera3.png"style="height: 30px;width:30px"></td><a/>
                
                
                       
            </tr>
            <tr>
                <th scope="row">02</th>
                <td>Roger</td>
                <td>Muñoz</td>
                <td>Roger.munoz@gmail.com</td>
                <td>1164547233</td>
                <td>Administrador</td>
                <td>
                <a href="./perfil_usuario" class="button"><img class="imagen" src="./img/eye.png"style="height: 30px;width:30px"><a/>
                <a href="./perfil_usuario" class="button"><img class="imagen" src="./img/lapiz.png"style="height: 30px;width:30px"><a/>
                <a href="./perfil_usuario" class="button"><img class="imagen" src="./img/papelera3.png"style="height: 30px;width:30px"></td><a/>
                
                
                       
            </tr>

            <tr>
                <th scope="row">03</th>
                <td>Luisa Gabriela</td>
                <td>Romero</td>
                <td>luisagabrielar@gmail.com</td>
                <td>1164234522</td>
                <td>Vendedora</td>
                <td>
                <a href="./perfil_usuario" class="button"><img class="imagen" src="./img/eye.png"style="height: 30px;width:30px"><a/>
                <a href="./perfil_usuario" class="button"><img class="imagen" src="./img/lapiz.png"style="height: 30px;width:30px"><a/>
                <a href="./perfil_usuario" class="button"><img class="imagen" src="./img/papelera3.png"style="height: 30px;width:30px"></td><a/>
                
                
                       
            </tr>
            <tr>
                <th scope="row">04</th>
                <td>Gabriela Stephania</td>
                <td>Mejias</td>
                <td>gaby@gmail.com</td>
                <td>1164346538</td>
                <td>Analista</td>
                <td>
                <a href="./perfil_usuario" class="button"><img class="imagen" src="./img/eye.png"style="height: 30px;width:30px"><a/>
                <a href="./perfil_usuario" class="button"><img class="imagen" src="./img/lapiz.png"style="height: 30px;width:30px"><a/>
                <a href="./perfil_usuario" class="button"><img class="imagen" src="./img/papelera3.png"style="height: 30px;width:30px"></td><a/>
                
                
                       
            </tr>
            <tr>
                <th scope="row">05</th>
                <td>Victoria Adela</td>
                <td>Mejias</td>
                <td>viky@gmail.com</td>
                <td>1164369090</td>
                <td>Vendedora</td>
                <td>
                <a href="./perfil_usuario" class="button"><img class="imagen" src="./img/eye.png"style="height: 30px;width:30px"><a/>
                <a href="./perfil_usuario" class="button"><img class="imagen" src="./img/lapiz.png"style="height: 30px;width:30px"><a/>
                <a href="./perfil_usuario" class="button"> <img class="imagen" src="./img/papelera3.png"style="height: 30px;width:30px"></td><a/>
                
                
                       
            </tr>

</table>
<br><br>
        
<footer class="py-4 mt-4"id="bgfooterLogin">
        <?php include(app_path() . "/../resources/views/template/footer.php"); ?>
    </footer>



</body>

</html>