<?php
    session_start();
    $_SESSION['perguntas'][] = "Quanto custa o curso?";
    $_SESSION['perguntas'][] = "Posso parcelar?";

    $_SESSION['respostas'][] = "R$ 200,00";
    $_SESSION['respostas'][] = "Sim";

    if(isset($_POST['thiago'])){
        $pergunta = $_POST['pergunta'];
        foreach($_SESSION['perguntas'] as $key => $value){
            $pergunta = str_replace('?','', $pergunta);
            $pergunta = str_replace(' ','', $value);
            $value = str_replace(' ','', $value);
            $testar = preg_match('/'.$pergunta.'/i',$value);
            if($testar == true){
                $resposta = $_SESSION['respostas'][$key];
                break;
            }
        }
    } else if(isset($_POST['cadastrar_resposta'])){
        $_SESSION['perguntas'][] = $_POST['pergunta'];
        $_SESSION['respostas'][] = $_POST['resposta'];
        echo '<script>alert("Obrigado, você me ajudou aprender um pouco mais!") </script>';
    }
?>

<form method="post">
    <h2>Realize sua pergunta</h2>
    <input type="text" name="pergunta" />
    <input type="submit" name="thiago" value="Enviar!" />
    <?php
    if(isset($resposta)){
        echo '<h2>Sua resposta com base na pergunta, provavelmente é: </h2>'.$resposta;
    } else if(isset($_POST['thiago'])){
        echo '<h2>Ops, nosso robô não entendeu sua pergunta. </h2>';
        $criarResposta = true;
    }
    ?>
<form>

<?php
    if(isset($criarResposta) && isset($_POST['thiago'])){
?>
<form method="post">
    <h2>Tem alguma ideia da resposta, para ajudar o robô aprender?</h2>
    <input type="text" name="resposta" />
    <input type="hidden" name="pergunta" value="<?php echo $_POST['pergunta'] ?>" />
    <input type="submit" name="cadastrar_resposta" value="Enviar!" />

<form>
<?php
    }
    //session_destroy();
?>
