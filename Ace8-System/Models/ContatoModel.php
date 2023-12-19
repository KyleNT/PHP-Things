<?php
    namespace Models;

    class ContatoModel{
        public static function enviarFormulario(){
            $mail = new \Email('komeiji.satori.com','satori@komeiji','satori123','Satori');
            $mail->addAdress('satori@komeiji.com','Satori');
            $mail->formatarEmail(array('assunto'=>'Mensagem do site', 'corpo'=>('Aqui é uma mensagem dos site')));
            $mail->enviarEmail();

        }
    }

?>