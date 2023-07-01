<?php
include_once "conexion.php";
class mdlListarProductos{
    public static function modeloListar($idUsuario){        
        $obj = conexion::conectarMysql()->prepare("SELECT * FROM producto WHERE USUARIO_IdUsuario=:idUsuario");
        $obj->bindParam(":idUsuario", $idUsuario);        
        $obj->execute();
        $objrespuestaDb = $obj->fetchAll();
        $obj = null;               
        return $objrespuestaDb;
    }
}