<?php
if (isset($_POST['id_membro'])) {
    $pdo = new PDO('mysql:host=127.0.0.1:3307;dbname=bootstrap_projeto', 'root', '');
    $sql = $pdo->prepare("DELETE FROM `tb_equipe` WHERE id = ?");
    $sql->execute(array($_POST['id_membro']));
    #alter table tb_equipe AUTO_INCREMENT = 1
}
?>