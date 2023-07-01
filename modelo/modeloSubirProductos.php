<?php
include_once "../modelo/conexion.php";
class mdlSubirProductos{

    public static function subirProductos($categoriaProducto,$nombreProducto,$imagenProducto,$descripcionProducto,$cantidadProducto,$precioProducto,$municipioProducto,$idUsuario,$idRollUsuario,$medioEntrega){       
        $obj = conexion::conectarMysql()->prepare("INSERT INTO producto (CATEGORIA_IdCategoria,nombre,imagen,descripcion,cantidad,precio,MUNICIPIO_IdMunicipio,USUARIO_IdUsuario,USUARIO_ROLL_idRoll,MEDIOS_ENTREGA_IdMediosEntrega) VALUES (:categoriaProducto,:nombreProducto,:imagenProducto,:descripcionProducto,:cantidadProducto,:precioProducto,:municipioProducto,:idUsuario,:idRollUsuario,:medioEntregaProducto)");
        $obj->bindParam(":categoriaProducto", $categoriaProducto);
        $obj->bindParam(":nombreProducto", $nombreProducto);
        $obj->bindParam(":imagenProducto", $imagenProducto);
        $obj->bindParam(":descripcionProducto", $descripcionProducto);
        $obj->bindParam(":cantidadProducto", $cantidadProducto);
        $obj->bindParam(":precioProducto", $precioProducto);
        $obj->bindParam(":municipioProducto", $municipioProducto);       
        $obj->bindParam(":idUsuario", $idUsuario);
        $obj->bindParam(":idRollUsuario", $idRollUsuario);
        $obj->bindParam(":medioEntregaProducto", $medioEntrega);
        return $obj->execute();        
    } 
}


?>