<?php
//Validar Teçefone

if(isset($_POST['acao'])){
    $telefone = $_POST['telefone'];
    $verifica = preg_match('/^(\([0-9]{2}\)|)[0-9]{5}-[0-9]{4}$/', $telefone);
    if($verifica){
        echo 'Sucesso!';
    }else{
        echo 'Telefone Inválido!';
    }
}
?>


<form method="post">
<input placeholder="Insira o telefone!" type="text" name="telefone">
<input type="submit" name="acao" value="Enviar">

</form>
