
function send(){
    $.ajax(
        {
            type: "POST",
            headers: {"cache-control": "no-cache"},
            url: "api/usuario/registro",
            data: {
                "nombre":$("#user_nombre").val(),
                "apellido":$("#user_apellido").val(),
                "dni":$("#user_dni").val(),
                "email":$("#user_email").val(),
                "password":$("#user_password").val()
            },
            dataType: "json"
        })
        .always( )
        .done(function (data) {
            if(data.status==200){
                alert("Usuario Creado Exitosamente");
            }else{
                alert("Por favor completar todos los campos");
            }
            /** 
            if (data.success != 1) {
                display_dialog("Error", data.msg);
            }
            $("#compliance_group_clients_table").dataTable().fnDraw();
            multi_client_directory.client_ids = [];
            $('#search_multi_client_popup').hide();
            display_dialog("Success", data.msg);
            **/            
           console.log(data);
        })
        .fail(function (request, error) {
            console.log(request.status, request.responseText);
            if (typeof (callback) !== "undefined") {
                callback(error, request);
            }
        });

}

function getUsuarioById(id, callback){
    $.ajax(
        {
            type: "POST",
            headers: {"cache-control": "no-cache"},
            url: "/usuario/id/"+id,
            dataType: "json"
        })
        .always( )
        .done(function (data) {
            if(data.status==200){
                callback();
            }            
           console.log(data);
        })
        .fail(function (request, error) {
            console.log(request.status, request.responseText);
        });

}

$(document).ready(function () {

    $("#user_register").click(function () {
        send();
    });


});