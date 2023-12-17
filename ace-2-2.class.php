<?php
class mcl
{
    private $nome;
    private $idade;
    //A primeira coisa que a classe chama é o construct
    public function __construct($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getIdade(){
        return $this->idade;
    }
}

//Namespace funciona como pasta
namespace Sessão1;
//Use acessa a classe requerida
use Sessão2\mfl;

class mdl{
    public function __construct(){
        new mfl();
        //colocar uma barra para transformar em diretório
        echo '<br />';
        echo 'Classe MDL Instanciada';
    }
}

?>