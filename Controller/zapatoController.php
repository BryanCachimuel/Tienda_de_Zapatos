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

        public function crear(){
            include_once("View/guardar.php");
        }

        public function crearZapatos(){
            $cz = new zapatoModel();
            $cz->color = $_POST['txtColor'];
            $cz->estilo = $_POST['cmbEstilo'];
            $cz->genero = $_POST['cmbGenero'];
            $cz->talla = $_POST['cmbTalla'];
            $cz->cantidad = $_POST['txtCantidad'];
            $cz->precio = $_POST['txtPrecio'];
            $cz->valor_total = $_POST['txtValor_total'];

            $this->Model->crearZapatos($cz);
            header("Location:index.php");
        }
    }

?>