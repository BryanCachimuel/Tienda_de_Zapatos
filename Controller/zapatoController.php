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

        public function crearzapatos(){
            $cz = new zapatoModel();
            $cz->color = $_POST['txtColor'];
            $cz->cantidad = $_POST['txtCantidad'];
            $cz->precio = $_POST['txtPrecio'];
            $cz->id_estilo = $_POST['cmbEstilo'];
            $cz->id_genero = $_POST['cmbGenero'];
            $cz->id_talla = $_POST['cmbTalla'];

            $this->Model->crearZapatos($cz);
            header("Location:index.php");
        }

        public function eliminar(){
            $this->Model->eliminarZapato($_REQUEST['id']); // el id se optiene de la url
            header("Location:index.php");
        }
    }

?>