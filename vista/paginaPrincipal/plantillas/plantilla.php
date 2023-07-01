<?php

include_once "vista/paginaPrincipal/modulos/cabecera.php";
include_once "vista/paginaPrincipal/modulos/menu.php";

$rutas = array("inicio", "manual", "contactanos", "iniciarSesion", "registro");

if (!isset($_GET["ruta"]))
    $_GET["ruta"] = "inicio";

if (in_array($_GET["ruta"], $rutas)) {
    include_once "vista/paginaPrincipal/modulos/" . $_GET["ruta"] . ".php";
} else {
    include_once "vista/paginaPrincipal/modulos/general/error.php";
}
