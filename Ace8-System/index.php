<?php
/*
    MVC
    M = Model
    V = Vew
    C = Controller

    /Contato
    Contato controller => controlador geral, executa o modelo e view
    Contato view => renderiza a págia
    Contato Model => Onde tem todas as funções necessárias
*/
include('tradutor.php');


    $autoload = function($class){

        if($class == 'Email'){
            include('phpmailer/PHPMailerAutoload.php');
        }

        

        include($class.'.php');
    };

    spl_autoload_register($autoload);

    $app = new Application();
    $app->executar();


?>