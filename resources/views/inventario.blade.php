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
    
    <script type="text/javascript">
        let path = '<?=Env::$API;?>';
        //alert(path);
        $(document).ready(function () {
            function fillDropBox(id, arraydata, defaultValue, label) {
                $(id).empty();
                if (label) {
                    $(id).append($('<option></option>').val(-1).text(label));
                }
                arraydata.forEach(function (e, i) {
                    $(id).append($('<option></option>').val(e.key).text(e.value));
                });
                $(id + ' option[value="' + defaultValue + '"]').attr('selected', 'selected');
            }

            $("#marca_filter, #rubro_filter, #superrubro_filter, #almacen_filter").change(function(){
                $("#inventario_table").dataTable().fnDraw();
            });

            $("#inventario_table").DataTable({
                "bProcessing": true,
                "bServerSide": true,
                "bAutoWidth": false,
                "bPaginate": true,
                "sAjaxSource": "api/inventario/byAlmacen",
                "oLanguage":
                    {
                        "sZeroRecords": "There are no results for this search.",
                        "sInfo": "Showing _START_ to _END_ of _TOTAL_ entries ",
                        "sInfoFiltered": "found from _MAX_ records.",
                        "sLengthMenu": "Show <select><option value='10'>10</option><option value='15'>15</option><option value='20'>20</option><option value='25'>25</option><option value='50'>50</option><option value='100'>100</option></select>"
                    },
                "fnServerParams": function(aoData){
                    aoData.push({'name': 'idalmacen',   'value'     : $("#almacen_filter").val()});
                    aoData.push({'name': 'idmarca',     'value'     : $("#marca_filter").val()});
                    aoData.push({'name': 'idrubro',     'value'     : $("#rubro_filter").val()});
                    aoData.push({'name': 'idsuperrubro','value'     : $("#superrubro_filter").val()});
                },
                "columnDefs": [
                {
                    //className: "text-left", "targets": [ 2 ]
                }
                ],
                "aaSorting": [[0, "asc"]],
                "aoColumns": [
                    {"bSortable": true},    //codigo
                    {"bSortable": false},   //articulo
                    {"bVisible": false},   //idmarca
                    {"bSortable": true},   //marca
                    {"bVisible": false},   //idsuper rubro
                    {"bSortable": true},   //super rubro
                    {"bVisible": false},   //idrubro
                    {"bSortable": true},   //rubro
                    {"bSortable": false},   //lote
                    {"bSortable": false},   //total
                    {"bSortable": true},    //cantidad
                    {"bSortable": true}    //almacen
                ],
                "fnRowCallback": function (nRow, aData, iDisplayIndex) {
                    var tds = $(nRow).children();
                    //var delete_details="<a href=\"javascript:deleteAssignedCommunicationsSettings("+aData[0]+");\" class=\"glyphicons glyphicons-circle-remove red\"></a>";
                    //$(tds[5]).html(delete_details);
                    return nRow;
                },
                "fnDrawCallback": function (oSettings) {
                if (typeof (oSettings.json) != "undefined") {
                    let f = oSettings.json.filters;
                    let p = oSettings.json.params;
                    let id = '#';
                    fillDropBox(id + 'superrubro_filter', f.superrubro, p.idsuperrubro, "Super Rubros");
                    fillDropBox(id + 'rubro_filter', f.rubro, p.idrubro, "Rubros");
                    fillDropBox(id + 'marca_filter', f.marca, p.idmarca, "Marcas");
                    fillDropBox(id + 'almacen_filter', f.almacen, p.idalmacen, "Almacenes");
                   
                }
                },
                "drawCallback": function (oSettings) {
                }
            });
        });
    </script>

</head>

<body>
    <header>
    
    <?php include(app_path()."/../resources/views/template/header.php");?>                   
  
    </header>

  <div class="tituloPrincipal">
     <h4>INVENTARIO</h4>
  </div>




<style>
    select.tc_select {
        width:25%;
        margin:5px;
    }    
    label.tc_select{
        width:10%;
        text-align: right;
    }
    TR.odd TD{
        background-color:azure;
        font-size: small;
    }
    TR.even TD{
        font-size: small;
    }

</style>

<div class="refine-datatable">
            <div class="container-square" style="margin:20px;border: 20px;">
                <div class="refine-group">
                    <div style="display:flex">
                        <label class="tc_select" >Super Rubro</label><select class="tc_select" id="superrubro_filter"></select><br>
                        <label class="tc_select" >Almacen</label><select  class="tc_select" id="almacen_filter"></select>
                    </div>
                    <div>
                        <label class="tc_select" >Rubro</label><select  class="tc_select" id="rubro_filter"></select>
                        <label class="tc_select" >Marca</label><select  class="tc_select" id="marca_filter"></select>
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