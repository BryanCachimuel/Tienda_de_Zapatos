<?php
    class conexion{
        
        public static function conectar(){
           try {
                $con = new PDO("mysql:host:localhost; dbname=tienda_zapatos; charset=utf8","root","");
                $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);// se activan los siguientes atributos
                return $con;
           } catch (Exception $e) {
                echo "Error en la conexión hacia la Base de Datos: ". $e->getMessage();
           }
        }
    }
?>