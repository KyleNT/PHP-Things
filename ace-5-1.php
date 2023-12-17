<?php
    if(isset($_POST['request']) && $_POST['request'] == 'name_return'){
        //Base
        //die(json_encode(array('resultado'=>array('objeto_2'=>'Apex'))));

        //seleciona as notícias
        $noticial = array('Título'=>array('Notícia 1', 'Notícia 2'),'Conteúdo'=>array('Conteúdo 1', 'Conteúdo 2'));
        die(json_encode($noticial));
    }
?>