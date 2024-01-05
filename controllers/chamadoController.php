<?php

namespace controllers;

class chamadoController{
    public function existeToken(){
        $token = $_GET["token"];
        $bauleares = \MySql::conectar()->prepare("SELECT * FROM chamados WHERE token = ?");
        $bauleares->execute(array($token));
        if($bauleares->rowCount() == 1){
            return true;
        } else {
            return false;
        }
    }

    public function getPergunta($token){
        $sql = \MySql::conectar()->prepare("SELECT * FROM chamados WHERE token = ?");
        $sql->execute(array($token));
        return $sql->fetch();
    }
    public function index($white){
        \views\mainView::render('chamado',$white);
    }
}