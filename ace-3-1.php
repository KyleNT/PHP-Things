<?php 
    $pdo19 = new PDO('mysql:host=localhost;port=3307;dbname=touhou19','root','', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $pdo19->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql_A = $pdo19->prepare("SELECT * FROM `clientela`");
$sql_A->execute();
$clientol = $sql_A->fetchAll();
foreach ($clientol as $key => $value) {
    echo $value['nome'];
}

?>