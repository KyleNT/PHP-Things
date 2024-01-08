<?php
    namespace models;

    class HomeModel extends Model{

        //Método que "geta" clientes
        public static function getClientes(){
            $clientes = \MySql::connect()->prepare("SELECT * FROM clientes");
            $clientes->execute();


            return $clientes->fetchAll();
        }
    }

?>