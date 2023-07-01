<?php
include_once("../modelo/modeloIniciarSesion.php");
class ctrIniciarSesion
{
    public $usuario;
    public $password;
    public function inicioSesion()
    {

        try {
            session_start();                       
            $usuarioModel = mdlIniciarSesion::mdlInicioSesion($this->usuario);
            $url = null;            
           
            $validarUsuario = $this->validarUsuario($usuarioModel);

            if ($validarUsuario["estado"] === true) {
                $_SESSION["usuario"] = $usuarioModel->usuario;
                $_SESSION["roll"]=$usuarioModel->nombreRoll;
                $_SESSION["idUsuario"]=$usuarioModel->idUsuario;
                $_SESSION["idRoll"] = $usuarioModel->idRoll;
                
                echo json_encode([
                    "estado" => true,
                    "url" => $this->obtnerUrlRole($usuarioModel)                    
                ]);

            } else {
                echo json_encode($validarUsuario);
            }

        } catch (\Exception $error) {

            echo json_encode([
                "estado" => false,
                "mensaje" => $error->getMessage()
            ]);
        }
    }
    private function validarUsuario($usuarioModel)
    {
        $usuarioError = [
            "estado" => false,
            "mensaje" => ""
        ];

        if ($usuarioModel === false) {
            $usuarioError["mensaje"] = "Usuario no registrado";
            return $usuarioError;

        } elseif ($usuarioModel->password !== $this->password) {
            $usuarioError["mensaje"] = "Credenciales incorrectas";
            return $usuarioError;
        } else {
            return [
                "estado" => true
            ];
        }

    }

    private function obtnerUrlRole($usuarioModel)
    {
        if ($usuarioModel->nombreRoll === "productor") {
            $url = "productor";           
        } else {
            $url = "cliente";
        }        
        return $url;
        
    }
}

if (isset($_POST["usuario"], $_POST["password"])) {
    $obj = new ctrIniciarSesion();
    $obj->usuario = $_POST["usuario"];
    $obj->password = $_POST["password"];
    $obj->inicioSesion();
}
