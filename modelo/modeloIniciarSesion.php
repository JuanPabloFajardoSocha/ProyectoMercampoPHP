<?php
include_once("conexion.php");
class mdlIniciarSesion
{
    public static function mdlInicioSesion($usuario)
    {
        $obj = conexion::conectarMysql()->prepare("SELECT usuario.idUsuario, usuario.usuario,usuario.password,roll.nombreRoll,roll.idRoll FROM usuario,roll WHERE usuario=:usuario and roll.idRoll=usuario.ROLL_idRoll");
        $obj->bindParam(":usuario", $usuario);       
        $obj->execute();
        $objrespuestaDb = $obj->fetchObject();
        $obj = null;
        return $objrespuestaDb;
    }
}