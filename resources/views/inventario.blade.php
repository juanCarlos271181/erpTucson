<?php include("Env.php");?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include(app_path()."/../resources/views/template/head.php");?>

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

    

<style>
    select.tc_select {
        width:20%;
        margin:2px;
        font-size: small;
    }    
    label.tc_select{
        width:7%;
        text-align: right;
        font-size: small;
    }
    TR.odd TD{
        background-color:azure;
        font-size: small;
    }
    TR.even TD{
        font-size: small;
    }
    select {
        font-size: small;
    }

</style>




<div class="refine-datatable">
    <div class="container-square" style="margin:20px;border: 20px;">
        <div class="refine-group">
            <div style="display:flex">
                <label class="tc_select"></label><select class="tc_select" id="superrubro_filter"></select><br>
                <label class="tc_select"></label><select  class="tc_select" id="almacen_filter"></select>
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
        </tr>
    </thead>
    <tbody>

    </tbody>
    </table>

</div>


<footer class="py-5 bg-dark">
    <?php include(app_path()."/../resources/views/template/footer.php");?>
</footer>  
 

</body>


</html>