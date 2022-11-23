<?php
    include_once("Controller/zapatoController.php");
    include_once("Config/conexion.php"); // se hace el llamado a la conexión hacia la bdd
    $controller = new zapatoController();

    if(!isset($_REQUEST['c'])){
        $controller->index();
    }else{
        $action = $_REQUEST['c'];
        call_user_func(array($controller, $action));
    }
?>