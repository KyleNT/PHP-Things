<?php
    $valor = $_GET['valor'];
    $sinal = $_GET['sinal'];
    //$valor2 = $_GET['valor2'];
    $resultado = 0;

    if($sinal == 'mais'){
        foreach ($valor as $k => $v) {
        $resultado+=$v;
        }
    } else if ($sinal == 'menos'){
        foreach ($valor as $k => $v) {
            $resultado-=$v;
            }
    } else if($sinal == 'vezes'){
        foreach ($valor as $k => $v) {
            $resultado*=$v;
            }
    } else if($sinal == 'dividir'){
        foreach ($valor as $k => $v) {
            $resultado/=$v;
            }
    }

    echo $resultado;
?>
