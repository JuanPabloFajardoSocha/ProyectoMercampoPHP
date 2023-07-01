<?php
session_start();

class controlPlantilla{    
    
     
    public function ctrPlantilla(){             

         if(isset($_SESSION["roll"]))  { 
              
            if ($_SESSION["roll"]==="productor") {
                include_once "vista/paginaProductor/plantillas/plantillaProductor.php";
            }
            // if ($_SESSION["roll"] === "cliente") {
            //     include_once "vista/paginaProductor/plantillas/plantillaProductor.php";
            // }
        }else {
            include_once "vista/paginaPrincipal/plantillas/plantilla.php";
        }  
         
    }
    
   
}
