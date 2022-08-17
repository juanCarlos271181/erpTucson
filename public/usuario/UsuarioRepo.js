class UsuarioRepo{

    findById(id,callback){
        $.ajax({
                type: "POST",
                headers: {"cache-control": "no-cache"},
                url: "/usuario/id/"+id,
                dataType: "json"
        })
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

    mapper(){
        return  {
            "idusuario":$("#user_id").val(),
            "nombre":$("#user_nombre").val(),
            "apellido":$("#user_apellido").val(),
            "dni":$("#user_dni").val(),
            "email":$("#user_email").val(),
            "password":$("#user_password").val()
        };
    }

    save(usuario){
        $.ajax({
                type: "POST",
                headers: {"cache-control": "no-cache"},
                url: "api/usuario/registro",
                data: usuario,
                dataType: "json"
            })
        .always( )
        .done(function (data) {
                if(data.status==200){
                    alert("Usuario Creado Exitosamente");
                }else{
                    alert("Por favor completar todos los campos");
                }
               console.log(data);
            })
            .fail(function (request, error) {
                console.log(request.status, request.responseText);
                if (typeof (callback) !== "undefined") {
                    callback(error, request);
                }
            });
    
    }
}
