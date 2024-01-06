<?php
    require 'vendor/autoload.php';

    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
    
    /*
    $spreadsheet = new Spreadsheet();
    $activeWorksheet = $spreadsheet->getActiveSheet();
    $activeWorksheet->setCellValue('A1', 'PS5');
    $activeWorksheet->setCellValue('A2', 'PS4');
    
    $writer = new Xlsx($spreadsheet);
    $writer->save('hello world.xlsx');
    */
    $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load('hello world.xlsx');

    $worksheet = $spreadsheet->getActiveSheet();

    echo $worksheet->getCell('A1');
    echo '<br />';
    echo $worksheet->getCell('A2');
    echo '<br />';
$worksheet->getCell('B1')->setValue('XBOX SERIES X, 2024');
    //echo '<br />';
    echo $worksheet->getCell('B1');
    

?>