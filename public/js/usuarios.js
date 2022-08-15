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
        "scrollY": 400,
        "oLanguage":
            {
                "sSearch": "Buscar por:",
                "searchPlaceholder": "username/Nombre/Apellido/Email",
                "sZeroRecords": "There are no results for this search.",
                "sInfo": "Showing _START_ to _END_ of _TOTAL_ entries ",
                "sInfoFiltered": "",
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
            let  tds = $(nRow).children();
            let delete_details="";
             delete_details+="<a href=\"javascript:showUsuario("+aData[7]+");\"><img class=\"imagen\" src=\"./img/eye.png\" style=\"height: 30px;width:30px\"></a>";
             delete_details+="<a href=\"javascript:editUsuario("+aData[7]+");\"><img class=\"imagen\" src=\"./img/lapiz.png\" style=\"height: 30px;width:30px\"></a>";
             delete_details+="<a href=\"javascript:deleteUsuario("+aData[7]+");\"><img class=\"imagen\" src=\"./img/papelera3.png\" style=\"height: 30px;width:30px\"></a>";
            $(tds[7]).html(delete_details);
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

function showUsuario(idusuario){
    $('#usuario_edit_popup').show();
}
