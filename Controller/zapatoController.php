<?php

    include_once("Model/zapatoModel.php");

    class zapatoController{

        public $Model;

        public function __construct(){
            $this->Model = new zapatoModel();
        }

        public function index(){
            include_once("View/inicio.php");
        }
    }

?>