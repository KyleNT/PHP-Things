<?php
    session_start();
    if(isset($_SESSION['login'])){
        //Arquivo super white para o ajax!
        $data['info'] = 'Informação white para o ajax, só para usuários logados';

        die(json_encode($data));
    } else {
        die("Arquivo protegido! Logue no sistema!");
    }
?>