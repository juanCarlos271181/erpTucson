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

    $("#rol_filter").change(function(){
        $("#usuarios_table").dataTable().fnDraw();
    });

    $("#usuarios_table").DataTable({
        "bProcessing": true,
        "bServerSide": true,
        "bAutoWidth": false,
        "bPaginate": true,
        "sAjaxSource": "api/usuario/datatable",
        "oLanguage":
            {
                "sZeroRecords": "There are no results for this search.",
                "sInfo": "Showing _START_ to _END_ of _TOTAL_ entries ",
                "sInfoFiltered": "found from _MAX_ records.",
                "sLengthMenu": "Show <select><option value='10'>10</option><option value='15'>15</option><option value='20'>20</option><option value='25'>25</option><option value='50'>50</option><option value='100'>100</option></select>"
            },
        "fnServerParams": function(aoData){
            aoData.push({'name': 'idrol',   'value'     : $("#rol_filter").val()});
        },
        "columnDefs": [
        {
            //className: "text-left", "targets": [ 2 ]
        }
        ],
        "aaSorting": [[0, "asc"]],
        "aoColumns": [
            {"bSortable": true},    //username
            {"bSortable": false},   //nombres
            {"bVisible": true},   //apellidos
            {"bSortable": true},   //dni
            {"bVisible": true},   //telefonos
            {"bSortable": true},   //email
            {"bVisible": true},   //rol
            {"bSortable": true},   //accion
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
//            fillDropBox(id + 'superrubro_filter', f.superrubro, p.idsuperrubro, "Super Rubros");
//            fillDropBox(id + 'rubro_filter', f.rubro, p.idrubro, "Rubros");
//            fillDropBox(id + 'marca_filter', f.marca, p.idmarca, "Marcas");
            fillDropBox(id + 'rol_filter', f.rol, p.idrol, "Roles");
           
        }
        },
        "drawCallback": function (oSettings) {
        }
    });
});
