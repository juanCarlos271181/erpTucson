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
            <div style="display:inline">
                <img src="./img/usuario.50.png" >
            </div>
            <div style="display:inline">
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
 


<div id="usuario_edit_popup" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
        <?php 
$demo="Ciencia ficción perdida en el espacio"; //ISO-8859-1 String àéí
echo "UTF-8 Encoded String: ";
echo utf8_decode($demo) ."<br>";
echo "UTF-8 Decoded String: ";
echo utf8_encode(utf8_decode($demo)) ."<br>";
echo "UTF-8 Encoded String from the decoded: ";
echo utf8_decode(utf8_encode(utf8_decode($demo))) ."<br>";
?>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>

</body>


</html>