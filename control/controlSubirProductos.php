<?php
session_start();
include_once "../modelo/modeloSubirProductos.php";

$categoriaProducto = 0;
$nombreProducto = "";
$imagenProducto = "";
$descripcionProducto = "";
$cantidadProducto = 0;
$precioProducto = 0;
$municipioProducto = 0;
$idUsuario = 0;
$idRollUsuario = 0;
$medioEntrega = 0;
class ctrSubirProductos
{

    public $categoriaProducto;
    public $nombreProducto;
    public $imagenProducto;
    public $descripcionProducto;
    public $cantidadProducto;
    public $precioProducto;
    public $municipioProducto;
    public $idUsuario;
    public $idRollUsuario;
    public $medioEntrega;

    public function subirProductos()
    {
        try {
            $obj = mdlSubirProductos::subirProductos($this->categoriaProducto, $this->nombreProducto, $this->imagenProducto, $this->descripcionProducto, $this->cantidadProducto, $this->precioProducto, $this->municipioProducto, $this->idUsuario, $this->idRollUsuario, $this->medioEntrega);

            echo json_encode([
                "estado" => true,
                "mensaje" => "El producto se ha registrado con exito"
            ]);

        } catch (\Exception $error) {
            echo json_encode([
                "estado" => false,
                "mensaje" => $error->getMessage()
            ]);
        }
    }
}

if (isset($_POST["categoria"], $_POST["nombre"], $_POST["descripcion"], $_POST["cantidad"], $_POST["precio"], $_POST["municipio"], $_POST["medioEnvio"])) {
    $categoriaProducto = $_POST["categoria"];
    $nombreProducto = $_POST["nombre"];
    $descripcionProducto = $_POST["descripcion"];
    $cantidadProducto = $_POST["cantidad"];
    $precioProducto = $_POST["precio"];
    $municipioProducto = $_POST["municipio"];
    $medioEntrega = $_POST["medioEnvio"];


    if (!isset($_SESSION[""])) {
        $idUsuario = $_SESSION["idUsuario"];
        $idRollUsuario = $_SESSION["idRoll"];
    }


    if (
        isset($_FILES["imagen"])
        && $_FILES["imagen"]["type"] === "image/jpeg"
        || $_FILES["imagen"]["type"] === "image/jpg"
        || $_FILES["imagen"]["type"] === "image/png"
    ) {
        $imagen = $_FILES["imagen"];
        $nombreImagen = $imagen["name"];
        $temporal = $imagen["tmp_name"];
        $ruta = "../vista/paginaProductor/imagenesProductos/";
        move_uploaded_file($temporal, $ruta . $nombreImagen);
        $imagenProducto = $ruta . $nombreImagen;

    } else {
        echo "no es una imagen";
    }

    $obj = new ctrSubirProductos();
    $obj->categoriaProducto = $categoriaProducto;
    $obj->nombreProducto = $nombreProducto;
    $obj->imagenProducto = $imagenProducto;
    $obj->descripcionProducto = $descripcionProducto;
    $obj->cantidadProducto = $cantidadProducto;
    $obj->precioProducto = $precioProducto;
    $obj->municipioProducto = $municipioProducto;
    $obj->idUsuario = $idUsuario;
    $obj->idRollUsuario = $idRollUsuario;
    $obj->medioEntrega = $medioEntrega;
    $obj->subirProductos();


}






?>