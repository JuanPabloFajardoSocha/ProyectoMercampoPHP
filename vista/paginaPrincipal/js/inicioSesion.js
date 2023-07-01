$(function () {

    $("#iniciarSesion").on("click", function () {        
        $usuario = $("#usuario").val();
        $password = $("#contraseña").val();
        let objData = new FormData;
        objData.append("usuario", $usuario);
        objData.append("password", $password);
        $.ajax({
            url: "control/controlIniciarSesion.php",
            type: "post",
            dataType: "json",
            data: objData,
            cache: false,
            contentType: false,
            processData: false
        }).done(function respuesta(respuesta) {
            console.log(respuesta);                              
            if (respuesta.estado===true) {                
                window.location.href=respuesta.url;

            } else {
                alert(respuesta.mensaje);
            }

        })


    })

})

