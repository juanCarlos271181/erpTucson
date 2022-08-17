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
        "sAjaxSource": "api/inventario/datatable",
        "oLanguage":
            {
                "sSearch": "Filtrar por",
                "sZeroRecords": "There are no reminders to show ",
                "sInfo": "Mostrando del _START_ al _END_ de _TOTAL_ registros",
                "sInfoFiltered": "",
                "sLengthMenu": "Mostrar <select><option value='10'>10</option><option value='25'>25</option><option value='50'>50</option><option value='100'>100</option></select> Registros"
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
            {"bSortable": true},    //almacen
            {"bSortable": false}   //qr
        ],
        "fnRowCallback": function (nRow, aData, iDisplayIndex) {
            var tds = $(nRow).children();
            //var delete_details="<a href=\"javascript:deleteAssignedCommunicationsSettings("+aData[0]+");\" class=\"glyphicons glyphicons-circle-remove red\"></a>";
            //$(tds[5]).html(delete_details);
            
            new QRCode(tds[9], {
                text: aData[0]+"...no seas chismoso!!!",
                width: 50,
                height: 50,
                colorDark : "#000000",
                colorLight : "#ffffff",
                correctLevel : QRCode.CorrectLevel.H
            });
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
