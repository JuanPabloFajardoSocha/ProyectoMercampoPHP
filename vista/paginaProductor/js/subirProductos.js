$(function () {

    $("#btn_enviar").on("click", function () {

        let categoria = $("#select_categorias").val()
        let nombreProducto = $("#nombre").val();
        let descripcion = $("#descripcion").val();
        let cantidad = $("#cantidad").val();
        let precio = $("#precio").val();
        let municipio = $("#select_municipio").val();
        let medioEnvio = $("#select_categorias").val();
        let imagen = $("#imagen")[0].files;
        let objData = new FormData();
        objData.append("categoria", categoria);
        objData.append("nombre", nombreProducto);
        objData.append("imagen", imagen[0]);
        objData.append("descripcion", descripcion);
        objData.append("cantidad", cantidad);
        objData.append("precio", precio);
        objData.append("municipio", municipio);
        objData.append("medioEnvio", medioEnvio)

        $.ajax({
            url: "control/controlSubirProductos.php",
            type: "post",
            data: objData,
            dataType: "json",
            contentType: false,
            processData: false,
        }).done(function (respuesta) {

            if (respuesta.estado === false) {
                Swal.fire('Error al registrar el producto');
            }
            else {
                Swal.fire(respuesta.mensaje);
            }
            window.location.href = "mostrarProductos";
        })
    })
})