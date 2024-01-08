<?php

class MySql
{
    private $pdo;
    public static function connect(){
        if(!isset($pdo)){
            $pdo = new PDO('mysql:host=localhost;port=3307;dbname=testes','root',"");
        }

        return $pdo;
    }
}

?>