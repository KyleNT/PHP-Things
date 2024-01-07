<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questionário</title>
</head>
<body>

<?php
    if(isset($_POST['acao'])){
        $respostas = array('20','Touhou_8','PHP');
        $pontuation = 0;
        $index = 0;
        foreach ($_POST as $key => $value) {
            if($key != 'acao'){
                if($respostas[$index] == $value){
                    $pontuation++;
                }
                $index++;
            }
        }
        echo '<h2>O seu resultado final foi: </h2>'.$pontuation.'/'.($index);
    }
?>

<form method="post">
    <p>Quantos anos você tem? </p>
    <span>20-30</span><input type="radio" name="pergunta1" value="20">
    <br/>
    <span>30-40</span><input type="radio" name="pergunta1" value="30">
    <br/>
    <span>40-50</span><input type="radio" name="pergunta1" value="40">
    <hr>
    <p>Qual seu Touhou? </p>
    <span>Touhou 8</span><input type="radio" name="pergunta2" value="Touhou_8">
    <br/>
    <span>Touhou 12</span><input type="radio" name="pergunta2" value="Touhou_12">
    <br/>
    <span>Touhou 18</span><input type="radio" name="pergunta2" value="Touhou_18">
    <hr>
    <p>Qual sua linguagem de programação? </p>
    <span>PHP</span><input type="radio" name="pergunta3" value="PHP">
    <br/>
    <span>Java</span><input type="radio" name="pergunta3" value="Java">
    <br/>
    <span>C++</span><input type="radio" name="pergunta3" value="C++">
    <hr>
    <input type="submit" name="acao" value="Enviar!">
</form>
</body>
</html>