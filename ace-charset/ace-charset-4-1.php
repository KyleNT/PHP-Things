<?php

    session_start();
    $podol = new PDO('mysql:host=localhost;port=3307;dbname=testes','root','');


?>

<h2>Enquetes ativas</h2>
<hr>
<?php

    if(isset($_POST['acao'])){
        if(!isset($_COOKIE['voto'])){
            if(!isset($_POST['resposta_id'])){
                header('Location: ace-charset-4-1.php');
                die();
            }
            setcookie('voto','true',time()+20,'/');
            $resposta_id = $_POST['resposta_id'];
            $countRespostas = $podol->prepare('SELECT votos FROM enquete WHERE id = ?');
            $countRespostas->execute(array($resposta_id));

            $contagemAtual = $countRespostas->fetch()['votos'] + 1;
            $podol->exec("UPDATE enquete SET votos = $contagemAtual WHERE id = $resposta_id");

            echo '<h2>Sua votação foi computada com sucesso!</h2>';
        }else{
            echo '<h2>Você já votou!</h2>';
        }
    }

    $scqnq = $podol->prepare("SELECT * FROM pergunta_enquete");
    $scqnq->execute();
    $perguntas_enquete = $scqnq->fetchAll();

    foreach ($perguntas_enquete as $key => $value) {
        echo '<form method="post">';
        echo '<b>'.$value['pergunta'].'</b>';
        $scqnq2 = $podol->prepare("SELECT * FROM enquete WHERE enquete_id = $value[id]");
        $scqnq2->execute();
        $respostas = $scqnq2->fetchAll();
        echo '<br />';
        foreach ($respostas as $key2 => $resposta) {
            echo $resposta['respostas'] . '<input type="radio" name="resposta_id" value="'.$resposta['id'].'" />';
            echo '<br />';
        }
        echo '<br />';
        echo '<input type="submit" name="acao" value ="Enviar resposta" />';
        echo '</form>';
        echo '<hr>';
    }
?>
