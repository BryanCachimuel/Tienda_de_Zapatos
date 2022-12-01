<?php

    class zapatoModel{

        public $con; // cadena de conexión para la bdd

        public $id_zapato;
        public $color;
        public $cantidad;
        public $precio;
        public $valor_total;
        public $id_estilo;
        public $id_genero;
        public $id_talla;
        public $id_marca;

        public $estilos;
        public $generos;
        public $tallas;
        public $marcas;
        
        public function __construct(){
            try {
                $this->con = conexion::conectar(); // se hace el llamado a la clase conexion y se utiliza su método
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        public function listarZapatos(){
            try{
                $query = "SELECT z.id_zapato, z.color, z.precio, z.cantidad, z.valor_total, e.estilos, t.tallas, g.generos, m.marcas
                          FROM zapato z INNER JOIN estilo e on z.id_estilo = e.id_estilo 
                          INNER JOIN talla t on z.id_talla = t.id_talla 
                          INNER JOIN genero g on z.id_genero = g.id_genero 
                          INNER JOIN marca m on z.id_marca = m.id_marca ORDER BY id_zapato ASC";
                $smt = $this->con->prepare($query);
                $smt->execute();
                return $smt->fetchAll(PDO::FETCH_OBJ); // se hace el retorno de un objeto
            }catch(Exception $e){
                die($e->getMessage());
            }
        }

        public function listarMarca(){
            try {
                $query = "SELECT * FROM marca";
                $smt = $this->con->prepare($query);
                $smt->execute();
                return $smt->fetchAll(PDO::FETCH_OBJ); 
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        public function listarEstilos(){
            try {
                $query = "SELECT * FROM estilo";
                $smt = $this->con->prepare($query);
                $smt->execute();
                return $smt->fetchAll(PDO::FETCH_OBJ); 
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        public function listarTallas(){
            try {
                $query = "SELECT * FROM talla";
                $smt = $this->con->prepare($query);
                $smt->execute();
                return $smt->fetchAll(PDO::FETCH_OBJ); 
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        public function listarGenero(){
            try {
                $query = "SELECT * FROM genero";
                $smt = $this->con->prepare($query);
                $smt->execute();
                return $smt->fetchAll(PDO::FETCH_OBJ); 
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        public function crearZapatos(zapatoModel $data){
            try {
                $query = "INSERT INTO zapato(color,cantidad,precio,valor_total,id_estilo,id_genero,id_talla,id_marca) VALUES(?,?,?,?,?,?,?,?)";
                $this->con->prepare($query)->execute(array($data->color, 
                                                           $data->cantidad, 
                                                           $data->precio, 
                                                           $data->valor_total = $data->cantidad * $data->precio, 
                                                           $data->id_estilo, 
                                                           $data->id_genero, 
                                                           $data->id_talla,
                                                           $data->id_marca
                                                        ));
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        public function crearEstilos(zapatoModel $data){
            try {
               $query = "INSERT INTO estilo(estilos) VALUES(?)";
               $this->con->prepare($query)->execute(array($data->estilos)); 
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        public function crearGeneros(zapatoModel $data){
            try {
                $query = "INSERT INTO genero(generos) VALUES(?)";
                $this->con->prepare($query)->execute(array($data->generos)); 
             } catch (Exception $e) {
                 die($e->getMessage());
             }
        }

        public function crearTallas(zapatoModel $data){
            try {
               $query = "INSERT INTO talla(tallas) VALUES(?)";
               $this->con->prepare($query)->execute(array($data->tallas)); 
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        public function crearMarca(zapatoModel $data){
            try {
                $query = "INSERT INTO marca(marcas) VALUES(?)";
                $this->con->prepare($query)->execute(array($data->marcas)); 
             } catch (Exception $e) {
                 die($e->getMessage());
             } 
        }

        public function cargarId($id){
            try {
                $query = "SELECT * FROM zapato WHERE id_zapato=?";
                $smt = $this->con->prepare($query);
                $smt->execute(array($id));
                return $smt->fetch(PDO::FETCH_OBJ); 
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        public function actualizarZapato($data){
            try {
                $query = "UPDATE zapato SET color=?,cantidad=?,precio=?,valor_total=?,id_estilo=?,id_genero=?,id_talla=? WHERE id_zapato=?";
                $this->con->prepare($query)->execute(array($data->color, 
                                                           $data->cantidad, 
                                                           $data->precio, 
                                                           $data->valor_total = $data->cantidad * $data->precio, 
                                                           $data->id_estilo, 
                                                           $data->id_genero, 
                                                           $data->id_talla,
                                                           $data->id_zapato));
            } catch (Exception $e) {
                die($e->getMessage());
            } 
        }

        public function eliminarZapato($id){
            try {
                $query = "DELETE FROM zapato WHERE id_zapato=?";
                $smt = $this->con->prepare($query);
                $smt->execute(array($id));
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        public function cantidadZapatos(){
            try {
                $query = "SELECT SUM(cantidad) FROM zapato";
                $smt = $this->con->prepare($query);
                return $smt->fetchColumn();
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
    }
?>