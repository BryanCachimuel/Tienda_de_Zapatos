<?php

    class zapatoModel{

        public $connect; // cadena de conexión para la bdd
        
        public function __construct(){
            try {
                $this->connect = conexion::conectar(); // se hace el llamado a la clase conexion y se utiliza su método
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
    }
?>