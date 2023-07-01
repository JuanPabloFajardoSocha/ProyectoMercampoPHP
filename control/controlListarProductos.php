<?php
session_start();
include_once("../modelo/modeloListarProductos.php");

$id = 0;
class ctrListarProductos
{
    public $idUsuario;

    public function listar()
    {
        $respuestaModelo = mdlListarProductos::modeloListar($this->idUsuario);
        echo json_encode($respuestaModelo);
    }

}


if ($_POST["listarProductos"] === "ok") {
    if ($_SESSION["idUsuario"]) {
        $id = $_SESSION["idUsuario"];
        $obj = new ctrListarProductos();
        $obj->idUsuario = $id;
        $obj->listar();
    }
 
}





// session_destroy();
