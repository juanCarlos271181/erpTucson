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
    <script type="text/javascript" src="js/usuarios.js"></script>
  
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
                <label class="tc_select"></label><select  class="tc_select" id="rol_filter"></select>
            </div>
        </div>    
    </div>
    <table id="usuarios_table">
    <thead>
        <tr class="table-primary">
            <th>Username </th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>DNI</th>
            <th>Telefono</th>
            <th>Email</th>
            <th>Rol</th>
            <th>Accion</th>
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