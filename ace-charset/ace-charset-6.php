<?php
include('lib/WideImage.php');

//WideImage::load('mmpp.PNG')->resize(50,30)->saveToFile('mmpp2.png');
//WideImage::load('mmpp.PNG')->crop('center','center',90,50)->output('png');
//WideImage::load('mmpp.PNG')->crop('center','center',90,50)->saveToFIle('imagem_recortada.png');

$image = WideImage::load('mmpp.png');
$canvas = $image->getCanvas();
$canvas->useFont('arial.ttf',16,$image->allocateColor(255,255,255));
$canvas->writeText('right - 1','bottom - 1','Mapa mundial');
$image->output('png');
?>
