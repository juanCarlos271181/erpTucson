
$(document).ready(function () {
    $("#card_usuario").click(function () {
        go("dashboard/usuario");
    });
    $("#card_inventario").click(function () {
        go("dashboard/inventario");
    });

});

function go(uri){
    $.ajax(
        {
            type: "GET",
            headers: {"cache-control": "no-cache"},
            url: uri,
            data: {},
            dataType: "html",
            success: function(html){
               $("#content1").html(html); 
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
    });
} 