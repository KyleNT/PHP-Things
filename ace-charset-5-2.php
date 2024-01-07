<?php
//Validar Teçefone

if(isset($_POST['acao'])){
    $nome = $_POST['nome'];
    $verifica = preg_match('/^[A-Z]{1}[a-z]{1,} [A-Z]{1}[a-z]{1,}$/', $nome);
    if($verifica){
        echo 'Sucesso!';
    }else{
        echo 'Nome Inválido!';
    }
}
?>


<form method="post">
<input placeholder="Insira um nome!" type="text" name="nome">
<input type="submit" name="acao" value="Enviar">

</form>