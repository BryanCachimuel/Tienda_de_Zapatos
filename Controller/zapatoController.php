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

        public function categorias(){
            include_once("View/categorias.php");
        }

        public function crearEstilos(){
            $cze = new zapatoModel();
            $cze->estilos = $_POST['txtEstilos'];
            $this->Model->crearEstilos($cze);
            header("Location:index.php");
        }

        public function crearGeneros(){
            $czg = new zapatoModel();
            $czg->generos = $_POST['txtGeneros'];
            $this->Model->crearGeneros($czg);
            header("Location:index.php");
        }

        public function crearTallas(){
            $czt = new zapatoModel();
            $czt->tallas = $_POST['txtTallas'];
            $this->Model->crearTallas($czt);
            header("Location:index.php");
        }

        public function crearMarcas(){
            $ctm = new zapatoModel();
            $ctm->marcas = $_POST['txtMarcas'];
            $this->Model->crearMarca($ctm);
            header("Location:index.php");
        }

        public function crearzapatos(){
            $cz = new zapatoModel();
            $cz->color = $_POST['txtColor'];
            $cz->cantidad = $_POST['txtCantidad'];
            $cz->precio = $_POST['txtPrecio'];
            $cz->id_estilo = $_POST['cmbEstilo'];
            $cz->id_genero = $_POST['cmbGenero'];
            $cz->id_talla = $_POST['cmbTalla'];
            $cz->id_marca = $_POST['cmbMarca'];

            $this->Model->crearZapatos($cz);
            header("Location:index.php");
        }

        public function eliminar(){
            $this->Model->eliminarZapato($_REQUEST['id']); // el id se optiene de la url
            header("Location:index.php");
        }

        public function editarZapatos(){
            $cz = new zapatoModel();
            $cz->id_zapato = $_POST['txtId'];
            $cz->color = $_POST['txtColor'];
            $cz->cantidad = $_POST['txtCantidad'];
            $cz->precio = $_POST['txtPrecio'];
            $cz->id_estilo = $_POST['cmbEstilo'];
            $cz->id_genero = $_POST['cmbGenero'];
            $cz->id_talla = $_POST['cmbTalla'];

            $this->Model->actualizarZapato($cz);
            header("Location:index.php");
        }

        public function editar(){
            $cz = new zapatoModel();
            if(isset($_REQUEST['id'])){
                $cz = $this->Model->cargarId($_REQUEST['id']);
            }
            include_once("View/editar.php");        
        }

        public function contar(){
            $cz = new zapatoModel();
            $this->Model->cantidadZapatos();
            header("Location:index.php");
        }

        public function regresar(){
            header("Location:index.php");
        }
    }

?>