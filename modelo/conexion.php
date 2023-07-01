<?php
class conexion{
    public static function conectarMysql()
    {
        $servidor = "localhost";
        $usuario = "root";
        $baseDatos = "mercampo";
        $password = "";

        try {
            $objConexion = new PDO('mysql:host=' . $servidor . ';dbname=' . $baseDatos . ';charset=utf8mb4', $usuario, $password);
            $objConexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        } catch (Exception $e) {
            $objConexion = $e;
            
        }  
        
        return $objConexion;
       
    }
}
