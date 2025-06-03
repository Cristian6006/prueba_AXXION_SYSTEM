<?php
if (!isset($_REQUEST['c'])){
    require_once "controladores/Empresa.php";
    $controlador = new Empresa;
    $controlador->main();
} else {
    $controlador = $_REQUEST["c"];
    require_once "controladores/" . $controlador . ".php";
    $controlador = new $controlador;
    $accion = isset($_REQUEST["a"]) ? $_REQUEST["a"] :"main";
    call_user_func(array($controlador, $accion));
}
?>