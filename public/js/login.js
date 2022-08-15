


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
            
            if(request.status==201){
                window.location="./menu_principal";
            }else{ 
                alert(request.responseText);
            }

        });

}

function logout(){
    $.ajax(
        {
            type: "POST",
            headers: {"cache-control": "no-cache"},
            url: "api/logout",
            data: null,
            dataType: "json"
        })
        .always(function() { 
            window.location=path;
        });
}

$(document).ready(function () {

    $("#login").click(function () {
        login();
    });

    $("#action_user").change(function () {
        if($("#action_user").val()==2){
            logout();
        }
    });
   
    setInterval(function(){
        $.ajax(
            {
                type: "GET",
                headers: {"cache-control": "no-cache"},
                url: "api/logged",
                data: null,
                dataType: "text",
                success: function(result){
                    if(!result){
                        console.log("Byeee!");
                        logout();        
                    }
                 },
                 error: function(xhr, ajaxOptions, thrownError) {
                     alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                 }
     
            });
    },120*1000);

});