function login(){
    
    let usuario = {
        "username":$("#username").val(),
        "password":$("#password").val()
    };

    $.ajax(
        {
            type: "POST",
            headers: {"cache-control": "no-cache"},
            url: "api/login",
            data: usuario,
            dataType: "json"
        })
        .always( )
        .done(function (data) {
            console.log(data);
            window.location="./menu_principal";
        })
        .fail(function (request, error) {
            console.log(request.status, request.responseText);
            if (typeof (callback) !== "undefined") {
                callback(error, request);
            }
        });

}

$(document).ready(function () {

    $("#login").click(function () {
        login();
    });

});