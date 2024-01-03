<?php
##AULA 0 - Introdução

##AULA 1 - Conexão Segura com BD
/*
try{
    $pds = new PDO('mysql:host=localhost;port=3307;dbname=touhou19','root','');
    //Modo de desenvolvimento
    $pds->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //Modod de produção, botar nada
}catch(Exception $e){
    //echo $e->getMessage();
    echo 'Yuuka Error 1: Não foi possível conectar, tente novamente mais tarde';
}
*/
##AULA 2 - SQL Injection
/*
try{
    $pds = new PDO('mysql:host=localhost;port=3307;dbname=klein','root','');
    //Modo de desenvolvimento
    $pds->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //Modod de produção, botar nada
}catch(Exception $e){
    //echo $e->getMessage();
    echo 'Yuuka Error 1: Não foi possível conectar, tente novamente mais tarde';
}
//SQL Injection 
if(isset($_POST['login'])){
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    try{
        $sql = $pds->prepare("SELECT * FROM `usuarios` WHERE logina = ? AND senha = ?");
        $sql->execute(array($login, $senha));
        if($sql->rowCount() == 1){
            echo 'Logado!';
        } else {
            echo 'Yuuka Alert 1: Erro no Login';
        }
    }catch(Exception $e){
        echo 'Yuuka Error 2: Erro na preparação do SQL';
    }
}*/

##AULA 3 - Protegendo Diretórios
//Tudo no .htacess
/*
#ace-charset-2.php, Aula 3
RewriteEngine On
#A linha de código abaixo protege os diretórios
Options -Indexes
 */

 ##AULA 4 - Criptografia na Prática
 /*
 $login = 'hikarii';
 //MD5
 //$senha = md5('hikarii');
 //SHA1
 $senha = sha1('hikarii');

 
echo $senha;
 if(isset($_POST['login'])){
    //MD5
    //if($_POST['login'] == $login && md5($_POST['senha']) == $senha)
    //SHA1
    if($_POST['login'] == $login && sha1($_POST['senha']) == $senha){
        echo "Logado com sucesso";
    } else {
        echo "Yuuka Error 2: Falhou a comunicação";
    }
}
*/

##AULA 5 - Protegendo por Camadas
/*
$logan = true;
include('pages/home.php');
*/

##AULA 6 - Protegendo arquivos single
//Requisições ajax
session_start();
$_SESSION['login'] = true;


?>
<!--
<form method="post">
    <input type="text" name="login">
    <input type="password" name="senha">
    <input type="submit" name="acao" value="Enviar">
</form>
-->
