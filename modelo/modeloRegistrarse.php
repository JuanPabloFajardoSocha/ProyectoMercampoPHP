<?php
include_once("conexion.php");
class mdlRegistro
{
    public static function mdlRegistrarse($ROLL_idRoll, $TIPO_DOCUMENTO_idTipoDeDocumento, $NumeroDocumento, $nombre, $apellido, $MUNICIPIO_idMunicipio, $direccion, $celular, $correo, $usuario, $password)
    {
        $mensaje = "";

        try {
            $objRespuesta = conexion::conectarMysql()->prepare("INSERT INTO usuario(Roll_idRoll,Tipo_Documento_idTipoDeDocumento,NumeroDocumento,nombre,apellido,MUNICIPIO_idMunicipio,direccion,celular,correo,usuario,password)VALUES(:Roll_idRoll,:Tipo_Documento_idTipoDeDocumento,:NumeroDocumento,:nombre,:apellido,:MUNICIPIO_idMunicipio,:direccion,:celular,:correo,:usuario,:password)");

            $objRespuesta->bindParam(":Roll_idRoll", $ROLL_idRoll);
            $objRespuesta->bindParam(":Tipo_Documento_idTipoDeDocumento", $TIPO_DOCUMENTO_idTipoDeDocumento);
            $objRespuesta->bindParam(":NumeroDocumento", $NumeroDocumento);
            $objRespuesta->bindParam(":nombre", $nombre);
            $objRespuesta->bindParam(":apellido", $apellido);
            $objRespuesta->bindParam(":MUNICIPIO_idMunicipio", $MUNICIPIO_idMunicipio);
            $objRespuesta->bindParam(":direccion", $direccion);
            $objRespuesta->bindParam(":celular", $celular);
            $objRespuesta->bindParam(":correo", $correo);
            $objRespuesta->bindParam(":usuario", $usuario);
            $objRespuesta->bindParam(":password", $password);

            if ($objRespuesta->execute()) {
                $mensaje = "ok";

            } else {
                $mensaje = "error al registrar el usuario";
            }

        } catch (Exception $e) {
            $mensaje = $e;
        }
        return $mensaje;

    }
}