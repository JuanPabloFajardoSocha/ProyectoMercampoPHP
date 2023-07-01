
$(function() {   
  
    $("#registrarse").on("click", function() {
        var TipoDocumento = $("#selectTipo_documento").val();
        var NumeroDocumento = $("#numero_documento").val();
        var nombre = $("#nombres").val();
        var apellido = $("#apellidos").val();
        var TipoUsuario = $("#Tipo_de_usuario").val();
        var direccion = $("#direccion").val();
        var celular = $("#celular").val();
        var correo = $("#email").val();
        var usuario = $("#usuario_registro").val();
        var password = $("#contraseña_registro").val();   
        
        var objData = new FormData();
        objData.append("registrarTipo_documento_idTipoDeDocumento", TipoDocumento);
        objData.append("registrarNumeroDocumento", NumeroDocumento);
        objData.append("registrarNombre", nombre);
        objData.append("registrarApellido", apellido);
        objData.append("registrarRoll_idRoll", TipoUsuario);
        objData.append("registrarDireccion", direccion);
        objData.append("registrarCelular", celular);
        objData.append("registrarCorreo",correo);
        objData.append("registrarUsuario", usuario);
        objData.append("registrarContraseña", password);      
        $.ajax({
            url: "control/controlRegistrarse.php",
            type: "post",
            dataType: "json",
            data: objData,
            cache: false,
            contentType: false,
            processData: false
        }).done(function(respuesta) {            
            Swal.fire({
                position: 'top-center',
                icon: 'success',
                title: 'Usuario registrado correctamente',
                showConfirmButton: false,
                timer:0             
            });


            Swal.fire({
                title: 'Usuario registrado correctamente',
                showDenyButton: false,
                showCancelButton: false,
                confirmButtonText: 'Aceptar',                
            }).then((result) => {                
                if (result.isConfirmed) {
                    window.location.href = "iniciarSesion";
                } else if (result.isDenied) {
                    
                }
            })        
  
        })
    }) 
  
})