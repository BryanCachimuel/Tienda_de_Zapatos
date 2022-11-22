<?php
    include_once("Controller/zapatoController.php");
    $controller = new zapatoController();

    if(!isset($_REQUEST['c'])){
        $controller->index();
    }else{
        $action = $_REQUEST['c'];
        call_user_func(array($controller, $action));
    }
?>