<?php
    //Validar CEP

    if(isset($_POST['acao'])){
        $cep = $_POST['cep'];
        $verifica = preg_match('/[0-9]{5}-[0-9]{3}$/', $cep);
        if($verifica){
            echo 'Sucesso!';
        }else{
            echo 'CEP Inválido!';
        }
    }
?>


<form method="post">
    <input placeholder="Insira um CEP!" type="text" name="cep">
    <input type="submit" name="acao" value="Enviar">

</form>
