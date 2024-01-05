<?php
    $token = $_GET['token'];

    ##SITE:
    ##http://localhost/ace9-sistemadesuporte/chamado?token=57cdb32f9c85a9a8c3d48d94700f12bf
?>
<h2>Visualizando chamado: <?php echo $_GET['token'] ?> </h2>

<hr>

<h3>Pergunta do suporte: <?php echo $white['pergunta']?></h3>

<?php

    $pullingInteracoes = \MySql::conectar()->prepare("SELECT * FROM interacao_chamado WHERE id_chamado = ?");
    echo '<hr>';

    $pullingInteracoes->execute(array($token));
    $pullingInteracoes = $pullingInteracoes->fetchAll();
    foreach ($pullingInteracoes as $key => $value){

        if($value['admina'] == 1){
            echo '<p><b>Admin: </b>'.$value['mensagem'].'</p>';
        } else {
            echo '<p><b>Você: </b>'.$value['mensagem'].'</p>';
        }
        echo '<hr>';
    }
?>

<?php
    if(isset($_POST['responder_chamado'])){
        $mensagem = $_POST['mensagem'];
        $sql = \MySql::conectar()->prepare("INSERT INTO interacao_chamado VALUES (null,?,?,?,0)");
        $sql->execute(array($token, $mensagem, -1));

        echo '<script>alert("Sua resposta foi enviada com sucesso, aguarde o admin responder</script>';
        echo '<script>location.href="'.BASED.'chamado?token='.$token.'"</script>';
        die();
    }

    $sql = \MySql::conectar()->prepare("SELECT * FROM interacao_chamado WHERE id_chamado = ? ORDER BY id DESC");
    $sql->execute(array($token));
    if($sql->rowCount() == 0){
        echo '<p> Aguarde até ter uma resposta do admin para continuar com o suporte </p>';
    } else {
        $chinfo = $sql->fetchAll();
        if($chinfo[0]['admina'] == -1){
            //Ultima interação foi quem abriu o suporte, não pode interagir até ter uma resposta
            echo '<p> Aguarde até ter uma resposta do admin para continuar com o suporte </p>';

        } else {
            echo '<form method="post">
            <textarea name="mensagem" placeholder="Sua resposta..."></textarea> <br />
            <input type="submit" name="responder_chamado" value="Enviar" />
            </form>';
        }
    }

?>