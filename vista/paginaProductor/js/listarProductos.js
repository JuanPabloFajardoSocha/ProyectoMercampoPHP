$(function () {
    $("#btn_subir_productos").on("click", function () {
        window.location.href = "subirProductos";
    })

    $("#btn_cerrar_sesion").on("click", function () {
        window.location.href = "cerrar";
        
    })



    mostrarProductos();

    function mostrarProductos() {

        let objData = new FormData();
        objData.append("listarProductos", "ok");

        $.ajax({
            url: "control/controlListarProductos.php",
            type: "post",
            data: objData,
            dataType: "json",
            contentType: false,
            processData: false,
        }).done(function (respuesta) {
            console.log(respuesta);
            respuesta.forEach(mostrar);           
            function mostrar(item, index) {
                $urlBaseDatos =item.imagen;
                $temporal = $urlBaseDatos.slice(3,);
                $imagen=$temporal;                
                console.log($imagen);
                $("#mostrarProductos").append('<div class="card bg-dark" style="width:450px">'+
                '<img class="card-img-top" src="'+$imagen+'" alt="Card image">'+
                '<div class="card-body">'+
                '<h4 class="card-title">'+item.nombre+'</h4>'+
                '<p class="card-text">'+item.descripcion+'</p>'+
                '<a href="#" class="btn btn-warning">Editar</a>'+
                '<a href="#" class="btn btn-danger">Eliminar</a>' +
                '<a href="#" class="a btn btn-link">Ver mas...</a>' +

                '</div>'+
                '</div>'+
                '<br/>'+
                '<br/>')

            }

        })
    }
})