<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="vista/paginaProductor/js/subirProductos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<br>
<div class="container">
    <div class="row">
       
        <form class="col-sm-8 bg-dark text-white" method="post" enctype="multipart/form-data" >
         <br>
        <div class="mb-3 mt-3">
                <select name="" id="select_categorias">
                    <option value="" selected disabled>Ingrese una categoria</option>
                    <option value="1">papa</option>
                    <option value="2">maiz</option>

                </select>
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre del producto:</label>
                <input type="text" class="form-control" id="nombre" 
                    placeholder="Ingrese el nombre del producto">
            </div>

            <div class="mb-3">
                <label for="imagen" class="form-label">Imagen del producto:</label>
                <input type="file" class="form-control-image" id="imagen" name="imagen" required
                    placeholder="Ingrese una imagen">
            </div>

            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripcion del producto:</label>
                <input type="text" class="form-control" id="descripcion" 
                    placeholder="Ingrese la descripcion del producto">
            </div>

            <div class="mb-3">
                <label for="cantidad" class="form-label">Cantidad del producto:</label>
                <input type="number" class="form-control" id="cantidad" 
                    placeholder="Ingrese la cantidad del producto">
            </div>

            <div class="mb-3">
                <label for="precio" class="form-label">Precio del producto:</label>
                <input type="number" class="form-control" id="precio"
                    placeholder="Ingrese el precio del producto">
            </div>

            <div class="mb-3 mt-3">
                <select name="" id="select_municipio">
                    <option value="" selected disabled>Ingrese el municipio donde se encuentra el producto</option>
                    <option value="1">Nobsa</option>
                    <option value="2">Sogamoso</option>

                </select>
            </div>

            <div class="mb-3 mt-3">
                <select name="" id="select_medio_envio">
                    <option value="" selected disabled>Seleccione el medio de envio del producto</option>
                    <option value="1">Domicilio</option>
                    <option value="2">Ubicacion del producto</option>

                </select>
            </div>
            <br>


            <button name="btn_enviar" id="btn_enviar" type="button" class="btn btn-primary">Enviar datos</button>
        </form>
    </div>
</div>