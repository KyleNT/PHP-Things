<?php
require_once __DIR__ . '/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
$teixeirinha = '';

for($iba = 0; $iba<6; $iba++){
    $teixeirinha.= '<h3>Teixeirinha '.($iba+1969).'</h3>';
    $teixeirinha.= "<hr>";
}
//$mpdf->WriteHTML('<h1>Hello world!</h1>');
$mpdf->WriteHTML($teixeirinha);
$mpdf->Output();
?>
