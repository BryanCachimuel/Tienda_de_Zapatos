<?php

    class zapatoModel{

        public $con; // cadena de conexión para la bdd
        
        public function __construct(){
            try {
                $this->con = conexion::conectar(); // se hace el llamado a la clase conexion y se utiliza su método
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        public function listarZapatos(){
            try{
                $query = "SELECT z.id_zapato, z.color, z.precio, z.cantidad, z.valor_total, e.estilos, t.tallas, g.generos FROM zapato z INNER JOIN estilo e on z.id_estilo = e.id_estilo INNER JOIN talla t on z.id_talla = t.id_talla INNER JOIN genero g on z.id_genero = g.id_genero";
                $smt = $this->con->prepare($query);
                $smt->execute();
                return $smt->fetchAll(PDO::FETCH_OBJ); // se hace el retorno de un objeto
            }catch(Exception $e){
                die($e->getMessage());
            }
        }
    }
?>