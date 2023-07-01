<?php
include_once("../modelo/modeloRegistrarse.php");

class crtRegistro{

    
    public $ROLL_idRoll;
    public $TIPO_DOCUMENTO_idTipoDeDocumento;
    public $NumeroDocumento;
    public $nombre;
    public $apellido;
    PUBLIC $MUNICIPIO_idMunicipio;
    public $direccion;
    public $celular;
    public $correo;
    public $usuario;
    public $password;


    public function ctrRegistrarse(){
        $objRespuesta = mdlRegistro::mdlRegistrarse($this->ROLL_idRoll,$this->TIPO_DOCUMENTO_idTipoDeDocumento,$this->NumeroDocumento,$this->nombre,$this->apellido,$this->MUNICIPIO_idMunicipio,$this->direccion,$this->celular,$this->correo,$this->usuario,$this->password);
        echo json_encode("resultado");
    }
}

if (isset($_POST["registrarTipo_documento_idTipoDeDocumento"],$_POST["registrarNumeroDocumento"],$_POST["registrarNombre"],$_POST["registrarApellido"],$_POST["registrarRoll_idRoll"],$_POST["registrarDireccion"],$_POST["registrarCelular"],$_POST["registrarCorreo"],$_POST["registrarUsuario"],$_POST["registrarContraseña"])){
    $objUsuarios= new crtRegistro();
  
    $objUsuarios->ROLL_idRoll=$_POST["registrarRoll_idRoll"];
    $objUsuarios->TIPO_DOCUMENTO_idTipoDeDocumento=$_POST["registrarTipo_documento_idTipoDeDocumento"];
    $objUsuarios->NumeroDocumento=$_POST["registrarNumeroDocumento"];
    $objUsuarios->nombre=$_POST["registrarNombre"];
    $objUsuarios->apellido=$_POST["registrarApellido"];
    $objUsuarios->MUNICIPIO_idMunicipio= "1"; // $_POST["registrarMUNICIPIO_idMunicipio"]; // no se esta llamando
    $objUsuarios->direccion=$_POST["registrarDireccion"];
    $objUsuarios->celular=$_POST["registrarCelular"];
    $objUsuarios->correo=$_POST["registrarCorreo"];
    $objUsuarios->usuario=$_POST["registrarUsuario"];
    $objUsuarios->password=$_POST["registrarContraseña"];
    $objUsuarios->ctrRegistrarse();
    
  
}



