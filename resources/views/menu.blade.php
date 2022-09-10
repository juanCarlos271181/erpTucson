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
   
   <i class="fa-solid fa-house"></i>

<div class=containerMenu style="height:400px">
<div class="d-flex justify-content-center" role="group">

<div class="col-6">
<a href="./inventario_entradas"><button type="button" class="btnMenu">Entradas</button>
</div>
<div class="col-6">
<a href="./inventario_salidas"> <button type="button" class="btnMenu"style="">Salidas</button>
</div>
<a href="./inventario_productos"> <button type="button" class="btnMenu"style="">Productos</button>

</div>

 <div class="d-flex justify-content-center" role="group">
 <div class="col-6">
     <a href="./toma_inventario"><button type="button" class="btnMenu"style="">Toma de Inventario</button>
     </div>
     <div class="col-6">
     <a href="./movimientos_almacen"> <button type="button" class="btnMenu"style="">Movimientos entre Almacen</button>
     </div>
     <a href="./configuracion"> <button type="button" class="btnMenu"style="">Configuración</button>
 </div>
 </div>
<br>

    <button><i class="fa-thin fa-right-to-bracket"></i></button>
    <button><i class="fa-thin fa-right-to-bracket"></i></button>
    
     
    <footer class="py-5 bg-dark">
        <?php include(app_path()."/../resources/views/template/footer.php");?>
    </footer>



    <script src="https://kit.fontawesome.com/85fec555d4.js"></script>
</body>

   