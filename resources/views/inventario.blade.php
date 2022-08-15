<?php include("Env.php");?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include(app_path()."/../resources/views/template/head.php");?>
    <script type="text/javascript" src="js/inventario.js"></script>  
</head>

<body>

    <header>
        <?php include(app_path()."/../resources/views/template/header.php");?>                   
    </header>
    
<div class="refine-datatable">
    <div class="container-square" style="margin:20px;border: 20px;">
        <div class="refine-group">
        <div style="display:inline">
                <img src="./img/inventario.50.png" >
            </div>
            <div style="display:inline">
                <label class="tc_select"></label><select  class="tc_select" id="almacen_filter"></select>
                <label class="tc_select"></label><select class="tc_select" id="superrubro_filter"></select>
                <label class="tc_select"></label><select  class="tc_select" id="rubro_filter"></select>
                <label class="tc_select"></label><select  class="tc_select" id="marca_filter"></select>
            </div>
        </div>    
    </div>
    <table id="inventario_table">
    <thead>
        <tr class="table-primary">
            <th>Código </th>
            <th>Artículo</th>
            <th>idMarca</th>
            <th>Marca</th>
            <th>idSuper Rubro</th>
            <th>Super Rubro</th>
            <th>idRubro</th>
            <th>Rubro</th>
            <th>Lote</th>
            <th>Stock Total</th>
            <th>Cantidad</th>
            <th>Almacen</th>
            <th>QR</th>
        </tr>
    </thead>
    <tbody>

    </tbody>
    </table>
    <div id="qrcode"></div>
</div>


<footer class="py-5 bg-dark">
    <?php include(app_path()."/../resources/views/template/footer.php");?>
</footer>  
 

</body>


</html>